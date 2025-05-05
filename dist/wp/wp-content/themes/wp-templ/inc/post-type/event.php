<?php
add_action('init', 'create_custom_post_type_event', 0);
function create_custom_post_type_event()
{
  register_post_type('event', array(
    'labels'                  => array(
      'name'                  => __('イベント'),
      'singular_name'         => __('イベント'),
      'add_new'               => __('新しくイベントを書く'),
      'add_new_item'          => __('イベント記事を書く'),
      'edit_item'             => __('イベント記事を編集'),
      'new_item'              => __('新しいイベント記事'),
      'view_item'             => __('イベント記事を見る'),
      'search_staff'          => __('イベント記事を探す'),
      'not_found'             => __('イベント記事はありません'),
      'not_found_in_trash'    => __('ゴミ箱にイベント記事はありません'),
      'parent_item_colon'     => ''

    ),
    'public'                  => true,
    'rewrite'                 => true,
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

// Taxonomy as Category
add_action('init', 'create_custom_tax_eventcat', 0);
function create_custom_tax_eventcat()
{
  register_taxonomy('eventcat', 'event', array(
    'labels'                  => array(
      'name'                  => __('イベントカテゴリー'),
      'menu_name'             => __('イベントカテゴリー'),
      'edit_item'             => __('イベントカテゴリー記事を編集'),
      'all_items'             => __('イベントカテゴリー'),
      'parent_item'           => __('親カテゴリー'),
      'add_new_item'          => __('イベントカテゴリー記事を書く'),
      'search_items'          => __('イベントカテゴリー'),
      'singular_name'         => __('イベントカテゴリー'),
      'parent_item_colon'     => __('親カテゴリー:'),
    ),
    'show_ui'                 => true,
    'rewrite'                 => array('slug' => 'eventcat'),
    'query_var'               => true,
    'has_archive'             => true,
    'hierarchical'            => true,
    'show_admin_column'       => true,
    // 'show_in_rest'            => true, // For Gutenberg block editor
  ));
}

// Taxonomy as Tag
add_action('init', 'create_custom_tax_eventtag', 0);
function create_custom_tax_eventtag()
{
  register_taxonomy('eventtag', 'event', array(
    'labels'                  => array(
      'name'                  => __('イベントタグ'),
      'menu_name'             => __('イベントタグ'),
      'edit_item'             => __('カテゴリ記事を編集'),
      'all_items'             => __('イベントタグ'),
      'parent_item'           => __('親タグ'),
      'add_new_item'          => __('カテゴリ記事を書く'),
      'search_items'          => __('イベントタグ'),
      'singular_name'         => __('イベントタグ'),
      'parent_item_colon'     => __('親タグ:'),
    ),
    'show_ui'                 => true,
    'rewrite'                 => array('slug' => 'eventtag'),
    'query_var'               => true,
    'has_archive'             => true,
    'hierarchical'            => false,
    'show_admin_column'       => true,
    // 'show_in_rest'            => true, // For Gutenberg block editor
  ));
}
