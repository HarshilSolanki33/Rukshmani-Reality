// image nani moti thai ee section 
const hero = document.querySelector(".hero-img");

window.addEventListener("scroll", () => {

let scroll = window.scrollY;

if(scroll < 500){

let scale = 1 - scroll / 2000;
hero.style.transform = `scale(${scale})`;

}

});



// Slider section starts 
new Swiper(".luxurySlider",{

loop:true,
centeredSlides:true,
slidesPerView:1.7,
spaceBetween:50,

speed:900, // smooth speed

effect:"coverflow",

coverflowEffect:{
rotate:0,
stretch:0,
depth:250,
modifier:1.2,
slideShadows:false
},

grabCursor:true,

navigation:{
nextEl:".swiper-button-next",
prevEl:".swiper-button-prev"
},

breakpoints:{
768:{
slidesPerView:1.4
},
1024:{
slidesPerView:1.7
}
}

})



// floor plan slider starts 
const tab1 = document.getElementById("tab1");
const tab2 = document.getElementById("tab2");

const content1 = document.getElementById("content1");
const content2 = document.getElementById("content2");


tab1.addEventListener("click", () => {

content1.classList.remove("hidden");
content2.classList.add("hidden");

tab1.classList.add("border-black");
tab1.classList.remove("text-gray-400");

tab2.classList.remove("border-black");
tab2.classList.add("text-gray-400");

});


tab2.addEventListener("click", () => {

content2.classList.remove("hidden");
content1.classList.add("hidden");

tab2.classList.add("border-black");
tab2.classList.remove("text-gray-400");

tab1.classList.remove("border-black");
tab1.classList.add("text-gray-400");

});
