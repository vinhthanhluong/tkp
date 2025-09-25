<?php
$thisPageName = 'ishinoya';
include_once(dirname(__DIR__) . '/../../app_config.php');
include_once(dirname(__DIR__) . '/../../wp/wp-load.php');
$post_id = '406';
$editor = get_field('editor_cn', $post_id);

include(APP_PATH_CN . 'libs/head02.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/lib/swiper-bundle.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/ishinoya.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="ishinoya" class="ishinoya cn">
  <?php include(APP_PATH_CN . 'libs/header02.php'); ?>
  <main id="wrap02">
    <?php echo $editor; ?>
  </main>
  <?php include(APP_PATH_CN . 'libs/footer02.php'); ?>
  <script src="<?php echo APP_ASSETS ?>js/lib/swiper-bundle.min.js?v=<?php echo APP_VER ?>"></script>
  <script src="<?php echo APP_ASSETS ?>js/page/ishinoya.min.js?v=<?php echo APP_VER ?>"></script>
</body>

</html>