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
  include(APP_PATH_CN . 'libs/argument.php');
  include(APP_PATH . 'libs/functions.php'); ?>

  <script src="<?php echo APP_ASSETS ?>js/lib/detector.min.js?v=<?php echo APP_VER ?>"></script>
  <link rel="canonical" href="<?php echo sanitize_form_value($thisCanonical) ?>">

  <title><?php echo $titlepage ?></title>
  <meta name="description" content="<?php echo $desPage; ?>">
  <meta name="keywords" content="<?php echo $keyPage; ?>">

  <!--facebook-->
  <meta property="og:title" content="<?php echo $titlepage ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo sanitize_form_value($current_url); ?>">
  <meta property="og:image" content="<?php echo (!empty($ogimg)) ? $ogimg : APP_ASSETS . 'img/common/other/fb_image.jpg'; ?>">
  <meta property="og:site_name" content="<?php echo (function_exists('get_bloginfo') && get_bloginfo('name')) ? get_bloginfo('name') : '' ?>">
  <meta property="og:description" content="<?php echo $desPage; ?>">
  <meta property="fb:app_id" content="">
  <!--/facebook-->

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="<?php echo sanitize_form_value($current_url); ?>">
  <meta name="twitter:title" content="<?php echo $titlepage ?>">
  <meta name="twitter:description" content="<?php echo $desPage; ?>">
  <meta name="twitter:image" content="<?php echo (!empty($ogimg)) ? $ogimg : APP_ASSETS . 'img/common/other/fb_image.jpg'; ?>">
  <meta name="twitter:site" content="<?php echo (function_exists('get_bloginfo') && get_bloginfo('name')) ? get_bloginfo('name') : '' ?>">
  <meta name="twitter:creator" content="<?php echo (function_exists('get_bloginfo') && get_bloginfo('name')) ? get_bloginfo('name') : '' ?>">
  <!-- /Twitter -->

  <!--css-->
  <link href="<?php echo APP_ASSETS; ?>css/styles.min.css?v=<?php echo APP_VER ?>" rel="stylesheet" media="all">
  <link href="<?php echo APP_ASSETS; ?>css/custom.css?v=<?php echo APP_VER ?>" rel="stylesheet" media="all">
  <!--/css-->

  <link rel="icon" href="<?php echo APP_ASSETS; ?>img/common/favicon.png">

  <?php
  // include_once(APP_PATH_CN . 'wp/wp-load.php');
  if (defined('ABSPATH')) wp_head(); ?>