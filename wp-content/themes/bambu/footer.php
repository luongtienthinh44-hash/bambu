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
        <div class="footer-brand-row">
            <div class="footer-brand-lockup">
                <a class="brand-name" href="<?php echo esc_url(home_url('/')); ?>">Bambu</a>
                <span class="brand-suffix">UP</span>
            </div>
            <div class="footer-tagline-text">CONNECT TO INNOVATE</div>
        </div>

        <div class="footer-separator" aria-hidden="true"></div>

        <div class="footer-columns">
            <div class="footer-location-column">
                <div class="footer-location-block">
                    <div class="footer-location-title">Hanoi - Vietnam</div>
                    <div class="footer-location-details">National Innovation Center (NIC)<br>01 Nguyen Huu An Street, Cau Giay Ward.</div>
                </div>
                <div class="footer-location-block">
                    <div class="footer-location-title">Ho Chi Minh City - Vietnam</div>
                    <div class="footer-location-details">Saigon Innovation Hub (SIHUB)<br>7th Floor, 123 Truong Dinh Street, Xuan Hoa Ward</div>
                </div>
                <div class="footer-location-details">
                    <a href="mailto:info@bambuup.com">[E] info@bambuup.com</a>
                </div>
                <div class="footer-location-details">Tax Code: 0109260278</div>
                <div class="footer-socials" aria-label="Social media">
                    <span class="footer-social-icon" role="img" aria-label="Facebook">f</span>
                    <span class="footer-social-icon footer-social-icon-x" role="img" aria-label="X">X</span>
                    <span class="footer-social-icon footer-social-icon-linkedin" role="img" aria-label="LinkedIn">in</span>
                    <span class="footer-social-icon footer-social-icon-youtube" role="img" aria-label="YouTube">
                        <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                            <path d="M15.667 1.875a2.001 2.001 0 0 0-1.407-1.415C13.019.125 8 .125 8 .125s-5.019 0-6.26.335A2.001 2.001 0 0 0 .333 1.875C0 3.12 0 6 0 6s0 2.88.333 4.125a2.001 2.001 0 0 0 1.407 1.415C2.981 11.875 8 11.875 8 11.875s5.019 0 6.26-.335a2.001 2.001 0 0 0 1.407-1.415C16 8.88 16 6 16 6s0-2.88-.333-4.125Z" fill="white"/>
                            <path d="m6.375 8.625 4.125-2.625-4.125-2.625v5.25Z" fill="#2E9F70"/>
                        </svg>
                    </span>
                </div>
            </div>

            <div class="footer-innovation-column">
                <div class="footer-column-title">INNOVATION</div>
                <div class="footer-link-list">
                    <div class="footer-link-label">Innovation Needs</div>
                    <div class="footer-link-label">Innovation Offers</div>
                    <div class="footer-link-label">Challenges Hubs</div>
                    <div class="footer-link-label">Ecosystem Map</div>
                    <div class="footer-link-label">Pricing &amp; Plans</div>
                    <div class="footer-link-label">Enterprise PoC</div>
                </div>
            </div>

            <div class="footer-access-column">
                <div class="footer-column-title">ACCESS</div>
                <div class="footer-link-list">
                    <div class="footer-link-label">For Corporations</div>
                    <div class="footer-link-label">For Tech Startups</div>
                    <div class="footer-link-label">For Investors &amp; VCs</div>
                    <div class="footer-link-label">For Government &amp; Hubs</div>
                    <div class="footer-link-label">Partner Directory</div>
                </div>
            </div>

            <div class="footer-resources-column">
                <div class="footer-column-title">INSIGHTS &amp; RESOURCES</div>
                <div class="footer-link-list">
                    <div class="footer-link-label">Vietnam Open Innovation Outlook</div>
                    <div class="footer-link-label">Reports &amp; Whitepapers</div>
                    <div class="footer-link-label">Case Studies</div>
                    <div class="footer-link-label">Tech Data Room</div>
                </div>
            </div>

            <div class="footer-company-column">
                <div class="footer-column-title">COMPANY</div>
                <div class="footer-link-list">
                    <div class="footer-link-label">About BambuUP</div>
                    <div class="footer-link-label">Careers</div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p class="footer-legal-text">&copy; <?php echo esc_html(gmdate('Y')); ?> BambuUP. All rights reserved. Empowering Asia's Open Innovation Ecosystem.</p>
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>
