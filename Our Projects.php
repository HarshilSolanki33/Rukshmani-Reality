<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Projects</title>
    <link rel="stylesheet" href="Assets/Our Project.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">

</head>
<body>
    <!-- php include 'loader.php'; ?> -->
   <!-- Navbar -->
    <?php include 'Navbar.php'; ?>
    <!-- Navbar ends  -->

    <!-- Hero Section Starts -->
     <section class="sticky-hero">
  <div class="hero-inner">
    <img src="gallery/Our project main image.png" class="city-line">
  </div>
</section>
<!-- Hero Section Ends  -->

<!-- Vision meet structure section starts  -->
 <section class="projects-section">

  <h2 class="section-title">Where Vision Meets Structure</h2>
  <p class="section-subtitle">
    From striking sketches to tangible outcomes, we're all about designing for the future,
    driven by clarity, precision, and a commitment to environmental responsibility.
  </p>

  <div class="projects-wrapper">

    <!-- LEFT CARD -->
    <div class="project-card from-left">
      <img src="gallery/Aurum-1.jpg" alt="Orbit Gardens">
      <div class="project-overlay">
        <h3>Aurum<br>Heights</h3>
        
      </div>
    </div>

    <!-- RIGHT CARD -->
    <div class="project-card from-right">
      <img src="gallery/Aurum-3.jpg" alt="Belleza Gardens">
      <div class="project-overlay">
        <h3>Belleza<br>Gardens</h3>
        
      </div>
    </div>

  </div>
</section>
<!-- Vision meet structure section ends  -->

<!-- Our Projects section starts  -->
 <section class="yrproj-container">

  <h2 class="yrproj-heading">Projects</h2>

  <div class="yrproj-years">
    <button class="yrproj-year-btn active" data-year="2025">2025</button>
    <button class="yrproj-year-btn" data-year="2024">2024</button>
    <button class="yrproj-year-btn" data-year="2023">2023</button>
    <button class="yrproj-year-btn" data-year="2022">2022</button>
    <button class="yrproj-year-btn" data-year="2021">2021</button>
    <button class="yrproj-year-btn" data-year="2021">2020</button>
    <button class="yrproj-year-btn" data-year="2021">2019</button>
    <button class="yrproj-year-btn" data-year="2021">2018</button>

  </div>

  <div class="yrproj-list">

    <div class="yrproj-item" data-year="2025">
      <div class="yrproj-content">
      <h3>Aurum Heights</h3>
        <p>Elegant liurum Heightsacious layouts & premium amenities.</p>
        <button class="yrproj-btn"><a href="../Guest Side/Aurum Heights.php">Explore</a></button>
      </div>
      <img src="gallery/Aurum-1.jpg" alt="">
    </div>

    <div class="yrproj-item" data-year="2025">
      <div class="yrproj-content">
        <h3>Twin Towers</h3>
        <p>Corporate Lake View Enclave redefining premium workspace design.</p>
        <button class="yrproj-btn">Explore</button>
      </div>
      <img src="Gallery/Twin Tower-1.avif" alt="">
    </div>
    <div class="yrproj-item" data-year="2025">
      <div class="yrproj-content">
        <h3>Ashwairyam</h3>
        <p>Corporate Lake View Enclave redefining premium workspace design.</p>
        <button class="yrproj-btn">Explore</button>
      </div>
      <img src="Gallery/Ashwairyam-1.avif" alt="">
    </div>
   <div class="yrproj-item" data-year="2025">
      <div class="yrproj-content">
        <h3>Lake View Enclave</h3>
        <p>Corporate Lake View Enclave redefining premium workspace design.</p>
        <button class="yrproj-btn">Explore</button>
      </div>
      <img src="Gallery/Lakeview enclave-2.jpg" alt="">
    </div>


    <div class="yrproj-item" data-year="2024">
      <div class="yrproj-content">
        <h3>Nexa Heights</h3>
        <p>Modern residential lifestyle with skyline views.</p>
        <button class="yrproj-btn">Explore</button>
      </div>
      <img src="gallery/Nexa Heights-1.avif" alt="">
    </div>

  </div>
</section>
<!-- Our Projects section ends  -->

<!-- Ready to Bring section starts  -->
<section class="cta-section">
  <div class="cta-line"></div>

  <div class="cta-content">
    <h2>Ready To Bring Your Vision To Life?</h2>

    <p>
      Whether you're dreaming up your perfect home or designing a standout
      commercial space, we're here to turn those visions into reality.
      Reach out to our team to chat about your aspirations, brainstorm ideas,
      or even set up a site visit.
    </p>

    <a href="#" class="cta-btn">Let's Do It</a>
  </div>

  <div class="cta-line"></div>
</section>
<!-- Ready to Bring section ends  -->

<?php include 'Footer.php'; ?>

<script src="Assets/Our Project.js"></script>
<script src="Assets/Hameburger.js"></script>
<script src="Assets/Smother.js"></script> 
</body>
</html>