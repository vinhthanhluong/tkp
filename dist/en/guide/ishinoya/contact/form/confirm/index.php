<?php
include_once(dirname(dirname(dirname(dirname(__DIR__)))) . '/../../app_config.php');
/**
 * Template Name: Page GUIDE ISHINOYA CONTACT FORM CONFIRM
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
$reg_name           = (!empty($_POST['nameuser'])) ? sanitize_form_value($_POST['nameuser']) : '';
$reg_email          = (!empty($_POST['email'])) ? sanitize_form_value($_POST['email']) : '';
$reg_tel            = (!empty($_POST['tel'])) ? sanitize_form_value($_POST['tel']) : '';
$reg_radiostatus    = (!empty($_POST['radiostatus'])) ? sanitize_form_value($_POST['radiostatus']) : '';
$reg_namereser      = (!empty($_POST['namereser'])) ? sanitize_form_value($_POST['namereser']) : '';
$reg_schedule       = (!empty($_POST['schedule'])) ? sanitize_form_value($_POST['schedule']) : '';
$reg_content        = (!empty($_POST['content'])) ? sanitize_form_value($_POST['content']) : '';
$br_reg_content     = nl2br($reg_content);

if ($actionFlag == "confirm") {
  $thisPageName = 'ishinoya-form';
  include(APP_PATH_EN . 'libs/head02.php');
  $_SESSION['ses_from_step2'] = true;
  if (!isset($_SESSION['ses_gtime_step2'])) $_SESSION['ses_gtime_step2'] = $gtime;
?>
  <link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/form.min.css?v=<?php echo APP_VER ?>">
  <link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/ishinoya_form.min.css?v=<?php echo APP_VER ?>">
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

  <body id="ishinoya-form" class="ishinoya-form page-form form-confirm en">
    <?php include(APP_PATH_EN . 'libs/header02.php'); ?>
    <main id="wrap02">
      <div class="sec-formconfirm">
        <div class="inner1170">
          <div class="c-breadcrumb is-breadcrumb-dis aos-init" data-aos="fade-up">
            <ul>
              <li><a href="<?php echo APP_URL_EN; ?>">TOP</a></li>
              <li><a href="<?php echo APP_URL_EN; ?>guide/">Facilities</a></li>
              <li><a href="<?php echo APP_URL_EN; ?>guide/ishinoya/">ISHINOYA Beppu</a></li>
              <li><a href="<?php echo APP_URL_EN; ?>guide/ishinoya/contact/">Contact</a></li>
              <li><a href="<?php echo APP_URL_EN; ?>guide/ishinoya/contact/form/">Individual Customer Inquiry</a></li>
              <li>Confirm</li>
            </ul>
          </div>
          <div class="form-step">
            <img class="pc" src="<?php echo createSVG(518, 150) ?>" data-src="<?php echo APP_ASSETS; ?>img/ishinoya/contact/form/img_step02_en.png" rel="js-lazy" width="518" height="150" alt="内容確認">
            <img class="sp" src="<?php echo createSVG(327, 95) ?>" data-src="<?php echo APP_ASSETS; ?>img/ishinoya/contact/form/img_step02_sp_en.png" rel="js-lazy" width="327" height="95" alt="内容確認">
          </div>
          <p class="short-desc">Please check the information you have entered. <br class="pc">If you are satisfied with the information here, please click the Submit button.</p>

          <div class="form-inner">
            <form method="post" class="confirmform" action="../complete/?g=<?php echo $gtime ?>" name="confirmform" id="confirmform">
              <div>
                <p class="hid_url">Leave this empty: <input type="text" name="url" value="<?php echo $reg_url ?>"></p><!-- Anti spam part1: the contact form -->
                <table class="tableContact02" cellspacing="0">

                  <tr>
                    <th>Name</th>
                    <td><?php echo $reg_name; ?></td>
                  </tr>
                  <tr>
                    <th>E-mail Address</th>
                    <td><?php echo $reg_email ?></td>
                  </tr>
                  <tr>
                    <th>Phone Number</th>
                    <td><?php echo $reg_tel ?></td>
                  </tr>
                  <tr>
                    <th>Reservation Status</th>
                    <td><?php echo $reg_radiostatus ?></td>
                  </tr>
                  <?php if (!empty($reg_namereser) && trim($reg_namereser) != '') { ?>
                    <tr>
                      <th>Name of the Person Making the Reservation</th>
                      <td><?php echo $reg_namereser ?></td>
                    </tr>
                  <?php } ?>
                  <?php if (!empty($reg_schedule) && trim($reg_schedule) != '') { ?>
                    <tr>
                      <th>Dates</th>
                      <td><?php echo $reg_schedule ?></td>
                    </tr>
                  <?php } ?>
                  <tr>
                    <th>Content of Inquiry</th>
                    <td class="inq-ctn"><?php echo $br_reg_content ?></td>
                  </tr>
                </table>
              </div>
              <input type="hidden" name="nameuser" value="<?php echo $reg_name ?>">
              <input type="hidden" name="email" value="<?php echo $reg_email ?>">
              <input type="hidden" name="tel" value="<?php echo $reg_tel ?>">
              <input type="hidden" name="radiostatus" value="<?php echo $reg_radiostatus ?>">
              <input type="hidden" name="namereser" value="<?php echo $reg_namereser ?>">
              <input type="hidden" name="schedule" value="<?php echo $reg_schedule ?>">
              <input type="hidden" name="content" value="<?php echo $br_reg_content ?>">
              <!-- always keep this -->
              <input type="hidden" name="url" value="<?php echo $reg_url ?>">
              <!-- end always keep this -->

              <div class="list-btn">
                <div class="btn-back">
                  <p rel="js-back" class="txt-back"><span>Change the information you entered</span></p>
                </div>
                <div class="btn-send">
                  <?php if (defined('GOOGLE_RECAPTCHA_KEY_API') && GOOGLE_RECAPTCHA_KEY_API != '') { ?>
                    <button name="actionFlag" value="<?php echo sanitize_form_value('send') ?>" class="g-recaptcha" id="btnSend" data-size="invisible" data-sitekey="<?php echo GOOGLE_RECAPTCHA_KEY_API ?>" data-callback="onSubmit"><span>Submit with this information</span></button>
                  <?php } else { ?>
                    <button id="btnSend"><span>Submit with this information</span></button>
                  <?php } ?>
                  <input type="hidden" name="_csrf" value="<?php echo generate_csrf_token() ?>">
                  <input type="hidden" name="actionFlag" value="<?php echo sanitize_form_value('send') ?>">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
    <?php include(APP_PATH_EN . 'libs/footer02.php'); ?>
    <script src="<?php echo APP_ASSETS ?>js/page/form-confirm.min.js?v=<?php echo APP_VER ?>"></script>
  </body>

  </html>
<?php } ?>