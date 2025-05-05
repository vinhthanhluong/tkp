<?php
add_action('init', 'create_custom_post_type_blog', 0);
function create_custom_post_type_blog()
{
  register_post_type('blog', array(
    'labels'                  => array(
      'name'                  => __('ブログ'),
      'singular_name'         => __('ブログ'),
      'add_new'               => __('新しくブログを書く'),
      'add_new_item'          => __('ブログ記事を書く'),
      'edit_item'             => __('ブログ記事を編集'),
      'new_item'              => __('新しいブログ記事'),
      'view_item'             => __('ブログ記事を見る'),
      'search_staff'          => __('ブログ記事を探す'),
      'not_found'             => __('ブログ記事はありません'),
      'not_found_in_trash'    => __('ゴミ箱にブログ記事はありません'),
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
add_action('init', 'create_custom_tax_blogcat', 0);
function create_custom_tax_blogcat()
{
  register_taxonomy('blogcat', 'blog', array(
    'labels'                  => array(
      'name'                  => __('ブログカテゴリー'),
      'menu_name'             => __('ブログカテゴリー'),
      'edit_item'             => __('ブログカテゴリー記事を編集'),
      'all_items'             => __('ブログカテゴリー'),
      'parent_item'           => __('親カテゴリー'),
      'add_new_item'          => __('ブログカテゴリー記事を書く'),
      'search_items'          => __('ブログカテゴリー'),
      'singular_name'         => __('ブログカテゴリー'),
      'parent_item_colon'     => __('親カテゴリー:'),
    ),
    'show_ui'                 => true,
    'rewrite'                 => array('slug' => 'blogcat'),
    'query_var'               => true,
    'has_archive'             => true,
    'hierarchical'            => true,
    'show_admin_column'       => true,
    // 'show_in_rest'            => true, // For Gutenberg block editor
  ));
}

// Taxonomy as Tag
add_action('init', 'create_custom_tax_blogtag', 0);
function create_custom_tax_blogtag()
{
  register_taxonomy('blogtag', 'blog', array(
    'labels'                  => array(
      'name'                  => __('ブログタグ'),
      'menu_name'             => __('ブログタグ'),
      'edit_item'             => __('カテゴリ記事を編集'),
      'all_items'             => __('ブログタグ'),
      'parent_item'           => __('親タグ'),
      'add_new_item'          => __('カテゴリ記事を書く'),
      'search_items'          => __('ブログタグ'),
      'singular_name'         => __('ブログタグ'),
      'parent_item_colon'     => __('親タグ:'),
    ),
    'show_ui'                 => true,
    'rewrite'                 => array('slug' => 'blogtag'),
    'query_var'               => true,
    'has_archive'             => true,
    'hierarchical'            => false,
    'show_admin_column'       => true,
    // 'show_in_rest'            => true, // For Gutenberg block editor
  ));
}
