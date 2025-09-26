<?php
$thisPageName = '404';
include(APP_PATH . 'libs/head.php'); ?>
<?php
if ($lang == 'en') {
  $txt01 = 'The page you are trying to access has been <br class="sp">moved or deleted. <br>Please go to the link below.';
  $txt02 = 'Return to HOME';
  $link01 = APP_URL_EN;
} else if ($lang == 'ko') {
  $txt01 = '액세스하려는 페이지가 <br class="sp">이동되었거나 삭제되었습니다. <br>아래 링크로 이동하십시오.';
  $txt02 = 'HOME으로 돌아가기';
  $link01 = APP_URL_KO;
} else if ($lang == 'cn') {
  $txt01 = '您尝试访问的页面已被移动或删除。<br class="sp">请转到下面的链接。';
  $txt02 = '返回主页';
  $link01 = APP_URL_CN;
} else {
  $txt01 = 'アクセスしようとしたページは、<br class="sp">移動したか削除されました。<br>下記リンクに移動して下さい。';
  $txt02 = 'HOMEに戻る';
  $link01 = APP_URL;
}
?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/404.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="page404" class="page404">
  <?php
  if ($lang == 'en') {
     include(APP_PATH_EN . '/libs/header.php'); 
  } else if ($lang == 'ko') {
     include(APP_PATH_KO . '/libs/header.php'); 
  } else if ($lang == 'cn') {
     include(APP_PATH_CN . '/libs/header.php'); 
  } else {
     include(APP_PATH . '/libs/header.php'); 
  }
  ?>
  <main id="wrap">
    <section class="page404-main">
      <div class="inner">
        <h2 class="page404-main__hd">404</h2>
        <p class="page404-main__txt"><?php echo $txt01; ?></p>
        <p class="page404-main__link">
          <a href="<?php echo $link01; ?>"><?php echo $txt02; ?></a>
        </p>
      </div>
    </section>
  </main>
  <?php 
  if ($lang == 'en') {
    include(APP_PATH_EN . '/libs/footer.php'); 
  } else if ($lang == 'ko') {
      include(APP_PATH_KO . '/libs/footer.php'); 
  } else if ($lang == 'cn') {
      include(APP_PATH_CN . '/libs/footer.php'); 
  } else {
      include(APP_PATH . '/libs/footer.php'); 
  }
  ?>
</body>

</html>