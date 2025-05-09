handleGoogleFontLoader();
handleAntiSpamMailContact();
$(function () {
  // DOCUMENT READY
  gNaviHover();
  jsPopup();
  btnTop();
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

function btnTop() {
  var btnTop = $("#gototop");
  btnTop.click(function () {
    $("html, body").animate(
      {
        scrollTop: 0,
      },
      500
    );
  });
}

$(window).bind("ready resize scroll", function () {
  var pageTop = $("#gototop");
  var ftop = 230;
  var winTop = $(window).scrollTop();
  if (winTop >= ftop) {
    $("#gototop").addClass("go-up");
  } else {
    $("#gototop").removeClass("go-up");
  }
});
