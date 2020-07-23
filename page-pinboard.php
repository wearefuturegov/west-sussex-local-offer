<?php 
/* Template Name: Pinboard */

$pins = unserialize(stripslashes($_COOKIE[COOKIE_KEY]));

$query = new WP_Query(array(
    "post_type" => "page",
    "post__in" => $pins,
    "orderby" => "modified"
) );

get_header(); ?>

<div class="content-wrapper">
    <div class="container">
        <?php if( $pins && $query->have_posts()){ ?>

            <h1 class="page-title">
                Your pinboard 
                <?php echo "<span class='page-title__count'>(" . $query->post_count . ")</span>" ?>
            </h1>


                <ul class="pinboard-list">
                <?php while ( $query->have_posts() ) { $query->the_post(); ?>
                    <li class="pinboard-list__item">
                        <h2>
                            <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                        </h2>
                        <p><?php the_excerpt() ?></p>

                        <form method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>"> 
                            <input type="hidden" name="action" value="pinning"/>    
                            <input type="hidden" name="id" value="<?php echo get_the_ID(); ?>"/>
                            <?php 
                                if(is_array($pins) && in_array($post->ID, $pins)){
                                    echo "<button class='button'>Remove from pins</button>";
                                } else {
                                    echo "<button class='button'>Add to pins</button>";
                                }
                            ?>
                        </form>

                    </li>
                <?php } ?>
                </ul>
                <?php 
                wp_reset_postdata();
            } else {
                ?>
                    <h1 class="page-title">Your pinboard <span class='page-title__count'>(0)</span></h1>
                    <img class="empty-icon" src="<?php echo get_stylesheet_directory_uri() ?>/assets/empty.svg" alt="Empty"/>
                    <p class="empty-message">There's nothing on your pinboard yet.<br/> Save pages here for quick access.</p>
                <?php
            }
        ?>

    </div>
</div>

<?php get_footer(); ?>