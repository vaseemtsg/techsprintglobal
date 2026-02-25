<?php
/**
 * Dynamic Sidebar template
 * Shows different content based on page type
 *
 * @package techsprintglobal
 */

// Don't show sidebar on certain pages if not needed
if (!is_active_sidebar('sidebar-1') && !is_home() && !is_single() && !is_post_type_archive('case_study') && !is_singular('case_study')) {
    return;
}
?>

<aside id="secondary" class="widget-area sidebar">
    <div class="sidebar-content">
        
        <?php if (is_active_sidebar('sidebar-1')) : ?>
            <?php dynamic_sidebar('sidebar-1'); ?>
        <?php endif; ?>
        
        <?php if (is_home() || is_single() || is_category() || is_tag() || is_date()) : ?>
            <!-- Blog pages - Show Blog Categories -->
            <div class="widget widget_categories">
                <h3 class="widget-title">Blog Categories</h3>
                <ul>
                    <?php
                    $categories = get_categories(array(
                        'orderby' => 'name',
                        'order'   => 'ASC'
                    ));
                    
                    foreach ($categories as $category) {
                        $category_link = get_category_link($category->term_id);
                        $category_count = $category->count;
                        ?>
                        <li class="category-item">
                            <a href="<?php echo esc_url($category_link); ?>" class="category-link">
                                <?php echo esc_html($category->name); ?>
                            </a>
                            <span class="category-count">(<?php echo $category_count; ?>)</span>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            
            <!-- Recent Blog Posts Widget -->
            <div class="widget widget_recent_posts">
                <h3 class="widget-title">Recent Blog Posts</h3>
                <ul>
                    <?php
                    $recent_posts = wp_get_recent_posts(array(
                        'numberposts' => 5,
                        'post_status' => 'publish',
                        'post_type' => 'post'
                    ));
                    
                    foreach ($recent_posts as $post) {
                        ?>
                        <li class="recent-post-item">
                            <a href="<?php echo get_permalink($post['ID']); ?>" class="recent-post-link">
                                <?php echo esc_html($post['post_title']); ?>
                            </a>
                            <span class="recent-post-date"><?php echo get_the_date('', $post['ID']); ?></span>
                        </li>
                        <?php
                    }
                    wp_reset_query();
                    ?>
                </ul>
            </div>
        
        <?php elseif (is_post_type_archive('case_study') || is_singular('case_study') || is_tax('case_study_category')) : ?>
            <!-- Case Study pages - Show Case Study Categories -->
            <div class="widget widget_case_study_categories">
                <h3 class="widget-title">Case Study Categories</h3>
                <ul>
                    <?php
                    $categories = get_terms(array(
                        'taxonomy' => 'case_study_category',
                        'orderby' => 'name',
                        'order' => 'ASC',
                        'hide_empty' => true
                    ));
                    
                    if (!empty($categories) && !is_wp_error($categories)) {
                        foreach ($categories as $category) {
                            $category_link = get_term_link($category);
                            $category_count = $category->count;
                            ?>
                            <li class="category-item">
                                <a href="<?php echo esc_url($category_link); ?>" class="category-link">
                                    <?php echo esc_html($category->name); ?>
                                </a>
                                <span class="category-count">(<?php echo $category_count; ?>)</span>
                            </li>
                            <?php
                        }
                    } else {
                        ?>
                        <li class="category-empty">No case study categories yet.</li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            
            <!-- Recent Case Studies Widget -->
            <div class="widget widget_recent_case_studies">
                <h3 class="widget-title">Recent Case Studies</h3>
                <ul>
                    <?php
                    $recent_case_studies = wp_get_recent_posts(array(
                        'numberposts' => 5,
                        'post_status' => 'publish',
                        'post_type' => 'case_study'
                    ));
                    
                    if (!empty($recent_case_studies)) {
                        foreach ($recent_case_studies as $post) {
                            ?>
                            <li class="recent-post-item">
                                <a href="<?php echo get_permalink($post['ID']); ?>" class="recent-post-link">
                                    <?php echo esc_html($post['post_title']); ?>
                                </a>
                                <span class="recent-post-date"><?php echo get_the_date('', $post['ID']); ?></span>
                            </li>
                            <?php
                        }
                    } else {
                        ?>
                        <li class="category-empty">No case studies yet.</li>
                        <?php
                    }
                    wp_reset_query();
                    ?>
                </ul>
            </div>
        
        <?php elseif (is_front_page() || is_page()) : ?>
            <!-- Home page and static pages - Show both Blog and Case Study content -->
            <div class="widget widget_categories">
                <h3 class="widget-title">Blog Categories</h3>
                <ul>
                    <?php
                    $categories = get_categories(array(
                        'orderby' => 'name',
                        'order'   => 'ASC'
                    ));
                    
                    foreach ($categories as $category) {
                        $category_link = get_category_link($category->term_id);
                        $category_count = $category->count;
                        ?>
                        <li class="category-item">
                            <a href="<?php echo esc_url($category_link); ?>" class="category-link">
                                <?php echo esc_html($category->name); ?>
                            </a>
                            <span class="category-count">(<?php echo $category_count; ?>)</span>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            
            <div class="widget widget_case_study_categories">
                <h3 class="widget-title">Case Study Categories</h3>
                <ul>
                    <?php
                    $categories = get_terms(array(
                        'taxonomy' => 'case_study_category',
                        'orderby' => 'name',
                        'order' => 'ASC',
                        'hide_empty' => true
                    ));
                    
                    if (!empty($categories) && !is_wp_error($categories)) {
                        foreach ($categories as $category) {
                            $category_link = get_term_link($category);
                            $category_count = $category->count;
                            ?>
                            <li class="category-item">
                                <a href="<?php echo esc_url($category_link); ?>" class="category-link">
                                    <?php echo esc_html($category->name); ?>
                                </a>
                                <span class="category-count">(<?php echo $category_count; ?>)</span>
                            </li>
                            <?php
                        }
                    } else {
                        ?>
                        <li class="category-empty">No case study categories yet.</li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        
        <?php endif; ?>
        
    </div>
</aside>
