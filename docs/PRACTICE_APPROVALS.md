# Clinical, operational, legal and brand approvals — REQUIRED BEFORE LAUNCH

**Accountable party:** Raina Dental Care / authorized clinical-practice representative. No AI assistant or developer may self-approve factual clinical or operational statements. Review *every* treatment and journal page, even if not individually flagged below. Record evidence and approvals in the practice's normal release system (date, person, section, approved copy). Do not place actual patient information in issue trackers or AI chats.

| Severity | Topic | Required verification / evidence | Blocking condition |
|---|---|---|---|
| P0 | Patient booking | Obtain current official PatientViewer HTTPS URL from office, test reservation workflow, vendor domain, mobile flow, confirmation and cancellation instructions | Button cannot truthfully say instant online booking unless it works; default phone remains acceptable only if approved as actual desired UX |
| P0 | Clinician identity | Confirm full names, spelling, licenses/roles, degrees, institutions, dates and bios for Dr. Mandeep Raina and Dr. Prameela; photo release and appropriate title | Never publish an unverified credential or attribution |
| P0 | Privacy / website notice | Attorney/practice review of privacy policy, marketing trackers, cookie/analytics configuration, contact forms, assistant and HIPAA applicability | Existing website privacy text is **not** a substitute for tailored legal review |
| P0 | Office contact facts | Independently verify 2323 Naperville Road, Suite 110, Naperville IL; `(630) 381-4021`; weekday hours, holiday hours, parking and directions | Booking, footer and map instructions must be correct |
| P0 | Treatment availability | Verify every service listed: biological/SMART, ozone, whitening, aligners, implant placement/referrals, All-on-4, surgery, pediatric, sedation; currently unapproved extras must stay gated | No stale or false offers |
| P0 | Credentials/certifications | If SMART certified / professional organization memberships appear, confirm active credential and what certification covers | Must not imply status beyond verified fact |
| P0 | Medical claims | Dentist reviews clinical descriptions, risks, alternative treatments, fluoride/mercury-related assertions, ozone, biologic healing, sedation, X-ray methods, pediatric recommendations | Avoid implying cures/systemic outcomes without evidence |
| P1 | Reviews | Reconfirm each quotation, name/initials, correct source, consent/rights to republish and Google policy; link to original third-party review profiles | No synthetic or falsely attributed testimonials |
| P1 | Membership | Confirm published adult `$62.50/mo` / `$750/yr`; child `$43.33/mo` / `$520/yr`, included procedures, eligibility, exclusions, cancellation and payment terms | Update plan page before accepting enrollments |
| P1 | Insurance / payment | Network status, out-of-network claims handling, financing, accepted cards, superbills, prepayment and estimates | Avoid promise of coverage or reimbursement |
| P1 | Emergency policy | Confirm same-day availability, walk-ins and after-hours procedure; avoid false guarantees of treatment on demand | Show reliable urgent-care guidance and click-to-call |
| P1 | Sedation | Confirm nitrous oxide, oral sedation, IV sedation, credentialed provider(s), monitoring and patient selection; do not infer availability from old site | Avoid unsupported sedation choices |
| P1 | Whitening | Confirm Zoom and Opalescence if brand-specific descriptions are used later | Keep product claims out until confirmed |
| P1 | Equipment / technology | Verify technology capabilities and whether the pictured device is installed and in active clinical use | Photos must not imply equipment ownership without verification |
| P1 | Journal | Clinical editor reviews and approves all six draft articles; confirm authorship, disclaimers, sources, images and claim accuracy | Journal remains hidden under public-launch mode unless approved |
| P1 | Optional historical services | Independently verify massage, pain management, sleep apnea care and dermal fillers (provider, availability, regulatory scope) | Keep them disabled in WP settings until approved |
| P1 | Logo/brand assets | Approve official logo version, optional premium monochrome lockup, permissible colors and image treatments | Do not alter trademark appearance without approval |
| P1 | Photography | Obtain properly licensed, HIPAA/consent-compliant authentic dentist/team/office/patient images, clinical before/after consent, alt text | Avoid stock imagery implying it is real staff/patients |
| P1 | Analytics / SEO | SEO lead reviews legacy redirect completeness, Google Business Profile, structured data accuracy, Search Console, scripts/tracking | Preserve organic traffic and truthful business listings |
| P2 | Future content | Approve FAQs, seasonality, articles, accessibility statements and seasonal service promotions | Must have documented governance |

## Required approval record (copy per decision)
- Field / page URL:
- Approved exact wording or asset:
- Approver / role:
- Approval date:
- Supporting primary source / vendor link:
- Action by developer:
- Status: APPROVED / REWRITE / HOLD

**Never implement missing approvals by imagining a source or silently paraphrasing clinical claims as if approved.**

## Final-pass findings to resolve (added 6 Nov 2026 by Claude Code)
Each item is phrased as a decision the practice must make. Nothing here has been approved. Page-by-page facts are listed in `CONTENT_APPROVAL_MATRIX.md` (generated from the notes stored with each page's copy).

| # | Sev | Decision needed | Evidence found | Where it shows | Approver |
|---|---|---|---|---|---|
| A1 | P0 | Supply the **current** PatientViewer scheduling URL, or confirm phone-only scheduling is the intended experience. | The old `/schedule-online/` iframe points at `www.patientviewer.com/?RSID=…&CID=30&C=1348…` but the `src` is malformed (an email-tracking link is appended). The theme was tested with that legacy URL locally only; it was **not** saved as a setting. | `/care/appointments/`, all "Schedule a visit" CTAs | Practice owner + front-desk lead |
| A2 | P0 | Approve both dentist profiles word for word. | Old About page: Dr. Raina "graduated from New York University" (2002), advanced training in implant rehabilitation and full-mouth reconstruction, she/her. Dr. Prameela B: **no degree, school or licence published anywhere**. | `/care/team/`, homepage trust band and dentist cards | Each dentist |
| A3 | P0 | Approve the definitions used for **fluoride-free, mercury-free, mercury-safe** and the statement that new fillings are mercury-free. | Carried from the previous theme; not defined on the old site. | Homepage philosophy, `/care/approach/`, `/care/fillings/`, `/care/smart/` | Dr. Raina |
| A4 | P0 | SMART certification: confirm current IAOMT SMART certification (if any) before it is stated. | Only source: a Sep 2021 blog post saying "Dr. Raina is a SMART-certified Holistic Dentist." The site now describes the protocol without claiming certification. | `/care/smart/` | Dr. Raina |
| A5 | P1 | Insurance wording: reconcile "We accept and bill out-of-network insurance plans" (old homepage) with "Most Insurances Accepted" (old contact page). | Payment page now explains in/out-of-network in general terms only. | `/care/payment/` | Owner + billing |
| A6 | P1 | Review excerpts: confirm each of the 7 verbatim excerpts, the first-name-plus-initial display, and republication rights; then tick "reviews approved". | All quoted word for word from the old `/reviews/` page ("Review from Google" labels; ratings of 4.9 shown on individual reviews look like an aggregate, so no ratings are reproduced). | `/care/patient-stories/`, homepage | Owner + compliance |
| A7 | P1 | Sedation, whitening products, STA Wand, CBCT, same-day/walk-in emergencies, All-on-4 "in one day": the old site claims all of these. None is stated as offered on the new site. | Old sedation page names oral ("a pill like Halcion"), IV and nitrous; whitening names Zoom/Opalescence; "Emergency walk-ins are always welcome" appears on 5 pages. | Treatment pages (see matrix) | Treating dentist |
| A8 | P1 | Weekend hours: the theme shows "Call for information" (previous theme wording). Old `/dentist-in-bolingbrook/` page also lists a different phone (630.389.8574) and ZIP 60532 — confirm these are obsolete. | | Footer, contact, schema.org | Owner |
| A9 | P1 | Optional services (massage, pain management, sleep apnea, dermal fillers): no source on the old site mentions therapeutic massage at all. Keep all four unticked unless a licensed provider is confirmed. | | Raina Website settings | Owner + provider |
| A10 | P1 | Logo: the colourful legacy PNG is retained unchanged. Supply an approved SVG or monochrome lockup if the practice wants one. | | Header | Owner |
| A11 | P1 | Photography: Dr. Raina's portrait is an informal photo with text in the background; Dr. Prameela has a placeholder; the technology image is Unsplash stock labelled "Illustrative image". | | Home, team, technology | Owner |
| A12 | P2 | Facebook: two pages exist (numeric ID and "RainaDentalCareBolingbrook"). The footer links the numeric page. | | Footer | Owner |
