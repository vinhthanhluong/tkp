<?php
include_once(dirname(__DIR__) . '/../app_config.php');
if (session_status() === PHP_SESSION_NONE) session_start();
header("Cache-control: public");
ob_start();
$thisPageName = 'contact';
include(APP_PATH_EN . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/lib/validationEngine.jquery.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/form.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/contact.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="contact" class="contact page-form en">
  <?php include(APP_PATH_EN . 'libs/header.php'); ?>

  <main id="wrap">
    <div class="c-breadcrumb aos-init" data-aos="fade-up">
      <ul>
        <li><a href="<?php echo APP_URL_EN; ?>">TOP</a></li>
        <li>Contact</li>
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
          <span class="mv-ttl-en">contact</span>
        </div>
      </div>
    </div>
    <p class="short-desc">Before reaching out, please check our <a href="<?php echo APP_URL_EN ?>info#info04">Frequently Asked Questions</a>.<br>If your question is not addressed there, feel free to fill out the contact form below.</p>
    <div class="sec-form c-bg-wave01">
      <div class="img-step">
        <img class="pc" src="<?php echo createSVG(520, 140) ?>" data-src="<?php echo APP_ASSETS; ?>img/contact/img_step01_en.png" rel="js-lazy" width="520" height="140" alt="内容入力">
        <img class="sp" src="<?php echo createSVG(327, 88) ?>" data-src="<?php echo APP_ASSETS; ?>img/contact/img_step01_sp_en.png" rel="js-lazy" width="327" height="88" alt="内容入力">
      </div>
      <form method="post" class="contactform" id="contactform" action="<?php echo APP_URL_EN; ?>contact/confirm/?g=<?php echo time() ?>" name="contactform" onSubmit="return check()">
        <div class="form-block">
          <p class="hid_url">Leave this empty: <input type="text" name="url"></p><!-- Anti spam part1: the contact form -->
          <table class="tableContact">
            <tr>
              <th><em>Required</em>Name</th>
              <td><input placeholder="Please enter your full name" type="text" name="nameuser" id="nameuser" class="validate[required]"></td>
            </tr>
            <tr>
              <th><em>Required</em>Email Address</th>
              <td>
                <input placeholder="info@shoninpark.jp" type="email" name="email" id="email" class="validate[required,custom[email]]">
                <p class="txt-hint">*Please use single-byte letters and numbers only.</p>
              </td>
            </tr>
            <tr>
              <th><em>Required</em>Phone Number</th>
              <td>
                <input placeholder="0123456789" type="tel" name="tel" id="tel" class="validate[required,custom[phone]]">
                <p class="txt-hint">*Please enter in single-byte numbers (no “-” hyphens).</p>
              </td>
            </tr>
            <tr>
              <th><em>Required</em>Inquiry Details</th>
              <td><textarea name="content" id="content" class="validate[required]"></textarea></td>
            </tr>
          </table>

          <div class="txtContact01">
            <ul>
              <li>Please agree to <a href="https://www.tkp.jp/privacy/" target="_blank">the privacy policy</a> and click the "Confirm" button.</li>
            </ul>
          </div>
          <div class="box-confirm">
            <p class="check-confirm"><label><input id="check1" type="checkbox" name="check1" value="<?php echo sanitize_form_value('agree') ?>"><span>Agree to the Privacy Policy</span></label></p>

            <div class="btn-confirm">
              <button id="btnConfirm" class="c-btn02"><span>Confirm</span></button>
              <input type="hidden" name="_csrf" value="<?php echo generate_csrf_token() ?>">
              <input type="hidden" name="actionFlag" value="<?php echo sanitize_form_value('confirm') ?>">
            </div>
          </div>
        </div>
      </form>
    </div>

  </main>

  <?php include(APP_PATH_EN . 'libs/footer.php'); ?>
  <?php include(APP_PATH_EN . 'libs/form-scripts.php'); ?>
</body>

</html>