<?php

/**
 * Template Name: Page GUIDE ISHINOYA SPA
 **/
$thisPageName = 'ishinoya-spa';
$post_id = get_the_ID();
$the_content = get_the_content($post_id);
$the_content = str_replace('<?php echo APP_ASSETS ?>', APP_ASSETS, $the_content);
$the_content = str_replace('<?php echo APP_ASSETS; ?>', APP_ASSETS, $the_content);
$the_content = str_replace('<?php echo APP_URL ?>', APP_URL, $the_content);
$the_content = str_replace('<?php echo APP_URL; ?>', APP_URL, $the_content);
include(APP_PATH . 'libs/head02.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/ishinoya_spa.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="ishinoya-spa">
  <?php include(APP_PATH . 'libs/header02.php'); ?>
  <main id="wrap02">
    <?php echo $the_content ?>
  </main>
  <?php include(APP_PATH . 'libs/footer02.php'); ?>
</body>

</html>