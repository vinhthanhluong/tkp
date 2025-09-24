<?php
include_once(dirname(dirname(__DIR__)) . '/../../app_config.php');
include_once(dirname(dirname(__DIR__)) . '/../../wp/wp-load.php');

$thisPageName = 'ishinoya-contact';

$post_id_info = 202; //id page info
$faq03 = get_field('faq03_en', $post_id_info);

include(APP_PATH_EN . 'libs/head02.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/ishinoya_contact.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="ishinoya-contact" class="ishinoya-contact en">
  <?php include(APP_PATH_EN . 'libs/header02.php'); ?>
  <main id="wrap02">
    <section class="c-keyvisual aos-init" data-aos="fade-up" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/ishinoya/contact/mv.jpg" data-bgsp="<?php echo APP_ASSETS; ?>img/ishinoya/contact/mv_sp.jpg">
      <div class="inner1170">
        <div class="keyvisual-ttl">
          <span class="ttl-en">Contact</span>
        </div>
        <div class="c-breadcrumb is-breadcrumb-white">
          <ul>
            <li><a href="<?php echo APP_URL_EN; ?>">TOP</a></li>
            <li><a href="<?php echo APP_URL_EN; ?>guide/">Facilities</a></li>
            <li><a href="<?php echo APP_URL_EN; ?>guide/ishinoya/">ISHINOYA Beppu</a></li>
            <li>Contact</li>
          </ul>
        </div>
      </div>
    </section>
    <div class="sec-contact-head aos-init" data-aos="fade-up">
      <div class="inner1170">
        <p class="c-contact-desc">If the following <a class="contact-link" href="#faq">FAQs</a> do not answer your question, please contact us using the form below.</p>
        <ul class="btn-list">
          <li><a href="<?php echo APP_URL_EN; ?>guide/ishinoya/contact/form/">
              <h2><span class="icn icn01">Individual <br class="pc">Customers</span></h2>
            </a></li>
          <li><a href="https://reg34.smp.ne.jp/regist/is?SMPFORM=qc-sinjs-2237e2e2d56727399f186f7c0c9bcea4&f000607785=SHONIN%20PARK" target="_blank" rel="noopener">
              <h2><span class="icn icn02">Corporate <br class="pc">Customers</span></h2>
            </a></li>
        </ul>
      </div>
    </div>
    <section class="sec-contact-faq" id="faq" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/ishinoya/contact/pattern_bg.jpg" data-bgsp="<?php echo APP_ASSETS; ?>img/ishinoya/contact/pattern_bg_sp.jpg">
      <div class="inner1170">
        <div class="c-ttl04 aos-init" data-aos="fade-up">
          <span class="c-ttl04__en">FAQs</span>
        </div>
        <p class="c-contact-desc aos-init" data-aos="fade-up">Questions that are frequently asked about the use of ISHINOYA Beppu are compiled here.<br>If you cannot find the answer to your question here, please use the inquiry <a class="contact-link" href="<?php echo APP_URL_EN; ?>guide/ishinoya/contact/form/">form</a>.</p>
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
          <p class="c-text-nonpost">There are no articles to display.</p>
        <?php } ?>
      </div>
    </section>
  </main>
  <?php include(APP_PATH_EN . 'libs/footer02.php'); ?>
</body>

</html>