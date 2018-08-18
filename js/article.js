var $jq = jQuery.noConflict();

$jq(document).ready(function() {
  // Video popup
  $jq(".tt-video__btn").magnificPopup({
    type: "iframe",
    mainClass: "mfp-fade",
    removalDelay: 200,
    preloader: false,
    fixedContentPos: true,
    disableOn: 0,
    iframe: {
      patterns: {
        youtube: {
          index: "youtube.com",
          id: "v=",
          src:
            "//www.youtube.com/embed/%id%?autoplay=1&rel=0&modestbranding=1&autohide=1&showinfo=0"
        }
      }
    }
  });

  // Image Carousel
  $jq(".tt-article__img--carousel").slick({
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
