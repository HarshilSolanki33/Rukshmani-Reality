// ===============================
// Popup Close with GSAP Animation
// ===============================
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


// ===============================
// Page Load Animations
// ===============================
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


  // Input stagger show class
  const fields = document.querySelectorAll(".input-group");
  fields.forEach((field, i) => {
    setTimeout(() => {
      field.classList.add("show");
    }, i * 120);
  });

});


// ===============================
// Button Ripple Effect
// ===============================
document.querySelector(".btn").addEventListener("click", function(e){

  const circle = document.createElement("span");
  const rect = this.getBoundingClientRect();

  circle.style.width = circle.style.height = "120px";
  circle.style.left = e.clientX - rect.left - 60 + "px";
  circle.style.top = e.clientY - rect.top - 60 + "px";

  this.appendChild(circle);

  setTimeout(() => circle.remove(), 600);

});


// ===============================
// Form Validation
// ===============================
function validateForm(){

  let name = document.querySelector("input[name='full_name']").value.trim();
  let email = document.getElementById("email").value.trim();
  let password = document.querySelector("input[name='password']").value.trim();
  let phone = document.getElementById("phone").value.trim();

  if(name === ""){
    alert("Full Name is required");
    return false;
  }

  if(email === ""){
    alert("Email is required");
    return false;
  }

  if(password === ""){
    alert("Password is required");
    return false;
  }

  if(!/^[0-9]{10}$/.test(phone)){
    alert("Phone number must be exactly 10 digits");
    return false;
  }

  return true;

}