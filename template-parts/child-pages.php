<?php
/**
* Template part for displaying childpages
 *
 * @link https://developer.wordpress.org/reference/functions/get_template_part/
 *
 * @package ws
 */


if (array_key_exists('post_parent_id', $args) && isset($args['post_parent_id'])) {
  $post_parent_id = $args['post_parent_id'];
}
if ( ! $post_parent_id ) 	return;

$children_query = new WP_Query(array(
  'post_type'      => 'page',
  'post_status'    => 'publish',
  'posts_per_page' => 50,
  'post_parent'    => $post_parent_id,
  'order'          => 'ASC',
  'orderby'        => 'menu_order'
));


?>



<?php if($children_query->have_posts ()) : ?>
  <div class="widget">
  <h2>Pages in this section</h2>
    <ul class="pinboard-list">
    <?php while ( $children_query->have_posts() ) : ?>
        <?php $children_query->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
    </ul>
  </div>
<?php 
// Reset the global post object so that the rest of the page works correctly.
wp_reset_postdata(); ?>
<?php endif; ?>


