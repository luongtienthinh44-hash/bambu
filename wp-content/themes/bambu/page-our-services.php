<?php
/**
 * Template Name: Bambu - Our Services
 * Template Post Type: page
 *
 * @package Bambu
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$service_lines = array(
    array( 'title' => 'Innovation-as-a-Service', 'kicker' => 'Build an innovation pipeline', 'heading' => 'From strategy to execution, across a proven roadmap for scalable open innovation success', 'description' => 'We help organisations define the right innovation territories, discover promising solutions globally and move the strongest matches towards pilots and implementation.', 'image' => 'accelerator-as-a-service-lab.png', 'capabilities' => array( 'Innovation strategy & opportunity framing', 'Global technology and startup scouting', 'Matchmaking, pilot design and validation' ), 'link_text' => 'Explore Innovation-as-a-Service' ),
    array( 'title' => 'Accelerator-as-a-Service', 'kicker' => 'Design and run high-impact programmes', 'heading' => 'Turn focused challenges into programmes that attract, validate and scale the right solutions', 'description' => 'From challenge definition to cohort engagement and pilot delivery, we build programmes around the outcomes your ecosystem needs.', 'image' => 'for-innovation-providers.png', 'capabilities' => array( 'Programme design and challenge management', 'Startup sourcing and cohort selection', 'Pilot support and ecosystem engagement' ), 'link_text' => 'Explore Accelerator-as-a-Service' ),
    array( 'title' => 'Innovation Investment-as-a-Service', 'kicker' => 'Find strategic growth opportunities', 'heading' => 'Connect investment decisions with the ventures, technologies and markets shaping what comes next', 'description' => 'We help investors and strategic partners identify relevant opportunities, assess potential and build high-value connections across the innovation ecosystem.', 'image' => 'innovation-investment-analytics.png', 'capabilities' => array( 'Technology and venture landscape mapping', 'Opportunity screening and strategic intelligence', 'Investor, startup and partner matchmaking' ), 'link_text' => 'Explore Innovation Investment-as-a-Service' ),
);

$personas = array(
    array( 'image' => 'for-innovation-seekers.png', 'alt' => 'Corporations meeting', 'eyebrow' => 'For innovation leaders', 'name' => 'Corporations', 'description' => 'Turn strategic challenges into validated innovation.', 'matched' => array( 'Innovation-as-a-Service', 'Accelerator-as-a-Service' ), 'action' => 'Explore corporate innovation' ),
    array( 'image' => 'for-innovation-providers.png', 'alt' => 'Startup founders', 'eyebrow' => 'For founders and innovators', 'name' => 'Startups', 'description' => 'Connect proven capabilities with real market demand.', 'matched' => array( 'Accelerator programmes', 'Challenge Hub' ), 'action' => 'Explore startup opportunities' ),
    array( 'image' => 'innovation-investment-analytics.png', 'alt' => 'Venture investors', 'eyebrow' => 'For venture and strategic investors', 'name' => 'Investors', 'description' => 'Discover ventures with strategic growth potential.', 'matched' => array( 'Innovation Investment', 'Data & Reports' ), 'action' => 'Explore investment opportunities' ),
    array( 'image' => 'city-infrastructure-challenge.png', 'alt' => 'Governments and public institutions', 'eyebrow' => 'For cities and public institutions', 'name' => 'Governments', 'description' => 'Build ecosystems that create regional impact.', 'matched' => array( 'Ecosystem programmes', 'Challenge Hub' ), 'action' => 'Explore ecosystem programmes' ),
);

get_header();
?>
<main id="primary" class="site-main innovation-intelligence-page services-page">
    <?php
    get_template_part(
        'template-parts/global-hero',
        null,
        array(
            'page_key' => 'services',
            'fallback' => array(
                'breadcrumb'   => 'Our Services',
                'title'        => 'Our Services',
                'description'  => 'Three complementary service lines designed to transform innovation opportunities into strategic partnerships, scalable programmes and long-term growth',
                'show_ctas'    => true,
                'cta_one_text' => 'Post a Need',
                'cta_one_url'  => home_url( '/innovation-intelligence/' ),
                'cta_two_text' => 'Submit an Offer',
                'cta_two_url'  => home_url( '/innovation-intelligence/' ),
            ),
        )
    );
    ?>

    <section class="services-metrics" aria-labelledby="services-metrics-title">
        <div class="services-container">
            <h2 id="services-metrics-title"><?php esc_html_e( 'Connecting Innovation', 'bambu' ); ?><br><?php esc_html_e( 'Creating Impact', 'bambu' ); ?></h2>
            <div class="services-metrics-grid">
                <?php
                $metrics = array(
                    array( 'label' => 'Partners', 'number' => '7000', 'description' => 'Organisations contributing expertise, access and opportunity' ),
                    array( 'label' => 'Top experts', 'number' => '300', 'description' => 'Innovation solutions across emerging and high-impact sectors' ),
                    array( 'label' => 'Startups', 'number' => '60', 'description' => 'Organisations contributing expertise, access and opportunity' ),
                    array( 'label' => 'Successful matchings', 'number' => '40', 'description' => 'Organisations contributing expertise, access and opportunity' ),
                );
                foreach ( $metrics as $metric ) :
                    ?>
                    <div class="services-metric">
                        <span class="services-metric-label"><?php echo esc_html( $metric['label'] ); ?></span>
                        <strong class="services-metric-number"><?php echo esc_html( $metric['number'] ); ?><sup>+</sup></strong>
                        <p><?php echo esc_html( $metric['description'] ); ?></p>
                    </div>
                    <?php
                endforeach;
                ?>
            </div>
        </div>
    </section>

    <section class="services-lines" aria-labelledby="services-lines-title">
        <div class="services-container">
            <h2 id="services-lines-title" class="screen-reader-text"><?php esc_html_e( 'Our service lines', 'bambu' ); ?></h2>
            <div class="services-accordion" data-services-accordion>
                <?php foreach ( $service_lines as $index => $service ) : ?>
                    <article class="service-line <?php echo 0 === $index ? 'is-open' : ''; ?>">
                        <button class="service-line-toggle" type="button" aria-expanded="<?php echo 0 === $index ? 'true' : 'false'; ?>">
                            <span><?php echo esc_html( $service['title'] ); ?></span>
                            <span class="service-line-icon" aria-hidden="true"><?php echo 0 === $index ? '−' : '+'; ?></span>
                        </button>
                        <div class="service-line-panel" <?php echo 0 === $index ? '' : 'hidden'; ?>>
                            <div class="service-line-image"><img src="<?php echo esc_url( bambu_get_media_asset_url( $service['image'] ) ); ?>" alt=""></div>
                            <div class="service-line-content">
                                <div>
                                    <p class="service-line-kicker"><?php echo esc_html( $service['kicker'] ); ?></p>
                                    <h3><?php echo esc_html( $service['heading'] ); ?></h3>
                                    <p class="service-line-description"><?php echo esc_html( $service['description'] ); ?></p>
                                    <ul class="service-capabilities">
                                        <?php foreach ( $service['capabilities'] as $capability ) : ?>
                                            <li><?php echo esc_html( $capability ); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <a class="service-line-link" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>"><?php echo esc_html( $service['link_text'] ); ?> <img class="external-arrow-icon" src="<?php echo esc_url( bambu_get_media_asset_url( 'arrow-up-right.svg' ) ); ?>" alt="" aria-hidden="true"></a>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="services-ecosystem" aria-labelledby="services-ecosystem-title">
        <div class="services-container">
            <div class="services-ecosystem-header">
                <div>
                    <p class="services-eyebrow"><?php esc_html_e( 'What we do', 'bambu' ); ?></p>
                    <h2 id="services-ecosystem-title"><?php esc_html_e( 'Built around your role in the ecosystem', 'bambu' ); ?></h2>
                </div>
                <p><?php esc_html_e( 'Different ambitions require different pathways. Explore how BambuUP connects each participant with the services, opportunities and partners most relevant to them.', 'bambu' ); ?></p>
            </div>
            <div class="services-ecosystem-divider"></div>
            <div class="services-personas">
                <?php foreach ( $personas as $persona ) : ?>
                    <article class="services-persona">
                        <div>
                            <div class="services-persona-image"><img src="<?php echo esc_url( bambu_get_media_asset_url( $persona['image'] ) ); ?>" alt="<?php echo esc_attr( $persona['alt'] ); ?>"></div>
                            <p class="services-eyebrow"><?php echo esc_html( $persona['eyebrow'] ); ?></p>
                            <h3><?php echo esc_html( $persona['name'] ); ?></h3>
                            <p class="services-persona-description"><?php echo esc_html( $persona['description'] ); ?></p>
                            <div class="services-matched">
                                <span class="services-matched-label"><?php esc_html_e( 'Best matched with', 'bambu' ); ?></span>
                                <ul>
                                    <?php foreach ( $persona['matched'] as $matched ) : ?>
                                        <li><?php echo esc_html( $matched ); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <a class="services-persona-action" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>"><?php echo esc_html( $persona['action'] ); ?> <img class="external-arrow-icon" src="<?php echo esc_url( bambu_get_media_asset_url( 'arrow-up-right.svg' ) ); ?>" alt="" aria-hidden="true"></a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/partners-section' ); ?>
    <?php get_template_part( 'template-parts/cta-banner' ); ?>
</main>
<?php get_footer(); ?>
