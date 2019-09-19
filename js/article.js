var $jq = jQuery.noConflict();

$jq(document).ready(function() {
  // Swiper card carousel
  var swiper = new Swiper(".tt-article__img--gallery", {
    effect: "coverflow",
    loop: true,
    grabCursor: true,
    preventClicks: false,
    preventClicksPropagation: false,
    centeredSlides: true,
    slidesPerView: "auto",
    navigation: {
      nextEl: ".tt-arrow--right",
      prevEl: ".tt-arrow--left"
    },
    speed: 600,
    coverflowEffect: {
      rotate: 40,
      depth: 200,
      modifier: 1,
      slideShadows: false
    }
  });
});
