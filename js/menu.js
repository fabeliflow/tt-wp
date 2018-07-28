// This file contains all the required javascript for the TT menu.

$(document).ready(function() {
  // Hide menu at start
  $(".tt-menu").hide();

  // Menu button click event
  $("#tt-menu__btn").click(function(e) {
    e.preventDefault();

    // Toggle fade
    $(".tt-menu").fadeToggle();

    // Menu icon open animation
    $(this).toggleClass("tt-btn--menu--active");

    // Apply hidden overflow on parent
    $("html").toggleClass("cont--hidden");

    // Create starfield
    particlesJS("starfield", {
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
  });
});
