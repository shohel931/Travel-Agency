<?php  


// Css and JS Calling
function travel_enqueue_scripts(){
    wp_enqueue_style(' style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri(). '/css/bootstrap.css', array(), '5.0.2', 'all');
    wp_register_style('main', get_template_directory_uri(). '/css/main.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('main');



    // JS
    wp_enqueue_script( 'jquary');
    wp_enqueue_script('bootstrap', get_template_directory_uri(). '/js/bootstrap.js', array(), '5.0.2', true);
    wp_enqueue_script('main', get_template_directory_uri(). '/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'travel_enqueue_scripts');

// Font Awesome
function travel_enqueue_fontawesome() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'travel_enqueue_fontawesome');