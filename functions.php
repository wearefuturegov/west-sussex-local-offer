<?php

function lo_load_scripts_and_styles() {
    wp_enqueue_style("main", get_stylesheet_directory_uri()."/dist/css/main.css");
    wp_enqueue_style("fonts", "https://fonts.googleapis.com/css?family=Lato:400,500,600,700");
    wp_enqueue_script("main", get_stylesheet_directory_uri()."/dist/js/main.js");
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