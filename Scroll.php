<button id="topBtn" aria-label="Scroll to top">
  <svg viewBox="0 0 24 24">
    <path d="M12 4L4 12H9V20H15V12H20L12 4Z"
      stroke="white"
      stroke-width="2"
      stroke-linecap="round"
      stroke-linejoin="round"
      fill="white"/>
  </svg>
</button>

<script>
window.addEventListener(
  "scroll",
  () => {
    const b = document.getElementById("topBtn");
    b.classList.toggle("show", window.scrollY > 200);
  },
  { passive: true }
);

document.getElementById("topBtn").onclick = () => {
  window.scrollTo({ top: 0, behavior: "smooth" });
};
</script>

<style>
#topBtn{
  position: fixed;
  bottom: 20px;
  right: 20px;
  border: none;
  border-radius: 50%;
  cursor: pointer;

  background: rgb(185, 135, 75);
  color: white;

  display: flex;
  align-items: center;
  justify-content: center;

  box-shadow: 0 10px 25px rgba(0,0,0,.25);

  transition: .35s ease;
  opacity: 0;
  transform: scale(.6);
  pointer-events: none;

  animation: pulse 2.2s infinite;
}

/* base size */
#topBtn{
  width: 50px;
  height: 50px;
}

#topBtn svg{
  width: 24px;
  height: 24px;
}

/* MOBILE (small screens) */
@media (max-width: 600px){
  #topBtn{
    width: 58px;
    height: 58px;
    bottom: 26px;
    right: 16px;
  }
  #topBtn svg{
    width: 26px;
    height: 26px;
  }
}

/* LARGE SCREENS / DESKTOP */
@media (min-width: 1200px){
  #topBtn{
    width: 60px;
    height: 60px;
  }
  #topBtn svg{
    width: 28px;
    height: 28px;
  }
}

/* show/hide */
#topBtn.show{
  opacity: 1;
  transform: scale(1);
  pointer-events: auto;
}

/* hover (desktop only) */
@media (hover:hover){
  #topBtn:hover{
    transform: translateY(-6px) scale(1.12);
  }
}

/* pulse animation */
@keyframes pulse{
  0%{ box-shadow: 0 0 0 0 rgba(185,135,75,.55);}
  70%{ box-shadow: 0 0 0 20px rgba(185,135,75,0);}
  100%{ box-shadow: 0 0 0 0 rgba(185,135,75,0);}
}
</style>
