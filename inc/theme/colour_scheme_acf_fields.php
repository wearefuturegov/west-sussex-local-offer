<?php


if ( ! function_exists('ws_colour_scheme_acf_create_fields') ):

  function ws_colour_scheme_acf_create_fields() {
    
      acf_add_local_field(array(
        'parent' => WS_ACF_GROUP_SIDEBAR,
        'key' => 'field_5f19cb1906199',
        'label' => 'Colour scheme',
        'name' => 'colour_scheme',
        'aria-label' => '',
        'type' => 'radio',
        'instructions' => 'Customise the colour of links on this page. Use sparingly and consistently.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'choices' => array(
          'blue' => 'Blue (default)',
          'green' => 'Green',
          'purple' => 'Purple',
          'pink' => 'Pink',
        ),
        'allow_null' => 0,
        'other_choice' => 0,
        'default_value' => '',
        'layout' => 'horizontal',
        'return_format' => 'value',
        'save_other_choice' => 0,
      ));

  }

endif;



