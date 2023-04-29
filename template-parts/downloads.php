<?php
/**
* Template part for displaying content above the <header>
 *
 * @link https://developer.wordpress.org/reference/functions/get_template_part/
 *
 * @package ws
 */

$downloads = ws_acf_get_field('downloads');
?>


<?php if ($downloads) : ?>
<div class="widget">
  <h2>Downloads</h2>
  <ul class="download-list">
    <?php 
    foreach( $downloads as $post ): 
      // Setup this post for WP functions (variable must be named $post).
      setup_postdata($post); ?>
      <li class="download">
          <a href="<?php echo $post->guid ?>"><?php the_title(); ?></a>
          <p><?php the_content(); ?>
          <small><?php echo date_format(date_create($post->post_date), "F Y"); ?></small>
      </li>
      <?php endforeach; ?>
    </ul>
</div>
<?php 
// Reset the global post object so that the rest of the page works correctly.
wp_reset_postdata(); ?>
<?php endif; ?>

