<footer id="footer" class="footer<?php if (($thisPageName == 'guide-spa')): ?> footer03<?php endif ?>">
  <div class="f-wcm01">
    <div class="f-wrap">
      <div class="col01">
        <div class="f-logo">
          <a href="<?php echo APP_URL_CN; ?>">
            <img src="<?php echo APP_ASSETS ?>img/common/footer/f_logo.svg" alt="logo">
          </a>
        </div>
        <div class="f-info">
          <p class="txt">邮编874-0023 大分县別府市上人之浜町795-1</p>
          <p class="txt">电话号码 <a href="tel:0977-75-6363">0977-75-6363</a></p>
        </div>
      </div>
      <div class="col02">
        <div class="col02-wrap01">
          <ul class="f-navi">
            <li class="item"><a href="<?php echo APP_URL_CN ?>guide/">设施指南</a></li>
            <li class="item"><a href="<?php echo APP_URL_CN ?>ways/">游玩指南</a></li>
          </ul>
          <ul class="f-navi">
            <li class="item"><a href="<?php echo APP_URL_CN ?>news/">最新动态</a></li>
            <li class="item"><a href="<?php echo APP_URL_CN ?>info/#info02">交通指南</a></li>
          </ul>
        </div>

        <div class="col02-wrap02">
          <ul class="f-navi02">
            <li class="item"><a href="<?php if ($thisPageName != 'info') {
                                        echo APP_URL_CN . 'info/';
                                      } ?>#info01">营业时间</a></li>
            <li class="item"><a href="<?php if ($thisPageName != 'info') {
                                        echo APP_URL_CN . 'info/';
                                      } ?>#info03">周边观光</a></li>
          </ul>
          <ul class="f-navi02">
            <li class="item<?php if (($thisPageName == 'guide-spa')): ?><?php endif; ?>"><a href="<?php if ($thisPageName != 'info') {
                                                                                                    echo APP_URL_CN . 'info/';
                                                                                                  } ?>#info04">常见问题</a></li>
            <li class="item"><a href="<?php echo APP_URL_CN ?>contact/">咨询</a></li>
          </ul>
        </div>

        <div class="f-social pc">
          <p class="ttl">公众号</p>
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
          <i class="arr01"></i><span>预约沙浴和温泉</span><i class="arr02"></i>
        </a>
      </li>
      <li class="item">
        <a href="https://yoyaku.tabelog.com/yoyaku/net_booking_form/index?rcd=44014354" target="_blank" rel="noopener" class="c-btn03 is-center">
          <i class="arr01"></i><span>预约餐厅</span><i class="arr02"></i>
        </a>
      </li>
      <li class="item">
        <a href="https://reserve.489ban.net/client/ishinoya-beppu/1/plan/stay" target="_blank" rel="noopener" class="c-btn03 is-center">
          <i class="arr01"></i><span>预约住宿度假屋</span><i class="arr02"></i>
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
        <a class="link" href="<?php echo APP_URL_CN ?>rule/">使用条款</a>
        <a class="link is-exter" href="https://www.tkp.jp/privacy/" target="_blank" rel="noopener">个人隐私条款</a>
      </li>
      <li class="item">
        <p class="ttl01">运营公司</p>
        <a class="link" href="https://www.tkp.jp/" target="_blank" rel="noopener">株式会社TKP</a>
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