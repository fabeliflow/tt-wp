var $jq = jQuery.noConflict();

$jq(document).ready(function() {

  // Swiper card carousel
  var swiper = new Swiper(".swiper-container", {
    effect: "coverflow",
    loop: true,
    grabCursor: true,
    keyboardControl: true,
    preventClicks: false,
    preventClicksPropagation: false,
    centeredSlides: true,
    slidesPerView: "auto",
    navigation: {
      nextEl: ".tt-arrow--right",
      prevEl: ".tt-arrow--left"
    },
    hashNavigation: true,
    on: {
      transitionStart: function() {
        $jq(".swiper-slide-active .tt-team__card__num").html(
          this.realIndex + 1
        );
      },
      init: function(swiper) {
        $jq(".swiper-container").css("opacity", 1);
      }
    },
    speed: 600,
    coverflowEffect: {
      rotate: 50,
      stretch: 1,
      depth: 250,
      modifier: 1,
      slideShadows: false
    }
  });

  //   Image glitch
  $jq(".tt-team__card__img").mgGlitch({
    // set 'true' to stop the plugin
    destroy: false,
    // set 'false' to stop glitching
    glitch: true,
    // set 'false' to stop scaling
    scale: false,
    // set 'false' to stop glitch blending
    blend: true,
    // select blend mode type
    blendModeType: "overlay",
    // set max left value for glitch
    glitch1LeftMaxValue: 1,
    // set max right value for glitch
    glitch1RightMaxValue: 1,
    // set min time for glitch 1 elem
    glitch1TimeMin: 800,
    // set max time for glitch 1 elem
    glitch1TimeMax: 1600,
    // set min time for glitch 2 elem
    glitch2TimeMin: 40,
    // set max time for glitch 2 elem
    glitch2TimeMax: 400
  });
});
