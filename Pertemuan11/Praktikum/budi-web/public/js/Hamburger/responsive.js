// Mobile Navigation Functionality
$(document).ready(function() {
    const $navToggle = $('.nav-toggle');
    const $navMenu = $('.nav-menu');
    const $navLinks = $('.nav-menu a');
    const $body = $('body');
    let menuOpen = false;

    function openMenu() {
        if (menuOpen) return;

        menuOpen = true;
        $navToggle.addClass('active').attr('aria-expanded', 'true');
        $navMenu.addClass('active');
        $body.addClass('nav-open');

        // Prevent body scroll
        $body.css('overflow', 'hidden');

        // Focus management for accessibility
        setTimeout(() => {
            $navMenu.find('a').first().focus();
        }, 400);
    }

    function closeMenu() {
        if (!menuOpen) return;

        menuOpen = false;
        $navToggle.removeClass('active').attr('aria-expanded', 'false');
        $navMenu.removeClass('active');
        $body.removeClass('nav-open');

        // Restore body scroll
        $body.css('overflow', '');

        // Return focus to toggle button
        $navToggle.focus();
    }

    // Toggle menu
    $navToggle.on('click', function(e) {
        e.stopPropagation();
        e.preventDefault();

        if (menuOpen) {
            closeMenu();
        } else {
            openMenu();
        }
    });

    // Close menu when clicking close button
    $('.nav-close').on('click', function(e) {
        e.stopPropagation();
        closeMenu();
    });

    // Close menu when clicking links (mobile only)
    $navLinks.on('click', function(e) {
        e.stopPropagation();

        if ($(window).width() <= 768) {
            setTimeout(() => {
                closeMenu();
            }, 300);
        }
    });

    // Close menu with ESC key
    $(document).on('keydown', function(e) {
        if (e.key === 'Escape' && menuOpen) {
            closeMenu();
        }
    });

    // Handle window resize with debounce
    let resizeTimeout;
    $(window).on('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(function() {
            if ($(window).width() > 768 && menuOpen) {
                closeMenu();
            }
        }, 250);
    });

    // Prevent menu close when clicking inside menu
    $navMenu.on('click', function(e) {
        e.stopPropagation();
    });

    // Keyboard navigation for menu (accessibility)
    $navMenu.on('keydown', function(e) {
        if (e.key === 'Tab' && menuOpen) {
            const $items = $navMenu.find('a');
            const firstItem = $items.first();
            const lastItem = $items.last();

            if (e.shiftKey && $(document.activeElement).is(firstItem)) {
                e.preventDefault();
                lastItem.focus();
            } else if (!e.shiftKey && $(document.activeElement).is(lastItem)) {
                e.preventDefault();
                firstItem.focus();
            }
        }
    });

    // Close menu when clicking outside on mobile
    $(document).on('click', function(e) {
        if (menuOpen && !$(e.target).closest('.nav-menu, .nav-toggle').length) {
            closeMenu();
        }
    });
});

