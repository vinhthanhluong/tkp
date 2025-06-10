$(function () {
  $("a")
    .filter('[href^="http"], [href^="//"]')
    .not('[href*="' + window.location.host + '"]')
    .attr("rel", "noopener nofollow")
    .not(".is-trusted")
    .attr("target", "_blank");
});

function handleClickToTop() {
  $('[rel~="js-to-top"]').on("click", function () {
    $("html, body").stop().animate({ scrollTop: 0 }, 800, "swing");
  });
}

function handleGoogleFontLoader() {
  (function (d) {
    WebFontConfig = {
      google: {
        display: "swap",
        families: [
          // DO NOT use ";" between font-weight number
          // Add "i" after font-weight number when you want to load ITALIC, ex: 500,500i (medium AND medium italic)
          // Always check <html> class to ensure the font-family and font-weight
          // https://github.com/theprojectsomething/webfontloader/tree/feature/google-fonts-v2#google
          "Noto Sans JP:400,700",
          // "Noto Serif JP:400,700",
          "Gantari:500,600",
        ],
      },
      active: function () {
        sessionStorage.fontsLoaded = true;
      },
    };

    var wf = d.createElement("script"),
      s = d.scripts[0];
    wf.src = JS_APP_ASSETS + "js/lib/webfont.min.js";
    wf.async = true;
    wf.defer = true;
    s.parentNode.insertBefore(wf, s);
  })(document);
}

function handleAntiSpamMailContact() {
  if ($("#mailContact").length) {
    var address = "xxx" + "@" + "xxxxxxx.com";
    $("#mailContact")
      .attr("href", "mailto:" + address)
      .text(address);
  }
}

function appIsMobile() {
  return window.matchMedia("(max-width: 767px)").matches;
}

function initAos() {
  if ($(".aos-init").length) {
    setTimeout(function () {
      AOS.init({
        once: true,
        duration: 1000,
        // delay: 200,
        // offset: 0,
      });
    }, 500);
  }
}

function jsPopup() {
  if ($(".js-btnpopup").length) {
    $(".js-btnpopup").on("click", function () {
      var data_popup = $(this).attr("data-popup");
      var data_popup_id = "#" + data_popup;
      if ($(data_popup_id).length) {
        $("body").toggleClass("hidden-scroll");
        $(".js-modaloverlay").toggleClass("is-active");
        $(data_popup_id).addClass("is-active");
      }
    });
  }
  $(".js-modaloverlay, .js-popupclose .btn").on("click", function () {
    $("body").toggleClass("hidden-scroll");
    $(".js-modaloverlay").toggleClass("is-active");
    $(".js-modalpopup").removeClass("is-active");
  });
  $(window).on("load", function () {
    $(".js-modalpopup").each(function (index) {
      var popup_height =
        $(this).find(".modal-popup__inner").outerHeight() + "px";
      $(this).css("--maxheight", popup_height);
    });
  });
}

function modtabs() {
  if ($('.mod-tabs').length > 0) {
    $('.mod-tabs .nav-tabs ul li:first-child .tab').addClass('is-act');
      $('.mod-tabs .nav-tabs .tab').click(function(){
      var t = $(this).attr('data-tab');
      $('.mod-tabs .nav-tabs .tab').removeClass('is-act');
      $(this).addClass('is-act');
      $('.mod-tabs .tab-content').hide().removeClass('is-show');
      $('.mod-tabs .tab-content#'+t).fadeIn().addClass('is-show');
    })
  }
}
function toggleDropdown() {
  if ($(".js-accordion").length) {
    $(".js-accordion").click(function () {
      if ($(this).hasClass("is-act")) {
        $(this).removeClass("is-act");
        $(this).parent().find(".js-accordion-content").slideUp();
        // if($(this).hasClass('btn-contact')) {
        //   app.bodyNoneFixed();
        // }
      } else {
        $(this).addClass("is-act");
        $(this).parent().find(".js-accordion-content").slideDown();
        // if($(this).hasClass('btn-contact')) {
        //   app.bodyActiveFixed();
        // }
      }
    });
  }
};
function jsSliderNews() {
  var sliderJs;
  var sliderWrapper;
  var sliderWrapperItem;
  var sliderWrapperHTML;
  if ($('.js-slider-news').length) {
    sliderJs = $('.js-slider-news');
    sliderWrapper = sliderJs.find('.swiper-wrapper');
    sliderWrapperItem = sliderJs.find('.swiper-wrapper .swiper-slide');
    sliderWrapperHTML = sliderWrapper.html();
    if($('.js-slider-news .swiper-slide').length == 1) {
      $('.js-slider-news').addClass('is-no-slider');
    } else {
      if($('.js-slider-news .swiper-slide').length == 2) {
        sliderWrapper.append(sliderWrapperHTML);
      }
      new Swiper('.js-slider-news', {
        loop: true,
        spaceBetween: 24,
        slidesPerView: 2,
        grabCursor: true,
        threshold: 30,
        lazy: true,
        speed: 500,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false
        },
        pagination: {
          el: ".swiper-pagination",
          type: "custom",
          renderCustom: function (swiper, current, total) {
            if(total > 9) {
              var contentCurrent;
              if(current < 10) {
                contentCurrent = '<span class="swiper-pagination-current">0';
              } else {
                contentCurrent = '<span class="swiper-pagination-current">';
              }
              return contentCurrent + current + '</span>/ ' + total;
            } else {
              return '<span class="swiper-pagination-current">0' + current + '</span>/ ' + '0' + total;
            }
          }
        },
        breakpoints: {
          768: {
            spaceBetween: 30,
            slidesPerView: 3,
          },
          1020: {
            slidesPerView: 3,
            spaceBetween: 50,
          },
        },
        on: {
          init: function () {
            $(".swiper-progress-bar").removeClass("animate");
            $(".swiper-progress-bar").removeClass("active");
            $(".swiper-progress-bar").eq(0).addClass("animate");
            $(".swiper-progress-bar").eq(0).addClass("active");
          },
          slideChangeTransitionStart: function () {
            $(".swiper-progress-bar").removeClass("animate");
            $(".swiper-progress-bar").removeClass("active");
            $(".swiper-progress-bar").eq(0).addClass("active");
          },
          slideChangeTransitionEnd: function () {
            $(".swiper-progress-bar").eq(0).addClass("animate");
          }
        }
      });
    }
  }
};
