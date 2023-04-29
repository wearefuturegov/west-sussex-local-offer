<?php


if ( ! function_exists( 'ws_hero_options' ) ) :


// Add customiser controls
function ws_hero_options( $wp_customize ) {

    $section_name = 'hero';

        // hero (adding headline + lede makes it slightly larger)
        $wp_customize->add_section($section_name, array(
            "title" => "Hero",
            "description" => "The first part of the homepage."
        ));
    
        $wp_customize->add_setting($section_name . "_headline", array(
            "type" => "option"
        ));
        $wp_customize->add_setting($section_name . "_lede", array(
            "type" => "option"
        ));
        $wp_customize->add_setting($section_name . "_image", array(
            "default" => false,
            "type" => "option"
        ));
        $wp_customize->add_control($section_name . "_headline", array(
            "type" => "text",
            "section" => $section_name,
            "label" => "Headline"
        ));
        $wp_customize->add_control($section_name . "_lede", array(
            "type" => "textarea",
            "section" => $section_name,
            "label" => "Lede"
        ));
        $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, $section_name . '_image', array(
            'label' => "Background image",
            'section' => $section_name,
            'mime_type' => 'image',
        )));

        

    
}

endif;
