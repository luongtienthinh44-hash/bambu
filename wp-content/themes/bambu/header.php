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
            <div class="layout-stack">
                <div class="brand-lockup">
                    <a class="brand-name" href="<?php echo esc_url(home_url('/')); ?>">Bambu</a>
                    <span class="layout-stack">
                        <span class="layout-stack">
                            <span class="brand-suffix">UP</span>
                        </span>
                    </span>
                </div>
                <div class="brand-tagline-spacing">
                    <div class="brand-tagline-wrapper">
                        <span class="brand-tagline-text">CONNECT TO INNOVATE</span>
                    </div>
                </div>
            </div>

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
                    <span class="language-code">EN</span>
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
