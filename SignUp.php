<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up | Rukmani Realty</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
:root{
  --lux-gold: rgb(185,135,75);
  --off-white:#f7f5f2;
}

body{
  margin:0;
  font-family:"Poppins",sans-serif;
  background:var(--off-white);
  height:100vh;
  display:flex;
  align-items:center;
  justify-content:center;
}

/* Popup overlay */
.overlay{
  position:fixed;
  inset:0;
  display:flex;
  align-items:center;
  justify-content:center;
  background:radial-gradient(circle at 30% 20%, rgba(255,255,255,0.25), transparent 40%),
             radial-gradient(circle at 70% 80%, rgba(185,135,75,0.25), transparent 45%),
             rgba(0,0,0,0.35);
  backdrop-filter:blur(14px) saturate(140%);
  overflow:hidden;
}


/* Popup card (bigger form) */
.popup{
  width:950px;
  max-width:95vw;
  flex-direction: row;
  background:white;
  border-radius:25px;
  display:flex;
  overflow:visible;
  box-shadow:0 30px 60px rgba(0,0,0,0.25);
  opacity:1;
  transform:none;  
  position:relative;
  z-index:2;
  min-height:auto;
}


@keyframes popupIn{
  to{transform:scale(1);opacity:1}
}

/* Form */
.form-box{
  width:52%;                /* left 55% */
  padding:28px 32px 28px 32px;
  border-right:1px solid #eee;
}
.logo{
  height:80px;            /* logo size */
  object-fit:contain;
  margin-bottom:20px;
}




.close-btn{
  position:absolute;
  top:18px;
  right:22px;
  font-size:28px;
  border:none;
  background:none;
  cursor:pointer;
  color:#777;
  transition:0.3s;
}
.close-btn:hover{color:black}

.form-box h2{
  font-size:26px;
  margin:0 0 8px 0;
}
.subtitle{
  color:#777;
  margin-bottom:18px;
  font-size:13px;
}

.input-group { margin-bottom:16px; }
.input-group label{
  font-size:12px;
  font-weight:600;
  display:block;
  margin-bottom:4px;
}
.input-group input{
  width:100%;
  padding:10px;
  border-radius:8px;
  border:1px solid #ddd;
  font-size:13px;
  transition:0.25s;
}
.input-group input:focus{
  border-color:var(--lux-gold);
  outline:none;
  box-shadow:0 0 0 2px rgba(185,135,75,0.15);
}

form{
  width:100%;
  display:block;
}

.btn{
  width:100%;
  padding:11px;
  border:none;
  border-radius:10px;
  background:var(--lux-gold);
  color:white;
  font-size:15px;
  font-weight:600;
  cursor:pointer;
  transition:0.3s;
  margin-top:12px;
  position:relative;
  overflow:visible;
  display:block;
  z-index:10;
  box-sizing:border-box;
  visibility:visible !important;
}

.login-link{
  text-align:center;
  margin-top:12px;
  font-size:12px;
}
.login-link a{
  color:var(--lux-gold);
  font-weight:600;
  text-decoration:none;
}

/* Responsive */
@media(max-width:600px){
  .popup{width:95%}
  .form-box{padding:25px 20px}
}



.input-group.show{
  opacity:1;
  transform:translateY(0);
}





/* .btn span{
  position:absolute;
  border-radius:50%;
  transform:scale(0);
  background:rgba(255,255,255,0.5);
  animation:ripple 0.6s linear;
} */

@keyframes ripple{
  to{
    transform:scale(4);
    opacity:0;
  }
}


.popup.closing{
  animation:popupOut 0.35s ease forwards;
}

@keyframes popupOut{
  to{
    transform:scale(0.85);
    opacity:0;
  }
}


.glow{
  position:absolute;
  z-index: 0;
  width:280px;
  height:280px;
  border-radius:50%;
  background:radial-gradient(circle, rgba(185,135,75,0.45), transparent 60%);
  filter:blur(40px);
  animation:floatGlow 10s ease-in-out infinite;
}

.glow2{
  width:220px;
  height:220px;
  left:70%;
  top:20%;
  animation-delay:2s;
}

.glow3{
  width:260px;
  height:260px;
  left:20%;
  bottom:10%;
  animation-delay:4s;
}

@keyframes floatGlow{
  0%,100%{transform:translateY(0) translateX(0)}
  50%{transform:translateY(-30px) translateX(20px)}
}

.btn {
  opacity: 1 !important;
  transform: none !important;
  visibility: visible !important;
  pointer-events: auto !important;
}

.form-title{
    font-family: "Playfair Display", serif;
    font-size: 35px;
    font-weight: 600;
    color: #333;
    text-align: center;
}
.subtitle{
    font-family: "Poppins", sans-serif;
    font-size: 14px;
    color: #555;
    text-align: center;
}
/* Heading  Golden Underlines*/
.u-underline{
  position:relative;
  display:inline-block;
  padding-bottom:12px;
}

.u-underline::after{
  content:"";
  position:absolute;
  left:50%;
  bottom:10px;
  width:0;
  height:2px;
  background:linear-gradient(90deg,#caa256,#f1c27d,#caa256);
  transform:translateX(-50%);
  transition:width 1s ease-in-out;
  border-radius:2px;
}

/* animation class */
.u-underline.animate::after{
  width:150px;
}

/* Heading Golden Underlines over */

.input-group input[type="file"] {
  padding:10px;
  background:#f8f9fa;
  cursor:pointer;
}

.social-buttons {
  margin:20px 0;
  display:flex;
  flex-direction:column;
  gap:12px;
}

.social-btn {
  width:100%;
  padding:12px;
  border:1px solid #ddd;
  border-radius:10px;
  background:white;
  color:#333;
  font-size:15px;
  font-weight:500;
  cursor:pointer;
  transition:0.3s;
  display:flex;
  align-items:center;
  justify-content:center;
  gap:10px;
}
.social-section{
  width:48%;                /* right 45% */
  padding:28px 32px;
  background:linear-gradient(135deg, #faf9f7 0%, #f5f3f0 100%);
  display:flex;
  flex-direction:column;
  justify-content:center;
  align-items:center;
  text-align:center;
}

.social-btn:hover {
  background:#f8f9fa;
  transform:translateY(-1px);
}

.google-btn {
  color:#4285f4;
  border-color:#4285f4;
}

.apple-btn {
  color:#000;
  border-color:#000;
}

/* Right side title smaller */
.social-section h3 {
  font-size:20px;
  margin-bottom:30px;
  color:#333;
}
/* Responsive */
@media(max-width:850px){
  .popup { flex-direction:column; width:95vw; }
  .form-box { width:100%; border-right:none; padding-bottom:25px; }
  .social-section { width:100%; padding:25px; }
}
</style>
</head>

<body>

<div class="overlay" id="overlay">
     <div class="glow"></div>
  <div class="glow glow2"></div>
  <div class="glow glow3"></div>
 <div class="popup">
  <!-- Left Form Side -->
  <div class="form-box">
  <img src="../Guest Side/Gallery/Realty Logo.png" alt="Rukmani Realty" class="logo">
  <button class="close-btn" onclick="closePopup()">&times;</button>
  
  <h2 class="form-title u-underline">Create Account</h2>
  <p class="subtitle">Join Rukmani Realty and list your property easily</p>
  
  <form>
    <!-- 1. Full Name -->
    <div class="input-group">
      <label>Full Name</label>
      <input type="text" placeholder="Enter your name" required>
    </div>
    
    <!-- 2. Email Address -->
    <div class="input-group">
      <label>Email Address</label>
      <input type="email" placeholder="Enter email" required>
    </div>
    
    <!-- 3. Password -->
    <div class="input-group">
      <label>Password</label>
      <input type="password" placeholder="Create Password" required>
    </div>
    
    <!-- 4. Profile Photo -->
    <div class="input-group">
      <label>Profile Photo</label>
      <input type="file" accept="image/*">
    </div>
    
    <!-- 5. Phone Number -->
    <div class="input-group">
      <label>Phone Number</label>
      <input type="tel" placeholder="Enter phone number" required>
    </div>
    
    <button class="btn">Create Account</button>
    <p class="login-link">Already have an account? <a href="#">Login</a></p>
  </form>
</div>

<!-- Right Social Side (same) -->
<div class="social-section">
  <h3>Or continue with</h3>
  <button type="button" class="social-btn google-btn">Continue with Google</button>
  <button type="button" class="social-btn apple-btn">Continue with Apple</button>
  <p>Fast, secure sign up</p>
</div>



<script>
function closePopup(){
  // go back to last opened page instead of blank
  if(document.referrer){
    window.history.back();
  }else{
    document.getElementById('overlay').style.display='none';
  }
}
</script>
<script>
window.addEventListener("load", () => {
  const fields = document.querySelectorAll(".input-group");
  fields.forEach((field, i) => {
    setTimeout(() => {
      field.classList.add("show");
    }, i * 120); // stagger delay
  });
});
</script>

<script>
document.querySelector(".btn").addEventListener("click", function(e){
  const circle = document.createElement("span");
  const rect = this.getBoundingClientRect();

  circle.style.width = circle.style.height = "120px";
  circle.style.left = e.clientX - rect.left - 60 + "px";
  circle.style.top = e.clientY - rect.top - 60 + "px";

  this.appendChild(circle);

  setTimeout(() => circle.remove(), 600);
});
</script>
<script>
function closePopup(){
  const popup = document.querySelector(".popup");
  popup.classList.add("closing");

  setTimeout(() => {
    if(document.referrer){
      window.history.back();
    }else{
      document.getElementById('overlay').style.display='none';
    }
  }, 350);
}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script>
window.addEventListener("load", () => {

  const tl = gsap.timeline();

  tl.from(".popup", {
    duration:0.9,
    y:80,
    scale:0.9,
    opacity:0,
    ease:"power3.out"
  });

  tl.from(".logo", {
    y:-20,
    opacity:0,
    duration:0.5
  }, "-=0.5");

  tl.from("h2, .subtitle", {
    y:20,
    opacity:0,
    duration:0.6,
    stagger:0.1
  }, "-=0.4");

  tl.from(".input-group", {
    y:30,
    opacity:0,
    duration:0.5,
    stagger:0.12
  }, "-=0.3");

  tl.from(".btn", {
    scale:0.85,
    opacity:0,
    duration:0.5
  }, "-=0.2");

});
</script>
<script>
function closePopup(){
  gsap.to(".popup", {
    duration:0.45,
    y:60,
    scale:0.9,
    opacity:0,
    ease:"power2.in",
    onComplete: () => {
      if(document.referrer){
        window.history.back();
      }else{
        document.getElementById("overlay").style.display="none";
      }
    }
  });
}

</script>
<script src="Assets/Underline.js"></script>

</body>
</html>
