const track = document.getElementById("sliderTrack");
let cards = Array.from(track.children);

function getVisibleCards() {
    if (window.innerWidth <= 576) return 1;
    if (window.innerWidth <= 768) return 2;
    return 3;
}

let visibleCards = getVisibleCards();
let index = 0;

// Clone cards for infinite loop
function setupClones() {
    cards = Array.from(track.children);
    for (let i = 0; i < visibleCards; i++) {
        track.appendChild(cards[i].cloneNode(true));
    }
}

setupClones();

function slide() {
    const cardWidth = track.children[0].offsetWidth + 30;

    index++;
    track.style.transition = "transform 1s ease-in-out";
    track.style.transform = `translateX(-${index * cardWidth}px)`;

    if (index === cards.length) {
        setTimeout(() => {
            track.style.transition = "none";
            index = 0;
            track.style.transform = "translateX(0)";
        }, 1000);
    }
}

let sliderInterval = setInterval(slide, 5000);

// Recalculate on resize
window.addEventListener("resize", () => {
    clearInterval(sliderInterval);
    track.style.transition = "none";
    track.style.transform = "translateX(0)";
    index = 0;
    track.innerHTML = "";
    
    // Reload original cards
    cards.forEach(card => track.appendChild(card.cloneNode(true)));
    
    visibleCards = getVisibleCards();
    setupClones();
    sliderInterval = setInterval(slide, 5000);
});
