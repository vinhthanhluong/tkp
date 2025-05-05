$(window).on("load resize", function (e) {
  $('a[href^="#"]:not([href="#"])').on("click", function (e) {
    var widthwin = $(window).width();
    var headerh = 115;
    if (widthwin < 768) headerh = 50;
    e.preventDefault();
    var target = this.hash,
      $target = $(target),
      pos = $target.offset().top - headerh;
    if ($target.length) $("html, body").stop().animate({ scrollTop: pos }, 800);
  });
});

$(function () {
  // iOS 15.1: https://developer.mozilla.org/en-US/docs/Web/API/PerformanceNavigationTiming/type#reload
  var isReload =
    (window.performance.navigation &&
      window.performance.navigation.type === 1) ||
    window.performance
      .getEntriesByType("navigation")
      .map(function (nav) {
        return nav.type;
      })
      .includes("reload");
  handleAnchor(isReload);
});

function handleAnchor(isReload = false) {
  var winWidth = $(window).width();
  var headerHeight = 115;
  if (winWidth < 768) headerHeight = 50;
  var hashStr = location.hash;
  if (hashStr && hashStr != "#noback") {
    var pos = $(hashStr).offset().top - headerHeight;
    if (isReload) $("html, body").stop().animate({ scrollTop: pos }, 800);
    else {
      setTimeout(function () {
        $("html, body").scrollTop(pos);
      }, 1); // fix ios17
    }
  }
}
