<?php











/**
 * Function to set up theme defaults and register various WordPress features.
 */
function setup_the_template() {
    add_theme_support( 'title-tag' ); // Allows WP to manage document title tag.
    add_theme_support( 'block-templates' ); // Enables use of block-based templates.
    add_theme_support( 'block-template-parts' ); // Enables use of reusable block template parts.
}
add_action( 'after_setup_theme', 'setup_the_template' ); // Hooking function after theme setup.

















