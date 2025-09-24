<?php
$thisPageName = 'guide';

$post_id = '132';
$editor = get_field('editor', $post_id);

include(APP_PATH . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/guide.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="guide" class="guide">
  <?php include(APP_PATH . 'libs/header.php'); ?>
  <main id="wrap">
    <?php echo $editor; ?>
  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
</body>

</html>