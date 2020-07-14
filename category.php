<?php get_header(); ?>

<div class="content-wrapper">
    <div class="container">
        <h1 class="page-title"><?php the_archive_title(); ?></h1>

        <?php 

        $this_category = get_category($cat);

        if (get_category_children($this_category->cat_ID) != "") {

            echo '<div id="catlist"><ul>';

            $child_categories = get_categories(array(
                'orderyby' => 'name',
                'hide_empty' => false,
                'child_of' => $this_category->cat_ID
            ));

            foreach($child_categories as $category) {
                echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a>';
                echo '<p>'.$category->description.'</p>';
            } 

            echo '</ul></div>';

        } else {  



            if (have_posts()){
                echo "Yes";

                if(have_posts()): while(have_posts()): the_post();

                the_title();

                endwhile; endif;
            }

        }

        ?>


    </div>
</div>

<?php get_footer(); ?>