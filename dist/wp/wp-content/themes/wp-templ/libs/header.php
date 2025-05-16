<!-- Google Tag Manager (noscript) -->
<!-- End Google Tag Manager (noscript) -->

<header id="header" class="header">
  <div class="inHeader">
    <div id="logo">
      <a href="<?php echo APP_URL ?>">
        <img class="logo-black" src="<?php echo APP_ASSETS ?>img/common/logo.svg" alt="logo">
        <img class="logo-white" src="<?php echo APP_ASSETS ?>img/common/logo_white.svg" alt="logo">
      </a>
    </div>
    <p class="hamberger"><span class="ham"> </span><span class="ber"> </span></p>
    <div class="layerMenu">
      <div class="inLayer">
        <ul class="gNavi">
          <li class="gNavi-item"><a href="<?php echo APP_URL ?>guide/"><span>施設案内</span></a></li>
          <li class="gNavi-item"><a href="<?php echo APP_URL ?>ways/"><span>楽しみ方</span></a></li>
          <li class="gNavi-item"><a href="<?php echo APP_URL ?>news/"><span>ニュース</span></a></li>
          <li class="gNavi-item"><a href="<?php if ($thisPageName != 'info') {
                                            echo APP_URL . 'info/';
                                          } ?>#info02"><span>アクセス</span></a></li>
        </ul>
        <ul class="gNavi02">
          <li class="gNavi02-item">
            <a href="<?php if ($thisPageName != 'info') {
                        echo APP_URL . 'info/';
                      } ?>#info01"><span>営業時間</span></a>
          </li>
          <li class="gNavi02-item">
            <a href="<?php if ($thisPageName != 'info') {
                        echo APP_URL . 'info/';
                      } ?>#info03"><span>周辺観光</span></a>
          </li>
          <li class="gNavi02-item">
            <a href="<?php if ($thisPageName != 'info') {
                        echo APP_URL . 'info/';
                      } ?>#info04"><span>よくあるご質問</span></a>
          </li>
          <li class="gNavi02-item">
            <a href="<?php echo APP_URL ?>contact/"><span>お問い合わせ</span></a>
          </li>
        </ul>
        <p class="gReservat-ttl">
          <span class="txt">RESERVATION</span>
        </p>
        <ul class="gReservat">
          <li class="gReservat-item">
            <a href="<?php echo APP_URL ?>" class="c-btn01 is-center">
              <i class="arr01"></i>
              <span>砂湯・温泉予約</span>
              <i class="arr02"></i>
            </a>
          </li>
          <li class="gReservat-item">
            <a href="<?php echo APP_URL ?>" class="c-btn01 is-center">
              <i class="arr01"></i>
              <span>レストラン予約</span>
              <i class="arr02"></i>
            </a>
          </li>
          <li class="gReservat-item">
            <a href="<?php echo APP_URL ?>" class="c-btn01 is-center">
              <i class="arr01"></i>
              <span>宿泊コテージ予約</span>
              <i class="arr02"></i>
            </a>
          </li>
        </ul>
        <div class="gOfficial-ctn">
          <p class="gOfficia-ttl pc">OFFICIAL SNS</p>
          <ul class="gOfficial">
            <li class="gOfficial-item">
              <a href="<?php echo APP_URL ?>">
                <img src="<?php echo createSVG(40, 40) ?>" data-src="<?php echo APP_ASSETS; ?>img/common/header/ico_tiktok.svg" rel="js-lazy" width="40" height="40" alt="">
              </a>
            </li>
            <li class="gOfficial-item">
              <a href="<?php echo APP_URL ?>">
                <img src="<?php echo createSVG(40, 40) ?>" data-src="<?php echo APP_ASSETS; ?>img/common/header/ico_instagram.svg" rel="js-lazy" width="40" height="40" alt="">
              </a>
            </li>
            <li class="gOfficial-item">
              <a href="<?php echo APP_URL ?>">
                <img src="<?php echo createSVG(40, 40) ?>" data-src="<?php echo APP_ASSETS; ?>img/common/header/ico_youtube.svg" rel="js-lazy" width="40" height="40" alt="">
              </a>
            </li>
            <li class="gOfficial-item">
              <a href="<?php echo APP_URL ?>">
                <img src="<?php echo createSVG(40, 40) ?>" data-src="<?php echo APP_ASSETS; ?>img/common/header/ico_facebook.svg" rel="js-lazy" width="40" height="40" alt="">
              </a>
            </li>
          </ul>
          <ul class="gOfficial-lang sp">
            <li class="item is-active"><a href="<?php echo APP_URL ?>">日本語</a></li>
            <li class="item"><a href="<?php echo APP_URL ?>">English</a></li>
            <li class="item"><a href="<?php echo APP_URL ?>">한국어</a></li>
            <li class="item"><a href="<?php echo APP_URL ?>">中文簡体</a></li>
          </ul>
        </div>
        <p class="close_layer"></p>
      </div>
    </div>
    <div class="layerMenuPC">
      <ul class="gNaviPC">
        <li class="gNaviPC-item hasSub">
          <a class="gNaviPC-item__link" href="<?php echo APP_URL ?>guide/">
            <i class="icon">
              <img src="<?php echo createSVG(24, 24) ?>" data-src="<?php echo APP_ASSETS ?>img/common/header/ico_menu01.svg" width="24" height="24" rel="js-lazy" alt="">
            </i>
            <span>施設案内</span>
          </a>
          <div class="navSub">
            <ul class="navSub-lst">
              <li class="item"><a href="<?php echo APP_URL ?>">砂湯・温泉</a></li>
              <li class="item"><a href="<?php echo APP_URL ?>guide/shop/">ショップ</a></li>
              <li class="item"><a href="<?php echo APP_URL ?>guide/restaurant/">レストラン</a></li>
              <li class="item"><a href="<?php echo APP_URL ?>">宿泊コテージ</a></li>
            </ul>
          </div>
        </li>
        <li class="gNaviPC-item">
          <a class="gNaviPC-item__link" href="<?php echo APP_URL ?>ways/">
            <i class="icon">
              <img src="<?php echo createSVG(24, 24) ?>" data-src="<?php echo APP_ASSETS ?>img/common/header/ico_menu02.svg" width="24" height="24" rel="js-lazy" alt="">
            </i>
            <span>楽しみ方</span>
          </a>
        </li>
        <li class="gNaviPC-item">
          <a class="gNaviPC-item__link" href="<?php echo APP_URL ?>news/">
            <i class="icon">
              <img src="<?php echo createSVG(24, 24) ?>" data-src="<?php echo APP_ASSETS ?>img/common/header/ico_menu03.svg" width="24" height="24" rel="js-lazy" alt="">
            </i>
            <span>ニュース</span>
          </a>
        </li>
        <li class="gNaviPC-item">
          <a class="gNaviPC-item__link" href="<?php if ($thisPageName != 'info') {
                                                echo APP_URL . 'info/';
                                              } ?>#info02">
            <i class="icon">
              <img src="<?php echo createSVG(24, 24) ?>" data-src="<?php echo APP_ASSETS ?>img/common/header/ico_menu04.svg" width="24" height="24" rel="js-lazy" alt="">
            </i>
            <span>アクセス</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="btnLang">
      <div class="gLang">
        <div class="gLang-item hasSub">
          <p class="gLang-item__link">
            <i class="icon">
              <img class="main" src="<?php echo createSVG(24, 24) ?>" data-src="<?php echo APP_ASSETS ?>img/common/header/ico_lang_main.svg" width="24" height="24" rel="js-lazy" alt="">
              <img class="circle" src="<?php echo createSVG(24, 24) ?>" data-src="<?php echo APP_ASSETS ?>img/common/header/ico_lang_circle.svg" width="24" height="24" rel="js-lazy" alt="">
            </i>
            <span>Language</span>
          </p>
          <div class="navSub">
            <ul class="navSub-lst">
              <li class="item"><a href="<?php echo APP_URL ?>">日本語</a></li>
              <li class="item"><a href="<?php echo APP_URL ?>">English</a></li>
              <li class="item"><a href="<?php echo APP_URL ?>">한국어</a></li>
              <li class="item"><a href="<?php echo APP_URL ?>">中文簡体</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="menu_overlay"></div>
  </div>
</header>