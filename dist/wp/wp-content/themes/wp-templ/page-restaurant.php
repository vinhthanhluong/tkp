<?php
$thisPageName = 'restaurant';
include(APP_PATH . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/lib/swiper-bundle.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/restaurant.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="restaurant">
  <?php include(APP_PATH . 'libs/header.php'); ?>
  <main id="wrap">
    <div class="c-breadcrumb aos-init" data-aos="fade-up">
      <ul>
        <li><a href="<?php echo APP_URL; ?>">TOP</a></li>
        <li><a href="<?php echo APP_URL; ?>guide/">施設案内</a></li>
        <li>レストラン</li>
      </ul>
    </div>
    <div class="c-mainvisual is-mainvisual">
      <div class="mv-inner aos-init" data-aos="fade-up">
        <div class="img-wave-blue">
          <div class="wave-top">
            <p class="c-mask" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue.png" data-bgsp="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue.png"></p>
          </div>
          <div class="wave-bottom">
            <p class="c-mask" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue.png" data-bgsp="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue.png"></p>
          </div>
        </div>
        <h1 class="mv-ttl aos-init" data-aos="fade-up">
          <span class="mv-ttl-jp">レストラン</span>
          <span class="mv-ttl-en">Restaurant</span>
        </h1>
      </div>
      <div class="mv-img c-img aos-init" data-aos="fade-up">
        <img class="pc" src="<?php echo createSVG(1340, 350); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/restaurant/mv_img.jpg" rel="js-lazy" width="1340" height="350" alt="">
        <img class="sp" src="<?php echo createSVG(344, 220); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/restaurant/mv_img_sp.jpg" rel="js-lazy" width="344" height="220" alt="">
      </div>
    </div>
    <section class="c-about-block">
      <div class="about-bg" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/about_bg.jpg" data-bgsp="<?php echo APP_ASSETS; ?>img/guide/restaurant/about_bg_sp.png"></div>
      <div class="about-left">
        <p class="about-ttl aos-init" data-aos="fade-up">別府の自然の中で楽しむ<br>大分風ハワイアングリル</p>
        <figure class="about-img c-img pc aos-init" data-aos="fade-up">
          <img src="<?php echo createSVG(546, 514); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/restaurant/about_img01.jpg" rel="js-lazy" width="546" height="514" alt="">
        </figure>
      </div>
      <div class="about-right">
        <div class="about-content dot-decor">
          <p class="about-desc aos-init" data-aos="fade-up">別府湾を一望する絶好のロケーションで、本格ハワイアングリルをベースに、大分風にアレンジたお料理を楽しめるレストラン。<br>ロコモコやポキボウルなどの定番メニューに加え、地元食材を活かしたオリジナルメニューもご用意しています。<br>海風と陽気なハワイの雰囲気に包まれながら、特別なひとときをお過ごしください。</p>
          <div class="about-group">
            <figure class="about-img c-img sp aos-init" data-aos="fade-up">
              <img src="<?php echo createSVG(546, 514); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/restaurant/about_img01.jpg" rel="js-lazy" width="546" height="514" alt="">
            </figure>
            <div class="cloud-decor aos-init" data-aos="fade-up">
              <figure class="about-pic c-img">
                <img src="<?php echo createSVG(400, 250); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/restaurant/about_img02.jpg" rel="js-lazy" width="400" height="250" alt="">
              </figure>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="sec-grill">
      <div class="grill-logo aos-init" data-aos="fade-up"><img src="<?php echo createSVG(253, 100); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/restaurant/grill_txt.svg" rel="js-lazy" width="253" height="100" alt=""></div>
      <div class="slider-container aos-init" data-aos="fade-up">
        <div class="slider-gallery">
          <div class="gallery-wrapper js-swiper-gallery">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="gallery-pic c-img">
                  <img src="<?php echo APP_ASSETS ?>img/guide/restaurant/slide_img01.jpg" width="1000" height="490" alt="">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="gallery-pic c-img">
                  <img src="<?php echo APP_ASSETS ?>img/guide/restaurant/slide_img02.jpg" width="1000" height="490" alt="">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="gallery-pic c-img">
                  <img src="<?php echo APP_ASSETS ?>img/guide/restaurant/slide_img03.jpg" width="1000" height="490" alt="">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="gallery-pic c-img">
                  <img src="<?php echo APP_ASSETS ?>img/guide/restaurant/slide_img04.jpg" width="1000" height="490" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="slider-gallery-wrapper">
          <div class="slider-gallery-thumb js-swiper-thumb">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/guide/restaurant/thumb_img01.jpg" width="176" height="120" alt=""></div>
              </div>
              <div class="swiper-slide">
                <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/guide/restaurant/thumb_img02.jpg" width="176" height="120" alt=""></div>
              </div>
              <div class="swiper-slide">
                <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/guide/restaurant/thumb_img03.jpg" width="176" height="120" alt=""></div>
              </div>
              <div class="swiper-slide">
                <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/guide/restaurant/thumb_img04.jpg" width="176" height="120" alt=""></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="grill-data aos-init" data-aos="fade-up">
        <dl>
          <dt>営業時間</dt>
          <dd>ランチ：11:00~14:00（Lo. 13:30）<br>ディナー：17:00~22:00（Lo. 21:30）</dd>
        </dl>
        <dl>
          <dt>座席数</dt>
          <dd>店内: 98<br>テラス: 120</dd>
        </dl>
        <dl>
          <dt>定休日</dt>
          <dd>不定休</dd>
        </dl>
        <dl>
          <dt>ご予約</dt>
          <dd>ご予約は<a class="txt-link" href="#">こちら</a></dd>
        </dl>
      </div>
    </div>
    <section class="sec-menu">
      <div class="inner1170">
        <h2 class="c-ttl02 aos-init" data-aos="fade-up">
          <span class="c-ttl02__jp">メニュー</span>
          <span class="c-ttl02__en">Menu</span>
        </h2>
        <ul class="menu-list">
          <li>
            <div class="menu-item aos-init" data-aos="fade-up">
              <div class="menu-info">
                <figure class="menu-img c-img">
                  <img src="<?php echo createSVG(345, 250); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/menu_img01.jpg" rel="js-lazy" width="345" height="250" alt="">
                </figure>
                <div class="menu-head">
                  <p class="menu-ttl">ハワイアンBBQ<br>プレート</p>
                  <p class="menu-price"><span class="number">1,450</span>円<small>(税込)</small></p>
                </div>
              </div>
              <p class="menu-desc">これはダミーテキストです</p>
            </div>
          </li>
          <li>
            <div class="menu-item aos-init" data-aos="fade-up">
              <div class="menu-info">
                <figure class="menu-img c-img">
                  <img src="<?php echo createSVG(345, 250); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/menu_img02.jpg" rel="js-lazy" width="345" height="250" alt="">
                </figure>
                <div class="menu-head">
                  <p class="menu-ttl">ポキボウル</p>
                  <p class="menu-price"><span class="number">1,200</span>円<small>(税込)</small></p>
                </div>
              </div>
              <p class="menu-desc">これはダミーテキストですこれはダミーテキストです<span class="txt-lg">これはダミーテキストです</span></p>
            </div>
          </li>
          <li>
            <div class="menu-item aos-init" data-aos="fade-up">
              <div class="menu-info">
                <figure class="menu-img c-img">
                  <img src="<?php echo createSVG(345, 250); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/menu_img03.jpg" rel="js-lazy" width="345" height="250" alt="">
                </figure>
                <div class="menu-head">
                  <p class="menu-ttl">ロコモコ</p>
                  <p class="menu-price"><span class="number">1,000</span>円<small>(税込)</small></p>
                </div>
              </div>
              <p class="menu-desc">これはダミーテキストですこれはダミーテキストです<span class="txt-lg">これはダミーテキストです</span></p>
            </div>
          </li>
          <li>
            <div class="menu-item aos-init" data-aos="fade-up">
              <div class="menu-info">
                <figure class="menu-img c-img">
                  <img src="<?php echo createSVG(345, 250); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/menu_img03.jpg" rel="js-lazy" width="345" height="250" alt="">
                </figure>
                <div class="menu-head">
                  <p class="menu-ttl">ロコモコ</p>
                  <p class="menu-price"><span class="number">1,000</span>円<small>(税込)</small></p>
                </div>
              </div>
              <p class="menu-desc">これはダミーテキストですこれはダミーテキストです<span class="txt-lg">これはダミーテキストです</span></p>
            </div>
          </li>
          <li>
            <div class="menu-item aos-init" data-aos="fade-up">
              <div class="menu-info">
                <figure class="menu-img c-img">
                  <img src="<?php echo createSVG(345, 250); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/menu_img02.jpg" rel="js-lazy" width="345" height="250" alt="">
                </figure>
                <div class="menu-head">
                  <p class="menu-ttl">ハワイアンBBQ<br>プレート</p>
                  <p class="menu-price"><span class="number">1,450</span>円<small>(税込)</small></p>
                </div>
              </div>
              <p class="menu-desc">これはダミーテキストです</p>
            </div>
          </li>
          <li>
            <div class="menu-item aos-init" data-aos="fade-up">
              <div class="menu-info">
                <figure class="menu-img c-img">
                  <img src="<?php echo createSVG(345, 250); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/menu_img01.jpg" rel="js-lazy" width="345" height="250" alt="">
                </figure>
                <div class="menu-head">
                  <p class="menu-ttl">ポキボウル</p>
                  <p class="menu-price"><span class="number">1,200</span>円<small>(税込)</small></p>
                </div>
              </div>
              <p class="menu-desc">これはダミーテキストですこれはダミーテキストです<span class="txt-lg">これはダミーテキストです</span></p>
            </div>
          </li>
          <li>
            <div class="menu-item aos-init" data-aos="fade-up">
              <div class="menu-info">
                <figure class="menu-img c-img">
                  <img src="<?php echo createSVG(345, 250); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/menu_img01.jpg" rel="js-lazy" width="345" height="250" alt="">
                </figure>
                <div class="menu-head">
                  <p class="menu-ttl">ハワイアンBBQ<br>プレート</p>
                  <p class="menu-price"><span class="number">1,450</span>円<small>(税込)</small></p>
                </div>
              </div>
              <p class="menu-desc">これはダミーテキストです</p>
            </div>
          </li>
          <li>
            <div class="menu-item aos-init" data-aos="fade-up">
              <div class="menu-info">
                <figure class="menu-img c-img">
                  <img src="<?php echo createSVG(345, 250); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/menu_img02.jpg" rel="js-lazy" width="345" height="250" alt="">
                </figure>
                <div class="menu-head">
                  <p class="menu-ttl">ポキボウル</p>
                  <p class="menu-price"><span class="number">1,200</span>円<small>(税込)</small></p>
                </div>
              </div>
              <p class="menu-desc">これはダミーテキストですこれはダミーテキストです<span class="txt-lg">これはダミーテキストです</span></p>
            </div>
          </li>
          <li>
            <div class="menu-item aos-init" data-aos="fade-up">
              <div class="menu-info">
                <figure class="menu-img c-img">
                  <img src="<?php echo createSVG(345, 250); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/menu_img03.jpg" rel="js-lazy" width="345" height="250" alt="">
                </figure>
                <div class="menu-head">
                  <p class="menu-ttl">ロコモコ</p>
                  <p class="menu-price"><span class="number">1,000</span>円<small>(税込)</small></p>
                </div>
              </div>
              <p class="menu-desc">これはダミーテキストですこれはダミーテキストです<span class="txt-lg">これはダミーテキストです</span></p>
            </div>
          </li>
        </ul>
        <a href="#" class="c-btn01 is-center">
          <i class="arr01"></i>
          <span>その他のメニューはこちら<small>（PDF：2MB）</small></span>
          <i class="arr02"></i>
        </a>
      </div>
    </section>
    <section class="c-news-block" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/news_bg.jpg" data-bgsp="<?php echo APP_ASSETS; ?>img/common/news_bg_sp.jpg">
      <div class="inner1170">
        <h2 class="c-ttl02 is-white aos-init" data-aos="fade-up">
          <span class="c-ttl02__jp">ニュース</span>
          <span class="c-ttl02__en">News</span>
        </h2>
        <ul class="news-list">
          <li class="aos-init" data-aos="fade-up">
            <a class="news-item" href="#">
              <figure class="news-img c-img">
                <img src="<?php echo createSVG(165, 120); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/news_img01.jpg" rel="js-lazy" width="165" height="120" alt="">
              </figure>
              <div class="news-info">
                <div class="news-head">
                  <p class="news-cate">お知らせ</p>
                  <p class="news-time">2025.03.20</p>
                </div>
                <p class="news-ttl">最大3,480円もお得。高速道路のお得なセットプラン。</p>
              </div>
            </a>
          </li>
          <li class="aos-init" data-aos="fade-up">
            <a class="news-item" href="#">
              <figure class="news-img c-img">
                <img src="<?php echo createSVG(165, 120); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/news_img02.jpg" rel="js-lazy" width="165" height="120" alt="">
              </figure>
              <div class="news-info">
                <div class="news-head">
                  <p class="news-cate">イベント</p>
                  <p class="news-time">2025.03.18</p>
                </div>
                <p class="news-ttl">7月22日～「むらごとマルシェ」がスタート！</p>
              </div>
            </a>
          </li>
          <li class="aos-init" data-aos="fade-up">
            <a class="news-item" href="#">
              <figure class="news-img c-img">
                <img src="<?php echo createSVG(165, 120); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/news_img03.jpg" rel="js-lazy" width="165" height="120" alt="">
              </figure>
              <div class="news-info">
                <div class="news-head">
                  <p class="news-cate">お知らせ</p>
                  <p class="news-time">2025.03.30</p>
                </div>
                <p class="news-ttl">最大3,480円もお得。高速道路のお得なセットプラン。</p>
              </div>
            </a>
          </li>
          <li class="aos-init" data-aos="fade-up">
            <a class="news-item" href="#">
              <figure class="news-img c-img">
                <img src="<?php echo createSVG(165, 120); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/news_img04.jpg" rel="js-lazy" width="165" height="120" alt="">
              </figure>
              <div class="news-info">
                <div class="news-head">
                  <p class="news-cate">イベント</p>
                  <p class="news-time">2025.03.18</p>
                </div>
                <p class="news-ttl">7月22日～「むらごとマルシェ」がスタート！</p>
              </div>
            </a>
          </li>
        </ul>
        <div class="aos-init" data-aos="fade-up">
          <a href="<?php echo APP_URL; ?>news/" class="c-btn01 is-center">
            <i class="arr01"></i>
            <span>もっと見る</span>
            <i class="arr02"></i>
          </a>
        </div>
      </div>
    </section>
  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
  <script src="<?php echo APP_ASSETS ?>js/lib/swiper-bundle.min.js?v=<?php echo APP_VER ?>"></script>
  <script>
    if ($('.js-swiper-gallery').length) {
      var sliderThumbnail = new Swiper('.js-swiper-thumb', {
        slidesPerView: 4,
        spaceBetween: 8,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        breakpoints: {
          768: {
            spaceBetween: 17,
          },
        },
      });

      new Swiper('.js-swiper-gallery', {
        loop: true,
        spaceBetween: 0,
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        threshold: 30,
        lazy: true,
        // effect: 'coverflow',
        // coverflowEffect: {
        //   rotate: 0,
        //   stretch: 0,
        //   depth: 100,
        //   modifier: 1,
        //   slideShadows: false
        // },
        // navigation: {
        //   nextEl: '.js-swiper-gallery .swiper-button-next',
        //   prevEl: '.js-swiper-gallery .swiper-button-prev'
        // },
        speed: 1500,
        // autoplay: false
        autoplay: {
          delay: 1500,
          disableOnInteraction: false
        },
        thumbs: {
          swiper: sliderThumbnail
        }
      });
    }
  </script>
</body>

</html>