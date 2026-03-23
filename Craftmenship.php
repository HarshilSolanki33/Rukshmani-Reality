<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<style>
/* Image Premium Card Style */

.slider-img{
box-shadow:
0 20px 40px rgba(0,0,0,0.25),
0 8px 15px rgba(0,0,0,0.12);

transition:all .6s cubic-bezier(.22,.61,.36,1);
border-radius:20px;
overflow:hidden;
}

/* Hover zoom */

.swiper-slide:hover .slider-img{
transform:scale(1.04);
box-shadow:
0 30px 60px rgba(0,0,0,0.35),
0 12px 20px rgba(0,0,0,0.18);
}

/* Slider animation */

.swiper-slide{
opacity:.6;
transform:scale(.9);
transition:all .6s ease;
}

.swiper-slide-active{
opacity:1;
transform:scale(1.08);
}

/* Side fade effect */

.luxurySlider::before,
.luxurySlider::after{
content:"";
position:absolute;
top:0;
width:200px;
height:100%;
z-index:5;
pointer-events:none;
}

.luxurySlider::before{
left:0;
background:linear-gradient(to right,#f5f5f5,transparent);
}

.luxurySlider::after{
right:0;
background:linear-gradient(to left,#f5f5f5,transparent);
}

/* Premium arrows */

.swiper-button-next,
.swiper-button-prev{
width:60px;
height:60px;
border-radius:50%;
background:rgba(255,255,255,0.15);
backdrop-filter:blur(10px);
border:1px solid rgba(255,255,255,0.4);
display:flex;
align-items:center;
justify-content:center;
transition:all .35s ease;
}

.swiper-button-next::after,
.swiper-button-prev::after{
font-size:18px;
font-weight:700;
color:white;
}

/* Arrow hover */

.swiper-button-next:hover,
.swiper-button-prev:hover{
background:#c6a87d;
border-color:#c6a87d;
transform:scale(1.1);
box-shadow:0 10px 30px rgba(0,0,0,0.25);
}

.swiper-button-prev{
left:40px;
}

.swiper-button-next{
right:40px;
}


/* floor plan section   */
.floor-arrow{
font-size:32px;
color:#bbb;
transition:.3s;
}

.floor-arrow:hover{
color:#c6a87d;
transform:scale(1.1);
}

</style>
<body>
    
<section class="bg-[#f3f3f3]">

<!-- HERO IMAGE -->
<div class="hero-container w-full h-screen flex items-center justify-center overflow-hidden">

<img 
src="./Gallery/Craftmenship-1.webp"
class="hero-img w-full h-full object-cover transition-all duration-700 ease-out"
/>

</div>


<!-- CONTENT SECTION -->
<div class="max-w-7xl mx-auto px-6 py-24 grid lg:grid-cols-3 gap-16">

<div>
<p class="font-semibold border-l-2 border-[#c6a27a] pl-4">
Sultan Qaboos Grand Mosque
</p>
<p class="text-gray-500 pl-4 mt-4">Al Bustan Palace</p>
<p class="text-gray-500 pl-4 mt-2">The S</p>
</div>

<div>
<img src="./Gallery/Craftmenship-1.webp" class="rounded-xl shadow-xl">
</div>

<div>
<h2 class="text-4xl font-['Playfair_Display']">
Sultan Qaboos Grand Mosque
</h2>

<p class="uppercase text-sm text-gray-500 mt-2">
Muscat, Oman
</p>

<p class="text-gray-600 mt-4 leading-relaxed">
Quietly imposing, the Sultan Qaboos Grand Mosque in Oman is symbolic
of modern Islamic architecture and makes for an impressive artistic marvel.
</p>
</div>

</div>

</section>

<!-- Bground image section starts   -->
<section class="bg-[#f3f3f3] py-20">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

    <!-- Left Content -->
    <div>
      <h2 class="text-3xl font-['Playfair_Display'] mb-12 tracking-wide">
        ELEVATING BEACHFRONT LIVING
      </h2>

      <p class="text-gray-600 mb-6 leading-relaxed">
        Set within the heart of Downtown UAQ | Sobha Realty, a rare find rises.
        Sobha AquaCrest reimagines coastal life with a seamless blend of
        beachfront serenity and modern sophistication. Offering a choice of
        1- to 3-bedroom residences that are crafted with expansive layouts,
        floor-to-ceiling windows, and unobstructed views of the Arabian Sea.
      </p>

      <p class="text-gray-600 mb-6 leading-relaxed">
        Perfectly positioned within a 25-million-square-foot master beachfront
        city, AquaCrest connects you to marinas, retail boulevards, wellness
        spaces, and cultural attractions, all just steps from the shoreline.
      </p>

      <p class="text-gray-600 mb-8 leading-relaxed">
        At the podium level, landscaped courtyards and leisure decks create a
        vibrant atmosphere inspired by seaside living.
      </p>

      <button class="group flex items-center gap-3 border border-[#b89664] text-[#b89664] px-7 py-3 rounded-full tracking-widest text-sm transition-all duration-300 hover:bg-[#b89664] hover:text-white">
  
  DOWNLOAD BROCHURE
  
  <span class="transform transition-transform duration-300 group-hover:translate-x-2">
    →
  </span>

</button>
    </div>

    <!-- Right Image -->
    <div class="relative">
      <div class="absolute inset-0 bg-white/70 blur-3xl rounded-full"></div>

      <img 
        src="./Gallery/Ashwairyam-bgrem.avif"
        alt="family"
        class="relative z-10 w-full max-w-lg mx-auto"
      >
    </div>

  </div>
</section>
<!-- Background image section ends    -->


<!-- S;ider section starts  -->
 <section class="bg-[#f5f5f5] py-24">

<h2 class="text-center text-5xl font-['Playfair_Display'] mb-16">
Thoughtfully Designed Residences
</h2>

<div class="max-w-[1700px] mx-auto relative">

<div class="swiper luxurySlider">

<div class="swiper-wrapper">

<div class="swiper-slide">
<img src="./Gallery/Ashwairyam slider-1.avif" class="slider-img rounded-2xl w-[1050px] h-[620px] object-cover">
</div>

<div class="swiper-slide">
<img src="./Gallery/Ashwairyam slider-2.avif" class="slider-img rounded-2xl w-[1050px] h-[620px] object-cover">
</div>

<div class="swiper-slide">
<img src="./Gallery/Ashwairyam slider-3.avif" class="slider-img rounded-2xl w-[1050px] h-[620px] object-cover">
</div>

<div class="swiper-slide">
<img src="./Gallery/Ashwairyam slider-2.avif" class="slider-img rounded-2xl w-[1050px] h-[620px] object-cover">
</div>

</div>

</div>

<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div>

</div>

</section>

<!-- floor plan section starts  -->
 <section class="bg-[#f6f6f6] py-24">

<!-- Heading -->
<h2 class="text-center text-5xl font-['Playfair_Display'] mb-16">
Floor Plan
</h2>

<div class="max-w-[1100px] mx-auto px-6">

<!-- Tabs -->
<div class="flex gap-12 border-b pb-4 mb-20 text-lg tracking-widest">
<button id="tab1" class="tab-btn border-b-2 border-black pb-2">
1 BR
</button>

<button id="tab2" class="tab-btn border-b-2 border-black pb-2">
2 BR
</button>
</div>


<!-- ================= 1BR CONTENT ================= -->

<div id="content1" class="tab-content grid grid-cols-2 items-center gap-20 relative">

<!-- Left Text -->
<div>

<h3 class="text-3xl text-[#c6a87d] font-['Playfair_Display'] mb-12">
1 Bedroom Apartment (Type A)
</h3>

<div class="space-y-10 tracking-widest text-sm">

<div>
<p class="text-gray-500 mb-2">UNIT :</p>
<p>1 BEDROOM + 1 POWDER ROOM + 1 BALCONY</p>
</div>

<div>
<p class="text-gray-500 mb-2">SUITE :</p>
<p>491.59 SQ.FT.</p>
</div>

<div>
<p class="text-gray-500 mb-2">BALCONY :</p>
<p>83.53 SQ.FT.</p>
</div>

<div>
<p class="text-gray-500 mb-2">TOTAL :</p>
<p>575.12 SQ.FT.</p>
</div>

</div>

</div>


<!-- Right Image -->
<div class="flex justify-center relative">

<img src="./Gallery/Ashwairyam_floor plan-1.png"
class="w-[420px] drop-shadow-xl">

</div>

</div>


<!-- ================= 2BR CONTENT ================= -->

<div id="content2" class="tab-content hidden grid grid-cols-2 items-center gap-20 relative">

<!-- Left Text -->
<div>

<h3 class="text-3xl text-[#c6a87d] font-['Playfair_Display'] mb-12">
2 Bedroom Apartment (Type B)
</h3>

<div class="space-y-10 tracking-widest text-sm">

<div>
<p class="text-gray-500 mb-2">UNIT :</p>
<p>2 BEDROOM + 2 BATHROOM + BALCONY</p>
</div>

<div>
<p class="text-gray-500 mb-2">SUITE :</p>
<p>820.00 SQ.FT.</p>
</div>

<div>
<p class="text-gray-500 mb-2">BALCONY :</p>
<p>120.00 SQ.FT.</p>
</div>

<div>
<p class="text-gray-500 mb-2">TOTAL :</p>
<p>940.00 SQ.FT.</p>
</div>

</div>

</div>


<!-- Right Image -->
<div class="flex justify-center relative">

<img src="./Gallery/Ashwairyam_floor plan-2.png"
class="w-[420px] drop-shadow-xl">

</div>

</div>


</div>

</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
 <script src="https://cdn.tailwindcss.com"></script>
<script src="Assets/Craftmenship.js"></script>
</body>
</html>