<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5L4KRFL6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header id="header02" class="header02">
  <div class="inHeader">
    <div id="logo">
      <a class="logo-link" href="<?php echo APP_URL ?>">
        <img src="<?php echo APP_ASSETS ?>img/common/logo02.svg" alt="logo">
      </a>
      <a class="home-link" href="<?php echo APP_URL; ?>">
        <span class="txt">SHONIN PARK</span>
      </a>
    </div>
    <p class="hamberger"><span class="ham"> </span><span class="ber"> </span></p>

    <div class="layerMenu">
      <div class="inLayer">
        <ul class="gNavi">
          <li class="gNavi-item"><a href="<?php echo APP_URL ?>"><span>お部屋</span></a></li>
          <li class="gNavi-item"><a href="<?php echo APP_URL ?>"><span>温泉・砂湯</span></a></li>
          <li class="gNavi-item"><a href="<?php echo APP_URL ?>"><span>お食事</span></a></li>
          <li class="gNavi-item"><a href="<?php echo APP_URL ?>"><span>お問い合わせ</span></a></li>
        </ul>
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
                <li class="item"><a href="<?php echo APP_URL ?><?php echo $curr_path; ?>">日本語</a></li>
                <li class="item"><a href="<?php echo APP_URL_EN ?><?php echo $curr_path; ?>">English</a></li>
                <li class="item"><a href="<?php echo APP_URL_KO ?><?php echo $curr_path; ?>">한국어</a></li>
                <li class="item"><a href="<?php echo APP_URL_ZH ?><?php echo $curr_path; ?>">中文簡体</a></li>
              </ul>
            </div>
          </div>
        </div>
        <ul class="gBtn">
          <li class="gBtn-item"><a href="<?php echo APP_URL ?>"><span>予約確認</span></a></li>
          <li class="gBtn-item"><a href="<?php echo APP_URL ?>"><span>宿泊予約</span></a></li>
        </ul>

      </div>
    </div>

    <div class="menu_overlay"></div>
  </div>
</header>