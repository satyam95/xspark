<?php

function xspark_scripts_enqueue() {
    // Style
    wp_enqueue_style('xspark-main-css', get_theme_file_uri('css/main.css'), 10000);
    wp_enqueue_style('xspark-custom-theme-css', get_theme_file_uri('css/custom-theme.css'));
    // JavaScript
    wp_enqueue_script('xspark-main-js', get_theme_file_uri('js/main.js'));
}

add_action('wp_enqueue_scripts', 'xspark_scripts_enqueue');