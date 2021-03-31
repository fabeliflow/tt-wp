var $jq = jQuery.noConflict();

$jq(document).ready(function () {

  var swiperCategories = new Swiper(".tt-home__categories .swiper-container", {
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

  $jq(".swiper-slide").outerHeight($jq(".swiper-wrapper").outerHeight());

  $jq(".swiper-container").hover(function () {
    (this).swiper.autoplay.stop();
  }, function () {
    (this).swiper.autoplay.start();
  });

  $jq("#scroll-to-articles").click(function () {
    $jq("body,html").animate(
      {
        scrollTop: $jq(".tt-home__articles").offset().top - 100
      },
      100
    );
  });
});