<?php
add_action( 'init', 'custom_theme_options' );
function custom_theme_options() {
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;
  $saved_settings = get_option( ot_settings_id(), array() );
  $custom_settings = array( 
    'contextual_help' => array( 
      'content'       => array( 
        array(
          'id'        => 'option_types_help',
          'title'     => __( 'Option Types', 'theme-text-domain' ),
          'content'   => '<p>' . __( 'Help content goes here!', 'theme-text-domain' ) . '</p>'
        )
      ),
      'sidebar'       => '<p>' . __( 'Sidebar content goes here!', 'theme-text-domain' ) . '</p>'
    ),
    'sections'        => array( 
      array(
        'id'          => 'general',
        'title'       => __( 'General', 'theme-text-domain' )
      ) 
    ),
    'settings'        => array( 
      array(
        'id'          => 'Navbar_logo_wirosableng',
        'label'       => __( 'Navbar Logo', 'theme-text-domain' ),
        'desc'        => 'Upload navbar logo ( 170px X 20px)',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'Header_logo_wirosableng',
        'label'       => __( 'Header Logo', 'theme-text-domain' ),
        'desc'        => 'Upload header logo (200px X 115px)',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'Favicon_wirosableng',
        'label'       => __( 'Favicon', 'theme-text-domain' ),
        'desc'        => 'Upload your favicon image',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      )
    )
  );
    $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
    if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
    global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}