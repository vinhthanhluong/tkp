<?php
$thisPageName = 'info';
include(dirname(__DIR__) . '/app_config.php');
include(APP_PATH . 'libs/head.php'); ?>
</head>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/info.min.css?v=<?php echo APP_VER ?>">

<body id="info">
  <?php include(APP_PATH . 'libs/header.php'); ?>
  <main id="wrap">
    <div class="c-breadcrumb aos-init" data-aos="fade-up">
      <ul>
        <li><a href="<?php echo APP_URL; ?>">TOP</a></li>
        <li>施設情報</li>
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
          <span class="mv-ttl-jp">施設情報</span>
          <span class="mv-ttl-en">Information</span>
        </h1>
      </div>
    </div>
    <div class="sec-anchor">
      <div class="inner1170">
        <ul class="lst-anchor">
          <li><a href="#info01" class="c-btn01 btn-anchor">
            <i class="arr01"></i>
            <span>
              <em class="icon icon__off"><img src="<?php echo createSVG(24, 22); ?>" data-src="<?php echo APP_ASSETS; ?>img/info/anchor01_icn.svg" rel="js-lazy" width="24" height="22" alt=""></em>
              <em class="icon icon__on"><img src="<?php echo createSVG(24, 22); ?>" data-src="<?php echo APP_ASSETS; ?>img/info/anchor01_icn_hv.svg" rel="js-lazy" width="24" height="22" alt=""></em>
              営業時間
            </span>
            <i class="arr02"></i>
          </a></li> 
          <li><a href="#info02" class="c-btn01 btn-anchor">
            <i class="arr01"></i>
            <span>
            <em class="icon icon__off"><img src="<?php echo createSVG(24, 22); ?>" data-src="<?php echo APP_ASSETS; ?>img/info/anchor02_icn.svg" rel="js-lazy" width="24" height="22" alt=""></em>
            <em class="icon icon__on"><img src="<?php echo createSVG(24, 22); ?>" data-src="<?php echo APP_ASSETS; ?>img/info/anchor02_icn_hv.svg" rel="js-lazy" width="24" height="22" alt=""></em>
            アクセス</span>
            <i class="arr02"></i>
          </a></li> 
          <li><a href="#info03" class="c-btn01 btn-anchor">
            <i class="arr01"></i>
            <span>
            <em class="icon icon__off"><img src="<?php echo createSVG(24, 22); ?>" data-src="<?php echo APP_ASSETS; ?>img/info/anchor03_icn.svg" rel="js-lazy" width="24" height="22" alt=""></em>
            <em class="icon icon__on"><img src="<?php echo createSVG(24, 22); ?>" data-src="<?php echo APP_ASSETS; ?>img/info/anchor03_icn_hv.svg" rel="js-lazy" width="24" height="22" alt=""></em>
            周辺観光</span>
            <i class="arr02"></i>
          </a></li> 
          <li><a href="#info04" class="c-btn01 btn-anchor">
            <i class="arr01"></i>
            <span>
            <em class="icon icon__off"><img src="<?php echo createSVG(24, 22); ?>" data-src="<?php echo APP_ASSETS; ?>img/info/anchor04_icn.svg" rel="js-lazy" width="24" height="22" alt=""></em>
            <em class="icon icon__on"><img src="<?php echo createSVG(24, 22); ?>" data-src="<?php echo APP_ASSETS; ?>img/info/anchor04_icn_hv.svg" rel="js-lazy" width="24" height="22" alt=""></em>
            よくあるご質問</span>
            <i class="arr02"></i>
          </a></li> 
        </ul>
      </div>
    </div>
    <div class="sec-info01 c-bgwave01" id="info01">
      <div class="inner1170">
        
      </div>
    </div>
  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
</body>
</html>