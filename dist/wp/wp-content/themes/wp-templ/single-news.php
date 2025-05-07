<?php
$thisPageName = 'sg-news';
$sg_id = $post->ID;
$current_ID = get_the_ID($sg_id);
$sg_title = get_the_title($sg_id);
$sg_title_strip = strip_tags($sg_title);
$sg_date = get_the_date('Y / m / d', $sg_id);
$sg_thumb = wp_get_attachment_image_src(get_post_thumbnail_id($sg_id), 'full');
$sg_terms = get_the_terms($sg_id, 'newscat');
if (!empty($sg_thumb)) $ogimg = $sg_thumb ? $sg_thumb[0] : get_first_image($post->post_content, false);
$ttl_meta = $sg_title_strip . ' | SHONIN PARK';
$desc_meta = '';
include(APP_PATH . 'libs/head.php');

?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/sg-news.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="sg-news" class="sg-news">
  <?php include(APP_PATH . 'libs/header.php'); ?>
  <main id="wrap">
    <div class="c__sub-mv">
      <div class="inr aos-init" data-aos="fade-up">
        <h1 class="sg__ttl"><?php echo $sg_title; ?></h1>
        <div class="sg__subs">
          <span class="sg__subs__date"><?php echo $sg_date; ?></span>
          <?php if (!empty($sg_terms)) {
            foreach ($sg_terms as $term) { ?>
              <a class="sg__subs__cate" href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a>
          <?php }
          } ?>
        </div>
        <ul class="breadcrumb">
          <li><a href="<?php echo APP_URL; ?>">TOP</a></li>
          <li><a href="<?php echo APP_URL; ?>news/">ニュース・イベント</a></li>
          <li><?php echo $sg_title_strip; ?></li>
        </ul>
      </div>
    </div>
    <div class="mct">
      <?php if (!empty($sg_thumb)) { ?>
        <p class="sg__thumb aos-init" data-aos="fade-up">
          <img width="<?php echo $sg_thumb[1]; ?>" height="<?php echo $sg_thumb[2]; ?>" src="<?php echo createSVG(1000, 590); ?>"
            data-src="<?php echo $sg_thumb[0]; ?>" rel="js-lazy" alt="<?php echo $sg_title_strip; ?>">
        </p>
      <?php } ?>
      <div class="cms-content aos-init" data-aos="fade-up">
        <?php the_content(); ?>
      </div>
      <div class="share aos-init" data-aos="fade-up">
        <span class="share__ttl">Share</span>
        <a class="share__link" target="_blank" href="https://twitter.com/share?url=<?php echo APP_URL; ?>news/<?php echo urlencode($post->post_name); ?>">
          <img width="60" height="60" src="<?php echo createSVG(60, 60); ?>"
            data-src="<?php echo APP_ASSETS_WP; ?>img/common/icon/share-x-ico.png" rel="js-lazy" alt="">
        </a>
        <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        <!-- <a class="share__link" target="_blank" href="#">
          <img width="60" height="60" src="<?php echo createSVG(60, 60); ?>"
            data-src="<?php echo APP_ASSETS_WP; ?>img/common/icon/share-ins-ico.png" rel="js-lazy" alt="">
        </a> -->
        <a class="share__link" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo get_the_permalink($sg_id); ?>">
          <img width="60" height="60" src="<?php echo createSVG(60, 60); ?>"
            data-src="<?php echo APP_ASSETS_WP; ?>img/common/icon/share-fb-ico.png" rel="js-lazy" alt="">
        </a>
        <a class="share__link PC" target="_blank" href="https://line.me/R/msg/text/?<?php echo urlencode(get_the_title($sg_id)); ?>%0D%0A<?php echo urlencode(get_the_permalink($sg_id)); ?>">
          <img width="60" height="60" src="<?php echo createSVG(60, 60); ?>"
            data-src="<?php echo APP_ASSETS_WP; ?>img/common/icon/share-line-ico.png" rel="js-lazy" alt="">
        </a>
        <a class="share__link SP" target="_blank" href="line://msg/text/<?php echo urlencode(get_the_title($sg_id)); ?>%0D%0A<?php echo urlencode(get_the_permalink($sg_id)); ?>">
          <img width="60" height="60" src="<?php echo createSVG(60, 60); ?>"
            data-src="<?php echo APP_ASSETS_WP; ?>img/common/icon/share-line-ico.png" rel="js-lazy" alt="">
        </a>
      </div>
      <?php
      $param_all_posts = array(
        'post_type' => 'news',
        'orderby' => 'menu_order',
        'order' => 'DESC',
        'posts_per_page' => -1,
        'post_status' => 'publish',
      );

      $post_list = get_posts($param_all_posts);
      $ids = array();
      foreach ($post_list as $post) {
        $ids[] = $post->ID;
      }
      $this_post_index = array_search($sg_id, $ids);
      if (isset($ids[$this_post_index - 1])) {
        $prev_id = $ids[$this_post_index - 1];
        $prev_post = get_post($prev_id);
        $prev_url = get_the_permalink($prev_post);
        $prev_title = get_the_title($prev_post);
        if (!empty($prev_id)) {
          $main_image_prev = wp_get_attachment_image_src(get_post_thumbnail_id($prev_id), 'full');
          $photo_prev  = !empty($main_image_prev) ? $main_image_prev[0] : APP_NOIMG;
        }
      }
      if (isset($ids[$this_post_index + 1])) {
        $next_id = $ids[$this_post_index + 1];
        $next_post = get_post($next_id);
        $next_url = get_the_permalink($next_post);
        $next_title = get_the_title($next_post);
        if (!empty($next_id)) {
          $main_image_next = wp_get_attachment_image_src(get_post_thumbnail_id($next_id), 'full');
          $photo_next  = !empty($main_image_next) ? $main_image_next[0] : APP_NOIMG;
        }
      }
      ?>
      <div class="sg-pagenavi">
        <a href="<?php echo !empty($prev_url) ? $prev_url  : 'javascript:void(0)'; ?>" class="prev <?php echo empty($prev_url) ? ' disable' : ''; ?>">
          <p class="prev__thumb">
            <img width="100" height="100" src="<?php echo createSVG(100, 100); ?>"
              data-src="<?php echo !empty($photo_prev) ? $photo_prev : APP_NOIMG; ?>" rel="js-lazy" alt="">
            <span class="decor"></span>
          </p>
          <?php if (!empty($prev_title)) { ?><p class="prev__ttl PC"><?php echo $prev_title; ?></p><?php } ?>
        </a>
        <div class="c__btn01 center">
          <p class="btn-wrap">
            <a class="btn" href="<?php echo APP_URL; ?>news/">
              <span class="btn__txt">一覧へ戻る</span>
              <span class="btn__circle"><small class="bg"></small></span>
            </a>
          </p>
        </div>
        <a href="<?php echo !empty($next_url) ? $next_url : 'javascript:void(0)'; ?>" class="next <?php echo empty($next_post) ? ' disable' : ''; ?>">
          <p class="next__thumb">
            <img width="100" height="100" src="<?php echo createSVG(100, 100); ?>"
              data-src="<?php echo !empty($photo_next) ? $photo_next : APP_NOIMG; ?>" rel="js-lazy" alt="">
            <span class="decor"></span>
          </p>
          <?php if (!empty($next_title)) { ?><p class="next__ttl PC"><?php echo $next_title; ?></p><?php } ?>
        </a>
      </div>
    </div>
  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
</body>

</html>