<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link rel="stylesheet" href="Assets/temp.css">
</head>
<body>

   <!-- include 'loader.php'; ?> -->

  <!-- Navbar -->
  <?php include 'Navbar.php'; ?>
  <!-- Navbar ends -->

  <!-- Hero Section Starts-->
  <section class="hero" role="region" aria-label="Intro">
    <div class="hero-wrapper">
      <div class="hero-left reveal">
        <div class="hero-inner">
          <h1>The destination<br/>for your next property</h1>
          <p class="lead">
            AT
            <span class="rukshmani">RUKSHMANI</span> BUILDERS GROUP, WE STRONGLY BELIEVE IN
            QUALITY, TRUST &amp; COMMITMENT.
          </p>
          <a class="cta" href="#projects">Explore Projects</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Section Ends -->















<section class="section stories" aria-label="Client stories">
  <div class="container">
    <h2 class="section-title reveal">What our buyers say</h2>
    <p class="section-subtitle reveal">Real experiences from families staying in our projects.</p>

    <div class="stories-slider reveal">
      <div class="story active">
        <p>"Rukshmani Builders delivered our flat before time with exactly what was promised."</p>
        <span class="story-name">Patel Family • Rukshmani Residency</span>
      </div>
      <div class="story">
        <p>"Construction quality and ventilation in the flat is excellent. Parking is well planned."</p>
        <span class="story-name">Shah Family • Heights</span>
      </div>
      <div class="story">
        <p>"Their team guided us throughout the loan process and documentation very smoothly."</p>
        <span class="story-name">Joshi Family • Business Hub</span>
      </div>
    </div>

    <div class="stories-dots">
      <button class="dot active" data-index="0"></button>
      <button class="dot" data-index="1"></button>
      <button class="dot" data-index="2"></button>
    </div>
  </div>
</section>















  <?php include 'Scroll.php'; ?>

  <script src="Assets/temp.js"></script>
  <script src="Assets/Smother.js"></script>

  <!-- Simple scroll reveal JS -->
  <script>
    const reveals = document.querySelectorAll('.reveal');

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('show');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });

    reveals.forEach(el => observer.observe(el));
  </script>

  <script>
  const revealEls = document.querySelectorAll('.reveal');

  const io = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        // small delay for stagger
        const delay = entry.target.dataset.delay || 0;
        setTimeout(() => {
          entry.target.classList.add('show');
        }, delay);
        io.unobserve(entry.target);
      }
    });
  }, { threshold: 0.18 });

  revealEls.forEach((el, index) => {
    // group wise stagger
    el.dataset.delay = (index % 4) * 120;
    io.observe(el);
  });
</script>



<script>
  // filter logic
  const filterBtns = document.querySelectorAll('.filter-btn');
  const explorerCards = document.querySelectorAll('.explorer-card');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const type = btn.dataset.type;
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      explorerCards.forEach(card => {
        const cardType = card.dataset.type;
        if (type === 'all' || cardType === type) {
          card.style.display = 'block';
          setTimeout(() => {
            card.classList.add('show');
          }, 10);
        } else {
          card.classList.remove('show');
          setTimeout(() => {
            card.style.display = 'none';
          }, 250);
        }
      });
    });
  });

  // global reveal + stagger (same Observer tame hero ma pan use kari shako)
  const revealEls = document.querySelectorAll('.reveal');

  const io = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const delay = entry.target.dataset.delay || 0;
        setTimeout(() => entry.target.classList.add('show'), delay);
        io.unobserve(entry.target);
      }
    });
  }, { threshold: 0.16 });

  revealEls.forEach((el, idx) => {
    el.dataset.delay = (idx % 4) * 120;
    io.observe(el);
  });
</script>



<script>
  const counters = document.querySelectorAll('.counter');

  function runCounter(el){
    const target = +el.dataset.target;
    let current = 0;
    const steps = 80;
    const increment = target / steps;

    const update = () => {
      current += increment;
      if (current < target) {
        el.textContent = Math.floor(current);
        requestAnimationFrame(update);
      } else {
        el.textContent = target.toLocaleString();
      }
    };
    update();
  }

  // hook with IntersectionObserver already created above
  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting){
        runCounter(e.target);
        counterObserver.unobserve(e.target);
      }
    });
  }, { threshold: 0.5 });

  counters.forEach(c => counterObserver.observe(c));
</script>


<script>
  const stories = document.querySelectorAll('.story');
  const dots = document.querySelectorAll('.dot');
  let storyIndex = 0;
  let storyTimer;

  function showStory(index){
    stories.forEach((s, i) => {
      s.classList.toggle('active', i === index);
    });
    dots.forEach((d, i) => {
      d.classList.toggle('active', i === index);
    });
    storyIndex = index;
  }

  function startStoryAuto(){
    storyTimer = setInterval(() => {
      const next = (storyIndex + 1) % stories.length;
      showStory(next);
    }, 5000);
  }

  dots.forEach(dot => {
    dot.addEventListener('click', () => {
      clearInterval(storyTimer);
      const idx = +dot.dataset.index;
      showStory(idx);
      startStoryAuto();
    });
  });

  showStory(0);
  startStoryAuto();
</script>




<script>
  const revealEls = document.querySelectorAll('.reveal');

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      const el = entry.target;
      const delay = Number(el.dataset.delay || 0);
      setTimeout(() => {
        el.classList.add('show');
      }, delay);
      observer.unobserve(el);
    });
  }, { threshold: 0.18 });

  revealEls.forEach((el, i) => {
    el.dataset.delay = (i % 5) * 120; // thodi stagger
    observer.observe(el);
  });
</script>

</body>
</html>
