<?php
/**
 * Features Section Component - "Actionable Intelligence" 
 */
?>

<section class="features-section">
        
    <!-- Section Header -->
    <div class="features-header">
        <h2 class="features-title">
            Actionable Intelligence for Every Flight, Every Device, Every Passenger.
        </h2>
        <p class="features-description">
            Viper can be deployed without hardware or through crew devices, airline apps, and other methods adapting to meet the needs of your fleet.
        </p>
    </div>
    
    <!-- Features Grid -->
    <div class="features-grid">
        
        <!-- Browser-based testing (no parallax) -->
        <div class="feature-card feature-card-blue">
            <h3 class="feature-title">Browser-based testing</h3>
            <div class="feature-visual">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/browser-testing.svg" alt="Network Performance Map" class="feature-image">
            </div>
        </div>
        
        <!-- Airline app with parallax -->
        <div class="feature-card feature-card-green" data-parallax="true">
            <div class="parallax-bg plane">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plane.svg" alt="Plane background">
            </div>
            <h3 class="feature-title">Airline app</h3>
            <div class="feature-visual">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/viper-mobile-app.png" alt="Viper Mobile App" class="feature-image parallax-fg">
            </div>
        </div>
        
        <!-- Crew tablet with parallax -->
        <div class="feature-card feature-card-green" data-parallax="true">
            <div class="parallax-bg test-score">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/average-test-score.svg" alt="Crew tablet background">
            </div>
            <h3 class="feature-title">Crew tablet</h3>
            <div class="feature-visual crew-member">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/crew-tablet.png" alt="Flight Crew Using Tablet" class="feature-image parallax-fg">
            </div>
        </div>
        
        <!-- AWS Storage with parallax -->
        <div class="feature-card feature-card-blue" data-parallax="true">
            <div class="parallax-bg geometric-aws">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/geometric-AWS.svg" alt="AWS cloud background">
            </div>
            <h3 class="feature-title">Scalable and Secure storage using AWS</h3>
            <div class="feature-visual">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aws-storage.svg" alt="AWS Cloud Storage" class="feature-image parallax-fg">
            </div>
        </div>
        
    </div>
</section>