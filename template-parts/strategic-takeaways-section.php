<?php
/**
 * Template part for displaying Strategic Takeaways for Airlines section
 */
?>

<section class="strategic-takeaways-section">
    <div class="strategic-takeaways-container">
        <h2 class="strategic-takeaways-title">
            Strategic Takeaways<br>
            for Airlines
        </h2>

        <div class="strategic-takeaways-grid">
            <!-- Left Column -->
            <div class="strategic-takeaways-column left">
                <div class="strategic-takeaway-item">
                    <div class="connector-line left"></div>
                    <div class="strategic-takeaway-title-wrapper left">
                        <span class="dot"></span>
                        <h3 class="strategic-takeaway-title">Operational Confidence</h3>
                    </div>
                    <p class="strategic-takeaway-description">
                        Identify aircraft-specific or provider-linked performance issues before they impact service, using visual dashboards to isolate trends quickly.
                    </p>
                </div>

                <div class="strategic-takeaway-item">
                    <div class="connector-line left"></div>
                    <div class="strategic-takeaway-title-wrapper left">
                        <span class="dot"></span>
                        <h3 class="strategic-takeaway-title">Engineering Efficiency</h3>
                    </div>
                    <p class="strategic-takeaway-description">
                        Reduce downtime and troubleshooting through preemptive maintenance insights powered by tail-level trends and anomaly detection.
                    </p>
                </div>

                <div class="strategic-takeaway-item">
                    <div class="connector-line left"></div>
                    <div class="strategic-takeaway-title-wrapper left">
                        <span class="dot"></span>
                        <h3 class="strategic-takeaway-title">Performance Transparency</h3>
                    </div>
                    <p class="strategic-takeaway-description">
                        Enable executives and frontline staff to make informed decisions with fleet-wide dashboards, route-level heatmaps, and alerting tools.
                    </p>
                </div>
            </div>

            <!-- Center Vertical Timeline -->
            <div class="timeline-center-line">
                <div class="timeline-node" style="top: 0%;"></div>
                <div class="timeline-node" style="top: 33.3%;"></div>
                <div class="timeline-node" style="top: 66.6%;"></div>
            </div>

            <!-- Right Column -->
            <div class="strategic-takeaways-column right">
                <div class="strategic-takeaway-item">
                    <div class="connector-line right"></div>
                    <div class="strategic-takeaway-title-wrapper right">
                        <span class="dot"></span>
                        <h3 class="strategic-takeaway-title">SLA Enforcement</h3>
                    </div>
                    <p class="strategic-takeaway-description">
                        Use tail-specific, route-linked data to benchmark and negotiate with connectivity vendors — supported by real-time evidence from high-traffic routes.
                    </p>
                </div>

                <div class="strategic-takeaway-item">
                    <div class="connector-line right"></div>
                    <div class="strategic-takeaway-title-wrapper right">
                        <span class="dot"></span>
                        <h3 class="strategic-takeaway-title">Customer Experience</h3>
                    </div>
                    <p class="strategic-takeaway-description">
                        Support brand promise with verifiable QoE improvements and faster complaint resolution — reducing service credits and increasing retention.
                    </p>
                </div>

                <div class="strategic-takeaway-item">
                    <div class="connector-line right"></div>
                    <div class="strategic-takeaway-title-wrapper right">
                        <span class="dot"></span>
                        <h3 class="strategic-takeaway-title">Vendor Strategy Alignment</h3>
                    </div>
                    <p class="strategic-takeaway-description">
                        Build a baseline of performance to guide RFPs, transitions, and future upgrades with trusted, independent data.
                    </p>
                </div>
            </div>
        </div>

        <!-- Bottom Description -->
        <div class="strategic-bottom-description">
            <p>
                Viper delivers enterprise-level visibility without onboard hardware.<br>
                For Airlines, it enables every aircraft, flight, and connectivity session<br>
                to contribute to measurable value.
            </p>
        </div>

        <!-- Airplane Image -->
        <div class="strategic-airplane-section">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/viper-plane.png'); ?>" alt="Viper Aircraft" class="strategic-airplane-image">
        </div>
    </div>
</section>
