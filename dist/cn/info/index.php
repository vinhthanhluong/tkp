<?php
include_once(dirname(__DIR__) . '/../app_config.php');
include_once(dirname(__DIR__) . '/../wp/wp-load.php');

$thisPageName = 'info';

$post_id = '202';
$editor = get_field('editor_cn', $post_id);
$faq01 = get_field('faq01_cn', $post_id);
$faq02 = get_field('faq02_cn', $post_id);
$faq03 = get_field('faq03_cn', $post_id);
$faq04 = get_field('faq04_cn', $post_id);

include(APP_PATH_CN . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/info.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="info" class="info cn">
  <?php include(APP_PATH_CN . 'libs/header.php'); ?>
  <main id="wrap">
    <?php echo $editor; ?>
    <div class="sec-info04" id="info04">
      <div class="inner1170">
        <div class="c-ttl02 is-white is-center aos-init" data-aos="fade-up">
          <h2 class="c-ttl02__jp">常见问题</h2>
          <span class="c-ttl02__en">FAQs</span>
        </div>
        <p class="desc01 aos-init" data-aos="fade-up">总结了在SHONIN PARK游玩的常见疑问与解答。<br>在此查找不到的内容，烦请填写<a href="<?php echo APP_URL_CN; ?>contact/" class="">咨询表格</a>询问。</p>
        <div class="mod-tabs aos-init" data-aos="fade-up">
          <div class="nav-tabs">
            <ul>
              <li>
                <h3 class="tab is-act" data-tab="tab01"><span class="txt">关于设施</span></h3>
              </li>
              <li>
                <h3 class="tab" data-tab="tab02"><span class="txt">关于一日游</span></h3>
              </li>
              <li>
                <h3 class="tab" data-tab="tab03"><span class="txt">关于住宿</span></h3>
              </li>
              <li>
                <h3 class="tab" data-tab="tab04"><span class="txt">其他</span></h3>
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
                <p class="c-text-nonpost">没有可显示的文章。</p>
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
                <p class="c-text-nonpost">没有可显示的文章。</p>
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
                <p class="c-text-nonpost">没有可显示的文章。</p>
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
                <p class="c-text-nonpost">没有可显示的文章。</p>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include(APP_PATH_CN . 'libs/footer.php'); ?>
</body>

</html>