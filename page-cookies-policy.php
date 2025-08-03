<?php
/**
 * The template for displaying the Cookies Policy page
 * 
 * This template will be automatically used for any page with the slug "cookies-policy"
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <!-- Cookies Policy Page Content -->
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
                            Cookies Policy
                        </li>
                    </ol>
                </nav>

                <!-- Main Content Area -->
                <div class="legal-content-grid">
                    
                    <!-- Left Column - Heading -->
                    <div class="legal-heading-column">
                        <h1 class="legal-main-heading">Cookies Policy</h1>
                        <p class="legal-effective-date">Effective Date: August 1, 2025</p>
                    </div>

                    <!-- Right Column - Content -->
                    <div class="legal-text-column">
                        <div class="legal-text-content">
                            <?php if (have_posts()) : ?>
                                <?php while (have_posts()) : the_post(); ?>
                                    <?php if (get_the_content()) : ?>
                                        <!-- Use page content if available -->
                                        <?php the_content(); ?>
                                    <?php else : ?>
                                        <!-- Default content if no page content is set -->
                                        <p><span class="GSS-branding">Global Satellite Solutions ("GSS," "we," "us," or "our")</span> uses cookies and similar tracking technologies to enhance your browsing experience, analyze site usage, and support our performance monitoring services.</p>
                                        <br>
                                        <p>By continuing to browse or use our Services, you agree to our use of cookies as described in this policy.</p>

                                        <h2>1. What Are Cookies?</h2>
                                        <p>Cookies are small text files stored on your device (computer, tablet, or mobile) when you visit a website. They help us recognize your device, store preferences, and improve your user experience.</p>

                                        <h2>2. Types of Cookies We Use</h2>
                                        <p>We use the following types of cookies on our website and platform:</p>

                                        <h3>a. Strictly Necessary Cookies</h3>
                                        <p>These cookies are essential for the site to function properly. They enable core functionality such as security, page navigation, and access to protected areas.</p>

                                        <h3>b. Performance and Analytics Cookies</h3>
                                        <p>These cookies help us understand how visitors interact with our site, which pages are most visited, and how the site is performing. We use tools like Google Analytics to collect anonymized usage data.</p>

                                        <h3>c. Functional Cookies</h3>
                                        <p>These cookies allow us to remember your preferences and settings to improve usability (e.g., language selection, session retention).</p>

                                        <h3>d. Targeting and Advertising Cookies</h3>
                                        <p>We may use cookies from third parties (e.g., LinkedIn, Google Ads) to track the effectiveness of our marketing campaigns and deliver relevant advertisements on other websites.</p>

                                        <h2>3. Third-Party Cookies</h2>
                                        <p>Some cookies may be set by third-party services integrated into our site. These may include analytics platforms, embedded videos, or social media features. We do not control the use of these cookies and recommend reviewing their respective privacy and cookie policies.</p>

                                        <h2>4. How to Manage Cookies</h2>
                                        <p>Most web browsers allow you to control cookies through their settings. You can:</p>
                                        <ul>
                                            <li>Delete cookies from your device</li>
                                            <li>Block all cookies</li>
                                            <li>Allow cookies only from specific sites</li>
                                            <li>Be notified before a cookie is placed</li>
                                        </ul>
                                        <p>Note that disabling cookies may impact the functionality of certain areas of our website or Services.</p>

                                        <h3>Browser-specific guidance:</h3>
                                        <ul>
                                            <li><strong>Chrome:</strong> <a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener noreferrer">https://support.google.com/chrome/answer/95647</a></li>
                                            <li><strong>Firefox:</strong> <a href="https://support.mozilla.org/en-US/kb/enable-and-disable-cookies" target="_blank" rel="noopener noreferrer">https://support.mozilla.org/en-US/kb/enable-and-disable-cookies</a></li>
                                            <li><strong>Safari:</strong> <a href="https://support.apple.com/en-us/HT201265" target="_blank" rel="noopener noreferrer">https://support.apple.com/en-us/HT201265</a></li>
                                            <li><strong>Edge:</strong> <a href="https://support.microsoft.com/en-us/help/17442" target="_blank" rel="noopener noreferrer">https://support.microsoft.com/en-us/help/17442</a></li>
                                        </ul>

                                        <h2>5. Updates to This Policy</h2>
                                        <p>We may update this Cookies Policy periodically to reflect changes in technology, regulation, or our Services. Any updates will be posted on this page with the new effective date.</p>

                                        <h2>6. Contact Us</h2>
                                        <p>If you have any questions about our use of cookies, please contact us at:</p>
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
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <!-- Fallback content (same as above) -->
                                <p>Global Satellite Solutions ("GSS," "we," "us," or "our") uses cookies and similar tracking technologies to enhance your browsing experience, analyze site usage, and support our performance monitoring services.</p>
                                <!-- Rest of fallback content would go here -->
                            <?php endif; ?>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>