<?php


if ( ! function_exists( 'ws_homepage_blocks_options' ) ) :


// Add customiser controls
function ws_homepage_blocks_options( $wp_customize ) {

    $section_name = 'homepage_blocks';

    $wp_customize->add_section($section_name, array(
        "title" => "Homepage blocks",
        "description" => "The homepage has two blocks, for feedback or contact information. Customise the text and settings here. "
    )); 

    // left hand block
    $wp_customize->add_setting($section_name . "_left_title", array(
        "type" => "theme_mod"
    ));
    $wp_customize->add_control($section_name . "_left_title", array(
        "type" => "text",
        "section" => $section_name,
        "label" => "Left block title"
    ));

    $wp_customize->add_setting($section_name . "_left_content", array(
        "type" => "theme_mod"
    ));
    $wp_customize->add_control($section_name . "_left_content", array(
        "type" => "text",
        "section" => $section_name,
        "label" => "Left block content"
    ));

    $wp_customize->add_setting($section_name . "_left_cta", array(
        "type" => "theme_mod"
    ));
    $wp_customize->add_control($section_name . "_left_cta", array(
        "type" => "url",
        "section" => $section_name,
        "label" => "Left block cta"
    ));

    $wp_customize->add_setting($section_name . "_left_cta_text", array(
        "type" => "theme_mod"
    ));
    $wp_customize->add_control($section_name . "_left_cta_text", array(
        "type" => "text",
        "section" => $section_name,
        "label" => "Left block cta text"
    ));



    // right hand block
    $wp_customize->add_setting($section_name . "_right_title", array(
        "type" => "theme_mod"
    ));
    $wp_customize->add_control($section_name . "_right_title", array(
        "type" => "text",
        "section" => $section_name,
        "label" => "Right block title"
    ));

    $wp_customize->add_setting($section_name . "_right_content", array(
        "type" => "theme_mod"
    ));
    $wp_customize->add_control($section_name . "_right_content", array(
        "type" => "text",
        "section" => $section_name,
        "label" => "Right block content"
    ));

    $wp_customize->add_setting($section_name . "_right_cta", array(
        "type" => "theme_mod"
    ));
    $wp_customize->add_control($section_name . "_right_cta", array(
        "type" => "url",
        "section" => $section_name,
        "label" => "Right block cta"
    ));

    $wp_customize->add_setting($section_name . "_right_cta_text", array(
        "type" => "theme_mod"
    ));
    $wp_customize->add_control($section_name . "_right_cta_text", array(
        "type" => "text",
        "section" => $section_name,
        "label" => "Right block cta text"
    ));

}

endif;
