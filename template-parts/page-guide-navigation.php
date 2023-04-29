<?php
/**
 * Template part for displaying the page guide nav
 *
 * @link https://developer.wordpress.org/reference/functions/get_template_part/
 *
 * @package ws
 */
?>



<?php $children = new WP_Query(array(
    'post_type'      => 'page',
    'post_status' => 'publish',
    'posts_per_page' => 1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
));
if ( $children->have_posts() ): ?>
    <nav class="guide-navigation">    
        <ul class="guide-navigation__list">            
            <?php while ( $children->have_posts() ) : $children->the_post(); ?>
            <li class="guide-navigation__item guide-navigation__item--next">    
                <a class="guide-navigation__link"  href='<?php the_permalink() ?>'>
                    <span>Next</span>    
                    <span><?php the_title() ?></span>
                </a>
            </li>
            <?php endwhile; ?>
        </ul>
    </nav>
<?php endif; 
wp_reset_postdata(); ?>