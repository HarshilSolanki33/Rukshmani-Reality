// Heading underline animation on page load


 
  const items = document.querySelectorAll('.u-underline');

  const obs = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate');   // run animation
      }
    });
  }, { threshold: 0.4 });

  items.forEach(el => obs.observe(el));

  







