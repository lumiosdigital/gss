
(function($) {
    'use strict';

    let viperModal = null;
    let isModalInitialized = false;
    let modalOpenSource = null;

    // Initialize modal when DOM is ready
    $(document).ready(function() {
        initViperModal();
        bindViperTriggers();
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
            closeViperModal();
        });

        // Close on overlay click
        viperModal.on('click', function(e) {
            if (e.target === this) {
                closeViperModal();
            }
        });

        // Close on escape key
        $(document).on('keydown', function(e) {
            if (e.key === 'Escape' && viperModal.hasClass('active')) {
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
        
        // Focus on first input for accessibility
        setTimeout(function() {
            $('#viperEmail').focus();
        }, 300);
    }

    /**
     * Close the modal
     */
    function closeViperModal() {
        viperModal.removeClass('active success-state'); // Add success-state here
        $('body').css('overflow', '');
        
        // Reset form and clear messages
        $('#viperForm')[0].reset();
        $('#viperForm').show(); // Make sure form is visible again
        $('#viperMessage').html('');
        $('#viperSubmitButton').removeClass('loading').prop('disabled', false);
        $('.viper-submit-wrapper').removeClass('viper-submit-error');
        $('.viper-error-icon').remove();
        
        modalOpenSource = null;
    }

    /**
     * Submit the form via AJAX
     */
    function submitViperForm() {
        const form = $('#viperForm');
        const submitButton = $('#viperSubmitButton');
        const messageDiv = $('#viperMessage');
        const modal = $('#viperModal');

        // Remove any existing error states
        $('.viper-submit-wrapper').removeClass('viper-submit-error');
        $('.viper-error-icon').remove();

        // Collect form data
        const formData = {
            action: 'submit_viper_form',
            nonce: viperAjax.nonce,
            email: $('#viperEmail').val().trim(),
            fullName: $('#viperFullName').val().trim(),
            company: $('#viperCompany').val().trim(),
            notes: $('#viperNotes').val().trim(),
            source: $('#viperSource').val()
        };

        // Show loading state
        submitButton.addClass('loading').prop('disabled', true);
        messageDiv.html('');

        // Submit via AJAX
        $.ajax({
            url: viperAjax.ajax_url,
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    // Success: Hide form and show success message
                    modal.addClass('success-state');
                    
                    // Also hide form elements directly as backup
                    $('#viperForm').hide();
                    
                    messageDiv.html(`
                        <div class="viper-success-content">
                            <h3>🚀 Request Submitted!</h3>
                            <p>${response.data}</p>
                        </div>
                    `);
                    
                    // Auto-close modal after 4 seconds
                    setTimeout(function() {
                        closeViperModal();
                    }, 4000);
                } else {
                    // Error: Show icon next to button
                    showSubmitError(response.data || 'Something went wrong. Please try again.');
                }
            },
            error: function(xhr, status, error) {
                showSubmitError('Network error. Please try again.');
            },
            complete: function() {
                submitButton.removeClass('loading').prop('disabled', false);
            }
        });
    }

    /**
     * Show error icon next to submit button
     */
    function showSubmitError(errorMessage) {
        const submitWrapper = $('.viper-submit-wrapper');
        submitWrapper.addClass('viper-submit-error');
        
        const errorIcon = $(`
            <div class="viper-error-icon">
                !
                <div class="viper-error-tooltip">${errorMessage}</div>
            </div>
        `);
        
        submitWrapper.append(errorIcon);
    }

    // Expose functions globally if needed
    window.ViperModal = {
        open: openViperModal,
        close: closeViperModal
    };

})(jQuery);