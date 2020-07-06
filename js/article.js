var $jq = jQuery.noConflict();

$jq(document).ready(function () {

  $jq('#tt-lightgallery').lightGallery({
    selector: '.tt-lightgallery--item'
  });

  $jq('#open-adventure').lightGallery({
    selector: 'this',
    download: false,
    zoom: false,
    counter: false,
    height: '100%',
    addClass: 'txt-adv'
  });

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
});
