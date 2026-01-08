<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package techsprintglobal
 */
?>

<footer class="site-footer">
	<div class="footer-top">
		<div class="site-container footer-grid">
			<div class="footer-brand">
				<a href="<?php echo esc_url(home_url('/')); ?>" class="logo-link">
					<img width="140" height="50" loading="lazy"
						class="logo-img"
						src="<?php echo esc_url(get_theme_mod('colored_logo')); ?>"
						alt="techsprintglobal Logo" />
				</a>
				<p class="footer-description">
					<?php bloginfo('description'); ?>
				</p>
				<div class="footer-contacts">
					<?php
					$contacts = get_field('contacts', 'option');
					if (!empty($contacts['contact'])) :
						foreach ($contacts['contact'] as $contact) :
							?>
							<p>
								<a href="<?php echo esc_url($contact['url']); ?>" class="footer-link">
									<?php echo esc_html($contact['text']); ?>
								</a>
							</p>
							<?php
						endforeach;
					endif;
					?>
				</div>
				<div class="footer-social">
					<?php
					$social_media = get_field('social_media', 'option');
					$social_links = $social_media['social_links'] ?? [];
					foreach ($social_links as $link) :
						$link_url = $link['url'] ?? '';
						?>
						<a href="<?php echo esc_url($link_url); ?>" target="_blank" rel="noopener" class="social-icon">
							<img width="16" height="16" src="<?php echo esc_url($link['icon']['url']); ?>" alt="<?php echo esc_attr($link['icon']['alt']); ?>">
						</a>
					<?php endforeach; ?>
				</div>
			</div>
			<nav class="footer-nav" aria-label="<?php esc_attr_e('Footer Menu', 'techsprintglobal'); ?>">
				<?php
				wp_nav_menu([
					'theme_location' => 'primary',
					'container' => false,
					'menu_class' => 'main-menu',
					'fallback_cb' => false
				]);
				?>
			</nav>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="site-container footer-bottom-inner">
			<p>© <?php echo date('Y'); ?> Tech Sprint Global. All Rights Reserved.</p>
		</div>
	</div>
</footer>
</body>
</html>
<?php wp_footer(); ?>