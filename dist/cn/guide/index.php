<?php
include_once(dirname(dirname(__DIR__)) . '/app_config.php');
include_once(dirname(dirname(__DIR__)) . '/wp/wp-load.php');

$thisPageName = 'guide';

$post_id = '132';
$editor = get_field('editor_cn', $post_id);

include(APP_PATH_CN . 'libs/head.php');
?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/guide.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="guide" class="guide cn">
  <?php include(APP_PATH_CN . 'libs/header.php'); ?>
  <main id="wrap">
    <?php echo $editor; ?>
  </main>
  <?php include(APP_PATH_CN . 'libs/footer.php'); ?>
</body>

</html>