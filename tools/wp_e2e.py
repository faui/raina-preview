"""Live WordPress end-to-end QA for the Raina Nocturne theme.

Runs against a REAL WordPress install with this theme active (not a static preview).
Requirements: Python 3.10+, `pip install playwright beautifulsoup4 axe-playwright-python`, `python -m playwright install chromium`.

Environment:
  RAINA_BASE        Site URL (default http://127.0.0.1:8080). Use a local or password-protected staging site only.
  RAINA_WP_ROOT     WordPress root on this machine; enables launch-mode / approval / editor tests (flag files + WP-CLI).
  RAINA_PHP         PHP binary for WP-CLI (default: php)            RAINA_WPCLI  path to wp-cli.phar
  RAINA_QA_USER / RAINA_QA_PASS   Local TEST administrator, for admin-form persistence tests. Never a real account.
  RAINA_BOOKING_TEST_URL          A practice-supplied PatientViewer URL for the configured-booking state (else BLOCKED).
  RAINA_SHOTS       1 to write screenshots to docs/qa/screenshots/final/.

Every check is recorded as PASS / FAIL / BLOCKED in docs/qa/e2e-results.json. The script never submits patient data
and never completes an external booking; it only checks that the scheduling link responds.
"""
from __future__ import annotations
import json, os, re, subprocess, sys, time, urllib.error, urllib.request
from collections import Counter
from pathlib import Path
from bs4 import BeautifulSoup
from playwright.sync_api import sync_playwright

ROOT = Path(__file__).resolve().parents[1]
BASE = os.environ.get('RAINA_BASE', 'http://127.0.0.1:8080').rstrip('/')
WP_ROOT = Path(os.environ['RAINA_WP_ROOT']) if os.environ.get('RAINA_WP_ROOT') else None
PHP = os.environ.get('RAINA_PHP', 'php')
WPCLI = os.environ.get('RAINA_WPCLI', '')
SHOTS = os.environ.get('RAINA_SHOTS') == '1'
OUT = ROOT / 'docs' / 'qa'
SHOT_DIR = OUT / 'screenshots' / 'final'
OPTIONAL = ['massage', 'dermal-fillers', 'pain-management', 'sleep-apnea']
WIDTHS = [320, 360, 375, 390, 430, 768, 820, 1024, 1280, 1440, 1920]
results: list[dict] = []


def record(area, name, status, detail=''):
    results.append({'area': area, 'check': name, 'status': status, 'detail': str(detail)[:600]})
    mark = {'PASS': '  ok ', 'FAIL': 'FAIL ', 'BLOCKED': 'BLKD '}[status]
    print(f'{mark}[{area}] {name}' + (f' — {str(detail)[:200]}' if detail and status != 'PASS' else ''))


def check(area, name, condition, detail=''):
    record(area, name, 'PASS' if condition else 'FAIL', detail)
    return condition


def php_json(name):
    text = (ROOT / 'site' / 'data' / f'{name}.php').read_text(encoding='utf-8')
    return json.loads(re.search(r"<<<'RAINA_JSON'\n(.*)\nRAINA_JSON;", text, re.S).group(1))


class NoRedirect(urllib.request.HTTPRedirectHandler):
    def redirect_request(self, *args, **kwargs):
        return None


OPENER = urllib.request.build_opener(NoRedirect)


def http(path, method='GET', body=None, headers=None):
    url = path if path.startswith('http') else BASE + path
    req = urllib.request.Request(url, data=body, method=method, headers={'User-Agent': 'RainaQA/1.0', **(headers or {})})
    try:
        with OPENER.open(req, timeout=30) as r:
            return r.status, dict(r.headers), r.read().decode('utf-8', 'replace')
    except urllib.error.HTTPError as e:
        return e.code, dict(e.headers), e.read().decode('utf-8', 'replace')


def wp(*args):
    if not (WP_ROOT and WPCLI):
        raise RuntimeError('WP-CLI not configured')
    out = subprocess.run([PHP, WPCLI, f'--path={WP_ROOT}', *args], capture_output=True, text=True, timeout=120)
    if out.returncode:
        raise RuntimeError(out.stderr.strip()[:300])
    return out.stdout.strip()


def set_launch(on: bool):
    flag = WP_ROOT / 'raina-launch.flag'
    if on:
        flag.write_text('local QA launch-mode simulation')
    elif flag.exists():
        flag.unlink()
    time.sleep(.2)


def routes():
    return php_json('routes')


# ---------------------------------------------------------------- 1. Routes, metadata and links (staging mode)
def test_routes_and_metadata():
    titles, descs = Counter(), Counter()
    internal = set()
    for route in routes():
        status, headers, body = http(route)
        slug = route.strip('/').split('/')[-1]
        if slug in OPTIONAL:
            check('routes', f'{route} reachable on staging for review', status == 200, status)
            continue
        if not check('routes', f'{route} returns 200', status == 200, status):
            continue
        soup = BeautifulSoup(body, 'html.parser')
        h1s = soup.select('main h1')
        check('routes', f'{route} has exactly one H1', len(h1s) == 1, len(h1s))
        check('seo', f'{route} staging is noindex', bool(soup.select_one('meta[name=robots][content*=noindex]')))
        title = (soup.title.string or '').strip()
        desc = (soup.select_one('meta[name=description]') or {}).get('content', '')
        titles[title] += 1
        descs[desc] += 1
        check('seo', f'{route} title length 20–75', 20 <= len(title) <= 75, f'{len(title)}: {title}')
        check('seo', f'{route} meta description 70–170', 70 <= len(desc) <= 170, len(desc))
        text = soup.get_text(' ')
        bad = re.findall(r'(?i)\b(lorem|todo|demo chat|bolingbrook|tooth spa|pain-free|painless procedure|guaranteed)\b|editorial preview', text)
        check('content', f'{route} has no draft/forbidden phrases', not bad, bad)
        for a in soup.select('a[href]'):
            href = a['href']
            if href.startswith(BASE):
                internal.add(href.split('#')[0])
            elif href.startswith('http') and a.get('target') == '_blank':
                check('links', f'{route} external link rel noopener → {href[:60]}', 'noopener' in (a.get('rel') or []))
    check('seo', 'all page titles unique', all(v == 1 for v in titles.values()), [t for t, v in titles.items() if v > 1])
    check('seo', 'all meta descriptions unique', all(v == 1 for v in descs.values()), [t for t, v in descs.items() if v > 1])
    broken = []
    for url in sorted(internal):
        if any(x in url for x in ('/wp-content/', 'tel:', 'mailto:')):
            continue
        status, _, _ = http(url)
        if status != 200:
            broken.append(f'{url} {status}')
    check('links', f'internal link graph: {len(internal)} unique URLs resolve 200 without redirects', not broken, broken)


def test_redirects_and_404():
    redirects = php_json('redirects')
    failures = []
    for old, target in redirects.items():
        for variant in (f'/{old}/', f'/{old}'):
            status, headers, _ = http(variant)
            loc = headers.get('Location', '')
            if status != 301 or not loc.endswith(target):
                failures.append(f'{variant} → {status} {loc}')
                continue
            final, _, _ = http(loc)
            if final != 200 and target.strip('/').split('/')[-1] not in OPTIONAL:
                failures.append(f'{variant} → {loc} final {final}')
    check('redirects', f'{len(redirects)} legacy URLs (with/without trailing slash) 301 in one hop to a 200 page', not failures, failures[:8])
    for path in ['/category/blog/', '/category/news/page/2/', '/tag/holistic/', '/2021/08/']:
        status, headers, _ = http(path)
        check('redirects', f'archive pattern {path} → 301 journal/approach', status == 301 and re.search(r'/(journal|care/approach)/$', headers.get('Location', '')), f"{status} {headers.get('Location')}")
    for path in ['/no-such-page/', '/care/no-such-treatment/', '/journal/no-such-article/', '/services/']:
        status, _, body = http(path)
        soup = BeautifulSoup(body, 'html.parser')
        check('404', f'{path} returns real 404 with branded page', status == 404 and soup.select_one('main h1') and 'find that page' in soup.select_one('main h1').get_text(), status)
    status, headers, _ = http('/website-editor/')
    check('admin', '/website-editor/ requires login', status == 302 and 'wp-login.php' in headers.get('Location', ''), status)
    status, _, _ = http('/raina-sitemap.xml')
    check('seo', 'sitemap hidden (404) in staging mode', status == 404, status)


# ---------------------------------------------------------------- 2. Gating, launch mode, approvals (WordPress state)
def sitemap_paths():
    status, _, body = http('/raina-sitemap.xml')
    return status, [re.sub(r'^https?://[^/]+', '', u) for u in re.findall(r'<loc>(.*?)</loc>', body)]


def test_launch_and_gates():
    if not (WP_ROOT and WPCLI):
        record('gating', 'launch-mode, approvals and editor tests', 'BLOCKED', 'RAINA_WP_ROOT/RAINA_WPCLI not set')
        return
    wp('option', 'update', 'blog_public', '1')
    wp('option', 'update', 'raina_approved_optional_services', '[]', '--format=json')
    wp('option', 'update', 'raina_journal_approved', '0')
    wp('option', 'update', 'raina_reviews_approved', '0')
    set_launch(True)
    try:
        for slug in OPTIONAL:
            status, _, _ = http(f'/care/{slug}/')
            check('gating', f'launch: unapproved /care/{slug}/ returns 404', status == 404, status)
        promoting = []
        for route in ['/', '/care/', '/care/additional/', '/care/sedation/', '/care/emergency/', '/care/team/']:
            _, _, body = http(route)
            for slug in OPTIONAL:
                if f'/care/{slug}/' in body:
                    promoting.append(f'{route} links {slug}')
        check('gating', 'launch: no page links an unapproved optional service', not promoting, promoting)
        _, _, body = http('/care/additional/')
        check('gating', 'launch: additional-care hub hides optional block when none approved', 'optional-title' not in body)
        status, paths = sitemap_paths()
        check('seo', 'launch: sitemap returns 200 XML', status == 200, status)
        check('seo', 'launch: sitemap excludes optional services and journal', not any(p.strip('/').split('/')[-1] in OPTIONAL or p.startswith('/journal') for p in paths), paths)
        check('seo', 'launch: sitemap excludes retired acupuncture/updates', not any(x in p for p in paths for x in ('acupuncture', 'updates')))
        sitemap_bad = [p for p in paths if http(p)[0] != 200]
        check('seo', f'launch: all {len(paths)} sitemap URLs return 200', not sitemap_bad, sitemap_bad)
        status, _, robots = http('/robots.txt')
        check('seo', 'launch: robots.txt lists theme sitemap', 'raina-sitemap.xml' in robots, robots[-200:])
        status, _, _ = http('/wp-sitemap.xml')
        check('seo', 'core wp-sitemap disabled (single truthful sitemap)', status == 404, status)
        _, _, home = http('/')
        soup = BeautifulSoup(home, 'html.parser')
        canon = soup.select_one('link[rel=canonical]')
        check('seo', 'launch: canonical present on home', canon is not None and canon['href'] == BASE + '/', canon)
        check('seo', 'launch: noindex removed', soup.select_one('meta[name=robots]') is None)
        _, _, implants = http('/care/implants/')
        canon = BeautifulSoup(implants, 'html.parser').select_one('link[rel=canonical]')
        check('seo', 'launch: canonical on /care/implants/ is self-referencing', canon is not None and canon['href'] == BASE + '/care/implants/', canon)
        status, _, _ = http('/journal/')
        check('journal', 'launch: unapproved journal returns 404', status == 404, status)
        check('journal', 'launch: journal links removed from home', '/journal/' not in home)
        status, headers, _ = http('/category/blog/')
        check('redirects', 'launch: archive redirect falls back to /care/approach/ while journal hidden', headers.get('Location', '').endswith('/care/approach/'), headers.get('Location'))
        _, _, stories = http('/care/patient-stories/')
        check('reviews', 'launch: review excerpts hidden until approved', '<blockquote' not in stories and 'Read all reviews on Google' in stories)
        check('reviews', 'launch: homepage review excerpts hidden until approved', '<blockquote' not in home)
        # Approvals
        wp('option', 'update', 'raina_journal_approved', '1')
        wp('option', 'update', 'raina_reviews_approved', '1')
        wp('option', 'update', 'raina_approved_optional_services', '["massage"]', '--format=json')
        status, _, journal = http('/journal/')
        check('journal', 'launch: approved journal returns 200 without staging note', status == 200 and 'Staging only' not in journal, status)
        _, paths = sitemap_paths()
        check('seo', 'launch: approved journal + massage appear in sitemap', '/journal/' in paths and '/care/massage/' in paths, paths[-8:])
        check('gating', 'launch: approved massage page returns 200', http('/care/massage/')[0] == 200)
        _, _, hub = http('/care/additional/')
        check('gating', 'launch: approved massage appears on hub; others still hidden', '/care/massage/' in hub and '/care/dermal-fillers/' not in hub)
        _, _, stories = http('/care/patient-stories/')
        check('reviews', 'launch: approved reviews visible without staging note', '<blockquote' in stories and 'Staging only' not in stories)
    finally:
        wp('option', 'update', 'raina_approved_optional_services', '[]', '--format=json')
        wp('option', 'update', 'raina_journal_approved', '0')
        wp('option', 'update', 'raina_reviews_approved', '0')
        set_launch(False)


def test_editor_overrides():
    if not (WP_ROOT and WPCLI):
        record('editor', 'service override / date windows', 'BLOCKED', 'WP-CLI not configured')
        return
    created = []
    try:
        pid = wp('post', 'create', '--post_type=raina_listing', '--post_status=publish', '--post_title=Dental implants (QA override)',
                 '--post_excerpt=QA override lead for implants.', '--post_content=QA override body copy.', '--porcelain')
        created.append(pid)
        wp('post', 'meta', 'update', pid, 'raina_original', 'implants')
        _, _, body = http('/care/implants/')
        soup = BeautifulSoup(body, 'html.parser')
        check('editor', 'override replaces H1, lead and intro on /care/implants/', soup.select_one('main h1').get_text() == 'Dental implants (QA override)' and 'QA override body copy.' in body)
        check('editor', 'override keeps rest of treatment page (FAQ, comparison)', bool(soup.select('.faq-stack details')) and bool(soup.select('.compare-table')))
        wp('post', 'meta', 'update', pid, 'raina_end', '2001-01-01')
        status, _, _ = http('/care/implants/')
        check('editor', 'expired service window returns 404', status == 404, status)
        _, _, directory = http('/care/')
        check('editor', 'expired service removed from directory', '/care/implants/' not in directory)
        wp('post', 'meta', 'update', pid, 'raina_end', '')
        wp('post', 'meta', 'update', pid, 'raina_start', '2099-01-01')
        check('editor', 'future start date hides service (404)', http('/care/implants/')[0] == 404)
        wp('post', 'meta', 'update', pid, 'raina_start', '')
        wp('post', 'meta', 'update', pid, 'raina_hide', '1')
        check('editor', '"Hide this service" returns 404', http('/care/implants/')[0] == 404)
        new = wp('post', 'create', '--post_type=raina_listing', '--post_status=publish', '--post_title=QA seasonal offer', '--post_name=qa-offer',
                 '--post_excerpt=A QA-only seasonal listing.', '--porcelain')
        created.append(new)
        wp('post', 'meta', 'update', new, 'raina_feature', '1')
        _, _, directory = http('/care/')
        check('editor', 'new editor-created listing appears in directory', '/care/listing-qa-offer/' in directory)
        check('editor', 'new editor-created listing page renders 200', http('/care/listing-qa-offer/')[0] == 200)
        _, _, home = http('/')
        check('editor', 'featured listing appears on homepage', 'QA seasonal offer' in home)
    finally:
        for pid in created:
            wp('post', 'delete', pid, '--force')
    check('editor', 'implants restored after override removed', 'Dental implants (QA override)' not in http('/care/implants/')[2])


def test_assistant_endpoint():
    if not WP_ROOT:
        record('assistant', 'REST endpoint gating', 'BLOCKED', 'RAINA_WP_ROOT not set')
        return
    endpoint = '/?rest_route=/raina/v1/assistant'
    origin = {'Origin': BASE, 'Content-Type': 'application/json'}
    status, _, _ = http(endpoint, 'POST', b'{"topics":["hours"]}', origin)
    check('assistant', 'endpoint returns 503 when no server key configured (default)', status == 503, status)
    flag = WP_ROOT / 'wp-content' / 'raina-ai-stub.flag'
    log = WP_ROOT / 'wp-content' / 'raina-ai-stub.log'
    flag.write_text('qa')
    log.unlink(missing_ok=True)
    # Start from a clean cache so the provider path (not a cached answer) is exercised.
    wp('transient', 'delete', '--all')
    for name in wp('option', 'list', '--search=raina_answer_*', '--field=option_name').split():
        wp('option', 'delete', name)
    try:
        status, _, body = http(endpoint, 'POST', b'{"topics":["hours"]}', {'Origin': 'https://evil.example', 'Content-Type': 'application/json'})
        check('assistant', 'cross-origin request rejected (403)', status == 403, status)
        status, _, body = http(endpoint, 'POST', b'{"topics":["massage"]}', origin)
        check('assistant', 'unapproved optional topic refused (404)', status == 404, status)
        status, _, body = http(endpoint, 'POST', json.dumps({'topics': ['hours'], 'question': 'my name is Jane'}).encode(), origin)
        check('assistant', 'free-text fields rejected (400)', status == 400, status)
        status, _, body = http(endpoint, 'POST', b'{"topics":["hours"]}', origin)
        check('assistant', 'approved topic answered', status == 200 and 'answer' in body, body[:120])
        sent = log.read_text() if log.exists() else ''
        check('assistant', 'provider receives approved public facts only (no visitor text)', 'Office hours are Monday' in sent and 'Jane' not in sent, sent[:160])
    finally:
        flag.unlink(missing_ok=True)


# ---------------------------------------------------------------- 3. Browser: responsive, interaction, a11y, performance
def test_browser():
    from axe_playwright_python.sync_playwright import Axe
    axe = Axe()
    key_routes = ['/', '/care/', '/care/implants/', '/care/emergency/', '/care/smart/', '/care/team/', '/care/patient-stories/',
                  '/care/membership/', '/care/contact/', '/care/appointments/', '/care/payment/', '/journal/', '/care/fillings/']
    with sync_playwright() as p:
        browser = p.chromium.launch()
        # Overflow on every route at 390/1440, every width on key routes.
        overflow = []
        for route in routes():
            for width in (WIDTHS if route in key_routes else [390, 1440]):
                page = browser.new_page(viewport={'width': width, 'height': 844 if width < 600 else 900})
                errors = []
                page.on('pageerror', lambda e: errors.append(str(e)))
                page.on('console', lambda m: m.type == 'error' and errors.append(m.text))
                page.on('response', lambda r: r.status >= 400 and BASE in r.url and errors.append(f'{r.status} {r.url}'))
                status = page.goto(BASE + route, wait_until='networkidle').status
                sw = page.evaluate('document.documentElement.scrollWidth')
                if sw > width + 1:
                    overflow.append(f'{route}@{width}: {sw}')
                if errors and status == 200:
                    overflow.append(f'{route}@{width} errors: {errors[:2]}')
                page.close()
        check('responsive', 'no horizontal overflow / console errors / failed assets across route × viewport matrix', not overflow, overflow[:10])
        # 200% zoom equivalent: 1280px window at 200% = 640 CSS px.
        zoom_issues = []
        for route in key_routes:
            page = browser.new_page(viewport={'width': 640, 'height': 450}, device_scale_factor=2)
            page.goto(BASE + route, wait_until='networkidle')
            if page.evaluate('document.documentElement.scrollWidth') > 641:
                zoom_issues.append(route)
            page.close()
        check('a11y', '200% zoom (640 CSS px) reflows without horizontal scroll', not zoom_issues, zoom_issues)

        # Mobile menu
        page = browser.new_page(viewport={'width': 390, 'height': 844})
        page.goto(BASE + '/care/implants/', wait_until='networkidle')
        button = page.locator('.menu-button')
        check('menu', 'mobile header shows primary Schedule action', page.locator('.header-action').is_visible())
        button.click()
        check('menu', 'menu opens: aria-expanded=true and body scroll locked', button.get_attribute('aria-expanded') == 'true' and page.evaluate("document.body.classList.contains('menu-open') && getComputedStyle(document.body).overflow === 'hidden'"))
        check('menu', 'focus moves into the menu', page.evaluate("document.activeElement.closest('#site-nav') !== null"))
        for _ in range(25):
            page.keyboard.press('Tab')
        check('menu', 'Tab focus stays trapped in menu/button', page.evaluate("!!document.activeElement.closest('.header-inner')"))
        check('menu', 'drawer offers call and schedule actions', page.locator('.nav-drawer-actions a[href^="tel:"]').is_visible() and page.locator('.nav-drawer-actions a[href$="/care/appointments/"]').is_visible())
        page.keyboard.press('Escape')
        check('menu', 'Escape closes menu and returns focus to button', button.get_attribute('aria-expanded') == 'false' and page.evaluate("document.activeElement.classList.contains('menu-button')"))
        if SHOTS:
            button.click(); page.wait_for_timeout(150)
            page.screenshot(path=str(SHOT_DIR / 'state-mobile-menu-open-390.png'))
            page.keyboard.press('Escape')
        page.close()

        # Skip link + focus visibility
        page = browser.new_page(viewport={'width': 1440, 'height': 900})
        page.goto(BASE + '/', wait_until='networkidle')
        page.keyboard.press('Tab')
        check('a11y', 'first Tab reaches visible skip link', page.evaluate("document.activeElement.classList.contains('skip-link') && document.activeElement.getBoundingClientRect().top >= 0"))
        page.keyboard.press('Enter')
        check('a11y', 'skip link moves focus to main', page.evaluate("document.activeElement.id === 'main' || location.hash === '#main'"))
        page.keyboard.press('Tab')
        outline = page.evaluate("getComputedStyle(document.activeElement).outlineStyle")
        check('a11y', 'keyboard focus indicator visible', outline not in ('none', ''), outline)
        if SHOTS:
            page.goto(BASE + '/care/', wait_until='networkidle')
            for _ in range(9):
                page.keyboard.press('Tab')
            page.screenshot(path=str(SHOT_DIR / 'state-focus-visible-1440.png'))
        page.close()

        # Directory search
        page = browser.new_page(viewport={'width': 390, 'height': 844})
        page.goto(BASE + '/care/', wait_until='networkidle')
        expectations = {'implant': '/care/implants/', 'cleaning': '/care/exams/', 'invisalign': '/care/aligners/', 'mercury': '/care/smart/',
                        'extraction': '/care/extractions/', 'kids': '/care/pediatric/', 'emergency': '/care/emergency/', 'gum': '/care/periodontal/',
                        'mercury removal': '/care/smart/', 'fillings': '/care/fillings/', 'Implants': '/care/implants/'}
        search_fail = []
        for query, href in expectations.items():
            page.fill('#directory-search', query)
            visible = page.eval_on_selector_all('.treatment-item:not([hidden])', 'els => els.map(e => e.getAttribute("href"))')
            if not any(v.endswith(href) for v in visible):
                search_fail.append(f'{query} → {visible[:4]}')
        check('search', f'{len(expectations)} spec queries return the expected treatment', not search_fail, search_fail)
        page.fill('#directory-search', 'sleep')
        hidden_sleep = page.locator('.treatment-item:not([hidden])').count()
        check('search', '"sleep" returns no unapproved sleep-apnea listing (gated by design)', hidden_sleep == 0 or all('sleep-apnea' not in h for h in page.eval_on_selector_all('.treatment-item:not([hidden])', 'e=>e.map(x=>x.href)')))
        page.fill('#directory-search', 'zzqx')
        page.wait_for_timeout(450)
        check('search', 'no-results shows empty state with suggestions + live status', page.locator('#directory-empty').is_visible() and '0 treatments' in page.text_content('#directory-results'))
        if SHOTS:
            page.locator('.directory-toolbar').scroll_into_view_if_needed()
            page.evaluate('scrollBy(0, 120)')
            page.screenshot(path=str(SHOT_DIR / 'state-search-no-results-390.png'))
        page.locator('[data-directory-query="implant"]').click()
        check('search', 'empty-state suggestion chip re-runs search', page.locator('.treatment-item:not([hidden])').count() >= 1)
        page.press('#directory-search', 'Escape')
        check('search', 'Escape clears search and restores full list', page.input_value('#directory-search') == '' and page.locator('.treatment-item:not([hidden])').count() > 20)
        page.goto(BASE + '/care/?q=kids', wait_until='networkidle')
        check('search', 'homepage search deep link /care/?q=kids filters directory', page.input_value('#directory-search') == 'kids' and page.locator('.treatment-item:not([hidden])').count() >= 1)
        if SHOTS:
            page.fill('#directory-search', 'implant'); page.wait_for_timeout(450)
            page.locator('.directory-toolbar').scroll_into_view_if_needed()
            page.evaluate('scrollBy(0, 120)')
            page.screenshot(path=str(SHOT_DIR / 'state-search-results-390.png'))
        page.close()

        # FAQ disclosure
        page = browser.new_page(viewport={'width': 1440, 'height': 900})
        page.goto(BASE + '/care/implants/', wait_until='networkidle')
        first = page.locator('.faq-stack details').first
        first.locator('summary').focus()
        page.keyboard.press('Enter')
        check('faq', 'FAQ opens with keyboard (Enter on summary)', first.get_attribute('open') is not None)
        page.keyboard.press('Enter')
        check('faq', 'FAQ closes with keyboard', first.get_attribute('open') is None)
        n = page.locator('.faq-stack details').count()
        check('content', '/care/implants/ has 4+ substantive FAQs', n >= 4, n)
        if SHOTS:
            first.locator('summary').click()
            first.scroll_into_view_if_needed()
            page.screenshot(path=str(SHOT_DIR / 'state-faq-open-1440.png'))
        page.close()

        # Assistant dialog
        page = browser.new_page(viewport={'width': 390, 'height': 844})
        page.goto(BASE + '/care/exams/', wait_until='networkidle')
        launcher = page.locator('.chat-launch')
        header_cta = page.locator('.header-action').bounding_box()
        lb = launcher.bounding_box()
        check('assistant', 'launcher does not overlap header Schedule action', lb['y'] > header_cta['y'] + header_cta['height'])
        launcher.click()
        check('assistant', 'dialog opens modal with focus inside', page.evaluate("document.querySelector('#chat-dialog').open && document.activeElement.closest('#chat-dialog') !== null"))
        page.fill('#chat-input', 'What are your office hours?')
        page.press('#chat-input', 'Enter')
        page.wait_for_timeout(600)
        check('assistant', 'hours question answered from approved facts', 'Monday noon to 6 pm' in page.text_content('#chat-messages'))
        page.fill('#chat-input', 'my tooth hurts and my face is swollen')
        page.press('#chat-input', 'Enter')
        page.wait_for_timeout(300)
        check('assistant', 'urgent symptoms redirected to phone/911, no advice', '911' in page.text_content('#chat-messages'))
        page.fill('#chat-input', 'my name is Jane Doe, call me at 630-555-0100')
        page.press('#chat-input', 'Enter')
        page.wait_for_timeout(300)
        text = page.text_content('#chat-messages')
        check('assistant', 'personal details are not echoed back', 'Jane Doe' not in text and 'Personal details hidden' in text)
        check('assistant', 'visible human handoff in dialog', page.locator('.chat-privacy a[href^="tel:"]').is_visible())
        if SHOTS:
            page.screenshot(path=str(SHOT_DIR / 'state-assistant-open-390.png'))
        page.keyboard.press('Escape')
        page.wait_for_timeout(150)
        check('assistant', 'Escape closes dialog and returns focus to launcher', not page.evaluate("document.querySelector('#chat-dialog').open") and page.evaluate("document.activeElement.classList.contains('chat-launch')"))
        page.close()

        # Booking fallback (default state)
        page = browser.new_page(viewport={'width': 390, 'height': 844})
        page.goto(BASE + '/care/appointments/', wait_until='networkidle')
        check('booking', 'no scheduler configured → honest "Call to schedule" with tel link', page.locator('[data-booking-fallback] a[href="tel:+16303814021"]').first.is_visible() and page.locator('[data-booking-online]').count() == 0)
        check('booking', 'no page claims "Book online" while unconfigured', 'Book online' not in page.content())
        if SHOTS:
            page.screenshot(path=str(SHOT_DIR / 'state-booking-fallback-390.png'), full_page=True)
        page.close()

        # Reduced motion: content visible immediately, no running animations.
        page = browser.new_page(viewport={'width': 1440, 'height': 900}, reduced_motion='reduce')
        page.goto(BASE + '/', wait_until='networkidle')
        anim = page.evaluate("document.getAnimations().filter(a => a.playState === 'running').length")
        check('a11y', 'prefers-reduced-motion: no running animations', anim == 0, anim)
        page.close()

        # Tap targets on mobile (WCAG 2.2 2.5.8 minimum 24px; aim 44px for primary controls).
        small = []
        page = browser.new_page(viewport={'width': 390, 'height': 844})
        for route in ['/', '/care/', '/care/implants/', '/care/appointments/', '/care/contact/']:
            page.goto(BASE + route, wait_until='networkidle')
            small += page.evaluate("""() => [...document.querySelectorAll('a[href],button,summary,input')].filter(e => {
                const r = e.getBoundingClientRect(); const st = getComputedStyle(e);
                if (!r.width || st.visibility === 'hidden' || e.closest('dialog:not([open])') || e.closest('nav#site-nav:not(.is-open)') || e.closest('.breadcrumb') || e.closest('p,li,dd,small,figcaption') && st.display === 'inline') return false;
                return r.height < 24 || r.width < 24; }).map(e => location.pathname + ' ' + e.tagName + ' ' + (e.textContent || e.name).trim().slice(0, 30))""")
        page.close()
        check('a11y', 'interactive targets ≥24×24 CSS px on mobile (WCAG 2.5.8)', not small, small[:8])

        # axe-core
        serious = []
        for route in key_routes + ['/care/privacy/', '/care/approach/', '/nonexistent-page/']:
            for width in (390, 1440):
                page = browser.new_page(viewport={'width': width, 'height': 900})
                page.goto(BASE + route, wait_until='networkidle')
                res = axe.run(page)
                for v in res.response['violations']:
                    if v['impact'] in ('serious', 'critical'):
                        serious.append(f"{route}@{width} {v['id']} ({len(v['nodes'])}): {v['nodes'][0]['target']}")
                page.close()
        check('a11y', 'axe-core: zero serious/critical violations on key templates (390 + 1440)', not serious, serious[:12])

        # Performance (lab, local server — indicative only)
        perf = []
        for route in ['/', '/care/', '/care/implants/', '/care/appointments/', '/journal/']:
            page = browser.new_page(viewport={'width': 390, 'height': 844})
            page.add_init_script("""window.__cls=0;new PerformanceObserver(l=>{for(const e of l.getEntries()){if(!e.hadRecentInput)window.__cls+=e.value}}).observe({type:'layout-shift',buffered:true});
              window.__lcp=0;new PerformanceObserver(l=>{const e=l.getEntries();window.__lcp=e[e.length-1].startTime}).observe({type:'largest-contentful-paint',buffered:true});""")
            page.goto(BASE + route, wait_until='networkidle')
            page.wait_for_timeout(500)
            m = page.evaluate("""() => ({lcp: Math.round(window.__lcp), cls: +window.__cls.toFixed(3),
                bytes: performance.getEntriesByType('resource').reduce((s, r) => s + (r.transferSize || 0), 0) + (performance.getEntriesByType('navigation')[0].transferSize || 0),
                requests: performance.getEntriesByType('resource').length + 1, thirdParty: performance.getEntriesByType('resource').filter(r => !r.name.startsWith(location.origin)).map(r => r.name)})""")
            perf.append({'route': route, **m})
            page.close()
        record('performance', 'lab metrics (local PHP server, mobile viewport)', 'PASS' if all(p['cls'] <= .1 and not p['thirdParty'] for p in perf) else 'FAIL', json.dumps(perf))
        check('privacy', 'no third-party requests (analytics/trackers/fonts) on key pages', all(not p['thirdParty'] for p in perf))
        browser.close()


def test_cookies_and_secrets():
    status, headers, body = http('/')
    check('privacy', 'public pages set no cookies', not any(k.lower() == 'set-cookie' for k in headers), [k for k in headers if k.lower() == 'set-cookie'])
    leaks = []
    for path in ROOT.rglob('*'):
        if path.is_file() and path.suffix in ('.php', '.js', '.json', '.css', '.md', '.txt') and 'qa' not in path.parts:
            text = path.read_text(encoding='utf-8', errors='ignore')
            if re.search(r'(?<![A-Za-z])sk-(?:proj-)?[A-Za-z0-9]{32,}|AKIA[0-9A-Z]{16}|-----BEGIN [A-Z ]*PRIVATE KEY', text):
                leaks.append(str(path.relative_to(ROOT)))
    check('security', 'no API keys / private keys committed in theme', not leaks, leaks)


def test_booking_configured():
    url = os.environ.get('RAINA_BOOKING_TEST_URL')
    user, password = os.environ.get('RAINA_QA_USER'), os.environ.get('RAINA_QA_PASS')
    if not (user and password and WP_ROOT):
        record('booking', 'admin settings persistence + configured scheduler', 'BLOCKED', 'no local QA admin credentials supplied')
        return
    with sync_playwright() as p:
        browser = p.chromium.launch()
        page = browser.new_page(viewport={'width': 1280, 'height': 900})
        page.goto(BASE + '/wp-login.php', wait_until='networkidle')
        page.fill('#user_login', user)
        page.fill('#user_pass', password)
        page.click('#wp-submit')
        page.wait_for_load_state('networkidle')
        page.goto(BASE + '/wp-admin/admin.php?page=raina-website', wait_until='networkidle')
        check('admin', 'Raina Website settings screen loads for administrator', page.locator('#raina_booking').count() == 1)
        # Optional services: tick two, save, then clear all and confirm the cleared state persists.
        for value in ('massage', 'sleep-apnea'):
            page.check(f'input[name="raina_approved_optional_services[]"][value="{value}"]')
        page.click('#submit'); page.wait_for_load_state('networkidle')
        saved = json.loads(wp('option', 'get', 'raina_approved_optional_services', '--format=json'))
        check('admin', 'optional-service approvals save from admin form', sorted(saved) == ['massage', 'sleep-apnea'], saved)
        for value in ('massage', 'sleep-apnea'):
            page.uncheck(f'input[name="raina_approved_optional_services[]"][value="{value}"]')
        page.click('#submit'); page.wait_for_load_state('networkidle')
        saved = json.loads(wp('option', 'get', 'raina_approved_optional_services', '--format=json'))
        check('admin', 'clearing every optional-service checkbox persists (empty list)', saved == [], saved)
        # Booking URL validation
        page.fill('#raina_booking', 'https://example.com/fake-scheduler')
        page.click('#submit'); page.wait_for_load_state('networkidle')
        check('booking', 'non-PatientViewer URL rejected with an error', 'Enter a complete HTTPS PatientViewer link' in page.content() and wp('option', 'get', 'raina_booking') == '')
        if not url:
            record('booking', 'configured PatientViewer state', 'BLOCKED', 'no practice-supplied scheduling URL provided (RAINA_BOOKING_TEST_URL)')
        else:
            page.fill('#raina_booking', url)
            page.click('#submit'); page.wait_for_load_state('networkidle')
            check('booking', 'PatientViewer HTTPS URL accepted and saved', wp('option', 'get', 'raina_booking').startswith('https://'))
            for width in (390, 1440):
                p2 = browser.new_page(viewport={'width': width, 'height': 900})
                p2.goto(BASE + '/care/appointments/', wait_until='networkidle')
                link = p2.locator('[data-booking-online] a.button')
                ok = link.count() == 1 and link.get_attribute('target') == '_blank' and 'noopener' in link.get_attribute('rel') and p2.locator('[data-booking-fallback]').count() == 0
                check('booking', f'configured: online scheduling button primary, opens new tab safely @{width}', ok)
                if SHOTS:
                    p2.screenshot(path=str(SHOT_DIR / f'state-booking-online-{width}.png'), full_page=True)
                p2.close()
            status, _, _ = http(url)
            check('booking', 'configured scheduling URL responds (GET only, nothing submitted)', status in (200, 301, 302), status)
            wp('option', 'update', 'raina_booking', '')
        page.close()
        browser.close()


def test_screenshots():
    if not SHOTS:
        return
    shots = ['/', '/care/', '/care/implants/', '/care/emergency/', '/care/smart/', '/care/crowns/', '/care/team/', '/care/patient-stories/',
             '/care/membership/', '/care/contact/', '/care/appointments/', '/care/payment/', '/journal/', '/no-such-page/']
    with sync_playwright() as p:
        browser = p.chromium.launch()
        for route in shots:
            for width in (390, 1440):
                page = browser.new_page(viewport={'width': width, 'height': 844 if width < 600 else 900}, reduced_motion='reduce')
                page.goto(BASE + route, wait_until='networkidle')
                page.evaluate('async () => { for (let y = 0; y < document.body.scrollHeight; y += 700) { scrollTo(0, y); await new Promise(r => setTimeout(r, 30)); } scrollTo(0, 0); }')
                page.wait_for_load_state('networkidle')
                name = (route.strip('/').replace('/', '-') or 'home')
                page.screenshot(path=str(SHOT_DIR / f'{name}-{width}.png'), full_page=True)
                page.close()
        browser.close()
    record('evidence', 'full-page screenshots written', 'PASS', str(SHOT_DIR.relative_to(ROOT)))


if __name__ == '__main__':
    OUT.mkdir(parents=True, exist_ok=True)
    if SHOTS:
        SHOT_DIR.mkdir(parents=True, exist_ok=True)
    started = time.strftime('%Y-%m-%d %H:%M:%S')
    for test in (test_routes_and_metadata, test_redirects_and_404, test_launch_and_gates, test_editor_overrides,
                 test_assistant_endpoint, test_cookies_and_secrets, test_browser, test_booking_configured, test_screenshots):
        try:
            test()
        except Exception as exc:  # A crashed group is a failure, never a silent pass.
            record(test.__name__, 'test group crashed', 'FAIL', repr(exc))
    totals = Counter(r['status'] for r in results)
    (OUT / 'e2e-results.json').write_text(json.dumps({'base': BASE, 'started': started, 'totals': totals, 'results': results}, indent=2), encoding='utf-8')
    print(f"\n{totals.get('PASS', 0)} PASS · {totals.get('FAIL', 0)} FAIL · {totals.get('BLOCKED', 0)} BLOCKED")
    sys.exit(1 if totals.get('FAIL') else 0)
