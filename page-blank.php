<?php 
/**
 * Template for with no sidebar or feedback
 *
 *
 * @package ws
 * Template Name: Blank
 */
?>

<?php get_header(); ?>

<?php if(have_posts()) : ?> 
    <?php while(have_posts()): ?>
        <?php the_post(); ?>

        <div class="content-wrapper">
            <div class="container">
                <?php get_template_part( 'template-parts/breadcrumbs', null ); ?>
                <?php get_template_part( 'template-parts/content', null, array('full_width' => true) ); ?>
            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>



<?php get_footer(); ?>