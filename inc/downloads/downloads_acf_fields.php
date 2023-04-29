<?php


if ( ! function_exists('ws_downloads_acf_create_fields') ):

  function ws_downloads_acf_create_fields() {
    
      acf_add_local_field(array(
        'parent' => WS_ACF_GROUP_SIDEBAR,
        'key' => 'field_5f0f08559231b',
        'label' => 'Downloads',
        'name' => 'downloads',
        'aria-label' => '',
        'type' => 'relationship',
        'instructions' => 'Add files for the user to download. Users will see the title, description and upload date of each file.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'post_type' => array(
          0 => 'attachment',
        ),
        'taxonomy' => '',
        'filters' => array(
          0 => 'search',
        ),
        'elements' => '',
        'min' => '',
        'max' => 5,
        'return_format' => 'object',
      ));

  }

endif;



