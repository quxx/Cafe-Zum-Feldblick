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

scrollToTopBtn.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});

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

// Reactions Cookie
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".reaction-container").forEach((container) => {
    const postId = container.dataset.post;
    const cookieKey = `reaction_${postId}`;
    let savedReaction = getCookie(cookieKey);

    // Direkt gespeicherte Reaktion anzeigen
    if (savedReaction) {
      updatePlaceholderBtn(container, savedReaction);
    }

    // Alle Reaktionsbuttons
    container.querySelectorAll(".reaction-button").forEach((btn) => {
      btn.addEventListener("click", (e) => {
        e.stopPropagation();
        if (isProcessing) return;

        const clickedReaction = btn.dataset.reaction;
        const isSame = savedReaction === clickedReaction;
        handleReaction(
          container,
          postId,
          clickedReaction,
          savedReaction,
          isSame,
          cookieKey,
          () => {
            savedReaction = isSame ? null : clickedReaction;
          }
        );
      });
    });

    // Placeholder-Button (wenn noch keine Reactions)
    const placeholderBtn = container.querySelector(".placeholder-btn");
    if (placeholderBtn) {
      placeholderBtn.addEventListener("click", () => {
        handleReaction(
          container,
          postId,
          "like",
          savedReaction,
          savedReaction,
          cookieKey,
          () => {
            savedReaction = savedReaction ? null : "like";
          }
        );
      });
    }
  });
});

function handleReaction(
  container,
  postId,
  clickedReaction,
  savedReaction,
  isSame,
  cookieKey,
  onSuccess
) {
  if (!postId || !clickedReaction) return;
  if (container.isProcessing) return;

  container.isProcessing = true;

  fetch(reactionData.ajaxUrl, {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: `action=handle_reaction&post_id=${postId}&reaction=${clickedReaction}&existing=${
      savedReaction || ""
    }`,
  })
    .then((res) => res.json())
    .then((data) => {
      if (!data.success) return;
      updateCounts(container, data.data.reactions);

      if (isSame) {
        // Reaction wurde entfernt
        document.cookie = `${cookieKey}=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;`;
        resetPlaceholderBtn(container);
      } else {
        // Neue Reaction
        document.cookie = `${cookieKey}=${clickedReaction}; path=/; max-age=31536000`;
        updatePlaceholderBtn(container, clickedReaction);
      }

      onSuccess(); // Callback → aktualisiere savedReaction
    })
    .finally(() => {
      setTimeout(() => {
        container.isProcessing = false; // 👈 wieder freigeben
      }, 800);
    });
}

function updatePlaceholderBtn(container, reaction) {
  const reactionsConfig = reactionData?.config || {};
  const btn = container.querySelector(".placeholder-btn");
  if (!btn || !reaction || !reactionsConfig[reaction]) return;

  const { emoji, label } = reactionsConfig[reaction];

  // Text + Emoji setzen
  btn.innerHTML = `${emoji} ${label}`;

  // Alte Farbkasse entfernen
  btn.classList.remove("like", "love", "haha", "wow", "sad", "angry");

  // Neue Klasse hinzufügen
  btn.classList.add(reaction);
}

function resetPlaceholderBtn(container) {
  const btn = container.querySelector(".placeholder-btn");
  if (!btn) return;
  btn.innerHTML = `<i class="fa fa-thumbs-up"></i> Like`;
  btn.classList.remove("like", "love", "haha", "wow", "sad", "angry");
}

function updateCounts(container, reactions) {
  for (const [type, count] of Object.entries(reactions)) {
    const wrapper = container.querySelector(
      `.reaction-count[data-reaction="${type}"]`
    );
    const countEl = wrapper?.querySelector(".count");
    if (countEl) {
      countEl.textContent = count;

      if (count > 0) {
        wrapper.style.display = "inline-block";
      } else {
        wrapper.style.display = "none";
      }
    }
  }
}

function getCookie(name) {
  const value = `; ${document.cookie}`;
  const parts = value.split(`; ${name}=`);
  if (parts.length === 2) return parts.pop().split(";").shift();
}

document.addEventListener("DOMContentLoaded", function () {
  const likeBtn = document.querySelector(".like-btn");
  const reactionIcons = document.querySelectorAll(".reaction-icon");

  if (likeBtn) {
    likeBtn.addEventListener("mouseenter", function () {
      reactionIcons.forEach((icon, i) => {
        setTimeout(() => {
          icon.classList.add("show");
        }, i * 100);
      });
    });

    likeBtn.addEventListener("mouseleave", function () {
      reactionIcons.forEach((icon) => {
        icon.classList.remove("show");
      });
    });
  }
});
