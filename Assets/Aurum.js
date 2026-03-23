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
