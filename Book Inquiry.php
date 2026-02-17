<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Rukshmani Reality – Book Inquiry</title>
<link rel="stylesheet" href="Book inquiry.css">
<link rel="icon" type="image/png" href="../Assets/Logo/favicon.png">
</head>

<body>

<div class="bg"></div>

<section class="inquiry-wrapper">

  <h1 class="title">
    Book Inquiry – Rukshmani Reality
  </h1>

  <p class="subtitle">
    Tell us what you’re looking for – we’ll get back within minutes.
  </p>

  <form id="inquiryForm" class="glass-card">

    <div class="form-group">
      <input type="text" id="name" required>
      <label>Your Name</label>
    </div>

    <div class="form-group">
      <input type="tel" id="phone" required>
      <label>Mobile Number</label>
    </div>

    <div class="form-group">
      <input type="email" id="email" required>
      <label>Email Address</label>
    </div>

    <div class="form-group">
      <select id="bhk">
        <option value="" disabled selected>Select Property Type</option>
        <option>1 BHK</option>
        <option>2 BHK</option>
        <option>3 BHK</option>
        <option>Penthouse</option>
        <option>Villa</option>
      </select>
    </div>

    <div class="form-group">
      <textarea id="msg" rows="3" required></textarea>
      <label>Your Requirements</label>
    </div>

    <button type="submit" class="submit-btn">
      Send Inquiry
    </button>

  </form>

</section>

<div class="success-popup" id="successBox">
  <div class="tick">✔</div>
  <h2>Inquiry Submitted</h2>
  <p>Our team from Rukshmani Reality will contact you shortly.</p>
  <button onclick="closeSuccess()">OK</button>
</div>

<script src="Book inquiry.js"></script>
</body>
</html>
