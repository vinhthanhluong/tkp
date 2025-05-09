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
    <div class="sec-how">
      <div class="how-inner">

        <div class="how-ctn">
          <div class="how-circle aos-init" data-aos=""></div>
          <div class="how-box">
            <div class="how-box__inner">
              <h2 class="t-ttlbox01">
                <span class="ttl01 aos-init anim-ttl01" data-aos="" data-aos-anchor=".how-circle" data-aos-delay="300">
                  <span class="anim-inner">HOW TO ENJOY</span>
                </span>
                <span class="ttl02 aos-init anim-ttl01" data-aos="" data-aos-anchor=".how-circle" data-aos-delay="300">
                  <span class="anim-inner">楽しみ方</span>
                </span>
              </h2>
              <div class="t-desc01 aos-init anim-ttl01" data-aos="" data-aos-anchor=".how-circle" data-aos-delay="300">
                <p class="txt anim-inner">日帰りから宿泊、夜の利用まで<br>SHONIN PARKの様々な楽しみ方を<br>ご提案いたします。</p>
              </div>
              <div class="how-btn aos-init" data-aos="fade-up" data-aos-anchor=".how-circle" data-aos-delay="300">
                <a href="<?php echo APP_URL ?>" class="c-btn01 is-center">
                  <i class="arr01"></i>
                  <span>楽しみ方を見る</span>
                  <i class="arr02"></i>
                </a>
              </div>
              <div class="how-img img01 aos-init pc" data-aos="" data-aos-anchor=".how-circle" data-aos-delay="600">
                <img src="<?php echo createSVG(130, 86) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_img01.png" rel="js-lazy" width="130" height="86" alt="">
              </div>
              <div class="how-img img02 aos-init" data-aos="" data-aos-anchor=".how-circle" data-aos-delay="600">
                <img src="<?php echo createSVG(160, 110) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_img02.png" rel="js-lazy" width="160" height="110" alt="">
              </div>
              <div class="how-img img03 aos-init" data-aos="" data-aos-anchor=".how-circle" data-aos-delay="600">
                <img src="<?php echo createSVG(219, 150) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_img03.png" rel="js-lazy" width="219" height="150" alt="">
              </div>
              <div class="how-img img04 aos-init pc" data-aos="" data-aos-anchor=".how-circle" data-aos-delay="600">
                <img src="<?php echo createSVG(280, 200) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_img04.png" rel="js-lazy" width="280" height="200" alt="">
              </div>
              <div class="how-img img05 aos-init pc" data-aos="" data-aos-anchor=".how-circle" data-aos-delay="600">
                <img src="<?php echo createSVG(280, 200) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_img05.png" rel="js-lazy" width="280" height="200" alt="">
              </div>
              <div class="how-img img06 aos-init" data-aos="" data-aos-anchor=".how-circle" data-aos-delay="600">
                <img src="<?php echo createSVG(220, 150) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_img06.png" rel="js-lazy" width="220" height="150" alt="">
              </div>
              <div class="how-img img07 aos-init" data-aos="" data-aos-anchor=".how-circle" data-aos-delay="600">
                <img src="<?php echo createSVG(160, 110) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_img07.png" rel="js-lazy" width="160" height="110" alt="">
              </div>
              <div class="how-img img08 aos-init pc" data-aos="" data-aos-anchor=".how-circle" data-aos-delay="600">
                <img src="<?php echo createSVG(130, 86) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_img08.png" rel="js-lazy" width="130" height="86" alt="">
              </div>

              <div class="how-cloud cloud01 aos-init" data-aos="fade" data-aos-anchor=".how-circle" data-aos-delay="600">
                <img src="<?php echo createSVG(56, 18) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_cloud01.png" rel="js-lazy" width="56" height="18" alt="">
              </div>
              <div class="how-cloud cloud02 aos-init" data-aos="fade" data-aos-anchor=".how-circle" data-aos-delay="600">
                <img src="<?php echo createSVG(140, 106) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_cloud02.png" rel="js-lazy" width="140" height="106" alt="">
              </div>
              <div class="how-cloud cloud03 aos-init" data-aos="fade" data-aos-anchor=".how-circle" data-aos-delay="600">
                <img src="<?php echo createSVG(105, 117) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_cloud03.png" rel="js-lazy" width="105" height="117" alt="">
              </div>
              <div class="how-cloud cloud04 aos-init" data-aos="fade" data-aos-anchor=".how-circle" data-aos-delay="600">
                <img src="<?php echo createSVG(56, 18) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_cloud04.png" rel="js-lazy" width="56" height="18" alt="">
              </div>

              <div class="how-decor decor01 aos-init anim-scale01" data-aos="" data-aos-anchor=".how-circle" data-aos-delay="1200">
                <img src="<?php echo createSVG(137, 110) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_decor01.png" rel="js-lazy" width="137" height="110" alt="">
              </div>
              <div class="how-decor decor02 aos-init anim-scale01 pc" data-aos="" data-aos-anchor=".how-circle" data-aos-delay="1200">
                <img src="<?php echo createSVG(219, 176) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_decor02.png" rel="js-lazy" width="219" height="176" alt="">
              </div>
              <div class="how-decor decor03 aos-init anim-scale01 pc" data-aos="" data-aos-anchor=".how-circle" data-aos-delay="1200">
                <img src="<?php echo createSVG(148, 124) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_decor03.png" rel="js-lazy" width="148" height="124" alt="">
              </div>
              <div class="how-decor decor04 aos-init anim-scale01" data-aos="" data-aos-anchor=".how-circle" data-aos-delay="1200">
                <img src="<?php echo createSVG(198, 144) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_decor04.png" rel="js-lazy" width="198" height="144" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="sec-sight">
      <div class="t-wcm02">
        <div class="sec-sight__inner">
          <div class="sight-decor decor01 pc aos-init anim-scale01" data-aos="">
            <img src="<?php echo createSVG(305, 192) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/sight_decor01.png" rel="js-lazy" width="305" height="144" alt="">
          </div>
          <div class="sight-decor decor02 pc aos-init anim-scale01" data-aos="">
            <img src="<?php echo createSVG(306, 192) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/sight_decor02.png" rel="js-lazy" width="306" height="144" alt="">
          </div>
          <h2 class="t-ttlbox01">
            <span class="ttl01 aos-init anim-ttl01" data-aos="">
              <span class="anim-inner">SIGHTSEEING</span>
            </span>
            <span class="ttl02 aos-init anim-ttl01" data-aos="">
              <span class="anim-inner">周辺観光</span>
            </span>
          </h2>
          <div class="t-desc01 aos-init anim-ttl01" data-aos="">
            <p class="txt anim-inner">SHONIN PARKの周辺には、別府市を代表する観光スポットや魅力的な施設が多数！<br>周辺観光を組み合わせて充実した日をお過ごしください。</p>
          </div>
          <div class="sight-btn aos-init" data-aos="fade-up" data-aos-anchor=".how-circle" data-aos-delay="300">
            <a href="<?php echo APP_URL ?>" class="c-btn01 is-center">
              <i class="arr01"></i>
              <span>周辺観光を見る</span>
              <i class="arr02"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="sight-slider aos-init" data-aos="fade-up">
        <div class="sight-group">
          <ul class="lst-thumb">
            <li class="item">
              <img src="<?php echo APP_ASSETS; ?>img/top/sight_thumb01.png" alt="">
            </li>
            <li class="item">
              <img src="<?php echo APP_ASSETS; ?>img/top/sight_thumb02.png" alt="">
            </li>
            <li class="item">
              <img src="<?php echo APP_ASSETS; ?>img/top/sight_thumb03.png" alt="">
            </li>
            <li class="item">
              <img src="<?php echo APP_ASSETS; ?>img/top/sight_thumb04.png" alt="">
            </li>
            <li class="item">
              <img src="<?php echo APP_ASSETS; ?>img/top/sight_thumb05.png" alt="">
            </li>
          </ul>
        </div>
        <div class="sight-group">
          <ul class="lst-thumb">
            <li class="item">
              <img src="<?php echo APP_ASSETS; ?>img/top/sight_thumb01.png" alt="">
            </li>
            <li class="item">
              <img src="<?php echo APP_ASSETS; ?>img/top/sight_thumb02.png" alt="">
            </li>
            <li class="item">
              <img src="<?php echo APP_ASSETS; ?>img/top/sight_thumb03.png" alt="">
            </li>
            <li class="item">
              <img src="<?php echo APP_ASSETS; ?>img/top/sight_thumb04.png" alt="">
            </li>
            <li class="item">
              <img src="<?php echo APP_ASSETS; ?>img/top/sight_thumb05.png" alt="">
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="sec-instagram">
      <img class="instagram-bg" src="<?php echo createSVG(1440, 1230) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/instagram_bg01.png" rel="js-lazy" width="1230" height="1440" alt="">
      <div class="instagram-inner">
        <div class="instagram-decor01">
          <img src="<?php echo createSVG(180, 55) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/instagram_decor01.svg" rel="js-lazy" width="180" height="55" alt="">
        </div>
        <div class="instagram-decor02">
          <img src="<?php echo createSVG(80, 55) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/instagram_decor02.svg" rel="js-lazy" width="80" height="55" alt="">
        </div>
        <div class="instagram-decor03">
          <img src="<?php echo createSVG(80, 55) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/instagram_decor02.svg" rel="js-lazy" width="80" height="55" alt="">
        </div>
        <div class="img-wave-blue">
          <div class="wave-top">
            <p class="c-mask" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/ico_wave_white.png" data-bgsp="<?php echo APP_ASSETS; ?>img/common/ico_wave_white.png"></p>
          </div>
          <div class="wave-bottom">
            <p class="c-mask" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/ico_wave_white.png" data-bgsp="<?php echo APP_ASSETS; ?>img/common/ico_wave_white.png"></p>
          </div>
        </div>
        <div class="t-wcm01">
          <h2 class="instagram-ttl">
            <span class="ttl01">
              <span class="anim-inner">INSTAGRAM</span>
            </span>
            <span class="ttl02">
              <span class="anim-inner">公式インスタグラム</span>
            </span>
          </h2>
          <ul class="instagram-lst">
            <li class="item">
              <img src="<?php echo createSVG(276, 276) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/cms/instagram_thumb01.png" rel="js-lazy" width="276" height="276" alt="">
            </li>
            <li class="item">
              <img src="<?php echo createSVG(276, 276) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/cms/instagram_thumb02.png" rel="js-lazy" width="276" height="276" alt="">
            </li>
            <li class="item">
              <img src="<?php echo createSVG(276, 276) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/cms/instagram_thumb03.png" rel="js-lazy" width="276" height="276" alt="">
            </li>
            <li class="item">
              <img src="<?php echo createSVG(276, 276) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/cms/instagram_thumb04.png" rel="js-lazy" width="276" height="276" alt="">
            </li>
            <li class="item">
              <img src="<?php echo createSVG(276, 276) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/cms/instagram_thumb05.png" rel="js-lazy" width="276" height="276" alt="">
            </li>
            <li class="item">
              <img src="<?php echo createSVG(276, 276) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/cms/instagram_thumb06.png" rel="js-lazy" width="276" height="276" alt="">
            </li>
            <li class="item">
              <img src="<?php echo createSVG(276, 276) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/cms/instagram_thumb07.png" rel="js-lazy" width="276" height="276" alt="">
            </li>
            <li class="item">
              <img src="<?php echo createSVG(276, 276) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/cms/instagram_thumb08.png" rel="js-lazy" width="276" height="276" alt="">
            </li>
          </ul>
        </div>
      </div>
    </div>

    <p class="f-scrolltop go-up" id="gototop">
      <span class="arr"></span>
    </p>

  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
  <script src="<?php echo APP_ASSETS ?>js/page/top.min.js?v=<?php echo APP_VER ?>"></script>
</body>

</html>