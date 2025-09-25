<?php
include_once(dirname(dirname(__DIR__)) . '/app_config.php');
include_once(dirname(dirname(__DIR__)) . '/wp/wp-load.php');

$thisPageName = 'ways';

$post_id = '135';
$editor = get_field('editor_cn', $post_id);

include(APP_PATH_CN . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/ways.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="ways" class="ways cn">
  <?php include(APP_PATH_CN . 'libs/header.php'); ?>
  <main id="wrap">
    <?php echo $editor; ?>
  </main>
  <?php include(APP_PATH_CN . 'libs/footer.php'); ?>
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