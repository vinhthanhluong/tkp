<?php
// COMMON FUNCTIONS
function get_first_image($cnt, $noimg = true)
{
  $first_img = '';
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/Ui', $cnt, $matches);
  if (!empty($matches) && !empty($matches[1])) {
    for ($i = 0; $i <= 10; $i++) {
      $first_img = $matches[1][$i];
      $ext = substr($first_img, strrpos($first_img, '.') + 1);
      if (($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg' || $ext == 'bmp' || $ext == 'webp' || $ext == 'gif' || $ext == 'svg') && strpos($first_img, 'file://') === false) return $first_img;
    }
  }
  if ((empty($first_img) || $first_img == "") && $noimg) $first_img = APP_NOIMG;
  elseif (empty($noimg)) return false;
  return $first_img;
}
function get_post_image($postObj = null, $size = 'medium')
{
  global $post;
  if (!empty($postObj)) $post = $postObj;
  $image = wp_get_attachment_image_src(get_post_thumbnail_id(), $size);
  $image_content = get_first_image($post->post_content);
  $img_url = !empty($image) ? $image[0] : $image_content;
  return $img_url;
}

function cutString($str, $len, $moreStr = "...")
{
  $mystr = "";
  $str = strip_tags($str);
  $str = preg_replace('/\r\n|\n|\r|[[\/\!]*?[^\[\]]*?]|si/', '', $str);
  if (mb_strlen($str) > $len) {
    $newstr = mb_substr($str, 0, $len);
    $mystr = $newstr . $moreStr;
  } else $mystr = $str;
  return $mystr;
}

function curPageURL()
{
  $pageURL = 'http';
  if (!empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") $pageURL .= "s";
  $pageURL .= "://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
  return $pageURL;
}
$current_url = curPageURL();

function get_curl($url)
{
  if (function_exists('curl_init')) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    $output = curl_exec($ch);
    echo curl_error($ch);
    curl_close($ch);
    return $output;
  } else return file_get_contents($url);
}

// FIX MISSED SCHEDULE
add_action('wp_head', 'wpc_publish_scheduled_posts');
function wpc_publish_scheduled_posts()
{
  if (is_front_page() || is_single()) {
    global $wpdb;
    $now = gmdate('Y-m-d H:i:00');
    $postTypeList = get_post_types(array(
      'public'                => true,
      'exclude_from_search'   => false,
      '_builtin'              => false
    ), 'names', 'and');
    $postTypeSQLStr = implode('\',\'', $postTypeList);

    if ($postTypeSQLStr) $sqlStr = "SELECT ID FROM $wpdb->posts WHERE post_type IN ('post','page','$postTypeSQLStr') AND post_status='future' AND post_date_gmt<'$now'";
    else $sqlStr = "SELECT ID FROM $wpdb->posts WHERE post_type IN ('post','page') AND post_status='future' AND post_date_gmt<'$now'";

    $reqsultList = $wpdb->get_results($sqlStr);
    if ($reqsultList) foreach ($reqsultList as $postItem) wp_publish_post($postItem->ID);
  }
}
// END COMMON FUNCTIONS

// POST TYPE ARCHIVE
function wp_post_type_archive($options)
{
  global $wpdb;

  $postType     = (!empty($options['post_type']))         ? $options['post_type']         : 'post';
  $homeUrl      = (!empty($options['home_url']))          ? $options['home_url']          : '';
  $isByYear     = (!empty($options['is_year_archive']))   ? $options['is_year_archive']   : false;
  $hasCount     = (!empty($options['have_count']))        ? $options['have_count']        : false;
  $monthPadding = (!empty($options['add_zero_in_month'])) ? $options['add_zero_in_month'] : false;
  $countPadding = (!empty($options['add_zero_in_count'])) ? $options['add_zero_in_count'] : false;

  if ($homeUrl == "") $homeUrl  = home_url("/");
  $html = '';
  $txtCount = "";
  $posttype = get_post_type_object($postType);
  $slug = $posttype->rewrite['slug'];
  $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date)
    FROM $wpdb->posts WHERE post_status = 'publish'
    AND post_type = '{$postType}' ORDER BY post_date DESC");

  foreach ($years as $year) :
    if ($hasCount) {
      $count = $wpdb->get_col("SELECT COUNT(*) countpost
        FROM $wpdb->posts WHERE post_status = 'publish'
        AND post_type = '{$postType}' and YEAR(post_date) = '" . $year . "'");
      $txtCount = (!empty($countPadding)) ? '(' . sprintf("%02d", $count[0]) . ')' : '(' . $count[0] . ')';
    }

    if ($isByYear) {
      $html .= '<li id="year' . $year . '"><a href="' . $homeUrl . $slug . "/" . $year . '/' . '">' . $year . '年 ' . $txtCount . '</a></li>';
    } else {
      $html .= '<li id="year' . $year . '"><p class="dropdown">' . $year . '年 ' . $txtCount . '</p><ul class="sub">';
      $months = $wpdb->get_col("SELECT DISTINCT MONTH(post_date)
        FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = '{$postType}'
        AND YEAR(post_date) = '" . $year . "' ORDER BY post_date DESC");
      foreach ($months as $month) :
        if ($hasCount) {
          $count = $wpdb->get_col("SELECT COUNT(*) countpost
            FROM $wpdb->posts WHERE post_status = 'publish'
            AND post_type = '{$postType}' and YEAR(post_date) = '" . $year . "' and MONTH(post_date) = '" . $month . "'");
          $txtCount = (!empty($countPadding)) ? '(' . sprintf("%02d", $count[0]) . ')' : '(' . $count[0] . ')';
        }
        $txtMonth = (!empty($monthPadding)) ? sprintf("%02d", $month) : $month;
        $html .= '<li><a href="' . $homeUrl . $slug . "/" . $year . '/' . $month . '/">' . $txtMonth . '月 ' . $txtCount . '</a></li>';
      endforeach;
      $html .= '</ul></li>';
    }
  endforeach;
  return $html;
}

// INSERT ITEM TO EXISTED ARRAY AT SPECIFIC POSITION
// $position:
// positive value = index number from the start of the array
// negative value = index number from the end of the array
function wpc_insert_item_to_array($array, $key, $value, $position)
{
  $result = array();
  $index = 0;
  if ($position >= 0) {
    foreach ($array as $existingKey => $existingValue) {
      if ($index === $position)  $result[$key] = $value;
      $result[$existingKey] = $existingValue;
      $index++;
    }
    if ($position >= count($array))  $result[$key] = $value;
  } else {
    $position = abs($position);
    $arrayCount = count($array);
    foreach ($array as $existingKey => $existingValue) {
      if ($index === $arrayCount - $position) $result[$key] = $value;
      $result[$existingKey] = $existingValue;
      $index++;
    }
    if ($position > $arrayCount) $result[$key] = $value;
  }
  return $result;
}

// hooks your functions into the correct filters
function wdm_add_mce_button() {
  // check user permissions
  if ( !current_user_can( 'edit_posts' ) &&  !current_user_can( 'edit_pages' ) ) {
    return;
  }
 // check if WYSIWYG is enabled
  if ( 'true' == get_user_option( 'rich_editing' ) ) {
    add_filter( 'mce_external_plugins', 'wdm_add_tinymce_plugin' );
    add_filter( 'mce_buttons', 'wdm_register_mce_button' );
  }
}
add_action('admin_head', 'wdm_add_mce_button');
add_filter( 'acf/fields/wysiwyg/toolbars' , 'wdm_add_mce_button'  );

// register new button in the editor
function wdm_register_mce_button( $buttons ) {
  array_push( $buttons, 'wdm_mce_button' );
  return $buttons;
}
function wdm_add_tinymce_plugin( $plugin_array ) {
$plugin_array['wdm_mce_button'] = get_stylesheet_directory_uri() .'/tiny_mce/common.js';
return $plugin_array;
}

/* Template directory */
add_shortcode('tmpurl', 'shortcode_tmpurl');
function shortcode_tmpurl() {
   return APP_ASSETS;
}

/* Site directory */
add_shortcode('siteurl', 'shortcode_siteurl');
function shortcode_siteurl() {
	return get_bloginfo('url');
}