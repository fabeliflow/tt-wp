// This file contains all the required javascript for the TT menu.
var $jq = jQuery.noConflict();

$jq(document).ready(function() {

  var $nav = $jq(".tt-navigation");

    $jq(window).scroll(function () {
      
      $nav.toggleClass("scrolled", $jq(this).scrollTop() > $nav.height());
    });

  var swiper = new Swiper(".tt-menu__list", {
    direction: "vertical",
    loop: true,
    grabCursor: true,
    keyboardControl: true,
    preventClicks: false,
    preventClicksPropagation: false,
    observer: true, 
    observeParents: true,
    navigation: {
      nextEl: ".tt-arrow--down",
      prevEl: ".tt-arrow--up"
    },
    speed: 600
  });

  // Hide menu at start
  $jq(".tt-menu").hide();

  // Menu button click event
  $jq("#tt-menu__btn").click(function(e) {
    e.preventDefault();

    $jq(this).find('i').toggleClass('fa-bars fa-times')

    // Toggle fade
    $jq(".tt-menu").fadeToggle();

    $jq(".tt-navigation").removeClass("scrolled");

    // Menu icon open animation
    $jq(this).toggleClass("tt-btn--menu--active");

    // Apply hidden overflow on parent
    $jq("html").toggleClass("cont--hidden");
  });

  // ===== Scroll to Top ====
  $jq(window).scroll(function() {
    if ($jq(this).scrollTop() >= 50) {
      // If page is scrolled more than 50px
      $jq("#return-to-top").fadeIn(200); // Fade in the arrow
    } else {
      $jq("#return-to-top").fadeOut(200); // Else fade out the arrow
    }
  });
  $jq("#return-to-top").click(function() {
    // When arrow is clicked
    $jq("body,html").animate(
      {
        scrollTop: 0 // Scroll to top of body
      },
      500
    );
  });
});
