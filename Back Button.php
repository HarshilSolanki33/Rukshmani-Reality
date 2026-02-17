<!-- Back button starts  -->
    <div class="back-btn" onclick="history.back()">
  <span class="arrow">←</span>
</div>

<!-- Back button ends  -->


<style>
    /* Back button starts  */
.back-btn {
  position: fixed;
  top: 50%;
  left: 30px;
  transform: translateY(-50%);
  background: linear-gradient(135deg, #d8b97b, #b8924c);
  color: white;
  font-size: 30px;
  width: 55px;
  height: 55px;
  border-radius: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  box-shadow: 0 8px 30px rgba(0,0,0,0.15);
  transition: 0.3s ease;
  z-index: 2000;
}

/* Hover effect */
.back-btn:hover {
  transform: translateY(-50%) scale(1.08);
  box-shadow: 0 12px 40px rgba(0,0,0,0.25);
  overflow: hidden;
}
/* arrow animation */
/* button ma already overflow hidden che? add kari do */
.back-btn{
  position: fixed;
  top: 50%;
  left: 30px;
  transform: translateY(-50%);
  
  /* same color but transparent */
  background: linear-gradient(
    135deg,
    rgba(216,185,123,0.75),
    rgba(184,146,76,0.75)
  );

  backdrop-filter: blur(6px);
  -webkit-backdrop-filter: blur(6px);

  color: white;
  font-size: 30px;
  width: 55px;
  height: 55px;
  border-radius: 50px;

  display: flex;
  align-items: center;
  justify-content: center;

  cursor: pointer;
  box-shadow: 0 8px 30px rgba(0,0,0,0.15);
  transition: 0.3s ease;
  z-index: 2000;
  overflow:hidden;
}

/* hover same */
.back-btn:hover{
  transform: translateY(-50%) scale(1.08);
  box-shadow: 0 12px 40px rgba(0,0,0,0.25);
}


/* arrow */
.arrow{
  display:inline-block;
  animation:arrowPass 1.6s infinite linear;
}

/* slide through animation */
@keyframes arrowPass{
  0%{
    transform:translateX(25px);
    opacity:0;
  }
  20%{
    opacity:1;
  }
  50%{
    transform:translateX(0);
    opacity:1;
  }
  80%{
    opacity:1;
  }
  100%{
    transform:translateX(-25px);
    opacity:0;
  }
}

/* ============================
   RESPONSIVE BREAKPOINTS
   ============================ */

/* Tablets */
@media (max-width: 991px) {
  .back-btn {
    left: 20px;
    width: 55px;
    height: 55px;
    font-size: 26px;
  }
}

/* Large Mobile */
@media (max-width: 767px) {
  .back-btn {
    left: 15px;
    width: 50px;
    height: 50px;
    font-size: 24px;
  }
}

/* Small Mobile */
@media (max-width: 480px) {
  .back-btn {
    left: 10px;
    width: 45px;
    height: 45px;
    font-size: 22px;
  }
}

/* Mini Phones */
@media (max-width: 360px) {
  .back-btn {
    left: 8px;
    width: 42px;
    height: 42px;
    font-size: 20px;
  }
}

/* Back button over  */
</style>