<?php
$thisPageName = 'guide';
include(APP_PATH . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/guide.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="guide" class="guide">
  <?php //include(APP_PATH . 'libs/header.php'); ?>
  <main id="wrap">
    <div class="sec-mv">
      <div class="content-sec">

        <div class="img-wave-blue">
          <p class="c-mask img-l" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue_l.png" data-bgsp="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue_l.png"></p>
          <p class="c-mask img-s" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue_s.png" data-bgsp="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue_s.png"></p>
        </div>

        <!-- <p class="img-wave-blue">
          <img width="56" height="18" src="<?php echo createSVG(56, 18); ?>" data-src="<?php echo APP_ASSETS ?>img/common/ico_wave_blue.png" rel="js-lazy" alt="">
        </p> -->
        <p class="img-wave-yellow">
          <img width="56" height="18" src="<?php echo createSVG(56, 18); ?>" data-src="<?php echo APP_ASSETS ?>img/common/ico_wave_yellow.png" rel="js-lazy" alt="">
        </p>
        <p class="img-item-1">
          <img width="257" height="200" src="<?php echo createSVG(257, 200); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/item_1.png" rel="js-lazy" alt="">
        </p>
        <p class="img-item-2">
          <img width="211" height="224" src="<?php echo createSVG(211, 224); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/item_2.png" rel="js-lazy" alt="">
        </p>
        <h1 class="tit-sec">
          <span>SHONIN PARKについて</span>
          <strong class="pc">About SHONIN PARK</strong>
          <strong class="sp">About<br class="sp">SHONIN PARK</strong>
        </h1>
        <p class="desc">4つのエリアで<br class="sp">構成されているSHONIN PARK。<br>各エリアについて紹介します。</p>
      </div>
    </div>
    <div class="sec-guide">
      <div class="content-sec">
        <div class="row-guide">
          <div class="box-img">
            <img width="560" height="400" src="<?php echo createSVG(560, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/img_spa.png" rel="js-lazy" alt="">
          </div>
          <div class="box-detail">
            <h2 class="tit-box">
              <span>砂湯・温泉</span>
              <strong>Spa Sand</strong>
            </h2>
            <p class="desc">別府の海浜砂湯の歴史と文化を継承しつつ、新たな温泉体験を提供するサンドスパ。広大な砂湯施設の中にBarや無料で利用できる足湯も設置。別府の新名所として、極上のリラックス体験を提供します。</p>
            <a href="<?php echo APP_URL ?>" class="c-btn01">
              <i class="arr01"></i>
              <span>もっと見る</span>
              <i class="arr02"></i>
            </a>
            <p class="img-item-1 pc">
              <img width="123" height="98" src="<?php echo createSVG(123, 98); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/item_3.png" rel="js-lazy" alt="">
            </p>
            <p class="img-item-2">
              <img width="166" height="140" src="<?php echo createSVG(166, 140); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/item_4.png" rel="js-lazy" alt="">
            </p>
          </div>
        </div>
        <div class="row-guide row-reverse">
          <div class="box-img sp">
            <img width="560" height="400" src="<?php echo createSVG(560, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/img_shop.png" rel="js-lazy" alt="">
          </div>
          <div class="box-detail">
            <h2 class="tit-box">
              <span>ショップ</span>
              <strong>Shop</strong>
            </h2>
            <p class="desc">別府・大分の特産品やグルメを一堂に楽しめるショッピングエリア。ライフスタイルショップも楽しめる賑やかなエリアです。</p>
            <a href="<?php echo APP_URL ?>" class="c-btn01">
              <i class="arr01"></i>
              <span>もっと見る</span>
              <i class="arr02"></i>
            </a>
            <p class="img-item-3">
              <img width="117" height="119" src="<?php echo createSVG(117, 119); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/item_5.png" rel="js-lazy" alt="">
            </p>
          </div>
          <div class="box-img pc">
            <img width="560" height="400" src="<?php echo createSVG(560, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/img_shop.png" rel="js-lazy" alt="">
          </div>
        </div>
        <div class="row-guide">
          <div class="box-img">
            <img width="560" height="400" src="<?php echo createSVG(560, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/img_restaurant.png" rel="js-lazy" alt="">
          </div>
          <div class="box-detail">
            <h2 class="tit-box">
              <span>レストラン</span>
              <strong>Restaurant</strong>
            </h2>
            <p class="desc">別府湾を眺めながら、別府の恵みを味わえるハワイアンレストラン。開放感あふれる空間で朝食のビュッフェやグリル料理を楽しめます。</p>
            <a href="<?php echo APP_URL ?>" class="c-btn01">
              <i class="arr01"></i>
              <span>もっと見る</span>
              <i class="arr02"></i>
            </a>
            <p class="img-item-4">
              <img width="143" height="170" src="<?php echo createSVG(143, 170); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/item_6.png" rel="js-lazy" alt="">
            </p>
            
          </div>
        </div>
        <div class="row-guide row-reverse">
          <div class="box-img sp">
            <img width="560" height="400" src="<?php echo createSVG(560, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/img_stay.png" rel="js-lazy" alt="">
          </div>
          <div class="box-detail">
            <h2 class="tit-box">
              <span>宿泊コテージ</span>
              <strong>Stay</strong>
            </h2>
            <p class="desc">緑豊かな森林と別府湾の美しい景色に囲まれた全7種、23室の宿泊コテージ。地元食材にこだわったお料理や砂湯、快眠を追求したベッドで、寛ぎのひとときを提供いたします。</p>
            <a href="<?php echo APP_URL ?>" class="c-btn01">
              <i class="arr01"></i>
              <span>もっと見る</span>
              <i class="arr02"></i>
            </a>
            <p class="img-item-5">
              <img width="258" height="163" src="<?php echo createSVG(258, 163); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/item_7.png" rel="js-lazy" alt="">
            </p>
          </div>
          <div class="box-img pc">
            <img width="560" height="400" src="<?php echo createSVG(560, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/img_stay.png" rel="js-lazy" alt="">
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
</body>

</html>