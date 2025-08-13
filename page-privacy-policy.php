<?php
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <div class="legal-page-wrapper">
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
                            Privacy Policy
                        </li>
                    </ol>
                </nav>

                <div class="legal-content-grid">
                    
                    <div class="legal-heading-column">
                        <h1 class="legal-main-heading">Privacy Policy</h1>
                        <p class="legal-effective-date">Effective Date: August 1, 2025</p>
                    </div>

                    <div class="legal-text-column">
                        <div class="legal-text-content">
                            <?php
                            if (have_posts()) {
                                while (have_posts()) {
                                    the_post();
                                    $content = get_the_content();
                                    
                                    if (!empty(trim(strip_tags($content)))) {
                                        the_content();
                                    } else {
                                        ?>
                                        <p><span class="GSS-branding">Global Satellite Solutions ("GSS," "we," "us," or "our")</span> respects your privacy. This Privacy Policy explains how we collect, use, disclose, and protect personal information in connection with our website, platform, products, and services (collectively, the "Services").</p>

                                        <p>By using our Services, you agree to the collection and use of information in accordance with this Privacy Policy.</p>

                                        <h2>1. Information We Collect</h2>

                                        <h3>a. Technical and Usage Data</h3>
                                        <p>We collect information generated during use of our Services, including:</p>
                                        <ul>
                                            <li>Device type, operating system, and browser</li>
                                            <li>Test data (latency, throughput, packet loss, DNS resolution, etc.)</li>
                                            <li>Metadata (flight number, aircraft ID, SATCOM provider, timestamp, geolocation)</li>
                                            <li>IP address and network identifiers</li>
                                            <li>Aggregated diagnostic and analytics information</li>
                                        </ul>

                                        <h3>b. Account and Contact Information</h3>
                                        <p>If you register or communicate with us, we may collect:</p>
                                        <ul>
                                            <li>Name, email, phone number</li>
                                            <li>Company name and role</li>
                                            <li>Login credentials</li>
                                            <li>Customer support communications</li>
                                        </ul>

                                        <h3>c. Cookies and Analytics</h3>
                                        <p>We use cookies and third-party analytics (e.g., Google Analytics) to enhance user experience and understand website traffic patterns.</p>

                                        <h2>2. How We Use Information</h2>
                                        <p>We use collected data for the following purposes:</p>
                                        <ul>
                                            <li>To provide, operate, and maintain our Services</li>
                                            <li>To run standardized performance tests and generate reports</li>
                                            <li>To support service level agreement (SLA) verification</li>
                                            <li>To enhance and improve our platform and offerings</li>
                                            <li>To communicate with customers and respond to inquiries</li>
                                            <li>To fulfill contractual obligations</li>
                                        </ul>

                                        <h2>3. Data Sharing and Disclosure</h2>
                                        <p>We do <strong>not</strong> sell your personal information. We may share data in the following limited circumstances:</p>
                                        <ul>
                                            <li><strong>With service providers</strong> who help operate our infrastructure (e.g., AWS)</li>
                                            <li><strong>With your consent</strong>, such as when sharing reports with third parties</li>
                                            <li><strong>To comply with legal obligations</strong>, subpoenas, or enforceable government requests</li>
                                            <li><strong>To protect GSS's legal rights</strong>, safety, or property, or that of users or third parties</li>
                                        </ul>
                                        <p><strong>Aggregated and anonymized data</strong> may be shared for benchmarking, research, or product development purposes.</p>

                                        <h2>4. Data Retention</h2>
                                        <p>We retain test data and user information for as long as necessary to provide our Services, fulfill legal obligations, and improve performance analysis. You may request deletion of your data as described below.</p>

                                        <h2>5. Data Security</h2>
                                        <p>We take reasonable administrative, technical, and physical measures to protect your information. All test and analytics data is securely stored in our AWS-hosted cloud infrastructure with access controls and encryption where applicable.</p>

                                        <h2>6. Your Rights</h2>
                                        <p>You have the right to:</p>
                                        <ul>
                                            <li>Access and review your personal information</li>
                                            <li>Request correction or deletion of your data</li>
                                            <li>Opt out of certain data uses or marketing communications</li>
                                            <li>Request a copy of the data we maintain about you (subject to verification)</li>
                                        </ul>
                                        <p>To exercise these rights, contact us at <a href="mailto:info@satqoe.com"><strong>info@satqoe.com</strong></a>.</p>

                                        <h2>7. International Data Transfers</h2>
                                        <p>Our Services are primarily hosted in the United States. If you access the Services from outside the U.S., you consent to the transfer, storage, and processing of your information in the U.S. or other jurisdictions as required.</p>

                                        <h2>8. Children's Privacy</h2>
                                        <p>Our Services are not intended for children under 13 (or applicable age of consent). We do not knowingly collect personal information from children.</p>

                                        <h2>9. Changes to This Privacy Policy</h2>
                                        <p>We may update this Privacy Policy from time to time. Material changes will be posted on this page with a revised "Effective Date." Continued use of the Services after changes constitutes acceptance.</p>

                                        <h2>10. Contact Us</h2>
                                        <p>If you have any questions or concerns about this Privacy Policy or our data practices, please contact:</p>

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
        
    </main>
</div>

<?php get_footer(); ?>