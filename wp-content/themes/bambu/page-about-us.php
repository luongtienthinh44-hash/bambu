<?php
/**
 * Template Name: Bambu - About Us
 * Template Post Type: page
 *
 * @package Bambu
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$features = array(
    array( 'icon' => '35919.svg', 'class' => 'about-feature-dark', 'title' => __( 'Innovation-as-a-Service', 'bambu' ), 'description' => __( 'Build a repeatable innovation pipeline for long-term growth.', 'bambu' ) ),
    array( 'icon' => '1aebd.svg', 'class' => 'about-feature-blue', 'title' => __( 'Accelerator-as-a-Service', 'bambu' ), 'description' => __( 'Activate and grow high-potential ventures through focused programmes.', 'bambu' ) ),
    array( 'icon' => 'ca779.svg', 'class' => 'about-feature-blue', 'title' => __( 'Investment-as-a-Service', 'bambu' ), 'description' => __( 'Connect capital with strategic opportunities and ecosystem partners.', 'bambu' ) ),
);

$stats = array(
    array( 'number' => '7000', 'label' => __( 'Partners', 'bambu' ), 'description' => __( 'Organisations contributing expertise, access and opportunity', 'bambu' ) ),
    array( 'number' => '300', 'label' => __( 'Top Experts', 'bambu' ), 'description' => __( 'Innovation solutions across emerging and high-impact sectors', 'bambu' ) ),
    array( 'number' => '60', 'label' => __( 'Startups', 'bambu' ), 'description' => __( 'Organisations contributing expertise, access and opportunity', 'bambu' ) ),
    array( 'number' => '40', 'label' => __( 'Successful Matchings', 'bambu' ), 'description' => __( 'Organisations contributing expertise, access and opportunity', 'bambu' ) ),
);

$timeline = array(
    array( 'year' => '2021', 'image' => '98b30.png', 'alt' => __( '2021 milestone', 'bambu' ) ),
    array( 'year' => '2023', 'image' => 'dd3c9.png', 'alt' => __( '2023 milestone', 'bambu' ) ),
    array( 'year' => '2025', 'image' => 'bda5b.png', 'alt' => __( '2025 milestone', 'bambu' ) ),
    array( 'year' => '2026', 'image' => '65508.png', 'alt' => __( '2026 milestone', 'bambu' ) ),
);

$perspectives = array(
    array( 'title' => __( 'Startups', 'bambu' ), 'description' => __( 'Connect proven capabilities with real market demand and routes to growth', 'bambu' ), 'link' => __( 'Enter the hub', 'bambu' ) ),
    array( 'title' => __( 'Corporations', 'bambu' ), 'description' => __( 'Turn strategic challenges into qualified solutions and validated pilots', 'bambu' ), 'link' => __( 'Explore solutions', 'bambu' ) ),
    array( 'title' => __( 'Research Institutions', 'bambu' ), 'description' => __( 'Bring specialist knowledge and intellectual property closer to application', 'bambu' ), 'link' => __( 'Explore research', 'bambu' ) ),
    array( 'title' => __( 'Provinces & Cities', 'bambu' ), 'description' => __( 'Build visible, connected ecosystems around regional priorities', 'bambu' ), 'link' => __( 'View ecosystem map', 'bambu' ) ),
    array( 'title' => __( 'Investment Funds', 'bambu' ), 'description' => __( 'Discover ventures, market signals and opportunities with strategic potential', 'bambu' ), 'link' => __( 'Access intelligence', 'bambu' ) ),
);

get_header();
?>
<main id="primary" class="site-main innovation-intelligence-page about-page">
    <?php
    get_template_part(
        'template-parts/global-hero',
        null,
        array(
            'page_key' => 'about-us',
            'fallback' => array(
                'breadcrumb'   => __( 'About us', 'bambu' ),
                'title'        => __( 'About us', 'bambu' ),
                'description'  => __( 'BambuUP connects organisations, innovators and ecosystem partners through one integrated innovation platform — Unlocking opportunities, accelerating collaboration and driving measurable impact', 'bambu' ),
                'show_ctas'    => true,
                'cta_one_text' => __( 'Our Story', 'bambu' ),
                'cta_one_url'  => '#our-story',
                'cta_two_text' => __( 'Explore the Ecosystem', 'bambu' ),
                'cta_two_url'  => '#ecosystem',
            ),
        )
    );
    ?>

    <section id="our-story" class="about-who" aria-labelledby="about-who-title">
        <div class="about-container">
            <div class="about-who-top">
                <div class="about-who-text">
                    <p class="about-eyebrow"><?php esc_html_e( 'Who We Are', 'bambu' ); ?></p>
                    <h2 id="about-who-title"><?php esc_html_e( 'A one-stop open innovation platform', 'bambu' ); ?></h2>
                    <p class="about-lead"><?php esc_html_e( 'To facilitate meaningful connections between Innovation Seekers and Innovation Providers', 'bambu' ); ?></p>
                </div>
                <div class="about-video" role="img" aria-label="<?php esc_attr_e( 'BambuUP platform video preview', 'bambu' ); ?>">
                    <img src="<?php echo esc_url( bambu_get_media_asset_url( 'about/50c74.png' ) ); ?>" alt="<?php esc_attr_e( 'Video thumbnail', 'bambu' ); ?>">
                    <span class="about-video-overlay"></span>
                    <span class="about-play"><img src="<?php echo esc_url( bambu_get_media_asset_url( 'about/99a1b.svg' ) ); ?>" alt="<?php esc_attr_e( 'Play', 'bambu' ); ?>"></span>
                    <span class="about-video-controls"><span></span><img src="<?php echo esc_url( bambu_get_media_asset_url( 'about/c1622.svg' ) ); ?>" alt="<?php esc_attr_e( 'Volume', 'bambu' ); ?>"></span>
                </div>
            </div>

            <div class="about-features">
                <h3><?php esc_html_e( 'What we bring together', 'bambu' ); ?></h3>
                <div class="about-feature-grid">
                    <?php foreach ( $features as $feature ) : ?>
                        <article class="about-feature-card <?php echo esc_attr( $feature['class'] ); ?>">
                            <div class="about-feature-icon"><img src="<?php echo esc_url( bambu_get_media_asset_url( 'about/' . $feature['icon'] ) ); ?>" alt=""></div>
                            <div>
                                <h4><?php echo esc_html( $feature['title'] ); ?></h4>
                                <p><?php echo esc_html( $feature['description'] ); ?></p>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="about-stats">
                <?php foreach ( $stats as $stat ) : ?>
                    <div class="about-stat">
                        <strong><?php echo esc_html( $stat['number'] ); ?><sup>+</sup></strong>
                        <span><?php echo esc_html( $stat['label'] ); ?></span>
                        <p><?php echo esc_html( $stat['description'] ); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="about-people" aria-labelledby="about-people-title">
        <div class="about-container about-people-grid">
            <div class="about-people-photo"><img src="<?php echo esc_url( bambu_get_media_asset_url( 'about/2641a.png' ) ); ?>" alt="<?php esc_attr_e( 'Team collaboration', 'bambu' ); ?>"></div>
            <div class="about-people-content">
                <p class="about-eyebrow"><?php esc_html_e( 'The People Behind the Platform', 'bambu' ); ?></p>
                <h2 id="about-people-title"><?php esc_html_e( 'Curious minds', 'bambu' ); ?> <br> <?php esc_html_e( 'Shared momentum', 'bambu' ); ?></h2>
                <div class="about-callout"><?php esc_html_e( 'Built around a simple belief: the right connection can change what is possible', 'bambu' ); ?></div>
                <p><?php esc_html_e( 'Our team works across strategy, intelligence, programme design, ecosystem partnerships and venture investment. We combine disciplined thinking with a practical understanding of what it takes to make collaboration work', 'bambu' ); ?></p>
                <a href="<?php echo esc_url( home_url( '/our-people/' ) ); ?>"><?php esc_html_e( 'Connect with our team ↗', 'bambu' ); ?></a>
            </div>
        </div>
    </section>

    <section class="about-timeline" aria-labelledby="about-history-title">
        <div class="about-container">
            <div class="about-timeline-header">
                <p class="about-eyebrow"><?php esc_html_e( 'Our History', 'bambu' ); ?></p>
                <h2 id="about-history-title"><?php esc_html_e( 'A decade of building', 'bambu' ); ?> <br> <?php _e( 'community &amp; momentum', 'bambu' ); ?></h2>
            </div>
            <div class="about-timeline-track">
                <div class="about-timeline-line"></div>
                <div class="about-timeline-items">
                    <?php foreach ( $timeline as $item ) : ?>
                        <article class="about-timeline-item">
                            <div class="about-timeline-card"><img src="<?php echo esc_url( bambu_get_media_asset_url( 'about/' . $item['image'] ) ); ?>" alt="<?php echo esc_attr( $item['alt'] ); ?>"></div>
                            <span class="about-timeline-dot"></span>
                            <span class="about-timeline-year"><?php echo esc_html( $item['year'] ); ?></span>
                            <p><?php esc_html_e( 'Different ambitions require different pathways. Explore how BambuUP connects each participant with the services, opportunities and partners most relevant to them', 'bambu' ); ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section id="ecosystem" class="about-perspectives" aria-labelledby="about-perspectives-title">
        <div class="about-container">
            <div class="about-perspectives-header">
                <div>
                    <p class="about-eyebrow"><?php esc_html_e( 'The BambuUP Ecosystem', 'bambu' ); ?></p>
                    <h2 id="about-perspectives-title"><?php esc_html_e( 'Five perspectives', 'bambu' ); ?> <br> <?php esc_html_e( 'One shared opportunity', 'bambu' ); ?></h2>
                </div>
                <p><?php esc_html_e( 'Every participant enters with a different ambition. BambuUP helps each one find the intelligence, opportunities, partners and programmes most relevant to their role', 'bambu' ); ?></p>
            </div>
            <div class="about-perspectives-grid">
                <?php foreach ( $perspectives as $perspective ) : ?>
                    <article>
                        <div>
                            <h3><?php echo esc_html( $perspective['title'] ); ?></h3>
                            <p><?php echo esc_html( $perspective['description'] ); ?></p>
                        </div>
                        <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>"><?php echo esc_html( $perspective['link'] ); ?> ↗</a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/partners-section' ); ?>
    <?php get_template_part( 'template-parts/cta-banner' ); ?>
</main>
<?php get_footer(); ?>
