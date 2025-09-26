<?php
include_once(dirname(__DIR__) . '/../app_config.php');
if (session_status() === PHP_SESSION_NONE) session_start();
header("Cache-control: public");
ob_start();
$thisPageName = 'contact';
include(APP_PATH_KO . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/lib/validationEngine.jquery.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/form.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/contact.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="contact" class="contact page-form ko">
  <?php include(APP_PATH_KO . 'libs/header.php'); ?>

  <main id="wrap">
    <div class="c-breadcrumb aos-init" data-aos="fade-up">
      <ul>
        <li><a href="<?php echo APP_URL_KO; ?>">TOP</a></li>
        <li>문의하기</li>
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
          <h1 class="mv-ttl-jp">문의하기</h1>
          <span class="mv-ttl-en">contact</span>
        </div>
      </div>
    </div>
    <p class="short-desc">문의하시기 전에 <a href="<?php echo APP_URL_KO ?>info#info04">자주 묻는 질문</a>을 먼저 확인해 주시고, 문의 양식에 입력해 주시기 바랍니다.</p>
    <div class="sec-form c-bg-wave01">
      <div class="img-step">
        <img class="pc" src="<?php echo createSVG(520, 140) ?>" data-src="<?php echo APP_ASSETS; ?>img/contact/img_step01_ko.png" rel="js-lazy" width="520" height="140" alt="내용 입력">
        <img class="sp" src="<?php echo createSVG(327, 88) ?>" data-src="<?php echo APP_ASSETS; ?>img/contact/img_step01_sp_ko.png" rel="js-lazy" width="327" height="88" alt="내용 입력">
      </div>
      <form method="post" class="contactform" id="contactform" action="<?php echo APP_URL_KO; ?>contact/confirm/?g=<?php echo time() ?>" name="contactform" onSubmit="return check()">
        <div class="form-block">
          <p class="hid_url">Leave this empty: <input type="text" name="url"></p><!-- Anti spam part1: the contact form -->
          <table class="tableContact">
            <tr>
              <th><em>필수</em>성함</th>
              <td><input placeholder="풀네임을 적어 주십시오" type="text" name="nameuser" id="nameuser" class="validate[required]"></td>
            </tr>
            <tr>
              <th><em>필수</em>이메일</th>
              <td>
                <input placeholder="info@shoninpark.jp" type="email" name="email" id="email" class="validate[required,custom[email]]">
                <p class="txt-hint">※반각 영문・숫자로 입력해 주십시오.</p>
              </td>
            </tr>
            <tr>
              <th><em>필수</em>전화번호</th>
              <td>
                <input placeholder="0123456789" type="tel" name="tel" id="tel" class="validate[required,custom[phone]]">
                <p class="txt-hint">※반각 영문・숫자 ("-"없이)로 입력해 주십시오.</p>
              </td>
            </tr>
            <tr>
              <th><em>필수</em>문의 내용</th>
              <td><textarea name="content" id="content" class="validate[required]"></textarea></td>
            </tr>
          </table>

          <div class="txtContact01">
            <ul>
              <li><a href="https://www.tkp.jp/privacy/" target="_blank">개인정보 보호정책에</a> 동의 하신 후 "입력하신 내용 확인하기" 버튼을 눌러 주십시오.</li>
            </ul>
          </div>
          <div class="box-confirm">
            <p class="check-confirm"><label><input id="check1" type="checkbox" name="check1" value="<?php echo sanitize_form_value('agree') ?>"><span>개인정보 보호정책에 동의하기</span></label></p>

            <div class="btn-confirm">
              <button id="btnConfirm" class="c-btn02"><span>입력하신 내용 확인하기</span></button>
              <input type="hidden" name="_csrf" value="<?php echo generate_csrf_token() ?>">
              <input type="hidden" name="actionFlag" value="<?php echo sanitize_form_value('confirm') ?>">
            </div>
          </div>
        </div>
      </form>
    </div>

  </main>

  <?php include(APP_PATH_KO . 'libs/footer.php'); ?>
  <?php include(APP_PATH_KO . 'libs/form-scripts.php'); ?>
</body>

</html>