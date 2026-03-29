 // LENIS INIT
  const lenis = new Lenis({
    duration: 1.2,
    smooth: true,
    smoothTouch: true,
    easing: (t) => 1 - Math.pow(1 - t, 3),
  });

  function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
  }
  requestAnimationFrame(raf);

  // GSAP + LENIS CONNECT
  gsap.registerPlugin(ScrollTrigger);

  lenis.on('scroll', ScrollTrigger.update);

  gsap.ticker.add((time) => {
    lenis.raf(time * 1000);
  });

  gsap.ticker.lagSmoothing(0);




  gsap.to(".parallax", {
    y: -150,
    scrollTrigger: {
      trigger: ".parallax",
      scrub: true
    }
  });