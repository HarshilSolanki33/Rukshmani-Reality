// Property selection mate ni script 
/* =======================
   PROPERTY TYPE TOGGLE
======================= */
function toggleType(id){

  // hide all boxes first
  document.querySelectorAll(".sub-box").forEach(el=>{
    el.style.display = "none";
  });

  // toggle required box
  let box = document.getElementById(id);
  box.style.display = (box.style.display === "block") ? "none" : "block";
}


/* =======================
   SCROLL REVEAL ANIMATION
======================= */
document.addEventListener("DOMContentLoaded", ()=>{

  const items = document.querySelectorAll(".reveal-up");

  const observer = new IntersectionObserver((entries)=>{
    entries.forEach(entry=>{
      if(entry.isIntersecting){
        entry.target.classList.add("show");
      }
    });
  },{ threshold:0.25 });

  items.forEach(el => observer.observe(el));


  /* =======================
     CLICKABLE SUB ITEMS
  ======================= */

  const subItems = document.querySelectorAll(".sub-item");

  subItems.forEach(item => {
    item.addEventListener("click", ()=>{

      // small highlight effect
      item.classList.add("selected");
      
      // remove highlight from others
      subItems.forEach(x=>{
        if(x !== item) x.classList.remove("selected");
      });

      // ▼▼ YOUR ACTION HERE ▼▼

      // Example: console
      console.log("Selected:", item.innerText);

      // Example: redirect (uncomment if you want)
      // window.location.href = "rent-listing.php?type=" + encodeURIComponent(item.innerText);

      // Example: popup
      // alert(item.innerText + " Selected");

    });
  });

});



// Featured Properties Section na cards mate 
document.addEventListener("DOMContentLoaded",()=>{

  const cards = document.querySelectorAll(".lux-reveal");

  const luxObserver = new IntersectionObserver((entries)=>{
    entries.forEach(entry=>{
      if(entry.isIntersecting){
        entry.target.classList.add("show");
      }
    });
  },{threshold:0.25});

  cards.forEach(c=>luxObserver.observe(c));

});






const reveals = document.querySelectorAll(".reveal, .reveal-up, .lux-reveal");

function revealOnScroll(){
  reveals.forEach(el=>{
    const rect = el.getBoundingClientRect();

    // visible threshold
    if(rect.top < window.innerHeight * 0.9){
      el.classList.add("active");
      el.classList.add("show");
    }
  });
}

revealOnScroll();
window.addEventListener("scroll", revealOnScroll);













// scroll reveal animations
window.addEventListener("scroll",()=>{
  document.querySelectorAll(".reveal").forEach(el=>{
    let top = el.getBoundingClientRect().top;
    if(top < window.innerHeight-80){
      el.classList.add("active");
    }
  });
});

// animated gold underline
window.onload = ()=> {
  document.querySelector(".hero-title").classList.add("line-animate");
};





let userChoice = {};

function selectCat(type){
  userChoice.type = type;
  document.getElementById("step1").classList.remove("active");
  document.getElementById("step2").classList.add("active");
}

function selectBudget(b){
  userChoice.budget = b;
  document.getElementById("step2").classList.remove("active");
  document.getElementById("step3").classList.add("active");

  document.getElementById("summary").innerHTML =
  `You selected <b>${userChoice.type}</b> property<br>with budget <b>${userChoice.budget}</b>`;
}






function animateValue(id, end){
  let num = 0;
  let speed = 20;
  let obj = document.getElementById(id);

  let counter = setInterval(()=>{
    if(num >= end) clearInterval(counter);
    obj.innerText = num++;
  }, speed);
}

// run on scroll reveal
window.addEventListener("scroll", ()=>{
  if(document.getElementById("c1").innerText == "0"){
    animateValue("c1",120);
    animateValue("c2",85);
    animateValue("c3",42);
  }
});




window.addEventListener("scroll", ()=>{
  const sec = document.querySelector(".luxury-parallax");
  let offset = window.pageYOffset;
  sec.style.backgroundPositionY = offset * 0.4 + "px";
});




// const cards = document.querySelectorAll(".reveal-stagger");

// const staggerObs = new IntersectionObserver(entries=>{
//   entries.forEach((entry,i)=>{
//     if(entry.isIntersecting){
//       setTimeout(()=>{
//         entry.target.style.opacity="1";
//         entry.target.style.transform="translateY(0)";
//       }, i*200);
//     }
//   });
// },{threshold:0.3});


