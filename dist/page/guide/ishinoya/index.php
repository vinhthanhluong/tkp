<?php
$thisPageName = 'ishinoya';
include(dirname(dirname(dirname(__DIR__))) . '/app_config.php');
include(APP_PATH . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/ishinoya.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="ishinoya" class="ishinoya">
  <?php include(APP_PATH . 'libs/header02.php'); ?>
  <main id="wrap02">

    <div class="sec-mv">
      <div class="mv-bg">
        <img class="pc" src="<?php echo createSVG(1440, 900) ?>" data-src="<?php echo APP_ASSETS; ?>img/ishinoya/mv.jpg" rel="js-lazy" width="1440" height="900" alt="">
        <img class="sp" src="<?php echo createSVG(375, 667) ?>" data-src="<?php echo APP_ASSETS; ?>img/ishinoya/mv_sp.jpg" rel="js-lazy" width="375" height="667" alt="">
      </div>
      <div class="mv-ctn">
        <h1 class="mv-ttl">
          <span class="row">自然と一体化する</span>
          <span class="row">癒しのひとときを</span>
        </h1>
        <p class="mv-scrolldown">Scroll down<i class="circle"></i></p>
      </div>
    </div>

    <div class="i-bg">
      <div class="sec-news">
        <div class="i-wcm01">
          <div class="new-wrap">
            <div class="new-wrap__colttl">
              <h2 class="i-ttl01">
                <span class="i-ttl01__jp">お知らせ</span>
                <span class="i-ttl01__en">News</span>
              </h2>
            </div>
            <div class="new-wrap__colpost">
              <div class="new-slide swiperNew">
                <ul class="new-slide__lst swiper-wrapper">
                  <li class="item-slide swiper-slide">
                    <a class="post-link" href="">
                      <div class="post-thumb">
                        <img src="<?php echo createSVG(260, 260) ?>" data-src="<?php echo APP_ASSETS; ?>img/ishinoya/cms/news01.jpg" rel="js-lazy" width="260" height="260" alt="">
                      </div>
                      <div class="post-ctn">
                        <div class="post-info">
                          <p class="date">2025.03.20</p>
                          <p class="cate">
                            <span class="item">お知らせ</span>
                          </p>
                        </div>
                        <h3 class="post-ttl">最大3,480円もお得。高速道路のお得なセットプラン。</h3>
                      </div>
                    </a>
                  </li>
                  <li class="item-slide swiper-slide">
                    <a class="post-link" href="">
                      <div class="post-thumb">
                        <img src="<?php echo createSVG(260, 260) ?>" data-src="<?php echo APP_ASSETS; ?>img/ishinoya/cms/news02.jpg" rel="js-lazy" width="260" height="260" alt="">
                      </div>
                      <div class="post-ctn">
                        <div class="post-info">
                          <p class="date">2025.03.20</p>
                          <p class="cate">
                            <span class="item">お知らせ</span>
                          </p>
                        </div>
                        <h3 class="post-ttl">最大3,480円もお得。高速道路のお得なセットプラン。</h3>
                      </div>
                    </a>
                  </li>
                  <li class="item-slide swiper-slide">
                    <a class="post-link" href="">
                      <div class="post-thumb">
                        <img src="<?php echo createSVG(260, 260) ?>" data-src="<?php echo APP_ASSETS; ?>img/ishinoya/cms/news03.jpg" rel="js-lazy" width="260" height="260" alt="">
                      </div>
                      <div class="post-ctn">
                        <div class="post-info">
                          <p class="date">2025.03.20</p>
                          <p class="cate">
                            <span class="item">お知らせ</span>
                          </p>
                        </div>
                        <h3 class="post-ttl">最大3,480円もお得。高速道路のお得なセットプラン。</h3>
                      </div>
                    </a>
                  </li>
                </ul>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-scrollbar"></div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>

  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
  <script src="<?php echo APP_ASSETS ?>js/page/ishinoya.min.js?v=<?php echo APP_VER ?>"></script>
</body>

</html>