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

    // Main JavaScript file
    wp_enqueue_script('gss-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array('jquery'), '1.0.0', true);
    
    // Features parallax JavaScript
    wp_enqueue_script('gss-features-parallax', get_template_directory_uri() . '/assets/js/features-parallax.js', array(), '1.0.0', true);
    
    // Chart animations JavaScript
    wp_enqueue_script('gss-chart-animations', get_template_directory_uri() . '/assets/js/chart-animations.js', array(), '1.0.0', true);
    
    // Strategic Takeaways animations JavaScript
    wp_enqueue_script('gss-strategic-takeaways-animations', get_template_directory_uri() . '/assets/js/strategic-takeaways-animations.js', array(), '1.0.0', true);
    
    // Comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'gss_scripts');

/**
 * Custom template tags for this theme
 */

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