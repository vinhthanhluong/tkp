<?php
include_once(dirname(__DIR__) . '/../../app_config.php');
include_once(dirname(__DIR__) . '/../../wp/wp-load.php');

$page_lang = $lang;
$page_name01 = $curr_url[2];
$page_name02 = $curr_url[3];

if ($page_lang == 'en' && $page_name01 == 'guide' && $page_name02 == 'restaurant') {
  include_once(APP_PATH_EN . 'guide/restaurant/page-restaurant.php');
} else {
  include_once(APP_PATH . '404.php');
}
