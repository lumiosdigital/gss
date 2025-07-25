/**
 * Chart Animations for Inflight Connectivity Section
 * Handles fade-in, number counting, and line drawing animations
 */

class ChartAnimations {
    constructor() {
        this.chartsContainer = document.querySelector('.charts-container');
        this.chartItems = document.querySelectorAll('.chart-item');
        this.animationTriggered = false;
        
        this.init();
    }

    init() {
        if (!this.chartsContainer) return;
        
        // Set initial states
        this.setInitialStates();
        
        // Setup intersection observer
        this.setupIntersectionObserver();
    }

    setInitialStates() {
        this.chartItems.forEach(item => {
            // Set initial opacity for fade-in effect
            item.style.opacity = '0';
            item.style.transform = 'translateY(20px)';
            item.style.transition = 'opacity 0.8s ease-out, transform 0.8s ease-out';
            
            // Find and prepare SVG elements
            const svg = item.querySelector('svg');
            if (svg) {
                this.prepareSVGAnimation(svg);
            }
        });
    }

    prepareSVGAnimation(svg) {
        // Prepare path elements for line drawing animation
        const paths = svg.querySelectorAll('path[stroke]');
        paths.forEach(path => {
            const length = path.getTotalLength();
            path.style.strokeDasharray = length;
            path.style.strokeDashoffset = length;
            path.style.transition = 'stroke-dashoffset 2s ease-in-out';
        });

        // Prepare number elements for counting animation
        const textElements = svg.querySelectorAll('text');
        textElements.forEach(text => {
            const content = text.textContent;
            // Check if text contains a number (with optional decimal places and units)
            const numberMatch = content.match(/(\d+(?:\.\d+)?)/);
            if (numberMatch) {
                const originalNumber = parseFloat(numberMatch[1]);
                text.setAttribute('data-target', originalNumber);
                text.setAttribute('data-original-content', content);
                // Set initial number to 0
                text.textContent = content.replace(numberMatch[1], '0');
            }
        });
    }

    setupIntersectionObserver() {
        const options = {
            threshold: 0.3,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !this.animationTriggered) {
                    this.animationTriggered = true;
                    this.startAnimations();
                }
            });
        }, options);

        observer.observe(this.chartsContainer);
    }

    startAnimations() {
        this.chartItems.forEach((item, index) => {
            // Stagger the animations
            setTimeout(() => {
                this.animateChartItem(item);
            }, index * 200);
        });
    }

    animateChartItem(item) {
        // Fade in the chart
        item.style.opacity = '1';
        item.style.transform = 'translateY(0)';

        const svg = item.querySelector('svg');
        if (!svg) return;

        // Start number counting animation
        setTimeout(() => {
            this.animateNumbers(svg);
        }, 300);

        // Start line drawing animation
        setTimeout(() => {
            this.animateLines(svg);
        }, 500);
    }

    animateNumbers(svg) {
        const textElements = svg.querySelectorAll('text[data-target]');
        
        textElements.forEach(text => {
            const target = parseFloat(text.getAttribute('data-target'));
            const originalContent = text.getAttribute('data-original-content');
            const duration = 1500; // 1.5 seconds
            const startTime = performance.now();

            const animate = (currentTime) => {
                const elapsed = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);
                
                // Use easeOutQuart for smooth deceleration
                const easeProgress = 1 - Math.pow(1 - progress, 4);
                const currentValue = target * easeProgress;
                
                // Format the number based on original format
                let formattedValue;
                if (target % 1 === 0) {
                    // Integer
                    formattedValue = Math.floor(currentValue).toString();
                } else {
                    // Decimal - preserve original decimal places
                    const decimalPlaces = target.toString().split('.')[1]?.length || 1;
                    formattedValue = currentValue.toFixed(decimalPlaces);
                }
                
                // Replace the number in the original content
                text.textContent = originalContent.replace(/(\d+(?:\.\d+)?)/, formattedValue);
                
                if (progress < 1) {
                    requestAnimationFrame(animate);
                }
            };

            requestAnimationFrame(animate);
        });
    }

    animateLines(svg) {
        const paths = svg.querySelectorAll('path[stroke]');
        
        paths.forEach((path, index) => {
            // Stagger line animations slightly
            setTimeout(() => {
                path.style.strokeDashoffset = '0';
            }, index * 100);
        });
    }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new ChartAnimations();
});