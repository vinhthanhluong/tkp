<?php
session_start();
$thisPageName = 'news';

if ($curr_url[3] == "page") {
  $news_page = $curr_url[4];
} else {
  $news_page = "1";
}

$currentTerm  = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
$currentTermName = "";
$currentTermSlug = "";
if (!empty($currentTerm)) {
  $currentTermSlug = $currentTerm->slug;
  $currentTermId = $currentTerm->term_id;
  $currentTermName = get_field('cat_name_en', 'newscat' . '_' . $currentTermId) ?: $currentTerm->name;
}

include(APP_PATH_EN . 'libs/head.php');
?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/news.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="news" class="news en">
  <?php include(APP_PATH_EN . 'libs/header.php'); ?>
  <main id="wrap">
    <div class="c-breadcrumb aos-init" data-aos="fade-up">
      <ul>
        <li><a href="<?php echo APP_URL_EN; ?>">TOP</a></li>
        <?php if (!empty($currentTerm)) { ?>
          <li><a href="<?php echo APP_URL_EN; ?>news/">News & Event</a></li>
          <li><?php echo strip_tags($currentTermName); ?></li>
        <?php } else { ?>
          <li>News & Event</li>
        <?php } ?>
      </ul>
    </div>
    <div class="c-mainvisual">
      <div class="mv-inner aos-init" data-aos="fade-up">
        <div class="img-wave-blue">
          <div class="wave-top">
            <p class="c-mask" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue.png" data-bgsp="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue.png"></p>
          </div>
          <div class="wave-bottom">
            <p class="c-mask" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue.png" data-bgsp="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue.png"></p>
          </div>
        </div>

        <div class="img-wave-yellow">
          <div class="wave-top">
            <p class="c-mask" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/ico_wave_yellow.png" data-bgsp="<?php echo APP_ASSETS; ?>img/common/ico_wave_yellow.png"></p>
          </div>
          <div class="wave-bottom">
            <p class="c-mask" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/ico_wave_yellow.png" data-bgsp="<?php echo APP_ASSETS; ?>img/common/ico_wave_yellow.png"></p>
          </div>
        </div>
        <div class="mv-ttl">
          <span class="mv-ttl-en">NEWS & EVENT</span>
        </div>
      </div>
    </div>
    <div class="sec-news c-bg-wave01">
      <div class="inner1170">
        <?php
        $categories = get_terms(
          array(
            'post_type'   => 'news',
            'taxonomy'    => 'newscat',
            'hide_empty'  => true,
            'pad_counts'  => false,
            'orderby'     => 'menu_order',
            'order'       => 'ASC',
          )
        );
        if (!empty($categories)) {
        ?>
          <div class="c-catectn aos-init" data-aos="fade-up">
            <a class="c-cate01 <?php echo empty($currentTermName) ? 'is-active' : '' ?>" href="<?php echo APP_URL_EN; ?>news/">
              <h2>All</h2>
            </a>
            <?php
            foreach ($categories as $catitem) {
              $cat_id = $catitem->term_id;
              $cat_name = get_field('cat_name_en', 'newscat' . '_' . $cat_id) ?: $catitem->name;
              $cat_link = get_term_link($cat_id);
              $cat_link = insertLangInUrl($cat_link, 'newscat', 'en');
            ?>
              <a class="c-cate01 <?php if ($currentTermName == $cat_name) {
                                    echo 'is-active';
                                  } ?>" href="<?php echo $cat_link; ?>">
                <h2><?php if (!empty($cat_name)) {
                      echo $cat_name;
                    } ?></h2>
              </a>
            <?php } ?>
          </div>
        <?php } ?>

        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $postsPerPage = -1;
        $args_news = array(
          'post_type'           => 'news',
          'order'               => 'DESC',
          'orderby'             => 'post_date',
          'posts_status'        => 'publish',
          'paged'               => $paged,
          'posts_per_page'      => $postsPerPage,
        );
        if (!empty($currentTerm)) {
          $args_news['tax_query'] = array(
            array(
              'taxonomy' => 'newscat',
              'field'    => 'term_id',
              'terms'    => $currentTermId,
            )
          );
        }
        $query_news = new WP_Query($args_news);
        if ($query_news->have_posts()) {
        ?>
          <ul class="c-lstpost01">
            <?php
            $delay = 0;
            while ($query_news->have_posts()) {
              $delay   = $delay + 200;
              $query_news->the_post();
              $n_id    = $post->ID;
              $n_url   = get_the_permalink($n_id);
              $n_url   = insertLangInUrl($n_url, 'news', 'en');
              $n_ttl   = get_field('title_en', $n_id) ?: get_the_title($n_id);
              $n_date  = get_the_date('d/m/Y');
              $n_terms = get_the_terms($n_id, 'newscat');
              $n_thumb = get_the_post_thumbnail_url($n_id);
              $n_photo = (!empty($n_thumb)) ? $n_thumb : APP_NOIMG;
            ?>
              <li class="c-lstpost01__item aos-init" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
                <a class="lstpost01-link" href="<?php echo $n_url; ?>">
                  <div class="lstpost01-ctn01">
                    <figure class="lstpost01-img <?php echo $n_photo == APP_NOIMG ? "c-nophoto" : ""; ?>">
                      <img src="<?php echo createSVG(345, 250); ?>" data-src="<?php echo $n_photo; ?>" rel="js-lazy" width="345" height="250" alt="<?php echo strip_tags($n_ttl); ?>">
                    </figure>
                    <?php if (!empty($n_terms)) { ?>
                      <p class="cate">
                        <?php
                        foreach ($n_terms as $nterm) {
                          $cat_id = $nterm->term_id;
                          $cat_name = get_field('cat_name_en', 'newscat' . '_' . $cat_id) ?: $nterm->name;
                          $cat_class = $nterm->name == 'お知らせ' ? 'is-blue' : 'is-yellow';
                        ?>
                          <span class="item <?php echo $cat_class; ?>"><?php echo $cat_name; ?></span>
                        <?php } ?>
                      </p>
                    <?php } ?>
                  </div>
                  <div class="lstpost01-ctn02">
                    <p class="date"><?php echo $n_date; ?></p>
                    <h3 class="ttl"><?php echo $n_ttl; ?></h3>
                  </div>
                </a>
              </li>
            <?php } ?>
          </ul>
        <?php } else { ?>
          <p class="c-text-nonpost">表示する記事がありません。</p>
        <?php }
        wp_reset_postdata(); ?>
      </div>
    </div>
  </main>
  <?php include(APP_PATH_EN . 'libs/footer.php'); ?>
</body>

</html>