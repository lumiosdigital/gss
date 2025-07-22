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
            
            <!-- Browser-based testing -->
            <div class="feature-card feature-card-blue">
                <div class="feature-content">
                    <h3 class="feature-title">Browser-based testing</h3>
                    <div class="feature-visual">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/browser-testing.svg" alt="Network Performance Map" class="feature-image">
                    </div>
                </div>
            </div>
            
            <!-- Airline app with parallax -->
            <div class="feature-card feature-card-green">
                <!-- Parallax background -->
                <div class="parallax-container">
                    <div class="parallax-bg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plane.svg" alt="Plane background">
                    </div>
                </div>
                
                <div class="feature-content">
                    <h3 class="feature-title">Airline app</h3>
                    <div class="feature-visual">
                        <!-- Parallax foreground -->
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/viper-mobile-app.png" alt="Viper Mobile App" class="feature-image parallax-fg">
                    </div>
                </div>
            </div>
            
            <!-- Crew tablet with parallax -->
            <div class="feature-card feature-card-green">
                <!-- Parallax background -->
                <div class="parallax-container">
                    <div class="parallax-bg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/average-test-score.svg" alt="Crew tablet background">
                    </div>
                </div>
                
                <div class="feature-content">
                    <h3 class="feature-title">Crew tablet</h3>
                    <div class="feature-visual">
                        <!-- Parallax foreground -->
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/crew-tablet.png" alt="Flight Crew Using Tablet" class="feature-image parallax-fg">
                    </div>
                </div>
            </div>
            
            <!-- AWS Storage with parallax -->
            <div class="feature-card feature-card-blue">
                <!-- Parallax background -->
                <div class="parallax-container">
                    <div class="parallax-bg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/geometric-AWS.svg" alt="AWS cloud background">
                    </div>
                </div>
                
                <div class="feature-content">
                    <h3 class="feature-title">Scalable and Secure storage using AWS</h3>
                    <div class="feature-visual">
                        <!-- Parallax foreground -->
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aws-storage.svg" alt="AWS Cloud Storage" class="feature-image parallax-fg">
                    </div>
                </div>
            </div>
            
        </div>
</section>