<?php

// Script and Style Includes.
require get_template_directory(). '/inc/files_includes.php';

// Widget Registration
require get_template_directory(). '/inc/xspark_widget_registration.php';

// Support
function xspark_theme_setup() {
    add_theme_support( 'title-tag' );  // Adds <title> tag support
    add_theme_support( 'custom-logo' ); // Logo
    add_theme_support( 'post-thumbnails' ); // Post thumbnails
}
add_action( 'after_setup_theme', 'xspark_theme_setup');

// Register menu
function xspark_menu_register() {
    register_nav_menus( array(
        'primary' => __('Primary Menu'),
    ));
}
add_action('init','xspark_menu_register');

// Filter the excerpt length
add_filter( 'excerpt_length', function( $length ) { return 10; }, 999 );
add_filter('excerpt_more', function($more) { return '...'; });
