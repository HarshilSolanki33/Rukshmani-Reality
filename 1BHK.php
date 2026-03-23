<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rukmani Realty-1 BHK Properties</title>
   <link rel="icon" type="image/png" sizes="48x48" href="./Gallery/Title-img.png">
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
 <?php
include "db.php";

$query = 'SELECT * FROM single_properties ORDER BY id ASC';
$result = pg_query($conn, $query);

if (!$result) {
    die("Query failed: " . pg_last_error($conn));
}
?>

<section class="property-wrapper">
    <?php 
    if (pg_num_rows($result) > 0): 
        while ($row = pg_fetch_assoc($result)): 
    ?>
        <div class="property-card reveal">
            <div class="property-image">
                <img src="<?php echo htmlspecialchars($row['image']); ?>" alt="Property Image">
            </div>
            <div class="property-content">
                <h2><?php echo htmlspecialchars($row['title']); ?></h2>
                <p class="property-desc">
                    <?php echo htmlspecialchars($row['description']); ?>
                </p>
                <p class="property-meta"><?php echo htmlspecialchars($row['meta']); ?></p>
                <p class="property-rent"><?php echo htmlspecialchars($row['rent']); ?></p>
                
                <div class="action-buttons">
                    <?php 
                    if (strtoupper($row['status']) == 'RENTED'): 
                    ?>
                        <button class="status-sold">RENTED</button>
                    <?php else: ?>
                        <button class="action-book" onclick="openPopup()">BOOK NOW</button>
                    <?php endif; ?>

                    <button class="action-view">VIEW DETAILS</button>
                </div>
            </div>
        </div>
        <?php 
        endwhile; 
    else:
        echo "<p>No properties found.</p>";
    endif; 
    ?>
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