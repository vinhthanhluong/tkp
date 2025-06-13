<?php
$thisPageName = 'shop';

$post_id = get_the_ID();
$shop_list = get_field('shop_list', $post_id);
$shop_list_name = [];
if (!empty($shop_list)) {
  foreach ($shop_list as $shop) {
    $shop_list_name[] = $shop['shop_name'];
  }
}
$news_relate = get_field('news_relate', $post_id);

include(APP_PATH . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/shop.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="shop">
  <?php include(APP_PATH . 'libs/header.php'); ?>
  <main id="wrap">
    <div class="c-breadcrumb aos-init" data-aos="fade-up">
      <ul>
        <li><a href="<?php echo APP_URL; ?>">TOP</a></li>
        <li><a href="<?php echo APP_URL; ?>guide/">施設案内</a></li>
        <li>ショップ</li>
      </ul>
    </div>
    <div class="c-mainvisual is-mainvisual">
      <div class="mv-inner aos-init" data-aos="fade-up">
        <div class="img-wave-blue">
          <div class="wave-top">
            <p class="c-mask" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue.png" data-bgsp="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue.png"></p>
          </div>
          <div class="wave-bottom">
            <p class="c-mask" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue.png" data-bgsp="<?php echo APP_ASSETS; ?>img/common/ico_wave_blue.png"></p>
          </div>
        </div>
        <div class="mv-ttl aos-init" data-aos="fade-up">
          <h1 class="mv-ttl-jp">ショップ</h1>
          <span class="mv-ttl-en">shop</span>
        </div>
      </div>
      <div class="mv-img c-img aos-init" data-aos="fade-up">
        <img class="pc" src="<?php echo createSVG(1340, 350); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/shop/mv_img.jpg" rel="js-lazy" width="1340" height="350" alt="ショップのヘッダー画像">
        <img class="sp" src="<?php echo createSVG(344, 220); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/shop/mv_img_sp.jpg" rel="js-lazy" width="344" height="220" alt="ショップのヘッダー画像">
      </div>
    </div>
    <div class="c-about-block">
      <div class="about-bg" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/about_bg.jpg" data-bgsp="<?php echo APP_ASSETS; ?>img/guide/shop/about_bg_sp.png"></div>
      <div class="about-left">
        <figure class="about-img c-img pc aos-init" data-aos="fade-up">
          <img src="<?php echo createSVG(546, 514); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/shop/about_img01.jpg" rel="js-lazy" width="546" height="514" alt="ショップ画像">
        </figure>
      </div>
      <div class="about-right aos-init" data-aos="fade-up">
        <div class="about-content cloud-decor">
          <h2 class="about-ttl">別府の魅力を一堂に<br>ここにしかない<br class="sp">ショッピング体験</h2>
          <p class="about-desc">別府の特産品や特産品やグルメを楽しめるショップエリア。<br>別府の魅力を体験いただけるショップや、ここでしか手に入らない特別なアイテムを取り揃えています。</p>
          <div class="about-group dot-decor">
            <figure class="about-img c-img sp">
              <img src="<?php echo createSVG(220, 207); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/shop/about_img01_sp.jpg" rel="js-lazy" width="220" height="207" alt="">
            </figure>
            <div class="cloud-decor">
              <figure class="about-pic c-img">
                <img src="<?php echo createSVG(317, 198); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/shop/about_img02.jpg" rel="js-lazy" width="317" height="198" alt="">
              </figure>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="sec-shop">
      <div class="inner1170">
        <div class="map-block aos-init" data-aos="fade-up">
          <img src="<?php echo createSVG(317, 198); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/shop/map_shop.svg" rel="js-lazy" width="1170" height="577" alt="ショップエリアマップ">
          <?php if (!empty($shop_list_name[0])) { ?>
            <h3 class="map-tag is-tag01"><span class="tag-txt"><?php echo $shop_list_name[0]; ?></span></h3>
          <?php } ?>
          <?php if (!empty($shop_list_name[1])) { ?>
            <h3 class="map-tag is-tag02"><span class="tag-txt"><?php echo $shop_list_name[1]; ?></span></h3>
          <?php } ?>
          <?php if (!empty($shop_list_name[2])) { ?>
            <h3 class="map-tag is-tag03"><span class="tag-txt"><?php echo $shop_list_name[2]; ?></span></h3>
          <?php } ?>
          <?php if (!empty($shop_list_name[3])) { ?>
            <h3 class="map-tag is-tag04"><span class="tag-txt"><?php echo $shop_list_name[3]; ?></span></h3>
          <?php } ?>
          <?php if (!empty($shop_list_name[4])) { ?>
            <h3 class="map-tag is-tag05"><span class="tag-txt"><?php echo $shop_list_name[4]; ?></span></h3>
          <?php } ?>
          <?php if (!empty($shop_list_name[5])) { ?>
            <h3 class="map-tag is-tag06"><span class="tag-txt"><?php echo $shop_list_name[5]; ?></span></h3>
          <?php } ?>
          <?php if (!empty($shop_list_name[6])) { ?>
            <h3 class="map-tag is-tag07"><span class="tag-txt"><?php echo $shop_list_name[6]; ?></span></h3>
          <?php } ?>
        </div>

        <?php if (!empty($shop_list)) { ?>
          <div class="c-ttl02 aos-init" data-aos="fade-up">
            <h2 class="c-ttl02__jp">エリア案内</h2>
            <span class="c-ttl02__en">Shop Area</span>
          </div>
          <ul class="shop-list">
            <?php
            foreach ($shop_list as $shop) {
              $shop_name = $shop['shop_name'];
              $shop_pic = $shop['shop_pic'];
              $shop_pic = $shop_pic ? $shop_pic['sizes'] : '';
              $shop_pic = $shop_pic ? $shop_pic['medium']  : APP_NOIMG;
              $shop_desc = $shop['shop_desc'];
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
                        <dt>営業時間</dt>
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
    <?php if (!empty($news_relate)) {  ?>
      <section class="c-news-block" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/news_bg.jpg" data-bgsp="<?php echo APP_ASSETS; ?>img/common/news_bg_sp.jpg">
        <div class="inner1170">
          <div class="c-ttl02 is-white aos-init" data-aos="fade-up">
            <h2 class="c-ttl02__jp">ニュース</h2>
            <span class="c-ttl02__en">News</span>
          </div>
          <ul class="news-list">
            <?php
            foreach ($news_relate as $news) {
              $news_id = $news->ID;
              $news_url = get_the_permalink($news_id);
              $news_ttl = get_the_title($news_id);
              $news_date = get_the_date('Y.m.d', $news_id);
              $news_terms = get_the_terms($news_id, 'newscat');
              $news_thumb = get_the_post_thumbnail_url($news_id);
              $news_photo = (!empty($news_thumb)) ? $news_thumb : APP_NOIMG;
            ?>
              <li class="aos-init" data-aos="fade-up">
                <a class="news-item" href="<?php echo $news_url; ?>">
                  <figure class="news-img c-img <?php echo $news_photo == APP_NOIMG ? "c-nophoto" : ""; ?>">
                    <img src="<?php echo createSVG(165, 120); ?>" data-src="<?php echo $news_photo; ?>" rel="js-lazy" width="165" height="120" alt="<?php echo strip_tags($news_ttl); ?>">
                  </figure>
                  <div class="news-info">
                    <?php if (!empty($news_terms) || !empty($news_date)) { ?>
                      <div class="news-head">
                        <?php
                        if (!empty($news_terms)) {
                          foreach ($news_terms as $nterm) {
                            $cat_name = $nterm->name;
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
                      <h3 class="news-ttl"><?php echo $news_ttl; ?></h3>
                    <?php } ?>
                  </div>
                </a>
              </li>
            <?php } ?>
          </ul>
          <div class="aos-init" data-aos="fade-up">
            <a href="<?php echo APP_URL; ?>news/" class="c-btn01 is-center">
              <i class="arr01"></i>
              <span>もっと見る</span>
              <i class="arr02"></i>
            </a>
          </div>
        </div>
      </section>
    <?php } ?>
  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
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