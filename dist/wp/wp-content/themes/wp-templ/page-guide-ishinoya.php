<?php

/**
 * Template Name: Page GUIDE ISHINOYA
 **/
$thisPageName = 'ishinoya';
include(APP_PATH . 'libs/head02.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/lib/swiper-bundle.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/ishinoya.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="ishinoya" class="ishinoya">
  <?php include(APP_PATH . 'libs/header02.php'); ?>
  <main id="wrap02">
      <?php the_content(); ?>
  </main>
  <?php include(APP_PATH . 'libs/footer02.php'); ?>
  <script src="<?php echo APP_ASSETS ?>js/lib/swiper-bundle.min.js?v=<?php echo APP_VER ?>"></script>
  <script src="<?php echo APP_ASSETS ?>js/page/ishinoya.min.js?v=<?php echo APP_VER ?>"></script>
</body>

</html>