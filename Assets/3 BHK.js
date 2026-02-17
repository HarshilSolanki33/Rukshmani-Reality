document.addEventListener("DOMContentLoaded", () => {

  /* SCROLL ANIMATION */
  const cards = document.querySelectorAll(".estate-box");

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if(entry.isIntersecting){
        entry.target.classList.add("show");
      }
    });
  },{ threshold:0.2 });

  cards.forEach(card => observer.observe(card));

  /* MODAL */
  const modal = document.getElementById("property-modal");
  const closeBtn = document.getElementById("close-modal");

  const img   = document.getElementById("modal-img");
  const title = document.getElementById("modal-title");
  const desc  = document.getElementById("modal-desc");
  const meta  = document.getElementById("modal-meta");
  const rent  = document.getElementById("modal-rent");

  document.querySelectorAll(".btn-view").forEach(btn => {
    btn.addEventListener("click", () => {

      const card = btn.closest(".estate-box");

      img.src = card.querySelector("img").src;
      title.textContent = card.querySelector("h2").textContent;
      desc.textContent  = card.querySelector(".estate-desc").textContent;
      meta.textContent  = card.querySelector(".estate-info").textContent;
      rent.textContent  = card.querySelector(".estate-price").textContent;

      modal.style.display = "flex";
      setTimeout(()=> modal.classList.add("show"), 10);
    });
  });

  closeBtn.onclick = () => {
    modal.classList.remove("show");
    setTimeout(()=> modal.style.display = "none", 300);
  };

  modal.onclick = e => {
    if(e.target === modal){
      modal.classList.remove("show");
      setTimeout(()=> modal.style.display = "none", 300);
    }
  };

});
