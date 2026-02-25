<?php
/**
 * Template Name: Home Page
 */
get_header();
?>

<main class="site-main">
    <div class="home-page-container">
        
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="page-hero">
                <h1 class="page-title"><?php the_title(); ?></h1>
                <div class="page-content">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; endif; ?>

        <!-- Blog Posts Section -->
        <section class="posts-section blog-section">
            <div class="section-header">
                <h2 class="section-title"><?php esc_html_e('Latest Blog Posts', 'techsprintglobal'); ?></h2>
                <div class="category-filter">
                    <a href="#" class="category-filter-item <?php echo ($active_blog_category === 'all') ? 'active' : ''; ?>" data-category="all"><?php esc_html_e('All', 'techsprintglobal'); ?></a>
                    <?php
                    $blog_categories = get_categories(array(
                        'orderby' => 'name',
                        'order' => 'ASC',
                        'hide_empty' => true
                    ));
                    foreach ($blog_categories as $category) :
                        ?>
                        <a href="#" class="category-filter-item <?php echo ($active_blog_category === $category->slug) ? 'active' : ''; ?>" data-category="<?php echo esc_attr($category->slug); ?>">
                            <?php echo esc_html($category->name); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="posts-grid blog-grid">
                <?php
                // Get current page for pagination
                $blog_paged = (get_query_var('blog_page')) ? intval(get_query_var('blog_page')) : 1;
                $active_blog_category = (get_query_var('blog_category')) ? sanitize_text_field(get_query_var('blog_category')) : 'all';
                
                // Set paged parameter correctly
                global $paged;
                if (get_query_var('blog_page')) {
                    $paged = $blog_paged;
                }

                // Build query args
                $blog_args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 6,
                    'paged' => $blog_paged,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                // Add category filter if not "all"
                if ($active_blog_category !== 'all') {
                    $blog_args['category_name'] = $active_blog_category;
                }
                
                // Ensure paged is set correctly
                $blog_args['paged'] = $paged;

                $blog_query = new WP_Query($blog_args);

                if ($blog_query->have_posts()) :
                    while ($blog_query->have_posts()) : $blog_query->the_post();
                        ?>
                        <article class="post-card blog-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-card-image">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium_large'); ?>
                                    </a>
                                </div>
                            <?php else : ?>
                                <div class="post-card-image">
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/placeholder.svg" alt="<?php echo esc_attr(get_the_title()); ?>" />
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
                    endwhile;
                else :
                    ?>
                    <div class="no-posts">
                        <p><?php esc_html_e('No blog posts found.', 'techsprintglobal'); ?></p>
                    </div>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>

            <!-- Blog Pagination -->
            <?php if ($blog_query->max_num_pages > 1) : ?>
                <div class="pagination blog-pagination">
                    <?php
                    $blog_pagination_args = array(
                        'base' => add_query_arg('blog_page', '%#%'),
                        'format' => '?blog_page=%#%',
                        'total' => $blog_query->max_num_pages,
                        'current' => max(1, $blog_paged),
                        'prev_text' => __('&laquo; Previous'),
                        'next_text' => __('Next &raquo;'),
                        'type' => 'array',
                        'before_page_number' => '<span>',
                        'after_page_number' => '</span>',
                    );

                    // Add category to pagination base URL if needed
                    if ($active_blog_category !== 'all') {
                        $blog_pagination_args['base'] = add_query_arg(array('blog_category' => $active_blog_category), remove_query_arg('blog_page'));
                        $blog_pagination_args['format'] = '?blog_category=' . $active_blog_category . '&blog_page=%#%';
                    }

                    $blog_pagination = paginate_links($blog_pagination_args);

                    if ($blog_pagination) :
                        ?>
                        <nav class="pagination-nav">
                            <ul class="pagination-list">
                                <?php foreach ($blog_pagination as $page_link) : ?>
                                    <li class="pagination-item"><?php echo wp_kses_post($page_link); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </nav>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </section>

        <!-- Case Studies Section -->
        <section class="posts-section case-studies-section">
            <div class="section-header">
                <h2 class="section-title"><?php esc_html_e('Latest Case Studies', 'techsprintglobal'); ?></h2>
                <div class="category-filter">
                    <a href="#" class="category-filter-item <?php echo ($active_case_study_category === 'all') ? 'active' : ''; ?>" data-category="all"><?php esc_html_e('All', 'techsprintglobal'); ?></a>
                    <?php
                    $case_study_categories = get_terms(array(
                        'taxonomy' => 'case_study_category',
                        'orderby' => 'name',
                        'order' => 'ASC',
                        'hide_empty' => true
                    ));
                    if (!empty($case_study_categories) && !is_wp_error($case_study_categories)) :
                        foreach ($case_study_categories as $category) :
                            ?>
                            <a href="#" class="category-filter-item <?php echo ($active_case_study_category === $category->slug) ? 'active' : ''; ?>" data-category="<?php echo esc_attr($category->slug); ?>">
                                <?php echo esc_html($category->name); ?>
                            </a>
                        <?php endforeach;
                    endif; ?>
                </div>
            </div>

            <div class="posts-grid case-studies-grid">
                <?php
                // Get current page for pagination
                $case_study_paged = (get_query_var('case_study_page')) ? intval(get_query_var('case_study_page')) : 1;
                $active_case_study_category = (get_query_var('case_study_category')) ? sanitize_text_field(get_query_var('case_study_category')) : 'all';
                
                // Set paged parameter correctly
                global $paged;
                if (get_query_var('case_study_page')) {
                    $paged = $case_study_paged;
                }

                // Build query args
                $case_study_args = array(
                    'post_type' => 'case_study',
                    'post_status' => 'publish',
                    'posts_per_page' => 6,
                    'paged' => $case_study_paged,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                // Add category filter if not "all"
                if ($active_case_study_category !== 'all') {
                    $case_study_args['tax_query'] = array(
                        array(
                            'taxonomy' => 'case_study_category',
                            'field' => 'slug',
                            'terms' => $active_case_study_category,
                        )
                    );
                }
                
                // Ensure paged is set correctly
                $case_study_args['paged'] = $paged;

                $case_study_query = new WP_Query($case_study_args);

                if ($case_study_query->have_posts()) :
                    while ($case_study_query->have_posts()) : $case_study_query->the_post();
                        ?>
                        <article class="post-card case-study-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-card-image">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium_large'); ?>
                                    </a>
                                </div>
                            <?php else : ?>
                                <div class="post-card-image">
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/placeholder.svg" alt="<?php echo esc_attr(get_the_title()); ?>" />
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
                    endwhile;
                else :
                    ?>
                    <div class="no-posts">
                        <p><?php esc_html_e('No case studies found.', 'techsprintglobal'); ?></p>
                    </div>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>

            <!-- Case Studies Pagination -->
            <?php if ($case_study_query->max_num_pages > 1) : ?>
                <div class="pagination case-studies-pagination">
                    <?php
                    $case_study_pagination_args = array(
                        'base' => add_query_arg('case_study_page', '%#%'),
                        'format' => '?case_study_page=%#%',
                        'total' => $case_study_query->max_num_pages,
                        'current' => max(1, $case_study_paged),
                        'prev_text' => __('&laquo; Previous'),
                        'next_text' => __('Next &raquo;'),
                        'type' => 'array',
                        'before_page_number' => '<span>',
                        'after_page_number' => '</span>',
                    );

                    // Add category to pagination base URL if needed
                    if ($active_case_study_category !== 'all') {
                        $case_study_pagination_args['base'] = add_query_arg(array('case_study_category' => $active_case_study_category), remove_query_arg('case_study_page'));
                        $case_study_pagination_args['format'] = '?case_study_category=' . $active_case_study_category . '&case_study_page=%#%';
                    }

                    $case_study_pagination = paginate_links($case_study_pagination_args);

                    if ($case_study_pagination) :
                        ?>
                        <nav class="pagination-nav">
                            <ul class="pagination-list">
                                <?php foreach ($case_study_pagination as $page_link) : ?>
                                    <li class="pagination-item"><?php echo wp_kses_post($page_link); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </nav>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </section>

    </div>
</main>

<?php
get_footer();
?>