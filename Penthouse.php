<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rukmani Realty-Penthouse</title>
   <link rel="icon" type="image/png" sizes="48x48" href="./Gallery/Title-img.png">
    <link rel="stylesheet" href="Assets/Penthouse.css">
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
        <h1 class="hero-title u-underline">PENT HOUSE</h1>

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
<?php
include "db.php";

$query = 'SELECT * FROM penthouses ORDER BY id ASC';
$result = pg_query($conn, $query);

if (!$result) {
    die("Query failed: " . pg_last_error($conn));
}
?>

<section class="penthouse-area">
    <?php 
    if (pg_num_rows($result) > 0): 
        while ($row = pg_fetch_assoc($result)): 
    ?>
        <div class="penthouse-item fade-trigger">
            <div class="penthouse-thumb">
                <img src="<?php echo htmlspecialchars($row['image']); ?>">
            </div>

            <div class="penthouse-body">
                <h2><?php echo htmlspecialchars($row['title']); ?></h2>

                <p class="penthouse-text">
                    <?php echo htmlspecialchars($row['description']); ?>
                </p>

                <p class="penthouse-specs">
                    <?php echo htmlspecialchars($row['meta']); ?>
                </p>

                <p class="penthouse-rate">
                    <?php echo htmlspecialchars($row['rent']); ?>
                </p>

                <div class="penthouse-cta">
                    <?php if (strtoupper($row['status']) == 'RENTED'): ?>
                        <button class="badge-closed">RENTED</button>
                    <?php else: ?>
                        <button class="badge-open">BOOK NOW</button>
                    <?php endif; ?>

                    <button class="btn-outline">VIEW DETAILS</button>
                </div>
            </div>
        </div>
    <?php 
        endwhile; 
    else:
        echo "<p>No penthouses found.</p>";
    endif; 
    ?>
</section>

<!-- Card Section Ends  -->




<?php include 'Footer.php'; ?>
<script src="Assets/Hameburger.js"></script>
<script src="Assets/Penthouse.js"></script>
<script src="Assets/Smother.js"></script> 
</body>
</html>