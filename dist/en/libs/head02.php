<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5L4KRFL6');
  </script>
  <!-- End Google Tag Manager -->
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php
  require_once 'ua.class.php';
  $ua = new UserAgent();
  if ($ua->set() === 'tablet') echo '<meta content="width=1024, shrink-to-fit=no" name="viewport">';
  else echo '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">';
  $current_url = $globalCanonical = 'http' . (!empty($_SERVER['HTTPS']) ? 's' : '') . '://' . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
  include(APP_PATH_EN . 'libs/argument.php');
  include(APP_PATH . 'libs/functions.php'); ?>

  <script src="<?php echo APP_ASSETS ?>js/lib/detector.min.js?v=<?php echo APP_VER ?>"></script>
  <link rel="canonical" href="<?php echo sanitize_form_value($thisCanonical) ?>">

  <title><?php echo $titlepage ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($desPage, ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="keywords" content="<?php echo $keyPage; ?>">

  <!--facebook-->
  <meta property="og:title" content="<?php echo $titlepage ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo sanitize_form_value($current_url); ?>">
  <meta property="og:image" content="<?php echo (!empty($ogimg)) ? $ogimg : APP_ASSETS . 'img/common/other/fb_image02.jpg'; ?>">
  <meta property="og:site_name" content="<?php echo (function_exists('get_bloginfo') && get_bloginfo('name')) ? get_bloginfo('name') : '' ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($desPage, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="fb:app_id" content="">
  <!--/facebook-->

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="<?php echo sanitize_form_value($current_url); ?>">
  <meta name="twitter:title" content="<?php echo $titlepage ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($desPage, ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="twitter:image" content="<?php echo (!empty($ogimg)) ? $ogimg : APP_ASSETS . 'img/common/other/fb_image02.jpg'; ?>">
  <meta name="twitter:site" content="<?php echo (function_exists('get_bloginfo') && get_bloginfo('name')) ? get_bloginfo('name') : '' ?>">
  <meta name="twitter:creator" content="<?php echo (function_exists('get_bloginfo') && get_bloginfo('name')) ? get_bloginfo('name') : '' ?>">
  <!-- /Twitter -->

  <!--css-->
  <link href="<?php echo APP_ASSETS; ?>css/styles.min.css?v=<?php echo APP_VER ?>" rel="stylesheet" media="all">
  <link href="<?php echo APP_ASSETS; ?>css/custom.css?v=<?php echo APP_VER ?>" rel="stylesheet" media="all">
  <!--/css-->

  <link rel="icon" href="<?php echo APP_ASSETS; ?>img/common/favicon.png">

  <?php
  if ($lang == 'en') {
    $href_link_jp = str_replace(APP_URL_EN, APP_URL, $current_url);
    $href_link_en = $current_url;
    $href_link_ko = str_replace(APP_URL_EN, APP_URL_KO, $current_url);
    $href_link_cn = str_replace(APP_URL_EN, APP_URL_CN, $current_url);
  } else if ($lang == 'ko') {
    $href_link_jp = str_replace(APP_URL_KO, APP_URL, $current_url);
    $href_link_en = str_replace(APP_URL_KO, APP_URL_EN, $current_url);
    $href_link_ko = $current_url;
    $href_link_cn = str_replace(APP_URL_KO, APP_URL_CN, $current_url);
  } else if ($lang == 'cn') {
    $href_link_jp = str_replace(APP_URL_CN, APP_URL, $current_url);
    $href_link_en = str_replace(APP_URL_CN, APP_URL_EN, $current_url);
    $href_link_ko = str_replace(APP_URL_CN, APP_URL_KO, $current_url);
    $href_link_cn = $current_url;
  } else {
    $href_link_jp = $current_url;
    $href_link_en = str_replace(APP_URL, APP_URL_EN, $current_url);
    $href_link_ko = str_replace(APP_URL, APP_URL_KO, $current_url);
    $href_link_cn = str_replace(APP_URL, APP_URL_CN, $current_url);
  }
  ?>
  <link rel="alternate" hreflang="ja" href="<?php echo $href_link_jp; ?>">
  <link rel="alternate" hreflang="en" href="<?php echo $href_link_en; ?>">
  <link rel="alternate" hreflang="ko" href="<?php echo $href_link_ko; ?>">
  <link rel="alternate" hreflang="zh" href="<?php echo $href_link_cn; ?>">
  <link rel="alternate" hreflang="x-default" href="<?php echo $href_link_jp; ?>">

  <?php
  // include_once(APP_PATH_EN . 'wp/wp-load.php');
  if (defined('ABSPATH')) wp_head(); ?>