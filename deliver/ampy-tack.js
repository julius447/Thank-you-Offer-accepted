/* =========================================================================
   Ampy tack-sida — production JS  ·  FluentSnippets / Bricks
   OPTIONAL enhancement only. The check + halo animations are pure CSS and
   run on load without JS. This IIFE simply REPLAYS the check draw-in when
   the block scrolls into view (useful if the block sits lower on a page).
   Scoped to .ampy-tack, no dependencies, respects reduced-motion.
   Paste verbatim into a FluentSnippets JS snippet (load in footer).
   ========================================================================= */
(function () {
  var roots = document.querySelectorAll('.ampy-tack');
  if (!roots.length) return;
  if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
  if (!('IntersectionObserver' in window)) return;

  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (!entry.isIntersecting) return;
      var svg = entry.target.querySelector('.ampy-tack__check-svg');
      if (svg) {
        // clone-and-replace resets the CSS animations so the tick draws in again
        var clone = svg.cloneNode(true);
        svg.parentNode.replaceChild(clone, svg);
      }
      io.unobserve(entry.target);
    });
  }, { threshold: 0.35 });

  roots.forEach(function (r) { io.observe(r); });
})();
