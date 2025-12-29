const hamburger = document.getElementById("hamburger");
const sideMenu  = document.getElementById("sideMenu");
const overlay   = document.getElementById("overlay");
const closeBtn  = document.getElementById("closeMenu");

hamburger.addEventListener("click", () => {
  sideMenu.classList.add("show");
  overlay.classList.add("show");
});

closeBtn.addEventListener("click", () => {
  sideMenu.classList.remove("show");
  overlay.classList.remove("show");
});

overlay.addEventListener("click", () => {
  sideMenu.classList.remove("show");
  overlay.classList.remove("show");
});

