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



    $wp_customize->add_section("hero", array(
        "title" => "Hero",
        "description" => "The first part of the homepage."
    ));

    $wp_customize->add_setting("hero_headline", array(
        "type" => "option"
    ));
    $wp_customize->add_setting("hero_lede", array(
        "type" => "option"
    ));
    $wp_customize->add_setting("hero_image", array(
        "default" => false,
        "type" => "option"
    ));
    $wp_customize->add_control("hero_headline", array(
        "type" => "text",
        "section" => "hero",
        "label" => "Headline"
    ));
    $wp_customize->add_control("hero_lede", array(
        "type" => "textarea",
        "section" => "hero",
        "label" => "Lede"
    ));
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'hero_image', array(
        'label' => "Background image",
        'section' => 'hero',
        'mime_type' => 'image',
    )));



    $wp_customize->add_section("campaign", array(
        "title" => "Campaign",
        "description" => "The large banner on the homepage."
    ));

    $wp_customize->add_setting("campaign_text", array(
        "type" => "option"
    ));
    $wp_customize->add_setting("campaign_image", array(
        "default" => false,
        "type" => "option"
    ));
    $wp_customize->add_setting("campaign_link_text", array(
        "type" => "option"
    ));
    $wp_customize->add_setting("campaign_link", array(
        "type" => "option"
    ));

    $wp_customize->add_control("campaign_text", array(
        "type" => "textarea",
        "section" => "campaign",
        "label" => "Text"
    ));
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'campaign_image', array(
        'label' => "Background image",
        'section' => 'campaign',
        'mime_type' => 'image',
    )));
    $wp_customize->add_control("campaign_link_text", array(
        "type" => "text",
        "section" => "campaign",
        "label" => "Button text"
    ));
    $wp_customize->add_control("campaign_link", array(
        "section" => "campaign",
        'type' => 'dropdown-pages',
        "label" => "Button link"
     ));



}
add_action( "customize_register", "lbh_add_customizer_stuff" );