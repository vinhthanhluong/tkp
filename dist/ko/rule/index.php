<?php
include_once(dirname(dirname(__DIR__)) . '/app_config.php');
include_once(dirname(dirname(__DIR__)) . '/wp/wp-load.php');

$thisPageName = 'rule';

$post_id = '395';
$editor = get_field('editor_ko', $post_id);

include(APP_PATH_KO . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/rule.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="rule" class="rule ko">
  <?php include(APP_PATH_KO . 'libs/header.php'); ?>
  <main id="wrap">
    <?php echo $editor; ?>
  </main>
  <?php include(APP_PATH_KO . 'libs/footer.php'); ?>
</body>

</html>