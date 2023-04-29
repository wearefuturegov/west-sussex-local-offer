<?php
/**
 * Template part for displaying the site logo
 *
 * @link https://developer.wordpress.org/reference/functions/get_template_part/
 *
 * @package ws
 */

?>

<a class="site-header__masthead" href="<?php echo get_home_url(); ?>">
    <img src="<?php echo ws_custom_logo_get_file_url(); ?>" alt="Local offer"/>
    <?php bloginfo( 'name' ); ?>
</a>