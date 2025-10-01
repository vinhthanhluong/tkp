<?php
include_once(dirname(__DIR__) . '/../app_config.php');
include_once(dirname(__DIR__) . '/../wp/wp-load.php');

$thisPageName = 'info';

$post_id = '202';
$editor = get_field('editor_ko', $post_id);
$faq01 = get_field('faq01_ko', $post_id);
$faq02 = get_field('faq02_ko', $post_id);
$faq03 = get_field('faq03_ko', $post_id);
$faq04 = get_field('faq04_ko', $post_id);


include(APP_PATH_KO . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/info.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="info" class="info ko">
  <?php include(APP_PATH_KO . 'libs/header.php'); ?>
  <main id="wrap">
    <?php echo $editor; ?>
    <div class="sec-info04" id="info04">
      <div class="inner1170">
        <div class="c-ttl02 is-white is-center aos-init" data-aos="fade-up">
          <h2 class="c-ttl02__jp">자주 묻는 질문</h2>
          <span class="c-ttl02__en">Q&A</span>
        </div>
        <p class="desc01 aos-init" data-aos="fade-up">SHONIN PARK의 이용에 대해 자주 묻는 질문을 정리하였습니다.<br>여기서 확인 되지 않는 내용은 <a href="<?php echo APP_URL; ?>contact/" class="">문의 양식</a>을 통해 질문해 주시기 바랍니다.</p>
        <div class="mod-tabs aos-init" data-aos="fade-up">
          <div class="nav-tabs">
            <ul>
              <li>
                <h3 class="tab is-act" data-tab="tab01"><span class="txt">시설에 대하여</span></h3>
              </li>
              <li>
                <h3 class="tab" data-tab="tab02"><span class="txt">당일치기 이용에 대하여</span></h3>
              </li>
              <li>
                <h3 class="tab" data-tab="tab03"><span class="txt">숙박에 대하여</span></h3>
              </li>
              <li>
                <h3 class="tab" data-tab="tab04"><span class="txt">기타</span></h3>
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
                <p class="c-text-nonpost">표시할 기사가 없습니다.</p>
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
                <p class="c-text-nonpost">표시할 기사가 없습니다.</p>
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
                <p class="c-text-nonpost">표시할 기사가 없습니다.</p>
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
                <p class="c-text-nonpost">표시할 기사가 없습니다.</p>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include(APP_PATH_KO . 'libs/footer.php'); ?>
</body>

</html>