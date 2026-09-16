<?php
/**
 * Shared CTA banner.
 *
 * @package Bambu
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$title       = bambu_get_global_section_option( 'bambu_global_cta_title', 'Start with the right connection.' );
$description = bambu_get_global_section_option( 'bambu_global_cta_description', 'We make innovation easy to access for every business everywhere. The next deal is you.' );
$button_text = bambu_get_global_section_option( 'bambu_global_cta_button_text', 'Contact us' );
$button_url  = bambu_get_global_section_option( 'bambu_global_cta_button_url', home_url( '/contact-us/' ) );
?>
<section class="cta-banner">
    <div class="cta-inner">
        <div class="cta-text">
            <h2 class="cta-title"><?php echo esc_html( $title ); ?></h2>
            <p class="cta-sub"><?php echo nl2br( esc_html( $description ) ); ?></p>
        </div>
        <a class="cta-contact-btn cta-btn" href="<?php echo esc_url( $button_url ); ?>">
            <?php echo esc_html( $button_text ); ?>
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
                <path d="M3 8h10M8 3l5 5-5 5" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
    </div>
</section>
