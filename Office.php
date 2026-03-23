<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rukmani Realty-Office</title>
   <link rel="icon" type="image/png" sizes="48x48" href="./Gallery/Title-img.png">
    <link rel="stylesheet" href="Assets/Office.css">
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
    <h1 class="hero-title u-underline">OFFICE</h1>

        <p class="lead">
          AT 
          <span class="rukshmani">Rukshmani Group</span> renting is not just about staying —
it’s about living the lifestyle you deserve.
        </p>
      </div>
    </div>
  </div>
</section>
    <!-- Hero Section Ends -->

    <!-- View Detail POP UP Starts  -->
<div id="property-modal" class="modal-overlay">
  <div class="modal-box">
    
    <span id="close-modal" class="close-btn">&times;</span>

    <img id="modal-img" class="modal-img">

    <h2 id="modal-title"></h2>

    <p id="modal-desc"></p>

    <p id="modal-meta" class="modal-meta"></p>

    <p id="modal-rent" class="modal-rent"></p>

    <button class="modal-contact">Contact Owner</button>

  </div>
</div>
<!-- View Detail POP UP Ends  -->

<!-- Card Section Starts  -->
<section class="office-area">

  <!-- OFFICE 1 -->
  <div class="office-item fade-trigger">
    <div class="office-thumb">
      <img src="gallery/office-1.webp" alt="Office 1">
    </div>
    <div class="office-body">
      <h2>Rukshmani Corporate Tower – Main Branch</h2>
      <p class="office-text">
        Spacious corporate office with modern workstations, meeting rooms and pantry.
      </p>
      <p class="office-specs">7000 sq.ft | 5th Floor | Parking Available</p>
      <p class="office-rate">Working Hours: 9 AM – 6 PM</p>
      <div class="office-cta">
        <button class="badge-open">VISIT NOW</button>
        <button class="btn-outline">VIEW DETAILS</button>
      </div>
    </div>
  </div>

  <!-- OFFICE 2 -->
  <div class="office-item fade-trigger">
    <div class="office-thumb">
      <img src="gallery/office-2.webp" alt="Office 2">
    </div>
    <div class="office-body">
      <h2>Elite Business Center – Downtown</h2>
      <p class="office-text">
        Modern office with coworking spaces, private cabins, and high-speed internet.
      </p>
      <p class="office-specs">5000 sq.ft | 3rd Floor | Conference Rooms Available</p>
      <p class="office-rate">Working Hours: 10 AM – 7 PM</p>
      <div class="office-cta">
        <button class="badge-open">VISIT NOW</button>
        <button class="btn-outline">VIEW DETAILS</button>
      </div>
    </div>
  </div>

  <!-- OFFICE 3 -->
  <div class="office-item fade-trigger">
    <div class="office-thumb">
      <img src="gallery/office-3.webp" alt="Office 3">
    </div>
    <div class="office-body">
      <h2>TechHub Innovation Park – City Center</h2>
      <p class="office-text">
        High-tech office with product labs, demo areas, and team collaboration zones.
      </p>
      <p class="office-specs">6000 sq.ft | 4th Floor | Cafeteria & Parking</p>
      <p class="office-rate">Working Hours: 9 AM – 8 PM</p>
      <div class="office-cta">
        <button class="badge-open">VISIT NOW</button>
        <button class="btn-outline">VIEW DETAILS</button>
      </div>
    </div>
  </div>

</section>

<!-- Card Section Ends  -->




<?php include 'Footer.php'; ?>
<script src="Assets/Hameburger.js"></script>
<script src="Assets/Office.js"></script>
<script src="Assets/Smother.js"></script> 
</body>
</html>