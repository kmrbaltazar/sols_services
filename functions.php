<?php
// STYLE LOADING
function styleLoad() {  
    wp_enqueue_style('style', get_stylesheet_uri());    
}
add_action('wp_enqueue_scripts', 'styleLoad');
// NAVIGATION MENU
register_nav_menus(array(
    'primary' => __( 'Primary Menu'),
    'footer' => __( 'Footer Menu'),
    'dropdown' => __( 'Dropdown Menu')  
));
// Custom Post Type Creation
function create_posttype() {
    register_post_type( 'wp_person',
      array(
        'labels' => array(
          'name' => __( 'People' ),
          'singular_name' => __( 'Person' )
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'people'),
      )
    );
  }
  add_action( 'init', 'create_posttype' );
// below line enables 'Featured Images' tab to emerge on dashboard for posts/pages/customposts
add_theme_support( 'post-thumbnails' );