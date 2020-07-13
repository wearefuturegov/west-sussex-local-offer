<?php

function lo_load_scripts_and_styles() {
    wp_enqueue_style("index", get_stylesheet_directory_uri()."/dist/css/index.css");
    wp_enqueue_style("fonts", "https://fonts.googleapis.com/css?family=Lato:400,500,600,700");
    wp_enqueue_script("index", get_stylesheet_directory_uri()."/dist/js/index.js");
}
add_action("wp_enqueue_scripts", "lo_load_scripts_and_styles");

function lo_register_menus() {
    register_nav_menus(
        array(
            "header-menu" => __( "Header area" ),
            "footer-menu" => __( "Footer area" )
        )
    );
}
add_action( "init", "lo_register_menus" );

add_theme_support( 'custom-logo' );


function the_breadcrumbs(){
    if(is_page() && !$post->post_parent){

        $parent_id = $post->post_parent;
        $breadcrumbs = array();
        while ($parent_id) {
            $page = get_page($parent_id);
            $breadcrumbs[] = "<a href='" . get_permalink($page->ID) . "'>" . get_the_title($page->ID) . "</a>";
            $parent_id = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);

        print_r($breadcrumbs);


        echo "<ol class='breadcrumbs'>";
        echo "<li class='breadcrumbs__crumb'><a href='" . get_option("home") . "'>Home</a></li>";
        foreach ($breadcrumbs as $crumb) echo $crumb;
        echo "<li class='breadcrumbs__crumb'>" . get_the_title() . "</li>";
        echo "</ol>";
    }
}


// function the_breadcrumbs() {

//     if ( !is_home() && !is_front_page() || is_paged() ) {

//         echo "<div class='breadcrumbs'>";

//         echo "<a href='";
//         echo get_option("home");
//         echo "'>";
//         echo "Home";
//         echo '</a>';

//         global $post;
        
//         if (is_category() || is_single()) {
//             if (is_single()) {
//                 echo $currentBefore;
//                 the_title();
//                 echo $currentAfter;
//             }
//         }
        
//         if ( is_page() && !$post->post_parent ) {
//             echo $currentBefore;
//             the_title();
//             echo $currentAfter; 
//         }

//     elseif ( is_page() && $post->post_parent ) {
//         $parent_id = $post->post_parent;
//         $breadcrumbs = array();

//         while ($parent_id) {
//             $page = get_page($parent_id);
//             $breadcrumbs[] = "<a href='" . get_permalink($page->ID) . "'>" . get_the_title($page->ID) . "</a>";
//             $parent_id = $page->post_parent;
//         }

//         $breadcrumbs = array_reverse($breadcrumbs);
//         foreach ($breadcrumbs as $crumb) echo $crumb;
//         echo $currentBefore;
//         the_title();
//         echo $currentAfter;
//     }

//         echo "</div>";
//     }
// }