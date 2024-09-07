<?php

//stylesheets
function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all' );

    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all' );

    wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts', 'load_css');

// Javascripts
function load_js()
{
    wp_register_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);

    wp_enqueue_script('bootstrap_js');
}

add_action('wp_enqueue_scripts', 'load_js');

// Add menu
add_theme_support('menus');

register_nav_menus(
    array(
        'navbar' => 'Nav Bar',
        'mobile-nav' => 'Mobile Nav Bar',
        'footer-bar' => 'Footer Bar',
    )
);