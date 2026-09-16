<?php
/**
 * Template Name: Bambu - Pricing
 * Template Post Type: page
 *
 * @package Bambu
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$plans = array(
    array(
        'class'        => 'pricing-plan-standard',
        'name'         => 'Standard',
        'description'  => 'Explore the innovation ecosystem',
        'price'        => 'Free',
        'period'       => '',
        'billing'      => 'Lifetime access - No time limit. No payment information required.',
        'cta'          => 'Join Standard ↗',
        'url'          => '/register/',
        'features'     => array(
            'Unlimited access to the Innovation Marketplace',
            'Access public Challenge Hub opportunities',
            'Search startups, solutions and use cases with basic filters',
            'Save and follow organizations of interest',
            'Access Innovation Newsletter and Open Innovation 101 content',
            '03 Connect Requests per month',
        ),
        'not_included' => array( 'Advanced filters and market mapping', 'Research & IP Connect', 'Annual Connect Credits', 'Dedicated expert advisory', 'Challenge Room' ),
        'sales'        => 'Sales Channel: Self-service',
    ),
    array(
        'class'       => 'pricing-plan-pro pricing-plan-recommended',
        'name'        => 'Pro',
        'description' => 'Designed for organizations proactively sourcing innovation through Data + AI + Toolkit.',
        'price'       => '999$',
        'period'      => '/ year',
        'billing'     => 'Annual billing • Electronic invoice included',
        'cta'         => 'Upgrade to Pro ↗',
        'url'         => '/register/',
        'features'    => array(
            'Access Research & IP Connect',
            'Advanced filtering, market mapping and Innovation Dashboard',
            'Quarterly Innovation Trend Reports',
            'Connect with ecosystem experts and partners',
            'Search, receive recommendations and connect with experts, startups, universities and strategic partners',
            '100 Connect Credits annually to engage with solution providers, IP owners and innovation experts',
            'Exclusive introductions to featured funds and investors through Challenge Hub (quarterly)',
            'Apply and submit proposals to challenge programmes from government agencies, corporations and enterprises',
            'Access exclusive quarterly Innovation Webinars for BambuUP members',
        ),
        'not_included' => array( 'Dedicated Challenge Room', 'Industry-specific Innovation Reports', 'Dedicated expert advisory', 'Startup & Partner Scouting' ),
        'sales'       => 'Up to 10 member seats • Sales Channel: Online Purchase',
    ),
    array(
        'class'       => 'pricing-plan-business',
        'name'        => 'Business',
        'description' => 'Talk to an Expert. Request a demo and a 7-day evaluation account.',
        'price'       => '9,999$',
        'period'      => '/ year',
        'billing'     => 'Custom contract • Flexible terms',
        'cta'         => 'Join Business ↗',
        'url'         => '/contact-us/',
        'features'    => array(
            'Everything in Pro, plus:',
            'Unlimited users across the organization',
            'AI Agent for research, analysis and solution recommendations',
            'Unlimited Connect Credits',
            'Innovation OS Toolkit: Challenge Management, Evaluation, PoC and Pipeline Management',
            '02 annual Startup & Partner Scouting requests',
            '01 dedicated Challenge Room',
            'Dedicated innovation consulting package (8 hours annually)',
            '01 industry-specific Innovation Report annually',
            '5% discount on innovation services upon request',
            'Exclusive offers and benefits for Business members',
            'Access to a private Business community with curated insights, networking and investment opportunities',
        ),
        'not_included' => array(),
        'sales'       => 'Sales Channel: Consultation & Contract',
    ),
);

$comparison_groups = array(
    array(
        'name' => 'Marketplace access',
        'rows' => array(
            array( 'Browse verified partner directory', 'Included', 'Included', 'Included' ),
            array( 'Detailed organization profile & portfolio showcase', '—', 'Included', 'Included' ),
            array( 'Patent and research publications search', '—', '—', 'Included' ),
            array( 'Innovation taxonomy filters & automated alert tags', '—', 'Standard', 'Advanced' ),
        ),
    ),
    array(
        'name' => 'Connections',
        'rows' => array(
            array( 'Direct connection requests per month', '5', '15', 'Unlimited' ),
            array( 'In-app direct messaging & chat history', 'Included', 'Included', 'Included' ),
            array( 'Contact response guarantee time window', '7d', '48 hrs', 'Priority (24h)' ),
            array( 'Partner matchmaking introduction assistance', '—', 'Included', 'Included' ),
        ),
    ),
    array(
        'name' => 'Publishing & Challenges',
        'rows' => array(
            array( 'Active submissions on Challenge Hub', '1', '5', 'Unlimited' ),
            array( 'Submit open innovation needs / RFPs to external network', '—', 'Unlimited', 'Unlimited' ),
            array( 'White-label branded challenge landing page', '—', '—', 'Included' ),
            array( 'Showcase promotion & community newsletter inclusion', 'Basic', 'Bi-Monthly', 'Custom Spotlight' ),
        ),
    ),
    array(
        'name' => 'Team & Support',
        'rows' => array(
            array( 'Included account seats', '1', '10', '50' ),
            array( 'Dedicated Innovation Manager', '—', '—', 'Included' ),
            array( 'Customer support response SLA', 'Help Center', 'Email', 'Priority Live Chat' ),
        ),
    ),
);

$faqs = array(
    array( 'Can I change my plan later?', 'Yes. You can upgrade or downgrade your plan at any time from your account profile settings. When upgrading, prorated billing applies automatically for the remaining period.' ),
    array( 'What counts as a connection request?', 'A connection request is a direct request to connect with an organization, expert, startup or partner through the BambuUP platform.' ),
    array( 'Can I post both Innovation Needs and Offers?', 'Yes. Your plan determines which publishing and marketplace capabilities are available to your organization.' ),
    array( 'Are Challenge Hub submissions included?', 'Challenge Hub access depends on the plan. Review the comparison table above for the available limits.' ),
    array( 'Do unused limits roll over?', 'Plan limits reset at the start of each billing period and do not roll over unless specified in your contract.' ),
    array( 'Do you offer custom plans for larger organizations?', 'Yes. Contact our team to discuss custom seats, limits, support and enterprise requirements.' ),
);

get_header();
?>
<main id="primary" class="site-main innovation-intelligence-page pricing-page">
    <?php
    get_template_part(
        'template-parts/global-hero',
        null,
        array(
            'page_key' => 'pricing',
            'fallback' => array(
                'breadcrumb'  => 'Pricing',
                'title'       => 'Pricing',
                'description' => 'Flexible plans designed to help organisations access the right capabilities, connections and opportunities at every stage of innovation',
            ),
        )
    );
    ?>

    <div class="pricing-content">
        <section class="pricing-plans-section" aria-labelledby="pricing-plans-title">
            <div class="pricing-container">
                <div class="pricing-plans-grid">
                    <?php foreach ( $plans as $plan ) : ?>
                        <article class="pricing-plan-card <?php echo esc_attr( $plan['class'] ); ?>">
                            <?php if ( false !== strpos( $plan['class'], 'recommended' ) ) : ?>
                                <span class="pricing-recommended">RECOMMENDED</span>
                            <?php endif; ?>
                            <h2 class="pricing-plan-name"><?php echo esc_html( $plan['name'] ); ?></h2>
                            <p class="pricing-plan-description"><?php echo esc_html( $plan['description'] ); ?></p>
                            <div class="pricing-plan-price">
                                <strong><?php echo esc_html( $plan['price'] ); ?></strong>
                                <?php if ( $plan['period'] ) : ?><span><?php echo esc_html( $plan['period'] ); ?></span><?php endif; ?>
                            </div>
                            <p class="pricing-plan-billing"><?php echo esc_html( $plan['billing'] ); ?></p>
                            <a class="pricing-plan-cta" href="<?php echo esc_url( home_url( $plan['url'] ) ); ?>"><?php echo esc_html( $plan['cta'] ); ?></a>
                            <div class="pricing-feature-group">
                                <p class="pricing-feature-heading"><?php echo 'pricing-plan-business' === $plan['class'] ? 'Everything in Pro, plus:' : ( 'pricing-plan-pro pricing-plan-recommended' === $plan['class'] ? 'Everything in Standard, plus:' : 'Included features' ); ?></p>
                                <ul class="pricing-feature-list">
                                    <?php foreach ( $plan['features'] as $feature ) : ?>
                                        <li><?php echo esc_html( $feature ); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <?php if ( $plan['not_included'] ) : ?>
                                <div class="pricing-not-included">
                                    <p>Not included:</p>
                                    <ul>
                                        <?php foreach ( $plan['not_included'] as $feature ) : ?>
                                            <li><?php echo esc_html( $feature ); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <p class="pricing-plan-sales"><?php echo esc_html( $plan['sales'] ); ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="pricing-comparison-section" aria-labelledby="comparison-title">
            <div class="pricing-container pricing-comparison-card">
                <h2 id="comparison-title">Compare all plan features</h2>
                <p>See what is included and choose the plan that fits your needs</p>
                <div class="pricing-table-wrap">
                    <table class="pricing-table">
                        <thead>
                            <tr>
                                <th scope="col">FEATURES</th>
                                <th scope="col">STANDARD</th>
                                <th scope="col">BUSINESS</th>
                                <th scope="col" class="is-recommended">PRO <span>RECOMMENDED</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ( $comparison_groups as $group ) : ?>
                                <tr class="pricing-table-group"><th colspan="4" scope="colgroup"><?php echo esc_html( $group['name'] ); ?></th></tr>
                                <?php foreach ( $group['rows'] as $row ) : ?>
                                    <tr>
                                        <?php foreach ( $row as $column_index => $value ) : ?>
                                            <?php if ( 0 === $column_index ) : ?>
                                                <th scope="row"><?php echo esc_html( $value ); ?></th>
                                            <?php else : ?>
                                                <td class="<?php echo '—' === $value ? 'is-muted' : ''; ?>"><?php echo esc_html( $value ); ?></td>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th scope="row">Need more seats or custom limits? <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Contact us ↗</a></th>
                                <td><a class="pricing-table-cta" href="<?php echo esc_url( home_url( '/register/' ) ); ?>">Join Standard</a></td>
                                <td><a class="pricing-table-cta" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Join Business</a></td>
                                <td><a class="pricing-table-cta pricing-table-cta-primary" href="<?php echo esc_url( home_url( '/register/' ) ); ?>">Upgrade to Pro</a></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </section>

        <section class="pricing-faq-section" aria-labelledby="faq-title">
            <div class="pricing-container">
                <h2 id="faq-title">Frequently Asked Questions</h2>
                <div class="pricing-faq-list">
                    <?php foreach ( $faqs as $index => $faq ) : ?>
                        <article class="pricing-faq-item <?php echo 0 === $index ? 'is-open' : ''; ?>">
                            <button class="pricing-faq-question" type="button" aria-expanded="<?php echo 0 === $index ? 'true' : 'false'; ?>">
                                <span><?php echo esc_html( $faq[0] ); ?></span><strong aria-hidden="true"><?php echo 0 === $index ? '−' : '+'; ?></strong>
                            </button>
                            <div class="pricing-faq-answer" <?php echo 0 === $index ? '' : 'hidden'; ?>><p><?php echo esc_html( $faq[1] ); ?></p></div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <?php get_template_part( 'template-parts/partners-section' ); ?>

        <?php get_template_part( 'template-parts/cta-banner' ); ?>
    </div>
</main>
<?php get_footer(); ?>
