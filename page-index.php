<?php 
/**
 * Template for testing page templates
 *
 *
 * @package ws
 * Template Name: Index/Tiled
 */
?>


<?php get_header(); ?>


<?php if(have_posts()) : ?> 
    <?php while(have_posts()): ?>
        <?php the_post(); ?>

        <div class="content-wrapper">
            <div class="container">
                <?php get_template_part( 'template-parts/breadcrumbs', null ); ?>
                <?php get_template_part( 'template-parts/content', null, array('hide_sidebar' => true) ); ?>
                <?php get_template_part( 'template-parts/page-index-boxes', null ); ?>
            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>