function gNaviHover() {
  var btn = $(".gNaviPC .hasSub, .gLang .hasSub, .gResert .hasSub");

  browserWidth = $(window).width();
  if (browserWidth > 767 && browserWidth <= 1024) {
    $(btn).on("click", function () {
      var shownav = $(this).find(".navSub");
      if ($(shownav).css("display") == "none") {
        $(shownav).stop().fadeIn(200);
        $(this).addClass("active");
      } else {
        $(shownav).stop().fadeOut(200);
        $(this).removeClass("active");
      }
    });
  } else {
    $(btn).hover(
      function () {
        var shownav = $(this).find(".navSub");
        if (browserWidth > 767) {
          if ($(shownav).css("display") == "none") {
            $(shownav).stop().fadeIn(200);
            $(this).addClass("active");
          } else {
            $(shownav).stop().fadeOut(200);
            $(this).removeClass("active");
          }
        }
      },
      function () {
        var shownav = $(this).find(".navSub");
        if (browserWidth > 767) {
          $(shownav).stop().fadeOut(200);
          $(this).removeClass("active");
        }
      }
    );
  }
  var btnResert = $(".gResert .hasSub");
  if (browserWidth < 767) {
    $(btnResert).on("click", function () {
      var shownav = $(this).find(".navSub");
      if ($(shownav).css("display") == "none") {
        $(shownav).stop().fadeIn(200);
        $(this).addClass("active");
      } else {
        $(shownav).stop().fadeOut(200);
        $(this).removeClass("active");
      }
    });
  }

  //   var btnReser = $(".gResert .hasSub");
  //   var overlay = $(".gResert-overlay");
  //   $(btnReser).on("click", function () {
  //     var shownav = $(this).find(".navSub");
  //     if ($(shownav).css("display") == "none") {
  //       $(shownav).stop().fadeIn(200);
  //       $(this).addClass("active");
  //       $(overlay).addClass("is-active");
  //     } else {
  //       $(shownav).stop().fadeOut(200);
  //       $(this).removeClass("active");
  //       $(overlay).removeClass("is-active");
  //     }
  //   });
  //   $(overlay).on("click", function () {
  //     $(btnReser).find(".navSub").stop().fadeOut(200);
  //     $(btnReser).removeClass("active");
  //     $(this).removeClass("is-active");
  //   });
}
$(".closeSub").click(function () {
  $(this).parent(".navSub").stop().slideUp(200);
  $(this).parents(".hasSub").removeClass("active");
});
/* end gNavi PC */

/* menu header SP */
$(".hamberger").click(function () {
  $(this).toggleClass("active");
  $("body").toggleClass("layerOn");
});

$(
  ".close_layer, .layerMenu .gNavi li a, .layerMenu .gNavi02 li a, .gReservat li a, .menu_overlay"
).click(function () {
  $(".hamberger").removeClass("active");
  $("body").toggleClass("layerOn");
});

$(".gNavi .hasSub .plus").click(function () {
  $(this).parent(".hasSub").toggleClass("active");
  $(this).next(".navSub").stop().slideToggle(200);
});
