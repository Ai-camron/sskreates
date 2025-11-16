import { describe, it, expect } from 'vitest';
import { readFileSync } from 'node:fs';
import path from 'node:path';
import { JSDOM } from 'jsdom';

const rootDir = path.resolve(__dirname, '..');
const html = readFileSync(path.join(rootDir, 'index.html'), 'utf-8');
const css = readFileSync(path.join(rootDir, 'styles.css'), 'utf-8');
const dom = new JSDOM(html);
const { document } = dom.window;

describe('Accessibility structure', () => {
  it('sets the language attribute and skip link', () => {
    expect(document.documentElement.getAttribute('lang')).toBe('en');
    expect(document.querySelector('.skip-link')?.getAttribute('href')).toBe('#main');
  });

  it('includes semantic landmarks', () => {
    expect(document.querySelector('header')).not.toBeNull();
    expect(document.querySelector('main')).not.toBeNull();
    expect(document.querySelector('footer')).not.toBeNull();
  });

  it('ensures every button has accessible text', () => {
    const buttons = Array.from(document.querySelectorAll('button'));
    const unnamed = buttons.filter((btn) => !btn.textContent.trim() && !btn.getAttribute('aria-label'));
    expect(unnamed.length).toBe(0);
  });

  it('scratch demo exposes aria-live feedback', () => {
    const live = document.querySelector('#scratch-total');
    expect(live?.getAttribute('aria-live')).toBe('polite');
    const circle = document.querySelector('.scratch-circle');
    expect(circle?.getAttribute('role')).toBe('group');
  });

  it('CSS honors prefers-reduced-motion', () => {
    expect(css.includes('prefers-reduced-motion')).toBe(true);
  });
});
