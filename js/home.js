var $jq = jQuery.noConflict();

$jq(document).ready(function () {

  var swiper = new Swiper(".swiper-container", {
    effect: "fade",
    loop: true,
    centeredSlides: true,
    fadeEffect: {
      crossFade: true
    },
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".tt-arrow--right",
      prevEl: ".tt-arrow--left"
    },
  });

  $jq(".swiper-container").hover(function () {
    (this).swiper.autoplay.stop();
  }, function () {
    (this).swiper.autoplay.start();
  });
});