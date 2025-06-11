<?php
$thisPageName = 'ishinoya-cuisine';
include(dirname(__DIR__) . '/../../../app_config.php');
include(APP_PATH . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/lib/swiper-bundle.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/ishinoya_cuisine.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="ishinoya-cuisine">
  <?php include(APP_PATH . 'libs/header02.php'); ?>
  <main id="wrap02">
    <section class="c-keyvisual aos-init" data-aos="fade-up" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/ishinoya/cuisine/mv.jpg" data-bgsp="<?php echo APP_ASSETS; ?>img/ishinoya/cuisine/mv_sp.jpg">
      <div class="inner1170">
        <h1 class="keyvisual-ttl">
          <span class="ttl-en">Cuisine</span>
          <span class="ttl-jp">お食事</span>
        </h1>
        <div class="c-breadcrumb is-breadcrumb-white">
          <ul>
            <li><a href="<?php echo APP_URL; ?>">TOP</a></li>
            <li><a href="<?php echo APP_URL; ?>guide/">施設案内</a></li>
            <li><a href="<?php echo APP_URL; ?>guide/ishinoya/">ISHINOYA 別府 / 石のや 別府</a></li>
            <li>お食事</li>
          </ul>
        </div>
      </div>
    </section>
    <div class="sec-tabs">
      <div class="inner1170">
        <ul class="tabs-list js-tabs aos-init" data-aos="fade-up">
          <li class="tab-item is-current" data-tab="tab01"><span>レストラン</span></li>
          <li class="tab-item" data-tab="tab02"><span>部屋食</span></li>
        </ul>
      </div>
    </div>
    <section class="sec-cuisine" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/ishinoya/cuisine/pattern_bg.png" data-bgsp="<?php echo APP_ASSETS; ?>img/ishinoya/cuisine/pattern_bg_sp.png">
      <div class="inner1170 aos-init" data-aos="fade-up">
        <div class="tab-wrapper js-tab-content">
          <div class="tab-content is-current" id="tab01">
            <h2 class="cuisine-ttl">海を望む特等席で堪能する<br>本格ハワイアングリル</h2>
            <p class="cuisine-desc">別府湾を一望する大分風ハワイアングリル<br class="sp">レストラン「Grill Takka」。<br>心地よい海風と陽気な雰囲気に包まれなが<br class="sp">ら、本格グリル料理をお楽しみください。</p>
            <ul class="cuisine-list">
              <li class="cuisine-item">
                <div class="cuisine-info">
                  <h3 class="c-ttl04">
                    <span class="c-ttl04__jp">ご夕食</span>
                    <span class="c-ttl04__en">Dinner</span>
                  </h3>
                  <figure class="cuisine-img c-img sp">
                    <img src="<?php echo createSVG(327, 267); ?>" data-src="<?php echo APP_ASSETS ?>img/ishinoya/cuisine/cuisine_img01_sp.jpg" rel="js-lazy" width="327" height="267" alt="">
                  </figure>
                  <p class="cuisine-txt">新鮮な地元の食材を活かした料理を、落ち着いた雰囲気の中でお楽しみいただけます。別府ならではの海の幸や山の幸を使った美味しい和食のコースをご用意しています。</p>
                </div>
                <figure class="cuisine-img c-img pc">
                  <img src="<?php echo createSVG(530, 420); ?>" data-src="<?php echo APP_ASSETS ?>img/ishinoya/cuisine/cuisine_img01.jpg" rel="js-lazy" width="530" height="420" alt="">
                </figure>
              </li>
              <li class="cuisine-item">
                <div class="cuisine-info">
                  <h3 class="c-ttl04">
                    <span class="c-ttl04__jp">ご朝食</span>
                    <span class="c-ttl04__en">Breakfast</span>
                  </h3>
                  <figure class="cuisine-img c-img sp">
                    <img src="<?php echo createSVG(327, 267); ?>" data-src="<?php echo APP_ASSETS ?>img/ishinoya/cuisine/cuisine_img02_sp.jpg" rel="js-lazy" width="327" height="267" alt="">
                  </figure>
                  <p class="cuisine-txt">豊かな自然に囲まれた朝、地元の新鮮な食材を使った朝食で一日の始まりをお迎えください。和食と洋食をバランスよく取り入れたメニューをお楽しみいただけます。</p>
                </div>
                <figure class="cuisine-img c-img pc">
                  <img src="<?php echo createSVG(530, 420); ?>" data-src="<?php echo APP_ASSETS ?>img/ishinoya/cuisine/cuisine_img02.jpg" rel="js-lazy" width="530" height="420" alt="">
                </figure>
              </li>
            </ul>
            <div class="cuisine-wrapper">
              <div class="cuisine-head">
                <div class="cuisine-logo">
                  <img src="<?php echo createSVG(253, 100); ?>" data-src="<?php echo APP_ASSETS ?>img/ishinoya/cuisine/logo_res.svg" rel="js-lazy" width="253" height="100" alt="">
                </div>
                <p class="cuisine-summary">別府湾の美しい景色を望むカフェレストラン。テラス席からは大海原を一望でき、自然の息吹を感じながら食事を楽しむことができます。別府の豊かな自然と共に、贅沢な時間をお楽しみください。</p>
              </div>
              <div class="gallery-container">
                <div class="slider-gallery">
                  <div class="gallery-wrapper js-slider-gallery">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="gallery-pic c-img">
                          <img src="<?php echo APP_ASSETS ?>img/ishinoya/cuisine/slide_img01.jpg" width="1000" height="450" alt="">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="gallery-pic c-img">
                          <img src="<?php echo APP_ASSETS ?>img/ishinoya/cuisine/slide_img02.jpg" width="1000" height="450" alt="">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="gallery-pic c-img">
                          <img src="<?php echo APP_ASSETS ?>img/ishinoya/cuisine/slide_img03.jpg" width="1000" height="450" alt="">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="gallery-pic c-img">
                          <img src="<?php echo APP_ASSETS ?>img/ishinoya/cuisine/slide_img04.jpg" width="1000" height="450" alt="">
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
                        <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/ishinoya/cuisine/thumb_img01.jpg" width="140" height="100" alt=""></div>
                      </div>
                      <div class="swiper-slide">
                        <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/ishinoya/cuisine/thumb_img02.jpg" width="140" height="100" alt=""></div>
                      </div>
                      <div class="swiper-slide">
                        <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/ishinoya/cuisine/thumb_img03.jpg" width="140" height="100" alt=""></div>
                      </div>
                      <div class="swiper-slide">
                        <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/ishinoya/cuisine/thumb_img04.jpg" width="140" height="100" alt=""></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cuisine-group">
                <dl class="cuisine-time">
                  <dt>ご夕食</dt>
                  <dd>17:30~21:00（最終入場 19:30 / L.O. 20:30）</dd>
                  <dt>ご朝食</dt>
                  <dd>7:30~10:00（最終入場 9:00）</dd>
                </dl>
                <a class="c-btn04" href="<?php echo APP_URL; ?>guide/restaurant/"><span>詳しく見る</span></a>
              </div>
            </div>
          </div>
          <div class="tab-content" id="tab02">
            <h2 class="cuisine-ttl">お部屋でゆったり楽しむ<br>本格ハワイアングリル</h2>
            <p class="cuisine-desc">こだわりの大分風ハワイアングリルを、<br class="sp">お部屋でゆっくりと。<br>プライベートな空間で、本格的な味わいを<br class="sp">心ゆくまでお楽しみください。</p>
            <ul class="cuisine-list">
              <li class="cuisine-item">
                <div class="cuisine-info">
                  <h3 class="c-ttl04">
                    <span class="c-ttl04__jp">ご夕食</span>
                    <span class="c-ttl04__en">Dinner</span>
                  </h3>
                  <figure class="cuisine-img c-img sp">
                    <img src="<?php echo createSVG(327, 267); ?>" data-src="<?php echo APP_ASSETS ?>img/ishinoya/cuisine/cuisine_img03_sp.jpg" rel="js-lazy" width="327" height="267" alt="">
                  </figure>
                  <p class="cuisine-txt">新鮮な地元の食材を活かした料理を、落ち着いた雰囲気の中でお楽しみいただけます。別府ならではの海の幸や山の幸を使った美味しい和食のコースをご用意しています。</p>
                </div>
                <figure class="cuisine-img c-img pc">
                  <img src="<?php echo createSVG(530, 420); ?>" data-src="<?php echo APP_ASSETS ?>img/ishinoya/cuisine/cuisine_img03.jpg" rel="js-lazy" width="530" height="420" alt="">
                </figure>
              </li>
              <li class="cuisine-item">
                <div class="cuisine-info">
                  <h3 class="c-ttl04">
                    <span class="c-ttl04__jp">ご朝食</span>
                    <span class="c-ttl04__en">Breakfast</span>
                  </h3>
                  <figure class="cuisine-img c-img sp">
                    <img src="<?php echo createSVG(327, 267); ?>" data-src="<?php echo APP_ASSETS ?>img/ishinoya/cuisine/cuisine_img04_sp.jpg" rel="js-lazy" width="327" height="267" alt="">
                  </figure>
                  <p class="cuisine-txt">豊かな自然に囲まれた朝、地元の新鮮な食材を使った朝食で一日の始まりをお迎えください。和食と洋食をバランスよく取り入れたメニューをお楽しみいただけます。</p>
                </div>
                <figure class="cuisine-img c-img pc">
                  <img src="<?php echo createSVG(530, 420); ?>" data-src="<?php echo APP_ASSETS ?>img/ishinoya/cuisine/cuisine_img04.jpg" rel="js-lazy" width="530" height="420" alt="">
                </figure>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
  <script src="<?php echo APP_ASSETS ?>js/lib/swiper-bundle.min.js?v=<?php echo APP_VER ?>"></script>
  <script>
    if ($('.js-slider-gallery').length) {
      var sliderThumbnail = new Swiper('.js-slider-thumb', {
        slidesPerView: 3,
        spaceBetween: 8,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        breakpoints: {
          768: {
            slidesPerView: 4,
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
        // pagination: {
        //   el: ".swiper-pagination",
        //   type: "custom",
        //   renderCustom: function (swiper, current, total) {
        //     return '<span class="swiper-pagination-current">0' + current + '</span>/ ' + '0' + total;
        //   }
        // },
        pagination: {
          el: ".swiper-pagination",
          type: "custom",
          renderCustom: function(swiper, current, total) {
            if (total > 9) {
              var contentCurrent;
              if (current < 10) {
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
        on: {
          init: function() {
            $(".swiper-progress-bar").removeClass("animate");
            $(".swiper-progress-bar").removeClass("active");
            $(".swiper-progress-bar").eq(0).addClass("animate");
            $(".swiper-progress-bar").eq(0).addClass("active");
          },
          slideChangeTransitionStart: function() {
            $(".swiper-progress-bar").removeClass("animate");
            $(".swiper-progress-bar").removeClass("active");
            $(".swiper-progress-bar").eq(0).addClass("active");
          },
          slideChangeTransitionEnd: function() {
            $(".swiper-progress-bar").eq(0).addClass("animate");
          }
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