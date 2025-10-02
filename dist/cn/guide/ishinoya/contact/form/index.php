<?php
include_once(dirname(dirname(dirname(__DIR__))) . '/../../app_config.php');
if (session_status() === PHP_SESSION_NONE) session_start();
header("Cache-control: public");
ob_start();
$thisPageName = 'ishinoya-form';

include(APP_PATH_CN . 'libs/head02.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/lib/validationEngine.jquery.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/form.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/lib/jquery-ui.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/ishinoya_form.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="ishinoya-form" class="ishinoya-form page-form cn">
  <?php include(APP_PATH_CN . 'libs/header02.php'); ?>
  <main id="wrap02">
    <div class="sec-form">
      <div class="inner1170">
        <div class="c-breadcrumb aos-init" data-aos="fade-up">
          <ul>
            <li><a href="<?php echo APP_URL_CN; ?>">TOP</a></li>
            <li><a href="<?php echo APP_URL_CN; ?>guide/">设施指南</a></li>
            <li><a href="<?php echo APP_URL_CN; ?>guide/ishinoya/">ISHINOYA 別府</a></li>
            <li><a href="<?php echo APP_URL_CN; ?>guide/ishinoya/contact/">咨询</a></li>
            <li>个人</li>
          </ul>
        </div>
        <h1 class="form-ttl">个人咨询</h1>
        <div class="form-step">
          <img class="pc" src="<?php echo createSVG(518, 150) ?>" data-src="<?php echo APP_ASSETS; ?>img/ishinoya/contact/form/img_step01_cn.png" rel="js-lazy" width="518" height="150" alt="内容入力">
          <img class="sp" src="<?php echo createSVG(327, 95) ?>" data-src="<?php echo APP_ASSETS; ?>img/ishinoya/contact/form/img_step01_sp_cn.png" rel="js-lazy" width="327" height="95" alt="内容入力">
        </div>
        <div class="form-inner">
          <form method="post" class="contactform" id="contactform" action="<?php echo APP_URL_CN; ?>guide/ishinoya/contact/form/confirm/?g=<?php echo time() ?>" name="contactform" onSubmit="return check()">
            <p class="hid_url">Leave this empty: <input type="text" name="url"></p><!-- Anti spam part1: the contact form -->
            <table class="tableContact02">
              <tr class="is-required">
                <th>
                  <em>必须填写</em><span class="head">姓名</span>
                </th>
                <td>
                  <input placeholder="请填写全名" type="text" name="nameuser" id="nameuser" class="validate[required]">
                </td>
              </tr>
              <tr class="is-required">
                <th>
                  <em>必须填写</em><span class="head">邮箱地址</span>
                </th>
                <td>
                  <input placeholder="info@shoninpark.jp" type="email" name="email" id="email" class="is-letterspace validate[required,custom[email]]">
                  <p class="txt-hint">※请输入半角英文数字。</p>
                </td>
              </tr>
              <tr class="is-required">
                <th>
                  <em>必须填写</em><span class="head">电话号码</span>
                </th>
                <td>
                  <input placeholder="0123456789" type="tel" name="tel" id="tel" class="is-letterspace validate[required,custom[phone]]">
                  <p class="txt-hint">※请输入半角英文数字（无“-”连字符）。</p>
                </td>
              </tr>
              <tr class="is-required">
                <th class="is-padd">
                  <em>必须填写</em><span class="head">预约状况</span>
                </th>
                <td>
                  <div class="radio-list">
                    <p class="radio-item">
                      <input type="radio" id="radiostatus01" name="radiostatus" value="<?php echo sanitize_form_value('正考虑是否预约') ?>" class="validate[required]">
                      <label for="radiostatus01"><i class="ske"></i>正考虑是否预约</label>
                    </p>
                    <p class="radio-item">
                      <input type="radio" id="radiostatus02" name="radiostatus" value="<?php echo sanitize_form_value('已预约') ?>" class="validate[required]">
                      <label for="radiostatus02"><i class="ske"></i>已预约</label>
                    </p>
                    <p class="radio-item">
                      <input type="radio" id="radiostatus03" name="radiostatus" value="<?php echo sanitize_form_value('曾入住过') ?>" class="validate[required]">
                      <label for="radiostatus03"><i class="ske"></i>曾入住过</label>
                    </p>
                    <p class="radio-item">
                      <input type="radio" id="radiostatus04" name="radiostatus" value="<?php echo sanitize_form_value('其他') ?>" class="validate[required]">
                      <label for="radiostatus04"><i class="ske"></i>其他</label>
                    </p>
                  </div>
                </td>
              </tr>
              <tr>
                <th>
                  <em>任意填写</em><span class="head">预约者姓名</span>
                </th>
                <td>
                  <input placeholder="请填写全名" type="text" name="namereser" id="namereser" class="">
                  <p class="txt-hint">※预约者与咨询者的姓名不同时填写。</p>
                </td>
              </tr>
              <tr>
                <th>
                  <em>任意填写</em><span class="head">日程</span>
                </th>
                <td>
                  <input type="text" name="schedule" id="schedule" class="datepicker">
                </td>
              </tr>

              <tr class="is-required">
                <th>
                  <em>必须填写</em><span class="head">咨询内容</span>
                </th>
                <td>
                  <textarea name="content" id="content" class="validate[required]"></textarea>
                </td>
              </tr>
            </table>

            <div class="txtContact02">
              <ul>
                <li>请点击确认隐私条款后，点击“确认，填写内容”按键。</li>
              </ul>
            </div>
            <div class="box-confirm02">
              <p class="check-confirm"><label><input id="check1" type="checkbox" name="check1" value="<?php echo sanitize_form_value('agree') ?>"><span>同意隐私条款</span></label></p>
              <div class="btn-confirm">
                <button id="btnConfirm" class=""><span>确认填写内容</span></button>
                <input type="hidden" name="_csrf" value="<?php echo generate_csrf_token() ?>">
                <input type="hidden" name="actionFlag" value="<?php echo sanitize_form_value('confirm') ?>">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
  <?php include(APP_PATH_CN . 'libs/footer02.php'); ?>
  <?php include(APP_PATH_CN . 'libs/form-scripts.php'); ?>
  <script src="<?php echo APP_ASSETS ?>js/lib/jquery-ui.min.js?v=<?php echo APP_VER ?>"></script>
  <script src="<?php echo APP_ASSETS ?>js/lib/datepicker-ja.min.js?v=<?php echo APP_VER ?>"></script>
  <script>
    $(function() {
      if ($.datepicker.regional["zh-CN"]) {
        $.datepicker.setDefaults($.datepicker.regional["zh-CN"]);
      } else {
        $.datepicker.setDefaults($.datepicker.regional["ja"]);
      }
      var dateToday = new Date();
      if ($(".datepicker").length) {
        $(".datepicker").datepicker({
          dateFormat: 'yy/m/d',
          minDate: dateToday
        });
      }
    });
  </script>
</body>

</html>