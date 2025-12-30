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
    <a href="#">Book Inquiry</a>
    <a href="#">Mail Us</a>
  </div>
</div>


      <button id="hamburger" class="circle-btn">☰</button>

<div id="overlay" class="menu-overlay"></div>

<aside id="sideMenu" class="side-menu">
  <button id="closeMenu" class="close-btn">✕</button>

  <div class="menu-top connect-area">
  <div class="connect">
    <span>Connect ▾</span>
  </div>
</div>


  <ul class="menu-links">
    <li><a href="../Guest Side/About Us.php">About Us</a></li>
    <li><a href="../Guest Side/Our Values.php">Our Values</a></li>
    <li><a href="../Guest Side/Our Projects.php">Our Projects</a></li>
    <li><a href="../Guest Side/Buyers Guid.php">Buyers Guide</a></li>
  </ul>

  <div class="menu-footer">
    <a href="#">FACEBOOK</a>
    <a href="#">INSTAGRAM</a>
    <a href="#">TWITTER</a>
    <a href="#">YOUTUBE</a>
  </div>
</aside>

    </div>
  </div>
</nav>

<style>
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
  font-size:34px;
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
<?php
// ...existing code...
?>



