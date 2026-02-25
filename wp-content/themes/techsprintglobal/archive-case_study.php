<?php
/**
 * Template Name: Case Studies Archive
 * Archive template for Case Studies custom post type
 *
 * @package techsprintglobal
 */

get_header();
?>

<main id="primary" class="site-main case-studies-page">

	<section class="case-studies-wrapper">
		<div class="container">

			<!-- Main Content Area -->
			<div class="case-studies-content">

				<!-- Page Header -->
				<header class="case-studies-header">
					<h1>Case Studies</h1>
					<p>Explore our success stories and client solutions</p>
				</header>

				<!-- Case Study Categories Filter -->
				<div class="case-studies-filter">
					<h3>Filter by Category</h3>
					<ul class="filter-list">
						<li class="filter-item active">
							<a href="<?php echo get_post_type_archive_link('case_study'); ?>">All Case Studies</a>
						</li>
						<?php
						$categories = get_terms(array(
							'taxonomy' => 'case_study_category',
							'orderby' => 'name',
							'order' => 'ASC'
						));

						foreach ($categories as $category) {
							$category_link = get_term_link($category);
							$category_count = $category->count;
							?>
							<li class="filter-item">
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
										if (has_excerpt()) {
											echo get_the_excerpt();
										} else {
											echo wp_trim_words(get_the_content(), 20, '...');
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
						<?php echo wp_pagenavi(); ?>

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
		</div>
	</section>

</main>

<?php
get_footer();
