<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the 'after_setup_theme' hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function setup_the_template(){
    /*
     * Enable support for managing document title tag.
     * This feature should be added to every theme, as it ensures that theme
     * displays correct page titles for each view in your WordPress site.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for block templates.
     * This feature allows themes to use block-based templates composed of HTML files
     * with .html extension.
     */
    add_theme_support( 'block-templates' );

    /*
     * Enable support for block template parts.
     * This feature allows themes to use reusable parts of block templates
     * and reuse sections of design across multiple templates.
     */
    add_theme_support( 'block-template-parts' );
}
// Add action to the 'after_setup_theme' hook, which triggers the function after the theme is loaded
add_action( 'after_setup_theme', 'setup_the_template' );



















