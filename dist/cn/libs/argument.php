<?php
$pagename = str_replace(array('/', '.php'), '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$pagename = $pagename ? $pagename : 'default';
$pagename = (isset($thisPageName)) ? $thisPageName : $pagename;

switch ($pagename) {
  case '':
    if (empty($titlepage)) $titlepage = 'About us title';
    if (empty($desPage)) $desPage = '';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  case '404':
    if (empty($titlepage)) $titlepage = '404エラー（Not Found）';
    if (empty($desPage)) $desPage = '';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
    break;
  default:
    if (empty($titlepage)) $titlepage = 'Default';
    if (empty($desPage)) $desPage = '';
    if (empty($keyPage)) $keyPage = '';
    if (empty($txtH1)) $txtH1 = '';
}

if (defined("ABSPATH")) {
  // IN WP
  if (is_singular()) {
    // ALL SINGLE
    $titlepage = get_field('tp_meta_title') ? get_field('tp_meta_title') : get_the_title();
    $desCnt = mb_substr(preg_replace('/\r\n|\n|\r?\[.*\]/', '', strip_tags($post->post_content)), 0, 120);
    $desPage = get_field('tp_meta_desc') ? get_field('tp_meta_desc') : $desCnt;
  }
}
