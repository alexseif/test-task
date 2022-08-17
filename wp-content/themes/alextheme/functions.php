<?php

function alextheme_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'alextheme_theme_support');

function alextheme_register_styles() {
    wp_enqueue_style('alextheme-base-style', get_template_directory_uri() . '/style.css', array('alextheme-googlefonts'), '1.0', 'all');
    wp_enqueue_style('alextheme-googlefonts', 'https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'alextheme_register_styles');

function alextheme_register_scripts() {
    wp_enqueue_script('alextheme-base-script', get_template_directory_uri() . '/script.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'alextheme_register_scripts');

?>