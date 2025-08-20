<?php

/**
 * Template Name: Page GUIDE SPA
 **/
$thisPageName = 'guide-spa';
include(APP_PATH . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/lib/swiper-bundle.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/guide_spa.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="guide-spa">
  <?php include(APP_PATH . 'libs/header03.php'); ?>
  <main id="wrap">
    <?php the_content(); ?>
  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
  <script src="<?php echo APP_ASSETS ?>js/lib/swiper-bundle.min.js?v=<?php echo APP_VER ?>"></script>
</body>

</html>