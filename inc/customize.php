<?php 

/**
 * @package WordPress
 * @subpackage Your_Theme_Name
 * @since Your_Theme_Version
 */

 // Logo Upload
function travel_agency_customizer_register( $wp_customize ) {
    // Add a section for the logo
    $wp_customize->add_section( 'travel_logo_section' , array(
        'title'      => __( 'Logo', 'travel_agency' ),
        'priority'   => 30,
    ) );
    
    // Add the setting for the logo
    $wp_customize->add_setting( 'travel_logo', array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    
    // Add the control for the logo
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'travel_logo', array(
        'label'      => __( 'Upload Logo', 'travel_agency' ),
        'section'    => 'travel_logo_section',
        'settings'   => 'travel_logo',
    ) ) );
}
add_action( 'customize_register', 'travel_agency_customizer_register' );