<?php
//adding css and js files
function wp_Setup() {
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab');
  wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.1.0/css/all.css');
  wp_enqueue_style('style', get_stylesheet_uri(), Null, microtime(), 'all');
  wp_enqueue_script('main', get_theme_file_uri('/js/main.js', NULL, microtime(), true));
};

//this function executes fn above
add_action('wp_enqueue_scripts', 'wp_Setup');

//Adding theme Support
function wp_init() {
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('html5', 
    array('comment-list', 'comment-form', 'search-form')
);

};

add_action('after_setup_theme', 'wp_init');

//Project Post Types
function wp_custom_post_type() {
  register_post_type('project',
    array(
      'rewrite' => array('slug' => 'projects'),
      'labels' => array(
        'singular_name' => 'projects',
        'add_new_item' => 'Add New Proj',
        'edit_item' => 'Edit Project'
      ),
      'menu-icon' => 'dashicons-clipboard',
      'public' => true,
      'has_archive' => true,
      'supports' => array(
        'title', 'thumbnail', 'editor', 'comments', 'excerpt'
      )
    )
  );
}

add_action('init', 'wp_custom_post_type')

?>
