<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">


document.addEventListener('DOMContentLoaded', function() {
    // Elements
    const paginationBtns = document.querySelectorAll('.pagination-btn');
    const readMoreLinks = document.querySelectorAll('.read-more-link, .read-more-btn');
    const imagePlaceholders = document.querySelectorAll('.image-placeholder, .author-photo-placeholder, .recent-post-image-placeholder');
    
    // Pagination Functionality
    function handlePagination(event) {
        event.preventDefault();
        
        // Remove active class from all buttons
        paginationBtns.forEach(btn => {
            btn.classList.remove('active');
        });
        
        // Add active class to clicked button
        this.classList.add('active');
        
        // Simulate page change (in real implementation, this would load new content)
        console.log('Page changed to:', this.textContent);
        
        // Scroll to top of blog posts
        const blogMain = document.querySelector('.blog-main');
        if (blogMain) {
            blogMain.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }
    
    // Read More Links - Simulate blog post navigation
    function handleReadMore(event) {
        event.preventDefault();
        
        const postTitle = this.closest('article').querySelector('.post-title').textContent;
        console.log('Navigating to blog post:', postTitle);
        
        // In real implementation, this would navigate to the actual blog post
        // For demo purposes, we'll show an alert
        alert(`In implementasi nyata, ini akan membuka artikel: "${postTitle}"\n\nUntuk WordPress, pastikan link href sudah diatur dengan URL artikel yang benar.`);
    }
    
    // Image Placeholder Click Handler
    function handleImagePlaceholderClick(event) {
        event.preventDefault();
        
        const placeholderType = this.classList.contains('author-photo-placeholder') ? 'Author Photo' : 
                              this.classList.contains('recent-post-image-placeholder') ? 'Recent Post Image' : 'Blog Post Image';
        
        console.log(`Add image for: ${placeholderType}`);
        
        // In WordPress, this would open the media uploader
        alert(`🔧 WordPress Media Uploader akan terbuka di sini\n\nUntuk ${placeholderType}:\n1. Klik "Upload Files"\n2. Pilih gambar dari komputer\n3. Klik "Insert into post"`);
    }
    
    // Category Links
    function handleCategoryClick(event) {
        event.preventDefault();
        const category = this.textContent.split(' (')[0];
        console.log('Filtering by category:', category);
        
        // In real implementation, this would filter posts by category
        alert(`Filtering posts by category: ${category}`);
    }
    
    // Tag Links
    function handleTagClick(event) {
        event.preventDefault();
        const tag = this.textContent;
        console.log('Filtering by tag:', tag);
        
        // In real implementation, this would filter posts by tag
        alert(`Filtering posts by tag: ${tag}`);
    }
    
    // Initialize event listeners
    function initBlogFunctionality() {
        // Pagination buttons
        paginationBtns.forEach(btn => {
            btn.addEventListener('click', handlePagination);
        });
        
        // Read more links
        readMoreLinks.forEach(link => {
            link.addEventListener('click', handleReadMore);
        });
        
        // Image placeholders
        imagePlaceholders.forEach(placeholder => {
            placeholder.addEventListener('click', handleImagePlaceholderClick);
        });
        
        // Category links
        const categoryLinks = document.querySelectorAll('.categories-list a');
        categoryLinks.forEach(link => {
            link.addEventListener('click', handleCategoryClick);
        });
        
        // Tag links
        const tagLinks = document.querySelectorAll('.tag');
        tagLinks.forEach(tag => {
            tag.addEventListener('click', handleTagClick);
        });
        
        // Recent post links
        const recentPostLinks = document.querySelectorAll('.recent-post-content h4 a');
        recentPostLinks.forEach(link => {
            link.addEventListener('click', handleReadMore);
        });
        
        console.log('✅ Blog Telkom University JS loaded successfully');
    }
    
    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initBlogFunctionality);
    } else {
        initBlogFunctionality();
    }
    
    // Smooth scrolling for internal links
    const internalLinks = document.querySelectorAll('a[href^="#"]');
    internalLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});</script>
<!-- end Simple Custom CSS and JS -->
