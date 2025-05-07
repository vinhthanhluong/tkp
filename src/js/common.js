handleGoogleFontLoader();
handleAntiSpamMailContact();
$(function () {
  // DOCUMENT READY
  gNaviHover();
  jsPopup();
});
$(window).on("load", function () {
  initAos();
});
$(window).on("resize", function () {
  $(".navSub").css("display", "none");
  $(".gNavi .hasSub").removeClass("active");
});

$(window).on("scroll load", function () {
  if ($(window).scrollTop() > 60) $("body").addClass("fixHeader");
  else $("body").removeClass("fixHeader");
});
