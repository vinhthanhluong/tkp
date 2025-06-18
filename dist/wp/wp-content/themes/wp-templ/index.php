<?php
$thisPageName = 'top';

$cat_search  = (!empty($_GET['newscat'])) ? $_GET['newscat'] : array();

include(APP_PATH . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/top.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="top" class="top">
  <?php include(APP_PATH . 'libs/header.php'); ?>
  <main id="wrap">
    <div class="sec-mv">
      <ul class="mv-video">
        <li class="mv-video__item">
          <div class="video-head sp"></div>
          <video id="mainVideo" preload="auto" muted playsinline autoplay loop data-baseurl="<?php echo APP_ASSETS; ?>img/top/"></video>
          <div class="video-foot sp"></div>
        </li>
      </ul>
      <div class="mv-container">
        <h1 class="mv-ttl">
          <span class="ttl-box is-morning">
            <span class="row">新たな別府を体験できる</span>
            <span class="row">パーク<span class="is-font">＆</span>リゾート</span>
          </span>
          <span class="ttl-box is-afternoon">
            <span class="row">新たな別府を体験できる</span>
            <span class="row">パーク<span class="is-font">＆</span>リゾート</span>
          </span>
          <span class="ttl-box is-evening">
            <span class="row">新たな別府を体験できる</span>
            <span class="row">パーク<span class="is-font">＆</span>リゾート</span>
          </span>
        </h1>
        <div class="mv-desc aos-init" data-aos="fade-up" data-aos-duration="500">
          <div class="mv-desc__inner">
            <p class="txt">別府市内で唯一の海浜砂湯が楽しめる上人ヶ<br class="sp">浜公園が、<br class="pc">新たな魅力を加えて生まれ変わった<br class="sp">「SHONIN PARK」<br>別府湾を一望できる絶景のロケーションで、<br>歴史ある砂湯温泉をはじめ、別府の魅力が集<br class="sp">結したショップや、<br class="pc">リゾート感あふれるレスト<br class="sp">ランや宿泊など様々な体験ができます。<br>別府の豊かな自然と共に、心安らぐひとときをお過ごしください。</p>
          </div>
        </div>
      </div>
    </div>

    <?php
    $news_categories = get_terms(
      array(
        'post_type'   => 'news',
        'taxonomy'    => 'newscat',
        'hide_empty'  => true,
        'pad_counts'  => false,
        'orderby'     => 'menu_order',
        'order'       => 'ASC',
      )
    );

    $args_news = array(
      'post_type'           => 'news',
      'order'               => 'DESC',
      'orderby'             => 'post_date',
      'posts_status'        => 'publish',
      'posts_per_page'      => 6,
    );
    $query_news = new WP_Query($args_news);
    if ($query_news->have_posts()) {
    ?>
      <div class="sec-news">
        <div class="t-wcm01">
          <h2 class="c-ttl01">
            <span class="c-ttl01__en aos-init anim-ttl01" data-aos=""><span class="anim-inner">NEWS</span></span>
            <span class="c-ttl01__jp aos-init anim-ttl01" data-aos=""><span class="anim-inner">ニュース</span></span>
          </h2>
          <?php if (!empty($news_categories)) { ?>
            <form method="get" class="searchform" id="searchform" action="<?php echo APP_URL ?>" name="searchform">
              <ul class="news-cate aos-init" data-aos="fade-up">
                <li class="item is-active">
                  <input type="radio" name="newscat" id="newscat00" value="">
                  <label for="newscat00">すべて</label>
                </li>
                <?php
                $count_cat = 0;
                foreach ($news_categories as $catitem) {
                  $count_cat = $count_cat + 1;
                  $cat_id = $catitem->term_id;
                  $cat_name = $catitem->name;
                ?>
                  <li class="item">
                    <input type="radio" name="newscat" id="newscat0<?php echo $count_cat; ?>" value="<?php echo $cat_id; ?>">
                    <label for="newscat0<?php echo $count_cat; ?>"><?php echo $cat_name; ?></label>
                  </li>
                <?php } ?>
              </ul>
            </form>
          <?php } ?>

          <ul class="c-lstpost01">
            <?php
            $delay = 0;
            while ($query_news->have_posts()) {
              $delay   = $delay + 200;
              $query_news->the_post();
              $n_id    = $post->ID;
              $n_url   = get_the_permalink($n_id);
              $n_ttl   = get_the_title($n_id);
              $n_date  = get_the_date('Y.m.d');
              $n_terms = get_the_terms($n_id, 'newscat');
              $n_thumb = get_the_post_thumbnail_url($n_id);
              $n_photo = (!empty($n_thumb)) ? $n_thumb : APP_NOIMG;
            ?>
              <li class="c-lstpost01__item aos-init" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
                <a class="lstpost01-link" href="<?php echo $n_url; ?>">
                  <div class="lstpost01-ctn01">
                    <div class="lstpost01-img <?php echo $n_photo == APP_NOIMG ? "c-nophoto" : ""; ?>">
                      <img src="<?php echo createSVG(345, 250) ?>" data-src="<?php echo $n_photo; ?>" rel="js-lazy" width="345" height="250" alt="<?php echo strip_tags($n_ttl); ?>">
                    </div>
                    <?php if (!empty($n_terms)) { ?>
                      <p class="cate">
                        <?php
                        foreach ($n_terms as $nterm) {
                          $cat_name = $nterm->name;
                          $cat_class = $cat_name == 'お知らせ' ? 'is-blue' : 'is-yellow';
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
          <div class="news-btn aos-init" data-aos="fade-up">
            <a href="<?php echo APP_URL ?>news/" class="c-btn01 is-center">
              <i class="arr01"></i>
              <span>もっと見る</span>
              <i class="arr02"></i>
            </a>
          </div>
        </div>
      </div>
    <?php } ?>

    <div class="sec-park">
      <div class="t-wcm01">
        <div class="park-wrap">
          <?php include(APP_PATH . 'libs/mod_park.php'); ?>
          <div class="park-ctn">
            <div class="park-ttl">
              <span class="park-ttl01">
                <span class="row aos-init anim-ttl01" data-aos=""><span class="anim-inner">ABOUT</span></span>
                <span class="row aos-init anim-ttl01" data-aos=""><span class="anim-inner">SHONIN PARK</span></span>
              </span>
              <h2 class="park-ttl02 aos-init anim-ttl01" data-aos="">
                <span class="anim-inner">SHONIN PARKについて</span>
              </h2>
            </div>
            <div class="park-desc aos-init anim-ttl01" data-aos="">
              <p class="txt anim-inner">SHONIN PARKの魅力がひと目で分かる園内マップ。気になるエリアをタップしてみてください！</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sec-how">
      <!-- <div class="how-inner">
        <div class="how-ctn">
          <div class="how-circle aos-init" data-aos=""></div>
          <div class="how-box">
            <div class="how-box__inner">
              <div class="t-ttlbox01">
                <span class="ttl01 aos-init anim-ttl01" data-aos="" data-aos-anchor=".how-circle" data-aos-delay="300">
                  <span class="anim-inner">HOW TO ENJOY</span>
                </span>
                <h2 class="ttl02 aos-init anim-ttl01" data-aos="" data-aos-anchor=".how-circle" data-aos-delay="300">
                  <span class="anim-inner">楽しみ方</span>
                </h2>
              </div>
              <div class="t-desc01 aos-init anim-ttl01" data-aos="" data-aos-anchor=".how-circle" data-aos-delay="300">
                <p class="txt anim-inner">日帰りから宿泊、夜の利用まで<br>SHONIN PARKの様々な楽しみ方を<br>ご提案いたします。</p>
              </div>
              <div class="how-btn aos-init" data-aos="fade-up" data-aos-anchor=".how-circle" data-aos-delay="300">
                <a href="<?php echo APP_URL ?>ways/" class="c-btn01 is-center">
                  <i class="arr01"></i>
                  <span>楽しみ方を見る</span>
                  <i class="arr02"></i>
                </a>
              </div>
              <div class="how-img img01 aos-init pc" data-aos="" data-aos-anchor=".how-circle" data-aos-delay="600">
                <img src="<?php echo createSVG(130, 86) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_img01.png" rel="js-lazy" width="130" height="86" alt="楽しみ方画像1">
              </div>
              <div class="how-img img02 aos-init" data-aos="" data-aos-anchor=".how-circle" data-aos-delay="600">
                <img src="<?php echo createSVG(160, 110) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_img02.png" rel="js-lazy" width="160" height="110" alt="楽しみ方画像2">
              </div>
              <div class="how-img img03 aos-init" data-aos="" data-aos-anchor=".how-circle" data-aos-delay="600">
                <img src="<?php echo createSVG(219, 150) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_img03.png" rel="js-lazy" width="219" height="150" alt="楽しみ方画像3">
              </div>
              <div class="how-img img04 aos-init pc" data-aos="" data-aos-anchor=".how-circle" data-aos-delay="600">
                <img src="<?php echo createSVG(280, 200) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_img04.png" rel="js-lazy" width="280" height="200" alt="楽しみ方画像4">
              </div>
              <div class="how-img img05 aos-init pc" data-aos="" data-aos-anchor=".how-circle" data-aos-delay="600">
                <img src="<?php echo createSVG(280, 200) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_img05.png" rel="js-lazy" width="280" height="200" alt="楽しみ方画像8">
              </div>
              <div class="how-img img06 aos-init" data-aos="" data-aos-anchor=".how-circle" data-aos-delay="600">
                <img src="<?php echo createSVG(220, 150) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_img06.png" rel="js-lazy" width="220" height="150" alt="楽しみ方画像7">
              </div>
              <div class="how-img img07 aos-init" data-aos="" data-aos-anchor=".how-circle" data-aos-delay="600">
                <img src="<?php echo createSVG(160, 110) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_img07.png" rel="js-lazy" width="160" height="110" alt="楽しみ方画像6">
              </div>
              <div class="how-img img08 aos-init pc" data-aos="" data-aos-anchor=".how-circle" data-aos-delay="600">
                <img src="<?php echo createSVG(130, 86) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_img08.png" rel="js-lazy" width="130" height="86" alt="楽しみ方画像5">
              </div>

              <div class="how-cloud cloud01 aos-init" data-aos="fade" data-aos-anchor=".how-circle" data-aos-delay="600">
                <img src="<?php echo createSVG(56, 18) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_cloud01.png" rel="js-lazy" width="56" height="18" alt="">
              </div>
              <div class="how-cloud cloud02 aos-init" data-aos="fade" data-aos-anchor=".how-circle" data-aos-delay="600">
                <img src="<?php echo createSVG(140, 106) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_cloud02.png" rel="js-lazy" width="140" height="106" alt="">
              </div>
              <div class="how-cloud cloud03 aos-init" data-aos="fade" data-aos-anchor=".how-circle" data-aos-delay="600">
                <img src="<?php echo createSVG(105, 117) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_cloud03.png" rel="js-lazy" width="105" height="117" alt="">
              </div>
              <div class="how-cloud cloud04 aos-init" data-aos="fade" data-aos-anchor=".how-circle" data-aos-delay="600">
                <img src="<?php echo createSVG(56, 18) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_cloud04.png" rel="js-lazy" width="56" height="18" alt="">
              </div>

              <div class="how-decor decor01 aos-init anim-scale01" data-aos="" data-aos-anchor=".how-circle" data-aos-delay="1200">
                <img src="<?php echo createSVG(137, 110) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_decor01.png" rel="js-lazy" width="137" height="110" alt="">
              </div>
              <div class="how-decor decor02 aos-init anim-scale01 pc" data-aos="" data-aos-anchor=".how-circle" data-aos-delay="1200">
                <img src="<?php echo createSVG(219, 176) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_decor02.png" rel="js-lazy" width="219" height="176" alt="ピクニックイラスト">
              </div>
              <div class="how-decor decor03 aos-init anim-scale01 pc" data-aos="" data-aos-anchor=".how-circle" data-aos-delay="1200">
                <img src="<?php echo createSVG(133, 114) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_decor03.png" rel="js-lazy" width="133" height="114" alt="砂湯に入る人イラスト">
              </div>
              <div class="how-decor decor04 aos-init anim-scale01" data-aos="" data-aos-anchor=".how-circle" data-aos-delay="1200">
                <img src="<?php echo createSVG(198, 144) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/how_decor04.png" rel="js-lazy" width="198" height="144" alt="松の木イラスト">
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </div>

    <div class="sec-sight">
      <div class="t-wcm02">
        <div class="sec-sight__inner">
          <div class="sight-decor decor01 pc aos-init anim-scale01" data-aos="">
            <img src="<?php echo createSVG(306, 192) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/sight_decor01.png" rel="js-lazy" width="306" height="144" alt="レストランイラスト">
          </div>
          <div class="sight-decor decor02 pc aos-init anim-scale01" data-aos="">
            <img src="<?php echo createSVG(245, 140) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/sight_decor02.png" rel="js-lazy" width="245" height="140" alt="宿泊コテージイラスト">
          </div>
          <div class="t-ttlbox01">
            <span class="ttl01 aos-init anim-ttl01" data-aos="">
              <span class="anim-inner">SIGHTSEEING</span>
            </span>
            <h2 class="ttl02 aos-init anim-ttl01" data-aos="">
              <span class="anim-inner">周辺観光</span>
            </h2>
          </div>
          <div class="t-desc01 aos-init anim-ttl01" data-aos="">
            <p class="txt anim-inner">SHONIN PARKの周辺には、別府市を代表する観光スポットや魅力的な施設が多数！<br>周辺観光を組み合わせて充実した日をお過ごしください。</p>
          </div>
          <div class="sight-btn aos-init" data-aos="fade-up" data-aos-anchor=".how-circle" data-aos-delay="300">
            <a href="<?php echo APP_URL ?>info/#info03" class="c-btn01 is-center">
              <i class="arr01"></i>
              <span>周辺観光を見る</span>
              <i class="arr02"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="t-overflow">
        <div class="sight-slider aos-init" data-aos="fade-up">
          <div class="sight-group">
            <ul class="lst-thumb">
              <li class="item">
                <img src="<?php echo APP_ASSETS; ?>img/top/sight_thumb01.png" alt="十文字原展望台（昼）">
              </li>
              <li class="item">
                <img src="<?php echo APP_ASSETS; ?>img/top/sight_thumb02.png" alt="道の駅 たのうらら">
              </li>
              <li class="item">
                <img src="<?php echo APP_ASSETS; ?>img/top/sight_thumb03.png" alt="別府タワー">
              </li>
              <li class="item">
                <img src="<?php echo APP_ASSETS; ?>img/top/sight_thumb04.png" alt="グローバルタワー">
              </li>
              <li class="item">
                <img src="<?php echo APP_ASSETS; ?>img/top/sight_thumb05.png" alt="ラクテンチ">
              </li>
              <li class="item">
                <img src="<?php echo APP_ASSETS; ?>img/top/sight_thumb06.png" alt="大分香りの博物館">
              </li>
              <li class="item">
                <img src="<?php echo APP_ASSETS; ?>img/top/sight_thumb07.png" alt="志高湖">
              </li>
              <li class="item">
                <img src="<?php echo APP_ASSETS; ?>img/top/sight_thumb08.png" alt="別府ロープウェイ">
              </li>
              <li class="item">
                <img src="<?php echo APP_ASSETS; ?>img/top/sight_thumb09.png" alt="十文字原展望台（夜）">
              </li>
              <li class="item">
                <img src="<?php echo APP_ASSETS; ?>img/top/sight_thumb10.png" alt="地獄めぐり（白池地獄）">
              </li>
            </ul>
          </div>
          <div class="sight-group">
            <ul class="lst-thumb">
              <li class="item">
                <img src="<?php echo APP_ASSETS; ?>img/top/sight_thumb01.png" alt="十文字原展望台（昼）">
              </li>
              <li class="item">
                <img src="<?php echo APP_ASSETS; ?>img/top/sight_thumb02.png" alt="道の駅 たのうらら">
              </li>
              <li class="item">
                <img src="<?php echo APP_ASSETS; ?>img/top/sight_thumb03.png" alt="別府タワー">
              </li>
              <li class="item">
                <img src="<?php echo APP_ASSETS; ?>img/top/sight_thumb04.png" alt="グローバルタワー">
              </li>
              <li class="item">
                <img src="<?php echo APP_ASSETS; ?>img/top/sight_thumb05.png" alt="ラクテンチ">
              </li>
              <li class="item">
                <img src="<?php echo APP_ASSETS; ?>img/top/sight_thumb06.png" alt="大分香りの博物館">
              </li>
              <li class="item">
                <img src="<?php echo APP_ASSETS; ?>img/top/sight_thumb07.png" alt="志高湖">
              </li>
              <li class="item">
                <img src="<?php echo APP_ASSETS; ?>img/top/sight_thumb08.png" alt="別府ロープウェイ">
              </li>
              <li class="item">
                <img src="<?php echo APP_ASSETS; ?>img/top/sight_thumb09.png" alt="十文字原展望台（夜）">
              </li>
              <li class="item">
                <img src="<?php echo APP_ASSETS; ?>img/top/sight_thumb10.png" alt="地獄めぐり（白池地獄）">
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="sec-instagram">
      <img class="instagram-bg pc" src="<?php echo createSVG(1440, 1230) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/instagram_bg01.png" rel="js-lazy" width="1230" height="1440" alt="">
      <img class="instagram-bg sp" src="<?php echo createSVG(1440, 1230) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/instagram_bg01_sp.png" rel="js-lazy" width="1230" height="1440" alt="">
      <div class="instagram-inner">
        <div class="instagram-decor01 aos-init" data-aos="fade-up">
          <img src="<?php echo createSVG(180, 55) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/instagram_decor01.svg" rel="js-lazy" width="180" height="55" alt="">
        </div>
        <div class="instagram-decor02 pc aos-init" data-aos="fade-up">
          <img src="<?php echo createSVG(80, 55) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/instagram_decor02.svg" rel="js-lazy" width="80" height="55" alt="">
        </div>
        <div class="instagram-decor03 pc aos-init" data-aos="fade-up">
          <img src="<?php echo createSVG(80, 55) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/instagram_decor02.svg" rel="js-lazy" width="80" height="55" alt="">
        </div>
        <div class="img-wave-blue aos-init" data-aos="fade-up">
          <div class="wave-top">
            <p class="c-mask" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/ico_wave_white.png" data-bgsp="<?php echo APP_ASSETS; ?>img/common/ico_wave_white.png"></p>
          </div>
          <div class="wave-bottom">
            <p class="c-mask" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/ico_wave_white.png" data-bgsp="<?php echo APP_ASSETS; ?>img/common/ico_wave_white.png"></p>
          </div>
        </div>
        <div class="t-wcm01">
          <div class="instagram-ttl">
            <span class="ttl01 aos-init anim-ttl01" data-aos="">
              <span class="anim-inner">INSTAGRAM</span>
            </span>
            <h2 class="ttl02 aos-init anim-ttl01" data-aos="">
              <span class="anim-inner">公式インスタグラム</span>
            </h2>
          </div>
          <ul class="instagram-lst aos-init" data-aos="fade-up">
            <li class="item">
              <img src="<?php echo createSVG(276, 276) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/cms/instagram_thumb01.png" rel="js-lazy" width="276" height="276" alt="">
            </li>
            <li class="item">
              <img src="<?php echo createSVG(276, 276) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/cms/instagram_thumb02.png" rel="js-lazy" width="276" height="276" alt="">
            </li>
            <li class="item">
              <img src="<?php echo createSVG(276, 276) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/cms/instagram_thumb03.png" rel="js-lazy" width="276" height="276" alt="">
            </li>
            <li class="item">
              <img src="<?php echo createSVG(276, 276) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/cms/instagram_thumb04.png" rel="js-lazy" width="276" height="276" alt="">
            </li>
            <li class="item">
              <img src="<?php echo createSVG(276, 276) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/cms/instagram_thumb05.png" rel="js-lazy" width="276" height="276" alt="">
            </li>
            <li class="item">
              <img src="<?php echo createSVG(276, 276) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/cms/instagram_thumb06.png" rel="js-lazy" width="276" height="276" alt="">
            </li>
            <li class="item">
              <img src="<?php echo createSVG(276, 276) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/cms/instagram_thumb07.png" rel="js-lazy" width="276" height="276" alt="">
            </li>
            <li class="item">
              <img src="<?php echo createSVG(276, 276) ?>" data-src="<?php echo APP_ASSETS; ?>img/top/cms/instagram_thumb08.png" rel="js-lazy" width="276" height="276" alt="">
            </li>
          </ul>
        </div>
      </div>
    </div>

  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
  <script src="<?php echo APP_ASSETS ?>js/page/top.min.js?v=<?php echo APP_VER ?>"></script>
  <script>
    $('.news-cate input').on("change", function() {
      $.ajax({
        type: "GET",
        url: "<?php echo admin_url('admin-ajax.php'); ?>",
        data: {
          action: "search_ajax",
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