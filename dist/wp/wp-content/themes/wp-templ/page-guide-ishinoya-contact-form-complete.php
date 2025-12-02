<?php

/**
 * Template Name: Page GUIDE ISHINOYA CONTACT FORM COMPLETE
 **/
include_once(APP_PATH . 'page-guide-ishinoya-contact-form-confirm.php');
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
  $mailFromName = $fromName02;
  $subject_admin = "ホームページからお問い合わせがありました";
  $subject_user = "お問い合わせありがとうございました";
  $email_head_ctm_admin = "ホームページからお問い合わせがありました。";
  $email_head_ctm_user = "この度はお問い合わせいただきまして誠にありがとうございます。
こちらは自動返信メールとなっております。
弊社にて確認した後、改めてご連絡させていただきます。

以下、お問い合わせ内容となっております。
ご確認くださいませ。";
  $email_body_footer = "
ISHINOYA 別府
https://www.shoninpark.jp/guide/ishinoya/
〒874-0023 大分県別府市上人ケ浜町795-1
TEL 0977-75-6363（代表番号）
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

■ご予約状況
$reg_radiostatus
";

  if (isset($reg_namereser) && $reg_namereser != '') $msgBody .= "
■ご予約者様のお名前
$reg_namereser
";

  if (isset($reg_schedule) && $reg_schedule != '') $msgBody .= "
■日程
$reg_schedule
";

  $msgBody .= "
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
  try {
    $allow_send_email = 1;
    // Anti spam advanced version 3 start: Verify by google invisible reCaptcha
    if (defined('GOOGLE_RECAPTCHA_KEY_SECRET') && GOOGLE_RECAPTCHA_KEY_SECRET != '') {
      $response = $_POST['g-recaptcha-response'];
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, "secret=" . GOOGLE_RECAPTCHA_KEY_SECRET . "&response={$response}");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $returnJson = json_decode(curl_exec($ch));
      curl_close($ch);
      if (!empty($returnJson->success) && $returnJson->score > 0.4) {
      } else throw new Exception('Protect by Google Invisible Recaptcha');
    }

    // Anti spam advanced version 3 start: Verify by google invisible reCaptcha
    if (empty($_SESSION['ses_from_step2'])) throw new Exception('Step confirm must be display');

    // check spam mail by gtime
    $gtime_step2 = $_GET['g'];
    // submit form dosen't have g
    if (!$gtime_step2) {
      throw new Exception('Miss g request');
    } else {
      $cur_time = time();
      if (strlen($cur_time) != strlen($gtime_step2)) {
        throw new Exception('G request\'s not a time');
      } elseif ($_SESSION['ses_gtime_step2'] == $gtime_step2 && ($cur_time - $gtime_step2 < 1)) {
        throw new Exception('Checking confirm too fast');
      }
    }

    // Anti spam advanced version 2 start: Don't send blank emails
    if (empty($reg_name) || empty($reg_email)) {
      throw new Exception('Miss reg_name or reg_email');
    }

    // Anti spam advanced version 1 start: The preg_match() is there to make sure spammers can’t abuse your server by injecting extra fields (such as CC and BCC) into the header.
    if (preg_match("/[\r\n]/", $reg_email)) {
      throw new Exception('Email\'s not correct');
    }

    // Anti spam: the contact form start
    if ($reg_url != "") {
      throw new Exception('Url request must be empty');
    }

    // Anti spam: check session complete contact
    if (!isset($_SESSION['ses_step3'])) $_SESSION['ses_step3'] = false;
    if ($_SESSION['ses_step3']) {
      throw new Exception('Session step 3 must be destroy');
    }
  } catch (Exception $e) {
    $returnE = '<pre>';
    $returnE .= $e->getMessage() . '<br>';
    $returnE .= 'File: ' . $e->getFile() . ' at line ' . $e->getLine();
    $returnE .= '</pre>';
    $allow_send_email = 0;
    die($returnE);
  }
  // ▲ ▲ ▲ END Detect SPAMMER ▼ ▼ ▼ //


  if ($allow_send_email) {
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

    $email->DKIM_domain = 'tkp.jp';
    $email->DKIM_selector = 'tkpselector';
    $email->DKIM_private_string = '-----BEGIN RSA PRIVATE KEY-----
MIIEpAIBAAKCAQEAl6qYRgTbswci1799HYxMqMJStGsvEjPuhgqk058gpJ13IgB8
5ThkzkY0cQcNskbcspxDKoiI3KkM6joEtGYQKFO584ez7k5AdFUXIS0FM+fjNEDS
64wEQv9TlsefOyZdaIImeSA/MbxEexRGNilqoQwgnib7rfsl4XxKCAclu6Y3mELq
PSKjZSeT3wc+TqQVFrgqNF9UJNT/PiC/5Yf2rq/jBdbtjorv4rPDsTpMGiaxgeGH
Oo2saNL4MFIjTF9wJIuwx/OpxEXzR6x2tZc6kFHNaiQfO54H8ObyHGrfWQYK07vp
GFPVT6DyQ0p1mvPGuUjY53iYDikexQMEs2G82wIDAQABAoIBAEby9Rz8NNKBKhmH
aL4j3dCsZwgjg/ed950Y6ZZdwGWBjDOJyuNoCDA+w1WEmTGm2KNtWjZRfMTNCE+i
KIVDoZdb44c7Gj8GuDwzegh5CRAJEE5nbMPn0i6NRssoQyLmhZfYGqtbHHTlv5tc
FqRLp6gDBlc1oVL4Q/ZBsFglD8/B7z+C72ju27uGqI52FNvq/PXKaIdIoGTvYxlg
HkxkGamzMKKfMDtfqR7Bd9gRKr64863dL+8GuvND/CcBR44oGZ58zmSsJwbYbVev
bFi22m020NuyWpWbQ3mPTjS7tPCLhRNoMMOAhq4ES8oZji8DMyfSFwtoETX1fM1q
PUGkqdECgYEA0ywaBsekAXfvpdMonThyow4wq3+jpF63tLomhQnlI1TNsTrPADeG
HM0NRUUf/6Q8/4wcQV94AzB86Fj8j5pnr4B2GtBbW+GRCtYHV/DJzQ5h9PEcXsJJ
T4in+dvaV/EyBkkuDfIcBKpdtvalsc4WvbA2V1qO/E4PyAh888n4cJcCgYEAt9y3
/H5xngyHRcwnA6tDDpfBxs3XQvmA13odNAXzkknCtiUlzASaePL9/6/hj4wCjwQb
5j6QLNXyTHjQnt9Yd1rVO187nqPmsLJ4LeGmkrttB+5S1ZmqBE2z24s/1eDm7Pxo
HJ4ITQrGqklowg8EzCdwmv1Davfn4fW7ACmKml0CgYEAmK0/F/3JdwJW8waLS7if
MYK175i2IMYWfgVEilWQJI5QtT22ogqC3VnnqViD/RmqvHx5hU5X/75T4M1NtSnG
o132hgZ0tyaL7lC2OH+v96DZc/XLNDu2M1mzUPQCliidqWvJb23Hkhv266zCOZ6u
VHENqPShgouR32c7qCszg3sCgYBcJgUYSQ8MlV7evnj3P8h18d0ulE/Ew2Otmwgz
4J+4u7sYqvmMjOoWoEJo+W9lEFjf8MFC3ixILFoptYtpdKrT9vRTs2EgGykteeT9
qdBgTgtRJELjxwYM7hysddfii7txHvfXD+U9J592DSCx0fEnmMS5CSHW5LSU7SFx
7WAICQKBgQCiCH+dYIE/HRnRHfmCNb86WfII+k9RSzH//l7Hmdt5w8IG8W48LXmY
+sZGhWVX+p7mmhRwj42qSU2NLLEmXHJ60mp10pXA/Fry6VjR6wZFXc4seKLlUJli
BfxvW+ysOWwPTCv+Hq1S1fGfdTw0tpS+5P5MJviHt8SK9DhciQILhg==
-----END RSA PRIVATE KEY-----';
    $email->DKIM_identity = $email->From;

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

    $email->DKIM_domain = 'tkp.jp';
    $email->DKIM_selector = 'tkpselector';
    $email->DKIM_private_string = '-----BEGIN RSA PRIVATE KEY-----
MIIEpAIBAAKCAQEAl6qYRgTbswci1799HYxMqMJStGsvEjPuhgqk058gpJ13IgB8
5ThkzkY0cQcNskbcspxDKoiI3KkM6joEtGYQKFO584ez7k5AdFUXIS0FM+fjNEDS
64wEQv9TlsefOyZdaIImeSA/MbxEexRGNilqoQwgnib7rfsl4XxKCAclu6Y3mELq
PSKjZSeT3wc+TqQVFrgqNF9UJNT/PiC/5Yf2rq/jBdbtjorv4rPDsTpMGiaxgeGH
Oo2saNL4MFIjTF9wJIuwx/OpxEXzR6x2tZc6kFHNaiQfO54H8ObyHGrfWQYK07vp
GFPVT6DyQ0p1mvPGuUjY53iYDikexQMEs2G82wIDAQABAoIBAEby9Rz8NNKBKhmH
aL4j3dCsZwgjg/ed950Y6ZZdwGWBjDOJyuNoCDA+w1WEmTGm2KNtWjZRfMTNCE+i
KIVDoZdb44c7Gj8GuDwzegh5CRAJEE5nbMPn0i6NRssoQyLmhZfYGqtbHHTlv5tc
FqRLp6gDBlc1oVL4Q/ZBsFglD8/B7z+C72ju27uGqI52FNvq/PXKaIdIoGTvYxlg
HkxkGamzMKKfMDtfqR7Bd9gRKr64863dL+8GuvND/CcBR44oGZ58zmSsJwbYbVev
bFi22m020NuyWpWbQ3mPTjS7tPCLhRNoMMOAhq4ES8oZji8DMyfSFwtoETX1fM1q
PUGkqdECgYEA0ywaBsekAXfvpdMonThyow4wq3+jpF63tLomhQnlI1TNsTrPADeG
HM0NRUUf/6Q8/4wcQV94AzB86Fj8j5pnr4B2GtBbW+GRCtYHV/DJzQ5h9PEcXsJJ
T4in+dvaV/EyBkkuDfIcBKpdtvalsc4WvbA2V1qO/E4PyAh888n4cJcCgYEAt9y3
/H5xngyHRcwnA6tDDpfBxs3XQvmA13odNAXzkknCtiUlzASaePL9/6/hj4wCjwQb
5j6QLNXyTHjQnt9Yd1rVO187nqPmsLJ4LeGmkrttB+5S1ZmqBE2z24s/1eDm7Pxo
HJ4ITQrGqklowg8EzCdwmv1Davfn4fW7ACmKml0CgYEAmK0/F/3JdwJW8waLS7if
MYK175i2IMYWfgVEilWQJI5QtT22ogqC3VnnqViD/RmqvHx5hU5X/75T4M1NtSnG
o132hgZ0tyaL7lC2OH+v96DZc/XLNDu2M1mzUPQCliidqWvJb23Hkhv266zCOZ6u
VHENqPShgouR32c7qCszg3sCgYBcJgUYSQ8MlV7evnj3P8h18d0ulE/Ew2Otmwgz
4J+4u7sYqvmMjOoWoEJo+W9lEFjf8MFC3ixILFoptYtpdKrT9vRTs2EgGykteeT9
qdBgTgtRJELjxwYM7hysddfii7txHvfXD+U9J592DSCx0fEnmMS5CSHW5LSU7SFx
7WAICQKBgQCiCH+dYIE/HRnRHfmCNb86WfII+k9RSzH//l7Hmdt5w8IG8W48LXmY
+sZGhWVX+p7mmhRwj42qSU2NLLEmXHJ60mp10pXA/Fry6VjR6wZFXc4seKLlUJli
BfxvW+ysOWwPTCv+Hq1S1fGfdTw0tpS+5P5MJviHt8SK9DhciQILhg==
-----END RSA PRIVATE KEY-----';
    $email->DKIM_identity = $email->From;

    if ($email->send()) {
      /*Do you want to debug something?*/
    }

    $_SESSION['ses_step3'] = true;
  }

  $_SESSION['statusFlag'] = 1;
  header("Location: " . APP_URL . "guide/ishinoya/contact/form/complete/");
  exit;
}

if (!empty($_SESSION['statusFlag'])) unset($_SESSION['statusFlag']);
else header('location: ' . APP_URL);

$thisPageName = 'ishinoya-form';
include(APP_PATH . "libs/head02.php");

echo '<pre style="background:#222;color:#31cfb3;padding:10px;position:relative;z-index:9999999;border:0;font-size:12px;margin:10px;overflow-x:scroll;white-space:pre-wrap;">';
print_r($gtime_step2);
echo '</pre>';

unset($_SESSION['ses_gtime_step2']);
unset($_SESSION['ses_from_step2']);
unset($_SESSION['ses_step3']);
?>
<meta http-equiv="refresh" content="15; url=<?php echo APP_URL ?>guide/ishinoya/">
<script type="text/javascript">
  history.pushState({
    page: 1
  }, "title 1", "#noback");
  window.onhashchange = function(event) {
    window.location.hash = "#noback";
  };
</script>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/form.min.css?v=<?php echo APP_VER ?>">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/ishinoya_form.min.css?v=<?php echo APP_VER ?>">
</head>

<body id="ishinoya-form" class="ishinoya-form page-form form-thanks">
  <?php include(APP_PATH . "libs/header02.php") ?>
  <main id="wrap02">
    <div class="sec-formcomplete">
      <div class="inner1170">
        <div class="c-breadcrumb aos-init" data-aos="fade-up">
          <ul>
            <li><a href="<?php echo APP_URL; ?>">TOP</a></li>
            <li><a href="<?php echo APP_URL; ?>guide/">施設案内</a></li>
            <li><a href="<?php echo APP_URL; ?>guide/ishinoya/">ISHINOYA 別府 / 石のや 別府</a></li>
            <li><a href="<?php echo APP_URL; ?>guide/ishinoya/contact/">お問い合わせ</a></li>
            <li><a href="<?php echo APP_URL; ?>guide/ishinoya/contact/form/">個人のお客様</a></li>
            <li>内容確認</li>
            <li>完了</li>
          </ul>
        </div>
        <div class="form-step">
          <img class="pc" src="<?php echo createSVG(518, 150) ?>" data-src="<?php echo APP_ASSETS; ?>img/ishinoya/contact/form/img_step03.png" rel="js-lazy" width="518" height="150" alt="送信完了">
          <img class="sp" src="<?php echo createSVG(327, 95) ?>" data-src="<?php echo APP_ASSETS; ?>img/ishinoya/contact/form/img_step03_sp.png" rel="js-lazy" width="327" height="95" alt="送信完了">
        </div>
        <div class="form-inner">
          <div class="thanks-main">
            <h1 class="thanks-main__ttl"><strong>お問い合わせありがとう<br class="sp">ございました</strong></h1>
            <p class="thanks-main__txt">ご入力頂いたメールアドレス宛へ、ご確認メー<br class="sp">ルをお送りしておりますのでご確認ください。<br class="pc">内容を確認次第、担当者より折り返しご連絡さ<br class="sp">せていただきます。</p>
            <p class="thanks-main__txt02">※しばらく経ってもメールが届かない場合は、<br class="sp">入力頂いたメールアドレスの誤り、<br class="pc">システムの不具 <br class="sp">合、迷惑メールフォルダに振り分けられている可能性<br class="sp">がございます。<br>その際にはお手数ですがもう一度フォームよりお問い<br class="sp">合わせ頂くか、<br class="pc">お電話にてお問い合わせください。</p>
            <a class="thanks-main__back02" href="<?php echo APP_URL; ?>guide/ishinoya/"><span>ISHINOYA 別府 TOP</span></a>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include(APP_PATH . 'libs/footer02.php') ?>
</body>

</html>