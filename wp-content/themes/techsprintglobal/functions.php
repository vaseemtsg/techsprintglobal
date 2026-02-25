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
		
		/**
		 * Register sidebar for category pages
		 */
		register_sidebar(array(
			'name'          => __('Sidebar', 'techsprintglobal'),
			'id'            => 'sidebar-1',
			'description'   => __('Add widgets here to appear in your sidebar.', 'techsprintglobal'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		));
	}
endif; // techsprintglobal_theme_setup
add_action('after_setup_theme', 'techsprintglobal_theme_setup');

/**
 * Register Custom Post Type: Case Studies
 */
function techsprintglobal_register_case_study_post_type() {
    $labels = array(
        'name'                  => _x('Case Studies', 'Post type general name', 'techsprintglobal'),
        'singular_name'         => _x('Case Study', 'Post type singular name', 'techsprintglobal'),
        'menu_name'             => _x('Case Studies', 'Admin Menu text', 'techsprintglobal'),
        'name_admin_bar'        => _x('Case Study', 'Add New on Toolbar', 'techsprintglobal'),
        'add_new'               => __('Add New', 'techsprintglobal'),
        'add_new_item'          => __('Add New Case Study', 'techsprintglobal'),
        'new_item'              => __('New Case Study', 'techsprintglobal'),
        'edit_item'             => __('Edit Case Study', 'techsprintglobal'),
        'view_item'             => __('View Case Study', 'techsprintglobal'),
        'all_items'             => __('All Case Studies', 'techsprintglobal'),
        'search_items'          => __('Search Case Studies', 'techsprintglobal'),
        'parent_item_colon'     => __('Parent Case Studies:', 'techsprintglobal'),
        'not_found'             => __('No case studies found.', 'techsprintglobal'),
        'not_found_in_trash'    => __('No case studies found in Trash.', 'techsprintglobal'),
        'featured_image'        => _x('Case Study Cover Image', 'Overrides the "Featured Image" phrase for this post type.', 'techsprintglobal'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the "Set featured image" phrase for this post type.', 'techsprintglobal'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the "Remove featured image" phrase for this post type.', 'techsprintglobal'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the "Use as featured image" phrase for this post type.', 'techsprintglobal'),
        'archives'              => _x('Case Study archives', 'The post type archive label used in nav menus.', 'techsprintglobal'),
        'insert_into_item'      => _x('Insert into case study', 'Overrides the "Insert into post"/"Insert into page" phrase (used when inserting media).', 'techsprintglobal'),
        'uploaded_to_this_item' => _x('Uploaded to this case study', 'Overrides the "Uploaded to this post"/"Uploaded to this page" phrase (used when viewing media attached to a post).', 'techsprintglobal'),
        'filter_items_list'     => _x('Filter case studies list', 'Screen reader text for the filter links heading on the post type listing screen.', 'techsprintglobal'),
        'items_list_navigation' => _x('Case studies list navigation', 'Screen reader text for the pagination heading on the post type listing screen.', 'techsprintglobal'),
        'items_list'            => _x('Case studies list', 'Screen reader text for the items list heading on the post type listing screen.', 'techsprintglobal'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'case-studies'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'author'),
        'show_in_rest'       => true,
    );

    register_post_type('case_study', $args);
}
add_action('init', 'techsprintglobal_register_case_study_post_type');

/**
 * Register taxonomy for Case Study Categories
 */
function techsprintglobal_register_case_study_taxonomy() {
    $labels = array(
        'name'              => _x('Case Study Categories', 'taxonomy general name', 'techsprintglobal'),
        'singular_name'     => _x('Case Study Category', 'taxonomy singular name', 'techsprintglobal'),
        'search_items'      => __('Search Case Study Categories', 'techsprintglobal'),
        'all_items'         => __('All Case Study Categories', 'techsprintglobal'),
        'parent_item'       => __('Parent Case Study Category', 'techsprintglobal'),
        'parent_item_colon' => __('Parent Case Study Category:', 'techsprintglobal'),
        'edit_item'         => __('Edit Case Study Category', 'techsprintglobal'),
        'update_item'       => __('Update Case Study Category', 'techsprintglobal'),
        'add_new_item'      => __('Add New Case Study Category', 'techsprintglobal'),
        'new_item_name'     => __('New Case Study Category Name', 'techsprintglobal'),
        'menu_name'         => __('Case Study Categories', 'techsprintglobal'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'case-study-category'),
        'show_in_rest'      => true,
    );

    register_taxonomy('case_study_category', array('case_study'), $args);
}
add_action('init', 'techsprintglobal_register_case_study_taxonomy');

/**
 * Flush rewrite rules on theme activation
 */
function techsprintglobal_flush_rewrite_rules() {
    techsprintglobal_register_case_study_post_type();
    techsprintglobal_register_case_study_taxonomy();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'techsprintglobal_flush_rewrite_rules');

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
 * Ensure proper pagination for Case Study archive
 */
function techsprintglobal_case_study_archive_pagination($query) {
    if (!is_admin() && $query->is_main_query() && is_post_type_archive('case_study')) {
        $query->set('posts_per_page', 9); // Set 9 posts per page for case studies
    }
}
add_action('pre_get_posts', 'techsprintglobal_case_study_archive_pagination');

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

/**
 * Add custom query variables for home page pagination and filtering
 */
function techsprintglobal_query_vars($query_vars) {
    $query_vars[] = 'blog_page';
    $query_vars[] = 'blog_category';
    $query_vars[] = 'case_study_page';
    $query_vars[] = 'case_study_category';
    return $query_vars;
}
add_filter('query_vars', 'techsprintglobal_query_vars');

/**
 * Enqueue home page scripts
 */
function techsprintglobal_home_page_scripts() {
    // Only load on home page template
    if (is_page_template('templates/home-page.php')) {
        wp_enqueue_script(
            'home-page-js',
            get_template_directory_uri() . '/assets/js/home-page.js',
            array(),
            _S_VERSION,
            true
        );
        
        // Pass data to JavaScript
        wp_localize_script('home-page-js', 'homePageData', array(
            'ajaxUrl' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('home_page_nonce')
        ));
    }
}
add_action('wp_enqueue_scripts', 'techsprintglobal_home_page_scripts');

/**
 * AJAX handler for loading blog posts
 */
function techsprintglobal_load_blog_posts() {
    check_ajax_referer('home_page_nonce', 'nonce');
    
    $category = sanitize_text_field($_POST['category'] ?? 'all');
    $page = intval($_POST['page'] ?? 1);
    
    // Build query args
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 6,
        'paged' => $page,
        'orderby' => 'date',
        'order' => 'DESC'
    );
    
    // Add category filter if not "all"
    if ($category !== 'all') {
        $args['category_name'] = $category;
    }
    
    $query = new WP_Query($args);
    
    $posts_html = '';
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            ob_start();
            ?>
            <article class="post-card blog-card">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-card-image">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium_large'); ?>
                        </a>
                    </div>
                <?php endif; ?>
                
                <div class="post-card-content">
                    <?php
                    $categories = get_the_category();
                    if ($categories) :
                        ?>
                        <div class="post-card-category">
                            <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>">
                                <?php echo esc_html($categories[0]->name); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    
                    <h3 class="post-card-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                    
                    <div class="post-card-excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                    
                    <div class="post-card-meta">
                        <span class="post-date"><?php echo esc_html(get_the_date()); ?></span>
                    </div>
                    
                    <a href="<?php the_permalink(); ?>" class="post-card-read-more">
                        <?php esc_html_e('Read More', 'techsprintglobal'); ?> →
                    </a>
                </div>
            </article>
            <?php
            $posts_html .= ob_get_clean();
        }
    } else {
        $posts_html = '<div class="no-posts"><p>' . esc_html__('No blog posts found.', 'techsprintglobal') . '</p></div>';
    }
    
    wp_reset_postdata();
    
    // Generate pagination
    $pagination_html = '';
    if ($query->max_num_pages > 1) {
        $pagination_args = array(
            'base' => add_query_arg('blog_page', '%#%'),
            'format' => '?blog_page=%#%',
            'total' => $query->max_num_pages,
            'current' => $page,
            'prev_text' => __('&laquo; Previous'),
            'next_text' => __('Next &raquo;'),
            'type' => 'array',
            'before_page_number' => '<span>',
            'after_page_number' => '</span>',
        );
        
        // Add category to pagination links if needed
        if ($category !== 'all') {
            $pagination_args['base'] = add_query_arg(array('blog_category' => $category), $pagination_args['base']);
        }
        
        $pagination = paginate_links($pagination_args);
        
        if ($pagination) {
            ob_start();
            ?>
            <nav class="pagination-nav">
                <ul class="pagination-list">
                    <?php foreach ($pagination as $page_link) : ?>
                        <li class="pagination-item"><?php echo wp_kses_post($page_link); ?></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
            <?php
            $pagination_html = ob_get_clean();
        }
    }
    
    wp_send_json_success(array(
        'posts' => $posts_html,
        'pagination' => $pagination_html
    ));
}
add_action('wp_ajax_load_blog_posts', 'techsprintglobal_load_blog_posts');
add_action('wp_ajax_nopriv_load_blog_posts', 'techsprintglobal_load_blog_posts');

/**
 * AJAX handler for loading case studies
 */
function techsprintglobal_load_case_studies() {
    check_ajax_referer('home_page_nonce', 'nonce');
    
    $category = sanitize_text_field($_POST['category'] ?? 'all');
    $page = intval($_POST['page'] ?? 1);
    
    // Build query args
    $args = array(
        'post_type' => 'case_study',
        'post_status' => 'publish',
        'posts_per_page' => 6,
        'paged' => $page,
        'orderby' => 'date',
        'order' => 'DESC'
    );
    
    // Add category filter if not "all"
    if ($category !== 'all') {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'case_study_category',
                'field' => 'slug',
                'terms' => $category,
            )
        );
    }
    
    $query = new WP_Query($args);
    
    $posts_html = '';
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            ob_start();
            ?>
            <article class="post-card case-study-card">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-card-image">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium_large'); ?>
                        </a>
                    </div>
                <?php endif; ?>
                
                <div class="post-card-content">
                    <?php
                    $categories = get_the_terms(get_the_ID(), 'case_study_category');
                    if ($categories && !is_wp_error($categories)) :
                        ?>
                        <div class="post-card-category">
                            <a href="<?php echo esc_url(get_term_link($categories[0])); ?>">
                                <?php echo esc_html($categories[0]->name); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    
                    <h3 class="post-card-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                    
                    <div class="post-card-excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                    
                    <div class="post-card-meta">
                        <span class="post-date"><?php echo esc_html(get_the_date()); ?></span>
                    </div>
                    
                    <a href="<?php the_permalink(); ?>" class="post-card-read-more">
                        <?php esc_html_e('Read More', 'techsprintglobal'); ?> →
                    </a>
                </div>
            </article>
            <?php
            $posts_html .= ob_get_clean();
        }
    } else {
        $posts_html = '<div class="no-posts"><p>' . esc_html__('No case studies found.', 'techsprintglobal') . '</p></div>';
    }
    
    wp_reset_postdata();
    
    // Generate pagination
    $pagination_html = '';
    if ($query->max_num_pages > 1) {
        $pagination_args = array(
            'base' => add_query_arg('case_study_page', '%#%'),
            'format' => '?case_study_page=%#%',
            'total' => $query->max_num_pages,
            'current' => $page,
            'prev_text' => __('&laquo; Previous'),
            'next_text' => __('Next &raquo;'),
            'type' => 'array',
            'before_page_number' => '<span>',
            'after_page_number' => '</span>',
        );
        
        // Add category to pagination links if needed
        if ($category !== 'all') {
            $pagination_args['base'] = add_query_arg(array('case_study_category' => $category), $pagination_args['base']);
        }
        
        $pagination = paginate_links($pagination_args);
        
        if ($pagination) {
            ob_start();
            ?>
            <nav class="pagination-nav">
                <ul class="pagination-list">
                    <?php foreach ($pagination as $page_link) : ?>
                        <li class="pagination-item"><?php echo wp_kses_post($page_link); ?></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
            <?php
            $pagination_html = ob_get_clean();
        }
    }
    
    wp_send_json_success(array(
        'posts' => $posts_html,
        'pagination' => $pagination_html
    ));
}
add_action('wp_ajax_load_case_studies', 'techsprintglobal_load_case_studies');
add_action('wp_ajax_nopriv_load_case_studies', 'techsprintglobal_load_case_studies');
