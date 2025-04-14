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

var nav = document.querySelector("nav");
var isHome = document.getElementById("home");

window.addEventListener("scroll", function () {
  let height = 200;
  if (isHome) {
    height = window.innerHeight - 50;
  }
  if (window.scrollY > height) {
    nav.classList.add("fixed-top");
    nav.classList.remove("navbar-absolute");
  } else {
    nav.classList.remove("fixed-top");
    nav.classList.add("navbar-absolute");
  }
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

(function () {
  // Nur auf mobilen Geräten aktivieren
  const isMobile = /Mobi|Android|iPhone|iPad|iPod/i.test(navigator.userAgent);
  if (!isMobile) return;

  const TARGET_SELECTOR = ".video-height";
  const DEBOUNCE_DELAY = 100;
  let scrollTimeout;

  function updateViewportHeight() {
    const vh = window.innerHeight;
    const elements = document.querySelectorAll(TARGET_SELECTOR);
    elements.forEach((el) => {
      el.style.height = `${vh}px`;
    });
  }

  function debouncedUpdate() {
    clearTimeout(scrollTimeout);
    scrollTimeout = setTimeout(updateViewportHeight, DEBOUNCE_DELAY);
  }

  // Initiales Setzen
  updateViewportHeight();

  // Events
  window.addEventListener("resize", debouncedUpdate);
  window.addEventListener("orientationchange", debouncedUpdate);
  window.addEventListener("scroll", debouncedUpdate);
})();
