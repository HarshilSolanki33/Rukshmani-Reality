<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Properties</title>
    <link rel="stylesheet" href="Assets/Rent Properties.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">

</head>
<body>
     <!-- php include 'loader.php'; ?> -->
   <!-- Navbar -->
    <?php include 'Navbar.php'; ?>
    <!-- Navbar ends  -->

    <!-- Back button starts  -->
<?php include 'Back Button.php'; ?>
<!-- Back button ends  -->
 
    <!-- Hero Section Starts-->
    <section class="hero" role="region" aria-label="Intro">
  <div class="hero-wrapper">
    <div class="hero-left">
      <div class="hero-inner">
        <h1 class="hero-title">RENT PROPERTIES</h1>

        <p class="lead">
          AT 
          <span class="rukshmani">Rukmani Group</span> renting is not just about staying —
it’s about living the lifestyle you deserve.
        </p>
      </div>
    </div>
  </div>
</section>
    <!-- Hero Section Ends -->


<!-- PROPERTY TYPE SECTION -->
<section class="property-type-section reveal-up">
  <h2 class="sec-title  u-underline">What are you looking for?</h2>

  <div class="type-wrapper-row">

    <!-- Residential -->
    <div class="type-card gold-border" onclick="toggleType('res-sec')">

      <svg width="34" height="34" viewBox="0 0 24 24">
        <path d="M3 11L12 3L21 11" fill="none" stroke="#c9a44d" stroke-width="2"/>
        <path d="M5 11V21H19V11" fill="none" stroke="#c9a44d" stroke-width="2"/>
      </svg>

      <h3>Residential Properties</h3>
      <p>Flats • Villas • Apartments • Penthouse</p><br>
      <p style="color: goldenrod;">PLEASE SELECT THE PROPERTY TYPE</p>
    </div>

    <!-- Commercial -->
    <div class="type-card gold-border" onclick="toggleType('com-sec')">

      <svg width="34" height="34" viewBox="0 0 24 24">
        <path d="M3 21V5L12 3L21 5V21Z" fill="none" stroke="#c9a44d" stroke-width="2"/>
        <path d="M9 21V12H15V21" fill="none" stroke="#c9a44d" stroke-width="2"/>
      </svg>

      <h3>Commercial Properties</h3>
      <p>Shops • Offices • Showrooms • Warehouses</p><br>
      <p style="color: goldenrod;">PLEASE SELECT THE PROPERTY TYPE</p>
    </div>

  </div>

  <!-- hidden boxes -->
  <div id="res-sec" class="sub-box reveal-up">
    <div class="sub-item"><a href="./1BHK.php" class="link-a">1 BHK</a></div>
    <div class="sub-item"><a href="./2BHK.php" class="link-a">2 BHK</a></div>
    <div class="sub-item"><a href="./3BHK.php" class="link-a">3 BHK</a></div>
    <div class="sub-item"><a href="./Penthouse.php" class="link-a">Penthouse</a></div>
  </div>

  <div id="com-sec" class="sub-box reveal-up">
    <div class="sub-item"><a href="" class="link-a">Office Space</a></div>
    <div class="sub-item"><a href="" class="link-a">Retail Shop</a></div>
    <div class="sub-item"><a href="" class="link-a">Corporate Office</a></div>
    <div class="sub-item"><a href="" class="link-a">Warehouse</a></div>
  </div>

</section>

<!-- PROPERTY TYPE SECTION ENDS -->

<!-- Featured Properties Section Starts -->
<section class="lux-premium-section">
  <h2 class="lux-title u-underline">Featured Premium Properties</h2>

  <div class="lux-grid">

    <div class="lux-card lux-reveal">
      <img class="lux-img" src="./gallery/Nexa Heights-1.avif" alt="">
      <h3>3-4 BHK Luxury Apartment</h3>
      <p class="lux-price">₹ 48,000 / Month</p>
    </div>

    <div class="lux-card lux-reveal">
      <img class="lux-img" src="./gallery/Indexslider-6.jpg" alt="">
      <h3>Corporate Office Space</h3>
      <p class="lux-price">₹ 95,000 / Month</p>
    </div>

    <div class="lux-card lux-reveal">
      <img class="lux-img" src="./gallery/Our Project-3.jpg" alt="">
      <h3>Premium Villa</h3>
      <p class="lux-price">₹ 1.6 Lac / Month</p>
    </div>

  </div>
</section>

<!-- Featured Properties Section Ends -->



<!-- PROPERTY FINDER WIZARD ENDS -->
 <section class="parallax-showcase">
  <div class="parallax-text">
    Experience Luxury Living with <br> <span class="ruk">Rukmani Group</span>
  </div>
</section>


<section class="counter-section reveal">
  <div class="counter-box">
    <h2 id="c1">0</h2>
    <p>Happy Families</p>
  </div>

  <div class="counter-box">
    <h2 id="c2">0</h2>
    <p>Luxury Properties</p>
  </div>

  <div class="counter-box">
    <h2 id="c3">0</h2>
    <p>Commercial Spaces</p>
  </div>
</section>
<!-- Counter Section Ends -->




<?php include 'Scroll.php'; ?>
<?php include 'Footer.php'; ?>
<script src="Assets/Hameburger.js"></script>
<script src="Assets/Smother.js"></script> 
<script src="Assets/Underline.js"></script>
<script src="Assets/Rent Properties.js"></script>
</body>
</html>