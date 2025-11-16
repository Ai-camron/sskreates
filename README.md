# S&S Kreates Co.

Joyful, ADHD-friendly budgeting tools built with gentle palettes, WCAG 2.1 AA accessibility, and dopamine-first
interactions. This repository contains the 2025 single-page marketing site for S&S Kreates Co., including the creative
system, interaction guidelines, and automated accessibility checks.

## ✨ Brand identity
- **Tagline:** *Savings that spark joy*
- **Founder:** Rose — designer, maker, illustrator
- **Design themes:** soft gradients, repeated butterfly/coin/journal motifs, joyful micro-animations, fixed circular scratch
  zones that never resize.
- **Typography:** Lobster Two (logo), Playfair Display (headings), Lato (body)
- **Color direction:** pastel purples + teals with high-contrast accents (Sunset Citrus, Mocha Neutrals, Midnight Minimal)

The `index.html` file enumerates every product category outlined in the master list:
- Primary savings tools (scratch-offs, trackers, workbooks, bundles, seasonal challenges)
- Goal-based categories ($50-$1000 goals, emergency/rainy-day, travel, holiday, celebration, home projects)
- Budgeting systems (weekly/monthly/paycheck planners, bill & expense logs, sinking funds, cash envelopes)
- Debt payoff, mental health & recovery, wellness, habit/routine builders, kids & family tools, theme collections, gifting
  kits, and multi-format downloads (PDF, tablet, physical cards)
- Shop filters for format, tool type, palette, difficulty, goal type, and audience

## 🧠 Accessibility & interaction rules
- WCAG 2.1 AA color contrast, focus-visible outlines, reduced-motion compliance, and large tap targets
- Scratch demo is fully keyboard accessible (Enter/Space) with `aria-live` updates and sparkles that gently fade
- Testimonials, trackers, and palette cards use horizontal scroll areas with persistent headings and live regions
- No flashing animations; hover states rely on elevation and gradient shifts only

## 📁 Project structure
```
.
├── index.html      # Semantic, mobile-first layout describing the brand system
├── styles.css      # Token-based design system with gradients, palette dots, and reduced-motion support
├── script.js       # Minimal interactions: scratch demo + live year
├── tests/
│   └── accessibility.spec.js  # Vitest suite verifying WCAG-focused checks
├── package.json    # Test runner configuration
└── README.md       # You are here
```

## 🚀 Getting started
1. **Install dependencies**
   ```bash
   npm install
   ```
2. **Open the static site** (use any local server)
   ```bash
   npx http-server .
   # or
   python -m http.server 4173
   ```
3. **Run automated accessibility checks**
   ```bash
   npm test
   ```

## 🧪 Tests
Because the repository started without coverage, a Vitest suite was added to confirm:
- `<html lang="en">`, semantic landmarks, and skip links exist
- Buttons include accessible names and the scratch demo exposes `aria-live` feedback
- `prefers-reduced-motion` rules are defined in `styles.css`

## 🗺️ Future enhancements
- Palette switcher that updates the UI globally
- Multi-circle scratch demo + animated tracker progress bars
- WooCommerce integration with palette/format variations and My Account download hub

## ⚖️ License
All designs, illustrations, and tools are protected IP of S&S Kreates Co. Refer to `LICENSE` for additional details.
