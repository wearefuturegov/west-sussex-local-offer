<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='utf-8'>
        <meta content='width=device-width, initial-scale=1.0' name='viewport'>
        <title><?php if(is_home()) echo get_bloginfo('name'); else echo get_the_title() . " | " . get_bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

    <header class="site-header">
        <div class="site-header__inner container">
            <a class="site-header__masthead" href="<?php echo get_home_url(); ?>">
                <img src="<?php echo wp_get_attachment_image_url(get_theme_mod('custom_logo'), 'full'); ?>" alt="Local offer"/>
                West Sussex
            </a>

            <div class="site-header__actions">
                <nav class="site-header__menu">
                    <?php 
                        wp_nav_menu( array( 
                            'container' => false,
                            'theme_location' => 'header-menu'
                        ));
                    ?>
                </nav>
                <?php get_search_form(); ?>
            </div>
        </div>
    </header>