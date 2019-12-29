var $jq = jQuery.noConflict();

$jq(document).ready(function () {
  // Swiper card carousel
  var swiper = new Swiper(".tt-article__img--gallery", {
    effect: "coverflow",
    centeredSlides: true,
    loop: true,
    slidesPerView: "3",
    preloadImages: false,
    lazy: {
      loadPrevNext: false,
    },
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    grabCursor: true,
    preventClicks: false,
    preventClicksPropagation: false,
    navigation: {
      nextEl: ".tt-arrow--right",
      prevEl: ".tt-arrow--left"
    },
    speed: 500,
    coverflowEffect: {
      rotate: 40,
      depth: 200,
      modifier: 1,
      slideShadows: false
    }
  });

  $jq(".swiper-container").hover(function () {
    (this).swiper.autoplay.stop();
  }, function () {
    (this).swiper.autoplay.start();
  });
});
