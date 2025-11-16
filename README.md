# S&S Kreates Co. — Website & Brand System

This repository documents the full website experience, brand identity, and product architecture for **S&S Kreates Co.**, a joyful budgeting company founded by Rose. The goal is to make ADHD-friendly, WCAG-compliant savings tools that feel calm, motivating, and dopamine-friendly.

---

## 1. Website Purpose

Create a supportive, visually gentle environment where neurodivergent users and busy households can explore budgeting tools without feeling overwhelmed.

---

## 2. Core Brand Identity

- **Brand name:** S&S Kreates Co.
- **Tagline:** *Savings that spark joy*
- **Founder:** Rose — designer, maker, illustrator
- **Design themes:** soft gradients, minimal cognitive load, repeating motifs (butterflies, coins, journals), joyful micro-animations, fixed circular scratch areas

### Palette Tokens

Light pastel purples and teals anchor the palette, paired with clean whites and high-contrast accents for clarity. Colors are intentionally low-stimulation and neurodivergent-friendly.

### Typography

- Logo: Lobster Two
- Headings: Playfair Display
- Body: Lato

---

## 3. Website Architecture

The site follows a mobile-first, component-driven structure:

1. **Home**
   - Hero with CTAs and brand visuals
   - Product category overview
   - Interactive scratch demo with reset
   - Featured trackers carousel
   - Palette explainer
   - Horizontal testimonial scroll
   - About the Maker card
   - Newsletter signup

2. **Shop** (WooCommerce-ready) with filters and full category tree

---

## 4. Shop Category Master List

### Primary Savings Tools
- Digital Scratch-Off Challenges
- Physical Scratch-Off Cards
- Printable Savings Trackers
- Tablet-Ready Savings Trackers
- Savings Workbooks & Journals
- Savings Kits & Bundles
- Seasonal Savings Challenges
- Color Palette Collections (Lavender+Teal, Sunset Citrus, Mocha Neutrals, Midnight Minimal)

### Goal-Based Categories
- $50 / $100 / $250 / $500 / $1000 Challenges
- Rainy Day / Emergency Fund Trackers
- Big Goal Trackers
- Vacation & Travel Trackers
- Holiday Savings Trackers
- Birthday / Celebration Challenges
- Home Improvement / Moving Savings Trackers

### Budgeting & Money Systems
- Budgeting tools (weekly, monthly, paycheck)
- Bi-weekly commission planner
- Bill trackers
- Expense logs
- Sinking funds logs
- Cash envelope trackers

### Debt Payoff Tools
- Debt payoff trackers
- Snowball / avalanche sheets
- Loan & credit card payoff trackers

### Mental Health & Recovery Tools
- Addiction recovery journals & worksheets
- Sobriety savings challenges
- Habit trackers
- Daily reflection logs
- Mood & trigger logs
- Self-regulation pages

### Wellness, Mindset & Lifestyle Tools
- Gratitude pages
- Self-care challenges
- Habit & routine builders

### Kids & Family
- Kids' savings challenges
- Allowance trackers
- Chore-based trackers
- Reward scratch challenges
- Color-in savings charts

### Theme Collections
- Butterfly Series
- Modern Minimal
- Sunset Citrus
- Mocha Neutral
- Midnight Minimal
- Soft Pastels
- Bold Color Pops

### Gifting & Ready-Made Sets
- Giftable starter kits
- Goal-specific packs
- Planner-ready printable packs
- Mega palette bundles

### Formats
- Printable PDFs
- GoodNotes / Notability templates
- Physical scratch cards
- Multi-palette packs

---

## 5. Shop Filters

- Format (Digital / Physical)
- Tool Type (Tracker / Scratch / Workbook / Kit)
- Palette (Lavender+Teal / Sunset / Mocha / Midnight)
- Difficulty (Gentle / Medium / Higher Savings)
- Goal Type (Emergency / Travel / Debt / Sinking Funds)
- Audience (Adults / Kids / Household)

---

## 6. Accessibility Standards (WCAG 2.1 AA)

- High-contrast text options
- Focus-visible outlines
- Reduced-motion compliance
- Large tap/click targets
- Screen-reader labels on interactive elements
- Keyboard-accessible scratch demo
- No flashing or disruptive animations

---

## 7. Component Library

### Buttons
- Primary gradient (Lavender → Teal)
- Secondary glass effect
- Quiet underline links

### Tokens & Motifs
- Palette dots (4 families)
- Badge tokens for features
- Floating icons (🪙 🦋)

### Cards
- Category cards
- Tracker cards (carousel)
- Testimonial cards
- About maker card

### Scratch Demo
- Fixed 220px circle
- Foil overlay with dashed ring
- Reset/scratch toggle
- Live total feedback

---

## 8. Interaction Rules

- Scratch circles never resize after reveal
- Values stay centered and large
- Foil fades with gentle opacity animation
- Sparkles appear on reveal
- Trackers display palette dots and offer space for notes/resets

---

## 9. Design Philosophy

Designed for neurodivergent guests, busy parents, workers, visual learners, and anyone seeking low-pressure budgeting tools that increase dopamine rewards while reducing overwhelm.

---

## 10. Code & Performance Guidelines

- Semantic HTML with mobile-first CSS
- Component-driven sections with minimal JS (only for demo interactions)
- Token-based inline styles for consistency
- Preload fonts, optimize SVG/PNG assets, and lazy-load lower images

---

## 11. Animations

- Slow-floating coins and butterflies (gentle ease)
- Soft hover elevation on cards
- Light gradient shifts on buttons
- No fast flashes or sudden motion

---

## 12. Assets Needed

- Tracker preview images (4 palettes)
- Scratch-off sample graphics
- Hero illustration cards
- Optional Rose portrait (illustrated)
- Social icons

---

## 13. Integration Notes

### WordPress / WooCommerce
- Products include palette variations
- Scratch-offs selectable as digital or physical
- Bundles auto-pair trackers and scratch cards
- "My Account" exposes digital downloads

### Future Enhancements
- Palette switcher across UI
- Multi-circle scratch demo
- Animated tracker progress bars
- Shop filters by palette + tool type

---

## 14. Licensing & Credits

All designs, illustrations, and tools are protected IP of S&S Kreates Co. (2025).

- Creative direction, branding, illustration, graphics, UI/UX, website development, digital product creation, interactive systems: **CDT Designs (Cam)**
- Product concepts, savings challenges, trackers, illustrations, palette direction, brand personality: **S&S Kreates Co. / Rose**

---

## 15. Getting Started

This repo is a clean slate. Add application code, assets, tooling, and documentation as the build progresses. Recreate configuration files (package managers, linters, formatters, etc.) to match your chosen stack. Tests should accompany all future components to ensure WCAG compliance and stable UI/UX behavior.

## License

See [LICENSE](LICENSE).
