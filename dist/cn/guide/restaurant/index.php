<?php
include_once(dirname(__DIR__) . '/../../app_config.php');
include_once(dirname(__DIR__) . '/../../wp/wp-load.php');

$thisPageName = 'restaurant';

$post_id = '137';
$editor = get_field('editor_cn', $post_id);

$food_list = get_field('food_list_cn', $post_id);
$file_repeater = get_field('file_repeater_cn', $post_id);

$parkTermId = 8;
$restaurantTermId = 9;
$args_news = array(
  'post_type'           => 'news',
  'order'               => 'DESC',
  'orderby'             => 'post_date',
  'posts_status'        => 'publish',
  'posts_per_page'      =>  4,
  'tax_query'           => array(
    array(
      'taxonomy'        => 'newscat',
      'field'           => 'term_id',
      'terms'           => array($parkTermId, $restaurantTermId),
    )
  )
);
$news_relate = new WP_Query($args_news);

include(APP_PATH_CN . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/lib/swiper-bundle.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/restaurant.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="restaurant" class="restaurant cn">
  <?php include(APP_PATH_CN . 'libs/header.php'); ?>
  <main id="wrap">
    <?php echo $editor; ?>

    <section class="sec-menu">
      <?php if (!empty($food_list) || !empty($file_repeater)) { ?>
        <div class="inner1170">
          <h2 class="c-ttl02 aos-init" data-aos="fade-up">
            <span class="c-ttl02__jp">メニュー</span>
            <span class="c-ttl02__en">Menu</span>
          </h2>
          <?php if (!empty($food_list)) { ?>
            <ul class="menu-list">
              <?php
              foreach ($food_list as $item) {
                $food_name = $item['food_name'];
                $food_pic = $item['food_pic'];
                $food_pic = $food_pic ? $food_pic['sizes'] : '';
                $food_pic = $food_pic ? $food_pic['medium'] : APP_NOIMG;
                $food_halfprice = $item['food_halfprice'];
                $food_price = $item['food_price'];
                $food_desc = $item['food_desc'];
              ?>
                <li>
                  <div class="menu-item aos-init" data-aos="fade-up">
                    <div class="menu-info">
                      <figure class="menu-img c-img <?php echo $food_pic == APP_NOIMG ? "c-nophoto" : ""; ?>">
                        <img src="<?php echo createSVG(345, 250); ?>" data-src="<?php echo $food_pic; ?>" rel="js-lazy" width="345" height="250" alt="">
                      </figure>
                      <div class="menu-head">
                        <?php if (!empty($food_name)) { ?>
                          <p class="menu-ttl"><?php echo $food_name; ?></p>
                        <?php } ?>
                        <?php if (!empty($food_price)) { ?>
                          <p class="menu-price">
                            <span class="number"><?php echo $food_price; ?></span>
                          </p>
                        <?php } ?>
                      </div>
                    </div>
                    <?php if (!empty($food_desc)) { ?>
                      <p class="menu-desc"><?php echo $food_desc; ?></p>
                    <?php } ?>
                  </div>
                </li>
              <?php } ?>
            </ul>
          <?php } ?>

          <?php
          if (!empty($file_repeater)) {

          ?>
            <ul class="button-list">
              <?php
              foreach ($file_repeater as $file) {
                $file_name = $file['file_name'];
                $file_pdf = $file['file_pdf'];
                if (!empty($file_pdf)) {
                  $file_pdf_size = $file_pdf['filesize'];
                  $file_pdf_size = round($file_pdf_size / (1024 * 1024), 2);
                  $file_pdf_url = $file_pdf['url'];
                }
              ?>
                <li class="button-list__item">
                  <a href="<?php echo $file_pdf_url; ?>" class="c-btn01 is-center" target="_blank" rel="noopener">
                    <i class="arr01"></i>
                    <span class="txt"><?php echo $file_name; ?></span>
                    <i class="arr02"></i>
                  </a>
                </li>
              <?php } ?>
            </ul>
          <?php } ?>
        </div>
      <?php } ?>
    </section>

    <?php if (!empty($news_relate)) {  ?>
      <section class="c-news-block" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/news_bg.jpg" data-bgsp="<?php echo APP_ASSETS; ?>img/common/news_bg_sp.jpg">
        <div class="inner1170">
          <h2 class="c-ttl02 is-white aos-init" data-aos="fade-up">
            <span class="c-ttl02__jp">最新动态与活动</span>
            <span class="c-ttl02__en">News</span>
          </h2>
          <ul class="news-list">
            <?php
            while ($news_relate->have_posts()) {
              $news_relate->the_post();
              $news_id = $news->ID;
              $news_url = get_the_permalink($news_id);
              $news_url = insertLangInUrl($news_url, 'news', 'cn');
              $news_ttl = get_field('title_cn', $news_id) ?: get_the_title($news_id);
              $news_date = get_the_date('Y.m.d', $news_id);
              $news_terms = get_the_terms($news_id, 'newscat');
              $news_thumb = get_the_post_thumbnail_url($news_id);
              $news_photo = (!empty($news_thumb)) ? $news_thumb : APP_NOIMG;
            ?>
              <li class="aos-init" data-aos="fade-up">
                <a class="news-item" href="<?php echo $news_url; ?>">
                  <figure class="news-img c-img <?php echo $news_photo == APP_NOIMG ? "c-nophoto" : ""; ?>">
                    <img src="<?php echo createSVG(165, 120); ?>" data-src="<?php echo $news_photo; ?>" rel="js-lazy" width="165" height="120" alt="">
                  </figure>
                  <div class="news-info">
                    <?php if (!empty($news_terms) || !empty($news_date)) { ?>
                      <div class="news-head">
                        <?php
                        if (!empty($news_terms)) {
                          foreach ($news_terms as $nterm) {
                            $cat_id = $nterm->term_id;
                            $cat_name = get_field('cat_name_cn', 'newscat' . '_' . $cat_id) ?: $nterm->name;
                        ?>
                            <p class="news-cate"><?php echo $cat_name; ?></p>
                        <?php }
                        } ?>
                        <?php
                        if (!empty($news_date)) {
                        ?>
                          <p class="news-time"><?php echo $news_date; ?></p>
                        <?php } ?>
                      </div>
                    <?php } ?>
                    <?php if (!empty($news_ttl)) { ?>
                      <p class="news-ttl"><?php echo $news_ttl; ?></p>
                    <?php } ?>
                  </div>
                </a>
              </li>
            <?php } ?>
          </ul>
          <div class="aos-init" data-aos="fade-up">
            <a href="<?php echo insertLangInUrl(get_term_link($restaurantTermId, 'newscat'), 'newscat', 'cn'); ?>" class="c-btn01 is-center">
              <i class="arr01"></i>
              <span>了解更多</span>
              <i class="arr02"></i>
            </a>
          </div>
        </div>
      </section>
    <?php } ?>

    <div class="sec-instagram">
      <div class="instagram-inner">
        <div class="t-wcm01">
          <h2 class="c-ttl02 aos-init" data-aos="fade-up">
            <span class="c-ttl02__jp">官方Instagram</span>
            <span class="c-ttl02__en">Instagram</span>
          </h2>
          <div class="instagram-embed">
            <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include(APP_PATH_CN . 'libs/footer.php'); ?>
  <?php wp_footer(); ?>
  <script src="<?php echo APP_ASSETS ?>js/lib/swiper-bundle.min.js?v=<?php echo APP_VER ?>"></script>
  <script>
    if ($('.js-swiper-gallery').length) {
      var sliderThumbnail = new Swiper('.js-swiper-thumb', {
        slidesPerView: 3,
        spaceBetween: 8,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        breakpoints: {
          768: {
            spaceBetween: 17,
          },
        },
      });

      new Swiper('.js-swiper-gallery', {
        loop: true,
        spaceBetween: 0,
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        threshold: 30,
        lazy: true,
        // effect: 'coverflow',
        // coverflowEffect: {
        //   rotate: 0,
        //   stretch: 0,
        //   depth: 100,
        //   modifier: 1,
        //   slideShadows: false
        // },
        // navigation: {
        //   nextEl: '.js-swiper-gallery .swiper-button-next',
        //   prevEl: '.js-swiper-gallery .swiper-button-prev'
        // },
        speed: 1500,
        // autoplay: false
        autoplay: {
          delay: 1500,
          disableOnInteraction: false
        },
        thumbs: {
          swiper: sliderThumbnail
        }
      });
    }
  </script>
</body>

</html>