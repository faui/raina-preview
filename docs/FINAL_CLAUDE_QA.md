# Final QA & implementation report — Raina Nocturne theme
**Claude Code final pass · 6 November 2026 · release candidate `2026.11.06-rc2`**

## Launch classification: **READY FOR PRACTICE APPROVAL** — not ready for production

Everything within the development team’s control has been implemented and verified on a real WordPress install. These checks were automated: routing, redirects, gating, editor overrides, booking states, accessibility (axe-core), responsive matrix and performance.

Public launch is still **blocked by practice-owned P0 decisions** that no developer may make:
- the scheduling URL or phone-only decision (A1);
- dentist credentials (A2);
- the biological-dentistry definitions and SMART status (A3, A4);
- office facts (address, phone, hours);
- clinical sign-off of all copy.

`READY FOR CONTROLLED PRODUCTION` would require those approvals, plus a run of `tools/wp_e2e.py` on the practice’s password-protected staging clone with real plugins, caching and HTTPS.

---

## 1. Runtime actually used (no static previews)

| Component | Version / detail |
|---|---|
| WordPress | 7.1.4, downloaded from wordpress.org and installed with WP-CLI |
| Database | SQLite through the official `sqlite-database-integration` plugin. MySQL was not available because the Docker daemon was not running. |
| PHP | 8.3.36 NTS (official windows.php.net build), built-in server with a WordPress router, pretty permalinks `/%postname%/` |
| Theme | This folder, junction-linked into `wp-content/themes/raina-nocturne` and activated |
| Browser | Playwright 1.x Chromium headless shell; axe-core via `axe-playwright-python` |
| Launch mode | `wp-config.php` defines `RAINA_PUBLIC_LAUNCH` when `raina-launch.flag` exists. The suite toggles it to test staging and public modes against the same database. |
| AI provider | Not called. A **local test-only** mu-plugin stubs `api.openai.com` and logs the request body, so endpoint gating and data minimisation can be verified offline. It is not part of the theme. |

**Not covered by this runtime (BLOCKED, not PASS):**
- MySQL/MariaDB;
- the practice’s real plugins, host cache/CDN, HTTPS and www canonicalisation;
- iOS Safari and Android Chrome on real devices (only Chromium emulation was tested);
- Lighthouse scores (lab metrics were measured with PerformanceObserver instead);
- a screen reader (structure was checked with axe and keyboard tests, but not with VoiceOver or NVDA).

## 2. Before → after: defects found in live WordPress and fixed

Problems found **only by rendering in real WordPress**, which the earlier static previews missed:

| # | Defect (before) | Fix |
|---|---|---|
| D1 | The homepage hero art, technology photo and Dr. Raina portrait all **404’d**: templates used relative `src="assets/…"`, which `raina_render()` never rewrote. | All templates now use root-relative paths through shared partials. Verified: zero failed asset requests on every route. |
| D2 | Unapproved **therapeutic massage** was still a homepage “signature” card. The removal regex only fired for inactive editor listings, not unapproved optional services. | Generic `data-service` gating in `raina_render()` now removes any link, card or list item for a hidden or unapproved service, sitewide (homepage, directory, related cards, footer, hub). Verified in launch mode. |
| D3 | The homepage **overflowed to 858px** at a 390px viewport (the broken hero image’s alt text). | Fixed by D1 and new layout. Verified: no overflow on any route at 320–1920px. |
| D4 | **All 25 treatment pages** were about 250 words with the same four-section, two-FAQ skeleton. Spec finding F04 was still open. | New structured content (`site/data/treatments.php`) and a renderer with three layouts. Pages are 410–975 words of body copy, with 3–5 substantive FAQs, comparison tables where a real choice exists, step journeys, risks and alternatives, and independent sources. |
| D5 | Unknown URLs fell through to a bare fallback template. | `raina_serve()` now returns the branded page with a **real 404 status** for any unknown URL. |
| D6 | The footer was a single line with no hours, address or key routes. It linked IAOMT and IABDM (implied memberships; the old site never mentions IABDM) and an Unsplash “Photo credit”. | New five-column footer driven by `practice.php`, with no implied affiliations. The stock image is labelled “Illustrative image” where it is used. |
| D7 | The header and booking CTA said “Book an appointment” but led to a phone-only page (spec §5.2). | CTAs now read **“Schedule a visit”**. The appointment page shows an honest **“Call to schedule”** state. When an approved PatientViewer URL is saved, “Open online scheduling” becomes primary automatically. |
| D8 | Patient-story pull quotes were **paraphrases presented as quotations** (e.g. “Friendly and very professional.”). | Seven excerpts are now quoted word for word from the practice’s published reviews, with first name and initial. They are hidden in launch mode until a new **“reviews approved”** setting is ticked. |
| D9 | The mobile menu had no focus trap, no scroll lock and no close-on-resize. Escape existed. | Full cyclic focus trap, `body` scroll lock, Escape and outside-click close, and focus return. The drawer now includes call and schedule actions. |
| D10 | Homepage search filtered an on-page list. `/care/` did not accept `?q=`, and matching was single-substring only. | The homepage form submits to `/care/?q=`. The directory adds accent folding, multi-word AND matching, light stemming, alias keywords, a debounced live status, an empty state with suggestion chips, and Escape to clear. |
| D11 | Unmapped old URLs: the crawl found 90 paths on the original site. 25 exact pages plus all category, tag and date archives had no redirect, and `/services/` mapped a URL that never existed. | **72 exact redirects plus pattern rules.** All were verified as single-hop 301s, with and without a trailing slash. See `REDIRECT_MAP.md`. |
| D12 | WordPress core `wp-sitemap.xml` competed with the theme sitemap, and `robots.txt` had no sitemap line. | Core sitemaps are disabled. `robots.txt` lists `/raina-sitemap.xml` in launch mode. |
| D13 | Header, footer and assistant markup was copy-pasted into 46 templates, which is why chrome defects existed everywhere. | Moved into `site/partials/top.php`, `bottom.php` and `practice.php`. Templates keep their own routes and `<main>` content. |
| D14 | Colour contrast failures (axe, serious): breadcrumb, eyebrows, step numbers, pathway labels and price units (2.9–4.4:1). | Darkened to ≥4.5:1. axe-core reports zero serious or critical issues on 16 templates at both widths. |
| D15 | The utility bar sat outside any landmark (axe `region`). | Moved inside the `<header>` banner. |

## 3. Route matrix (live WordPress, staging mode unless noted)
| Route | Staging status | Launch mode | One H1 / unique title+meta | Content | Notes |
|---|---|---|---|---|---|
| `/` | 200 | 200 + canonical | PASS | utility/editorial |  |
| `/care/exams/` | 200 | 200 + canonical | PASS | standard, 663 words, 4 FAQs, comparison, 1 sources |  |
| `/care/emergency/` | 200 | 200 + canonical | PASS | urgent, 967 words, 4 FAQs, comparison, 1 sources |  |
| `/care/oral-screening/` | 200 | 200 + canonical | PASS | standard, 554 words, 3 FAQs, 2 sources |  |
| `/care/pediatric/` | 200 | 200 + canonical | PASS | standard, 665 words, 4 FAQs, 1 sources |  |
| `/care/fillings/` | 200 | 200 + canonical | PASS | standard, 687 words, 4 FAQs, comparison, 2 sources |  |
| `/care/crowns/` | 200 | 200 + canonical | PASS | standard, 671 words, 4 FAQs, comparison, 2 sources |  |
| `/care/dentures/` | 200 | 200 + canonical | PASS | standard, 693 words, 4 FAQs, comparison, 1 sources |  |
| `/care/periodontal/` | 200 | 200 + canonical | PASS | standard, 693 words, 4 FAQs, comparison, 2 sources |  |
| `/care/root-canals/` | 200 | 200 + canonical | PASS | standard, 689 words, 4 FAQs, comparison, 1 sources |  |
| `/care/implants/` | 200 | 200 + canonical | PASS | cornerstone, 975 words, 5 FAQs, comparison, 2 sources |  |
| `/care/all-on-4/` | 200 | 200 + canonical | PASS | cornerstone, 935 words, 5 FAQs, comparison, 2 sources |  |
| `/care/oral-surgery/` | 200 | 200 + canonical | PASS | standard, 696 words, 4 FAQs, comparison, 2 sources |  |
| `/care/extractions/` | 200 | 200 + canonical | PASS | standard, 693 words, 4 FAQs, comparison, 2 sources |  |
| `/care/aligners/` | 200 | 200 + canonical | PASS | standard, 701 words, 4 FAQs, comparison, 2 sources |  |
| `/care/whitening/` | 200 | 200 + canonical | PASS | standard, 697 words, 4 FAQs, comparison, 1 sources |  |
| `/care/veneers/` | 200 | 200 + canonical | PASS | standard, 703 words, 4 FAQs, comparison, 1 sources |  |
| `/care/sedation/` | 200 | 200 + canonical | PASS | cornerstone, 943 words, 4 FAQs, comparison, 1 sources |  |
| `/care/pain-management/` | 200 | 404 until approved | PASS | standard, 458 words, 3 FAQs, 2 sources | gated optional service |
| `/care/sleep-apnea/` | 200 | 404 until approved | PASS | standard, 445 words, 3 FAQs, 2 sources | gated optional service |
| `/care/dermal-fillers/` | 200 | 404 until approved | PASS | standard, 444 words, 3 FAQs, 2 sources | gated optional service |
| `/care/smart/` | 200 | 200 + canonical | PASS | signature, 964 words, 4 FAQs, comparison, 2 sources |  |
| `/care/ozone/` | 200 | 200 + canonical | PASS | signature, 646 words, 4 FAQs, comparison |  |
| `/care/massage/` | 200 | 404 until approved | PASS | standard, 414 words, 3 FAQs, 1 sources | gated optional service |
| `/care/remineralization/` | 200 | 200 + canonical | PASS | standard, 443 words, 3 FAQs, 1 sources |  |
| `/care/nutrition/` | 200 | 200 + canonical | PASS | standard, 407 words, 3 FAQs, 1 sources |  |
| `/care/membership/` | 200 | 200 + canonical | PASS | utility/editorial |  |
| `/care/team/` | 200 | 200 + canonical | PASS | utility/editorial |  |
| `/care/patient-stories/` | 200 | 200 + canonical | PASS | utility/editorial |  |
| `/care/payment/` | 200 | 200 + canonical | PASS | utility/editorial |  |
| `/care/appointments/` | 200 | 200 + canonical | PASS | utility/editorial |  |
| `/care/privacy/` | 200 | 200 + canonical | PASS | utility/editorial |  |
| `/journal/` | 200 | 404 until journal approved | PASS | utility/editorial |  |
| `/journal/what-biological-dentistry-means/` | 200 | 404 until journal approved | PASS | utility/editorial |  |
| `/journal/silver-fillings-and-smart/` | 200 | 404 until journal approved | PASS | utility/editorial |  |
| `/journal/what-dental-images-can-show/` | 200 | 404 until journal approved | PASS | utility/editorial |  |
| `/journal/questions-about-dental-ozone/` | 200 | 404 until journal approved | PASS | utility/editorial |  |
| `/journal/a-calmer-first-visit/` | 200 | 404 until journal approved | PASS | utility/editorial |  |
| `/journal/what-a-preventive-visit-is-for/` | 200 | 404 until journal approved | PASS | utility/editorial |  |
| `/care/` | 200 | 200 + canonical | PASS | utility/editorial |  |
| `/care/approach/` | 200 | 200 + canonical | PASS | utility/editorial |  |
| `/care/contact/` | 200 | 200 + canonical | PASS | utility/editorial |  |
| `/care/technology/` | 200 | 200 + canonical | PASS | utility/editorial |  |
| `/care/additional/` | 200 | 200 + canonical | PASS | utility/editorial |  |
| `/care/acupuncture/`, `/care/updates/` | 301 → `/care/approach/`, `/care/` | same | n/a | retired | source kept for record |
| unknown URLs (`/no-such-page/`, `/care/x/`, `/journal/x/`, `/services/`) | 404 branded | 404 | PASS | — | real 404 status |

## 4. Acceptance criteria — evidence-based status
| Acceptance criterion | Status | Evidence |
|---|---|---|
| Real WordPress runtime, theme active, routes served by `raina_serve` | **PASS** | WP 7.1.4 + PHP 8.3; every route in `routes.php` returns 200 (gated ones reviewed separately) |
| PHP / JS syntax | **PASS** | 61 PHP files lint clean; `node --check` OK; `check_theme.py` 46 templates 0 issues |
| All routes: single H1, unique titles & descriptions, no draft/demo/Bolingbrook text | **PASS** | 84 route checks; titles & descriptions unique |
| Internal link graph resolves (no redirects, no 404s); external links `noopener` | **PASS** | internal link graph: 40 unique URLs resolve 200 without redirects |
| Legacy 301s one hop, with/without slash; archive patterns | **PASS** | 72 legacy URLs (with/without trailing slash) 301 in one hop to a 200 page |
| Real 404 status + branded page | **PASS** | 4 unknown-URL probes |
| Sitemap (launch only), robots sitemap line, core sitemap off, canonical + og:url in launch, noindex on staging | **PASS** | launch-mode toggled against same DB |
| Unapproved optional services: 404 in launch, absent from every page, hub, sitemap, assistant endpoint | **PASS** | massage, fillers, pain management, sleep apnea |
| Clearing all optional-service checkboxes persists (real admin form) | **PASS** | Playwright logged in as local test admin, saved options.php |
| Journal hidden in launch until approved; staging note removed on approval | **PASS** |  |
| Review excerpts hidden in launch until approved | **PASS** | new setting |
| Editor overrides, date windows, hide flag, new listings, featured offers | **PASS** | created via WP-CLI as `raina_listing` posts |
| Booking — no URL → honest “Call to schedule” | **PASS** |  |
| Booking — invalid host rejected; approved PatientViewer URL → primary online CTA (new tab, noopener) desktop + mobile | **PASS** | legacy practice-published URL, local only; office must confirm (A1) |
| Booking — real appointment selection on a phone (vendor flow) | **BLOCKED** | requires office-confirmed URL and vendor sandbox; not attempted |
| Assistant: cross-origin 403, free text 400, only public facts sent to provider, PII not echoed, urgent → 911/phone, human handoff | **PASS** | provider stubbed locally |
| Responsive: no overflow 320–1920 on all routes (11 widths on key routes), 200% zoom reflow | **PASS** |  |
| Mobile menu: open/close, focus trap, Escape, focus return, scroll lock, call + schedule in drawer | **PASS** |  |
| Directory search: spec queries, aliases, empty state, Escape, `?q=` deep link | **PASS** | `sleep` intentionally returns no unapproved listing |
| FAQ disclosure keyboard operable | **PASS** |  |
| Skip link, visible focus, reduced motion, ≥24px targets | **PASS** |  |
| axe-core: zero serious/critical on 16 templates × 2 widths | **PASS** | WCAG 2.2 AA conformance is NOT certified by automated tests |
| Screen reader (VoiceOver/NVDA) and real iOS/Android devices | **BLOCKED** | no assistive tech or devices in this environment |
| Performance (lab): CLS ≤ 0.1, no third-party requests | **PASS** | [{"route": "/", "lcp": 952, "cls": 0, "bytes": 284304, "requests": 8, "thirdParty": []}, {"route": "/care/", "lcp": 688, "cls": 0, "bytes": 221508, "requests": 6, "thirdParty": []}, {"route": "/care/implants/", "lcp": 548, "cls": 0, "bytes": 219237, "requests": 6, "thirdParty": []}, {"route": "/care |
| No cookies on public pages; no secrets in theme | **PASS** |  |
| Clinical, credential, pricing, review and legal facts approved | **BLOCKED** | practice-owned — see §8 and `PRACTICE_APPROVALS.md` |

## 5. Test logs and commands
```bash
# Syntax (docs/qa/syntax-checks.txt)
find . -name '*.php' -print0 | xargs -0 -n1 php -l          # 61 files, 0 failures (PHP 8.3.36)
node --check site/script.js                                   # OK
python tools/check_theme.py                                   # 46 templates, 0 issues (H1/title/meta/internal links)
# Live WordPress end-to-end (docs/qa/e2e-results.json, docs/qa/e2e-run.log)
RAINA_BASE=http://127.0.0.1:8080 RAINA_WP_ROOT=… RAINA_WPCLI=… RAINA_PHP=… \
RAINA_QA_USER=… RAINA_QA_PASS=… RAINA_BOOKING_TEST_URL=… RAINA_SHOTS=1 python tools/wp_e2e.py
# Approval ledger regenerated from page data
python tools/build_approval_matrix.py
```
**Final live-WordPress run (2026-11-06 13:52:50): 456 PASS · 0 FAIL · 0 BLOCKED** (`docs/qa/e2e-results.json`). Screenshots were produced by the preceding full run with `RAINA_SHOTS=1`. That run had one failure: Escape did not return focus to the assistant launcher. A launcher-hiding CSS rule I added had matched the chat input itself. I fixed it by scoping the rule to `main input:focus`, and the clean run above re-verified it. The screenshots are visually unaffected.

**Iteration history:** first live run 418 PASS / 5 FAIL → 452/4 → 455/1 → 456/1 → 456/0. Every failure is listed in §2 or above, with its fix.

**About the booking test URL.** The configured-scheduler state was exercised with the practice’s *own published* legacy PatientViewer URL, taken from the old `/schedule-online/` page, with the appended tracking link removed. This was on the local site only. The suite saved it through the real admin form, checked the rendered button on desktop and mobile, made one GET request, and then **cleared the setting**. Nothing was submitted to PatientViewer. The URL is **not** configured in the theme, and the office must confirm it before use (approval A1).

## 6. Evidence index
- `docs/qa/screenshots/before/`: real-WordPress renders of the received package (home, care, implants, team, appointments). They show the broken images, the massage card, the thin treatment pages and the one-line footer.
- `docs/qa/screenshots/final/`: full-page renders at 390 and 1440 for home, `/care/`, implants, emergency, SMART, crowns, team, patient stories, membership, contact, appointments, payment, journal and 404. They also cover these states:
  - mobile menu open;
  - assistant open with personal details redacted;
  - search results and no results;
  - FAQ open;
  - keyboard focus;
  - booking fallback;
  - booking configured at 390 and 1440.
- `docs/qa/e2e-results.json`: every check with PASS/FAIL/BLOCKED and detail. `docs/qa/e2e-run.log` is the console log.
- `docs/qa/source-changes.diff` and `docs/qa/changed-files.txt`: a unified diff of every text file against the package as received. Screenshots are excluded.
- `docs/CONTENT_APPROVAL_MATRIX.md`: route-by-route facts awaiting approval, generated from the page data.
- `docs/REDIRECT_MAP.md`: 72 exact redirects plus pattern rules, with crawl provenance.

## 7. Visual critique (screenshots inspected, not just generated)
| Area | Score (0–5) | Notes from inspecting the captures |
|---|---|---|
| Unique Raina identity | 4 | Consistent serif and sans pairing, evergreen palette, “R” watermark and signature hero across templates. The legacy pink/blue logo still clashes slightly with the muted palette; it was kept deliberately (A10). |
| Art direction / hierarchy | 4 | The homepage now has one dominant hero, a trust band, then varied section forms: definitions list, two-card feature, pathway grid, dentist band, numbered steps, quotes and plans. No three-card grid repeats back to back. |
| Typography / spacing | 4 | Fluid headings without single-word orphans at 320, 390 or 1440. Long treatment pages are broken into labelled sections with an on-this-page aside. |
| Content depth / clinical clarity | 4 | Every treatment page answers when it is considered, how it works, the risks and alternatives, and gives FAQs and sources. Practice-specific facts are deliberately withheld pending approval, not invented. |
| Patient trust | 3 | Real dentist names and training (pending sign-off), verbatim reviews and plain cost explanations. This is capped by placeholder photography: one informal portrait and one placeholder. |
| Conversion usability | 4 | “Schedule” is visible in the header at every width, call is one tap, emergency is call-first, and the empty-search state gives next steps. Online booking is BLOCKED on A1. |
| Mobile finish | 4 | No overflow from 320 to 1920 or at 200% zoom. Comparison tables restack into cards. The assistant collapses to an icon and never covers primary actions. |
| Interaction / accessibility | 4 | Keyboard and focus are verified and axe reports zero serious issues. Not verified with a real screen reader. |
| Performance | 4 | Local lab: LCP 0.5–0.9s, CLS 0, about 210–330 KB per page, 6–9 requests, zero third-party requests. Not field data. |
| Consistency across templates | 4 | One chrome, one treatment renderer, shared tokens. The legacy CSS layers remain underneath; a future refactor could consolidate them. |
| **Total** | **39 / 50** | Below the spec’s 45/50 target. The shortfall is mainly photography, the logo and unverifiable trust content (practice-owned), plus untested real-device and screen-reader checks. |

## 8. Unresolved items mapped to `PRACTICE_APPROVALS.md`
| Item | Severity | Blocks | Who must approve |
|---|---|---|---|
| A1 Scheduling URL or phone-only decision | P0 | Gate A | Practice owner + front desk |
| A2 Dentist credentials and bios (Dr. Prameela B has no published degree) | P0 | Gate B | Each dentist |
| A3 Fluoride-free / mercury-free / mercury-safe definitions | P0 | Gate B | Dr. Raina |
| A4 SMART certification status (only source is a 2021 blog post) | P0 | Gate B | Dr. Raina |
| Office contact facts (address, phone, hours) | P0 | Gate A/B | Owner |
| Clinical sign-off of all 25 treatment pages (see matrix) | P0 | Gate B | Treating dentists |
| Website privacy notice and Notice of Privacy Practices link | P0 | Gate E | Attorney / privacy officer |
| A5 Insurance wording (out-of-network vs “most insurances accepted”) | P1 | Gate B | Owner + billing |
| A6 Review excerpts and republication rights (then tick “reviews approved”) | P1 | Reviews shown | Owner + compliance |
| A7 Sedation methods, whitening brands, STA Wand, CBCT, same-day/walk-in emergencies, All-on-4 timing | P1 | Treatment detail | Treating dentist |
| Journal: six articles (then tick “journal approved”) | P1 | Journal shown | Clinical editor |
| Membership terms (enrolment, billing, cancellation, exclusions) | P1 | Gate B | Owner |
| A8 Weekend hours; obsolete Bolingbrook phone and ZIP | P1 | Gate B | Owner |
| A9 Optional services: keep all four unticked unless a licensed provider is confirmed | P1 | Gating | Owner + provider |
| A10 Logo variant; A11 photography; A12 Facebook page | P1/P2 | Gate C polish | Owner |
| Search Console export to complete the redirect map; host-level www/HTTPS single hop | P1 | Gate D | SEO lead + host |

## 9. Files changed
See `docs/qa/changed-files.txt` for per-file line counts.

**New**
- `site/partials/top.php`, `bottom.php`, `practice.php`, `treatment.php`
- `site/data/treatments.php`
- `tools/wp_e2e.py`, `tools/build_approval_matrix.py`
- `docs/CONTENT_APPROVAL_MATRIX.md`, this report, and `docs/qa/*`

**Rewritten**
- `site/index.php`
- `site/care/{index, team, appointments, patient-stories, contact, payment, membership, privacy}/index.php`
- `site/404.php`
- the 25 treatment route stubs
- `site/data/{services, redirects, faq}.*`

**Modified**
- `functions.php`: gating, 404, booking markup, directory extras, redirects with pattern rules, sitemap and robots, review gate
- `editor.php`: reviews approval setting; scheduling label
- `index.php`: WordPress fallback rendered in the site chrome
- `site/style.css`: appended release-candidate layer
- `site/script.js`: menu dialog behaviour, directory search, assistant focus return
- every template’s chrome replaced by partials; journal staging note reworded
- `tools/check_theme.py`, `tools/visual_smoke.py`: configurable PHP binary, UTF-8

**Unchanged on purpose**
- `assistant.php`: its gating was verified as already correct.
- The legacy `header.php` and `footer.php` are kept for WordPress compatibility but are unused.
- The logo and fonts are unchanged.
- `docs/qa-previews/` is kept as the earlier static evidence.
