<?php
/**
 * Theme Info Page (optimized)
 *
 * @package Startup Consultant
 */

namespace Startup_Consultant;

if ( ! class_exists( '\WP_Upgrader_Skin' ) ) {
    require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
}

use const DAY_IN_SECONDS;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Ensure required WP files are available before we extend or call WP classes/functions.
 * These are only required in admin context; if loaded on front-end, they still safely exist but we guard with is_admin().
 */
if ( is_admin() ) {
	if ( ! function_exists( 'get_plugins' ) ) {
		require_once ABSPATH . 'wp-admin/includes/plugin.php';
	}
	require_once ABSPATH . 'wp-admin/includes/plugin-install.php';
	require_once ABSPATH . 'wp-admin/includes/file.php';
	require_once ABSPATH . 'wp-admin/includes/misc.php';
	if ( ! class_exists( 'WP_Upgrader' ) ) {
		require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
	}
}

/**
 * Simple silent upgrader skin to suppress output.
 */
class Silent_Skin extends \WP_Upgrader_Skin {
	public function header() {}
	public function footer() {}
	public function feedback( $string, ...$args ) {}
	public function error( $errors ) {}
	public function before() {}
	public function after() {}
}

/* -------------------------------
 * Helper functions (namespaced)
 * ------------------------------- */

/**
 * Check if a plugin folder exists in plugins directory.
 *
 * @param string $plugin_slug Plugin folder slug.
 * @return bool
 */
function is_startup_consultant_plugin_installed( $plugin_slug ) {
	$installed_plugins = \get_plugins();
	foreach ( $installed_plugins as $path => $details ) {
		if ( 0 === strpos( $path, $plugin_slug ) ) {
			return true;
		}
	}
	return false;
}

/**
 * Update install/activate progress stored in transient.
 *
 * @param string $plugin_name Plugin human name.
 * @param string $status      Status string.
 * @return void
 */
function update_install_and_activate_progress( $plugin_name, $status ) {
	$progress = (array) \get_transient( 'install_and_activate_progress' );
	$progress[] = array(
		'plugin' => $plugin_name,
		'status' => $status,
	);
	\set_transient( 'install_and_activate_progress', $progress, MINUTE_IN_SECONDS * 10 );
}

/* -------------------------------
 * AJAX: Install & Activate Plugins
 * ------------------------------- */

/**
 * Install and activate recommended plugins (AJAX).
 *
 * Expects:
 * - nonce (key: 'nonce')
 *
 * Returns JSON: { success: true, data: { redirect_url: '...' } }
 *
 * @return void
 */
function startup_consultant_install_and_activate_plugins() {

	// Capability check.
	if ( ! \current_user_can( 'manage_options' ) ) {
		\wp_send_json_error( array( 'message' => __( 'Insufficient permissions', 'startup-consultant' ) ) );
	}

	// Nonce check (JS posts 'nonce')
	\check_ajax_referer( 'startup_consultant_welcome_nonce', 'nonce' );

	$recommended_plugins = array(
		array(
			'name' => __( 'Siteready Coming Soon Under Construction', 'startup-consultant' ),
			'slug' => 'siteready-coming-soon-under-construction',
			'file' => 'siteready-coming-soon-under-construction.php',
		)
	);

	\set_transient( 'install_and_activate_progress', array(), MINUTE_IN_SECONDS * 10 );

	foreach ( $recommended_plugins as $plugin ) {
		$plugin_slug = $plugin['slug'];
		$plugin_file = $plugin['file'];
		$plugin_name = $plugin['name'];

		// If already active
		if ( \is_plugin_active( $plugin_slug . '/' . $plugin_file ) ) {
			update_install_and_activate_progress( $plugin_name, 'Already Active' );
			continue;
		}

		// If installed but not active -> activate
		if ( is_startup_consultant_plugin_installed( $plugin_slug ) ) {
			$activate = \activate_plugin( $plugin_slug . '/' . $plugin_file );
			if ( \is_wp_error( $activate ) ) {
				update_install_and_activate_progress( $plugin_name, 'Error' );
				continue;
			}
			update_install_and_activate_progress( $plugin_name, 'Activated' );
			continue;
		}

		// Not installed -> install
		update_install_and_activate_progress( $plugin_name, 'Installing' );

		$api = \plugins_api( 'plugin_information', array(
			'slug'   => $plugin_slug,
			'fields' => array( 'sections' => false ),
		) );

		if ( \is_wp_error( $api ) ) {
			update_install_and_activate_progress( $plugin_name, 'Error' );
			continue;
		}

		// Use global Plugin_Upgrader (fully qualified)
		$upgrader = new \Plugin_Upgrader( new Silent_Skin() );
		$install  = $upgrader->install( $api->download_link );

		if ( $install ) {
			$activate = \activate_plugin( $plugin_slug . '/' . $plugin_file );
			if ( \is_wp_error( $activate ) ) {
				update_install_and_activate_progress( $plugin_name, 'Error' );
				continue;
			}
			update_install_and_activate_progress( $plugin_name, 'Activated' );
		} else {
			update_install_and_activate_progress( $plugin_name, 'Error' );
		}
	}

	\delete_transient( 'install_and_activate_progress' );

	if ( \ob_get_length() ) {
		\ob_clean();
	}

	$redirect_url = \admin_url( 'themes.php?page=startup-consultant-theme-info-page' );

	\wp_send_json_success( array(
		'redirect_url' => $redirect_url,
	) );
}

/* -------------------------------
 * AJAX: Dismiss Notice Handler
 * ------------------------------- */

/**
 * Handle AJAX notice dismissal (sets transient so notice stops showing for a few days).
 *
 * Expects:
 * - wpnonce (key: 'wpnonce')
 *
 * @return void
 */
function startup_consultant_dismissed_notice_handler() {
	// Must be logged in (ajax is admin-ajax)
	if ( ! \current_user_can( 'manage_options' ) ) {
		\wp_send_json_error();
	}

	\check_ajax_referer( 'startup_consultant_welcome_nonce', 'wpnonce' );

	\set_transient( 'startup_consultant_notice_dismissed', true, DAY_IN_SECONDS * 3 );

	\wp_send_json_success( array( 'message' => __( 'Notice dismissed', 'startup-consultant' ) ) );
}

/* -------------------------------
 * Register AJAX hooks (namespaced)
 * ------------------------------- */

add_action( 'wp_ajax_startup_consultant_install_and_activate_plugins', __NAMESPACE__ . '\\startup_consultant_install_and_activate_plugins' );
add_action( 'wp_ajax_nopriv_startup_consultant_install_and_activate_plugins', __NAMESPACE__ . '\\startup_consultant_install_and_activate_plugins' );

add_action( 'wp_ajax_startup_consultant_dismissed_notice_handler', __NAMESPACE__ . '\\startup_consultant_dismissed_notice_handler' );
add_action( 'wp_ajax_nopriv_startup_consultant_dismissed_notice_handler', __NAMESPACE__ . '\\startup_consultant_dismissed_notice_handler' );

/* -------------------------------
 * Enqueue admin script (localized for JS)
 * ------------------------------- */

/**
 * Enqueue admin JS/CSS for notice only on relevant admin pages.
 *
 * Uses the object `startup_consultant_localize` which your JS expects.
 *
 * @param string $hook Current admin page hook.
 * @return void
 */
function startup_consultant_enqueue_admin_script( $hook ) {

	// Only load on themes page or our theme info/guide pages (adjust slugs if needed)
	if (
		'appearance_page_startup-consultant-theme-info-page' !== $hook &&
		'themes.php' !== $hook
	) {
		return;
	}

	wp_localize_script( 'startup-consultant-welcome-notice', 'startup_consultant_localize', array(
		'ajax_url'     => esc_url_raw( admin_url( 'admin-ajax.php' ) ),
		'nonce'        => wp_create_nonce( 'startup_consultant_welcome_nonce' ), // for install action (JS uses 'nonce')
		'dismiss_nonce'=> wp_create_nonce( 'startup_consultant_welcome_nonce' ), // for dismiss action (JS posts 'wpnonce')
		'redirect_url' => esc_url_raw( admin_url( 'themes.php?page=startup-consultant-theme-info-page' ) ),
	) );

	// Styles for notice (if any)
	wp_enqueue_style(
		'startup-consultant-theme-notice-css',
		get_template_directory_uri() . '/inc/startup-consultant-theme-info-page/css/theme-details.css',
		array(),
		'1.0.0'
	);
}
add_action( 'admin_enqueue_scripts', __NAMESPACE__ . '\\startup_consultant_enqueue_admin_script' );

/* -------------------------------
 * Theme Notice Class (renders the notice)
 * ------------------------------- */

new Startup_Consultant_Theme_Notice();

class Startup_Consultant_Theme_Notice {

	/** @var \WP_Theme */
	private $startup_consultant_theme;

	private $startup_consultant_url = 'https://www.themescarts.com/';

	/**
	 * Class construct.
	 */
	public function __construct() {
		$this->startup_consultant_theme = \wp_get_theme();

		// Handle dismiss via normal form POST as fallback
		add_action( 'init', array( $this, 'handle_dismiss_notice' ) );

		// Add admin notice if transient not set
		if ( ! \get_transient( 'startup_consultant_notice_dismissed' ) ) {
			add_action( 'admin_notices', array( $this, 'startup_consultant_render_notice' ) );
		}

		add_action( 'switch_theme', array( $this, 'show_notice' ) );
		// Script/style enqueue handled globally above
	}

	/**
	 * Delete notice transient on theme switch.
	 *
	 * @return void
	 */
	public function show_notice() {
		\delete_transient( 'startup_consultant_notice_dismissed' );
	}

	/**
	 * Render the admin notice.
	 */
	public function startup_consultant_render_notice() {
		?>
		<div id="startup-consultant-theme-notice" class="notice notice-info is-dismissible" data-notice="startup_consultant_welcome">
			<div class="startup-consultant-content-wrap">
				<div class="startup-consultant-notice-left">
					<?php
					$this->startup_consultant_render_title();
					$this->startup_consultant_render_content();
					$this->startup_consultant_render_actions();
					?>
				</div>
				<div class="startup-consultant-notice-right">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/screenshot.png' ); ?>" alt="<?php esc_attr_e( 'Theme Notice Image', 'startup-consultant' ); ?>">
				</div>
			</div>
		</div>
		<?php
	}

	/**
	 * Render title.
	 */
	protected function startup_consultant_render_title() {
		?>
		<h2>
			<?php
			printf(
				// translators: %s is the theme name
				esc_html__( 'Thank you for installing %s!', 'startup-consultant' ),
				'<span>' . esc_html( $this->startup_consultant_theme->get( 'Name' ) ) . '</span>'
			);
			?>
		</h2>
		<?php
	}

	/**
	 * Render content.
	 */
	protected function startup_consultant_render_content() {
		$startup_consultant_link = '<a href="' . esc_url( $this->startup_consultant_url ) . '" target="_blank">' . esc_html__( 'ThemesCarts', 'startup-consultant' ) . '</a>';

		$startup_consultant_text = sprintf(
			/* translators: %1$s: Author Name, %2$s: Link */
			esc_html__( 'Unlock the full potential of your new store with %1$s! Get started today by visiting %2$s to explore a wide range of ready-to-use patterns and demo templates, designed to enhance your online shopping experience.', 'startup-consultant' ),
			esc_html__( 'ThemesCarts', 'startup-consultant' ),
			$startup_consultant_link
		);

		echo wp_kses_post( wpautop( $startup_consultant_text ) );
	}

	/**
	 * Render action buttons.
	 */
	protected function startup_consultant_render_actions() {
		// Show plugin update notice (global function, so call with \ )
		$update = \startup_consultant_plugin_update_available('siteready-coming-soon-under-construction', 'siteready-coming-soon-under-construction.php');

		if ($update) {
			echo '<div style="...">' .
				sprintf(
					/* translators: %s: New version number available for the Siteready Coming Soon Under Construction plugin */
					esc_html__( '⚠️ Siteready Coming Soon Under Construction update available (v%s).', 'startup-consultant' ),
					esc_html( $update->new_version )
				) .
				' <a href="' . esc_url(admin_url('update-core.php')) . '">' .
				esc_html__('Update now', 'startup-consultant') .
				'</a></div>';
			}
		?>
		<div class="notice-actions">
			<a class="button-primary theme-install" id="install-activate-button" href="#">
				<?php esc_html_e( 'Activate Now & Discover Theme Details', 'startup-consultant' ); ?>
			</a>

			<form class="startup-consultant-notice-dismiss-form" method="post" style="display:inline-block;margin-left:12px;">
				<button type="submit" name="notice-dismiss" value="true" id="btn-dismiss" class="button">
					<?php esc_html_e( 'Dismiss', 'startup-consultant' ); ?>
				</button>
			</form>
		</div>
		<?php
	}

	/**
	 * Handle dismiss action via POST fallback (for users without JS).
	 */
	public function handle_dismiss_notice() {
		if ( isset( $_POST['notice-dismiss'] ) ) {
			\set_transient( 'startup_consultant_notice_dismissed', true, DAY_IN_SECONDS * 3 );
			\wp_safe_redirect( esc_url_raw( $_SERVER['REQUEST_URI'] ) );
			exit;
		}
	}
}
