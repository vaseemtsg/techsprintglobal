<?php
	
load_template( get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php' );

/**
 * Recommended plugins.
 */
function startup_consultant_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Siteready Coming Soon Under Construction', 'startup-consultant' ),
			'slug'             => 'siteready-coming-soon-under-construction',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	startup_consultant_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'startup_consultant_register_recommended_plugins' );