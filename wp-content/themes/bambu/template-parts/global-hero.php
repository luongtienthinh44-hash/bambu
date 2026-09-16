<?php
/**
 * Shared hero section.
 *
 * @package Bambu
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$args = isset( $args ) && is_array( $args ) ? $args : array();
$page_key = isset( $args['page_key'] ) ? $args['page_key'] : '';
$fallback = isset( $args['fallback'] ) && is_array( $args['fallback'] ) ? $args['fallback'] : array();
$hero = bambu_get_global_hero( $page_key, $fallback );
?>
<section class="hero">
    <div class="hero-decor"></div>
    <div class="hero-inner">
        <div class="breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <span class="breadcrumb-sep">/</span>
            <span class="breadcrumb-cur"><?php echo esc_html( $hero['breadcrumb'] ); ?></span>
        </div>
        <h1 class="hero-title">
            <?php
            $title_parts = preg_split( '/\s+/', trim( (string) $hero['title'] ), 2 );
            if ( 'services' === $page_key && 2 === count( $title_parts ) ) :
                ?>
                <span class="hero-title-prefix"><?php echo esc_html( $title_parts[0] ); ?></span>
                <span class="hero-title-accent"><?php echo esc_html( $title_parts[1] ); ?></span>
            <?php else : ?>
                <?php echo esc_html( $hero['title'] ); ?>
            <?php endif; ?>
        </h1>
        <p class="hero-sub"><?php echo nl2br( esc_html( $hero['description'] ) ); ?></p>
        <?php if ( $hero['show_ctas'] && ( $hero['cta_one_text'] || $hero['cta_two_text'] ) ) : ?>
            <div class="hero-ctas">
                <?php if ( $hero['cta_one_text'] && $hero['cta_one_url'] ) : ?>
                    <a href="<?php echo esc_url( $hero['cta_one_url'] ); ?>" class="btn-grad-pill">
                        <?php echo esc_html( $hero['cta_one_text'] ); ?>
                        <?php if ( 'services' === $page_key ) : ?>
                            <img class="external-arrow-icon" src="<?php echo esc_url( bambu_get_media_asset_url( 'arrow-up-right.svg' ) ); ?>" alt="" aria-hidden="true">
                        <?php else : ?>
                            <span style="font-size:16px;">↗</span>
                        <?php endif; ?>
                    </a>
                <?php endif; ?>
                <?php if ( $hero['cta_two_text'] && $hero['cta_two_url'] ) : ?>
                    <a href="<?php echo esc_url( $hero['cta_two_url'] ); ?>" class="btn-outline-pill">
                        <?php echo esc_html( $hero['cta_two_text'] ); ?>
                        <?php if ( 'services' === $page_key ) : ?>
                            <img class="external-arrow-icon" src="<?php echo esc_url( bambu_get_media_asset_url( 'arrow-up-right.svg' ) ); ?>" alt="" aria-hidden="true">
                        <?php else : ?>
                            <span class="btn-arrow">↗</span>
                        <?php endif; ?>
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
