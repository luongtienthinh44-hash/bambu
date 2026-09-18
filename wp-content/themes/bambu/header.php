<?php

/**
 * Bambu theme header.
 *
 * @package Bambu
 */
if (! defined('ABSPATH')) {
    exit;
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class('bambu-site'); ?>>
    <?php wp_body_open(); ?>

    <div class="bambu-page">
        <header class="site-header">
            <a class="layout-stack brand-home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'BambuUP home', 'bambu' ); ?>">
                <div class="brand-lockup">
                    <span class="brand-name">Bambu</span>
                    <span class="layout-stack">
                        <span class="layout-stack">
                            <span class="brand-suffix">UP</span>
                        </span>
                    </span>
                </div>
                <div class="brand-tagline-spacing">
                    <div class="brand-tagline-wrapper">
                        <span class="brand-tagline-text"><?php esc_html_e( 'CONNECT TO INNOVATE', 'bambu' ); ?></span>
                    </div>
                </div>
            </a>

            <nav id="primary-navigation" class="primary-navigation-wrapper" aria-label="<?php esc_attr_e('Primary navigation', 'bambu'); ?>">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'primary-navigation',
                        'fallback_cb'    => 'bambu_primary_menu_fallback',
                    )
                );
                ?>
            </nav>

            <div class="mega-menu-panel mega-menu-panel-about" aria-hidden="true">
                <div class="mega-menu-inner">
                    <div class="mega-menu-intro">
                        <div class="mega-menu-kicker"><?php esc_html_e( 'ABOUT BAMBUUP', 'bambu' ); ?></div>
                        <h2><?php esc_html_e( 'Built to connect innovation', 'bambu' ); ?><br><?php esc_html_e( 'with real opportunity', 'bambu' ); ?></h2>
                        <p><?php esc_html_e( 'Learn about our story, ecosystem and the people building meaningful connections between innovation seekers and providers', 'bambu' ); ?></p>
                        <a class="mega-menu-intro-link" href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>"><?php esc_html_e( 'Explore BambuUP', 'bambu' ); ?> <span aria-hidden="true">→</span></a>
                    </div>

                    <div class="mega-menu-links">
                        <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">
                            <span><strong><?php esc_html_e( 'About BambuUP', 'bambu' ); ?></strong><small><?php esc_html_e( 'Our platform and purpose', 'bambu' ); ?></small></span>
                            <span class="mega-menu-arrow" aria-hidden="true">↗</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/about-us/#our-story' ) ); ?>">
                            <span><strong><?php esc_html_e( 'Our Story', 'bambu' ); ?></strong><small><?php esc_html_e( 'Why BambuUP was created', 'bambu' ); ?></small></span>
                            <span class="mega-menu-arrow" aria-hidden="true">↗</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/about-us/#ecosystem' ) ); ?>">
                            <span><strong><?php esc_html_e( 'Our Partners', 'bambu' ); ?></strong><small><?php esc_html_e( 'Organisations growing with us', 'bambu' ); ?></small></span>
                            <span class="mega-menu-arrow" aria-hidden="true">↗</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/our-people/' ) ); ?>">
                            <span><strong><?php esc_html_e( 'Our People', 'bambu' ); ?></strong><small><?php esc_html_e( 'The team behind the platform', 'bambu' ); ?></small></span>
                            <span class="mega-menu-arrow" aria-hidden="true">↗</span>
                        </a>
                    </div>

                    <a class="mega-menu-feature" href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">
                        <img src="<?php echo esc_url( bambu_get_media_asset_url( 'about/2641a.png' ) ); ?>" alt="<?php esc_attr_e( 'BambuUP team collaboration', 'bambu' ); ?>">
                        <strong><?php esc_html_e( 'One platform connecting startups, corporations, research institutions, regions and investors', 'bambu' ); ?></strong>
                        <span><?php esc_html_e( 'Discover the ecosystem', 'bambu' ); ?> <span aria-hidden="true">↗</span></span>
                    </a>
                </div>
            </div>

            <div class="mega-menu-panel mega-menu-panel-innovation" aria-hidden="true">
                <div class="mega-menu-inner mega-menu-inner-innovation">
                    <div class="mega-menu-innovation-heading">
                        <h2><?php esc_html_e( 'One Platform', 'bambu' ); ?><br><?php esc_html_e( 'Multiple paths to innovation', 'bambu' ); ?></h2>
                    </div>

                    <div class="mega-menu-innovation-columns">
                        <div class="mega-menu-innovation-column">
                            <strong><?php esc_html_e( 'Startups', 'bambu' ); ?></strong>
                            <small><?php esc_html_e( 'Find demand, programmes and routes to market', 'bambu' ); ?></small>
                            <a href="<?php echo esc_url( home_url( '/challenge-hub/' ) ); ?>"><?php esc_html_e( 'Challenge Hub', 'bambu' ); ?></a>
                            <a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>"><?php esc_html_e( 'Accelerator Programmes', 'bambu' ); ?></a>
                            <a href="<?php echo esc_url( home_url( '/innovation-intelligence/' ) ); ?>"><?php esc_html_e( 'Innovation Offer', 'bambu' ); ?></a>
                            <a class="mega-menu-column-cta" href="<?php echo esc_url( home_url( '/challenge-hub/' ) ); ?>"><?php esc_html_e( 'Visit Hub', 'bambu' ); ?> <span aria-hidden="true">↗</span></a>
                        </div>
                        <div class="mega-menu-innovation-column">
                            <strong><?php esc_html_e( 'Corporations', 'bambu' ); ?></strong>
                            <small><?php esc_html_e( 'Source solutions and turn priorities into action', 'bambu' ); ?></small>
                            <a href="<?php echo esc_url( home_url( '/challenge-hub/' ) ); ?>"><?php esc_html_e( 'Challenge Hub', 'bambu' ); ?></a>
                            <a href="<?php echo esc_url( home_url( '/innovation-intelligence/' ) ); ?>"><?php esc_html_e( 'Innovation Marketplace', 'bambu' ); ?></a>
                            <a href="<?php echo esc_url( home_url( '/data-report/' ) ); ?>"><?php esc_html_e( 'Industry Reports', 'bambu' ); ?></a>
                            <a class="mega-menu-column-cta" href="<?php echo esc_url( home_url( '/challenge-hub/' ) ); ?>"><?php esc_html_e( 'Visit Hub', 'bambu' ); ?> <span aria-hidden="true">↗</span></a>
                        </div>
                        <div class="mega-menu-innovation-column">
                            <strong><?php esc_html_e( 'Research Institutions', 'bambu' ); ?></strong>
                            <small><?php esc_html_e( 'Connect research with commercial opportunity', 'bambu' ); ?></small>
                            <a href="<?php echo esc_url( home_url( '/innovation-intelligence/' ) ); ?>"><?php esc_html_e( 'IP / Research Hub', 'bambu' ); ?></a>
                            <a href="<?php echo esc_url( home_url( '/innovation-intelligence/' ) ); ?>"><?php esc_html_e( 'Innovation Offer', 'bambu' ); ?></a>
                            <a href="<?php echo esc_url( home_url( '/data-report/' ) ); ?>"><?php _e( 'Reports &amp; Publications', 'bambu' ); ?></a>
                            <a class="mega-menu-column-cta" href="<?php echo esc_url( home_url( '/innovation-intelligence/' ) ); ?>"><?php esc_html_e( 'Visit Hub', 'bambu' ); ?> <span aria-hidden="true">↗</span></a>
                        </div>
                        <div class="mega-menu-innovation-column">
                            <strong><?php _e( 'Provinces &amp; Cities', 'bambu' ); ?></strong>
                            <small><?php esc_html_e( 'Build visible, connected regional ecosystems', 'bambu' ); ?></small>
                            <a href="<?php echo esc_url( home_url( '/challenge-hub/' ) ); ?>"><?php esc_html_e( 'Challenge Hub', 'bambu' ); ?></a>
                            <a href="<?php echo esc_url( home_url( '/innovation-intelligence/' ) ); ?>"><?php esc_html_e( 'Innovation Ecosystem', 'bambu' ); ?></a>
                            <a href="<?php echo esc_url( home_url( '/data-report/' ) ); ?>"><?php _e( 'Reports &amp; Publications', 'bambu' ); ?></a>
                            <a class="mega-menu-column-cta" href="<?php echo esc_url( home_url( '/innovation-intelligence/' ) ); ?>"><?php esc_html_e( 'Visit Hub', 'bambu' ); ?> <span aria-hidden="true">↗</span></a>
                        </div>
                        <div class="mega-menu-innovation-column">
                            <strong><?php esc_html_e( 'Investment Funds', 'bambu' ); ?></strong>
                            <small><?php esc_html_e( 'Discover ventures and support innovation programmes', 'bambu' ); ?></small>
                            <a href="<?php echo esc_url( home_url( '/innovation-intelligence/' ) ); ?>"><?php esc_html_e( 'Startups Listing', 'bambu' ); ?></a>
                            <a href="<?php echo esc_url( home_url( '/data-report/' ) ); ?>"><?php esc_html_e( 'Data Room', 'bambu' ); ?></a>
                            <a href="<?php echo esc_url( home_url( '/challenge-hub/' ) ); ?>"><?php esc_html_e( 'Challenge Hub', 'bambu' ); ?></a>
                            <a class="mega-menu-column-cta" href="<?php echo esc_url( home_url( '/innovation-intelligence/' ) ); ?>"><?php esc_html_e( 'Visit Hub', 'bambu' ); ?> <span aria-hidden="true">↗</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mega-menu-panel mega-menu-panel-services" aria-hidden="true">
                <div class="mega-menu-inner mega-menu-inner-services">
                    <div class="mega-menu-intro mega-menu-services-intro">
                        <div class="mega-menu-kicker"><?php esc_html_e( 'OUR SERVICES', 'bambu' ); ?></div>
                        <h2><?php esc_html_e( 'Connecting Innovation', 'bambu' ); ?><br><?php esc_html_e( 'Creating Impact', 'bambu' ); ?></h2>
                        <p><?php esc_html_e( 'Each engagement is configured around your priorities, internal readiness and desired outcomes—while following a clear path towards action', 'bambu' ); ?></p>
                        <a class="mega-menu-intro-link" href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>"><?php esc_html_e( 'Explore all services', 'bambu' ); ?> <span aria-hidden="true">→</span></a>
                    </div>

                    <div class="mega-menu-links mega-menu-services-links">
                        <div class="mega-menu-services-group-label"><?php esc_html_e( 'CORE SERVICES', 'bambu' ); ?></div>
                        <a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>">
                            <span><strong><?php esc_html_e( 'Innovation-as-a-Service', 'bambu' ); ?></strong><small><?php esc_html_e( 'Build a repeatable innovation process and execution roadmap for long-term growth', 'bambu' ); ?></small></span>
                            <span class="mega-menu-arrow" aria-hidden="true">↗</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>">
                            <span><strong><?php esc_html_e( 'Accelerator-as-a-Service', 'bambu' ); ?></strong><small><?php esc_html_e( 'Activate ecosystems and scale high-potential ventures with targeted support', 'bambu' ); ?></small></span>
                            <span class="mega-menu-arrow" aria-hidden="true">↗</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>">
                            <span><strong><?php esc_html_e( 'Investment Innovation-as-a-Service', 'bambu' ); ?></strong><small><?php esc_html_e( 'Connect capital with strategic growth opportunities and ecosystem partners', 'bambu' ); ?></small></span>
                            <span class="mega-menu-arrow" aria-hidden="true">↗</span>
                        </a>
                        <div class="mega-menu-services-group-label mega-menu-services-work-label"><?php esc_html_e( 'WORK WITH US', 'bambu' ); ?></div>
                        <a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>">
                            <span><strong><?php _e( 'Programmes &amp; Packages', 'bambu' ); ?></strong><small><?php esc_html_e( 'Configure a service around your objectives', 'bambu' ); ?></small></span>
                            <span class="mega-menu-arrow" aria-hidden="true">↗</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">
                            <span><strong><?php esc_html_e( 'Contact form', 'bambu' ); ?></strong><small><?php esc_html_e( 'Discuss your innovation priorities', 'bambu' ); ?></small></span>
                            <span class="mega-menu-arrow" aria-hidden="true">↗</span>
                        </a>
                    </div>

                    <a class="mega-menu-feature mega-menu-service-feature" href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>">
                        <img src="<?php echo esc_url( bambu_get_media_asset_url( 'about/2641a.png' ) ); ?>" alt="<?php esc_attr_e( 'Innovation as a service', 'bambu' ); ?>">
                        <strong><?php esc_html_e( 'Turn strategic challenges into qualified solutions, validated pilots and scalable outcomes', 'bambu' ); ?></strong>
                        <span><?php esc_html_e( 'Innovation-as-a-Service', 'bambu' ); ?> <span aria-hidden="true">↗</span></span>
                    </a>
                </div>
            </div>

            <div class="mega-menu-panel mega-menu-panel-data-report" aria-hidden="true">
                <div class="mega-menu-inner mega-menu-inner-data-report">
                    <div class="mega-menu-intro mega-menu-data-intro">
                        <h2><?php esc_html_e( 'The intelligence behind your', 'bambu' ); ?><br><?php esc_html_e( 'next move', 'bambu' ); ?></h2>
                        <a class="mega-menu-intro-link" href="<?php echo esc_url( home_url( '/data-report/' ) ); ?>"><?php _e( 'Explore Data &amp; Report', 'bambu' ); ?> <span aria-hidden="true">→</span></a>
                    </div>

                    <div class="mega-menu-links mega-menu-data-links">
                        <a href="<?php echo esc_url( home_url( '/data-report/' ) ); ?>">
                            <span><strong><?php esc_html_e( 'Case Studies', 'bambu' ); ?></strong><small><?php esc_html_e( 'Innovation journeys in practice', 'bambu' ); ?></small></span>
                            <span class="mega-menu-arrow" aria-hidden="true">↗</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/data-report/' ) ); ?>">
                            <span><strong><?php esc_html_e( 'Industry Reports', 'bambu' ); ?></strong><small><?php esc_html_e( 'Sector landscapes and market signals', 'bambu' ); ?></small></span>
                            <span class="mega-menu-arrow" aria-hidden="true">↗</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/data-report/' ) ); ?>">
                            <span><strong><?php esc_html_e( 'Data Room', 'bambu' ); ?></strong><small><?php esc_html_e( 'Structured ecosystem intelligence', 'bambu' ); ?></small></span>
                            <span class="mega-menu-arrow" aria-hidden="true">↗</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/data-report/' ) ); ?>">
                            <span><strong><?php esc_html_e( 'Startups Listing', 'bambu' ); ?></strong><small><?php esc_html_e( 'Discover relevant ventures', 'bambu' ); ?></small></span>
                            <span class="mega-menu-arrow" aria-hidden="true">↗</span>
                        </a>
                    </div>

                    <a class="mega-menu-feature mega-menu-data-feature" href="<?php echo esc_url( home_url( '/data-report/' ) ); ?>">
                        <img src="<?php echo esc_url( bambu_get_media_asset_url( 'data-report/e6710.png' ) ); ?>" alt="<?php esc_attr_e( 'Southeast Asia innovation report', 'bambu' ); ?>">
                        <strong><?php esc_html_e( 'Southeast Asia Innovation Landscape 2026', 'bambu' ); ?></strong>
                        <span><?php esc_html_e( 'View featured report', 'bambu' ); ?> <span aria-hidden="true">↗</span></span>
                    </a>
                </div>
            </div>

            <button class="mobile-menu-toggle" type="button" aria-expanded="false" aria-controls="primary-navigation">
                <span></span>
                <span></span>
                <span></span>
                <span class="screen-reader-text"><?php esc_html_e('Toggle menu', 'bambu'); ?></span>
            </button>

            <div class="header-actions">
                <button class="header-search" type="button" aria-label="<?php esc_attr_e( 'Search', 'bambu' ); ?>">
                    <img class="search-icon" src="<?php echo esc_url( bambu_get_media_asset_url( 'search.svg' ) ); ?>" alt="" aria-hidden="true">
                </button>
                <a class="header-contact-link" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>"><?php esc_html_e( 'Contact Us', 'bambu' ); ?></a>
                <button
                    class="button-language"
                    type="button"
                    aria-label="<?php esc_attr_e('Select language', 'bambu'); ?>"
                    aria-haspopup="menu"
                    aria-expanded="false"
                    data-state="closed"
                    id="bambu-language-switcher">
                    <img
                        class="language-icon language-icon-globe"
                        src="<?php echo esc_url( bambu_get_media_asset_url( 'container-3.svg' ) ); ?>"
                        alt=""
                        aria-hidden="true">
                    <span class="language-code"><?php esc_html_e( 'EN', 'bambu' ); ?></span>
                    <img
                        class="language-icon language-icon-chevron"
                        src="<?php echo esc_url( bambu_get_media_asset_url( 'container-5.svg' ) ); ?>"
                        alt=""
                        aria-hidden="true">
                </button>
                <button class="header-notification" type="button" aria-label="<?php esc_attr_e( 'Notifications', 'bambu' ); ?>">
                    <img class="notification-icon" src="<?php echo esc_url( bambu_get_media_asset_url( 'notification.svg' ) ); ?>" alt="" aria-hidden="true">
                    <span class="notification-dot" aria-hidden="true"></span>
                </button>
                <a class="login-button" href="<?php echo esc_url(wp_login_url()); ?>">
                    <span class="login-label"><?php esc_html_e('Sign In', 'bambu'); ?></span>
                </a>
                <a class="signup-button" href="<?php echo esc_url( wp_registration_url() ); ?>">
                    <span class="layout-stack">
                        <span class="signup-label"><?php esc_html_e('Start For Free', 'bambu'); ?></span>
                    </span>
                    <img class="signup-arrow-icon" src="<?php echo esc_url( bambu_get_media_asset_url( 'arrow-right-white.svg' ) ); ?>" alt="" aria-hidden="true">
                </a>
            </div>
        </header>
