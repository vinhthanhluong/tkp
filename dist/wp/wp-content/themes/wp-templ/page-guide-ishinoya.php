<?php

/**
 * Template Name: Page GUIDE ISHINOYA
 **/
$thisPageName = 'ishinoya';
include(APP_PATH . 'libs/head02.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/lib/swiper-bundle.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/ishinoya.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="ishinoya" class="ishinoya">
  <?php include(APP_PATH . 'libs/header02.php'); ?>
  <main id="wrap02">
    <div class="i-overflow">
      <div class="sec-mv">
        <div class="mv-bg">
          <img class="pc" src="<?php echo createSVG(1440, 900) ?>" data-src="<?php echo APP_ASSETS; ?>img/ishinoya/mv.jpg" rel="js-lazy" width="1440" height="900" alt="ISHINOYA 別府 / 石のや 別府 メインビジュアル画像">
          <img class="sp" src="<?php echo createSVG(375, 667) ?>" data-src="<?php echo APP_ASSETS; ?>img/ishinoya/mv_sp.jpg" rel="js-lazy" width="375" height="667" alt="ISHINOYA 別府 / 石のや 別府 メインビジュアル画像">
        </div>
        <div class="mv-ctn">
          <p class="mv-ttl">
            <span class="row">自然と一体化する</span>
            <span class="row">癒しのひとときを</span>
          </p>
          <p class="mv-scrolldown">Scroll down<i class="circle"></i></p>
        </div>
      </div>
      <?php
      $parkTermId = 8;
      $ishinoyaTermId = 10;
      $args_news = array(
        'post_type'           => 'news',
        'order'               => 'DESC',
        'orderby'             => 'post_date',
        'posts_status'        => 'publish',
        'posts_per_page'      => 6,
        'tax_query'           => array(
          array(
            'taxonomy' => 'newscat',
            'field'    => 'term_id',
            'terms'    => array($parkTermId, $ishinoyaTermId),
          ),
        )
      );
      $query_news = new WP_Query($args_news);
      ?>

      <div class="i-bg">
        <?php if ($query_news->have_posts()) { ?>
          <div class="sec-news">
            <section class="c-sec-news" id="news">
              <div class="inner1170">
                <div class="c-ttl04">
                  <h2 class="c-ttl04__jp">お知らせ</h2>
                  <span class="c-ttl04__en">News</span>
                </div>
                <div class="news-content">
                  <div class="news-slider js-slider-news">
                    <div class="swiper-wrapper">
                      <?php
                      while ($query_news->have_posts()) {
                        $query_news->the_post();
                        $n_id    = $post->ID;
                        $n_url   = get_the_permalink($n_id);
                        $n_ttl   = get_the_title($n_id);
                        $n_date  = get_the_date('Y.m.d');
                        $n_terms = get_the_terms($n_id, 'newscat');
                        $n_thumb = get_the_post_thumbnail_url($n_id);
                        $n_photo = (!empty($n_thumb)) ? $n_thumb : APP_NOIMG;
                      ?>
                        <div class="swiper-slide">
                          <a class="news-item" href="<?php echo $n_url; ?>">
                            <figure class="news-img c-img <?php echo $n_photo == APP_NOIMG ? "c-nophoto" : ""; ?>">
                              <img src="<?php echo $n_photo; ?>" width="260" height="260" alt="<?php echo $n_ttl; ?>">
                            </figure>
                            <div class="news-head">
                              <span class="news-time"><?php echo $n_date; ?></span>
                              <?php if (!empty($n_terms)) { ?>
                                <span class="news-cate">
                                  <?php
                                  foreach ($n_terms as $nterm) {
                                    $cat_name = $nterm->name;
                                    $cat_class = $cat_name == 'お知らせ' ? 'is-blue' : 'is-yellow';
                                  ?>
                                    <span class="item <?php echo $cat_class; ?>"><?php echo $cat_name; ?></span>
                                  <?php } ?>
                                </span>
                              <?php } ?>
                            </div>
                            <h3 class="news-ttl"><?php echo $n_ttl; ?></h3>
                          </a>
                        </div>
                      <?php } ?>
                    </div>
                    <div class="swiper-group">
                      <div class="swiper-pagination"></div>
                      <div class="swiper-progress-bar">
                        <span class="slide-progress-bar"></span>
                      </div>
                    </div>
                  </div>
                </div>
                <a class="c-btn04" href="<?php echo get_term_link($ishinoyaTermId, 'newscat'); ?>"><span>もっと見る</span></a>
              </div>
            </section>
          </div>
        <?php } ?>

        <div class="sec-room">
          <div class="c-wcm01">
            <div class="c-ttl04 sp">
              <h2 class="c-ttl04__jp">お部屋</h2>
              <span class="c-ttl04__en pc">Rooms</span>
              <span class="c-ttl04__en sp">Room</span>
            </div>
            <section class="c-secwrap wrap-right">
              <div class="c-secwrap__colslide">

                <!-- <div class="c-gallery__main">
                  <div class="gallery-wrapper js-slider-gallery01">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="gallery-pic c-img">
                          <img src="<?php echo APP_ASSETS ?>img/ishinoya/slide_room01.jpg" width="625" height="440" alt="お部屋画像">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="gallery-pic c-img">
                          <img src="<?php echo APP_ASSETS ?>img/ishinoya/slide_room02.jpg" width="625" height="440" alt="お部屋画像">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="gallery-pic c-img">
                          <img src="<?php echo APP_ASSETS ?>img/ishinoya/slide_room03.jpg" width="625" height="440" alt="お部屋画像">
                        </div>
                      </div>
                    </div>
                    <p class="c-cursor__slide js-cursor__slide">
                      <span class="txt">Prev</span>
                    </p>
                    <div class="gallerySwiper-prev swiper01-prev">
                    </div>
                    <div class="gallerySwiper-next swiper01-next">
                    </div>
                  </div>
                  <div class="swiper-group">
                    <div class="gallerySwiper-pagination swiper01-pagination"></div>
                    <div class="gallerySwiper-progress-bar swiper01-progress-bar pc">
                      <span class="slide-progress-bar"></span>
                    </div>
                  </div>
                </div>
                <div class="c-gallery__thumb">
                  <div class="slider-thumb-gallery js-slider-thumb01">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/ishinoya/thumb_room01.jpg" width="140" height="100" alt="お部屋画像"></div>
                      </div>
                      <div class="swiper-slide">
                        <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/ishinoya/thumb_room02.jpg" width="140" height="100" alt="お部屋画像"></div>
                      </div>
                      <div class="swiper-slide">
                        <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/ishinoya/thumb_room03.jpg" width="140" height="100" alt="お部屋画像"></div>
                      </div>
                    </div>
                  </div>
                </div> -->
                <div class="i-thumb01">
                  <img class="pc" src="<?php echo APP_ASSETS ?>img/ishinoya/slide_room02.jpg" width="625" height="440" alt="">
                  <img class="sp" src="<?php echo APP_ASSETS ?>img/ishinoya/slide_room02_sp.jpg" width="327" height="230" alt="">
                </div>
              </div>
              <div class="c-secwrap__colctn">
                <div class="colctn-inner">
                  <div class="c-ttl04 pc">
                    <h2 class="c-ttl04__jp">お部屋</h2>
                    <span class="c-ttl04__en">Rooms</span>
                  </div>
                  <h3 class="colctn-ttl">別府の大自然に囲まれたここでしかない空間</h3>
                  <div class="colctn-desc">
                    <p class="txt">全7種 23室の様々なお部屋タイプがあり、露天風呂付客室では、プライベートな時間と別府温泉の源泉をひとり占め。非日常に囲まれた空間で、贅沢なひとときをお過ごしください。</p>
                  </div>
                  <div class="colctn-info">
                    <p class="info-item">
                      <span class="ttl01">チェックイン</span>
                      <span class="time01">15:00</span>
                    </p>
                    <span class="slash sp">/</span>
                    <p class="info-item">
                      <span class="ttl01">チェックアウト</span>
                      <span class="time01">11:00</span>
                    </p>
                  </div>
                  <a class="c-btn04" href="<?php echo APP_URL ?>guide/ishinoya/rooms/"><span>もっと見る</span></a>
                </div>
              </div>
            </section>
          </div>
        </div>

        <div class="sec-spa">
          <div class="c-wcm01">
            <div class="c-ttl04 sp">
              <h2 class="c-ttl04__jp">温泉・砂湯</h2>
              <span class="c-ttl04__en">Spa</span>
            </div>
            <section class="c-secwrap wrap-left">
              <div class="c-secwrap__colslide">
                <!-- <div class="c-gallery__main">
                  <div class="gallery-wrapper js-slider-gallery02">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="gallery-pic c-img">
                          <img src="<?php echo APP_ASSETS ?>img/ishinoya/slide_spa01.jpg" width="625" height="440" alt="温泉・砂湯画像">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="gallery-pic c-img">
                          <img src="<?php echo APP_ASSETS ?>img/ishinoya/slide_spa02.jpg" width="625" height="440" alt="温泉・砂湯画像">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="gallery-pic c-img">
                          <img src="<?php echo APP_ASSETS ?>img/ishinoya/slide_spa03.jpg" width="625" height="440" alt="温泉・砂湯画像">
                        </div>
                      </div>
                    </div>
                    <p class="c-cursor__slide js-cursor__slide">
                      <span class="txt">Prev</span>
                    </p>
                    <div class="gallerySwiper-prev swiper02-prev">
                    </div>
                    <div class="gallerySwiper-next swiper02-next">
                    </div>
                  </div>
                  <div class="swiper-group">
                    <div class="gallerySwiper-pagination swiper02-pagination"></div>
                    <div class="gallerySwiper-progress-bar swiper02-progress-bar pc">
                      <span class="slide-progress-bar"></span>
                    </div>
                  </div>
                </div>
                <div class="c-gallery__thumb">
                  <div class="slider-thumb-gallery js-slider-thumb02">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/ishinoya/thumb_spa01.jpg" width="140" height="100" alt="温泉・砂湯画像"></div>
                      </div>
                      <div class="swiper-slide">
                        <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/ishinoya/thumb_spa02.jpg" width="140" height="100" alt="温泉・砂湯画像"></div>
                      </div>
                      <div class="swiper-slide">
                        <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/ishinoya/thumb_spa03.jpg" width="140" height="100" alt="温泉・砂湯画像"></div>
                      </div>
                    </div>
                  </div>
                </div> -->
                <div class="i-thumb01">
                  <img class="pc" src="<?php echo APP_ASSETS ?>img/ishinoya/slide_spa02.jpg" width="625" height="440" alt="">
                  <img class="sp" src="<?php echo APP_ASSETS ?>img/ishinoya/slide_spa02_sp.jpg" width="327" height="230" alt="">
                </div>
              </div>
              <div class="c-secwrap__colctn">
                <div class="colctn-inner">
                  <div class="c-ttl04 pc">
                    <h2 class="c-ttl04__jp">温泉・砂湯</h2>
                    <span class="c-ttl04__en">Spa</span>
                  </div>
                  <h3 class="colctn-ttl">自然と一体化する癒しの湯</h3>
                  <div class="colctn-desc">
                    <p class="txt">別府湾の美しい眺めを楽しみながら、心身の疲れを癒せる温泉をご用意。地元の天然温泉の恵みを存分に感じられる、贅沢なリラクゼーション体験をお届けします。</p>
                  </div>
                  <a class="c-btn04" href="<?php echo APP_URL ?>guide/ishinoya/spa/"><span>もっと見る</span></a>
                </div>
              </div>
            </section>
          </div>
        </div>

        <div class="sec-cuisine">
          <div class="c-wcm01">
            <div class="c-ttl04 sp">
              <h2 class="c-ttl04__jp">お食事</h2>
              <span class="c-ttl04__en">Cuisine</span>
            </div>
            <section class="c-secwrap wrap-right">
              <div class="c-secwrap__colslide">
                <!-- <div class="c-gallery__main">
                  <div class="gallery-wrapper js-slider-gallery03">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="gallery-pic c-img">
                          <img src="<?php echo APP_ASSETS ?>img/ishinoya/slide_cuisine01.jpg" width="625" height="440" alt="お食事画像">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="gallery-pic c-img">
                          <img src="<?php echo APP_ASSETS ?>img/ishinoya/slide_cuisine02.jpg" width="625" height="440" alt="お食事画像">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="gallery-pic c-img">
                          <img src="<?php echo APP_ASSETS ?>img/ishinoya/slide_cuisine03.jpg" width="625" height="440" alt="お食事画像">
                        </div>
                      </div>
                    </div>
                    <p class="c-cursor__slide js-cursor__slide">
                      <span class="txt">Prev</span>
                    </p>
                    <div class="gallerySwiper-prev swiper03-prev">
                    </div>
                    <div class="gallerySwiper-next swiper03-next">
                    </div>
                  </div>
                  <div class="swiper-group">
                    <div class="gallerySwiper-pagination swiper03-pagination"></div>
                    <div class="gallerySwiper-progress-bar swiper03-progress-bar pc">
                      <span class="slide-progress-bar"></span>
                    </div>
                  </div>
                </div>
                <div class="c-gallery__thumb">
                  <div class="slider-thumb-gallery js-slider-thumb03">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/ishinoya/thumb_cuisine01.jpg" width="140" height="100" alt="お食事画像"></div>
                      </div>
                      <div class="swiper-slide">
                        <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/ishinoya/thumb_cuisine02.jpg" width="140" height="100" alt="お食事画像"></div>
                      </div>
                      <div class="swiper-slide">
                        <div class="thumb-pic c-img"><img src="<?php echo APP_ASSETS ?>img/ishinoya/thumb_cuisine03.jpg" width="140" height="100" alt="お食事画像"></div>
                      </div>
                    </div>
                  </div>
                </div> -->
                <div class="i-thumb01">
                  <img class="pc" src="<?php echo APP_ASSETS ?>img/ishinoya/slide_cuisine02.jpg" width="625" height="440" alt="">
                  <img class="sp" src="<?php echo APP_ASSETS ?>img/ishinoya/slide_cuisine02_sp.jpg" width="327" height="230" alt="">
                </div>
              </div>
              <div class="c-secwrap__colctn">
                <div class="colctn-inner">
                  <div class="c-ttl04 pc">
                    <h2 class="c-ttl04__jp">お食事</h2>
                    <span class="c-ttl04__en">Cuisine</span>
                  </div>
                  <h3 class="colctn-ttl">地元の恵みを味わい尽くす<br>心も体も温まる食体験を</h3>
                  <div class="colctn-desc">
                    <p class="txt">別府湾の新鮮な海の幸、地元で採れた旬の食材をふんだんに使用したお料理をご提供します。<br>朝食からディナーまで、心も体も温まるメニューでおもてなしいたします。</p>
                  </div>
                  <a class="c-btn04" href="<?php echo APP_URL ?>guide/ishinoya/cuisine/"><span>もっと見る</span></a>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>

    </div>
  </main>
  <?php include(APP_PATH . 'libs/footer02.php'); ?>
  <script src="<?php echo APP_ASSETS ?>js/lib/swiper-bundle.min.js?v=<?php echo APP_VER ?>"></script>
  <script src="<?php echo APP_ASSETS ?>js/page/ishinoya.min.js?v=<?php echo APP_VER ?>"></script>
</body>

</html>