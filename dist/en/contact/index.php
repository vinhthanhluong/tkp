<?php
include_once(dirname(__DIR__) . '/../app_config.php');
include_once(dirname(__DIR__) . '/../wp/wp-load.php');

$page_lang = $lang;
$page_name01 = $curr_url[2];
$page_name02 = $curr_url[3];


if ($page_lang == 'en' && $page_name01 == 'contact' && $page_name02 != 'confirm' && $page_name02 != 'complete') {
  include_once(APP_PATH_EN . 'contact/page-contact.php');
} else if ($page_lang == 'en' && $page_name01 == 'contact' && $page_name02 == 'confirm') {
  include_once(APP_PATH_EN . 'contact/page-contact-confirm.php');
} else if ($page_lang == 'en' && $page_name01 == 'contact' && $page_name02 == 'complete') {
  include_once(APP_PATH_EN . 'contact/page-contact-complete.php');
} else {
  include_once(APP_PATH . '404.php');
}
