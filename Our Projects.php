<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Rukmani Realty-Our Projects</title>
   <link rel="icon" type="image/png" sizes="48x48" href="./Gallery/Title-img.png">
    <link rel="stylesheet" href="Assets/Our Project.css">
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

    <!-- POP UP section starts  -->
 <!-- <section class="rr-project-login">
<div class="rr-overlay" id="loginPopup">
<div class="rr-modal">


<div class="rr-modal-left">
<div class="rr-brand">
<img src="gallery/Realty_Logo-2.png
" alt="Rukmani Realty Logo" class="rr-logo" />
<h1>Rukmani Realty</h1>
</div>
<p><strong>Please Note</strong></p>
<ul>
<li>Exclusive project floor plans available for registered users only.</li>
<li>Access detailed layouts & room dimensions.</li>
<li>Your privacy & property data are securely protected.</li>
<li>Find the perfect home tailored to your lifestyle.</li>
</ul>
</div>


<div class="rr-modal-right">
<span class="rr-close-btn">&times;</span>
<h2>Login</h2>
<div class="rr-form-group">
<input type="text" placeholder="Email or Phone" />
</div>
<div class="rr-form-group">
<input type="password" placeholder="Password" />
</div>
<button class="rr-login-btn">Login</button>
<div class="rr-signup">Don’t have an account? <a href="#">Sign up</a></div>
</div>


</div>
</div>
</section> -->
<!-- POP UP section ends  -->

    <!-- Hero Section Starts -->
     <section class="sticky-hero">
  <div class="hero-inner">
    <img src="gallery/Our project main image.png" class="city-line">
  </div>
</section>
<!-- Hero Section Ends  -->

<!-- Vision meet structure section starts  -->
 <?php
include "db.php";

$query = "SELECT * FROM Vision_Meets_Structuree ORDER BY id ASC";
$result = pg_query($conn, $query);

if (!$result) {
    die("Query failed: " . pg_last_error($conn));
}

$count = pg_num_rows($result);
?>
<section class="projects-section">

  <h2 class="section-title u-underline">Where Vision Meets Structure</h2>
  <p class="section-subtitle">
    From striking sketches to tangible outcomes, we're all about designing for the future,
    driven by clarity, precision, and a commitment to environmental responsibility.
  </p>

  <div class="projects-wrapper">

    <?php while ($row = pg_fetch_assoc($result)) : ?>

      <div class="project-card from-<?php echo $row['card_position']; ?>">
        <img src="<?php echo $row['image_path']; ?>" alt="<?php echo $row['title'] . ' ' . $row['subtitle']; ?>">
        <div class="project-overlay">
          <h3><?php echo $row['title']; ?><br><?php echo $row['subtitle']; ?></h3>
        </div>
      </div>

    <?php endwhile; ?>

  </div>

</section>
<!-- Vision meet structure section ends  -->

<!-- Our Projects section starts  -->
 <section class="yrproj-container">

  <h2 class="yrproj-heading u-underline">Projects</h2>

  <div class="yrproj-years">
    <?php for ($y = 2025; $y >= 2018; $y--): ?>
      <button class="yrproj-year-btn <?= ($y == 2025) ? 'active' : '' ?>" data-year="<?= $y ?>"><?= $y ?></button>
    <?php endfor; ?>
  </div>

  <div class="yrproj-list">
    <!-- Initially load 2025 projects -->
    <?php
    $_GET['year'] = 2025;
    include 'projects_ajax.php';
    ?>
  </div>
</section>

<script>
document.querySelectorAll('.yrproj-year-btn').forEach(btn => {
  btn.addEventListener('click', function() {
    const year = this.dataset.year;

    // Update active class
    document.querySelectorAll('.yrproj-year-btn').forEach(b => b.classList.remove('active'));
    this.classList.add('active');

    // Fetch projects via AJAX without page reload
    fetch('projects_ajax.php?year=' + year)
      .then(res => res.text())
      .then(html => {
        document.querySelector('.yrproj-list').innerHTML = html;
      });
  });
});
</script>
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

<?php include 'Scroll.php'; ?>
<?php include 'Footer.php'; ?>

<script src="Assets/Our Project.js"></script>
<script src="Assets/Underline.js"></script>
<script src="Assets/Hameburger.js"></script>
<script src="Assets/Smother.js"></script> 
</body>
</html>