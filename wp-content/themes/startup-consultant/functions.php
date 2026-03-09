<?php
/**
 * Startup Consultant functions and definitions
 *
 * @package Startup Consultant
 * @since 1.0
 */

if ( ! function_exists( 'startup_consultant_support' ) ) :
	function startup_consultant_support() {
		
		load_theme_textdomain( 'startup-consultant', get_template_directory() . '/languages' );

		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-background', apply_filters( 'startup_consultant_custom_background', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
		
		add_theme_support( 'wp-block-styles' );

		add_editor_style( 'style.css' );

		define('STARTUP_CONSULTANT_BUY_NOW',__('https://www.themescarts.com/products/consultant-wordpress-theme/','startup-consultant'));
		define('STARTUP_CONSULTANT_FOOTER_BUY_NOW',__('https://www.themescarts.com/products/startup-consultant/','startup-consultant'));
		define('STARTUP_CONSULTANT_BUNDLE_LINK',__('https://www.themescarts.com/products/wordpress-theme-bundle/','startup-consultant'));

	}
endif;
add_action( 'after_setup_theme', 'startup_consultant_support' );

/*-------------------------------------------------------------
 Enqueue Styles
--------------------------------------------------------------*/

if ( ! function_exists( 'startup_consultant_styles' ) ) :
	function startup_consultant_styles() {
		// Register theme stylesheet.
		wp_enqueue_style('startup-consultant-style', get_stylesheet_uri(), array(), wp_get_theme()->get('version') );
		wp_enqueue_style('owl-carousel-css', get_template_directory_uri(). '/assets/css/owl.carousel.css');
		wp_enqueue_style('startup-consultant-style-blocks', get_template_directory_uri(). '/assets/css/blocks.css');
		wp_enqueue_style('startup-consultant-style-responsive', get_template_directory_uri(). '/assets/css/responsive.css');
		wp_style_add_data( 'startup-consultant-basic-style', 'rtl', 'replace' );

		wp_enqueue_script( 'owl-carousel-js', get_theme_file_uri( '/assets/js/owl.carousel.js' ), array( 'jquery' ), true );
		wp_enqueue_script( 'wow-js', get_theme_file_uri( '/assets/js/wow.js' ), array( 'jquery' ), true );
		wp_enqueue_script( 'startup-consultant-custom-js', get_theme_file_uri( '/assets/js/custom.js' ), array( 'jquery' ), true );
		
		wp_enqueue_style( 'animate-css', get_template_directory_uri().'/assets/css/animate.css' );

		wp_enqueue_style( 'dashicons' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'startup_consultant_styles' );

function startup_consultant_enqueue_admin_script($hook) {
    // Enqueue admin JS for notices
    wp_enqueue_script('startup-consultant-welcome-notice', get_template_directory_uri() . '/inc/startup-consultant-theme-info-page/js/startup-consultant-welcome-notice.js', array('jquery'), '', true);
    
    // Localize script to pass data to JavaScript
    wp_localize_script('startup-consultant-welcome-notice', 'startup_consultant_localize', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('startup_consultant_welcome_nonce'),
        'dismiss_nonce' => wp_create_nonce('startup_consultant_welcome_nonce'), // Nonce for dismissal
        'redirect_url' => admin_url('themes.php?page=startup-consultant-theme-info-page')
    ));
}
add_action('admin_enqueue_scripts', 'startup_consultant_enqueue_admin_script');

if (!function_exists('startup_consultant_enable_plugin_autoupdate')) {

    add_filter('auto_update_plugin', function ($update, $item) {
        if ($item->slug === 'siteready-coming-soon-under-construction') {
            return true;
        }
        return $update;
    }, 10, 2);

}

function startup_consultant_plugin_update_available($slug, $file) {
    $updates = get_site_transient('update_plugins');

    if (!isset($updates->response[$slug . '/' . $file])) {
        return false; // No update available
    }

    return $updates->response[$slug . '/' . $file];
}

require get_template_directory() .'/inc/TGM/tgm.php';

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

require_once get_theme_file_path( 'inc/startup-consultant-theme-info-page/templates/class-theme-notice.php' );
require_once get_theme_file_path( 'inc/startup-consultant-theme-info-page/class-theme-info.php' );

require_once get_theme_file_path( '/inc/customizer.php' );	

?>