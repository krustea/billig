<?php
add_action( 'wp_enqueue_scripts', 'insert_css' );

function insert_css() {
    wp_enqueue_script('jquery');
    wp_register_script('jquery',get_template_directory_uri() . '/js/jquery-3.3.1.min.js');
    wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/css/owl.carousel.min.css' );
    wp_enqueue_style( 'owl.theme.default', get_template_directory_uri() . '/css/owl.theme.default.min.css' );
    wp_enqueue_style( 'stellarnav', get_template_directory_uri() . '/css/stellarnav.min.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
//    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js' );
//    wp_enqueue_script( 'jquery' );
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
    wp_enqueue_script('popper');
    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
    wp_enqueue_script('bootstrap');
    wp_register_script( 'owl.carousel', get_template_directory_uri() . '/js/owl.carousel.min.js');
    wp_enqueue_script('owl.carousel');
    wp_register_script( 'stellarnav', get_template_directory_uri() . '/js/stellarnav.min.js');
    wp_enqueue_script('stellarnav');
    wp_register_script('scripts',get_template_directory_uri() . '/js/scripts.js');
    wp_enqueue_script('scripts');
    wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.8.1/css/all.css' );

}


add_theme_support( 'menus' );
register_nav_menus( array( 'menu-principal'  => 'Navigation principale',
    'menu-secondaire' => 'Navigation secondaire'
) );
