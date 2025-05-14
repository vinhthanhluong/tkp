<?php
/**
 * Template Name: Page CONTACT COMPLETE
**/

include_once(APP_PATH . 'page-contact-confirm.php');
require_once(APP_PATH . "libs/form/phpmailer/PHPMailer.php");
require_once(APP_PATH . "libs/form/phpmailer/SMTP.php");
require_once(APP_PATH . "libs/form/phpmailer/Exception.php");

if ($actionFlag == 'send') {
  // Fix WEBP Express "Alter HTML: URL"
  $normalizedInput = html_entity_decode($reg_content, ENT_QUOTES | ENT_HTML5, 'UTF-8');
  $reg_content = preg_replace('/<br\s*\/?>\s*|\n/i', "\n", $normalizedInput);

  $aMailto = $aMailtoContact;
  $aBccTo = isset($aBccToContact) && count($aBccToContact) > 0 ? $aBccToContact : array('');
  $from = $fromContact;
  $mailFromName = $fromName;
  $subject_admin = "ホームページからお問い合わせがありました";
  $subject_user = "お問い合わせありがとうございました";
  $email_head_ctm_admin = "ホームページからお問い合わせがありました。";
  $email_head_ctm_user = "この度はお問い合わせいただきまして誠にありがとうございます。
こちらは自動返信メールとなっております。
弊社にて確認した後、改めてご連絡させていただきます。

以下、お問い合わせ内容となっております。
ご確認くださいませ。";
  $email_body_footer = "
    About company
  ";

  $entry_time = gmdate("Y/m/d H:i:s", time() + 9 * 3600);
  $entry_host = gethostbyaddr(getenv("REMOTE_ADDR"));
  $entry_ua = getenv("HTTP_USER_AGENT");

  $msgBody = "■お名前
$reg_name

■フリガナ
$reg_namekata

■メールアドレス
$reg_email

■お電話番号
$reg_tel

■お問い合わせ内容
$reg_content";


  //お問い合わせメッセージ送信
  $body_admin = "
登録日時：$entry_time
ホスト名：$entry_host
ブラウザ：$entry_ua

$email_head_ctm_admin

$msgBody

---------------------------------------------------------------
" . $email_body_footer . "
---------------------------------------------------------------";

  //お客様用メッセージ
  $body_user = "
$reg_name 様

$email_head_ctm_user

---------------------------------------------------------------

$msgBody

---------------------------------------------------------------
" . $email_body_footer . "
---------------------------------------------------------------";

  // ▼ ▼ ▼ START Detect SPAMMER ▼ ▼ ▼ //
  // try {
  //   $allow_send_email = 1;
  //   // Anti spam advanced version 3 start: Verify by google invisible reCaptcha
  //   if (defined('GOOGLE_RECAPTCHA_KEY_SECRET') && GOOGLE_RECAPTCHA_KEY_SECRET != '') {
  //     $response = $_POST['g-recaptcha-response'];
  //     $ch = curl_init();
  //     curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
  //     curl_setopt($ch, CURLOPT_POST, 1);
  //     curl_setopt($ch, CURLOPT_POSTFIELDS, "secret=" . GOOGLE_RECAPTCHA_KEY_SECRET . "&response={$response}");
  //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  //     $returnJson = json_decode(curl_exec($ch));
  //     curl_close($ch);
  //     if (!empty($returnJson->success) && $returnJson->score > 0.4) {
  //     } else throw new Exception('Protect by Google Invisible Recaptcha');
  //   }

  //   // Anti spam advanced version 3 start: Verify by google invisible reCaptcha
  //   if (empty($_SESSION['ses_from_step2'])) throw new Exception('Step confirm must be display');

  //   // check spam mail by gtime
  //   $gtime_step2 = $_GET['g'];
  //   // submit form dosen't have g
  //   if (!$gtime_step2) {
  //     throw new Exception('Miss g request');
  //   } else {
  //     $cur_time = time();
  //     if (strlen($cur_time) != strlen($gtime_step2)) {
  //       throw new Exception('G request\'s not a time');
  //     } elseif ($_SESSION['ses_gtime_step2'] == $gtime_step2 && ($cur_time - $gtime_step2 < 1)) {
  //       throw new Exception('Checking confirm too fast');
  //     }
  //   }

  //   // Anti spam advanced version 2 start: Don't send blank emails
  //   if (empty($reg_name) || empty($reg_email)) {
  //     throw new Exception('Miss reg_name or reg_email');
  //   }

  //   // Anti spam advanced version 1 start: The preg_match() is there to make sure spammers can’t abuse your server by injecting extra fields (such as CC and BCC) into the header.
  //   if (preg_match("/[\r\n]/", $reg_email)) {
  //     throw new Exception('Email\'s not correct');
  //   }

  //   // Anti spam: the contact form start
  //   if ($reg_url != "") {
  //     throw new Exception('Url request must be empty');
  //   }

  //   // Anti spam: check session complete contact
  //   if (!isset($_SESSION['ses_step3'])) $_SESSION['ses_step3'] = false;
  //   if ($_SESSION['ses_step3']) {
  //     throw new Exception('Session step 3 must be destroy');
  //   }
  // } catch (Exception $e) {
  //   $returnE = '<pre>';
  //   $returnE .= $e->getMessage() . '<br>';
  //   $returnE .= 'File: ' . $e->getFile() . ' at line ' . $e->getLine();
  //   $returnE .= '</pre>';
  //   $allow_send_email = 0;
  //   die($returnE);
  // }
  // ▲ ▲ ▲ END Detect SPAMMER ▼ ▼ ▼ //


  // if ($allow_send_email) {
    //////// お客様受け取りメール送信
    $email = new PHPMailer\PHPMailer\PHPmailer();

    //////// send mail via SMTP
    if (defined('SMTP_ENABLED') && SMTP_ENABLED) {
      $email->isSMTP();
      $email->Host = SMTP_HOST;
      $email->SMTPAuth = SMTP_AUTH;
      $email->SMTPDebug = SMTP_DEBUG;
      $email->SMTPSecure = SMTP_SECURE;
      $email->Username = SMTP_USERNAME;
      $email->Password = SMTP_PASSWORD;
      $email->Port = SMTP_PORT;
    }

    // メール送信 USER
    $email->CharSet = 'utf-8';
    $email->setFrom($from, $mailFromName);
    $email->addAddress($reg_email);
    $email->Sender = $from;
    $email->Subject = $subject_user;
    $email->Body = $body_user;

    if ($email->send()) {
      /*Do you want to debug something?*/
    }

    // メール送信 ADMIN
    $email->clearAddresses();
    foreach ($aMailto as $mailAddr) $email->addAddress($mailAddr);
    if ($aBccTo) foreach ($aBccTo as $mailAddr) $email->addBcc($mailAddr);
    if (!empty($reg_email) && !empty($reg_name)) $email->addReplyTo($reg_email, $reg_name);
    $email->Sender = $from;
    $email->Subject = $subject_admin;
    $email->Body = $body_admin;

    if ($email->send()) {
      /*Do you want to debug something?*/
    }

    // $_SESSION['ses_step3'] = true;
  // }

  // $_SESSION['statusFlag'] = 1;
  // header("Location: " . APP_URL . "contact/complete/");
  // exit;
}

// if (!empty($_SESSION['statusFlag'])) unset($_SESSION['statusFlag']);
// else header('location: ' . APP_URL);

$thisPageName = 'contact';
include(APP_PATH . "libs/head.php");

unset($_SESSION['ses_gtime_step2']);
unset($_SESSION['ses_from_step2']);
unset($_SESSION['ses_step3']);
?>
<meta http-equiv="refresh" content="15; url=<?php echo APP_URL ?>">
<script type="text/javascript">
  history.pushState({
    page: 1
  }, "title 1", "#noback");
  window.onhashchange = function(event) {
    window.location.hash = "#noback";
  };
</script>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/form.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/contact.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="contact" class="contact page-form form-thanks">
  <?php include(APP_PATH . "libs/header.php") ?>
  <main id="wrap">
    <div class="c-breadcrumb aos-init" data-aos="fade-up">
      <ul>
        <li><a href="<?php echo APP_URL; ?>">TOP</a></li>
        <li>お問い合わせ</li>
        <li>内容確認</li>
        <li>完了</li>
      </ul>
    </div>
    <div class="sec-form c-bg-wave01">
      <div class="img-step">
        <img class="pc" src="<?php echo createSVG(520, 140) ?>" data-src="<?php echo APP_ASSETS; ?>img/contact/img_step03.png" rel="js-lazy" width="520" height="140" alt="送信完了">
        <img class="sp" src="<?php echo createSVG(327, 88) ?>" data-src="<?php echo APP_ASSETS; ?>img/contact/img_step03_sp.png" rel="js-lazy" width="327" height="88" alt="送信完了">
      </div>
      <div class="thanks-main">
        <p class="thanks-main__ttl"><strong>お問い合わせありがとう<br class="sp">ございました</strong></p>
        <p class="thanks-main__txt">ご入力頂いたメールアドレス宛へ、ご確認<br class="sp">メールをお送りしておりますのでご確認ください。<br class="pc">内容を確認次第、担当者より折り返しご<br class="sp">連絡させていただきます。<br><br>※しばらく経ってもメールが届かない場合は、<br class="sp">入力頂いたメールアドレスの誤り、<br class="pc">システムの不具合、迷惑メールフォルダに振り分けられている可能性がございます。<br>その際にはお手数ですがもう一度フォームよりお問い合わせ頂くか、<br class="pc">お電話にてお問い合わ<br class="sp">せください。</p>
        <a class="thanks-main__back c-btn02" href="<?php echo APP_URL; ?>"><span>Back to top</span></a>
      </div>
    </div>
    
  </main>
  <?php include(APP_PATH . 'libs/footer.php') ?>
</body>

</html>