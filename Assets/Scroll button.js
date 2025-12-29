const scrollBtn = document.getElementById("scrollTopBtn");

  window.addEventListener("scroll", function () {
    if (document.documentElement.scrollTop > 300 || document.body.scrollTop > 300) {
      scrollBtn.style.display = "flex";
      scrollBtn.style.alignItems = "center";
      scrollBtn.style.justifyContent = "center";
    } else {
      scrollBtn.style.display = "none";
    }
  });

  scrollBtn.addEventListener("click", function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  });