<?php get_header(); ?>


<?php if(have_posts()) : ?> 
    <?php while(have_posts()): ?>
        <?php the_post(); ?>

        <div class="content-wrapper">
            <div class="container">
                <?php get_template_part( 'template-parts/breadcrumbs', null ); ?>
                <?php get_template_part( 'template-parts/content', null ); ?>
            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_template_part( 'template-parts/feedback', 'box', array('post_id' => get_the_ID() ) ); ?>


<?php get_footer(); ?>