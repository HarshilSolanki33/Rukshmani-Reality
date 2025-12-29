 const cards = document.querySelectorAll('.project-card');

  cards.forEach(card => {
    card.addEventListener('mouseenter', () => {
      cards.forEach(c => c.classList.add('fade'));
      card.classList.remove('fade');
      card.classList.add('active');
    });

    card.addEventListener('mouseleave', () => {
      cards.forEach(c => {
        c.classList.remove('fade');
        c.classList.remove('active');
      });
    });
  });