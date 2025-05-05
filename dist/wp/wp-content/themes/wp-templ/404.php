<?php
$thisPageName = '404';
include(APP_PATH . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/404.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="page404" class="page404">
  <?php include(APP_PATH . '/libs/header.php'); ?>
  <main id="wrap">
    <section class="page404-main">
      <div class="inner">
        <h2 class="page404-main__hd">404</h2>
        <p class="page404-main__txt">アクセスしようとしたページは、<br class="sp">移動したか削除されました。<br>下記リンクに移動して下さい。</p>
        <p class="page404-main__link"><a href="<?php echo esc_url(home_url('/')) ?>"><?php echo esc_url(home_url('/')) ?></a></p>
      </div>
    </section>
  </main>
  <?php include(APP_PATH . '/libs/footer.php'); ?>
</body>

</html>