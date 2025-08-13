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
        <svg width="1340" height="940" viewBox="0 0 1340 940" fill="none" xmlns="http://www.w3.org/2000/svg">
            <mask id="mask0_490_750" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="1340" height="940">
                <rect width="1340" height="940" rx="40" fill="#487FFF"/>
            </mask>
            <g mask="url(#mask0_490_750)">
                <circle cx="1149" cy="707" r="680.25" stroke="white" stroke-opacity="0.18" stroke-width="1.5" stroke-dasharray="6 6"/>
                <circle cx="1149" cy="707" r="904.25" stroke="white" stroke-opacity="0.18" stroke-width="1.5" stroke-dasharray="6 6"/>
                <circle cx="1150" cy="708" r="1172.25" stroke="white" stroke-opacity="0.18" stroke-width="1.5" stroke-dasharray="6 6"/>
                <circle cx="890" cy="79" r="8" fill="#9FFFF5" class="hero-orbit-1"/>
                <circle cx="890" cy="79" r="8" fill="#9FFFF5" class="hero-orbit-1-opposite"/>
                <circle cx="246" cy="738" r="6" fill="#9FFFF5" class="hero-orbit-2"/>
                <circle cx="246" cy="738" r="6" fill="#9FFFF5" class="hero-orbit-2-60"/>
                <circle cx="246" cy="738" r="6" fill="#9FFFF5" class="hero-orbit-2-120"/>
                <circle cx="246" cy="738" r="6" fill="#9FFFF5" class="hero-orbit-2-opposite"/>
                <circle cx="246" cy="738" r="6" fill="#9FFFF5" class="hero-orbit-2-240"/>
                <circle cx="246" cy="738" r="6" fill="#9FFFF5" class="hero-orbit-2-300"/>
                <circle cx="1149" cy="707" r="496.25" stroke="white" stroke-opacity="0.18" stroke-width="1.5" stroke-dasharray="6 6"/>
                <circle cx="169" cy="68" r="26" fill="#9FFFF5" fill-opacity="0.18" class="hero-orbit-3 hero-halo-pulse"/>
                <circle cx="169" cy="68" r="12" fill="#9FFFF5" class="hero-orbit-3"/>
                <circle cx="169" cy="68" r="26" fill="#9FFFF5" fill-opacity="0.18" class="hero-orbit-3-quarter hero-halo-pulse"/>
                <circle cx="169" cy="68" r="12" fill="#9FFFF5" class="hero-orbit-3-quarter"/>
                <circle cx="169" cy="68" r="26" fill="#9FFFF5" fill-opacity="0.18" class="hero-orbit-3-opposite hero-halo-pulse"/>
                <circle cx="169" cy="68" r="12" fill="#9FFFF5" class="hero-orbit-3-opposite"/>
                <circle cx="169" cy="68" r="26" fill="#9FFFF5" fill-opacity="0.18" class="hero-orbit-3-three-quarter hero-halo-pulse"/>
                <circle cx="169" cy="68" r="12" fill="#9FFFF5" class="hero-orbit-3-three-quarter"/>
                <circle cx="810" cy="343" r="8" fill="#9FFFF5" class="hero-orbit-4"/>
                <circle cx="810" cy="343" r="8" fill="#9FFFF5" class="hero-orbit-4-opposite"/>
                <circle cx="1288" cy="39" r="15" fill="#9FFFF5" fill-opacity="0.21" class="hero-orbit-5 hero-halo-pulse"/>
                <circle cx="1288" cy="39" r="7" fill="#9FFFF5" class="hero-orbit-5"/>
                <circle cx="1288" cy="39" r="15" fill="#9FFFF5" fill-opacity="0.21" class="hero-orbit-5-opposite hero-halo-pulse"/>
                <circle cx="1288" cy="39" r="7" fill="#9FFFF5" class="hero-orbit-5-opposite"/>
            </g>
        </svg>
    </div>
    <div class="hero-container">
        
        <!-- Left Content -->
        <div class="hero-content">
            <h1 class="hero-title">
                The Industry’s Trusted Benchmark for Measuring IFC Experience
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
                <a href="#case-study" class="btn-secondary">
                    Case Study
                </a>
            </div>
            
            <div class="hero-partners">
                <span class="partners-label">Powered By</span>
                <div class="partners-logos">
                    <a href="https://globalreachtech.com/" target="_blank" rel="noopener noreferrer" class="partner-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/globalreach-logo.png" alt="Global Reach Technology" ></a>
                    <a href="https://www.seamlessalliance.com/" target="_blank" rel="noopener noreferrer" class="partner-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/seamless-air-alliance-logo.png" alt="Seamless Air Alliance"></a>
                </div>
            </div>
        </div>

        <!-- Right Visual Elements -->
    </div>

    <!-- Foreground SVG -->
    <div class="hero-fg-svg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-banner-foreground-new.png" alt="Hero Foreground" class="hero-fg-image">
    </div>
</section>