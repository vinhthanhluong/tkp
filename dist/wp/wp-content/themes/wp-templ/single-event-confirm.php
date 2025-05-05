<?php
if (session_status() === PHP_SESSION_NONE) session_start();
ob_start();
if (empty($_POST['actionFlag']) && empty($_SESSION['statusFlag']) && (!isset($_POST['_csrf']) || !verify_csrf_token(sanitize_form_value($_POST['_csrf'])))) header('location: ' . APP_URL);
include(APP_PATH . 'libs/head.php');

$gtime = sanitize_form_value(time());

//always keep this
$actionFlag       = (!empty($_POST['actionFlag'])) ? sanitize_form_value($_POST['actionFlag']) : '';
$reg_url          = (!empty($_POST['url'])) ? sanitize_form_value($_POST['url']) : '';
//end always keep this

//お問い合わせフォーム内容
$reg_sl01         = (!empty($_POST['sl01'])) ? sanitize_form_value($_POST['sl01']) : '';
$reg_name         = (!empty($_POST['nameuser'])) ? sanitize_form_value($_POST['nameuser']) : '';
$reg_company      = (!empty($_POST['company'])) ? sanitize_form_value($_POST['company']) : '';
$reg_gender       = (!empty($_POST['gender'])) ? sanitize_form_value($_POST['gender']) : '';
$reg_check01      = (!empty($_POST['check01'])) ? sanitize_form_value($_POST['check01']) : array();
$reg_checkAll01   = (!empty($_POST['checkAll01'])) ? sanitize_form_value($_POST['checkAll01']) : '';
$reg_department   = (!empty($_POST['department'])) ? sanitize_form_value($_POST['department']) : '';
$reg_tel          = (!empty($_POST['tel'])) ? sanitize_form_value($_POST['tel']) : '';
$reg_fax          = (!empty($_POST['fax'])) ? sanitize_form_value($_POST['fax']) : '';
$reg_zipcode      = (!empty($_POST['zipcode'])) ? sanitize_form_value($_POST['zipcode']) : '';
$reg_address      = (!empty($_POST['address'])) ? sanitize_form_value($_POST['address']) : '';
$reg_email        = (!empty($_POST['email'])) ? sanitize_form_value($_POST['email']) : '';
$reg_time         = (!empty($_POST['time'])) ? sanitize_form_value($_POST['time']) : '';
$reg_content      = (!empty($_POST['content'])) ? sanitize_form_value($_POST['content']) : '';
$br_reg_content   = nl2br($reg_content);

if ($actionFlag == "confirm") {
  $_SESSION['ses_from_step2'] = true;
  if (!isset($_SESSION['ses_gtime_step2'])) $_SESSION['ses_gtime_step2'] = $gtime;
?>
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/form.min.css?v=<?php echo APP_VER ?>">
  <link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/event.min.css?v=<?php echo APP_VER ?>">
  <!-- Anti spam part1: the contact form start -->

  <?php if (
    defined('GOOGLE_RECAPTCHA_KEY_API') && GOOGLE_RECAPTCHA_KEY_API != '' &&
    defined('GOOGLE_RECAPTCHA_KEY_SECRET') && GOOGLE_RECAPTCHA_KEY_SECRET != ''
  ) { ?>
    <script src="https://www.google.com/recaptcha/api.js?hl=ja" async defer></script>
    <script>
      function onSubmit(token) {
        document.getElementById("confirmform").submit();
      }
    </script>
    <style>
      .grecaptcha-badge {
        display: none
      }
    </style>
  <?php } ?>
  </head>

  <body id="event" class="event event-single page-single page-form form-confirm">
    <?php include(APP_PATH . 'libs/header.php'); ?>
    <main id="wrap">
      <div class="inner">
        <h1><?php the_title() ?></h1>

        <form method="post" class="eventconfirmform" action="?g=<?php echo $gtime ?>" name="eventconfirmform" id="eventconfirmform">
          <div class="form-block">

            <picture>
              <source media="(max-width: 999px)" srcset="<?php echo APP_ASSETS ?>img/common/form/img_step02SP.svg" width="345" height="55">
              <img src="<?php echo createSVG(714, 45) ?>" data-src="<?php echo APP_ASSETS; ?>img/common/form/img_step02.svg" rel="js-lazy" width="714" height="45" alt="内容確認" class="step-img">
            </picture>

            <p class="hid_url">Leave this empty: <input type="text" name="url" value="<?php echo $reg_url ?>"></p><!-- Anti spam part1: the contact form -->
            <table class="tableContact" cellspacing="0">
              <tr>
                <th>お問い合わせの種類</th>
                <td><?php echo $reg_sl01 ?></td>
              </tr>
              <tr>
                <th>お名前</th>
                <td><?php echo $reg_name; ?></td>
              </tr>
              <tr>
                <th>性別</th>
                <td><?php echo $reg_gender ?></td>
              </tr>
              <tr>
                <th>Checkbox1</th>
                <td>
                  <?php
                  $strCheckbox = implode(',', $reg_check01);
                  echo $strCheckbox;
                  ?>
                </td>
              </tr>
              <?php if (!empty($reg_company)) { ?>
                <tr>
                  <th>会社名</th>
                  <td><?php echo $reg_company ?></td>
                </tr>
              <?php } ?>
              <?php if (!empty($reg_department)) { ?>
                <tr>
                  <th>部署</th>
                  <td><?php echo $reg_department ?></td>
                </tr>
              <?php } ?>
              <tr>
                <th>お電話番号</th>
                <td><?php echo $reg_tel ?></td>
              </tr>
              <tr>
                <th>FAX番号</th>
                <td><?php echo $reg_fax ?></td>
              </tr>
              <tr>
                <th>郵便番号</th>
                <td><?php echo $reg_zipcode ?></td>
              </tr>
              <tr>
                <th>住所</th>
                <td>
                  <p><?php echo $reg_address ?></p>
                </td>
              </tr>
              <tr>
                <th>メールアドレス</th>
                <td><?php echo $reg_email ?></td>
              </tr>
              <?php if (!empty($reg_time)) { ?>
                <tr>
                  <th>連絡希望の時間帯</th>
                  <td><?php echo $reg_time ?></td>
                </tr>
              <?php } ?>
              <tr>
                <th>お問い合わせ内容</th>
                <td><?php echo $br_reg_content ?></td>
              </tr>
            </table>

            <input type="hidden" name="sl01" value="<?php echo $reg_sl01 ?>">
            <input type="hidden" name="nameuser" value="<?php echo $reg_name ?>">
            <input type="hidden" name="gender" value="<?php echo $reg_gender ?>">
            <input type="hidden" name="checkAll01" value="<?php echo $strCheckbox ?>">
            <input type="hidden" name="company" value="<?php echo $reg_company ?>">
            <input type="hidden" name="department" value="<?php echo $reg_department ?>">
            <input type="hidden" name="tel" value="<?php echo $reg_tel ?>">
            <input type="hidden" name="fax" value="<?php echo $reg_fax ?>">
            <input type="hidden" name="email" value="<?php echo $reg_email ?>">
            <input type="hidden" name="zipcode" value="<?php echo $reg_zipcode ?>">
            <input type="hidden" name="address" value="<?php echo $reg_address ?>">
            <input type="hidden" name="time" value="<?php echo $reg_time ?>">
            <input type="hidden" name="content" value="<?php echo $br_reg_content ?>">
            <!-- always keep this -->
            <input type="hidden" name="url" value="<?php echo $reg_url ?>">
            <!-- end always keep this -->

            <div class="taR">
              <p rel="js-back">入力内容を修正する</p>
            </div>
            <div class="taC t20b20">
              <?php if (defined('GOOGLE_RECAPTCHA_KEY_API') && GOOGLE_RECAPTCHA_KEY_API != '') { ?>
                <button name="actionFlag" value="<?php echo sanitize_form_value('send') ?>" class="g-recaptcha" data-size="invisible" data-sitekey="<?php echo GOOGLE_RECAPTCHA_KEY_API ?>" data-callback="onSubmit"><span>この内容で送信する</span></button>
              <?php } else { ?>
                <button id="btnSend"><span>この内容で送信する</span></button>
              <?php } ?>
              <input type="hidden" name="_csrf" value="<?php echo generate_csrf_token() ?>">
              <input type="hidden" name="actionFlag" value="<?php echo sanitize_form_value('send') ?>">
            </div>
            <p class="taC t30b0">上記フォームで送信できない場合は、必要項目をご記入の上、<br><a id="mailContact" href="#"></a>までメールをお送りください。</p><!-- Anti spam part2: clickable email address -->
          </div>
        </form>
      </div>
    </main>
    <?php include(APP_PATH . 'libs/footer.php'); ?>
    <script src="<?php echo APP_ASSETS ?>js/page/form-confirm.min.js?v=<?php echo APP_VER ?>"></script>
  </body>

  </html>
<?php } elseif ($actionFlag == "send") {
  include_once('single-event-complete.php');
} ?>