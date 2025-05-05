<?php
if (!function_exists('generate_csrf_token')) {
  function generate_csrf_token()
  {
    $token = bin2hex(random_bytes(32));
    $_SESSION['_csrf'] = $token;
    return $token;
  }
}

if (!function_exists('verify_csrf_token')) {
  function verify_csrf_token($token)
  {
    if (!isset($_SESSION['_csrf']) || $_SESSION['_csrf'] !== $token) return false;
    unset($_SESSION['_csrf']);
    return true;
  }
}

if (!function_exists('sanitize_form_value')) {
  function sanitize_form_value($value)
  {
    if (is_array($value)) return array_map('sanitize_form_value', $value);
    else return mb_trim(htmlspecialchars($value, ENT_QUOTES, 'UTF-8'));
  }
}

if (!function_exists('mb_trim')) {
  function mb_trim($str)
  {
    return preg_replace("/(^\s+)|(\s+$)/u", "", $str);
  }
}
