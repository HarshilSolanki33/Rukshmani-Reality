 /* ===== 3D MOUSE TILT + REVEAL ===== */
    const cards = document.querySelectorAll(".showcase-card");
    const reveals = document.querySelectorAll(".showcase-content, .showcase-card");

    // Scroll Reveal
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
          setTimeout(() => entry.target.style.opacity = '1', index * 200);
        }
      });
    }, { threshold: 0.1 });

    reveals.forEach(el => {
      el.style.opacity = '0';
      el.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
      observer.observe(el);
    });

    // 3D Mouse Tilt
    cards.forEach(card => {
      card.addEventListener("mousemove", e => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left - rect.width / 2;
        const y = e.clientY - rect.top - rect.height / 2;

        card.style.transform = 
          `rotateX(${-y / 35}deg) rotateY(${x / 35}deg) translateZ(30px) scale(1.03)`;
      });

      card.addEventListener("mouseleave", () => {
        card.style.transform = '';
      });
    });

    // Smooth scroll for button
    document.querySelector('.showcase-button').addEventListener('click', e => {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });