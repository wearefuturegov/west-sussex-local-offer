<?php 
/**
 * Template for testing page templates
 *
 *
 * @package ws
 * Template Name: Guide (parent)
 */
?>


<?php get_header(); ?>


<?php if(have_posts()) : ?> 
    <?php while(have_posts()): ?>
        <?php the_post(); ?>

        <div class="content-wrapper">
            <div class="container">
                <?php get_template_part( 'template-parts/breadcrumbs', null ); ?>

                <h1 class="page-title"><?php the_title(); ?></h1>
                <?php get_template_part( 'template-parts/page-guide-toc', null ); ?>
                <div class="layout-sidebar-right">
                    <div class="layout-sidebar-right__main-content">
                        <?php get_template_part( 'template-parts/page-content', null ); ?>
                        <?php get_template_part( 'template-parts/page-guide-navigation', null ); ?>
                    </div>
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_template_part( 'template-parts/feedback', 'box', array('post_id' => get_the_ID() ) ); ?>


<?php get_footer(); ?>
        
        
