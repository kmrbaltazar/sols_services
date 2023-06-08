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




