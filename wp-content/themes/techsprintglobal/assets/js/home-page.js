/**
 * Home Page JavaScript
 * Handles category filtering and AJAX functionality
 */

document.addEventListener('DOMContentLoaded', function() {
    // Category filter functionality
    const categoryFilters = document.querySelectorAll('.category-filter-item');
    
    categoryFilters.forEach(filter => {
        filter.addEventListener('click', function(e) {
            e.preventDefault();
            
            const section = this.closest('.posts-section');
            const sectionType = section.classList.contains('blog-section') ? 'blog' : 'case_study';
            const category = this.dataset.category;
            
            // Update active state
            const sectionFilters = section.querySelectorAll('.category-filter-item');
            sectionFilters.forEach(f => f.classList.remove('active'));
            this.classList.add('active');
            
            // Update URL without page reload
            const url = new URL(window.location);
            if (category === 'all') {
                url.searchParams.delete(`${sectionType}_category`);
            } else {
                url.searchParams.set(`${sectionType}_category`, category);
            }
            url.searchParams.delete(`${sectionType}_page`); // Reset to page 1
            window.history.pushState({}, '', url);
            
            // Load filtered posts
            loadFilteredPosts(section, sectionType, category, 1);
        });
    });
    
    // Handle browser back/forward buttons
    window.addEventListener('popstate', function(e) {
        const url = new URL(window.location);
        
        // Update blog section
        const blogSection = document.querySelector('.blog-section');
        if (blogSection) {
            const blogCategory = url.searchParams.get('blog_category') || 'all';
            const blogPage = url.searchParams.get('blog_page') || '1';
            updateCategoryFilter(blogSection, blogCategory);
            loadFilteredPosts(blogSection, 'blog', blogCategory, blogPage);
        }
        
        // Update case studies section
        const caseStudySection = document.querySelector('.case-studies-section');
        if (caseStudySection) {
            const caseStudyCategory = url.searchParams.get('case_study_category') || 'all';
            const caseStudyPage = url.searchParams.get('case_study_page') || '1';
            updateCategoryFilter(caseStudySection, caseStudyCategory);
            loadFilteredPosts(caseStudySection, 'case_study', caseStudyCategory, caseStudyPage);
        }
    });
    
    // Pagination click handlers
    document.addEventListener('click', function(e) {
        if (e.target.closest('.pagination-item a')) {
            e.preventDefault();
            
            const link = e.target.closest('.pagination-item a');
            const section = link.closest('.posts-section');
            const sectionType = section.classList.contains('blog-section') ? 'blog' : 'case_study';
            const href = link.getAttribute('href');
            
            // Extract page number from URL
            const url = new URL(href, window.location.origin);
            const page = url.searchParams.get(`${sectionType}_page`) || '1';
            
            // Get current category
            const category = url.searchParams.get(`${sectionType}_category`) || 'all';
            
            // Update URL
            window.history.pushState({}, '', href);
            
            // Load posts for the page
            loadFilteredPosts(section, sectionType, category, page);
        }
    });
});

/**
 * Update category filter active state
 */
function updateCategoryFilter(section, category) {
    const filters = section.querySelectorAll('.category-filter-item');
    filters.forEach(filter => {
        filter.classList.remove('active');
        if (filter.dataset.category === category) {
            filter.classList.add('active');
        }
    });
}

/**
 * Load filtered posts via AJAX
 */
function loadFilteredPosts(section, sectionType, category, page) {
    const grid = section.querySelector('.posts-grid');
    const pagination = section.querySelector('.pagination');
    
    // Show loading state
    grid.style.opacity = '0.5';
    
    // Prepare AJAX data
    const data = {
        action: `load_${sectionType}_posts`,
        category: category,
        page: page,
        nonce: homePageData.nonce
    };
    
    // Make AJAX request
    fetch(homePageData.ajaxUrl, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams(data)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Update posts grid
            grid.innerHTML = data.data.posts;
            
            // Update pagination
            if (data.data.pagination) {
                pagination.innerHTML = data.data.pagination;
            } else {
                pagination.innerHTML = '';
            }
            
            // Scroll to top of section
            section.scrollIntoView({ behavior: 'smooth', block: 'start' });
        } else {
            console.error('Error loading posts:', data.data);
            grid.innerHTML = '<div class="no-posts"><p>Error loading posts. Please try again.</p></div>';
        }
    })
    .catch(error => {
        console.error('AJAX Error:', error);
        grid.innerHTML = '<div class="no-posts"><p>Error loading posts. Please try again.</p></div>';
    })
    .finally(() => {
        grid.style.opacity = '1';
    });
}
