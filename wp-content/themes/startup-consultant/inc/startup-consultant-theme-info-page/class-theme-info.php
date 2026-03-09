<?php
/**
 * Theme Info Page
 *
 * @package Startup Consultant
 */

function startup_consultant_theme_details() {
	add_theme_page( 'Themes', 'Startup Consultant Theme', 'edit_theme_options', 'startup-consultant-theme-info-page', 'theme_details_display', null );
}
add_action( 'admin_menu', 'startup_consultant_theme_details' );

function theme_details_display() {

	include_once 'templates/theme-details.php';

}

add_action( 'admin_enqueue_scripts', 'startup_consultant_theme_details_style' );

function startup_consultant_theme_details_style() {
    wp_register_style( 'startup_consultant_theme_details_css', get_template_directory_uri() . '/inc/startup-consultant-theme-info-page/css/theme-details.css', false, '1.0.0' );
    wp_enqueue_style( 'startup_consultant_theme_details_css' );
}