<?php
/**
 * Template part for displaying the page index boxes
 *
 * @link https://developer.wordpress.org/reference/functions/get_template_part/
 *
 * @package ws
 */


 $children = new WP_Query(array(
     'post_type'      => 'page',
     'post_status' => 'publish',
     'posts_per_page' => -1,
     'post_parent'    => $post->ID,
     'order'          => 'ASC',
     'orderby'        => 'menu_order'
 ));
 if ( $children->have_posts() ):
     echo "<ul class='child-tiles'>";
     while ( $children->have_posts() ) : $children->the_post();
         echo "<li class='child-tile'>";
         echo "<a href='" . get_the_permalink() . "'>" . get_the_title() . "</a>";
         the_excerpt();
         echo "</li>";
     endwhile;
     echo "</ul>";
 endif; wp_reset_postdata();
 ?>
