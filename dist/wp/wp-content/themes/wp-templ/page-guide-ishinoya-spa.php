<?php

/**
 * Template Name: Page GUIDE ISHINOYA SPA
 **/
$thisPageName = 'ishinoya-spa';
include(APP_PATH . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/ishinoya_spa.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="ishinoya-spa">
  <?php include(APP_PATH . 'libs/header02.php'); ?>
  <main id="wrap02">
    <section class="c-keyvisual aos-init" data-aos="fade-up" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/ishinoya/spa/mv.jpg" data-bgsp="<?php echo APP_ASSETS; ?>img/ishinoya/spa/mv_sp.jpg">
      <div class="inner1170">
        <h1 class="keyvisual-ttl">
          <span class="ttl-en">Spa</span>
          <span class="ttl-jp">温泉・砂湯</span>
        </h1>
        <div class="c-breadcrumb is-breadcrumb-white">
          <ul>
            <li><a href="<?php echo APP_URL; ?>">TOP</a></li>
            <li><a href="<?php echo APP_URL; ?>guide/">施設案内</a></li>
            <li><a href="<?php echo APP_URL; ?>guide/ishinoya/">ISHINOYA 別府 / 石のや 別府</a></li>
            <li>温泉・砂湯</li>
          </ul>
        </div>
      </div>
    </section>
    <section class="c-intro">
      <div class="inner1170">
        <ul class="intro-list">
          <li class="intro-item aos-init" data-aos="fade-up">
            <h2 class="intro-ttl sp">砂湯</h2>
            <figure class="intro-img c-img">
              <img class="pc" src="<?php echo createSVG(655, 535); ?>" data-src="<?php echo APP_ASSETS ?>img/ishinoya/spa/intro_img01.jpg" rel="js-lazy" width="655" height="535" alt="">
              <img class="sp" src="<?php echo createSVG(327, 267); ?>" data-src="<?php echo APP_ASSETS ?>img/ishinoya/spa/intro_img01_sp.jpg" rel="js-lazy" width="327" height="267" alt="">
            </figure>
            <div class="intro-info">
              <h2 class="intro-ttl pc">砂湯</h2>
              <h3 class="intro-ttls">温かい砂に包まれる極上の癒し体験</h3>
              <p class="intro-desc">温かな砂に包まれながら、別府湾の美しい眺めも楽しめる砂湯。日頃の疲れを解きほぐし、心も体も芯から温まる、極上のリラックス体験をお届けします。</p>
              <h4 class="intro-txt">効能</h4>
              <p class="intro-efficacy">リウマチ、関節症、腰痛、神経痛、五十肩、打撲、冷え性、胃腸機能の低下、高血圧、糖尿病、喘息、肺気腫、痔、睡眠障害、うつ状態、切り傷、皮膚乾燥症、疲労回復</p>
            </div>
          </li>
          <li class="intro-item is-reverse aos-init" data-aos="fade-up">
            <h2 class="intro-ttl sp">大浴場</h2>
            <figure class="intro-img c-img">
              <img class="pc" src="<?php echo createSVG(655, 535); ?>" data-src="<?php echo APP_ASSETS ?>img/ishinoya/spa/intro_img02.jpg" rel="js-lazy" width="655" height="535" alt="">
              <img class="sp" src="<?php echo createSVG(327, 267); ?>" data-src="<?php echo APP_ASSETS ?>img/ishinoya/spa/intro_img02_sp.jpg" rel="js-lazy" width="327" height="267" alt="">
            </figure>
            <div class="intro-info">
              <h2 class="intro-ttl pc">大浴場</h2>
              <h3 class="intro-ttls">心と体を癒す広々とした温泉空間</h3>
              <p class="intro-desc">竹を使用した地域の伝統を感じる空間で、ゆったりと温泉に浸かり、心と体の疲れを癒せます。</p>
              <h4 class="intro-txt">効能</h4>
              <p class="intro-efficacy">リウマチ、関節症、腰痛、神経痛、五十肩、打撲、冷え性、胃腸機能の低下、高血圧、糖尿病、喘息、肺気腫、痔、睡眠障害、うつ状態、切り傷、皮膚乾燥症、疲労回復</p>
            </div>
          </li>
        </ul>
        <ul class="intro-lst">
          <li class="intro-col aos-init" data-aos="fade-up">
            <figure class="intro-pic c-img">
              <img class="pc" src="<?php echo createSVG(450, 550); ?>" data-src="<?php echo APP_ASSETS ?>img/ishinoya/spa/intro_img03.jpg" rel="js-lazy" width="450" height="550" alt="">
              <img class="sp" src="<?php echo createSVG(327, 267); ?>" data-src="<?php echo APP_ASSETS ?>img/ishinoya/spa/intro_img03_sp.jpg" rel="js-lazy" width="327" height="267" alt="">
            </figure>
            <h2 class="intro-ttl">足湯</h2>
            <p class="intro-desc">無料で利用できる集いの場としての足湯を設けています。温泉街別府を気軽に体現できるリラックス空間となっています。</p>
          </li>
          <li class="intro-col aos-init" data-aos="fade-up">
            <figure class="intro-pic c-img">
              <img class="pc" src="<?php echo createSVG(450, 550); ?>" data-src="<?php echo APP_ASSETS ?>img/ishinoya/spa/intro_img04.jpg" rel="js-lazy" width="450" height="550" alt="">
              <img class="sp" src="<?php echo createSVG(327, 267); ?>" data-src="<?php echo APP_ASSETS ?>img/ishinoya/spa/intro_img04_sp.jpg" rel="js-lazy" width="327" height="267" alt="">
            </figure>
            <h2 class="intro-ttl">Bar</h2>
            <p class="intro-desc">風呂上がりのくつろぎ空間としてBarスペースも完備しております。ドリンク片手に、リラックスした時間をお楽しみいただけます。</p>
          </li>
        </ul>
        <div class="aos-init" data-aos="fade-up">
          <a class="intro-btn" href="<?php echo APP_URL; ?>guide/spa/"><span>Sand SPAについて詳しく見る</span></a>
        </div>
      </div>
    </section>
  </main>
  <?php include(APP_PATH . 'libs/footer02.php'); ?>
</body>

</html>