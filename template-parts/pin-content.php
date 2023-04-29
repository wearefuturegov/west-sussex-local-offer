<?php
/**
 * Template part for displaying pinned content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ws
 */

?>



<li id="pin-<?php the_ID(); ?>" class="pinboard-list__item">
    <h2>
        <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
    </h2>
    <p><?php the_excerpt() ?></p>

    <?php get_template_part('template-parts/pin', 'button', array('post_id' => get_the_ID() )); ?>

		<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php edit_post_link( __( 'Edit content', 'ws' ), '<span class="edit-link">', '</span>' );?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</li>

