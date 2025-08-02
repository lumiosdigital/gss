<?php
/**
 * The header for Global Satellite Solutions theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'gss' ); ?></a>

    <header id="masthead" class="site-header">
        <div class="header-container">
            
            <!-- Logo/Brand - Left -->
            <div class="site-branding">
                <?php if ( has_custom_logo() ) : ?>
                    <div class="site-logo">
                        <?php the_custom_logo(); ?>
                    </div>
                <?php else : ?>
                    <div class="site-title-wrapper">
                        <h1 class="site-title">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <span class="logo-icon">🛰️</span>
                                Global Satellite Solutions
                            </a>
                        </h1>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Primary Navigation - Center -->
            <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'gss' ); ?>">
                
                <!-- Mobile Menu Toggle -->
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="menu-toggle-text"><?php esc_html_e( 'Menu', 'gss' ); ?></span>
                    <span class="menu-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- Navigation Menu -->
                <div class="primary-menu-wrapper">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'menu_id'        => 'primary-menu',
                            'menu_class'     => 'primary-menu',
                            'container'      => false,
                            'fallback_cb'    => 'gss_fallback_menu',
                        )
                    );
                    ?>
                    
                    <!-- Mobile CTA Button - Always Present -->
                    <div class="mobile-cta">
                        <a href="https://calendly.com/gsandridge-satqoe" target="_blank" rel="noopener noreferrer" class="cta-button">
                            Schedule a Discovery Call
                        </a>
                    </div>
                </div>

            </nav><!-- #site-navigation -->

            <!-- CTA Button - Right -->
            <div class="header-cta">
                <a href="https://calendly.com/gsandridge-satqoe" target="_blank" rel="noopener noreferrer" class="cta-button">
                    Schedule a Discovery Call
                </a>
            </div>
            
        </div><!-- .header-container -->
    </header><!-- #masthead -->