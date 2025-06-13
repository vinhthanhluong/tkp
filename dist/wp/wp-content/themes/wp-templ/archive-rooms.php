<?php
$thisPageName = 'rooms';
include(APP_PATH . 'libs/head.php');
?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/ishinoya_rooms.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="ishinoya-rooms">
  <?php include(APP_PATH . 'libs/header02.php'); ?>
  <main id="wrap02">
    <section class="c-keyvisual aos-init" data-aos="fade-up" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/ishinoya/rooms/mv.jpg" data-bgsp="<?php echo APP_ASSETS; ?>img/ishinoya/rooms/mv_sp.jpg">
      <div class="inner1170">
        <h1 class="keyvisual-ttl">
          <span class="ttl-en">Rooms</span>
          <span class="ttl-jp">お部屋</span>
        </h1>
        <div class="c-breadcrumb is-breadcrumb-white">
          <ul>
            <li><a href="<?php echo APP_URL; ?>">TOP</a></li>
            <li><a href="<?php echo APP_URL; ?>guide/">施設案内</a></li>
            <li><a href="<?php echo APP_URL; ?>guide/ishinoya/">ISHINOYA 別府 / 石のや 別府</a></li>
            <li>お部屋</li>
          </ul>
        </div>
      </div>
    </section>
    <section class="sec-rooms">
      <div class="inner">
        <ul class="anchor-list aos-init" data-aos="fade-up">
          <li>
            <a class="anchor-item" href="#anchor01">
              <span class="anchor-inner">
                <span class="anchor-txt">スタンダードキング</span>
                <ul class="c-txt-list">
                  <li class="icn icn01">2名</li>
                  <li class="icn icn02">26.96㎡</li>
                </ul>
              </span>
            </a>
          </li>
          <li>
            <a class="anchor-item" href="#anchor02">
              <span class="anchor-inner">
                <span class="anchor-txt">スーペリアトリプル</span>
                <ul class="c-txt-list">
                  <li class="icn icn01">3名</li>
                  <li class="icn icn02">48.84㎡</li>
                </ul>
              </span>
            </a>
          </li>
          <li>
            <a class="anchor-item" href="#anchor03">
              <span class="anchor-inner">
                <span class="anchor-txt">スーペリアツイン</span>
                <ul class="c-txt-list">
                  <li class="icn icn01">4名</li>
                  <li class="icn icn02">48.84㎡</li>
                </ul>
              </span>
            </a>
          </li>
          <li>
            <a class="anchor-item" href="#anchor04">
              <span class="anchor-inner">
                <span class="anchor-txt">スーペリアバンクフォース</span>
                <ul class="c-txt-list">
                  <li class="icn icn01">6名</li>
                  <li class="icn icn02">48.84㎡</li>
                </ul>
              </span>
            </a>
          </li>
          <li>
            <a class="anchor-item" href="#anchor05">
              <span class="anchor-inner">
                <span class="anchor-txt">プレミアムバンクフォース</span>
                <ul class="c-txt-list">
                  <li class="icn icn01">6名</li>
                  <li class="icn icn02">56.59㎡</li>
                  <li class="icn icn04">露天風呂付</li>
                </ul>
              </span>
            </a>
          </li>
          <li>
            <a class="anchor-item" href="#anchor06">
              <span class="anchor-inner">
                <span class="anchor-txt">プレミアムトリプル</span>
                <ul class="c-txt-list">
                  <li class="icn icn01">3名</li>
                  <li class="icn icn02">61.23㎡</li>
                  <li class="icn icn04">露天風呂付</li>
                </ul>
              </span>
            </a>
          </li>
          <li>
            <a class="anchor-item" href="#anchor07">
              <span class="anchor-inner">
                <span class="anchor-txt">プレミアムツイン</span>
                <ul class="c-txt-list">
                  <li class="icn icn01">3名</li>
                  <li class="icn icn02">61.23㎡</li>
                  <li class="icn icn04">露天風呂付</li>
                </ul>
              </span>
            </a>
          </li>
        </ul>
        <ul class="rooms-list">
          <li class="rooms-item aos-init" data-aos="fade-up" id="anchor01">
            <figure class="rooms-img c-img">
              <img src="<?php echo createSVG(590, 350); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/room_img01.jpg" rel="js-lazy" width="590" height="350" alt="">
            </figure>
            <div class="rooms-info">
              <h2 class="rooms-ttl">スタンダードキング</h2>
              <p class="rooms-desc">自然に囲まれた静かな空間で、アウトドア気分を満喫できます。シンプルで機能的なデザインが特徴です。</p>
              <ul class="c-txt-list">
                <li class="icn icn01">2名</li>
                <li class="icn icn02">26.96㎡</li>
                <li class="icn icn03">客室内温泉</li>
              </ul>
              <a class="c-btn04" href="<?php echo APP_URL; ?>page/guide/ishinoya/rooms/room_detail/"><span>詳しく見る</span></a>
            </div>
          </li>
          <li class="rooms-item aos-init" data-aos="fade-up" id="anchor02">
            <figure class="rooms-img c-img">
              <img src="<?php echo createSVG(590, 350); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/room_img02.jpg" rel="js-lazy" width="590" height="350" alt="">
            </figure>
            <div class="rooms-info">
              <h2 class="rooms-ttl">スーペリアトリプル</h2>
              <p class="rooms-desc">ご家族やご友人同士のグループ旅行にぴったりな広さと設備が整ったお部屋です。快適なベッドと温かみのあるインテリアで、ゆったりとくつろげます。</p>
              <ul class="c-txt-list">
                <li class="icn icn01">3名</li>
                <li class="icn icn02">48.84㎡</li>
                <li class="icn icn03">客室内温泉</li>
              </ul>
              <a class="c-btn04" href="<?php echo APP_URL; ?>page/guide/ishinoya/rooms/room_detail/"><span>詳しく見る</span></a>
            </div>
          </li>
          <li class="rooms-item aos-init" data-aos="fade-up" id="anchor03">
            <figure class="rooms-img c-img">
              <img src="<?php echo createSVG(590, 350); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/room_img03.jpg" rel="js-lazy" width="590" height="350" alt="">
            </figure>
            <div class="rooms-info">
              <h2 class="rooms-ttl">スーペリアツイン</h2>
              <p class="rooms-desc">自然に囲まれた静かな空間で、アウトドア気分を満喫できます。シンプルで機能的なデザインが特徴です。</p>
              <ul class="c-txt-list">
                <li class="icn icn01">4名</li>
                <li class="icn icn02">48.84㎡</li>
                <li class="icn icn03">客室内温泉</li>
              </ul>
              <a class="c-btn04" href="<?php echo APP_URL; ?>page/guide/ishinoya/rooms/room_detail/"><span>詳しく見る</span></a>
            </div>
          </li>
          <li class="rooms-item aos-init" data-aos="fade-up" id="anchor04">
            <figure class="rooms-img c-img">
              <img src="<?php echo createSVG(590, 350); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/room_img04.jpg" rel="js-lazy" width="590" height="350" alt="">
            </figure>
            <div class="rooms-info">
              <h2 class="rooms-ttl">スーペリアバンクフォース</h2>
              <p class="rooms-desc">ご家族やご友人同士のグループ旅行にぴったりな広さと設備が整ったお部屋です。快適なベッドと温かみのあるインテリアで、ゆったりとくつろげます。</p>
              <ul class="c-txt-list">
                <li class="icn icn01">6名</li>
                <li class="icn icn02">48.84㎡</li>
                <li class="icn icn03">客室内温泉</li>
              </ul>
              <a class="c-btn04" href="<?php echo APP_URL; ?>page/guide/ishinoya/rooms/room_detail/"><span>詳しく見る</span></a>
            </div>
          </li>
          <li class="rooms-item aos-init" data-aos="fade-up" id="anchor05">
            <figure class="rooms-img c-img">
              <img src="<?php echo createSVG(590, 350); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/room_img05.jpg" rel="js-lazy" width="590" height="350" alt="">
            </figure>
            <div class="rooms-info">
              <h2 class="rooms-ttl">プレミアムバンクフォース</h2>
              <p class="rooms-desc">自然に囲まれた静かな空間で、アウトドア気分を満喫できます。シンプルで機能的なデザインが特徴です。</p>
              <ul class="c-txt-list">
                <li class="icn icn01">6名</li>
                <li class="icn icn02">56.59㎡</li>
                <li class="icn icn04">露天風呂付</li>
              </ul>
              <a class="c-btn04" href="<?php echo APP_URL; ?>page/guide/ishinoya/rooms/room_detail/"><span>詳しく見る</span></a>
            </div>
          </li>
          <li class="rooms-item aos-init" data-aos="fade-up" id="anchor06">
            <figure class="rooms-img c-img">
              <img src="<?php echo createSVG(590, 350); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/room_img06.jpg" rel="js-lazy" width="590" height="350" alt="">
            </figure>
            <div class="rooms-info">
              <h2 class="rooms-ttl">プレミアムトリプル</h2>
              <p class="rooms-desc">ご家族やご友人同士のグループ旅行にぴったりな広さと設備が整ったお部屋です。快適なベッドと温かみのあるインテリアで、ゆったりとくつろげます。</p>
              <ul class="c-txt-list">
                <li class="icn icn01">3名</li>
                <li class="icn icn02">61.23㎡</li>
                <li class="icn icn04">露天風呂付</li>
              </ul>
              <a class="c-btn04" href="<?php echo APP_URL; ?>page/guide/ishinoya/rooms/room_detail/"><span>詳しく見る</span></a>
            </div>
          </li>
          <li class="rooms-item aos-init" data-aos="fade-up" id="anchor07">
            <figure class="rooms-img c-img">
              <img src="<?php echo createSVG(590, 350); ?>" data-src="<?php echo APP_ASSETS ?>img/cms/room_img07.jpg" rel="js-lazy" width="590" height="350" alt="">
            </figure>
            <div class="rooms-info">
              <h2 class="rooms-ttl">プレミアムツイン</h2>
              <p class="rooms-desc">自然に囲まれた静かな空間で、アウトドア気分を満喫できます。シンプルで機能的なデザインが特徴です。</p>
              <ul class="c-txt-list">
                <li class="icn icn01">3名</li>
                <li class="icn icn02">61.23㎡</li>
                <li class="icn icn04">露天風呂付</li>
              </ul>
              <a class="c-btn04" href="<?php echo APP_URL; ?>page/guide/ishinoya/rooms/room_detail/"><span>詳しく見る</span></a>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </main>
  <?php include(APP_PATH . 'libs/footer02.php'); ?>
</body>

</html>