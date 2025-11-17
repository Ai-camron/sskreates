const SCRATCH_VALUE = 50;

function formatCurrency(value) {
  return new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }).format(value);
}

function initScratchDemo(root = document) {
  const area = root.querySelector('[data-scratch-area]');
  const foil = root.querySelector('[data-foil]');
  const scratchBtn = root.querySelector('[data-scratch-trigger]');
  const resetBtn = root.querySelector('[data-reset-trigger]');
  const totalOutput = root.querySelector('[data-scratch-total]');
  const sparkles = root.querySelector('[data-sparkles]');

  if (!area || !foil || !scratchBtn || !resetBtn || !totalOutput) {
    return null;
  }

  let revealed = false;

  const updateTotal = () => {
    const total = revealed ? SCRATCH_VALUE : 0;
    totalOutput.textContent = `Total saved: ${formatCurrency(total)}`;
  };

  const showSparkles = (show) => {
    if (sparkles) {
      sparkles.dataset.visible = show ? 'true' : 'false';
    }
  };

  const scratch = () => {
    if (revealed) return;
    revealed = true;
    foil.dataset.hidden = 'true';
    scratchBtn.setAttribute('aria-pressed', 'true');
    showSparkles(true);
    updateTotal();
  };

  const reset = () => {
    revealed = false;
    delete foil.dataset.hidden;
    scratchBtn.setAttribute('aria-pressed', 'false');
    showSparkles(false);
    updateTotal();
  };

  scratchBtn.addEventListener('click', scratch);
  resetBtn.addEventListener('click', reset);

  area.addEventListener('keydown', (event) => {
    if (event.key === 'Enter' || event.key === ' ') {
      event.preventDefault();
      scratch();
    }
  });

  area.setAttribute('tabindex', '0');
  updateTotal();
  return { scratch, reset };
}

function initCarousel(root = document) {
  const track = root.querySelector('[data-carousel]');
  const prev = root.querySelector('[data-carousel-prev]');
  const next = root.querySelector('[data-carousel-next]');
  if (!track || !prev || !next) {
    return null;
  }

  const scrollByAmount = (direction) => {
    const amount = track.clientWidth * 0.8;
    track.scrollBy({ left: amount * direction, behavior: 'smooth' });
  };

  prev.addEventListener('click', () => scrollByAmount(-1));
  next.addEventListener('click', () => scrollByAmount(1));
  return { scrollByAmount };
}

function initMotionToggle(root = document) {
  const button = root.querySelector('[data-motion-toggle]');
  const stateLabel = root.querySelector('[data-motion-state]');
  if (!button || !stateLabel) {
    return null;
  }

  const applyState = (isReduced) => {
    root.body.dataset.reducedMotion = String(isReduced);
    stateLabel.textContent = isReduced ? 'on' : 'off';
  };

  const media = window.matchMedia('(prefers-reduced-motion: reduce)');
  applyState(media.matches);

  const toggle = () => {
    const current = root.body.dataset.reducedMotion === 'true';
    applyState(!current);
  };

  button.addEventListener('click', toggle);
  const handleChange = (event) => applyState(event.matches);
  if (typeof media.addEventListener === 'function') {
    media.addEventListener('change', handleChange);
  } else if (typeof media.addListener === 'function') {
    media.addListener(handleChange);
  }

  return { applyState, toggle };
}

function initTestimonialsAutoScroll(root = document) {
  const row = root.querySelector('[data-testimonial-row]');
  if (!row) return null;

  let rafId = null;
  let direction = 1;

  const step = () => {
    if (root.body.dataset.reducedMotion === 'true') {
      rafId = null;
      return;
    }
    row.scrollLeft += 0.2 * direction;
    if (row.scrollLeft + row.clientWidth >= row.scrollWidth || row.scrollLeft <= 0) {
      direction *= -1;
    }
    rafId = requestAnimationFrame(step);
  };

  const start = () => {
    if (!rafId) {
      rafId = requestAnimationFrame(step);
    }
  };

  const stop = () => {
    if (rafId) {
      cancelAnimationFrame(rafId);
      rafId = null;
    }
  };

  row.addEventListener('mouseenter', stop);
  row.addEventListener('focusin', stop);
  row.addEventListener('mouseleave', start);
  row.addEventListener('focusout', start);
  start();
  return { start, stop };
}

function setCurrentYear(root = document) {
  const yearEl = root.querySelector('#year');
  if (yearEl) {
    yearEl.textContent = new Date().getFullYear();
  }
}

function initApp(root = document) {
  initScratchDemo(root);
  initCarousel(root);
  initMotionToggle(root);
  initTestimonialsAutoScroll(root);
  setCurrentYear(root);
}

if (typeof document !== 'undefined') {
  document.addEventListener('DOMContentLoaded', () => initApp(document));
}

if (typeof module !== 'undefined') {
  module.exports = {
    initScratchDemo,
    initCarousel,
    initMotionToggle,
    initTestimonialsAutoScroll,
    setCurrentYear,
    initApp,
    formatCurrency,
  };
}
