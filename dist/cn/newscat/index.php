<?php
include_once(dirname(__DIR__) . '/../app_config.php');
include_once(dirname(__DIR__) . '/../wp/wp-load.php');

$page_lang = $lang;
$page_name = $curr_url[2];

if ($page_lang == 'cn' && $page_name == 'newscat') {
  include_once(APP_PATH_CN . 'newscat/archive-news.php');
} else {
  include_once(APP_PATH . '404.php');
}
