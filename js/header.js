var $jq = jQuery.noConflict();

$jq(document).click(function (e) {

  var container = $jq('#navigation');

  var targetElement = document.getElementById('navigation');

  if ($jq('#tt-menu__btn').is(e.target) && !$jq('#tt-menu__btn').hasClass('is-active')) {
    $jq('.hamburger').addClass("is-active");
    $jq('.tt-menu').addClass("no-transparency");
    container.addClass("nav-open");
    $jq('#content').addClass("tt-content--overlay");
    bodyScrollLock.disableBodyScroll(targetElement);
  } else if (!container.is(e.target) && container.has(e.target).length === 0) {
    container.removeClass("nav-open");
    $jq('.hamburger').removeClass("is-active");
    $jq('.tt-menu').removeClass("no-transparency");
    $jq('#content').removeClass("tt-content--overlay");
    bodyScrollLock.enableBodyScroll(targetElement);
  }
});

$jq(document).ready(function () {

  $jq(window).scroll(function () {
    if ($jq(this).scrollTop() >= 50) {
      $jq("#return-to-top").fadeIn(200);
    } else {
      $jq("#return-to-top").fadeOut(200);
    }
  });
  $jq("#return-to-top").click(function () {
    $jq("body,html").animate(
      {
        scrollTop: 0
      },
      500
    );
  });
});
