<?php
/**
 * Global Satellite Solutions functions and definitions
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme setup
 *
 */
function gss_setup() {
    
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');
    
    // Let WordPress manage the document title
    add_theme_support('title-tag');
    
    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');
    
    // Add theme support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 50,
        'width'       => 200,
        'flex-width'  => true,
        'flex-height' => true,
        'header-text' => array('site-title', 'site-description'),
    ));
    
    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
    ));
    
    // Add theme support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');
    
    // Add support for editor styles
    add_theme_support('editor-styles');
    
    // Add support for responsive embedded content
    add_theme_support('responsive-embeds');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'gss'),
        'footer'  => esc_html__('Footer Menu', 'gss'),
    ));
}
add_action('after_setup_theme', 'gss_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet
 */
function gss_content_width() {
    $GLOBALS['content_width'] = apply_filters('gss_content_width', 1200);
}
add_action('after_setup_theme', 'gss_content_width', 0);

/**
 * Enqueue scripts and styles
 */
function gss_scripts() {
    
    // Main stylesheet (WordPress required)
    wp_enqueue_style('gss-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Main CSS with fonts and variables
    wp_enqueue_style('gss-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0');
    
    // Navigation stylesheet
    wp_enqueue_style('gss-navigation', get_template_directory_uri() . '/assets/css/navigation.css', array('gss-main'), '1.0.0');
    
    // Hero banner stylesheet
    wp_enqueue_style('gss-hero-banner', get_template_directory_uri() . '/assets/css/hero-banner.css', array('gss-main'), '1.0.0');
    
    // Features section stylesheet
    wp_enqueue_style('gss-features-section', get_template_directory_uri() . '/assets/css/features-section.css', array('gss-main'), '1.0.0');
    
    // Inflight Connectivity section stylesheet
    wp_enqueue_style('gss-inflight-connectivity-section', get_template_directory_uri() . '/assets/css/inflight-connectivity-section.css', array('gss-main'), '1.0.0');
    
    // Chart animations stylesheet
    wp_enqueue_style('gss-chart-animations', get_template_directory_uri() . '/assets/css/chart-animations.css', array('gss-main'), '1.0.0');
    
    // Airline Case Study section stylesheet
    wp_enqueue_style('gss-airline-case-study-section', get_template_directory_uri() . '/assets/css/airline-case-study-section.css', array('gss-main'), '1.0.0');

    // Insights to Action section stylesheet
    wp_enqueue_style('gss-insights-to-action-section', get_template_directory_uri() . '/assets/css/insights-to-action-section.css', array('gss-main'), '1.0.0');
    
    // Strategic Takeaways section stylesheet
    wp_enqueue_style('gss-strategic-takeaways-section', get_template_directory_uri() . '/assets/css/strategic-takeaways-section.css', array('gss-main'), '1.0.0');

    // Experience Viper section stylesheet
    wp_enqueue_style('gss-experience-viper-section', get_template_directory_uri() . '/assets/css/experience-viper-section.css', array('gss-main'), '1.0.0');

    // Homepage News section stylesheet
    wp_enqueue_style('gss-homepage-news-section', get_template_directory_uri() . '/assets/css/homepage-news-section.css', array('gss-main'), '1.0.0');
    
    // Footer stylesheet
    wp_enqueue_style('gss-footer', get_template_directory_uri() . '/assets/css/footer.css', array('gss-main'), '1.0.0');

    // About page stylesheet
    wp_enqueue_style('gss-about-page', get_template_directory_uri() . '/assets/css/about-page.css', array('gss-main'), '1.0.0');

    // Aviation page stylesheet
    wp_enqueue_style('gss-aviation-page', get_template_directory_uri() . '/assets/css/aviation-page.css', array('gss-main'), '1.0.0');

    // Telecom page stylesheet
    wp_enqueue_style('gss-telecom-page', get_template_directory_uri() . '/assets/css/telecom-page.css', array('gss-main'), '1.0.0');

    // Contact page stylesheet
    wp_enqueue_style('gss-contact-page', get_template_directory_uri() . '/assets/css/contact-page.css', array('gss-main'), '1.0.0');

    // News page stylesheet
    wp_enqueue_style('gss-news-page', get_template_directory_uri() . '/assets/css/news-page.css', array('gss-main'), '1.0.0');

    // Single post stylesheet
    wp_enqueue_style('gss-single-post', get_template_directory_uri() . '/assets/css/single-post.css', array('gss-main'), '1.0.0');

    // Viper Modal stylesheet
    wp_enqueue_style('gss-viper-modal', get_template_directory_uri() . '/assets/css/viper-modal.css', array('gss-main'), '1.0.0');

    // Legal pages stylesheet
    wp_enqueue_style('gss-legal-pages', get_template_directory_uri() . '/assets/css/legal-pages.css', array('gss-main'), '1.0.0');

    // Main JavaScript file
    wp_enqueue_script('gss-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array('jquery'), '1.0.0', true);
    
    // Features parallax JavaScript
    wp_enqueue_script('gss-features-parallax', get_template_directory_uri() . '/assets/js/features-parallax.js', array(), '1.0.0', true);
    
    // Chart animations JavaScript
    wp_enqueue_script('gss-chart-animations', get_template_directory_uri() . '/assets/js/chart-animations.js', array(), '1.0.0', true);
    
    // Strategic Takeaways animations JavaScript
    wp_enqueue_script('gss-strategic-takeaways-animations', get_template_directory_uri() . '/assets/js/strategic-takeaways-animations.js', array(), '1.0.0', true);
    
    // Viper Modal JavaScript
    wp_enqueue_script('gss-viper-modal', get_template_directory_uri() . '/assets/js/viper-modal.js', array('jquery'), '1.0.0', true);
    
    // Localize script for Viper Modal AJAX
    wp_localize_script('gss-viper-modal', 'viperAjax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('viper_form_nonce')
    ));
    
    // Comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'gss_scripts');

/**
 * Enqueue news page scripts and localize AJAX
 */
function gss_enqueue_news_scripts() {
    // Only load on news page or post-related pages
    if (is_page('news') || is_page_template('page-news.php') || is_home() || is_category() || is_tag() || is_single()) {
        wp_enqueue_script('gss-news-page', get_template_directory_uri() . '/assets/js/news-page.js', array('jquery'), '1.0.0', true);
        
        // Localize script for AJAX
        wp_localize_script('gss-news-page', 'ajax_object', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('load_more_posts_nonce')
        ));
    }
}
add_action('wp_enqueue_scripts', 'gss_enqueue_news_scripts');

/**
 * AJAX handler for loading more posts - UPDATED TO RESPECT DATE TOGGLE
 */
function gss_load_more_posts() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'load_more_posts_nonce')) {
        wp_die('Security check failed');
    }
    
    $page = intval($_POST['page']);
    
    // Query for posts
    $news_query = new WP_Query(array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 12,
        'paged' => $page,
        'orderby' => 'date',
        'order' => 'DESC'
    ));
    
    $html = '';
    
    if ($news_query->have_posts()) {
        ob_start(); // Start output buffering
        
        while ($news_query->have_posts()) : $news_query->the_post();
            ?>
            <!-- News Card -->
            <article class="news-card">
                
                <!-- Card Clickable Overlay -->
                <a href="<?php the_permalink(); ?>" class="news-card-link-overlay" aria-label="Read article: <?php the_title_attribute(); ?>"></a>
                
                <!-- Featured Image (if available) -->
                <?php if (has_post_thumbnail()) : ?>
                    <div class="news-card-image">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium', array('class' => 'news-thumbnail')); ?>
                        </a>
                    </div>
                <?php endif; ?>
                
                <div class="news-card-content">
                    <div class="news-card-main-content">
                        <!-- Date (only show if toggle is enabled) -->
                        <?php if (should_show_post_date(get_the_ID())) : ?>
                            <div class="news-card-date">
                                <?php echo get_the_date('M j, Y'); ?>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Title -->
                        <h3 class="news-card-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        
                        <!-- Excerpt -->
                        <div class="news-card-excerpt">
                            <?php 
                            if (has_excerpt()) {
                                echo wp_trim_words(get_the_excerpt(), 25, '...');
                            } else {
                                echo wp_trim_words(get_the_content(), 25, '...');
                            }
                            ?>
                        </div>
                    </div>
                    
                    <!-- Read More Link -->
                    <div class="news-card-link">
                        <a href="<?php the_permalink(); ?>" class="read-more-link">
                            <span>Read More</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="15" viewBox="0 0 17 15" fill="none">
                                <path d="M0.999507 7.50012L15.1414 7.49985M15.1414 7.49985L10.0027 2.36114M15.1414 7.49985L10.0027 12.6386" stroke="#155BFF" stroke-width="2" stroke-linecap="square"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            <?php
        endwhile;
        
        $html = ob_get_clean(); // Get the buffered content
        wp_reset_postdata();
        
        wp_send_json_success(array(
            'html' => $html,
            'max_pages' => $news_query->max_num_pages,
            'current_page' => $page
        ));
    } else {
        wp_send_json_error(array(
            'message' => 'No more posts found'
        ));
    }
}

// Hook for both logged-in and non-logged-in users
add_action('wp_ajax_load_more_posts', 'gss_load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'gss_load_more_posts');


function gss_handle_viper_form_submission() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'viper_form_nonce')) {
        wp_send_json_error('Security check failed.');
        return;
    }
    
    // Get form data
    $email = sanitize_email($_POST['email']);
    $full_name = sanitize_text_field($_POST['fullName']);
    $company = sanitize_text_field($_POST['company']);
    $notes = sanitize_textarea_field($_POST['notes']);
    $schedule_demo = isset($_POST['scheduleDemo']) ? sanitize_text_field($_POST['scheduleDemo']) : 'no';
    $source = sanitize_text_field($_POST['source']);
    
    // Basic validation
    if (empty($email) || !is_email($email)) {
        wp_send_json_error('Please enter a valid email address.');
        return;
    }
    
    // Prepare submission data for email
    $submission_data = array(
        'email' => $email,
        'full_name' => $full_name,
        'company' => $company,
        'notes' => $notes,
        'schedule_demo' => $schedule_demo,
        'source' => $source,
        'submitted_at' => current_time('mysql')
    );
    
    // Send email notification
    $to = 'jmandala@satqoe.com';
    $subject = 'New Viper Demo Request from ' . get_bloginfo('name');
    $message = gss_build_viper_email_content($submission_data);
    
    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: ' . get_bloginfo('name') . ' <no-reply@' . wp_parse_url(home_url(), PHP_URL_HOST) . '>',
        'Reply-To: ' . $email
    );
    
    // Send email
    $mail_sent = wp_mail($to, $subject, $message, $headers);
    
    if ($mail_sent) {
        // Send customer confirmation email
        $customer_subject = 'Thank you for your Viper demo request';
        $customer_message = "Hi " . $full_name . ",\n\nThank you for your interest in Viper! We've received your demo request and will be in touch soon.\n\nBest regards,\nThe Global Satellite Solutions Team";
        $customer_headers = array('From: no-reply@satqoe.com');
        
        wp_mail($email, $customer_subject, $customer_message, $customer_headers);
        
        wp_send_json_success('Thank you! Your demo request has been submitted successfully. We\'ll be in touch soon.');
    } else {
        wp_send_json_error('Failed to send your request. Please try again.');
    }
}

// Hook for both logged-in and non-logged-in users
add_action('wp_ajax_submit_viper_form', 'gss_handle_viper_form_submission');
add_action('wp_ajax_nopriv_submit_viper_form', 'gss_handle_viper_form_submission');

/**
 * Store submission in custom table
 */



function gss_build_viper_email_content($data) {
    $current_time = current_time('F j, Y \a\t g:i A T');
    $site_name = get_bloginfo('name');
    $source_display = ucwords(str_replace('_', ' ', $data['source']));
    
    // Demo preference badge
    $demo_badge_color = $data['schedule_demo'] === 'yes' ? '#00a32a' : '#999';
    $demo_badge_text = $data['schedule_demo'] === 'yes' ? '✓ YES - Schedule Demo' : '✗ No Demo Requested';
    
    $html = '
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>New Viper Demo Request</title>
        <style>
            body {
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
                line-height: 1.6;
                color: #333;
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
                background-color: #f8f9fa;
            }
            .email-container {
                background: white;
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            .email-header {
                background: linear-gradient(135deg, #155bff 0%, #487fff 100%);
                color: white;
                padding: 30px;
                text-align: center;
            }
            .email-header h1 {
                margin: 0;
                font-size: 24px;
                font-weight: 600;
            }
            .email-content {
                padding: 30px;
            }
            .form-data {
                background: #f8f9fe;
                border-radius: 8px;
                padding: 20px;
                margin: 20px 0;
            }
            .field-group {
                margin-bottom: 15px;
            }
            .field-label {
                font-weight: 600;
                color: #155bff;
                font-size: 14px;
                text-transform: uppercase;
                letter-spacing: 0.5px;
                margin-bottom: 5px;
                display: block;
            }
            .field-value {
                font-size: 16px;
                color: #333;
                word-wrap: break-word;
            }
            .demo-badge {
                display: inline-block;
                background: ' . $demo_badge_color . ';
                color: white;
                padding: 8px 16px;
                border-radius: 5px;
                font-weight: 600;
                font-size: 14px;
                margin-top: 5px;
            }
            .notes-field {
                white-space: pre-wrap;
                background: white;
                padding: 15px;
                border-radius: 5px;
                border-left: 4px solid #155bff;
            }
            .cta-button {
                display: inline-block;
                background: #155bff;
                color: white;
                padding: 14px 28px;
                text-decoration: none;
                border-radius: 8px;
                font-weight: 600;
                margin: 20px 0;
            }
            .footer {
                text-align: center;
                padding: 20px;
                color: #666;
                font-size: 12px;
            }
        </style>
    </head>
    <body>
        <div class="email-container">
            <div class="email-header">
                <h1>🚀 New Viper Demo Request</h1>
                <p style="margin: 10px 0 0 0; opacity: 0.9;">' . $current_time . '</p>
            </div>
            <div class="email-content">
                <p style="font-size: 16px; margin-bottom: 20px;">
                    You have received a new demo request from <strong>' . $site_name . '</strong>.
                </p>
                
                <div class="form-data">
                    <div class="field-group">
                        <span class="field-label">Email Address</span>
                        <div class="field-value">' . esc_html($data['email']) . '</div>
                    </div>
                    
                    ' . (!empty($data['full_name']) ? '
                    <div class="field-group">
                        <span class="field-label">Full Name</span>
                        <div class="field-value">' . esc_html($data['full_name']) . '</div>
                    </div>
                    ' : '') . '
                    
                    ' . (!empty($data['company']) ? '
                    <div class="field-group">
                        <span class="field-label">Company</span>
                        <div class="field-value">' . esc_html($data['company']) . '</div>
                    </div>
                    ' : '') . '
                    
                    <div class="field-group">
                        <span class="field-label">Schedule Demo?</span>
                        <div class="field-value">
                            <span class="demo-badge">' . $demo_badge_text . '</span>
                        </div>
                    </div>
                    
                    ' . (!empty($data['notes']) ? '
                    <div class="field-group">
                        <span class="field-label">Notes</span>
                        <div class="field-value notes-field">' . esc_html($data['notes']) . '</div>
                    </div>
                    ' : '') . '
                    
                    <div class="field-group">
                        <span class="field-label">Source</span>
                        <div class="field-value">' . $source_display . '</div>
                    </div>
                </div>
                
                <p style="text-align: center;">
                    <a href="mailto:' . esc_attr($data['email']) . '?subject=Your%20Viper%20Demo%20Request" class="cta-button">
                        Reply to ' . esc_html($data['full_name'] ?: 'Customer') . '
                    </a>
                </p>
            </div>
            <div class="footer">
                <p>This email was sent from ' . $site_name . ' contact form.</p>
            </div>
        </div>
    </body>
    </html>';
    
    return $html;
}





/**
 * Display post meta (date, author, categories) conditionally
 */
function gss_post_meta() {
    $show_date = get_post_meta(get_the_ID(), 'show_date', true);
    $show_author = get_post_meta(get_the_ID(), 'show_author', true);
    $show_categories = get_post_meta(get_the_ID(), 'show_categories', true);
    
    echo '<div class="entry-meta">';
    
    // Show date if enabled or if no custom field is set (default to showing)
    if ($show_date !== 'no' && get_the_date()) {
        echo '<span class="posted-on">Posted on <time class="entry-date" datetime="' . esc_attr(get_the_date('c')) . '">' . esc_html(get_the_date()) . '</time></span>';
    }
    
    // Show author if enabled or if no custom field is set (default to showing)
    if ($show_author !== 'no' && get_the_author()) {
        echo '<span class="byline"> by <span class="author vcard">' . esc_html(get_the_author()) . '</span></span>';
    }
    
    // Show categories if enabled or if no custom field is set (default to showing)
    if ($show_categories !== 'no' && has_category()) {
        echo '<span class="cat-links">Categories: ' . get_the_category_list(', ') . '</span>';
    }
    
    echo '</div>';
}

/**
 * Register widget areas
 */
function gss_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'gss'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'gss'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'gss_widgets_init');

/**
 * Custom excerpt length
 */
function gss_excerpt_length($length) {
    return 25; // Number of words
}
add_filter('excerpt_length', 'gss_excerpt_length', 999);

/**
 * Custom excerpt more string
 */
function gss_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'gss_excerpt_more');

/**
 * Fallback menu for primary navigation
 */
function gss_fallback_menu() {
    echo '<ul id="primary-menu" class="primary-menu">';
    echo '<li><a href="' . esc_url(home_url('/')) . '">Home</a></li>';
    echo '<li><a href="' . esc_url(home_url('/about')) . '">About Us</a></li>';
    echo '<li class="menu-item-has-children">';
    echo '<span class="dropdown-toggle">Industries</span>';
    echo '<ul class="sub-menu">';
    echo '<li><a href="' . esc_url(home_url('/aviation')) . '">Aviation</a></li>';
    echo '<li><a href="' . esc_url(home_url('/telecom')) . '">Telecom</a></li>';
    echo '</ul>';
    echo '</li>';
    echo '<li><a href="' . esc_url(home_url('/news')) . '">News</a></li>';
    echo '<li><a href="' . esc_url(home_url('/contact')) . '">Contact</a></li>';
    echo '</ul>';
    
    // Add mobile CTA
    echo '<div class="mobile-cta">';
    echo '<a href="' . esc_url(home_url('/contact')) . '" class="cta-button">Schedule a Discovery Call</a></li>';
    echo '</div>';
}

/**
 * Fallback menu for footer navigation
 */
function gss_footer_fallback_menu() {
    echo '<ul class="footer-menu">';
    echo '<li><a href="' . esc_url(home_url('/')) . '">Home</a></li>';
    echo '<li><a href="' . esc_url(home_url('/about')) . '">About Us</a></li>';
    echo '<li><a href="' . esc_url(home_url('/blog')) . '">Blog</a></li>';
    echo '<li><a href="' . esc_url(home_url('/industries')) . '">Industries</a></li>';
    echo '<li><a href="' . esc_url(home_url('/news')) . '">News</a></li>';
    echo '</ul>';
}

/**
 * Enhanced page body classes
 */
function gss_enhanced_page_body_class($classes) {
    if (is_page('news') || is_page_template('page-news.php')) {
        $classes[] = 'news-page';
    }
    if (is_page('contact') || is_page_template('page-contact.php')) {
        $classes[] = 'contact-page';
    }
    if (is_page('about') || is_page_template('page-about.php')) {
        $classes[] = 'about-page';
    }
    if (is_page('terms-of-service') || is_page_template('page-terms-of-service.php')) {
        $classes[] = 'terms-of-service-page legal-page';
    }
    if (is_page('cookies-policy') || is_page_template('page-cookies-policy.php')) {
        $classes[] = 'cookies-policy-page legal-page';
    }
    if (is_page('privacy-policy') || is_page_template('page-privacy-policy.php')) {
        $classes[] = 'privacy-policy-page legal-page';
    }
    if (is_page('aviation') || strpos($_SERVER['REQUEST_URI'], '/aviation') !== false) {
        $classes[] = 'aviation-page';
    }
    if (is_page('telecom') || strpos($_SERVER['REQUEST_URI'], '/telecom') !== false) {
        $classes[] = 'telecom-page';
    }
    if (is_single()) {
        $classes[] = 'single-post-page';
    }
    return $classes;
}

/**
 * Ensure WordPress creates news page if it doesn't exist
 */
function gss_create_news_page() {
    // Check if news page exists
    $news_page = get_page_by_path('news');
    
    if (!$news_page) {
        // Create news page
        $page_data = array(
            'post_title' => 'News',
            'post_content' => 'This page displays all news articles and updates from Global Satellite Solutions.',
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_name' => 'news',
            'page_template' => 'page-news.php'
        );
        
        $page_id = wp_insert_post($page_data);
        
        if ($page_id) {
            // Set the page template
            update_post_meta($page_id, '_wp_page_template', 'page-news.php');
        }
    }
}
add_action('after_setup_theme', 'gss_create_news_page');

/**
 * Ensure WordPress creates legal pages if they don't exist
 * Add this function after the existing gss_create_news_page() function:
 */
function gss_create_legal_pages() {
    // Terms of Service page
    $terms_page = get_page_by_path('terms-of-service');
    if (!$terms_page) {
        $page_data = array(
            'post_title' => 'Terms of Service',
            'post_content' => 'This page contains our Terms of Service.',
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_name' => 'terms-of-service',
            'page_template' => 'page-terms-of-service.php'
        );
        
        $page_id = wp_insert_post($page_data);
        if ($page_id) {
            update_post_meta($page_id, '_wp_page_template', 'page-terms-of-service.php');
        }
    }

    // Cookies Policy page
    $cookies_page = get_page_by_path('cookies-policy');
    if (!$cookies_page) {
        $page_data = array(
            'post_title' => 'Cookies Policy',
            'post_content' => 'This page contains our Cookies Policy.',
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_name' => 'cookies-policy',
            'page_template' => 'page-cookies-policy.php'
        );
        
        $page_id = wp_insert_post($page_data);
        if ($page_id) {
            update_post_meta($page_id, '_wp_page_template', 'page-cookies-policy.php');
        }
    }

    // Privacy Policy page (if you want to create it later)
    $privacy_page = get_page_by_path('privacy-policy');
    if (!$privacy_page) {
        $page_data = array(
            'post_title' => 'Privacy Policy',
            'post_content' => 'This page contains our Privacy Policy.',
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_name' => 'privacy-policy'
        );
        
        $page_id = wp_insert_post($page_data);
    }
}
add_action('after_setup_theme', 'gss_create_legal_pages');

/**
 * Add custom meta fields for posts (optional)
 */
function gss_add_post_meta_boxes() {
    add_meta_box(
        'gss_post_settings',
        'Post Display Settings',
        'gss_post_settings_callback',
        'post',
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'gss_add_post_meta_boxes');

function gss_post_settings_callback($post) {
    wp_nonce_field('gss_save_post_settings', 'gss_post_settings_nonce');
    
    $featured_on_homepage = get_post_meta($post->ID, '_featured_on_homepage', true);
    
    echo '<label for="featured_on_homepage">';
    echo '<input type="checkbox" id="featured_on_homepage" name="featured_on_homepage" value="1" ' . checked(1, $featured_on_homepage, false) . '>';
    echo ' Feature this post on homepage';
    echo '</label>';
}

function gss_save_post_settings($post_id) {
    if (!isset($_POST['gss_post_settings_nonce']) || !wp_verify_nonce($_POST['gss_post_settings_nonce'], 'gss_save_post_settings')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    $featured_on_homepage = isset($_POST['featured_on_homepage']) ? 1 : 0;
    update_post_meta($post_id, '_featured_on_homepage', $featured_on_homepage);
}
add_action('save_post', 'gss_save_post_settings');





// Add custom meta box to post editor
function add_custom_author_meta_box() {
    add_meta_box(
        'custom_author_meta_box',           // Meta box ID
        'Custom Author',                     // Title
        'custom_author_meta_box_callback',  // Callback function
        'post',                             // Post type
        'side',                             // Context (side, normal, advanced)
        'default'                           // Priority
    );
}
add_action('add_meta_boxes', 'add_custom_author_meta_box');

// Enhanced meta box callback function with display toggles
function custom_author_meta_box_callback($post) {
    // Add nonce field for security
    wp_nonce_field('custom_author_meta_box', 'custom_author_meta_box_nonce');
    
    // Get current values
    $custom_author = get_post_meta($post->ID, '_custom_author', true);
    $show_author = get_post_meta($post->ID, '_show_author', true);
    $show_date = get_post_meta($post->ID, '_show_date', true);
    
    // Set defaults if values don't exist (first time editing)
    if ($show_author === '') {
        $show_author = '1'; // Default to showing author
    }
    if ($show_date === '') {
        $show_date = '1'; // Default to showing date
    }
    
    // Display the fields
    echo '<table class="form-table" style="margin: 0;">';
    
    // Custom Author Field
    echo '<tr>';
    echo '<td style="padding: 10px 0;">';
    echo '<label for="custom_author"><strong>Author Name:</strong></label><br>';
    echo '<input type="text" id="custom_author" name="custom_author" value="' . esc_attr($custom_author) . '" style="width: 100%; margin-top: 5px;" placeholder="Enter author name..." />';
    echo '<p class="description" style="margin-top: 5px; font-size: 12px; color: #666;">Leave blank to use default WordPress author (' . get_the_author_meta('display_name', $post->post_author) . ')</p>';
    echo '</td>';
    echo '</tr>';
    
    // Display Toggles Section
    echo '<tr>';
    echo '<td style="padding: 15px 0 10px 0; border-top: 1px solid #ddd;">';
    echo '<label style="font-weight: 600; color: #333; margin-bottom: 10px; display: block;">Display Options:</label>';
    
    // Show Author Toggle
    echo '<div style="margin-bottom: 10px;">';
    echo '<label for="show_author" style="display: flex; align-items: center; font-size: 13px;">';
    echo '<input type="checkbox" id="show_author" name="show_author" value="1" ' . checked(1, $show_author, false) . ' style="margin-right: 8px;">';
    echo '<span>Show author information</span>';
    echo '</label>';
    echo '</div>';
    
    // Show Date Toggle
    echo '<div style="margin-bottom: 5px;">';
    echo '<label for="show_date" style="display: flex; align-items: center; font-size: 13px;">';
    echo '<input type="checkbox" id="show_date" name="show_date" value="1" ' . checked(1, $show_date, false) . ' style="margin-right: 8px;">';
    echo '<span>Show publication date</span>';
    echo '</label>';
    echo '</div>';
    
    echo '<p class="description" style="margin-top: 8px; font-size: 11px; color: #666;">Uncheck to hide author or date from the post display</p>';
    echo '</td>';
    echo '</tr>';
    
    echo '</table>';
}

// Enhanced save function to handle all fields
function save_custom_author_meta($post_id) {
    // Check if nonce is valid
    if (!isset($_POST['custom_author_meta_box_nonce']) || !wp_verify_nonce($_POST['custom_author_meta_box_nonce'], 'custom_author_meta_box')) {
        return;
    }
    
    // Check if user has permission to edit post
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    // Check if not an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    // Save custom author
    if (isset($_POST['custom_author'])) {
        $custom_author = sanitize_text_field($_POST['custom_author']);
        update_post_meta($post_id, '_custom_author', $custom_author);
    }
    
    // Save show author toggle
    $show_author = isset($_POST['show_author']) ? '1' : '0';
    update_post_meta($post_id, '_show_author', $show_author);
    
    // Save show date toggle
    $show_date = isset($_POST['show_date']) ? '1' : '0';
    update_post_meta($post_id, '_show_date', $show_date);
}
add_action('save_post', 'save_custom_author_meta');

// Helper function to get the author (custom or default)
function get_post_author_name($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    $custom_author = get_post_meta($post_id, '_custom_author', true);
    
    if (!empty($custom_author)) {
        return $custom_author;
    }
    
    return get_the_author_meta('display_name', get_post_field('post_author', $post_id));
}

// Helper function to check if author should be displayed
function should_show_post_author($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    $show_author = get_post_meta($post_id, '_show_author', true);
    
    // Default to showing if no value is set
    if ($show_author === '') {
        return true;
    }
    
    return $show_author === '1';
}

// Helper function to check if date should be displayed
function should_show_post_date($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    $show_date = get_post_meta($post_id, '_show_date', true);
    
    // Default to showing if no value is set
    if ($show_date === '') {
        return true;
    }
    
    return $show_date === '1';
}