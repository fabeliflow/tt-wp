var $jq = jQuery.noConflict();

$jq(document).ready(function () {

  $jq('#tt-lightgallery').lightGallery({
    selector: '.tt-lightgallery--item'
  });

  // Swiper card carousel
  var swiper = new Swiper(".tt-article__img--gallery", {
    centeredSlides: true,
    loop: true,
    slidesPerView: 'auto',
    spaceBetween: 20,
    preloadImages: false,
    preventClicks: false,
    speed: 500,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
});
