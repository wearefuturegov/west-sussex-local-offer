<?php
/**
 * Template part for displaying the page guide toc
 *
 * @link https://developer.wordpress.org/reference/functions/get_template_part/
 *
 * @package ws
 */



$guide_query = new WP_Query(array(
    'post_type'      => 'page',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
));
?>

<aside class="guide-contents" role="complementary">
    <h2 class="guide-contents__heading">Contents</h2>

<?php if ( $guide_query->have_posts() ): ?>
    <ol class='guide-contents__list'>
        <li class="guide-contents__step">Overview</li>                        
        <?php while ( $guide_query->have_posts() ) : ?> 
            <?php $guide_query->the_post(); ?>
            <li class="guide-contents__step">
                <a href='<?php the_permalink() ?>'><?php the_title() ?></a>
            </li>
        <?php endwhile; ?>
    </ol>
<?php endif; 
    wp_reset_postdata(); ?>
</aside>