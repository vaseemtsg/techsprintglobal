<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package techsprintglobal
 */

get_header();
?>

<main id="primary" class="site-main blog-page">

	<section class="blog-wrapper">
		<div class="container">

			<!-- Page Header -->
			<header class="blog-header">
				<h1>Our Blog</h1>
				<p>Latest updates, insights & articles</p>
			</header>

			<!-- Blog Categories Filter -->
			<div class="blog-categories-filter">
				<h3>Filter by Blog</h3>
				<ul class="filter-list">
					<li class="filter-item <?php echo (is_home() && !is_category()) ? 'active' : ''; ?>">
						<a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">All Posts</a>
					</li>
					<?php
					$categories = get_categories(array(
						'orderby' => 'name',
						'order' => 'ASC'
					));
					
					foreach ($categories as $category) {
						$category_link = get_term_link($category);
						$category_count = $category->count;
						$is_active = is_category($category->term_id);
						?>
						<li class="filter-item <?php echo $is_active ? 'active' : ''; ?>">
							<a href="<?php echo esc_url($category_link); ?>">
								<?php echo esc_html($category->name); ?> (<?php echo $category_count; ?>)
							</a>
						</li>
						<?php
					}
					?>
				</ul>
			</div>

			<?php if (have_posts()): ?>

				<div class="blog-grid site-container">

					<?php while (have_posts()):
						the_post(); ?>

						<article <?php post_class('blog-card'); ?>>

							<a href="<?php the_permalink(); ?>" class="blog-thumb">
								<?php if (has_post_thumbnail()): ?>
									<?php the_post_thumbnail('medium_large'); ?>
								<?php else: ?>
									<div class="no-thumb">No Image</div>
								<?php endif; ?>
							</a>

							<div class="blog-content">
								<h2 class="blog-title">
									<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a>
								</h2>

								<p class="blog-excerpt">
									<?php 
									// If manual excerpt exists, use it; otherwise trim content
									if ( has_excerpt() ) {
										echo get_the_excerpt();
									} else {
										echo wp_trim_words( get_the_content(), 20, '...' );
									}
									?>
								</p>

								<div class="blog-meta">
									<span class="blog-date"><?php echo get_the_date(); ?></span>
									<a class="read-more" href="<?php the_permalink(); ?>">
										Read More →
									</a>
								</div>
							</div>

						</article>

					<?php endwhile; ?>
				    <?php echo wp_pagenavi();?>

				</div>

				<div class="blog-pagination">
					<?php the_posts_navigation(); ?>
				</div>

			<?php else: ?>

				<div class="no-posts">
					<h2>No posts found</h2>
					<p>Please add some blog posts.</p>
				</div>

			<?php endif; ?>

		</div>
	</section>

</main>


<?php
get_footer();
