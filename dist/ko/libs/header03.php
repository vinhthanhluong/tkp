<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5L4KRFL6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header class="header03">
  <div class="header-inner">
    <a class="header-logo" href="<?php echo APP_URL_KO ?>"><img src="<?php echo createSVG(175, 55); ?>" data-src="<?php echo APP_ASSETS ?>img/common/logo.svg" rel="js-lazy" width="175" height="55" alt="logo"></a>
    <nav class="header-info">
      <ul class="header-menu pc js-header-menu-drop">
        <li class="has-sub">
          <a class="menu-link c-txt-hover" href="<?php echo APP_URL_KO ?>guide/">
            <span class="txt-wrap">
              <span class="txt-default">시설안내</span>
              <span class="txt-on">시설안내</span>
            </span>
          </a>
          <div class="header-mega">
            <ul class="menu-list">
              <li><a href="<?php echo APP_URL_KO ?>guide/spa/">벳푸 모래찜질</a></li>
              <li><a href="<?php echo APP_URL_KO ?>guide/shop/">숍</a></li>
              <li><a href="<?php echo APP_URL_KO ?>guide/restaurant/">레스토랑</a></li>
              <li><a href="<?php echo APP_URL_KO ?>guide/ishinoya/">숙박 코티지</a></li>
            </ul>
          </div>
        </li>
        <li>
          <a class="menu-link c-txt-hover" href="<?php echo APP_URL_KO ?>ways/">
            <span class="txt-wrap">
              <span class="txt-default">즐기시는 방법</span>
              <span class="txt-on">즐기시는 방법</span>
            </span>
          </a>
        </li>
        <li>
          <a class="menu-link c-txt-hover" href="<?php echo APP_URL_KO ?>news/">
            <span class="txt-wrap">
              <span class="txt-default">뉴스</span>
              <span class="txt-on">뉴스</span>
            </span>
          </a>
        </li>
        <li>
          <a class="menu-link c-txt-hover" href="<?php if ($thisPageName != 'info') {
                                                    echo APP_URL_KO . 'info/';
                                                  } ?>#info02">
            <span class="txt-wrap">
              <span class="txt-default">오시는 길</span>
              <span class="txt-on">오시는 길</span>
            </span>
          </a>
        </li>
        <li class="language has-sub">
          <span class="menu-link c-txt-hover">
            <span class="txt-wrap">
              <span class="txt-default">Language</span>
              <span class="txt-on">Language</span>
            </span>
          </span>
          <div class="header-mega">
            <ul class="menu-list">
              <li><a href="<?php echo APP_URL ?><?php echo $curr_path; ?>">日本語</a></li>
              <li class="txt-language"><a href="<?php echo APP_URL_EN ?><?php echo $curr_path; ?>">English</a></li>
              <li><a href="<?php echo APP_URL_KO ?><?php echo $curr_path; ?>">한국어</a></li>
              <li><a href="<?php echo APP_URL_CN ?><?php echo $curr_path; ?>">中文簡体</a></li>
            </ul>
          </div>
        </li>
      </ul>
      <a class="header-btn c-txt-hover pc" href="https://www.asoview.com/channel/tickets/KfG8g2DPlR/" target="_blank" rel="noopener nofollow">
        <span class="txt-wrap">
          <span class="txt-default">모래찜질・온천 예약</span>
          <span class="txt-on">모래찜질・온천 예약</span>
        </span>
      </a>
      <div class="hamburger-btn hamberger"></div>
      <div class="navigation layerMenu">
        <div class="navigation-inner">
          <p class="navigation-close close_layer"></p>
          <div class="navigation-row">
            <ul class="navigation-menu fs">
              <li class="is-col01"><a href="<?php echo APP_URL_KO ?>guide/">시설안내</a></li>
              <li class="is-col is-col01 is-order01"><a href="<?php echo APP_URL_KO ?>ways/">즐기시는 방법</a></li>
              <li class="is-col02 is-order02"><a href="<?php echo APP_URL_KO ?>news/">뉴스</a></li>
              <li class="is-col is-col02 is-order03"><a href="<?php if ($thisPageName != 'info') {
                                                                echo APP_URL_KO . 'info/';
                                                              } ?>#info02">오시는 길</a></li>
            </ul>
            <ul class="navigation-menu">
              <li class="is-col01"><a href="<?php if ($thisPageName != 'info') {
                                              echo APP_URL_KO . 'info/';
                                            } ?>#info01">영업시간</a></li>
              <li class="is-col02 sp"><a href="<?php echo APP_URL_KO ?>">주변 관광 명소</a></li>
              <li class="is-col is-col01"><a href="<?php if ($thisPageName != 'info') {
                                                      echo APP_URL_KO . 'info/';
                                                    } ?>#info03">자주 묻는 질문</a></li>
              <li class="is-col01 is-order04"><a href="<?php if ($thisPageName != 'info') {
                                                          echo APP_URL_KO . 'info/';
                                                        } ?>#info04">문의하기</a></li>
              <li class="is-col is-col02 is-order05"><a href="<?php echo APP_URL_KO ?>contact/">문의하기</a></li>
            </ul>
          </div>
          <div class="navigation-row">
            <p class="navigation-ttl">예약</p>
            <ul class="navigation-btn">
              <li>
                <a class="c-btn04" href="https://www.asoview.com/channel/tickets/KfG8g2DPlR/" target="_blank" rel="noopener nofollow">
                  <span>모래찜질・온천 예약</span>
                </a>
              </li>
              <li>
                <a class="c-btn04" href="https://yoyaku.tabelog.com/yoyaku/net_booking_form/index?rcd=44014354" target="_blank" rel="noopener nofollow">
                  <span>레스토랑 예약</span>
                </a>
              </li>
              <li>
                <a class="c-btn04" href="https://reserve.489ban.net/client/ishinoya-beppu/0/plan" target="_blank" rel="noopener nofollow">
                  <span>숙박 코티지 예약</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="navigation-row">
            <p class="navigation-ttl is-space pc">공식 계정</p>
            <ul class="navigation-sns">
              <li>
                <a href="https://www.tiktok.com/@tkp_resort" target="_blank" rel="noopener nofollow">
                  <img src="<?php echo createSVG(40, 40); ?>" data-src="<?php echo APP_ASSETS ?>img/common/footer/f_tiktok.svg" rel="js-lazy" width="40" height="40" alt="Tiktok">
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/shonin_park_official/" target="_blank" rel="noopener nofollow">
                  <img src="<?php echo createSVG(40, 40); ?>" data-src="<?php echo APP_ASSETS ?>img/common/footer/f_instagram.svg" rel="js-lazy" width="40" height="40" alt="Instagram">
                </a>
              </li>
              <li>
                <a href="https://www.youtube.com/@tkp1727" target="_blank" rel="noopener nofollow">
                  <img src="<?php echo createSVG(40, 40); ?>" data-src="<?php echo APP_ASSETS ?>img/common/footer/f_youtube.svg" rel="js-lazy" width="40" height="40" alt="Youtube">
                </a>
              </li>
              <li>
                <a href="https://www.facebook.com/profile.php?id=61576974527300" target="_blank" rel="noopener nofollow">
                  <img src="<?php echo createSVG(40, 40); ?>" data-src="<?php echo APP_ASSETS ?>img/common/footer/f_facebook.svg" rel="js-lazy" width="40" height="40" alt="Facebook">
                </a>
              </li>
            </ul>
            <ul class="language-list sp">
              <li><a class="is-active" href="<?php echo APP_URL ?><?php echo $curr_path; ?>">日本語</a></li>
              <li class="language-txt"><a href="<?php echo APP_URL_EN ?><?php echo $curr_path; ?>">English</a></li>
              <li><a href="<?php echo APP_URL_KO ?><?php echo $curr_path; ?>">한국어</a></li>
              <li><a href="<?php echo APP_URL_CN ?><?php echo $curr_path; ?>">中文簡体</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="menu_overlay"></div>
    </nav>
  </div>
</header>