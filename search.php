<?php 

get_header(); 
$results = $wp_query->found_posts;
?>

<div class="content-wrapper">
    <div class="container">

        <h1 class="page-title">Search</h1>

        <?php get_template_part( 'template-parts/form-search-inline-page', null ); ?>

        <div class="layout-sidebar-right">
            <article class="layout-sidebar-right__main-content">
            <?php if(have_posts()): ?>
                <p><?php echo $results; ?> results found</p>

                <ol class="search-results-list">
                    <?php while(have_posts()): the_post(); ?>
                        <?php get_template_part( 'template-parts/search-results-item', null ); ?>
                    <?php endwhile; ?>
                </ol>

                
                <?php get_template_part( 'template-parts/pagination', null ); ?>

            <?php else: ?>
                <p class="no-results">No results match your search. Try widening your query.</p>
            <?php endif; ?>
            </article>
        </div>

    </div>
</div>

<?php get_footer(); ?>
