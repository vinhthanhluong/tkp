<?php
$thisPageName = 'blogSingle';
include(APP_PATH . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/blog.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="blog" class="blog blog-single page-single">
  <?php include(APP_PATH . 'libs/header.php'); ?>
  <main id="wrap">

    <div class="inner">
      <?php if (have_posts()) :
        while (have_posts()) :
          the_post(); ?>
          <div class="cms-content">
            <?php the_content(); ?>
          </div>
      <?php endwhile;
      endif; ?>
    </div>

  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
</body>

</html>