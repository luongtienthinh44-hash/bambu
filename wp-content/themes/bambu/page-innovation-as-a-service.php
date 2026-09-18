<?php
/**
 * Template Name: Bambu - Innovation-as-a-Service
 * Template Post Type: page
 *
 * @package Bambu
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$asset_uri = get_template_directory_uri() . '/assets/images/innovation-as-a-service/';
$steps     = array(
    array(
        'title'      => 'Frame',
        'tab_desc'   => 'Define the challenge',
        'eyebrow'    => 'Define the challenge',
        'heading'    => 'Start with the business—not the technology',
        'description'=> 'We align stakeholders around the priority, opportunity and success measures so every search begins with a clear strategic lens',
        'activities' => array( 'Stakeholder interviews and alignment', 'Innovation territory mapping', 'Challenge and opportunity framing', 'Success criteria and governance' ),
        'outcome'    => 'A validated innovation roadmap',
        'outcome_desc' => 'Structured roadmap and scope guidelines ready for immediate execution',
    ),
    array(
        'title'      => 'Discover',
        'tab_desc'   => 'Source relevant innovation capabilities',
        'eyebrow'    => 'Source capabilities',
        'heading'    => 'Map the innovation landscape to find your best options',
        'description'=> 'We scan global ecosystems to identify startups, technology providers and research groups that match your challenge brief.',
        'activities' => array( 'Technology landscape scouting', 'Startup and partner shortlisting', 'Capability deep-dives', 'Fit-for-challenge scoring' ),
        'outcome'    => 'A curated shortlist of qualified solutions',
        'outcome_desc' => 'A ranked set of vetted opportunities ready for evaluation and engagement.',
    ),
    array(
        'title'      => 'Validate',
        'tab_desc'   => 'Turn potential into evidence',
        'eyebrow'    => 'Turn potential into evidence',
        'heading'    => 'Test fast, learn faster, decide with confidence',
        'description'=> 'We design and run structured pilots that generate real evidence in weeks, not months, so leadership can act decisively.',
        'activities' => array( 'Pilot design and scoping', 'Partner onboarding and coordination', 'KPI tracking and learning capture', 'Go/no-go decision facilitation' ),
        'outcome'    => 'A proven concept with measurable results',
        'outcome_desc' => 'Documented pilot results and a clear scale recommendation backed by data.',
    ),
    array(
        'title'      => 'Scale',
        'tab_desc'   => 'Deploy and scale proven solutions',
        'eyebrow'    => 'Deploy and scale proven solutions',
        'heading'    => 'Move from proof-of-concept to enterprise deployment',
        'description'=> 'We support commercialisation, integration and adoption so that innovation delivers lasting business value.',
        'activities' => array( 'Commercial agreement structuring', 'Integration and deployment planning', 'Change management support', 'Ongoing performance monitoring' ),
        'outcome'    => 'Scaled innovation with measurable ROI',
        'outcome_desc' => 'A fully deployed solution generating quantified business impact at scale.',
    ),
);

$insights = array(
    array( 'image' => '926fe.png', 'tag' => 'Program Success Story', 'date' => '28 Aug 2026', 'title' => 'Building a stronger pathway from corporate challenge to startup collaboration.', 'link_text' => 'Read the success story' ),
    array( 'image' => '372d4.png', 'tag' => 'Case Study', 'date' => '14 Aug 2026', 'title' => 'From a sustainability priority to qualified circular-packaging solutions.', 'link_text' => 'View case study' ),
    array( 'image' => 'a980a.png', 'tag' => 'Research', 'date' => '30 Jul 2026', 'title' => 'Open innovation in Southeast Asia: signals shaping the next wave of collaboration.', 'link_text' => 'Explore research' ),
);

get_header();
?>
<main id="primary" class="site-main innovation-intelligence-page innovation-as-a-service-page">
    <?php
    get_template_part(
        'template-parts/global-hero',
        null,
        array(
            'page_key' => 'innovation-as-a-service',
            'fallback' => array(
                'breadcrumb'   => 'Innovation-as-a-Service',
                'title'        => 'Innovation-as-a-Service',
                'description'  => 'From challenge definition to solution deployment, BambuUP helps organisations access the technologies, capabilities and partnerships needed to accelerate innovation',
                'show_ctas'    => true,
                'cta_one_text' => 'Discuss Your Challenge',
                'cta_one_url'  => home_url( '/contact-us/' ),
                'cta_two_text' => 'Explore Our Approach',
                'cta_two_url'  => '#innovation-process',
            ),
        )
    );
    ?>

    <section id="innovation-process" class="iaas-process-section">
        <div class="iaas-container">
            <header class="iaas-section-header">
                <p class="iaas-eyebrow"><?php esc_html_e( 'Innovation-as-a-Service', 'bambu' ); ?></p>
                <h2><?php esc_html_e( 'One connected path from signal to scale', 'bambu' ); ?></h2>
            </header>

            <div class="iaas-tabs" role="tablist" aria-label="<?php esc_attr_e( 'Innovation process', 'bambu' ); ?>">
                <?php foreach ( $steps as $index => $step ) : ?>
                    <button class="iaas-tab<?php echo 0 === $index ? ' is-active' : ''; ?>" type="button" role="tab" aria-selected="<?php echo 0 === $index ? 'true' : 'false'; ?>" aria-controls="iaas-panel-<?php echo esc_attr( $index ); ?>" data-iaas-tab="<?php echo esc_attr( $index ); ?>">
                        <span class="iaas-tab-number">0<?php echo esc_html( $index + 1 ); ?></span>
                        <span class="iaas-tab-title"><?php echo esc_html( $step['title'] ); ?></span>
                        <span class="iaas-tab-description"><?php echo esc_html( $step['tab_desc'] ); ?></span>
                    </button>
                <?php endforeach; ?>
            </div>

            <?php foreach ( $steps as $index => $step ) : ?>
                <div id="iaas-panel-<?php echo esc_attr( $index ); ?>" class="iaas-panel<?php echo 0 === $index ? ' is-active' : ''; ?>" role="tabpanel" <?php echo 0 === $index ? '' : 'hidden'; ?> data-iaas-panel="<?php echo esc_attr( $index ); ?>">
                    <div class="iaas-panel-main">
                        <p class="iaas-panel-eyebrow"><?php echo esc_html( $step['eyebrow'] ); ?></p>
                        <h3><?php echo esc_html( $step['heading'] ); ?></h3>
                        <p><?php echo esc_html( $step['description'] ); ?></p>
                    </div>
                    <div class="iaas-panel-activities">
                        <p class="iaas-panel-label"><?php esc_html_e( 'Core activities', 'bambu' ); ?></p>
                        <ul>
                            <?php foreach ( $step['activities'] as $activity ) : ?>
                                <li><span aria-hidden="true"></span><?php echo esc_html( $activity ); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="iaas-panel-outcome">
                        <p class="iaas-panel-label"><?php esc_html_e( 'Key outcome', 'bambu' ); ?></p>
                        <h4><?php echo esc_html( $step['outcome'] ); ?></h4>
                        <p><?php echo esc_html( $step['outcome_desc'] ); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="iaas-insights-section">
        <div class="iaas-container">
            <div class="iaas-insights-header">
                <div>
                    <p class="iaas-eyebrow"><?php _e( 'Insights &amp; Resources', 'bambu' ); ?></p>
                    <h2><?php esc_html_e( 'Insights shaping what\'s next', 'bambu' ); ?></h2>
                </div>
                <a href="<?php echo esc_url( home_url( '/data-report/' ) ); ?>"><?php _e( 'View all insights &amp; resources', 'bambu' ); ?> <span aria-hidden="true">↗</span></a>
            </div>
            <div class="iaas-insight-grid">
                <?php foreach ( $insights as $insight ) : ?>
                    <article class="iaas-insight-card">
                        <div class="iaas-insight-image"><img src="<?php echo esc_url( $asset_uri . $insight['image'] ); ?>" alt="<?php echo esc_attr( $insight['title'] ); ?>"></div>
                        <div class="iaas-insight-body">
                            <div class="iaas-insight-meta"><span><?php echo esc_html( $insight['tag'] ); ?></span><time><?php echo esc_html( $insight['date'] ); ?></time></div>
                            <h3><?php echo esc_html( $insight['title'] ); ?></h3>
                            <p><?php esc_html_e( 'Seeking scalable technologies that reduce embodied carbon without compromising performance.', 'bambu' ); ?></p>
                            <a href="<?php echo esc_url( home_url( '/data-report/' ) ); ?>"><?php echo esc_html( $insight['link_text'] ); ?> <span aria-hidden="true">↗</span></a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/partners-section' ); ?>
    <?php get_template_part( 'template-parts/cta-banner' ); ?>
</main>
<?php get_footer(); ?>
