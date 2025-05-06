<?php
$thisPageName = 'news';
$currentTerm = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
$currentTermName = "";
$currentTermSlug = "";
if (!empty($currentTerm)) {
  $currentTermName = $currentTerm->name;
  $currentTermSlug = $currentTerm->slug;
}
include(APP_PATH . 'libs/head.php');
?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/news.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="news" class="news">
  <?php include(APP_PATH . 'libs/header.php'); ?>
  <main id="wrap">
    <div class="c__sub-mv">
      <div class="inr">
        <div class="c__ttl01 aos-init" data-aos="fade-up">
          <span class="c__ttl01--en">News & Events</span>
          <h1 class="c__ttl01--jp">ニュース・イベント</h1>
        </div>
        <ul class="breadcrumb aos-init" data-aos="fade-up">
          <li><a href="<?php echo APP_URL; ?>">TOP</a></li>
          <?php if(!empty($currentTerm)) { ?>
          <li><a href="<?php echo APP_URL; ?>news/">ニュース・イベント</a></li>
          <li><?php echo strip_tags($currentTermName); ?></li>
          <?php } else { ?>
            <li>ニュース・イベント</li>
          <?php } ?>
        </ul>
      </div>
    </div>
    <div class="mct">
      <div class="wrapper">
        <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $postsPerPage = 9;
          $args_news = array(
            'post_type'           => 'news',
            'orderby'             => 'menu_order',
            'posts_per_page'      => $postsPerPage,
            'posts_status'        => 'publish',
            'paged'               => $paged
          );
          if (!empty($currentTerm)) {
            $args_news['tax_query'] = array(array('taxonomy' => 'newscat', 'field' => 'slug', 'terms' => $currentTermSlug));
          }
          $query_news = new WP_Query($args_news);
          if ($query_news->have_posts()) {
        ?>
          <ul class="c__lst01">
            <?php
              $delay = 0;
              while ($query_news->have_posts()) {
                $delay = $delay + 200;
                $query_news->the_post();
                $id    = $post->ID;
                $url = get_the_permalink($id);
                $ttl   = get_the_title($id);
                $date = get_the_date('Y / m / d');
                $terms   = get_the_terms($id, 'newscat');
                $thumb = get_the_post_thumbnail_url($id);
                $photo = (!empty($thumb)) ? $thumb : APP_NO_IMG;
            ?>
              <li class="aos-init" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
                <a class="item" href="<?php echo $url; ?>">
                  <p class="item__thumb">
                    <img width="270" height="180" src="<?php echo createSVG(270, 180); ?>"
                      data-src="<?php echo $photo; ?>" rel="js-lazy" alt="">
                  </p>
                  <div class="item__ct">
                    <p class="item__ct--sub">
                      <span class="date"><?php echo $date; ?></span>
                      <?php if(!empty($terms)) { foreach($terms as $term) { ?>
                        <span class="cate"><?php echo $term->name; ?></span>
                      <?php } }?>
                    </p>
                    <h2 class="item__ct--ttl"><?php echo $ttl; ?></h2>
                  </div>
                </a>
              </li>
            <?php } ?>
          </ul>
        <?php } else { ?>
            <p class="comming">表示する記事がありません。</p>
        <?php } wp_reset_postdata(); ?>

        <?php if (function_exists('wp_pagenavi')) { ?>
          <div class="c__pagenavi"><?php wp_pagenavi(array('query' => $query_news)); ?></div>
        <?php } ?>
      </div>
      <div class="sidebar aos-init" data-aos="fade-up">
        <p class="sidebar__ttl">Category</p>
        <?php
          $categories = get_terms(
            array(
              'post_type'   => 'news',
              'taxonomy'    => 'newscat',
              'hide_empty'  => true,
              'pad_counts'  => false,
              'orderby'     => 'menu_order',
            )
          );
          if (!empty($categories)) {
        ?>
          <ul class="sidebar__lst">
            <li class="<?php echo empty($currentTermName) ? 'active ' : '' ?>PC"><a href="<?php echo APP_URL; ?>news/">全体</a></li>
            <li class="SP panel js-tg-panel"><a href="javascript:void(0);"><?php echo !empty($currentTermName) ? $currentTermName : '全体';  ?></a></li>
            <?php if (!empty($categories)) { ?>
              <ul class="js-tg-ct">
                <?php if(!empty($currentTermName)) { ?>
                  <li class="SP"><a href="<?php echo APP_URL; ?>news/">全体</a></li>
                <?php } ?>
                <?php foreach ($categories as $cate) { if($cate->name === $currentTermName && wp_is_mobile()) continue; ?>
                  <li class="<?php echo (!empty($currentTermName) && $cate->name === $currentTermName) ? 'active ' : '' ?>"><a href="<?php echo get_term_link($cate); ?>"><?php echo $cate->name; ?></a></li>
                <?php } ?>
              </ul>
            <?php } ?>
          </ul>
        <?php } ?>
      </div>
    </div>
  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
</body>

</html>