document.addEventListener("DOMContentLoaded", () => {

  const box = document.querySelector(".belief-quote-box");
  const quote = document.querySelector(".belief-quote");
  const author = document.querySelector(".quote-author");
  const icons = document.querySelectorAll(".quote-icon");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {

          box.classList.add("animate-box");

          setTimeout(() => {
            quote.classList.add("animate-quote");
          }, 400);

          setTimeout(() => {
            author.classList.add("animate-author");
          }, 650);

          icons.forEach((icon, i) => {
            setTimeout(() => {
              icon.classList.add("animate-icon");
            }, i * 300);
          });

          observer.disconnect(); // run once
        }
      });
    },
    { threshold: 0.4 }
  );

  observer.observe(box);
});
