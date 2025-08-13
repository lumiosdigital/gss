<?php

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <div class="about-page-wrapper">
            <div class="container">
                


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

                <div class="about-content-grid">

                    <div class="about-heading-column">
                        <h1 class="about-main-heading">About Us</h1>
                    </div>

                    <div class="about-text-column">
                        <div class="about-text-content">
                            <?php if (have_posts()) : ?>
                                <?php while (have_posts()) : the_post(); ?>
                                    <?php if (get_the_content()) : ?>

                                        <?php the_content(); ?>
                                    <?php else : ?>
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
        <div class="about-graphics-wrapper">
            <div class="about-graphics-section">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-us.svg" 
                    alt="Global Satellite Solutions - About Us" 
                    class="about-graphics-image" 
                    loading="lazy" />
            </div>            
        </div>

        
    </main>
</div>

<?php get_footer(); ?>