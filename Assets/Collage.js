
/* Parallax collage scroll + entrance animation
   - Uses requestAnimationFrame for smooth parallax
   - IntersectionObserver adds `in-view` to trigger fade/scale
*/
(() => {
  const imgs = document.querySelectorAll('.p-img');
  if (!imgs.length) return;

  const SPEED = { slow: 0.03, medium: 0.06, fast: 0.12 };
  let ticking = false;

  function updateParallax() {
    const viewportCenter = window.innerHeight / 2;
    imgs.forEach(img => {
      const rect = img.getBoundingClientRect();
      // default to medium speed
      const speed = img.classList.contains('slow') ? SPEED.slow : (img.classList.contains('fast') ? SPEED.fast : SPEED.medium);
      const distanceFromCenter = rect.top + rect.height / 2 - viewportCenter;
      const offset = -distanceFromCenter * speed; // negative so images move opposite to scroll

      // apply only translateY so we preserve opacity transitions handled by CSS
      img.style.transform = `translateY(${offset}px)`;
    });
  }

  function onScroll() {
    if (!ticking) {
      window.requestAnimationFrame(() => {
        updateParallax();
        ticking = false;
      });
      ticking = true;
    }
  }

  // Entrance animation: fade/scale when element is visible
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('in-view');
      }
    });
  }, { threshold: 0.18 });

  imgs.forEach(img => observer.observe(img));

  // initial read & bind
  updateParallax();
  window.addEventListener('scroll', onScroll, { passive: true });
  window.addEventListener('resize', updateParallax);

  // Footer slide-up observer (already added earlier in file) is separate
})();

/* Earth section small parallax + entrance trigger */
(() => {
  const section = document.querySelector('.earth-section');
  if (!section) return;

  const img = section.querySelector('.earth-image img');
  const options = { threshold: 0.18 };

  const secObserver = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) section.classList.add('in-view');
      else section.classList.remove('in-view');
    });
  }, options);

  secObserver.observe(section);

  // subtle parallax while visible
  let rAF = null;
  function onScroll() {
    if (!img) return;
    const rect = section.getBoundingClientRect();
    const viewportHeight = window.innerHeight;
    const distance = rect.top - (viewportHeight / 2) + (rect.height / 2);
    const offset = Math.max(Math.min(-distance * 0.02, 30), -30); // clamp
    img.style.transform = `translateY(${offset}px)`;
  }

  function schedule() {
    if (rAF) return;
    rAF = window.requestAnimationFrame(() => {
      onScroll();
      rAF = null;
    });
  }

  window.addEventListener('scroll', schedule, { passive: true });
  window.addEventListener('resize', schedule);
  schedule();
})();
