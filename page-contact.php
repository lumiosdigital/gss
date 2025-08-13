<?php

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main contact-page">
        
        <div class="contact-page-wrapper">
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
                            Contact
                        </li>
                    </ol>
                </nav>

                <div class="contact-content-grid">
                    
                    <div class="contact-heading-column">
                        <h1 class="contact-main-heading">Get in Touch</h1>
                    </div>

                    <div class="contact-text-column">

                        <div class="contact-text-section contact-intro-section">
                            <div class="contact-section-content">
                                <p>We'd love to hear from you. Whether you're ready to schedule a demo, have questions about Viper's capabilities, or just want to explore what satellite performance intelligence could mean for your organization — we're here to help.</p>
                            </div>
                        </div>

                        <div class="contact-divider"></div>

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

                        <div class="contact-divider"></div>

                        <div class="contact-text-section">
                            <div class="contact-section-content">
                                <h3 class="contact-section-label">Schedule a Demo</h3>
                                <p class="contact-section-description">See Viper in action with a personalized walk-through.</p>

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

                        <div class="contact-divider"></div>

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

                        <div class="contact-divider"></div>

                        <div class="contact-text-section">
                            <div class="contact-section-content">
                                <h3 class="contact-section-label">Follow Us</h3>

                                <div class="contact-social-wrapper">
                                    <a href="https://www.linkedin.com/company/global-satellite-solutions-inc/" class="contact-social-icon" target="_blank" rel="noopener noreferrer">
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
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        
    </main>
</div>

<?php get_footer(); ?>