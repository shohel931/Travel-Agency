<?php 

/**
 * @package WordPress
 * @subpackage Your_Theme_Name
 * @since Your_Theme_Version
 */


 // Widgets Register
 function travel_widgets_init(){
    register_sidebar( array(
        'name'          => __( 'Footer Area 1', 'travel' ),
        'id'            => 'footer-1',
        'description'   => __( 'Widgets in this area will be shown in the footer.', 'travel' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Area 2', 'travel' ),
        'id'            => 'footer-2',
        'description'   => __( 'Widgets in this area will be shown in the footer.', 'travel' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Area 3', 'travel' ),
        'id'            => 'footer-3',
        'description'   => __( 'Widgets in this area will be shown in the footer.', 'travel' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Area 4', 'travel' ),
        'id'            => 'footer-4',
        'description'   => __( 'Widgets in this area will be shown in the footer.', 'travel' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );    
}
add_action( 'widgets_init', 'travel_widgets_init' );
