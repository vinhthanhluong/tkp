<?php
if (session_status() === PHP_SESSION_NONE) session_start();
header("Cache-control: public");
ob_start();
$thisPageName = 'eventSingle';
if (!empty($_POST['actionFlag'])) {
  include_once('single-event-confirm.php');
  exit();
} elseif (!empty(get_query_var('actionFlag'))) {
  if (get_query_var('actionFlag') == 'complete') {
    include_once('single-event-complete.php');
    exit();
  } else header('location: ' . get_the_permalink());
}
include(APP_PATH . 'libs/head.php'); ?>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/lib/validationEngine.jquery.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/form.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/event.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="event" class="event event-single page-single page-form">

  <?php include(APP_PATH . 'libs/header.php'); ?>
  <main id="wrap">

    <div class="inner">
      <h1><?php the_title() ?></h1>

      <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
          <div class="cms-content">
            <?php the_content(); ?>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>

      <form method="post" class="contactform" id="contactform" action="confirm/?g=<?php echo time() ?>" name="contactform" onSubmit="return check()" style="margin-top: 40px;">
        <div class="form-block">

          <picture>
            <source media="(max-width: 999px)" srcset="<?php echo APP_ASSETS ?>img/common/form/img_step01SP.svg" width="345" height="55">
            <img src="<?php echo createSVG(714, 45) ?>" data-src="<?php echo APP_ASSETS; ?>img/common/form/img_step01.svg" rel="js-lazy" width="714" height="45" alt="内容入力" class="step-img">
          </picture>

          <p class="hid_url">Leave this empty: <input type="text" name="url"></p><!-- Anti spam part1: the contact form -->

          <table class="tableContact" cellspacing="0">
            <tr>
              <th><em>【必須】</em>お問い合わせの種類</th>
              <td>
                <select name="sl01" id="sl01" class="validate[required]">
                  <option value=""></option>
                  <option value="selectContent1">selectContent1</option>
                  <option value="selectContent2">selectContent2</option>
                </select>
              </td>
            </tr>
            <tr>
              <th><em>【必須】</em>お名前</th>
              <td><input type="text" name="nameuser" id="nameuser" class="validate[required]"></td>
            </tr>
            <tr>
              <th><em>【必須】</em>性別</th>
              <td>
                <span class="chkradio" id="radioarray01">
                  <input type="radio" id="male" name="gender" value="男性" class="mr10 validate[required]">
                  <label for="male" class="mr50">男性</label>
                  <input type="radio" id="female" name="gender" value="女性" class="mr10 validate[required]">
                  <label for="female">女性</label>
                </span>
              </td>
            </tr>
            <tr>
              <th><em>【必須】</em>Checkbox1</th>
              <td>
                <span class="chkcheckbox" id="checkbox01">
                  <input type="checkbox" name="check01[]" id="check01" value="01" class="validate[required]"><label for="check01" class="mr50">01</label>
                  <input type="checkbox" name="check01[]" id="check02" value="02" class="validate[required]"><label for="check02" class="mr50">02</label>
                  <input type="checkbox" name="check01[]" id="check03" value="03" class="validate[required]"><label for="check03" class="mr50">03</label>
                  <input type="checkbox" name="check01[]" id="check04" value="04" class="validate[required]"><label for="check04" class="mr50">04</label>
                  <input type="checkbox" name="check01[]" id="check05" value="05" class="validate[required]"><label for="check05" class="mr50">05</label>
                </span>
              </td>
            </tr>
            <tr>
              <th>【任意】会社名</th>
              <td><input type="text" name="company" id="company"></td>
            </tr>
            <tr>
              <th>【任意】部署</th>
              <td><input type="text" name="department" id="department"></td>
            </tr>
            <tr>
              <th><em>【必須】</em>お電話番号</th>
              <td>
                <p class="floatL">
                  <input placeholder="例) 000-000-0000" type="tel" name="tel" id="tel" class="validate[required,custom[phone]]">
                </p>
                <p class="floatL ml10">※半角数字でご記入ください。</p>
              </td>
            </tr>
            <tr>
              <th>【任意】おFAX番号</th>
              <td>
                <p class="floatL"><input placeholder="例) 000-000-0000" type="tel" name="fax" id="fax" class="validate[custom[phone]]"></p>
                <p class="floatL ml10">※半角数字でご記入ください。</p>
              </td>
            </tr>
            <tr>
              <th><em>【必須】</em>郵便番号</th>
              <td>
                <div class="clearfix t0b10">
                  <div class="dIB">〒</div>
                  <div class="dIB size01">
                    <input type="text" placeholder="例) 000-0000" name="zipcode" id="zipcode" onKeyUp="AjaxZip3.zip2addr(this,'address','address','address')" class="validate[required,custom[zipcode]]">
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th><em>【必須】</em>住所</th>
              <td class="clearfix">
                <div class="clearfix mt10">
                  <p class="floatL"><input placeholder="例) ○○○○3F" type="text" name="address" id="address" class="validate[required]"></p>
                  <p class="floatL ml10">建物名など</p>
                </div>
              </td>
            </tr>
            <tr>
              <th><em>【必須】</em>メールアドレス</th>
              <td>
                <p><input placeholder="例) xxxxx@sample.co.jp" type="email" name="email" id="email" class="validate[required,custom[email]]"></p>
                <p class="mt10"><input placeholder="例) xxxxx@sample.co.jp" type="email" name="cemail" id="cemail" value="" class="validate[equals[email]]"></p>
              </td>
            </tr>
            <tr>
              <th><span>【任意】</span>連絡希望の時間帯</th>
              <td><input type="text" name="time" id="time"></td>
            </tr>
            <tr>
              <th><em>【必須】</em>お問い合わせ内容</th>
              <td><textarea name="content" id="content" class="validate[required]"></textarea></td>
            </tr>
          </table>

          <div class="txtContact01">
            <p class="t0b10">【個人情報の取扱いについて】</p>
            <ul class="t0b20">
              <li>・本フォームからお客様が記入・登録された個人情報は、資料送付・電子メール送信・電話連絡などの目的で利用・保管し、第三者に開示・提供することはありません。</li>
            </ul>
          </div>
          <div class="taC">
            <p><label><input type="checkbox" name="check1" value="<?php echo sanitize_form_value('agree') ?>"><span class="fz14"> 個人情報の取扱いに同意する</span></label></p>
            <p class="t30b20">
              <button id="btnConfirm"><span>入力内容を確認する</span></button>
              <input type="hidden" name="_csrf" value="<?php echo generate_csrf_token() ?>">
              <input type="hidden" name="actionFlag" value="<?php echo sanitize_form_value('confirm') ?>">
            </p>
          </div>
          <p class="taC t30b0 txtContact01">上記フォームで送信できない場合は、必要項目をご記入の上、<br class="pc"><a id="mailContact" href="#"></a>までメールをお送りください。</p><!-- Anti spam part2: clickable email address -->
        </div>
      </form>
    </div>
  </main>
  <!-- HEADER -->
  <?php include(APP_PATH . 'libs/footer.php'); ?>
  <?php include(APP_PATH . 'libs/form-scripts.php'); ?>
</body>

</html>