<footer id="footer" class="footer<?php if (($thisPageName == 'guide-spa')): ?> footer03<?php endif ?>">
  <div class="f-wcm01">
    <div class="f-wrap">
      <div class="col01">
        <div class="f-logo">
          <a href="<?php echo APP_URL_KO; ?>">
            <img src="<?php echo APP_ASSETS ?>img/common/footer/f_logo.svg" alt="logo">
          </a>
        </div>
        <div class="f-info">
          <p class="txt">(우)874-0023 오이타현 벳푸시 쇼닌가하마쵸795-1</p>
          <p class="txt">전화 <a href="tel:0977-75-6363">0977-75-6363</a></p>
        </div>
      </div>
      <div class="col02">
        <div class="col02-wrap01">
          <ul class="f-navi">
            <li class="item"><a href="<?php echo APP_URL_KO ?>guide/">시설안내</a></li>
            <li class="item"><a href="<?php echo APP_URL_KO ?>ways/">즐기시는 방법</a></li>
          </ul>
          <ul class="f-navi">
            <li class="item"><a href="<?php echo APP_URL_KO ?>news/">뉴스</a></li>
            <li class="item"><a href="<?php echo APP_URL_KO ?>info/#info02">오시는 길</a></li>
          </ul>
        </div>

        <div class="col02-wrap02">
          <ul class="f-navi02">
            <li class="item"><a href="<?php if ($thisPageName != 'info') {
                                        echo APP_URL_KO . 'info/';
                                      } ?>#info01">영업시간</a></li>
            <li class="item"><a href="<?php if ($thisPageName != 'info') {
                                        echo APP_URL_KO . 'info/';
                                      } ?>#info03">주변 관광 명소</a></li>

          </ul>
          <ul class="f-navi02">
            <li class="item<?php if (($thisPageName == 'guide-spa')): ?> <?php endif; ?>"><a href="<?php if ($thisPageName != 'info') {
                                                                                                      echo APP_URL_KO . 'info/';
                                                                                                    } ?>#info04">자주 묻는 질문</a></li>
            <li class="item"><a href="<?php echo APP_URL_KO ?>contact/">문의하기</a></li>
          </ul>
        </div>

        <div class="f-social pc">
          <p class="ttl">공식 계정</p>
          <ul class="social-lst">
            <li class="item">
              <a href="https://www.tiktok.com/@tkp_resort" target="_blank" rel="noopener"><img src="<?php echo APP_ASSETS ?>img/common/footer/f_tiktok.svg" alt="logo"></a>
            </li>
            <li class="item">
              <a href="https://www.instagram.com/shonin_park_official/" target="_blank" rel="noopener"><img src="<?php echo APP_ASSETS ?>img/common/footer/f_instagram.svg" alt="logo"></a>
            </li>
            <li class="item">
              <a href="https://www.youtube.com/@tkp1727" target="_blank" rel="noopener"><img src="<?php echo APP_ASSETS ?>img/common/footer/f_youtube.svg" alt="logo"></a>
            </li>
            <li class="item">
              <a href="https://www.facebook.com/profile.php?id=61576974527300" target="_blank" rel="noopener"><img src="<?php echo APP_ASSETS ?>img/common/footer/f_facebook.svg" alt="logo"></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <ul class="f-btn">
      <li class="item">
        <a href="https://www.asoview.com/channel/tickets/KfG8g2DPlR/" target="_blank" rel="noopener" class="c-btn03 is-center">
          <i class="arr01"></i><span>모래찜질・온천 예약</span><i class="arr02"></i>
        </a>
      </li>
      <li class="item">
        <a href="https://yoyaku.tabelog.com/yoyaku/net_booking_form/index?rcd=44014354" target="_blank" rel="noopener" class="c-btn03 is-center">
          <i class="arr01"></i><span>레스토랑 예약</span><i class="arr02"></i>
        </a>
      </li>
      <li class="item">
        <a href="https://reserve.489ban.net/client/ishinoya-beppu/3/plan/stay" target="_blank" rel="noopener" class="c-btn03 is-center">
          <i class="arr01"></i><span>숙박 코티지 예약</span><i class="arr02"></i>
        </a>
      </li>
    </ul>
    <div class="f-social sp">
      <ul class="social-lst">
        <li class="item">
          <a href="https://www.tiktok.com/@tkp_resort" target="_blank" rel="noopener"><img src="<?php echo APP_ASSETS ?>img/common/footer/f_tiktok.svg" alt="logo"></a>
        </li>
        <li class="item">
          <a href="https://www.instagram.com/shonin_park_official/" target="_blank" rel="noopener"><img src="<?php echo APP_ASSETS ?>img/common/footer/f_instagram.svg" alt="logo"></a>
        </li>
        <li class="item">
          <a href="https://www.youtube.com/@tkp1727" target="_blank" rel="noopener"><img src="<?php echo APP_ASSETS ?>img/common/footer/f_youtube.svg" alt="logo"></a>
        </li>
        <li class="item">
          <a href="https://www.facebook.com/profile.php?id=61576974527300" target="_blank" rel="noopener"><img src="<?php echo APP_ASSETS ?>img/common/footer/f_facebook.svg" alt="logo"></a>
        </li>
      </ul>
    </div>
    <ul class="f-copyright">
      <li class="item">
        <a class="link" href="<?php echo APP_URL_KO ?>rule/">이용약관</a>
        <a class="link is-exter" href="https://www.tkp.jp/privacy/" target="_blank" rel="noopener">개인정보 보호정책</a>
      </li>
      <li class="item">
        <p class="ttl01">운영회사</p>
        <a class="link" href="https://www.tkp.jp/" target="_blank" rel="noopener">주식회사TKP</a>
      </li>
      <li class="item">
        <p class="ttl02">COPYRIGHT©2025 SHONIN PARK</p>
      </li>
    </ul>
  </div>
</footer>

<p class="f-scrolltop" id="gototop">
  <span class="arr"></span>
</p>

<script>
  var JS_APP_URL = '<?php echo APP_URL ?>';
  var JS_APP_ASSETS = '<?php echo APP_ASSETS ?>';
</script>
<script src="<?php echo APP_ASSETS; ?>js/common.min.js?v=<?php echo APP_VER ?>"></script>