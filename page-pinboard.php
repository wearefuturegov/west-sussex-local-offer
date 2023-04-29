<?php 
/**
 * The template for displaying the pinboard
 *
 * @package ws
 * Template Name: Pinboard
 * 
 */

$has_pins = ws_pins_has_pins();
$pin_query = ws_pins_query();

$pin_count = $pin_query ? $pin_query->post_count : 0;

get_header(); ?>

<div class="content-wrapper">
    <div class="container">

    <h1 class="page-title">
        Your pinboard <span class="page-title__count">(<?php echo $pin_count; ?>)</span>
    </h1>

    <?php if ($has_pins) : ?>
        <?php if($pin_query->have_posts ()) : ?>
            <ul class="pinboard-list">
                <?php while ( $pin_query->have_posts() ) : ?>
                    <?php $pin_query->the_post(); ?>
                    <?php get_template_part('template-parts/pin', 'content', array('post_id' => get_the_ID() )); ?>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
        <?php wp_reset_postdata();?>
    <?php else: ?>
        <img class="empty-icon" src="<?php echo get_stylesheet_directory_uri() ?>/assets/empty.svg" alt="Empty"/>
        <p class="empty-message">There's nothing on your pinboard yet.<br/> Save pages here for quick access.</p>
    <?php endif; ?>
    </div>
</div>


<?php get_footer(); ?>