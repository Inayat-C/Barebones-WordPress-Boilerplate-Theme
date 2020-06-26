<?php

// Sets up theme defaults and registers support for various WordPress features.
function theme_setup() {
    
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );

    // Switch default core markup for search form, comment form, and comments to output valid HTML5.
    // https://codex.wordpress.org/Theme_Markup
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    // Let WordPress manage the document title.
	add_theme_support( 'title-tag' );    

}
add_action( 'after_setup_theme', 'theme_setup' );

// Enqueue Scripts and Styles
require get_template_directory() . '/includes/enqueue-scripts.php';

// Remove Bloatware
require get_template_directory() . '/includes/bloatware.php';

// Theme functions
require get_template_directory() . '/includes/theme-functions.php';
