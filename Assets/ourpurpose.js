const missionBox = document.querySelector('.mission-box');
const animatedItems = document.querySelectorAll('.step, .arrow');
let played = false;

window.addEventListener('scroll', () => {
  const trigger = missionBox.getBoundingClientRect().top;

  if (trigger < window.innerHeight - 120 && !played) {
    played = true;

    animatedItems.forEach((item, index) => {
      setTimeout(() => {
        item.style.opacity = 1;
        item.style.transform = 'translateY(0)';
      }, index * 250);
    });
  }
});
