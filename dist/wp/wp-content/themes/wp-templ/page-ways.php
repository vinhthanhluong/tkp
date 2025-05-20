<?php
$thisPageName = 'ways';
include(APP_PATH . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/ways.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="ways">
  <?php include(APP_PATH . 'libs/header.php'); ?>
  <main id="wrap">
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
          <li data-tab="tab01">
            <h2>日帰り利用</h2>
          </li>
          <li class="is-active" data-tab="tab02">
            <h2>宿泊利用</h2>
          </li>
        </ul>
      </div>
    </div>
    <div class="sec-ways tab-content" id="tab01">
      <div class="ways-sidebar">
        <div class="ways-sticky">
          <ul class="time-list">
            <li>
              <p class="time-txt">Day 1</p>
              <ul class="time-sub">
                <li><a href="#anchor-time01">10:00</a></li>
                <li><a href="#anchor-time02">12:00</a></li>
                <li><a href="#anchor-time03">13:00</a></li>
                <li><a href="#anchor-time04">15:00</a></li>
                <li><a href="#anchor-time05">17:00</a></li>
              </ul>
            </li>
            <li>
              <p class="time-txt">Day 2</p>
              <ul class="time-sub">
                <li><a href="#anchor-time06">10:00</a></li>
                <li><a href="#anchor-time07">12:00</a></li>
                <li><a href="#anchor-time08">13:00</a></li>
                <li><a href="#anchor-time09">15:00</a></li>
                <li><a href="#anchor-time10">18:00</a></li>
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
                <p class="ways-time">10:00</p>
                <h3 class="ways-ttl">到着</h3>
                <p class="ways-desc">まずは公園内の豊かな自然を楽しむ散策コースへ。</p>
                <a class="c-link" href="#">リンクリンク</a>
              </div>
            </li>
            <li class="ways-item" id="anchor-time02">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img02.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">12:00</p>
                <h3 class="ways-ttl">レストランで食事</h3>
                <p class="ways-desc">テラスから見える別府湾の美しい景色と共に、この土地で育った食材を使用したお料理を味わっていただきます。</p>
                <a class="c-link" href="#">リンクリンク</a>
              </div>
            </li>
            <li class="ways-item" id="anchor-time03">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img03.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">13:00</p>
                <h3 class="ways-ttl">ショップエリアでお買い物</h3>
                <p class="ways-desc">別府の魅力が感じられるショップエリアでショッピングやカフェを楽しめます。</p>
                <a class="c-link" href="#">リンクリンク</a>
              </div>
            </li>
            <li class="ways-item" id="anchor-time04">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img04.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">15:00</p>
                <h3 class="ways-ttl">スパエリアで砂湯体験</h3>
                <p class="ways-desc">歩き疲れた後はスパエリアでゆっくりと過ごします。温かな砂に包まれて、体の芯から温まる砂湯や、お肌に優しい温泉をお楽しみください。</p>
                <a class="c-link" href="#">リンクリンク</a>
              </div>
            </li>
            <li class="ways-item" id="anchor-time05">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img05.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">17:00</p>
                <h3 class="ways-ttl">バーでほっと一息</h3>
                <p class="ways-desc">湯上りにはスパエリアのロビーでドリンクを楽しみながら、ゆったりとくつろげます。</p>
                <a class="c-link" href="#">リンクリンク</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="ways-container">
        <div class="ways-inner">
          <ul class="ways-list">
            <li class="ways-item" id="anchor-time06">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img01.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">10:00</p>
                <h3 class="ways-ttl">到着</h3>
                <p class="ways-desc">まずは公園内の豊かな自然を楽しむ散策コースへ。</p>
                <a class="c-link" href="#">リンクリンク</a>
              </div>
            </li>
            <li class="ways-item" id="anchor-time07">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img02.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">12:00</p>
                <h3 class="ways-ttl">レストランで食事</h3>
                <p class="ways-desc">テラスから見える別府湾の美しい景色と共に、この土地で育った食材を使用したお料理を味わっていただきます。</p>
                <a class="c-link" href="#">リンクリンク</a>
              </div>
            </li>
            <li class="ways-item" id="anchor-time08">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img03.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">13:00</p>
                <h3 class="ways-ttl">ショップエリアでお買い物</h3>
                <p class="ways-desc">別府の魅力が感じられるショップエリアでショッピングやカフェを楽しめます。</p>
                <a class="c-link" href="#">リンクリンク</a>
              </div>
            </li>
            <li class="ways-item" id="anchor-time09">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img04.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">15:00</p>
                <h3 class="ways-ttl">スパエリアで砂湯体験</h3>
                <p class="ways-desc">歩き疲れた後はスパエリアでゆっくりと過ごします。温かな砂に包まれて、体の芯から温まる砂湯や、お肌に優しい温泉をお楽しみください。</p>
                <a class="c-link" href="#">リンクリンク</a>
              </div>
            </li>
            <li class="ways-item" id="anchor-time10">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img05.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">18:00</p>
                <h3 class="ways-ttl">バーでほっと一息</h3>
                <p class="ways-desc">湯上りにはスパエリアのロビーでドリンクを楽しみながら、ゆったりとくつろげます。</p>
                <a class="c-link" href="#">リンクリンク</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="sec-ways tab-content is-current" id="tab02">
      <div class="ways-sidebar">
        <div class="ways-sticky">
          <ul class="time-list">
            <li>
              <p class="time-txt">Day 1</p>
              <ul class="time-sub">
                <li><a href="#time01">10:00</a></li>
                <li><a href="#time02">12:00</a></li>
                <li><a href="#time03">13:00</a></li>
                <li><a href="#time04">15:00</a></li>
                <li><a href="#time05">17:00</a></li>
              </ul>
            </li>
            <li>
              <p class="time-txt">Day 2</p>
              <ul class="time-sub">
                <li><a href="#time06">10:00</a></li>
                <li><a href="#time07">12:00</a></li>
                <li><a href="#time08">13:00</a></li>
                <li><a href="#time09">15:00</a></li>
                <li><a href="#time10">17:00</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="ways-container c-bg-wave02">
        <div class="ways-inner">
          <ul class="ways-list">
            <li class="ways-item" id="time01">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img01.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">10:00</p>
                <h3 class="ways-ttl">到着</h3>
                <p class="ways-desc">まずは公園内の豊かな自然を楽しむ散策コースへ。</p>
                <a class="c-link" href="#">リンクリンク</a>
              </div>
            </li>
            <li class="ways-item" id="time02">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img02.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">12:00</p>
                <h3 class="ways-ttl">レストランで食事</h3>
                <p class="ways-desc">テラスから見える別府湾の美しい景色と共に、この土地で育った食材を使用したお料理を味わっていただきます。</p>
                <a class="c-link" href="#">リンクリンク</a>
              </div>
            </li>
            <li class="ways-item" id="time03">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img03.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">13:00</p>
                <h3 class="ways-ttl">ショップエリアでお買い物</h3>
                <p class="ways-desc">別府の魅力が感じられるショップエリアでショッピングやカフェを楽しめます。</p>
                <a class="c-link" href="#">リンクリンク</a>
              </div>
            </li>
            <li class="ways-item" id="time04">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img04.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">15:00</p>
                <h3 class="ways-ttl">スパエリアで砂湯体験</h3>
                <p class="ways-desc">歩き疲れた後はスパエリアでゆっくりと過ごします。温かな砂に包まれて、体の芯から温まる砂湯や、お肌に優しい温泉をお楽しみください。</p>
                <a class="c-link" href="#">リンクリンク</a>
              </div>
            </li>
            <li class="ways-item" id="time05">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img05.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">17:00</p>
                <h3 class="ways-ttl">バーでほっと一息</h3>
                <p class="ways-desc">湯上りにはスパエリアのロビーでドリンクを楽しみながら、ゆったりとくつろげます。</p>
                <a class="c-link" href="#">リンクリンク</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="ways-container">
        <div class="ways-inner">
          <ul class="ways-list">
            <li class="ways-item" id="time06">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img01.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">10:00</p>
                <h3 class="ways-ttl">到着</h3>
                <p class="ways-desc">まずは公園内の豊かな自然を楽しむ散策コースへ。</p>
                <a class="c-link" href="#">リンクリンク</a>
              </div>
            </li>
            <li class="ways-item" id="time07">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img02.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">12:00</p>
                <h3 class="ways-ttl">レストランで食事</h3>
                <p class="ways-desc">テラスから見える別府湾の美しい景色と共に、この土地で育った食材を使用したお料理を味わっていただきます。</p>
                <a class="c-link" href="#">リンクリンク</a>
              </div>
            </li>
            <li class="ways-item" id="time08">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img03.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">13:00</p>
                <h3 class="ways-ttl">ショップエリアでお買い物</h3>
                <p class="ways-desc">別府の魅力が感じられるショップエリアでショッピングやカフェを楽しめます。</p>
                <a class="c-link" href="#">リンクリンク</a>
              </div>
            </li>
            <li class="ways-item" id="time09">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img04.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">15:00</p>
                <h3 class="ways-ttl">スパエリアで砂湯体験</h3>
                <p class="ways-desc">歩き疲れた後はスパエリアでゆっくりと過ごします。温かな砂に包まれて、体の芯から温まる砂湯や、お肌に優しい温泉をお楽しみください。</p>
                <a class="c-link" href="#">リンクリンク</a>
              </div>
            </li>
            <li class="ways-item" id="time10">
              <figure class="ways-img c-img"><img src="<?php echo createSVG(620, 400); ?>" data-src="<?php echo APP_ASSETS ?>img/ways/ways_img05.jpg" rel="js-lazy" width="620" height="400" alt=""></figure>
              <div class="ways-info">
                <p class="ways-time">17:00</p>
                <h3 class="ways-ttl">バーでほっと一息</h3>
                <p class="ways-desc">湯上りにはスパエリアのロビーでドリンクを楽しみながら、ゆったりとくつろげます。</p>
                <a class="c-link" href="#">リンクリンク</a>
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