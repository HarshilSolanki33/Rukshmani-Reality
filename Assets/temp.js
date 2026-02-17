document.addEventListener("DOMContentLoaded", () => {

  const counters = document.querySelectorAll(".lux-stat h2");
  const section = document.querySelector(".lux-stats");
  let hasAnimated = false;

  const animateCounter = (el) => {
    const target = parseInt(el.dataset.count, 10);
    let current = 0;
    const increment = Math.max(1, Math.floor(target / 80));

    const update = () => {
      current += increment;
      if (current < target) {
        el.textContent = current;
        requestAnimationFrame(update);
      } else {
        el.textContent = target;
      }
    };

    update();
  };

  const observer = new IntersectionObserver(
    ([entry]) => {
      if (entry.isIntersecting && !hasAnimated) {
        hasAnimated = true;
        counters.forEach(counter => animateCounter(counter));
        observer.disconnect();
      }
    },
    {
      threshold: 0.4
    }
  );

  observer.observe(section);

});








// horizontsl scroll starts 
const track = document.querySelector('.lux-track');
let current = 0;

window.addEventListener('wheel', e=>{
  current += e.deltaY * 0.7;
  current = Math.max(0, Math.min(current, track.scrollWidth - window.innerWidth));
  track.style.transform = `translateX(-${current}px)`;
});



// video section starts 
const videoSection = document.querySelector(".lux-video");
const video = document.querySelector(".lux-bg-video");
const content = document.querySelector(".lux-video-content");

const videoObserver = new IntersectionObserver(entries=>{
  entries.forEach(entry=>{
    if(entry.isIntersecting){
      video.play();
      content.style.opacity = 1;
      content.style.transform = "translate(-50%, 0)";
    }else{
      video.pause();
    }
  });
},{threshold:.6});

videoObserver.observe(videoSection);


// timeline 
const timelineItems = document.querySelectorAll(".timeline-item");

const timelineObserver = new IntersectionObserver(entries=>{
  entries.forEach(entry=>{
    if(entry.isIntersecting){
      entry.target.classList.add("show");
    }
  });
},{threshold:.4});

timelineItems.forEach(item=>timelineObserver.observe(item));





// parallex starts 
const parallaxImg = document.querySelector(".lux-parallax-img img");

document.addEventListener("mousemove", e=>{
  const x = (window.innerWidth/2 - e.clientX) * 0.02;
  const y = (window.innerHeight/2 - e.clientY) * 0.02;
  parallaxImg.style.transform = `translate(${x}px, ${y}px) scale(1.05)`;
});



// brands section 
const philosophy = document.querySelector(".reveal-text");

new IntersectionObserver(entries=>{
  entries.forEach(entry=>{
    if(entry.isIntersecting){
      philosophy.classList.add("show");
    }
  });
},{threshold:.5}).observe(philosophy);
