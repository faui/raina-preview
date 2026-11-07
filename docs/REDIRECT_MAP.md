# Legacy URL migration map

**72 exact 301 redirects** in `site/data/redirects.php`, plus pattern rules in `functions.php`. Verified as real one-hop 301 responses (with and without trailing slash) against a live WordPress install on 6 Nov 2026 — see `docs/FINAL_CLAUDE_QA.md`.

Source of truth for old URLs: a crawl of https://www.rainadentalcare.com/sitemap.xml (WP core sitemaps: 17 posts, 41 pages, 4 categories, 4 tags) plus navigation/footer links — 90 unique paths. Every crawled path is now either mapped below, covered by a pattern rule, or is `/` itself. Rows marked *crawl* were added in the final pass.

## Pattern rules

| Old pattern | Target |
|---|---|
| `/category/{slug}/` and `/category/{slug}/page/{n}/` | `/journal/` |
| `/tag/{slug}/` | `/journal/` |
| `/{YYYY}/{MM}/` (and day/page variants) | `/journal/` |

When the journal is not yet approved in public-launch mode, any redirect whose target is `/journal/` is sent to `/care/approach/` instead, so old links never land on a 404.

Removed: `/services/` (returned 404 on the old site — never existed). `/care/acupuncture/` and `/care/updates/` are kept because they were public on the CloudFront staging build.

## Exact redirects

| Old path | Target | Note |
|---|---|---|
| `/about-us/` | `/care/team/` |  |
| `/contact/` | `/care/contact/` |  |
| `/reviews/` | `/care/patient-stories/` |  |
| `/schedule-online/` | `/care/appointments/` |  |
| `/html-sitemap/` | `/care/` |  |
| `/in-house-membership-plans/` | `/care/membership/` |  |
| `/holistic-dentists-naperville/` | `/care/approach/` |  |
| `/holistic-dentists-joliet/` | `/care/approach/` |  |
| `/dentist-in-bolingbrook/` | `/care/contact/` |  |
| `/general-dentistry/` | `/care/` |  |
| `/restorative-dentistry/` | `/care/` |  |
| `/cosmetic-dentistry/` | `/care/` |  |
| `/cosmetic-dentistry-naperville/` | `/care/` |  |
| `/cosmetic-dentistry-joliet/` | `/care/` |  |
| `/additional-services/` | `/care/additional/` |  |
| `/orthodontics/` | `/care/aligners/` |  |
| `/oral-surgery/` | `/care/oral-surgery/` |  |
| `/sedation-dentistry/` | `/care/sedation/` |  |
| `/general-dentistry/dental-cleaning-naperville/` | `/care/exams/` |  |
| `/general-dentistry/dental-emergency-naperville/` | `/care/emergency/` |  |
| `/general-dentistry/oral-cancer-screening/` | `/care/oral-screening/` |  |
| `/general-dentistry/pediatric-dentist/` | `/care/pediatric/` |  |
| `/cosmetic-dentistry/teeth-whitening-naperville/` | `/care/whitening/` |  |
| `/cosmetic-dentistry/veneers-naperville/` | `/care/veneers/` |  |
| `/veneers-naperville/` | `/care/veneers/` |  |
| `/veneers-joliet/` | `/care/veneers/` |  |
| `/oral-surgery/extractions/` | `/care/extractions/` |  |
| `/orthodontics/braces-invisalign-naperville/` | `/care/aligners/` |  |
| `/sedation-dentistry/sedation-dentistry-naperville/` | `/care/sedation/` |  |
| `/additional-services/sleep-apena-dermal-fillers-pain-management/` | `/care/additional/` |  |
| `/dental-implants-naperville/` | `/care/implants/` |  |
| `/dental-implants-joliet/` | `/care/implants/` |  |
| `/restorative-dentistry/dental-implants-naperville/` | `/care/implants/` |  |
| `/restorative-dentistry/all-on-4-dental-implants/` | `/care/all-on-4/` |  |
| `/restorative-dentistry/dental-crowns-bridges/` | `/care/crowns/` |  |
| `/restorative-dentistry/dentures-naperville/` | `/care/dentures/` |  |
| `/restorative-dentistry/ozone-therapy-in-dentistry/` | `/care/ozone/` |  |
| `/restorative-dentistry/periodontal-treatment-naperville/` | `/care/periodontal/` |  |
| `/restorative-dentistry/root-canals/` | `/care/root-canals/` |  |
| `/accupuncture-and-holistic-dentistry/` | `/care/approach/` |  |
| `/tooth-remineralization/` | `/care/remineralization/` |  |
| `/is-your-dentist-smart-certified/` | `/care/smart/` |  |
| `/the-toxic-truth-of-mercury-fillings/` | `/care/smart/` |  |
| `/ozone-therapy-in-holistic-dentistry/` | `/care/ozone/` |  |
| `/new-in-town-ozone-therapy/` | `/care/ozone/` |  |
| `/care/acupuncture/` | `/care/approach/` |  |
| `/care/updates/` | `/care/` |  |
| `/schedule/` | `/care/appointments/` | crawl |
| `/general-dentistry/pediatric-care/` | `/care/pediatric/` | crawl |
| `/author/mandeep-raina/` | `/care/team/` | crawl |
| `/9-reasons-you-need-to-see-your-dentist-in-bolingbrook/` | `/care/exams/` | crawl |
| `/your-dental-checkup-everything-you-need-to-know/` | `/care/exams/` | crawl |
| `/are-you-ready-to-take-charge-of-your-health/` | `/care/approach/` | crawl |
| `/dentistry-and-holistic-wellness/` | `/care/approach/` | crawl |
| `/holistic-dentistry-positive-improvements-for-the-body/` | `/care/approach/` | crawl |
| `/our-emotions-impact-our-health/` | `/care/approach/` | crawl |
| `/spiritual-meaning-of-teeth/` | `/care/approach/` | crawl |
| `/dental-anxiety-is-real/` | `/care/sedation/` | crawl |
| `/eating-the-rainbow/` | `/care/nutrition/` | crawl |
| `/know-your-dentist-and-her-ways/` | `/care/team/` | crawl |
| `/managing-your-dental-issues-at-home/` | `/care/emergency/` | crawl |
| `/sleep-disorder-breathing/` | `/care/additional/` | crawl |
| `/cosmetic-dentis-joliet/` | `/care/` | crawl |
| `/cosmetic-dentistry/teeth-whitening-bolingbrook/` | `/care/whitening/` | crawl |
| `/cosmetic-dentistry/veneers-baperville/` | `/care/veneers/` | crawl |
| `/cosmetic-dentistry/veneers-bolingbrook/` | `/care/veneers/` | crawl |
| `/general-dentistry/dental-cleaning-bolingbrook/` | `/care/exams/` | crawl |
| `/general-dentistry/dental-emergency-bolingbrook/` | `/care/emergency/` | crawl |
| `/general-dentistry/emergency-dentist-bolingbrook/` | `/care/emergency/` | crawl |
| `/general-dentistry/emergency-dentist-naperville/` | `/care/emergency/` | crawl |
| `/restorative-dentistry/periodontal-treatment-bolingbrook/` | `/care/periodontal/` | crawl |
| `/sedation-dentistry/sedation-dentistry-bolingbrook/` | `/care/sedation/` | crawl |

## Still required at cutover
- Export Search Console “indexed” and “top linked pages” reports and add any path not listed here.
- Confirm www vs non-www and HTTP→HTTPS are single-hop at the host/CDN, before WordPress.
- Keep these redirects permanently.
