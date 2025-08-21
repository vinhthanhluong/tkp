<?php

/**
 * Template Name: Page GUIDE ISHINOYA SPA
 **/
$thisPageName = 'ishinoya-spa';
include(APP_PATH . 'libs/head02.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/ishinoya_spa.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="ishinoya-spa">
  <?php include(APP_PATH . 'libs/header02.php'); ?>
  <main id="wrap02">
    <?php the_content(); ?>
  </main>
  <?php include(APP_PATH . 'libs/footer02.php'); ?>
</body>

</html>