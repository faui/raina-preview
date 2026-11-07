# CLAUDE CODE EXECUTION PROMPT — RAINA DENTAL CARE / FINAL POLISH

**Recommended engine:** `claude-opus-5-5` at **High effort** if that option is available. For lower spend, `claude-sonnet-5-5` at High. Run within the extracted project root, which contains `CLAUDE.md`. Verified official Claude Code selector: `/model` or `claude --model claude-opus-5-5`.

You are the **lead digital creative director, principal front-end/WordPress developer, accessibility reviewer and QA lead** responsible for finalizing a boutique-luxury healthcare website. You are working from a real, substantially enhanced WordPress theme — **DO NOT REDESIGN FROM SCRATCH** or discard source. The user expects the last implementation/refinement iteration to achieve the highest practical polish across the entire site, while honoring clinical truth, business constraints and accessibility.

## Required reading (read ALL, not just filenames)
1. `CLAUDE.md`
2. `docs/README_HANDOFF.md` — what was really implemented and important limitations
3. `docs/REMEDIATION_SPEC_ORIGINAL.md` — every page-by-page requirement from the original comprehensive website QA
4. `docs/BRAND_SYSTEM.md` — design decisions and premium quality bar
5. `docs/PRACTICE_APPROVALS.md` — cannot publish unverified facts
6. `docs/QA_REPORT.md` and `docs/DEPLOYMENT.md`
7. Actual `functions.php`, `editor.php`, `assistant.php`, `site/index.php`, `site/style.css`, `site/script.js`, service templates and routing/data maps.

## Mission
Take this revised WordPress theme from **credible staging-source handoff** to the **highest-quality, empirically tested, release-candidate theme possible**. The aesthetic target is exceptional modern boutique medical/wellness hospitality: refined, deeply human, quiet but assured; original compositions, elegant typography, authentic trust signals and a frictionless patient journey. Do not chase frivolous gradients or cosmetic scores at the cost of patient information. Luxury is deliberate restraint, trustworthy specificity, fluid interaction and flawless execution.

## Work to do — implement, don't hand back a plan

### 1. Build a real runtime and baseline
- Inventory theme and WordPress prerequisites; deploy this actual source into a working local/staging WordPress+database, with a real page-render browser (Playwright/Chromium or equivalent) if tools permit.
- Preserve old code and make incremental, testable changes; do not over-engineer new build tools.
- Evaluate current desktop/mobile screenshots and all template classes before proposing structural changes.
- If no runtime is available, build the strongest faithful preview possible, test static output and clearly label the WordPress-dependent checks blocked. Do not pretend code inspection is a complete integration test.

### 2. Make the site exceptional, page by page
- Audit and refine **every route** against the original specification: homepage; service catalogue; approach; all principal treatments; SMART/ozone; dentists; patient stories; membership; insurance/payment; contact; appointment scheduling; technology; journal; privacy; and 404s.
- Fix leftover generic/repetitive headings and paragraphs; restore medically verified practice detail, but do not fabricate specifics. Clinical/operational facts remain flagged pending office approval.
- Distinguish service pages by meaningful layout/treatment information while maintaining shared typographic harmony.
- Verify all navigation, breadcrumbs, next-action CTA destinations and footer routes. Ensure direct URLs work in live WP, not merely in static HTML previews.
- Preserve the practice logo until an **approved** alternative is provided. Explore CSS integration carefully; never falsely claim the revised colors are an authorized brand identity.
- Keep photography placeholders, but ensure every empty/loaded frame would support authentic people and clinic images without awkward crops.

### 3. Polish interaction and responsive behavior
- Inspect **full-page** renders at widths 320/360/375/390/430/768/1024/1280/1440/1920. Test dynamic states, menu, FAQ, search, keyboard focus, appointment flow, 200% zoom and reduced-motion.
- Remove horizontal overflow, overlap, awkward typography wrapping, anonymous giant gaps and excessive repeated card treatments. Keep controls finger-friendly and CTAs legible on mobile.
- Verify hierarchy, focus trapping in dialog, escape behavior, no keyboard traps, modal body scroll and screen-reader announcements.
- Capture evidence screenshots for homepage, catalogue, representative treatment, team, stories, membership, contact and booking at desktop/mobile. Visually critique and iterate **until composition is genuinely premium**.

### 4. Critical functional/technical test pass
- Confirm WordPress `raina_serve` route behavior, legacy 301 redirects (all old-site URL examples), editor-created overrides and service date windows, sitemap, robots, canonical tags, safe external links and 404s.
- Test admin approval gates: no unapproved optional therapy promoted in catalogue, homepage, sitemap, direct routes or assistant topic endpoint; clearing all checkboxes must persist. Clinical journal must remain unpublished on public mode until explicitly approved.
- Test both booking states: absent PatientViewer URL -> honest phone fallback; approved correctly configured URL -> functional appointment CTA on real mobile/browser. Obtain URL ONLY from authorized practice/vendor; never invent or use a random PatientViewer link.
- Validate all keyboard interaction, responsive search, FAQ disclosure, chat fallback, focus indicators, browser console errors, WCAG 2.2 AA applicable checks, image alt, contrast and performance.
- Run every PHP syntax check and JS syntax check, plus static internal-link graph, unique title/description audit and any automated tests added. Verify no unapproved live analytics/PHI intake or secret leaks.
- Vet all external clinical/legal/SEO claims with primary sources and record sources; don't silently claim practice approval.

### 5. Original-versus-replacement reconciliation
- Open the live historical https://www.rainadentalcare.com and the staging https://d1m6u7zewxrhn7.cloudfront.net only if reachable. Diff all indexed URLs, page bodies and site features against `docs/REMEDIATION_SPEC_ORIGINAL.md`. The original site is historical reference, not automatic clinical truth.
- Check online scheduling, dentist biographies/credentials, patient reviews, out-of-network details, sedation, product-specific whitening details, implants/grafting, emergency visit guidance, biological dentistry and treatment FAQ content. Reinstate **verified** substantive content, not dated marketing promises.
- Review SEO redirect map against a crawl of the original site and production sitemap; add mappings only for real URLs and semantically matching destinations.

## Approval rules and non-negotiables
- A provider/clinic must approve clinical facts, insurance, prices, availability, credentials, photos and patient testimonials; do not forge it.
- Do not state a service is offered without verification; keep unapproved adjunct therapies gated.
- Do not mark legal/privacy/HIPAA compliance as guaranteed from templates alone.
- Preserve source history and original site assets; do not remove working features to make the site seem simpler.
- Do not publish to the real domain or use real patient details without explicit authorization.
- Do not stop after writing a report. **Fix the code and verify the actual result.**

## Completion evidence — deliver all
1. Fully updated source in place, with clean diff and no unnecessary dependencies.
2. `docs/FINAL_CLAUDE_QA.md` containing exact changes, route matrix and evidence-based PASS/FAIL/BLOCKED report per acceptance criterion.
3. Full-page browser screenshots for key desktop/mobile routes and critical interaction states.
4. PHP/JS syntax results, actual WP/Playwright test logs, broken-link/redirect/canonical findings, accessibility and performance checks.
5. Explicit unresolved items mapped to `PRACTICE_APPROVALS.md`, including who must approve each.
6. A final launch classification: **READY FOR PRACTICE APPROVAL**, **BLOCKED**, or **READY FOR CONTROLLED PRODUCTION** with factual justification; never call unresolved P0s passed.

### Final instruction
Treat this as a signature luxury healthcare website — a complete, credible, beautiful and thoughtfully functioning experience, not a generic brochure. Exercise judgment when the document specifies outcomes rather than layout. Prioritize actual patient trust and working appointment access. Implement, render, critique, correct, retest, and provide evidence. Do not answer with only recommendations.
