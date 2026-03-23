<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rukmani Realty-Showrooms</title>
   <link rel="icon" type="image/png" sizes="48x48" href="./Gallery/Title-img.png">
    <link rel="stylesheet" href="Assets/Showrooms.css">
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
        <h1 class="hero-title u-underline">SHOWROOMS</h1>

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
include "db.php"; // your database connection

$query = 'SELECT * FROM "Guest_User_DB"."Showrooms" ORDER BY id ASC';
$result = pg_query($conn, $query);

if (!$result) {
    die("Query failed: " . pg_last_error($conn));
}
?>

<section class="showroom-area">
<?php 
if (pg_num_rows($result) > 0): 
    while ($row = pg_fetch_assoc($result)): 
?>
    <div class="showroom-item fade-trigger">
        <div class="showroom-thumb">
            <img src="<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['title']); ?>">
        </div>
        <div class="showroom-body">
            <h2><?php echo htmlspecialchars($row['title']); ?></h2>
            <p class="showroom-text">
                <?php echo htmlspecialchars($row['description']); ?>
            </p>
            <p class="showroom-specs"><?php echo htmlspecialchars($row['meta']); ?></p>
            
            <div class="showroom-cta">
                <?php if (strtoupper($row['status']) == 'CLOSED'): ?>
                    <button class="badge-closed">CLOSED</button>
                <?php else: ?>
                    <button class="badge-open">VISIT NOW</button>
                <?php endif; ?>
                <button class="btn-outline">VIEW DETAILS</button>
            </div>
        </div>
    </div>
<?php 
    endwhile; 
else:
    echo "<p>No showrooms found.</p>";
endif; 
?>
</section>

<!-- Card Section Ends  -->




<?php include 'Footer.php'; ?>
<script src="Assets/Hameburger.js"></script>
<script src="Assets/Showroom.js"></script>
<script src="Assets/Smother.js"></script> 
</body>
</html>