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

  let initialInnerHeight = window.innerHeight;

  function getTriggerHeight() {
    if (isHome) {
      return initialInnerHeight - 56;
    }
    return 200;
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

  // Initialer Aufruf
  updateNavbarPosition();
  window.addEventListener("scroll", updateNavbarPosition);

  // Bei Orientierung ändern: neue feste Höhe setzen
  window.addEventListener("orientationchange", () => {
    // Warte kurz, bis sich die Höhe stabilisiert hat
    setTimeout(() => {
      initialInnerHeight = window.innerHeight;
      updateNavbarPosition(); // Direkt aktualisieren
    }, 300);
  });
});

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
