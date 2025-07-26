<?php
/**
 * Hero Banner Component
 * 
 * This can be included on any page that needs the hero banner
 */
?>

<section class="hero-banner">
    <!-- Background SVG -->
    <div class="hero-bg-svg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-banner-background.svg" alt="Hero Background" class="hero-bg-image">
    </div>
    <div class="hero-container">
        
        <!-- Left Content -->
        <div class="hero-content">
            <h1 class="hero-title">
                Airline Industry Unites to Enhance In-Flight Connectivity Quality
            </h1>
            
            <p class="hero-description">
                Global Satellite Solutions is the exclusive home of Viper – the first and only inflight connectivity monitoring platform built on Seamless Air Alliance industry defined metrics.
            </p>
            
            <div class="hero-actions">
                <a href="#" class="btn-primary">
                    <span class="btn-text">Ready To Experience Viper?</span>
                    <span class="btn-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M2.5 17.5L17.5 2.5M17.5 2.5H2.5M17.5 2.5V17.5" stroke="#091026" stroke-width="2" stroke-linecap="square"/>
                        </svg>
                    </span>
                </a>
                <a href="#" class="btn-secondary">
                    Case Study
                </a>
            </div>
            
            <div class="hero-partners">
                <span class="partners-label">Powered By</span>
                <div class="partners-logos">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/globalreach-logo.png" alt="Global Reach Technology" class="partner-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seamless-air-alliance-logo.png" alt="Seamless Air Alliance" class="partner-logo">
                </div>
            </div>
        </div>

        <!-- Right Visual Elements -->
    </div>

    <!-- Foreground SVG -->
    <div class="hero-fg-svg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-banner-foreground.svg" alt="Hero Foreground" class="hero-fg-image">
    </div>
</section>