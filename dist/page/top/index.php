<?php
$thisPageName = 'top';
include(dirname(dirname(__DIR__)) . '/app_config.php');
include(APP_PATH . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/top.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="top" class="top">
  <?php include(APP_PATH . 'libs/header.php'); ?>
  <main id="wrap">
    <div class="sec-mv">
      <ul class="mv-video">
        <li class="mv-video__item">
          <div class="video-head sp"></div>
          <video id="mainVideo" autoplay muted loop playsinline data-baseurl="<?php echo APP_ASSETS; ?>img/top/"></video>
          <div class="video-foot sp"></div>
        </li>
      </ul>
      <div class="mv-container">
        <h1 class="mv-ttl">
          <span class="ttl-box is-morning">
            <span class="row">新たな別府を体験できる</span>
            <span class="row">パーク<span class="is-font">＆</span>リゾート</span>
          </span>
          <span class="ttl-box is-afternoon">
            <span class="row">新たな別府を体験できる</span>
            <span class="row">パーク<span class="is-font">＆</span>リゾート</span>
          </span>
          <span class="ttl-box is-evening">
            <span class="row">新たな別府を体験できる</span>
            <span class="row">パーク<span class="is-font">＆</span>リゾート</span>
          </span>
        </h1>
        <div class="mv-desc">
          <div class="mv-desc__inner">
            <p class="txt">別府市内で唯一の海浜砂湯が楽しめる上人ヶ<br class="sp">浜公園が、<br class="pc">新たな魅力を加えて生まれ変わった<br class="sp">「SHONIN PARK」<br>別府湾を一望できる絶景のロケーションで、<br>歴史ある砂湯温泉をはじめ、別府の魅力が集<br class="sp">結したショップや、<br class="pc">リゾート感あふれるレスト<br class="sp">ランや宿泊など様々な体験ができます。<br>別府の豊かな自然と共に、心安らぐひとときをお過ごしください。</p>
          </div>
        </div>
      </div>
      <!-- <img class="view-bg" src="<?php echo APP_ASSETS ?>img/top/mv.jpg" width="1440" height="1350" alt=""> -->
    </div>
  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
  <script src="<?php echo APP_ASSETS ?>js/page/top.min.js?v=<?php echo APP_VER ?>"></script>
</body>

</html>