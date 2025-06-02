<?php
$thisPageName = 'info';

$post_id = get_the_ID();
$faq01 = get_field('faq01', $post_id);
$faq02 = get_field('faq02', $post_id);
$faq03 = get_field('faq03', $post_id);
$faq04 = get_field('faq04', $post_id);

include(APP_PATH . 'libs/head.php'); ?>
</head>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/info.min.css?v=<?php echo APP_VER ?>">

<body id="info">
  <?php include(APP_PATH . 'libs/header.php'); ?>
  <main id="wrap">
    <div class="c-breadcrumb aos-init" data-aos="fade-up">
      <ul>
        <li><a href="<?php echo APP_URL; ?>">TOP</a></li>
        <li>施設情報</li>
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
          <h1 class="mv-ttl-jp">施設情報</h1>
          <span class="mv-ttl-en">Information</span>
        </div>
      </div>
    </div>
    <div class="sec-anchor">
      <div class="inner1170">
        <ul class="lst-anchor aos-init" data-aos="fade-up">
          <li><a href="#info01" class="c-btn01 btn-anchor">
              <i class="arr01"></i>
              <h2>
                <em class="icon icon__off"><img src="<?php echo createSVG(24, 22); ?>" data-src="<?php echo APP_ASSETS; ?>img/info/anchor01_icn.svg" rel="js-lazy" width="24" height="22" alt=""></em>
                <em class="icon icon__on"><img src="<?php echo createSVG(24, 22); ?>" data-src="<?php echo APP_ASSETS; ?>img/info/anchor01_icn_hv.svg" rel="js-lazy" width="24" height="22" alt=""></em>
                営業時間
              </h2>
              <i class="arr02"></i>
            </a></li>
          <li><a href="#info02" class="c-btn01 btn-anchor">
              <i class="arr01"></i>
              <h2>
                <em class="icon icon__off"><img src="<?php echo createSVG(24, 22); ?>" data-src="<?php echo APP_ASSETS; ?>img/info/anchor02_icn.svg" rel="js-lazy" width="24" height="22" alt=""></em>
                <em class="icon icon__on"><img src="<?php echo createSVG(24, 22); ?>" data-src="<?php echo APP_ASSETS; ?>img/info/anchor02_icn_hv.svg" rel="js-lazy" width="24" height="22" alt=""></em>
                アクセス
              </h2>
              <i class="arr02"></i>
            </a></li>
          <li><a href="#info03" class="c-btn01 btn-anchor">
              <i class="arr01"></i>
              <h2>
                <em class="icon icon__off"><img src="<?php echo createSVG(24, 22); ?>" data-src="<?php echo APP_ASSETS; ?>img/info/anchor03_icn.svg" rel="js-lazy" width="24" height="22" alt=""></em>
                <em class="icon icon__on"><img src="<?php echo createSVG(24, 22); ?>" data-src="<?php echo APP_ASSETS; ?>img/info/anchor03_icn_hv.svg" rel="js-lazy" width="24" height="22" alt=""></em>
                周辺観光
              </h2>
              <i class="arr02"></i>
            </a></li>
          <li><a href="#info04" class="c-btn01 btn-anchor">
              <i class="arr01"></i>
              <h2>
                <em class="icon icon__off"><img src="<?php echo createSVG(24, 22); ?>" data-src="<?php echo APP_ASSETS; ?>img/info/anchor04_icn.svg" rel="js-lazy" width="24" height="22" alt=""></em>
                <em class="icon icon__on"><img src="<?php echo createSVG(24, 22); ?>" data-src="<?php echo APP_ASSETS; ?>img/info/anchor04_icn_hv.svg" rel="js-lazy" width="24" height="22" alt=""></em>
                よくあるご質問
              </h2>
              <i class="arr02"></i>
            </a></li>
        </ul>
      </div>
    </div>
    <div class="sec-info01 c-bg-wave02 wave-yellow" id="info01">
      <p class="dercor01"><img src="<?php echo createSVG(180, 55); ?>" data-src="<?php echo APP_ASSETS; ?>img/common/dot_decor.png" rel="js-lazy" width="180" height="55" alt=""></p>
      <p class="dercor02"><img src="<?php echo createSVG(180, 55); ?>" data-src="<?php echo APP_ASSETS; ?>img/common/dot_decor.png" rel="js-lazy" width="180" height="55" alt=""></p>
      <p class="dercor03 pc aos-init anim-scale01" data-aos=""><img src="<?php echo createSVG(180, 55); ?>" data-src="<?php echo APP_ASSETS; ?>img/info/decor01.png" rel="js-lazy" width="180" height="55" alt="砂湯に入る人イラスト"></p>
      <div class="img-wave-yellow">
        <div class="wave-top">
          <p class="c-mask" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/ico_wave_yellow.png" data-bgsp="<?php echo APP_ASSETS; ?>img/common/ico_wave_yellow.png"></p>
        </div>
        <div class="wave-bottom">
          <p class="c-mask" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/ico_wave_yellow.png" data-bgsp="<?php echo APP_ASSETS; ?>img/common/ico_wave_yellow.png"></p>
        </div>
      </div>
      <div class="inner1170">
        <div class="block">
          <div class="block__ttl aos-init" data-aos="fade-up">
            <div class="c-ttl02">
              <h2 class="c-ttl02__jp">営業時間</h2>
              <span class="c-ttl02__en">Opening Hours</span>
            </div>
          </div>
          <div class="block__info aos-init" data-aos="fade-up">
            <div class="c-table01">
              <dl>
                <dt>
                  <h3>SHONIN PARK園内</h3>
                </dt>
                <dd>7:00～22:00</dd>
              </dl>
              <dl>
                <dt>
                  <h3>フロント</h3>
                </dt>
                <dd>7:00～22:00</dd>
              </dl>
              <dl>
                <dt>
                  <h3>Sand SPA<br class="pc">(砂湯・温泉)</h3>
                </dt>
                <dd>8:00～22:00（最終受付 21:00）</dd>
              </dl>
              <dl>
                <dt>
                  <h3>ショップ</h3>
                </dt>
                <dd>10:00～20:00</dd>
              </dl>
              <dl>
                <dt>
                  <h3>宿泊</h3>
                </dt>
                <dd>チェックイン 15:00　チェックアウト 10:00</dd>
              </dl>
              <dl>
                <dt>
                  <h3>レストラン</h3>
                </dt>
                <dd>7:00~22:00</dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sec-info02" id="info02">
      <div class="inner1170">
        <div class="c-ttl02 is-center aos-init" data-aos="fade-up">
          <h2 class="c-ttl02__jp">アクセス</h2>
          <span class="c-ttl02__en">Access</span>
        </div>
        <div class="block01 aos-init" data-aos="fade-up">
          <div class="block01__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5296.497497479467!2d131.5012107!3d33.3138848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3546a7a94de4fdd5%3A0x5e4099a53d0100aa!2sSHONIN%20PARK!5e1!3m2!1sen!2s!4v1748589203279!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="block01_info">
            <div class="info01">
              <p class="ttl01">SHONIN PARK</p>
              <p class="txt01">〒874-0023 大分県別府市上人ケ浜町795-1</p>
            </div>
            <p class="btn01">
              <a href="https://maps.app.goo.gl/Bd4oWGeGLXp5BEjN6" class="c-btn01" target="_blank" rel="noopener nofollow">
                <i class="arr01"></i>
                <span>Google map</span>
                <i class="arr02"></i>
              </a>
            </p>
          </div>
        </div>
        <div class="block02 aos-init" data-aos="fade-up">
          <div class="c-ttl03">
            <span class="c-ttl03__icon"><img src="<?php echo createSVG(35, 36); ?>" data-src="<?php echo APP_ASSETS; ?>img/info/ico_train.svg" rel="js-lazy" width="35" height="36" alt=""></span>
            <h3 class="c-ttl03__ttl">公共交通機関でお越しの方</h3>
          </div>
          <div class="img01">
            <span class="pc"><img src="<?php echo createSVG(1000, 380); ?>" data-src="<?php echo APP_ASSETS; ?>img/info/map01.jpg" rel="js-lazy" width="1000" height="380" alt="公共交通機関でお越しの方用のアクセス"></span>
            <span class="sp"><img src="<?php echo createSVG(327, 124); ?>" data-src="<?php echo APP_ASSETS; ?>img/info/map01_sp.jpg" rel="js-lazy" width="327" height="124" alt="公共交通機関でお越しの方用のアクセス"></span>
          </div>
        </div>
        <div class="block03 aos-init" data-aos="fade-up">
          <div class="c-ttl03">
            <span class="c-ttl03__icon"><img src="<?php echo createSVG(32, 32); ?>" data-src="<?php echo APP_ASSETS; ?>img/info/ico_delivery.svg" rel="js-lazy" width="32" height="32" alt=""></span>
            <h3 class="c-ttl03__ttl">お車でお越しの方</h3>
          </div>
          <div class="img01">
            <span class="pc"><img src="<?php echo createSVG(1000, 380); ?>" data-src="<?php echo APP_ASSETS; ?>img/info/map02.jpg" rel="js-lazy" width="1000" height="380" alt=""></span>
            <span class="sp"><img src="<?php echo createSVG(327, 124); ?>" data-src="<?php echo APP_ASSETS; ?>img/info/map02_sp.jpg" rel="js-lazy" width="327" height="124" alt=""></span>
          </div>
        </div>
        <div class="block04 aos-init" data-aos="fade-up">
          <div class="c-ttl03">
            <span class="c-ttl03__icon">
              <img class="pc" src="<?php echo createSVG(32, 32); ?>" data-src="<?php echo APP_ASSETS; ?>img/info/ico_car.svg" rel="js-lazy" width="32" height="32" alt="">
              <img class="sp" src="<?php echo createSVG(24, 24); ?>" data-src="<?php echo APP_ASSETS; ?>img/info/ico_car_sp.svg" rel="js-lazy" width="24" height="24" alt="">
            </span>
            <h3 class="c-ttl03__ttl">駐車場のご案内</h3>
          </div>
          <div class="img01">
            <span class="pc"><img src="<?php echo createSVG(1000, 380); ?>" data-src="<?php echo APP_ASSETS; ?>img/info/map03.png" rel="js-lazy" width="1000" height="380" alt="駐車場マップ"></span>
            <span class="sp"><img src="<?php echo createSVG(327, 124); ?>" data-src="<?php echo APP_ASSETS; ?>img/info/map03_sp.jpg" rel="js-lazy" width="327" height="124" alt="駐車場マップ"></span>
          </div>
        </div>
      </div>
    </div>
    <div class="sec-info03 c-bg-wave02 wave-gray" id="info03">
      <p class="dercor01 pc aos-init anim-scale01" data-aos=""><img src="<?php echo createSVG(211, 224); ?>" data-src="<?php echo APP_ASSETS; ?>img/info/decor02.png" rel="js-lazy" width="211" height="224" alt="ピクニックをする人イラスト"></p>
      <div class="inner1170">
        <div class="c-ttl02 aos-init" data-aos="fade-up">
          <h2 class="c-ttl02__jp">周辺観光</h2>
          <span class="c-ttl02__en">Sightseeing</span>
        </div>
        <p class="desc01 aos-init" data-aos="fade-up">SHONIN PARKの周辺には、別府市を代表する観光スポットや魅力的な施設が多数！<br>SHONIN PARKと周辺観光を組み合わせて充実した日をお過ごしください。</p>
        <ul class="c-lstpost01">
          <li class="c-lstpost01__item aos-init" data-aos="fade-up" data-aos-delay="0">
            <div class="lstpost01-ctn01">
              <div class="lstpost01-img">
                <img src="<?php echo createSVG(345, 250) ?>" data-src="<?php echo APP_ASSETS; ?>img/info/img01.jpg" rel="js-lazy" width="345" height="250" alt="別府タワー">
              </div>
              <div class="lstpost01-info">
                <p class="access">車で約10分</p>
                <h3 class="ttl">別府タワー</h3>
              </div>
            </div>
            <div class="lstpost01-ctn02">
              <p class="desc">国の「登録有形文化財」に指定されている泉都のランドマーク。2023年1月には大規模リニューアルオープン。別府市街、別府湾を一望できるパノラマ絶景をお楽しみください。</p>
            </div>
          </li>
          <li class="c-lstpost01__item aos-init" data-aos="fade-up" data-aos-delay="0">
            <div class="lstpost01-ctn01">
              <div class="lstpost01-img">
                <img src="<?php echo createSVG(345, 250) ?>" data-src="<?php echo APP_ASSETS; ?>img/info/img02.jpg" rel="js-lazy" width="345" height="250" alt="グローバルタワー">
              </div>
              <div class="lstpost01-info">
                <p class="access">車で約12分</p>
                <h3 class="ttl">グローバルタワー</h3>
              </div>
            </div>
            <div class="lstpost01-ctn02">
              <p class="desc">大分県出身の世界的建築家、磯崎新氏の設計によるビーコンプラザのシンボルタワー。展望台から別府市内を一望することができます。</p>
            </div>
          </li>
          <li class="c-lstpost01__item aos-init" data-aos="fade-up" data-aos-delay="0">
            <div class="lstpost01-ctn01">
              <div class="lstpost01-img">
                <img src="<?php echo createSVG(345, 250) ?>" data-src="<?php echo APP_ASSETS; ?>img/info/img03.jpg" rel="js-lazy" width="345" height="250" alt="別府ラクテンチ">
              </div>
              <div class="lstpost01-info">
                <p class="access">車で約15分</p>
                <h3 class="ttl">別府ラクテンチ</h3>
              </div>
            </div>
            <div class="lstpost01-ctn02">
              <p class="desc">昭和から続く長い歴史があり傾斜30度の急勾配を登るケーブルカーや日本唯一の二重式観覧車など老若男女問わずお楽しみ頂ける遊園地です。</p>
            </div>
          </li>
          <li class="c-lstpost01__item aos-init" data-aos="fade-up" data-aos-delay="0">
            <div class="lstpost01-ctn01">
              <div class="lstpost01-img">
                <img src="<?php echo createSVG(345, 250) ?>" data-src="<?php echo APP_ASSETS; ?>img/info/img04.jpg" rel="js-lazy" width="345" height="250" alt="地獄めぐり">
              </div>
              <div class="lstpost01-info">
                <p class="access">車で約20分</p>
                <h3 class="ttl">地獄めぐり</h3>
              </div>
            </div>
            <div class="lstpost01-ctn02">
              <p class="desc">別府温泉の一帯に集結した7つの源泉巡り。地中深くから噴気や熱湯が噴出する様子がまさに地獄のよう。うち4つ、海地獄・血の池地獄・龍巻地獄・白池地獄は国の名勝に指定されています。</p>
            </div>
          </li>
          <li class="c-lstpost01__item aos-init" data-aos="fade-up" data-aos-delay="0">
            <div class="lstpost01-ctn01">
              <div class="lstpost01-img">
                <img src="<?php echo createSVG(345, 250) ?>" data-src="<?php echo APP_ASSETS; ?>img/info/img05.jpg" rel="js-lazy" width="345" height="250" alt="大分香りの博物館">
              </div>
              <div class="lstpost01-info">
                <p class="access">車で約20分</p>
                <h3 class="ttl">大分香りの博物館</h3>
              </div>
            </div>
            <div class="lstpost01-ctn02">
              <p class="desc">香りにまつわる約3,600点の展示品があり、紀元前の香油瓶、ロココやアール・ヌーヴォー時代の香水瓶、香炉、蒸留器など歴史的に貴重な品を鑑賞できます。世界に１つだけのオリジナル香水作り体験や、ハーブガーデンでは天然温泉足湯も楽しむことができます。</p>
            </div>
          </li>
          <li class="c-lstpost01__item aos-init" data-aos="fade-up" data-aos-delay="0">
            <div class="lstpost01-ctn01">
              <div class="lstpost01-img">
                <img src="<?php echo createSVG(345, 250) ?>" data-src="<?php echo APP_ASSETS; ?>img/info/img06.jpg" rel="js-lazy" width="345" height="250" alt="別府ロープウェイ">
              </div>
              <div class="lstpost01-info">
                <p class="access">車で約25分</p>
                <h3 class="ttl">別府ロープウェイ</h3>
              </div>
            </div>
            <div class="lstpost01-ctn02">
              <p class="desc">九州最大級の101名乗り大型ゴンドラで、高低差約800m・線路長1,816mの急勾配を約10分で運行。ガラス張りの開放的なゴンドラから、別府の絶景の中を空中散歩している気分をお楽しみいただけます。</p>
            </div>
          </li>
          <li class="c-lstpost01__item aos-init" data-aos="fade-up" data-aos-delay="0">
            <div class="lstpost01-ctn01">
              <div class="lstpost01-img">
                <img src="<?php echo createSVG(345, 250) ?>" data-src="<?php echo APP_ASSETS; ?>img/info/img07.jpg" rel="js-lazy" width="345" height="250" alt="志高湖">
              </div>
              <div class="lstpost01-info">
                <p class="access">車で約30分</p>
                <h3 class="ttl">志高湖</h3>
              </div>
            </div>
            <div class="lstpost01-ctn02">
              <p class="desc">春は桜、夏は緑、秋は紅葉、冬は雪景色と季節の移ろいが湖面に映し出させる美しい景色。別府ICから車で約10分という立地にありながら、由布岳も望める自然豊かな場所です。</p>
            </div>
          </li>
          <li class="c-lstpost01__item aos-init" data-aos="fade-up" data-aos-delay="0">
            <div class="lstpost01-ctn01">
              <div class="lstpost01-img">
                <img src="<?php echo createSVG(345, 250) ?>" data-src="<?php echo APP_ASSETS; ?>img/info/img08.jpg" rel="js-lazy" width="345" height="250" alt="十文字原展望台">
              </div>
              <div class="lstpost01-info">
                <p class="access">車で約35分</p>
                <h3 class="ttl">十文字原展望台</h3>
              </div>
            </div>
            <div class="lstpost01-ctn02">
              <p class="desc">別府湾を見下ろせる展望台。昼と夜で違った雰囲気を楽しむ事ができ、2004年には日本夜景遺産にも認定されております。</p>
            </div>
          </li>
          <li class="c-lstpost01__item aos-init" data-aos="fade-up" data-aos-delay="0">
            <div class="lstpost01-ctn01">
              <div class="lstpost01-img">
                <img src="<?php echo createSVG(345, 250) ?>" data-src="<?php echo APP_ASSETS; ?>img/info/img09.jpg" rel="js-lazy" width="345" height="250" alt="道の駅たのうらら">
              </div>
              <div class="lstpost01-info">
                <p class="access">車で約40分</p>
                <h3 class="ttl">道の駅たのうらら</h3>
              </div>
            </div>
            <div class="lstpost01-ctn02">
              <p class="desc">2024年5月にオープンした新しい道の駅。過去に現地付近を走っていた路面電車を常設した歴史文化コーナーや地元食材を中心とした生鮮食品の販売もございます。</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="sec-info04" id="info04">
      <div class="inner1170">
        <div class="c-ttl02 is-white is-center aos-init" data-aos="fade-up">
          <h2 class="c-ttl02__jp">よくあるご質問</h2>
          <span class="c-ttl02__en">Q&A</span>
        </div>
        <p class="desc01 aos-init" data-aos="fade-up">SHONIN PARKの利⽤に<br class="sp">ついてよくあるご質問をまとめています。<br>こちらで確認できない内容は<br class="sp"><a href="<?php echo APP_URL; ?>contact/" class="">お問い合わせフォーム</a>よりご質問ください。</p>
        <div class="mod-tabs aos-init" data-aos="fade-up">
          <div class="nav-tabs">
            <ul>
              <li>
                <h3 class="tab is-act" data-tab="tab01"><span class="txt">施設に<br class="sp">ついて</span></h3>
              </li>
              <li>
                <h3 class="tab" data-tab="tab02"><span class="txt">日帰り利用<br class="sp">について</span></h3>
              </li>
              <li>
                <h3 class="tab" data-tab="tab03"><span class="txt">宿泊に<br class="sp">ついて</span></h3>
              </li>
              <li>
                <h3 class="tab" data-tab="tab04"><span class="txt">その他</span></h3>
              </li>
            </ul>
          </div>
          <div class="tab-container">
            <div class="tab-content is-show" id="tab01">
              <?php
              if (!empty($faq01)) {
                foreach ($faq01 as $item) {
                  $question = !empty($item['question']) ? $item['question'] : '';
                  $answer = !empty($item['answer']) ? $item['answer'] : '';
              ?>
                  <div class="qa">
                    <?php if (!empty($question)) { ?>
                      <div class="qa__ques js-accordion">
                        <p><?php echo $question; ?></p>
                      </div>
                    <?php } ?>
                    <?php if (!empty($answer)) { ?>
                      <div class="qa__ans js-accordion-content">
                        <?php echo $answer; ?>
                      </div>
                    <?php } ?>
                  </div>
                <?php } ?>
              <?php } else { ?>
                <p class="comming">表示する記事がありません。</p>
              <?php } ?>
            </div>

            <div class="tab-content" id="tab02">
              <?php
              if (!empty($faq02)) {
                foreach ($faq02 as $item) {
                  $question = !empty($item['question']) ? $item['question'] : '';
                  $answer = !empty($item['answer']) ? $item['answer'] : '';
              ?>
                  <div class="qa">
                    <?php if (!empty($question)) { ?>
                      <div class="qa__ques js-accordion">
                        <p><?php echo $question; ?></p>
                      </div>
                    <?php } ?>
                    <?php if (!empty($answer)) { ?>
                      <div class="qa__ans js-accordion-content">
                        <?php echo $answer; ?>
                      </div>
                    <?php } ?>
                  </div>
                <?php } ?>
              <?php } else { ?>
                <p class="comming">表示する記事がありません。</p>
              <?php } ?>
            </div>
            <div class="tab-content" id="tab03">
              <?php
              if (!empty($faq03)) {
                foreach ($faq03 as $item) {
                  $question = !empty($item['question']) ? $item['question'] : '';
                  $answer = !empty($item['answer']) ? $item['answer'] : '';
              ?>
                  <div class="qa">
                    <?php if (!empty($question)) { ?>
                      <div class="qa__ques js-accordion">
                        <p><?php echo $question; ?></p>
                      </div>
                    <?php } ?>
                    <?php if (!empty($answer)) { ?>
                      <div class="qa__ans js-accordion-content">
                        <?php echo $answer; ?>
                      </div>
                    <?php } ?>
                  </div>
                <?php } ?>
              <?php } else { ?>
                <p class="comming">表示する記事がありません。</p>
              <?php } ?>
            </div>
            <div class="tab-content" id="tab04">
              <?php
              if (!empty($faq04)) {
                foreach ($faq04 as $item) {
                  $question = !empty($item['question']) ? $item['question'] : '';
                  $answer = !empty($item['answer']) ? $item['answer'] : '';
              ?>
                  <div class="qa">
                    <?php if (!empty($question)) { ?>
                      <div class="qa__ques js-accordion">
                        <p><?php echo $question; ?></p>
                      </div>
                    <?php } ?>
                    <?php if (!empty($answer)) { ?>
                      <div class="qa__ans js-accordion-content">
                        <?php echo $answer; ?>
                      </div>
                    <?php } ?>
                  </div>
                <?php } ?>
              <?php } else { ?>
                <p class="comming">表示する記事がありません。</p>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
</body>

</html>