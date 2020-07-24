<?php get_header(); ?>

<div class="content-wrapper">
    <div class="container">

        <h1 class="page-title">Search</h1>

        <form class="search-box" method="get">
            <div class="search-box__field">
                <label for="location_filter">Search information, advice and guidance</label>
                <input name="s" placeholder="eg. autism" value="<?php the_search_query(); ?>"/>
            </div>
            <button class="search-box__button">Search</button>
        </form>

        <p><?php echo $wp_query->found_posts; ?> results found</p>

        <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
            <small>Last updated <?php echo get_the_date(" j F Y") ?></small>
        <?php endwhile; ?>
            <?php posts_nav_link(); ?>
        <?php else: ?>
            <p>There are no posts to show</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>