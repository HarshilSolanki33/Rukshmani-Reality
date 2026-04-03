<!-- <php
session_start();

if (!isset($_SESSION['user_logged_in'])) {
    header("Location: ../Guest Side/SignUp.php");
    exit();
}
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rukmani Realty-Rent Properties</title>
   <link rel="icon" type="image/png" sizes="48x48" href="./Gallery/Title-img.png">
    <link rel="stylesheet" href="Assets/Rent Properties.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">

</head>
<style>
  
</style>
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
    <div class="sub-item"><a href="./Showrooms.php" class="link-a">Showroom</a></div>
    <div class="sub-item"><a href="./Office.php" class="link-a">Corporate Office</a></div>
    <div class="sub-item"><a href="./Retail Shop.php" class="link-a">Retail Shop</a></div>
  </div>

</section>

<!-- PROPERTY TYPE SECTION ENDS -->

<!-- Sale your property section starts   -->
<section class="bg-white py-12 sm:py-14 md:py-16 px-4 sm:px-6">

  <!-- Title -->
  <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center text-gray-800 mb-10 sm:mb-12"
      style="font-family: 'Playfair Display', serif;">
    Showcase Your Property to Buyers
  </h2>

  <!-- Hidden Inputs -->
  <input type="file" id="galleryInput" accept="image/*" hidden>
  <input type="file" id="cameraInput" accept="image/*" capture="environment" hidden>

  <!-- Cards -->
  <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 sm:gap-6 md:gap-8 max-w-5xl mx-auto">

    <!-- Gallery Upload -->
    <div onclick="openGallery()"
         class="bg-white border border-yellow-500 rounded-xl sm:rounded-2xl p-5 sm:p-6 shadow-sm hover:shadow-lg transition cursor-pointer active:scale-95">

      <div class="flex items-center gap-3 sm:gap-4 mb-3 sm:mb-4">

        <!-- Icon -->
        <div class="bg-white p-2 sm:p-3 rounded-lg">
          <svg class="w-6 h-6 sm:w-7 sm:h-7" fill="none" stroke="#c9a44d" stroke-width="2">
            <rect x="3" y="3" width="18" height="18" rx="2"></rect>
            <circle cx="8.5" cy="8.5" r="1.5"></circle>
            <path d="M21 15l-5-5L5 21"></path>
          </svg>
        </div>

        <h3 class="text-lg sm:text-xl font-semibold text-gray-800">
          Upload from Gallery
        </h3>
      </div>

      <p class="text-gray-600 text-sm sm:text-base mb-3 sm:mb-4">
        Select images from your device
      </p>

      <p class="text-yellow-600 font-medium text-sm sm:text-base">
        Choose Photos →
      </p>

    </div>

    <!-- Camera Upload -->
    <div onclick="openCamera()"
         class="bg-white border border-yellow-500 rounded-xl sm:rounded-2xl p-5 sm:p-6 shadow-sm hover:shadow-lg transition cursor-pointer active:scale-95">

      <div class="flex items-center gap-3 sm:gap-4 mb-3 sm:mb-4">

        <!-- Icon -->
        <div class="bg-white p-2 sm:p-3 rounded-lg">
          <svg class="w-6 h-6 sm:w-7 sm:h-7" fill="none" stroke="#c9a44d" stroke-width="2">
            <path d="M23 19V7a2 2 0 0 0-2-2h-3l-2-2H8L6 5H3a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h18a2 2 0 0 0 2-2z"/>
            <circle cx="12" cy="13" r="4"/>
          </svg>
        </div>

        <h3 class="text-lg sm:text-xl font-semibold text-gray-800">
          Use Camera
        </h3>
      </div>

      <p class="text-gray-600 text-sm sm:text-base mb-3 sm:mb-4">
        Take a photo instantly
      </p>

      <p class="text-yellow-600 font-medium text-sm sm:text-base">
        Open Camera →
      </p>

    </div>

  </div>

</section>
<!-- Sale your property section ends   -->

<!-- PROPERTY FORM START -->
<section class="bg-gray-50 py-12 px-4">

  <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-2xl p-6 md:p-8">

    <h2 class="text-2xl md:text-3xl font-bold text-center mb-6"
        style="font-family: 'Playfair Display', serif;">
      List Your Property
    </h2>

    <form action="submit.php" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4">

      <!-- Name -->
      <input type="text" name="name" placeholder="Full Name"
        class="border p-3 rounded-lg focus:ring-2 focus:ring-yellow-500 outline-none" required>

      <!-- Phone -->
      <input type="text" name="phone" placeholder="Phone Number"
        class="border p-3 rounded-lg focus:ring-2 focus:ring-yellow-500 outline-none" required>

      <!-- City -->
      <input type="text" name="city" placeholder="City"
        class="border p-3 rounded-lg focus:ring-2 focus:ring-yellow-500 outline-none">

      <!-- Budget -->
      <input type="text" name="budget" placeholder="Budget"
        class="border p-3 rounded-lg focus:ring-2 focus:ring-yellow-500 outline-none">

      <!-- Property Type -->
      <select name="property_type" id="ptype" onchange="loadOptions()"
        class="border p-3 rounded-lg focus:ring-2 focus:ring-yellow-500 outline-none col-span-1 md:col-span-2" required>

        <option value="">Select Property Type</option>
        <option value="residential">Residential Property</option>
        <option value="commercial">Commercial Property</option>

      </select>

      <!-- Property Option -->
      <select name="property_option" id="poption"
        class="border p-3 rounded-lg focus:ring-2 focus:ring-yellow-500 outline-none col-span-1 md:col-span-2" required>

        <option value="">Select Option</option>

      </select>

      <!-- Message -->
      <textarea name="message" placeholder="Additional Details"
        class="border p-3 rounded-lg col-span-1 md:col-span-2 focus:ring-2 focus:ring-yellow-500 outline-none"></textarea>

      <!-- Submit -->
      <button type="submit"
        class="bg-yellow-500 text-white py-3 rounded-lg col-span-1 md:col-span-2 hover:bg-yellow-600 transition">

        Submit Property

      </button>

    </form>

  </div>

</section>
<!-- PROPERTY FORM END -->

<!-- Featured Properties Section Starts -->
<?php
include "db.php";

$query = "SELECT * FROM lux_premium_properties ORDER BY id ASC";
$premium = pg_query($conn,$query);
?>
<section class="lux-premium-section">
  <h2 class="lux-title u-underline">Featured Premium Properties</h2>

  <div class="lux-grid">

  <?php while($row = pg_fetch_assoc($premium)) { ?>

    <div class="lux-card lux-reveal">
      <img class="lux-img" src="./gallery/<?= $row['image']; ?>" alt="">
      <h3><?= $row['title']; ?></h3>
      <p class="lux-price"><?= $row['price']; ?></p>
    </div>

  <?php } ?>

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

<script>
function openGallery() {
  document.getElementById("galleryInput").click();
}

function openCamera() {
  document.getElementById("cameraInput").click();
}

// Optional: preview or check
document.getElementById("galleryInput").addEventListener("change", function(e){
  console.log("Gallery Image Selected:", e.target.files[0]);
});

document.getElementById("cameraInput").addEventListener("change", function(e){
  console.log("Camera Image Captured:", e.target.files[0]);
});
</script>



<script>
function loadOptions() {
  let type = document.getElementById("ptype").value;
  let option = document.getElementById("poption");

  option.innerHTML = '<option value="">Select Option</option>';

  if (type === "residential") {
    option.innerHTML += `
      <option value="1bhk">1 BHK</option>
      <option value="2bhk">2 BHK</option>
      <option value="3bhk">3 BHK</option>
      <option value="penthouse">Penthouse</option>
    `;
  } else if (type === "commercial") {
    option.innerHTML += `
      <option value="showroom">Showroom</option>
      <option value="corporate">Corporate Office</option>
      <option value="retail">Retail Shop</option>
    `;
  }
}
</script>

<script src="https://cdn.tailwindcss.com"></script>
<?php include 'Scroll.php'; ?>
<?php include 'Footer.php'; ?>
<script src="Assets/Hameburger.js"></script>
<script src="Assets/Smother.js"></script> 
<script src="Assets/Underline.js"></script>
<script src="Assets/Rent Properties.js"></script>
</body>
</html>