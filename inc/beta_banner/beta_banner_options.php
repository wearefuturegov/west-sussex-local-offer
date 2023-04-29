<?php


if ( ! function_exists( 'ws_beta_banner_options' ) ) :


// Add customiser controls
function ws_beta_banner_options( $wp_customize ) {

    $section_name = 'beta_banner';

    $wp_customize->add_section($section_name, array(
        "title" => "Beta banner",
        "description" => "Shows a yellow beta banner at the top of the page. Either enter a sentence to be displayed or a feedback link which will be applied to the text "
    )); 

    // checkbox for showing/hiding
    $wp_customize->add_setting($section_name . "_show", array(
        "type" => "theme_mod",
        "default" => "true"
    ));
    $wp_customize->add_control($section_name . "_show", array(
        "type" => "checkbox",
        "section" => $section_name,
        "label" => "Show beta banner?"
    ));

    // link to collect feedback
    $wp_customize->add_setting($section_name . "_feedback", array(
        "type" => "theme_mod"
    ));
    $wp_customize->add_control($section_name . "_feedback", array(
        "type" => "url",
        "section" => $section_name,
        "label" => "Feedback url"
    ));

}

endif;
