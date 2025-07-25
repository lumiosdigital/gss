/**
 * Navigation JavaScript for Global Satellite Solutions
 */

(function($) {
    'use strict';

    // Initialize navigation when DOM is ready
    $(document).ready(function() {
        initMobileMenu();
        initDropdownMenus();
        initAccessibility();
        preventIndustriesClick();
        initHeaderScrollBehavior(); // Enable header scroll behavior
    });

    /**
     * Prevent Industries parent link from being clickable
     */
    function preventIndustriesClick() {
        // Only prevent clicks on the main Industries link, not sub-items
        $('.menu-item-has-children > a[href="#"], .menu-item-has-children > a[href*="industries"]').on('click', function(e) {
            e.preventDefault();
            return false;
        });
        
        // Handle dropdown toggle spans (non-clickable)
        $('.menu-item-has-children .dropdown-toggle').on('click', function(e) {
            e.preventDefault();
            
            // Toggle dropdown on mobile
            if ($(window).width() <= 768) {
                $(this).closest('.menu-item-has-children').toggleClass('menu-open');
            }
            
            return false;
        });
    }

    /**
     * Mobile Menu Toggle
     */
    function initMobileMenu() {
        const menuToggle = $('.menu-toggle');
        const primaryMenuWrapper = $('.primary-menu-wrapper');
        
        menuToggle.on('click', function(e) {
            e.preventDefault();
            
            const isExpanded = $(this).attr('aria-expanded') === 'true';
            
            // Toggle menu state
            $(this).attr('aria-expanded', !isExpanded);
            primaryMenuWrapper.toggleClass('menu-open');
        });

        // Close mobile menu when clicking outside
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.main-navigation').length && 
                !$(e.target).closest('.menu-toggle').length) {
                menuToggle.attr('aria-expanded', 'false');
                primaryMenuWrapper.removeClass('menu-open');
            }
        });

        // Close mobile menu on window resize
        $(window).on('resize', function() {
            if ($(window).width() > 768) {
                menuToggle.attr('aria-expanded', 'false');
                primaryMenuWrapper.removeClass('menu-open');
                // Close any open mobile dropdowns
                $('.menu-item-has-children').removeClass('menu-open');
            }
        });
    }

    /**
     * Dropdown Menu Functionality
     */
    function initDropdownMenus() {
        const dropdownItems = $('.menu-item-has-children');
        
        // Handle mobile dropdown toggles - only for parent items
        dropdownItems.each(function() {
            const $this = $(this);
            const $parentLink = $this.children('a, .dropdown-toggle');
            
            // Add click handler for mobile - only for parent items
            $parentLink.on('click', function(e) {
                if ($(window).width() <= 768) {
                    // Only prevent default for parent items that don't have real URLs
                    if ($(this).attr('href') === '#' || $(this).hasClass('dropdown-toggle')) {
                        e.preventDefault();
                        
                        // Close other open dropdowns
                        dropdownItems.not($this).removeClass('menu-open');
                        
                        // Toggle current dropdown
                        $this.toggleClass('menu-open');
                    }
                    // Let real links (Aviation, Telecom) work normally
                }
            });
        });

        // Desktop hover behavior is handled by CSS
    }

    /**
     * Accessibility Enhancements
     */
    function initAccessibility() {
        const dropdownItems = $('.menu-item-has-children');
        
        // Handle keyboard navigation
        dropdownItems.each(function() {
            const $this = $(this);
            const $parentToggle = $this.children('a, .dropdown-toggle');
            const $submenu = $this.children('.sub-menu');
            
            // Handle Enter key and Space key for dropdown toggles - only for parent items
            $parentToggle.on('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    if ($(window).width() <= 768) {
                        // Only prevent default for parent items that don't have real URLs
                        if ($(this).attr('href') === '#' || $(this).hasClass('dropdown-toggle')) {
                            e.preventDefault();
                            
                            // Close other open dropdowns
                            dropdownItems.not($this).removeClass('menu-open');
                            
                            // Toggle current dropdown
                            $this.toggleClass('menu-open');
                        }
                        // Let real links (Aviation, Telecom) work normally
                    }
                }
                
                // Handle Escape key to close dropdowns
                if (e.key === 'Escape') {
                    $this.removeClass('menu-open');
                    $parentToggle.focus();
                }
            });
            
            // Handle focus management for submenus - don't prevent clicks here
            $submenu.find('a').on('keydown', function(e) {
                if (e.key === 'Escape') {
                    $this.removeClass('menu-open');
                    $parentToggle.focus();
                }
            });
        });

        // Handle focus for mobile menu toggle
        $('.menu-toggle').on('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                $(this).click();
            }
        });
    }

    /**
     * Header scroll behavior with throttling for better performance
     */
    function initHeaderScrollBehavior() {
        let lastScrollTop = 0;
        let ticking = false;
        const header = $('.site-header');
        
        function updateHeader() {
            const scrollTop = $(window).scrollTop();
            
            // Add shadow when scrolled
            if (scrollTop > 10) {
                header.addClass('header-scrolled');
            } else {
                header.removeClass('header-scrolled');
            }
            
            // Hide/show header based on scroll direction
            if (scrollTop > lastScrollTop && scrollTop > 100) {
                // Scrolling down - hide header
                header.addClass('header-hidden');
            } else if (scrollTop < lastScrollTop) {
                // Scrolling up - show header
                header.removeClass('header-hidden');
            }
            
            lastScrollTop = scrollTop;
            ticking = false;
        }
        
        function requestTick() {
            if (!ticking) {
                requestAnimationFrame(updateHeader);
                ticking = true;
            }
        }
        
        $(window).on('scroll', requestTick);
        
        // Also handle touchmove for mobile devices
        $(window).on('touchmove', requestTick);
    }

    /**
     * Smooth scrolling for anchor links (if needed)
     */
    function initSmoothScrolling() {
        $('a[href*="#"]:not([href="#"])').on('click', function(e) {
            const target = $(this.hash);
            
            if (target.length) {
                e.preventDefault();
                
                $('html, body').animate({
                    scrollTop: target.offset().top - 100 // Account for fixed header
                }, 600);
            }
        });
    }

    // Optional: Initialize additional features
    // initSmoothScrolling();

})(jQuery);