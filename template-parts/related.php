<?php
/**
* Template part for displaying content above the <header>
 *
 * @link https://developer.wordpress.org/reference/functions/get_template_part/
 *
 * @package ws
 */

$related_posts = ws_acf_get_field('related');
?>


<?php if ($related_posts) : ?>
<div class="widget">
  <h2>Related pages</h2>
  <ul class='child-page-list'>
    <?php 
    foreach( $related_posts as $post ): 
      // Setup this post for WP functions (variable must be named $post).
      setup_postdata($post); ?>
      <li>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </li>
      <?php endforeach; ?>
    </ul>
</div>
<?php 
// Reset the global post object so that the rest of the page works correctly.
wp_reset_postdata(); ?>
<?php endif; ?>
