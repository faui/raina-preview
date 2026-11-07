# WordPress deployment and rollback guide

## Prerequisites
- WordPress 6.5 or newer on staging, PHP 8.1+; a test database and HTTPS environment. The code was syntax-checked with PHP 8.4.
- Verified **full** backup: files, database, plugin configurations and active theme; documented restore test. Prepare rollback to previous theme and/or host snapshot.
- Clone the live site to **password-protected staging**. Do not use live patient information in testing; do not expose staging to search engines.
- Have authorized administrator, clinical reviewer and business owner available to sign off on practice claims and integrations.

## Installation
1. Upload `Raina_Dental_Care_Updated_WordPress_Theme.zip` via WordPress Appearance > Themes > Add New > Upload Theme, or extract its inner `raina-nocturne/` into `wp-content/themes/` through supported deployment workflow.
2. Activate only on staging initially. Confirm permalink policy, plugin interactions, HTTPS and hosted-cache behavior.
3. Open WordPress admin **Raina Website** settings (or `/website-editor/`) to set the practice-approved PatientViewer URL, an approved technology photo, journal approval and optional service flags.
4. Verify `/care/`, all main `/care/{slug}/` routes, `/journal/` gating, `raina-sitemap.xml`, robots/canonical policy, admin editor, and original-domain legacy redirects end-to-end.
5. Set production launch flag **only after QA and owner approval**: `define('RAINA_PUBLIC_LAUNCH', true);` in `wp-config.php`, ideally near other application constants and outside public site files. Before that default pages are `noindex,nofollow`.
6. Configure WordPress Search Engine Visibility as appropriate; do not rely solely on theme `robots`. Clear CDN/page caches, verify canonical production URLs, submit updated sitemap and monitor Search Console 404/redirects.
7. Restrict host full-page caching of dynamic WP editor content, `/care/*`, `/journal/*` and assistant endpoint where needed; confirm date-based offerings appear/disappear without stale CDN cache.

## Booking
- The theme **does not contain the approved PatientViewer URL**. WordPress editor field accepts approved HTTPS URLs from `patientviewer.com` / `www.patientviewer.com`. The appointment page then presents an outbound secure scheduling link in a new tab. Without it, visitors are directed to call.
- Test with a vendor-provided sandbox/approved environment only; do not create test patients in production. Verify clinician/location, confirmations, cancellation/rescheduling, mobile UI and vendor privacy disclosures.
- Online booking is a launch **P0 workflow** per original QA, and must be approved/tested; a working outbound link is not the same as an embedded interactive scheduler. Decide with the practice whether the legacy embedded workflow should be restored and document rationale.

## Public FAQ assistant
- The browser receives only allowlisted public topic answers by default; raw visitor free text is not sent to OpenAI by the current adapter.
- To enable optional AI rewriting of *public facts*, securely set `RAINA_OPENAI_API_KEY` and `RAINA_OPENAI_MODEL` in server settings outside theme. Never commit credentials. Use API project spend limits and a vetted model, no PHI, and test failure states.
- Verify front-end prompts are for general practice information; no diagnosis, treatment decisions, records, patient registration or claims of HIPAA compliance without substantive assessment.

## URL migration
- `site/data/redirects.php` contains the available original-to-new 301 map; `functions.php` serves redirects via WordPress.
- Audit a complete crawl/export of original website URLs and old WordPress posts, file attachments, sitemap and backlinks. A manually curated map can miss indexed URLs; update mapping with exact equivalents rather than redirect all to homepage.
- Verify trailing-slash rules, non-www/www and HTTP/HTTPS canonical consistency, structured data, local SEO address/hours and Search Console after deployment.

## Rollback
1. Retain previous active theme, site files/database backup and cached HTML snapshot.
2. On unexpected blank pages, unavailable scheduling, broken admin or sitewide 404s, revert active theme and previous settings/flag through supported host process.
3. Clear CDN caches; verify old critical URLs and booking again.
4. Document regression/incident and retry on staging, not live.

## Production acceptance
All mandatory approvals in `PRACTICE_APPROVALS.md` resolved, full browser QA passed, no P0/P1 blockers, actual appointment flow works, SEO migration verified, and responsible owner signs release. The package alone is not signoff.

## Final-pass additions (6 Nov 2026)
- **New setting — “reviews approved”.** Patient review excerpts (homepage and `/care/patient-stories/`) are hidden in public-launch mode until an administrator ticks this box in Raina Website settings, after the practice confirms each quotation and its republication rights.
- **Scheduling link label** is now “Online scheduling link (PatientViewer)”. Leave it blank for the “Call to schedule” experience. Do **not** paste the legacy iframe URL from the old `/schedule-online/` page without the office confirming it: it has an email-tracking link appended.
- **Sitemaps.** WordPress core `wp-sitemap.xml` is disabled by the theme; submit `/raina-sitemap.xml` (only available in public-launch mode). `robots.txt` lists it automatically when the site is public.
- **Legacy blog archives** (`/category/*`, `/tag/*`, `/YYYY/MM/`) redirect to `/journal/`, or to `/care/approach/` while the journal is unapproved.
- **Verification before cutover:** run `python tools/wp_e2e.py` against the staging site with `RAINA_WP_ROOT`, `RAINA_WPCLI`, `RAINA_PHP` and a *test* administrator (see the docstring). It toggles launch mode with `wp-content/../raina-launch.flag` only if your `wp-config.php` reads that flag — on real staging, set `RAINA_PUBLIC_LAUNCH` yourself and run the suite twice instead.
- The local QA environment used a test-only mu-plugin (`raina-qa-stub.php`) to stub the AI provider. It is **not** part of the theme and must never be deployed.
