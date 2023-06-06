<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
        <script src="<?php bloginfo('template_url'); ?>/scripts.js" defer></script>
        <script src="https://kit.fontawesome.com/71542bc9b3.js" crossorigin="anonymous"></script>
    </head>
    
<body <?php body_class(); ?>>
    <div class="body-container">
        <header>
            <a href="<?php echo home_url(); ?>" class="logo"> 
                <div class="logo-container">
                    <img src="<?php bloginfo('template_url'); ?>/Assets/original-logo.png" alt="Sol's Services Logo">
                </div>
                <h2 class="site-title"><?php bloginfo('name'); ?></h2>
            </a>
            <nav class="header-menu button" id="mobile-menu">
                <?php
                    $argument = array( 'theme_location' => 'primary' );
                    wp_nav_menu( $argument );
                ?>
            </nav>
            <a class="toggle-nav" href="#" id="burger-icon">&#9776;</a>
        </header>
        
        <div class="page-content">