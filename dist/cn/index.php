<?php
$thisPageName = 'top';
include_once(dirname(__DIR__) . '/app_config.php');
include('../wp/wp-load.php');

$post_id = '815';
$editor = get_field('editor_cn', $post_id);

$cat_search  = (!empty($_GET['newscat'])) ? $_GET['newscat'] : array();

include(APP_PATH_CN . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/top.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="top" class="top cn">
  <?php include(APP_PATH_CN . 'libs/header.php'); ?>
  <main id="wrap">
    <?php echo $editor; ?>
  </main>
  <?php include(APP_PATH_CN . 'libs/footer.php'); ?>
  <?php wp_footer(); ?>
  <script src="<?php echo APP_ASSETS ?>js/page/top.min.js?v=<?php echo APP_VER ?>"></script>
  <script>
    $('.news-cate input').on("change", function() {
      $.ajax({
        type: "GET",
        url: "<?php echo admin_url('admin-ajax.php'); ?>",
        data: {
          action: "search_ajax_en",
          newscat: $(this).val(),
        },
        dataType: 'json',
        success: function(response) {
          if (response.success) {
            $html = response.data;
            $(".sec-news .news-cate .item.is-active").removeClass("is-active");
            $(".sec-news .c-lstpost01").html($html);
          }
        },
        error: function() {
          console.log('Failed');
        }
      });
    });
  </script>
</body>

</html>