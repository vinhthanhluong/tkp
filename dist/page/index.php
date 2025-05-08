<?php
$thisPageName = 'page';
include(dirname(__DIR__) . '/app_config.php');
include(APP_PATH . 'libs/head.php'); ?>
</head>

<body id="page" class="page">
  <?php include(APP_PATH . 'libs/header.php'); ?>
  <main id="wrap">
    <div class="c-breadcrumb aos-init" data-aos="fade-up">
      <ul>
        <li><a href="<?php echo APP_URL; ?>">TOP</a></li>
        <li><a href="<?php echo APP_URL; ?>news/">ニュース</a></li>
        <li>7月22日～「むらごとマルシェ」がスタート！</li>
      </ul>
    </div>
    <div class="c-mainvisual">
      <div class="mv-inner aos-init" data-aos="fade-up">
        <div class="img-wave-blue">
          <div class="wave-top">
            <p class="c-mask" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue.png" data-bgsp="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue.png"></p>
          </div>
          <div class="wave-bottom">
            <p class="c-mask" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue.png" data-bgsp="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue.png"></p>
          </div>
        </div>

        <div class="img-wave-yellow">
          <div class="wave-top">
            <p class="c-mask" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/ico_wave_yellow.png" data-bgsp="<?php echo APP_ASSETS; ?>img/common/ico_wave_yellow.png"></p>
          </div>
          <div class="wave-bottom">
            <p class="c-mask" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/ico_wave_yellow.png" data-bgsp="<?php echo APP_ASSETS; ?>img/common/ico_wave_yellow.png"></p>
          </div>
        </div>
        <h1 class="mv-ttl">
          <span class="mv-ttl-jp">ニュース</span>
          <span class="mv-ttl-en">News</span>
        </h1>
      </div>
    </div>

    <div class="inner1170">
      <div class="section-demo">
        <div class="demo-text">
          <p><strong>@include ffYG </strong> font-family: "Yu Gothic", sans-serif;</p>
          <p class="ffGT"><strong>@include ffGT </strong> font-family: "Gantari", sans-serif;</p>
        </div>
        <ul class="simple-color">
          <li style="background: #000000; color: #fff;">$color_body: #000000;</li>
          <li style="background: #000000; color: #fff;">$color_link: #000000;</li>
          <li style="background: #000000; color: #fff;">$black01: #000000;</li>
          <li style="background: #65b0d4; color: #fff;">$blue01: #65b0d4;</li>
          <li style="background: #2e8ab7; color: #fff;">$blue02: #2e8ab7;</li>
          <li style="background: #1b3da3; color: #fff;">$blue03: #1b3da3;</li>
          <li style="background: #63ccff; color: #fff;">$blue04: #63ccff;</li>
          <li style="background: #f1f1f1;">$gray01: #f1f1f1;</li>
          <li style="background: #f2f2f2;">$gray02: #f2f2f2;</li>
          <li style="background: #f5bb1e; color: #fff;">$yellow01: #f5bb1e;</li>
          <li style="background: #ffdea1;">$yellow02: #ffdea1;</li>
          <li style="background: #FFCB6A;">$yellow03: #FFCB6A;</li>
          <li style="background: #b85632; color: #fff;">$orange01: #b85632;</li>
          <li style="background: #755c49; color: #fff;">$brown01: #755c49;</li>
        </ul>

        <p class="demo-ttl">.c-bg-wave01</p>
        <div class="c-bg-wave01"></div>

        <p class="demo-ttl">.c-bg-wave02</p>
        <div class="c-bg-wave02"></div>

        <div class="section-demo">
          <p class="demo-ttl">.c-btn01</p>
          <a href="<?php echo APP_URL ?>" class="c-btn01">
            <i class="arr01"></i>
            <span>砂湯・温泉予約</span>
            <i class="arr02"></i>
          </a>
          <p class="demo-ttl">.c-btn01.is-center</p>
          <a href="<?php echo APP_URL ?>" class="c-btn01 is-center">
            <i class="arr01"></i>
            <span>レストラン予約</span>
            <i class="arr02"></i>
          </a>
          <p class="demo-ttl">.c-btn02</p>
          <a href="<?php echo APP_URL ?>" class="c-btn02">
            <i class="arr01"></i>
            <span>もっと見る</span>
            <i class="arr02"></i>
          </a>
          <p class="demo-ttl">.c-btn02.is-center</p>
          <a href="<?php echo APP_URL ?>" class="c-btn02 is-center">
            <i class="arr01"></i>
            <span>もっと見る</span>
            <i class="arr02"></i>
          </a>
          <p class="demo-ttl">.c-ttl01</p>
          <h2 class="c-ttl01">
            <span class="c-ttl01__en aos-init anim-ttl01" data-aos=""><span class="anim-inner">NEWS</span></span>
            <span class="c-ttl01__jp aos-init anim-ttl01" data-aos=""><span class="anim-inner">ニュース</span></span>
          </h2>
          <p class="demo-ttl">.c-cate01</p>
          <a href="" class="c-cate01">すべて</a>
          <p class="demo-ttl">.c-cate01.is-active</p>
          <a href="" class="c-cate01 is-active">すべて</a>
          <p class="demo-ttl">.c-lstpost01</p>
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
          <p class="demo-ttl">.mod-park</p>
          <?php include(APP_PATH . 'libs/mod_park.php'); ?>
        </div>
      </div>
    </div>
  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
</body>
<style>
  #wrap {
    overflow: hidden;
  }

  .section-demo {
    margin: 20px auto 40px;
  }

  .section-demo .demo-ttl {
    margin: 20px auto 10px;
    color: red;
    font-size: 18px;
    font-weight: bold;
  }

  .section-demo .demo-ttl em {
    font-style: normal;
    font-size: 15px;
    color: #1489c3;
  }

  .section-demo .demo-ttl span {
    color: blue;
  }

  .section-demo .simple-color {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -10px;
  }

  .section-demo .simple-color li {
    width: calc(33.333% - 20px);
    margin: 10px;
    padding: 20px;
    text-align: center;
  }

  .section-demo .demo-text {
    background-color: #CAEEF8;
    padding: 20px;
  }

  @media (min-width: 768px) {
    .c-bg-wave01,
    .c-bg-wave02 {
      height: 450px;
    }
    .sec-relate {
      padding: 73px 0 76px;
    }

    .sec-relate .relate-lst {
      margin-top: 40px;
    }
  }

  @media (max-width: 767px) {
    .c-bg-wave01,
    .c-bg-wave02 {
      height: 293px;
    }
    .sec-relate {
      padding: 49px 0 48px;
    }

    .sec-relate .relate-lst {
      margin-top: 29px;
    }
  }
</style>

</html>