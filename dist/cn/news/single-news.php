<?php
$thisPageName = 'newsSingle';
$sg_id = $current_id;
$current_ID = get_the_ID($sg_id);
$sg_title   = get_field('title_cn', $sg_id) ?: get_the_title($sg_id);
$sg_title_strip = strip_tags($sg_title);
$sg_date = get_the_date('Y.m.d', $sg_id);
$sg_thumb = wp_get_attachment_image_src(get_post_thumbnail_id($sg_id), 'full');
$sg_terms = get_the_terms($sg_id, 'newscat');
$editor = get_field('editor_cn', $sg_id) ?: get_field('editor', $sg_id);
if (!empty($sg_thumb)) $ogimg = $sg_thumb ? $sg_thumb[0] : get_first_image($post->post_content, false);

$titlepage = $sg_title_strip . '｜SHONIN PARK';
$desCnt = mb_substr(preg_replace('/\r\n|\n|\r?\[.*\]/', '', strip_tags($editor)), 0, 120);
$desPage = get_field('tp_meta_desc') ? get_field('tp_meta_desc') : $desCnt;

include(APP_PATH_CN . 'libs/head.php');
?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/news.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="news-single" class="news-single cn">
  <?php include(APP_PATH_CN . 'libs/header.php'); ?>
  <main id="wrap">
    <div class="c-breadcrumb aos-init" data-aos="fade-up">
      <ul>
        <li><a href="<?php echo APP_URL_CN; ?>">TOP</a></li>
        <li><a href="<?php echo APP_URL_CN; ?>news/">News & Event</a></li>
        <li><?php echo $sg_title_strip; ?></li>
      </ul>
    </div>

    <div class="article-news inner1170">
      <div class="img-wave-blue aos-init" data-aos="fade-up">
        <div class="wave-top">
          <p class="c-mask" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue.png" data-bgsp="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue.png"></p>
        </div>
        <div class="wave-bottom">
          <p class="c-mask" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue.png" data-bgsp="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue.png"></p>
        </div>
      </div>
      <div class="article-inner">
        <div class="img-dot aos-init" data-aos="fade-up"><img width="180" height="55" src="<?php echo createSVG(180, 55); ?>" data-src="<?php echo APP_ASSETS; ?>img/common/dot_decor.png" rel="js-lazy" alt="decoration"></div>
        <div class="box-meta aos-init" data-aos="fade-up">
          <span class="meta-date"><?php echo $sg_date; ?></span>
          <?php if (!empty($sg_terms)) {
            foreach ($sg_terms as $term) {
              $cat_id = $term->term_id;
              $cat_name = get_field('cat_name_cn', 'newscat' . '_' . $cat_id) ?: $term->name;
              $cat_link = get_term_link($term);
              $cat_link = insertLangInUrl($cat_link, 'newscat', 'cn');
          ?>
              <a class="meta-cates" href="<?php echo $cat_link; ?>"><?php echo $cat_name; ?></a>
          <?php }
          } ?>
        </div>
        <h1 class="sg-heading aos-init" data-aos="fade-up"><?php echo $sg_title; ?></h1>
        <?php if (!empty($sg_thumb)) { ?>
          <figure class="sg-mainimg aos-init" data-aos="fade-up">
            <img width="<?php echo $sg_thumb[1]; ?>" height="<?php echo $sg_thumb[2]; ?>" src="<?php echo createSVG(1000, 490); ?>" data-src="<?php echo $sg_thumb[0]; ?>" rel="js-lazy" alt="<?php echo $sg_title_strip; ?>">
          </figure>
        <?php } ?>
      </div>
      <div class="article-block">
        <?php if (!empty($editor)) { ?>
          <div class="cms-content aos-init" data-aos="fade-up">
            <?php echo $editor; ?>
          </div>
        <?php } ?>
        <div class="sg-share aos-init" data-aos="fade-up">
          <div class="share-inner">
            <span class="share__ttl">Share</span>
            <a class="share__link" target="_blank" href="https://twitter.com/share?url=<?php echo APP_URL_CN; ?>news/<?php echo urlencode($post->post_name); ?>">
              <img width="31" height="30" src="<?php echo createSVG(31, 30); ?>" data-src="<?php echo APP_ASSETS; ?>img/common/ico_x.svg" rel="js-lazy" alt="">
            </a>
            <a class="share__link pc" target="_blank" href="https://line.me/R/msg/text/?<?php echo urlencode(get_the_title($sg_id)); ?>%0D%0A<?php echo urlencode(insertLangInUrl(get_the_permalink($sg_id), 'news', 'cn')); ?>">
              <img width="31" height="30" src="<?php echo createSVG(31, 30); ?>" data-src="<?php echo APP_ASSETS; ?>img/common/ico_line.svg" rel="js-lazy" alt="">
            </a>
            <a class="share__link sp" target="_blank" href="line://msg/text/<?php echo urlencode(get_the_title($sg_id)); ?>%0D%0A<?php echo urlencode(insertLangInUrl(get_the_permalink($sg_id), 'news', 'cn')); ?>">
              <img width="31" height="30" src="<?php echo createSVG(31, 30); ?>" data-src="<?php echo APP_ASSETS; ?>img/common/ico_line.svg" rel="js-lazy" alt="">
            </a>
            <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            <a class="share__link" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo insertLangInUrl(get_the_permalink($sg_id), 'news', 'cn'); ?>">
              <img width="31" height="30" src="<?php echo createSVG(31, 30); ?>" data-src="<?php echo APP_ASSETS; ?>img/common/ico_facebook.svg" rel="js-lazy" alt="">
            </a>
          </div>
        </div>

        <?php
        $postlist_args = array(
          'posts_per_page' => '-1',
          'post_status'    => 'publish',
          'order'          => 'DESC',
          'orderby'        => 'post_date',
          'post_type'      => 'news',
        );
        $postlist = get_posts($postlist_args);
        $ids = array();
        foreach ($postlist as $thepost) {
          $ids[] = $thepost->ID;
        }

        $thisindex = array_search($sg_id, $ids);

        if (isset($ids[$thisindex + 1])) {
          $previd = $ids[$thisindex + 1];
          $prev_link = get_the_permalink($previd);
          $prev_link = insertLangInUrl($prev_link, 'news', 'cn');
          $prev_ttl = get_field('title_cn', $previd) ?: get_the_title($previd);
          $prev_thumb = wp_get_attachment_url(get_post_thumbnail_id($previd), 'thumbnail');
          $prev_thumb = $prev_thumb ? $prev_thumb : APP_NOIMG;
        }
        if (isset($ids[$thisindex - 1])) {
          $nextid = $ids[$thisindex - 1];
          $next_link = get_the_permalink($nextid);
          $next_link = insertLangInUrl($next_link, 'news', 'cn');
          $next_ttl = get_field('title_cn', $nextid) ?: get_the_title($nextid);
          $next_thumb = wp_get_attachment_url(get_post_thumbnail_id($nextid), 'thumbnail');
          $next_thumb = $next_thumb ? $next_thumb : APP_NOIMG;
        }
        ?>
        <div class="mod-pagination">
          <a href="<?php if (!empty($prev_link)) {
                      echo $prev_link;
                    } ?>" class="prev <?php if (empty($previd)) {
                                        echo "disable";
                                      } ?>">
            <?php if (!empty($previd)) { ?>
              <div class="thumb-ctn">
                <p class="prev__thumb <?php echo $prev_thumb == APP_NOIMG ? "c-nophoto" : ""; ?>">
                  <img width="100" height="100" src="<?php echo createSVG(100, 100); ?>" data-src="<?php echo $prev_thumb; ?>" rel="js-lazy" alt="">
                </p>
              </div>
              <?php if (!empty($prev_ttl)) { ?>
                <p class="prev__ttl"><?php echo $prev_ttl; ?></p>
              <?php } ?>
            <?php } ?>
          </a>
          <a href="<?php echo APP_URL_CN ?>news/" class="c-btn01 is-cover">
            <i class="arr01"></i>
            <span>返回一览表</span>
            <i class="arr02"></i>
          </a>
          <a href="<?php if (!empty($next_link)) {
                      echo $next_link;
                    } ?>" class="next <?php if (empty($nextid)) {
                                        echo "disable";
                                      } ?>">
            <?php if (!empty($nextid)) { ?>
              <div class="thumb-ctn">
                <p class="next__thumb <?php echo $next_thumb == APP_NOIMG ? "c-nophoto" : ""; ?>">
                  <img width="100" height="100" src="<?php echo createSVG(100, 100); ?>" data-src="<?php echo $next_thumb; ?>" rel="js-lazy" alt="">
                </p>
              </div>
              <?php if (!empty($next_ttl)) { ?>
                <p class="next__ttl"><?php echo $next_ttl; ?></p>
              <?php } ?>
            <?php } ?>
          </a>
        </div>

      </div>
    </div>
  </main>
  <?php include(APP_PATH_CN . 'libs/footer.php'); ?>
  <script>
    $('.cms-content .wp-caption img, .cms-content p img').each(function() {
      if ($(this).closest('.img-2col__photo').length === 0) {
        $(this).wrap('<div class="img-container"></div>');
      }
    });
  </script>
</body>

</html>