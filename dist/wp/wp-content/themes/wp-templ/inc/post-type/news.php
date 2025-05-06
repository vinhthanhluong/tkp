<?php
add_action('init', 'create_custom_post_type_news', 0);
function create_custom_post_type_news()
{
  register_post_type('news', array(
    'labels'                  => array(
      'name'                  => __('ニュース'),
      'singular_name'         => __('ニュース'),
      'add_new'               => __('新しくニュースを書く'),
      'add_new_item'          => __('ニュース記事を書く'),
      'edit_item'             => __('ニュース記事を編集'),
      'new_item'              => __('新しいニュース記事'),
      'view_item'             => __('ニュース記事を見る'),
      'search_staff'          => __('ニュース記事を探す'),
      'not_found'             => __('ニュース記事はありません'),
      'not_found_in_trash'    => __('ゴミ箱にニュース記事はありません'),
      'parent_item_colon'     => ''

    ),
    'public'                  => true,
    // 'rewrite' => array(
    //     'slug' => 'news',  // This slug should match your URL structure
    //     'with_front' => false,
    // ),
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
add_action('init', 'create_custom_tax_newscat', 0);
function create_custom_tax_newscat()
{
  register_taxonomy('newscat', 'news', array(
    'labels'                  => array(
      'name'                  => __('ニュースカテゴリー'),
      'menu_name'             => __('ニュースカテゴリー'),
      'edit_item'             => __('ニュースカテゴリー記事を編集'),
      'all_items'             => __('ニュースカテゴリー'),
      'parent_item'           => __('親カテゴリー'),
      'add_new_item'          => __('ニュースカテゴリー記事を書く'),
      'search_items'          => __('ニュースカテゴリー'),
      'singular_name'         => __('ニュースカテゴリー'),
      'parent_item_colon'     => __('親カテゴリー:'),
    ),
    'show_ui'                 => true,
    'rewrite'                 => array('slug' => 'newscat'),
    'query_var'               => true,
    'has_archive'             => true,
    'hierarchical'            => true,
    'show_admin_column'       => true,
    // 'show_in_rest'            => true, // For Gutenberg block editor
  ));
}