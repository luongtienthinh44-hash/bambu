<?php
/**
 * Template Name: Bambu - Community
 * Template Post Type: page
 *
 * @package Bambu
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$news_articles = array(
	array( 'image' => '5421e.png', 'tag' => 'Insight', 'topic' => 'Mobility & Physical AI', 'tone' => 'green', 'date' => 'July 18, 2026', 'title' => 'How to Build a Corporate Innovation Roadmap in 5 Steps', 'excerpt' => 'Beyond running time-bound cohorts, accelerators are now expected to connect stakeholders and…', 'read_time' => '4 min read' ),
	array( 'image' => 'cc832.png', 'tag' => 'Case Studies', 'topic' => 'Energy Transition', 'tone' => 'blue', 'date' => 'July 14, 2026', 'title' => 'Microbiome & Longevity: Top Startups Rewiring How We Age', 'excerpt' => 'Emerging clinical discoveries and AI-enabled screening platforms are bridging deep science with…', 'read_time' => '6 min read' ),
	array( 'image' => 'b1da9.png', 'tag' => 'Analysis', 'topic' => 'Smart Cities', 'tone' => 'purple', 'date' => 'July 10, 2026', 'title' => 'Beyond Experimentation: Where Applied AI Creates Measurable Value', 'excerpt' => 'Leading industrial players are moving from generative sandboxes to enterprise-grade autonomous…', 'read_time' => '5 min read' ),
);

$events = array(
	array( 'image' => '4440c.png', 'alt' => 'Vietnam Open Innovation Forum', 'type' => 'Upcoming Webinar', 'month' => 'OCT', 'day' => '24', 'month_class' => 'green', 'title' => 'Vietnam Open Innovation Forum 2026: Scaling B2B DeepTech', 'meta' => array( '14:00 - 17:30 ICT', 'Hybrid (Hanoi & Zoom Live Stream)', '30+ Keynote Leaders & Innovators' ) ),
	array( 'image' => 'c0645.png', 'alt' => 'Cross-Border Venture Matchmaking', 'type' => 'Virtual Pitching', 'month' => 'NOV', 'day' => '05', 'month_class' => 'blue', 'title' => 'Cross-Border Venture Matchmaking: Southeast Asia x Global VCs', 'meta' => array( '09:30 - 12:00 ICT', 'Virtual Data Room 1-on-1 Sessions', 'Founders & Global Institutional Investors' ) ),
	array( 'image' => 'a7d32.png', 'alt' => 'IP Commercialization Masterclass', 'type' => 'Workshop', 'month' => 'NOV', 'day' => '18', 'month_class' => 'purple', 'title' => 'IP Commercialization Masterclass for Research Institutes & Universities', 'meta' => array( '13:30 - 16:30 ICT', 'NIC Hoa Lac Innovation Center', 'Exclusive / Limited to 50 participants' ) ),
);

$innovation_cards = array(
	array( 'image' => '74596.png', 'alt' => 'HyperScale Vision Optical AI Inspection', 'tag' => 'Smart Manufacturing', 'duration' => '2-Week Integration', 'badge' => 'INNOVATION UP', 'title' => 'HyperScale Vision: Optical AI Inspection for High-Precision Tech', 'excerpt' => 'Empowering multi-tier manufacturing plants with real-time optical anomaly detection, reducing industrial…', 'value_one' => '-45% Defect Leakage', 'label_one' => 'Inspection quality', 'value_two' => '2-Week Integration', 'label_two' => 'Zero plant downtime', 'partner' => 'Tier-1 Industrial Partner' ),
	array( 'image' => 'bc164.png', 'alt' => 'OmniLedger Scope 1-3 Carbon Accounting', 'tag' => 'Energy Transition', 'duration' => '6-Month Pilot', 'badge' => 'VERIFIED CASE', 'title' => 'OmniLedger: Real-Time Scope 1-3 Carbon Accounting for MNCs', 'excerpt' => 'Enterprise telemetry and automated Scope 1-3 audit certification enabling conglomerate supply chains to…', 'value_one' => '99.8% ESG Audit', 'label_one' => 'Accuracy verification', 'value_two' => '4.2M T CO2', 'label_two' => 'Tracked annually', 'partner' => 'Regional Energy Conglomerate' ),
	array( 'image' => '46905.png', 'alt' => 'NeuralFleet Route Optimization', 'tag' => 'Smart Logistics', 'duration' => 'National Rollout', 'badge' => 'INNOVATION UP', 'title' => 'NeuralFleet: Autonomous Route Optimization for Cold-Chain Logistics', 'excerpt' => 'Adaptive dynamic routing and automated temperature monitoring providing continuous fleet…', 'value_one' => '-28% Fuel Usage', 'label_one' => 'Consumption cut', 'value_two' => '100% On-Time', 'label_two' => 'Strict SLA compliance', 'partner' => 'FMCG & Retail Logistics' ),
);

get_header();
?>
<main id="primary" class="site-main innovation-intelligence-page community-page">
    <?php
    get_template_part(
        'template-parts/global-hero',
        null,
        array(
            'page_key' => 'community',
            'fallback' => array(
                'breadcrumb'   => 'Community',
                'title'        => 'Community',
                'description'  => 'Where the innovation ecosystem comes together to share, connect and grow',
                'show_ctas'    => false,
                'cta_one_text' => '',
                'cta_one_url'  => '',
                'cta_two_text' => '',
                'cta_two_url'  => '',
            ),
        )
    );
    ?>

    <section class="community-search-section" aria-label="<?php esc_attr_e( 'Search community content', 'bambu' ); ?>">
        <div class="community-container">
            <label class="screen-reader-text" for="community-search"><?php esc_html_e( 'Search community content', 'bambu' ); ?></label>
            <div class="community-search-wrap">
                <img src="<?php echo esc_url( bambu_get_media_asset_url( 'community/8b2ef.svg' ) ); ?>" alt="" aria-hidden="true">
                <input id="community-search" type="search" placeholder="<?php esc_attr_e( 'Search by keyword, technology, industry or organization', 'bambu' ); ?>">
            </div>
            <div class="community-filter-pills" role="group" aria-label="<?php esc_attr_e( 'Community content filters', 'bambu' ); ?>">
                <button class="is-active" type="button" data-filter="all"><?php esc_html_e( 'Opportunity Status', 'bambu' ); ?> <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M11.0827 5.25L6.99935 9.33333L2.91602 5.25" stroke="#9CA3AF" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <button type="button" data-filter="all"><?php esc_html_e( 'Territory', 'bambu' ); ?> <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M11.0827 5.25L6.99935 9.33333L2.91602 5.25" stroke="#9CA3AF" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <button type="button" data-filter="all"><?php esc_html_e( 'Categories', 'bambu' ); ?> <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M11.0827 5.25L6.99935 9.33333L2.91602 5.25" stroke="#9CA3AF" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <button type="button" data-filter="all"><?php esc_html_e( 'Sub-category', 'bambu' ); ?> <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M11.0827 5.25L6.99935 9.33333L2.91602 5.25" stroke="#9CA3AF" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <button type="button" data-filter="all"><?php esc_html_e( 'Financial Value', 'bambu' ); ?> <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M11.0827 5.25L6.99935 9.33333L2.91602 5.25" stroke="#9CA3AF" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <button type="button" data-filter="all"><?php esc_html_e( 'Accepts International Submissions', 'bambu' ); ?> <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M11.0827 5.25L6.99935 9.33333L2.91602 5.25" stroke="#9CA3AF" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
            </div>
        </div>
    </section>

    <section class="community-section community-news" data-content-section="news">
        <div class="community-container">
            <div class="community-section-header"><h2><?php esc_html_e( 'News', 'bambu' ); ?></h2><div class="community-section-actions"><div class="community-nav-controls"><button type="button" aria-label="<?php esc_attr_e( 'Previous news', 'bambu' ); ?>"><img src="<?php echo esc_url( bambu_get_media_asset_url( 'community/d7922.svg' ) ); ?>" alt=""></button><button type="button" aria-label="<?php esc_attr_e( 'Next news', 'bambu' ); ?>"><img src="<?php echo esc_url( bambu_get_media_asset_url( 'community/e808e.svg' ) ); ?>" alt=""></button></div><a href="<?php echo esc_url( home_url( '/insights-resources/' ) ); ?>"><?php esc_html_e( 'Read more', 'bambu' ); ?> <img src="<?php echo esc_url( bambu_get_media_asset_url( 'community/57ffb.svg' ) ); ?>" alt=""></a></div></div>
            <div class="community-news-grid">
                <?php foreach ( $news_articles as $news ) : ?>
                    <article class="community-news-card" data-search="<?php echo esc_attr( strtolower( $news['title'] . ' ' . $news['topic'] ) ); ?>">
                        <div class="community-news-image"><img src="<?php echo esc_url( bambu_get_media_asset_url( 'community/' . $news['image'] ) ); ?>" alt="<?php echo esc_attr( $news['title'] ); ?>"><span><?php esc_html_e( 'For Member Only', 'bambu' ); ?></span></div>
                        <div class="community-news-body">
                            <div class="community-tag-row"><span class="community-news-tag-<?php echo esc_attr( $news['tone'] ); ?>"><?php echo esc_html( $news['tag'] ); ?></span><span><?php echo esc_html( $news['topic'] ); ?></span></div>
                            <time><?php echo esc_html( $news['date'] ); ?></time>
                            <h3><?php echo esc_html( $news['title'] ); ?></h3>
                            <p><?php echo esc_html( $news['excerpt'] ); ?></p>
                            <div class="community-card-footer"><a href="<?php echo esc_url( home_url( '/insights-resources/' ) ); ?>"><?php esc_html_e( 'Read article', 'bambu' ); ?> <img src="<?php echo esc_url( bambu_get_media_asset_url( 'community/read-article.svg' ) ); ?>" alt=""></a><span><?php echo esc_html( $news['read_time'] ); ?></span></div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
            <div class="community-show-more"><a href="<?php echo esc_url( home_url( '/insights-resources/' ) ); ?>"><?php esc_html_e( 'Show more articles', 'bambu' ); ?> <img src="<?php echo esc_url( bambu_get_media_asset_url( 'community/144a8.svg' ) ); ?>" alt=""></a></div>
        </div>
    </section>

    <section class="community-section community-events" data-content-section="events">
        <div class="community-container">
            <div class="community-section-header"><h2><?php _e( 'Events &amp; Webinars', 'bambu' ); ?></h2><a href="<?php echo esc_url( home_url( '/events/' ) ); ?>"><?php esc_html_e( 'Explore more Events', 'bambu' ); ?> <img src="<?php echo esc_url( bambu_get_media_asset_url( 'community/57ffb.svg' ) ); ?>" alt=""></a></div>
            <div class="community-events-grid">
                <?php foreach ( $events as $event ) : ?>
                    <article class="community-event-card" data-search="<?php echo esc_attr( strtolower( $event['title'] . ' ' . implode( ' ', $event['meta'] ) ) ); ?>">
                        <div class="community-event-image"><img src="<?php echo esc_url( bambu_get_media_asset_url( 'community/' . $event['image'] ) ); ?>" alt="<?php echo esc_attr( $event['alt'] ); ?>"><span class="community-event-type"><?php echo esc_html( $event['type'] ); ?></span><span class="community-event-date"><b class="<?php echo esc_attr( $event['month_class'] ); ?>"><?php echo esc_html( $event['month'] ); ?></b><strong><?php echo esc_html( $event['day'] ); ?></strong></span></div>
                        <div class="community-event-body"><h3><?php echo esc_html( $event['title'] ); ?></h3><ul><?php foreach ( $event['meta'] as $meta ) : ?><li><?php echo esc_html( $meta ); ?></li><?php endforeach; ?></ul></div>
                        <a class="community-event-action" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>"><?php esc_html_e( 'Register now', 'bambu' ); ?> <img src="<?php echo esc_url( bambu_get_media_asset_url( 'community/register-now.svg' ) ); ?>" alt=""></a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="community-section community-iotw" data-content-section="innovation">
        <div class="community-container">
            <div class="community-section-header"><h2><?php esc_html_e( 'Innovation of the Week', 'bambu' ); ?></h2><div class="community-section-actions"><div class="community-nav-controls"><button type="button" aria-label="<?php esc_attr_e( 'Previous innovation', 'bambu' ); ?>"><img src="<?php echo esc_url( bambu_get_media_asset_url( 'community/d7922.svg' ) ); ?>" alt=""></button><button type="button" aria-label="<?php esc_attr_e( 'Next innovation', 'bambu' ); ?>"><img src="<?php echo esc_url( bambu_get_media_asset_url( 'community/e808e.svg' ) ); ?>" alt=""></button></div><a href="<?php echo esc_url( home_url( '/insights-resources/' ) ); ?>"><?php esc_html_e( 'Read more', 'bambu' ); ?> <img src="<?php echo esc_url( bambu_get_media_asset_url( 'community/57ffb.svg' ) ); ?>" alt=""></a></div></div>
            <article class="community-iotw-card"><div class="community-iotw-image"><img src="<?php echo esc_url( bambu_get_media_asset_url( 'community/99d65.png' ) ); ?>" alt="<?php esc_attr_e( 'Selex Motors Clean Mobility AI Platform', 'bambu' ); ?>"><span><?php esc_html_e( 'INNOVATION OF THE WEEK', 'bambu' ); ?></span></div><div class="community-iotw-content"><div><div class="community-tag-row"><span><?php _e( 'Cleantech &amp; AI', 'bambu' ); ?></span><span><?php esc_html_e( 'Mobility', 'bambu' ); ?></span><time><?php esc_html_e( 'Updated July 2026', 'bambu' ); ?></time></div><p class="community-kicker"><?php esc_html_e( 'FEATURED CASE • SELEX MOTORS', 'bambu' ); ?></p><h3><?php esc_html_e( 'How Selex Motors Scaled Their Clean Mobility AI Solution Across Southeast Asia', 'bambu' ); ?></h3><p><?php esc_html_e( 'Discover how an innovative mobility venture built a proprietary battery-swapping network and AI fleet platform, partnering with regional enterprises to drive net-zero logistics across urban transit hubs.', 'bambu' ); ?></p></div><div class="community-card-footer"><a href="<?php echo esc_url( home_url( '/insights-resources/' ) ); ?>"><?php esc_html_e( 'Read full story', 'bambu' ); ?> <span aria-hidden="true">↗</span></a><span><?php esc_html_e( '6 min read • Case Study', 'bambu' ); ?></span></div></div></article>
        </div>
    </section>

    <section class="community-section community-innovation-up" data-content-section="innovation">
        <div class="community-container">
            <div class="community-section-header"><h2><?php esc_html_e( 'Innovation UP', 'bambu' ); ?></h2><div class="community-section-actions"><div class="community-nav-controls"><button type="button" aria-label="<?php esc_attr_e( 'Previous Innovation UP', 'bambu' ); ?>"><img src="<?php echo esc_url( bambu_get_media_asset_url( 'community/d7922.svg' ) ); ?>" alt=""></button><button type="button" aria-label="<?php esc_attr_e( 'Next Innovation UP', 'bambu' ); ?>"><img src="<?php echo esc_url( bambu_get_media_asset_url( 'community/e808e.svg' ) ); ?>" alt=""></button></div><a href="<?php echo esc_url( home_url( '/insights-resources/' ) ); ?>"><?php esc_html_e( 'Read more', 'bambu' ); ?> <img src="<?php echo esc_url( bambu_get_media_asset_url( 'community/57ffb.svg' ) ); ?>" alt=""></a></div></div>
            <div class="community-innovation-grid">
                <?php foreach ( $innovation_cards as $card ) : ?>
                    <article class="community-innovation-card" data-search="<?php echo esc_attr( strtolower( $card['title'] . ' ' . $card['tag'] . ' ' . $card['partner'] ) ); ?>"><div class="community-innovation-image"><img src="<?php echo esc_url( bambu_get_media_asset_url( 'community/' . $card['image'] ) ); ?>" alt="<?php echo esc_attr( $card['alt'] ); ?>"><span><?php echo esc_html( $card['badge'] ); ?></span></div><div class="community-innovation-body"><div class="community-innovation-meta"><span><?php echo esc_html( $card['tag'] ); ?></span><time><?php echo esc_html( $card['duration'] ); ?></time></div><h3><?php echo esc_html( $card['title'] ); ?></h3><p><?php echo esc_html( $card['excerpt'] ); ?></p><div class="community-innovation-stats"><div><strong><?php echo esc_html( $card['value_one'] ); ?></strong><span><?php echo esc_html( $card['label_one'] ); ?></span></div><div><strong><?php echo esc_html( $card['value_two'] ); ?></strong><span><?php echo esc_html( $card['label_two'] ); ?></span></div></div><div class="community-card-footer"><span><?php echo esc_html( $card['partner'] ); ?></span><a href="<?php echo esc_url( home_url( '/insights-resources/' ) ); ?>"><?php esc_html_e( 'Read case study', 'bambu' ); ?> <img src="<?php echo esc_url( bambu_get_media_asset_url( 'community/read-case-study.svg' ) ); ?>" alt=""></a></div></div></article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/partners-section' ); ?>
    <?php get_template_part( 'template-parts/cta-banner' ); ?>
</main>
<?php get_footer(); ?>
