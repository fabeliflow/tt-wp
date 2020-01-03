// This file contains all the required javascript for the TT menu.
var $jq = jQuery.noConflict();

$jq(document).ready(function () {

  var targetElement = document.getElementById('navigation');

  var myMenu = new OSREC.superslide
    ({
      slider: document.getElementById('navigation'),
      content: document.getElementById('content'),
      animation: 'slideLeft',
      allowDrag: false,
      // closeOnBlur: true,
      allowContentInteraction: false,
      beforeOpen: function () {
        bodyScrollLock.disableBodyScroll(targetElement);
        $jq('.hamburger').addClass("is-active");
        $jq('#navigation').addClass("nav-open");
        $jq('#content').addClass("tt-content--overlay");
        $jq('.nc_wrapper').hide();
      },
      beforeClose: function () {
        $jq('.hamburger').removeClass("is-active");
        $jq('#navigation').removeClass("nav-open");
        $jq('#content').removeClass("tt-content--overlay");
        bodyScrollLock.enableBodyScroll(targetElement);
      }
    });

  $jq("#tt-menu__btn").click(function () {
    myMenu.toggle();
  });

  // Scroll to Top
  $jq(window).scroll(function () {
    if ($jq(this).scrollTop() >= 50) {
      // If page is scrolled more than 50px
      $jq("#return-to-top").fadeIn(200); // Fade in the arrow
    } else {
      $jq("#return-to-top").fadeOut(200); // Else fade out the arrow
    }
  });
  $jq("#return-to-top").click(function () {
    // When arrow is clicked
    $jq("body,html").animate(
      {
        scrollTop: 0 // Scroll to top of body
      },
      500
    );
  });
});
