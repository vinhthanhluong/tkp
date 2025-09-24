<?php
include_once(dirname(__DIR__) . '/../../app_config.php');
include_once(dirname(__DIR__) . '/../../wp/wp-load.php');

$thisPageName = 'guide-spa';

$post_id = '397';
$editor = get_field('editor_en', $post_id);

include(APP_PATH_EN . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/lib/swiper-bundle.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/guide_spa.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="guide-spa" class="guide-spa en">
  <?php include(APP_PATH_EN . 'libs/header03.php'); ?>
  <main id="wrap">
    <?php echo $editor; ?>
  </main>
  <?php include(APP_PATH_EN . 'libs/footer.php'); ?>
  <script src="<?php echo APP_ASSETS ?>js/lib/swiper-bundle.min.js?v=<?php echo APP_VER ?>"></script>
</body>

</html>