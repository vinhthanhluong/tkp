<?php
$thisPageName = 'newsSingle';
$sg_id = $post->ID;
$current_ID = get_the_ID($sg_id);
$sg_title = get_the_title($sg_id);
$sg_title_strip = strip_tags($sg_title);
$sg_date = get_the_date('Y.m.d', $sg_id);
$sg_thumb = wp_get_attachment_image_src(get_post_thumbnail_id($sg_id), 'full');
$sg_terms = get_the_terms($sg_id, 'newscat');
if (!empty($sg_thumb)) $ogimg = $sg_thumb ? $sg_thumb[0] : get_first_image($post->post_content, false);
include(APP_PATH . 'libs/head.php');

?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/news.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="news-single">
  <?php include(APP_PATH . 'libs/header.php'); ?>
  <main id="wrap">
    <div class="c-breadcrumb aos-init" data-aos="fade-up">
      <ul>
        <li><a href="<?php echo APP_URL; ?>">TOP</a></li>
        <li><a href="<?php echo APP_URL; ?>news/">ニュース</a></li>
        <li><?php echo $sg_title_strip; ?></li>
      </ul>
    </div>

    <div class="article-news inner1170">
      <div class="article-inner">
        <div class="img-dot"><img width="180" height="55" src="<?php echo createSVG(180, 55); ?>" data-src="<?php echo APP_ASSETS; ?>img/common/dot_decor.png" rel="js-lazy" alt="decoration"></div>
        <div class="img-wave-blue">
          <p class="c-mask img-l" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue_l.png" data-bgsp="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue_l.png"></p>
          <p class="c-mask img-s" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue_s.png" data-bgsp="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue_s.png"></p>
        </div>
        <div class="box-meta">
          <span class="meta-date"><?php echo $sg_date; ?></span>
          <?php if (!empty($sg_terms)) { foreach ($sg_terms as $term) { ?>
            <a class="meta-cates" href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a>
          <?php } } ?>
        </div>
        <h1 class="sg-heading"><?php echo $sg_title; ?></h1>
        <?php if (!empty($sg_thumb)) { ?>
          <figure class="sg-mainimg aos-init" data-aos="fade-up">
            <img width="<?php echo $sg_thumb[1]; ?>" height="<?php echo $sg_thumb[2]; ?>" src="<?php echo createSVG(1000, 490); ?>" data-src="<?php echo $sg_thumb[0]; ?>" rel="js-lazy" alt="<?php echo $sg_title_strip; ?>">
          </figure>
        <?php } ?>
        <?php if (!empty($post->post_content)) { ?><div class="cms-content aos-init" data-aos="fade-up"><?php the_content(); ?></div><?php } ?>
        <div class="sg-share aos-init" data-aos="fade-up">
          <span class="share__ttl">Share</span>
          <a class="share__link" target="_blank" href="https://twitter.com/share?url=<?php echo APP_URL; ?>news/<?php echo urlencode($post->post_name); ?>">
            <img width="30" height="30" src="<?php echo createSVG(30, 30); ?>" data-src="<?php echo APP_ASSETS; ?>img/common/ico_x.svg" rel="js-lazy" alt="">
          </a>
          <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
          <a class="share__link" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo get_the_permalink($sg_id); ?>">
            <img width="30" height="30" src="<?php echo createSVG(30, 30); ?>" data-src="<?php echo APP_ASSETS; ?>img/common/ico_facebook.svg" rel="js-lazy" alt="">
          </a>
          <a class="share__link pc" target="_blank" href="https://line.me/R/msg/text/?<?php echo urlencode(get_the_title($sg_id)); ?>%0D%0A<?php echo urlencode(get_the_permalink($sg_id)); ?>">
            <img width="30" height="30" src="<?php echo createSVG(30, 30); ?>" data-src="<?php echo APP_ASSETS; ?>img/common/ico_line.svg" rel="js-lazy" alt="">
          </a>
          <a class="share__link sp" target="_blank" href="line://msg/text/<?php echo urlencode(get_the_title($sg_id)); ?>%0D%0A<?php echo urlencode(get_the_permalink($sg_id)); ?>">
            <img width="30" height="30" src="<?php echo createSVG(30, 30); ?>" data-src="<?php echo APP_ASSETS; ?>img/common/ico_line.svg" rel="js-lazy" alt="">
          </a>
        </div>

        <div class="sg-pagination">
          <a href="#">
            <p class="prev__thumb"><img width="100" height="100" src="<?php echo createSVG(100, 100); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/img01.jpg" rel="js-lazy" alt=""></p>
            <p class="prev__ttl pc">7月22日～「むらごとマルシェ」がスタート！</p>
          </a>
          <a href="<?php echo APP_URL ?>news/" class="c-btn01">
            <i class="arr01"></i>
            <span>一覧へ戻る</span>
            <i class="arr02"></i>
          </a>
          <a href="#">
            <p class="next__thumb"><img width="100" height="100" src="<?php echo createSVG(100, 100); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/img02.jpg" rel="js-lazy" alt=""></p>
            <p class="next__ttl pc">最大3,480円もお得。高速道路のお得なセットプラン。</p>
          </a>
        </div>
      </div>
    </div>
  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
</body>

</html>