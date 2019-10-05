// This file contains all the required javascript for the TT menu.
var $jq = jQuery.noConflict();

$jq(document).ready(function() {
  // Hide menu at start
  $jq(".tt-menu").hide();

  // Menu button click event
  $jq("#tt-menu__btn").click(function(e) {
    e.preventDefault();

    // Toggle fade
    $jq(".tt-menu").fadeToggle();

    // Menu icon open animation
    $jq(this).toggleClass("tt-btn--menu--active");

    // Apply hidden overflow on parent
    $jq("html").toggleClass("cont--hidden");
  });

  $jq('.tt-menu__list-wrapper').slick({
    vertical: true,
    verticalSwiping: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    infinite: true,
    prevArrow: $jq(".tt-arrow--up"),
    nextArrow: $jq(".tt-arrow--down")
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
