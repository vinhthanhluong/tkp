<?php
$thisPageName = 'ways';
$post_id = get_the_ID();
$the_content = get_the_content($post_id);
$the_content = str_replace('<?php echo APP_ASSETS ?>', APP_ASSETS, $the_content);
$the_content = str_replace('<?php echo APP_ASSETS; ?>', APP_ASSETS, $the_content);
$the_content = str_replace('<?php echo APP_URL ?>', APP_URL, $the_content);
$the_content = str_replace('<?php echo APP_URL; ?>', APP_URL, $the_content);
include(APP_PATH . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/ways.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="ways">
  <?php include(APP_PATH . 'libs/header.php'); ?>
  <main id="wrap">
    <?php echo $the_content ?>
  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
  <script>
    $('.js-tabs li').click(function() {
      var t = $(this).attr('data-tab');
      $('.js-tabs li').removeClass('is-active');
      $('.tab-content').removeClass('is-current');
      $(this).addClass('is-active');
      $('#' + t).addClass('is-current');
    });
  </script>
</body>

</html>