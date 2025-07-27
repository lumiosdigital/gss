<?php
/**
 * The template for displaying the About Us page
 * 
 * This template will be automatically used for any page with the slug "about"
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <!-- About Us Page Content -->
        <div class="about-page-wrapper">
            <div class="container">
                


                <!-- Breadcrumb Navigation -->
                <nav class="breadcrumb-nav" aria-label="Breadcrumb">
                    <ol class="breadcrumb-list">
                        <li class="breadcrumb-item">
                            <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                        </li>
                        <li class="breadcrumb-separator">
                            <svg xmlns="http://www.w3.org/2000/svg" width="5" height="9" viewBox="0 0 5 9" fill="none">
                                <path d="M1 1.5L4 4.5L1 7.5" stroke="#091026" stroke-linecap="square"/>
                            </svg>
                        </li>
                        <li class="breadcrumb-item breadcrumb-current" aria-current="page">
                            About Us
                        </li>
                    </ol>
                </nav>

                <!-- Main Content Area -->
                <div class="about-content-grid">
                    
                    <!-- Left Column - Heading -->
                    <div class="about-heading-column">
                        <h1 class="about-main-heading">About Us</h1>
                    </div>

                    <!-- Right Column - Content -->
                    <div class="about-text-column">
                        <div class="about-text-content">
                            <?php if (have_posts()) : ?>
                                <?php while (have_posts()) : the_post(); ?>
                                    <?php if (get_the_content()) : ?>
                                        <!-- Use page content if available -->
                                        <?php the_content(); ?>
                                    <?php else : ?>
                                        <!-- Default content if no page content is set -->
                                        <p>
                                            Global Satellite Solutions is the company behind Viper, the First Standards based independent performance intelligence platform for inflight connectivity (IFC) and satellite networks.<br><br>
                                            Born from the Seamless Air Alliance and powered by contributions from over 200 experts across aviation, telecom, and satellite industries, we are redefining how airlines and mobile network operators manage connectivity quality.
                                        </p>
                                        
                                        <p>
                                            Our mission is to bring transparency, accountability, and actionable insight to the satellite connectivity ecosystem. Viper enables airlines to benchmark service providers, enforce SLAs, and improve passenger experience—all without installing onboard hardware.<br><br>
                                            For telecoms, we offer verified performance data to validate and market satellite-based offerings like direct-to-device, IoT, and backhaul.
                                        </p>
                                        
                                        <p>
                                            With commercial deployments across global fleets and growing traction in the wireless space, Global Satellite Solutions is committed to making satellite performance measurable, comparable, and trusted—at scale.
                                        </p>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <!-- Fallback content -->
                                <p>
                                    Global Satellite Solutions is the company behind Viper, the First Standards based independent performance intelligence platform for inflight connectivity (IFC) and satellite networks.<br><br>
                                    Born from the Seamless Air Alliance and powered by contributions from over 200 experts across aviation, telecom, and satellite industries, we are redefining how airlines and mobile network operators manage connectivity quality.
                                </p>
                                
                                <p>
                                    Our mission is to bring transparency, accountability, and actionable insight to the satellite connectivity ecosystem. Viper enables airlines to benchmark service providers, enforce SLAs, and improve passenger experience—all without installing onboard hardware.<br><br>
                                    For telecoms, we offer verified performance data to validate and market satellite-based offerings like direct-to-device, IoT, and backhaul.
                                </p>
                                
                                <p>
                                    With commercial deployments across global fleets and growing traction in the wireless space, Global Satellite Solutions is committed to making satellite performance measurable, comparable, and trusted—at scale.
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!-- Blue Graphics Section with Uploaded Image -->
        <div class="about-graphics-section">
            <?php 
            // Get the featured image or custom field for about page image
            $about_image_id = get_post_meta(get_the_ID(), 'about_page_image', true);
            $about_image_url = '';
            
            if ($about_image_id) {
                $about_image_url = wp_get_attachment_image_url($about_image_id, 'full');
            } elseif (has_post_thumbnail()) {
                $about_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            }
            
            if ($about_image_url) : ?>
                <img src="<?php echo esc_url($about_image_url); ?>" 
                     alt="Global Satellite Solutions - About Us" 
                     class="about-graphics-image" 
                     loading="lazy" />
            <?php else : ?>
                <!-- Fallback background if no image is uploaded -->
                <div class="about-graphics-fallback">
                    <div class="fallback-content">
                        <h3>Global Satellite Solutions</h3>
                        <p>Satellite Performance Intelligence Platform</p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>