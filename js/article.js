var $jq = jQuery.noConflict();

$jq(document).ready(function () {

  $jq('.tt-article__link').tooltip({ title: "Share Link Copied!", trigger: "manual" });

  $jq('.tt-article__link').click(function () {
    var that = $jq(this);
    that.tooltip('show');
    setTimeout(function () {
      that.tooltip('hide');
    }, 2000);
  });

  new ClipboardJS('.tt-article__link');

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
