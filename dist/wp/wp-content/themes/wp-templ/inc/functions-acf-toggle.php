<?php
// ▼▼▼▼▼ FOR ALL POST TYPE ▼▼▼▼▼
add_action('admin_enqueue_scripts', 'wpc_font_awesome');
function wpc_font_awesome()
{
  wp_enqueue_style('wpc-font-awesome', APP_ASSETS . '/admin/font-awesome.min.css');
}

function wpc_handle_acf_toggle()
{
  $resultJson = array();
  $resultJson['status'] = 0;
  if (!empty($_POST['postID'])) {
    $postID = sanitize_form_value($_POST['postID']);
    $fieldName = sanitize_form_value($_POST['fieldName']);
    $isOn = intVal(sanitize_form_value($_POST['isOn']));
    $isTax = intVal(sanitize_form_value($_POST['isTax']));

    if ($isTax) update_field($fieldName, !$isOn, $postID);
    else update_post_meta($postID, $fieldName, !$isOn);

    $resultJson['status'] = 1;
  }
  die(json_encode($resultJson));
}
add_action('wp_ajax_nopriv_wpc_handle_acf_toggle', 'wpc_handle_acf_toggle');
add_action('wp_ajax_wpc_handle_acf_toggle', 'wpc_handle_acf_toggle');

function wpc_display_toggle_btn($acfField, $postID, $taxName = '')
{
  $isTax = 0;
  if ($taxName) {
    $postID = $taxName . '_' . $postID;
    $isTax = 1;
  }

  $isShowTop = get_field($acfField, $postID);
  if (!$isShowTop) return '<a href="#" class="toggle js-toggle" data-field-name="' . $acfField . '" data-on="0" data-id="' . $postID . '" data-is-tax="' . $isTax . '"><em><span class=""></span></em></a>';
  return '<a href="#" class="toggle js-toggle" data-field-name="' . $acfField . '" data-on="1" data-id="' . $postID . '" data-is-tax="' . $isTax . '"><em><span class="fa fa-check"></em></span></a>';
}
// ▲▲▲▲▲ END FOR ALL POST TYPE ▲▲▲▲▲

// add_action('manage_blog_posts_custom_column', 'wpc_manage_blog_columns', 10, 2);
// function wpc_manage_blog_columns($column, $postID)
// {
//   switch ($column) {
//     case 'blog_is_show_top':
//       echo wpc_display_toggle_btn('blog_is_show_top', $postID);
//       break;

//     default:
//       break;
//   }
// }

// add_filter('manage_edit-blog_columns', 'wpc_edit_blog_columns');
// function wpc_edit_blog_columns($oldColumns)
// {
//   return wpc_insert_item_to_array($oldColumns, 'blog_is_show_top', __('TOGGLE'), -1);
// }
