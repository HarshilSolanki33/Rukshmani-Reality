const t1 = document.getElementById("t1");
const t2 = document.getElementById("t2");

let speed = 20;        // px/sec
let paused = false;
let x1 = 0;
let x2 = 0;

// clone first track into second exactly
t2.innerHTML = t1.innerHTML;

function setPositions() {
  const w = t1.scrollWidth;
  x1 = 0;
  x2 = w;   // place second exactly after first
}

function loop(){
  if(!paused){

    const w = t1.scrollWidth;

    x1 -= speed / 60;
    x2 -= speed / 60;

    // when one goes fully left → move to right of the other
    if (x1 <= -w) x1 = x2 + w;
    if (x2 <= -w) x2 = x1 + w;

    t1.style.transform = `translate3d(${x1}px,0,0)`;
    t2.style.transform = `translate3d(${x2}px,0,0)`;
  }

  requestAnimationFrame(loop);
}

// pause on hover
[t1, t2].forEach(el=>{
  el.addEventListener("mouseenter", ()=> paused = true);
  el.addEventListener("mouseleave", ()=> paused = false);
});

// change speed dynamically
window.setSliderSpeed = v => speed = v;

// wait until images load then start
window.addEventListener("load", ()=>{
  setPositions();
  loop();
});

