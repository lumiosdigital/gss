/**
 * Features Section Parallax Effects
 */

(function() {
    'use strict';

    // Check if device supports parallax (disable on mobile)
    const isMobile = window.innerWidth <= 768;
    if (isMobile) return;

    let isScrolling = false;
    let parallaxCards = [];

    // Initialize parallax effect
    function initParallax() {
        parallaxCards = document.querySelectorAll('[data-parallax="true"]');
        
        if (parallaxCards.length === 0) return;

        // Set up scroll listener
        window.addEventListener('scroll', handleScroll, { passive: true });
        
        // Initial calculation
        updateParallax();
    }

    function handleScroll() {
        if (!isScrolling) {
            requestAnimationFrame(updateParallax);
            isScrolling = true;
        }
    }

    function updateParallax() {
        const scrollTop = window.pageYOffset;
        const windowHeight = window.innerHeight;

        parallaxCards.forEach(card => {
            const cardRect = card.getBoundingClientRect();
            const cardTop = cardRect.top + scrollTop;
            const cardHeight = cardRect.height;

            // Check if card is in viewport (with some buffer)
            const isInViewport = (cardRect.top < windowHeight + 200) && 
                               (cardRect.bottom > -200);

            if (!isInViewport) return;

            // Calculate parallax offset based on scroll position
            const cardCenter = cardTop + (cardHeight / 2);
            const windowCenter = scrollTop + (windowHeight / 2);
            const distance = windowCenter - cardCenter;
            
            // Parallax intensity (adjust these values to change effect strength)
            // EXPERIMENT HERE: Lower values = less movement, higher values = more movement
            const bgIntensity = 0.08;   // Background moves slower (was 0.3)
            const fgIntensity = 0.0;    // Foreground moves slightly (was 0.15)

            // CENTER ALIGNMENT OFFSETS - Adjust these to fix center positioning
            // EXPERIMENT HERE: Positive values move up, negative values move down when centered
            let centerOffset = 0;
            const bgElement = card.querySelector('.parallax-bg');
            
            if (bgElement) {
                if (bgElement.classList.contains('plane')) {
                    centerOffset = 0;     // Plane card offset
                } else if (bgElement.classList.contains('test-score')) {
                    centerOffset = 90;    // Crew tablet offset (move down when centered)
                } else if (bgElement.classList.contains('geometric-aws')) {
                    centerOffset = 90;   // AWS card offset (move up when centered)
                }
            }

            // Calculate transform values
            const bgTransform = (distance * bgIntensity) + centerOffset;
            const fgTransform = distance * fgIntensity;

            // Apply transforms
            if (bgElement) {
                bgElement.style.transform = `translateY(${bgTransform}px)`;
            }

            const fgElement = card.querySelector('.parallax-fg');
            if (fgElement) {
                fgElement.style.transform = `translateY(${-fgTransform}px)`;
            }
        });

        isScrolling = false;
    }

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initParallax);
    } else {
        initParallax();
    }

    // Recalculate on window resize
    window.addEventListener('resize', function() {
        // Check if we've moved to/from mobile
        const nowMobile = window.innerWidth <= 768;
        if (nowMobile !== isMobile) {
            location.reload(); // Simple solution for responsive changes
        }
    });

})();