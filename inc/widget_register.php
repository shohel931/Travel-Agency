<?php 

// Widget Register
function sample_widgets(){
    register_sidebar(array(
        'name' => __('Footer 1', 'travel-agency'),
        'id' => 'footer-1',
        'description' =>__('This is widget', 'travel-agency'),
        'before_widget' => '<div class="childsidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget_title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer 2', 'travel-agency'),
        'id' => 'footer-2',
        'description' =>__('This is widget', 'travel-agency'),
        'before_widget' => '<div class="childsidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget_title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer 3', 'travel-agency'),
        'id' => 'footer-3',
        'description' =>__('This is widget', 'travel-agency'),
        'before_widget' => '<div class="childsidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget_title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer 4', 'travel-agency'),
        'id' => 'footer-4',
        'description' =>__('This is widget', 'travel-agency'),
        'before_widget' => '<div class="childsidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget_title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'sample_widgets');