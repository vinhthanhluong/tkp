<?php
$thisPageName = 'top';
include(dirname(dirname(__DIR__)) . '/app_config.php');
include(APP_PATH . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/top.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="top" class="top">
  <?php include(APP_PATH . 'libs/header.php'); ?>
  <main id="wrap">
    <div class="sec-mv">
      <ul class="mv-video">
        <li class="mv-video__item">
          <div class="video-head sp"></div>
          <video id="mainVideo" autoplay muted loop playsinline data-baseurl="<?php echo APP_ASSETS; ?>img/top/"></video>
          <div class="video-foot sp"></div>
        </li>
      </ul>
      <div class="mv-container">
        <h1 class="mv-ttl">
          <span class="ttl-box is-morning">
            <span class="row">新たな別府を体験できる</span>
            <span class="row">パーク<span class="is-font">＆</span>リゾート</span>
          </span>
          <span class="ttl-box is-afternoon">
            <span class="row">新たな別府を体験できる</span>
            <span class="row">パーク<span class="is-font">＆</span>リゾート</span>
          </span>
          <span class="ttl-box is-evening">
            <span class="row">新たな別府を体験できる</span>
            <span class="row">パーク<span class="is-font">＆</span>リゾート</span>
          </span>
        </h1>
        <div class="mv-desc aos-init" data-aos="fade-up" data-aos-duration="500">
          <div class="mv-desc__inner">
            <p class="txt">別府市内で唯一の海浜砂湯が楽しめる上人ヶ<br class="sp">浜公園が、<br class="pc">新たな魅力を加えて生まれ変わった<br class="sp">「SHONIN PARK」<br>別府湾を一望できる絶景のロケーションで、<br>歴史ある砂湯温泉をはじめ、別府の魅力が集<br class="sp">結したショップや、<br class="pc">リゾート感あふれるレスト<br class="sp">ランや宿泊など様々な体験ができます。<br>別府の豊かな自然と共に、心安らぐひとときをお過ごしください。</p>
          </div>
        </div>
      </div>
    </div>

    <div class="sec-news">
      <div class="t-wcm01">
        <h2 class="c-ttl01">
          <span class="c-ttl01__en aos-init anim-ttl01" data-aos=""><span class="anim-inner">NEWS</span></span>
          <span class="c-ttl01__jp aos-init anim-ttl01" data-aos=""><span class="anim-inner">ニュース</span></span>
        </h2>
        <div class="news-cate c-catectn aos-init" data-aos="fade-up" data-aos-duration="500">
          <a href="" class="c-cate01 is-active">すべて</a>
          <a href="" class="c-cate01">お知らせ</a>
          <a href="" class="c-cate01">イベント</a>
        </div>

        <ul class="c-lstpost01">
          <li class="c-lstpost01__item aos-init" data-aos="fade-up" data-aos-delay="0">
            <a href="" class="lstpost01-link">
              <div class="lstpost01-ctn01">
                <div class="lstpost01-img">
                  <img src="<?php echo createSVG(345, 250) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/cms/news_thumb01.jpg" rel="js-lazy" width="345" height="250" alt="">
                </div>
                <p class="cate">
                  <span class="item is-blue">お知らせ</span>
                </p>
              </div>
              <div class="lstpost01-ctn02">
                <p class="date">2025.03.20</p>
                <p class="ttl">最大3,480円もお得。高速道路のお得なセットプラン。</p>
              </div>
            </a>
          </li>
          <li class="c-lstpost01__item aos-init" data-aos="fade-up" data-aos-delay="100">
            <a href="" class="lstpost01-link">
              <div class="lstpost01-ctn01">
                <div class="lstpost01-img">
                  <img src="<?php echo createSVG(345, 250) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/cms/news_thumb02.jpg" rel="js-lazy" width="345" height="250" alt="">
                </div>
                <p class="cate">
                  <span class="item is-yellow">イベント</span>
                </p>
              </div>
              <div class="lstpost01-ctn02">
                <p class="date">2025.05.18</p>
                <p class="ttl">7月22日～「むらごとマルシェ」がスタート！</p>
              </div>
            </a>
          </li>
          <li class="c-lstpost01__item aos-init" data-aos="fade-up" data-aos-delay="200">
            <a href="" class="lstpost01-link">
              <div class="lstpost01-ctn01">
                <div class="lstpost01-img">
                  <img src="<?php echo createSVG(345, 250) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/cms/news_thumb03.jpg" rel="js-lazy" width="345" height="250" alt="">
                </div>
                <p class="cate">
                  <span class="item is-blue">お知らせ</span>
                </p>
              </div>
              <div class="lstpost01-ctn02">
                <p class="date">2025.05.30</p>
                <p class="ttl">最大3,480円もお得。高速道路のお得なセットプラン。</p>
              </div>
            </a>
          </li>
          <li class="c-lstpost01__item aos-init" data-aos="fade-up" data-aos-delay="300">
            <a href="" class="lstpost01-link">
              <div class="lstpost01-ctn01">
                <div class="lstpost01-img">
                  <img src="<?php echo createSVG(345, 250) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/cms/news_thumb04.jpg" rel="js-lazy" width="345" height="250" alt="">
                </div>
                <p class="cate">
                  <span class="item is-yellow">イベント</span>
                </p>
              </div>
              <div class="lstpost01-ctn02">
                <p class="date">2025.08.18</p>
                <p class="ttl">7月22日～「むらごとマルシェ」がスタート！</p>
              </div>
            </a>
          </li>
          <li class="c-lstpost01__item aos-init" data-aos="fade-up" data-aos-delay="400">
            <a href="" class="lstpost01-link">
              <div class="lstpost01-ctn01">
                <div class="lstpost01-img">
                  <img src="<?php echo createSVG(345, 250) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/cms/news_thumb05.jpg" rel="js-lazy" width="345" height="250" alt="">
                </div>
                <p class="cate">
                  <span class="item is-blue">お知らせ</span>
                </p>
              </div>
              <div class="lstpost01-ctn02">
                <p class="date">2025.10.18</p>
                <p class="ttl">最大3,480円もお得。高速道路のお得なセットプラン。</p>
              </div>
            </a>
          </li>
          <li class="c-lstpost01__item aos-init" data-aos="fade-up" data-aos-delay="500">
            <a href="" class="lstpost01-link">
              <div class="lstpost01-ctn01">
                <div class="lstpost01-img">
                  <img src="<?php echo createSVG(345, 250) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/cms/news_thumb06.jpg" rel="js-lazy" width="345" height="250" alt="">
                </div>
                <p class="cate">
                  <span class="item is-yellow">イベント</span>
                </p>
              </div>
              <div class="lstpost01-ctn02">
                <p class="date">2025.02.14</p>
                <p class="ttl">7月22日～「むらごとマルシェ」がスタート！</p>
              </div>
            </a>
          </li>
        </ul>
        <div class="news-btn">
          <a href="<?php echo APP_URL ?>" class="c-btn01 is-center">
            <i class="arr01"></i>
            <span>もっと見る</span>
            <i class="arr02"></i>
          </a>
        </div>
      </div>
    </div>

    <div class="sec-park">
      <div class="t-wcm01">
        <div class="park-wrap">
          <?php include(APP_PATH . 'libs/mod_park.php'); ?>
          <div class="park-ctn">
            <h2 class="park-ttl">
              <span class="park-ttl01">
                <span class="row aos-init anim-ttl01" data-aos=""><span class="anim-inner">ABOUT</span></span>
                <span class="row aos-init anim-ttl01" data-aos=""><span class="anim-inner">SHONIN PARK</span></span>
              </span>
              <span class="park-ttl02 aos-init anim-ttl01" data-aos="">
                <span class="anim-inner">SHONIN PARKについて</span>
              </span>
            </h2>
            <div class="park-desc aos-init anim-ttl01" data-aos="">
              <p class="txt anim-inner">SHONIN PARKの魅力がひと目で分かる園内マップ。気になるエリアをタップしてみてください！</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
  <script src="<?php echo APP_ASSETS ?>js/page/top.min.js?v=<?php echo APP_VER ?>"></script>
</body>

</html>