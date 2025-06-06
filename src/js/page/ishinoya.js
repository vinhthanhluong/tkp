$(document).ready(function () {
  mvLoad();
  jsSlideNews();
});

function mvLoad() {
  $(window).on("load", function () {
    if ($(".sec-mv").length) {
      setTimeout(function () {
        var mv_ttl = $(".sec-mv");
        mv_ttl.addClass("is-loaded");
      }, 2000);
    }
  });
}

function jsSlideNews() {
  if ($(".js-swiperNews").length) {
    var swiperThumb = new Swiper(".js-swiperNews", {
      spaceBetween: 50,
      loop: true,
      autoplay: {
        delay: 10000,
      },
      pagination: {
        el: ".info-page",
        type: "custom",
        renderCustom: function (swiper, current, total) {
          function formatNumber(num) {
            return num < 10 ? "0" + num : num;
          }
          return `<span class="current">${formatNumber(
            current
          )}</span><span class="">/ </span><span class="total">${formatNumber(
            total
          )}</span>`;
        },
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
          slidesPerGroup: 1,
        },
        768: {
          slidesPerView: 3,
          slidesPerGroup: 3,
        },
      },
    });

    var swiper_progress = $(".js-swiperNews .swiper-progress .line");
    swiper_progress.addClass("is-active");
    swiperThumb.on("slideChangeTransitionStart", function () {
      swiper_progress.removeClass("is-active");
      // Force reflow to restart the animation
      void swiper_progress[0].offsetWidth;
      swiper_progress.addClass("is-active");
      lazyloadInstance.update();
    });
  }
}
