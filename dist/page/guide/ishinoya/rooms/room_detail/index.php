<?php
$thisPageName = 'roomsSingle';
include(dirname(__DIR__) . '/../../../../app_config.php');
include(APP_PATH . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/lib/swiper-bundle.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/ishinoya_rooms.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="ishinoya-rooms" class="rooms-single">
  <?php include(APP_PATH . 'libs/header02.php'); ?>
  <main id="wrap02">
    <section class="sec-rooms-archive">
      <div class="inner1170">
        <div class="c-breadcrumb is-breadcrumb-dis aos-init" data-aos="fade-up">
          <ul>
            <li><a href="<?php echo APP_URL; ?>">TOP</a></li>
            <li><a href="<?php echo APP_URL; ?>guide/">施設案内</a></li>
            <li><a href="<?php echo APP_URL; ?>guide/ishinoya/">ISHINOYA 別府 / 石のや 別府</a></li>
            <li><a href="<?php echo APP_URL; ?>guide/ishinoya/rooms/">お部屋</a></li>
            <li>スタンダードキング</li>
          </ul>
        </div>
        <div class="archive-row aos-init" data-aos="fade-up">
          <h2 class="archive-ttl sp">スタンダードキング</h2>
          <div class="archive-left">
            <div class="slider-gallery">
              <div class="gallery-wrapper js-slider-gallery">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="gallery-pic c-img">
                      <img src="<?php echo APP_ASSETS ?>img/cms/slide_img01.jpg" width="1000" height="450" alt="">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="gallery-pic c-img">
                      <img src="<?php echo APP_ASSETS ?>img/cms/slide_img02.jpg" width="1000" height="450" alt="">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="gallery-pic c-img">
                      <img src="<?php echo APP_ASSETS ?>img/cms/slide_img03.jpg" width="1000" height="450" alt="">
                    </div>
                  </div>
                </div>
                <div class="swiper-group">
                  <div class="swiper-pagination"></div>
                  <div class="swiper-progress-bar pc">
                    <span class="slide-progress-bar"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="slider-thumb-wrapper">
              <div class="slider-thumb-gallery js-slider-thumb">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/cms/slide_img01.jpg" width="140" height="100" alt=""></div>
                  </div>
                  <div class="swiper-slide">
                    <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/cms/slide_img02.jpg" width="140" height="100" alt=""></div>
                  </div>
                  <div class="swiper-slide">
                    <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/cms/slide_img03.jpg" width="140" height="100" alt=""></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="archive-right">
            <div class="archive-content">
              <h2 class="archive-ttl pc">スタンダードキング</h2>
              <p class="archive-desc">自然に囲まれた静かな空間で、アウトドア気分を満喫できます。シンプルで機能的なデザインが特徴です。</p>
              <dl class="archive-data">
                <dt>定員</dt>
                <dd>1～2名様　添い寝(6歳以下)2名</dd>
                <dt>広さ</dt>
                <dd>14.25～15.08㎡</dd>
                <dt>ベッド数</dt>
                <dd>シングルベッド2台</dd>
                <dt>設備・備品</dt>
                <dd>バス・トイレ（温水洗浄便座）<br>テレビ／金庫／冷蔵庫／<br>電気ケトル／無料Wi-Fi</dd>
                <dt>チェックイン</dt>
                <dd>15:00</dd>
                <dt>チェックアウト</dt>
                <dd>11:00</dd>
              </dl>
              <a class="c-btn04 is-btn-reverse" href="#"><span>ご予約はこちら</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
  <script src="<?php echo APP_ASSETS ?>js/lib/swiper-bundle.min.js?v=<?php echo APP_VER ?>"></script>
  <script>
    if ($('.js-slider-gallery').length) {
      var slidesPerViewNum = 3;
      if($('.js-slider-gallery .swiper-slide').length == 1) {
        $('.js-slider-gallery').parents('.archive-left').addClass('is-no-slider');
      } else {
        if($('.js-slider-gallery .swiper-slide').length == 2) {
          slidesPerViewNum = 2;
          $('.js-slider-gallery').parents('.archive-left').addClass('has-slider');
        }
        var sliderThumbnail = new Swiper('.js-slider-thumb', {
          slidesPerView: slidesPerViewNum,
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
        new Swiper('.js-slider-gallery', {
          loop: true,
          spaceBetween: 24,
          grabCursor: true,
          centeredSlides: true,
          slidesPerView: 'auto',
          threshold: 30,
          lazy: true,
          speed: 500,
          autoplay: {
            delay: 5000,
            disableOnInteraction: false
          },
          thumbs: {
            swiper: sliderThumbnail
          },
          pagination: {
            el: ".swiper-pagination",
            type: "custom",
            renderCustom: function (swiper, current, total) {
              return '<span class="swiper-pagination-current">0' + current + '</span>/ ' + '0' + total;
            }
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
  </script>
</body>

</html>