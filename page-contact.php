<?php
/**
 * The template for displaying the Contact page
 * 
 * This template will be automatically used for any page with the slug "contact"
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main contact-page">
        
        <!-- Contact Page Content -->
        <div class="contact-page-wrapper">
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
                            Contact
                        </li>
                    </ol>
                </nav>

                <!-- Main Content Area -->
                <div class="contact-content-grid">
                    
                    <!-- Left Column - Sticky Heading -->
                    <div class="contact-heading-column">
                        <h1 class="contact-main-heading">Get in Touch</h1>
                    </div>

                    <!-- Right Column - Content -->
                    <div class="contact-text-column">
                        
                        <!-- Introduction Section -->
                        <div class="contact-text-section contact-intro-section">
                            <div class="contact-section-content">
                                <p>We'd love to hear from you. Whether you're ready to schedule a demo, have questions about VIPER's capabilities, or just want to explore what satellite performance intelligence could mean for your organization — we're here to help.</p>
                            </div>
                        </div>

                        <!-- Divider -->
                        <div class="contact-divider"></div>

                        <!-- General Inquiries Section -->
                        <div class="contact-text-section">
                            <div class="contact-section-content">
                                <h3 class="contact-section-label">General Inquiries</h3>
                                <p class="contact-section-description">For partnership opportunities, press requests, or general questions:</p>
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

                        <!-- Divider -->
                        <div class="contact-divider"></div>

                        <!-- Schedule a Demo Section -->
                        <div class="contact-text-section">
                            <div class="contact-section-content">
                                <h3 class="contact-section-label">Schedule a Demo</h3>
                                <p class="contact-section-description">See VIPER in action with a personalized walk-through.</p>
                                
                                <!-- Experience Viper Button (exact copy from footer) -->
                                <div class="contact-cta-wrapper">
                                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="footer-btn-primary">
                                        <span class="footer-btn-text">Experience Viper</span>
                                        <span class="footer-btn-arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M2.5 17.5L17.5 2.5M17.5 2.5H2.5M17.5 2.5V17.5" stroke="white" stroke-width="2" stroke-linecap="square"/>
                                            </svg>
                                        </span>
                                    </a>
                                </div>

                                <p class="contact-or-text">Or email us directly at:</p>
                                <div class="contact-email-wrapper">
                                    <div class="contact-email-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                            <path d="M11.6714 12.7538C11.1739 13.0855 10.5959 13.2609 10 13.2609C9.40414 13.2609 8.82617 13.0855 8.32859 12.7538L0.133164 7.29001C0.0876953 7.2597 0.0433984 7.2281 0 7.1956V16.1486C0 17.1751 0.833008 17.9897 1.84113 17.9897H18.1588C19.1853 17.9897 20 17.1567 20 16.1486V7.19556C19.9565 7.22813 19.9121 7.25981 19.8665 7.29017L11.6714 12.7538Z" fill="#155BFF"/>
                                            <path d="M0.783203 6.31487L8.97863 11.7787C9.28887 11.9855 9.64441 12.0889 9.99996 12.0889C10.3555 12.0889 10.7111 11.9855 11.0214 11.7787L19.2168 6.31487C19.7072 5.98811 20 5.44124 20 4.85101C20 3.83612 19.1743 3.0105 18.1595 3.0105H1.84051C0.825664 3.01054 0 3.83616 0 4.85198C0 5.44124 0.292812 5.98811 0.783203 6.31487Z" fill="#155BFF"/>
                                        </svg>
                                    </div>
                                    <a href="mailto:sales@satqoe.com" class="contact-email-link">sales@satqoe.com</a>
                                </div>
                            </div>
                        </div>

                        <!-- Divider -->
                        <div class="contact-divider"></div>

                        <!-- Support Section -->
                        <div class="contact-text-section">
                            <div class="contact-section-content">
                                <h3 class="contact-section-label">Support</h3>
                                <p class="contact-section-description">Already a customer? Reach out to our support team:</p>
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

                        <!-- Divider -->
                        <div class="contact-divider"></div>

                        <!-- Follow Us Section -->
                        <div class="contact-text-section">
                            <div class="contact-section-content">
                                <h3 class="contact-section-label">Follow Us</h3>
                                
                                <!-- Social Media Icons (from footer) -->
                                <div class="contact-social-wrapper">
                                    <a href="#" class="contact-social-icon" target="_blank" rel="noopener noreferrer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                        <g clip-path="url(#clip0_556_9668)">
                                            <path d="M25.9273 0.000244141H2.06719C0.924219 0.000244141 0 0.902588 0 2.01821V25.9768C0 27.0924 0.924219 28.0002 2.06719 28.0002H25.9273C27.0703 28.0002 28 27.0924 28 25.9823V2.01821C28 0.902588 27.0703 0.000244141 25.9273 0.000244141ZM8.30703 23.8604H4.15078V10.4948H8.30703V23.8604ZM6.22891 8.67368C4.89453 8.67368 3.81719 7.59634 3.81719 6.26743C3.81719 4.93853 4.89453 3.86118 6.22891 3.86118C7.55781 3.86118 8.63516 4.93853 8.63516 6.26743C8.63516 7.59087 7.55781 8.67368 6.22891 8.67368ZM23.8602 23.8604H19.7094V17.3635C19.7094 15.8159 19.682 13.8198 17.5492 13.8198C15.3891 13.8198 15.0609 15.5096 15.0609 17.2542V23.8604H10.9156V10.4948H14.8969V12.3213H14.9516C15.5039 11.2713 16.8602 10.1612 18.8781 10.1612C23.0836 10.1612 23.8602 12.9284 23.8602 16.5268V23.8604Z" fill="#091026"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_556_9668">
                                            <rect width="28" height="28" fill="white" transform="translate(0 0.000244141)"/>
                                            </clipPath>
                                        </defs>
                                        </svg>
                                    </a>    

                                    <a href="#" class="contact-social-icon" target="_blank" rel="noopener noreferrer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                        <g clip-path="url(#clip0_556_9669)">
                                            <path d="M14 0.000244141C6.26808 0.000244141 0 6.26832 0 14.0002C0 20.5657 4.52032 26.075 10.6182 27.5881V18.2786H7.73136V14.0002H10.6182V12.1567C10.6182 7.39168 12.7747 5.18304 17.453 5.18304C18.34 5.18304 19.8705 5.3572 20.4966 5.5308V9.4088C20.1662 9.37408 19.5922 9.35672 18.8793 9.35672C16.5838 9.35672 15.6968 10.2264 15.6968 12.4871V14.0002H20.2698L19.4841 18.2786H15.6968V27.8978C22.629 27.0606 28.0006 21.1582 28.0006 14.0002C28 6.26832 21.7319 0.000244141 14 0.000244141Z" fill="#091026"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_556_9669">
                                            <rect width="28" height="28" fill="white" transform="translate(0 0.000244141)"/>
                                            </clipPath>
                                        </defs>
                                        </svg>
                                    </a>

                                    <a href="#" class="contact-social-icon" target="_blank" rel="noopener noreferrer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                        <path d="M27.7211 8.40034C27.7211 8.40034 27.4477 6.46987 26.6055 5.62222C25.5391 4.50659 24.3469 4.50112 23.8 4.4355C19.8844 4.15112 14.0055 4.15112 14.0055 4.15112H13.9945C13.9945 4.15112 8.11562 4.15112 4.2 4.4355C3.65313 4.50112 2.46094 4.50659 1.39453 5.62222C0.552344 6.46987 0.284375 8.40034 0.284375 8.40034C0.284375 8.40034 0 10.6699 0 12.9339V15.0558C0 17.3199 0.278906 19.5894 0.278906 19.5894C0.278906 19.5894 0.552344 21.5199 1.38906 22.3675C2.45547 23.4832 3.85547 23.4449 4.47891 23.5652C6.72109 23.7785 14 23.8441 14 23.8441C14 23.8441 19.8844 23.8332 23.8 23.5543C24.3469 23.4886 25.5391 23.4832 26.6055 22.3675C27.4477 21.5199 27.7211 19.5894 27.7211 19.5894C27.7211 19.5894 28 17.3253 28 15.0558V12.9339C28 10.6699 27.7211 8.40034 27.7211 8.40034ZM11.107 17.6316V9.76206L18.6703 13.7105L11.107 17.6316Z" fill="#091026"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>