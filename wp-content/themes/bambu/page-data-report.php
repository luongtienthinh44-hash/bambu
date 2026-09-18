<?php
/**
 * Template Name: Bambu - Data & Report
 * Template Post Type: page
 *
 * @package Bambu
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$asset_uri = get_template_directory_uri() . '/assets/images/data-report/';
$reports   = array(
    array( 'image' => '926fe.png', 'tags' => array( 'Insight', 'Smart Cities', 'Mobility & Physical AI' ), 'title' => 'How to Build a Corporate Innovation Roadmap in 5 Steps' ),
    array( 'image' => '1ed18.png', 'tags' => array( 'Case Studies', 'Mobility & Physical AI' ), 'title' => 'Microbiome & Longevity: Top Startups Rewiring How We Age' ),
    array( 'image' => 'a980a.png', 'tags' => array( 'Insight', 'Smart Cities', 'Mobility & Physical AI' ), 'title' => 'Beyond experimentation: where applied AI creates value' ),
    array( 'image' => 'e6710.png', 'tags' => array( 'Insight', 'Smart Cities', 'Mobility & Physical AI' ), 'title' => "Southeast Asia's next innovation opportunity" ),
    array( 'image' => '52cd9.png', 'tags' => array( 'Case Studies', 'Mobility & Physical AI' ), 'title' => 'Bringing an ecosystem together around a city challenge' ),
    array( 'image' => '16583.png', 'tags' => array( 'Insight', 'Smart Cities', 'Mobility & Physical AI' ), 'title' => 'From a business challenge to a qualified solution pipeline' ),
);

get_header();
?>
<main id="primary" class="site-main innovation-intelligence-page data-report-page">
    <?php
    get_template_part(
        'template-parts/global-hero',
        null,
        array(
            'page_key' => 'data-report',
            'fallback' => array(
                'breadcrumb'  => 'Data & Report',
                'title'       => 'Data & Report',
                'description' => 'Access the intelligence behind emerging technologies, market opportunities and innovation ecosystems worldwide',
                'show_ctas'   => false,
            ),
        )
    );
    ?>

    <section class="data-report-search-section" aria-label="<?php esc_attr_e( 'Search reports', 'bambu' ); ?>">
        <div class="data-report-container data-report-search-inner">
            <label class="data-report-search-bar">
                <span class="screen-reader-text"><?php esc_html_e( 'Search reports', 'bambu' ); ?></span>
                <img src="<?php echo esc_url( $asset_uri . 'cefa5.svg' ); ?>" alt="" aria-hidden="true">
                <input type="search" placeholder="<?php esc_attr_e( 'Search insights, reports and case studies...', 'bambu' ); ?>">
            </label>
            <div class="data-report-filter-group">
                <button class="data-report-filter-button" type="button"><?php esc_html_e( 'Content type', 'bambu' ); ?> <img src="<?php echo esc_url( $asset_uri . '3b7e2.svg' ); ?>" alt="" aria-hidden="true"></button>
                <button class="data-report-filter-button data-report-filter-button-wide" type="button"><?php _e( 'Industry &amp; topic', 'bambu' ); ?> <img src="<?php echo esc_url( $asset_uri . '3b7e2.svg' ); ?>" alt="" aria-hidden="true"></button>
            </div>
        </div>
    </section>

    <section class="data-report-cards-section">
        <div class="data-report-container data-report-cards-container">
            <div class="data-report-cards-grid">
                <?php foreach ( $reports as $report ) : ?>
                    <article class="data-report-card">
                        <div class="data-report-card-image">
                            <img src="<?php echo esc_url( $asset_uri . $report['image'] ); ?>" alt="<?php echo esc_attr( $report['title'] ); ?>">
                            <span class="data-report-card-badge"><?php esc_html_e( 'For Member Only', 'bambu' ); ?></span>
                        </div>
                        <div class="data-report-card-body">
                            <div class="data-report-card-tags">
                                <?php foreach ( $report['tags'] as $tag_index => $tag ) : ?>
                                    <span class="data-report-tag<?php echo 0 === $tag_index ? ' data-report-tag-green' : ''; ?>"><?php echo esc_html( $tag ); ?></span>
                                <?php endforeach; ?>
                            </div>
                            <h2><?php echo esc_html( $report['title'] ); ?></h2>
                            <time datetime="2026-07-14"><?php esc_html_e( 'July 14, 2026', 'bambu' ); ?></time>
                            <p><?php esc_html_e( 'Beyond running time-bound cohorts, accelerators are now expected to connect stakeholders, reduce uncertainty...', 'bambu' ); ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
            <div class="data-report-show-more-wrap">
                <button class="data-report-show-more" type="button"><span><?php esc_html_e( 'Show more articles', 'bambu' ); ?></span><img src="<?php echo esc_url( $asset_uri . '144a8.svg' ); ?>" alt="" aria-hidden="true"></button>
            </div>
        </div>
    </section>

    <section class="data-report-data-room">
        <div class="data-report-container data-report-data-room-inner">
            <div class="data-report-data-room-text">
                <p class="data-report-eyebrow"><?php esc_html_e( 'BambuUP Data Room', 'bambu' ); ?></p>
                <h2><?php esc_html_e( 'See the ecosystem with greater clarity', 'bambu' ); ?></h2>
                <p><?php esc_html_e( 'Access structured data, technology intelligence and ecosystem insights to discover opportunities faster', 'bambu' ); ?></p>
                <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>"><?php _e( 'Explore Data &amp; Report', 'bambu' ); ?> <span aria-hidden="true">↗</span></a>
            </div>
            <div class="data-report-data-room-map">
                <img src="<?php echo esc_url( $asset_uri . '1bb0d.png' ); ?>" alt="<?php esc_attr_e( 'Global ecosystem map', 'bambu' ); ?>">
                <div><span><?php esc_html_e( 'Active Nodes: 1,420+', 'bambu' ); ?></span><span><?php esc_html_e( 'Real-time Telemetry', 'bambu' ); ?></span></div>
            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/partners-section' ); ?>
    <?php get_template_part( 'template-parts/cta-banner' ); ?>
</main>
<?php get_footer(); ?>
