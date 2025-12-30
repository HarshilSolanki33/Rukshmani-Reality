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


