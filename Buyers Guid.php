<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rukmani Realty-Buyer Guide</title>
   <link rel="icon" type="image/png" sizes="48x48" href="./Gallery/Title-img.png">
    <link rel="stylesheet" href="Assets/Buyer Guide.css">
</head>
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
        <h1>Buyer Guide</h1>
        <p class="lead">
          AT 
          <span class="rukshmani">RUKSHMANI</span> Streamline calculations with our convenient, accurate, and user-friendly estimation tools. These calculators cater to various functions including determining monthly payments, finding loan eligibility, and the precise measurements of area and distance.
        </p>
      </div>
    </div>
  </div>
</section>
    <!-- Hero Section Ends -->

 <!-- Emi calculators Section Starts  -->
<section class="emi-section luxury-emi">
  <div class="emi-wrapper">

    <div class="emi-header">
      <h2>EMI Calculator</h2>
      <p>Plan your dream home with precision and elegance.</p>
    </div>

    <div class="emi-flex">

      <!-- LEFT -->
      <div class="emi-left">

        <div class="emi-row">
          <label>Home Loan Amount</label>
          <input type="number" id="loanAmount">
          <input type="range" id="loanRange" min="100000" max="8000000" step="50000">
        </div>

        <div class="emi-row">
          <label>Interest Rate (%)</label>
          <input type="number" id="interestRate" step="0.1">
          <input type="range" id="interestRange" min="5" max="20" step="0.1">
        </div>

        <div class="emi-row">
          <label>Loan Tenure (Years)</label>
          <input type="number" id="loanTenure">
          <input type="range" id="tenureRange" min="1" max="30">
        </div>

      </div>

      <!-- RIGHT -->
      <div class="emi-right">

        <div class="chart-box">
          <canvas id="emiChart"></canvas>
        </div>

        <div class="emi-values">
          <div class="value-card">
            <span>Monthly EMI</span>
            <h3 id="emiAmount">₹ 0</h3>
          </div>

          <div class="value-card">
            <span>Total Interest</span>
            <h3 id="totalInterest">₹ 0</h3>
          </div>

          <div class="value-card">
            <span>Total Payment</span>
            <h3 id="totalPayment">₹ 0</h3>
          </div>
        </div>

      </div>

    </div>

  </div>
</section>
<!-- Emi calculators Section Ends  -->
<?php include 'Footer.php'; ?>
<script src="Assets/Hameburger.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script src="Assets/Smother.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>

<script src="Assets/Buyer Guide.js"></script>   
</body>
</html>