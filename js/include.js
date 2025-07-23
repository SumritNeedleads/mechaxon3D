// js/include.js
document.addEventListener("DOMContentLoaded", function () {
  // Inject header
  fetch("/components/header.html")
    .then(res => res.text())
    .then(data => {
      document.getElementById("header-placeholder").innerHTML = data;

      // Enable hamburger toggle
      const hamburger = document.getElementById("hamburger");
      const mobileMenu = document.getElementById("mobile-menu");

      hamburger.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
      });
    });
});


// js/footer.js
document.addEventListener("DOMContentLoaded", function () {
  fetch("components/footer.html")
    .then((res) => res.text())
    .then((data) => {
      document.getElementById("footer-container").innerHTML = data;
    })
    .catch((err) => console.error("Footer loading error:", err));
});
