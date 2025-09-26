<?php
include_once(dirname(dirname(dirname(__DIR__))) . '/../app_config.php');
include_once(dirname(dirname(dirname(__DIR__))) . '/../wp/wp-load.php');

$page_lang = $lang;
$page_name = $curr_url[4];

if (isset($_GET['fbclid'])) {
  header("Location: /" . $lang . "/guide/ishinoya/" . $page_name . "/");
  exit();
}

if ($page_name == 'rooms') {
  if ($curr_url[5] != "page") {
    $rooms_id = $curr_url[5];
    if (!empty($rooms_id)) {
      $current_id = ltrim($rooms_id, 'p');
    }
  }
}

if ($page_lang == 'ko' && $page_name == 'rooms' && (empty($current_id) || !is_numeric($current_id))) {
  include_once(APP_PATH_KO . 'guide/ishinoya/rooms/archive-rooms.php');
} else if ($page_lang == 'ko' && $page_name == 'rooms' && is_numeric($current_id)) {
  include_once(APP_PATH_KO . 'guide/ishinoya/rooms/single-rooms.php');
} else {
  include_once(APP_PATH . '404.php');
}
