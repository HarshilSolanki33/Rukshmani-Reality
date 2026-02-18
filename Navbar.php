<?php
// ...existing code...
?>
<nav class="site-nav">
  <div class="nav-inner">
    <a class="logo" href="../Guest Side/index.php">
      <img src="Gallery/Realty Logo.png" alt="Site logo">
    </a>

    <div class="nav-actions">
      <div class="connect">
        <button class="connect-btn">
               Connect Us <span class="caret">▾</span>
        </button>

  <div class="connect-menu">
    <a href="./Book Inquiry.php">Book Inquiry</a>
    <a href="#">Mail Us</a>
  </div>
</div>

<!-- Profile Button Starts  -->
<a href="../Guest Side/SignUp.php" class="profile-btn">
    <img src="Gallery/user.png" alt="Profile">
</a>
<!-- Profile Button Ends  -->

      <button id="hamburger" class="circle-btn">☰</button>

<div id="overlay" class="menu-overlay"></div>

<aside id="sideMenu" class="side-menu">
  <button id="closeMenu" class="close-btn">✕</button>

  <div class="menu-top connect-area">
  <div class="connect">
    <span>Connect ▾</span>
  </div>
</div>

<!-- Hameburger starts  -->
 <?php include "db.php"; ?>

<?php
$query = "SELECT * FROM hameburger ORDER BY id ASC";
$result = pg_query($conn, $query);
?>

<ul class="menu-links">
    <?php while($row = pg_fetch_assoc($result)): ?>

        <?php if ($row['is_button'] == 't'): ?>
            <li><button class="popup-trigger menu-popup-btn"><?= $row['label'] ?></button></li>
        <?php else: ?>
            <li><a href="<?= $row['link'] ?>"><?= $row['label'] ?></a></li>
        <?php endif; ?>

    <?php endwhile; ?>
</ul>



  <div class="menu-footer">
    <a href="#">FACEBOOK</a>
    <a href="#">INSTAGRAM</a>
    <a href="#">TWITTER</a>
    <a href="#">YOUTUBE</a>
  </div>
</aside>
<!-- Hamburger Ends  -->

    </div>
  </div>
</nav>

<style>
  /* Profile Button */
.profile-btn {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    overflow: hidden;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border: 1px solid rgba(0,0,0,0.35);
    background: #fff;
    cursor: pointer;
    transition: transform .4s ease, box-shadow .4s ease, border-color .4s ease;
}

.profile-btn img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Hover Effect */
.profile-btn:hover {
    transform: scale(1.1);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    border-color: #000;
}

/* Mobile Size Better */
@media (max-width: 768px){
    .profile-btn {
        width: 42px;
        height: 42px;
    }
}


  *{
  margin:0;
  padding:0;
  box-sizing:border-box;
}

html, body{
  width:100%;
  height:auto;
  overflow-x:hidden;   /* 🔥 side scroll / gap fix */
  overflow-y: auto;
}

.site-nav{
    width:100%;
    padding:18px 28px;
    box-sizing:border-box
}
.nav-inner{
    display:flex;
    align-items:center;
    justify-content:space-between;
    max-width:1400px;
    margin:0 auto
}
.logo img{
    /* increase logo size only */
    height:150px;
    width:auto;
    display:block;
}
.nav-actions{
    display:flex;
    align-items:center;
    gap:16px
}
/* Wrapper */
.connect{
  position:relative;
}

/* Button */
.connect-btn{
  background:#161616;
  color:#fff;
  border:0;
  padding:10px 18px;
  border-radius:999px;
  font-size:15px;
  cursor:pointer;
  display:flex;
  align-items:center;
  gap:8px;
}

/* Caret animation */
.connect-btn .caret{
  transition:transform .3s ease;
}

/* Menu */
.connect-menu{
  position:absolute;
  top:100%;          /* exact niche */
  right:0;
  margin-top:10px;

  background:#fff;
  border-radius:10px;
  box-shadow:0 10px 30px rgba(0,0,0,.15);
  overflow:hidden;

  /* 🔥 Hidden by default */
  opacity:0;
  visibility:hidden;
  transform:translateY(-10px);
  transition:
    opacity .3s ease,
    transform .3s ease,
    visibility .3s ease;
}

/* Menu items */
.connect-menu a{
  display:block;
  padding:12px 18px;
  color:#111;
  text-decoration:none;
  white-space:nowrap;
  transition:background .2s ease;
}

.connect-menu a:hover{
  background:#f3f3f3;
}

/* 🌟 HOVER EFFECT */
.connect:hover .connect-menu{
  opacity:1;
  visibility:visible;
  transform:translateY(0);
}

/* Caret rotate on hover */
.connect:hover .caret{
  transform:rotate(180deg);
}

/* Existing button styles (from your code) */
.circle-btn{
    width:48px;
    height:48px;
    border-radius:50%;
    background:#fff;
    border:1px solid rgba(0,0,0,0.35);
    display:inline-flex;
    align-items:center;
    justify-content:center;
    cursor:pointer;
    transition: transform .6s ease, box-shadow .4s ease, border-color .4s ease;
}

.hamburger{
    display:flex;
    flex-direction:column;
    gap:4px;
    transition: transform .6s ease;
}

.hamburger span{
    width:18px;
    height:2px;
    background:#000;
    border-radius:2px;
}

.circle-btn:hover{
    transform:scale(1.08) rotate(360deg);
    box-shadow:0 12px 28px rgba(0,0,0,.18);
    border-color:#000;
}

.circle-btn:active{
    transform:scale(0.96) rotate(360deg);
    box-shadow:0 6px 14px rgba(0,0,0,.12);
}

/* default visible */
.connect-area{
  display:block;
}

/* sidebar open થયા પછી hide */
.side-menu.show .connect-area{
  display:none;
}

/* SIDE MENU STYLING */
.side-menu{
  position:fixed;
  top:0;
  right:-100%;
  width:420px;
  height:100%;
  background:linear-gradient(180deg,#1a1a1a,#0f0f0f);
  padding:40px;
  box-sizing:border-box;
  transition:.6s ease;
  z-index:999;
  color:#fff;
}

.side-menu.show{
  right:0;
}

/* Close button */
.close-btn{
  position:absolute;
  top:25px;
  right:25px;
  width:42px;
  height:42px;
  color: #000;
  border-radius:50%;
  border:none;
  font-size:20px;
  cursor:pointer;
}

/* Links */
.menu-links{
  list-style:none;
  padding:80px 0 0;
  margin:0;
}

.menu-links li{
  margin-bottom:26px;
}

.menu-links a{
  text-decoration:none;
  font-size:28px;
  color:#fff;
  transition:.3s;
}

.menu-links a:hover{
  opacity:.6;
}

.menu-links .muted a{
  color:#777;
}

/* Footer socials */
.menu-footer{
  position:absolute;
  bottom:40px;
  left:40px;
  display:flex;
  gap:20px;
  font-size:12px;
  letter-spacing:1px;
}

.menu-footer a{
  color:#aaa;
  text-decoration:none;
}

/* Transparent overlay behind menu */
.menu-overlay{
  position:fixed;
  inset:0;
  background:rgba(0,0,0,.5);
  opacity:0;
  pointer-events:none;
  transition:.4s;
  z-index:998;
}
.menu-overlay.show{
  opacity:1;
  pointer-events:auto;
}



/* ============================= */
/* TABLET (max-width: 992px) */
/* ============================= */
@media (max-width: 992px){
  .logo img{
    height:90px;
  }

  .side-menu{
    width:380px;
    padding:30px;
  }

  .menu-links a{
    font-size:30px;
  }
}

/* ============================= */
/* MOBILE (max-width: 768px) */
/* ============================= */
@media (max-width: 768px){
  .site-nav{
    padding:14px 18px;
  }

  .logo img{
    height:100px;
  }

  .connect-btn{
    padding:8px 14px;
    font-size:14px;
  }

  .circle-btn{
    width:45px;
    height:45px;
    font-size:18px;
    color: #000;
  }

  .side-menu{
    width:320px;        /* 🔥 full width mobile */
    padding:28px 22px;
  }

  .menu-links{
    padding-top:70px;
  }

  .menu-links a{
    font-size:26px;
  }

  .menu-footer{
    left:22px;
    bottom:25px;
    flex-wrap:wrap;
    gap:14px;
  }
}

/* ============================= */
/* SMALL MOBILE (max-width: 480px) */
/* ============================= */
@media (max-width: 480px){
  .menu-links a{
    font-size:22px;
  }

  .menu-links li{
    margin-bottom:20px;
  }

  .close-btn{
    width:36px;
    height:36px;
    font-size:18px;
  }
}

</style>

<script>
document.getElementById('connectBtn').addEventListener('click', function(){
  const menu = document.getElementById('connectMenu');
  const expanded = this.getAttribute('aria-expanded') === 'true';
  this.setAttribute('aria-expanded', !expanded);
  if (menu.hasAttribute('hidden')) menu.removeAttribute('hidden'); else menu.setAttribute('hidden','');
});

document.getElementById('hamburger').addEventListener('click', function(){
  // toggle a class or open your side menu; this is a placeholder
  const expanded = this.getAttribute('aria-expanded') === 'true';
  this.setAttribute('aria-expanded', !expanded);
  this.classList.toggle('open');
});
</script>

<!-- Popup Form Overlay -->
<div id="inquiryOverlay" class="overlay">
    <div class="popup">
        <h2>Property Inquiry</h2>
        <form id="inquiryForm">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <input type="text" id="message" name="message" placeholder="Preferred project?">
            </div>
            <button type="submit" class="btn btn-submit">Send Inquiry</button>
            <button type="button" class="btn btn-close">Close</button>
        </form>
    </div>
</div>

<style>
:root {
    --bg-soft: #ffffff;
    --gold: rgb(185,135,75);
    --gold-light: rgba(185,135,75,0.2);
}
.overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.6);
    backdrop-filter: blur(5px);
    z-index: 10000;
    opacity: 0;
    transition: opacity 0.3s ease;
    justify-content: center;
    align-items: center;
}
.overlay.show {
    display: flex;
    opacity: 1;
}
.popup {
    background: var(--bg-soft);
    padding: 2rem;
    border-radius: 20px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.3);
    border: 1px solid rgba(255,255,255,0.5);
    backdrop-filter: blur(10px);
    width: 90%;
    max-width: 400px;
    text-align: center;
    opacity: 0;
    transform: scale(0.7) translateY(20px);
    animation: fadeInUp 0.4s ease-out forwards;
}
@keyframes fadeInUp {
    to { opacity: 1; transform: scale(1) translateY(0); }
}
.popup h2 { color: var(--gold); margin-bottom: 1rem; }
.form-group { margin-bottom: 1rem; text-align: left; }
label { display: block; color: #666; margin-bottom: 0.5rem; font-weight: 500; }
input {
    width: 100%; padding: 12px; border: 1px solid var(--gold-light);
    border-radius: 10px; font-size: 16px; box-sizing: border-box;
    transition: border 0.3s ease;
}
input:focus {
    outline: none; border-color: var(--gold); box-shadow: 0 0 10px var(--gold-light);
}
.btn {
    width: 100%; padding: 12px; border: none; border-radius: 10px;
    cursor: pointer; font-size: 16px; margin-top: 0.5rem;
    transition: all 0.3s ease;
}
.btn-submit { background: var(--gold); color: white; }
.btn-submit:hover { transform: translateY(-2px); box-shadow: 0 5px 15px var(--gold-light); }
.btn-close { background: transparent; color: #999; border: 1px solid #eee; }
.btn-close:hover { background: #f0f0f0; }
body.modal-open { overflow: hidden; }
@media (max-width: 768px) { .popup { margin: 1rem; padding: 1.5rem; } }
.menu-popup-btn { 
    background: none; 
    border: none; 
    color: #fff; 
    font-size: 28px; 
    cursor: pointer; 
    padding: 0;
}
.menu-popup-btn:hover { opacity: 0.6; }
</style>

<script>
function openPopup() {
    document.getElementById('inquiryOverlay').classList.add('show');
    document.body.classList.add('modal-open');
}
function closePopup() {
    document.getElementById('inquiryOverlay').classList.remove('show');
    document.body.classList.remove('modal-open');
}

document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.popup-trigger').forEach(trigger => {
        trigger.addEventListener('click', function(e) {
            e.preventDefault();
            openPopup();
        });
    });
    
    const overlay = document.getElementById('inquiryOverlay');
    if (overlay) {
        overlay.addEventListener('click', function(e) {
            if (e.target === this) closePopup();
        });
    }
    
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closePopup();
    });
    
    const closeBtn = document.querySelector('.btn-close');
    if (closeBtn) {
        closeBtn.addEventListener('click', closePopup);
    }
    
    const form = document.getElementById('inquiryForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Inquiry sent to Rukmani Realty!');
            this.reset();
            closePopup();
        });
    }
});
</script>
<?php
// ...existing code...
?>



