<?php
/**
 * The template for displaying the Terms of Service page
 * 
 * This template will be automatically used for any page with the slug "terms-of-service"
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <!-- Terms of Service Page Content -->
        <div class="legal-page-wrapper">
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
                            Terms of Service
                        </li>
                    </ol>
                </nav>

                <!-- Main Content Area -->
                <div class="legal-content-grid">
                    
                    <!-- Left Column - Heading -->
                    <div class="legal-heading-column">
                        <h1 class="legal-main-heading">Terms of Service</h1>
                        <p class="legal-effective-date">Effective Date: August 1, 2025</p>
                    </div>

                    <!-- Right Column - Content -->
                    <div class="legal-text-column">
                        <div class="legal-text-content">
                            <?php
                            if (have_posts()) {
                                while (have_posts()) {
                                    the_post();
                                    $content = get_the_content();
                                    
                                    // If page has content, show it
                                    if (!empty(trim(strip_tags($content)))) {
                                        the_content();
                                    } else {
                                        // Show default content
                                        ?>
                                        <p>Welcome to <span class="GSS-branding">Global Satellite Solutions ("GSS")</span>. These Terms of Service ("Terms") govern your access to and use of our website, platform, products, and services (collectively, the "Services"). By accessing or using our Services, you agree to be bound by these Terms.</p>

                                        <h2>1. Overview</h2>
                                        <p>Global Satellite Solutions provides Viper, an independent performance intelligence platform for satellite-based inflight connectivity and mobility services. Our tools deliver analytics, benchmarking, and reporting for Quality of Experience (QoE) and Quality of Service (QoS) without requiring onboard hardware.</p>

                                        <h2>2. Use of Services</h2>
                                        <p>You may use our Services only in compliance with these Terms and all applicable laws. You must not misuse our Services or access them using unauthorized means. You may not attempt to reverse engineer, copy, or exploit the Service for competitive or commercial purposes.</p>

                                        <h2>3. Account Registration</h2>
                                        <p>Some features may require registration. You agree to provide accurate, complete, and updated information and to maintain the security of your account credentials. You are responsible for all activity on your account.</p>

                                        <h2>4. Data Collection and Use</h2>
                                        <p>GSS may collect and process data derived from the use of our Services, including synthetic network tests and related metadata. All such data is anonymized and aggregated, unless explicitly agreed otherwise in a signed customer agreement. For more details, please review our <a href="<?php echo home_url('/privacy-policy'); ?>">Privacy Policy</a>.</p>

                                        <h2>5. Intellectual Property</h2>
                                        <p>All content, trademarks, and software associated with our Services are owned by GSS or our licensors. You may not copy, modify, distribute, or create derivative works from any of our materials without written consent.</p>

                                        <h2>6. Confidentiality</h2>
                                        <p>Information shared with GSS as part of onboarding or service integration, including but not limited to network configurations and performance benchmarks, will be treated as confidential. GSS agrees to use such information solely for the purpose of delivering contracted services.</p>

                                        <h2>7. Subscription and Payment</h2>
                                        <p>Use of Viper is subject to a subscription fee under terms defined in a separate Service Agreement. All fees are due as specified in your agreement. Failure to pay may result in suspension or termination of Services.</p>

                                        <h2>8. Service Availability</h2>
                                        <p>We aim to provide uninterrupted Services but do not guarantee 100% uptime. Scheduled maintenance or unexpected outages may occur. GSS is not liable for any damages resulting from such outages.</p>

                                        <h2>9. Termination</h2>
                                        <p>We may suspend or terminate your access to the Services at any time for violation of these Terms or other contractual obligations. You may terminate your use at any time, but no refunds will be issued unless otherwise agreed.</p>

                                        <h2>10. Disclaimers</h2>
                                        <p>The Services are provided "as is." GSS disclaims all warranties, express or implied, including merchantability, fitness for a particular purpose, and non-infringement. We do not guarantee that the data or reports will identify all network issues or SLA violations.</p>

                                        <h2>11. Limitation of Liability</h2>
                                        <p>To the fullest extent permitted by law, GSS shall not be liable for indirect, incidental, special, or consequential damages, or loss of profits or data arising from your use of the Services.</p>

                                        <h2>12. Governing Law</h2>
                                        <p>These Terms are governed by the laws of the State of Delaware, without regard to its conflict of laws rules. Any disputes will be resolved in the courts located in Delaware.</p>

                                        <h2>13. Changes to Terms</h2>
                                        <p>We may modify these Terms at any time. Continued use of the Services after changes become effective constitutes acceptance of the new Terms.</p>

                                        <h2>14. Contact</h2>
                                        <p>If you have questions about these Terms, please contact us at:</p>

                                        <?php
                                    }
                                }
                            }
                            ?>
                            <p class="GSS-branding-bottom">Global Satellite Solutions</p>
                            <div class="contact-email-wrapper">
                                <div class="contact-email-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                        <path d="M11.6714 12.7538C11.1739 13.0855 10.5959 13.2609 10 13.2609C9.40414 13.2609 8.82617 13.0855 8.32859 12.7538L0.133164 7.29001C0.0876953 7.2597 0.0433984 7.2281 0 7.1956V16.1486C0 17.1751 0.833008 17.9897 1.84113 17.9897H18.1588C19.1853 17.9897 20 17.1567 20 16.1486V7.19556C19.9565 7.22813 19.9121 7.25981 19.8665 7.29017L11.6714 12.7538Z" fill="#155BFF"/>
                                        <path d="M0.783203 6.31487L8.97863 11.7787C9.28887 11.9855 9.64441 12.0889 9.99996 12.0889C10.3555 12.0889 10.7111 11.9855 11.0214 11.7787L19.2168 6.31487C19.7072 5.98811 20 5.44124 20 4.85101C20 3.83612 19.1743 3.0105 18.1595 3.0105H1.84051C0.825664 3.01054 0 3.83616 0 4.85198C0 5.44124 0.292812 5.98811 0.783203 6.31487Z" fill="#155BFF"/>
                                    </svg>
                                </div>
                                <a href="mailto:info@satqoe.com" class="contact-email-link">info@satqoe.com</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>