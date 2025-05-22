<?php
$thisPageName = 'guide';
include_once(dirname(dirname(__DIR__)) . '/app_config.php');
include(APP_PATH_EN . 'libs/head.php');
?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/guide.min.css?v=<?php echo APP_VER ?>">

</head>

<body id="guide" class="guide">
  <?php include(APP_PATH_EN . 'libs/header.php'); ?>
  <main id="wrap">
    <div class="c-breadcrumb aos-init" data-aos="fade-up">
      <ul>
        <li><a href="<?php echo APP_URL_EN; ?>">TOP</a></li>
        <li>施設案内</li>
      </ul>
    </div>
    <div class="sec-mv aos-init" data-aos="fade-in">
      <div class="content-sec">
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

        <p class="img-item-1 aos-init" data-aos="zoom-in">
          <img width="257" height="200" src="<?php echo createSVG(257, 200); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/item_1.png" rel="js-lazy" alt="砂湯イラスト">
        </p>
        <p class="img-item-2 aos-init" data-aos="zoom-in" data-aos-delay="500">
          <img width="211" height="224" src="<?php echo createSVG(211, 224); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/item_2.png" rel="js-lazy" alt="ピクニックイラスト">
        </p>
        <div class="tit-sec">
          <h1 class="ttl01">SHONIN PARKについて</h1>
          <strong class="pc">About SHONIN PARK</strong>
          <strong class="sp">About<br>SHONIN PARK</strong>
        </div>
        <p class="desc">4つのエリアで<br class="sp">構成されているSHONIN PARK。<br>各エリアについて紹介します。</p>
      </div>
    </div>
    <div class="sec-guide c-bg-wave02">
      <div class="content-sec">
        <div class="row-guide aos-init" data-aos="fade-up">
          <div class="box-img">
            <img width="560" height="400" src="<?php echo APP_ASSETS ?>img/guide/img_spa.png" alt="砂湯・温泉画像">
          </div>
          <div class="box-detail">
            <div class="tit-box">
              <h2 class="ttl01">砂湯・温泉</h2>
              <strong>Spa Sand</strong>
            </div>
            <p class="desc">別府の海浜砂湯の歴史と文化を継承しつつ、新たな温泉体験を提供するサンドスパ。広大な砂湯施設の中にBarや無料で利用できる足湯も設置。別府の新名所として、極上のリラックス体験を提供します。</p>
            <a href="<?php echo APP_URL_EN ?>" class="c-btn01">
              <i class="arr01"></i>
              <span>もっと見る</span>
              <i class="arr02"></i>
            </a>
            <p class="img-item-1 pc aos-init" data-aos="zoom-in" data-aos-delay="800">
              <img width="123" height="98" src="<?php echo createSVG(123, 98); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/item_3.png" rel="js-lazy" alt="">
            </p>
            <p class="img-item-2 aos-init" data-aos="zoom-in" data-aos-delay="1000">
              <img width="166" height="140" src="<?php echo createSVG(166, 140); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/item_4.png" rel="js-lazy" alt="砂湯に入る人イラスト">
            </p>
          </div>
        </div>
        <div class="row-guide row-reverse aos-init" data-aos="fade-up">
          <div class="box-img sp">
            <img width="560" height="400" src="<?php echo APP_ASSETS ?>img/guide/img_shop.png" alt="ショップ画像">
          </div>
          <div class="box-detail">
            <div class="tit-box">
              <h2 class="ttl01">ショップ</h2>
              <strong>Shop</strong>
            </div>
            <p class="desc">別府・大分の特産品やグルメを一堂に楽しめるショッピングエリア。ライフスタイルショップも楽しめる賑やかなエリアです。</p>
            <a href="<?php echo APP_URL_EN ?>guide/shop/" class="c-btn01">
              <i class="arr01"></i>
              <span>もっと見る</span>
              <i class="arr02"></i>
            </a>
            <p class="img-item-3 aos-init" data-aos="zoom-in">
              <img width="117" height="119" src="<?php echo createSVG(117, 119); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/item_5.png" rel="js-lazy" alt="ショッピングする人イラスト">
            </p>
          </div>
          <div class="box-img pc">
            <img width="560" height="400" src="<?php echo APP_ASSETS ?>img/guide/img_shop.png" alt="ショップ画像">
          </div>
        </div>
        <div class="row-guide aos-init" data-aos="fade-up">
          <div class="box-img">
            <img width="560" height="400" src="<?php echo APP_ASSETS ?>img/guide/img_restaurant.png" alt="レストラン画像">
          </div>
          <div class="box-detail">
            <div class="tit-box">
              <h2 class="ttl01">レストラン</h2>
              <strong>Restaurant</strong>
            </div>
            <p class="desc">別府湾を眺めながら、別府の恵みを味わえるハワイアンレストラン。開放感あふれる空間で朝食のビュッフェやグリル料理を楽しめます。</p>
            <a href="<?php echo APP_URL_EN ?>guide/restaurant/" class="c-btn01">
              <i class="arr01"></i>
              <span>もっと見る</span>
              <i class="arr02"></i>
            </a>
            <p class="img-item-4 aos-init" data-aos="zoom-in">
              <img width="143" height="170" src="<?php echo createSVG(143, 170); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/item_6.png" rel="js-lazy" alt="食事をする人イラスト">
            </p>

          </div>
        </div>
        <div class="row-guide row-reverse aos-init" data-aos="fade-up">
          <div class="box-img sp">
            <img width="560" height="400" src="<?php echo APP_ASSETS ?>img/guide/img_stay.png" alt="宿泊コテージ画像">
          </div>
          <div class="box-detail">
            <div class="tit-box">
              <h2 class="ttl01">宿泊コテージ</h2>
              <strong>Stay</strong>
            </div>
            <p class="desc">緑豊かな森林と別府湾の美しい景色に囲まれた全7種、23室の宿泊コテージ。地元食材にこだわったお料理や砂湯、快眠を追求したベッドで、寛ぎのひとときを提供いたします。</p>
            <a href="<?php echo APP_URL_EN ?>" class="c-btn01">
              <i class="arr01"></i>
              <span>もっと見る</span>
              <i class="arr02"></i>
            </a>
            <p class="img-item-5 aos-init" data-aos="zoom-in">
              <img width="258" height="163" src="<?php echo createSVG(258, 163); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/item_7.png" rel="js-lazy" alt="宿泊コテージイラスト">
            </p>
          </div>
          <div class="box-img pc">
            <img width="560" height="400" src="<?php echo APP_ASSETS ?>img/guide/img_stay.png" alt="宿泊コテージ画像">
          </div>
        </div>
      </div>
    </div>
    <div class="mod-park aos-init" data-aos="fade-up">
      <div class="mod-park__inner">
        <div class="content-mod sp">
          <div class="tit-box">
            <h2 class="ttl01">園内マップ</h2>
            <strong>Park Map</strong>
          </div>
          <p class="desc">SHONIN PARKの魅力がひと目で分かる園内マップ。<br class="pc">気になるエリアをタップしてみてください！</p>
        </div>
        <div class="park-bg aos-init" data-aos="fade-up" data-aos-delay="0">
          <img class="pc" src="<?php echo createSVG(1170, 668) ?>" data-src="<?php echo APP_ASSETS; ?>img/common/map_park.svg" rel="js-lazy" width="1170" height="668" alt="SHONIN PARK マップ">
          <img class="sp" src="<?php echo createSVG(361, 206) ?>" data-src="<?php echo APP_ASSETS; ?>img/common/map_park_sp.png" rel="js-lazy" width="361" height="206" alt="SHONIN PARK マップ">
        </div>
        <div class="mod-park__btn bnt01 aos-init" data-aos="fade-up" data-aos-anchor=".park-bg" data-aos-delay="300">
          <h3 class="btn-link js-btnpopup" data-popup="modal01">
            <span class="txt">レストラン</span>
          </h3>
        </div>
        <div class="mod-park__btn bnt02 aos-init" data-aos="fade-up" data-aos-anchor=".park-bg" data-aos-delay="300">
          <h3 class="btn-link js-btnpopup" data-popup="modal02">
            <span class="txt">砂湯・温泉</span>
          </h3>
        </div>
        <div class="mod-park__btn bnt03 aos-init" data-aos="fade-up" data-aos-anchor=".park-bg" data-aos-delay="300">
          <h3 class="btn-link js-btnpopup" data-popup="modal03">
            <span class="txt">ショップ</span>
          </h3>
        </div>
        <div class="mod-park__btn bnt04 aos-init" data-aos="fade-up" data-aos-anchor=".park-bg" data-aos-delay="300">
          <h3 class="btn-link js-btnpopup" data-popup="modal04">
            <span class="txt">宿泊コテージ</span>
          </h3>
        </div>
        <div class="content-mod pc">
          <div class="tit-box">
            <h2 class="ttl01">園内マップ</h2>
            <strong>Park Map</strong>
          </div>
          <p class="desc">SHONIN PARKの魅力がひと目で分かる園内マップ。<br>気になるエリアをタップしてみてください！</p>
        </div>
      </div>
    </div>

    <!-- Popup -->
    <div class="modal-overlay js-modaloverlay"></div>
    <div class="modal-popup js-modalpopup" id="modal01">
      <div class="modal-inner">
        <div class="modal-window">
          <div class="modal-popup__inner">
            <ul class="popup-lst">
              <li class="popup-lst__item">
                <div class="popup-ctn01">
                  <div class="popup-thumb">
                    <img src="<?php echo createSVG(280, 190) ?>" data-src="<?php echo APP_ASSETS ?>img/common/mod_park/popup01.jpg" width="280" height="190" rel="js-lazy" alt="レストラン">
                  </div>
                </div>
                <div class="popup-ctn02">
                  <h3 class="popup-ttl">レストラン</h3>
                  <div class="popup-desc">
                    <p class="txt">別府湾を眺めながら、別府の恵みを味わえるハワイアンレストラン。開放感あふれる空間で朝食のビュッフェやグリル料理を堪能できます。</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="popup-btn">
        <a href="<?php echo APP_URL_EN ?>guide/restaurant/" class="c-btn02 is-center">
          <i class="arr01"></i>
          <span>もっと見る</span>
          <i class="arr02"></i>
        </a>
      </div>
      <p class="popup-close js-popupclose"><span class="btn"></span></p>
    </div>
    <div class="modal-popup js-modalpopup" id="modal02">
      <div class="modal-inner">
        <div class="modal-window">
          <div class="modal-popup__inner">
            <ul class="popup-lst">
              <li class="popup-lst__item">
                <div class="popup-ctn01">
                  <div class="popup-thumb">
                    <img src="<?php echo createSVG(280, 190) ?>" data-src="<?php echo APP_ASSETS ?>img/common/mod_park/popup02.jpg" width="280" height="190" rel="js-lazy" alt="砂湯・温泉">
                  </div>
                </div>
                <div class="popup-ctn02">
                  <h3 class="popup-ttl">砂湯・温泉</h3>
                  <div class="popup-desc">
                    <p class="txt">別府の海浜砂湯の歴史と文化を継承しつつ、新たな温泉体験を提供する「Sand Spa」。広大な施設の中には砂湯温泉だけでなく、Barや無料で利用できる足湯もお楽しみいただけます。</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="popup-btn">
        <a href="<?php echo APP_URL_EN ?>" class="c-btn02 is-center">
          <i class="arr01"></i>
          <span>もっと見る</span>
          <i class="arr02"></i>
        </a>
      </div>
      <p class="popup-close js-popupclose"><span class="btn"></span></p>
    </div>
    <div class="modal-popup js-modalpopup" id="modal03">
      <div class="modal-inner">
        <div class="modal-window">
          <div class="modal-popup__inner">
            <ul class="popup-lst">
              <li class="popup-lst__item">
                <div class="popup-ctn01">
                  <div class="popup-thumb">
                    <img src="<?php echo createSVG(280, 190) ?>" data-src="<?php echo APP_ASSETS ?>img/common/mod_park/popup03.jpg" width="280" height="190" rel="js-lazy" alt="ショップ">
                  </div>
                </div>
                <div class="popup-ctn02">
                  <h3 class="popup-ttl">ショップ</h3>
                  <div class="popup-desc">
                    <p class="txt">別府・大分の特産品やグルメを一堂に楽しめるショッピングエリア。ライフスタイルショップも楽しめる賑やかなエリアです。</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="popup-btn">
        <a href="<?php echo APP_URL_EN ?>guide/shop/" class="c-btn02 is-center">
          <i class="arr01"></i>
          <span>もっと見る</span>
          <i class="arr02"></i>
        </a>
      </div>
      <p class="popup-close js-popupclose"><span class="btn"></span></p>
    </div>
    <div class="modal-popup js-modalpopup" id="modal04">
      <div class="modal-inner">
        <div class="modal-window">
          <div class="modal-popup__inner">
            <ul class="popup-lst">
              <li class="popup-lst__item">
                <div class="popup-ctn01">
                  <div class="popup-thumb">
                    <img src="<?php echo createSVG(280, 190) ?>" data-src="<?php echo APP_ASSETS ?>img/common/mod_park/popup04.jpg" width="280" height="190" rel="js-lazy" alt="宿泊コテージ">
                  </div>
                </div>
                <div class="popup-ctn02">
                  <h3 class="popup-ttl">宿泊コテージ</h3>
                  <div class="popup-desc">
                    <p class="txt">緑豊かな森林と別府湾の美しい景色に囲まれた全7種、23室の宿泊コテージ。地元食材にこだわったお料理や砂湯、快眠を追求したベッドで、寛ぎのひとときを提供いたします。</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="popup-btn">
        <a href="<?php echo APP_URL_EN ?>" class="c-btn02 is-center">
          <i class="arr01"></i>
          <span>もっと見る</span>
          <i class="arr02"></i>
        </a>
      </div>
      <p class="popup-close js-popupclose"><span class="btn"></span></p>
    </div>
    <!-- Popup -->
  </main>
  <?php include(APP_PATH_EN . 'libs/footer.php'); ?>
</body>

</html>