<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="Assets/Aboutus.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&family=Montserrat:wght@300;400;500&family=Noto+Serif+Devanagari:wght@400;500&display=swap" rel="stylesheet">


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
        <h1 class="u-underline">ABOUT US</h1>
        <p class="lead">
          AT 
          <span class="rukshmani">RUKMANI GROUP</span> we specialize in delivering premium real estate developments that blend quality construction, thoughtful design, and lasting value. Built on trust and commitment, we create spaces that redefine modern living.
        </p>
        <a class="cta" href="#">Explore Projects</a>
      </div>
    </div>
  </div>
</section>
    <!-- Hero Section Ends -->

    <!-- Our Story starts  -->
    <section class="about-section">
  <div class="about-container">

    <!-- Left Content -->
    <div class="about-left">
      <span class="small-title">WHO WE ARE</span>
      <h2 class="main-title">Our Story</h2>
    </div>

    <!-- Right Content -->
    <div class="about-right">
      <p>
Welcome to Rukmani Group, where we are driven by a vision to build
spaces that stand the test of time. Rooted in trust, quality, and commitment,
our journey is shaped by a passion for thoughtful design and reliable
construction.
</p>

<p>
With a strong presence in residential and commercial development, we focus on
creating environments that enhance everyday living while delivering lasting
value. Every project reflects our dedication to excellence, transparency, and
customer satisfaction.
</p>

<p>
Today, Rukmani Group continues to grow as a trusted name in real
estate, building not just properties, but enduring relationships and
landmarks for the future.
</p>

    </div>

  </div>
</section>
    <!-- Our Story ends  -->

    <!-- Numbers section starts  -->
    <?php
include "db.php";

$query = 'SELECT * FROM "Guest_User_DB".aboutus_counter ORDER BY sequence ASC';
$result = pg_query($conn, $query);
?>
<section class="stats-section">
  <div class="stats-container">

    <?php while ($row = pg_fetch_assoc($result)) { ?>
      <div class="stat-box">
        <h2 class="counter" data-target="<?php echo $row['value']; ?>">0</h2>
        <p><?php echo $row['title']; ?></p>
        <span class="line"></span>
      </div>
    <?php } ?>

  </div>
</section>

    <!-- Numbers section ends  -->

    <!-- our purpose section starts  -->
     <section class="purpose-section">

  <!-- PURPOSE -->
 <?php
include "db.php";

$query = 'SELECT * FROM "Guest_User_DB".aboutus_ourpurpose ORDER BY sequence ASC';
$result = pg_query($conn, $query);
?>
<?php while ($row = pg_fetch_assoc($result)) { ?>

  <div class="row">
    <div class="left">
      <span class="label"><?php echo $row['label']; ?></span>
      <h3><?php echo $row['heading']; ?></h3>
    </div>

    <div class="right">
      <p><?php echo $row['description']; ?></p>
    </div>
  </div>

  <hr>

<?php } ?>


  <!-- MISSION -->
  <!-- Font Awesome (HEAD ma add karo) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<div class="mission-box">
  <span class="label white">OUR MISSION</span>

  <div class="steps">

    <div class="step">
      <i class="fa-solid fa-flag"></i>
      <span>TO INITIATE</span>
      <h4>SMART PROPERTY DECISIONS</h4>
    </div>

    <div class="arrow">→</div>

    <div class="step">
      <i class="fa-solid fa-lightbulb"></i>
      <span>TO INNOVATE</span>
      <h4>REAL ESTATE SOLUTIONS</h4>
    </div>

    <div class="arrow">→</div>

    <div class="step">
      <i class="fa-solid fa-people-group"></i>
      <span>TO INSPIRE</span>
      <h4>CONFIDENCE & TRUST</h4>
    </div>

    <div class="arrow">→</div>

    <div class="step final">
      <i class="fa-solid fa-heart"></i>
      <h4>FOR A BETTER<br>LIFE…</h4>
    </div>

  </div>
</div>
</section>
<!-- our purpose section ends  -->

<!-- our belief system starts  -->
 <section class="belief-section">

  <h2 class="belief-title">Our Belief System</h2>
  <span class="belief-line"></span>

  <div class="belief-quote-box">
    <span class="quote-icon left">“</span>

    <p class="belief-quote">
      काज हमार तासु हित होई
    </p>

    <span class="quote-icon right">”</span>

    <p class="quote-author">
      – Shri Tulsidas, Ramcharitmanas
    </p>
  </div>

  <p class="belief-text">
    “May my work be for the welfare of all.” This thought forms the foundation
    of our belief system at Rukmani Realty. We approach every endeavor with
    integrity, responsibility, and a commitment to creating value beyond
    transactions. We believe that true success in real estate lies in building
    trust, nurturing communities, and contributing positively to society.
  </p>

</section>
<!-- our belief system ends  -->

<!-- contact section starts   -->
 <section class="contact-simple-section">
  <h3 class="contact-simple-title">
    We'd Love To Hear From You!
  </h3>

  <p class="contact-simple-text">
    Call us at <a href="tel:+91123456789">+91 123456789</a>
    or leave your details <a href="#">here</a> and our team will get in touch with you.
  </p>
</section>

<!-- contact section ends  -->

<?php include 'Footer.php'; ?>

<script src="Assets/quote.js"></script>
<script src="Assets/Underline.js"></script>
<script src="Assets/ourpurpose.js"></script>
<script src="Assets/Numbers.js"></script>
<script src="Assets/Hameburger.js"></script>
<script src="Assets/Smother.js"></script>    
<script src="Assets/slider.js"></script>
</body>
</html>