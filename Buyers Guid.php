<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyer Guide</title>
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
<section class="emi-section">
  <div class="emi-wrapper">

    <div class="emi-header">
      <h2>EMI Calculator</h2>
      <p>Evaluate your EMI installments with our efficient EMI Calculator.</p>
    </div>

    <!-- Loan Amount -->
    <div class="emi-row">
      <label>Home Loan Amount</label>
      <input type="number" id="loanAmount" value="5000000">
      <input type="range" id="loanRange" min="100000" max="8000000" step="50000" value="5000000">
    </div>

    <!-- Interest -->
    <div class="emi-row">
      <label>Interest Rate (%)</label>
      <input type="number" id="interestRate" value="10.5" step="0.1">
      <input type="range" id="interestRange" min="5" max="20" step="0.1" value="10.5">
    </div>

    <!-- Tenure -->
    <div class="emi-row">
      <label>Loan Tenure (Years)</label>
      <input type="number" id="loanTenure" value="20">
      <input type="range" id="tenureRange" min="1" max="30" value="20">
    </div>

    <!-- Results -->
    <div class="emi-result">
      <div class="emi-values">
        <p>Loan EMI <strong id="emiAmount">₹ 0</strong></p>
        <p>Total Interest Payable <strong id="totalInterest">₹ 0</strong></p>
        <p>Total Payment <strong id="totalPayment">₹ 0</strong></p>
      </div>

      <div class="emi-chart">
  <canvas id="emiChart" width="300" height="300"></canvas>
</div>

    </div>

  </div>
</section>
<!-- Emi calculators Section Ends  -->

<script src="Assets/Hameburger.js"></script>
<script src="Assets/Smother.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>

<script src="Assets/Buyer Guide.js"></script>   
</body>
</html>