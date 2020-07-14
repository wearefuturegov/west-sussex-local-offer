<?php 

// add_theme_support( 'wp-block-styles' );
// add_theme_support( 'align-wide' );
// add_theme_support('editor-styles');
// add_editor_style( "/dist/css/editor.css" );

function lo_load_block_scripts() {
    wp_enqueue_script(
        "blocks", 
        get_stylesheet_directory_uri()."/dist/js/blocks/index.js", 
        array("wp-blocks", "wp-element", "wp-block-editor", "wp-components", "wp-data")
    );
}
add_action("enqueue_block_editor_assets", "lo_load_block_scripts");


// Render a dynamic block
function lo_register_blocks() {
    register_block_type("lo/tree-menu", array(
        "render_callback" => "lo_render_tree_menu"
    ));
}
add_action("init", "lo_register_blocks");

function lo_render_tree_menu($attributes) {
    ob_start();
    ?>
        <h3>Menu here</h3>
    <?php
    $output = ob_get_contents();
    ob_end_clean();
    return $output;
}