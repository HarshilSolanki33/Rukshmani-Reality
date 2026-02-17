// Luxury Scroll Reveal Animation
    function initLuxuryReveal() {
      const observerOptions = {
        threshold: 0.15,
        rootMargin: '0px 0px -100px 0px'
      };

      const luxuryObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
          if (entry.isIntersecting) {
            setTimeout(() => {
              entry.target.classList.add('show');
            }, index * 150); // Staggered animation
          }
        });
      }, observerOptions);

      // Observe all reveal elements
      const reveals = document.querySelectorAll('.reveal');
      reveals.forEach(reveal => luxuryObserver.observe(reveal));
    }

    // Initialize on DOM load
    document.addEventListener('DOMContentLoaded', initLuxuryReveal);

    // Smooth page load
    window.addEventListener('load', () => {
      document.body.style.opacity = '1';
    });






    // index page counter section starts 
    // 🔥 LUX STATS COUNTER - SMOOTH ANIMATION
document.addEventListener('DOMContentLoaded', function() {
  
  // Counter Animation Function
  function animateCounters() {
    const counters = document.querySelectorAll('.lux-stat h2[data-count]');
    
    counters.forEach(counter => {
      const target = parseInt(counter.dataset.count);
      const duration = 2500; // 2.5 seconds
      const increment = target / (duration / 16); // 60fps
      let current = 0;
      
      const updateCounter = () => {
        if (current < target) {
          current += increment;
          if (current > target) current = target;
          counter.textContent = Math.floor(current).toLocaleString();
          requestAnimationFrame(updateCounter);
        } else {
          counter.textContent = target.toLocaleString();
        }
      };
      updateCounter();
    });
  }

  // Intersection Observer - Trigger on scroll
  const statsObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Staggered start
        setTimeout(() => {
          animateCounters();
        }, 200);
        statsObserver.unobserve(entry.target); // Run once
      }
    });
  }, { 
    threshold: 0.3, // 30% visible
    rootMargin: '-50px 0px -100px 0px'
  });

  // Observe stats section
  const statsSection = document.querySelector('.lux-stats');
  if (statsSection) {
    statsObserver.observe(statsSection);
  }

  // Initial comma formatting
  document.querySelectorAll('.lux-stat h2[data-count]').forEach(counter => {
    counter.textContent = '0';
  });

  // Window resize handler
  window.addEventListener('resize', () => {
    if (document.querySelector('.lux-stats')) {
      statsObserver.observe(document.querySelector('.lux-stats'));
    }
  });
});