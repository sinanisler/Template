<?php




function setup_the_template(){
    add_theme_support( 'post-thumbnails' );
    
    add_theme_support( 'title-tag' );
    add_theme_support( 'block-templates' );
    add_theme_support( 'block-template-parts' );
    
    add_theme_support( 'core-block-patterns' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'editor-gradient-presets' );
    add_theme_support( 'editor-font-sizes' );
    add_theme_support( 'editor-styles' );

}
add_action( 'after_setup_theme', 'setup_the_template' );




