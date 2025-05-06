<?php
$thisPageName = 'top';
include(dirname(__DIR__) . '/app_config.php');
include(APP_PATH . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/top.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="top" class="top">
  <?php include(APP_PATH . 'libs/header.php'); ?>
  <main id="wrap">
    <div class="sec-mv">
      <ul class="mv-video">
        <li class="mv-video__item">
          <video playsinline webkit-playsinline autoplay muted loop preload="auto">
            <source src="<?php echo APP_ASSETS ?>img/top/mv_morning.mp4">
          </video>
        </li>
      </ul>
      <div class="mv-container">
        <h1 class="mv-ttl">
          <span class="row">新たな別府を体験できる</span>
          <span class="row">パーク<span class="is-font">＆</span>リゾート</span>
        </h1>
        <div class="">

        </div>

      </div>
      <!-- <img class="view-bg" src="<?php echo APP_ASSETS ?>img/top/mv.jpg" width="1440" height="1350" alt=""> -->
    </div>
  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
</body>

</html>