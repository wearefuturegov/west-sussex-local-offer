<?php

// Add customiser controls
function lbh_add_customizer_stuff( $wp_customize ) {
    $wp_customize->add_section("announcement", array(
        "title" => "Announcement",
        "description" => "Alert users to important, time-sensitive information."
    ));

    $wp_customize->add_setting("show_announcement", array(
        "default" => false,
        "type" => "option"
    ));
    $wp_customize->add_setting("announcement_title", array(
        "type" => "option"
    ));
    $wp_customize->add_setting("announcement_link_text", array(
        "type" => "option"
    ));
    $wp_customize->add_setting("announcement_link", array(
        "type" => "option"
    ));

    $wp_customize->add_control("show_announcement", array(
        "type" => "checkbox",
        "section" => "announcement",
        "label" => "Show announcement?"
    ));
    $wp_customize->add_control("announcement_title", array(
        "type" => "text",
        "section" => "announcement",
        "label" => "Title"
    ));
    $wp_customize->add_control("announcement_link_text", array(
        "type" => "text",
        "section" => "announcement",
        "label" => "Link text"
    ));
    $wp_customize->add_control("announcement_link", array(
       "section" => "announcement",
       'type' => 'dropdown-pages',
       "label" => "Link"
    ));

}
add_action( "customize_register", "lbh_add_customizer_stuff" );