# Claude Code: Raina Dental Care final theme refinement

You are editing a pre-existing WordPress/PHP theme, **not** creating a new SPA. Begin with `docs/README_HANDOFF.md` and the mandatory `docs/CLAUDE_CODE_HANDOFF_PROMPT.md`; read `docs/REMEDIATION_SPEC_ORIGINAL.md`, `docs/PRACTICE_APPROVALS.md`, `docs/QA_REPORT.md`, and `docs/BRAND_SYSTEM.md` before doing the finishing pass.

## Invariants
- Preserve all working WP editor, article approval, booking-config, assistant, canonical and routing functionality.
- No fictitious dentist credentials, certifications, clinical claims, testimonials, services, pricing or availability; never bypass approval gates.
- Photos and images may be placeholders. Preserve valid aspect and alt patterns; do not mistake staged photography for proof of actual practice.
- Use existing Source Serif/Manrope and established WordPress layout architecture; don't replace app with a JavaScript framework.
- Never print secrets, submit actual patient data or claim that the assistant is clinically diagnostic.
- Do not silently alter authorized clinical copy; put factual blockers into the approvals log.
- Finish by **implementing** fixes and testing on a WordPress/browser environment where possible. Declare unsupported verification as BLOCKED, not PASS.

## Useful local checks
```bash
find . -name '*.php' -print0 | xargs -0 -n1 php -l
node --check site/script.js
```

Start at `docs/CLAUDE_CODE_HANDOFF_PROMPT.md` for the execution mission. This is a design-and-engineering finishing pass, not a new planning assignment.
