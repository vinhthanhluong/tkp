<?php
add_action('init', 'create_custom_post_type_gallery', 0);
function create_custom_post_type_gallery()
{
  register_post_type('gallery', array(
    'labels'                  => array(
      'name'                  => __('ギャラリー'),
      'singular_name'         => __('ギャラリー'),
      'add_new'               => __('新しくギャラリーを書く'),
      'add_new_item'          => __('ギャラリー記事を書く'),
      'edit_item'             => __('ギャラリー記事を編集'),
      'new_item'              => __('新しいギャラリー記事'),
      'view_item'             => __('ギャラリー記事を見る'),
      'search_staff'          => __('ギャラリー記事を探す'),
      'not_found'             => __('ギャラリー記事はありません'),
      'not_found_in_trash'    => __('ゴミ箱にギャラリー記事はありません'),
      'parent_item_colon'     => ''
    ),
    'public'                  => true,
    'rewrite' => array(
      'slug' => 'guide/ishinoya/gallery',
      'with_front' => false
    ),
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
add_action('init', 'create_custom_tax_gallerycat', 0);
function create_custom_tax_gallerycat()
{
  register_taxonomy('gallerycat', 'gallery', array(
    'labels'                  => array(
      'name'                  => __('ギャラリーカテゴリー'),
      'menu_name'             => __('ギャラリーカテゴリー'),
      'edit_item'             => __('ギャラリーカテゴリー記事を編集'),
      'all_items'             => __('ギャラリーカテゴリー'),
      'parent_item'           => __('親カテゴリー'),
      'add_new_item'          => __('ギャラリーカテゴリー記事を書く'),
      'search_items'          => __('ギャラリーカテゴリー'),
      'singular_name'         => __('ギャラリーカテゴリー'),
      'parent_item_colon'     => __('親カテゴリー:'),
    ),
    'show_ui'                 => true,
    'rewrite'                 => array('slug' => 'guide/ishinoya/gallery/category'),
    'query_var'               => true,
    'has_archive'             => true,
    'hierarchical'            => true,
    'show_admin_column'       => true,
    // 'show_in_rest'            => true, // For Gutenberg block editor
  ));
}