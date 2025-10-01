<?php
include_once(dirname(dirname(dirname(__DIR__))) . '/../../app_config.php');
if (session_status() === PHP_SESSION_NONE) session_start();
header("Cache-control: public");
ob_start();
$thisPageName = 'ishinoya-form';

include(APP_PATH_KO . 'libs/head02.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/lib/validationEngine.jquery.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/form.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/lib/jquery-ui.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/ishinoya_form.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="ishinoya-form" class="ishinoya-form page-form ko">
  <?php include(APP_PATH_KO . 'libs/header02.php'); ?>
  <main id="wrap02">
    <div class="sec-form">
      <div class="inner1170">
        <div class="c-breadcrumb aos-init" data-aos="fade-up">
          <ul>
            <li><a href="<?php echo APP_URL_KO; ?>">TOP</a></li>
            <li><a href="<?php echo APP_URL_KO; ?>guide/">시설안내</a></li>
            <li><a href="<?php echo APP_URL_KO; ?>guide/ishinoya/">ISHINOYA벳푸</a></li>
            <li><a href="<?php echo APP_URL_KO; ?>guide/ishinoya/contact/">문의하기</a></li>
            <li>개인 고객 문의사항</li>
          </ul>
        </div>
        <h1 class="form-ttl">개인 고객 문의사항</h1>
        <div class="form-step">
          <img class="pc" src="<?php echo createSVG(518, 150) ?>" data-src="<?php echo APP_ASSETS; ?>img/ishinoya/contact/form/img_step01_ko.png" rel="js-lazy" width="518" height="150" alt="내용 입력">
          <img class="sp" src="<?php echo createSVG(327, 95) ?>" data-src="<?php echo APP_ASSETS; ?>img/ishinoya/contact/form/img_step01_sp_ko.png" rel="js-lazy" width="327" height="95" alt="내용 입력">
        </div>
        <div class="form-inner">
          <form method="post" class="contactform" id="contactform" action="<?php echo APP_URL_KO; ?>guide/ishinoya/contact/form/confirm/?g=<?php echo time() ?>" name="contactform" onSubmit="return check()">
            <p class="hid_url">Leave this empty: <input type="text" name="url"></p><!-- Anti spam part1: the contact form -->
            <table class="tableContact02">
              <tr class="is-required">
                <th>
                  <em>필수</em><span class="head">성함</span>
                </th>
                <td>
                  <input placeholder="풀네임을 적어 주십시오" type="text" name="nameuser" id="nameuser" class="validate[required]">
                </td>
              </tr>
              <tr class="is-required">
                <th>
                  <em>필수</em><span class="head">이메일</span>
                </th>
                <td>
                  <input placeholder="info@shoninpark.jp" type="email" name="email" id="email" class="is-letterspace validate[required,custom[email]]">
                  <p class="txt-hint">※반각 영문・숫자로 입력해 주십시오.</p>
                </td>
              </tr>
              <tr class="is-required">
                <th>
                  <em>필수</em><span class="head">전화번호</span>
                </th>
                <td>
                  <input placeholder="0123456789" type="tel" name="tel" id="tel" class="is-letterspace validate[required,custom[phone]]">
                  <p class="txt-hint">※반각 영문・숫자 ("-"없이)로 입력해 주십시오.</p>
                </td>
              </tr>
              <tr class="is-required">
                <th class="is-padd">
                  <em>필수</em><span class="head">예약 상태</span>
                </th>
                <td>
                  <div class="radio-list">
                    <p class="radio-item">
                      <input type="radio" id="radiostatus01" name="radiostatus" value="<?php echo sanitize_form_value('예약 검토중') ?>" class="validate[required]">
                      <label for="radiostatus01"><i class="ske"></i>예약 검토중</label>
                    </p>
                    <p class="radio-item">
                      <input type="radio" id="radiostatus02" name="radiostatus" value="<?php echo sanitize_form_value('예약 완료') ?>" class="validate[required]">
                      <label for="radiostatus02"><i class="ske"></i>예약 완료</label>
                    </p>
                    <p class="radio-item">
                      <input type="radio" id="radiostatus03" name="radiostatus" value="<?php echo sanitize_form_value('이용 완료') ?>" class="validate[required]">
                      <label for="radiostatus03"><i class="ske"></i>이용 완료</label>
                    </p>
                    <p class="radio-item">
                      <input type="radio" id="radiostatus04" name="radiostatus" value="<?php echo sanitize_form_value('기타') ?>" class="validate[required]">
                      <label for="radiostatus04"><i class="ske"></i>기타</label>
                    </p>
                  </div>
                </td>
              </tr>
              <tr>
                <th>
                  <em>임의</em><span class="head">예약하신 분의 성함</span>
                </th>
                <td>
                  <input placeholder="풀네임을 적어 주십시오" type="text" name="namereser" id="namereser" class="">
                  <p class="txt-hint">※예약자와 문의하시는 분의 성함이 다른 경우에만 입력해 주십시오</p>
                </td>
              </tr>
              <tr>
                <th>
                  <em>임의</em><span class="head">일정</span>
                </th>
                <td>
                  <input type="text" name="schedule" id="schedule" class="datepicker">
                </td>
              </tr>

              <tr class="is-required">
                <th>
                  <em>필수</em><span class="head">문의 내용</span>
                </th>
                <td>
                  <textarea name="content" id="content" class="validate[required]"></textarea>
                </td>
              </tr>
            </table>

            <div class="txtContact02">
              <ul>
                <li>개인정보 보호정책에 동의 하신 후 "입력하신 내용 확인하기" 버튼을 눌러 주십시오.</li>
              </ul>
            </div>
            <div class="box-confirm02">
              <p class="check-confirm"><label><input id="check1" type="checkbox" name="check1" value="<?php echo sanitize_form_value('agree') ?>"><span> 개인정보 보호정책에 동의하기</span></label></p>
              <div class="btn-confirm">
                <button id="btnConfirm" class=""><span>입력하신 내용 확인하기</span></button>
                <input type="hidden" name="_csrf" value="<?php echo generate_csrf_token() ?>">
                <input type="hidden" name="actionFlag" value="<?php echo sanitize_form_value('confirm') ?>">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
  <?php include(APP_PATH_KO . 'libs/footer02.php'); ?>
  <?php include(APP_PATH_KO . 'libs/form-scripts.php'); ?>
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