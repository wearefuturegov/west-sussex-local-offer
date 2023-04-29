<?php


if ( ! function_exists('ws_acf_create_theme_field_groups') ):


  function ws_acf_create_theme_field_groups() {

    acf_add_local_field_group(array(
      'key' => WS_ACF_GROUP_SIDEBAR,
      'title' => 'Sidebar',
      'fields' => [],
      'location' => array(
        array(
          array(
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'page',
          ),
          array(
            'param' => 'post_template',
            'operator' => '==',
            'value' => 'default',
          ),
        ),
        array(
          array(
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'page',
          ),
          array(
            'param' => 'post_template',
            'operator' => '==',
            'value' => 'page-guide.php',
          ),
        ),
        array(
          array(
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'page',
          ),
          array(
            'param' => 'post_template',
            'operator' => '==',
            'value' => 'page-guide-step.php',
          ),
        ),
      ),
      'menu_order' => 0,
      'position' => 'normal',
      'style' => 'default',
      'label_placement' => 'top',
      'instruction_placement' => 'label',
      'hide_on_screen' => '',
      'active' => true,
      'description' => '',
      'show_in_rest' => false,
    ));


    acf_add_local_field_group(array(
      'key' => WS_ACF_GROUP_DESIGN,
      'title' => 'Design',
      'fields' => [],
      'location' => array(
        array(
          array(
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'page',
          ),
          array(
            'param' => 'post_template',
            'operator' => '!=',
            'value' => 'page-pinboard.php',
          ),
        ),
      ),
      'menu_order' => 10,
      'position' => 'normal',
      'style' => 'default',
      'label_placement' => 'top',
      'instruction_placement' => 'label',
      'hide_on_screen' => '',
      'active' => true,
      'description' => '',
      'show_in_rest' => false,
    ));

  }

endif;



