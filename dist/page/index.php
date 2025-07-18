<?php
$thisPageName = 'page';
include(dirname(__DIR__) . '/app_config.php');
include(APP_PATH . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/lib/swiper-bundle.min.css?v=<?php echo APP_VER ?>">
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
          <li style="background: #ffcb6a;">$yellow03: #ffcb6a;</li>
          <li style="background: #b2a46f;">$yellow04: #b2a46f;</li>
          <li style="background: #b85632; color: #fff;">$orange01: #b85632;</li>
          <li style="background: #755c49; color: #fff;">$brown01: #755c49;</li>
          <li style="background: #231816; color: #fff;">$brown02: #231816;</li>
        </ul>

        <p class="demo-ttl">.c-bg-wave01</p>
        <div class="c-bg-wave01"></div>

        <p class="demo-ttl">.c-bg-wave02</p>
        <div class="c-bg-wave02"></div>

        <div class="section-demo">
          <p class="demo-ttl">.c-link</p>
          <a class="c-link" href="#">リンクリンク</a>

          <p class="demo-ttl">.c-btn01</p>
          <a href="<?php echo APP_URL ?>" class="c-btn01">
            <i class="arr01"></i>
            <span>砂湯・温泉予約</span>
            <i class="arr02"></i>
          </a>
          <p class="demo-ttl">.c-btn01.is-center</p>
          <a href="<?php echo APP_URL ?>" class="c-btn01 is-center">
            <i class="arr01"></i>
            <span>砂湯・温泉予約</span>
            <i class="arr02"></i>
          </a>
          <p class="demo-ttl">.c-btn01.is-cover</p>
          <a href="<?php echo APP_URL ?>news/" class="c-btn01 is-cover">
            <i class="arr01"></i>
            <span>一覧へ戻る</span>
            <i class="arr02"></i>
          </a>
          <p class="demo-ttl">.c-btn01.btn-anchor</p>
          <a href="<?php echo APP_URL ?>" class="c-btn01 btn-anchor">
            <i class="arr01"></i>
            <span>
              <em class="icon icon__off"><img src="<?php echo createSVG(24, 22); ?>" data-src="<?php echo APP_ASSETS; ?>img/info/anchor01_icn.svg" rel="js-lazy" width="24" height="22" alt=""></em>
              <em class="icon icon__on"><img src="<?php echo createSVG(24, 22); ?>" data-src="<?php echo APP_ASSETS; ?>img/info/anchor01_icn_hv.svg" rel="js-lazy" width="24" height="22" alt=""></em>
              営業時間
            </span>
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
          <p class="demo-ttl">.c-btn03</p>
          <p class="demo-ttl">(No Background)</p>
          <a href="<?php echo APP_URL ?>" class="c-btn03">
            <i class="arr01"></i>
            <span>砂湯・温泉予約</span>
            <i class="arr02"></i>
          </a>
          <p class="demo-ttl">.c-btn03.is-center</p>
          <a href="<?php echo APP_URL ?>" class="c-btn03 is-center">
            <i class="arr01"></i>
            <span>砂湯・温泉予約</span>
            <i class="arr02"></i>
          </a>
          <p class="demo-ttl">.c-btn04</p>
          <a class="c-btn04" href="#"><span>詳しく見る</span></a>

          <p class="demo-ttl">.c-ttl01</p>
          <h2 class="c-ttl01">
            <span class="c-ttl01__en aos-init anim-ttl01" data-aos=""><span class="anim-inner">NEWS</span></span>
            <span class="c-ttl01__jp aos-init anim-ttl01" data-aos=""><span class="anim-inner">ニュース</span></span>
          </h2>

          <p class="demo-ttl">.c-ttl02</p>
          <h2 class="c-ttl02">
            <span class="c-ttl02__jp">メニュー</span>
            <span class="c-ttl02__en">Menu</span>
          </h2>

          <p class="demo-ttl">.c-cate01</p>
          <a href="" class="c-cate01">すべて</a>
          <p class="demo-ttl">.c-cate01.is-active</p>
          <a href="" class="c-cate01 is-active">すべて</a>
          <p class="demo-ttl">.c-text-nonpost</p>
          <p class="c-text-nonpost">表示する記事がありません。</p>
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

          <p class="demo-ttl">.c-sec-news</p>
          <section class="c-sec-news" id="news">
            <div class="inner1170">
              <h2 class="c-ttl04">
                <span class="c-ttl04__jp">お知らせ</span>
                <span class="c-ttl04__en">News</span>
              </h2>
              <div class="news-content">
                <div class="news-slider js-slider-news">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <a class="news-item" href="#">
                        <figure class="news-img c-img">
                          <img src="<?php echo APP_ASSETS ?>img/guide/spa/news_img01.jpg" width="260" height="260" alt="">
                        </figure>
                        <div class="news-head">
                          <span class="news-time">2025.03.20</span>
                          <span class="news-cate">お知らせ</span>
                        </div>
                        <p class="news-ttl">最大3,480円もお得。高速道路のお得なセットプラン。</p>
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a class="news-item" href="#">
                        <figure class="news-img c-img">
                          <img src="<?php echo APP_ASSETS ?>img/guide/spa/news_img02.jpg" width="260" height="260" alt="">
                        </figure>
                        <div class="news-head">
                          <span class="news-time">2025.03.20</span>
                          <span class="news-cate">お知らせ</span>
                        </div>
                        <p class="news-ttl">7月22日～「むらごとマル<br class="pc">シェ」がスタート！</p>
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a class="news-item" href="#">
                        <figure class="news-img c-img">
                          <img src="<?php echo APP_ASSETS ?>img/guide/spa/news_img03.jpg" width="260" height="260" alt="">
                        </figure>
                        <div class="news-head">
                          <span class="news-time">2025.03.20</span>
                          <span class="news-cate">お知らせ</span>
                        </div>
                        <p class="news-ttl">最大3,480円もお得。高速道路のお得なセットプラン。</p>
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a class="news-item" href="#">
                        <figure class="news-img c-img">
                          <img src="<?php echo APP_ASSETS ?>img/guide/spa/news_img02.jpg" width="260" height="260" alt="">
                        </figure>
                        <div class="news-head">
                          <span class="news-time">2025.03.20</span>
                          <span class="news-cate">お知らせ</span>
                        </div>
                        <p class="news-ttl">7月22日～「むらごとマル<br class="pc">シェ」がスタート！</p>
                      </a>
                    </div>
                  </div>
                  <div class="swiper-group">
                    <div class="swiper-pagination"></div>
                    <div class="swiper-progress-bar">
                      <span class="slide-progress-bar"></span>
                    </div>
                  </div>
                </div>
              </div>
              <a class="c-btn04" href="#"><span>もっと見る</span></a>
            </div>
          </section>



        </div>
      </div>
    </div>
    <div class="section-demo">
      <div class="inner1170">
        <p class="demo-ttl">.c-secwrap.wrap-right</p>
      </div>
      <div class="c-wcm01">
        <h2 class="c-ttl04 sp">
          <span class="c-ttl04__jp">お部屋</span>
          <span class="c-ttl04__en pc">Rooms</span>
          <span class="c-ttl04__en sp">Room</span>
        </h2>
        <section class="c-secwrap wrap-right">
          <div class="c-secwrap__colslide">
            <div class="c-gallery__main">
              <div class="gallery-wrapper js-slider-gallery01">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="gallery-pic c-img">
                      <img src="<?php echo APP_ASSETS ?>img/ishinoya/slide_room01.jpg" width="625" height="440" alt="">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="gallery-pic c-img">
                      <img src="<?php echo APP_ASSETS ?>img/ishinoya/slide_room02.jpg" width="625" height="440" alt="">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="gallery-pic c-img">
                      <img src="<?php echo APP_ASSETS ?>img/ishinoya/slide_room03.jpg" width="625" height="440" alt="">
                    </div>
                  </div>
                </div>
                <p class="c-cursor__slide js-cursor__slide">
                  <span class="txt">Prev</span>
                </p>
                <div class="gallerySwiper-prev swiper01-prev">
                </div>
                <div class="gallerySwiper-next swiper01-next">
                </div>
              </div>
              <div class="swiper-group">
                <div class="gallerySwiper-pagination swiper01-pagination"></div>
                <div class="gallerySwiper-progress-bar swiper01-progress-bar pc">
                  <span class="slide-progress-bar"></span>
                </div>
              </div>
            </div>
            <div class="c-gallery__thumb">
              <div class="slider-thumb-gallery js-slider-thumb01">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/ishinoya/thumb_room01.jpg" width="140" height="100" alt=""></div>
                  </div>
                  <div class="swiper-slide">
                    <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/ishinoya/thumb_room02.jpg" width="140" height="100" alt=""></div>
                  </div>
                  <div class="swiper-slide">
                    <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/ishinoya/thumb_room03.jpg" width="140" height="100" alt=""></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="c-secwrap__colctn">
            <div class="colctn-inner">
              <h2 class="c-ttl04 pc">
                <span class="c-ttl04__jp">お部屋</span>
                <span class="c-ttl04__en">Rooms</span>
              </h2>
              <p class="colctn-ttl">別府の大自然に囲まれたここでしかない空間</p>
              <div class="colctn-desc">
                <p class="txt">全7種 23室の様々なお部屋タイプがあり、露天風呂付客室では、プライベートな時間と別府温泉の源泉をひとり占め。非日常に囲まれた空間で、贅沢なひとときをお過ごしください。</p>
              </div>
              <div class="colctn-info">
                <p class="info-item">
                  <span class="ttl01">チェックイン</span>
                  <span class="time01">15:00</span>
                </p>
                <span class="slash sp">/</span>
                <p class="info-item">
                  <span class="ttl01">チェックアウト</span>
                  <span class="time01">11:00</span>
                </p>
              </div>
              <a class="c-btn04" href="#"><span>もっと見る</span></a>
            </div>
          </div>
        </section>
      </div>
      <div class="inner1170">
        <p class="demo-ttl">.c-secwrap.wrap-left</p>
      </div>
      <div class="c-wcm01">
        <h2 class="c-ttl04 sp">
          <span class="c-ttl04__jp">温泉・砂湯</span>
          <span class="c-ttl04__en">Spa</span>
        </h2>
        <section class="c-secwrap wrap-left">
          <div class="c-secwrap__colslide">
            <div class="c-gallery__main">
              <div class="gallery-wrapper js-slider-gallery02">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="gallery-pic c-img">
                      <img src="<?php echo APP_ASSETS ?>img/ishinoya/slide_spa01.jpg" width="625" height="440" alt="">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="gallery-pic c-img">
                      <img src="<?php echo APP_ASSETS ?>img/ishinoya/slide_spa02.jpg" width="625" height="440" alt="">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="gallery-pic c-img">
                      <img src="<?php echo APP_ASSETS ?>img/ishinoya/slide_spa03.jpg" width="625" height="440" alt="">
                    </div>
                  </div>
                </div>
                <p class="c-cursor__slide js-cursor__slide">
                  <span class="txt">Prev</span>
                </p>
                <div class="gallerySwiper-prev swiper02-prev">
                </div>
                <div class="gallerySwiper-next swiper02-next">
                </div>
              </div>
              <div class="swiper-group">
                <div class="gallerySwiper-pagination swiper02-pagination"></div>
                <div class="gallerySwiper-progress-bar swiper02-progress-bar pc">
                  <span class="slide-progress-bar"></span>
                </div>
              </div>
            </div>
            <div class="c-gallery__thumb">
              <div class="slider-thumb-gallery js-slider-thumb02">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/ishinoya/thumb_spa01.jpg" width="140" height="100" alt=""></div>
                  </div>
                  <div class="swiper-slide">
                    <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/ishinoya/thumb_spa02.jpg" width="140" height="100" alt=""></div>
                  </div>
                  <div class="swiper-slide">
                    <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/ishinoya/thumb_spa03.jpg" width="140" height="100" alt=""></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="c-secwrap__colctn">
            <div class="colctn-inner">
              <h2 class="c-ttl04 pc">
                <span class="c-ttl04__jp">温泉・砂湯</span>
                <span class="c-ttl04__en">Spa</span>
              </h2>
              <p class="colctn-ttl">自然と一体化する癒しの湯</p>
              <div class="colctn-desc">
                <p class="txt">別府湾の美しい眺めを楽しみながら、心身の疲れを癒せる温泉をご用意。地元の天然温泉の恵みを存分に感じられる、贅沢なリラクゼーション体験をお届けします。</p>
              </div>
              <a class="c-btn04" href="#"><span>もっと見る</span></a>
            </div>
          </div>
        </section>
      </div>
    </div>
  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
  <script src="<?php echo APP_ASSETS ?>js/lib/swiper-bundle.min.js?v=<?php echo APP_VER ?>"></script>
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