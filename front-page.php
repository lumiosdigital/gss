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
        
        <!-- Airline Case Study Section -->
        <?php get_template_part('template-parts/airline-case-study-section'); ?>

        <!-- Insights to Action Section -->
        <?php get_template_part('template-parts/insights-to-action-section'); ?>

        <!-- Strategic Takeaways Section -->
        <?php get_template_part('template-parts/strategic-takeaways-section'); ?>

        <!-- Experience Viper Section -->
        <?php get_template_part('template-parts/experience-viper-section'); ?>
        
        
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>