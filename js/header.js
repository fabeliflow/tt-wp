// This file contains all the required javascript for the TT menu.
var $jq = jQuery.noConflict();

$jq(document).ready(function () {

  var myMenu = new OSREC.superslide
    ({
      slider: document.getElementById('navigation'),
      content: document.getElementById('content'),
      animation: 'slideLeft',
      allowDrag: true,
      closeOnBlur: true,
      width: '30vw',
      allowContentInteraction: false,
      beforeOpen: function () {
        bodyScrollLock.disableBodyScroll(targetElement);
        $jq('.hamburger').addClass("is-active");
        $jq('#content').addClass("tt-content--overlay");
      },
      beforeClose: function () {
        $jq('.hamburger').removeClass("is-active");
        $jq('#content').removeClass("tt-content--overlay");
        bodyScrollLock.enableBodyScroll(targetElement);
      }
    });

  // var mySwiper = new Swiper('.tt-social--menu', {
  //   scrollbar: {
  //     el: '.swiper-scrollbar',
  //     draggable: true,
  //   },
  // });

  // 2. Get a target element that you want to persist scrolling for (such as a modal/lightbox/flyout/nav). 
  // Specifically, the target element is the one we would like to allow scroll on (NOT a parent of that element).
  // This is also the element to apply the CSS '-webkit-overflow-scrolling: touch;' if desired.
  // var targetElement = document.getElementById('#menu');
  var targetElement = document.getElementById('#menu');



  // if (myMenu.isOpen()) {
  //   bodyScrollLock.disableBodyScroll(targetElement);
  //   // $jq("#content").toggleClass("content-pushed");
  // }

  // // 3. ...in some event handler after showing the target element...disable body scroll
  // bodyScrollLock.disableBodyScroll(targetElement);

  $jq("#tt-menu__btn").click(function () {
    myMenu.toggle();
  });

  // $jq("#tt-menu__btn").toggle(
  //   function () {
  //     bodyScrollLock.disableBodyScroll(targetElement);
  //     $jq('#content').addClass("tt-content--overlay");
  //     myMenu.open();
  //   },
  //   function () {
  //     bodyScrollLock.enableBodyScroll(targetElement);
  //     $jq('#content').removeClass("tt-content--overlay");
  //     myMenu.close();
  //   });

  // $jq("#tt-menu__btn").click(function (e) {
  //   // e.preventDefault();
  //   // myMenu.toggle();


  // });

  // if (myMenu.isOpen()) {
  //   bodyScrollLock.disableBodyScroll(targetElement);
  // } else {
  //   bodyScrollLock.enableBodyScroll(targetElement);
  // }

  // $jq("#content").toggleClass("tt-content--overlay");


  // var menuBtn = document.getElementById('tt-menu__btn');

  // menuBtn.addEventListener('click', toggleNav);

  // function toggleNav() {
  //   menuBtn.classList.contains('is-active') ? menuBtn.classList.remove('is-active') : menuBtn.classList.add('is-active');
  // }
});
