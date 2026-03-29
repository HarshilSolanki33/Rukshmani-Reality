<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rukmani Realty</title>
   <link rel="icon" type="image/png" sizes="48x48" href="./Gallery/Title-img.png">
    <link rel="stylesheet" href="Assets/Stylesheet.css">
    <script src="Assets/Anti Flicker.js"></script>
    <script src="https://unpkg.com/@studio-freight/lenis@1.0.42/bundled/lenis.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
</head>
<style>
  html {
    visibility: hidden;
    opacity: 0;
  }
</style>
<body>
  <!-- php include 'loader.php'; ?>  -->
   <!-- Navbar -->
    <?php include 'Navbar.php'; ?>
    <!-- Navbar ends  -->

    <!-- Hero Section Starts-->
    <section class="hero" role="region" aria-label="Intro">
  <div class="hero-wrapper">
    <div class="hero-left">
      <div class="hero-inner">
       <h1>
  <span class="u-underline">The destination</span><br>
  <span class="u-underline">for your next property</span>
</h1>

        <p class="lead">
          AT 
          <span class="rukshmani">RUKMANI</span> BUILDERS GROUP, WE TURN YOUR DREAM ADDRESS INTO A LIFETIME ASSET..
        </p>
        <a class="cta" href="../Guest Side/Craftmenship.php">Explore Projects</a>
      </div>
    </div>
  </div>
</section>
<!-- Hero Section Ends -->

<!-- Hero section slider starts  -->
<div class="hero-right">
  <div class="slider">
    <div class="slider-track" id="track">
      <?php
        $slides = array();
        $error = null;
        
        try {
          // Database connection
          $pdo = new PDO("pgsql:host=localhost;dbname=Guest_User_DB", "postgres", "postgres");
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
          // Query without cache
          $result = $pdo->query("SELECT image_path FROM indexpage_slider ORDER BY position ASC");
          $slides = $result->fetchAll(PDO::FETCH_COLUMN);
          
          // Debug: Check if slides are empty
          if (empty($slides)) {
            $error = "No images found in database";
          }
        } catch (PDOException $e) {
          $error = "Database Error: " . $e->getMessage();
          // Fallback images
          $slides = array(
            "Gallery/Indexslider-1.jpg",
            "Gallery/Indexslider-2.jpg",
            "Gallery/Indexslider-3.jpg",
            "Gallery/Indexslider-4.jpg",
            "Gallery/Indexslider-5.jpg",
            "Gallery/Indexslider-6.jpg",
            "Gallery/Indexslider-7.jpg"
          );
        }
        
        // Generate slides from database
        foreach ($slides as $img) {
          echo '<div class="slide"><img src="' . htmlspecialchars($img) . '" loading="lazy" alt="Slider Image"></div>';
        }
        
        // Duplicate for seamless scrolling
        foreach ($slides as $img) {
          echo '<div class="slide"><img src="' . htmlspecialchars($img) . '" loading="lazy" alt="Slider Image"></div>';
        }
        
        // 🔍 Debug info (remove this line in production)
        if ($error) echo "<!-- $error -->";
      ?>
    </div>
  </div>
</div>
<!-- Hero section slider ends  -->

<!-- Ongoing Project section Starts -->
<?php
include "db.php";

$query = "SELECT * FROM indexpage_projects ORDER BY id ASC";
$result = pg_query($conn, $query);

if (!$result) {
    die("Query failed: " . pg_last_error($conn));
}

$count = pg_num_rows($result);
?>

<section class="projects">
    <h1 class="title u-underline animate">
        Ongoing Projects <span>(<?php echo $count; ?>)</span>
    </h1>

    <div class="slider">
        <div class="project-grid" id="sliderTrack">

            <?php while ($p = pg_fetch_assoc($result)) { ?>
                <div class="project-card">
                    
                    <img src="<?php echo $p['image_path']; ?>">

                    <?php if ($p['is_completed'] === 't') { ?>
                        <div class="badge">✔</div>
                    <?php } ?>

                    <div class="project-info">
                        <h3><?php echo $p['project_name']; ?></h3>
                        <p><?php echo $p['project_type']; ?><br><?php echo $p['location']; ?></p>
                        <<a href="<?php echo $p['project_link']; ?>">
    <div class="arrow">→</div>
</a>
                    </div>

                </div>
            <?php } ?>

        </div>
    </div>
</section>



<!-- Ongoing projects section ends  -->

<!-- Get Brochure Section starts  -->
 <?php
include "db.php";

$query = "SELECT * FROM brochure_indexpage ORDER BY id ASC";
$result = pg_query($conn, $query);

if (!$result) {
    die("Query failed: " . pg_last_error($conn));
}

$count = pg_num_rows($result);
?>
 <section class="section brochure-section">
    <div class="container">
        <div class="brochure-header reveal">
            <h2 class="u-underline">Get Brochure</h2>
        </div>

        <div class="brochure-table">
            <div class="brochure-table-head reveal">
                <span>NAME</span>
                <span>PROJECT TYPE</span>
                <span>LOCATION</span>
            </div>

           <?php while ($row = pg_fetch_assoc($result)) { ?>
    <a href="<?php echo $row['project_link']; ?>" style="text-decoration:none; color:inherit;">
        <div class="brochure-row reveal">
            <span class="project-name"><?= $row['project_name']; ?></span>
            <span class="project-type"><?= $row['project_type']; ?></span>
            <span class="project-location"><?= $row['project_location']; ?></span>
        </div>
    </a>
<?php } ?>

            <div class="show-more-wrapper">
                <button id="showMoreBtn">Show More</button>
            </div>
        </div>
    </div>
</section>
<!-- Get Brochure Section ends  -->


<!-- Showcase section starts  -->
<?php
include "db.php";

$query = "SELECT * FROM Timeless_indexpage ORDER BY id ASC";
$images = pg_query($conn, $query);

if (!$images) {
    die("Query failed: " . pg_last_error($conn));
}

$img1 = pg_fetch_assoc($images);
$img2 = pg_fetch_assoc($images);
?>
<section class="showcase-wrap">
    <div class="showcase-grid">

        <!-- LEFT TEXT -->
        <div class="showcase-content">
            <div class="showcase-label">Crafted Excellence</div>
            <h1 class="showcase-heading ">
                Timeless Design. <br> Eternal Value.
            </h1>
            <p>
                At <span class="rukshmani">Rukshmani Realty</span>, we create architectural masterpieces that 
                blend modern elegance with timeless quality, designed for generations.
            </p>
            <a href="../Guest Side/Our Projects.php" class="showcase-button">View Projects</a>
        </div>

        <!-- RIGHT IMAGES -->
        <div class="showcase-photos">
            <div class="showcase-card card-portrait">
                <img src="<?= $img1['image_path']; ?>" alt="<?= $img1['image_alt']; ?>">
            </div>

            <div class="showcase-card card-landscape">
                <img src="<?= $img2['image_path']; ?>" alt="<?= $img2['image_alt']; ?>">
            </div>
        </div>

    </div>
</section>
<!-- Showcase section ends  -->

<!-- Project timeline section starts  -->
 <?php
include "db.php";

$query = "SELECT * FROM Timeline_indexpage ORDER BY step_number ASC";
$result = pg_query($conn, $query);
?>
<section class="process-white-gold">
    <div class="container">
      <h2 class="section-title reveal">Our Signature Process</h2>
      <p class="section-subtitle reveal">Excellence from first consultation to final possession</p>
      
      <div class="process-timeline-gold">
        
        <?php while ($row = pg_fetch_assoc($result)) { ?>
          
          <div class="process-card-gold reveal <?= ($row['step_number'] % 2 == 0 ? 'slide-right' : 'slide-left') ?>">
            <span class="step-circle">
              <?= str_pad($row['step_number'], 2, '0', STR_PAD_LEFT); ?>
            </span>
            <h3><?= $row['title']; ?></h3>
            <p><?= $row['description']; ?></p>
          </div>

        <?php } ?>

      </div>
    </div>
</section>

<!-- Project timeline section ends   -->

<!-- Residence topology starts  -->
<?php
include "db.php";

$query = "SELECT * FROM residence_typologies ORDER BY id ASC";
$result = pg_query($conn, $query);
?>
<section class="section unit-plans" aria-label="Unit plans">
  <div class="container">
    <h2 class="section-title reveal">Residence typologies</h2>
    <p class="section-subtitle reveal">Select from spacious 3 & 4 BHK residences.</p>

    <div class="unit-grid">

      <?php while ($row = pg_fetch_assoc($result)) { ?>
      <article class="unit-card reveal">
        
        <div class="unit-img">
          <img src="<?= $row['image_path']; ?>" alt="<?= $row['image_alt']; ?>">
          
          <div class="unit-overlay">
            <span><?= $row['overlay_title']; ?></span>
            <p><?= $row['overlay_desc']; ?></p>
          </div>
        </div>

        <div class="unit-meta">
          <h3><?= $row['unit_type']; ?></h3>
          <p><?= $row['unit_features']; ?></p>
        </div>

      </article>
      <?php } ?>

    </div>
  </div>
</section>
<!-- Residence topology ends  -->



 
<!-- indies page numbers starts  -->
 <?php
include "db.php";

$query = "SELECT * FROM Counter_indexpage ORDER BY id ASC";
$stats = pg_query($conn, $query);
?>
<section class="lux-stats">
  <div class="lux-stats-inner">

    <?php while ($row = pg_fetch_assoc($stats)) { ?>
      <div class="lux-stat">
        <h2 data-count="<?= $row['count_value']; ?>">0</h2>
        <p><?= $row['label_text']; ?></p>
      </div>
    <?php } ?>

  </div>
</section>
<!-- indies page numbers ends  -->

<!-- FAQ section starts   -->
 <section class="bg-gray-100 py-14 md:py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-2 gap-10">

    <!-- Left Title -->
    <div class="flex md:justify-start justify-center">
      <h2 class="text-4xl sm:text-5xl md:text-6xl font-['Georgia','Playfair_Display',serif]">
        FAQs
      </h2>
    </div>

    <!-- FAQ List -->
    <div class="space-y-4">

      <!-- Item -->
      <div class="bg-white rounded-xl border overflow-hidden">
        <button class="faq-question w-full flex justify-between items-center p-4 sm:p-5 text-left">
          
          <span class="flex items-center gap-3 text-sm sm:text-base md:text-lg font-medium">
            <span class="bg-amber-700 text-white text-xs sm:text-sm px-2 sm:px-3 py-1 rounded">
              Q1
            </span>
            Why should I invest in Ahmedabad properties with Rukmani Reality?
          </span>

          <span class="text-xl sm:text-2xl plus">+</span>
        </button>

        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500 px-4 sm:px-5">
          <p class="py-4 text-gray-600 text-sm sm:text-base leading-relaxed">
            Investing with Rukmani Reality in Ahmedabad gives you access to
            premium residential and commercial properties in growing areas.
            Our focus on trusted projects and strong investment value ensures
            long-term returns.
          </p>
        </div>
      </div>

      <!-- Item -->
      <div class="bg-white rounded-xl border overflow-hidden">
        <button class="faq-question w-full flex justify-between items-center p-4 sm:p-5 text-left">
          
          <span class="flex items-center gap-3 text-sm sm:text-base md:text-lg font-medium">
            <span class="bg-amber-700 text-white text-xs sm:text-sm px-2 sm:px-3 py-1 rounded">
              Q2
            </span>
            What types of properties are available through Rukmani Reality?
          </span>

          <span class="text-xl sm:text-2xl plus">+</span>
        </button>

        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500 px-4 sm:px-5">
          <p class="py-4 text-gray-600 text-sm sm:text-base leading-relaxed">
            We provide residential flats, luxury apartments, villas, plots,
            and commercial spaces in prime locations across Ahmedabad.
          </p>
        </div>
      </div>

      <!-- Item -->
      <div class="bg-white rounded-xl border overflow-hidden">
        <button class="faq-question w-full flex justify-between items-center p-4 sm:p-5 text-left">
          
          <span class="flex items-center gap-3 text-sm sm:text-base md:text-lg font-medium">
            <span class="bg-amber-700 text-white text-xs sm:text-sm px-2 sm:px-3 py-1 rounded">
              Q3
            </span>
            Is Ahmedabad a good city for real estate investment?
          </span>

          <span class="text-xl sm:text-2xl plus">+</span>
        </button>

        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500 px-4 sm:px-5">
          <p class="py-4 text-gray-600 text-sm sm:text-base leading-relaxed">
            Ahmedabad is one of Gujarat’s fastest growing real estate markets
            with strong infrastructure, metro connectivity, and affordable
            property prices.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>
<!-- FAQ section ends   -->



<?php include 'Scroll.php'; ?>
<?php include 'footer.php'; ?>
<script src="https://cdn.tailwindcss.com"></script>
<script src="Assets/index.js"></script>
<script src="Assets/Underline.js"></script>
<script src="Assets/Ongoing.js"></script>
<script src="Assets/Hameburger.js"></script>
<script src="Assets/Brochure.js"></script>
<script src="Assets/Smother.js"></script>    
<script src="Assets/slider.js"></script>
<script src="Assets/Showcase.js"></script>
<script src="Assets/Promise.js"></script>
<script src="Assets/timeline.js"></script>
</body>
</html>