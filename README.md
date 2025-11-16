# S&S Kreates Co. marketing site

This repository contains the static marketing site for **S&S Kreates Co.**, an ADHD-friendly, WCAG-compliant budgeting brand. The single-page experience highlights every major product category, an accessible scratch demo, testimonials, palettes, and newsletter capture copy from the creative brief.

## Project structure

```
├── index.html      # semantic layout + component structure
├── styles.css      # brand token system, responsive layout, animations
├── script.js       # interactive scratch demo, carousel, motion toggle
├── tests/
│   └── accessibility.test.js  # Jest assertions for UI + accessibility hooks
├── package.json
└── jest.config.cjs
```

## Development

1. **Install dependencies**
   ```bash
   npm install
   ```
2. **Run the local server** (serves files at http://localhost:4173)
   ```bash
   npm run dev
   ```
3. **Run the automated tests**
   ```bash
   npm test
   ```

### Accessibility + interaction highlights

- Skip link, semantic landmarks, aria labels, and focus-visible outlines
- Scratch demo with keyboard support, aria-live totals, and reduced-motion safe fade
- Carousel controls usable via keyboard or pointer devices
- Motion toggle that respects `prefers-reduced-motion` while allowing manual override
- Testimonials auto-scroll pauses on focus/hover

## Testing philosophy

Per the brief, automated tests cover:
- Presence of accessible language attributes and CTA structure
- Scratch demo state changes and ARIA attributes
- Reduced motion toggle behavior
- Existence of the documented color token palette
- Currency formatting utility used throughout interactive feedback

Feel free to expand the suite with additional component-level checks as new UI grows.

## License

This project inherits the existing LICENSE file in the repository.
