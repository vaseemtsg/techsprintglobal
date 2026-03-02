<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package techsprintglobal
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="site-container post-layout">
		<article class="post-single">
			<header class="post-header">
				<h1 class="post-title"><?php the_title(); ?></h1>
				<div class="post-meta">
					<span><?php echo esc_html(get_the_date()); ?></span>
					<span>•</span>
					<span><?php echo esc_html(get_the_author()); ?></span>
					<?php
					$categories_list = get_the_category_list(', ');
					if ($categories_list) :
						?>
						<span>•</span>
						<span><?php echo wp_kses_post($categories_list); ?></span>
					<?php endif; ?>
				</div>
				<?php if (has_post_thumbnail()) : ?>
					<div class="post-hero">
						<?php the_post_thumbnail('large'); ?>
					</div>
				<?php endif; ?>
			</header>

			<div class="post-content">
				<?php
				while (have_posts()) :
					the_post();
					the_content();
					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__('Pages:', 'techsprintglobal'),
							'after'  => '</div>',
						)
					);
				endwhile;
				?>
				<?php comments_template(); ?>
			</div>
		</article>

		<aside class="post-sidebar">
			<section class="sidebar-block">
				<h2 class="sidebar-title"><?php esc_html_e('Categories', 'techsprintglobal'); ?></h2>
				<div class="sidebar-list">
					<?php
					$categories = get_terms(
						array(
							'taxonomy'   => 'category',
							'orderby'    => 'name',
							'order'      => 'ASC',
							'hide_empty' => true,
						)
					);
					if (!empty($categories) && !is_wp_error($categories)) :
						foreach ($categories as $category) :
							?>
							<a class="sidebar-link" href="<?php echo esc_url(get_term_link($category)); ?>">
								<?php echo esc_html($category->name); ?>
							</a>
							<?php
						endforeach;
					else :
						?>
						<p class="sidebar-empty"><?php esc_html_e('No categories yet.', 'techsprintglobal'); ?></p>
					<?php endif; ?>
				</div>
			</section>

			<section class="sidebar-block">
				<h2 class="sidebar-title"><?php esc_html_e('Recent Posts', 'techsprintglobal'); ?></h2>
				<ul class="sidebar-list sidebar-list--stacked">
					<?php
					$recent_posts = wp_get_recent_posts(
						array(
							'numberposts' => 5,
							'post_status' => 'publish',
						)
					);
					if (!empty($recent_posts)) :
						foreach ($recent_posts as $recent) :
							?>
							<li>
								<a class="sidebar-link" href="<?php echo esc_url(get_permalink($recent['ID'])); ?>">
									<?php echo esc_html($recent['post_title']); ?>
								</a>
							</li>
							<?php
						endforeach;
					else :
						?>
						<li class="sidebar-empty"><?php esc_html_e('No posts yet.', 'techsprintglobal'); ?></li>
					<?php endif;
					wp_reset_postdata(); ?>
				</ul>
			</section>
		</aside>
	</div>
</main><!-- #main -->

<?php

get_footer();
