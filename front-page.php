<?php
/**
 * The front page template file
 * 
 * This is the template that displays the homepage
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <!-- Hero Banner -->
        <?php get_template_part('template-parts/hero-banner'); ?>
        
        <!-- SatQoE Section (your existing one) -->
        <?php get_template_part('template-parts/satqoe-section'); ?>
        
        <!-- Features Section -->
        <?php get_template_part('template-parts/features-section'); ?>
        
        <!-- Inflight Connectivity Section (QoS vs QoE section) -->
        <?php get_template_part('template-parts/inflight-connectivity-section'); ?>
        
        <!-- Airline Case Study Section -->
        <?php get_template_part('template-parts/airline-case-study-section'); ?>

        <!-- Insights to Action Section -->
        <?php get_template_part('template-parts/insights-to-action-section'); ?>
        
        <!-- Future sections will go here -->
        <div class="container">
            <section class="placeholder-content">
                <h2>More sections coming soon...</h2>
                <p>This is where additional homepage content will be added.</p>
            </section>
        </div>
        
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>