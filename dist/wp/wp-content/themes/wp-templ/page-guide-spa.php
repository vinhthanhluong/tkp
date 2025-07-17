<?php

/**
 * Template Name: Page GUIDE SPA
 **/
$thisPageName = 'guide-spa';
include(APP_PATH . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/lib/swiper-bundle.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/guide_spa.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="guide-spa">
  <?php include(APP_PATH . 'libs/header03.php'); ?>
  <main id="wrap">
    <div class="sec-spa-keyvisual" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/guide/spa/bg_keyvisual.jpg" data-bgsp="<?php echo APP_ASSETS; ?>img/guide/spa/bg_keyvisual_sp.jpg">
      <div class="inner1170">
        <h1 class="keyvisual-logo"><img src="<?php echo createSVG(227, 306); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/spa/txt_spa.svg" rel="js-lazy" width="227" height="306" alt="Sand SPA"></h1>
      </div>
      <div class="anchor-container">
        <ul class="anchor-list">
          <li><a href="#area">エリア案内</a></li>
          <li><a href="#information">入浴時間・料金</a></li>
          <li><a href="#step">砂湯の利用方法</a></li>
          <li><a href="#news">お知らせ</a></li>
        </ul>
      </div>
    </div>
    <section class="sec-spa-about">
      <div class="inner1170">
        <ul class="about-list">
          <li class="about-item">
            <figure class="about-img c-img">
              <img src="<?php echo createSVG(500, 560); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/spa/about_img01.jpg" rel="js-lazy" width="500" height="560" alt="Sand SPA画像1">
            </figure>
            <div class="about-info">
              <figure class="about-pic c-img">
                <img src="<?php echo createSVG(250, 160); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/spa/about_img.jpg" rel="js-lazy" width="250" height="160" alt="Sand SPA画像2">
              </figure>
              <h2 class="about-ttl">100年の歴史が息づく<br>別府唯一の海浜砂湯</h2>
              <p class="about-desc">別府温泉は日本を代表する温泉地で、その中でも「砂湯」は砂に埋もれて温泉の効果を全身に感じる療法で、100年以上の歴史を誇ります。<br>特に「別府海浜砂湯」は、海を眺めながら砂湯を楽しめる別府唯一の温泉施設です。</p>
            </div>
          </li>
          <li class="about-item is-reverse">
            <figure class="about-img c-img">
              <img src="<?php echo createSVG(500, 560); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/spa/about_img02.jpg" rel="js-lazy" width="500" height="560" alt="Sand SPA画像3">
            </figure>
            <div class="about-info">
              <h2 class="about-ttl">別府の伝統と新しさが<br>融合する極上の<br>リラクゼーション空間</h2>
              <p class="about-desc">「別府海浜砂湯」の歴史と文化を継承しつつ、現代の快適さと魅力を兼ね備えた温浴施設「Sand SPA」。<br>別府の新名所として愛される、新たな癒しの場を提供します。</p>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <section class="sec-spa-area" id="area">
      <div class="inner1170">
        <div class="c-ttl04">
          <h2 class="c-ttl04__jp">エリア案内</h2>
          <span class="c-ttl04__en">Spa Area</span>
        </div>
        <div class="area-img">
          <img src="<?php echo createSVG(1170, 508); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/spa/area_map.png" rel="js-lazy" width="1170" height="508" alt="エリア案内マップ">
        </div>
      </div>
      <div class="c-intro">
        <div class="inner1170">
          <ul class="intro-list">
            <li class="intro-item aos-init" data-aos="fade-up">
              <figure class="intro-img c-img">
                <img src="<?php echo createSVG(655, 535); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/spa/intro_img01.jpg" rel="js-lazy" width="655" height="535" alt="砂湯画像1">
              </figure>
              <div class="intro-info">
                <figure class="intro-photo c-img">
                  <img src="<?php echo createSVG(250, 160); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/spa/intro_img.jpg" rel="js-lazy" width="250" height="160" alt="砂湯画像2">
                </figure>
                <h3 class="intro-ttl is-mb">砂湯</h3>
                <h4 class="intro-ttls">温かい砂に包まれる極上の癒し体験</h4>
                <p class="intro-desc">温かな砂に包まれながら、別府湾の美しい眺めも楽しめる砂湯。日頃の疲れを解きほぐし、心も体も芯から温まる、極上のリラックス体験をお届けします。</p>
                <h4 class="intro-txt">効能</h4>
                <p class="intro-efficacy">関節リウマチ、変形性関節症、神経痛、五十肩、打撲、捻挫、筋肉のこわばり、胃腸機能の低下、軽症高血圧、耐糖能異常、自律神経不安定症、痔、睡眠障害、うつ状態、疲労回復、健康増進</p>
              </div>
            </li>
            <li class="intro-item is-reverse aos-init" data-aos="fade-up">
              <figure class="intro-img c-img">
                <img src="<?php echo createSVG(655, 535); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/spa/intro_img02.jpg" rel="js-lazy" width="655" height="535" alt="大浴場画像">
              </figure>
              <div class="intro-info">
                <h3 class="intro-ttl is-mb">大浴場</h3>
                <h4 class="intro-ttls">心と体を癒す広々とした温泉空間</h4>
                <p class="intro-desc">海を望める大きな湯船で、手足を伸ばしながらゆったりと温泉に浸かり、心と体の疲れを癒せます。</p>
                <h4 class="intro-txt">効能</h4>
                <p class="intro-efficacy">関節リウマチ、変形性関節症、神経痛、五十肩、打撲、捻挫、筋肉のこわばり、胃腸機能の低下、軽症高血圧、耐糖能異常、自律神経不安定症、痔、睡眠障害、うつ状態、疲労回復、健康増進</p>
              </div>
            </li>
          </ul>
          <ul class="intro-lst">
            <li class="intro-col aos-init" data-aos="fade-up">
              <figure class="intro-pic c-img">
                <img class="pc" src="<?php echo createSVG(450, 550); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/spa/intro_img03.jpg" rel="js-lazy" width="450" height="550" alt="足湯画像">
                <img class="sp" src="<?php echo createSVG(327, 267); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/spa/intro_img03_sp.jpg" rel="js-lazy" width="327" height="267" alt="足湯画像">
              </figure>
              <h3 class="intro-ttl">足湯</h3>
              <p class="intro-desc">無料で利用できる集いの場としての足湯を設けています。温泉街別府を気軽に体現できるリラックス空間となっています。</p>
            </li>
            <li class="intro-col aos-init" data-aos="fade-up">
              <figure class="intro-pic c-img">
                <img class="pc" src="<?php echo createSVG(450, 550); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/spa/intro_img04.jpg" rel="js-lazy" width="450" height="550" alt="Bar画像">
                <img class="sp" src="<?php echo createSVG(327, 267); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/spa/intro_img04_sp.jpg" rel="js-lazy" width="327" height="267" alt="Bar画像">
              </figure>
              <h3 class="intro-ttl">Bar</h3>
              <p class="intro-desc">風呂上がりのくつろぎ空間として Bar スペースも完備しております。ドリンク片手に、リラックスした時間をお楽しみいただけます。</p>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="sec-spa-info" id="information">
      <div class="inner1170">
        <div class="c-ttl04">
          <h2 class="c-ttl04__jp">入浴時間・料金</h2>
          <span class="c-ttl04__en">Information</span>
        </div>
        <div class="info-data">
          <dl>
            <dt>
              <h3>営業時間</h3>
            </dt>
            <dd>8:00～22:00（最終受付 21:00）</dd>
          </dl>
          <dl>
            <dt>
              <h3>料金</h3>
            </dt>
            <dd>大人：2,500円<br>小人（6歳～12歳）：1,800円</dd>
          </dl>
          <dl>
            <dt>
              <h3>アメニティ</h3>
            </dt>
            <dd>
              <ul class="txt-list">
                <li>シャンプー</li>
                <li>クレンジング</li>
                <li>コンディショナー</li>
                <li>化粧水</li>
                <li>ボディソープ</li>
                <li>乳液</li>
                <li>ドライヤー</li>
                <li>ヘアブラシ</li>
              </ul>
            </dd>
          </dl>
          <dl>
            <dt>
              <h3>レンタル品（無料）</h3>
            </dt>
            <dd>
              <ul class="txt-list">
                <li>砂湯専用浴衣</li>
                <li>タオル</li>
              </ul>
            </dd>
          </dl>
          <dl>
            <dt>
              <h3>定休日</h3>
            </dt>
            <dd>不定休（月2回）</dd>
          </dl>
          <dl class="pc">
            <dt>
              <h3>TEL</h3>
            </dt>
            <dd><a href="tel:0977756360" class="txt-link">0977-75-6360</a></dd>
          </dl>
        </div>
      </div>
    </section>
    <section class="sec-spa-step" id="step">
      <div class="inner1170">
        <div class="c-ttl04">
          <h2 class="c-ttl04__jp">砂湯の利用方法</h2>
          <span class="c-ttl04__en">How to <br class="sp">Use SUNAYU</span>
        </div>
        <ul class="step-list">
          <li class="step-item">
            <figure class="step-img c-img">
              <img class="pc" src="<?php echo createSVG(280, 150); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/spa/step_img01.jpg" rel="js-lazy" width="280" height="150" alt="ご予約">
              <img class="sp" src="<?php echo createSVG(327, 175); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/spa/step_img01_sp.jpg" rel="js-lazy" width="327" height="175" alt="ご予約">
            </figure>
            <div class="step-info">
              <div class="step-head">
                <span class="step-number">Step 01</span>
                <h3 class="step-ttl">ご予約</h3>
              </div>
              <p>公式HPより事前予約お願いします。<br>※当日予約でもご利用可能ですが、待ち時間が発生する場合がございます。</p>
            </div>
          </li>
          <li class="step-item">
            <figure class="step-img c-img">
              <img class="pc" src="<?php echo createSVG(280, 150); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/spa/step_img02.jpg" rel="js-lazy" width="280" height="150" alt="専用の浴衣に着替え">
              <img class="sp" src="<?php echo createSVG(327, 175); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/spa/step_img02_sp.jpg" rel="js-lazy" width="327" height="175" alt="専用の浴衣に着替え">
            </figure>
            <div class="step-info">
              <div class="step-head">
                <span class="step-number">Step 02</span>
                <h3 class="step-ttl">専用の浴衣に着替え</h3>
              </div>
              <p>ご予約時間になりましたらスタッフがご案内致しますので、<br class="pc">更衣室で専用の浴衣にお着替えください。</p>
            </div>
          </li>
          <li class="step-item">
            <figure class="step-img c-img">
              <img class="pc" src="<?php echo createSVG(280, 150); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/spa/step_img03.jpg" rel="js-lazy" width="280" height="150" alt="砂湯を楽しむ">
              <img class="sp" src="<?php echo createSVG(327, 175); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/spa/step_img03_sp.jpg" rel="js-lazy" width="327" height="175" alt="砂湯を楽しむ">
            </figure>
            <div class="step-info">
              <div class="step-head">
                <span class="step-number">Step 03</span>
                <h3 class="step-ttl">砂湯を楽しむ</h3>
              </div>
              <p>砂湯に寝転んでいただき、スタッフが砂掛けを行います。海を眺めながら、15分間砂湯をお楽しみください。<br>※熱い場合は手足をバタバタと動かすと、隙間から熱気が逃げ温度調整ができます。</p>
            </div>
          </li>
          <li class="step-item">
            <figure class="step-img c-img">
              <img class="pc" src="<?php echo createSVG(280, 150); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/spa/step_img04.jpg" rel="js-lazy" width="280" height="150" alt="シャワー">
              <img class="sp" src="<?php echo createSVG(327, 175); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/spa/step_img04_sp.jpg" rel="js-lazy" width="327" height="175" alt="シャワー">
            </figure>
            <div class="step-info">
              <div class="step-head">
                <span class="step-number">Step 04</span>
                <h3 class="step-ttl">シャワー</h3>
              </div>
              <p>シャワールームで身体と浴衣に付いた砂をしっかりと落とします。</p>
            </div>
          </li>
          <li class="step-item">
            <figure class="step-img c-img">
              <img class="pc" src="<?php echo createSVG(280, 150); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/spa/step_img05.jpg" rel="js-lazy" width="280" height="150" alt="大浴場でゆっくりと">
              <img class="sp" src="<?php echo createSVG(327, 175); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/spa/step_img05_sp.jpg" rel="js-lazy" width="327" height="175" alt="大浴場でゆっくりと">
            </figure>
            <div class="step-info">
              <div class="step-head">
                <span class="step-number">Step 05</span>
                <h3 class="step-ttl">大浴場でゆっくりと</h3>
              </div>
              <p>温泉に浸かり、身体の芯から温まりリラックス。大浴場のご利用なしで、<br class="pc">そのまま更衣室でお着替えいただくことも可能です。</p>
            </div>
          </li>
          <li class="step-item">
            <figure class="step-img c-img">
              <img class="pc" src="<?php echo createSVG(280, 150); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/spa/step_img06.jpg" rel="js-lazy" width="280" height="150" alt="着替え">
              <img class="sp" src="<?php echo createSVG(327, 175); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/spa/step_img06_sp.jpg" rel="js-lazy" width="327" height="175" alt="着替え">
            </figure>
            <div class="step-info">
              <div class="step-head">
                <span class="step-number">Step 06</span>
                <h3 class="step-ttl">着替え</h3>
              </div>
              <p>着替え終わったら、ご利用終了。引き続きSHONIN PARKをお楽しみください。</p>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <?php
    $parkTermId = 8;
    $spaTermId = 7;
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
          'terms'    => array($parkTermId, $spaTermId),
        ),
      ),
    );
    $query_news = new WP_Query($args_news);
    if ($query_news->have_posts()) {
    ?>

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
          <a class="c-btn04" href="<?php echo get_term_link($spaTermId, 'newscat'); ?>"><span>もっと見る</span></a>
        </div>
      </section>
    <?php } ?>
  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
  <script src="<?php echo APP_ASSETS ?>js/lib/swiper-bundle.min.js?v=<?php echo APP_VER ?>"></script>
</body>

</html>