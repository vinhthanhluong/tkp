<?php

/**
 * Template Name: Page GUIDE ISHINOYA ACCESS
 **/
$thisPageName = 'ishinoya-access';

$post_id = '1397';
$editor = get_field('editor', $post_id);

include(APP_PATH . 'libs/head02.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/ishinoya_access.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="ishinoya-access" class="ishinoya-access">
  <?php include(APP_PATH . 'libs/header02.php'); ?>
  <main id="wrap02">
    <section class="c-keyvisual" data-aos="fade-up" data-rel="js-lazy" data-bgpc="<?php echo APP_ASSETS ?>img/ishinoya/access/mv.jpg" data-bgsp="<?php echo APP_ASSETS ?>img/ishinoya/access/mv_sp.jpg">
      <div class="inner1170">
        <div class="keyvisual-ttl"><span class="ttl-en">Access</span>
          <h1 class="ttl-jp">アクセス</h1>
        </div>
        <div class="c-breadcrumb is-breadcrumb-white">
          <ul>
            <li><a href="<?php echo APP_URL ?>">TOP</a></li>
            <li><a href="<?php echo APP_URL ?>guide/">施設案内</a></li>
            <li><a href="<?php echo APP_URL ?>guide/ishinoya/">ISHINOYA 別府 / 石のや 別府</a></li>
            <li>アクセス</li>
          </ul>
        </div>
      </div>
    </section>
    <div class="sec-access">
      <div class="inner1170">
        <div class="block01" data-aos="fade-up">
          <div class="block01_map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6668.3771618562505!2d131.501211!3d33.313885!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3546a7a94de4fdd5%3A0x5e4099a53d0100aa!2sSHONIN%20PARK!5e0!3m2!1sja!2sjp!4v1765029122900!5m2!1sja!2sjp" width="600" height="490" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
          <div class="block01_info">
            <div class="info01">
              <p class="ttl01">ISHINOYA 別府 / 石のや 別府 </p>
              <p class="txt01">〒874-0023 大分県別府市上人ケ浜町795-1</p>
            </div>
            <p class="btn01"><a class="c-btn04" href="https://maps.app.goo.gl/Bd4oWGeGLXp5BEjN6" target="_blank"><span>Google map</span></a></p>
          </div>
        </div>
        <div class="block02" data-aos="fade-up">
          <div class="wrap">
            <div class="txt">
              <h3 class="ttl">チェックインのご案内</h3>
              <div class="desc">
                <p>チェックインはレセプションにて行います。<br>レセプションと宿泊コテージは離れた場所にございます。<br>ご到着の際は、まず上記住所のレセプションにお越しください。</p>
              </div>
            </div>
            <div class="img01">
              <!-- <img data-src="<?php echo APP_ASSETS; ?>img/ishinoya/access/access_img01.jpg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2NTUgNTM1Ij48L3N2Zz4=" width="350" height="240" data-rel="js-lazy" alt=""> -->
              <img data-src="<?php echo APP_ASSETS; ?>img/ishinoya/access/access_img01.jpg" src="<?php echo createSVG(350, 240); ?>" width="" height="" rel="js-lazy" alt="">
              <span>レセプション</span>
            </div>
          </div>
        </div>
        <div class="block03" data-aos="fade-up">
          <div class="c-ttl03">
            <!-- <p><span class="c-ttl03__icon"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3gIjAgMCAzNSAzNiI+PC9zdmc+" alt="" width="35" height="36" data-src="https://tkp-jp.ju.alive-web.space/wp/wp-content/themes/wp-templ/assets/img/ishinoya/access/ico_train.svg" data-rel="js-lazy" /></span></p> -->
            <p><span class="c-ttl03__icon"><img alt="" width="35" height="36" data-src="<?php echo APP_ASSETS; ?>img/ishinoya/access/ico_train.svg" data-rel="js-lazy" /></span></p>
            <h3 class="c-ttl03__ttl">公共交通機関でお越しの方</h3>
          </div>
          <div class="img01">
            <!-- <span class="pc"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAwIDM4MCI+PC9zdmc+" alt="公共交通機関でお越しの方用のアクセス" width="1000" height="380" data-src="https://tkp-jp.ju.alive-web.space/wp/wp-content/themes/wp-templ/assets/img/ishinoya/access/access_map01.png" data-rel="js-lazy" /></span> -->
            <img data-src="<?php echo APP_ASSETS; ?>img/ishinoya/access/access_map01.png" src="<?php echo createSVG(1000, 380); ?>" width="1000" height="380" data-rel="js-lazy" alt="">
          </div>
        </div>
        <div class="block04" data-aos="fade-up">
          <div class="c-ttl03">
            <!-- <p><span class="c-ttl03__icon"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzMiAzMiI+PC9zdmc+" alt="" width="32" height="32" data-src="https://tkp-jp.ju.alive-web.space/wp/wp-content/themes/wp-templ/assets/img/ishinoya/access/ico_delivery.svg" data-rel="js-lazy" /></span></p> -->
            <p><span class="c-ttl03__icon"><img alt="" width="32" height="32" data-src="<?php echo APP_ASSETS; ?>img/ishinoya/access/ico_delivery.svg" data-rel="js-lazy" /></span></p>
            <h3 class="c-ttl03__ttl">お車でお越しの方</h3>
          </div>
          <div class="img01">
            <!-- <span class="pc"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAwIDM4MCI+PC9zdmc+" alt="お車でお越しの方用のアクセス" width="1000" height="380" data-src="https://tkp-jp.ju.alive-web.space/wp/wp-content/themes/wp-templ/assets/img/info/map02.jpg" data-rel="js-lazy" /></span> -->
            <img data-src="<?php echo APP_ASSETS; ?>img/ishinoya/access/access_map02.png" src="<?php echo createSVG(1000, 380); ?>" width="1000" height="380" data-rel="js-lazy" alt="">
          </div>
        </div>
        <div class="block05" data-aos="fade-up">
          <div class="c-ttl03">
            <!-- <p><span class="c-ttl03__icon"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzMiAzMiI+PC9zdmc+" alt="" width="32" height="32" data-src="https://tkp-jp.ju.alive-web.space/wp/wp-content/themes/wp-templ/assets/img/info/ico_car.svg" data-rel="js-lazy" /></span></p> -->
            <p><span class="c-ttl03__icon"><img alt="" width="32" height="32" data-src="<?php echo APP_ASSETS; ?>img/ishinoya/access/ico_car.svg" data-rel="js-lazy" /></span></p>
            <h3 class="c-ttl03__ttl">駐車場のご案内</h3>
          </div>
          <div class="img01">
            <!-- <span class="pc"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAwIDM4MCI+PC9zdmc+" alt="駐車場マップ" width="1000" height="380" data-src="https://tkp-jp.ju.alive-web.space/wp/wp-content/themes/wp-templ/assets/img/info/map03.png" data-rel="js-lazy" /></span> -->
            <img data-src="<?php echo APP_ASSETS; ?>img/ishinoya/access/access_map03.jpg" src="<?php echo createSVG(1000, 592); ?>" width="1000" height="592" data-rel="js-lazy" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="sec-nearby">
      <div class="inner1170">
        <div class="c-ttl02" data-aos="fade-up">
          <h2 class="c-ttl02__jp">周辺観光</h2>
          <span class="c-ttl02__en">Nearby Attractions</span>
        </div>
        <p class="desc01" data-aos="fade-up">
          ISHINOYA 別府の周辺には、別府市を代表する観光スポットや魅力的な施設が多数！<br>ISHINOYA 別府と周辺観光を組み合わせて充実した日をお過ごしください。
        </p>

        <ul class="nearby-list">
          <li class="nearby-item" data-aos="fade-up" data-aos-delay="0">
            <div class="ctn01">
              <div class="img">
                <img src="<?php echo APP_ASSETS ?>img/ishinoya/access/nearby_img01.jpg" alt="" width=" 345" height="250" />
              </div>
              <div class="info">
                <p class="time">車で約10分</p>
                <h3 class="ttl">別府タワー</h3>
              </div>
            </div>
            <div class="ctn02">
              <p class="desc">国の「登録有形文化財」に指定されている泉都のランドマーク。2023年1月には大規模リニューアルオープン。別府市街、別府湾を一望できるパノラマ絶景をお楽しみください。</p>
            </div>
          </li>
          <li class="nearby-item" data-aos="fade-up" data-aos-delay="0">
            <div class="ctn01">
              <div class="img">
                <img src="<?php echo APP_ASSETS ?>img/ishinoya/access/nearby_img02.jpg" alt="" width=" 345" height="250" />
              </div>
              <div class="info">
                <p class="time">車で約12分</p>
                <h3 class="ttl">グローバルタワー</h3>
              </div>
            </div>
            <div class="ctn02">
              <p class="desc">大分県出身の世界的建築家、磯崎新氏の設計によるビーコンプラザのシンボルタワー。展望台から別府市内を一望することができます。</p>
            </div>
          </li>
          <li class="nearby-item" data-aos="fade-up" data-aos-delay="0">
            <div class="ctn01">
              <div class="img">
                <img src="<?php echo APP_ASSETS ?>img/ishinoya/access/nearby_img03.jpg" alt="" width=" 345" height="250" />
              </div>
              <div class="info">
                <p class="time">車で約15分</p>
                <h3 class="ttl">別府ラクテンチ</h3>
              </div>
            </div>
            <div class="ctn02">
              <p class="desc">昭和から続く長い歴史があり傾斜30度の急勾配を登るケーブルカーや日本唯一の二重式観覧車など老若男女問わずお楽しみ頂ける遊園地です。</p>
            </div>
          </li>
          <li class="nearby-item" data-aos="fade-up" data-aos-delay="0">
            <div class="ctn01">
              <div class="img">
                <img src="<?php echo APP_ASSETS ?>img/ishinoya/access/nearby_img04.jpg" alt="" width=" 345" height="250" />
              </div>
              <div class="info">
                <p class="time">車で約20分</p>
                <h3 class="ttl">地獄めぐり</h3>
              </div>
            </div>
            <div class="ctn02">
              <p class="desc">別府温泉の一帯に集結した7つの源泉巡り。地中深くから噴気や熱湯が噴出する様子がまさに地獄のよう。うち4つ、海地獄・血の池地獄・龍巻地獄・白池地獄は国の名勝に指定されています。</p>
            </div>
          </li>
          <li class="nearby-item" data-aos="fade-up" data-aos-delay="0">
            <div class="ctn01">
              <div class="img">
                <img src="<?php echo APP_ASSETS ?>img/ishinoya/access/nearby_img05.jpg" alt="" width=" 345" height="250" />
              </div>
              <div class="info">
                <p class="time">車で約20分</p>
                <h3 class="ttl">大分香りの博物館</h3>
              </div>
            </div>
            <div class="ctn02">
              <p class="desc">香りにまつわる約3,600点の展示品があり、紀元前の香油瓶、ロココやアール・ヌーヴォー時代の香水瓶、香炉、蒸留器など歴史的に貴重な品を鑑賞できます。世界に１つだけのオリジナル香水作り体験や、ハーブガーデンでは天然温泉足湯も楽しむことができます。</p>
            </div>
          </li>
          <li class="nearby-item" data-aos="fade-up" data-aos-delay="0">
            <div class="ctn01">
              <div class="img">
                <img src="<?php echo APP_ASSETS ?>img/ishinoya/access/nearby_img06.jpg" alt="" width=" 345" height="250" />
              </div>
              <div class="info">
                <p class="time">車で約25分</p>
                <h3 class="ttl">別府ロープウェイ</h3>
              </div>
            </div>
            <div class="ctn02">
              <p class="desc">九州最大級の101名乗り大型ゴンドラで、高低差約800m・線路長1,816mの急勾配を約10分で運行。ガラス張りの開放的なゴンドラから、別府の絶景の中を空中散歩している気分をお楽しみいただけます。</p>
            </div>
          </li>
          <li class="nearby-item" data-aos="fade-up" data-aos-delay="0">
            <div class="ctn01">
              <div class="img">
                <img src="<?php echo APP_ASSETS ?>img/ishinoya/access/nearby_img07.jpg" alt="" width=" 345" height="250" />
              </div>
              <div class="info">
                <p class="time">車で約30分</p>
                <h3 class="ttl">志高湖</h3>
              </div>
            </div>
            <div class="ctn02">
              <p class="desc">春は桜、夏は緑、秋は紅葉、冬は雪景色と季節の移ろいが湖面に映し出させる美しい景色。別府ICから車で約10分という立地にありながら、由布岳も望める自然豊かな場所です。</p>
            </div>
          </li>
          <li class="nearby-item" data-aos="fade-up" data-aos-delay="0">
            <div class="ctn01">
              <div class="img">
                <img src="<?php echo APP_ASSETS ?>img/ishinoya/access/nearby_img08.jpg" alt="" width=" 345" height="250" />
              </div>
              <div class="info">
                <p class="time">車で約35分</p>
                <h3 class="ttl">十文字原展望台</h3>
              </div>
            </div>
            <div class="ctn02">
              <p class="desc">別府湾を見下ろせる展望台。昼と夜で違った雰囲気を楽しむ事ができ、2004年には日本夜景遺産にも認定されております。</p>
            </div>
          </li>
          <li class="nearby-item" data-aos="fade-up" data-aos-delay="0">
            <div class="ctn01">
              <div class="img">
                <img src="<?php echo APP_ASSETS ?>img/ishinoya/access/nearby_img09.jpg" alt="" width=" 345" height="250" />
              </div>
              <div class="info">
                <p class="time">車で約40分</p>
                <h3 class="ttl">道の駅たのうらら</h3>
              </div>
            </div>
            <div class="ctn02">
              <p class="desc">2024年5月にオープンした新しい道の駅。過去に現地付近を走っていた路面電車を常設した歴史文化コーナーや地元食材を中心とした生鮮食品の販売もございます。</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </main>
  <?php include(APP_PATH . 'libs/footer02.php'); ?>
</body>

</html>