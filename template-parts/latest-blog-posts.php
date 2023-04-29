
<?php
/**
 * Template part for displaying the site logo
 *
 * @link https://developer.wordpress.org/reference/functions/get_template_part/
 *
 * @package ws
 */




$latest_blog_query = new WP_Query(array(
    "posts_per_page" => 3,
    "post_type" => "post",
    'post_status'    => 'publish',
    ));
?>


<?php if($latest_blog_query->have_posts()): ?>
    <section class="blog-posts">
        <div class="container">
            <h2>Latest blog posts</h2>
            <div class="blog-posts__grid">
            <?php while ( $latest_blog_query->have_posts() ) : ?>
                <?php $latest_blog_query->the_post(); ?>
                <article>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <p><?php the_excerpt(); ?></p>
                </article> 

            <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
