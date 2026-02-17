<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 BHK Properties</title>
    <link rel="stylesheet" href="Assets/1 BHK.css">
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
        <h1 class="hero-title u-underline">1 BHK PROPERTIES</h1>

        <p class="lead">
          AT 
          <span class="rukshmani">Rukmani Group</span> Gives Experience premium living, without premium rent.
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

<!-- Booking section pop up  -->
<div class="overlay" id="popupOverlay">
  <div class="popup">

    <button class="close-btn" onclick="closePopup()">×</button>

    <div class="popup-header">
      <h2>Book your destination</h2>
    </div>

    <div class="popup-body">

      <label>Name</label>
      <input type="text" placeholder="Enter your name">

      <label>Email</label>
      <input type="email" placeholder="Enter your email">

      <label>Select Service</label>
      <select>
        <option>Luxury Package</option>
        <option>Gold Premium</option>
        <option>Exclusive VIP</option>
      </select>

      <label>Preferred Date</label>
      <input type="date">

    </div>

    <div class="popup-footer">
      <button class="btn-confirm">Confirm Booking</button>
    </div>

  </div>
</div>


<!-- Booking section pop up ends  -->

<!-- Card Section Starts  -->
 <section class="property-wrapper">

  <!-- CARD 1 -->
  <div class="property-card reveal">
    <div class="property-image">
      <img src="gallery/1BHK-1.webp">
    </div>
    <div class="property-content">
      <h2>1BHK – BINORI HEIGHTS</h2>
      <p class="property-desc">
        Spacious 1BHK flat with balcony, modular kitchen and covered parking. Suitable for couples and small families.
      </p>
      <p class="property-meta">650 sq.ft | Semi–Furnished | 8th Floor</p>
      <p class="property-rent">₹ 14,500 / month</p>
      <div class="action-buttons">
        <button class="status-sold">RENTED</button>
        <button class="action-view">VIEW DETAILS</button>
      </div>
    </div>
  </div>

  <!-- CARD 2 -->
  <div class="property-card reveal">
    <div class="property-image">
      <img src="gallery/1BHK-2.webp">
    </div>
    <div class="property-content">
      <h2>1BHK – LOTUS RESIDENCY</h2>
      <p class="property-desc">
        Garden facing flat, nearby school & market. Lift, CCTV and security available.
      </p>
      <p class="property-meta">600 sq.ft | Fully–Furnished | 5th Floor</p>
      <p class="property-rent">₹ 12,000 / month</p>
      <div class="action-buttons">
        <button class="action-book" onclick="openPopup()">BOOK NOW</button>

        <button class="action-view">VIEW DETAILS</button>
      </div>
    </div>
  </div>

  <!-- CARD 3 -->
  <div class="property-card reveal">
    <div class="property-image">
      <img src="gallery/1BHK-3.webp">
    </div>
    <div class="property-content">
      <h2>1BHK – PALM HEIGHTS</h2>
      <p class="property-desc">
        Newly constructed flat with premium tiles, ventilation and 24×7 water supply.
      </p>
      <p class="property-meta">640 sq.ft | Semi–Furnished | Corner Unit</p>
      <p class="property-rent">₹ 13,000 / month</p>
      <div class="action-buttons">
        <button class="action-book" onclick="openPopup()">BOOK NOW</button>
        <button class="action-view">VIEW DETAILS</button>
      </div>
    </div>
  </div>

  <!-- CARD 4 -->
  <div class="property-card reveal">
    <div class="property-image">
      <img src="gallery/1BHK-4.webp">
    </div>
    <div class="property-content">
      <h2>1BHK – TRANQUIL APARTMENTS</h2>
      <p class="property-desc">
        Peaceful location, green view balcony and kids play area inside society.
      </p>
      <p class="property-meta">610 sq.ft | Unfurnished | 2nd Floor</p>
      <p class="property-rent">₹ 10,500 / month</p>
      <div class="action-buttons">
        <button class="status-sold">RENTED</button>
        <button class="action-view">VIEW DETAILS</button>
      </div>
    </div>
  </div>

  <!-- CARD 5 -->
  <div class="property-card reveal">
    <div class="property-image">
      <img src="gallery/1BHK-5.webp">
    </div>
    <div class="property-content">
      <h2>1BHK – OCEAN VIEW HOMES</h2>
      <p class="property-desc">
        Seaside apartment with balcony view and nearby transport connectivity.
      </p>
      <p class="property-meta">700 sq.ft | Fully–Furnished | Sea Facing</p>
      <p class="property-rent">₹ 18,000 / month</p>
      <div class="action-buttons">
        <button class="action-book" onclick="openPopup()">BOOK NOW</button>
        <button class="action-view">VIEW DETAILS</button>
      </div>
    </div>
  </div>

  <!-- CARD 6 -->
  <div class="property-card reveal">
    <div class="property-image">
      <img src="gallery/1BHK-6.webp">
    </div>
    <div class="property-content">
      <h2>1BHK – BAMBOO RESIDENCY</h2>
      <p class="property-desc">
        Eco-friendly society with jogging track, clubhouse and gym facilities.
      </p>
      <p class="property-meta">630 sq.ft | Semi–Furnished | West Facing</p>
      <p class="property-rent">₹ 11,800 / month</p>
      <div class="action-buttons">
        <button class="action-book" onclick="openPopup()">BOOK NOW</button>
        <button class="action-view">VIEW DETAILS</button>
      </div>
    </div>
  </div>

  <!-- CARD 7 -->
  <div class="property-card reveal">
    <div class="property-image">
      <img src="gallery/1BHK-7.webp">
    </div>
    <div class="property-content">
      <h2>1BHK – SUNSET ENCLAVE</h2>
      <p class="property-desc">
        Beautiful terrace view apartment with covered parking and lift access.
      </p>
      <p class="property-meta">615 sq.ft | Furnished | Terrace Access</p>
      <p class="property-rent">₹ 13,800 / month</p>
      <div class="action-buttons">
        <button class="action-book" onclick="openPopup()">BOOK NOW</button>
        <button class="action-view">VIEW DETAILS</button>
      </div>
    </div>
  </div>

  <!-- CARD 8 -->
  <div class="property-card reveal">
    <div class="property-image">
      <img src="gallery/1BHK-8.webp">
    </div>
    <div class="property-content">
      <h2>1BHK – SERENITY HEIGHTS</h2>
      <p class="property-desc">
        Calm neighbourhood, nearby hospital & shopping mall. Ideal for working professionals.
      </p>
      <p class="property-meta">600 sq.ft | Semi–Furnished | Lift + Security</p>
      <p class="property-rent">₹ 12,500 / month</p>
      <div class="action-buttons">
        <button class="action-book" onclick="openPopup()">BOOK NOW</button>
        <button class="action-view">VIEW DETAILS</button>
      </div>
    </div>
  </div>

</section>
<!-- Card Section Ends  -->



<?php include 'Footer.php'; ?>
<script src="Assets/Hameburger.js"></script>
<script src="Assets/Scroll.js"></script>
<script src="Assets/Underline.js"></script>
<script src="Assets/1 BHK.js"></script>
<script src="Assets/Smother.js"></script> 
</body>
</html>