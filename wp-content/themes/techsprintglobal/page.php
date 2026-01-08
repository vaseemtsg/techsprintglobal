<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package techsprintglobal
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="page-shell">
			<h1 class="page-title"><?php the_title(); ?></h1>
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="page-featured-image">
					<?php the_post_thumbnail('large', ['class' => 'featured-image']); ?>
				</div>
			<?php endif; ?>
			<?php if ( get_the_excerpt() ) : ?>
				<h3 class="page-excerpt"><?php echo get_the_excerpt(); ?></h3>
			<?php endif; ?>
			<div class="page-content">
				<?php the_content(); ?>
			</div>
		</div>
	</main><!-- #main -->

<?php

get_footer();
