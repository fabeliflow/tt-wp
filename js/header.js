// This file contains all the required javascript for the TT menu.
var $jq = jQuery.noConflict();

$jq(document).ready(function () {

  var myMenu = new OSREC.superslide
    ({
      slider: document.getElementById('menu'),
      content: document.getElementById('content'),
      animation: 'slideLeft',
      allowDrag: true,
      //slideContent: false,
      closeOnBlur: true,
      width: '30vw',
      allowContentInteraction: false,
    });

    console.log("is menu open? " + myMenu.isOpen());

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

  $jq("#tt-menu__btn").click(function (e) {
    e.preventDefault();
    myMenu.toggle();

    if (myMenu.isOpen()) {
      bodyScrollLock.disableBodyScroll(targetElement);
    } else {
      bodyScrollLock.enableBodyScroll(targetElement);
    }
    
    $jq("#content").toggleClass("tt-content--overlay");
  });

  var menuBtn = document.getElementById('tt-menu__btn');

  menuBtn.addEventListener('click', toggleNav);

  function toggleNav() {
    menuBtn.classList.contains('is-active') ? menuBtn.classList.remove('is-active') : menuBtn.classList.add('is-active');
  }

  //   // }
  //   // var $nav = $jq(".tt-navigation");

  //   //   $jq(window).scroll(function () {

  //   //     $nav.toggleClass("scrolled", $jq(this).scrollTop() > $nav.height());
  //   //   });

  //   // var swiper = new Swiper(".tt-menu__list", {
  //   //   direction: "vertical",
  //   //   loop: true,
  //   //   grabCursor: true,
  //   //   keyboardControl: true,
  //   //   preventClicks: false,
  //   //   preventClicksPropagation: false,
  //   //   observer: true, 
  //   //   observeParents: true,
  //   //   navigation: {
  //   //     nextEl: ".tt-arrow--down",
  //   //     prevEl: ".tt-arrow--up"
  //   //   },
  //   //   speed: 600
  //   // });

  //   // // Hide menu at start
  //   // $jq(".tt-menu").hide();

  //   // // Menu button click event
  //   // $jq("#tt-menu__btn").click(function(e) {
  //   //   e.preventDefault();

  //   //   $jq(this).find('i').toggleClass('fa-bars fa-times')

  //   //   // Toggle fade
  //   //   $jq(".tt-menu").fadeToggle();

  //   //   $jq(".tt-navigation").removeClass("scrolled");

  //   //   // Menu icon open animation
  //   //   $jq(this).toggleClass("tt-btn--menu--active");

  //   //   // Apply hidden overflow on parent
  //   //   $jq("html").toggleClass("cont--hidden");
  //   // });

  //   // // ===== Scroll to Top ====
  //   // $jq(window).scroll(function() {
  //   //   if ($jq(this).scrollTop() >= 50) {
  //   //     // If page is scrolled more than 50px
  //   //     $jq("#return-to-top").fadeIn(200); // Fade in the arrow
  //   //   } else {
  //   //     $jq("#return-to-top").fadeOut(200); // Else fade out the arrow
  //   //   }
  //   // });
  //   // $jq("#return-to-top").click(function() {
  //   //   // When arrow is clicked
  //   //   $jq("body,html").animate(
  //   //     {
  //   //       scrollTop: 0 // Scroll to top of body
  //   //     },
  //   //     500
  //   //   );
  //   // });
});
