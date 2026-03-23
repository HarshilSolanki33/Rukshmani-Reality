// Legacy main image js 
const bannerObserver = new IntersectionObserver((entries)=>{
  entries.forEach(entry=>{
    if(entry.isIntersecting){
      entry.target.classList.remove("scale-110","opacity-0");
      entry.target.classList.add("scale-100","opacity-100");
    }
  });
},{threshold:0.4});

document.querySelectorAll(".legacy-banner").forEach((el)=>{
  bannerObserver.observe(el);
});


// legacy section js 
const observer = new IntersectionObserver((entries)=>{
entries.forEach(entry=>{
if(entry.isIntersecting){
entry.target.classList.remove("translate-y-20","opacity-0");
}
});
},{threshold:0.3});

document.querySelectorAll(".legacy-img").forEach((el)=>{
observer.observe(el);
});