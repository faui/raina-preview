# Raina Dental Care — Final Website Remediation & Launch Specification

**Version:** 1.0 · **Audit date:** November 6, 2026  
**Prepared for:** Website author / Codex implementation agent  
**Target quality:** Best-in-class boutique dental / luxury wellness website, clinically credible, elegant, exceptionally polished, fast, accessible, and conversion-focused  
**Existing live website:** https://www.rainadentalcare.com/  
**Replacement being improved:** https://d1m6u7zewxrhn7.cloudfront.net/  
**Expected final public domain:** `www.rainadentalcare.com` (confirm preferred www/non-www and infrastructure before cutover)

> **MANDATE TO CODEX:** This is the **final implementation iteration**, not another exploration or superficial visual pass. Inspect the actual repository and both websites; apply the remediation comprehensively; execute browser-based desktop/mobile QA and automated tests; correct the failures; and produce concise proof of completion. **Do not stop at a plan or a list of recommendations.** Do not mark a check done without evidence. The existing design direction is a starting point, not sacred. Elevate it to a polished luxury brand while preserving clear usability and medically responsible copy. Photographs are currently placeholders; **do not spend the iteration generating stock replacements**, but make all image slots production-ready with controlled cropping, responsive behavior and image specifications.

---

## 0. Important audit limitations and evidence protocol

- The findings below are grounded in **publicly retrieved text and link structures** of the current and replacement websites, inspected on November 6, 2026. The sites' **fully rendered CSS, actual image composition, hover states, mobile breakpoints, interactive search, chat responses, external booking behavior, browser console, and Lighthouse results were not independently verified in this audit**. Do **not** interpret the aesthetic/responsive guidelines as claims of already-observed visual defects.
- The supplied CloudFront URL is a **staging origin**, not the intended canonical production domain. Test production-domain SEO settings separately.
- Old website copy is **reference evidence, not authoritative clinical truth**. It contains outdated location language, marketing puffery, possible inaccurate qualifications, broad clinical promises and other weak statements. Never paste it verbatim without verification and editing.
- Any proposed new treatment detail, team credential, equipment, service availability, membership term, insurance participation, review quotation, logo, case photograph, treatment outcome or certification must be backed by the practice or an approved source. **Never invent it.**
- For anything dependent on office confirmation, implement the best complete **truthful** experience, flag the exact factual approval request in a single `PRACTICE_APPROVALS.md`, and use safe, confident wording that does not claim unavailable services. If a substantial service is unconfirmed, remove it from prominent promotion rather than advertising uncertainty.
- This specification covers all pages exposed by the replacement home navigation and journal, and all old site's primary pages exposed in its navigation. The author must also crawl both sites/sitemaps and inventory any additional URLs, attachments, blog posts and redirects not captured here.

### Priority definitions

- **P0 / launch blocker:** Broken or misleading booking, inaccurate/unapproved medical assertions, exposed draft language, broken critical links, severe mobile/accessibility failures, wrong contact information, material privacy risk, lost important URL redirects.
- **P1 / must complete in final iteration:** Thin service pages, weak trust content, inadequate brand system, broken search/navigation, major responsive/performance problems, unpolished content, missing patient information.
- **P2 / high-value polish:** Subtle motion, richer editorial modules, structured related content, selective before/after/gallery elements *when real licensed assets exist*, noncritical enhancements.
- **P3 / not required:** Unverified widgets, speculative features, unnecessary marketing gimmicks, elaborate animations, generic newsletter overlay, complex systems with no operational owner.

### Definition of success

A first-time visitor can understand **who Dr. Raina is**, **why this practice differs**, **whether their treatment is offered**, **what a visit will feel like**, **how costs/insurance work**, and **how to book**, from any relevant landing page, on a mobile phone, without ambiguity. An existing patient can quickly call, find directions, review hours and reschedule. Every page feels carefully art-directed, not templated filler. Every public claim is factual and reviewed. No critical functionality from the old site is silently lost.

---

## 1. Verified findings that drive this iteration

| ID | Finding from publicly inspected page content | Priority | Required disposition |
|---|---|---|---|
| F01 | Old `/schedule-online/` embeds a `patientviewer.com` scheduling iframe. New `/care/appointments/` has only a phone/call path and directions. | **P0** | Restore verified live scheduling via the existing provider or a practice-approved replacement; provide phone fallback. |
| F02 | Old `/about-us/` has detailed profiles for Dr. Mandeep Raina and Dr. Prameela B, NYU DDS 2002, training, personal story and interests. New `/care/team/` reduces these to a paragraph. | **P1** | Restore substantive, edited, validated professional profiles and photographs. |
| F03 | Old `/reviews/` contains numerous individual named testimonials. New `/care/patient-stories/` mainly sends readers to Google Maps. | **P1** | Curate genuine attributable reviews, validate reproduction rights and links; don't fabricate ratings. |
| F04 | Most new service pages provide a one-sentence intro, a two-question “What to know” list and a generic footer. | **P1** | Rewrite according to page-specific briefs below, with real differentiation, process, considerations, FAQ and appropriate CTA. |
| F05 | Old `/sedation-dentistry/sedation-dentistry-naperville/` mentions oral sedation, IV sedation and nitrous oxide. New `/care/sedation/` names none. | **P1** | Confirm which methods remain available, appropriate providers/qualifications and preparation; write accurate detail. |
| F06 | Old `/cosmetic-dentistry/teeth-whitening-naperville/` mentions Zoom and Opalescence. New `/care/whitening/` omits both. | **P1** | Confirm product availability; explain in-office vs at-home options, sensitivity and limitations. |
| F07 | Old homepage says the practice accepts and bills **out-of-network** insurance. Old `/contact/` also says “Most Insurances Accepted.” New `/care/payment/` tells visitors to call; insurance status unclear. | **P1** | Reconcile practice-approved insurance wording; explain billing, benefits estimates, CareCredit/cards and membership. |
| F08 | Old pages make same-day emergency and walk-in promises; new `/care/emergency/` only directs callers to phone. | **P1** | Confirm current urgent-visit policy and hours; show call-now priority and red flags without unverified availability claims. |
| F09 | Replacement `/journal/` and articles show **“Editorial preview · Pending review by Dr. Raina”**. | **P0** | Remove all staging/editorial notes from the public experience; clinically approve articles or unpublish them. |
| F10 | Homepage features therapeutic massage as a signature service while `/care/massage/` instructs patients to call to find out if it is currently available. | **P1** | Verify real availability and provider; otherwise demote/remove prominence; avoid advertising an unconfirmed service. |
| F11 | The new technology section talks about scanners and implant imaging but asks visitors which technologies the practice actually has. | **P1** | Verify exact technology and use only real equipment/usage descriptions. |
| F12 | Repeated “ask the office,” “ask about,” “discuss options” language weakens expertise and makes many pages interchangeable. | **P1** | Use confident, informative and clinically bounded prose; reserve “ask” phrasing for true individual/unknown facts. |
| F13 | The existing website's service pages have been reorganized into `/care/...` paths, creating a material URL migration. | **P0** | Publish one-to-one redirect inventory; update canonicals, metadata, sitemap, links and Search Console rollout. |
| F14 | New membership prices and inclusions substantially match old publicly stated figures; terms may have changed since publishing. | **P1** | Preserve amounts only after reconfirmation; clarify eligibility and conditions. |
| F15 | New privacy page is a short notice directing visitors not to enter personal health data in chat. | **P0/P1** | Review actual vendor/data practices, supply a legally adequate site policy and Notice of Privacy Practices link; enforce chat limits in code. |

**Core content evidence:** [old home](https://www.rainadentalcare.com/), [new home](https://d1m6u7zewxrhn7.cloudfront.net/), [old about](https://www.rainadentalcare.com/about-us/), [new team](https://d1m6u7zewxrhn7.cloudfront.net/care/team/), [old reviews](https://www.rainadentalcare.com/reviews/), [new reviews](https://d1m6u7zewxrhn7.cloudfront.net/care/patient-stories/), [old booking](https://www.rainadentalcare.com/schedule-online/), [new booking](https://d1m6u7zewxrhn7.cloudfront.net/care/appointments/), [new journal](https://d1m6u7zewxrhn7.cloudfront.net/journal/).

---

## 2. Author implementation workflow — in this order

1. **Baseline audit in actual repo:** Identify framework, routes, data model, content, fonts, tokens, assets, deploy config, analytics/consent, appointment iframe/embed, chatbot functionality, robots/canonical settings, tests. Save git commit hash and screenshots. Don't remove working features accidentally.
2. **Full URL coverage:** Crawl old site + new staging, collect all accessible URLs, HTTP status, title, H1, canonical, meta description, linked PDFs/images, old-to-new target, proposed action. Extend mapping in §3 beyond the observed routes if needed.
3. **Clinical/brand decision ledger:** Extract the exact few facts requiring office approval into `PRACTICE_APPROVALS.md`. Don't interrupt implementation for every minor fact. Choose safe present-tense copy where possible. Never guess.
4. **Implement shared foundations:** Brand tokens, fonts, headings, primary nav/mobile menu, booking CTA, footer, page layouts, responsive media, accessibility, metadata and error handling.
5. **Implement bespoke cornerstone pages:** Homepage, team, appointment, reviews, membership, payment, SMART, ozone, implants, All-on-4, sedation and emergency.
6. **Implement every remaining service page:** Use the page-specific content requirements in §6, not boilerplate.
7. **Journal and privacy:** Resolve review status and policies; approve or unpublish article routes.
8. **Tests and screenshots:** Run browser tests at all required viewport sizes, visual review, accessibility audits, link and redirect checks, SEO, performance, keyboard and third-party booking flow. Fix issues; retest.
9. **Deliver evidence, not assurances:** Provide changed-file list, coverage matrix, screenshot index, test commands/results, unresolved *practice-dependent* facts and production cutover checklist.

**No scope evasion:** Don't stop after the homepage, change only CSS, recreate the same generic service-card pattern, add fake five-star ratings, use unlicensed images, remove the chatbot as a shortcut, or create an elegant dead-end CTA.

---

## 3. Complete known old-to-new URL migration map

**Rule:** Keep the old domain as the production domain. At the cutover, permanent-redirect legacy paths directly to the corresponding final page on the same preferred domain (`301` or `308`); no chains, generic-homepage dumps, soft-404 or broken deep links. Mapping below is based on observed source navigation; extend with an actual sitemap/links crawl and Search Console indexed URLs.

`OLD` paths are relative to `https://www.rainadentalcare.com`; `NEW` paths are relative to the final production domain and currently exist on CloudFront staging unless marked NEW BUILD.

| Old path | New path / action | Notes |
|---|---|---|
| `/` | `/` | Preserve homepage link equity; update title and current Naperville address. |
| `/about-us/` | `/care/team/` | Restore full bios; retain both doctors. |
| `/reviews/` | `/care/patient-stories/` | Build real on-site review content. |
| `/contact/` | **NEW BUILD** `/care/contact/` or consolidate on enhanced `/care/appointments/` with exact meaningful contact content | **Preferred:** Build `/care/contact/` for location, hours, insurance teaser, directions, calls; then redirect old contact here. |
| `/schedule-online/` | `/care/appointments/` | **P0:** real booking; verify legacy provider. |
| `/general-dentistry/dental-cleaning-naperville/` | `/care/exams/` | Restore preventative care specifics. |
| `/general-dentistry/dental-emergency-naperville/` | `/care/emergency/` | Clear emergency priority. |
| `/general-dentistry/oral-cancer-screening/` | `/care/oral-screening/` | Explain screening. |
| `/general-dentistry/pediatric-dentist/` | `/care/pediatric/` | Child/family care. |
| `/oral-surgery/` | `/care/oral-surgery/` | Old page looked sparse in text crawl; confirm indexed status. |
| `/oral-surgery/extractions/` | `/care/extractions/` | Remove unverified painless/STA claims unless confirmed. |
| `/restorative-dentistry/dental-crowns-bridges/` | `/care/crowns/` | Distinguish crown vs bridge, care. |
| `/restorative-dentistry/dentures-naperville/` | `/care/dentures/` | Partial/full/removable/fixed distinctions. |
| `/restorative-dentistry/all-on-4-dental-implants/` | `/care/all-on-4/` | Keep separate from single-tooth implants. |
| `/restorative-dentistry/dental-implants-naperville/` | `/care/implants/` | Rebuild detailed page. |
| `/restorative-dentistry/periodontal-treatment-naperville/` | `/care/periodontal/` | Periodontal evaluation, non-surgical care. |
| `/restorative-dentistry/root-canals/` | `/care/root-canals/` | Treatment purpose, alternatives, aftercare. |
| `/restorative-dentistry/ozone-therapy-in-dentistry/` | `/care/ozone/` | Evidence-aware adjunct positioning. |
| `/sedation-dentistry/sedation-dentistry-naperville/` | `/care/sedation/` | Confirm modalities. |
| `/orthodontics/braces-invisalign-naperville/` | `/care/aligners/` | Braces/Invisalign eligibility and who delivers it. |
| `/cosmetic-dentistry/teeth-whitening-naperville/` | `/care/whitening/` | Verify Zoom/Opalescence. |
| `/cosmetic-dentistry/veneers-naperville/` | `/care/veneers/` | Explain alternatives, tooth preparation. |
| `/additional-services/sleep-apena-dermal-fillers-pain-management/` | **Preferred NEW BUILD** `/care/additional/` | Old combined page maps poorly to any one of three routes. New hub links `/care/pain-management/`, `/care/sleep-apnea/`, `/care/dermal-fillers/`; use a real content hub, not a blank intermediary. |
| `/in-house-membership-plans/` | `/care/membership/` | Verified published plan figures, confirm current. |

**Additional known new content without an exact old-page counterpart:** `/care/smart/`, `/care/massage/`, `/care/fillings/`, `/care/payment/`, `/care/privacy/`, `/journal/`, six `/journal/.../` article paths, plus optional `/care/contact/` and `/care/additional/` from this spec. Don't create legacy redirects for routes that never existed.

**Crawl unknowns:** Audit old category archives, query URLs, attachment URLs, `www`/non-`www`, HTTP, trailing slash variants, prior Bolingbrook location pages, sitemap XMLs, Search Console indexed/linked pages, old social/Google Business links, historical campaign landing pages and media. The navigation list is **not** a guarantee of total site coverage.

---

## 4. The premium Raina brand system — definitive direction

### 4.1 Positioning and personality

**Brand promise:** Thoughtful, personalized dentistry centered on the whole person.  
**Character:** Boutique wellness hospitality × genuine clinical expertise.  
**Words:** serene, discerning, warm, meticulous, human, established, clear, inclusive.  
**Avoid:** sterile hospital, vague spa, cheap dental flyer, loud teal/blue corporate SaaS, black-and-gold cliché luxury, generic AI-looking gradients, over-promising alternative medicine.

**Positioning architecture:**
- **Primary:** Raina Dental Care; Naperville; patient-centered, biological/holistic dentistry; both conventional care and the materials/process conversation.
- **Secondary:** Preventive, restorative, implants, cosmetic and selected biological services.
- **Proof:** Named doctors, verified training, genuine office/team photos, honest treatment explanations, verified patient reviews, clearly explained services, modern equipment **only if confirmed**.
- **Conversion:** A frictionless appointment experience and welcoming real human contact.

The strongest existing headline concept — **“Biological dentistry. Whole-person care.”** — can stay. Supporting copy must quickly answer why this practice, rather than retreat to “ask us what we might do.” Avoid any unsupported implication that biological dentistry is categorically safer or cures systemic conditions.

### 4.2 Visual direction and art direction

- **Layout:** A carefully curated editorial cadence: spacious cinematic hero; narrow explanatory text bands; strong asymmetric pairings; discreet warm surfaces; quiet micro-interactions; selective full-width imagery; confident CTA moments. Avoid continuous identical three-card grids and endless same-height bland panels.
- **Palette — proposed; inspect existing brand assets first:** evergreen `#294D43`, darker evergreen `#203A33`, warm ivory `#F6F3EB`, near-white `#FFFEFA`, text charcoal `#252C29`, sage `#B8C9BB`, restrained clay `#BE947C`. These are *directional tokens*, not an observed extraction from staging; adjust to the practice's legitimate logo and contrast. Do not use clay for small text without contrast verification. Do not blanket-tint clinical photos green.
- **Typography:** Pair one high-quality editorial display serif (e.g. **Instrument Serif** or another properly licensed editorial serif) with one exceptionally readable contemporary sans (e.g. **Manrope** or **Inter**). Use no more than two families and three regular/medium/semibold-ish weights overall. Keep real logo lettering intact instead of recreating it in a random font. Don't load a font the repo cannot legally serve.
- **Scales (design guidance):** desktop H1 approximately 64–88px on landing, 48–68px inner heroes; mobile H1 approximately 40–52px; H2 32–52px desktop, 28–36px mobile; body 17–19px desktop and ≥16px mobile, readable 1.5–1.7 line-height; max running-text width ~65–75 characters. Implement fluid `clamp()` values and verify line wraps, not arbitrary hardcoded pixel sizes.
- **Grid:** content max ~1200–1320px, large-screen comfortable inset; 12-column desktop compositional grid, deliberate 2-column and 1-column reductions; mobile horizontal inset 20–24px (16px at 320px where necessary); no horizontal scroll.
- **Space:** establish 4/8px baseline + intentional major rhythm (~64–120px desktop, ~48–72px mobile), avoid orphan headings, short stubby sections and huge blank gaps around thin content.
- **Cards:** use only for content that benefits from grouping. Refrain from thick shadows, ornamental outlines, gratuitous corner radii; use premium 8–16px radii consistently if rounded geometry is part of final brand.
- **Buttons:** one clearly dominant primary (book), secondary outline/text (call/explore), consistent heights (44–52px) and state styling. Distinguish links visually; obvious hover/focus/disabled/loading.
- **Iconography:** one coherent thin-but-readable set, consistent strokes, only where icons communicate. No generic shiny-tooth illustrations.
- **Micro-motion:** 150–250ms restrained fade/translate/hover, respect `prefers-reduced-motion`. Never animate primary content into invisibility if JS fails. No scroll-jacking, forced carousels, autoplay background video, fake floating particles or excessive parallax.
- **Photography brief (placeholder assets now):** real environmental portrait of Dr. Raina, both doctors, authentic interaction, front desk, bright but warm practice interiors, actual dental technology, detail of clean/material-conscious working environment. Natural light, shallow but not artificial depth, warm neutral grading, varied focal lengths; avoid cheesy smiling-stock-model teeth. Future use requires subject consent/licensing. Build fixed aspect ratios + `object-position` controls for each slot; preserve layout without image; do not embed placeholder captions as production content.
- **Brand kit deliverable:** `BRAND_SYSTEM.md` (logo usage and variants, typography, palette with roles and contrast, spacing, radii, motion, button/input/nav/footer specifications, image styles, tone/voice samples, accessibility constraints). Implement actual design tokens in code, not documentation alone.

### 4.3 Type hierarchy and quality rules

- Exactly one H1 per page; clear sequential H2/H3. Site logo has stable size and crisp SVG/retina asset.
- No awkward ragged H1 breaks (e.g., one isolated word) across key mobile widths; no widows in large editorial headings where CSS can fix without clipping.
- No placeholder copy, inaccurate dates, unapproved medical claims, “Editorial preview”, developer hints, “demo chat”, internal technical labels, stub FAQs, broken grammar or inconsistent capitalization.
- Use US English, human tone and Naperville (not outdated Bolingbrook) as the current location. Do not artificially stuff “Naperville dentist” into every sentence.
- Differentiate **luxurious experience** from *clinical price claim*: don't say "luxury treatment outcomes", "pain-free", "guaranteed", "always", "best" or "most advanced" without defensible evidence.

### 4.4 Reference calibration

Use contemporary boutique dental/wellness UX as a **quality standard**, not as a copying target. Study editorial hierarchy and CTA clarity on established modern dental providers such as https://www.hellotend.com/; independently choose original compositions and brand voice. Raina should feel **more personal and practitioner-led** than a national dental chain.

---

## 5. Global UX, functionality and component requirements

### 5.1 Global header and navigation

**Desktop:** clear brand mark at left; 4–6 concise primary links (e.g. Approach, Treatments, Meet the team, Membership, Journal, Visit), a prominently differentiated **Book appointment** button; a visible phone number in a sensible place without crowding. Don't rely on tiny anchor navigation for pages with important separate routes. If the entire home has anchor jumps, ensure clear deep-page access.

**Mobile:** accessible menu button; predictable drawer with nested Treatments groups, direct Team/Reviews/Membership/Visit, call, and book; scrolling lock; ESC closes; focus trap/restoration; back-stack works; closing on route change; no overlapping fixed chat badge and CTA. Primary booking action visible within the opening screen or a tested unobtrusive sticky bar. **On mobile, one fixed primary action maximum** when Ask Raina is closed; chat launcher cannot obscure it.

**Footer:** full and consistent identity, address, exact current business hours, functional click-to-call (`tel:+16303814021`), directions URL, book appointment, main treatment groups, team, reviews, membership, insurance/payment, privacy/Notice of Privacy Practices, Facebook if valid, copyright current year, association links only if accurate. Remove photo credits for assets no longer used, and any unverified credential affiliation claims.

### 5.2 Booking system — P0

- Determine whether the live legacy `patientviewer.com` embed is functional and the office still uses it. Restore the **actual booking experience** on `/care/appointments/` using the approved provider. If iframe embedding is technically blocked by security headers, use an approved full-page external scheduling URL, with clear label, not a broken embedded rectangle.
- The button **“Book appointment”** must lead to a working schedule/start step, not a generic phone page. If provider capability cannot be restored, label the fallback **“Call to schedule”** with `tel:`; do not pretend online booking exists.
- Appointment paths: new patient, existing patient, emergency; preserve context where provider supports it without sending unapproved sensitive details to third parties. Explain when a call is required. Include operating hours, cancellation/rescheduling path if provided, and scheduling support phone.
- Test actual scheduling to a safe non-submission stage in mobile and desktop; do **not** place a live booking or submit personal patient data during automated QA. Handle loading/error/blocked third-party cookies/iframe overflow.
- No patient medical history in a generic website contact form/chat. Route to practice-approved secured intake when needed.

### 5.3 Trust elements

- Real doctors prominent early; qualifications and treatment scope verified; no invented member organizations, reviews, years or awards.
- Genuine testimonials as social proof on home and reviews page, with source/attribution and required permission; avoid fake aggregate scores or structured-data reviews that violate Google rules.
- Real photos (when supplied): genuine providers and office; do not quietly replace with AI-generated people, fake patients or fabricated cases.
- A clear "What to expect" section, care process and patient comfort explanations, not just abstract mission statements.
- Meaningful transparency about insurance, membership, financing, treatments and limitations.

### 5.4 Treatments directory/search

- Homepage should showcase 6–9 principal destinations with a concise **View all treatments** action rather than overwhelm the hero with the entire 20+ destination directory. The full directory can be a dedicated `/care/` index **NEW BUILD** (preferred), accessible directly from Treatments navigation, with categorized lists, descriptions, and search/filter.
- Search must **actually work**: labels, keyboard, `Enter`, empty query, zero results, typo/alias matching for relevant terms ("cleaning", "fillings", "mercury removal", "implants", "Invisalign", "emergency", "gum care", "sleep apnea"), real hrefs. Never add a decorative nonfunctional search field.
- Avoid showing "SMART", ozone, or massage as the only choices while hiding everyday preventative and restorative dentistry. Explain both holistic positioning and mainstream competence.

### 5.5 Shared editorial service page system

**Never again ship the same 1-sentence + 2 bullets page everywhere.** Use a composable set of components tailored to the substance of each page:

1. Eyebrow category, clear benefit-led H1, specific 2–3 sentence intro, **Book consultation / Call now** CTA.
2. "What it helps with" or "When it may be considered" (practical indications; no diagnosis).
3. "Your options" or "How treatment works" with meaningful distinctions (2–5 stages where real).
4. "The Raina approach" grounded in real practice behavior and approved protocols (not generic slogans).
5. "What to expect" before/during/after, contraindications/risks where relevant, individualized outcomes.
6. 3–5 nontrivial **FAQs** (substantive answers, not just more questions to ask) as visible text or accessible accordion; especially valuable on complex pages.
7. Relevant team link, one/two genuinely related treatments, CTA and contact fallback.
8. Image slot planned with actual treatment/office asset; no medically inaccurate decorative diagrams or staged fake testimonials.

**Density depends on intent:** major implant/SMART/sedation pages ~650–1,000 informative words as useful, standard pages ~400–700, focused small services ~300–550; quality and clinical approval matter more than quotas. Avoid padding for SEO; scan-friendly sectional hierarchy and no repeated generic filler.

### 5.6 AI assistant “Ask Raina”

Retain only if it functions correctly and is authorized; make it a restrained helper rather than a primary hero feature. Scope: hours, address, link to services, booking paths, membership FAQs, general treatment background **from approved content only**. Not diagnosis, risk assessment, personal treatment plans, emergency triage beyond safe redirection, claims about insurance verification or appointment availability without actual integrations. Add visible human handoff. Respect privacy, content moderation, rate limiting, sanitization, prompt-injection defenses and logging/data retention policies. Never say “demo chat” publicly. For symptoms or personal health data, gently redirect to phone/secure channel; for severe emergency direct to emergency services. Test keyboard, small screens and overlay close behavior.

### 5.7 Accessibility and responsive behavior

Target **WCAG 2.2 AA**, no severe axe failures. Semantic main/nav/footer landmarks, skip link, logical tab order, labeled form controls, meaningful alt text, focus indicators, menu focus management, color contrast 4.5:1 for normal text and 3:1 for large text and essential non-text UI where applicable, minimum comfortably usable hit areas (44px preferred), text resize/zoom to 200%, reduced motion, live-region announcement for search results and assistant output. Do not trap focus in hidden widgets.

Test viewport matrix **320, 360, 375, 390, 430, 768, 820, 1024, 1280, 1440, 1920 px** widths (representative heights), portrait/landscape, and 200% zoom. No clipped header/CTA, misplaced fixed badge, overflow, unreadable narrow columns, overlapping cards, orphan headings, broken typography or sticky overlays that cover input/submit. Test iOS Safari and Chrome Android if available; desktop Chrome/Firefox/Safari-equivalent engines.

### 5.8 Performance and hardening

Core Web Vitals targets (field p75 when available): **LCP ≤2.5s, INP ≤200ms, CLS ≤0.1**. Aim Lighthouse mobile performance ≥90 on representative pages **where measurable**, accessibility ≥95, best practices ≥95, SEO ≥95; if third-party embeds drive lower performance, record impact rather than gaming tests. Preload only genuine hero asset/fonts, use WOFF2 with licensing, responsive `srcset/sizes`, modern formats and appropriate fallbacks, below-fold lazy loading (not hero), fixed dimensions, minimal hydration, code-split large chat/scheduler, defer unnecessary third-party scripts. Never ship unused giant libraries, console warnings or broken images. Add robust HTML statuses (404 for not found; not a 200 SPA fallback).

### 5.9 SEO and measurement

- One substantive unique title and meta description per indexable page; unique H1; descriptive slugs, breadcrumbs for nested pages, OpenGraph/Twitter previews with production image assets.
- Valid canonical on **production domain** only; stage environment should be appropriately `noindex` and protected from duplicate indexing; check robots/sitemap environment separation.
- XML sitemap index only real indexable URLs; robots not blocking required production pages; internal links never point to CloudFront after cutover.
- JSON-LD: correct `Dentist`/`LocalBusiness` (name, address, phone, hours, provider data if verified), `BreadcrumbList`; `Article` for genuine approved journal posts; avoid unsupported ratings/review snippets.
- Redirect map one hop, test old URLs and trailing-slash variants; keep historical redirects long-term; monitor Search Console/Analytics after go-live.
- Tracking only with legal/privacy review: anonymous aggregated CTA click and appointment-start/conversion where lawful/provider-supported, click-to-call, directions, service search use, and funnel drop-off. Never indiscriminately send symptoms, chat messages, health form fields or sensitive URL parameters to general analytics platforms.

### 5.10 Legal / content safety

The website is a healthcare provider website. Review HHS tracking technology guidance, applicable HIPAA/privacy rules and state advertising requirements with the practice. Website privacy policy != HIPAA Notice of Privacy Practices. Secure appointment/intake workflows must use authorized services. Claims about biological care, mercury, ozone, IV sedation and links between dental and systemic disease must receive clinician review. Preserve scientific balance, do not promise systemic cure, painless procedures, automatic same-day placement or universal outcomes. Consent requirements apply to before/after photos and patient stories.

---

## 6. Page-by-page remediation instructions

**For every page below:** preserve shared header/footer/booking/human contact; write original clinically defensible copy; implement correct per-page metadata, breadcrumbs when useful, mobile layout and meaningful alt text; don't duplicate the same generic two-question panel; cross-link only genuinely relevant treatments. The page-specific module order may vary to achieve a refined editorial rhythm. **A page is not complete merely because it has a title and links.**

### P01 — Homepage `/`

**Present condition:** Clear biological/whole-person headline; comprehensive service directory; four features (SMART, ozone, massage, membership); technology, membership, team, first-visit, journal, location and chat. Public text still relies heavily on questions/uncertainty. Hero structure and actual visual execution require browser assessment.

**Required page concept:** A welcoming, exceptionally elegant introduction to a **real, established Naperville dental practice**, not a generic medical theme. Emphasize the experience, clinician, expertise and immediate action.

**Final information hierarchy (implement, adjust for imagery):**
1. **Hero:** High-quality authentic portrait/interior asset slot; eyebrow `RAINA DENTAL CARE · NAPERVILLE, IL`; H1 `Biological dentistry. Whole-person care.`; original concise supporting text naming Dr. Mandeep Raina and prevention/material-conscious care; clear **Book an appointment** primary and **Explore our approach** secondary; clear phone access.
2. **Trust signal band:** Only verified statements: founded/years, dentists' verified qualification highlights, treatment breadth or patient-centric philosophy. Don't invent reviews/awards, don't print giant filler metrics.
3. **The philosophy:** Distinct, confident explanation of fluoride-free, mercury-free and mercury-safe terms (if current), where conventional and complementary care fit, evidence-based limits. Link SMART/Approach.
4. **Signature editorial feature:** SMART and biological dentistry anchor; ozone as a carefully positioned adjunct only if currently used. Massage **must not occupy the same signature prominence** unless confirmed available and strategically intended.
5. **Find care:** Showcase the popular practical treatment pathways (preventative, emergency, implants, restorative, cosmetic, pediatric, sedation), with a clear path to full service directory and functional search.
6. **Meet your dentists:** Substantial introduction to Dr. Raina and Dr. Prameela with real headshots, brief specific backgrounds and link to team page. Do not call them generically “providers.”
7. **How we care:** Three meaningful experience pillars: listen/understand, explain options/plan thoughtfully, treat/follow up. Avoid duplicative marketing clichés.
8. **Technology:** Only confirmed tools/practice uses, visually credible equipment photography, and description of how it improves transparency/precision without implying every patient gets every technology.
9. **Patients' experience:** Three authentic testimonials with source attribution plus view all reviews; no fictional star aggregate.
10. **Membership:** Well-designed adult/child summary or one editorial promotion, current price/eligibility conditional on approval; link comparison.
11. **Visit and book:** Specific address, hours, phone, directions, embedded map only if useful/performance safe, booking CTA and insurance link.
12. **Journal:** 2–3 **approved** posts only; if not clinically approved, do not show publicly. Footer.

**Craft instructions:** Hero should be visually singular, not competing CTAs/cards/quotes; vary section composition, use high-end typography, strong whitespace and controlled image proportions. Avoid six competing boxed categories in the first fold. Mobile first-screen should clearly show mission + booking. Do not let chatbot cover core CTA.

**Acceptance:** User understands practice and books in ≤2 intentional interactions from home. All named offers, team facts and prices matched to approval ledger. Zero broken directory links; mobile H1 no overflow; real trust elements visible before long scrolling.

**Sources:** [old home](https://www.rainadentalcare.com/), [new home](https://d1m6u7zewxrhn7.cloudfront.net/).

### P02 — Treatment directory **NEW BUILD** `/care/`

**Why:** The new home shows 20+ links in six clusters; search is embedded in a long landing page instead of a dedicated scalable service-finding experience.

**Build:** A refined treatment index with intro, 6 categories, one-line descriptions for every service, prominent common intents (“I need help today”, “I want implants”, “I’m new”, “I’m curious about biological care”), real search with aliases and keyboard behavior; filter by category; empty-state suggestions; booking fallback. Highlight SMART without burying general services. All 23+ pages below are discoverable from search/directory. Ensure `Treatments` menu opens directory and menu categories. Not required to expose unconfirmed services prominently.

**Acceptance:** Search for `implant`, `cleaning`, `invisalign`, `mercury`, `extraction`, `sleep`, `kids`, and `emergency` returns appropriate destinations and working URLs; all services reachable in ≤3 taps from homepage/mobile menu.

### P03 — Approach / biological dentistry **NEW BUILD optional dedicated** `/care/approach/`

**Rationale:** Existing nav “Our approach” is an on-home anchor. A dedicated page is strongly recommended for an established signature brand and a richer answer to “what is biological dentistry?” without overwhelming the hero.

**Build if sufficient approved substance:** Explainer of whole-person approach; patient history and shared decision-making; clearly define fluoride-free, mercury-free, mercury-safe; material selection; ordinary prevention/restorative clinical standards; limits of evidence and safety protocols; how SMART is considered only when removal is clinically indicated; clinic philosophy; specific doctor-led differentiators; link to trusted resources and consultations. Avoid claims that alternative therapies are scientifically established where evidence is limited. Link from hero and navigation. If no substantive approved copy can be produced, keep a robust homepage approach section instead of a thin new page.

### P04 — Meet the team `/care/team/`

**Current regression:** Old About Us page has real depth and both biographies. New team page contains a single brief paragraph and one Dr. Raina image.

**Must restore:**
- Dr. **Mandeep Raina, DDS**: NYU DDS graduation (2002 according to old copy), early volunteer experiences, patient empathy, preventive education, prior community service, stated advanced training in implant rehabilitation and full-mouth reconstruction, personal interests **only after fact-check/approval**. Avoid stale “14 years” experience math or claims of board certification not provided.
- Dr. **Prameela B**: Current practice bio states holistic care, preventive focus, restorative/cosmetic/family experience, ongoing education and interests including reading, gardening and family. Obtain exact professional display name, degree suffix, accurate title, training and role before final publication; do not invent credentials.
- Both doctor headshots and optional team image slots. Each dentist deserves a discrete profile, not just name-dropping. Explain who patients may see, what they value, treatment interests they actually perform and their approach to anxious patients.

**Structure:** Editorial dual-profile intro; lead doctor portrait plus narrative; second clinician portrait plus narrative; why the team practices this way; what patients experience; booking block; optional staff only with approved info. Where possible include a 1–2 sentence authentic practitioner quote with attribution **only if supplied/approved**.

**Acceptance:** Both bios are comparable in perceived respect; every qualification verified; booking visible; no stock models presented as doctors. Sources: [old about](https://www.rainadentalcare.com/about-us/), [new team](https://d1m6u7zewxrhn7.cloudfront.net/care/team/).

### P05 — Patient reviews `/care/patient-stories/`

**Current regression:** New page is almost entirely an external Google Maps link. Old `/reviews/` presents multiple named reviews, including patients describing holistic care, gentle staff, clean environment and long relationship with practice.

**Build:** Genuine on-site review editorial: descriptive H1 and intro; curated 6–10 **authentic source-verified** reviews, source platform, reviewer display name/initials if permission appropriate, dates where reliable, clinical claims left as first-person opinion not practice-endorsed outcomes; optional thematic highlights (“heard and understood”, “calm environment”, “long-term trust”); separate “Read more on Google” with real destination and “Book a visit.” Avoid fabricated star graphics, cross-site cherry-picked aggregate scores or stale unverifiable numbers. Sanitize old copy and avoid exposing unnecessary sensitive treatment detail or reproducing text without appropriate permissions.

**Acceptance:** Patients can read reviews without leaving site; source links work; long text collapses accessibly on mobile if needed; no synthetic testimonials or author-made scores. Sources: [old reviews](https://www.rainadentalcare.com/reviews/), [new reviews](https://d1m6u7zewxrhn7.cloudfront.net/care/patient-stories/).

### P06 — Book / plan your visit `/care/appointments/`

**P0 current regression:** Old `/schedule-online/` embeds PatientViewer; new page offers phone-only path.

**Implement:** Booking hero with reassuring promise and immediate integrated/verified scheduling UI; properly labeled “New patient” / “Existing patient” choices only if provider supports them; clear “Prefer to speak with us? Call (630) 381-4021”; urgent dental issue -> direct phone action; arrival details (bring insurance card/med list only within secure intake), what the first visit normally involves, where to go and parking/accessibility if confirmed. Clear iframe external link fallback for blocked embeds. On short screens the scheduler may need to open in a new tab rather than overflow. Privacy notice for external provider.

**Acceptance:** The booking action reaches a real appointment selection/start page on desktop and phone, with no dead-end buttons; fallbacks work; hours/phone consistent. No hypothetical provider availability shown. Sources: [old scheduling](https://www.rainadentalcare.com/schedule-online/), [replacement](https://d1m6u7zewxrhn7.cloudfront.net/care/appointments/).

### P07 — Contact and visit **NEW BUILD** `/care/contact/`

**Rationale:** Old `/contact/` is richer (phone, hours, map, CareCredit, cards) than replacement's scattered contact details. Build a true high-quality visit/contact page, instead of relying on the appointment page for all intents.

**Required:** Correct address **2323 Naperville Road, Suite 110, Naperville, IL 60563**; phone **(630) 381-4021** (`tel:+16303814021`); published current hours subject to confirmation: **Mon 12–6pm, Tue 9am–5pm, Wed closed, Thu/Fri 9am–5pm**; directions link to correct location and accessible map; parking, suite/entrance and transit/accessibility only if verified; insurance/payment links; book/call; emergency instructions. A real office exterior/interior photo can anchor location orientation. If form exists, make it **nonclinical general inquiries only** and have an appropriate privacy/security review.

**Acceptance:** Phone, maps, address, office hours and booking work; no duplicate conflicting location data. Source: [old contact](https://www.rainadentalcare.com/contact/).

### P08 — Insurance & payment `/care/payment/`

**Current:** “Call the practice to confirm your plan” + brief mention of CareCredit/cards; fails to explain old site's *out-of-network* framing and potential contradictions.

**Build:** Plain-language section: insurance acceptance/billing based on office-approved exact wording; distinction between in-network vs out-of-network, benefit estimates not guaranteed, how claims/reimbursement are handled, when patients are responsible for fees, payment methods (old site lists Visa, Mastercard, Amex, Discover), CareCredit eligibility/link if currently accepted, membership alternative and transparent “what to ask before your visit.” Add booking/call support. **Do not promise “Most Insurances Accepted” until reconciled with out-of-network policy.**

**Acceptance:** A patient can form a realistic expectation of payment/billing; pricing disclaimers are readable, not hidden; no fake insurance-plan logos. Sources: [old homepage](https://www.rainadentalcare.com/), [old contact](https://www.rainadentalcare.com/contact/), [new payment](https://d1m6u7zewxrhn7.cloudfront.net/care/payment/).

### P09 — In-house membership `/care/membership/`

**Preserve and confirm old published figures:**

| Plan | Published rate, to reconfirm | Published inclusions, to reconfirm |
|---|---|---|
| Standard Adult | **$62.50/month or $750/year** | cleaning every 6 months, oral cancer screening, 1–2 exams/year, X-rays as needed, 1 emergency exam with X-ray/year, teledentistry included |
| Child Wellness, age 12 and under | **$43.33/month or $520/year** | cleaning every 6 months, oral cancer screening, one routine X-ray set/year, 1 emergency exam with X-ray/year, separate fee schedule referenced |

**Must add:** Beautiful, readable, side-by-side desktop plans and stacked mobile comparison; explicit that this is an in-house membership **not insurance** if approved; enrollment process, billing frequency/renewal/cancellation, exclusions, treatment discounts, waiting periods and transferability **only after current plan docs verified**. Benefit qualifiers should not be fabricated; if current terms unavailable, omit uncertain discounts and label “Contact us for current terms.” Strong “Ask about membership / Enroll” only if a real mechanism exists; link to booking/team. Ensure precise decimal math and consistent annual-vs-monthly expression. **Avoid misleading `$43.33 × 12 = $520.00` implication without noting rounding: the monthly amount is displayed as published.**

**Acceptance:** All copied prices/benefits exact, current and clinician/office approved; no responsive card clipping, readable small print. Sources: [old membership](https://www.rainadentalcare.com/in-house-membership-plans/), [new membership](https://d1m6u7zewxrhn7.cloudfront.net/care/membership/).

### P10 — Emergency dental care `/care/emergency/`

**Current:** Minimal call instruction. Old site promised same-day treatment often available and even walk-in/same-day care elsewhere — **verify before claim**.

**Build:** High-visibility “Dental emergency? Call us” with click-to-call immediately in hero. Office number and hours; realistic examples of urgent dental needs (severe toothache, broken tooth, lost restoration, swelling, trauma), brief common-sense guidance that does not replace professional advice; **severe facial swelling with breathing/swallowing difficulty, uncontrolled bleeding, serious injury -> emergency services/ER**; what to expect when calling, safe after-hours instructions if verified; conditional same-day availability wording only if practice confirms; directions and booking as secondary action.

**Design:** Distinct urgent hierarchy, not frightening all-red page; readable call card on mobile; assistant must never intercept urgent CTA.

**Acceptance:** Call reachable in one tap; no unverified same-day slots/availability; crisis escalation text reviewed by clinician. Sources: [old emergency](https://www.rainadentalcare.com/general-dentistry/dental-emergency-naperville/), [new emergency](https://d1m6u7zewxrhn7.cloudfront.net/care/emergency/).

### P11 — Exams & cleanings `/care/exams/`

**Current:** One generic intro and three questions.

**Required page:** Explain routine exam vs cleaning, how clinical history and preferences influence care, possible X-rays and oral cancer screening if indicated, gum assessment, preventive counseling, what appointments may include, who may need more frequent care, family/new-patient path. Keep fluoride-free framing accurate (describe approach, no simplistic claim fluoride is universally harmful). Show authentic clinical imagery slot. FAQs: first exam, cleaning frequency, sensitive teeth, X-rays, child visits. Link oral screening and membership.

**Acceptance:** Meaningful patient education, not just “ask what your exam involves.” Source: [old exams](https://www.rainadentalcare.com/general-dentistry/dental-cleaning-naperville/), [new exams](https://d1m6u7zewxrhn7.cloudfront.net/care/exams/).

### P12 — Oral cancer screening `/care/oral-screening/`

**Current:** generic “ask what dentist looks for.”

**Required:** What oral screening is and isn't, commonly checked mouth/head/neck areas, visible changes a patient may notice (persistent sore, lump, persistent change) without self-diagnosis, factors requiring clinician evaluation, what happens if an area needs follow-up, frequency determined by dentist/health history, connection to routine visit and membership only if inclusion confirmed. No claim screening prevents all cancer or is a diagnosis. Link exams.

**Acceptance:** Clear factual steps and follow-up, not fear-based rhetoric. Source: [old screening](https://www.rainadentalcare.com/general-dentistry/oral-cancer-screening/).

### P13 — Pediatric dental care `/care/pediatric/`

**Current:** two questions, no substantive first-visit guidance.

**Required:** child-friendly visit experience, first visit expectations and age-appropriate scheduling advice (clinician-reviewed), brushing/prevention, how anxiety is handled, parent involvement, routine exams/cleanings, pediatric scope and referral criteria if needed. Child wellness membership cross-link with age 12-and-under distinction. Do not promise pediatric specialty credentials unless verified. Authentic team/family imagery only when authorized.

**Acceptance:** Parent learns how to plan a visit and finds book/call instantly. Sources: [old pediatric](https://www.rainadentalcare.com/general-dentistry/pediatric-dentist/), [new pediatric](https://d1m6u7zewxrhn7.cloudfront.net/care/pediatric/).

### P14 — Dental fillings `/care/fillings/`

**Current:** short generic restoration and materials overview.

**Required:** Indications (decay, chip, worn filling) without individual diagnosis, what a filling generally does, options for tooth-colored restorative materials **only as offered**, longevity/aftercare/sensitivity realistically framed, thoughtful approach to tooth preservation, clear differentiation between repairing damaged restorations and elective amalgam removal. Cross-link SMART page and crowns where large restorations may be discussed.

**Acceptance:** Specific restoration explanation; no broad claim that all amalgam should be removed. New-only distinct service destination.

### P15 — Crowns & bridges `/care/crowns/`

**Current:** one sentence and two bullets.

**Required:** Explain crown vs bridge visually/textually; reasons each may be considered; materials actually offered, planning/impressions and temporaries only if true, visit process, care and lifespan factors; alternatives (implant or denture) with honest tradeoffs; real patient consult CTA. Include a succinct comparison module/table and neutral materials image slot.

**Acceptance:** A user can tell crown from bridge in <20 seconds; no unverified same-day milling. Sources: [old crowns](https://www.rainadentalcare.com/restorative-dentistry/dental-crowns-bridges/), [new crowns](https://d1m6u7zewxrhn7.cloudfront.net/care/crowns/).

### P16 — Dentures `/care/dentures/`

**Current:** brief list of partial/full/fixed questions.

**Required:** Partial versus full denture, removable versus implant-supported possibilities, candidate evaluation, stages of fitting and adjustment, expected adaptation, hygiene and maintenance, reasonable alternatives, aftercare. Avoid “dentures always feel natural / eat anything” language. Related implants/All-on-4 and consult CTA. Clear comparison blocks and imagery of clinically accurate restorations.

**Acceptance:** Explains actual choice dimensions; not an ad for implants disguised as dentures. Source: [old dentures](https://www.rainadentalcare.com/restorative-dentistry/dentures-naperville/).

### P17 — Periodontal treatment `/care/periodontal/`

**Current:** mostly asks visitors to discuss gum health.

**Required:** Explain gum inflammation vs periodontal disease at a general level, common warning signs, evaluation of gum tissue and bone, deep cleaning/scaling and root planing **if currently offered**, maintenance and home care, follow-up intervals personalized, when a specialist referral may be needed, realistic evidence-aware wording on systemic associations (association ≠ causation/cure). Link cleanings and oral screening.

**Acceptance:** Specific treatment pathway with safe clinical boundaries. Source: [old periodontal](https://www.rainadentalcare.com/restorative-dentistry/periodontal-treatment-naperville/).

### P18 — Root canals `/care/root-canals/`

**Current:** “If recommended, ask what the visit involves.”

**Required:** What an infected/inflamed pulp means, why root canal might save a tooth, evaluation and X-ray, normal procedural sequence and anesthetic care without pain-free promises, restoration after root canal (often a crown where clinically appropriate), alternatives including extraction, realistic aftercare and urgent warning signs. The site should not imply this treatment is inherently unsafe because of holistic philosophy. Clarify if Raina performs versus refers complex cases.

**Acceptance:** Balanced explanation, visible common FAQ and book CTA. Source: [old root canals](https://www.rainadentalcare.com/restorative-dentistry/root-canals/).

### P19 — Dental implants `/care/implants/`

**Current:** very thin intro, two questions.

**Required major service landing page:** Missing-tooth problem framing; what an implant consists of (implant post, abutment, crown) and how it differs from bridge/denture; what examination/imaging/health evaluation involves; potential grafting and bone considerations without claiming everyone needs it; multi-stage journey (consult, planning, placement, healing, restoration, maintenance), variable timelines; realistic benefits and risks, who may not be an immediate candidate; hygiene and long-term follow-up; financing/consultation path; FAQs about pain, healing, care, candidate status, implant vs bridge. Clinician confirm exact available procedures and treatment ownership.

**Visual:** a restrained, accurate anatomical explanatory illustration **only if medically reviewed** or real implant consult photography; no photorealistic fake procedure scenes. Designer editorial treatment story, not a wall of text. Strong consultation CTA.

**Acceptance:** A patient can understand how implants work and next steps, and distinguish from All-on-4 and dentures. Sources: [old implant page](https://www.rainadentalcare.com/restorative-dentistry/dental-implants-naperville/), [new implant page](https://d1m6u7zewxrhn7.cloudfront.net/care/implants/).

### P20 — All-on-4 dental implants `/care/all-on-4/`

**Current:** a generic full-arch query page. Old page contains long explanation but also overconfident “teeth in a day,” “only four,” universal healing/bone graft/cost statements and blanket superiority claims.

**Required:** Full-arch fixed implant restoration explanation, relation to four-implant concepts **without guaranteeing exactly four for everyone**, who may be evaluated, bone assessment/CBCT only if actually available, staged treatment, temporary vs final prosthesis and varied timelines, limitations, maintenance, risks, implant-supported vs removable denture comparison, consultation and financing. Remove old “one-day new smile for all” and “eliminates bone grafting” promises unless clinician gives precisely qualified, truthful text. Clearly explain this is a more extensive treatment than single-tooth implants. Add helpful full-arch comparison/diagram only if accurate and approved.

**Acceptance:** No overpromises and no factual confusion with dentures; sophisticated long-form layout with 2 CTAs. Sources: [old All-on-4](https://www.rainadentalcare.com/restorative-dentistry/all-on-4-dental-implants/), [new All-on-4](https://d1m6u7zewxrhn7.cloudfront.net/care/all-on-4/).

### P21 — Oral surgery `/care/oral-surgery/`

**Current:** a stub describing unspecified procedures/referrals.

**Required:** Define scope of surgical dental care Raina currently provides (extractions, implant-related procedures, any other procedures **only if confirmed**), consultation/imaging/preparation, sedation/referral boundaries, recovery expectations and when to seek help. Avoid misrepresenting general dentist as board-certified oral surgeon. Link implants, extractions, sedation and emergency appropriately.

**Acceptance:** Patient can learn which surgery categories are actually available and who handles them. Source: [old oral surgery](https://www.rainadentalcare.com/oral-surgery/).

### P22 — Extractions `/care/extractions/`

**Current:** one sentence about reasons, two bullets.

**Required:** When tooth removal might be necessary and when preservation alternatives are considered; simple/complex/wisdom tooth extraction availability **only if verified**; evaluation and anesthesia; realistic before/after expectations; care following extraction (bleeding, clot care, hygiene and clinician instructions) without personalized advice; warning signs requiring prompt clinician contact; missing-tooth replacement options. Old text mentions STA Wand and walk-ins: **confirm whether this equipment and workflow still exist**, do not repeat unconditional “needle-free” or painless claims.

**Acceptance:** Good candidate education, clear risks, conservative approach. Sources: [old extractions](https://www.rainadentalcare.com/oral-surgery/extractions/), [new extractions](https://d1m6u7zewxrhn7.cloudfront.net/care/extractions/).

### P23 — Braces & Invisalign `/care/aligners/`

**Current:** generic two questions.

**Required:** Distinguish conventional braces and clear removable aligners, common goals/limitations, evaluation and records, treatment duration variability, hygiene/wear, follow-up and retainers, younger vs adult patients, provider/referral clarity. Verify Invisalign brand and current offering; do not state they have an orthodontist on staff without confirmed specialty credentials. The legacy page repeats keyword-heavy claims and confusing professional titles: **do not import its spammy wording.** A clean comparison chart is useful.

**Acceptance:** Clear options; modern minimalist layout; genuine Invisalign trademark/brand treatment only if authorized. Sources: [old orthodontics](https://www.rainadentalcare.com/orthodontics/braces-invisalign-naperville/), [new aligners](https://d1m6u7zewxrhn7.cloudfront.net/care/aligners/).

### P24 — Teeth whitening `/care/whitening/`

**Current:** generic whitening paragraph.

**Required:** Two-path explainer: in-office vs dentist-supervised at-home whitening; **old site names Zoom and Opalescence**, verify use before naming. Evaluation (stains, restorations, sensitivity), expected variability, suitability, aftercare and reasonable longevity, limitations for crowns/veneers, common FAQs. Never promise a fixed shade gain or lifetime results. Remove inaccurate old cross-brand mention “The Tooth Spa” and unsupported pricing/safety absolutes.

**Acceptance:** A prospective cosmetic patient sees actual choices, knows what to ask, and can book. Sources: [old whitening](https://www.rainadentalcare.com/cosmetic-dentistry/teeth-whitening-naperville/), [new whitening](https://d1m6u7zewxrhn7.cloudfront.net/care/whitening/).

### P25 — Veneers `/care/veneers/`

**Current:** vague veneer introduction.

**Required:** Who veneers may help (shape, small chips, discoloration in appropriate cases), porcelain vs composite **only if actually offered**, planning/shade/material choices, preparation and potential irreversibility, temporary veneers if applicable, lifespan/maintenance, alternatives whitening/bonding/orthodontics, why patient selection matters. Before/after gallery **only with consent and true cases**, never synthesized. Explain that veneers are not required for every cosmetic concern.

**Acceptance:** Balanced elective-treatment information, appropriate disclaimer and consult. Source: [old veneers](https://www.rainadentalcare.com/cosmetic-dentistry/veneers-naperville/).

### P26 — Sedation options `/care/sedation/`

**Current:** says to ask about available options, none named; old page describes **oral sedation**, **IV sedation** and **nitrous oxide**.

**Required:** **P1 factual confirmation** of which three options are currently offered, by whom and for which procedures. Present verified options clearly in easy-to-scan comparison (level of sedation, general experience, whether escort required where applicable), medical history/safety screening, preparation, aftercare, alternatives for anxiety, and candid limits. No “pain-free” or universal suitability promises. Remove obsolete drug dosing/protocol details from old text unless the practice wants clinician-reviewed information. If IV sedation no longer available, **do not advertise it** merely to match old SEO content; explain only current modalities.

**Acceptance:** Patients see actual options with safety context. Sources: [old sedation](https://www.rainadentalcare.com/sedation-dentistry/sedation-dentistry-naperville/), [new sedation](https://d1m6u7zewxrhn7.cloudfront.net/care/sedation/).

### P27 — SMART amalgam removal `/care/smart/`

**Current:** basic IAOMT protocol definition plus appropriate FDA caution on intact fillings. Good medically restrained foundation, but not sufficiently informative for the practice's signature differentiation.

**Required signature explainer:** What dental amalgam is; clinical reasons an older filling may need evaluation; FDA stance on intact amalgam and risks of unnecessary removal; distinction between **decision to replace** and **precautions used if replacement is clinically indicated**; what SMART refers to (IAOMT protocol); actual practice precautions *only if documented*; restorative material selection, expected evaluation/process/aftercare and suitable questions; cautious evidence-based health positioning. Link FDA source and IAOMT resources as further reading, not as certifications absent confirmation. Avoid implying SMART automatically makes removal risk-free or that amalgam is always a cause of systemic illness. Relevant link to fillings and the dedicated materials journal.

**Design:** flagship editorial page with confident explanation, one beautiful clinical photo/illustration slot, a readable step-by-step **consultation/process** component, caveat in elegant plain prose—not a defensive warning box at every turn.

**Acceptance:** Clear expertise without sensational claims; FDA caveat retained; substantial signature content. Source: [new SMART](https://d1m6u7zewxrhn7.cloudfront.net/care/smart/).

### P28 — Dental ozone therapy `/care/ozone/`

**Current:** extremely vague (“ask how practice considers it”). Old page contains much more detailed enthusiasm; some efficacy claims may be disputed.

**Required:** What dental ozone is in broad factual language, potential adjunct use contexts **actually offered by Raina**, what it is **not** a substitute for, how it may fit within a conventional care plan, why practitioner discretion/evidence limitations matter, contraindications/safety considerations with clinician approval. Avoid definitive claims of curing caries, gum disease or infections solely with ozone. If current use is narrow, say so clearly instead of implying universal availability. Link SMART where contextually relevant and show the real team behind decisions.

**Acceptance:** Concrete yet scientifically restrained explanation; no generic "discuss options" page. Sources: [old ozone](https://www.rainadentalcare.com/restorative-dentistry/ozone-therapy-in-dentistry/), [new ozone](https://d1m6u7zewxrhn7.cloudfront.net/care/ozone/).

### P29 — Therapeutic massage `/care/massage/`

**Critical availability conflict:** Prominent signature card on home; service page tells people to call to find out whether it exists.

**Decision tree (do not guess):**
- **Confirmed active offering:** Name the nature of service, licensed practitioner/credentials, treatment locations, general indications and exclusions, scheduling, session duration/fees **only if approved**; distinguish wellness massage from dentistry and don't promise medical benefit. Curated dedicated page and homepage inclusion only if a meaningful part of practice positioning.
- **Paused/unavailable/unconfirmed:** Remove from home signature tiles and treatment search/navigation; either unpublish route with correct 404/410 according to SEO history or publish a minimally honest availability page only if patients need it; no prominent lead generation for a service the office cannot supply. Update internal links and sitemap.

**Acceptance:** There is **no public ambiguity** about whether Raina is currently offering the advertised service. Source: [current massage](https://d1m6u7zewxrhn7.cloudfront.net/care/massage/).

### P30 — Pain management `/care/pain-management/`

**Current:** minimal page says practice “lists pain management,” advises not to enter symptoms in “demo chat” (staging language).

**Required:** Confirm if this means dental pain management, TMJ/orofacial pain, or an unrelated wellness service. Describe **only** real evaluation and interventions offered and referral boundaries. Explain visit pathway and when to call for urgent dental pain. If not a distinct service, merge into emergency or appropriate treatment page and adjust links/SEO according to crawl inventory. Remove “demo chat” language. Avoid broad medical pain-specialist claims.

**Acceptance:** Service scope is specific; not a placeholder or duplicative doorway page. Source: [current pain](https://d1m6u7zewxrhn7.cloudfront.net/care/pain-management/).

### P31 — Sleep apnea `/care/sleep-apnea/`

**Current:** generic suggestion to discuss coordination with another clinician.

**Required:** Explain the dentist's specific role in sleep-related breathing disorders **if offered** (e.g., evaluation for oral appliance therapy only if actual), medical diagnosis remains with qualified clinician, how referrals/testing and follow-up may work, options and limitations compared with PAP therapy, who might discuss this, and patient next step. Do not say the dentist diagnoses sleep apnea unless licensed/authorized and confirmed. If no active service, make discovery/positioning honest.

**Acceptance:** Patient can distinguish dental support from physician diagnosis; service availability confirmed. Source: [current sleep](https://d1m6u7zewxrhn7.cloudfront.net/care/sleep-apnea/).

### P32 — Dermal fillers `/care/dermal-fillers/`

**Current:** advertises fillers but says call about current availability and provider.

**Required:** Confirm whether offered, clinician training/licensure and the precise cosmetic treatment scope, general purpose, consultation, contraindications and recovery/risk overview, realistic results and maintenance; refer to practice-approved regulatory information. If not offered, remove or archive honestly. No unsupported before/after photos or promises. Keep distinct from dental treatment unless the connection is explicitly explained.

**Acceptance:** No unqualified advertising; clear real clinician and availability. Source: [current fillers](https://d1m6u7zewxrhn7.cloudfront.net/care/dermal-fillers/).

### P33 — Additional services index **NEW BUILD** `/care/additional/`

**Why:** Legacy combined page covers pain management, sleep apnea, dermal fillers; need an exact reasonable migration target instead of arbitrarily choosing one.

**Build:** Informative lightweight hub for **only active confirmed services** with a summary, scope and links to the three accurate pages. If none are confirmed active or old URL has little search value, determine a more relevant permanent redirect based on real inventory and avoid generating a deceptive hub. Every listed card must have meaningful current content.

**Acceptance:** Old combined path resolves to a useful relevant destination, not an empty index. Source: [old combined](https://www.rainadentalcare.com/additional-services/sleep-apena-dermal-fillers-pain-management/).

### P34 — Technology (home section; optional dedicated `/care/technology/`)

**Current:** Home mentions digital impressions and imaging for implant planning while asking which tools are present. Cannot claim equipment is owned without confirmation.

**Required:** Verify actual installed technology, model and usage (intraoral scanner, CBCT, digital X-ray, STA Wand, laser, etc. **only if used**); use real photos and accurate claims, with a patient-benefit explanation for each device. Strong editorial photography and captions; keep on home if only two verified tools; dedicated page only if 3+ meaningful capabilities warrant depth. Link to relevant treatments, not vague “ask the practice what tools it uses.”

**Acceptance:** No inferred equipment ownership. Source: [new home technology](https://d1m6u7zewxrhn7.cloudfront.net/).

### P35 — Website privacy `/care/privacy/`

**Current:** Short “don’t enter personal/health information in the website assistant” notice; incomplete for a production site with potential third-party analytics, scheduling, chat, forms and embedded maps.

**Required:** Replace with an **attorney/privacy-owner-approved** privacy policy accurately naming relevant data categories, processors, purposes, legal basis where applicable, cookies/analytics, security, retention, contact methods, external links and user rights. Link actual Notice of Privacy Practices if office provides it; do not create a false HIPAA attestation or use a generic template as certified compliance. Check vendor contracts, PHI exposure and tracking tech. Provide updated date/version. Chat should have visible concise disclaimer and enforced technical safety controls, not merely written admonition.

**Acceptance:** Policy matches live site behavior; actual links; no claims about data handling without implementation evidence. Source: [new privacy](https://d1m6u7zewxrhn7.cloudfront.net/care/privacy/).

### P36 — The Raina Journal index `/journal/`

**Current:** Six previews, page explicitly displays **“Editorial preview · Pending review by Dr. Raina.”**

**Required:** Editorially polished grid/list with article titles, accurate categories/read-time only when calculated, dates, thumbnail aspect ratios, practitioner/editor attribution **only when approved**, brief excerpt and clear canonical URL. Remove all drafting/status strings. Stage each article behind approval; if not approved by publication, remove from homepage/journal/public sitemap or unpublish journal entirely until ready. Maintain real cross-links to treatments where appropriate, not SEO stuffing. Use patient education value, not fabricated claims.

**Acceptance:** Every exposed post is clinically approved, linked, useful and dated/attributed correctly; no drafts publicly visible. Source: [journal](https://d1m6u7zewxrhn7.cloudfront.net/journal/).

### P37 — Journal: `what-biological-dentistry-means`

URL: `/journal/what-biological-dentistry-means/`  
Title currently: **“What does whole-person dentistry look like?”**

**Remediation:** Provide an original clear explanation that a standard exam remains grounded in oral health while history, prevention, materials preferences, patient values and shared decisions contribute. Include practical examples of questions a patient might bring and a responsible note that broader health links do not replace dental clinical standards. Link Approach/Exams, Dr. Raina profile and consult. Remove draft label, obtain clinical approval, article structured data only once published.

### P38 — Journal: `silver-fillings-and-smart`

URL: `/journal/silver-fillings-and-smart/`  
Title currently: **“Should a silver filling be replaced? Start with the reason.”**

**Remediation:** Current article usefully distinguishes when to replace from how to remove and links FDA/IAOMT. Preserve **FDA preference against unnecessary removal of intact amalgams**, tooth-structure implications, clinician assessment, SMART as a protocol *when removal occurs*. Expand into a readable, original question-led explanation, not mercury alarmism. Clinician review and clear connection to SMART treatment page; remove draft label.

### P39 — Journal: `what-dental-images-can-show`

URL: `/journal/what-dental-images-can-show/`  
Title currently: **“What a dental scan can help you see”**

**Remediation:** Distinguish digital optical impressions from X-rays/CBCT; explain what each can and cannot show, how a dentist uses images to inform discussion, and only attribute technology directly to Raina if confirmed. Link technology/implants/exams. No equipment promises; remove draft status.

### P40 — Journal: `questions-about-dental-ozone`

URL: `/journal/questions-about-dental-ozone/`  
Title currently: **“Three questions to ask about dental ozone”**

**Remediation:** Keep evidence-aware and specific: adjunct use, alternative/standard care, risks/limitations, expected follow-up. Avoid unsubstantiated claims and conventional-care replacement language. Clinician approved and internally linked to current ozone page; no draft label.

### P41 — Journal: `a-calmer-first-visit`

URL: `/journal/a-calmer-first-visit/`  
Title currently: **“How to make a first dental visit feel more manageable”**

**Remediation:** Practical, empathetic visit preparation: what to expect, how to share anxiety/preferences privately with staff, general comfort options and appointment process **confirmed**; real consultation CTA. No prescriptive sedation claims; no draft status.

### P42 — Journal: `what-a-preventive-visit-is-for`

URL: `/journal/what-a-preventive-visit-is-for/`  
Title currently: **“Make your next preventive visit count”**

**Remediation:** Meaningful exam/cleaning expectations, updates to health or oral conditions, reviewing changes and preventive actions; practical patient education, distinct from a generic homepage paragraph. Link exams and pediatric/membership if appropriate. Remove draft status.

### P43 — 404, errors, privacy/error states, and indexability

**NEW BUILD / shared pages:** Branded 404 with refined type, one helpful sentence, buttons to Home/Treatments/Book, real HTTP 404; booking scheduler blocked/failed state with true phone/external fallback; chat failure -> gracious human contact; service search empty state; 500/server failure strategy; protected/unpublished posts return the appropriate status; no staging errors or raw stack traces. Verify missing pages don't resolve to unhelpful `200` fallback.

---

## 7. Copywriting and content QA rules

### 7.1 Editorial voice: say useful things directly

**Weak current pattern:** “Ask about the procedure, alternatives and follow-up directly with the practice.”  
**Better pattern:** “We’ll begin by examining the area, explain the available options, and walk you through the likely sequence of appointments. The plan depends on your oral health, priorities and clinical findings.”  
The second example describes what the visit is for without promising a particular treatment or result. Use confident, precise writing, not a wall of hedging. Only state “we do [specific thing]” when validated.

**Voice checklist:**
- Write for an intelligent patient, not a search engine; define clinical jargon upon first use.
- Short opening paragraph that answers the search intent; strong subheadings, plain comparisons, useful FAQs.
- Show empathy through concrete patient considerations, not clichéd “We care about your smile” filler.
- No unnecessary exclamation marks, overly promotional superlatives or repeated statements about being “the best dentist in Naperville.”
- Explain both benefits and relevant limitations; no scare language about mercury, root canals, fluoride, implants or systemic health.
- Present all optional complementary therapies as **optional/supporting** where appropriate, never in place of indicated standard care unless the practice/clinician explicitly approves precise language.
- Use Naperville precisely in title/location where relevant; no stale Bolingbrook-first positioning, old dates (e.g. “new location opening September 2024”) or old website credit lines.
- Sitewide usage: `Raina Dental Care`, `Dr. Mandeep Raina, DDS`, `Dr. Prameela B` unless verified full legal/professional names provided; consistent `All-on-4`, `Invisalign` brand formatting, `SMART` acronym expansion on first occurrence.

### 7.2 Content validation matrix (create `CONTENT_APPROVAL_MATRIX.md`)

Each page gets: **route | page owner | changed title/H1 | content sourced from old/new/approved docs | facts requiring verification | draft updated | dentist approval | legal review (if needed) | publish eligibility | screenshot QA status**. Keep a single source of truth; never embed questionable facts in unrelated components.

**Practice approvals to collect centrally (not invent):**
1. All clinicians' correct names, degree suffixes, licenses/titles, education/advanced training and active service scope.
2. Current appointment provider URL/embed, supported appointment types, cancellation/reschedule and new patient flow.
3. Phone, address, location/parking, hours, holiday and emergency policy including walk-ins/same-day.
4. Insurance network status vs out-of-network billing; major credit cards; CareCredit availability and terms.
5. Membership current pricing, coverage, exclusions, enrollment, cancellation and discount terms.
6. Current SMART membership/protocol/certification statements; real steps the practice follows.
7. Current dental ozone usage and limitations; confirm therapeutic massage, pain service, sleep apnea, fillers.
8. Current sedation methods, qualifications and referral protocol.
9. Zoom/Opalescence, Invisalign, dental scanners/imaging, STA Wand, laser and other equipment actually used.
10. Consent, source and permission to display reviews, portraits, before/after cases, and all photos.
11. Clinical sign-off on all journal posts and medical explanations; disclaimer language where appropriate.
12. Privacy, cookies, analytics, chat vendor and booking provider; Notice of Privacy Practices and data-retention policies.
13. Social media, Google Maps business listing and professional association memberships/links.

**Important:** The author must not block simple CSS/UX/code improvements while waiting for fact validation; isolate unapproved facts and mark them nonpublishable. An internally honest unresolved list is not the same as shipping a site littered with “ask if this service is offered.”

---

## 8. Detailed responsive, visual and interaction QA execution

### 8.1 Required screenshot capture protocol

For **every public route** (all P01–P43 relevant pages after optional/approval decisions):

- Screenshot at **390×844** and **1440×900**, full-page and first viewport. For major experiences (home, booking, directory, team, membership, reviews, SMART, implants, All-on-4, emergency, journal) add **320×700**, **430×932**, **768×1024**, **1024×768**, **1920×1080**.
- Capture interactive states: mobile menu open/closed; treatment search with results/no results; keyboard-focused CTA; FAQ open; chatbot open/typing/error; booking provider loading/successfully reached/fallback; phone and directions targets; pricing cards on mobile.
- Visually inspect **every capture** for: hierarchy, page rhythm, typography, contrast, crop/focal point, line breaks, inconsistent padding, visual repetition, lack of substantive content, low-quality generic treatment modules, too-tall empty sections, footer not reaching full width, sticky overlays, chat launcher collision, horizontal overflow, unbalanced columns and abrupt page endings.
- Repeat screenshots after fixes and keep only final **pass** captures in `qa/screenshots/final/`. Do not mark “visually approved” from automation without viewing the screenshots.
- A staging placeholder photo should not be considered a reason to ignore image-slot layout quality: check crop, dimensions, fixed placeholders, lazy loading and fallback states.

### 8.2 Gold-standard page-by-page visual tests

| Page group | What must feel best in class | Common failure to catch |
|---|---|---|
| Homepage | An art-directed distinct brand, one dominant hero, story + doctor trust, booking unmistakable | Busy directory, too many near-identical boxes, stock medical style |
| Doctor/team | Premium portrait editorial treatment, deep authentic story, equal respect for both clinicians | Tiny cropped doctor photo, generic bio card, empty “team” page |
| Service cornerstone (SMART, implants, All-on-4, sedation) | Deep but elegant, curated sidebars/comparisons, visual breath, credible information | 80-word landing page, repeated generic FAQ, walls of text |
| Everyday service pages | Intent answered immediately; concise confident copy, readable process, next step | Empty whitespace masquerading as luxury |
| Reviews | Genuine human voices with tasteful attributed typography | Fake ratings; plain “Go to Google” dead end |
| Appointment | Calm scheduling experience that functions end-to-end | Header button goes to “please call us”; broken iframe/mobile overflow |
| Membership | Prices and differences intelligible at a glance | Small-print overload, misaligned price cards |
| Journal | Editorial magazine quality, clear topic/care link, no draft status | Generic identical teaser tiles, unapproved articles indexed |
| Visit/contact | Easy phone/directions/hours; confident physical presence | Conflicting addresses/hours, map overflow |

### 8.3 Browser functional tests

Automate with Playwright/Cypress equivalent in the current repository where feasible. Test actual UI behavior — not only DOM presence. **Minimum test cases:**

1. All route endpoints load with a successful status and nonempty meaningful H1; unpublished/missing routes yield honest 404/410 as configured.
2. Every internal link and CTA resolves, including 20+ directory links; no CloudFront domain leak in production nav/internal URLs.
3. Mobile nav opens and closes, focus is managed, ESC works, back navigation doesn't strand focus, no body scroll under modal.
4. Booking CTA from homepage, service, team and footer goes to approved real scheduler or honest click-to-call fallback. Test with provider blocked and JS restricted; never create real bookings during QA.
5. Every phone action uses correct `tel:+16303814021`, every address/directions link opens appropriate Naperville location.
6. Treatment search recognizes synonyms, supports keyboard, handles empty string, results and no results; proper accessibility labels.
7. FAQs expand/close; state and aria semantics valid; all content readable without requiring client JS when appropriate.
8. Chat launcher doesn't cover sticky appointment CTA, error/handoff works, clinically inappropriate queries don't result in fabricated advice.
9. At 320–1920px widths no horizontal body overflow. Check overlay stacking and portrait/landscape.
10. All images render or gracefully fall back; no layout shifts from unloaded images. Alt text appropriate, decorative images `alt=""`.
11. Tab navigation and 200% zoom; focus never obscured by sticky bars; no inaccessible `div`-only fake buttons.
12. Cookie/privacy controls consistent with implemented tracking; no unapproved trackers in chatbot/scheduler path.
13. All old mapped URLs redirect **in one hop** to relevant final content; no 404/loop, no wildcard homepage redirects.
14. Sitemap, robots, canonical, title, meta, OG, JSON-LD valid for new domain; stage not indexable.
15. Test for missing font resources, JS/CSS 404, console exceptions, hydration mismatch, broken icons and mixed content.
16. Test no staging notes, demo language or placeholders in copy. Search for `TODO`, `lorem`, `pending`, `preview`, `demo`, `ask if offered`, `confirm availability`, `stock illustration`, accidental “The Tooth Spa” and outdated dates/locations; review each contextual match rather than blind replace.

**Example viewport automation approach (adapt to real stack, not mandatory syntax):**

```ts
const widths = [320, 360, 375, 390, 430, 768, 820, 1024, 1280, 1440, 1920];
for (const width of widths) {
  await page.setViewportSize({ width, height: width < 600 ? 844 : 900 });
  await page.goto(baseUrl + route, { waitUntil: 'networkidle' });
  const overflow = await page.evaluate(() =>
    document.documentElement.scrollWidth > document.documentElement.clientWidth + 1
  );
  expect(overflow, `Horizontal overflow: ${route} @ ${width}`).toBe(false);
  await page.screenshot({ path: screenshotPath, fullPage: true });
}
```

### 8.4 Accessibility/performance quality gate

- **A11y:** axe-core audit on representative templates + manual keyboard and screen-reader smoke test; no critical/serious violations; WCAG 2.2 AA checklist. Add explicit checks for menu, chat, iframe title, accordion, `prefers-reduced-motion`, focus obscuration, text zoom and touch targets.
- **Performance:** run Lighthouse mobile and desktop on home, typical service, heavyweight implant/SMART, journal, booking; save HTML/JSON reports. Compare real contentful rendering, not just Lighthouse score. Monitor LCP, INP (lab proxy/field where available), CLS. Third-party scheduling can be loaded on intentional interaction if that preserves functionality and privacy, but must not add a frustrating blank state.
- **SEO:** crawl all final routes, run schema validation and redirect test sheet. Google Business Profile phone/address/hours need consistency.
- **Security:** run dependencies audit, security headers, CSP where feasible and compatible with scheduler/chat, HTTPS-only, no exposed API keys, rate limiting for chat, safe URL handling and defensive error states.

---

## 9. Luxury-level finishing checklist (human design critique required)

The following are **release standards**, not optional aesthetic musings:

**Brand and expression**
- [ ] A patient would recognize the same distinct Raina visual identity on every page: logo, typography, color, spacing, content tone and buttons all cohere.
- [ ] Homepage is not a generic healthcare SaaS landing page; it feels like a boutique, established dental practice.
- [ ] Primary brand promise is legible in ~5 seconds, with no conflicting competing value propositions.
- [ ] True clinical expertise is demonstrated by detail, not adjectives.
- [ ] No unsubstantiated claims about awards, certifications, outcomes, systems or reviews.

**Layout and visual rhythm**
- [ ] Every above-the-fold section has deliberate type/image hierarchy and an obvious next action.
- [ ] No mechanically repeated card layout over three or more consecutive sections.
- [ ] Page density proportionate to content; minimalism does not equal missing content.
- [ ] Consistent section paddings and image crops, including 320px mobile.
- [ ] Body copy readable and not center-aligned in long paragraphs; headings never collide with images.
- [ ] No overloaded sticky header, intrusive chat bubble or double-fixed bottom actions.
- [ ] Hero image and clinician imagery slots are composed realistically for eventual real photos; no image dimension changes at loading.
- [ ] All motion is restrained, purposeful and accessible.

**Service-level polish**
- [ ] All pages answer specific patient questions beyond just “call us.”
- [ ] Every treatment page has relevant adjacent links and booking CTA; unnecessary filler removed.
- [ ] Complex procedures distinguish eligibility, stages, tradeoffs and follow-up.
- [ ] Readable and authoritative language, no duplicate FAQ templates.
- [ ] Semantic treatment groupings, strong directory search.

**Trust and transactions**
- [ ] Both doctors profiled with current verified information and authentic portraits when supplied.
- [ ] Real, attributed testimonials displayed tastefully with links to sources.
- [ ] Actual online scheduling (or fully honest call-only alternative if provider discontinues) works.
- [ ] Insurance/payment/membership information is useful, accurate and transparent.
- [ ] Emergency call path is never obstructed.

**Quality / production**
- [ ] No broken links, draft posts, dummy inputs, inconsistent hours, metadata regressions or placeholder instructions.
- [ ] No critical accessibility issues; mobile tests passed.
- [ ] Old search URLs map to relevant production pages with proper permanent redirects.
- [ ] Patient data is handled only in approved systems; tracking/chat reviewed.
- [ ] Source tree contains `BRAND_SYSTEM.md`, `PRACTICE_APPROVALS.md`, `CONTENT_APPROVAL_MATRIX.md` and `qa/` evidence.

### Visual review scoring — required sign-off

Score each from 0–5 with screenshot evidence: **(1) unique Raina identity, (2) art direction/hierarchy, (3) typography/spacing, (4) content depth/clinical clarity, (5) patient trust, (6) conversion usability, (7) mobile finish, (8) interaction/accessibility, (9) performance, (10) consistency across templates.**

**Target:** ≥4/5 in every category, ≥45/50 combined. A score based only on a single homepage screenshot is invalid. Evaluate a minimum of homepage, team, appointment, review, membership, SMART, implant, a small service page, journal and contact at **desktop and mobile**. For any <4 category, make concrete fixes and recapture before declaring complete. This is an internal quality heuristic, not a measured score from this audit.

---

## 10. Production launch gate and explicit unresolved blockers

**Gate A — functionality:** verified scheduler or clearly relabeled honest phone-only booking based on office workflow; phone and directions work; directory/search/nav functional; no page crashes or empty service routes.

**Gate B — content/clinical:** core service pages complete, all names/credentials/hours/price/service offerings vetted, review rights verified, all visible journal articles approved, no unverifiable medical outcomes/claims. If approvals are unavailable, **do not publish the unapproved feature** rather than handwave. A final site *can be beautifully complete* even if optional services or journal posts are hidden.

**Gate C — brand and mobile:** actual screenshot-based luxury review passed, responsive matrix passed, no obstructing overlays; no generic cloned sections; real asset replacement can remain a separately defined asset swap if photos weren't provided (but placeholder assets must not be misrepresented as real staff/patients in production).

**Gate D — SEO:** full old URL crawl and redirect map, one-hop redirects, canonical production URL, stage noindex, sitemap/robots/schema, Search Console readiness; ensure content isn't moved to an irrelevant URL just to keep a redirect short.

**Gate E — privacy/accessibility:** privacy/vendor review, no sensitive chat tracking, WCAG audit, security checks and tested fallback behavior.

**Gate F — operational handoff:** practice has a single clear list of the facts it must approve; code/config differentiates staging and production; screenshots/tests available; rollout rollback path and verified owner contact.

**Cutover runbook:**
1. Freeze original website and save export/sitemap/analytics baseline, full old URL list and DNS configuration.
2. Approve actual final content + domain/canonical.
3. Validate DNS/CDN/TLS, headers, cookies, CSP, scheduler and chatbot on production-like preview.
4. Enable one-hop redirect map on the correct web server/CDN; preserve any existing legacy URLs/queries that need handling.
5. Publish and smoke test top 10 landing pages/booking on mobile/desktop; verify crawlers see correct HTML/status.
6. Submit sitemap to Search Console; monitor 404s, redirects, Core Web Vitals, booking starts and local business details after launch.
7. Keep prior deploy or rollback strategy available; do not delete legacy redirect rules after the transition.

---

## 11. Required Codex output package

The author's final response should include **real implementation results**, not “I recommend” statements:

1. **Implemented site:** actual code changes across all applicable routes and shared components, with version/commit and deploy URL if available.
2. **`BRAND_SYSTEM.md`:** definitive font/color/spacing/component/logo/image/copy standards implemented in CSS/components.
3. **`CONTENT_APPROVAL_MATRIX.md`:** route-by-route status and evidence, author-edited content vs practice-approved facts.
4. **`PRACTICE_APPROVALS.md`:** *only* unresolved decisions requiring real practice input; specific proposed wording/choices and the affected pages. No invented resolution.
5. **`SEO_MIGRATION.md`:** expanded full old-to-new URL map with redirect result/status, canonical/sitemap/schema findings, production tasks.
6. **`QA_REPORT.md`:** route coverage, viewport matrix, screenshots actually inspected, accessibility and Lighthouse findings with commands/logs, functional test results; each issue marked pass/fail/blocked.
7. **`qa/screenshots/final/`:** real final screenshots of required representative routes/states/sizes. For any missing capability, state it instead of manufacturing evidence.
8. **Final exceptions only:** list remaining non-code blockers (clinical approvals, imagery rights, scheduler vendor access, domain/DNS control); everything within author control must already be corrected.

### Final report format

```text
IMPLEMENTATION COMPLETE [or INCOMPLETE — specific blocker]
Changed routes: X / Y; new routes: ...
Design system: implemented + reference file
Clinical content: approved X; pending X (not published)
Booking: tested provider / honest fallback + exact result
Responsive: breakpoints tested + screenshot path
Accessibility: audit result + manual spot checks
Performance: pages and measured results
SEO: redirected old URLs / total known + crawl coverage
Open blockers requiring practice access: ...
Git commit / build / deployment: ...
```

The author must **not** report the site as “launch-ready” if Gate A–F are not satisfied or if real browser/visual review was not performed. Deliver a completed codebase with precisely scoped sign-off blockers; a checklist pretending to be an implemented site is not acceptable.

---

## 12. Model choice for the implementation

**Recommended if available:** **GPT-6 Astra, Medium effort** for the **end-to-end redesign, complex content judgment and final independent quality review**. OpenAI's current guidance describes Astra as its most capable model for complex coding, research, analysis and sustained judgment. **GPT-6.1 Sol, High effort** is also a strong and entirely reasonable choice for this long, repository-focused implementation, particularly when it has performed well in the user's Codex environment; official guidance positions it near Astra, with a better performance/usage balance. There is **no guarantee that Sol at High beats Astra at Medium**; reasoning effort settings do not map directly across model generations.

**Practical single-author workflow if you can choose one model:**
- Favor **Astra Medium** if the overriding priority is best-in-class design judgment and comprehensive one-pass review rather than usage cost; raise effort only if complex unresolved defects warrant it.
- If keeping **GPT-6.1 Sol High**, that is a strong default and much of the outcome will depend on this explicit specification, repository access, a real browser, screenshots and tests — not just the reasoning slider.
- For an independent closing audit, if supported, use **Astra Medium/High as a separate reviewer** of Sol's implementation to catch missed content, visual repetition, mobile glitches and unsupported clinical wording. Do not allow the reviewer to certify issues without evidence.
- Avoid Max/Ultra as the default merely because it exists; use when a measured problem actually benefits from additional reasoning or parallel subtasks.

**Official references:**
- https://learn.chatgpt.com/docs/models
- https://help.openai.com/en/articles/20001516-managing-usage-with-gpt-6-astra-in-work-and-codex
- https://learn.chatgpt.com/docs/agent-configuration/subagents

---

## 13. External quality and compliance references

These are specifications to check, not endorsements or certification of Raina's implementation:

- W3C WCAG 2.2 AA: https://www.w3.org/TR/WCAG22/
- W3C WCAG 2.2 new guidance: https://www.w3.org/WAI/standards-guidelines/wcag/new-in-22/
- Core Web Vitals: https://web.dev/articles/vitals
- Google site migration: https://developers.google.com/search/docs/crawling-indexing/site-move-with-url-changes
- Google LocalBusiness structured data: https://developers.google.com/search/docs/appearance/structured-data/local-business
- HHS online tracking guidance (review with legal counsel; guidance reflects later court developments): https://www.hhs.gov/hipaa/for-professionals/privacy/guidance/hipaa-online-tracking/index.html
- Modern dental UX reference, not a design to copy: https://www.hellotend.com/

### Site evidence by page family

- Current domain, home/site nav: https://www.rainadentalcare.com/
- Replacement home and site nav: https://d1m6u7zewxrhn7.cloudfront.net/
- Old about/team: https://www.rainadentalcare.com/about-us/
- Old reviews: https://www.rainadentalcare.com/reviews/
- Old appointment embed: https://www.rainadentalcare.com/schedule-online/
- Old contact/payment: https://www.rainadentalcare.com/contact/
- Old membership: https://www.rainadentalcare.com/in-house-membership-plans/
- Old sedation: https://www.rainadentalcare.com/sedation-dentistry/sedation-dentistry-naperville/
- Old whitening: https://www.rainadentalcare.com/cosmetic-dentistry/teeth-whitening-naperville/
- Old All-on-4: https://www.rainadentalcare.com/restorative-dentistry/all-on-4-dental-implants/
- Replacement all services: linked from https://d1m6u7zewxrhn7.cloudfront.net/
- Replacement journal: https://d1m6u7zewxrhn7.cloudfront.net/journal/
- Replacement privacy: https://d1m6u7zewxrhn7.cloudfront.net/care/privacy/

---

## 14. Copy-paste Codex execution instruction

> **Execute this specification end-to-end on the existing Raina Dental Care replacement website repository.** This is the final quality pass. The goal is not a refresh; it is a best-in-class, refined boutique-luxury dental service website that feels genuinely premium, clinically credible and completely responsive. Review every route, all shared UI, content migrated from the original site, appointment integration, reviews, doctor biographies, brand coherence, treatment explanations, mobile navigation, accessibility, performance, privacy and SEO. Use the full page-by-page remediation list and priority gates above. Implement all changes within your control, maintaining correct practice facts and avoiding invented claims. The images are temporary placeholders; don't generate replacement photos, but produce production-ready image slots/crops. Use actual browser screenshots and tests to inspect, find and fix desktop/mobile regressions; don't claim a pass without executing checks. Create the required artifacts and provide a concise true implementation report. Do not ask repeated questions; collect only the real external practice-dependent decisions in one approval ledger, and do not publicly advertise unconfirmed services. Preserve what works, fix what doesn't, and reach the highest attainable visual and functional standard in this iteration.

**END OF SPECIFICATION**
