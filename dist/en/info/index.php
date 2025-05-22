<?php
include_once(dirname(__DIR__) . '/../app_config.php');
include_once(dirname(__DIR__) . '/../wp/wp-load.php');

$page_lang = $lang;
$page_name = $curr_url[2];

if ($page_lang == 'en' && $page_name == 'info') {
  include_once(APP_PATH_EN . 'info/page-info.php');
} else {
  include_once(APP_PATH_EN . '404.php');
}
