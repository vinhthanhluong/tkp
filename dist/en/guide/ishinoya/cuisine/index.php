<?php
include_once(dirname(dirname(__DIR__)) . '/../../app_config.php');
include_once(dirname(dirname(__DIR__)) . '/../../wp/wp-load.php');

$thisPageName = 'ishinoya-cuisine';

$post_id = '423';
$editor = get_field('editor_en', $post_id);

include(APP_PATH_EN . 'libs/head02.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/lib/swiper-bundle.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/ishinoya_cuisine.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="ishinoya-cuisine" class="ishinoya-cuisine en">
  <?php include(APP_PATH_EN . 'libs/header02.php'); ?>
  <main id="wrap02">
    <?php echo $editor; ?>
  </main>
  <?php include(APP_PATH_EN . 'libs/footer02.php'); ?>
  <script src="<?php echo APP_ASSETS ?>js/lib/swiper-bundle.min.js?v=<?php echo APP_VER ?>"></script>
  <script>
    function jsSlideGallery() {
      const configs = [{
        gallery: ".js-slider-gallerycuisine",
        thumb: ".js-slider-thumbcuisine",
        next: ".cuisine-next",
        prev: ".cuisine-prev",
        pagination: ".cuisine-pagination",
        progress: ".cuisine-progress-bar",
      }];

      configs.forEach((cfg) => {
        if ($(cfg.gallery).length) {
          const sliderThumbnail = new Swiper(cfg.thumb, {
            slidesPerView: 3,
            spaceBetween: 8,
            freeMode: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            breakpoints: {
              768: {
                spaceBetween: 20,
              },
            },
          });

          new Swiper(cfg.gallery, {
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
              nextEl: cfg.next,
              prevEl: cfg.prev,
            },
            pagination: {
              el: cfg.pagination,
              type: "custom",
              renderCustom: function(swiper, current, total) {
                if (total > 9) {
                  var contentCurrent =
                    current < 10 ?
                    '<span class="swiper-pagination-current">0' :
                    '<span class="swiper-pagination-current">';
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
              init: function() {
                $(cfg.progress).removeClass("animate active");
                $(cfg.progress).eq(0).addClass("animate active");
              },
              slideChangeTransitionStart: function() {
                $(cfg.progress).removeClass("animate active");
                $(cfg.progress).eq(0).addClass("active");
              },
              slideChangeTransitionEnd: function() {
                $(cfg.progress).eq(0).addClass("animate");
              },
            },
          });
        }
      });
    }

    $('.js-tabs li').click(function() {
      var t = $(this).attr('data-tab');
      $('.js-tabs li').removeClass('is-current');
      $('.js-tab-content .tab-content').removeClass('is-current');
      $(this).addClass('is-current');
      $('#' + t).addClass('is-current');
    });
  </script>
</body>

</html>