const fs = require('fs');
const path = require('path');
const {
  initScratchDemo,
  initMotionToggle,
  initProgressMeters,
  formatCurrency,
} = require('../script.js');

const html = fs.readFileSync(path.resolve(__dirname, '../index.html'), 'utf8');
const styles = fs.readFileSync(path.resolve(__dirname, '../styles.css'), 'utf8');

describe('S&S Kreates marketing site', () => {
  let container;
  beforeEach(() => {
    const parser = new DOMParser();
    const parsed = parser.parseFromString(html, 'text/html');
    document.body.innerHTML = '';
    document.body.append(...parsed.body.children);
    container = document;
    if (!window.matchMedia) {
      window.matchMedia = () => ({ matches: false, addEventListener: jest.fn() });
    }
  });

  test('sets lang attribute for accessibility', () => {
    const langMatch = html.match(/<html[^>]*lang="([^"]+)"/i);
    expect(langMatch[1]).toBe('en');
  });

  test('hero contains descriptive heading and call to action', () => {
    const heroTitle = document.querySelector('#hero-title');
    expect(heroTitle).toBeInTheDocument();
    expect(heroTitle.textContent).toMatch(/gentle, joyful/i);
    const ctas = document.querySelectorAll('.hero .btn');
    expect(ctas.length).toBeGreaterThanOrEqual(2);
  });

  test('scratch demo updates aria attributes when revealed', () => {
    const scratchApi = initScratchDemo(container);
    expect(scratchApi).not.toBeNull();
    scratchApi.scratch();
    const total = document.querySelector('[data-scratch-total]').textContent;
    expect(total).toContain('$50');
    expect(document.querySelector('[data-foil]').dataset.hidden).toBe('true');
    expect(document.querySelector('[data-scratch-trigger]').getAttribute('aria-pressed')).toBe('true');
  });

  test('motion toggle flips reduced motion data attribute', () => {
    const motion = initMotionToggle(container);
    expect(motion).not.toBeNull();
    const before = document.body.dataset.reducedMotion;
    motion.toggle();
    expect(document.body.dataset.reducedMotion).not.toBe(before);
  });

  test('character spotlight includes descriptive imagery', () => {
    const img = document.querySelector('[data-character-img]');
    expect(img).toBeInTheDocument();
    expect(img.getAttribute('alt')).toMatch(/planner|character|desk/i);
  });

  test('progress meters animate and remain accessible', () => {
    const progress = initProgressMeters(container);
    expect(progress).not.toBeNull();
    const meters = document.querySelectorAll('[data-progress-meter]');
    expect(meters.length).toBeGreaterThanOrEqual(3);
    meters.forEach((meter) => {
      expect(meter.getAttribute('role')).toBe('meter');
      const value = Number(meter.getAttribute('aria-valuenow'));
      expect(value).toBeGreaterThan(0);
      const fill = meter.querySelector('.progress-fill');
      expect(parseFloat(fill.style.width)).toBeGreaterThan(0);
    });
  });

  test('gallery figures provide captions for imagery', () => {
    const figures = document.querySelectorAll('[data-gallery-figure]');
    expect(figures.length).toBeGreaterThanOrEqual(3);
    figures.forEach((figure) => {
      expect(figure.querySelector('figcaption')).not.toBeNull();
    });
  });

  test('includes WooCommerce and form plugin shortcodes', () => {
    expect(html).toMatch(/\[product_categories[^\]]*\]/i);
    expect(html).toMatch(/\[products[^\]]*visibility="featured"[^\]]*\]/i);
    expect(html).toMatch(/\[woocommerce_cart\]/i);
    expect(html).toMatch(/\[mailpoet_form[^\]]*\]/i);
    expect(html).toMatch(/\[wpforms[^\]]*\]/i);
  });

  test('brand palette tokens exist in styles', () => {
    expect(styles).toMatch(/#d7c7ff/i);
    expect(styles).toMatch(/#66d8cc/i);
    expect(styles).toMatch(/#f3a9c9/i);
    expect(styles).toMatch(/#2f2a3f/i);
  });

  test('currency formatter outputs US currency', () => {
    expect(formatCurrency(75)).toBe('$75.00');
  });
});
