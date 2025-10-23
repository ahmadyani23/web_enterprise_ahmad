/**
 * Burger Menu Functionality for Inaklug Website
 * File: public/js/burger-menu.js
 */

document.addEventListener('DOMContentLoaded', function() {
    // Get elements
    const burgerMenu = document.getElementById('burgerMenu');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');
    const mobileNavLinks = document.querySelectorAll('.mobile-menu-nav .nav-link');

    // Check if elements exist
    if (!burgerMenu || !mobileMenu || !mobileMenuOverlay) {
        console.warn('Burger menu elements not found');
        return;
    }

    /**
     * Toggle mobile menu open/close
     */
    function toggleMenu() {
        const isActive = burgerMenu.classList.contains('active');
        
        burgerMenu.classList.toggle('active');
        mobileMenu.classList.toggle('active');
        mobileMenuOverlay.classList.toggle('active');
        
        // Prevent body scroll when menu is open
        if (!isActive) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = '';
        }
    }

    /**
     * Close mobile menu
     */
    function closeMenu() {
        if (burgerMenu.classList.contains('active')) {
            burgerMenu.classList.remove('active');
            mobileMenu.classList.remove('active');
            mobileMenuOverlay.classList.remove('active');
            document.body.style.overflow = '';
        }
    }

    // Event: Burger button click
    burgerMenu.addEventListener('click', function(e) {
        e.stopPropagation();
        toggleMenu();
    });

    // Event: Overlay click (close menu when clicking outside)
    mobileMenuOverlay.addEventListener('click', function() {
        closeMenu();
    });

    // Event: Close menu when navigation link is clicked
    mobileNavLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            closeMenu();
        });
    });

    // Event: Close menu with ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeMenu();
        }
    });

    // Event: Handle window resize
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            // Close menu if window is resized to desktop size
            if (window.innerWidth > 1023) {
                closeMenu();
            }
        }, 250);
    });

    // Prevent clicks inside mobile menu from closing it
    mobileMenu.addEventListener('click', function(e) {
        e.stopPropagation();
    });
});