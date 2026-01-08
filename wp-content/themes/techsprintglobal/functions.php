<?php
/**
 * techsprintglobal functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package techsprintglobal
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

define('TECH_SPRINT_GLOBAL__DIR_URI', get_template_directory_uri());

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
if (!function_exists('techsprintglobal_theme_setup')):

	/**
	 * Sets up theme defaults and registers support for various
	 * WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme
	 * hook, which runs before the init hook. The init hook is too late
	 * for some features, such as indicating support post thumbnails.
	 */
	function techsprintglobal_theme_setup()
	{
		// Add Title tag in our webpages
		add_theme_support('title-tag');

		/**
		 * Make theme available for translation.
		 * Translations can be placed in the /languages/ directory.
		 */
		load_theme_textdomain('techsprintglobal', get_template_directory() . '/languages');


		/**
		 * Enable support for post thumbnails and featured images.
		 */
		add_theme_support('post-thumbnails');

		/**
		 * Add support for two custom navigation menus.
		 */
		register_nav_menus(array(
			'primary' => __('Primary Menu', 'techsprintglobal'),
			'secondary' => __('Secondary Menu', 'techsprintglobal'),
		));
	}
endif; // techsprintglobal_theme_setup
add_action('after_setup_theme', 'techsprintglobal_theme_setup');

function custom_theme_customizer($wp_customize)
{

	// Add setting for mobile logo
	$wp_customize->add_setting('colored_logo', array(
		'default' => '',
		'transport' => 'refresh',
	));

	// Add control for uploading mobile logo
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'colored_logo', array(
		'label' => __('Colored Logo', 'techsprintglobal'),
		'section' => 'title_tagline',
		'settings' => 'colored_logo',
	)));

	// Add setting for mobile logo
	$wp_customize->add_setting('white_logo', array(
		'default' => '',
		'transport' => 'refresh',
	));

	// Add control for uploading mobile logo
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'white_logo', array(
		'label' => __('White Logo', 'techsprintglobal'),
		'section' => 'title_tagline',
		'settings' => 'white_logo',
	)));
}
add_action('customize_register', 'custom_theme_customizer');

function enqueue_all_frontend_styles_scripts()
{
	// Remove unused Gutenberg block styles to keep the theme lightweight.
	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('wc-block-style');
	wp_dequeue_style('wp-block-library-theme');
	wp_dequeue_style('global-styles');
	wp_dequeue_style('classic-theme-styles');

	// Load the core stylesheet (keeps the theme header information available).
	wp_enqueue_style(
		'techsprintglobal-base',
		get_stylesheet_uri(),
		array(),
		_S_VERSION
	);

	// Load the plain CSS bundle (no Tailwind/PostCSS build required).
	wp_enqueue_style(
		'techsprintglobal-main',
		TECH_SPRINT_GLOBAL__DIR_URI . '/assets/css/main.css',
		array('techsprintglobal-base'),
		_S_VERSION
	);

	// Load the main front-end script (vanilla JS only).
	wp_enqueue_script(
		'techsprintglobal-main',
		TECH_SPRINT_GLOBAL__DIR_URI . '/assets/js/main.js',
		array(),
		_S_VERSION,
		true
	);

}
add_action('wp_enqueue_scripts', 'enqueue_all_frontend_styles_scripts');

// Allow WebP and SVG uploads
function allow_custom_uploads($mimes)
{
	$mimes['webp'] = 'image/webp';
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('mime_types', 'allow_custom_uploads');

// Ensure WebP and SVG are displayable in the media library
function check_image_display($result, $path)
{
	$ext = pathinfo($path, PATHINFO_EXTENSION);
	if (in_array(strtolower($ext), ['webp', 'svg'])) {
		$result = true;
	}
	return $result;
}
add_filter('file_is_displayable_image', 'check_image_display', 10, 2);

// Secure SVG uploads
function secure_svg_upload($data, $file, $filename, $mimes)
{
	$filetype = wp_check_filetype($filename, $mimes);

	if ($filetype['ext'] === 'svg') {
		$data['ext'] = 'svg';
		$data['type'] = 'image/svg+xml';
		$data['proper_filename'] = $filename;
	}

	return $data;
}
add_filter('wp_check_filetype_and_ext', 'secure_svg_upload', 10, 4);



//Remove WPAUTOP from ACF TinyMCE Editor
function acf_wysiwyg_remove_wpautop()
{
	remove_filter('acf_the_content', 'wpautop');
}
add_action('acf/init', 'acf_wysiwyg_remove_wpautop');

function detect_device()
{
	$user_agent = $_SERVER['HTTP_USER_AGENT'];

	// Check for iPad (Including newer iPadOS versions)
	if (preg_match('/iPad|Macintosh/i', $user_agent) && preg_match('/(Mac OS|iOS) [0-9_]+ like Mac OS X/i', $user_agent)) {
		return 'iPad';
	}

	// General mobile detection
	if (wp_is_mobile()) {
		return 'Mobile';
	}

	// Default: Desktop
	return 'Desktop';
}

/**
 * Basic template helpers borrowed from the Underscores starter.
 * These keep core template parts working without relying on the old build tooling.
 */
if (!function_exists('techsprintglobal_posted_on')) :
	function techsprintglobal_posted_on()
	{
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if (get_the_time('U') !== get_the_modified_time('U')) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr(get_the_date(DATE_W3C)),
			esc_html(get_the_date()),
			esc_attr(get_the_modified_date(DATE_W3C)),
			esc_html(get_the_modified_date())
		);

		$posted_on = sprintf(
			esc_html_x('Posted on %s', 'post date', 'techsprintglobal'),
			$time_string
		);

		echo '<span class="posted-on">' . $posted_on . '</span>';
	}
endif;

if (!function_exists('techsprintglobal_posted_by')) :
	function techsprintglobal_posted_by()
	{
		$byline = sprintf(
			esc_html_x('by %s', 'post author', 'techsprintglobal'),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>';
	}
endif;

if (!function_exists('techsprintglobal_entry_footer')) :
	function techsprintglobal_entry_footer()
	{
		if ('post' === get_post_type()) {
			$categories_list = get_the_category_list(esc_html__(', ', 'techsprintglobal'));
			if ($categories_list) {
				printf('<span class="cat-links">' . esc_html__('Posted in %1$s', 'techsprintglobal') . '</span>', $categories_list);
			}

			$tags_list = get_the_tag_list('', esc_html_x(', ', 'list item separator', 'techsprintglobal'));
			if ($tags_list) {
				printf('<span class="tags-links">' . esc_html__('Tagged %1$s', 'techsprintglobal') . '</span>', $tags_list);
			}
		}

		if (!is_single() && !post_password_required() && (comments_open() || get_comments_number())) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						__('Leave a Comment<span class="screen-reader-text"> on %s</span>', 'techsprintglobal'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post(get_the_title())
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					__('Edit <span class="screen-reader-text">%s</span>', 'techsprintglobal'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post(get_the_title())
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if (!function_exists('techsprintglobal_post_thumbnail')) :
	function techsprintglobal_post_thumbnail()
	{
		if (post_password_required() || is_attachment() || !has_post_thumbnail()) {
			return;
		}

		if (is_singular()) : ?>
			<div class="post-thumbnail">
				<?php the_post_thumbnail('large'); ?>
			</div>
		<?php else : ?>
			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php the_post_thumbnail('medium_large', array('alt' => the_title_attribute(array('echo' => false)))); ?>
			</a>
		<?php
		endif;
	}
endif;
