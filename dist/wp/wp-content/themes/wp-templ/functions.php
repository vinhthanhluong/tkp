<?php
// below constant should be defined into wp-config.php file.
// define('WP_POST_REVISIONS', 10);
// define('AUTOSAVE_INTERVAL', 300);

if (!defined('APP_URL')) include_once(dirname(ABSPATH) . "/app_config.php");
include_once(APP_PATH . 'inc/post-type-init.php');
// include_once(APP_PATH . 'top_news_ajax.php');

add_action("wp_ajax_search_ajax", "search_ajax");
add_action("wp_ajax_nopriv_search_ajax", "search_ajax");

function search_ajax()
{
  if (!empty($_GET['newscat'])) {
    $news_cat_id = $_GET['newscat'];
  }
  $args_news = array(
    'post_type'           => 'news',
    'order'               => 'DESC',
    'orderby'             => 'post_date',
    'posts_status'        => 'publish',
    'posts_per_page'      => 6,
  );
  if (!empty($news_cat_id)) {
    $args_news['tax_query'] = array(
      array(
        'taxonomy' => 'newscat',
        'field'    => 'term_id',
        'terms'    => $news_cat_id,
      )
    );
  }
  $query_news = new WP_Query($args_news);
  if ($query_news->have_posts()) {
    $delay = 0;
    $html = '';
    while ($query_news->have_posts()) {
      $delay   = $delay + 200;
      $query_news->the_post();
      $n_id    = $post->ID;
      $n_url   = get_the_permalink($n_id);
      $n_ttl   = get_the_title($n_id);
      $n_date  = get_the_date('Y.m.d');
      $n_terms = get_the_terms($n_id, 'newscat');
      $n_thumb = get_the_post_thumbnail_url($n_id);
      $n_photo = (!empty($n_thumb)) ? $n_thumb : APP_NOIMG;
      $n_photo_class = $n_photo == APP_NOIMG ? "c-nophoto" : "";
      $html = $html . '
      <li class="c-lstpost01__item aos-init" data-aos="fade-up" data-aos-delay="' . $delay . '">
        <a class="lstpost01-link" href="' . $n_url . '">
          <div class="lstpost01-ctn01">
            <div class="lstpost01-img ' . $n_photo_class . '">
              <img src="' . $n_photo . '" width="345" height="250" alt="">
            </div>';
      if (!empty($n_terms)) {
        $html_cat = '';
        foreach ($n_terms as $nterm) {
          $cat_name = $nterm->name;
          $cat_class = $cat_name == "お知らせ" ? "is-blue" : "is-yellow";
          $html_cat .= '<span class="item ' . $cat_class . '">' . $cat_name . '</span>';
        }
        $html .= '<p class="cate">' . $html_cat . '</p>';
      }
      $html .= '</div>
          <div class="lstpost01-ctn02">
            <p class="date">' . $n_date . '</p>
            <p class="ttl">' . $n_ttl . '</p>
          </div>
        </a>
      </li>';
    }
  }
  wp_send_json_success($html);
  die();
}


// FOR ONCA PROJECTS
// ▼▼▼▼▼ START ONCA DELETE CODE ▼▼▼▼▼
define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', true);
remove_action('load-update-core.php', 'wp_update_plugins');
add_filter('pre_site_transient_update_core', 'remove_core_updates');
add_filter('pre_site_transient_update_plugins', 'remove_core_updates');
add_filter('pre_site_transient_update_themes', 'remove_core_updates');
function remove_core_updates()
{
  global $wp_version;
  return (object) array('last_checked' => time(), 'version_checked' => $wp_version,);
}
include_once(APP_PATH . 'inc/functions-meta-fields.php');
// ▲▲▲▲▲ END ONCA DELETE CODE ▲▲▲▲▲

// ▼▼▼▼▼ Disable Gutenberg ▼▼▼▼▼
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);
// ▲▲▲▲▲ Disable Gutenberg ▲▲▲▲▲

add_filter('wp_sitemaps_enabled', '__return_false');
add_filter('wp_lazy_loading_enabled', '__return_false');
add_filter('automatic_updater_disabled', '__return_true');
add_filter('auto_update_core', '__return_false');
add_filter('auto_update_plugin', '__return_false');
add_filter('xmlrpc_enabled', '__return_false');
add_filter('wp_img_tag_add_auto_sizes', '__return_false');
remove_action('wp_head', 'rsd_link');

add_action('init', 'disable_wp_head_default');
function disable_wp_head_default()
{
  // all actions related to emojis
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
  remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
  remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
  remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
  remove_action('wp_head', 'index_rel_link'); // index link
  remove_action('wp_head', 'parent_post_rel_link', 10, 0); // prev link
  remove_action('wp_head', 'start_post_rel_link', 10, 0); // start link
  remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
  remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
  remove_action('wp_head', 'wp_resource_hints', 2);
  remove_action('wp_head', 'rest_output_link_wp_head');
  remove_action('wp_head', 'wp_shortlink_wp_head'); // remove linkn rel shortlink
  remove_action('wp_head', 'rel_canonical'); // remove canonical in single
  add_filter('show_admin_bar', '__return_false');
}

add_action('pre_ping', 'disable_self_trackback');
function disable_self_trackback(&$links)
{
  foreach ($links as $l => $link)
    if (0 === strpos($link, get_option('home')))
      unset($links[$l]);
}

add_action('admin_menu', 'custom_remove_menu_pages');
function custom_remove_menu_pages()
{
  remove_menu_page('edit-comments.php');
  remove_menu_page('edit.php');
  // remove_menu_page('edit.php?post_type=page');
}

//login logo
add_action('login_head', 'custom_login_logo');
function custom_login_logo()
{
  echo '<style type="text/css">h1 a { background: url(' . APP_ASSETS . 'img/common/logo.svg) center/contain no-repeat !important; width:100% !important;}</style>';
}

// Remove "Thank you for creating with WordPress"
add_filter('admin_footer_text', 'remove_footer_admin');
function remove_footer_admin()
{
  return '';
}

// Update CSS within in Admin
add_action('admin_enqueue_scripts', 'wpc_admin_enqueue');
function wpc_admin_enqueue()
{
  wp_enqueue_style('admin-styles', APP_ASSETS . 'admin/admin.css?v=' . APP_VER);
  wp_enqueue_script('my_custom_script', APP_ASSETS . 'admin/admin.js?v=' . APP_VER);
}

// link for logo
add_filter('login_headerurl', 'new_wp_login_url');
function new_wp_login_url()
{
  return home_url();
}

// title for logo
add_filter('login_headertext', 'wpc_wp_logo_title');
function wpc_wp_logo_title()
{
  return get_option('blogname');
}

// Theme support
add_theme_support('post-thumbnails');

// Images size
add_action('init', 'set_default_image_size');
function set_default_image_size()
{
  update_option('thumbnail_size_w', 300);
  update_option('thumbnail_size_h', 300);
  update_option('thumbnail_crop', 0);
  update_option('medium_size_w', 750);
  update_option('medium_size_h', 750);
}

// paging
function my_option_posts_per_page()
{
  return 0;
}
function my_modify_posts_per_page()
{
  add_filter('option_posts_per_page', 'my_option_posts_per_page');
}
add_action('init', 'my_modify_posts_per_page', 0);

// for rewrite - this is alway at bottom of page
add_filter('post_type_link', 'wpc_custom_blog_permalink', 1, 3);
function wpc_custom_blog_permalink($post_link, $id = 0, $leavename)
{
  if (strpos('%post_id%', $post_link) === 'FALSE') {
    return $post_link;
  }
  $post = get_post($id);
  if (is_wp_error($post)) {
    return $post_link;
  }
  $post_type = get_post_type_object($post->post_type);
  if ($post_type->rewrite) return home_url($post_type->rewrite['slug'] . '/p' . $post->ID . '/');
  return $post_link;
}

add_action('init', 'add_rewrites_init');
function add_rewrites_init()
{
  global $wp_rewrite;
  $postTypeObjList =  get_post_types(array('_builtin' => false), 'object');
  foreach ($postTypeObjList as $object) {
    $postType = $object->name;
    if ($object->rewrite) {
      $postTypeSlug = $object->rewrite['slug'];
      $singleFile = get_template_directory() . "/single-" . $postType . ".php";
      $archiveFile = get_template_directory() . "/archive-" . $postType . ".php";
      if (@file_exists($singleFile)) {
        // If single file is existed, add rewrite rule
        add_rewrite_rule($postTypeSlug . '/p([0-9]+)?$', 'index.php?post_type=' . $postType . '&p=$matches[1]', 'top');
        add_rewrite_rule($postTypeSlug . '/p([0-9]+)?/confirm/?', 'index.php?post_type=' . $postType . '&p=$matches[1]&actionFlag=confirm', 'top');
        add_rewrite_rule($postTypeSlug . '/p([0-9]+)?/complete/?', 'index.php?post_type=' . $postType . '&p=$matches[1]&actionFlag=complete', 'top');
        add_rewrite_rule($postTypeSlug . '/p([0-9]+)?/([0-9]+)/?', 'index.php?post_type=' . $postType . '&p=$matches[1]&page=$matches[2]', 'top');
      }
      if (@file_exists($archiveFile)) {
        // If archive file is existed, add rewrite rule
        add_rewrite_rule($postTypeSlug . '/([0-9]{4})/([0-9]{1,2})/?$', 'index.php?post_type=' . $postType . '&year=$matches[1]&monthnum=$matches[2]', 'top');
        add_rewrite_rule($postTypeSlug . '/([0-9]{4})/([0-9]{1,2})/page/([0-9]{1,})/?$', 'index.php?post_type=' . $postType . '&year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]', 'top');
      }
    }
  }
  $wp_rewrite->flush_rules(false);
}
//end for rewrite - this is alway at bottom of page

// Remove Attachment URL
add_action('parse_request', 'custom_remove_attachment_url');
function custom_remove_attachment_url($wp)
{
  if (array_key_exists('attachment', $wp->query_vars)) {
    unset($wp->query_vars['attachment']);
    status_header(404);
    include(get_404_template());
    exit();
  }
}

add_filter('query_vars', 'custom_query_vars_filter');
function custom_query_vars_filter($vars)
{
  $vars[] .= 'actionFlag';
  return $vars;
}

// Keep taxonomy hierarchical
add_filter('wp_terms_checklist_args', 'wpc_keep_taxonomy_hierarchical', 10, 2);
function wpc_keep_taxonomy_hierarchical($args, $idPost)
{
  $args['checked_ontop'] = false;
  return $args;
}

// get url
function getUrlParts()
{
  $current_url = $_SERVER['REQUEST_URI'];
  return explode('/', trim($current_url, '/'));
}

function redirectLang()
{
  $url_parts = getUrlParts();

  $lang = isset($url_parts[0]) ? $url_parts[0] : '';
  $path1 = isset($url_parts[1]) ? $url_parts[1] : '';
  $path2 = isset($url_parts[2]) ? $url_parts[2] : '';

  if ($lang != 'vi' && ($path1 == 'wine-dine' || $path1 == 'wellness-spa' || $path1 == 'about-us' || $path1 == 'privacy-policy') && !empty($path2)) {
    redirect404();
  }
}

function redirect404()
{
  global $wp_query;
  $wp_query->set_404();
  status_header(404);
  get_template_part(404);
  exit();
}

redirectLang();

// remove unneeded files
add_action('wp_enqueue_scripts', 'wpc_remove_core_libs', 100);
function wpc_remove_core_libs()
{
  wp_dequeue_style('wp-block-library'); // Disable Gutenberg
  wp_dequeue_style('wp-block-library-theme'); // Disable Gutenberg

  // pagenavi
  wp_dequeue_style('wp-pagenavi');
  wp_deregister_style('wp-pagenavi');

  if (!is_admin()) {
    // css
    wp_dequeue_style('classic-theme-styles');
    wp_deregister_style('classic-theme-styles');
    wp_dequeue_style('global-styles');
    wp_deregister_style('global-styles');
  }
}

// DUPLICATED PAGING REDIRECT
function wpc_redirect_pagenum()
{
  global $wp;
  if (preg_match('/\/page([0-9]{1,})\/?/i', $wp->request, $matches)) {
    $postType = get_query_var('post_type');
    $postTypeObj = get_post_type_object($postType);
    if ($postTypeObj->rewrite) $urlSlug = $postTypeObj->rewrite['slug'] . '/';
    if (is_tax()) {
      $currentTerm = get_queried_object_id();
      $urlSlug = str_replace(APP_URL, '', get_term_link($currentTerm));
    }
    $newUrl = APP_URL . $urlSlug . 'page/' . $matches[1] . '/';
    if (wp_redirect($newUrl, 301)) exit;
  }
}
add_action('template_redirect', 'wpc_redirect_pagenum');

// Disable auto redirect with same post_name
remove_action('template_redirect', 'redirect_canonical');

function insertLangInUrl($url, $name, $lang)
{
  if (!empty($lang)) {
    $url = preg_replace('/(\/)(' . $name . '\/)/', '$1' . $lang . '/$2', $url);
  }
  return $url;
}


// add_filter('acf/load_value/key=field_684fb12d3060c',  'acf_load_my_defaults', 10, 3);
// function acf_load_my_defaults($value, $post_id, $field)
// {
//   if ($value === false) {

//     $value = array();

//     $value[] = array(
//       'field_684fb13a3060d' => '定員',
//       'field_684fb19b3060e' => ''
//     );
//     $value[] = array(
//       'field_684fb13a3060d' => '広さ',
//       'field_684fb19b3060e' => ''
//     );

//     return $value;
//   }
// }

add_filter('acf/load_value/key=field_684fb12d3060c',  'acf_load_my_defaults', 10, 3);
function acf_load_my_defaults($value, $post_id, $field)
{
  if ($value === false) {

    $value = array();

    $value[] = array(
      'field_684fb13a3060d' => '定員',
      'field_684fb19b3060e' => ''
    );
    $value[] = array(
      'field_684fb13a3060d' => '広さ',
      'field_684fb19b3060e' => ''
    );
  }

  return $value;
}


// shortcode for news
function ishinoya_news_shortcode($atts) {
    $atts = shortcode_atts(
        array(
            'termid'   => '',
            'posts_per_page'   => '',
        ),
        $atts,
        'ishinoya_news'
    );
    if (empty($atts['termid']) || empty($atts['posts_per_page'])) {
        return '';
    }
    // multi category
    $term_ids = array_map('intval', explode(',', $atts['termid']));
    $posts_per_page = intval($atts['posts_per_page']);

    ob_start();
    $args_news = array(
        'post_type'      => 'news',
        'order'          => 'DESC',
        'orderby'        => 'post_date',
        'post_status'    => 'publish',
        'posts_per_page' => $posts_per_page,
        'tax_query'      => array(
            array(
                'taxonomy' => 'newscat',
                'field'    => 'term_id',
                'terms'    => $term_ids,
            ),
        )
    );
    $query_news = new WP_Query($args_news);
    if ($query_news->have_posts()) { ?>
        <div class="sec-news">
            <section class="c-sec-news" id="news">
                <div class="inner1170">
                    <div class="c-ttl04">
                        <h2 class="c-ttl04__jp">お知らせ</h2>
                        <span class="c-ttl04__en">News</span>
                    </div>
                    <div class="news-content">
                        <div class="news-slider js-slider-news">
                            <div class="swiper-wrapper">
                                <?php
                                while ($query_news->have_posts()) {
                                    $query_news->the_post();
                                    $n_id    = get_the_ID();
                                    $n_url   = get_permalink($n_id);
                                    $n_ttl   = get_the_title($n_id);
                                    $n_date  = get_the_date('Y.m.d');
                                    $n_terms = get_the_terms($n_id, 'newscat');
                                    $n_thumb = get_the_post_thumbnail_url($n_id);
                                    $n_photo = (!empty($n_thumb)) ? $n_thumb : (defined('APP_NOIMG') ? APP_NOIMG : '');
                                    ?>
                                    <div class="swiper-slide">
                                        <a class="news-item" href="<?php echo esc_url($n_url); ?>">
                                            <figure class="news-img c-img <?php echo $n_photo == APP_NOIMG ? "c-nophoto" : ""; ?>">
                                                <img src="<?php echo esc_url($n_photo); ?>" width="260" height="260" alt="<?php echo esc_attr($n_ttl); ?>">
                                            </figure>
                                            <div class="news-head">
                                                <span class="news-time"><?php echo esc_html($n_date); ?></span>
                                                <?php if (!empty($n_terms)) { ?>
                                                    <span class="news-cate">
                                                        <?php
                                                        foreach ($n_terms as $nterm) {
                                                            $cat_name = $nterm->name;
                                                            $cat_class = $cat_name == 'お知らせ' ? 'is-blue' : 'is-yellow';
                                                            ?>
                                                            <span class="item <?php echo esc_attr($cat_class); ?>"><?php echo esc_html($cat_name); ?></span>
                                                        <?php } ?>
                                                    </span>
                                                <?php } ?>
                                            </div>
                                            <h3 class="news-ttl"><?php echo esc_html($n_ttl); ?></h3>
                                        </a>
                                    </div>
                                <?php } wp_reset_postdata(); ?>
                            </div>
                            <div class="swiper-group">
                                <div class="swiper-pagination"></div>
                                <div class="swiper-progress-bar">
                                    <span class="slide-progress-bar"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="c-btn04" href="<?php echo esc_url(get_term_link($term_ids[0], 'newscat')); ?>"><span>もっと見る</span></a>
                </div>
            </section>
        </div>
    <?php }
    return ob_get_clean();
}
add_shortcode('ishinoya_news', 'ishinoya_news_shortcode');

// shortcode shop news
function shop_news_shortcode($atts) {
    $atts = shortcode_atts(
        array(
            'termid'   => '',
            'posts_per_page'   => '',
        ),
        $atts,
        'shop_news_related'
    );
    if (empty($atts['termid']) || empty($atts['posts_per_page'])) {
        return '';
    }
    // Multi category
    $term_ids = array_map('intval', explode(',', $atts['termid']));
    $posts_per_page = intval($atts['posts_per_page']);

    ob_start();
    $args_news = array(
        'post_type'      => 'news',
        'order'          => 'DESC',
        'orderby'        => 'post_date',
        'post_status'    => 'publish',
        'posts_per_page' => $posts_per_page,
        'tax_query'      => array(
            array(
                'taxonomy' => 'newscat',
                'field'    => 'term_id',
                'terms'    => $term_ids,
            ),
        )
    );
    $query_news = new WP_Query($args_news);
    if ($query_news->have_posts()) { ?>
      <section class="c-news-block" rel="js-lazy" data-bgpc="<?php echo APP_ASSETS; ?>img/common/news_bg.jpg" data-bgsp="<?php echo APP_ASSETS; ?>img/common/news_bg_sp.jpg">
        <div class="inner1170">
          <div class="c-ttl02 is-white aos-init" data-aos="fade-up">
            <h2 class="c-ttl02__jp">ニュース</h2>
            <span class="c-ttl02__en">News</span>
          </div>
          <ul class="news-list">
            <?php
            while ($query_news->have_posts()) {
              $query_news->the_post();
              $news_id = $query_news->ID;
              $news_url = get_the_permalink($news_id);
              $news_ttl = get_the_title($news_id);
              $news_date = get_the_date('Y.m.d', $news_id);
              $news_terms = get_the_terms($news_id, 'newscat');
              $news_thumb = get_the_post_thumbnail_url($news_id);
              $news_photo = (!empty($news_thumb)) ? $news_thumb : APP_NOIMG;
            ?>
              <li class="aos-init" data-aos="fade-up">
                <a class="news-item" href="<?php echo $news_url; ?>">
                  <figure class="news-img c-img <?php echo $news_photo == APP_NOIMG ? "c-nophoto" : ""; ?>">
                    <img src="<?php echo createSVG(165, 120); ?>" data-src="<?php echo $news_photo; ?>" rel="js-lazy" width="165" height="120" alt="<?php echo strip_tags($news_ttl); ?>">
                  </figure>
                  <div class="news-info">
                    <?php if (!empty($news_terms) || !empty($news_date)) { ?>
                      <div class="news-head">
                        <?php
                        if (!empty($news_terms)) {
                          foreach ($news_terms as $nterm) {
                            $cat_name = $nterm->name;
                        ?>
                            <p class="news-cate"><?php echo $cat_name; ?></p>
                        <?php }
                        } ?>
                        <?php
                        if (!empty($news_date)) {
                        ?>
                          <p class="news-time"><?php echo $news_date; ?></p>
                        <?php } ?>
                      </div>
                    <?php } ?>
                    <?php if (!empty($news_ttl)) { ?>
                      <h3 class="news-ttl"><?php echo $news_ttl; ?></h3>
                    <?php } ?>
                  </div>
                </a>
              </li>
            <?php } ?>
          </ul>
          <div class="aos-init" data-aos="fade-up">
            <a href="<?php echo get_term_link($term_ids[0], 'newscat'); ?>" class="c-btn01 is-center">
              <i class="arr01"></i>
              <span>もっと見る</span>
              <i class="arr02"></i>
            </a>
          </div>
        </div>
      </section>
    <?php }
    return ob_get_clean();
}
add_shortcode('shop_news_related', 'shop_news_shortcode');
// end shortcode