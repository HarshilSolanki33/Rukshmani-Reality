<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belleza Gardens</title>
     <link rel="icon" type="image/png" sizes="48x48" href="./Gallery/Title-img.png">
    <link rel="stylesheet" href="Assets/Belleza Gardens.css">
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
        <h1 class="hero-title u-underline">BELLEZA GARDENS</h1>

        <p class="lead">
          AT 
          <span class="rukshmani">Aurum Heights</span> a place where every sunrise brings comfort, luxury and peace. Thoughtfully planned spaces, open views and urban connectivity come together to create a lifestyle you and your family truly deserve.
        </p>
      </div>
    </div>
  </div>
</section>
    <!-- Hero Section Ends -->

    <!-- Bground image section starts   -->
<?php
include "db.php";

$query = 'SELECT * FROM "Guest_User_DB".Belleza_Gardens_bgremove ORDER BY id ASC';
$section = pg_query($conn, $query);

$row = pg_fetch_assoc($section);
?>

<section class="bg-white py-32">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center -mt-40">

    <!-- Left Content -->
    <div>

     <h2 class="text-3xl font-['Playfair_Display'] mb-12 tracking-wide u-underline">
        <?= $row['title']; ?>
     </h2>

<p class="text-gray-600 mb-6 leading-relaxed">
<?= $row['content1']; ?>
</p>

<p class="text-gray-600 mb-6 leading-relaxed">
<?= $row['content2']; ?>
</p>

<p class="text-gray-600 mb-8 leading-relaxed">
<?= $row['content3']; ?>
</p>

<button id="downloadBtn" class="yrproj-btn group flex items-center gap-3 border border-[#b89664] text-[#b89664] px-7 py-3 rounded-full tracking-widest text-sm transition-all duration-300 hover:bg-[#b89664]">
DOWNLOAD BROCHURE
<span class="transform transition-transform duration-300 group-hover:translate-x-2">→</span>
</button>

<script>
document.getElementById("downloadBtn").addEventListener("click", function() {
    const link = document.createElement("a");
    link.href = "./Gallery/Brochures/<?= $row['brochure']; ?>";
    link.download = "<?= $row['brochure']; ?>";
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
});
</script>
    </div>

    <!-- Right Image -->
    <div class="relative">

      <div class="absolute inset-0 bg-white/70 blur-3xl rounded-full"></div>

      <img 
        src="./Gallery/<?= $row['image']; ?>"
        alt="property"
        class="relative z-10 w-full max-w-lg mx-auto"
      >

    </div>

  </div>
</section>
<!-- Bground image section ends   -->

<!-- Perspective section starts  -->
<?php
include "db.php";

$query = 'SELECT * FROM "Guest_User_DB".belleza_gardens_perspective ORDER BY id ASC';
$perspectives = pg_query($conn, $query);
?>

<section class="perspectives">

  <div class="section-header">
    <h2 class="u-underline" id="title">
      Perspectives <span>(<?= pg_num_rows($perspectives); ?>)</span>
    </h2>
  </div>

  <div class="perspectives-grid">

    <?php while ($row = pg_fetch_assoc($perspectives)) { ?>
      
      <div class="perspective-card">
        <img src="gallery/<?= $row['image']; ?>" alt="<?= $row['label']; ?>">
        <span class="label"><?= $row['label']; ?></span>
      </div>

    <?php } ?>

  </div>

</section>
<!-- Perspective section ends  -->

<!-- product typology section starts -->
<?php
include "db.php";

$query = 'SELECT * FROM "Guest_User_DB".Belleza_Gardens_topology ORDER BY id ASC';
$typology = pg_query($conn, $query);
?>

<section class="product-typology">

  <h2 class="u-underline">
    Product Typology <span>(<?= pg_num_rows($typology); ?>)</span>
  </h2>

  <div class="typology-grid">

  <?php while ($row = pg_fetch_assoc($typology)) { ?>

    <div class="typology-item">
      <div class="icon-wrap">
        <img src="gallery/<?= $row['icon_image']; ?>" alt="">
      </div>

      <h4><?= $row['title']; ?></h4>
      <p><?= $row['description']; ?></p>
    </div>

  <?php } ?>

  </div>

</section>
<!-- product typology section ends -->

<!-- Signature Residences section starts   -->
<?php
include "db.php";

$query = 'SELECT * FROM "Guest_User_DB".belleza_gardens_signature ORDER BY id ASC';
$units = pg_query($conn, $query);
?>

<section class="unit-cards">

  <h2 class="section-title u-underline">Signature Residences</h2>

  <div class="unit-grid">

  <?php while ($row = pg_fetch_assoc($units)) { ?>

    <div class="unit-card">
      
      <div class="unit-image">
        <img src="gallery/<?= $row['image']; ?>" alt="<?= $row['title']; ?>">
        <span class="tag"><?= $row['tag']; ?></span>
      </div>

      <h3><?= $row['title']; ?></h3>
      <div class="price"><?= $row['price']; ?></div>

      <ul class="features">
        <li><?= $row['feature1']; ?></li>
        <li><?= $row['feature2']; ?></li>
        <li><?= $row['feature3']; ?></li>
      </ul>

      <button class="btn-gold">Book Inquiry</button>

    </div>

  <?php } ?>

  </div>

</section>
<!-- Signature Residences section ends   -->

<!-- floor plan section starts  -->
<?php
include "db.php";

$query = 'SELECT * FROM "Guest_User_DB".belleza_gardens_floorplan ORDER BY id ASC';
$result = pg_query($conn,$query);

$plans = [];
while($row = pg_fetch_assoc($result)){
    $plans[] = $row;
}
?>

<section class="bg-white py-16 md:py-24">

<div class="text-center">
<h2 class="text-3xl md:text-5xl font-['Playfair_Display'] mb-12 md:mb-16 u-underline inline-block">
Floor Plan
</h2>
</div>

<div class="max-w-[1100px] mx-auto px-6">

<!-- Tabs -->
<div class="flex gap-8 md:gap-12 border-b pb-4 mb-12 md:mb-20 text-base md:text-lg tracking-widest justify-center">

<?php foreach($plans as $index=>$plan){ ?>

<button id="tab<?= $index+1 ?>"
class="tab-btn <?= $index==0 ? 'border-b-2 border-black' : 'border-b-2 border-transparent text-gray-400' ?> pb-2">

<?= $plan['tab_name']; ?>

</button>

<?php } ?>

</div>

<?php foreach($plans as $index=>$plan){ ?>

<div id="content<?= $index+1 ?>"
class="tab-content <?= $index!=0 ? 'hidden' : '' ?> grid md:grid-cols-2 items-center gap-10 md:gap-20 relative">

<!-- Left Text -->
<div>

<h3 class="text-2xl md:text-3xl text-[#c6a87d] font-['Playfair_Display'] mb-8 md:mb-12">
<?= $plan['title']; ?>
</h3>

<div class="space-y-6 md:space-y-10 tracking-widest text-sm">

<div>
<p class="text-gray-500 mb-1">UNIT :</p>
<p><?= $plan['unit']; ?></p>
</div>

<div>
<p class="text-gray-500 mb-1">SUITE :</p>
<p><?= $plan['suite']; ?></p>
</div>

<div>
<p class="text-gray-500 mb-1">BALCONY :</p>
<p><?= $plan['balcony']; ?></p>
</div>

<div>
<p class="text-gray-500 mb-1">TOTAL :</p>
<p><?= $plan['total']; ?></p>
</div>

</div>

</div>

<!-- Right Image -->
<div class="flex justify-center">

<img src="./Gallery/<?= $plan['image']; ?>"
class="w-[280px] md:w-[420px] drop-shadow-xl">

</div>

</div>

<?php } ?>

</div>
</section>
<!-- floor plan section ends -->


<!-- Amenities section starts  -->
<?php
include "db.php";

$query = "SELECT * FROM aurum_amenities ORDER BY id ASC";
$amenities = pg_query($conn,$query);
?>
<?php
include "db.php";

$query = "SELECT * FROM aurum_amenities ORDER BY id ASC";
$amenities = pg_query($conn,$query);
?>

<section class="amenities">
<div class="container">

<h2 class="section-title3 u-underline">Amenities</h2>

<div class="amenities-grid">

<?php while($row = pg_fetch_assoc($amenities)) { ?>

<div class="amenity-card">

<span class="amenity-icon">
<?= $row['icon_svg']; ?>
</span>

<h4><?= $row['title']; ?></h4>
<p><?= $row['description']; ?></p>

</div>

<?php } ?>

</div>
</div>
</section>
    <!-- Amenities section ends  -->


<!-- Brochure & Enquiry section starts  -->
<section class="brochure-enquiry">
  <div class="container">

    <div class="be-wrapper">

      <!-- Left content -->
      <div class="be-left">
        <h2 class="u-underline">Download Project Brochure</h2>
        <p>
          Get detailed information about <span>Aurum Heights</span> including
          floor plans, amenities, elevations and specifications in one
          beautifully designed brochure.
        </p>

        <ul class="points">
          <li>✔️ RERA Approved Project Details</li>
          <li>✔️ Floor Plans & Area Statement</li>
          <li>✔️ Price & Payment Schedule</li>
          <li>✔️ Amenities & Location Highlights</li>
        </ul>
      </div>

      <!-- Right form -->
      <div class="be-form">
        <h3>Enquire Now</h3>

        <form>
          <input type="text" placeholder="Your Name" required>
          <input type="tel" placeholder="Mobile Number" required>
          <input type="email" placeholder="Email Address">

          <button type="submit">Download Brochure</button>
        </form>

        <small>We respect your privacy — no spam guaranteed.</small>
      </div>

    </div>

  </div>
</section>
    <!-- Brochure & Enquiry section ends  -->

<!-- Map section starts  -->
<section class="contact-location">
  <div class="container">
<h2 class="section-title4 u-underline">
      Location
    </h2>

    <div class="contact-wrapper">

      <!-- LEFT INFO -->
      <div class="contact-info">

        <div class="info-block">
          <div class="icon">
            <!-- Location SVG -->
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
              <path d="M12 21s7-6.5 7-11a7 7 0 1 0-14 0c0 4.5 7 11 7 11z"/>
              <circle cx="12" cy="10" r="2.5"/>
            </svg>
          </div>
          <div>
            <h5>ADDRESS</h5>
            <p>Rajkot, Gujarat.</p>
          </div>
        </div>

        <div class="info-row">
          <div class="info-block small">
            <div class="icon">
              <!-- Mail SVG -->
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <rect x="3" y="5" width="18" height="14" rx="2"/>
                <path d="M3 7l9 6 9-6"/>
              </svg>
            </div>
            <div>
              <h5>SALES INQUIRY</h5>
              <p>rukshmani@gmail.com</p>
            </div>
          </div>

          <div class="info-block small">
            <div class="icon">
              <!-- Phone SVG -->
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <path d="M22 16.9v3a2 2 0 0 1-2.2 2A19.8 19.8 0 0 1 2 5.2 2 2 0 0 1 4 3h3a2 2 0 0 1 2 1.7c.1.8.3 1.6.6 2.3a2 2 0 0 1-.4 2.1l-1.3 1.3a16 16 0 0 0 6.6 6.6l1.3-1.3a2 2 0 0 1 2.1-.4c.7.3 1.5.5 2.3.6a2 2 0 0 1 1.7 2z"/>
              </svg>
            </div>
            <div>
              <h5>Contact</h5>
              <p>+91 123456789</p>
            </div>
          </div>
        </div>

      </div>

      <!-- RIGHT MAP -->
      <div class="map-box">
        <iframe
         src="https://www.google.com/maps?q=Gujarat,%20India&output=embed"
          loading="lazy">
        </iframe>
      </div>

    </div>

  </div>
</section>

    <!-- Map section ends  -->



<?php include 'Scroll.php'; ?>
<?php include 'Footer.php'; ?>
<script src="Assets/Belleza Gardens.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
 <script src="https://cdn.tailwindcss.com"></script>
<script src="Assets/Hameburger.js"></script>
<script src="Assets/Smother.js"></script> 
<script src="Assets/Projects page.js"></script>
</body>
</html>