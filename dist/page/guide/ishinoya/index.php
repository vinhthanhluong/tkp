<?php
$thisPageName = 'ishinoya';
include(dirname(dirname(dirname(__DIR__))) . '/app_config.php');
include(APP_PATH . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/ishinoya.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="ishinoya" class="ishinoya">
  <?php include(APP_PATH . 'libs/header02.php'); ?>
  <main id="wrap02">
    <div class="sec-mv">
      <img src="<?php echo createSVG(1440, 900) ?>" data-src="<?php echo APP_ASSETS; ?>img/ishinoya/mv.jpg" rel="js-lazy" width="1440" height="900" alt="砂湯に入る人イラスト">
    </div>
  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
  <script src="<?php echo APP_ASSETS ?>js/page/ishinoya.min.js?v=<?php echo APP_VER ?>"></script>
</body>

</html>