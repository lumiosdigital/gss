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
            <!-- Central Timeline SVG with All Connectors -->
            <div class="strategic-timeline-svg">
                <svg width="312" height="720" viewBox="0 0 312 720" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M156 31L156 709" stroke="#E0EAF8" stroke-width="1.5" stroke-dasharray="4 4"/>
                    <line x1="7" y1="15.5" x2="156" y2="15.5" stroke="#E0EAF8"/>
                    <circle cx="156" cy="15" r="15" transform="rotate(-90 156 15)" fill="#2866F7" fill-opacity="0.18"/>
                    <circle cx="156" cy="15" r="6" transform="rotate(-90 156 15)" fill="#2866F7"/>
                    <circle cx="4" cy="15" r="4" transform="rotate(-90 4 15)" fill="#2866F7"/>
                    <line x1="7" y1="289.5" x2="156" y2="289.5" stroke="#E0EAF8"/>
                    <circle cx="156" cy="289" r="15" transform="rotate(-90 156 289)" fill="#2866F7" fill-opacity="0.18"/>
                    <circle cx="156" cy="289" r="6" transform="rotate(-90 156 289)" fill="#2866F7"/>
                    <circle cx="4" cy="289" r="4" transform="rotate(-90 4 289)" fill="#2866F7"/>
                    <line x1="305" y1="704.5" x2="156" y2="704.5" stroke="#E0EAF8"/>
                    <circle cx="156" cy="705" r="15" transform="rotate(90 156 705)" fill="#2866F7" fill-opacity="0.18"/>
                    <circle cx="156" cy="705" r="6" transform="rotate(90 156 705)" fill="#2866F7"/>
                    <circle cx="308" cy="705" r="4" transform="rotate(90 308 705)" fill="#2866F7"/>
                    <line x1="305" y1="151.499" x2="156" y2="151.499" stroke="#E0EAF8"/>
                    <circle cx="156" cy="152" r="12" transform="rotate(90 156 152)" fill="#2866F7" fill-opacity="0.18"/>
                    <circle cx="156" cy="152" r="4" transform="rotate(90 156 152)" fill="#2866F7"/>
                    <circle cx="308" cy="152" r="4" transform="rotate(90 308 152)" fill="#2866F7"/>
                    <line x1="305" y1="425.499" x2="156" y2="425.499" stroke="#E0EAF8"/>
                    <circle cx="156" cy="426" r="12" transform="rotate(90 156 426)" fill="#2866F7" fill-opacity="0.18"/>
                    <circle cx="156" cy="426" r="4" transform="rotate(90 156 426)" fill="#2866F7"/>
                    <circle cx="308" cy="426" r="4" transform="rotate(90 308 426)" fill="#2866F7"/>
                    <line x1="7" y1="564.5" x2="156" y2="564.5" stroke="#E0EAF8"/>
                    <circle cx="157" cy="564" r="16" transform="rotate(-90 157 564)" fill="#2866F7" fill-opacity="0.18"/>
                    <circle cx="157" cy="564" r="8" transform="rotate(-90 157 564)" fill="#2866F7"/>
                    <circle cx="4" cy="565" r="4" transform="rotate(-90 4 565)" fill="#2866F7"/>
                </svg>
            </div>

            <!-- Operational Confidence (Left Side) -->
            <div class="strategic-takeaway-item left operational-confidence">
                <div class="strategic-takeaway-content">
                    <h3 class="strategic-takeaway-title">Operational Confidence</h3>
                    <p class="strategic-takeaway-description">
                        Identify aircraft-specific or provider-linked performance issues before they impact service, using visual dashboards to isolate trends quickly.
                    </p>
                </div>
            </div>

            <!-- SLA Enforcement (Right Side) -->
            <div class="strategic-takeaway-item right sla-enforcement">
                <div class="strategic-takeaway-content">
                    <h3 class="strategic-takeaway-title">SLA Enforcement</h3>
                    <p class="strategic-takeaway-description">
                        Use tail-specific, route-linked data to benchmark and negotiate with connectivity vendors — supported by real-time evidence from high-traffic routes.
                    </p>
                </div>
            </div>

            <!-- Engineering Efficiency (Left Side) -->
            <div class="strategic-takeaway-item left engineering-efficiency">
                <div class="strategic-takeaway-content">
                    <h3 class="strategic-takeaway-title">Engineering Efficiency</h3>
                    <p class="strategic-takeaway-description">
                        Reduce downtime and troubleshooting through preemptive maintenance insights powered by tail-level trends and anomaly detection.
                    </p>
                </div>
            </div>

            <!-- Customer Experience (Right Side) -->
            <div class="strategic-takeaway-item right customer-experience">
                <div class="strategic-takeaway-content">
                    <h3 class="strategic-takeaway-title">Customer Experience</h3>
                    <p class="strategic-takeaway-description">
                        Support brand promise with verifiable QoE improvements and faster complaint resolution — reducing service credits and increasing retention.
                    </p>
                </div>
            </div>

            <!-- Performance Transparency (Left Side) -->
            <div class="strategic-takeaway-item left performance-transparency">
                <div class="strategic-takeaway-content">
                    <h3 class="strategic-takeaway-title">Performance Transparency</h3>
                    <p class="strategic-takeaway-description">
                        Enable executives and frontline staff to make informed decisions with fleet-wide dashboards, route-level heatmaps, and alerting tools.
                    </p>
                </div>
            </div>

            <!-- Vendor Strategy Alignment (Right Side) -->
            <div class="strategic-takeaway-item right vendor-strategy-alignment">
                <div class="strategic-takeaway-content">
                    <h3 class="strategic-takeaway-title">Vendor Strategy Alignment</h3>
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