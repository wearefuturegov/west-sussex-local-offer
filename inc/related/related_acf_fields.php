<?php


if ( ! function_exists('ws_related_acf_create_fields') ):

  function ws_related_acf_create_fields() {
    
      acf_add_local_field(array(
        'parent' => WS_ACF_GROUP_SIDEBAR,
        'key' => 'field_5f19c87a81532',
        'label' => 'Related pages',
        'name' => 'related',
        'aria-label' => '',
        'type' => 'relationship',
        'instructions' => 'Signpost users to other, related pages on the site without having to make them children of this one.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'post_type' => array(
          0 => 'page',
        ),
        'taxonomy' => '',
        'filters' => array(
          0 => 'search',
        ),
        'elements' => '',
        'min' => '',
        'max' => 5,
        'return_format' => 'id',
      ));

  }

endif;



