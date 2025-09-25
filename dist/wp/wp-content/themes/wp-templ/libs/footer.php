<footer id="footer" class="footer<?php if (($thisPageName == 'guide-spa')): ?> footer03<?php endif ?>">
  <div class="f-wcm01">
    <div class="f-wrap">
      <div class="col01">
        <div class="f-logo">
          <a href="<?php echo APP_URL; ?>">
            <img src="<?php echo APP_ASSETS ?>img/common/footer/f_logo.svg" alt="logo">
          </a>
        </div>
        <div class="f-info">
          <p class="txt">〒874-0023 大分県別府市上人ケ浜町795-1</p>
          <p class="txt">TEL <a href="tel:0977-75-6363">0977-75-6363</a></p>
        </div>
      </div>
      <div class="col02">
        <div class="col02-wrap01">
          <ul class="f-navi">
            <li class="item"><a href="<?php echo APP_URL ?>guide/">施設案内</a></li>
            <li class="item"><a href="<?php echo APP_URL ?>ways/">楽しみ方</a></li>
          </ul>
          <ul class="f-navi">
            <li class="item"><a href="<?php echo APP_URL ?>news/">ニュース</a></li>
            <li class="item"><a href="<?php if ($thisPageName != 'info') {
                                        echo APP_URL . 'info/';
                                      } ?>#info02">アクセス</a></li>
          </ul>
        </div>

        <div class="col02-wrap02">
          <ul class="f-navi02">
            <li class="item"><a href="<?php if ($thisPageName != 'info') {
                                        echo APP_URL . 'info/';
                                      } ?>#info01">営業時間</a></li>
            <li class="item"><a href="<?php if ($thisPageName != 'info') {
                                        echo APP_URL . 'info/';
                                      } ?>#info03">周辺観光</a></li>
            <?php if (($thisPageName == 'guide-spa')): ?><li class="item sp"><a href="<?php if ($thisPageName != 'info') {
                                                                                        echo APP_URL . 'info/';
                                                                                      } ?>#info04">よくあるご質問</a></li><?php endif; ?>
          </ul>
          <ul class="f-navi02">
            <?php if (($thisPageName == 'guide-spa')): ?><li class="item sp"><a class="is-blank" href="#" target="_blank" rel="noopener nofollow">採用情報</a></li><?php endif; ?>
            <li class="item<?php if (($thisPageName == 'guide-spa')): ?> pc<?php endif; ?>"><a href="<?php if ($thisPageName != 'info') {
                                                                                                        echo APP_URL . 'info/';
                                                                                                      } ?>#info04">よくあるご質問</a></li>
            <li class="item"><a href="<?php echo APP_URL ?>contact/">お問い合わせ</a></li>
          </ul>
        </div>

        <div class="f-social pc">
          <p class="ttl">Official SNS</p>
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
          <i class="arr01"></i><span>砂湯・温泉予約</span><i class="arr02"></i>
        </a>
      </li>
      <li class="item">
        <a href="https://yoyaku.tabelog.com/yoyaku/net_booking_form/index?rcd=44014354" target="_blank" rel="noopener" class="c-btn03 is-center">
          <i class="arr01"></i><span>レストラン予約</span><i class="arr02"></i>
        </a>
      </li>
      <li class="item">
        <a href="https://reserve.489ban.net/client/ishinoya-beppu/0/plan" target="_blank" rel="noopener" class="c-btn03 is-center">
          <i class="arr01"></i><span>宿泊コテージ予約</span><i class="arr02"></i>
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
        <a class="link" href="<?php echo APP_URL ?>rule/">利用規約</a>
        <a class="link is-exter" href="https://www.tkp.jp/privacy/" target="_blank" rel="noopener">プライバシーポリシー</a>
      </li>
      <li class="item">
        <p class="ttl01">運営会社</p>
        <a class="link" href="https://www.tkp.jp/" target="_blank" rel="noopener">株式会社ティーケーピー</a>
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