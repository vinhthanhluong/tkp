<?php
include_once(dirname(__DIR__) . '/../app_config.php');
include_once(dirname(__DIR__) . '/../wp/wp-load.php');

$page_lang = $lang;
$page_name = $curr_url[2];

if (isset($_GET['fbclid'])) {
  header("Location: /" . $lang . "/" . $page_name . "/");
  exit();
}

if ($page_name == 'news') {
  if ($curr_url[3] != "page") {
    $news_id = $curr_url[3];
    if (!empty($news_id)) {
      $current_id = ltrim($news_id, 'p');
    }
  }
}

if ($page_lang == 'ko' && $page_name == 'news' && (empty($current_id) || !is_numeric($current_id))) {
  include_once(APP_PATH_KO . 'news/archive-news.php');
} else if ($page_lang == 'ko' && $page_name == 'news' && is_numeric($current_id)) {
  include_once(APP_PATH_KO . 'news/single-news.php');
} else {
  include_once(APP_PATH . '404.php');
}
