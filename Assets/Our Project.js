// Our project main image 
window.addEventListener("scroll", () => {
  const hero = document.querySelector(".sticky-hero");
  hero.style.opacity = 1 - window.scrollY / 500;
});


// Vision meet structure section starts 
document.addEventListener("DOMContentLoaded", () => {

  const cards = document.querySelectorAll(".project-card");

  const observer = new IntersectionObserver((entries)=>{
    entries.forEach(entry=>{
      if(entry.isIntersecting){
        entry.target.classList.add("show");
      }
    });
  },{
    threshold: 0.2
  });

  cards.forEach(card=>observer.observe(card));

});


// Project section starts 
const yearButtons = document.querySelectorAll(".yrproj-year-btn");
const projectCards = document.querySelectorAll(".yrproj-item");

yearButtons.forEach(btn => {
  btn.addEventListener("click", () => {

    yearButtons.forEach(b => b.classList.remove("active"));
    btn.classList.add("active");

    const year = btn.getAttribute("data-year");

    projectCards.forEach(card => {
      card.style.display =
        card.getAttribute("data-year") === year ? "flex" : "none";
    });
  });
});

document.querySelector(".yrproj-year-btn.active").click();

// Extra js 
// Golden underline animation for headings
const titles = document.querySelectorAll('.yrproj-title');

titles.forEach(title => {
  // animate on load (staggered)
  setTimeout(() => {
    title.style.setProperty('--active', '1');
    title.classList.add('active');
  }, Math.random() * 600);

  // animate on hover
  title.closest('.yrproj-item').addEventListener('mouseenter', () => {
    title.classList.add('active');
  });

  title.closest('.yrproj-item').addEventListener('mouseleave', () => {
    title.classList.remove('active');
  });
});



// POP UP Close karva mate js
  document.querySelector('.rr-close-btn').addEventListener('click', function () {
    document.querySelector('.rr-overlay').style.display = 'none';
  });
