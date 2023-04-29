<?php


if ( ! function_exists( 'ws_campaign_options' ) ) :


// Add customiser controls
function ws_campaign_options( $wp_customize ) {

    $section_name = 'campaign';




    // colourful box on homepage
    $wp_customize->add_section($section_name, array(
        "title" => "Campaign",
        "description" => "The large banner on the homepage."
    ));

    $wp_customize->add_setting($section_name . "_text", array(
        "type" => "theme_mod"
    ));
    $wp_customize->add_setting($section_name . "_lede", array(
        "type" => "theme_mod"
    ));
    $wp_customize->add_setting($section_name . "_color", array(
        "type" => "theme_mod"
    ));
    $wp_customize->add_setting($section_name . "_link_text", array(
        "type" => "theme_mod"
    ));
    $wp_customize->add_setting($section_name . "_link", array(
        "type" => "theme_mod"
    ));

    $wp_customize->add_control($section_name . "_text", array(
        "type" => "text",
        "section" => $section_name,
        "label" => "Text"
    ));
    $wp_customize->add_control($section_name . "_lede", array(
        "type" => "textarea",
        "section" => $section_name,
        "label" => "Text"
    ));
    $wp_customize->add_control($section_name . "_color", array(
        "type" => "radio",
        "section" => $section_name,
        "label" => "Background colour",
        "choices" => array(
            "" => "Blue",
            "campaign--purple" => "Purple",
            "campaign--pink" => "Pink",
            "campaign--green" => "Green"
        )
    ));
    $wp_customize->add_control($section_name . "_link_text", array(
        "type" => "text",
        "section" => $section_name,
        "label" => "Button text"
    ));
    $wp_customize->add_control($section_name . "_link", array(
        "section" => $section_name,
        'type' => 'dropdown-pages',
        "label" => "Button link"
     ));

        

    
}

endif;
