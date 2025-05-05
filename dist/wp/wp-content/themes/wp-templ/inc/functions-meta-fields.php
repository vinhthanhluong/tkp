<?php
if (function_exists('acf_add_local_field_group')) :
  add_action('init', 'wpc_template_meta_fields', 100);
  function wpc_template_meta_fields()
  {
    $postTypeList = get_post_types(array('_builtin' => false));
    if ($postTypeList) {
      $locationList = array();
      foreach ($postTypeList as $postType) {
        if (strpos($postType, 'acf-') !== false) continue;
        $locationList[] = array(
          array(
            'param' => 'post_type',
            'operator' => '==',
            'value' => $postType,
          )
        );
      }
      acf_add_local_field_group(array(
        'key' => 'template_meta_fields',
        'title' => 'メタ',
        'style' => 'seamless',
        'location' => $locationList,
        'fields' => array(
          array(
            'key' => 'field_tp_meta_title',
            'label' => 'タイトル',
            'name' => 'tp_meta_title',
            'type' => 'text',
          ),
          array(
            'key' => 'field_tp_meta_desc',
            'label' => 'ディスクリプション',
            'name' => 'tp_meta_desc',
            'type' => 'text',
          )
        ),
      ));
    }
  }
endif;
