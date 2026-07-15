# LOCKED BRIEF — Ampy tack-sida (universal, post-/offert)

> Read this fully before writing a line. Every builder (v1/v2/v3) ships the **same content, copy,
> structure and constraints** — only the **art direction** diverges. This is the redirect target after the
> `/offert` form. Owner: Julius (ampy.se). Analysis it comes from: `docs/analysis.md` in the old repo.

## 0. THE ONE HARD CONSTRAINT
**This is ONE universal page for EVERY form submitter, regardless of which vertical/landing page they came
from (laddbox · elcentral · elektriker · solceller · batteri).** NO personalization, NO per-vertical
content, NO name echo, NO "du frågade om X". It must read perfectly for anyone. Keep it generic-but-warm.

## 1. Register (non-negotiable)
Light, warm, inviting — a brand/awareness moment, NOT a serious/scary page. Warmth grounded in truth.
Swedish only. **The "!" in the heading STAYS** (owner overrode the no-exclamation rule for this page).

## 2. Exact copy (use verbatim — do not paraphrase)
- **Logo:** Ampy wordmark top of page (`shared/assets/Ampy-logo.png`, black; invert to white via
  `filter:brightness(0) invert(1)` only if it sits on a dark surface).
- **Check icon:** `shared/assets/thank-you-icon.svg` (teal `#00a991` tick) — animate it (see §5).
- **Heading:** `Din förfrågan har blivit mottagen!`
- **Sub-heading:** `En av våra rådgivare kommer att kontakta dig inom kort.` (note: "rådgivare", not
  "handläggare"; no "!" on the subhead.)
- **Expectation ladder — signature block. Title:** `Så här händer det nu`. Three steps, in order:
  1. `Vi går igenom din förfrågan`
  2. `En rådgivare ringer dig inom 24 timmar`
  3. `Kostnadsfri rådgivning — helt utan förbindelse`
  (The **24 timmar** SLA is owner-confirmed 2026-07-15. Do not change the number.)
- **Trust strip (real proof only):** a row/card carrying BOTH:
  - `★★★★★  5,0 · Betyg på Google`  (5 gold stars + the text)
  - `3 000+ genomförda installationer om året`
  Optional secondary trust line if the direction wants it: `Registrerat elinstallationsföretag`.
- **"Medan du väntar" card/link (ONE only):** invites them to browse all electrical services (self-upsell).
  Copy: eyebrow `Medan du väntar` · line `Se allt vi kan hjälpa dig med hemma` · link label
  `Utforska våra eltjänster →`. Href: `https://ampy.se/elinstallation/` (⚑ confirm-target — the "all
  electrical services" hub; keep it a single easily-swapped constant).
- **Primary action is NOT "leave".** The back-to-home link is **secondary/ghost**, small, low-emphasis:
  `Till startsidan`. Href `https://ampy.se/`.

## 3. Structure (same skeleton for all three)
```
[ Ampy logo ]
[ animated teal check ]
[ H1: Din förfrågan har blivit mottagen! ]
[ sub: En av våra rådgivare kommer att kontakta dig inom kort. ]
[ "Så här händer det nu" — 3-step expectation ladder ]   ← the signature block
[ trust strip: 5,0 Google + 3 000+ installationer/år ]
[ "Medan du väntar" → Utforska våra eltjänster ]
[ ghost: Till startsidan ]
```
Order may flex slightly per direction, but all blocks must be present and the ladder is the hero of the page.

## 4. Design system (REAL tokens — `shared/tokens.css`, load it, don't redefine colors)
- **Palette (ONLY these):** teal `--apteal-core #00a991` · midnight `--apmidnight-blue #090b32` · sky-mist
  `--apsky-mist #f5f9ff` · white `--appure-white` · aurora accents allowed from the mint/aqua family
  (`--apaqua-frost #ddf9fd`, `--apcrystal-blue #b6f2ff`, `--apsublime-green #a0fbc9`). **NEVER** the old
  off-brand button greens as the primary accent — reconcile any green to teal.
- **The button/CTA gradient must resolve to teal**, not the old `#39c381→#55ff9a`. Teal solid or
  teal→midnight or teal→emerald are all fine; bright-green-as-primary is a defect.
- **Font:** Outfit (already loaded via Google Fonts for preview; self-host note stays for prod).
- **Type:** use `--aptext-*` scale; heading weight 500–600. **Space:** `--apspace-*`. **Radius:**
  `--apradius-*`. **Shadow:** `--apshadow-*` (define `--shadow-primary: rgba(9,11,50,.10)` fallback since
  tokens.css references it).
- `html{font-size:62.5%}` (1rem=10px) — REQUIRED for the rem tokens to compute. Set it.
- Fix the grey `#9c9c9c`: gone. Background is an Ampy surface (sky-mist / soft aurora / midnight per
  direction). **The page/card covers the FULL viewport on desktop too** (owner: "skärmen borde täcka hela")
  — no small floating card on a colored field; it fills.

## 5. Craft bar (all three)
- **ONE signature motion: the check draws in** (stroke-dash draw or scale+fade, ~400–600ms ease-out), plus
  a gentle stagger-in of the 3 ladder steps. **Respect `@media (prefers-reduced-motion: reduce)`** → no
  motion, everything visible. Do NOT add five competing effects. One deliberate signature.
- Full a11y: real focus states (`:focus-visible`), AA contrast on the chosen background, decorative art
  `aria-hidden`, logo has meaningful `alt="Ampy"`, semantic headings, the stars have an accessible label
  (e.g. `aria-label="5,0 av 5 i betyg på Google"`), gold stars are decorative behind it.
- **Mobile (375):** full-bleed, no dead lower 40% — the ladder/trust fill the space. Re-layout, don't shrink.
- Desktop reference bar: build to the craft level of a premium SaaS confirmation screen. No slop, no AI-gradient-soup.

## 6. Candour gate (overrides everything)
- Only these numbers exist: **5,0 Google · 3 000+ installationer/år** (both owner-approved for this page).
  NO "1000+ kunder", NO "hela Sverige"/national coverage, NO invented SLA beyond the 24h, NO fake urgency/
  countdown/scarcity. If you're tempted to add a number, don't — it's not in this brief.

## 7. Deliverables per builder (v1 / v2 / v3)
- `vN/index.html` + `vN/styles.css` (link `../shared/tokens.css` and reference `../shared/assets/...`).
- Self-contained, renders standalone by opening `vN/index.html`.
- Keep it portable back to Bricks later (semantic blocks, token vars) but plain HTML/CSS now.
- Do NOT touch other vN dirs, shared/, or run git. Only write inside your assigned `vN/`.
