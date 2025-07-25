$(document).ready(function () {
  mvLoad();
  mvSlide();
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

function mvSlide() {
  if ($(".js-bg-swiper").length) {
    var swiperMv = new Swiper(".js-bg-swiper", {
      spaceBetween: 0,
      slidesPerView: 1,
      allowTouchMove: false,
      effect: "fade",
      speed: 3000,
      autoplay: {
        delay: 3000,
      },
    });
  }
}
