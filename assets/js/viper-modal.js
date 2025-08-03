/**
 * Enhanced Viper Experience Modal Functionality
 * 
 * Includes analytics tracking, better error handling, and additional features
 */

(function($) {
    'use strict';

    let viperModal = null;
    let isModalInitialized = false;
    let modalOpenSource = null; // Track where the modal was opened from

    // Initialize modal when DOM is ready
    $(document).ready(function() {
        initViperModal();
        bindViperTriggers();
        setupAnalytics();
    });

    /**
     * Initialize the modal HTML and functionality
     */
    function initViperModal() {
        if (isModalInitialized) return;

        // Create modal HTML
        const modalHTML = `
            <div class="viper-modal-overlay" id="viperModal" role="dialog" aria-modal="true" aria-labelledby="viperModalTitle">
                <div class="viper-modal">
                    <button class="viper-modal-close" id="closeViperModal" aria-label="Close modal">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>

                    <div class="viper-modal-header">
                        <h2 class="viper-modal-title" id="viperModalTitle">Ready to See Viper in Action?</h2>
                    </div>

                    <div class="viper-modal-content">
                        <p class="viper-modal-subtitle">
                            Book a personalized demo with our team.<br>
                            Let's show you what true inflight visibility looks like.
                        </p>

                        <div id="viperMessage" role="alert" aria-live="polite"></div>

                        <form id="viperForm" action="#" method="POST" novalidate>
                            <div class="viper-form-grid">
                                <div class="viper-form-left">
                                    <div class="viper-field-group">
                                        <label class="viper-field-label" for="viperEmail">
                                            Email<span class="viper-field-required">*</span>
                                        </label>
                                        <div class="viper-field-wrapper">
                                            <div class="viper-field-icon">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#155bff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                                    <polyline points="22,6 12,13 2,6"></polyline>
                                                </svg>
                                            </div>
                                            <input 
                                                type="email" 
                                                id="viperEmail" 
                                                name="email" 
                                                class="viper-field-input" 
                                                placeholder="Type your email" 
                                                required
                                                aria-describedby="emailError"
                                            >
                                        </div>
                                    </div>

                                    <div class="viper-field-group">
                                        <label class="viper-field-label" for="viperFullName">Full Name</label>
                                        <div class="viper-field-wrapper">
                                            <input 
                                                type="text" 
                                                id="viperFullName" 
                                                name="fullName" 
                                                class="viper-field-input" 
                                                placeholder="Your name"
                                            >
                                        </div>
                                    </div>

                                    <div class="viper-field-group">
                                        <label class="viper-field-label" for="viperCompany">Company</label>
                                        <div class="viper-field-wrapper">
                                            <input 
                                                type="text" 
                                                id="viperCompany" 
                                                name="company" 
                                                class="viper-field-input" 
                                                placeholder="Your company name"
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div class="viper-form-right">
                                    <div class="viper-field-group">
                                        <label class="viper-field-label" for="viperNotes">Tell us about your needs</label>
                                        <div class="viper-field-wrapper textarea-wrapper">
                                            <textarea 
                                                id="viperNotes" 
                                                name="notes" 
                                                class="viper-field-textarea" 
                                                placeholder="What specific challenges are you facing with inflight connectivity? What would you like to see in a demo?"
                                            ></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Hidden field to track source -->
                            <input type="hidden" id="viperSource" name="source" value="">

                            <div class="viper-separator"></div>

                            <div class="viper-submit-wrapper">
                                <button type="submit" class="btn-primary viper-submit-button" id="viperSubmitButton">
                                    <span class="btn-text">Let's Get Started</span>
                                    <span class="btn-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M2.5 17.5L17.5 2.5M17.5 2.5H2.5M17.5 2.5V17.5" stroke="#091026" stroke-width="2" stroke-linecap="square"/>
                                        </svg>
                                    </span>
                                </button>
                            </div>

                            <p class="viper-terms-text">
                                By submitting, you agree to our 
                                <a href="${window.location.origin}/terms-of-service" class="viper-terms-link" target="_blank">terms of service</a> 
                                & 
                                <a href="${window.location.origin}/privacy-policy" class="viper-terms-link" target="_blank">privacy policy</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        `;

        // Append modal to body
        $('body').append(modalHTML);
        
        viperModal = $('#viperModal');
        isModalInitialized = true;

        // Bind modal events
        bindModalEvents();
        setupFormValidation();
    }

    /**
     * Bind modal open/close events
     */
    function bindModalEvents() {
        const closeBtn = $('#closeViperModal');
        const form = $('#viperForm');

        // Close modal
        closeBtn.on('click', function(e) {
            e.preventDefault();
            trackEvent('modal_closed', 'close_button');
            closeViperModal();
        });

        // Close on overlay click
        viperModal.on('click', function(e) {
            if (e.target === this) {
                trackEvent('modal_closed', 'overlay_click');
                closeViperModal();
            }
        });

        // Close on escape key
        $(document).on('keydown', function(e) {
            if (e.key === 'Escape' && viperModal.hasClass('active')) {
                trackEvent('modal_closed', 'escape_key');
                closeViperModal();
            }
        });

        // Form submission
        form.on('submit', function(e) {
            e.preventDefault();
            submitViperForm();
        });
    }

    /**
     * Setup form validation
     */
    function setupFormValidation() {
        const emailInput = $('#viperEmail');
        const emailError = $('#emailError');

        // Real-time email validation
        emailInput.on('blur', function() {
            const email = $(this).val().trim();
            if (email && !isValidEmail(email)) {
                emailError.text('Please enter a valid email address');
                $(this).addClass('error');
            } else {
                emailError.text('');
                $(this).removeClass('error');
            }
        });

        emailInput.on('input', function() {
            $(this).removeClass('error');
            emailError.text('');
        });
    }

    /**
     * Bind triggers to open modal
     */
    function bindViperTriggers() {
        // Bind to existing buttons with specific text content
        $(document).on('click', 'a, button', function(e) {
            const $this = $(this);
            const text = $this.text().trim();
            const href = $this.attr('href');
            
            // Check if this is an "Experience Viper" button
            if (text.includes('Ready To Experience Viper') || 
                text.includes('Experience Viper') || 
                text.includes('Ready to See Viper in Action') ||
                href && href.includes('#experience-viper') ||
                href && href.includes('experience-viper')) {
                
                e.preventDefault();
                
                // Determine source
                modalOpenSource = determineModalSource($this);
                openViperModal();
            }
        });

        // Also bind to any elements with the specific class
        $(document).on('click', '.experience-viper-trigger', function(e) {
            e.preventDefault();
            modalOpenSource = determineModalSource($(this));
            openViperModal();
        });
    }

    /**
     * Determine where the modal was opened from
     */
    function determineModalSource($element) {
        // Check if it's in the hero section
        if ($element.closest('.hero-banner, .hero-section').length) {
            return 'hero_banner';
        }
        
        // Check if it's in the footer
        if ($element.closest('footer, .site-footer').length) {
            return 'footer';
        }
        
        // Check if it's in the experience viper section
        if ($element.closest('.experience-viper-section').length) {
            return 'experience_section';
        }
        
        // Check specific page contexts
        if ($('body').hasClass('aviation-page')) {
            return 'aviation_page';
        }
        
        if ($('body').hasClass('telecom-page')) {
            return 'telecom_page';
        }
        
        if ($('body').hasClass('contact-page')) {
            return 'contact_page';
        }
        
        return 'unknown';
    }

    /**
     * Open the modal
     */
    function openViperModal() {
        if (!isModalInitialized) {
            initViperModal();
        }

        viperModal.addClass('active');
        $('body').css('overflow', 'hidden');
        
        // Set the source
        $('#viperSource').val(modalOpenSource || 'unknown');
        
        // Track modal open
        trackEvent('modal_opened', modalOpenSource || 'unknown');
        
        // Focus on first input for accessibility
        setTimeout(function() {
            $('#viperEmail').focus();
        }, 300);
    }

    /**
     * Close the modal
     */
    function closeViperModal() {
        viperModal.removeClass('active');
        $('body').css('overflow', '');
        
        // Reset form and clear messages
        $('#viperForm')[0].reset();
        $('#viperMessage').html('');
        $('#viperSubmitButton').removeClass('loading').prop('disabled', false);
        $('.viper-field-input').removeClass('error');
        $('.viper-field-error').text('');
        
        modalOpenSource = null;
    }

    /**
     * Submit the form via AJAX
     */
    function submitViperForm() {
        const form = $('#viperForm');
        const submitButton = $('#viperSubmitButton');
        const messageDiv = $('#viperMessage');

        // Validate form
        if (!validateForm()) {
            trackEvent('form_validation_failed', modalOpenSource);
            return;
        }

        // Collect form data
        const formData = {
            action: 'submit_viper_form',
            nonce: viperAjax.nonce,
            email: $('#viperEmail').val().trim(),
            fullName: $('#viperFullName').val().trim(),
            company: $('#viperCompany').val().trim(),
            phone: $('#viperPhone').val().trim(),
            notes: $('#viperNotes').val().trim(),
            source: $('#viperSource').val()
        };

        // Track form submission attempt
        trackEvent('form_submitted', modalOpenSource);

        // Show loading state
        submitButton.addClass('loading').prop('disabled', true);
        messageDiv.html('');

        // Submit via AJAX
        $.ajax({
            url: viperAjax.ajax_url,
            type: 'POST',
            data: formData,
            dataType: 'json',
            timeout: 30000, // 30 second timeout
            success: function(response) {
                console.log('AJAX Success Response:', response);
                if (response.success) {
                    trackEvent('form_success', modalOpenSource);
                    messageDiv.html('<div class="viper-message success">' + response.data + '</div>');
                    form[0].reset();
                    
                    // Auto-close modal after 3 seconds on success
                    setTimeout(function() {
                        closeViperModal();
                    }, 3000);
                } else {
                    trackEvent('form_error', modalOpenSource);
                    messageDiv.html('<div class="viper-message error">' + (response.data || 'Something went wrong. Please try again.') + '</div>');
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', error);
                console.error('XHR Response:', xhr.responseText);
                trackEvent('form_network_error', modalOpenSource);
                
                let errorMessage = 'Network error. Please try again.';
                if (status === 'timeout') {
                    errorMessage = 'Request timed out. Please check your connection and try again.';
                }
                
                messageDiv.html('<div class="viper-message error">' + errorMessage + '</div>');
            },
            complete: function() {
                submitButton.removeClass('loading').prop('disabled', false);
            }
        });
    }

    /**
     * Validate form before submission
     */
    function validateForm() {
        let isValid = true;
        const email = $('#viperEmail').val().trim();
        const emailError = $('#emailError');

        // Reset errors
        $('.viper-field-input').removeClass('error');
        $('.viper-field-error').text('');

        // Validate email
        if (!email) {
            emailError.text('Email is required');
            $('#viperEmail').addClass('error');
            isValid = false;
        } else if (!isValidEmail(email)) {
            emailError.text('Please enter a valid email address');
            $('#viperEmail').addClass('error');
            isValid = false;
        }

        return isValid;
    }

    /**
     * Check if email is valid
     */
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    /**
     * Setup analytics tracking
     */
    function setupAnalytics() {
        // Track page load with modal available
        trackEvent('modal_available', window.location.pathname);
    }

    /**
     * Track events (integrate with your analytics platform)
     */
    function trackEvent(eventName, eventData) {
        // Google Analytics 4
        if (typeof gtag !== 'undefined') {
            gtag('event', eventName, {
                event_category: 'viper_modal',
                event_label: eventData,
                value: 1
            });
        }

        // Google Analytics Universal
        if (typeof ga !== 'undefined') {
            ga('send', 'event', 'viper_modal', eventName, eventData, 1);
        }

        // Facebook Pixel
        if (typeof fbq !== 'undefined') {
            fbq('trackCustom', 'ViperModal_' + eventName, {
                source: eventData
            });
        }

        // Console log for debugging
        console.log('Viper Modal Event:', eventName, eventData);
    }

    // Expose functions globally if needed
    window.ViperModal = {
        open: openViperModal,
        close: closeViperModal,
        track: trackEvent
    };

})(jQuery);