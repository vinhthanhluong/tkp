<?php

/**
 * Template Name: Page GUIDE ISHINOYA CONTACT FORM
 **/
if (session_status() === PHP_SESSION_NONE) session_start();
header("Cache-control: public");
ob_start();
$thisPageName = 'ishinoya-form';
if (!empty($_POST['actionFlag'])) {
  include_once('page-guide-ishinoya-contact-form-confirm.php');
  exit();
} elseif (!empty(get_query_var('actionFlag'))) {
  if (get_query_var('actionFlag') == 'complete') {
    include_once('page-guide-ishinoya-contact-form-complete.php');
    exit();
  } else header('location: ' . get_the_permalink());
}
include(APP_PATH . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/lib/validationEngine.jquery.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/form.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/lib/jquery-ui.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/ishinoya_form.min.css?v=<?php echo APP_VER ?>">

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

<body id="ishinoya-form" class="ishinoya-form page-form">
  <?php include(APP_PATH . 'libs/header02.php'); ?>
  <main id="wrap02">
    <div class="sec-form">
      <div class="inner1170">
        <div class="c-breadcrumb aos-init" data-aos="fade-up">
          <ul>
            <li><a href="<?php echo APP_URL; ?>">TOP</a></li>
            <li><a href="<?php echo APP_URL; ?>guide/">施設案内</a></li>
            <li><a href="<?php echo APP_URL; ?>guide/ishinoya/">ISHINOYA 別府 / 石のや 別府</a></li>
            <li><a href="<?php echo APP_URL; ?>guide/ishinoya/contact/">お問い合わせ</a></li>
            <li>個人のお客様のお問い合わせ</li>
          </ul>
        </div>
        <h1 class="form-ttl">個人のお客様の<br class="sp">お問い合わせ</h1>
        <div class="form-step">
          <img class="pc" src="<?php echo createSVG(518, 150) ?>" data-src="<?php echo APP_ASSETS; ?>img/ishinoya/contact/form/img_step01.png" rel="js-lazy" width="518" height="150" alt="内容入力">
          <img class="sp" src="<?php echo createSVG(327, 95) ?>" data-src="<?php echo APP_ASSETS; ?>img/ishinoya/contact/form/img_step01_sp.png" rel="js-lazy" width="327" height="95" alt="内容入力">
        </div>
        <div class="form-inner">
          <form method="post" class="contactform" id="contactform" action="<?php echo APP_URL; ?>guide/ishinoya/contact/form/confirm/?g=<?php echo time() ?>" name="contactform" onSubmit="return check()">
            <p class="hid_url">Leave this empty: <input type="text" name="url"></p><!-- Anti spam part1: the contact form -->
            <table class="tableContact02">
              <tr class="is-required">
                <th>
                  <em>必須</em>お名前
                </th>
                <td>
                  <input placeholder="フルネームでご記入ください" type="text" name="nameuser" id="nameuser" class="validate[required]">
                </td>
              </tr>
              <tr class="is-required">
                <th>
                  <em>必須</em>フリガナ
                </th>
                <td>
                  <input placeholder="カタカナでご記入ください" type="text" name="namekata" id="namekata" class="validate[required,custom[katakana]]">
                </td>
              </tr>
              <tr class="is-required">
                <th>
                  <em>必須</em>メールアドレス
                </th>
                <td>
                  <input placeholder="info@shoninpark.jp" type="email" name="email" id="email" class="is-letterspace validate[required,custom[email]]">
                  <p class="txt-hint">※半角英数字で入力してください</p>
                </td>
              </tr>
              <tr class="is-required">
                <th>
                  <em>必須</em>お電話番号
                </th>
                <td>
                  <input placeholder="0123456789" type="tel" name="tel" id="tel" class="is-letterspace validate[required,custom[phone]]">
                  <p class="txt-hint">※半角英数字（「-」ハイフン無し）で入力してください</p>
                </td>
              </tr>
              <tr class="is-required">
                <th class="is-padd">
                  <em>必須</em>ご予約状況
                </th>
                <td>
                  <div class="checkbox-list">
                    <p class="check-item">
                      <input type="checkbox" id="checkstatus01" name="checkstatus[]" value="<?php echo sanitize_form_value('ご予約検討中') ?>" class="validate[required]">
                      <label for="checkstatus01"><i class="ske"></i>ご予約検討中</label>
                    </p>
                    <p class="check-item">
                      <input type="checkbox" id="checkstatus02" name="checkstatus[]" value="<?php echo sanitize_form_value('ご予約済み') ?>" class="validate[required]">
                      <label for="checkstatus02"><i class="ske"></i>ご予約済み</label>
                    </p>
                    <p class="check-item">
                      <input type="checkbox" id="checkstatus03" name="checkstatus[]" value="<?php echo sanitize_form_value('ご利用済み') ?>" class="validate[required]">
                      <label for="checkstatus03"><i class="ske"></i>ご利用済み</label>
                    </p>
                    <p class="check-item">
                      <input type="checkbox" id="checkstatus04" name="checkstatus[]" value="<?php echo sanitize_form_value('その他') ?>" class="validate[required]">
                      <label for="checkstatus04"><i class="ske"></i>その他</label>
                    </p>
                  </div>
                </td>
              </tr>
              <tr>
                <th>
                  <em>任意</em>ご予約者様のお名前
                </th>
                <td>
                  <input placeholder="フルネームでご記入ください" type="text" name="namereser" id="namereser" class="">
                  <p class="txt-hint">※ご予約者様とお問い合わせ主様のお名前が異なる場合のみご記入ください。</p>
                </td>
              </tr>
              <tr>
                <th>
                  <em>任意</em>日程
                </th>
                <td>
                  <input type="text" name="schedule" id="schedule" class="datepicker">
                </td>
              </tr>

              <tr class="is-required">
                <th>
                  <em>必須</em>お問い合わせ内容
                </th>
                <td>
                  <textarea name="content" id="content" class="validate[required]"></textarea>
                </td>
              </tr>
            </table>

            <div class="txtContact02">
              <ul>
                <li>プライバシーポリシーに同意の上、「入力内容を確認する」ボタンを押してください。</li>
              </ul>
            </div>
            <div class="box-confirm02">
              <p class="check-confirm"><label><input id="check1" type="checkbox" name="check1" value="<?php echo sanitize_form_value('agree') ?>"><span> プライバシーポリシーに同意する</span></label></p>
              <div class="btn-confirm">
                <?php if (defined('GOOGLE_RECAPTCHA_KEY_API') && GOOGLE_RECAPTCHA_KEY_API != '') { ?>
                  <div class="capcha">
                    <div class="g-recaptcha" data-sitekey="<?php echo GOOGLE_RECAPTCHA_KEY_API; ?>"></div>
                  </div>
                  <button id="btnConfirm" class="g-recaptcha" data-size="invisible" data-sitekey="<?php echo GOOGLE_RECAPTCHA_KEY_API ?>" data-callback="onSubmit"><span>入力内容を確認する</span></button>
                <?php } else { ?>
                  <button id="btnConfirm" class=""><span>入力内容を確認する</span></button>
                <?php } ?>
                <input type="hidden" name="_csrf" value="<?php echo generate_csrf_token() ?>">
                <input type="hidden" name="actionFlag" value="<?php echo sanitize_form_value('confirm') ?>">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
  <?php include(APP_PATH . 'libs/footer02.php'); ?>
  <?php include(APP_PATH . 'libs/form-scripts.php'); ?>
  <script src="<?php echo APP_ASSETS ?>js/lib/jquery-ui.min.js?v=<?php echo APP_VER ?>"></script>
  <script src="<?php echo APP_ASSETS ?>js/lib/datepicker-ja.min.js?v=<?php echo APP_VER ?>"></script>
  <script>
    $(function() {
      $.datepicker.setDefaults($.datepicker.regional["ja"]);
      var dateToday = new Date();
      if ($(".datepicker").length) {
        $(".datepicker").datepicker({
          dateFormat: 'yy年m月d日（D）',
          minDate: dateToday
        });
      }
    });
  </script>

</body>

</html>