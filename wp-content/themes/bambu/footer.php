<?php

/**
 * Bambu theme footer.
 *
 * @package Bambu
 */
if (! defined('ABSPATH')) {
    exit;
}
?>
<footer class="site-footer">
    <div class="footer-content">
        <a class="footer-brand-row footer-brand-home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'BambuUP home', 'bambu' ); ?>">
            <div class="footer-brand-lockup">
                <span class="brand-name">Bambu</span>
                <span class="brand-suffix">UP</span>
            </div>
            <div class="footer-tagline-text">CONNECT TO INNOVATE</div>
        </a>

        <div class="footer-separator" aria-hidden="true"></div>

        <div class="footer-columns">
            <div class="footer-location-column">
                <div class="footer-location-block">
                    <div class="footer-location-title"><?php esc_html_e( 'Hanoi - Vietnam', 'bambu' ); ?></div>
                    <div class="footer-location-details"><?php esc_html_e( 'National Innovation Center (NIC)', 'bambu' ); ?><br><?php esc_html_e( '01 Nguyen Huu An Street, Cau Giay Ward.', 'bambu' ); ?></div>
                </div>
                <div class="footer-location-block">
                    <div class="footer-location-title"><?php esc_html_e( 'Ho Chi Minh City - Vietnam', 'bambu' ); ?></div>
                    <div class="footer-location-details"><?php esc_html_e( 'Saigon Innovation Hub (SIHUB)', 'bambu' ); ?><br><?php esc_html_e( '7th Floor, 123 Truong Dinh Street, Xuan Hoa Ward', 'bambu' ); ?></div>
                </div>
                <div class="footer-location-details">
                    <a href="mailto:info@bambuup.com"><?php esc_html_e( '[E] info@bambuup.com', 'bambu' ); ?></a>
                </div>
                <div class="footer-location-details"><?php esc_html_e( 'Tax Code: 0109260278', 'bambu' ); ?></div>
                <div class="footer-socials" aria-label="<?php esc_attr_e( 'Social media', 'bambu' ); ?>">
                    <span class="footer-social-icon" role="img" aria-label="<?php esc_attr_e( 'Facebook', 'bambu' ); ?>">f</span>
                    <span class="footer-social-icon footer-social-icon-x" role="img" aria-label="<?php esc_attr_e( 'X', 'bambu' ); ?>">X</span>
                    <span class="footer-social-icon footer-social-icon-linkedin" role="img" aria-label="<?php esc_attr_e( 'LinkedIn', 'bambu' ); ?>">in</span>
                    <span class="footer-social-icon footer-social-icon-youtube" role="img" aria-label="<?php esc_attr_e( 'YouTube', 'bambu' ); ?>">
                        <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                            <path d="M15.667 1.875a2.001 2.001 0 0 0-1.407-1.415C13.019.125 8 .125 8 .125s-5.019 0-6.26.335A2.001 2.001 0 0 0 .333 1.875C0 3.12 0 6 0 6s0 2.88.333 4.125a2.001 2.001 0 0 0 1.407 1.415C2.981 11.875 8 11.875 8 11.875s5.019 0 6.26-.335a2.001 2.001 0 0 0 1.407-1.415C16 8.88 16 6 16 6s0-2.88-.333-4.125Z" fill="white"/>
                            <path d="m6.375 8.625 4.125-2.625-4.125-2.625v5.25Z" fill="#2E9F70"/>
                        </svg>
                    </span>
                </div>
            </div>

            <div class="footer-innovation-column">
                <div class="footer-column-title"><?php esc_html_e( 'INNOVATION', 'bambu' ); ?></div>
                <div class="footer-link-list">
                    <div class="footer-link-label"><?php esc_html_e( 'Innovation Needs', 'bambu' ); ?></div>
                    <div class="footer-link-label"><?php esc_html_e( 'Innovation Offers', 'bambu' ); ?></div>
                    <div class="footer-link-label"><?php esc_html_e( 'Challenges Hubs', 'bambu' ); ?></div>
                    <div class="footer-link-label"><?php esc_html_e( 'Ecosystem Map', 'bambu' ); ?></div>
                    <div class="footer-link-label"><?php _e( 'Pricing &amp; Plans', 'bambu' ); ?></div>
                    <div class="footer-link-label"><?php esc_html_e( 'Enterprise PoC', 'bambu' ); ?></div>
                </div>
            </div>

            <div class="footer-access-column">
                <div class="footer-column-title"><?php esc_html_e( 'ACCESS', 'bambu' ); ?></div>
                <div class="footer-link-list">
                    <div class="footer-link-label"><?php esc_html_e( 'For Corporations', 'bambu' ); ?></div>
                    <div class="footer-link-label"><?php esc_html_e( 'For Tech Startups', 'bambu' ); ?></div>
                    <div class="footer-link-label"><?php _e( 'For Investors &amp; VCs', 'bambu' ); ?></div>
                    <div class="footer-link-label"><?php _e( 'For Government &amp; Hubs', 'bambu' ); ?></div>
                    <div class="footer-link-label"><?php esc_html_e( 'Partner Directory', 'bambu' ); ?></div>
                </div>
            </div>

            <div class="footer-resources-column">
                <div class="footer-column-title"><?php _e( 'INSIGHTS &amp; RESOURCES', 'bambu' ); ?></div>
                <div class="footer-link-list">
                    <div class="footer-link-label"><?php esc_html_e( 'Vietnam Open Innovation Outlook', 'bambu' ); ?></div>
                    <div class="footer-link-label"><?php _e( 'Reports &amp; Whitepapers', 'bambu' ); ?></div>
                    <div class="footer-link-label"><?php esc_html_e( 'Case Studies', 'bambu' ); ?></div>
                    <div class="footer-link-label"><?php esc_html_e( 'Tech Data Room', 'bambu' ); ?></div>
                </div>
            </div>

            <div class="footer-company-column">
                <div class="footer-column-title"><?php esc_html_e( 'COMPANY', 'bambu' ); ?></div>
                <div class="footer-link-list">
                    <div class="footer-link-label"><?php esc_html_e( 'About BambuUP', 'bambu' ); ?></div>
                    <div class="footer-link-label"><?php esc_html_e( 'Careers', 'bambu' ); ?></div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p class="footer-legal-text">&copy; <?php echo esc_html(gmdate('Y')); ?> <?php esc_html_e( 'BambuUP. All rights reserved. Empowering Asia\'s Open Innovation Ecosystem.', 'bambu' ); ?></p>
            <div class="footer-legal-links">
                <a class="footer-legal-link" href="#"><?php esc_html_e( 'Privacy Policy', 'bambu' ); ?></a>
                <span aria-hidden="true">|</span>
                <a class="footer-legal-link" href="#"><?php esc_html_e( 'Terms of Service', 'bambu' ); ?></a>
                <span aria-hidden="true">|</span>
                <a class="footer-legal-link" href="#"><?php esc_html_e( 'Cookie Settings', 'bambu' ); ?></a>
                <span aria-hidden="true">|</span>
                <a class="footer-legal-link" href="#"><?php esc_html_e( 'Security Statement', 'bambu' ); ?></a>
            </div>
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>
