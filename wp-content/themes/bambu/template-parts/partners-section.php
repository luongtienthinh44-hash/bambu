<?php
/**
 * Shared partners section.
 *
 * @package Bambu
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$partners = bambu_get_global_partners();
?>
<section class="partners-section">
    <div class="partners-section-inner">
        <h2 class="partners-title"><?php echo esc_html( bambu_get_global_section_option( 'bambu_global_partners_title', 'Trusted by Our Partners' ) ); ?></h2>
        <div class="partners-row" aria-label="Partner organizations">
            <?php foreach ( $partners as $partner ) : ?>
                <?php
                $partner_name = isset( $partner['name'] ) ? $partner['name'] : '';
                $partner_url  = isset( $partner['url'] ) ? $partner['url'] : '';
                $partner_logo = isset( $partner['logo'] ) ? $partner['logo'] : array();
                $partner_tag  = $partner_url ? 'a' : 'span';
                ?>
                <<?php echo esc_html( $partner_tag ); ?> class="partner-name"<?php if ( $partner_url ) : ?> href="<?php echo esc_url( $partner_url ); ?>"<?php endif; ?>>
                    <?php if ( is_array( $partner_logo ) && ! empty( $partner_logo['url'] ) ) : ?>
                        <img src="<?php echo esc_url( $partner_logo['url'] ); ?>" alt="<?php echo esc_attr( $partner_name ); ?>" class="partner-logo-image" />
                    <?php else : ?>
                        <?php echo esc_html( $partner_name ); ?>
                    <?php endif; ?>
                </<?php echo esc_html( $partner_tag ); ?>>
            <?php endforeach; ?>
        </div>
    </div>
</section>
