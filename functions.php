<?php


function setup_the_template(){
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    
    add_theme_support( 'block-templates' );
    add_theme_support( 'block-template-parts' );
    add_theme_support( 'core-block-patterns' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    
}
add_action( 'after_setup_theme', 'setup_the_template' );




