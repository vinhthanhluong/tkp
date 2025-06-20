<?php
$thisPageName = 'ways';
include(APP_PATH . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/ways.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="ways">
  <?php include(APP_PATH . 'libs/header.php'); ?>
  <main id="wrap">
    <div class="c-breadcrumb aos-init" data-aos="fade-up">
      <ul>
        <li><a href="<?php echo APP_URL; ?>">TOP</a></li>
        <li>楽しみ方</li>
      </ul>
    </div>
    <div class="c-mainvisual">
      <div class="mv-inner">
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
        <div class="mv-ttl aos-init" data-aos="fade-up">
          <h1 class="mv-ttl-jp">楽しみ方</h1>
          <span class="mv-ttl-en">How to Enjoy</span>
        </div>
      </div>
    </div>
    <div class="ways-tabs">
      <div class="tab-inner">
        <ul class="tab-list js-tabs">
          <li class="is-active" data-tab="tab01">
            <h2>日帰り利用</h2>
          </li>
          <li data-tab="tab02">
            <h2>宿泊利用</h2>
          </li>
        </ul>
      </div>
    </div>
    <div class="sec-ways tab-content is-current" id="tab01">
      <div class="ways-sidebar">
        <div class="ways-sticky">
          <ul class="time-list">
            <li>
              <p class="time-txt">Day 1</p>
              <ul class="time-sub">
                <li><a href="#anchor-time01">10:30</a></li>
                <li><a href="#anchor-time02">11:00</a></li>
                <li><a href="#anchor-time03">12:00</a></li>
                <li><a href="#anchor-time04">14:00</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="ways-container c-bg-wave02">
        <div class="ways-inner">
          <ul class="ways-list">
            <li class="ways-item" id="anchor-time01">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img01.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">10:30</p>
                <h3 class="ways-ttl">到着</h3>
                <p class="ways-desc">SHONIN PARK内の散策へ。</p>
              </div>
            </li>
            <li class="ways-item" id="anchor-time02">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img02.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">11:00</p>
                <h3 class="ways-ttl">ショップエリアで買い物</h3>
                <p class="ways-desc">気になるお菓子屋や雑貨をチェック。</p>
                <a class="c-link" href="<?php echo APP_URL ?>guide/shop/">ショップ</a>
              </div>
            </li>
            <li class="ways-item" id="anchor-time03">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img03.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">12:00</p>
                <h3 class="ways-ttl">Grill Takkaで昼食</h3>
                <p class="ways-desc">10種類以上のメニューからお選びいただける自慢のランチ。<br>レストラン横に広がる海を眺めながら、シェフが腕をかけたお料理をご堪能ください。</p>
                <a class="c-link" href="<?php echo APP_URL ?>guide/restaurant/">レストラン「Grill Takka」</a>
              </div>
            </li>
            <li class="ways-item" id="anchor-time04">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img04.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">14:00</p>
                <h3 class="ways-ttl">スパエリアで砂湯体験</h3>
                <p class="ways-desc">事前に予約しておいた砂湯を「Sand SPA」で体験。<br>目の前に広がる海を見ながら温かな砂に包まれて、体の芯から温まる砂湯や、お肌に優しい温泉をお楽しみください。</p>
                <a class="c-link" href="<?php echo APP_URL ?>guide/spa/">別府海浜砂湯「Sand SPA」</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="sec-ways tab-content" id="tab02">
      <div class="ways-sidebar">
        <div class="ways-sticky">
          <ul class="time-list">
            <li>
              <p class="time-txt">Day 1</p>
              <ul class="time-sub">
                <li><a href="#time01">13:00</a></li>
                <li><a href="#time02">14:00</a></li>
                <li><a href="#time03">15:00</a></li>
                <li><a href="#time04">17:00</a></li>
                <li><a href="#time05">19:00</a></li>
              </ul>
            </li>
            <li>
              <p class="time-txt">Day 2</p>
              <ul class="time-sub">
                <li><a href="#time06">6:00</a></li>
                <li><a href="#time07">8:00</a></li>
                <li><a href="#time08">10:00</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="ways-container c-bg-wave02">
        <div class="ways-inner">
          <ul class="ways-list">
            <li class="ways-item" id="time01">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img05.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">13:00</p>
                <h3 class="ways-ttl">到着</h3>
                <p class="ways-desc">まずはSHONIN PARK内の散策へ。</p>
              </div>
            </li>
            <li class="ways-item" id="time02">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img06.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">14:00</p>
                <h3 class="ways-ttl">スパエリアで砂湯体験</h3>
                <p class="ways-desc">名物でもある砂湯を「Sand SPA」で体験。目の前に広がる海を見ながら温かな砂に包まれて、体の芯から温まる砂湯や、お肌に優しい温泉をお楽しみください。</p>
                <a class="c-link" href="<?php echo APP_URL ?>guide/spa/">別府海浜砂湯「Sand SPA」</a>
              </div>
            </li>
            <li class="ways-item" id="time03">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img07.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">15:00</p>
                <h3 class="ways-ttl">バーでひと息</h3>
                <p class="ways-desc">スパエリア内にあるバーで、湯上りに一杯。<br>まったりと時間が流れるような、贅沢なひとときを。</p>
                <a class="c-link" href="<?php echo APP_URL ?>guide/spa/">別府海浜砂湯「Sand SPA」</a>
              </div>
            </li>
            <li class="ways-item" id="time04">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img08.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">17:00</p>
                <h3 class="ways-ttl">チェックイン</h3>
                <p class="ways-desc">体が温まった後は、お部屋にチェックイン。<br>全室オーシャンビューが望めるお部屋で、ご夕食時間までゆっくりとお寛ぎください。</p>
                <a class="c-link" href="<?php echo APP_URL ?>guide/ishinoya/">宿泊コテージ「ISHINOYA 別府」</a>
              </div>
            </li>
            <li class="ways-item" id="time05">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img09.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">19:00</p>
                <h3 class="ways-ttl">夕食</h3>
                <p class="ways-desc">大分の食材を使ったハワイアングリルを堪能。<br>見た目にもこだわったお食事で、心もお腹も満たされるはず。</p>
                <a class="c-link" href="<?php echo APP_URL ?>guide/ishinoya/cuisine/">お食事</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="ways-container">
        <div class="ways-inner">
          <ul class="ways-list">
            <li class="ways-item" id="time06">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img10.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">6:00</p>
                <h3 class="ways-ttl">朝日を眺める贅沢な朝</h3>
                <p class="ways-desc">昇る朝日を眺める、特別な時間を体験。<br>過ごしたかった非日常が、今ここに。</p>
              </div>
            </li>
            <li class="ways-item" id="time07">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img11.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">8:00</p>
                <h3 class="ways-ttl">朝食</h3>
                <p class="ways-desc">夕食に続き、大分の食材を使った栄養バランスの整ったご朝食をご用意。</p>
                <a class="c-link" href="<?php echo APP_URL ?>guide/ishinoya/cuisine/">お食事</a>
              </div>
            </li>
            <li class="ways-item" id="time08">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img12.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">10:00</p>
                <h3 class="ways-ttl">チェックアウト</h3>
                <p class="ways-desc">お部屋に戻って荷物をまとめたら、チェックアウトへ。<br>気になる観光地を巡って、時間いっぱい大分を満喫。</p>
                <a class="c-link" href="<?php echo APP_URL ?>info/#info03">周辺観光</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </main>
  <?php include(APP_PATH . 'libs/footer.php'); ?>
  <script>
    $('.js-tabs li').click(function() {
      var t = $(this).attr('data-tab');
      $('.js-tabs li').removeClass('is-active');
      $('.tab-content').removeClass('is-current');
      $(this).addClass('is-active');
      $('#' + t).addClass('is-current');
    });
  </script>
</body>

</html>