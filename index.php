<?php 

get_header(); 

global $paged;
$max_page = $wp_query->max_num_pages;
$results = $wp_query->found_posts;
?>

<div class="content-wrapper">
    <div class="container">

    <?php if (is_archive()): ?>
            <h1 class="page-title"><?php the_archive_title(); ?></h1>
        <?php else: ?>
            <h1 class="page-title">Search</h1>
            <?php get_template_part( 'template-parts/form-search-inline-page', null ); ?>
        <?php endif; ?>


        <div class="layout-sidebar-right">
            <article class="layout-sidebar-right__main-content">
                <?php if ( have_posts() ) : ?>
                    <?php if (!is_archive()): ?>
                        <p><?php echo $results; ?> results found</p>
                    <?php endif; ?>

                    <ol class="search-results-list">
                    <?php while ( have_posts() ) : ?>
                        <?php the_post();  ?>
                        <?php get_template_part( 'template-parts/search-results-item', null ); ?>
                    <?php endwhile; ?>
                    </ol>

                    <?php get_template_part( 'template-parts/pagination', null ); ?>
                <?php else : ?>
                    <p class="no-results">No results match your search. Try widening your query.</p>
                <?php endif;?>
            </article>

            <?php get_sidebar(); ?>
        </div>



    


    </div>
</div>

<?php get_footer(); ?>



