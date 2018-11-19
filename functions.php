<?php

function load_scripts() {
    wp_enqueue_script('bootstrap-js',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js',
        array('jquery'), '4.1.3', true);

    wp_enqueue_style('bootstrap-css',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',
         array(), '4.1.3', 'all');

    wp_enqueue_style('template', get_template_directory_uri(). '/css/template.css',
         array(), '1.0', 'all' );

    wp_enqueue_script('backstretch-js',
         'https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js',
         array('jquery'), '2.0.4', true );
         
    wp_enqueue_script('js-backstretch-js', get_template_directory_uri(). '/js/backstretch.js',
        array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'load_scripts');

register_nav_menus(
    array(
        'my_main_menu' => 'Main Menu'        
    )
);

// disable admin-bar
show_admin_bar(false);