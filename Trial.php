<section class="split-section">
  <div class="split-container">

    <!-- LEFT CONTENT -->
    <div class="split-content">
      <span class="tagline">THE FUTURE IS NOW</span>

      <h2>
        It's time to give back to<br>
        Mother Earth <em>what's hers.</em>
      </h2>

      <p>
        We recognize the critical role that infrastructure development plays
        in creating a holistically sustainable future for ourselves and the
        upcoming generations.
      </p>

      <a href="#" class="cta">Learn More</a>
    </div>

    <!-- RIGHT IMAGE -->
    <div class="split-image">
      <img src="Gallery/earth-in-hand.png" alt="Earth in hand">
    </div>

  </div>
</section>
<style>
/* ===== Split Section ===== */
.split-section {
  padding: 100px 10px;
  background: #f5e5c8ff;
}

.split-container {
  max-width: 100%;
  width: 100%;
  height: 450px;
  margin: auto;
  display: grid;
  grid-template-columns: 1.1fr 1fr;
  gap: 40px;
  align-items: center;
}

/* LEFT CONTENT */
.split-content .tagline {
  font-size: 25px;
  letter-spacing: 2px;
  color: #777;
  margin-bottom: 18px;
  display: inline-block;
}

.split-content h2 {
  font-size: 50px;
  font-weight: 400;
  line-height: 1.1;
  color: #3e6b2f;
  margin-bottom: 20px;
  font-family: Georgia, serif;
}

.split-content h2 em {
  font-style: italic;
}

.split-content p {
  font-size: 18px;
  line-height: 1.8;
  max-width: 520px;
  margin-bottom: 24px;
  color: #444;
}

.cta {
  display: inline-block;
  padding: 10px 26px;
  border-radius: 30px;
  background: #000;
  color: #fff;
  text-decoration: none;
  font-size: 16px;
}

/* RIGHT IMAGE */
.split-image {
  display: flex;
  justify-content: flex-end;
}

/* 👇 IMAGE SIZE CONTROL HERE */
.split-image img {
  width: 720px;      /* 👈 width control */
  max-width: 100%;
  height: auto;      /* 👈 height auto */
}

/* ===== Responsive ===== */
@media (max-width: 992px) {
  .split-container {
    grid-template-columns: 1fr;
    text-align: center;
  }

  .split-image {
    justify-content: center;
    margin-top: 40px;
  }

  .split-content h2 {
    font-size: 34px;
  }
}
</style>