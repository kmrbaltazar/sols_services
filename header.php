<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>
    
<body <?php body_class(); ?>>
    <div class="body-container">
        <header>
            <h1 class="headerTest">HEADER CONTENT</h1>
            <a href="<?php echo home_url(); ?>"> 
                <h2><?php bloginfo('name'); ?></h2>
            </a>
            <p><?php  bloginfo('description'); ?></p>
            <nav>
                <?php
                    $argument = array( 'theme_location' => 'primary' );
                    wp_nav_menu( $argument );
                ?>
            </nav>
            
            <!-- this is the navbar structure that will emerge from wp php code that will generate the menu            
            <nav>
                <ul>
                    <li></li>
                    <li></li>
                </ul>
            </nav> 
            -->
        </header>
        
        <div class="page-content">