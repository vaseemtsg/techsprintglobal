<?php
/**
 * Startup Consultant Child Theme Functions
 *
 * @package StartupConsultantChild
 */

/**
 * Enqueue parent and child theme stylesheets
 */
function startup_consultant_child_enqueue_styles() {
    // Enqueue parent theme's stylesheet
    wp_enqueue_style(
        'startup-consultant-parent-style',
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme(get_template())->get('Version')
    );
    
    // Enqueue child theme's stylesheet
    wp_enqueue_style(
        'startup-consultant-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('startup-consultant-parent-style'),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'startup_consultant_child_enqueue_styles');

/**
 * Add child theme setup functionality
 */
function startup_consultant_child_setup() {
    // Add child theme specific setup here
    // For example: add_theme_support(), add_image_size(), etc.
}
add_action('after_setup_theme', 'startup_consultant_child_setup');

/**
 * Load child theme textdomain
 */
function startup_consultant_child_load_textdomain() {
    load_child_theme_textdomain('startup-consultant-child', get_stylesheet_directory() . '/languages');
}
add_action('after_setup_theme', 'startup_consultant_child_load_textdomain');
