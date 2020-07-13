<?php

require "inc/customizer.php";

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
    global $post;
    if(is_page()){
        $parent_id = $post->post_parent;
        $breadcrumbs = array();
        while ($parent_id) {
            $page = get_page($parent_id);
            $breadcrumbs[] = "<li class='breadcrumbs__crumb'><a href='" . get_permalink($page->ID) . "'>" . get_the_title($page->ID) . "</a></li>";
            $parent_id = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        echo "<ol class='breadcrumbs'>";
        echo "<li class='breadcrumbs__crumb'><a href='" . get_option("home") . "'>Home</a></li>";
        foreach ($breadcrumbs as $crumb) echo $crumb;
        echo "<li class='breadcrumbs__crumb'>" . get_the_title() . "</li>";
        echo "</ol>";
    }
}

function the_kids(){
    global $post;
    $children = get_children(array(
        'post_parent' => $post->ID,
        'post_type'   => 'page',
        'post_status' => 'publish'
    ));
    if($children){
        echo "<h2>Pages in this section</h2>";
        echo "<ul class='child-page-list'>";
        foreach ($children as $child) echo "<li><a href='" . get_the_permalink($child) . "'>" . get_the_title($child) . "</a></li>";
        echo "</ul>";
    }
}