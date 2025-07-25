<?php
/**
 * Template part for displaying the Inflight Connectivity infographic section
 *
 * @package Global_Satellite_Solutions
 */
?>

<section class="inflight-connectivity-section" id="inflight-connectivity">
    <div class="inflight-connectivity-container">
        <div class="inflight-connectivity-content" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/inflight-connectivity-background.png');">
            
            <!-- Header -->
            <div class="inflight-connectivity-header">
                <h1 class="inflight-connectivity-title">QoS vs. QoE:</h1>
                <h1 class="inflight-connectivity-title">Why Both Matter in Inflight Connectivity</h1>
                <p class="inflight-connectivity-subtitle">Quality of Service (QoS) and Quality of Experience (QoE) are two critical -but distinct- measures that determine the success of inflight connectivity (IFC).</p>
            </div>

            <!-- Main Content Grid -->
            <div class="inflight-connectivity-main-grid">
                
                <!-- QoS Section -->
                <div class="inflight-connectivity-card qos-card">
                    <h2 class="card-title">Quality of Service (QoS)</h2>
                    <p class="card-description">
                        QoS refers to the technical performance of the network itself.
                        It measures how data flows from the aircraft to onboard systems to the
                        internet—tracking factors like:
                    </p>
                    
                    <ul class="feature-list">
                        <li>
                            <span class="feature-arrow">→</span>
                            <span class="feature-text">Latency and jitter</span>
                        </li>
                        <li>
                            <span class="feature-arrow">→</span>
                            <span class="feature-text">Packet loss</span>
                        </li>
                        <li>
                            <span class="feature-arrow">→</span>
                            <span class="feature-text">Bandwidth throughput</span>
                        </li>
                        <li>
                            <span class="feature-arrow">→</span>
                            <span class="feature-text">Connection reliability</span>
                        </li>
                    </ul>
                    
                    <p class="card-footer">
                        Think of QoS as the airline's view of the pipe: is the network operating
                        within expected technical parameters?
                    </p>
                </div>

                <!-- QoE Section -->
                <div class="inflight-connectivity-card qoe-card">
                    <h2 class="card-title">Quality of Experience (QoE)</h2>
                    <p class="card-description">
                        QoE, on the other hand, reflects the passenger's real-world experience.
                        It measures how well the IFC supports typical use cases like browsing,
                        streaming, messaging, and video conferencing. QoE captures:
                    </p>
                    
                    <ul class="feature-list">
                        <li>
                            <span class="feature-arrow">→</span>
                            <span class="feature-text">Application responsiveness</span>
                        </li>
                        <li>
                            <span class="feature-arrow">→</span>
                            <span class="feature-text">Page load times</span>
                        </li>
                        <li>
                            <span class="feature-arrow">→</span>
                            <span class="feature-text">Video buffering</span>
                        </li>
                        <li>
                            <span class="feature-arrow">→</span>
                            <span class="feature-text">Satisfaction across devices and apps</span>
                        </li>
                    </ul>
                    
                    <p class="card-footer">
                        QoE answers the ultimate question: Is the connectivity meeting
                        passenger expectations?
                    </p>
                </div>
            </div>

            <!-- Why It Matters Section -->
            <div class="inflight-connectivity-matters-section">
                <div class="matters-card">
                    <h2 class="matters-title">Why It Matters</h2>
                    
                    <p class="matters-intro">
                        Airlines often find themselves stuck—providers say the network is "meeting the SLA" (based on QoS),
                        while passengers report a poor experience (QoE). VIPER bridges this gap.
                    </p>

                    <div class="matters-content-grid">
                        <!-- Left Content -->
                        <div class="matters-text">
                            <p class="matters-description">
                                By combining network performance metrics (QoS) with passenger-
                                centric performance data (QoE), VIPER delivers a complete,
                                transparent view of IFC quality. This empowers airlines to:
                            </p>
                            
                            <ul class="benefits-list">
                                <li>
                                    <span class="feature-arrow">→</span>
                                    <span class="feature-text">Hold providers accountable</span>
                                </li>
                                <li>
                                    <span class="feature-arrow">→</span>
                                    <span class="feature-text">Identify and resolve root causes faster</span>
                                </li>
                                <li>
                                    <span class="feature-arrow">→</span>
                                    <span class="feature-text">Optimize digital passenger experience</span>
                                </li>
                                <li>
                                    <span class="feature-arrow">→</span>
                                    <span class="feature-text">Strengthen contract negotiations and SLA enforcement</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Charts Section -->
                        <div class="charts-container">
                            <div class="chart-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/video-buffering.svg" 
                                     alt="Video buffering performance chart" 
                                     class="chart-image">
                            </div>

                            <div class="chart-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page-load-times.svg" 
                                     alt="Page load times chart" 
                                     class="chart-image">
                            </div>

                            <div class="chart-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/application-responsiveness.svg" 
                                     alt="Application responsiveness chart" 
                                     class="chart-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>