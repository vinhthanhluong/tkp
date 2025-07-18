if ($(window).width() > 768) {
  handleGoogleFontLoader();
} else {
  setTimeout(() => {
    handleGoogleFontLoader();
  }, 2000);
}
handleAntiSpamMailContact();
$(function () {
  // DOCUMENT READY
  gNaviHover();
  jsPopup();
  btnTop();
  toggleDropdown();
  modtabs();
  jsSliderNews();
  jsSlideGallery();
  initCustomCursor();
  initAos();
});
// $(window).on("load", function () {});
$(window).on("resize", function () {
  $(".navSub").css("display", "none");
  $(".gNavi .hasSub").removeClass("active");
});

$(window).on("scroll load", function () {
  let lastFixHeader = false;
  $(window).on("scroll load", function () {
    let isFix = false;
    if ($("body").hasClass("top")) {
      isFix =
        $(window).scrollTop() >=
        $(".sec-mv").offset().top + $(".sec-mv").outerHeight() - 60;
    } else {
      isFix = $(window).scrollTop() > 60;
    }
    if (isFix !== lastFixHeader) {
      $("body").toggleClass("fixHeader", isFix);
      lastFixHeader = isFix;
    }
  });
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
      if (!$(this).parent(".has-sub").hasClass("is-current")) {
        $(".js-header-menu-drop .has-sub.is-current").removeClass("is-current");
        $(this).parent(".has-sub").addClass("is-current");
      } else {
        $(this).parent(".has-sub").removeClass("is-current");
      }
    });
  }
});
