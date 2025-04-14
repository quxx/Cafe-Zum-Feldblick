// Webpack Imports
import * as bootstrap from "bootstrap";

(function () {
  "use strict";

  // Focus input if Searchform is empty
  [].forEach.call(document.querySelectorAll(".search-form"), (el) => {
    el.addEventListener("submit", function (e) {
      var search = el.querySelector("input");
      if (search.value.length < 1) {
        e.preventDefault();
        search.focus();
      }
    });
  });

  // Initialize Popovers: https://getbootstrap.com/docs/5.0/components/popovers
  var popoverTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="popover"]')
  );
  var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl, {
      trigger: "focus",
    });
  });
})();

// Sticky Navbar

document.addEventListener("DOMContentLoaded", function () {
  const nav = document.querySelector("nav");
  const isHome = document.getElementById("home");

  function getTriggerHeight() {
    // Falls Home-Sektion vorhanden, nutze exakte Höhe
    if (isHome) {
      return window.innerHeight - nav.offsetHeight; // Hero-Höhe minus Navbar-Höhe
    }
    return 200; // Default für Unterseiten
  }

  function updateNavbarPosition() {
    const triggerHeight = getTriggerHeight();

    if (window.scrollY > triggerHeight) {
      nav.classList.add("fixed-top");
      nav.classList.remove("navbar-absolute", "isFront");
    } else {
      nav.classList.remove("fixed-top");
      nav.classList.add("navbar-absolute");
      if (isHome) {
        nav.classList.add("isFront");
      }
    }
  }

  // Events
  window.addEventListener("scroll", updateNavbarPosition);
  window.addEventListener("resize", updateNavbarPosition);
  updateNavbarPosition(); // Initial aufrufen
});

// var navbrand = document.getElementById("nav-brand");

// window.addEventListener("scroll", function () {
//   if (window.pageYOffset > 100) {
//     navbrand.classList.remove("hide");
//   } else {
//     navbrand.classList.add("hide");
//   }
// });

// Get the button
const scrollToTopBtn = document.getElementById("scrollToTopBtn");

// Function to show or hide the button based on scroll position
window.onscroll = function () {
  if (
    document.body.scrollTop > 100 ||
    document.documentElement.scrollTop > 100
  ) {
    scrollToTopBtn.classList.add("show");
  } else {
    scrollToTopBtn.classList.remove("show");
  }
};
