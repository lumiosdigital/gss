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
 * AJAX handler for loading more posts
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
                        <!-- Date -->
                        <div class="news-card-date">
                            <?php echo get_the_date('M j, Y'); ?>
                        </div>
                        
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

/**
 * Handle Viper form submission via AJAX
 */
/**
 * Handle Viper form submission via AJAX
 */
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
    $source = sanitize_text_field($_POST['source']);
    
    // Basic validation
    if (empty($email) || !is_email($email)) {
        wp_send_json_error('Please enter a valid email address.');
        return;
    }
    
    // Prepare submission data
    $submission_data = array(
        'email' => $email,
        'full_name' => $full_name,
        'company' => $company,
        'notes' => $notes,
        'source' => $source,
        'ip_address' => $_SERVER['REMOTE_ADDR'],
        'submitted_at' => current_time('mysql')
    );
    
    // Store submission in database
    gss_store_viper_submission_with_status($submission_data);
    
    // Send email notification
    $to = 'lumiosdigital@gmail.com';
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
        $customer_headers = array('From: hello@lumiosdigital.com');
        
        // Send confirmation (don't fail the whole process if this doesn't work)
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
function gss_store_viper_submission($data) {
    global $wpdb;
    
    $table_name = $wpdb->prefix . 'viper_submissions';
    
    // Create table if it doesn't exist
    gss_create_viper_submissions_table();
    
    $wpdb->insert(
        $table_name,
        array(
            'email' => $data['email'],
            'full_name' => $data['full_name'],
            'company' => $data['company'],
            'notes' => $data['notes'],
            'source' => $data['source'],
            'ip_address' => $data['ip_address'],
            'submitted_at' => $data['submitted_at']
        ),
        array('%s', '%s', '%s', '%s', '%s', '%s', '%s')
    );
}

/**
 * Create submissions table
 */
function gss_create_viper_submissions_table() {
    global $wpdb;
    
    $table_name = $wpdb->prefix . 'viper_submissions';
    
    $charset_collate = $wpdb->get_charset_collate();
    
    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        email varchar(255) NOT NULL,
        full_name varchar(255) DEFAULT '',
        company varchar(255) DEFAULT '',
        notes text DEFAULT '',
        source varchar(100) DEFAULT '',
        ip_address varchar(45) DEFAULT '',
        submitted_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        KEY email (email),
        KEY source (source),
        KEY submitted_at (submitted_at)
    ) $charset_collate;";
    
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

/**
 * Build the email content for Viper form submissions
 */
function gss_build_viper_email_content($data) {
    $current_time = current_time('F j, Y \a\t g:i A T');
    $site_url = home_url();
    $site_name = get_bloginfo('name');
    
    // Determine source display name
    $source_display = ucwords(str_replace('_', ' ', $data['source']));
    
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
            .notes-field {
                white-space: pre-wrap;
                background: white;
                padding: 15px;
                border-radius: 6px;
                border-left: 4px solid #155bff;
            }
            .source-badge {
                display: inline-block;
                background: #b1fe4c;
                color: #091026;
                padding: 4px 12px;
                border-radius: 15px;
                font-size: 12px;
                font-weight: 600;
                text-transform: uppercase;
                letter-spacing: 0.5px;
            }
            .cta-button {
                display: inline-block;
                background: #b1fe4c;
                color: #091026;
                padding: 12px 30px;
                text-decoration: none;
                border-radius: 25px;
                font-weight: 600;
                font-size: 16px;
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <div class="email-container">
            <div class="email-header">
                <h1>🚀 New Viper Demo Request</h1>
                <p>Someone is interested in experiencing Viper!</p>
            </div>
            
            <div class="email-content">
                <p>You have received a new demo request through the Viper Experience form on <strong>' . $site_name . '</strong>.</p>
                
                <p><strong>Source:</strong> <span class="source-badge">' . esc_html($source_display) . '</span></p>
                
                <div class="form-data">
                    <div class="field-group">
                        <span class="field-label">Email Address</span>
                        <div class="field-value"><strong>' . esc_html($data['email']) . '</strong></div>
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
                    
                    ' . (!empty($data['notes']) ? '
                    <div class="field-group">
                        <span class="field-label">Notes</span>
                        <div class="field-value notes-field">' . esc_html($data['notes']) . '</div>
                    </div>
                    ' : '') . '
                </div>
                
                <p style="text-align: center;">
                    <a href="mailto:' . esc_attr($data['email']) . '?subject=Your%20Viper%20Demo%20Request" class="cta-button">
                        Reply to ' . esc_html($data['full_name'] ?: 'Customer') . '
                    </a>
                </p>
            </div>
        </div>
    </body>
    </html>';
    
    return $html;
}

/**
 * Add admin page to view submissions
 */
function gss_add_viper_admin_page() {
    add_submenu_page(
        'tools.php',
        'Viper Submissions',
        'Viper Submissions',
        'manage_options',
        'viper-submissions',
        'gss_viper_submissions_page'
    );
}
add_action('admin_menu', 'gss_add_viper_admin_page');

/**
 * Display submissions admin page
 */
/**
 * Display submissions admin page with enhanced features
 */
function gss_viper_submissions_page() {
    global $wpdb;
    
    $table_name = $wpdb->prefix . 'viper_submissions';
    
    // Create table if it doesn't exist
    gss_create_viper_submissions_table();
    
    // Handle individual submission view
    if (isset($_GET['view']) && is_numeric($_GET['view'])) {
        $submission_id = intval($_GET['view']);
        $submission = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d", $submission_id));
        
        if ($submission) {
            echo '<div class="wrap">';
            echo '<h1>Viper Submission Details</h1>';
            echo '<a href="' . admin_url('tools.php?page=viper-submissions') . '" class="button">← Back to All Submissions</a>';
            echo '<br><br>';
            
            // Status badge
            $status = isset($submission->status) ? $submission->status : 'new';
            $status_colors = array('new' => '#00a32a', 'answered' => '#135e96', 'follow_up' => '#996800');
            $status_color = isset($status_colors[$status]) ? $status_colors[$status] : '#666';
            // Action buttons
            $nonce = wp_create_nonce('viper_action_nonce');
            echo '<div style="margin: 15px 0;">';
            if ($status !== 'answered') {
                echo '<a href="' . admin_url('tools.php?page=viper-submissions&viper_action=mark_answered&submission_id=' . $submission->id . '&_wpnonce=' . $nonce) . '" class="button button-primary">Mark as Answered</a> ';
            }
            if ($status !== 'follow_up') {
                echo '<a href="' . admin_url('tools.php?page=viper-submissions&viper_action=mark_followup&submission_id=' . $submission->id . '&_wpnonce=' . $nonce) . '" class="button">Mark for Follow-up</a> ';
            }
            echo '<a href="' . admin_url('tools.php?page=viper-submissions&viper_action=delete&submission_id=' . $submission->id . '&_wpnonce=' . $nonce) . '" class="button button-link-delete" onclick="return confirm(\'Delete this submission?\')">Delete</a>';
            echo '</div>';
            echo '<div style="background: white; padding: 20px; border: 1px solid #ccc; border-radius: 5px;">';
            echo '<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">';
            echo '<h2>Submission #' . $submission->id . '</h2>';
            echo '<span style="background: ' . $status_color . '; color: white; padding: 5px 12px; border-radius: 3px; font-size: 12px; text-transform: uppercase; font-weight: bold;">' . ucwords(str_replace('_', ' ', $status)) . '</span>';
            echo '</div>';
            
            echo '<p><strong>Date:</strong> ' . $submission->submitted_at . '</p>';
            echo '<p><strong>Email:</strong> <a href="mailto:' . esc_attr($submission->email) . '">' . esc_html($submission->email) . '</a></p>';
            echo '<p><strong>Name:</strong> ' . esc_html($submission->full_name) . '</p>';
            echo '<p><strong>Company:</strong> ' . esc_html($submission->company) . '</p>';
            echo '<p><strong>Source:</strong> ' . esc_html($submission->source) . '</p>';
            echo '<p><strong>IP Address:</strong> ' . esc_html($submission->ip_address) . '</p>';
            echo '<h3>Notes:</h3>';
            echo '<div style="background: #f9f9f9; padding: 15px; border-left: 4px solid #0073aa; white-space: pre-wrap; word-wrap: break-word; word-break: break-word; max-width: 100%; overflow-wrap: break-word;">' . esc_html($submission->notes) . '</div>';
            echo '</div>';
            
            echo '</div>';
            return;
        }
    }
    
    // Filter by status
    $current_status = isset($_GET['status']) ? sanitize_text_field($_GET['status']) : 'all';
    $where_clause = '';
    if ($current_status !== 'all') {
        $where_clause = $wpdb->prepare(' WHERE status = %s', $current_status);
    }
    
    // Get counts for each status
    $status_counts = $wpdb->get_results("SELECT status, COUNT(*) as count FROM $table_name GROUP BY status");
    $total_count = $wpdb->get_var("SELECT COUNT(*) FROM $table_name");
    
    // Show all submissions
    $submissions = $wpdb->get_results("SELECT * FROM $table_name $where_clause ORDER BY submitted_at DESC LIMIT 100");
    
    echo '<div class="wrap">';
    echo '<h1>Viper Demo Submissions</h1>';
    
    // Status filter tabs
    echo '<ul class="subsubsub">';
    echo '<li><a href="' . admin_url('tools.php?page=viper-submissions') . '"' . ($current_status === 'all' ? ' class="current"' : '') . '>All (' . $total_count . ')</a> |</li>';
    foreach ($status_counts as $status) {
        $status_name = ucwords(str_replace('_', ' ', $status->status));
        echo '<li><a href="' . admin_url('tools.php?page=viper-submissions&status=' . $status->status) . '"' . ($current_status === $status->status ? ' class="current"' : '') . '>' . $status_name . ' (' . $status->count . ')</a>' . ($status !== end($status_counts) ? ' |' : '') . '</li>';
    }
    echo '</ul>';
    
    if (empty($submissions)) {
        echo '<p>No submissions found.</p>';
    } else {
        echo '<form method="post" action="">';
        wp_nonce_field('bulk_viper_nonce');

        // Bulk actions
        echo '<div class="tablenav top">';
        echo '<div class="alignleft actions bulkactions">';
        echo '<select name="bulk_action">';
        echo '<option value="">Bulk Actions</option>';
        echo '<option value="bulk_answered">Mark as Answered</option>';
        echo '<option value="bulk_followup">Mark for Follow-up</option>';
        echo '<option value="bulk_delete">Delete</option>';
        echo '</select>';
        echo '<input type="submit" class="button" value="Apply" onclick="return confirm(\'Apply this action to selected submissions?\')">';
        echo '</div>';
        echo '</div>';

        echo '<table class="wp-list-table widefat fixed striped">';
        echo '<thead><tr>';
        echo '<td class="manage-column column-cb check-column"><input type="checkbox" id="cb-select-all-1"></td>';
        echo '<th style="width: 120px;">Date</th>';
        echo '<th style="width: 120px;">Status</th>';
        echo '<th>Name</th>';
        echo '<th>Email</th>';
        echo '<th>Company</th>';
        echo '<th>Source</th>';
        echo '<th>Notes Preview</th>';
        echo '<th style="width: 120px;">Actions</th>';
        echo '</tr></thead>';
        echo '<tbody>';

        foreach ($submissions as $submission) {
            $status = isset($submission->status) ? $submission->status : 'new';
            
            // Determine row class based on status
            $row_class = '';
            if ($status === 'new') {
                $row_class = 'style="background-color: #f0f8f0; border-left: 3px solid #00a32a;"';
            } elseif ($status === 'follow_up') {
                $row_class = 'style="background-color: #fff8e5; border-left: 3px solid #996800;"';
            }
            
            echo '<tr ' . $row_class . '>';
            echo '<th scope="row" class="check-column"><input type="checkbox" name="submission_ids[]" value="' . $submission->id . '"></th>';
            echo '<td>' . esc_html(date('M j, Y', strtotime($submission->submitted_at))) . '</td>';
            
            // Status badge
            $status_colors = array('new' => '#00a32a', 'answered' => '#135e96', 'follow_up' => '#996800');
            $status_color = isset($status_colors[$status]) ? $status_colors[$status] : '#666';
            echo '<td><span style="background: ' . $status_color . '; color: white; padding: 2px 8px; border-radius: 3px; font-size: 11px; text-transform: uppercase; font-weight: bold;">' . ucwords(str_replace('_', ' ', $status)) . '</span></td>';
            
            echo '<td>' . esc_html($submission->full_name) . '</td>';
            echo '<td><a href="mailto:' . esc_attr($submission->email) . '">' . esc_html($submission->email) . '</a></td>';
            echo '<td>' . esc_html($submission->company) . '</td>';
            echo '<td>' . esc_html($submission->source) . '</td>';
            $notes_preview = strlen($submission->notes) > 80 ? substr($submission->notes, 0, 80) . '...' : $submission->notes;
            echo '<td style="max-width: 200px; word-wrap: break-word; overflow: hidden;">' . esc_html($notes_preview) . '</td>';
            
            echo '<td>';
            echo '<a href="' . admin_url('tools.php?page=viper-submissions&view=' . $submission->id) . '" class="button-small">View</a>';
            echo '</td>';
            echo '</tr>';
        }

        echo '</tbody></table>';
        echo '</form>';

        // Add JavaScript for select all checkbox
        echo '<script>
        document.getElementById("cb-select-all-1").addEventListener("change", function() {
            var checkboxes = document.querySelectorAll("input[name=\'submission_ids[]\']");
            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = this.checked;
            }
        });
        </script>';
    }
    
    echo '</div>';
}

/**
 * Handle submission actions safely
 */
/**
 * Handle submission actions safely
 */
/**
 * Handle submission actions safely
 */
function gss_handle_viper_submission_actions_safe() {
    // Only run on the admin viper submissions page
    if (!is_admin() || !isset($_GET['page']) || $_GET['page'] !== 'viper-submissions') {
        return;
    }
    
    if (!current_user_can('manage_options')) {
        return;
    }
    
    global $wpdb;
    $table_name = $wpdb->prefix . 'viper_submissions';
    
    // Handle individual actions (GET requests)
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['viper_action']) && isset($_GET['submission_id']) && wp_verify_nonce($_GET['_wpnonce'], 'viper_action_nonce')) {
        $submission_id = intval($_GET['submission_id']);
        $action = sanitize_text_field($_GET['viper_action']);
        
        switch ($action) {
            case 'delete':
                $wpdb->delete($table_name, array('id' => $submission_id), array('%d'));
                wp_redirect(admin_url('tools.php?page=viper-submissions&message=deleted'));
                exit;
                
            case 'mark_answered':
                $wpdb->update($table_name, array('status' => 'answered'), array('id' => $submission_id), array('%s'), array('%d'));
                wp_redirect(admin_url('tools.php?page=viper-submissions&message=answered'));
                exit;
                
            case 'mark_followup':
                $wpdb->update($table_name, array('status' => 'follow_up'), array('id' => $submission_id), array('%s'), array('%d'));
                wp_redirect(admin_url('tools.php?page=viper-submissions&message=followup'));
                exit;
        }
    }
    
    // Handle bulk actions (POST requests)
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['bulk_action']) && isset($_POST['submission_ids']) && wp_verify_nonce($_POST['_wpnonce'], 'bulk_viper_nonce')) {
        $action = sanitize_text_field($_POST['bulk_action']);
        $submission_ids = array_map('intval', $_POST['submission_ids']);
        
        if (!empty($submission_ids)) {
            $ids_placeholder = implode(',', array_fill(0, count($submission_ids), '%d'));
            
            switch ($action) {
                case 'bulk_delete':
                    $wpdb->query($wpdb->prepare("DELETE FROM $table_name WHERE id IN ($ids_placeholder)", $submission_ids));
                    wp_redirect(admin_url('tools.php?page=viper-submissions&message=bulk_deleted'));
                    exit;
                    
                case 'bulk_answered':
                    $wpdb->query($wpdb->prepare("UPDATE $table_name SET status = 'answered' WHERE id IN ($ids_placeholder)", $submission_ids));
                    wp_redirect(admin_url('tools.php?page=viper-submissions&message=bulk_answered'));
                    exit;
                    
                case 'bulk_followup':
                    $wpdb->query($wpdb->prepare("UPDATE $table_name SET status = 'follow_up' WHERE id IN ($ids_placeholder)", $submission_ids));
                    wp_redirect(admin_url('tools.php?page=viper-submissions&message=bulk_followup'));
                    exit;
            }
        }
    }
}
add_action('admin_init', 'gss_handle_viper_submission_actions_safe');

// Create table on theme activation
add_action('after_setup_theme', 'gss_create_viper_submissions_table');

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
/**
 * Enhanced create submissions table with status
 */
function gss_create_enhanced_viper_submissions_table() {
    global $wpdb;
    
    $table_name = $wpdb->prefix . 'viper_submissions';
    
    // Add status column if it doesn't exist
    $columns = $wpdb->get_results("SHOW COLUMNS FROM $table_name LIKE 'status'");
    if (empty($columns)) {
        $wpdb->query("ALTER TABLE $table_name ADD COLUMN status varchar(20) DEFAULT 'new' AFTER ip_address");
        $wpdb->query("ALTER TABLE $table_name ADD COLUMN updated_at datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP AFTER status");
    }
}
add_action('admin_init', 'gss_create_enhanced_viper_submissions_table');

/**
 * Enhanced store submission with status
 */
function gss_store_viper_submission_with_status($data) {
    global $wpdb;
    
    $table_name = $wpdb->prefix . 'viper_submissions';
    
    // Insert the submission
    $result = $wpdb->insert(
        $table_name,
        array(
            'email' => $data['email'],
            'full_name' => $data['full_name'],
            'company' => $data['company'],
            'notes' => $data['notes'],
            'source' => $data['source'],
            'ip_address' => $data['ip_address'],
            'submitted_at' => $data['submitted_at']
        ),
        array('%s', '%s', '%s', '%s', '%s', '%s', '%s')
    );
    
    // Try to set status if column exists
    if ($result && $wpdb->insert_id) {
        $wpdb->query($wpdb->prepare("UPDATE $table_name SET status = 'new' WHERE id = %d", $wpdb->insert_id));
    }
}