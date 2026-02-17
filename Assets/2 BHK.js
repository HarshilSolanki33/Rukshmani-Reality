document.addEventListener("DOMContentLoaded", function () {

  /* ===========================
        CARD ANIMATION + 3D TILT
  ============================*/

  const cards = document.querySelectorAll(".listing-item");

  const observer = new IntersectionObserver((entries)=>{
    entries.forEach(entry=>{
      if(entry.isIntersecting){
        entry.target.classList.add("show");
      }
    });
  },{ threshold: 0.2 });

  cards.forEach(card=>{

    observer.observe(card);

    // 3D hover tilt
    card.addEventListener("mousemove", e=>{

      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;

      const rotateY = ((x / rect.width) - 0.5) * 12;
      const rotateX = ((y / rect.height) - 0.5) * -12;

      card.style.transform =
        `perspective(900px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.03)`;
    });

    card.addEventListener("mouseleave", ()=>{
      card.style.transform =
        "perspective(900px) rotateX(0deg) rotateY(0deg) scale(1)";
    });

  });


  /* ===========================
             MODAL POPUP
  ============================*/

  const modal = document.getElementById("property-modal");
  const closeBtn = document.getElementById("close-modal");

  if(modal && closeBtn){

    const title = document.getElementById("modal-title");
    const desc  = document.getElementById("modal-desc");
    const meta  = document.getElementById("modal-meta");
    const rent  = document.getElementById("modal-rent");
    const img   = document.getElementById("modal-img");

    document.querySelectorAll(".btn-outline").forEach(btn => {

      btn.addEventListener("click", () => {

        const card = btn.closest(".listing-item");

        img.src = card.querySelector("img").src;
        title.textContent = card.querySelector("h2").textContent;
        desc.textContent  = card.querySelector(".listing-text").textContent;
        meta.textContent  = card.querySelector(".listing-specs").textContent;
        rent.textContent  = card.querySelector(".listing-rate").textContent;

        modal.style.display = "flex";
        setTimeout(()=> modal.classList.add("show"), 10);

      });

    });

    // close modal
    closeBtn.onclick = () => {
      modal.classList.remove("show");
      setTimeout(()=> modal.style.display = "none", 300);
    };

    modal.onclick = (e) => {
      if(e.target === modal){
        modal.classList.remove("show");
        setTimeout(()=> modal.style.display = "none", 300);
      }
    };
  }

});
