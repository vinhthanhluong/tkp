<?php
add_action('init', 'create_custom_post_type_rooms', 0);
function create_custom_post_type_rooms()
{
  register_post_type('rooms', array(
    'labels'                  => array(
      'name'                  => __('お部屋'),
      'singular_name'         => __('お部屋'),
      'add_new'               => __('新しくお部屋を書く'),
      'add_new_item'          => __('お部屋記事を書く'),
      'edit_item'             => __('お部屋記事を編集'),
      'new_item'              => __('新しいお部屋記事'),
      'view_item'             => __('お部屋記事を見る'),
      'search_staff'          => __('お部屋記事を探す'),
      'not_found'             => __('お部屋記事はありません'),
      'not_found_in_trash'    => __('ゴミ箱にお部屋記事はありません'),
      'parent_item_colon'     => ''

    ),
    'public'                  => true,
    'rewrite'                 => array('slug' => 'guide/ishinoya/rooms',),
    'show_ui'                 => true,
    'supports'                => array('title', 'editor', 'thumbnail', 'revisions'),
    'query_var'               => true,
    'menu_icon'               => 'dashicons-welcome-write-blog',
    'has_archive'             => true,
    'hierarchical'            => false,
    'menu_position'           => 5,
    'capability_type'         => 'post',
    // 'map_meta_cap'            => true, // For role permission
    'show_in_admin_bar'       => true,
    'publicly_queryable'      => true,
    // 'show_in_rest'            => true, // For Gutenberg block editor
  ));
}
