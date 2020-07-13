<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='utf-8'>
        <meta content='width=device-width, initial-scale=1.0' name='viewport'>
        <title><?php if(is_home()) echo get_bloginfo('name'); else echo get_the_title() . " | " . get_bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>