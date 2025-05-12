<?php
$thisPageName = 'shop';
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
        <h1 class="mv-ttl aos-init" data-aos="fade-up">
          <span class="mv-ttl-jp">ショップ</span>
          <span class="mv-ttl-en">shop</span>
        </h1>
      </div>
      <div class="mv-img c-img aos-init" data-aos="fade-up">
        <img class="pc" src="<?php echo createSVG(1340, 350); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/shop/mv_img.jpg" rel="js-lazy" width="1340" height="350" alt="">
        <img class="sp" src="<?php echo createSVG(344, 220); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/shop/mv_img_sp.jpg" rel="js-lazy" width="344" height="220" alt="">
      </div>
    </div>
    <div class="c-about-block">
      <div class="about-bg" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/about_bg.jpg" data-bgsp="<?php echo APP_ASSETS; ?>img/guide/shop/about_bg_sp.png"></div>
      <div class="about-left">
        <figure class="about-img c-img pc aos-init" data-aos="fade-up">
          <img src="<?php echo createSVG(546, 514); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/shop/about_img01.jpg" rel="js-lazy" width="546" height="514" alt="">
        </figure>
      </div>
      <div class="about-right aos-init" data-aos="fade-up">
        <div class="about-content cloud-decor">
          <p class="about-ttl">別府の魅力を一堂に<br>ここにしかない<br class="sp">ショッピング体験</p>
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
          <img src="<?php echo createSVG(317, 198); ?>" data-src="<?php echo APP_ASSETS ?>img/guide/shop/map_shop.svg" rel="js-lazy" width="1170" height="577" alt="">
          <p class="map-tag is-tag01">店舗名店舗名</p>
          <p class="map-tag is-tag02">店舗名店舗名<br>店舗名店舗名店舗名</p>
          <p class="map-tag is-tag03">店舗名店舗</p>
          <p class="map-tag is-tag04">店舗名店舗名店舗名<br>店舗名店舗名店舗名店舗名</p>
          <p class="map-tag is-tag05">店舗名</p>
          <p class="map-tag is-tag06">店舗名店舗名<br>店舗名店舗名店舗名店舗名</p>
          <p class="map-tag is-tag07">店舗名</p>
        </div>
        <h2 class="c-ttl02 aos-init" data-aos="fade-up">
          <span class="c-ttl02__jp">エリア案内</span>
          <span class="c-ttl02__en">Shop Area</span>
        </h2>
        <ul class="shop-list">
          <li class="aos-init" data-aos="fade-up">
            <div class="shop-item">
              <div class="shop-group">
                <figure class="shop-img c-img">
                  <img src="<?php echo createSVG(345, 250); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/shop_img01.jpg" rel="js-lazy" width="345" height="250" alt="">
                </figure>
                <div class="shop-info">
                  <p class="shop-ttl js-match-height-ttl">ショップ名</p>
                  <ul class="shop-sns">
                    <li><a class="icn icn-url" href="#" target="_blank" rel="noopener nofollow"></a></li>
                    <li><a class="icn icn-instagram" href="#" target="_blank" rel="noopener nofollow"></a></li>
                  </ul>
                </div>
              </div>
              <p class="shop-desc js-match-height-desc">別府の伝統工芸や新鮮な地元食材を取り揃えたお店。竹細工や温泉関連商品など、ここでしか手に入らないアイテムを多数ご用意しています。</p>
              <dl class="shop-time">
                <dt>営業時間</dt>
                <dd><span class="txt">10:00 - 22:00</span>年中無休</dd>
              </dl>
            </div>
          </li>
          <li class="aos-init" data-aos="fade-up">
            <div class="shop-item">
              <div class="shop-group">
                <figure class="shop-img c-img">
                  <img src="<?php echo createSVG(345, 250); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/shop_img02.jpg" rel="js-lazy" width="345" height="250" alt="">
                </figure>
                <div class="shop-info">
                  <p class="shop-ttl js-match-height-ttl">ショップ名</p>
                  <ul class="shop-sns">
                    <li><a class="icn icn-url" href="#" target="_blank" rel="noopener nofollow"></a></li>
                    <li><a class="icn icn-instagram" href="#" target="_blank" rel="noopener nofollow"></a></li>
                  </ul>
                </div>
              </div>
              <p class="shop-desc js-match-height-desc">別府の伝統工芸や新鮮な地元食材を取り揃えたお店。竹細工や温泉関連商品など、ここでしか手に入らないアイテムを多数ご用意しています。</p>
              <dl class="shop-time">
                <dt>営業時間</dt>
                <dd><span class="txt">10:00 - 22:00</span>年中無休</dd>
              </dl>
            </div>
          </li>
          <li class="aos-init" data-aos="fade-up">
            <div class="shop-item">
              <div class="shop-group">
                <figure class="shop-img c-img">
                  <img src="<?php echo createSVG(345, 250); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/shop_img03.jpg" rel="js-lazy" width="345" height="250" alt="">
                </figure>
                <div class="shop-info">
                  <p class="shop-ttl js-match-height-ttl">ショップ名</p>
                  <ul class="shop-sns">
                    <li><a class="icn icn-url" href="#" target="_blank" rel="noopener nofollow"></a></li>
                    <li><a class="icn icn-instagram" href="#" target="_blank" rel="noopener nofollow"></a></li>
                  </ul>
                </div>
              </div>
              <p class="shop-desc js-match-height-desc">大分の名物料理や地元の特産品を販売するグルメストア。新鮮な海産物や地元産の食材を使った加工品など、美味しさと品質にこだわった商品が並びます。</p>
              <dl class="shop-time">
                <dt>営業時間</dt>
                <dd><span class="txt">10:00 - 22:00</span>年中無休</dd>
              </dl>
            </div>
          </li>
          <li class="aos-init" data-aos="fade-up">
            <div class="shop-item">
              <div class="shop-group">
                <figure class="shop-img c-img">
                  <img src="<?php echo createSVG(345, 250); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/shop_img02.jpg" rel="js-lazy" width="345" height="250" alt="">
                </figure>
                <div class="shop-info">
                  <p class="shop-ttl js-match-height-ttl">ショップ名</p>
                  <ul class="shop-sns">
                    <li><a class="icn icn-url" href="#" target="_blank" rel="noopener nofollow"></a></li>
                    <li><a class="icn icn-instagram" href="#" target="_blank" rel="noopener nofollow"></a></li>
                  </ul>
                </div>
              </div>
              <p class="shop-desc js-match-height-desc">別府の伝統工芸や新鮮な地元食材を取り揃えたお店。竹細工や温泉関連商品など、ここでしか手に入らないアイテムを多数ご用意しています。</p>
              <dl class="shop-time">
                <dt>営業時間</dt>
                <dd><span class="txt">10:00 - 22:00</span>年中無休</dd>
              </dl>
            </div>
          </li>
          <li class="aos-init" data-aos="fade-up">
            <div class="shop-item">
              <div class="shop-group">
                <figure class="shop-img c-img">
                  <img src="<?php echo createSVG(345, 250); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/shop_img03.jpg" rel="js-lazy" width="345" height="250" alt="">
                </figure>
                <div class="shop-info">
                  <p class="shop-ttl js-match-height-ttl">ショップ名</p>
                  <ul class="shop-sns">
                    <li><a class="icn icn-url" href="#" target="_blank" rel="noopener nofollow"></a></li>
                    <li><a class="icn icn-instagram" href="#" target="_blank" rel="noopener nofollow"></a></li>
                  </ul>
                </div>
              </div>
              <p class="shop-desc js-match-height-desc">大分の名物料理や地元の特産品を販売するグルメストア。新鮮な海産物や地元産の食材を使った加工品など、美味しさと品質にこだわった商品が並びます。</p>
              <dl class="shop-time">
                <dt>営業時間</dt>
                <dd><span class="txt">10:00 - 22:00</span>年中無休</dd>
              </dl>
            </div>
          </li>
          <li class="aos-init" data-aos="fade-up">
            <div class="shop-item">
              <div class="shop-group">
                <figure class="shop-img c-img">
                  <img src="<?php echo createSVG(345, 250); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/shop_img01.jpg" rel="js-lazy" width="345" height="250" alt="">
                </figure>
                <div class="shop-info">
                  <p class="shop-ttl js-match-height-ttl">ショップ名</p>
                  <ul class="shop-sns">
                    <li><a class="icn icn-url" href="#" target="_blank" rel="noopener nofollow"></a></li>
                    <li><a class="icn icn-instagram" href="#" target="_blank" rel="noopener nofollow"></a></li>
                  </ul>
                </div>
              </div>
              <p class="shop-desc js-match-height-desc">別府の伝統工芸や新鮮な地元食材を取り揃えたお店。竹細工や温泉関連商品など、ここでしか手に入らないアイテムを多数ご用意しています。</p>
              <dl class="shop-time">
                <dt>営業時間</dt>
                <dd><span class="txt">10:00 - 22:00</span>年中無休</dd>
              </dl>
            </div>
          </li>
          <li class="aos-init" data-aos="fade-up">
            <div class="shop-item">
              <div class="shop-group">
                <figure class="shop-img c-img">
                  <img src="<?php echo createSVG(345, 250); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/shop_img01.jpg" rel="js-lazy" width="345" height="250" alt="">
                </figure>
                <div class="shop-info">
                  <p class="shop-ttl js-match-height-ttl">ショップ名</p>
                  <ul class="shop-sns">
                    <li><a class="icn icn-url" href="#" target="_blank" rel="noopener nofollow"></a></li>
                    <li><a class="icn icn-instagram" href="#" target="_blank" rel="noopener nofollow"></a></li>
                  </ul>
                </div>
              </div>
              <p class="shop-desc js-match-height-desc">別府の伝統工芸や新鮮な地元食材を取り揃えたお店。竹細工や温泉関連商品など、ここでしか手に入らないアイテムを多数ご用意しています。</p>
              <dl class="shop-time">
                <dt>営業時間</dt>
                <dd><span class="txt">10:00 - 22:00</span>年中無休</dd>
              </dl>
            </div>
          </li>
          <li class="aos-init" data-aos="fade-up">
            <div class="shop-item">
              <div class="shop-group">
                <figure class="shop-img c-img">
                  <img src="<?php echo createSVG(345, 250); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/shop_img02.jpg" rel="js-lazy" width="345" height="250" alt="">
                </figure>
                <div class="shop-info">
                  <p class="shop-ttl js-match-height-ttl">ショップ名</p>
                  <ul class="shop-sns">
                    <li><a class="icn icn-url" href="#" target="_blank" rel="noopener nofollow"></a></li>
                    <li><a class="icn icn-instagram" href="#" target="_blank" rel="noopener nofollow"></a></li>
                  </ul>
                </div>
              </div>
              <p class="shop-desc js-match-height-desc">別府の伝統工芸や新鮮な地元食材を取り揃えたお店。竹細工や温泉関連商品など、ここでしか手に入らないアイテムを多数ご用意しています。</p>
              <dl class="shop-time">
                <dt>営業時間</dt>
                <dd><span class="txt">10:00 - 22:00</span>年中無休</dd>
              </dl>
            </div>
          </li>
          <li class="aos-init" data-aos="fade-up">
            <div class="shop-item">
              <div class="shop-group">
                <figure class="shop-img c-img">
                  <img src="<?php echo createSVG(345, 250); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/shop_img03.jpg" rel="js-lazy" width="345" height="250" alt="">
                </figure>
                <div class="shop-info">
                  <p class="shop-ttl js-match-height-ttl">ショップ名</p>
                  <ul class="shop-sns">
                    <li><a class="icn icn-url" href="#" target="_blank" rel="noopener nofollow"></a></li>
                    <li><a class="icn icn-instagram" href="#" target="_blank" rel="noopener nofollow"></a></li>
                  </ul>
                </div>
              </div>
              <p class="shop-desc js-match-height-desc">大分の名物料理や地元の特産品を販売するグルメストア。新鮮な海産物や地元産の食材を使った加工品など、美味しさと品質にこだわった商品が並びます。</p>
              <dl class="shop-time">
                <dt>営業時間</dt>
                <dd><span class="txt">10:00 - 22:00</span>年中無休</dd>
              </dl>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <section class="c-news-block" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/news_bg.jpg" data-bgsp="<?php echo APP_ASSETS; ?>img/common/news_bg_sp.jpg">
      <div class="inner1170">
        <h2 class="c-ttl02 is-white aos-init" data-aos="fade-up">
          <span class="c-ttl02__jp">ニュース</span>
          <span class="c-ttl02__en">News</span>
        </h2>
        <ul class="news-list">
          <li class="aos-init" data-aos="fade-up">
            <a class="news-item" href="#">
              <figure class="news-img c-img">
                <img src="<?php echo createSVG(165, 120); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/news_img05.jpg" rel="js-lazy" width="165" height="120" alt="">
              </figure>
              <div class="news-info">
                <div class="news-head">
                  <p class="news-cate">ショップ</p>
                  <p class="news-time">2025.03.20</p>
                </div>
                <p class="news-ttl">7月22日～「むらごとマルシェ」がスタート！</p>
              </div>
            </a>
          </li>
          <li class="aos-init" data-aos="fade-up">
            <a class="news-item" href="#">
              <figure class="news-img c-img">
                <img src="<?php echo createSVG(165, 120); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/news_img06.jpg" rel="js-lazy" width="165" height="120" alt="">
              </figure>
              <div class="news-info">
                <div class="news-head">
                  <p class="news-cate">ショップ</p>
                  <p class="news-time">2025.03.18</p>
                </div>
                <p class="news-ttl">7月22日～「むらごとマルシェ」がスタート！</p>
              </div>
            </a>
          </li>
          <li class="aos-init" data-aos="fade-up">
            <a class="news-item" href="#">
              <figure class="news-img c-img">
                <img src="<?php echo createSVG(165, 120); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/news_img07.jpg" rel="js-lazy" width="165" height="120" alt="">
              </figure>
              <div class="news-info">
                <div class="news-head">
                  <p class="news-cate">ショップ</p>
                  <p class="news-time">2025.03.30</p>
                </div>
                <p class="news-ttl">7月22日～「むらごとマルシェ」がスタート！</p>
              </div>
            </a>
          </li>
          <li class="aos-init" data-aos="fade-up">
            <a class="news-item" href="#">
              <figure class="news-img c-img">
                <img src="<?php echo createSVG(165, 120); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/news_img08.jpg" rel="js-lazy" width="165" height="120" alt="">
              </figure>
              <div class="news-info">
                <div class="news-head">
                  <p class="news-cate">ショップ</p>
                  <p class="news-time">2025.03.18</p>
                </div>
                <p class="news-ttl">7月22日～「むらごとマルシェ」がスタート！</p>
              </div>
            </a>
          </li>
        </ul>
        <a href="<?php echo APP_URL; ?>news/" class="c-btn01 is-center">
          <i class="arr01"></i>
          <span>もっと見る</span>
          <i class="arr02"></i>
        </a>
      </div>
    </section>
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