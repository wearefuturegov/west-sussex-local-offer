<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset='<?php bloginfo( 'charset' ); ?>'>
        <meta content='width=device-width, initial-scale=1.0' name='viewport'>
        <title><?php wp_title("|", true, "right"); ?><?php echo get_bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>
    <body  <?php ws_body_class(''); ?>>


    <?php get_template_part( 'template-parts/header-above', null); ?>

    <header class="site-header">
        <div class="site-header__inner container">
            <?php get_template_part( 'template-parts/logo', null); ?>
            <div class="site-header__actions">
                <button class="site-header__menu-toggle" aria-expanded="false">Menu</button>
                <nav class="site-header__menu">
                    <?php 
                        wp_nav_menu( array( 
                            'container' => false,
                            'theme_location' => 'header-menu',
                            'depth' => 1,
                            'fallback_cb' => false
                        ));
                    ?>
                </nav>
                <?php get_search_form(); ?>
            </div>
        </div>
    </header>

    <?php get_template_part( 'template-parts/header-below', null); ?>