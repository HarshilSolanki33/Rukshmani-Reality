document.addEventListener("DOMContentLoaded", function () {

  const tabs = document.querySelectorAll(".tab-btn");
  const contents = document.querySelectorAll(".tab-content");

  tabs.forEach((tab, index) => {
    tab.addEventListener("click", () => {

      // remove active from all tabs
      tabs.forEach(t => {
        t.classList.remove("border-black");
        t.classList.add("border-transparent", "text-gray-400");
      });

      // hide all content
      contents.forEach(c => c.classList.add("hidden"));

      // active tab
      tab.classList.add("border-black");
      tab.classList.remove("border-transparent", "text-gray-400");

      // show current content
      document.getElementById("content" + (index + 1)).classList.remove("hidden");

    });
  });

});