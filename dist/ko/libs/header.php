<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5L4KRFL6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header id="header" class="header">
  <div class="inHeader">
    <div id="logo">
      <a href="<?php echo APP_URL_KO ?>">
        <img class="logo-black" src="<?php echo APP_ASSETS ?>img/common/logo.svg" alt="logo">
        <img class="logo-white" src="<?php echo APP_ASSETS ?>img/common/logo_white.svg" alt="logo">
      </a>
    </div>
    <p class="hamberger"><span class="ham"> </span><span class="ber"> </span></p>
    <div class="layerMenu">
      <div class="inLayer">
        <ul class="gNavi">
          <li class="gNavi-item"><a href="<?php echo APP_URL_KO ?>guide/"><span>시설안내</span></a></li>
          <li class="gNavi-item"><a href="<?php echo APP_URL_KO ?>ways/"><span>즐기시는 방법</span></a></li>
          <li class="gNavi-item"><a href="<?php echo APP_URL_KO ?>news/"><span>뉴스</span></a></li>
          <li class="gNavi-item"><a href="<?php if ($thisPageName != 'info') {
                                            echo APP_URL_KO . 'info/';
                                          } ?>#info02"><span>오시는 길</span></a></li>
        </ul>
        <ul class="gNavi02">
          <li class="gNavi02-item">
            <a href="<?php if ($thisPageName != 'info') {
                        echo APP_URL_KO . 'info/';
                      } ?>#info01"><span>영업시간</span></a>
          </li>
          <li class="gNavi02-item">
            <a href="<?php if ($thisPageName != 'info') {
                        echo APP_URL_KO . 'info/';
                      } ?>#info03"><span>주변 관광 명소</span></a>
          </li>
          <li class="gNavi02-item">
            <a href="<?php if ($thisPageName != 'info') {
                        echo APP_URL_KO . 'info/';
                      } ?>#info04"><span>자주 묻는 질문</span></a>
          </li>
          <li class="gNavi02-item">
            <a href="<?php echo APP_URL_KO ?>contact/"><span>문의하기</span></a>
          </li>
        </ul>
        <p class="gReservat-ttl">
          <span class="txt">예약</span>
        </p>
        <ul class="gReservat">
          <li class="gReservat-item">
            <a href="https://www.asoview.com/channel/tickets/KfG8g2DPlR/" target="_blank" rel="noopener" class="c-btn01 is-center">
              <i class="arr01"></i>
              <span>모래찜질・온천 예약</span>
              <i class="arr02"></i>
            </a>
          </li>
          <li class="gReservat-item">
            <a href="https://yoyaku.tabelog.com/yoyaku/net_booking_form/index?rcd=44014354" target="_blank" rel="noopener" class="c-btn01 is-center">
              <i class="arr01"></i>
              <span>레스토랑 예약</span>
              <i class="arr02"></i>
            </a>
          </li>
          <li class="gReservat-item">
            <a href="https://reserve.489ban.net/client/ishinoya-beppu/3/plan/stay" target="_blank" rel="noopener" class="c-btn01 is-center">
              <i class="arr01"></i>
              <span>숙박 코티지 예약</span>
              <i class="arr02"></i>
            </a>
          </li>
        </ul>
        <div class="gOfficial-ctn">
          <p class="gOfficia-ttl pc">공식 계정</p>
          <ul class="gOfficial">
            <li class="gOfficial-item">
              <a href="https://www.tiktok.com/@tkp_resort" target="_blank" rel="noopener">
                <img src="<?php echo createSVG(40, 40) ?>" data-src="<?php echo APP_ASSETS; ?>img/common/header/ico_tiktok.svg" rel="js-lazy" width="40" height="40" alt="Tiktok">
              </a>
            </li>
            <li class="gOfficial-item">
              <a href="https://www.instagram.com/shonin_park_official/" target="_blank" rel="noopener">
                <img src="<?php echo createSVG(40, 40) ?>" data-src="<?php echo APP_ASSETS; ?>img/common/header/ico_instagram.svg" rel="js-lazy" width="40" height="40" alt="Instagram">
              </a>
            </li>
            <li class="gOfficial-item">
              <a href="https://www.youtube.com/@tkp1727" target="_blank" rel="noopener">
                <img src="<?php echo createSVG(40, 40) ?>" data-src="<?php echo APP_ASSETS; ?>img/common/header/ico_youtube.svg" rel="js-lazy" width="40" height="40" alt="Youtube">
              </a>
            </li>
            <li class="gOfficial-item">
              <a href="https://www.facebook.com/profile.php?id=61576974527300" target="_blank" rel="noopener">
                <img src="<?php echo createSVG(40, 40) ?>" data-src="<?php echo APP_ASSETS; ?>img/common/header/ico_facebook.svg" rel="js-lazy" width="40" height="40" alt="Facebook">
              </a>
            </li>
          </ul>
          <ul class="gOfficial-lang sp">
            <li class="item"><a href="<?php echo APP_URL ?><?php echo $curr_path; ?>">日本語</a></li>
            <li class="item"><a href="<?php echo APP_URL_EN ?><?php echo $curr_path; ?>">English</a></li>
            <li class="item is-active"><a href="<?php echo APP_URL_KO ?><?php echo $curr_path; ?>">한국어</a></li>
            <li class="item"><a href="<?php echo APP_URL_CN ?><?php echo $curr_path; ?>">中文簡体</a></li>
          </ul>
        </div>
        <p class="close_layer"></p>
      </div>
    </div>
    <div class="layerMenuPC">
      <ul class="gNaviPC">
        <li class="gNaviPC-item hasSub">
          <a class="gNaviPC-item__link is-link" href="<?php echo APP_URL_KO ?>guide/">
            <i class="icon">
              <img src="<?php echo createSVG(24, 24) ?>" data-src="<?php echo APP_ASSETS ?>img/common/header/ico_menu01.svg" width="24" height="24" rel="js-lazy" alt="">
            </i>
            <span>시설안내</span>
          </a>
          <div class="navSub">
            <ul class="navSub-lst">
              <li class="item"><a href="<?php echo APP_URL_KO ?>guide/spa/">벳푸 모래찜질</a></li>
              <li class="item"><a href="<?php echo APP_URL_KO ?>guide/shop/">숍</a></li>
              <li class="item"><a href="<?php echo APP_URL_KO ?>guide/restaurant/">레스토랑</a></li>
              <li class="item"><a href="<?php echo APP_URL_KO ?>guide/ishinoya/">숙박 코티지</a></li>
            </ul>
          </div>
        </li>
        <li class="gNaviPC-item">
          <a class="gNaviPC-item__link" href="<?php echo APP_URL_KO ?>ways/">
            <i class="icon">
              <img src="<?php echo createSVG(24, 24) ?>" data-src="<?php echo APP_ASSETS ?>img/common/header/ico_menu02.svg" width="24" height="24" rel="js-lazy" alt="">
            </i>
            <span>즐기시는 방법</span>
          </a>
        </li>
        <li class="gNaviPC-item">
          <a class="gNaviPC-item__link" href="<?php echo APP_URL_KO ?>news/">
            <i class="icon">
              <img src="<?php echo createSVG(24, 24) ?>" data-src="<?php echo APP_ASSETS ?>img/common/header/ico_menu03.svg" width="24" height="24" rel="js-lazy" alt="">
            </i>
            <span>뉴스</span>
          </a>
        </li>
        <li class="gNaviPC-item">
          <a class="gNaviPC-item__link" href="<?php if ($thisPageName != 'info') {
                                                echo APP_URL_KO . 'info/';
                                              } ?>#info02">
            <i class="icon">
              <img src="<?php echo createSVG(24, 24) ?>" data-src="<?php echo APP_ASSETS ?>img/common/header/ico_menu04.svg" width="24" height="24" rel="js-lazy" alt="">
            </i>
            <span>오시는 길</span>
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
              <li class="item"><a href="<?php echo APP_URL ?><?php echo $curr_path; ?>">日本語</a></li>
              <li class="item"><a href="<?php echo APP_URL_EN ?><?php echo $curr_path; ?>">English</a></li>
              <li class="item"><a href="<?php echo APP_URL_KO ?><?php echo $curr_path; ?>">한국어</a></li>
              <li class="item"><a href="<?php echo APP_URL_CN ?><?php echo $curr_path; ?>">中文简体</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="btnReser">
      <div class="gResert-overlay"></div>
      <div class="gResert">
        <div class="gResert-item hasSub">
          <p class="gResert-item__link">
            <span>예약하기</span>
          </p>
          <div class="navSub">
            <ul class="navSub-lst">
              <li class="item">
                <a href="https://www.asoview.com/channel/tickets/KfG8g2DPlR/" target="_blank" rel="noopener" class="c-btn01">
                  <i class="arr01"></i>
                  <span>모래찜질・온천 예약</span>
                  <i class="arr02"></i>
                </a>
              </li>
              <li class="item">
                <a href="https://yoyaku.tabelog.com/yoyaku/net_booking_form/index?rcd=44014354" target="_blank" rel="noopener" class="c-btn01">
                  <i class="arr01"></i>
                  <span>레스토랑 예약</span>
                  <i class="arr02"></i>
                </a>
              </li>
              <li class="item">
                <a href="https://reserve.489ban.net/client/ishinoya-beppu/3/plan/stay" target="_blank" rel="noopener" class="c-btn01">
                  <i class="arr01"></i>
                  <span>숙박 코티지 예약</span>
                  <i class="arr02"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="menu_overlay"></div>
  </div>
</header>