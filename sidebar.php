<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ws
 */

?>


<?php if ( is_page() ): ?>

<aside class="layout-sidebar-right__sidebar">

<?php if (! is_page_template()) : ?>
    <?php get_template_part( 'template-parts/child-pages', null, array('post_parent_id' => get_the_ID() ) ); ?>
<?php endif; ?>

<?php get_template_part( 'template-parts/related', null, array('post_id' => get_the_ID() ) ); ?>

<?php get_template_part( 'template-parts/downloads', null, array('post_id' => get_the_ID() ) ); ?>

<?php get_template_part( 'template-parts/pin', 'button', array('post_id' => get_the_ID(), 'title' => 'Save for later' ) ); ?>

<?php if ( is_active_sidebar( "page_sidebar" ) ) : ?>
    <?php dynamic_sidebar( "page_sidebar" ); ?>
<?php endif; ?>

</aside>


<?php elseif(is_single()): ?>

<aside class="layout-sidebar-right__sidebar">
<?php if ( is_active_sidebar( "post_sidebar" ) ) : ?>
    <?php dynamic_sidebar( "post_sidebar" ); ?>
<?php endif; ?>
</aside>


<?php endif; ?>