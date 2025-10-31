// TokoGahar Premium JavaScript
class TokoGaharApp {
    constructor() {
        this.init();
    }

    init() {
        this.initializeComponents();
        this.setupEventListeners();
        this.setupAnimations();
        this.setupCartSystem();
        this.setupSearchSystem();
    }

    initializeComponents() {
        // Initialize tooltips
        this.initTooltips();

        // Initialize counters
        this.initCounters();

        // Initialize image lazy loading
        this.initLazyLoading();

        // Initialize smooth scrolling
        this.initSmoothScrolling();
    }

    setupEventListeners() {
        // Mobile menu toggle
        this.setupMobileMenu();

        // Product interactions
        this.setupProductInteractions();

        // Search functionality
        this.setupEnhancedSearch();

        // Newsletter subscription
        this.setupNewsletter();

        // WhatsApp integration
        this.setupWhatsApp();
    }

    setupAnimations() {
        // Intersection Observer for scroll animations
        this.setupScrollAnimations();

        // Parallax effects
        this.setupParallax();

        // Hover effects
        this.setupHoverEffects();
    }

    setupCartSystem() {
        this.cart = JSON.parse(localStorage.getItem('cart')) || [];
        this.wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
        this.updateCartBadges();
    }

    setupSearchSystem() {
        this.products = this.loadProducts();
        this.setupSearchAutocomplete();
    }

    // Mobile Menu Functionality
    setupMobileMenu() {
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const navLinks = document.querySelector('.nav-links');

        if (mobileMenuBtn && navLinks) {
            mobileMenuBtn.addEventListener('click', () => {
                navLinks.classList.toggle('active');
                mobileMenuBtn.innerHTML = navLinks.classList.contains('active')
                    ? '<i class="fas fa-times"></i>'
                    : '<i class="fas fa-bars"></i>';
            });

            // Close mobile menu when clicking outside
            document.addEventListener('click', (e) => {
                if (!e.target.closest('.main-nav') && navLinks.classList.contains('active')) {
                    navLinks.classList.remove('active');
                    mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
                }
            });
        }
    }

    // Product Interactions
    setupProductInteractions() {
        // Quick view functionality
        document.querySelectorAll('.quick-view').forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                this.showQuickView(e.target.closest('.product-card'));
            });
        });

        // Add to cart functionality
        document.querySelectorAll('.add-to-cart, .add-to-cart-btn').forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                const productCard = e.target.closest('.product-card');
                this.addToCart(this.getProductData(productCard));
            });
        });

        // Add to cart from detail button (temporary functionality)
        document.querySelectorAll('.detail-btn').forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                const productCard = e.target.closest('.product-card');
                this.addToCart(this.getProductData(productCard));
                this.showNotification('Produk ditambahkan ke keranjang!', 'success');
            });
        });

        // Wishlist functionality
        document.querySelectorAll('.wishlist-btn').forEach(button => {
            button.addEventListener('click', (e) => {
                const productCard = e.target.closest('.product-card');
                this.toggleWishlist(this.getProductData(productCard));
            });
        });

        // Cart button functionality
        const cartBtn = document.getElementById('cart-btn');
        if (cartBtn) {
            cartBtn.addEventListener('click', (e) => {
                e.preventDefault();
                this.showCartModal();
            });
        }

        // Detail page add-to-cart (single product page)
        const addToCartBtn = document.getElementById('addToCart');
        if (addToCartBtn) {
            addToCartBtn.addEventListener('click', (e) => {
                e.preventDefault();
                const product = this.getProductDataFromDetailPage();
                this.addToCart(product);
                this.showNotification('Produk ditambahkan ke keranjang!', 'success');
            });
        }
    }

    // Enhanced Search System
    setupEnhancedSearch() {
        // Search functionality
        window.searchProducts = () => {
            const searchInput = document.getElementById('searchInput');
            const searchText = searchInput.value.toLowerCase();
            const productCards = document.querySelectorAll('.product-card');
            let found = false;

            productCards.forEach(card => {
                const productTitle = card.querySelector('.card-title').textContent.toLowerCase();
                const productDesc = card.querySelector('.card-text.text-muted').textContent.toLowerCase();
                const specs = card.querySelector('.specs').textContent.toLowerCase();
                const searchContent = productTitle + ' ' + productDesc + ' ' + specs;
                
                if (searchContent.includes(searchText)) {
                    card.parentElement.style.display = 'block';
                    card.style.opacity = '1';
                    found = true;
                } else {
                    card.parentElement.style.display = 'none';
                    card.style.opacity = '0';
                }
            });

            // Show "No products found" message if no products match
            const noResultsMsg = document.getElementById('noResultsMessage');
            if (!found && searchText.length > 0) {
                if (!noResultsMsg) {
                    const message = document.createElement('div');
                    message.id = 'noResultsMessage';
                    message.className = 'col-12 text-center py-5';
                    message.innerHTML = `
                        <div class="alert alert-info">
                            <i class="fas fa-search me-2"></i>
                            Tidak ada produk yang sesuai dengan pencarian "${searchText}"
                        </div>
                    `;
                    document.querySelector('#produk-terbaru .row').appendChild(message);
                }
            } else if (noResultsMsg) {
                noResultsMsg.remove();
            }
        };

        // Add event listener for Enter key on search input
        document.getElementById('searchInput')?.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                searchProducts();
            }
        });
        const searchInput = document.querySelector('.search-box input');
        const searchButton = document.querySelector('.search-box button');

        if (searchInput && searchButton) {
            // Real-time search
            searchInput.addEventListener('input', (e) => {
                this.handleSearch(e.target.value);
            });

            // Search button click
            searchButton.addEventListener('click', () => {
                this.performSearch(searchInput.value);
            });

            // Enter key search
            searchInput.addEventListener('keypress', (e) => {
                if (e.key === 'Enter') {
                    this.performSearch(searchInput.value);
                }
            });
        }
    }

    // Search Autocomplete
    setupSearchAutocomplete() {
        // This would integrate with a real product database
        console.log('Search autocomplete initialized');
    }

    // Cart Management
    addToCart(product) {
        const existingItem = this.cart.find(item => item.id === product.id);

        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            this.cart.push({ ...product, quantity: 1 });
        }

        this.saveCart();
        this.updateCartBadges();
        this.showNotification('Produk ditambahkan ke keranjang!', 'success');
    }

    toggleWishlist(product) {
        const existingIndex = this.wishlist.findIndex(item => item.id === product.id);

        if (existingIndex > -1) {
            this.wishlist.splice(existingIndex, 1);
            this.showNotification('Produk dihapus dari wishlist!', 'info');
        } else {
            this.wishlist.push(product);
            this.showNotification('Produk ditambahkan ke wishlist!', 'success');
        }

        this.saveWishlist();
        this.updateWishlistBadges();
    }

    updateCartBadges() {
        const cartBadges = document.querySelectorAll('.action-btn .badge, #cart-badge');
        const totalItems = this.cart.reduce((sum, item) => sum + item.quantity, 0);

        cartBadges.forEach(badge => {
            badge.textContent = totalItems;
            badge.style.display = totalItems > 0 ? 'flex' : 'none';
        });
    }

    updateWishlistBadges() {
        const wishlistBadges = document.querySelectorAll('.wishlist-btn .badge');
        const totalItems = this.wishlist.length;

        wishlistBadges.forEach(badge => {
            badge.textContent = totalItems;
            badge.style.display = totalItems > 0 ? 'flex' : 'none';
        });
    }

    // Notification System
    showNotification(message, type = 'info') {
        const notification = document.createElement('div');
        notification.className = `alert alert-${type} alert-dismissible fade show position-fixed`;
        notification.style.cssText = `
            top: 20px;
            right: 20px;
            z-index: 9999;
            min-width: 300px;
            border: none;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            backdrop-filter: blur(10px);
        `;

        const icon = type === 'success' ? 'fa-check-circle' :
                    type === 'warning' ? 'fa-exclamation-triangle' :
                    type === 'error' ? 'fa-times-circle' : 'fa-info-circle';

        notification.innerHTML = `
            <div class="d-flex align-items-center">
                <i class="fas ${icon} me-3 fs-5"></i>
                <div class="flex-grow-1">${message}</div>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        `;

        document.body.appendChild(notification);

        // Auto remove after 4 seconds
        setTimeout(() => {
            if (notification.parentNode) {
                notification.parentNode.removeChild(notification);
            }
        }, 4000);
    }

    // Quick View Modal
    showQuickView(productCard) {
        const productData = this.getProductData(productCard);

        // Create and show quick view modal
        const modalHtml = `
            <div class="modal fade" id="quickViewModal" tabindex="-1">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title">${productData.name}</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="${productData.image}" class="img-fluid rounded shadow" alt="${productData.name}" style="max-height: 400px; object-fit: cover;">
                                </div>
                                <div class="col-md-6">
                                    <h4 class="text-primary fw-bold mb-3">${productData.price}</h4>
                                    <p class="text-muted mb-4">${productData.description || 'Produk berkualitas tinggi dengan spesifikasi terbaik'}</p>
                                    <div class="specs mb-4">
                                        <h6 class="fw-bold">Spesifikasi:</h6>
                                        <div class="d-flex flex-wrap gap-1">
                                            ${productData.specs ? productData.specs.map(spec => `<span class="badge bg-light text-dark">${spec}</span>`).join('') : '<span class="badge bg-light text-dark">Spesifikasi lengkap tersedia</span>'}
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-success btn-lg add-to-cart-modal" data-product-id="${productData.id}">
                                            <i class="fas fa-cart-plus me-2"></i>Tambah ke Keranjang
                                        </button>
                                        <button class="btn btn-outline-primary btn-lg" onclick="window.location.href='detail.html'">
                                            <i class="fas fa-info-circle me-2"></i>Lihat Detail Lengkap
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;

        document.body.insertAdjacentHTML('beforeend', modalHtml);
        const modal = new bootstrap.Modal(document.getElementById('quickViewModal'));
        modal.show();

        // Add event listener to the add to cart button in modal
        const addToCartBtn = document.querySelector('.add-to-cart-modal');
        if (addToCartBtn) {
            addToCartBtn.addEventListener('click', () => {
                this.addToCart(productData);
                modal.hide();
            });
        }

        // Remove modal from DOM after hide
        document.getElementById('quickViewModal').addEventListener('hidden.bs.modal', function () {
            this.remove();
        });
    }

    // Cart Modal
    showCartModal() {
        const totalItems = this.cart.reduce((sum, item) => sum + item.quantity, 0);
        const totalPrice = this.cart.reduce((sum, item) => sum + (parseFloat(item.price.replace(/[^\d]/g, '')) * item.quantity), 0);

        let cartItemsHtml = '';
        if (this.cart.length === 0) {
            cartItemsHtml = '<p class="text-center text-muted">Keranjang kosong</p>';
        } else {
            cartItemsHtml = this.cart.map(item => `
                <div class="cart-item d-flex align-items-center justify-content-between mb-3 p-3 border rounded">
                        <div class="d-flex align-items-center">
                        <img src="${item.image || 'data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"><rect fill="%23f0f0f0" width="100%25" height="100%25"/><text x="50%25" y="50%25" dominant-baseline="middle" text-anchor="middle" fill="%23999" font-size="10">No Image</text></svg>'}" alt="${item.name}" class="rounded me-3" style="width: 60px; height: 60px; object-fit: cover;">
                        <div>
                            <h6 class="mb-1">${item.name}</h6>
                            <p class="text-primary mb-1">${item.price}</p>
                            <small class="text-muted">Qty: ${item.quantity}</small>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-outline-danger remove-from-cart" data-product-id="${item.id}">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            `).join('');
        }

        const modalHtml = `
            <div class="modal fade" id="cartModal" tabindex="-1">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">
                                <i class="fas fa-shopping-cart me-2"></i>Keranjang Belanja (${totalItems} item)
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="cart-items" style="max-height: 400px; overflow-y: auto;">
                                ${cartItemsHtml}
                            </div>
                            ${this.cart.length > 0 ? `
                                <div class="cart-total mt-3 p-3 bg-light rounded">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <strong>Total:</strong>
                                        <strong class="text-primary">Rp ${totalPrice.toLocaleString('id-ID')}</strong>
                                    </div>
                                </div>
                            ` : ''}
                        </div>
                        ${this.cart.length > 0 ? `
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Lanjut Belanja</button>
                                <button type="button" class="btn btn-primary" onclick="window.location.href='pembelian.html'">
                                    <i class="fas fa-credit-card me-2"></i>Checkout
                                </button>
                            </div>
                        ` : ''}
                    </div>
                </div>
            </div>
        `;

        document.body.insertAdjacentHTML('beforeend', modalHtml);
        const modal = new bootstrap.Modal(document.getElementById('cartModal'));
        modal.show();

        // Add event listeners for remove buttons
        this.attachRemoveListeners();

        // Remove modal from DOM after hide
        document.getElementById('cartModal').addEventListener('hidden.bs.modal', function () {
            this.remove();
        });
    }

    // Update Cart Modal Content
    updateCartModal() {
        const modalElement = document.getElementById('cartModal');
        if (!modalElement) return;

        const cartItemsContainer = modalElement.querySelector('.cart-items');
        const totalItems = this.cart.reduce((sum, item) => sum + item.quantity, 0);
        const totalPrice = this.cart.reduce((sum, item) => sum + (parseFloat(item.price.replace(/[^\d]/g, '')) * item.quantity), 0);

        let cartItemsHtml = '';
        if (this.cart.length === 0) {
            cartItemsHtml = '<p class="text-center text-muted">Keranjang kosong</p>';
            const modalFooter = modalElement.querySelector('.modal-footer');
            if (modalFooter) modalFooter.style.display = 'none';
            const cartTotal = modalElement.querySelector('.cart-total');
            if (cartTotal) cartTotal.style.display = 'none';
        } else {
            cartItemsHtml = this.cart.map(item => `
                <div class="cart-item d-flex align-items-center justify-content-between mb-3 p-3 border rounded">
                    <div class="d-flex align-items-center">
                        <img src="${item.image}" alt="${item.name}" class="rounded me-3" style="width: 60px; height: 60px; object-fit: cover;">
                        <div>
                            <h6 class="mb-1">${item.name}</h6>
                            <p class="text-primary mb-1">${item.price}</p>
                            <small class="text-muted">Qty: ${item.quantity}</small>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-outline-danger remove-from-cart" data-product-id="${item.id}">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            `).join('');

            const totalElement = modalElement.querySelector('.cart-total .text-primary');
            if (totalElement) totalElement.textContent = `Rp ${totalPrice.toLocaleString('id-ID')}`;
            const titleElement = modalElement.querySelector('.modal-title');
            if (titleElement) titleElement.innerHTML = `<i class="fas fa-shopping-cart me-2"></i>Keranjang Belanja (${totalItems} item)`;

            const modalFooter = modalElement.querySelector('.modal-footer');
            if (modalFooter) modalFooter.style.display = 'flex';
            const cartTotal = modalElement.querySelector('.cart-total');
            if (cartTotal) cartTotal.style.display = 'block';
        }

        cartItemsContainer.innerHTML = cartItemsHtml;
        this.attachRemoveListeners();
    }

    // Attach Remove Listeners
    attachRemoveListeners() {
        document.querySelectorAll('.remove-from-cart').forEach(button => {
            button.addEventListener('click', (e) => {
                const productId = e.currentTarget.dataset.productId;
                this.removeFromCart(productId);
                this.updateCartModal();
            });
        });
    }

    // Remove from cart
    removeFromCart(productId) {
        this.cart = this.cart.filter(item => item.id !== productId);
        this.saveCart();
        this.updateCartBadges();
        this.showNotification('Produk dihapus dari keranjang!', 'info');
    }

    // Search Functionality
    handleSearch(query) {
        if (query.length > 2) {
            // Show search suggestions
            this.showSearchSuggestions(query);
        }
    }

    performSearch(query) {
        if (query.trim()) {
            // Implement actual search logic here
            this.showNotification(`Mencari: ${query}`, 'info');
            // In a real application, this would filter products
        }
    }

    // Animation Systems
    setupScrollAnimations() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.product-card, .footer-section, .sidebar').forEach(el => {
            observer.observe(el);
        });
    }

    setupParallax() {
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.parallax');

            parallaxElements.forEach(element => {
                const speed = element.dataset.speed || 0.5;
                element.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });
    }

    setupHoverEffects() {
        // Add hover effects to card elements only (avoid moving header buttons like action-btn/nav-link)
        const interactiveElements = document.querySelectorAll('.card');

        interactiveElements.forEach(el => {
            el.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
            });

            el.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    }

    // Utility Methods
    getProductData(productCard) {
        // Defensive: if productCard is missing, return an empty object
        if (!productCard) return { id: 'unknown', name: 'Unknown Product', price: 'Price not available', image: '', description: '', specs: [] };

        const img = productCard.querySelector('.card-img-top');
        const title = productCard.querySelector('.card-title');
        const price = productCard.querySelector('.card-text.text-primary');
        const specs = productCard.querySelectorAll('.specs .badge');

        return {
            id: productCard.querySelector('.quick-view')?.dataset.productId || 'unknown',
            name: title ? title.textContent.trim() : 'Unknown Product',
            price: price ? price.textContent.trim() : 'Price not available',
            image: img ? img.src : '',
            description: 'Produk berkualitas tinggi dengan spesifikasi terbaik untuk kebutuhan Anda.',
            specs: specs ? Array.from(specs).map(spec => spec.textContent.trim()) : []
        };
    }

    // Build product data when on a single product (detail) page
    getProductDataFromDetailPage() {
        const imgEl = document.getElementById('mainImage') || document.querySelector('.main-image img');
        const titleEl = document.querySelector('.product-title');
        const priceEl = document.querySelector('.current-price');
        const specsEls = document.querySelectorAll('.features-grid .feature-item strong');

        return {
            id: titleEl ? titleEl.textContent.trim().toLowerCase().replace(/\s+/g, '-') : 'detail-product',
            name: titleEl ? titleEl.textContent.trim() : 'Detail Product',
            price: priceEl ? priceEl.textContent.trim() : 'Price not available',
            image: imgEl ? imgEl.src : '',
            description: document.querySelector('.product-subtitle') ? document.querySelector('.product-subtitle').textContent.trim() : '',
            specs: specsEls ? Array.from(specsEls).map(el => el.textContent.trim()) : []
        };
    }

    loadProducts() {
        // This would load from an API in a real application
        return [];
    }

    saveCart() {
        localStorage.setItem('cart', JSON.stringify(this.cart));
    }

    saveWishlist() {
        localStorage.setItem('wishlist', JSON.stringify(this.wishlist));
    }

    initTooltips() {
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    }

    initCounters() {
        // Initialize any counters on the page
    }

    initLazyLoading() {
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            });

            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        }
    }

    initSmoothScrolling() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    }

    setupNewsletter() {
        const newsletterForm = document.querySelector('.newsletter-form');
        if (newsletterForm) {
            newsletterForm.addEventListener('submit', (e) => {
                e.preventDefault();
                const email = newsletterForm.querySelector('input[type="email"]').value;
                this.subscribeNewsletter(email);
            });
        }
    }

    setupWhatsApp() {
        const whatsappBtn = document.querySelector('.whatsapp-float');
        if (whatsappBtn) {
            whatsappBtn.addEventListener('click', (e) => {
                // Track WhatsApp clicks
                this.trackEvent('whatsapp_click');
            });
        }
    }

    subscribeNewsletter(email) {
        // Simulate newsletter subscription
        this.showNotification('Terima kasih telah berlangganan newsletter kami!', 'success');

        // In a real application, this would send to your backend
        console.log('Newsletter subscription:', email);
    }

    trackEvent(eventName) {
        // Analytics tracking
        console.log('Event tracked:', eventName);
    }
}

// Initialize the application when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    window.tokoGaharApp = new TokoGaharApp();
});

// Additional utility functions
function debounce(func, wait, immediate) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            timeout = null;
            if (!immediate) func(...args);
        };
        const callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func(...args);
    };
}

function throttle(func, limit) {
    let inThrottle;
    return function(...args) {
        if (!inThrottle) {
            func.apply(this, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    }
}

// Export for module usage
if (typeof module !== 'undefined' && module.exports) {
    module.exports = { TokoGaharApp, debounce, throttle };
}


