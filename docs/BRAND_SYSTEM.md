# Raina Dental Care — Brand and experience direction

## North star
*A modern restorative retreat with uncompromising clinical credibility.* The experience should feel like discerning, personalized health care: assured, warm, elegant, never ostentatious, frivolous or intimidating. These are **implementation recommendations**, not an approved corporate brand manual.

## Brand principles
1. **Expert before aesthetic.** Clinician profiles, treatment specificity, transparent FAQs and real reviews carry the premium experience.
2. **Space with intention.** A spacious page must not be an empty page. Vary section rhythm and editorial layouts by subject; avoid clones of three generic cards.
3. **Calm, not cold.** Warm whites, quiet green undertones, restrained text contrast and measured movements. Don't substitute neon effects for warmth.
4. **One dominant action.** Book/contact is clear on mobile and desktop, with consistent link destinations and honest labeling.
5. **Human authenticity.** Prefer verified Raina people/rooms/equipment over purchased lifestyle stock. Do not depict a different clinic as Raina.

## Current implementation foundations
- **Type:** Source Serif (display, editorial emphasis) + Manrope (UI and body), both bundled with font licenses in `site/assets/`.
- **Core hues** (design direction, approximate): deep evergreen and ink teal for primary actions; soft sage/dove for editorial hero; ivory/off-white for reading surfaces; restrained brass/stone as secondary accents. Existing legacy logo has vivid pink/blue; retain until a **practice-approved** muted/monochrome lockup is provided.
- **Hero:** large controlled serif headline, a specific value statement, succinct human copy, one dominant appointment CTA and secondary phone link; avoid decorative badges, fake endorsements or empty cinematic backgrounds.
- **Page width:** readable line length around 60–75 characters in main body; fluid max widths; split long treatment pages into overview, what happens, FAQs and relevant next actions.
- **Rhythm:** prefer generous section separation but reduce large gutters on phones. Use fluid sizes, clamp text where applicable and avoid cramped nav.
- **Buttons/forms:** semantic accessible controls; visually distinctive default, hover, keyboard focus and disabled states; never a CTA with misleading destination.
- **Motion:** subtle entrance effects and quiet hover states; nonessential animation off under `prefers-reduced-motion`; never gate content behind a JS effect.
- **Icon family:** low-weight outline icons from the existing SVG symbol library, used sparingly; ensure `aria-hidden` as appropriate.
- **Photography:** editorial portraits with natural light, real consultation rooms, patient-focused procedures. Hero wide shots crop differently on mobile. Don't allow face crops or tiny black-box photos. Optimized AVIF/WebP with useful fallbacks and descriptive alt when images carry meaning.
- **Trust:** doctor degrees are text, not decorative seals; citations/claims only where source verified; reviews attributed accurately and clickable to source where appropriate.

## Interactive and responsive states to test
- 320/360/375/390/430/768/1024/1280/1440/1920 CSS px, plus 200% zoom.
- Menu closed/open and background scroll, tab/shift-tab/Enter/Escape, screen-reader labels, sticky header, safe-area padding on iPhone.
- Search no results, rapid typing, accents/keyboard, clear query, search on mobile with keyboard open.
- FAQ details expanded, multiple expanded, long paragraphs, deep links.
- Booking vendor URL missing vs configured; handling of empty settings.
- Chat unavailable, network failure, no personal information, and topic routing.
- Async media loading, missing photos, layout shift, image alt and valid aspect ratios.

## Final design review standard
Take **full-page screenshots** for homepage, care index, implants, team, patient stories, appointment, membership and contact at desktop and mobile. Evaluate hierarchy, contrast, spacing, legibility, line wraps, photo authenticity and states. One good desktop hero does not count as whole-site acceptance.

## Implemented in code (final pass)
- **Tokens:** `--rc-ink #183b36`, `--rc-green #164b46`, `--rc-green-deep #0c3235`, `--rc-sage #e8eee6`, `--rc-rule #d5d9d0`, `--rc-muted #4f6359`, `--rc-alert #8a2f2a` (urgent only) — in the “Release-candidate layer” at the end of `site/style.css`. All small text pairs verified ≥4.5:1 by axe-core.
- **Shared chrome:** `site/partials/top.php` (head, utility bar, header, 6-item nav + mobile drawer with call/schedule) and `site/partials/bottom.php` (five-column footer with address, hours, care/practice/patient links, assistant). One source of practice facts: `site/partials/practice.php`.
- **Treatment template:** `site/partials/treatment.php` renders `site/data/treatments.php` with three layouts — *standard*, *signature* (dark hero: SMART, ozone) and *urgent* (warm hero, call-first: emergency) — and modules used only when the content has them: indications checklist, comparison table (stacks into cards under 690px), step journey, before/during/after band, considerations, callout (urgent variant for 911 guidance), FAQ, independent sources, related care, sticky aside with on-this-page navigation.
- **Homepage cadence:** dark hero → trust band → philosophy definitions → two signature cards → eight care pathways + search → dentists band → three-step visit → technology → patient words (approval-gated) → membership → visit → journal (approval-gated).
- **Mobile:** “Schedule” stays visible in the header at every width; the assistant collapses to a 52px icon and hides while the menu is open or a text field has focus.
- **Photography slots:** dentist portraits 4:5 with `object-position: 50% 30%`; technology 1.18:1 (1.42:1 mobile); journal cards fixed height with cover crop. Replace placeholders with approved, consented images at ≥1200px on the long edge.
