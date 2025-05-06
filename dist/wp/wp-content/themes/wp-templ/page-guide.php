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
        <p class="img-wave-blue">
          <img width="56" height="18" src="<?php echo createSVG(56, 18); ?>" data-src="<?php echo APP_ASSETS ?>img/common/ico_wave_blue.png" rel="js-lazy" alt="">
        </p>
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
          <strong>About SHONIN PARK</strong>
        </h1>
        <p class="desc">4つのエリアで構成されているSHONIN PARK。<br>各エリアについて紹介します。</p>
      </div>
    </div>
    <div class="sec-guide">
      <div class="content-sec">
        <div class="row-guide">
          <div class="box-left">
            <img width="560" height="400" src="<?php echo createSVG(560, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/img_spa.png" rel="js-lazy" alt="">
          </div>
          <div class="box-right">
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
            <p class="img-item-3">
              <img width="123" height="98" src="<?php echo createSVG(123, 98); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/item_3.png" rel="js-lazy" alt="">
            </p>
            <p class="img-item-4">
              <img width="166" height="140" src="<?php echo createSVG(166, 140); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/item_4.png" rel="js-lazy" alt="">
            </p>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
</body>

</html>