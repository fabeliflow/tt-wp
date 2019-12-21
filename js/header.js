// This file contains all the required javascript for the TT menu.
var $jq = jQuery.noConflict();

$jq(document).ready(function () {

  var targetElement = document.getElementById('navigation');

  var myMenu = new OSREC.superslide
    ({
      slider: document.getElementById('navigation'),
      content: document.getElementById('content'),
      animation: 'slideLeft',
      allowDrag: true,
      closeOnBlur: true,
      // width: '40vmax',
      allowContentInteraction: false,
      beforeOpen: function () {
        bodyScrollLock.disableBodyScroll(targetElement);
        $jq('.hamburger').addClass("is-active");
        $jq('#navigation').addClass("nav-open");
        $jq('#content').addClass("tt-content--overlay");
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
});
