
let currentScroll = window.pageYOffset;
let targetScroll = currentScroll;
let isScrolling = false;

window.addEventListener("wheel", function (e) {
    e.preventDefault();
    targetScroll += e.deltaY;
    targetScroll = Math.max(
        0,
        Math.min(targetScroll, document.body.scrollHeight - window.innerHeight)
    );

    if (!isScrolling) smoothScroll();
}, { passive: false });

function smoothScroll() {
    isScrolling = true;
    currentScroll += (targetScroll - currentScroll) * 0.08;

    if (Math.abs(targetScroll - currentScroll) < 0.5) {
        currentScroll = targetScroll;
        isScrolling = false;
    } else {
        requestAnimationFrame(smoothScroll);
    }

    window.scrollTo(0, currentScroll);
}


// Hero section line  
window.addEventListener("load", function(){
      const title = document.querySelector(".hero-title");
      if(title){
        title.classList.add("line-animate");
      }
  });

// Heading line animation 
document.addEventListener("DOMContentLoaded", function () {
  const heading = document.querySelector(".section-header h2");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          heading.classList.add("animate");
          observer.unobserve(heading); // ek vaar j animate thase
        }
      });
    },
    {
      threshold: 0.5 // 50% screen ma aave tyare
    }
  );

  observer.observe(heading);
});

// Project Highlight Cards Animation
document.addEventListener("DOMContentLoaded", function () {
  const cards = document.querySelectorAll(".highlight-card");

  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
          // small stagger for premium feel
          entry.target.style.transitionDelay = `${index * 0.1}s`;
          entry.target.classList.add("is-visible");
          observer.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.2
    }
  );

  cards.forEach(card => observer.observe(card));
});





  const popup = document.getElementById("planPopup");
  const popupImg = document.getElementById("popupImg");
  const closePopup = document.getElementById("closePopup");

  document.querySelectorAll(".plan-img").forEach(img => {
    img.addEventListener("click", () => {
      popup.style.display = "flex";
      popupImg.src = img.src;
    });
  });

  closePopup.addEventListener("click", () => {
    popup.style.display = "none";
  });

  popup.addEventListener("click", (e) => {
    if(e.target === popup){
      popup.style.display = "none";
    }
  });



 

// index page temp section script 
  const frames = document.querySelectorAll('.photo-frame');

  const io = new IntersectionObserver((entries)=>{
    entries.forEach(e=>{
      if(e.isIntersecting){
        e.target.classList.add('inview');
        io.unobserve(e.target);
      }
    });
  },{threshold:0.3});

  frames.forEach(f=>io.observe(f));
