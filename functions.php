<?php
/**
 * This file adds functions to the Frost WordPress theme.
 *
 *  Theme   : Template
 *  Author  : sinanisler.com
 *  License : GNU General Public License v2 or later
 */







add_action( 'wp_enqueue_scripts', 'register_template_resources' );
function register_template_resources() {

	wp_enqueue_style( 'Template', get_template_directory_uri() . '/style.css' ) , ;

}




/**
 * Function to set up theme defaults and register various WordPress features.
 */
function setup_the_template() {
    add_theme_support( 'title-tag' ); // Allows WP to manage document title tag.
    add_theme_support( 'block-templates' ); // Enables use of block-based templates.
    add_theme_support( 'block-template-parts' ); // Enables use of reusable block template parts.
    add_theme_support( 'post-thumbnails' ); // Enables post thumbnails.
    add_theme_support( 'automatic-feed-links' ); // Adds feed links to head for RSS.
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) ); // Adds HTML5 markup support.
    add_theme_support( 'custom-logo' ); // Adds support for custom logo.
    add_theme_support( 'custom-background' ); // Adds support for custom background.
    add_theme_support( 'custom-header' ); // Adds support for custom header.
    add_theme_support( 'custom-header-textcolor' ); // Adds support for custom header text color.
    add_theme_support( 'custom-header-video' ); // Adds support for custom header video.
    add_theme_support( 'menus' ); // Adds support for custom menus.
    add_theme_support( 'widgets' ); // Adds support for widgets.
    add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) ); // Adds support for post formats.



}
add_action( 'after_setup_theme', 'setup_the_template' ); // Hooking function after theme setup.




