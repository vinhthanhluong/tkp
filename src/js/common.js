handleGoogleFontLoader();
handleAntiSpamMailContact();
$(function () {
  // DOCUMENT READY
  gNaviHover();
  jsPopup();
  btnTop();
  toggleDropdown();
  modtabs();
  jsSliderNews();
});
$(window).on("load", function () {
  initAos();
});
$(window).on("resize", function () {
  $(".navSub").css("display", "none");
  $(".gNavi .hasSub").removeClass("active");
});

$(window).on("scroll load", function () {
  if ($("body").hasClass("top")) {
    if (
      $(window).scrollTop() >=
      $(".sec-mv").offset().top + $(".sec-mv").outerHeight() - 60
    ) {
      $("body").addClass("fixHeader");
    } else {
      $("body").removeClass("fixHeader");
    }
  } else {
    if ($(window).scrollTop() > 60) $("body").addClass("fixHeader");
    else $("body").removeClass("fixHeader");
  }
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

$(function () {
  if ($(".is-ipad").length) {
    $(".js-header-menu-drop .has-sub .menu-link").on("click", function () {
      if (!$(this).parent('.has-sub').hasClass("is-current")) {
        $(".js-header-menu-drop .has-sub.is-current").removeClass("is-current");
        $(this).parent('.has-sub').addClass("is-current");
      } else {
        $(this).parent('.has-sub').removeClass("is-current");
      }
    });
  }
});