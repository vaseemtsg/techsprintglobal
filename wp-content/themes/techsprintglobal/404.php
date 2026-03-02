<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package techsprintglobal
 */

get_header();
?>

<section class="site-section not-found">
	<div class="site-container">
		<div class="not-found-inner">
			<h1 class="page-title"><?php esc_html_e('Page Not Found', 'techsprintglobal'); ?></h1>
			<p><?php esc_html_e('The page you requested does not exist.', 'techsprintglobal'); ?></p>
			<p>
				<?php esc_html_e('Please use the navigation above to find your way, or go to our', 'techsprintglobal'); ?>
				<a class="inline-link" href="<?php echo esc_url(home_url('/')); ?>">
					<?php esc_html_e('homepage', 'techsprintglobal'); ?>
				</a>.
			</p>
		</div>
	</div>
</section>

<?php
get_footer();
