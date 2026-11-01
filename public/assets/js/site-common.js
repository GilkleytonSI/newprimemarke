/* PrimeMarke Bloco 03 — melhorias progressivas e compartilhadas. */
(() => {
  'use strict';
  const init = () => {
    // Accessible keyboard dismissal for menus/dialogs supporting aria-expanded.
    document.addEventListener('keydown', (event) => {
      if (event.key !== 'Escape') return;
      document.querySelectorAll('[aria-expanded="true"]').forEach((trigger) => {
        trigger.setAttribute('aria-expanded', 'false');
      });
    });
    // External links opened in new tabs should not access the original window.
    document.querySelectorAll('a[target="_blank"]').forEach((link) => {
      const rel = new Set((link.getAttribute('rel') || '').split(/\s+/).filter(Boolean));
      rel.add('noopener'); rel.add('noreferrer');
      link.setAttribute('rel', [...rel].join(' '));
    });
  };
  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init, { once: true });
  else init();
})();
