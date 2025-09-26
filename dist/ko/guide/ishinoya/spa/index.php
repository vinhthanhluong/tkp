<?php
include_once(dirname(dirname(__DIR__)) . '/../../app_config.php');
include_once(dirname(dirname(__DIR__)) . '/../../wp/wp-load.php');

$thisPageName = 'ishinoya-spa';

$post_id = '425';
$editor = get_field('editor_ko', $post_id);

include(APP_PATH_KO . 'libs/head02.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/ishinoya_spa.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="ishinoya-spa" class="ishinoya-spa ko">
  <?php include(APP_PATH_KO . 'libs/header02.php'); ?>
  <main id="wrap02">
    <?php echo $editor; ?>
  </main>
  <?php include(APP_PATH_KO . 'libs/footer02.php'); ?>
</body>

</html>