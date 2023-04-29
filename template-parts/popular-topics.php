
<?php
/**
 * Template part for displaying the site logo
 *
 * @link https://developer.wordpress.org/reference/functions/get_template_part/
 *
 * @package ws
 */

?>

<section class="trails">
    <h2 class="visually-hidden">Popular topics</h2>

    <?php 
        wp_nav_menu( array( 
            'container' => false,
            'theme_location' => 'trails-menu',
            'menu_class' => "container trails__list"
        ));
    ?>

</section>