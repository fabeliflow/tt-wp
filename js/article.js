var $jq = jQuery.noConflict();

$jq(document).ready(function() {
  // Image Carousel
  $jq(".tt-article__img--carousel").slick({
    infinite: true,
    arrows: true,
    speed: 500,
    prevArrow: $jq(".tt-arrow--left"),
    nextArrow: $jq(".tt-arrow--right"),
    centerMode: true,
    centerPadding: '0',
    variableWidth: true,
    mobileFirst: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 720,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 1320,
        settings: {
          slidesToShow: 3
        }
      }
    ]
  });

  // More Articles Card Carousel
  $jq(".tt-article__card--carousel").slick({
    infinite: true,
    arrows: true,
    speed: 500,
    prevArrow: $jq(".tt-arrow--left"),
    nextArrow: $jq(".tt-arrow--right"),
    centerMode: true,
    variableWidth: true,
    mobileFirst: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 720,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 1320,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3
        }
      }
    ]
  });
});
