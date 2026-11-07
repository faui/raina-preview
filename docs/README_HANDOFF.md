# Raina Dental Care — Revised Nocturne WordPress Theme
**Implementation handoff — 6 November 2026**

> **Final pass — 6 November 2026 (Claude Code).** This package was installed and tested on a real WordPress 7.1.4 / PHP 8.3 site. Several claims below from the earlier handoff did not hold when rendered (treatment pages were ~250 words with two FAQs; homepage assets 404’d under WordPress; massage was still promoted). Those are now fixed. **Read `docs/FINAL_CLAUDE_QA.md` first** — it supersedes the status statements in this file and in `QA_REPORT.md`.

## What this package is
This ZIP is the **complete revised PHP/WordPress theme source**. It is not a Figma mockup, a screenshot prototype, a new Next.js application, or a ready-to-publish live website. It contains the original WordPress architecture, images/fonts/source, revised visual system and templates, user-editable service overrides, patient FAQ assistant and supporting documentation. Install and QA it on a password-protected WordPress staging environment before production.

**Target:** boutique, sophisticated, warm biological dentistry brand experience, with clinical credibility and seamless phone/online appointment discovery. Placeholders for photography remain placeholders by request.

**Authoritative inputs:** This updated source; `docs/REMEDIATION_SPEC_ORIGINAL.md` (original detailed full-site QA specification); `docs/PRACTICE_APPROVALS.md` (cannot be inferred by AI). Do not invent facts to resolve gaps. These documents complement one another, with `CLAUDE.md` defining the handoff.

## What was changed (not just proposed)
1. **26+ clinical treatment pages** rewritten from generic teaser cards to differentiated editorial treatment information, with individually composed summaries, three-step treatment/consultation narratives, meaningful FAQs, appropriate related-care crosslinks and appointment CTAs.
2. New **treatment catalogue `/care/`**, client-side keyword/filter functionality and clear empty state. Existing service pages remain their own WP routes.
3. New bespoke **practice approach `/care/approach/`**, **technology `/care/technology/`**, **contact `/care/contact/`**, and **additional services `/care/additional/`** pages.
4. Richer **team page `/care/team/`**, **patient stories `/care/patient-stories/`**, **appointments `/care/appointments/`**, **payment `/care/payment/`**, and **membership `/care/membership/`**. Practice names/prices/reviews must be explicitly reconfirmed prior to publication.
5. **Homepage restructure** with clearer care navigation and CTA language; removed promotion of unverified optional therapies and improved trust/patient guidance.
6. New restrained **editorial style layer** in `site/style.css`: Source Serif + Manrope, layered pale sage/ivory surfaces, large but balanced headings, considered spacing, FAQ disclosure layout, list-led process sections, patient/dentist grid, responsive templates and contact rail.
7. Fixed root **`/care/` routing**, improved legacy redirect destinations, dynamic override injection into matching service templates instead of using one generic fallback, XML sitemap hygiene and launch-mode canonical tags.
8. **Booking**: WordPress editor still accepts an approved PatientViewer `https://` link. When supplied, appointment page exposes a secure external scheduling link; when absent, phone appointment instructions remain. **No unverified vendor URL is hard-coded.**
9. **Optional service approval gating**: massage, dermal fillers, pain management and sleep apnea are excluded from public catalogues, featured listings, public sitemap and assistant topics unless explicitly enabled by administrator. Direct URLs 404 when `RAINA_PUBLIC_LAUNCH=true` and unapproved.
10. Existing deterministic FAQ assistant retained, including consent-conscious use of allowlisted public topics, guarded API calls, caching and a plain-language fallback. **Not a clinical/PHI chatbot.**
11. Improved journal and staging protections carried forward: six journals held for clinician approval; `noindex` by default and new canonical insertion in explicitly enabled production mode.
12. Enhanced mobile menu, search interactions and static QA previews against representative pages.

## File map
| Path | Purpose |
|---|---|
| `functions.php` | WordPress routing, redirects, content/render helpers, approved-service filtering, sitemap, booking insertion, canonical tags |
| `editor.php` | Raina Website backend service editor, appointment URL, image, journal and optional-service approval settings |
| `assistant.php` | Topic-limited public FAQ AI adapter; secrets live outside theme |
| `site/index.php` | Homepage markup and section composition |
| `site/care/{slug}/index.php` | Individual treatment/practice page templates |
| `site/journal/{slug}/index.php` | Editorial drafts, require clinician approval |
| `site/data/services.php` | Default service directory data and editor labels |
| `site/data/routes.php` | XML sitemap route inventory |
| `site/data/redirects.php` | Existing/legacy URL to new URL mapping |
| `site/data/faq.json` | Public-only assistant facts |
| `site/style.css` | Site and responsive design system including upgraded editorial components |
| `site/script.js` | UI and deterministic assistant behavior; catalogue filtering |
| `site/assets/` | Provided assets and licensed/bundled local fonts |
| `docs/` | Launch approvals, testing evidence, brand rules, deployment and Claude prompt |

## Content and URL inventory
**Core:** `/`, `/care/`, `/care/approach/`, `/care/technology/`, `/care/contact/`, `/care/team/`, `/care/patient-stories/`, `/care/appointments/`, `/care/membership/`, `/care/payment/`, `/care/additional/`, `/care/privacy/`.

**Primary treatments:** `/care/exams/`, `/care/emergency/`, `/care/oral-screening/`, `/care/pediatric/`, `/care/fillings/`, `/care/crowns/`, `/care/dentures/`, `/care/periodontal/`, `/care/root-canals/`, `/care/implants/`, `/care/all-on-4/`, `/care/oral-surgery/`, `/care/extractions/`, `/care/aligners/`, `/care/whitening/`, `/care/veneers/`, `/care/sedation/`, `/care/smart/`, `/care/ozone/`, `/care/remineralization/`, `/care/nutrition/`.

**Potentially inactive / practice-confirmation required:** `/care/massage/`, `/care/pain-management/`, `/care/dermal-fillers/`, `/care/sleep-apnea/`. These are not assumed live.

**Retired/stale utility routes:** `/care/acupuncture/` and `/care/updates/` are redirected to `/care/approach/` and `/care/` in WordPress; old static templates remain only as migration source/record, not an endorsed offering.

**Journal:** `/journal/` plus six articles — protected until clinician approves via WordPress setting.

## Known caveats / don't overclaim
- **No actual WordPress installation/database, production API credentials, authenticated admin session or actual PatientViewer URL** were supplied for this code-only handoff. Thus WP behavior and online booking cannot be certified until tested in staging.
- Site-wide static PHP rendering, desktop/mobile Chromium previews, JS and PHP syntax checks were performed; details in `QA_REPORT.md`. This does *not* constitute WCAG conformance, HIPAA compliance, Core Web Vitals or production security certification.
- Clinical copy is cautious but still needs a dentist's review; pricing, credentials, testimonial quotations, treatment availability and claims are pending practice confirmation.
- Placeholder photos must be replaced with **genuine approved images** before judging photographic quality; preserve layout with correctly cropped/prioritized assets.
- The colorful legacy logo asset is retained; its palette is visually more saturated than the updated muted luxury system. Do not unilaterally redraw an established logo. Seek an approved logo lockup/monochrome variant and update CSS cohesively.
- Original spec references an older Codex workflow, but this package is now being handed to Claude Code for final implementation/runtime QA.
- Replacing an existing theme does **not** replace all production posts, plugin content, analytics, DNS, patient scheduling or hospital-grade/privacy compliance. Explicit site migration and clinical release processes remain required.

## Priority next engineering tasks for Claude Code
1. Install/run this exact theme on a local WP 6.5+ / PHP 8.1+ staging clone with a test database, supported by a browser automation tool.
2. Finish visual refinement at 360, 375, 390, 430, 768, 1024, 1440 and 1920 CSS pixels; review complete pages, not only the hero.
3. Test booking and editor approval settings end-to-end with **non-live, authorized** vendor setup and synthetic patient flows.
4. Execute real WP URL redirects including trailing slash, canonical, search and public sitemap.
5. Review accessibility against WCAG 2.2 AA where practical, focus/keyboard, contrast, animations, valid image alt, and interaction feedback.
6. Review documented clinical/policy approvals before selecting production mode.
7. Produce before/after screenshots, coded test results and list of unresolved P0/P1 issues; do not mark PASS without evidence.

## Launch gate
**Development-ready for further staging QA; NOT certified for public launch**. See `PRACTICE_APPROVALS.md` and `DEPLOYMENT.md`.
