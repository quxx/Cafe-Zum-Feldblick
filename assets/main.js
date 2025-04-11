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

// Function to smoothly scroll back to the top
scrollToTopBtn.addEventListener("click", function () {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});

function setRealViewportHeight() {
  const vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty("--vh", `${vh}px`);
}

// Initial aufrufen
setRealViewportHeight();

// Bei Resize anpassen
window.addEventListener("resize", setRealViewportHeight);
