var $jq = jQuery.noConflict();

$jq(document).ready(function() {

  var swiper = new Swiper(".swiper-container", {
    loop: true,
    centeredSlides: true,
    // autoplay: {
    //   delay: 3000,
    //   disableOnInteraction: false,
    // },
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
  // Initialize home slider (Slick carousel)
  // $jq(".tt-home__slider")
  //   .slick({
  //     cssEase: "ease-in-out",
  //     mobileFirst: true,
  //     horizontalSwiping: false,
  //     fade: true,
  //     speed: 600,
  //     infinite: false,
  //     draggable: false,
  //     verticalSwiping: true,
  //     arrows: false
  //   })
  //   .on("init", function() {
  //     // Make slider visible when slick is ready
  //     $jq(this).css("visibility", "visible");
  //   })
  //   .on("afterChange", function(E, slick, cur) {
  //     // If last slide, hide scroll arrow
  //     if (cur === slick.$slides.length - 1) {
  //       $jq(".slick-current").addClass("last-slide");
  //       $jq(".tt-arrow--scroll").fadeOut(1000);
  //     } else {
  //       $jq(".tt-arrow--scroll").fadeIn(1000);
  //     }
  //   })
  //   .bind("mousewheel", function(e) {
  //     // Enable mousewheel functionality
  //     e.preventDefault();

  //     var scrollDistance = e.deltaY * e.deltaFactor;

  //     if (scrollDistance > 50) {
  //       $jq(this).slick("slickPrev");
  //     } else if (scrollDistance < -50) {
  //       $jq(this).slick("slickNext");
  //     }
  //   });

  // Fade in scroll arrow
  // $jq(".tt-arrow--scroll").fadeIn(5000);

  // Scroll to next slide on scroll arrow click
  // $jq('.tt-arrow--scroll-bottom').click(function () {

  //   var fuller = $jq(this).closest('.tt-home__section').next(),
  //       section = $jq(this).closest('.tt-home');

  //   section.animate({
  //       scrollTop: section.scrollTop() + fuller.offset().top
  //   }, 700);

// });
  // $jq(".tt-arrow--scroll").on("click", function() {
  //   $jq(".tt-home__slider").slick("slickNext");
  // });

//   $jq(".tt-home__cards")
//     .slick({
//       arrows: true,
//       infinite: true,
//       speed: 300,
//       prevArrow: $jq(".tt-arrow--left"),
//       nextArrow: $jq(".tt-arrow--right"),
//       mobileFirst: true,
//       slidesToShow: 1,
//       slidesToScroll: 1,
//       responsive: [
//         {
//           breakpoint: 720,
//           settings: {
//             slidesToShow: 2,
//             slidesToScroll: 2
//           }
//         },
//         {
//           breakpoint: 1320,
//           settings: {
//             slidesToShow: 3,
//             slidesToScroll: 3
//           }
//         }
//       ]
//     })
//     .on("init", function(event, slick, direction) {
//       // check to see if there are one or less slides
//       if (!($jq(".slider .slick-slide").length > 1)) {
//         // remove arrows
//         $jq(".slider__arrow").hide();
//       }
//     });
 });

// Starfiled Home Page
particlesJS("starfieldhome", {
  particles: {
    number: {
      value: 600,
      density: {
        enable: true,
        value_area: 789.1476416322727
      }
    },
    color: {
      value: "#ffffff"
    },
    shape: {
      type: "circle",
      stroke: {
        width: 0,
        color: "#000000"
      },
      polygon: {
        nb_sides: 5
      },
      image: {
        src: "img/github.svg",
        width: 100,
        height: 100
      }
    },
    opacity: {
      value: 0.48927153781200905,
      random: false,
      anim: {
        enable: true,
        speed: 0.2,
        opacity_min: 0,
        sync: false
      }
    },
    size: {
      value: 1.2,
      random: true,
      anim: {
        enable: true,
        speed: 2,
        size_min: 0,
        sync: false
      }
    },
    line_linked: {
      enable: false,
      distance: 150,
      color: "#ffffff",
      opacity: 0.4,
      width: 1
    },
    move: {
      enable: true,
      speed: 0.01,
      direction: "none",
      random: true,
      straight: false,
      out_mode: "out",
      bounce: false,
      attract: {
        enable: false,
        rotateX: 600,
        rotateY: 1200
      }
    }
  },
  interactivity: {
    detect_on: "canvas",
    events: {
      onhover: {
        enable: true,
        mode: "bubble"
      },
      onclick: {
        enable: false,
        mode: "push"
      },
      resize: true
    },
    modes: {
      grab: {
        distance: 400,
        line_linked: {
          opacity: 1
        }
      },
      bubble: {
        distance: 83.91608391608392,
        size: 1,
        duration: 3,
        opacity: 1,
        speed: 3
      },
      repulse: {
        distance: 200,
        duration: 0.4
      },
      push: {
        particles_nb: 4
      },
      remove: {
        particles_nb: 2
      }
    }
  },
  retina_detect: true
});
