<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
        <script src="<?php bloginfo('template_url'); ?>/scripts.js" defer></script>
    </head>
    
<body <?php body_class(); ?>>
    <div class="body-container">
        <header>
            <a href="<?php echo home_url(); ?>" class="logo"> 
                <div class="logo-container">
                    <img src="<?php bloginfo('template_url'); ?>/Assets/sols-services-logo-v2.png" alt="Sol's Services Logo">
                </div>
                <h2 class="site-title"><?php bloginfo('name'); ?></h2>
            </a>
            <nav class="header-menu button">
                <?php
                    $argument = array( 'theme_location' => 'primary' );
                    wp_nav_menu( $argument );
                ?>
            </nav>
        </header>
        
        <div class="page-content">