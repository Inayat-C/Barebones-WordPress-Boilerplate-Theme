<?php
function my_assets() {
	// Register Custom Javascript Files For Site
    wp_register_script('Theme-script', get_stylesheet_directory_uri().'/assets/js/dist/scripts.min.js', array(), "", true);

    // Register Custom CSS For Site
    wp_register_style('Theme-stylesheet', get_stylesheet_directory_uri().'/style.css');

    // Call all JS and CSS Files For Site 
    wp_enqueue_script('Theme-script');
    wp_enqueue_style('Theme-stylesheet');
}
add_action( 'wp_enqueue_scripts', 'my_assets' );

// Sets up theme defaults and registers support for various WordPress features.
function theme_setup() {
    
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );

    // Switch default core markup for search form, comment form, and comments to output valid HTML5.
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    /*
    * Let WordPress manage the document title.
    */
	add_theme_support( 'title-tag' );    

}
add_action( 'after_setup_theme', 'theme_setup' );

// Remove Emoji Support
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

// Remove Comments
function remove_comment_reply_script(){
    wp_deregister_script( 'comment-reply' );
}
add_action('init','remove_comment_reply_script');

// Removes comments from admin menu
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'my_remove_admin_menus' );

// Removes comments from admin bar
function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );

// Removes comments from post and pages
function remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}
add_action('init', 'remove_comment_support', 100);

// Remove query strings for static resources
function _remove_script_version( $src ){
    $parts = explode( '?ver', $src );
    return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );

// Remove oEmbed scripts 
function speed_stop_loading_wp_embed() {
    if (!is_admin()) {
        wp_deregister_script('wp-embed');
    }
}
add_action('init', 'speed_stop_loading_wp_embed');

/**
* Helper function which fetches the file referenced in the $path directory. 
* Useful for outputting SVG code in your template without the SVG bloat. 
*
* fetch_file($filename);
*
* @param 
* $filename (string)(required) The name of your file, e.g 'logo.svg'
**/

function fetch_file($filename) {
    $path = ABSPATH.'/wp-content/themes/'.get_template().'/assets/images/'.$filename;
    if (file_exists($path)) {
        return file_get_contents($path);
    } else {
        return 'path doesnt exist';
    }
}

// Custom Post Types
require get_template_directory() . '/includes/custom-post-types.php';
