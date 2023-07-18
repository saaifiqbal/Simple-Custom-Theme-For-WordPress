<?php

// +++=== Linked Css & Header File ===+++
function market_theme_register_style(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('market_theme-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), $version,'all');
   
    wp_enqueue_style('market_theme-font-awesome.min.css', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), $version,'all');

    wp_enqueue_style('market_theme-owl', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), $version,'all');
    wp_enqueue_style('market_theme-response', get_template_directory_uri().'/assets/css/responsive.css', array(), $version,'all');
    
    wp_enqueue_style('market_theme-google_font', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,700;0,900;1,100;1,900&display=swap', false);

    wp_enqueue_style('market_theme-custom', get_stylesheet_uri(), array(), $version,'all');

    wp_enqueue_style('market_theme-theme_style', get_template_directory_uri().'/assets/css/theme_style.css', array(), $version,'all');

    wp_enqueue_style('market_theme-custom_style', get_template_directory_uri().'/assets/css/custom.css', array(), $version,'all');
}
add_action('wp_enqueue_scripts', 'market_theme_register_style');

// +++=== Linked script & footer File ===+++
function market_theme_register_javascript(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script ('CustomTheme-custom', get_template_directory_uri().'/assets/js/custom.js', array(), $version,'all');
    wp_enqueue_script ('CustomTheme-bootstrap.min.js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array(), $version,'all');
    wp_enqueue_script ('CustomTheme-bootstrap.bundle.min.js', get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js', array(), $version,'all');
    wp_enqueue_script ('CustomTheme-jquery-3.0.0.min.js', get_template_directory_uri().'/assets/js/jquery-3.0.0.min.js', array(), $version,'all');
    wp_enqueue_script ('CustomTheme-jquery.min.js', get_template_directory_uri().'/assets/js/jquery.min.js', array(), $version,'all');
    wp_enqueue_script ('CustomTheme-owl.carousel.min.js', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array(), $version,'all');
}
add_action('wp_enqueue_scripts', 'market_theme_register_javascript');