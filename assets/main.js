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
    document.querySelectorAll('[data-bs-toggle="popover"]'),
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
        if (container.isProcessing) return;

        const clickedReaction = btn.dataset.reaction;
        const previousReaction = savedReaction;
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
          },
          () => {
            savedReaction = previousReaction;
          },
        );
      });
    });

    // Placeholder-Button (wenn noch keine Reactions)
    const placeholderBtn = container.querySelector(".placeholder-btn");
    if (placeholderBtn) {
      placeholderBtn.addEventListener("click", () => {
        if (container.isProcessing) return;
        const previousReaction = savedReaction;

        handleReaction(
          container,
          postId,
          "like",
          savedReaction,
          savedReaction,
          cookieKey,
          () => {
            savedReaction = savedReaction ? null : "like";
          },
          () => {
            savedReaction = previousReaction;
          },
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
  onSuccess,
  onError,
) {
  if (!postId || !clickedReaction) return;
  if (container.isProcessing) return;

  const previousReaction = savedReaction || null;
  const nextReaction = isSame ? null : clickedReaction;
  const previousCounts = getCurrentReactions(container);

  container.isProcessing = true;
  applyOptimisticReaction(container, previousCounts, previousReaction, nextReaction);

  if (nextReaction) {
    document.cookie = `${cookieKey}=${nextReaction}; path=/; max-age=31536000`;
    updatePlaceholderBtn(container, nextReaction);
  } else {
    document.cookie = `${cookieKey}=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;`;
    resetPlaceholderBtn(container);
  }

  onSuccess();

  fetch(reactionData.ajaxUrl, {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: `action=handle_reaction&post_id=${postId}&reaction=${clickedReaction}&existing=${
      savedReaction || ""
    }`,
  })
    .then((res) => res.json())
    .then((data) => {
      if (!data.success) {
        throw new Error("Reaction request failed");
      }

      updateCounts(container, data.data.reactions);
    })
    .catch(() => {
      updateCounts(container, previousCounts);

      if (previousReaction) {
        document.cookie = `${cookieKey}=${previousReaction}; path=/; max-age=31536000`;
        updatePlaceholderBtn(container, previousReaction);
      } else {
        document.cookie = `${cookieKey}=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;`;
        resetPlaceholderBtn(container);
      }

      if (onError) {
        onError();
      }
    })
    .finally(() => {
      setTimeout(() => {
        container.isProcessing = false; // 👈 wieder freigeben
      }, 200);
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
  const countContainer = container.querySelector(".reaction-count-container");
  let hasVisibleReactions = false;

  for (const [type, count] of Object.entries(reactions)) {
    const wrapper = container.querySelector(
      `.reaction-count[data-reaction="${type}"]`,
    );
    const countEl = wrapper?.querySelector(".count");
    if (countEl) {
      countEl.textContent = count;

      if (count > 0) {
        wrapper.style.display = "inline-block";
        hasVisibleReactions = true;
      } else {
        wrapper.style.display = "none";
      }
    }
  }

  if (countContainer) {
    countContainer.style.display = hasVisibleReactions ? "flex" : "none";
  }
}

function getCurrentReactions(container) {
  const reactions = {};

  container.querySelectorAll(".reaction-count").forEach((item) => {
    const type = item.dataset.reaction;
    reactions[type] = Number(item.querySelector(".count")?.textContent || 0);
  });

  return reactions;
}

function applyOptimisticReaction(
  container,
  currentReactions,
  previousReaction,
  nextReaction,
) {
  const optimisticReactions = { ...currentReactions };

  if (previousReaction && optimisticReactions[previousReaction] > 0) {
    optimisticReactions[previousReaction]--;
  }

  if (nextReaction) {
    optimisticReactions[nextReaction] =
      (optimisticReactions[nextReaction] || 0) + 1;
  }

  updateCounts(container, optimisticReactions);
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
        }, i * 45);
      });
    });

    likeBtn.addEventListener("mouseleave", function () {
      reactionIcons.forEach((icon) => {
        icon.classList.remove("show");
      });
    });
  }
});
