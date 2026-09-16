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
    array( 'icon' => '35919.svg', 'class' => 'about-feature-dark', 'title' => 'Innovation-as-a-Service', 'description' => 'Build a repeatable innovation pipeline for long-term growth.' ),
    array( 'icon' => '1aebd.svg', 'class' => 'about-feature-blue', 'title' => 'Accelerator-as-a-Service', 'description' => 'Activate and grow high-potential ventures through focused programmes.' ),
    array( 'icon' => 'ca779.svg', 'class' => 'about-feature-blue', 'title' => 'Investment-as-a-Service', 'description' => 'Connect capital with strategic opportunities and ecosystem partners.' ),
);

$stats = array(
    array( 'number' => '7000', 'label' => 'Partners', 'description' => 'Organisations contributing expertise, access and opportunity' ),
    array( 'number' => '300', 'label' => 'Top Experts', 'description' => 'Innovation solutions across emerging and high-impact sectors' ),
    array( 'number' => '60', 'label' => 'Startups', 'description' => 'Organisations contributing expertise, access and opportunity' ),
    array( 'number' => '40', 'label' => 'Successful Matchings', 'description' => 'Organisations contributing expertise, access and opportunity' ),
);

$timeline = array(
    array( 'year' => '2021', 'image' => '98b30.png', 'alt' => '2021 milestone' ),
    array( 'year' => '2023', 'image' => 'dd3c9.png', 'alt' => '2023 milestone' ),
    array( 'year' => '2025', 'image' => 'bda5b.png', 'alt' => '2025 milestone' ),
    array( 'year' => '2026', 'image' => '65508.png', 'alt' => '2026 milestone' ),
);

$perspectives = array(
    array( 'title' => 'Startups', 'description' => 'Connect proven capabilities with real market demand and routes to growth', 'link' => 'Enter the hub' ),
    array( 'title' => 'Corporations', 'description' => 'Turn strategic challenges into qualified solutions and validated pilots', 'link' => 'Explore solutions' ),
    array( 'title' => 'Research Institutions', 'description' => 'Bring specialist knowledge and intellectual property closer to application', 'link' => 'Explore research' ),
    array( 'title' => 'Provinces & Cities', 'description' => 'Build visible, connected ecosystems around regional priorities', 'link' => 'View ecosystem map' ),
    array( 'title' => 'Investment Funds', 'description' => 'Discover ventures, market signals and opportunities with strategic potential', 'link' => 'Access intelligence' ),
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
                'breadcrumb'   => 'About us',
                'title'        => 'About us',
                'description'  => 'BambuUP connects organisations, innovators and ecosystem partners through one integrated innovation platform — Unlocking opportunities, accelerating collaboration and driving measurable impact',
                'show_ctas'    => true,
                'cta_one_text' => 'Our Story ↓',
                'cta_one_url'  => '#our-story',
                'cta_two_text' => 'Explore the Ecosystem',
                'cta_two_url'  => '#ecosystem',
            ),
        )
    );
    ?>

    <section id="our-story" class="about-who" aria-labelledby="about-who-title">
        <div class="about-container">
            <div class="about-who-top">
                <div class="about-who-text">
                    <p class="about-eyebrow">Who We Are</p>
                    <h2 id="about-who-title">A one-stop open innovation platform</h2>
                    <p class="about-lead">To facilitate meaningful connections between Innovation Seekers and Innovation Providers</p>
                </div>
                <div class="about-video" role="img" aria-label="BambuUP platform video preview">
                    <img src="<?php echo esc_url( bambu_get_media_asset_url( 'about/50c74.png' ) ); ?>" alt="Video thumbnail">
                    <span class="about-video-overlay"></span>
                    <span class="about-play"><img src="<?php echo esc_url( bambu_get_media_asset_url( 'about/99a1b.svg' ) ); ?>" alt="Play"></span>
                    <span class="about-video-controls"><span></span><img src="<?php echo esc_url( bambu_get_media_asset_url( 'about/c1622.svg' ) ); ?>" alt="Volume"></span>
                </div>
            </div>

            <div class="about-features">
                <h3>What we bring together</h3>
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
            <div class="about-people-photo"><img src="<?php echo esc_url( bambu_get_media_asset_url( 'about/2641a.png' ) ); ?>" alt="Team collaboration"></div>
            <div class="about-people-content">
                <p class="about-eyebrow">The People Behind the Platform</p>
                <h2 id="about-people-title">Curious minds <br> Shared momentum</h2>
                <div class="about-callout">Built around a simple belief: the right connection can change what is possible</div>
                <p>Our team works across strategy, intelligence, programme design, ecosystem partnerships and venture investment. We combine disciplined thinking with a practical understanding of what it takes to make collaboration work</p>
                <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Connect with our team ↗</a>
            </div>
        </div>
    </section>

    <section class="about-timeline" aria-labelledby="about-history-title">
        <div class="about-container">
            <div class="about-timeline-header">
                <p class="about-eyebrow">Our History</p>
                <h2 id="about-history-title">A decade of building <br> community &amp; momentum</h2>
            </div>
            <div class="about-timeline-track">
                <div class="about-timeline-line"></div>
                <div class="about-timeline-items">
                    <?php foreach ( $timeline as $item ) : ?>
                        <article class="about-timeline-item">
                            <div class="about-timeline-card"><img src="<?php echo esc_url( bambu_get_media_asset_url( 'about/' . $item['image'] ) ); ?>" alt="<?php echo esc_attr( $item['alt'] ); ?>"></div>
                            <span class="about-timeline-dot"></span>
                            <span class="about-timeline-year"><?php echo esc_html( $item['year'] ); ?></span>
                            <p>Different ambitions require different pathways. Explore how BambuUP connects each participant with the services, opportunities and partners most relevant to them</p>
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
                    <p class="about-eyebrow">The BambuUP Ecosystem</p>
                    <h2 id="about-perspectives-title">Five perspectives <br> One shared opportunity</h2>
                </div>
                <p>Every participant enters with a different ambition. BambuUP helps each one find the intelligence, opportunities, partners and programmes most relevant to their role</p>
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
