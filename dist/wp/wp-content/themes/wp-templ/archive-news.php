<?php
$thisPageName = 'news';
$currentTerm  = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
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
    <div class="c-breadcrumb aos-init" data-aos="fade-up">
      <ul>
        <li><a href="<?php echo APP_URL; ?>">TOP</a></li>
        <?php if(!empty($currentTerm)) { ?>
        <li><a href="<?php echo APP_URL; ?>news/">ニュース</a></li>
        <li><?php echo strip_tags($currentTermName); ?></li>
        <?php } else { ?>
          <li>ニュース</li>
        <?php } ?>
      </ul>
    </div>
    <div class="c-mainvisual">
      <div class="mv-inner">
        <h1 class="mv-ttl aos-init" data-aos="fade-up">
          <span class="mv-ttl-jp">ニュース</span>
          <span class="mv-ttl-en">News</span>
        </h1>
      </div>
    </div>
    <div class="sec-news">
      <div class="inner1170">
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
        <div class="block-category aos-init" data-aos="fade-up">
          <ul class="c-category-list">
            <li class="<?php echo empty($currentTermName) ? 'is-active ' : '' ?>"><a href="<?php echo APP_URL; ?>news/">すべて</a></li>
            <li><a href="./">お知らせ</a></li>
            <li><a href="./">イベント</a></li>
          </ul>
        </div>
        <?php } ?>

        <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $postsPerPage = -1;
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
          <ul class="news-list">
            <?php
              $delay = 0;
              while ($query_news->have_posts()) {
                $delay   = $delay + 200;
                $query_news->the_post();
                $n_id    = $post->ID;
                $n_url   = get_the_permalink($n_id);
                $n_ttl   = get_the_title($n_id);
                $n_date  = get_the_date('Y . m . d');
                $n_terms = get_the_terms($n_id, 'newscat');
                $n_thumb = get_the_post_thumbnail_url($n_id);
                $n_photo = (!empty($n_thumb)) ? $n_thumb : APP_NOIMG;
            ?>
              <li class="aos-init" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
                <a class="item" href="<?php echo $n_url; ?>">
                  <figure class="item__thumb"><img width="345" height="250" src="<?php echo createSVG(345, 250); ?>" data-src="<?php echo $n_photo; ?>" rel="js-lazy" alt=""></figure>
                  <div class="item__ct">
                    <p class="item__ct--sub">
                      <span class="date"><?php echo $n_date; ?></span>
                      <?php if(!empty($n_terms)) { foreach($n_terms as $nterm) { ?>
                        <span class="cate"><?php echo $nterm->name; ?></span>
                      <?php } }?>
                    </p>
                    <h2 class="item__ct--ttl"><?php echo $n_ttl; ?></h2>
                  </div>
                </a>
              </li>
            <?php } ?>
          </ul>
        <?php } else { ?>
          <p class="comming">表示する記事がありません。</p>
        <?php } wp_reset_postdata(); ?>
      </div>
    </div>
  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
</body>

</html>