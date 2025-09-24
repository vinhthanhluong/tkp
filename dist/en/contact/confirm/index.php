<?php
include_once(dirname(dirname(__DIR__)) . '/../app_config.php');
/**
 * Template Name: Page CONTACT CONFIRM
 **/

if (session_status() === PHP_SESSION_NONE) session_start();
ob_start();
if (empty($_POST['actionFlag']) && empty($_SESSION['statusFlag']) && (!isset($_POST['_csrf']) || !verify_csrf_token(sanitize_form_value($_POST['_csrf'])))) header('location: ' . APP_URL_EN);

if (!empty($_POST['check1'])) sanitize_form_value($_POST['check1']);

$gtime = sanitize_form_value(time());

//always keep this
$actionFlag       = (!empty($_POST['actionFlag'])) ? sanitize_form_value($_POST['actionFlag']) : '';
$reg_url          = (!empty($_POST['url'])) ? sanitize_form_value($_POST['url']) : '';
//end always keep this

//お問い合わせフォーム内容
$reg_name         = (!empty($_POST['nameuser'])) ? sanitize_form_value($_POST['nameuser']) : '';
$reg_email        = (!empty($_POST['email'])) ? sanitize_form_value($_POST['email']) : '';
$reg_tel          = (!empty($_POST['tel'])) ? sanitize_form_value($_POST['tel']) : '';
$reg_content      = (!empty($_POST['content'])) ? sanitize_form_value($_POST['content']) : '';
$br_reg_content   = nl2br($reg_content);

if ($actionFlag == "confirm") {
  $thisPageName = 'contact';
  include(APP_PATH_EN . 'libs/head.php');
  $_SESSION['ses_from_step2'] = true;
  if (!isset($_SESSION['ses_gtime_step2'])) $_SESSION['ses_gtime_step2'] = $gtime;
?>
  <link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/form.min.css?v=<?php echo APP_VER ?>">
  <link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/contact.min.css?v=<?php echo APP_VER ?>">
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

  <body id="contact" class="contact page-form form-confirm en">
    <?php include(APP_PATH_EN . 'libs/header.php'); ?>

    <main id="wrap">
      <div class="c-breadcrumb aos-init" data-aos="fade-up">
        <ul>
          <li><a href="<?php echo APP_URL_EN; ?>">TOP</a></li>
          <li>Contact</li>
          <li>Confirm</li>
        </ul>
      </div>
      <div class="sec-form c-bg-wave01">
        <div class="img-step">
          <img class="pc" src="<?php echo createSVG(520, 140) ?>" data-src="<?php echo APP_ASSETS; ?>img/contact/img_step02_en.png" rel="js-lazy" width="520" height="140" alt="内容確認">
          <img class="sp" src="<?php echo createSVG(327, 88) ?>" data-src="<?php echo APP_ASSETS; ?>img/contact/img_step02_sp_en.png" rel="js-lazy" width="327" height="88" alt="内容確認">
        </div>
        <form method="post" class="confirmform" action="../complete/?g=<?php echo $gtime ?>" name="confirmform" id="confirmform">
          <div class="form-block">
            <p class="short-desc">Please confirm the details you have entered.<br>If this content is acceptable, please press the Submit button.</p>
            <div>
              <p class="hid_url">Leave this empty: <input type="text" name="url" value="<?php echo $reg_url ?>"></p><!-- Anti spam part1: the contact form -->
              <table class="tableContact" cellspacing="0">

                <tr>
                  <th>Name</th>
                  <td><?php echo $reg_name; ?></td>
                </tr>
                <tr>
                  <th>Email address</th>
                  <td><?php echo $reg_email ?></td>
                </tr>
                <tr>
                  <th>Phone number</th>
                  <td><?php echo $reg_tel ?></td>
                </tr>
                <tr>
                  <th>Inquiry details</th>
                  <td><?php echo $br_reg_content ?></td>
                </tr>
              </table>
            </div>
            <input type="hidden" name="nameuser" value="<?php echo $reg_name ?>">
            <input type="hidden" name="email" value="<?php echo $reg_email ?>">
            <input type="hidden" name="tel" value="<?php echo $reg_tel ?>">
            <input type="hidden" name="content" value="<?php echo $br_reg_content ?>">
            <!-- always keep this -->
            <input type="hidden" name="url" value="<?php echo $reg_url ?>">
            <!-- end always keep this -->

            <div class="list-btn">
              <div class="btn-back">
                <p rel="js-back" class="txt-back">Change the information you entered</p>
              </div>
              <div class="btn-send">
                <?php if (defined('GOOGLE_RECAPTCHA_KEY_API') && GOOGLE_RECAPTCHA_KEY_API != '') { ?>
                  <button name="actionFlag" value="<?php echo sanitize_form_value('send') ?>" class="g-recaptcha c-btn02" id="btnSend" data-size="invisible" data-sitekey="<?php echo GOOGLE_RECAPTCHA_KEY_API ?>" data-callback="onSubmit"><span>Submit</span></button>
                <?php } else { ?>
                  <button class="c-btn02" id="btnSend"><span>Submit</span></button>
                <?php } ?>
                <input type="hidden" name="_csrf" value="<?php echo generate_csrf_token() ?>">
                <input type="hidden" name="actionFlag" value="<?php echo sanitize_form_value('send') ?>">
              </div>
            </div>
          </div>
        </form>
      </div>
    </main>
    <?php include(APP_PATH_EN . 'libs/footer.php'); ?>
    <script src="<?php echo APP_ASSETS ?>js/page/form-confirm.min.js?v=<?php echo APP_VER ?>"></script>
  </body>

  </html>
<?php } ?>