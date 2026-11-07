"""Local rendered-template smoke (not a WordPress integration test).
Requires Python, PHP CLI, beautifulsoup4, playwright; Chromium must be installed.
Run from theme root: python tools/visual_smoke.py
"""
from pathlib import Path
from playwright.sync_api import sync_playwright
from bs4 import BeautifulSoup
import subprocess,base64,mimetypes,json,sys,os
PHP=os.environ.get('RAINA_PHP','php')

ROOT=Path(__file__).resolve().parents[1]
SITE=ROOT/'site'
OUTPUT=ROOT/'docs'/'qa-previews';OUTPUT.mkdir(parents=True,exist_ok=True)
CSS=(SITE/'style.css').read_text(encoding='utf-8')
for f in ['manrope.woff2','source-serif.woff2','source-serif-italic.woff2']:
    CSS=CSS.replace('url(assets/'+f+')','url(data:font/woff2;base64,'+base64.b64encode((SITE/'assets'/f).read_bytes()).decode()+')')
JS=(SITE/'script.js').read_text(encoding='utf-8')

def inline(slug):
    path=SITE/slug/'index.php' if slug else SITE/'index.php'
    rendered=subprocess.check_output([PHP,'-r',"define('ABSPATH', '/'); include "+json.dumps(str(path))+';'],text=True,encoding='utf-8')
    soup=BeautifulSoup(rendered,'html.parser')
    style=soup.new_tag('style');style.string=CSS
    old=soup.find('link',rel='stylesheet')
    if old:old.replace_with(style)
    for item in soup.find_all('img'):
        p=SITE/item.get('src','').lstrip('/')
        if p.is_file():
            mime=mimetypes.guess_type(p)[0] or 'application/octet-stream'
            item['src']='data:'+mime+';base64,'+base64.b64encode(p.read_bytes()).decode()
    for script in soup.select('script[src="/script.js"]'):
        script.extract(); script.attrs.pop('src',None);script.attrs.pop('defer',None);script.string=JS;soup.body.append(script)
    return str(soup)

slugs=['','care','care/implants','care/appointments','care/team','care/membership','care/contact']
widths=[320,360,375,390,430,768,1024,1440,1920]
failures=[];count=0
with sync_playwright() as pw:
    kwargs={'headless':True,'args':['--no-sandbox']}
    if sys.platform.startswith('linux') and Path('/usr/bin/chromium').exists():kwargs['executable_path']='/usr/bin/chromium'
    browser=pw.chromium.launch(**kwargs)
    for slug in slugs:
        html=inline(slug)
        for w in widths:
            page=browser.new_page(viewport={'width':w,'height':850})
            failures_here=[]
            page.on('pageerror',lambda e:failures_here.append(str(e)))
            page.set_content(html,wait_until='domcontentloaded')
            metrics=page.evaluate('({vw:innerWidth,sw:document.documentElement.scrollWidth,main:!!document.querySelector("main h1")})')
            if metrics['sw']>metrics['vw']+1 or not metrics['main'] or failures_here:
                failures.append(f'{slug or "home"} {w}px: {metrics} / {failures_here}')
            if slug in ['', 'care', 'care/implants', 'care/appointments', 'care/team'] and w in [390,1440]:
                name=(slug or 'home').replace('/','-')
                page.screenshot(path=str(OUTPUT/f'{name}-{w}.png'))
            if w==390:
                page.locator('.menu-button').click()
                if page.locator('.menu-button').get_attribute('aria-expanded')!='true':failures.append(f'{slug}: menu failed')
            if slug=='care' and w==390:
                page.locator('#directory-search').fill('mercury')
                if page.locator('.treatment-item:visible').count()!=1:failures.append('Search: mercury filter failed')
            count+=1
            page.close()
    browser.close()
print(f'Preview-tested {count} viewport/template pairs; failures: {len(failures)}')
for item in failures:print('FAIL:',item)
raise SystemExit(1 if failures else 0)
