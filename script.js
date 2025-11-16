document.addEventListener('DOMContentLoaded', () => {
  const foilButton = document.querySelector('.scratch-foil');
  const scratchButton = document.querySelector('[data-action="scratch"]');
  const resetButton = document.querySelector('[data-action="reset"]');
  const scratchValue = document.querySelector('.scratch-value strong');
  const scratchTotal = document.getElementById('scratch-total');
  const sparkles = document.querySelector('.sparkles');
  const currentYearEl = document.getElementById('current-year');

  if (currentYearEl) {
    currentYearEl.textContent = new Date().getFullYear();
  }

  const savingsValues = ['$25', '$50', '$75', '$100'];
  let scratched = false;

  const announceTotal = (valueText) => {
    scratchTotal.textContent = valueText;
  };

  const toggleSparkles = (show) => {
    if (!sparkles) return;
    sparkles.classList.toggle('active', show);
    if (show) {
      setTimeout(() => sparkles.classList.remove('active'), 1200);
    }
  };

  const revealAmount = () => {
    if (scratched) return;
    scratched = true;
    const amount = savingsValues[Math.floor(Math.random() * savingsValues.length)];
    scratchValue.textContent = amount;
    foilButton.classList.add('is-scratched');
    foilButton.setAttribute('aria-pressed', 'true');
    toggleSparkles(true);
    announceTotal(`You've uncovered ${amount} today!`);
  };

  const resetScratch = () => {
    scratched = false;
    scratchValue.textContent = '$0';
    foilButton.classList.remove('is-scratched');
    foilButton.setAttribute('aria-pressed', 'false');
    announceTotal('Scratch to reveal your progress.');
    toggleSparkles(false);
  };

  [foilButton, scratchButton].forEach((trigger) => {
    trigger?.addEventListener('click', revealAmount);
    trigger?.addEventListener('keyup', (event) => {
      if (event.key === 'Enter' || event.key === ' ') {
        event.preventDefault();
        revealAmount();
      }
    });
  });

  resetButton?.addEventListener('click', resetScratch);
});
