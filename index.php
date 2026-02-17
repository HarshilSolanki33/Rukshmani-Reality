<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="Assets/Stylesheet.css">
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
       <h1>
  <span class="u-underline">The destination</span><br>
  <span class="u-underline">for your next property</span>
</h1>

        <p class="lead">
          AT 
          <span class="rukshmani">RUKMANI</span> BUILDERS GROUP, WE TURN YOUR DREAM ADDRESS INTO A LIFETIME ASSET..
        </p>
        <a class="cta" href="../Guest Side/t1.php">Explore Projects</a>
      </div>
    </div>
  </div>
</section>
    <!-- Hero Section Ends -->

    <!-- Hero section slider starts  -->
    <!-- Hero section slider starts  -->
   <div class="hero-right">
  <div class="slider">
    <div class="slider-track" id="track">
      <!-- slider images -->
      <div class="slide"><img src="Gallery/Indexslider-1.jpg"></div>
      <div class="slide"><img src="Gallery/Indexslider-2.jpg"></div>
      <div class="slide"><img src="Gallery/Indexslider-3.jpg"></div>
      <div class="slide"><img src="Gallery/Indexslider-4.jpg"></div>
      <div class="slide"><img src="Gallery/Indexslider-5.jpg"></div>
      <div class="slide"><img src="Gallery/Indexslider-6.jpg"></div>
      <div class="slide"><img src="Gallery/Indexslider-7.jpg"></div>

      <!-- duplicate for loop -->
      <div class="slide"><img src="Gallery/Indexslider-1.jpg"></div>
      <div class="slide"><img src="Gallery/Indexslider-2.jpg"></div>
      <div class="slide"><img src="Gallery/Indexslider-3.jpg"></div>
      <div class="slide"><img src="Gallery/Indexslider-4.jpg"></div>
      <div class="slide"><img src="Gallery/Indexslider-5.jpg"></div>
      <div class="slide"><img src="Gallery/Indexslider-6.jpg"></div>
      <div class="slide"><img src="Gallery/Indexslider-7.jpg"></div>
      
    </div>
  </div>
</div>
<!-- Hero section slider ends  -->



    <!-- Ongoing Project section Starts -->
     <section class="projects">
   <h1 class="title u-underline animate">
  Ongoing Projects <span>(10)</span>
</h1>

    <div class="slider">
        <div class="project-grid" id="sliderTrack">

            <!-- Card -->
            <div class="project-card">
              <img src="Gallery/Homepage project-1.jpg">
              <div class="project-info">
              <h3>AURUM HEIGHTS</h3>
              <p>2/3 BHK Homes<br>Shela</p>
              <div class="arrow">→</div>
              </div>
            </div>
            <div class="project-card">
              <img src="Gallery/Homepage project-2.jpg">
              <div class="badge">✔</div>
              <div class="project-info">
              <h3>PLAZA</h3>
              <p>Retail & Offices<br>SG Highway</p>
              <div class="arrow">→</div>
              </div>
            </div>
            <div class="project-card">
              <img src="Gallery/Homepage project-3.jpg">
              <div class="project-info">
              <h3>GRAND CITY</h3>
              <p>2/3 BHK Homes<br>Shela</p>
              <div class="arrow">→</div>
              </div>
            </div>
            <div class="project-card">
              <img src="Gallery/Homepage project-4.jpg">
              <div class="badge">✔</div>
              <div class="project-info">
              <h3>VALLEY</h3>
              <p>2/3 BHK Homes<br>Shela</p>
              <div class="arrow">→</div>
              </div>
            </div>
            <div class="project-card">
              <img src="Gallery/Homepage project-5.jpg">
              <div class="project-info">
              <h3>LAKEVIEW ENCLAVE</h3>
              <p>Retail & Offices<br>SG Highway</p>
              <div class="arrow">→</div>
              </div>
            </div>
            <div class="project-card">
              <img src="Gallery/Homepage project-6.jpg">
              <div class="badge">✔</div>
              <div class="project-info">
              <h3>RISE</h3>
              <p>2/3 BHK Homes<br>Shela</p>
              <div class="arrow">→</div>
              </div>
            </div>
            <div class="project-card">
              <img src="Gallery/Homepage project-7.jpg">
              <div class="project-info">
              <h3>SKYVIEW</h3>
              <p>3 BHK Homes & Retail<br>Shela</p>
              <div class="arrow">→</div>
              </div>
            </div>
            
            <div class="project-card">
            <img src="Gallery/Collage-5.jpg">
            <div class="badge">✔</div>
            <div class="project-info">
              <h3>PARKWEST</h3>
              <p>2/3 BHK Homes<br>Shela</p>
              <div class="arrow">→</div>
            </div>
          </div>
          
          <div class="project-card">
            <img src="Gallery/Collage-6.jpg">
            <div class="project-info">
              <h3>THE TAJ HEIGHTS</h3>
              <p>4 & 5 BHK Homes<br>Ambli</p>
              <div class="arrow">→</div>
            </div>
          </div>
          
          <div class="project-card">
            <img src="Gallery/Collage-1.jpg">
            <div class="badge">✔</div>
            <div class="project-info">
              <h3>ORBIT</h3>
              <p>Retail & Offices<br>SG Highway</p>
              <div class="arrow">→</div>
            </div>
          </div>
          
        </div>
      </div>
</section>
<!-- Ongoing projects section ends  -->

<!-- Get Brochure Section starts  -->
<!-- Get Brochure Section -->
  <section class="section brochure-section">
    <div class="container">
      <div class="brochure-header reveal">
        <h2 class="u-underline">Get Brochure<sup>(17)</sup></h2>
      </div>

      <div class="brochure-table">
        <div class="brochure-table-head reveal">
          <span>NAME</span>
          <span>PROJECT TYPE</span>
          <span>LOCATION</span>
          
        </div>

        <div class="brochure-row reveal" onclick="openPopup('RUKSHMANI HEIGHTS')">
          <span class="project-name">RUKSHMANI HEIGHTS</span>
          <span class="project-type">3 BHK HOMES & RETAIL</span>
          <span class="project-location">KALAVAD - ROAD</span>
          
        </div>

        <div class="brochure-row reveal" onclick="openPopup('RUKSHMANI RESIDENCY')">
          <span class="project-name">RUKSHMANI RESIDENCY</span>
          <span class="project-type">4 BHK HOMES</span>
          <span class="project-location">150 FT RING - ROAD</span>
          
        </div>

        <div class="brochure-row reveal" onclick="openPopup('RUKSHMANI BUSINESS HUB')">
          <span class="project-name">RUKSHMANI BUSINESS HUB</span>
          <span class="project-type">RETAIL & OFFICE SEGMENTS</span>
          <span class="project-location">GONDAL - ROAD</span>
          
        </div>

        <div class="brochure-row reveal" onclick="openPopup('RUKSHMANI GREEN VALLEY')">
          <span class="project-name">RUKSHMANI GREEN VALLEY</span>
          <span class="project-type">PLOTTED COMMUNITY</span>
          <span class="project-location">AIRPORT - ROAD</span>
         
        </div>

        <div class="brochure-row reveal" onclick="openPopup('RUKSHMANI CITY PARK')">
          <span class="project-name">RUKSHMANI CITY PARK</span>
          <span class="project-type">3 BHK HOMES</span>
          <span class="project-location">KALAVAD - ROAD</span>
          
        </div>

        <div class="brochure-row reveal" onclick="openPopup('RUKSHMANI SILVER SPRINGS')">
          <span class="project-name">RUKSHMANI SILVER SPRINGS</span>
          <span class="project-type">PLOTTED COMMUNITY</span>
          <span class="project-location">LEKHAMBA - SANAND</span>
          
        </div>

        <div class="brochure-row reveal" onclick="openPopup('RUKSHMANI URBAN PARK')">
          <span class="project-name">RUKSHMANI URBAN PARK</span>
          <span class="project-type">3 BHK HOMES & RETAIL</span>
          <span class="project-location">AMBLI - S.P RING ROAD</span>
          
        </div>

        <div class="brochure-row reveal" onclick="openPopup('RUKSHMANI RESIDENCY')">
          <span class="project-name">RUKSHMANI RESIDENCY</span>
          <span class="project-type">4 BHK HOMES</span>
          <span class="project-location">150 FT RING - ROAD</span>
         
        </div>

        <div class="brochure-row reveal" onclick="openPopup('RUKSHMANI RESIDENCY')">
          <span class="project-name">RUKSHMANI RESIDENCY</span>
          <span class="project-type">4 BHK HOMES</span>
          <span class="project-location">150 FT RING - ROAD</span>
         
        </div>
        <div class="show-more-wrapper">
  <button id="showMoreBtn">Show More</button>
</div>

      </div>
    </div>
  </section>

<!-- Get Brochure Section ends  -->


<!-- Showcase section starts  -->
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
        <a href="#" class="showcase-button">View Projects</a>
      </div>

      <!-- RIGHT IMAGES -->
      <div class="showcase-photos">
        <div class="showcase-card card-portrait">
          <img src="gallery/Lakeview enclave-2.jpg" alt="Luxury Residence">
        </div>
        <div class="showcase-card card-landscape">
          <img src="gallery/Lakeview enclave-1.jpg" alt="Modern Interior">
        </div>
      </div>
    </div>
  </section>
<!-- Showcase section ends  -->

<!-- Project timeline section starts  -->
 <section class="process-white-gold">
    <div class="container">
      <h2 class="section-title reveal">Our Signature Process</h2>
      <p class="section-subtitle reveal">Excellence from first consultation to final possession</p>
      
      <div class="process-timeline-gold">
        <div class="process-card-gold reveal slide-left">
          <span class="step-circle">01</span>
          <h3>VIP Site Immersion</h3>
          <p>Exclusive guided tour of our premium sample residences with personalized lifestyle consultation and premium amenities showcase.</p>
        </div>
        
        <div class="process-card-gold reveal slide-right">
          <span class="step-circle">02</span>
          <h3>Signature Plan Selection</h3>
          <p>Curated selection of exclusive unit types, prime penthouse floors, and breathtaking skyline views tailored to your sophisticated lifestyle.</p>
        </div>
        
        <div class="process-card-gold reveal slide-left">
          <span class="step-circle">03</span>
          <h3>White-Glove Booking</h3>
          <p>Seamless priority booking with dedicated concierge service, premium financing solutions, and VIP home loan assistance.</p>
        </div>
        
        <div class="process-card-gold reveal slide-right">
          <span class="step-circle">04</span>
          <h3>Prestige Possession</h3>
          <p>Timely handover of your architectural masterpiece with comprehensive documentation, luxury home staging, and celebratory handover ceremony.</p>
        </div>
      </div>
    </div>
  </section>

<!-- Project timeline section ends   -->

<!-- Residence topology starts  -->
<section class="section unit-plans" aria-label="Unit plans">
  <div class="container">
    <h2 class="section-title reveal">Residence typologies</h2>
    <p class="section-subtitle reveal">Select from spacious 3 &amp; 4 BHK residences.</p>

    <div class="unit-grid">
      <article class="unit-card reveal">
        <div class="unit-img">
          <img src="Gallery/Ashwairyam-1.avif" alt="3 BHK floor plan">
          <div class="unit-overlay">
            <span>3 BHK Signature</span>
            <p>Approx. 1850 sq.ft | East facing | Corner unit</p>
          </div>
        </div>
        <div class="unit-meta">
          <h3>Type A • 3 BHK</h3>
          <p>Large balcony | Separate utility | 2 covered parking</p>
        </div>
      </article>

      <article class="unit-card reveal">
        <div class="unit-img">
          <img src="Gallery/Lakeview enclave-1.jpg" alt="4 BHK floor plan">
          <div class="unit-overlay">
            <span>4 BHK Sky</span>
            <p>Approx. 2400 sq.ft | Dual aspect | Private deck</p>
          </div>
        </div>
        <div class="unit-meta">
          <h3>Type B • 4 BHK</h3>
          <p>Corner residence | Exclusive lift lobby | 3 parking</p>
        </div>
      </article>
    </div>
  </div>
</section>
<!-- Residence topology ends  -->



 
<!-- indies page numbers starts  -->
 <section class="lux-stats">
  <div class="lux-stats-inner">

    <div class="lux-stat">
      <h2 data-count="25">0</h2>
      <p>Years of Excellence</p>
    </div>

    <div class="lux-stat">
      <h2 data-count="40">0</h2>
      <p>Projects Delivered</p>
    </div>

    <div class="lux-stat">
      <h2 data-count="1200">0</h2>
      <p>Happy Families</p>
    </div>

    <div class="lux-stat">
      <h2 data-count="15">0</h2>
      <p>Ongoing Developments</p>
    </div>

  </div>
</section>
<!-- indies page numbers ends  -->





<?php include 'Scroll.php'; ?>
<?php include 'footer.php'; ?>
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