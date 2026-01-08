<?php
/**
 * Template Name: Home Page
 */
get_header();
?>

<main class="site-main">
    <div class="page-shell term-conditions">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <div class="page-content">
            <?php the_content(); ?>
        </div>
    </div>
</main>

<?php
get_footer();
?>