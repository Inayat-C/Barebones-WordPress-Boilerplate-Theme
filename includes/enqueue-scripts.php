<?php

function enqueue_scripts() {
	// Register Custom Javascript Files For Site
    wp_register_script('Theme-script', get_stylesheet_directory_uri().'/assets/js/dist/scripts.min.js', array(), "", true);

    // Register Custom CSS For Site
    wp_register_style('Theme-stylesheet', get_stylesheet_directory_uri().'/style.css');

    // Call all JS and CSS Files For Site 
    wp_enqueue_script('Theme-script');
    wp_enqueue_style('Theme-stylesheet');
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );