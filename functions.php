<?php

define("COOKIE_KEY", "my_pins");
define("FEEDBACK_KEY", "my_feedback");
define("WS_ACF_GROUP_SIDEBAR", "group_5f0f084933f37");
define("WS_ACF_GROUP_DESIGN", "group_5f19cb1616e64");



require get_template_directory() . "/inc/helpers.php";
require get_template_directory() . "/inc/dependencies.php";
require get_template_directory() . "/inc/plugins/plugins.php";
require get_template_directory() . "/inc/theme/theme.php";
require get_template_directory() . "/inc/custom_logo/custom_logo.php";
require get_template_directory() . "/inc/beta_banner/beta_banner.php";
require get_template_directory() . "/inc/announcement/announcement.php";
require get_template_directory() . "/inc/homepage_blocks/homepage_blocks.php";
require get_template_directory() . "/inc/hero/hero.php";
require get_template_directory() . "/inc/campaign/campaign.php";
require get_template_directory() . "/inc/popular_topics/popular_topics.php";
require get_template_directory() . "/inc/header/header.php";
require get_template_directory() . "/inc/footer/footer.php";
require get_template_directory() . "/inc/styles-scripts.php";
require get_template_directory() . "/inc/template-tags.php";
require get_template_directory() . "/inc/pingback.php";
require get_template_directory() . "/inc/excerpts/excerpts.php"; 
require get_template_directory() . "/inc/post_type_page/post_type_page.php";
require get_template_directory() . "/inc/post_type_post/post_type_post.php";
require get_template_directory() . "/inc/pins/pins.php";
require get_template_directory() . "/inc/feedback/feedback.php";
require get_template_directory() . "/inc/related/related.php";
require get_template_directory() . "/inc/downloads/downloads.php";



// plugins
add_action('acf/init', 'ws_acf_create_theme_field_groups'); //make groups


// custom logo
add_action( 'after_setup_theme', 'ws_custom_logo' );

// beta banner
add_action( 'customize_register', 'ws_beta_banner_options' );

// announcement
add_action( 'customize_register', 'ws_announcement_options' );

// homepage_blocks
add_action( 'customize_register', 'ws_homepage_blocks_options' );

// hero
add_action( 'customize_register', 'ws_hero_options' );

// campaign
add_action( 'customize_register', 'ws_campaign_options' );


// popular_topics
add_action( 'after_setup_theme', 'ws_popular_topics_menu' );
add_filter( 'walker_nav_menu_start_el', 'ws_popular_topics_menu_walker', 10, 4 );
add_filter( 'manage_nav-menus_columns', 'ws_popular_topics_menu_enable_description' );

// header
add_action( 'after_setup_theme', 'ws_header_menu' );
add_filter( 'wp_nav_menu_objects', 'ws_header_menu_limit', 10, 2 );

// footer
add_action( 'after_setup_theme', 'ws_footer_menu' );
add_filter( 'wp_nav_menu_objects', 'ws_footer_menu_limit', 10, 2 );

// styles scripts
add_action( 'wp_enqueue_scripts', 'ws_styles_scripts' );


// pingback
add_action( 'wp_head', 'ws_pingback_header' );

// excerpts
add_filter('excerpt_more', 'ws_excerpts_more');
add_filter( 'excerpt_length', 'ws_excerpts_custom_length', 999 );


// post types - pages
add_action( 'after_setup_theme', 'ws_post_type_page_excerpts' );
add_action( 'widgets_init', 'ws_post_type_page_sidebar' );


// post types - posts
add_action( 'widgets_init', 'ws_post_type_post_sidebar' );


// pins
add_action( "admin_post_nopriv_pinning", "ws_pins_handle_pinning" );
add_action( "admin_post_pinning", "ws_pins_handle_pinning" );

// feedback
add_action( 'add_meta_boxes', 'ws_feedback_add_meta' ); 
add_action( "admin_post_nopriv_feedback", "ws_feedback_handle_feedback" );
add_action( "admin_post_feedback", "ws_feedback_handle_feedback" );

// related
add_action('acf/init', 'ws_related_acf_create_fields'); 

// downloads
add_action('acf/init', 'ws_downloads_acf_create_fields'); 

// colour_scheme
add_action('acf/init', 'ws_colour_scheme_acf_create_fields'); 



