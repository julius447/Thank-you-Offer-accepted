# Ampy tack-sida — developer handover (Chris)

The **thank-you page** shown after the `/offert` contact form is submitted. This folder is everything you
need to ship it in WordPress + Bricks, **1-to-1, no hand-conversion**. Approved design (desktop + mobile):
`preview/index.html`.

Live reference: https://julius447.github.io/Thank-you-Offer-accepted/v1/

---

## Files

| File | What it is |
|------|-----------|
| `ampy-tack.css` | Production CSS. **Scoped to `.ampy-tack`, all px, no dependency** on `html{font-size:62.5%}` or any token file. Drop-in safe. |
| `ampy-tack.php` | FluentSnippets **PHP** snippet — registers the `[ampy_tack]` shortcode that outputs the markup. |
| `ampy-tack.js` | FluentSnippets **JS** snippet — *optional* enhancement (replays the check animation on scroll-into-view). Animations work without it. |
| `ampy-tack.bricks.json` | **Bricks paste-JSON** — one self-contained Code element (style+markup+script). The simplest path. |
| `ampy-tack.markup.html` | The raw HTML markup (source of truth for the PHP / JSON / preview — all identical). |
| `preview/index.html` | Standalone preview that loads the real `ampy-tack.css` + `ampy-tack.js`. **What you approve is what ships.** |

---

## Implement — pick ONE path

### Option A — Bricks paste-JSON (simplest, ~30 sec)
1. Open the target page in **Bricks**.
2. In the Bricks structure panel, right-click → **Paste** (or use the ⋯ menu → *Import / Paste elements*), then
   paste the entire contents of `ampy-tack.bricks.json`.
3. It drops in as **one Code element** (style + markup + script inline, self-contained). Done — it renders 1-to-1.
   > The Code element has *Execute code* enabled; that's expected (it renders the inline `<style>`/`<script>`).

### Option B — FluentSnippets (recommended for a clean, reusable setup)
1. **CSS snippet** — new snippet, type **CSS**, paste `ampy-tack.css`. Publish.
2. **PHP snippet** — new snippet, type **PHP / Functions**, paste `ampy-tack.php`. Publish. (Registers `[ampy_tack]`.)
3. **JS snippet** — new snippet, type **JS**, load in **footer**, paste `ampy-tack.js`. Publish. *(optional)*
4. On the thank-you page, add the shortcode **`[ampy_tack]`** (plain shortcode block, or a Bricks *Shortcode* element).
   - Tip: in FluentSnippets you can **scope** the CSS/JS snippets to only the `/tack/` page to avoid loading site-wide.

Both paths produce the exact same result. Option A is fastest; Option B keeps CSS/JS editable as first-class snippets.

---

## Config / notes

- **Page template:** use a **blank / canvas** template (no theme header or footer). The wrapper is `min-height:100vh`
  and is designed to be the whole screen. With a site header on top you'd get a small scroll.
- **Redirect:** point the `/offert` form's *"redirect after submit"* to this page's URL (e.g. `https://ampy.se/tack/`).
- **Fonts:** the design uses **Outfit**, which is already loaded globally on ampy.se — **do not double-load it.**
  (The preview links Google Fonts only so it looks right as a standalone file; the production CSS just references
  `font-family:"Outfit", …` with a system fallback.)
- **Links** (edit in the markup / PHP / JSON if they change):
  - CTA "Utforska våra eltjänster" → `https://ampy.se/elservice`
  - Ghost "Till startsidan" → `https://ampy.se/`
- **No form / data / REST** on this page — it's a pure confirmation screen, so there's nothing to wire (no nonce,
  no webhook).
- **Accessibility:** real focus rings, `aria-label` on the stars, decorative art `aria-hidden`, and
  `prefers-reduced-motion` is honoured (animations off, content fully visible).
- **Analytics (optional, owner-deferred):** if you later want a GA4 / Meta conversion event to fire on this page,
  add it here — none is wired yet.

---

## Editable copy (exact strings)

- Heading: `Din förfrågan har blivit` `<br>` `mottagen!` *(the `<br>` forces the two-line break on desktop; it's
  auto-hidden on mobile — keep the space before it so words never join.)*
- Sub: `En av våra rådgivare kommer att kontakta dig` `<br>` `inom kort.`
- Rating: `5 av 5` · `Betyg på Google`  (5 gold stars)
- CTA: `Utforska våra eltjänster`
- Ghost: `Till startsidan`

---

## Verified
Rendered from the production `ampy-tack.css` on desktop (1440) and mobile (375): no horizontal overflow,
"Till startsidan" visible in-viewport (no stray scroll), check animation + halo run on load, reduced-motion safe.
