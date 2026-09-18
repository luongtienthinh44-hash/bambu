<?php
/**
 * Template Name: Bambu - Startups
 * Template Post Type: page
 *
 * @package Bambu
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$theme_uri      = get_template_directory_uri();
$startup_assets = $theme_uri . '/assets/images/startup/';
$fallback_images = array( '51b19.png', 'd8596.png', '7da04.png' );
$startup_query  = new WP_Query(
	array(
		'post_type'      => 'opportunities',
		'post_status'    => 'publish',
		'posts_per_page' => 3,
		'orderby'        => 'date',
		'order'          => 'DESC',
		'no_found_rows'  => true,
	)
);

$published_count = wp_count_posts( 'opportunities' );
$startup_count   = $published_count && isset( $published_count->publish ) ? (int) $published_count->publish : 0;

get_header();
?>
<main id="primary" class="site-main innovation-intelligence-page startup-page">
    <?php
    get_template_part(
        'template-parts/global-hero',
        null,
        array(
            'page_key' => 'startups',
            'fallback' => array(
                'breadcrumb'   => 'Innovation',
                'title'        => 'Startups',
                'description'  => 'Connect with innovation demand, accelerator programmes and strategic partners across global markets',
                'show_ctas'    => true,
                'cta_one_text' => 'Explore opportunities',
                'cta_one_url'  => home_url( '/innovation/' ),
                'cta_two_text' => 'Showcase your capabilities',
                'cta_two_url'  => home_url( '/contact-us/' ),
            ),
        )
    );
    ?>

    <section class="startup-value-section">
        <div class="startup-container">
            <div class="startup-section-header">
                <div>
                    <p class="startup-eyebrow"><?php esc_html_e( 'Innovation for Startups', 'bambu' ); ?></p>
                    <h2><?php esc_html_e( 'Turn your', 'bambu' ); ?> <span><?php esc_html_e( 'innovation', 'bambu' ); ?></span><br><?php esc_html_e( 'into real-world', 'bambu' ); ?> <span><?php esc_html_e( 'impact', 'bambu' ); ?></span></h2>
                </div>
            </div>
            <div class="startup-value-grid">
                <article class="startup-value-card startup-value-card-dark">
                    <div>
                        <div class="startup-value-icon"><img src="<?php echo esc_url( $startup_assets . 'e5b23.svg' ); ?>" alt=""></div>
                        <p class="startup-card-eyebrow"><?php esc_html_e( 'Respond to real demand', 'bambu' ); ?></p>
                        <h3><?php esc_html_e( 'Challenge Hub', 'bambu' ); ?></h3>
                        <p><?php esc_html_e( 'Find clearly framed innovation needs and submit your solution to organisations seeking new approaches.', 'bambu' ); ?></p>
                    </div>
                    <a href="<?php echo esc_url( home_url( '/challenge-hub/' ) ); ?>"><?php esc_html_e( 'Find a challenge', 'bambu' ); ?> <span aria-hidden="true">→</span></a>
                </article>
                <article class="startup-value-card">
                    <div>
                        <div class="startup-value-icon"><img src="<?php echo esc_url( $startup_assets . '94baa.svg' ); ?>" alt=""></div>
                        <p class="startup-card-eyebrow"><?php esc_html_e( 'Build venture readiness', 'bambu' ); ?></p>
                        <h3><?php esc_html_e( 'Accelerator Programmes', 'bambu' ); ?></h3>
                        <p><?php esc_html_e( 'Join focused journeys that strengthen your proposition, network and readiness for pilots or growth.', 'bambu' ); ?></p>
                    </div>
                    <a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>"><?php esc_html_e( 'Explore programmes', 'bambu' ); ?> <span aria-hidden="true">→</span></a>
                </article>
                <article class="startup-value-card">
                    <div>
                        <div class="startup-value-icon"><img src="<?php echo esc_url( $startup_assets . 'c8632.svg' ); ?>" alt=""></div>
                        <p class="startup-card-eyebrow"><?php esc_html_e( 'Make capability visible', 'bambu' ); ?></p>
                        <h3><?php esc_html_e( 'Innovation Offer', 'bambu' ); ?></h3>
                        <p><?php esc_html_e( 'Present your technology, use cases and collaboration model to innovation seekers across the platform.', 'bambu' ); ?></p>
                    </div>
                    <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>"><?php esc_html_e( 'Publish your offer', 'bambu' ); ?> <span aria-hidden="true">→</span></a>
                </article>
            </div>
        </div>
    </section>

    <section class="startup-ecosystem-section">
        <div class="startup-container">
            <div class="startup-ecosystem-top">
                <div class="startup-ecosystem-copy">
                    <p class="startup-eyebrow"><?php esc_html_e( 'Innovation for Startups', 'bambu' ); ?></p>
                    <h2><?php esc_html_e( 'Access the connections behind innovation', 'bambu' ); ?></h2>
                    <p><?php esc_html_e( 'Discover opportunities, build strategic partnerships and engage with innovation leaders across global ecosystems', 'bambu' ); ?></p>
                    <a href="<?php echo esc_url( home_url( '/innovation/' ) ); ?>"><?php esc_html_e( 'Explore the ecosystem', 'bambu' ); ?> <span aria-hidden="true">→</span></a>
                </div>
                <div class="startup-ecosystem-image"><img src="<?php echo esc_url( $startup_assets . '30fa5.png' ); ?>" alt="<?php esc_attr_e( 'Ecosystem orbit graphic', 'bambu' ); ?>"></div>
            </div>
            <div class="startup-metrics-row">
                <div><strong>7000<span>+</span></strong><b><?php esc_html_e( 'Partners', 'bambu' ); ?></b><p><?php esc_html_e( 'Organisations contributing expertise, access and opportunity.', 'bambu' ); ?></p></div>
                <div><strong>300<span>+</span></strong><b><?php esc_html_e( 'Top Experts', 'bambu' ); ?></b><p><?php esc_html_e( 'Innovation solutions across emerging and high-impact sectors.', 'bambu' ); ?></p></div>
                <div><strong>60<span>+</span></strong><b><?php esc_html_e( 'Startups', 'bambu' ); ?></b><p><?php esc_html_e( 'Selected disruptive ventures actively solving market challenges.', 'bambu' ); ?></p></div>
                <div><strong><?php echo esc_html( $startup_count ); ?><span>+</span></strong><b><?php esc_html_e( 'Successful Matchings', 'bambu' ); ?></b><p><?php esc_html_e( 'Commercial pilots and partnerships launched through the platform.', 'bambu' ); ?></p></div>
            </div>
        </div>
    </section>

    <section class="startup-opportunities-section">
        <div class="startup-container">
            <div class="startup-opportunities-header">
                <div>
                    <p class="startup-eyebrow"><?php esc_html_e( 'Opportunities in Motion', 'bambu' ); ?></p>
                    <h2><?php esc_html_e( 'Turn capabilities into opportunities', 'bambu' ); ?></h2>
                </div>
                <a href="<?php echo esc_url( home_url( '/innovation/' ) ); ?>"><?php esc_html_e( 'View all', 'bambu' ); ?> <span aria-hidden="true">→</span></a>
            </div>
            <div class="startup-opportunities-grid">
                <?php
                $opportunity_index = 0;
                while ( $startup_query->have_posts() ) :
	                	$startup_query->the_post();
	                	$post_id      = get_the_ID();
	                	$image        = get_the_post_thumbnail_url( $post_id, 'large' );
	                	$organization = get_post_meta( $post_id, 'organization', true );
	                	$tags         = get_the_terms( $post_id, 'opportunities_tag' );
	                	$type_terms   = get_the_terms( $post_id, 'opportunities_type' );
	                	$type_name    = ! is_wp_error( $type_terms ) && ! empty( $type_terms ) ? $type_terms[0]->name : 'OPEN';
	                	$card_image   = $image ? $image : $startup_assets . $fallback_images[ $opportunity_index % count( $fallback_images ) ];
                	?>
                    <article class="startup-opportunity-card">
                        <div class="startup-opportunity-image">
                            <img src="<?php echo esc_url( $card_image ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
                            <span><i></i><?php echo esc_html( strtoupper( $type_name ) ); ?></span>
                        </div>
                        <div class="startup-opportunity-body">
                            <div class="startup-opportunity-title"><h3><?php echo esc_html( get_the_title() ); ?></h3><span aria-hidden="true">♡</span></div>
                            <p class="startup-opportunity-date"><?php esc_html_e( 'Posted', 'bambu' ); ?> <?php echo esc_html( get_the_date( 'F j, Y' ) ); ?></p>
                            <?php if ( $organization ) : ?><p class="startup-opportunity-type"><?php echo esc_html( $organization ); ?></p><?php endif; ?>
                            <?php if ( ! is_wp_error( $tags ) && ! empty( $tags ) ) : ?>
                                <div class="startup-opportunity-tags">
                                    <?php foreach ( array_slice( $tags, 0, 3 ) as $tag ) : ?><span><?php echo esc_html( $tag->name ); ?></span><?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <a class="startup-opportunity-link" href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e( 'View details', 'bambu' ); ?> <span aria-hidden="true">↗</span></a>
                    </article>
                    <?php
                    $opportunity_index++;
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <section class="startup-stories-section">
        <div class="startup-container">
            <div class="startup-stories-header">
                <div>
                    <p class="startup-eyebrow"><?php _e( 'Data &amp; Reports', 'bambu' ); ?></p>
                    <h2><?php esc_html_e( 'Stories and insight for', 'bambu' ); ?><br><?php esc_html_e( 'the journey ahead', 'bambu' ); ?></h2>
                </div>
                <a href="<?php echo esc_url( home_url( '/insights/' ) ); ?>"><?php esc_html_e( 'Explore all insights', 'bambu' ); ?> <span aria-hidden="true">↗</span></a>
            </div>
            <div class="startup-stories-grid">
                <article class="startup-feature-story">
                    <img src="<?php echo esc_url( $startup_assets . '926fe.png' ); ?>" alt="<?php esc_attr_e( 'Vietnam Open Innovation Outlook', 'bambu' ); ?>">
                    <p class="startup-story-eyebrow"><?php esc_html_e( 'Landscape Report · 2026', 'bambu' ); ?></p>
                    <h3><?php esc_html_e( 'Vietnam Open Innovation Outlook: From activity to advantage', 'bambu' ); ?></h3>
                    <p><?php esc_html_e( 'Signals, sectors and collaboration models shaping the next era of open innovation across Southeast Asia.', 'bambu' ); ?></p>
                </article>
                <div class="startup-story-list">
                    <article><p><?php esc_html_e( 'Case Study', 'bambu' ); ?></p><h3><?php esc_html_e( 'How a regional manufacturer cut pilot time by 40%', 'bambu' ); ?></h3><a href="#"><?php esc_html_e( 'Read story ↗', 'bambu' ); ?></a></article>
                    <article><p><?php esc_html_e( 'IP / Research', 'bambu' ); ?></p><h3><?php esc_html_e( 'Five technology signals reshaping industrial resilience', 'bambu' ); ?></h3><a href="#"><?php esc_html_e( 'Read research ↗', 'bambu' ); ?></a></article>
                    <article><p><?php esc_html_e( 'Event', 'bambu' ); ?></p><h3><?php esc_html_e( 'Open Innovation Forum — Ho Chi Minh City', 'bambu' ); ?></h3><a href="#"><?php esc_html_e( 'View event ↗', 'bambu' ); ?></a></article>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/partners-section' ); ?>
    <?php get_template_part( 'template-parts/cta-banner' ); ?>
</main>
<?php get_footer(); ?>
