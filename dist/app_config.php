<?php
// X-Frame
header("X-Frame-Options: DENY");
// NONCE
// define('APP_NONCE', base64_encode(random_bytes(16)));
// CSP
// To run Browsersync locally, please add the following code to your vhosts config
// MAMP file path:
// /Applications/MAMP/conf/apache/extra/httpd-vhosts.conf
// Code:
// <IfModule mod_headers.c>
//   Header unset Content-Security-Policy
// </IfModule>
// define('APP_CSP', ""
//   . "default-src 'self';"
//   . "base-uri 'self';"
//   . "style-src 'self' 'unsafe-inline' fonts.gstatic.com fonts.googleapis.com *.typekit.net;"
//   . "script-src 'self' 'nonce-" . APP_NONCE . "' 'strict-dynamic' google-analytics.com;"
//   . "img-src 'self' 'unsafe-inline' placehold.jp data: google-analytics.com *.gravatar.com;"
//   . "font-src 'self' fonts.gstatic.com fonts.googleapis.com *.typekit.net data: ;"
//   . "connect-src 'self' google-analytics.com *.typekit.net;"
//   . "object-src 'none';"
//   . "frame-src 'self' data: google-analytics.com *.youtube.com *.google.com;"
//   . "frame-ancestors 'none';"
//   . "form-action 'self';");

if (!defined("ABSPATH")) {
  // date_default_timezone_set('Asia/Ho_Chi_Minh'); // For Vietnam
  date_default_timezone_set('Asia/Tokyo'); // For Japan

  // CSP CONFIG
  // header("Content-Security-Policy:" . APP_CSP);
  // } else {
  // if (!is_admin() && $GLOBALS['pagenow'] != 'wp-login.php') header("Content-Security-Policy:" . APP_CSP);
}

$dist = '';
// get protocol.
$url = $_SERVER['HTTP_HOST'] . '/' . $dist;
$protocol = (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') || !empty($_SERVER["HTTPS"]) ? 'https://' : 'http://';

// Get dist folder.
$script_name = str_replace($_SERVER['QUERY_STRING'], '', $_SERVER['SCRIPT_NAME']);
$script_filename = str_replace(dirname(__FILE__), '', str_replace('private_html', 'public_html', $_SERVER['SCRIPT_FILENAME']));
$dist = trim(str_replace($script_filename, '', $script_name), "/");
if (!empty($dist)) $dist .= '/';
if (strpos($dist, ".php") !== false || strpos($dist, ".html") !== false || strpos($dist, ".htm") !== false) $dist = "";

// get host.
$app_url = $protocol . $_SERVER['HTTP_HOST'] . '/' . $dist;
define('APP_URL', $app_url);
define('APP_URL_EN', $app_url . 'en/');
define('APP_URL_KO', $app_url . 'ko/');
define('APP_URL_ZH', $app_url . 'zh/');
define('APP_VER', '1.0.0');
if (defined('ABSPATH')) {
  define('APP_THEME_URL', get_template_directory_uri() . '/');
  define('APP_PATH', get_template_directory() . '/');
  define('APP_PATH_EN', dirname(__FILE__) . '/en/');
  define('APP_PATH_KO', dirname(__FILE__) . '/ko/');
  define('APP_PATH_ZH', dirname(__FILE__) . '/zh/');
  define('APP_ASSETS', APP_THEME_URL . 'assets/');
} else {
  define('APP_PATH', dirname(__FILE__) . '/wp/wp-content/themes/wp-templ/');
  define('APP_PATH_EN', dirname(__FILE__) . '/en/');
  define('APP_PATH_KO', dirname(__FILE__) . '/ko/');
  define('APP_PATH_ZH', dirname(__FILE__) . '/zh/');
  define('APP_ASSETS', APP_URL . 'wp/wp-content/themes/wp-templ/assets/');
}
define('ENVIRONMENT', 'dev');
define('APP_NOIMG', APP_ASSETS . 'img/common/img_nophoto.jpg');
define('APP_DUMMY_IMG', 'data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==');

define('GOOGLE_MAP_API_KEY', '');
define('GOOGLE_RECAPTCHA_KEY_API', '6LeCL4crAAAAAJF7pUPjnH_yyc8RKD6PZoRGqgDG');
define('GOOGLE_RECAPTCHA_KEY_SECRET', '6LeCL4crAAAAADHYhWxZfHRke7j4Ggj4CBsgbw9k');

define('SMTP_ENABLED', false);
define('SMTP_HOST', "smtp.gmail.com");
define('SMTP_AUTH', true);
define('SMTP_DEBUG', false);
define('SMTP_SECURE', 'tls');
define('SMTP_USERNAME', "");
define('SMTP_PASSWORD', "");
define('SMTP_PORT', 587);

$uri = $_SERVER['REQUEST_URI'];
$curr_url = explode("/", $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
$folder = $curr_url[2];

// Lấy URI hiện tại
$current_url = $_SERVER['REQUEST_URI'];
preg_match("#^/([a-z]{2})/#", $current_url, $matches);
$lang = 'jp';
if (empty($matches[1])) {
  $lang = 'jp';
  $curr_path = substr_replace($uri, '', 0, 1);
}
$supported_languages = ['jp', 'en', 'ko', 'zh'];
if (in_array($matches[1], $supported_languages)) {
  $lang = $matches[1];
  if ($lang == 'en' || $folder == 'en') {
    $curr_path = str_replace(array('/en/'), '', $uri);
  } else if ($lang == 'ko' || $folder == 'ko') {
    $curr_path = str_replace(array('/ko/'), '', $uri);
  } else if ($lang == 'zh' || $folder == 'zh') {
    $curr_path = str_replace(array('/zh/'), '', $uri);
  } else {
    $lang = 'ja';
    $curr_path = substr_replace($uri, '', 0, 1);
  }
}

/* email list for forms */
//contact
$aMailtoContact = array('alivetestmail@alive-web.co.jp');
$aBccToContact = array('');
$fromContact = "tkpresort@tkp.jp";
$fromName = "SHONIN PARK";
$fromName02 = "ISHINOYA 別府";

include(APP_PATH . 'libs/security.php');
