<?php
include_once(dirname(__DIR__) . '/../../app_config.php');
include_once(dirname(__DIR__) . '/../../wp/wp-load.php');

$thisPageName = 'shop';

$post_id = '140';
$editor = get_field('editor_ko', $post_id);

$shop_list = get_field('shop_list_ko', $post_id);

$shop_list_name = [];
if (!empty($shop_list)) {
  $is_all_empty = true;
  foreach ($shop_list as $shop) {
    $shop_list_name[] = $shop['shop_name'];
    $is_empty = empty($shop['shop_name'])
      && empty($shop['shop_pic'])
      && empty($shop['shop_desc'])
      && empty($shop['shop_time'])
      && empty($shop['shop_web'])
      && empty($shop['shop_instagram']);
    if (!$is_empty) {
      $is_all_empty = false;
    }
  }
}

include(APP_PATH_KO . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/shop.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="shop" class="shop ko">
  <?php include(APP_PATH_KO . 'libs/header.php'); ?>
  <main id="wrap">
    <?php echo $editor; ?>

    <section class="sec-shop">
      <div class="inner1170">

        <?php if (!$is_all_empty) { ?>
          <div class="c-ttl02 aos-init" data-aos="fade-up">
            <h2 class="c-ttl02__jp">쇼핑 에어리어</h2>
            <span class="c-ttl02__en">Shopping Area</span>
          </div>
          <div class="map-block aos-init" data-aos="fade-up">
            <img class="map-bg pc" src="<?php echo createSVG(1170, 577); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/shop/map_shop.svg" rel="js-lazy" width="1170" height="577" alt="상점 지역지도">
            <img class="map-bg sp" src="<?php echo createSVG(327, 162); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/shop/map_shop_sp.png" rel="js-lazy" width="327" height="162" alt="상점 지역지도">
            <?php if (!empty($shop_list_name[0])) { ?>
              <h3 class="map-tag is-tag01"><span class="tag-txt"><?php echo nl2br($shop_list_name[0]); ?></span></h3>
            <?php } ?>
            <?php if (!empty($shop_list_name[1])) { ?>
              <h3 class="map-tag is-tag02"><span class="tag-txt"><?php echo nl2br($shop_list_name[1]); ?></span></h3>
            <?php } ?>
            <?php if (!empty($shop_list_name[2])) { ?>
              <h3 class="map-tag is-tag03"><span class="tag-txt"><?php echo nl2br($shop_list_name[2]); ?></span></h3>
            <?php } ?>
            <?php if (!empty($shop_list_name[3])) { ?>
              <h3 class="map-tag is-tag04"><span class="tag-txt"><?php echo nl2br($shop_list_name[3]); ?></span></h3>
            <?php } ?>
            <?php if (!empty($shop_list_name[4])) { ?>
              <h3 class="map-tag is-tag05"><span class="tag-txt"><?php echo nl2br($shop_list_name[4]); ?></span></h3>
            <?php } ?>
            <?php if (!empty($shop_list_name[5])) { ?>
              <h3 class="map-tag is-tag06"><span class="tag-txt"><?php echo nl2br($shop_list_name[5]); ?></span></h3>
            <?php } ?>
            <?php if (!empty($shop_list_name[6])) { ?>
              <h3 class="map-tag is-tag07"><span class="tag-txt"><?php echo nl2br($shop_list_name[6]); ?></span></h3>
            <?php } ?>
          </div>
          <ul class="shop-list">
            <?php
            foreach ($shop_list as $shop) {
              $shop_name = $shop['shop_name'];
              $shop_pic = $shop['shop_pic'];
              $shop_pic = $shop_pic ? $shop_pic['sizes'] : '';
              $shop_pic = $shop_pic ? $shop_pic['medium']  : APP_NOIMG;
              $shop_desc = $shop['shop_desc'];
              $shop_desc = explode("\n", $shop_desc);
              $shop_desc = implode('<br>', $shop_desc);
              $shop_time = $shop['shop_time'];
              $shop_web = $shop['shop_web'];
              $shop_instagram = $shop['shop_instagram'];
              if (!empty($shop_name) || $shop_pic != APP_NOIMG || !empty($shop_desc) || !empty($shop_time) || !empty($shop_web) || !empty($shop_instagram)) {

            ?>
                <li class="aos-init" data-aos="fade-up">
                  <div class="shop-item">
                    <div class="shop-group">
                      <figure class="shop-img c-img <?php echo $shop_pic == APP_NOIMG ? "c-nophoto" : ""; ?>">
                        <img src="<?php echo createSVG(345, 250); ?>" data-src="<?php echo $shop_pic; ?>" rel="js-lazy" width="345" height="250" alt="<?php echo strip_tags($shop_name); ?>">
                      </figure>
                      <div class="shop-info">
                        <?php if (!empty($shop_name)) { ?>
                          <h3 class="shop-ttl js-match-height-ttl"><?php echo $shop_name; ?></h3>
                        <?php } ?>
                        <?php if (!empty($shop_web) || !empty($shop_instagram)) { ?>
                          <ul class="shop-sns">
                            <?php if (!empty($shop_web)) { ?>
                              <li><a class="icn icn-url" href="<?php echo $shop_web['url']; ?>" target="_blank" rel="noopener nofollow"></a></li>
                            <?php } ?>
                            <?php if (!empty($shop_instagram)) { ?>
                              <li><a class="icn icn-instagram" href="<?php echo $shop_instagram['url']; ?>" target="_blank" rel="noopener nofollow"></a></li>
                            <?php } ?>
                          </ul>
                        <?php } ?>
                      </div>
                    </div>
                    <?php if (!empty($shop_desc)) { ?>
                      <p class="shop-desc js-match-height-desc"><?php echo $shop_desc; ?></p>
                    <?php } ?>
                    <?php if (!empty($shop_time)) { ?>
                      <dl class="shop-time">
                        <dt>영업 시간</dt>
                        <dd><span class="txt"><?php echo $shop_time; ?></span></dd>
                      </dl>
                    <?php } ?>
                  </div>
                </li>
            <?php }
            } ?>
          </ul>
        <?php } ?>
      </div>
    </section>
    <?php echo apply_filters('the_content', get_post_field('news_related', $post_id)); ?>
  </main>
  <?php include(APP_PATH_KO . 'libs/footer.php'); ?>
  <script src="<?php echo APP_ASSETS ?>js/lib/jquery.matchHeight.min.js?v=<?php echo APP_VER ?>"></script>
  <script>
    if ($('.js-match-height-ttl').length) {
      $(".js-match-height-ttl").matchHeight();
    }
    if ($('.js-match-height-desc').length) {
      $(".js-match-height-desc").matchHeight();
    }
  </script>
</body>

</html>