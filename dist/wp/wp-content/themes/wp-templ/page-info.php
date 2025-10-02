<?php
$thisPageName = 'info';

$post_id = '202';
$editor = get_field('editor', $post_id);
$faq01 = get_field('faq01', $post_id);
$faq02 = get_field('faq02', $post_id);
$faq03 = get_field('faq03', $post_id);
$faq04 = get_field('faq04', $post_id);

include(APP_PATH . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/info.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="info">
  <?php include(APP_PATH . 'libs/header.php'); ?>
  <main id="wrap">
    <?php echo $editor; ?>
    <div class="sec-info04" id="info04">
      <div class="inner1170">
        <div class="c-ttl02 is-white is-center aos-init" data-aos="fade-up">
          <h2 class="c-ttl02__jp">よくあるご質問</h2>
          <span class="c-ttl02__en">FAQs</span>
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
                  if (!empty($question)  && !empty($answer)) {
              ?>
                    <div class="qa">
                      <div class="qa__ques js-accordion">
                        <p><?php echo $question; ?></p>
                      </div>
                      <div class="qa__ans js-accordion-content">
                        <?php echo $answer; ?>
                      </div>
                    </div>
                <?php }
                }
              } else { ?>
                <p class="c-text-nonpost">表示する記事がありません。</p>
              <?php } ?>
            </div>

            <div class="tab-content" id="tab02">
              <?php
              if (!empty($faq02)) {
                foreach ($faq02 as $item) {
                  $question = !empty($item['question']) ? $item['question'] : '';
                  $answer = !empty($item['answer']) ? $item['answer'] : '';
                  if (!empty($question) && !empty($answer)) {
              ?>
                    <div class="qa">
                      <div class="qa__ques js-accordion">
                        <p><?php echo $question; ?></p>
                      </div>
                      <div class="qa__ans js-accordion-content">
                        <?php echo $answer; ?>
                      </div>
                    </div>
                <?php }
                }
              } else { ?>
                <p class="c-text-nonpost">表示する記事がありません。</p>
              <?php } ?>
            </div>
            <div class="tab-content" id="tab03">
              <?php
              if (!empty($faq03)) {
                foreach ($faq03 as $item) {
                  $question = !empty($item['question']) ? $item['question'] : '';
                  $answer = !empty($item['answer']) ? $item['answer'] : '';
                  if (!empty($question) && !empty($answer)) {
              ?>
                    <div class="qa">
                      <div class="qa__ques js-accordion">
                        <p><?php echo $question; ?></p>
                      </div>
                      <div class="qa__ans js-accordion-content">
                        <?php echo $answer; ?>
                      </div>
                    </div>
                <?php }
                }
              } else { ?>
                <p class="c-text-nonpost">表示する記事がありません。</p>
              <?php } ?>
            </div>
            <div class="tab-content" id="tab04">
              <?php
              if (!empty($faq04)) {
                foreach ($faq04 as $item) {
                  $question = !empty($item['question']) ? $item['question'] : '';
                  $answer = !empty($item['answer']) ? $item['answer'] : '';
                  if (!empty($question)  && !empty($answer)) {
              ?>
                    <div class="qa">
                      <div class="qa__ques js-accordion">
                        <p><?php echo $question; ?></p>
                      </div>
                      <div class="qa__ans js-accordion-content">
                        <?php echo $answer; ?>
                      </div>
                    </div>
                <?php }
                }
              } else { ?>
                <p class="c-text-nonpost">表示する記事がありません。</p>
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