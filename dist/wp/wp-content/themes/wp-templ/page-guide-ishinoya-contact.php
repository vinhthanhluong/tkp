<?php

/**
 * Template Name: Page GUIDE ISHINOYA CONTACT
 **/
$thisPageName = 'ishinoya-contact';

$post_id_info = 202; //id page info
$faq03 = get_field('faq03', $post_id_info);

include(APP_PATH . 'libs/head02.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/ishinoya_contact.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="ishinoya-contact" class="ishinoya-contact">
  <?php include(APP_PATH . 'libs/header02.php'); ?>
  <main id="wrap02">
    <section class="c-keyvisual aos-init" data-aos="fade-up" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/ishinoya/contact/mv.jpg" data-bgsp="<?php echo APP_ASSETS; ?>img/ishinoya/contact/mv_sp.jpg">
      <div class="inner1170">
        <div class="keyvisual-ttl">
          <span class="ttl-en">Contact</span>
          <h1 class="ttl-jp">お問い合わせ</h1>
        </div>
        <div class="c-breadcrumb is-breadcrumb-white">
          <ul>
            <li><a href="<?php echo APP_URL; ?>">TOP</a></li>
            <li><a href="<?php echo APP_URL; ?>guide/">施設案内</a></li>
            <li><a href="<?php echo APP_URL; ?>guide/ishinoya/">ISHINOYA 別府 / 石のや 別府</a></li>
            <li>お問い合わせ</li>
          </ul>
        </div>
      </div>
    </section>
    <div class="sec-contact-head aos-init" data-aos="fade-up">
      <div class="inner1170">
        <p class="c-contact-desc">下記の「<a class="contact-link" href="#faq">よくあるご質問</a>」で解決しない場合は、下記フォームよりお問い合わせください。</p>
        <ul class="btn-list">
          <li><a href="<?php echo APP_URL; ?>guide/ishinoya/contact/form/">
              <h2><span class="icn icn01">個人のお客様</span></h2>
            </a></li>
          <li><a href="https://reg34.smp.ne.jp/regist/is?SMPFORM=qc-sinjs-2237e2e2d56727399f186f7c0c9bcea4&f000607785=SHONIN%20PARK" target="_blank" rel="noopener">
              <h2><span class="icn icn02">法人のお客様</span></h2>
            </a></li>
        </ul>
      </div>
    </div>
    <section class="sec-contact-faq" id="faq" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/ishinoya/contact/pattern_bg.jpg" data-bgsp="<?php echo APP_ASSETS; ?>img/ishinoya/contact/pattern_bg_sp.jpg">
      <div class="inner1170">
        <div class="c-ttl04 aos-init" data-aos="fade-up">
          <h2 class="c-ttl04__jp">よくあるご質問</h2>
          <span class="c-ttl04__en">FAQs</span>
        </div>
        <p class="c-contact-desc aos-init" data-aos="fade-up">ISHINOYA 別府の利⽤についてよくあるご質問をまとめています。<br>こちらで確認できない内容は<a class="contact-link" href="<?php echo APP_URL; ?>guide/ishinoya/contact/form/">お問い合わせフォーム</a>よりご質問ください。</p>
        <?php if (!empty($faq03)) {  ?>
          <ul class="faq-list">
            <?php
            foreach ($faq03 as $item) {
              $question = !empty($item['question']) ? $item['question'] : '';
              $answer = !empty($item['answer']) ? $item['answer'] : '';
              if (!empty($question) && !empty($answer)) {
            ?>
                <li class="faq-item aos-init" data-aos="fade-up">
                  <h3 class="faq-question js-accordion"><span><?php echo $question; ?></span></h3>
                  <div class="faq-accordion js-accordion-content">
                    <div class="faq-answer">
                      <div><?php echo $answer; ?></div>
                    </div>
                  </div>
                </li>
            <?php }
            } ?>
          </ul>
        <?php } else { ?>
          <p class="c-text-nonpost">表示する記事がありません。</p>
        <?php } ?>
      </div>
    </section>
  </main>
  <?php include(APP_PATH . 'libs/footer02.php'); ?>
</body>

</html>