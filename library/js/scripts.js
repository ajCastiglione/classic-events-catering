/*
 * Bones Scripts File
 */

/*
 * Get Viewport Dimensions
 * returns object with viewport dimensions to match css in width and height properties
 * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
 */
function updateViewportDimensions() {
  var w = window,
    d = document,
    e = d.documentElement,
    g = d.getElementsByTagName("body")[0],
    x = w.innerWidth || e.clientWidth || g.clientWidth,
    y = w.innerHeight || e.clientHeight || g.clientHeight;
  return { width: x, height: y };
}
// setting the viewport width
var viewport = updateViewportDimensions();

/*
 * Throttle Resize-triggered Events
 * Wrap your actions in this function to throttle the frequency of firing them off, for better performance, esp. on mobile.
 * ( source: http://stackoverflow.com/questions/2854407/javascript-jquery-window-resize-how-to-fire-after-the-resize-is-completed )
 */
var waitForFinalEvent = (function() {
  var timers = {};
  return function(callback, ms, uniqueId) {
    if (!uniqueId) {
      uniqueId = "Don't call this twice without a uniqueId";
    }
    if (timers[uniqueId]) {
      clearTimeout(timers[uniqueId]);
    }
    timers[uniqueId] = setTimeout(callback, ms);
  };
})();

// how long to wait before deciding the resize has stopped, in ms. Around 50-100 should work ok.
var timeToWaitForLast = 100;

function loadGravatars() {
  // set the viewport using the function above
  viewport = updateViewportDimensions();
  // if the viewport is tablet or larger, we load in the gravatars
  if (viewport.width >= 768) {
    jQuery(".comment img[data-gravatar]").each(function() {
      jQuery(this).attr("src", jQuery(this).attr("data-gravatar"));
    });
  }
} // end function

function popupForm($) {
  let popup = $(".popup-modal");
  let close = $(".popup-modal .close");
  let doc = $("body, html");
  setTimeout(function() {
    if (popup.length > 0) {
      popup.addClass("active");
      doc.css("overflow", "hidden");
    }
  }, 1500);

  close.on("click", e => {
    e.preventDefault();
    doc.css("overflow", "auto");
    popup.removeClass("active").addClass("closed");
    setTimeout(function() {
      popup.css("display", "none");
    }, 700);
  });

  doc.on("click", e => {
    let el = $(e.target);
    if (
      el.hasClass("popup-inner") ||
      el.parent() === "popup-content" ||
      el.hasClass("popup-cta")
    )
      return;
    else if (popup.hasClass("active")) {
      popup.removeClass("active").addClass("closed");
      doc.css("overflow", "auto");
      setTimeout(function() {
        popup.css("display", "none");
      }, 700);
    }
  });
}

/*
 * Put all your regular jQuery in here.
 */
jQuery(document).ready(function($) {
  loadGravatars();

  let nav = $("#menu-main-menu li a");
  $.each(nav, function(index, value) {
    if (index === nav.length - 1) return;
    $(this).after('<span class="separator">|</span>');
  });

  $(".gallery")
    .find("p")
    .remove();
  // Main website, location boxes
  const location = $(".location-info-box a");
  const map = $("#google-map");
  location.on("click", function(e) {
    e.preventDefault();
    let target = $(this).attr("href");
    map.attr("src", target);
  });

  if ($("body").hasClass("home")) {
    popupForm($);
  }

  // popup page form
  // if ($("body").hasClass("page-id-496")) {
  //   let close = $("#exit-modal");
  //   let popup = $(".popup-form-container");
  //   let url = new URLSearchParams(window.location.search);
  //   let success = url.get("signup");

  //   if (success) {
  //     popup.remove();
  //   } else {
  //     window.scrollTo(0, 0);
  //     $("html").css({ overflow: "hidden" });
  //     $("body").css({ backgroundColor: "rgba(0,0,0,0.8)" });
  //     $("img").css({ opacity: "0.09" });
  //     $(".popup-img").css({ opacity: 1 });
  //     close.on("click", e => {
  //       popup.remove();
  //       $("html").css({ overflow: "auto" });
  //       $("body").css({ backgroundColor: "" });
  //       $("img").css({ opacity: 1 });
  //       $(".secondary-signup").css("display", "block");
  //     });
  //   }
  // }
}); /* end of as page load scripts */
