> **Superseded:** the live-WordPress results from the final pass are in `docs/FINAL_CLAUDE_QA.md` and `docs/qa/e2e-results.json`. This file is kept as the record of the earlier static-preview audit.

# Raina Nocturne — Implementation QA and evidence log
**Source audit date:** 6 November 2026  
**Package status:** **SUBSTANTIAL SOURCE IMPLEMENTATION COMPLETE / STAGING-READY / NOT PUBLIC-LAUNCH CERTIFIED**

## Scope and evidence
This is an evidence-based report on a revised source-only WordPress theme. The uploaded artifact was a **ZIP of theme files**, not a running WordPress installation or an authenticated production environment. Thus the tests listed below establish static template behavior and isolated Chromium UI responsiveness, **not** working production integrations, WordPress settings persistence, analytics compliance or patient booking.

### Completed verification
| Test | Evidence | Status |
|---|---|---|
| All PHP source files pass syntax | `find . -name '*.php' -print0 | xargs -0 -n1 php -l` | PASS |
| JavaScript syntax | `node --check site/script.js` | PASS |
| Static page H1/meta & internal-link inventory | `python tools/check_theme.py` across **46 PHP static templates** | PASS — zero flagged issues |
| Browser rendering and overflow | `python tools/visual_smoke.py` — **63 page/viewport combinations** across 320, 360, 375, 390, 430, 768, 1024, 1440, 1920 px | PASS — zero horizontal overflow / JS page errors in tested previews |
| Mobile navigation | Open state / `aria-expanded` tested at 390 px on 7 page types | PASS in isolated preview |
| Care directory search | Query `mercury` at 390 px returned 1 visible treatment | PASS in isolated preview |
| 768px tablet header overflow | Initial finding: 801px scroll width at 768px viewport; resolved by tablet hamburger nav & dedicated booking link | FIXED / RETEST PASS |
| Responsive image/text layouts | Isolated Chromium screenshot samples at 390 and 1440px | Preview evidence available in `docs/qa-previews/` |
| Historical redirects, JS FAQ filters and optional service approval controls | Source paths reviewed and rules implemented | CODE-LEVEL REVIEW — WP runtime still required |

**Screenshots** are static preview evidence, not a claim that the same page has rendered successfully in WordPress. Key snapshots: `qa-previews/home-390.png`, `home-1440.png`, `care-390.png`, `care-1440.png`, `care-implants-390.png`, `care-implants-1440.png`, `care-appointments-390.png`, `care-appointments-1440.png`, `care-team-390.png`, `care-team-1440.png`.

### Items still blocked / not certified
| Area | Current state | Requirement before launch |
|---|---|---|
| WP runtime | No WordPress app/database or credentialed staging instance available in provided ZIP | Live WP render, editor saving, dynamic overrides, redirect handling, caches and full routing tests |
| Online scheduling | PatientViewer link is a configurable WP admin field; actual approved URL absent | Configure and complete authorized desktop/mobile booking test; decide if embedded original scheduler must be restored |
| Clinical accuracy | Draft pages composed cautiously from available public practice descriptions | Dentist signs off every practice-specific claim, treatment availability, degrees, memberships, FAQs and journal |
| Reviews | Display texts require confirmation of quote source and re-use rights | Verify source accuracy and permissions |
| Office operations | Hours, coverage, membership rates and emergency same-day policy not independently affirmed by office | Verify before launch; keep disclaimers where appropriate |
| Privacy/PHI | Assistant remains public-FAQ focused; no formal compliance audit performed | Legal/privacy review; vendor, analytics and consent assessment |
| SEO | 48 historical redirect mappings in source; no original full crawl supplied | Crawl old production URL inventory and 301/canonical/sitemap test in live WordPress |
| Brand asset | Original colorful logo carried forward deliberately; revised typography and palette may need an approved lockup | Approve a premium-consistent logo variant without changing brand identity unilaterally |
| Visual finish | 63 viewport render passes and isolated screenshot evidence, but not a full human/browser end-to-end accessibility/performance audit | Further full-page browser inspection and WCAG 2.2 AA checks; actual real imagery |
| External website / server | No permission to publish or production deployment access | Deploy first to a password-protected staging clone; test, approve, then controlled cutover |

## Reproducible checks
```bash
# Run from extracted raina-nocturne root
find . -name '*.php' -print0 | xargs -0 -n1 php -l
node --check site/script.js
python tools/check_theme.py
python tools/visual_smoke.py
```

Python dependencies: `beautifulsoup4`, `playwright`; a working `php` CLI and Chromium install. On Linux `/usr/bin/chromium` is used if available, otherwise Playwright's browser installation may be needed. Preview script embeds theme assets into generated pages; it is intentionally **not** a WordPress E2E test.

## Specific fixes performed during QA
- An isolated preview issue caused inline JavaScript to execute before DOM elements existed; corrected the **test harness** to append JS to body, then verified search and menu behavior. This was a test-only defect, not an identified production source defect.
- At 768px, header/action controls caused a measured **33px overflow**. Changed tablet navigation breakpoint up to 850px; added a menu booking entry on all templates; reran 63 viewport combinations and confirmed no overflow.
- Retired two unsupported thin pages from public routes by mapping `/care/acupuncture/` to full `/care/approach/` and `/care/updates/` to `/care/`; kept source record for migration.
- Changed legacy redirects pointing to stale homepage anchors to substantive new landing pages.
- Added WordPress admin hidden checkbox sentinel so clearing all optional service approvals is possible.
- Unapproved optional services cannot be featured from WP editor or queried through the public FAQ assistant topic endpoint.

## Release classification
**NO-GO for direct production deployment.** The source has been substantively improved and passed source-level and isolated responsive checks, but P0 practice-specific approvals and real WordPress/booking E2E verification remain unsatisfied. Use `docs/CLAUDE_CODE_HANDOFF_PROMPT.md` for the final browser+WordPress QA/refinement pass. Do not equate passing this test set with complete accessibility, legal or healthcare certification.
