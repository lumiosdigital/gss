<?php
/**
 * The template for displaying the Telecommunications industry page
 * 
 * This template will be automatically used for any page with the slug "telecom"
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main telecom-page">
        
        <!-- Telecom Page Content -->
        <div class="telecom-page-wrapper">
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
                            Industries
                        </li>
                        <li class="breadcrumb-separator">
                            <svg xmlns="http://www.w3.org/2000/svg" width="5" height="9" viewBox="0 0 5 9" fill="none">
                                <path d="M1 1.5L4 4.5L1 7.5" stroke="#091026" stroke-linecap="square"/>
                            </svg>
                        </li>
                        <li class="breadcrumb-item breadcrumb-current" aria-current="page">
                            Telecom
                        </li>
                    </ol>
                </nav>

                <!-- Main Content Area -->
                <div class="telecom-content-grid">
                    
                    <!-- Left Column - Sticky Heading -->
                    <div class="telecom-heading-column">
                        <h1 class="telecom-main-heading">Telecom</h1>
                    </div>

                    <!-- Right Column - Content -->
                    <div class="telecom-text-column">
                        
                        <!-- First Section -->
                        <div class="telecom-text-section top-text-section">
                            <h2 class="telecom-section-title">Satellite Performance Intelligence for Mobile Network Operators</h2>
                            <div class="telecom-section-content">
                                <p>Your network doesn't stop at the ground—now your data doesn't either. As mobile networks expand into satellite-powered services, Viper empowers Mobile Network Operators (MNOs) with independent, real-time insights into performance across the sky. Whether launching Direct-to-Device (D2D), supporting inflight partnerships, or restoring rural coverage, Viper makes satellite quality measurable—and marketable.</p>
                            </div>
                        </div>

                        <!-- Second Section -->
                        <div class="telecom-text-section">
                            <h2 class="telecom-section-title">Validate co-branded inflight partnerships</h2>
                            <div class="telecom-section-content">
                                <p>When MNOs offer free inflight Wi-Fi through airline partnerships, Viper ensures the subscriber experience meets expectations:</p>
                            </div>
                        </div>

                        <!-- Three Feature Blocks -->
                        <div class="telecom-features-grid">
                            <div class="telecom-feature-item">
                                <div class="telecom-feature-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                    <path d="M19.9992 2.79999C10.7354 2.79999 3.19922 10.3362 3.19922 19.6C3.19922 28.8638 10.7354 36.4 19.9992 36.4C29.263 36.4 36.7992 28.8638 36.7992 19.6C36.7992 10.3362 29.263 2.79999 19.9992 2.79999ZM28.514 16.0398L19.414 25.1398C19.141 25.4128 18.7826 25.55 18.4242 25.55C18.0658 25.55 17.7074 25.4128 17.4344 25.1398L12.8844 20.5898C12.337 20.0424 12.337 19.1576 12.8844 18.6102C13.4318 18.0628 14.3166 18.0628 14.864 18.6102L18.4242 22.1704L26.5344 14.0602C27.0818 13.5128 27.9666 13.5128 28.514 14.0602C29.0614 14.6076 29.0614 15.4924 28.514 16.0398Z" fill="#487FFF"/>
                                    </svg>
                                </div>
                                <div class="telecom-feature-content">
                                    <h3 class="telecom-feature-title">Validate login rates, session duration, and throughput</h3>
                                </div>
                            </div>

                            <div class="telecom-feature-item">
                                <div class="telecom-feature-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                    <path d="M38.0777 32.1903L21.9324 5.48752C21.5244 4.81265 20.7918 4.39999 20.0015 4.39999C19.2112 4.39999 18.4786 4.81258 18.0706 5.48752L1.92543 32.1903C1.50553 32.8848 1.4931 33.751 1.89301 34.4571C2.29293 35.1633 3.04309 35.6 3.85628 35.6H36.1468C36.96 35.6 37.7102 35.1632 38.1101 34.4571C38.51 33.7509 38.4976 32.8848 38.0777 32.1903ZM20.0136 13.6368C20.9408 13.6368 21.7254 14.1585 21.7254 15.0831C21.7254 17.9047 21.3926 21.9593 21.3926 24.7808C21.3926 25.5159 20.5842 25.824 20.0136 25.824C19.2529 25.824 18.6109 25.5158 18.6109 24.7808C18.6109 21.9593 18.2781 17.9047 18.2781 15.0831C18.2781 14.1585 19.0388 13.6368 20.0136 13.6368ZM20.0374 31.1116C18.9913 31.1116 18.2066 30.2581 18.2066 29.2859C18.2066 28.2901 18.9912 27.4603 20.0374 27.4603C21.0121 27.4603 21.8443 28.2901 21.8443 29.2859C21.8443 30.2581 21.0121 31.1116 20.0374 31.1116Z" fill="#487FFF"/>
                                    </svg>
                                </div>
                                <div class="telecom-feature-content">
                                    <h3 class="telecom-feature-title">Detect issues in real time with alerting tools</h3>
                                </div>
                            </div>

                            <div class="telecom-feature-item">
                                <div class="telecom-feature-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.069 22.362C8.84068 23.1641 6.66374 23.6598 4.50946 23.9049C4.48554 23.813 4.4624 23.7208 4.44021 23.6284L1.54688 22.5148V17.7895L4.44021 16.676C4.81135 15.1294 5.42044 13.659 6.25323 12.3075L4.99221 9.47128L8.33276 6.13073L11.1689 7.39175C12.5204 6.55905 13.9908 5.94987 15.5327 5.58352L16.651 2.68548H21.3763L22.4899 5.58352C24.0317 5.94987 25.5021 6.55905 26.8535 7.39175L27.4751 7.11544C27.4981 7.13261 27.5216 7.14932 27.5457 7.1654L29.0556 8.17693C27.7783 10.0447 26.1081 11.9842 24.2624 13.7939C22.836 12.6155 21.0062 11.9078 19.0113 11.9078C14.4571 11.9078 10.7692 15.5958 10.7692 20.1498C10.7692 20.9161 10.8736 21.658 11.069 22.362ZM27.1779 21.3033C29.5241 19.6807 31.595 17.8347 33.3592 15.8425C33.4415 16.1176 33.5159 16.3955 33.5823 16.676L36.4756 17.7895V22.5148L33.5823 23.6284C33.2159 25.1702 32.602 26.6406 31.774 27.9921L33.0303 30.8282L29.6897 34.1688L26.8535 32.9125C25.5068 33.7453 24.0317 34.3544 22.4899 34.7208L21.3763 37.6141H16.651L15.5374 34.7208C13.9908 34.3544 12.5204 33.7405 11.1689 32.9125L8.33276 34.1688L4.99221 30.8282L6.25323 27.9921C6.1504 27.8258 6.05095 27.6576 5.95503 27.4875C8.62593 27.6697 11.4276 27.4758 14.2583 26.8885C15.6011 27.8384 17.2408 28.3965 19.0113 28.3965C23.1739 28.3965 26.6168 25.3114 27.1779 21.3033ZM35.4471 10.9538C32.7757 15.2683 28.7346 19.1883 23.6032 22.0522C16.6192 25.9467 9.03338 27.0978 2.62813 25.7726C2.51393 25.7462 2.43691 25.6392 2.44813 25.5225C2.45927 25.4058 2.55519 25.3154 2.67237 25.3111C7.23966 25.093 11.8713 23.8584 16.8193 21.0986C21.8917 18.2688 27.7997 12.6777 30.7816 7.82273L28.2441 6.12289C28.1214 6.04061 28.0553 5.89622 28.0732 5.74956C28.091 5.60281 28.1899 5.47865 28.3289 5.4283L36.6295 2.42336C36.8108 2.35771 37.0122 2.37905 37.1757 2.48124C37.3392 2.58344 37.4466 2.75512 37.467 2.94689L38.452 12.1938C38.4681 12.3452 38.395 12.4924 38.2646 12.5711C38.1343 12.6498 37.97 12.6459 37.8436 12.561L35.4471 10.9538Z" fill="#487FFF"/>
                                    </svg>
                                </div>
                                <div class="telecom-feature-content">
                                    <h3 class="telecom-feature-title">Optimize ROI by airline, aircraft, or provider</h3>
                                </div>
                            </div>
                        </div>

                        <!-- Inflight Partnership Image Section -->
                        <div class="telecom-inflight-section">
                            <div class="telecom-inflight-image">
                                <!-- This should be uploaded as PNG -->
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/telecom-inflight-partnership.png" 
                                     alt="Inflight Partnership Dashboard" 
                                     class="telecom-inflight-background"
                                     loading="lazy" />
                            </div>
                        </div>

                        <!-- D2D Performance Section -->
                        <div class="telecom-d2d-section">
                            <h2 class="telecom-section-title">Optimize Direct-to-Device (D2D) performance</h2>
                            
                            <div class="telecom-d2d-content">
                                <div class="telecom-d2d-text">
                                    <h3 class="telecom-d2d-subtitle">As $10/month satellite D2D services roll out, Viper helps:</h3>
                                    
                                    <div class="telecom-d2d-list">
                                        <div class="telecom-d2d-item">
                                            <div class="telecom-check-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="11" viewBox="0 0 13 11" fill="none">
                                                <path d="M0.998107 5.50012L11.1974 5.49993M11.1974 5.49993L7.49129 1.79383M11.1974 5.49993L7.4913 9.20603" stroke="#155BFF" stroke-width="2" stroke-linecap="square"/>
                                                </svg>
                                            </div>
                                            <span>Benchmark coverage and QoE by device and geography</span>
                                        </div>
                                        
                                        <div class="telecom-d2d-item">
                                            <div class="telecom-check-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="11" viewBox="0 0 13 11" fill="none">
                                                <path d="M0.998107 5.50012L11.1974 5.49993M11.1974 5.49993L7.49129 1.79383M11.1974 5.49993L7.4913 9.20603" stroke="#155BFF" stroke-width="2" stroke-linecap="square"/>
                                                </svg>
                                            </div>
                                            <span>Performance data across devices and geographies</span>
                                        </div>
                                        
                                        <div class="telecom-d2d-item">
                                            <div class="telecom-check-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="11" viewBox="0 0 13 11" fill="none">
                                                <path d="M0.998107 5.50012L11.1974 5.49993M11.1974 5.49993L7.49129 1.79383M11.1974 5.49993L7.4913 9.20603" stroke="#155BFF" stroke-width="2" stroke-linecap="square"/>
                                                </svg>
                                            </div>
                                            <span>Optimized rollout from pilot to scale</span>
                                        </div>
                                    </div>
                                    
                                    <div class="telecom-d2d-impact">
                                        <strong>Impact:</strong><br>
                                        Reduce churn. Increase ARPU. Deliver measurable D2D quality.
                                    </div>
                                </div>
                                
                                <div class="telecom-d2d-image">
                                    <!-- This should be uploaded as PNG -->
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/telecom-d2d-phone.png" 
                                         alt="D2D Performance Mobile Interface" 
                                         class="telecom-d2d-phone"
                                         loading="lazy" />
                                </div>
                            </div>
                        </div>

                        <!-- Backhaul & IoT Connectivity Section -->
                        <div class="telecom-backhaul-section">
                            <h2 class="telecom-section-title">Assure backhaul & IoT connectivity</h2>
                            <div class="telecom-section-content">
                                <p>Satellite links power emergency cell sites and IoT devices in remote areas. Viper delivers:</p>
                            </div>
                            
                            <div class="telecom-backhaul-features">
                                <div class="telecom-backhaul-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                                        <path d="M0.998107 6.09979L11.1974 6.0996M11.1974 6.0996L7.49129 2.3935M11.1974 6.0996L7.4913 9.8057" stroke="#155BFF" stroke-width="2" stroke-linecap="square"/>
                                        </svg>
                                    <span>Audit satellite links with real performance logs</span>
                                </div>
                                
                                <div class="telecom-backhaul-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                                        <path d="M0.998107 6.09979L11.1974 6.0996M11.1974 6.0996L7.49129 2.3935M11.1974 6.0996L7.4913 9.8057" stroke="#155BFF" stroke-width="2" stroke-linecap="square"/>
                                        </svg>
                                    <span>Validate latency, jitter, and throughput</span>
                                </div>
                                
                                <div class="telecom-backhaul-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                                        <path d="M0.998107 6.09979L11.1974 6.0996M11.1974 6.0996L7.49129 2.3935M11.1974 6.0996L7.4913 9.8057" stroke="#155BFF" stroke-width="2" stroke-linecap="square"/>
                                        </svg>
                                    <span>Prove uptime to internal stakeholders or regulators</span>
                                </div>
                            </div>
                            
                            <p class="telecom-why-matters">
                                <strong>Why it matters:</strong> Proactive insights prevent outages and protect infrastructure investments.
                            </p>
                        </div>

                        <!-- Pricing Table Section -->
                        <div class="telecom-pricing-section">
                            <h2 class="telecom-section-title">Choose a model that fits your business<br>Viper supports:</h2>
                            
                            <div class="telecom-pricing-table">
                                <div class="telecom-table-header">
                                    <div class="telecom-table-cell">Plan Type</div>
                                    <div class="telecom-table-cell">Description</div>
                                </div>
                                
                                <div class="telecom-table-row">
                                    <div class="telecom-table-cell">Flat-Rate</div>
                                    <div class="telecom-table-cell">Fixed costs per region or use case</div>
                                </div>
                                
                                <div class="telecom-table-row">
                                    <div class="telecom-table-cell">Tiered</div>
                                    <div class="telecom-table-cell">Based on device/user volume</div>
                                </div>
                                
                                <div class="telecom-table-row">
                                    <div class="telecom-table-cell">API-based</div>
                                    <div class="telecom-table-cell">Pay per test, easy integration</div>
                                </div>
                                
                                <div class="telecom-table-row">
                                    <div class="telecom-table-cell">Audit-as-a-Service</div>
                                    <div class="telecom-table-cell">Independent SLA verification</div>
                                </div>
                            </div>
                            
                            <p class="telecom-why-matters">
                                <strong>Why it matters:</strong> Stay flexible, scale smart—and always know what you're paying for.
                            </p>
                        </div>

                        <!-- Platform Benefits Section -->
                        <div class="telecom-platform-section">
                            <h2 class="telecom-section-title">One Platform. Every Link. Total Visibility.</h2>
                            
                            <div class="telecom-platform-features">
                                <div class="telecom-platform-item">
                                    <div class="telecom-green-check-large">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="27" viewBox="0 0 28 27" fill="none">
                                        <path d="M14.0005 0.170044C6.82102 0.170044 0.980469 6.0106 0.980469 13.19C0.980469 20.3695 6.82102 26.21 14.0005 26.21C21.1799 26.21 27.0205 20.3695 27.0205 13.19C27.0205 6.0106 21.1799 0.170044 14.0005 0.170044ZM20.5994 10.4309L13.5469 17.4834C13.3354 17.695 13.0576 17.8013 12.7798 17.8013C12.5021 17.8013 12.2243 17.695 12.0127 17.4834L8.4865 13.9571C8.06226 13.5329 8.06226 12.8472 8.4865 12.4229C8.91073 11.9987 9.59645 11.9987 10.0207 12.4229L12.7798 15.1821L19.0652 8.8967C19.4895 8.47246 20.1752 8.47246 20.5994 8.8967C21.0237 9.32093 21.0237 10.0067 20.5994 10.4309Z" fill="#5DDB87"/>
                                        </svg>
                                    </div>
                                    <span>Built on Seamless Air Alliance standards</span>
                                </div>
                                
                                <div class="telecom-platform-item">
                                    <div class="telecom-green-check-large">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="27" viewBox="0 0 28 27" fill="none">
                                        <path d="M14.0005 0.170044C6.82102 0.170044 0.980469 6.0106 0.980469 13.19C0.980469 20.3695 6.82102 26.21 14.0005 26.21C21.1799 26.21 27.0205 20.3695 27.0205 13.19C27.0205 6.0106 21.1799 0.170044 14.0005 0.170044ZM20.5994 10.4309L13.5469 17.4834C13.3354 17.695 13.0576 17.8013 12.7798 17.8013C12.5021 17.8013 12.2243 17.695 12.0127 17.4834L8.4865 13.9571C8.06226 13.5329 8.06226 12.8472 8.4865 12.4229C8.91073 11.9987 9.59645 11.9987 10.0207 12.4229L12.7798 15.1821L19.0652 8.8967C19.4895 8.47246 20.1752 8.47246 20.5994 8.8967C21.0237 9.32093 21.0237 10.0067 20.5994 10.4309Z" fill="#5DDB87"/>
                                        </svg>
                                    </div>
                                    <span>No onboard hardware required</span>
                                </div>
                                
                                <div class="telecom-platform-item">
                                    <div class="telecom-green-check-large">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="27" viewBox="0 0 28 27" fill="none">
                                        <path d="M14.0005 0.170044C6.82102 0.170044 0.980469 6.0106 0.980469 13.19C0.980469 20.3695 6.82102 26.21 14.0005 26.21C21.1799 26.21 27.0205 20.3695 27.0205 13.19C27.0205 6.0106 21.1799 0.170044 14.0005 0.170044ZM20.5994 10.4309L13.5469 17.4834C13.3354 17.695 13.0576 17.8013 12.7798 17.8013C12.5021 17.8013 12.2243 17.695 12.0127 17.4834L8.4865 13.9571C8.06226 13.5329 8.06226 12.8472 8.4865 12.4229C8.91073 11.9987 9.59645 11.9987 10.0207 12.4229L12.7798 15.1821L19.0652 8.8967C19.4895 8.47246 20.1752 8.47246 20.5994 8.8967C21.0237 9.32093 21.0237 10.0067 20.5994 10.4309Z" fill="#5DDB87"/>
                                        </svg>
                                    </div>
                                    <span>Unlimited testing & dashboards</span>
                                </div>
                                
                                <div class="telecom-platform-item">
                                    <div class="telecom-green-check-large">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="27" viewBox="0 0 28 27" fill="none">
                                        <path d="M14.0005 0.170044C6.82102 0.170044 0.980469 6.0106 0.980469 13.19C0.980469 20.3695 6.82102 26.21 14.0005 26.21C21.1799 26.21 27.0205 20.3695 27.0205 13.19C27.0205 6.0106 21.1799 0.170044 14.0005 0.170044ZM20.5994 10.4309L13.5469 17.4834C13.3354 17.695 13.0576 17.8013 12.7798 17.8013C12.5021 17.8013 12.2243 17.695 12.0127 17.4834L8.4865 13.9571C8.06226 13.5329 8.06226 12.8472 8.4865 12.4229C8.91073 11.9987 9.59645 11.9987 10.0207 12.4229L12.7798 15.1821L19.0652 8.8967C19.4895 8.47246 20.1752 8.47246 20.5994 8.8967C21.0237 9.32093 21.0237 10.0067 20.5994 10.4309Z" fill="#5DDB87"/>
                                        </svg>
                                    </div>
                                    <span>Trusted by airlines, ready for telecom</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Blue CTA Section with Image -->
        <div class="telecom-cta-wrapper">         
            <div class="telecom-cta-section">

                <!-- World Background Image will be added as background -->
                <div class="telecom-cta-background">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/telecom-background.png" 
                        alt="Telecom CTA Background" 
                        class="telecom-cta-background-image" 
                        loading="lazy" />
                </div>  
                <div class="telecom-cta-container">
                    <div class="telecom-cta-content">
                        
                        <!-- Main CTA Button (copied from experience viper) -->
                        <div class="telecom-cta-actions">
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="telecom-btn-primary">
                                <span class="telecom-btn-text">Ready To Experience Viper?</span>
                                <span class="telecom-btn-arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M2.5 17.5L17.5 2.5M17.5 2.5H2.5M17.5 2.5V17.5" stroke="#091026" stroke-width="2" stroke-linecap="square"/>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>