/**
 * Strategic Takeaways Section Animations
 * Handles the flying airplane animation based on scroll position
 */

document.addEventListener('DOMContentLoaded', function() {
    const airplaneImage = document.querySelector('.strategic-airplane-image');
    const airplaneSection = document.querySelector('.strategic-airplane-section'); // Target the airplane section specifically
    
    if (!airplaneImage || !airplaneSection) {
        return;
    }

    let ticking = false;

    // Performance optimization for reduced motion preference
    if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        airplaneImage.style.transform = 'translateX(0) rotate(0.819deg)';
        return;
    }

    /**
     * Calculate airplane position based on scroll progress
     */
    function updateAirplanePosition() {
        const sectionRect = airplaneSection.getBoundingClientRect();
        const sectionHeight = sectionRect.height;
        const sectionTop = sectionRect.top;
        const sectionBottom = sectionRect.bottom;
        const windowHeight = window.innerHeight;
        
        // Only animate when the airplane section itself is visible
        const sectionStartVisible = sectionTop <= windowHeight;
        const sectionEndVisible = sectionBottom >= 0;
        
        // If section is not visible, keep plane off-screen to the right
        if (!sectionStartVisible || !sectionEndVisible) {
            airplaneImage.style.transform = 'translateX(150%) rotate(0.819deg)';
            return;
        }
        
        // Calculate scroll progress through the airplane section only
        // 0 = airplane section just entering viewport from bottom
        // 1 = airplane section just leaving viewport from top
        const totalScrollableHeight = sectionHeight + windowHeight;
        const scrollProgress = (windowHeight - sectionTop) / totalScrollableHeight;
        
        // Clamp progress between 0 and 1
        const clampedProgress = Math.max(0, Math.min(1, scrollProgress));
        
        // Map scroll progress to airplane position
        // 0% progress = airplane at 150% (off-screen right)
        // 100% progress = airplane at -150% (off-screen left)
        const airplanePosition = 150 - (clampedProgress * 300); // 150 to -150
        
        // Apply the transformation
        airplaneImage.style.transform = `translateX(${airplanePosition}%) rotate(0.819deg)`;
    }

    /**
     * Throttled scroll handler using requestAnimationFrame
     */
    function onScroll() {
        if (!ticking) {
            requestAnimationFrame(function() {
                updateAirplanePosition();
                ticking = false;
            });
            ticking = true;
        }
    }

    // Initial position calculation
    updateAirplanePosition();

    // Add scroll event listener
    window.addEventListener('scroll', onScroll, { passive: true });
    
    // Recalculate on window resize
    window.addEventListener('resize', function() {
        updateAirplanePosition();
    });
});