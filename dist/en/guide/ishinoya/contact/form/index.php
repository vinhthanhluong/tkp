<?php
include_once(dirname(dirname(dirname(__DIR__))) . '/../../app_config.php');
if (session_status() === PHP_SESSION_NONE) session_start();
header("Cache-control: public");
ob_start();
$thisPageName = 'ishinoya-form';

include(APP_PATH_EN . 'libs/head02.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/lib/validationEngine.jquery.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/form.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/lib/jquery-ui.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/ishinoya_form.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="ishinoya-form" class="ishinoya-form page-form en">
  <?php include(APP_PATH_EN . 'libs/header02.php'); ?>
  <main id="wrap02">
    <div class="sec-form">
      <div class="inner1170">
        <div class="c-breadcrumb aos-init" data-aos="fade-up">
          <ul>
            <li><a href="<?php echo APP_URL_EN; ?>">TOP</a></li>
            <li><a href="<?php echo APP_URL_EN; ?>guide/">Facilities</a></li>
            <li><a href="<?php echo APP_URL_EN; ?>guide/ishinoya/">ISHINOYA Beppu</a></li>
            <li><a href="<?php echo APP_URL_EN; ?>guide/ishinoya/contact/">Contact</a></li>
            <li>Individual Customer Inquiry</li>
          </ul>
        </div>
        <h1 class="form-ttl">Individual Customer <br class="sp">Inquiry</h1>
        <div class="form-step">
          <img class="pc" src="<?php echo createSVG(518, 150) ?>" data-src="<?php echo APP_ASSETS; ?>img/ishinoya/contact/form/img_step01_en.png" rel="js-lazy" width="518" height="150" alt="内容入力">
          <img class="sp" src="<?php echo createSVG(327, 95) ?>" data-src="<?php echo APP_ASSETS; ?>img/ishinoya/contact/form/img_step01_sp_en.png" rel="js-lazy" width="327" height="95" alt="内容入力">
        </div>
        <div class="form-inner">
          <form method="post" class="contactform" id="contactform" action="<?php echo APP_URL_EN; ?>guide/ishinoya/contact/form/confirm/?g=<?php echo time() ?>" name="contactform" onSubmit="return check()">
            <p class="hid_url">Leave this empty: <input type="text" name="url"></p><!-- Anti spam part1: the contact form -->
            <table class="tableContact02">
              <tr class="is-required">
                <th>
                  <em>Required</em><span class="head">Name</span>
                </th>
                <td>
                  <input placeholder="Please enter your full name" type="text" name="nameuser" id="nameuser" class="validate[required]">
                </td>
              </tr>
              <tr class="is-required">
                <th>
                  <em>Required</em><span class="head">E-mail Address</span>
                </th>
                <td>
                  <input placeholder="info@shoninpark.jp" type="email" name="email" id="email" class="is-letterspace validate[required,custom[email]]">
                  <p class="txt-hint">*Please use single-byte letters and numbers only.</p>
                </td>
              </tr>
              <tr class="is-required">
                <th>
                  <em>Required</em><span class="head">Phone Number</span>
                </th>
                <td>
                  <input placeholder="0123456789" type="tel" name="tel" id="tel" class="is-letterspace validate[required,custom[phone]]">
                  <p class="txt-hint">*Please enter in single-byte numbers (no “-” hyphens).</p>
                </td>
              </tr>
              <tr class="is-required">
                <th class="is-padd">
                  <em>Required</em><span class="head">Reservation Status</span>
                </th>
                <td>
                  <div class="radio-list">
                    <p class="radio-item">
                      <input type="radio" id="radiostatus01" name="radiostatus" value="<?php echo sanitize_form_value('Considering a Reservation') ?>" class="validate[required]">
                      <label for="radiostatus01"><i class="ske"></i>Considering a Reservation</label>
                    </p>
                    <p class="radio-item">
                      <input type="radio" id="radiostatus02" name="radiostatus" value="<?php echo sanitize_form_value('Reservation Confirmed') ?>" class="validate[required]">
                      <label for="radiostatus02"><i class="ske"></i>Reservation Confirmed</label>
                    </p>
                    <p class="radio-item">
                      <input type="radio" id="radiostatus03" name="radiostatus" value="<?php echo sanitize_form_value('Already Stayed') ?>" class="validate[required]">
                      <label for="radiostatus03"><i class="ske"></i>Already Stayed</label>
                    </p>
                    <p class="radio-item">
                      <input type="radio" id="radiostatus04" name="radiostatus" value="<?php echo sanitize_form_value('Other') ?>" class="validate[required]">
                      <label for="radiostatus04"><i class="ske"></i>Other</label>
                    </p>
                  </div>
                </td>
              </tr>
              <tr>
                <th>
                  <em>Optional</em><span class="head">Name of the Person Making the Reservation</span>
                </th>
                <td>
                  <input placeholder="Please enter your full name" type="text" name="namereser" id="namereser" class="">
                  <p class="txt-hint">*Only if the name of the person making the reservation and the name of the person making the inquiry are different.</p>
                </td>
              </tr>
              <tr>
                <th>
                  <em>Optional</em><span class="head">Dates</span>
                </th>
                <td>
                  <input type="text" name="schedule" id="schedule" class="datepicker">
                </td>
              </tr>

              <tr class="is-required">
                <th>
                  <em>Required</em><span class="head">Content of Inquiry</span>
                </th>
                <td>
                  <textarea name="content" id="content" class="validate[required]"></textarea>
                </td>
              </tr>
            </table>

            <div class="txtContact02">
              <ul>
                <li>Please agree to our privacy policy and click the “Review Your Entry” button.</li>
              </ul>
            </div>
            <div class="box-confirm02">
              <p class="check-confirm"><label><input id="check1" type="checkbox" name="check1" value="<?php echo sanitize_form_value('agree') ?>"><span> I agree to the Privacy Policy</span></label></p>
              <div class="btn-confirm">
                <button id="btnConfirm" class=""><span>Review Your Entry</span></button>
                <input type="hidden" name="_csrf" value="<?php echo generate_csrf_token() ?>">
                <input type="hidden" name="actionFlag" value="<?php echo sanitize_form_value('confirm') ?>">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
  <?php include(APP_PATH_EN . 'libs/footer02.php'); ?>
  <?php include(APP_PATH_EN . 'libs/form-scripts.php'); ?>
  <script src="<?php echo APP_ASSETS ?>js/lib/jquery-ui.min.js?v=<?php echo APP_VER ?>"></script>
  <script src="<?php echo APP_ASSETS ?>js/lib/datepicker-ja.min.js?v=<?php echo APP_VER ?>"></script>
  <script>
    $(function() {
      if ($.datepicker.regional["en"]) {
        $.datepicker.setDefaults($.datepicker.regional["en"]);
      } else {
        $.datepicker.setDefaults($.datepicker.regional["ja"]);
      }
      var dateToday = new Date();
      if ($(".datepicker").length) {
        $(".datepicker").datepicker({
          dateFormat: ' d/m/yy',
          minDate: dateToday
        });
      }
    });
  </script>
</body>

</html>