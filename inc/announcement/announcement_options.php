<?php


if ( ! function_exists( 'ws_announcement_options' ) ) :


// Add customiser controls
function ws_announcement_options( $wp_customize ) {

    $section_name = 'announcement';

    // Green announcement
    $wp_customize->add_section($section_name, array(
        "title" => "Announcement",
        "description" => "Alert users to important, time-sensitive information."
    ));
    $wp_customize->add_setting($section_name . "_show", array(
        "default" => false,
        "type" => "theme_mod"
    ));
    $wp_customize->add_setting($section_name . "_title", array(
        "type" => "theme_mod"
    ));
    $wp_customize->add_setting($section_name . "_link_text", array(
        "type" => "theme_mod"
    ));
    $wp_customize->add_setting($section_name . "_link", array(
        "type" => "theme_mod"
    ));
    $wp_customize->add_control($section_name . "_show", array(
        "type" => "checkbox",
        "section" => $section_name,
        "label" => "Show announcement?"
    ));
    $wp_customize->add_control($section_name . "_title", array(
        "type" => "text",
        "section" => $section_name,
        "label" => "Title"
    ));
    $wp_customize->add_control($section_name . "_link_text", array(
        "type" => "text",
        "section" => $section_name,
        "label" => "Link text"
    ));
    $wp_customize->add_control($section_name . "_link", array(
       "section" => $section_name,
       'type' => 'dropdown-pages',
       "label" => "Link"
    ));

}

endif;
