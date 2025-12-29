<head>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
</head>

<footer class="footer" id="footer">
  <div class="footer-left">
    <h2>Sales Inquiry</h2>
    <p>
      With over 45 years of excellence in real estate development, Rukshmani Group
crafts thoughtfully designed residential and commercial spaces that stand the
test of time.
    </p>
    <button>Enquire Now</button>

    <h2 class="mt">Locate Us</h2>
    <p>
      Experience our world of thoughtfully planned developments at our corporate
campus, where innovation, trust, and quality come together to shape landmark
real estate destinations.

    </p>
    <button>Visit Corporate Office</button>
  </div>

  <div class="footer-line" id="footerLine"></div>

  <div class="footer-right">
    <div class="block">
  <h4>QUICK LINKS</h4>
  <div class="quick-links">
    <a href="#">RE-DEVELOPMENT</a>
    <a href="#">JOIN US</a>
    <a href="#">BLOGS BOARD</a>
  </div>
</div>


    <div class="block">
      <h4>EMAIL</h4>
      <p>rukshmani@gmail.com</p>
    </div>

    <div class="block">
  <h4>LEGAL</h4>
  <div class="legal-links">
    <a href="#">DISCLAIMER</a>
    <a href="#">RERA DISCLAIMER</a>
  </div>
</div>


   <div class="block">
  <h4>SOCIALS</h4>
  <div class="social-links">
    <a href="#">FACEBOOK</a>
    <a href="#">INSTAGRAM</a>
    <a href="#">TWITTER</a>
    <a href="#">YOUTUBE</a>
    <a href="#">WE’RE SOCIAL</a>
  </div>
</div>


    <div class="block">
      <h4>DESIGNED BY</h4>
      <p>Harshil</p>
    </div>

    <p class="copyright">
      © 2025 RUKSHMANI GROUP
    </p>
  </div>
</footer>



<!-- CSS  -->
<style>
 body {
  margin: 0;
  font-family: "Georgia", serif;
}

.footer {
  display: flex;
   background: radial-gradient(circle at top, #b9944fff, #948679ff);
  color: #fff;
  padding: 20px 100px;
}

.footer-left {
  display: flex;
  flex-direction: column;
  align-items: center;       /* center horizontally */
  text-align: center;
}
.footer-right {
  width: 85%;
}

.footer-left h2 {
  font-family: 'Playfair Display', serif;
  font-size: 40px;
  font-weight: 500;
  margin-bottom: 24px;
}

.footer-left p,
.footer-right p {
  font-family: 'Inter', sans-serif;
  font-size: 15px;
  font-weight: 400;
  color: #d5d5d5;
}

.footer-left button {
  background: #fff;
  color: #000;
  border: none;
  padding: 10px 20px;
  border-radius: 30px;
  cursor: pointer;
}

.footer-left .mt {
  margin-top: 80px;
}

/* Middle Line */
.footer-line {
  width: 3px;
  background: #666;
  height: 490px;              /* full height */
  margin: 0 60px;
  transform: scaleY(0);       /* start small */
  transform-origin: center;   /* middle mathi grow */
  transition: transform 1.4s ease-in-out;
}

/* Active animation */
.footer-line.active {
  transform: scaleY(1);
}

/* Right side */
.footer-right h4 {
  font-family: 'Inter', sans-serif;
  font-size: 13px;
  letter-spacing: 1.2px;
  text-transform: uppercase;
  color: #ffffffff;
}
.block {
  margin-bottom: 30px;
}

.copyright {
  margin-top: 40px;
  font-size: 13px;
  color: #aaa;
}
.quick-links {
  display: flex;
  gap: 28px;              /* baju-baju space */
  margin-top: 12px;
}

.quick-links a {
  font-family: 'Inter', sans-serif;
  font-size: 14px;
  color: #cdbebeff;
  text-decoration: none;
  letter-spacing: 0.4px;
  position: relative;
}

/* Optional hover effect */
.quick-links a::after {
  content: "";
  position: absolute;
  bottom: -4px;
  left: 0;
  width: 0;
  height: 1px;
  background: #fff;
  transition: width 0.3s ease;
}

.quick-links a:hover::after {
  width: 100%;
}
.legal-links,
.social-links {
  display: flex;
  gap: 26px;
  margin-top: 12px;
  flex-wrap: wrap;   /* small screen mate */
}

.legal-links a,
.social-links a {
  font-family: 'Inter', sans-serif;
  font-size: 14px;
  color: #fff;
  text-decoration: none;
  letter-spacing: 0.4px;
  position: relative;
}

/* Hover underline animation */
.legal-links a::after,
.social-links a::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -4px;
  width: 0;
  height: 1px;
  background: #fff;
  transition: width 0.3s ease;
}

.legal-links a:hover::after,
.social-links a:hover::after {
  width: 100%;
}


/* =========================
   LARGE SCREENS (Default)
========================= */
/* (Tamaro existing CSS j use thase) */


/* =========================
   LAPTOPS & SMALL DESKTOP
========================= */
@media (max-width: 1200px) {
  .footer {
    padding: 40px 60px;
  }

  .footer-left h2 {
    font-size: 36px;
  }

  .footer-line {
    height: 450px;
    margin: 0 40px;
  }
}


/* =========================
   TABLETS
========================= */
@media (max-width: 992px) {
  .footer {
    flex-direction: column;
    padding: 50px 40px;
  }

  .footer-left,
  .footer-right {
    width: 100%;
  }

  .footer-left {
    margin-bottom: 40px;
  }

  /* Vertical line → Horizontal line */
  .footer-line {
    width: 100%;
    height: 1px;
    margin: 40px 0;
    transform: scaleX(0);
    transform-origin: center;
  }

  .footer-line.active {
    transform: scaleX(1);
  }

  .footer-left h2 {
    font-size: 34px;
  }

  .footer-left p {
    max-width: 600px;
  }
}


/* =========================
   MOBILE
========================= */
@media (max-width: 576px) {
  .footer {
    padding: 40px 20px;
  }

  .footer-left h2 {
    font-size: 28px;
    margin-bottom: 18px;
  }

  .footer-left p,
  .footer-right p {
    font-size: 14px;
    line-height: 1.6;
    margin-bottom: 16px;
  }

  .footer-left button {
    padding: 10px 26px;
    font-size: 14px;
  }

  .footer-left .mt {
    margin-top: 50px;
  }

  .quick-links,
  .legal-links,
  .social-links {
    gap: 18px;
  }

  .footer-right h4 {
    font-size: 14px;
  }

  .block {
    margin-bottom: 24px;
  }

  .copyright {
    text-align: center;
    margin-top: 30px;
  }
}


</style>



<!-- Java Script  -->
 <script>
  const footer = document.getElementById("footer");
  const line = document.getElementById("footerLine");

  const observer = new IntersectionObserver(
    entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          line.classList.add("active");
        }
      });
    },
    { threshold: 0.3 }
  );

  observer.observe(footer);
</script>
