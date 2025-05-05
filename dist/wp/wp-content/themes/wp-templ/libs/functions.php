<?php
if (!function_exists('createSVG')) {
  function createSVG($w = "", $h = "")
  {
    if (is_numeric($w) && is_numeric($h) && $w > 0 && $h > 0) {
      $enc = base64_encode('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 ' . $w . ' ' . $h . '"></svg>');
      return 'data:image/svg+xml;base64,' . $enc;
    }
  }
}

if (!function_exists('handle_canonical')) {
  function handle_canonical($rawUrl, $validParams = array('paged', 'pages', 'page', 's'))
  {
    $hasParam = strpos($rawUrl, '?');
    if ($hasParam && count($validParams) > 1) {
      $regexPattern = '/(?:' . implode('=|', $validParams) . '=)/i';
      $hasExceptedParams = preg_match($regexPattern, $rawUrl);
      if (!$hasExceptedParams) $rawUrl = substr($rawUrl, 0, $hasParam);
    }
    if (substr($rawUrl, -1) != '/') $rawUrl .= '/';
    if ((isset($hasExceptedParams) && $hasExceptedParams) || preg_match('/(\.php\/)/i', $rawUrl)) $rawUrl = rtrim($rawUrl, "/");
    return $rawUrl;
  }
}
$thisCanonical = (isset($thisCanonical) && $thisCanonical) ? $thisCanonical : handle_canonical($globalCanonical);
// Canonical check for SEO
