(function () {
  const track = document.querySelector('.slider-track');
  if (!track) return;

  function setDuration(){
    const oneSetWidth = track.scrollWidth / 2;
    const speed = 90; // px per second (luxury slow)
    const duration = oneSetWidth / speed;
    track.style.animationDuration = duration + 's';
  }

  window.addEventListener('load', setDuration);
  window.addEventListener('resize', setDuration);
})();
