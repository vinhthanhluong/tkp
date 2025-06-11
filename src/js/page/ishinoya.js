$(document).ready(function () {
  mvLoad();
  jsSlideGallery();
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

function jsSlideGallery() {
  if ($(".js-slider-gallery01").length) {
    var sliderThumbnail = new Swiper(".js-slider-thumb01", {
      slidesPerView: 3,
      spaceBetween: 8,
      freeMode: true,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
      breakpoints: {
        768: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
      },
    });
    new Swiper(".js-slider-gallery01", {
      loop: true,
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      threshold: 30,
      lazy: true,
      speed: 500,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      thumbs: {
        swiper: sliderThumbnail,
      },
      navigation: {
        nextEl: ".swiper01-next",
        prevEl: ".swiper01-prev",
      },
      pagination: {
        el: ".swiper01-pagination",
        type: "custom",
        renderCustom: function (swiper, current, total) {
          if (total > 9) {
            var contentCurrent;
            if (current < 10) {
              contentCurrent = '<span class="swiper-pagination-current">0';
            } else {
              contentCurrent = '<span class="swiper-pagination-current">';
            }
            return contentCurrent + current + "</span>/ " + total;
          } else {
            return (
              '<span class="swiper-pagination-current">0' +
              current +
              "</span>/ " +
              "0" +
              total
            );
          }
        },
      },
      on: {
        init: function () {
          console.log("Init");
          $(".swiper01-progress-bar").removeClass("animate");
          $(".swiper01-progress-bar").removeClass("active");
          $(".swiper01-progress-bar").eq(0).addClass("animate");
          $(".swiper01-progress-bar").eq(0).addClass("active");
        },
        slideChangeTransitionStart: function () {
          console.log("Change");
          $(".swiper01-progress-bar").removeClass("animate");
          $(".swiper01-progress-bar").removeClass("active");
          $(".swiper01-progress-bar").eq(0).addClass("active");
        },
        slideChangeTransitionEnd: function () {
          console.log("End");
          $(".swiper01-progress-bar").eq(0).addClass("animate");
        },
      },
    });
  }
  if ($(".js-slider-gallery02").length) {
    var sliderThumbnail = new Swiper(".js-slider-thumb02", {
      slidesPerView: 3,
      spaceBetween: 8,
      freeMode: true,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
      breakpoints: {
        768: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
      },
    });
    new Swiper(".js-slider-gallery02", {
      loop: true,
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      threshold: 30,
      lazy: true,
      speed: 500,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      thumbs: {
        swiper: sliderThumbnail,
      },
      navigation: {
        nextEl: ".swiper02-next",
        prevEl: ".swiper02-prev",
      },
      pagination: {
        el: ".swiper02-pagination",
        type: "custom",
        renderCustom: function (swiper, current, total) {
          if (total > 9) {
            var contentCurrent;
            if (current < 10) {
              contentCurrent = '<span class="swiper-pagination-current">0';
            } else {
              contentCurrent = '<span class="swiper-pagination-current">';
            }
            return contentCurrent + current + "</span>/ " + total;
          } else {
            return (
              '<span class="swiper-pagination-current">0' +
              current +
              "</span>/ " +
              "0" +
              total
            );
          }
        },
      },
      on: {
        init: function () {
          console.log("Init");
          $(".swiper02-progress-bar").removeClass("animate");
          $(".swiper02-progress-bar").removeClass("active");
          $(".swiper02-progress-bar").eq(0).addClass("animate");
          $(".swiper02-progress-bar").eq(0).addClass("active");
        },
        slideChangeTransitionStart: function () {
          console.log("Change");
          $(".swiper02-progress-bar").removeClass("animate");
          $(".swiper02-progress-bar").removeClass("active");
          $(".swiper02-progress-bar").eq(0).addClass("active");
        },
        slideChangeTransitionEnd: function () {
          console.log("End");
          $(".swiper02-progress-bar").eq(0).addClass("animate");
        },
      },
    });
  }
}

var $curs = $(".cursor");
$curs.hide();

// Hiển thị cursor khi hover gallery-wrapper
var $galleryWrapper = $(".gallery-wrapper");
if ($galleryWrapper.length) {
  $galleryWrapper.on("mouseenter", function () {
    $curs.show();
  });
  $galleryWrapper.on("mouseleave", function () {
    $curs.hide();
    $curs.html(""); // Xóa text khi rời khỏi gallery
  });
}

// Di chuyển cursor theo chuột
$(document).on("mousemove", function (e) {
  var x = e.clientX;
  var y = e.clientY;
  $curs.css({
    left: x - 30 + "px",
    top: y - 30 + "px",
  });
});

// Thay đổi text khi hover prev/next
var $prevBtn = $(".gallerySwiper-prev");
var $nextBtn = $(".gallerySwiper-next");

if ($prevBtn.length) {
  $prevBtn.on("mouseenter", function () {
    $curs.html('<span class="txt">Prev</span>');
  });
  $prevBtn.on("mouseleave", function () {
    $curs.html("");
  });
}

if ($nextBtn.length) {
  $nextBtn.on("mouseenter", function () {
    $curs.html('<span class="txt">Next</span>');
  });
  $nextBtn.on("mouseleave", function () {
    $curs.html("");
  });
}
