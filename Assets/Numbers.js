const counters = document.querySelectorAll('.counter');
let started = false;

function startCounting() {
  counters.forEach(counter => {
    const target = +counter.getAttribute('data-target');
    let count = 0;

    const update = () => {
      const increment = target / 80;

      if (count < target) {
        count += increment;
        counter.innerText = Math.ceil(count);
        requestAnimationFrame(update);
      } else {
        counter.innerText = target;
      }
    };
    update();
  });
}

window.addEventListener('scroll', () => {
  const section = document.querySelector('.stats-section');
  const sectionTop = section.getBoundingClientRect().top;

  if (sectionTop < window.innerHeight && !started) {
    started = true;
    startCounting();
  }
});
