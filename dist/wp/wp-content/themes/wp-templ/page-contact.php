<?php
if (session_status() === PHP_SESSION_NONE) session_start();
header("Cache-control: public");
ob_start();
$thisPageName = 'contact';
include(APP_PATH . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/lib/validationEngine.jquery.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/form.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/contact.min.css?v=<?php echo APP_VER ?>">

<?php if (GOOGLE_RECAPTCHA_KEY_API != '' && GOOGLE_RECAPTCHA_KEY_SECRET != '') { ?>
  <script src="https://www.google.com/recaptcha/api.js?hl=ja" async defer></script>
  <script>
    function onSubmit(token) {
      document.getElementsByClassName("contactform").submit();
    }
  </script>
  <style>
    .grecaptcha-badge {
      display: none
    }
  </style>
<?php } ?>
</head>

<body id="contact" class="contact page-form">
  <?php include(APP_PATH . 'libs/header.php'); ?>

  <main id="wrap">
    <div class="c-breadcrumb aos-init" data-aos="fade-up">
      <ul>
        <li><a href="<?php echo APP_URL; ?>">TOP</a></li>
        <li>お問い合わせ</li>
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
          <h1 class="mv-ttl-jp">お問い合わせ</h1>
          <span class="mv-ttl-en">contact</span>
        </div>
      </div>
    </div>
    <p class="short-desc">お問い合わせ前に<a href="<?php echo APP_URL ?>info#info04">よくあるご質問</a>をご確認い<br class="sp">ただいた上で、<br class="pc">お問い合わせフォームへのご入<br class="sp">力をお願いいたします。</p>
    <div class="sec-form c-bg-wave01">
      <div class="img-step">
        <img class="pc" src="<?php echo createSVG(520, 140) ?>" data-src="<?php echo APP_ASSETS; ?>img/contact/img_step01.png" rel="js-lazy" width="520" height="140" alt="内容入力">
        <img class="sp" src="<?php echo createSVG(327, 88) ?>" data-src="<?php echo APP_ASSETS; ?>img/contact/img_step01_sp.png" rel="js-lazy" width="327" height="88" alt="内容入力">
      </div>
      <form method="post" class="contactform" id="contactform" action="<?php echo APP_URL; ?>contact/confirm/?g=<?php echo time() ?>" name="contactform" onSubmit="return check()">
        <div class="form-block">
          <p class="hid_url">Leave this empty: <input type="text" name="url"></p><!-- Anti spam part1: the contact form -->
          <table class="tableContact">
            <tr>
              <th><em>必須</em>お名前</th>
              <td><input placeholder="フルネームでご記入ください" type="text" name="nameuser" id="nameuser" class="validate[required]"></td>
            </tr>
            <tr>
              <th><em>必須</em>フリガナ</th>
              <td><input placeholder="カタカナでご記入ください" type="text" name="namekata" id="namekata" class="validate[required,custom[katakana]]"></td>
            </tr>
            <tr>
              <th><em>必須</em>メールアドレス</th>
              <td>
                <input type="email" name="email" id="email" class="validate[required,custom[email]]">
                <p class="txt-hint">※半角英数字で入力してください</p>
              </td>
            </tr>
            <tr>
              <th><em>必須</em>お電話番号</th>
              <td>
                <input type="tel" name="tel" id="tel" class="validate[required,custom[phone]]">
                <p class="txt-hint">※半角英数字（「-」ハイフン無し）で入力してください</p>
              </td>
            </tr>
            <tr>
              <th><em>必須</em>お問い合わせ内容</th>
              <td><textarea name="content" id="content" class="validate[required]"></textarea></td>
            </tr>
          </table>

          <div class="txtContact01">
            <ul>
              <li><a href="https://www.tkp.jp/privacy/" target="_blank">プライバシーポリシー</a> に同意の上、「入力内容を確認する」ボタンを押してください。</li>
            </ul>
          </div>
          <div class="box-confirm">
            <p class="check-confirm"><label><input id="check1" type="checkbox" name="check1" value="<?php echo sanitize_form_value('agree') ?>"><span> プライバシーポリシーに同意する</span></label></p>

            <div class="btn-confirm">
              <?php if (defined('GOOGLE_RECAPTCHA_KEY_API') && GOOGLE_RECAPTCHA_KEY_API != '') { ?>
                <!-- <div class="capcha">
                  <div class="g-recaptcha" data-sitekey="<?php echo GOOGLE_RECAPTCHA_KEY_API; ?>"></div>
                </div> -->
                <button id="btnConfirm" class="g-recaptcha c-btn02" data-size="invisible" data-sitekey="<?php echo GOOGLE_RECAPTCHA_KEY_API ?>" data-callback="onSubmit"><span>入力内容を確認する</span></button>
              <?php } else { ?>
                <button id="btnConfirm" class="c-btn02"><span>入力内容を確認する</span></button>
              <?php } ?>
              <input type="hidden" name="_csrf" value="<?php echo generate_csrf_token() ?>">
              <input type="hidden" name="actionFlag" value="<?php echo sanitize_form_value('confirm') ?>">
            </div>
          </div>
        </div>
      </form>
    </div>

  </main>

  <?php include(APP_PATH . 'libs/footer.php'); ?>
  <?php include(APP_PATH . 'libs/form-scripts.php'); ?>
</body>

</html>