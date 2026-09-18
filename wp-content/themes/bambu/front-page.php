<?php

/**
 * Bambu Home template.
 *
 * @package Bambu
 */
if (! defined('ABSPATH')) {
    exit;
}
get_header();
?>

<main id="primary" class="site-main">
    <div class="content-stack">
        <div class="hero-section">
            <div class="hero-inner">
                <div class="innovation-hero-content">
                    <h1 id="innovation-hero-heading" class="innovation-hero-heading">
                        <span class="innovation-hero-heading-prefix"><?php esc_html_e('Connect to', 'bambu'); ?></span>
                        <span class="innovation-hero-heading-accent"><?php esc_html_e('Innovate', 'bambu'); ?></span>
                    </h1>
                    <p class="innovation-hero-description">
                        <?php esc_html_e('A one-stop open innovation platform to facilitate meaningful connection between Innovation Seekers & Innovation Providers', 'bambu'); ?>
                    </p>
                    <nav class="innovation-hero-actions" aria-label="<?php esc_attr_e('Innovation hero actions', 'bambu'); ?>">
                        <a class="innovation-hero-action innovation-hero-action-primary" href="<?php echo esc_url(home_url('/innovation/')); ?>">
                            <span><?php esc_html_e('Explore Our Innovations', 'bambu'); ?></span>
                            <img src="<?php echo esc_url( bambu_get_media_asset_url( 'container-1.svg' ) ); ?>" alt="" aria-hidden="true">
                        </a>
                    </nav>
                </div>
            </div>
            <div class="metrics-row">
                <div class="metric-item">
                    <div class="centered-label-wrapper">
                        <div class="metric-label"><?php esc_html_e( 'PARTNERS', 'bambu' ); ?></div>
                    </div>
                    <p class="metric-value"><span
                            class="metric-number-value">7000</span>
                        <span class="metric-suffix">+</span>
                    </p>
                    <div class="metric-description-wrapper">
                        <p class="metric-description"><?php esc_html_e( 'Organisations contributing', 'bambu' ); ?> <br> <?php esc_html_e( 'expertise, access and opportunity', 'bambu' ); ?></p>
                    </div>
                </div>
                <div class="metric-item">
                    <div class="centered-label-wrapper">
                        <div class="metric-label"><?php esc_html_e( 'TOP EXPERTS', 'bambu' ); ?></div>
                    </div>
                    <p class="metric-value"><span
                            class="metric-number-value">300</span>
                        <span class="metric-suffix">+</span>
                    </p>
                    <div class="metric-description-wrapper">
                        <p class="metric-description"><?php _e( 'Mentors &amp; advisors across', 'bambu' ); ?> <br> <?php esc_html_e( 'emerging high-impact sectors', 'bambu' ); ?></p>
                    </div>
                </div>
                <div class="metric-item">
                    <div class="centered-label-wrapper">
                        <div class="metric-label"><?php esc_html_e( 'STARTUPS', 'bambu' ); ?></div>
                    </div>
                    <p class="metric-value"><span
                            class="metric-number-value">60</span>
                        <span class="metric-suffix">+</span>
                    </p>
                    <div class="metric-description-wrapper">
                        <p class="metric-description"><?php esc_html_e( 'Accelerated cohorts and scalable', 'bambu' ); ?> <br> <?php esc_html_e( 'ventures launched', 'bambu' ); ?></p>
                    </div>
                </div>
                <div class="metric-item">
                    <div class="centered-label-wrapper">
                        <div class="metric-label"><?php esc_html_e( 'SUCCESSFUL MATCHINGS', 'bambu' ); ?></div>
                    </div>
                    <p class="metric-value"><span
                            class="metric-number-value">40</span>
                        <span class="metric-suffix">+</span>
                    </p>
                    <div class="metric-description-wrapper">
                        <p class="metric-description"><?php esc_html_e( 'Commercial pilots converted to', 'bambu' ); ?> <br> <?php esc_html_e( 'long-term engagements', 'bambu' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-section">
            <div class="platform-section-inner">
                <div class="platform-section-header">
                    <div class="platform-heading-group">
                        <div class="content-stack">
                            <div class="platform-eyebrow"><?php esc_html_e( 'FIND YOUR STARTING POINT', 'bambu' ); ?></div>
                        </div>
                        <div class="platform-heading">
                            <div class="section-title"><?php esc_html_e( 'One platform', 'bambu' ); ?> <br> <?php esc_html_e( 'Powering innovation', 'bambu' ); ?> <br> <?php esc_html_e( 'partnerships', 'bambu' ); ?></div>
                        </div>
                    </div>
                    <div class="platform-intro">
                        <p class="platform-description"><?php esc_html_e( 'Start with your objective. BambuUP
                            connects innovation demand with proven capabilities, accelerating the path from
                            opportunity to impact.', 'bambu' ); ?></p>
                    </div>
                </div>
                <div class="card-grid">
                    <div class="audience-card-seeker">
                        <div class="seeker-card-image"></div>
                        <div class="audience-card-overlay"></div>
                        <div class="card-icon-wrapper">
                            <div class="card-icon">
                                <div class="card-icon-letter">S</div>
                            </div>
                        </div>
                        <div class="audience-card-content">
                            <div class="content-stack">
                                <div class="audience-card-eyebrow"><?php esc_html_e( 'FOR INNOVATION SEEKERS', 'bambu' ); ?>
                                </div>
                            </div>
                            <div class="audience-card-heading">
                                <p class="seeker-card-title"><?php esc_html_e( 'Discover solutions that
                                    accelerate business transformation', 'bambu' ); ?></p>
                            </div>
                            <div class="card-action-link">
                                <div class="layout-stack">
                                    <div class="card-action-label"><?php esc_html_e( 'Explore innovation
                                        needs', 'bambu' ); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="audience-card-provider">
                        <div class="provider-card-image"></div>
                        <div class="audience-card-overlay-provider"></div>
                        <div class="card-icon-wrapper">
                            <div class="card-icon">
                                <div class="card-icon-letter">P</div>
                            </div>
                        </div>
                        <div class="audience-card-content">
                            <div class="content-stack">
                                <div class="audience-card-eyebrow"><?php esc_html_e( 'FOR INNOVATION PROVIDERS', 'bambu' ); ?>
                                </div>
                            </div>
                            <div class="audience-card-heading">
                                <p class="provider-card-title"><?php esc_html_e( 'Transform innovation
                                    capabilities into enterprise opportunities', 'bambu' ); ?></p>
                            </div>
                            <div class="card-action-link">
                                <div class="layout-stack">
                                    <div class="card-action-label"><?php esc_html_e( 'Showcase your solution', 'bambu' ); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-section">
            <div class="services-section-inner">
                <div class="section-header">
                    <div class="services-heading-group">
                        <div class="content-stack">
                            <div class="services-eyebrow"><?php esc_html_e( 'OUR SERVICES', 'bambu' ); ?></div>
                        </div>
                        <div class="content-stack">
                            <div class="section-title"><?php esc_html_e( 'Connecting Innovation', 'bambu' ); ?> <br> <?php esc_html_e( 'Creating Impact', 'bambu' ); ?></div>
                        </div>
                    </div>
                    <div class="services-intro">
                        <p class="services-description"><?php esc_html_e( 'Three complementary service lines
                            designed to transform innovation opportunities into strategic partnerships, scalable
                            programmes and long-term growth', 'bambu' ); ?></p>
                    </div>
                </div>
                <div class="services-list">
                    <div class="service-card-primary">
                        <div class="layout-stack">
                            <div class="service-index-label">01</div>
                        </div>
                        <div class="service-image-frame">
                            <div class="innovation-service-image"></div>
                        </div>
                        <div class="service-content">
                            <div class="content-stack">
                                <div class="service-title-primary"><?php esc_html_e( 'Innovation-as-a-Service', 'bambu' ); ?>
                                </div>
                            </div>
                            <div class="service-description-wrapper">
                                <p class="service-description-primary"><?php esc_html_e( 'From strategy to execution,
                                    across a proven roadmap for scalable open innovation success', 'bambu' ); ?></p>
                            </div>
                        </div>
                        <button class="service-action-button service-action-button-primary" type="button" aria-label="<?php esc_attr_e( 'View Innovation-as-a-Service', 'bambu' ); ?>">
                            <img src="<?php echo esc_url( bambu_get_media_asset_url( 'container-16.svg' ) ); ?>" alt="" aria-hidden="true">
                        </button>
                    </div>
                    <div class="service-card-secondary">
                        <div class="service-index-wrapper">
                            <div class="service-index-label-secondary">02</div>
                        </div>
                        <div class="service-image-frame-secondary">
                            <div class="accelerator-service-image"></div>
                        </div>
                        <div class="service-content-secondary">
                            <div class="content-stack">
                                <div class="service-title-secondary"><?php esc_html_e( 'Accelerator-as-a-Service', 'bambu' ); ?>
                                </div>
                            </div>
                            <div class="service-description-wrapper">
                                <p class="service-description-secondary"><?php esc_html_e( 'Build and scale accelerator
                                    programmes that drive meaningful collaboration and measurable business outcomes', 'bambu' ); ?>
                                </p>
                            </div>
                        </div>
                        <button class="service-action-button service-action-button-secondary" type="button" aria-label="<?php esc_attr_e( 'View Accelerator-as-a-Service', 'bambu' ); ?>">
                            <img src="<?php echo esc_url( bambu_get_media_asset_url( 'container-8.svg' ) ); ?>" alt="" aria-hidden="true">
                        </button>
                    </div>
                    <div class="service-card-secondary">
                        <div class="service-index-wrapper">
                            <div class="service-index-label-secondary">03</div>
                        </div>
                        <div class="service-image-frame-secondary">
                            <div class="investment-service-image"></div>
                        </div>
                        <div class="service-content-secondary">
                            <div class="content-stack">
                                <div class="service-title-secondary"><?php esc_html_e( 'Innovation
                                    Investment-as-a-Service', 'bambu' ); ?></div>
                            </div>
                            <div class="service-description-wrapper">
                                <p class="service-description-tertiary"><?php esc_html_e( 'Transform innovation into
                                    scalable growth through investment, governance and venture execution', 'bambu' ); ?></p>
                            </div>
                        </div>
                        <button class="service-action-button service-action-button-secondary" type="button" aria-label="<?php esc_attr_e( 'View Innovation Investment-as-a-Service', 'bambu' ); ?>">
                            <img src="<?php echo esc_url( bambu_get_media_asset_url( 'container-8.svg' ) ); ?>" alt="" aria-hidden="true">
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-section">
            <div class="content-section-inner">
                <div class="opportunities-header">
                    <div class="opportunities-heading-group">
                        <div class="section-title-wrapper">
                            <div class="section-kicker"><?php esc_html_e( 'INNOVATION INTELLIGENCE', 'bambu' ); ?></div>
                        </div>
                        <div class="subheading-wrapper">
                            <div class="opportunities-subheading"><?php esc_html_e( 'Live opportunities', 'bambu' ); ?></div>
                        </div>
                    </div>
                    <button class="section-action-link section-action-control" type="button" aria-label="<?php esc_attr_e( 'View all opportunities', 'bambu' ); ?>">
                        <span class="layout-stack">
                            <span class="section-action-label"><?php esc_html_e( 'View all opportunities', 'bambu' ); ?></span>
                        </span>
                        <svg class="section-action-icon" width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                            <path d="M10.2891 5.03906C10.4297 4.88281 10.5 4.70312 10.5 4.5V4.5V4.5C10.5 4.29688 10.4297 4.11719 10.2891 3.96094L6.53906 0.210938V0.210938C6.38281 0.0703125 6.20312 0 6 0C5.79688 0 5.61719 0.0703125 5.46094 0.210938C5.32031 0.367188 5.25 0.546875 5.25 0.75C5.25 0.953125 5.32031 1.13281 5.46094 1.28906L7.94531 3.75V3.75H0.75V3.75C0.53125 3.75 0.351562 3.82031 0.210938 3.96094C0.0703125 4.10156 0 4.28125 0 4.5C0 4.71875 0.0703125 4.89844 0.210938 5.03906C0.351562 5.17969 0.53125 5.25 0.75 5.25H7.94531V5.25L5.46094 7.71094V7.71094C5.32031 7.86719 5.25 8.04688 5.25 8.25C5.25 8.45312 5.32031 8.63281 5.46094 8.78906C5.61719 8.92969 5.79688 9 6 9C6.20312 9 6.38281 8.92969 6.53906 8.78906L10.2891 5.03906V5.03906V5.03906" fill="#059669"/>
                        </svg>
                    </button>
                </div>
                <div class="card-grid">
                    <div class="opportunity-card">
                        <div class="opportunity-image-wrapper">
                            <div class="low-carbon-materials-image"></div>
                            <div class="opportunity-type-badge">
                                <div class="opportunity-type-label"><?php esc_html_e( 'Innovation Need', 'bambu' ); ?></div>
                            </div>
                        </div>
                        <div class="opportunity-body">
                            <div class="opportunity-content">
                                <div class="content-stack">
                                    <p class="opportunity-title"><?php esc_html_e( 'Low-carbon materials for
                                        next-', 'bambu' ); ?> <br> <?php esc_html_e( 'generation production', 'bambu' ); ?></p>
                                </div>
                                <div class="opportunity-tags">
                                    <div class="opportunity-tag">
                                        <div class="opportunity-tag-label"><?php esc_html_e( 'Materials', 'bambu' ); ?></div>
                                    </div>
                                    <div class="opportunity-tag">
                                        <div class="opportunity-tag-label"><?php esc_html_e( 'Sustainability', 'bambu' ); ?>
                                        </div>
                                    </div>
                                    <div class="opportunity-tag">
                                        <div class="opportunity-tag-label"><?php esc_html_e( 'Packaging', 'bambu' ); ?></div>
                                    </div>
                                </div>
                                <div class="opportunity-description-wrapper">
                                    <p class="opportunity-description"><?php esc_html_e( 'Seeking scalable
                                        technologies that reduce embodied', 'bambu' ); ?> <br> <?php esc_html_e( 'carbon
                                        without compromising operational', 'bambu' ); ?> <br> <?php esc_html_e( 'performance.', 'bambu' ); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="opportunity-footer">
                                <div class="opportunity-footer-inner">
                                    <div class="section-action-link">
                                        <div class="layout-stack">
                                            <div class="details-action-label"><?php esc_html_e( 'View details', 'bambu' ); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="opportunity-card">
                        <div class="opportunity-image-wrapper">
                            <div class="predictive-intelligence-image"></div>
                            <div class="opportunity-type-badge-secondary">
                                <div class="opportunity-type-label"><?php esc_html_e( 'Innovation Offer', 'bambu' ); ?></div>
                            </div>
                        </div>
                        <div class="opportunity-body">
                            <div class="opportunity-content">
                                <div class="content-stack">
                                    <p class="opportunity-title"><?php esc_html_e( 'Predictive intelligence
                                        for resilient', 'bambu' ); ?> <br> <?php esc_html_e( 'supply networks', 'bambu' ); ?></p>
                                </div>
                                <div class="opportunity-tags">
                                    <div class="opportunity-tag">
                                        <div class="opportunity-tag-label"><?php _e( 'AI &amp; Analytics', 'bambu' ); ?>
                                        </div>
                                    </div>
                                    <div class="opportunity-tag">
                                        <div class="opportunity-tag-label"><?php esc_html_e( 'Supply Chain', 'bambu' ); ?></div>
                                    </div>
                                    <div class="opportunity-tag">
                                        <div class="opportunity-tag-label"><?php esc_html_e( 'Digital Tech', 'bambu' ); ?></div>
                                    </div>
                                </div>
                                <div class="opportunity-description-wrapper">
                                    <p class="opportunity-description"><?php esc_html_e( 'A decision platform
                                        designed to identify risk early', 'bambu' ); ?> <br> <?php esc_html_e( 'and improve
                                        operational response through real-time', 'bambu' ); ?> <br> <?php esc_html_e( 'telemetry.', 'bambu' ); ?></p>
                                </div>
                            </div>
                            <div class="opportunity-footer">
                                <div class="opportunity-footer-inner">
                                    <div class="section-action-link">
                                        <div class="layout-stack">
                                            <div class="details-action-label"><?php esc_html_e( 'View details', 'bambu' ); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="opportunity-card">
                        <div class="opportunity-image-wrapper">
                            <div class="sustainable-packaging-image"></div>
                            <div class="opportunity-type-badge">
                                <div class="opportunity-type-label"><?php esc_html_e( 'Innovation Need', 'bambu' ); ?></div>
                            </div>
                        </div>
                        <div class="opportunity-body">
                            <div class="opportunity-content">
                                <div class="content-stack">
                                    <div class="opportunity-title"><?php esc_html_e( 'Rethinking sustainable
                                        packaging at', 'bambu' ); ?> <br> <?php esc_html_e( 'scale', 'bambu' ); ?></div>
                                </div>
                                <div class="opportunity-tags">
                                    <div class="opportunity-tag">
                                        <div class="opportunity-tag-label"><?php esc_html_e( 'Packaging', 'bambu' ); ?></div>
                                    </div>
                                    <div class="opportunity-tag">
                                        <div class="opportunity-tag-label"><?php esc_html_e( 'Bio-based', 'bambu' ); ?></div>
                                    </div>
                                    <div class="opportunity-tag">
                                        <div class="opportunity-tag-label"><?php esc_html_e( 'Circular', 'bambu' ); ?></div>
                                    </div>
                                </div>
                                <div class="opportunity-description-wrapper">
                                    <p class="opportunity-description"><?php esc_html_e( 'Looking for circular
                                        materials and systems ready for', 'bambu' ); ?> <br> <?php esc_html_e( 'enterprise-level deployment across
                                        diverse', 'bambu' ); ?> <br> <?php esc_html_e( 'distribution chains.', 'bambu' ); ?></p>
                                </div>
                            </div>
                            <div class="opportunity-footer">
                                <div class="opportunity-footer-inner">
                                    <div class="section-action-link">
                                        <div class="layout-stack">
                                            <div class="details-action-label"><?php esc_html_e( 'View details', 'bambu' ); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="impact-section">
            <div class="section-content">
                <div class="impact-header">
                    <div class="impact-heading-group">
                        <div class="section-title-wrapper">
                            <div class="impact-title"><?php esc_html_e( 'CHALLENGE HUB', 'bambu' ); ?></div>
                        </div>
                        <div class="subheading-wrapper">
                            <div class="impact-subheading"><?php esc_html_e( 'From Challenge to Impact', 'bambu' ); ?>
                            </div>
                        </div>
                    </div>
                    <button class="section-action-link section-action-control" type="button" data-action-url="<?php echo esc_attr( esc_url( home_url( '/challenge-hub/' ) ) ); ?>" aria-label="<?php esc_attr_e( 'Explore all challenges', 'bambu' ); ?>">
                        <span class="section-action-label"><?php esc_html_e( 'Explore all challenges', 'bambu' ); ?></span>
                        <svg class="section-action-icon" width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                            <path d="M10.2891 5.03906C10.4297 4.88281 10.5 4.70312 10.5 4.5V4.5V4.5C10.5 4.29688 10.4297 4.11719 10.2891 3.96094L6.53906 0.210938V0.210938C6.38281 0.0703125 6.20312 0 6 0C5.79688 0 5.61719 0.0703125 5.46094 0.210938C5.32031 0.367188 5.25 0.546875 5.25 0.75C5.25 0.953125 5.32031 1.13281 5.46094 1.28906L7.94531 3.75V3.75H0.75V3.75C0.53125 3.75 0.351562 3.82031 0.210938 3.96094C0.0703125 4.10156 0 4.28125 0 4.5C0 4.71875 0.0703125 4.89844 0.210938 5.03906C0.351562 5.17969 0.53125 5.25 0.75 5.25H7.94531V5.25L5.46094 7.71094V7.71094C5.32031 7.86719 5.25 8.04688 5.25 8.25C5.25 8.453125 5.32031 8.63281 5.46094 8.78906C5.61719 8.92969 5.79688 9 6 9C6.20312 9 6.38281 8.92969 6.53906 8.78906L10.2891 5.03906V5.03906V5.03906" fill="#059669"/>
                        </svg>
                    </button>
                </div>
                <div class="impact-layout">
                    <div class="featured-challenge-card">
                        <div class="challenge-feature-image"></div>
                        <div class="dark-card-overlay"></div>
                        <div class="status-pill">
                            <div class="status-pill-inner">
                                <div class="status-dot"></div>
                                <div class="layout-stack">
                                    <div class="status-label"><?php esc_html_e( 'OPEN', 'bambu' ); ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="content-overlay">
                            <div class="challenge-tags">
                                <div class="location-badge">
                                    <div class="location-label"><?php esc_html_e( 'Vietnam', 'bambu' ); ?></div>
                                </div>
                                <div class="category-badge">
                                    <div class="category-label"><?php esc_html_e( 'Exclusive', 'bambu' ); ?></div>
                                </div>
                            </div>
                            <div class="challenge-title-wrapper">
                                <p class="challenge-title"><?php esc_html_e( 'Build the infrastructure for a
                                    resilient,', 'bambu' ); ?> <br> <?php esc_html_e( 'low-carbon city.', 'bambu' ); ?></p>
                            </div>
                            <div class="challenge-meta">
                                <div class="challenge-meta-item">
                                    <div class="content-stack">
                                        <div class="metadata-label"><?php esc_html_e( 'Deadline', 'bambu' ); ?></div>
                                    </div>
                                    <div class="metadata-value"><?php esc_html_e( '30 Oct 2026', 'bambu' ); ?></div>
                                </div>
                                <div class="challenge-meta-item">
                                    <div class="content-stack">
                                        <div class="metadata-label"><?php esc_html_e( 'Programme', 'bambu' ); ?></div>
                                    </div>
                                    <div class="metadata-value"><?php esc_html_e( '12 weeks', 'bambu' ); ?></div>
                                </div>
                            </div>
                            <div class="card-action-link">
                                <div class="layout-stack">
                                    <div class="card-action-label"><?php esc_html_e( 'View details', 'bambu' ); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="impact-side-card-list">
                        <div class="impact-side-card">
                            <div class="ai-accelerator-image"></div>
                            <div class="side-card-overlay"></div>
                            <div class="side-card-header">
                                <div class="side-card-status-pill-inner">
                                    <div class="side-card-status-dot"></div>
                                    <div class="layout-stack">
                                        <div class="status-label"><?php esc_html_e( 'OPEN', 'bambu' ); ?></div>
                                    </div>
                                </div>
                                <div class="content-stack">
                                    <div class="side-card-title"><?php esc_html_e( 'AI Accelerator
                                        Programme', 'bambu' ); ?></div>
                                </div>
                            </div>
                            <div class="side-card-tags">
                                <div class="side-card-location-badge">
                                    <div class="location-label"><?php esc_html_e( 'Thailand', 'bambu' ); ?></div>
                                </div>
                                <div class="side-card-category-badge">
                                    <div class="category-label"><?php esc_html_e( 'Opening', 'bambu' ); ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="impact-side-card">
                            <div class="sustainable-finance-image"></div>
                            <div class="dark-card-overlay"></div>
                            <div class="side-card-content">
                                <div class="side-card-status-pill-inner">
                                    <div class="side-card-status-dot"></div>
                                    <div class="layout-stack">
                                        <div class="status-label"><?php esc_html_e( 'OPEN', 'bambu' ); ?></div>
                                    </div>
                                </div>
                                <div class="content-stack">
                                    <div class="side-card-title"><?php esc_html_e( 'Future of Sustainable
                                        Finance', 'bambu' ); ?></div>
                                </div>
                            </div>
                            <div class="side-card-tags">
                                <div class="side-card-location-badge">
                                    <div class="location-label"><?php esc_html_e( 'Thailand', 'bambu' ); ?></div>
                                </div>
                                <div class="side-card-category-badge">
                                    <div class="category-label"><?php esc_html_e( 'Opening', 'bambu' ); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-section">
            <div class="section-content">
                <div class="section-header">
                    <div class="insights-header">
                        <div class="insights-heading-group">
                            <div class="section-title-wrapper">
                                <div class="section-kicker"><?php _e( 'INSIGHTS &amp; RESOURCES', 'bambu' ); ?>
                                </div>
                            </div>
                            <div class="subheading-wrapper">
                                <div class="insights-subheading"><?php esc_html_e( 'Intelligence What comes
                                    next', 'bambu' ); ?></div>
                            </div>
                        </div>
                    </div>
                    <button class="section-action-link section-action-control" type="button" aria-label="<?php esc_attr_e( 'Explore all insights', 'bambu' ); ?>">
                        <span class="layout-stack">
                            <span class="section-action-label"><?php esc_html_e( 'Explore all insights', 'bambu' ); ?></span>
                        </span>
                        <svg class="section-action-icon" width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                            <path d="M10.2891 5.03906C10.4297 4.88281 10.5 4.70312 10.5 4.5V4.5V4.5C10.5 4.29688 10.4297 4.11719 10.2891 3.96094L6.53906 0.210938V0.210938C6.38281 0.0703125 6.20312 0 6 0C5.79688 0 5.61719 0.0703125 5.46094 0.210938C5.32031 0.367188 5.25 0.546875 5.25 0.75C5.25 0.953125 5.32031 1.13281 5.46094 1.28906L7.94531 3.75V3.75H0.75V3.75C0.53125 3.75 0.351562 3.82031 0.210938 3.96094C0.0703125 4.10156 0 4.28125 0 4.5C0 4.71875 0.0703125 4.89844 0.210938 5.03906C0.351562 5.17969 0.53125 5.25 0.75 5.25H7.94531V5.25L5.46094 7.71094V7.71094C5.32031 7.86719 5.25 8.04688 5.25 8.25C5.25 8.45312 5.32031 8.63281 5.46094 8.78906C5.61719 8.92969 5.79688 9 6 9C6.20312 9 6.38281 8.92969 6.53906 8.78906L10.2891 5.03906V5.03906V5.03906" fill="#059669"/>
                        </svg>
                    </button>
                </div>
                <div class="insights-layout">
                    <div class="featured-report">
                        <div class="vietnam-report-image-wrapper">
                            <div class="vietnam-report-image"></div>
                        </div>
                        <div class="report-meta">
                            <div class="report-label"><?php esc_html_e( 'LANDSCAPE REPORT • 2026', 'bambu' ); ?></div>
                        </div>
                        <div class="report-title-wrapper">
                            <p class="vietnam-report-title"><?php esc_html_e( 'Vietnam Open Innovation Outlook:
                                From', 'bambu' ); ?> <br> <?php esc_html_e( 'activity to advantage', 'bambu' ); ?></p>
                        </div>
                        <div class="signals-sectors-and-wrapper">
                            <p class="report-summary"><?php esc_html_e( 'Signals, sectors and
                                collaboration models shaping the next era of open innovation', 'bambu' ); ?> <br> <?php esc_html_e( 'across Southeast Asia.', 'bambu' ); ?></p>
                        </div>
                    </div>
                    <div class="right-articles-list">
                        <div class="article-list-item-primary">
                            <div class="content-stack">
                                <div class="article-category"><?php esc_html_e( 'CASE STUDY', 'bambu' ); ?></div>
                            </div>
                            <div class="content-stack">
                                <p class="article-title"><?php esc_html_e( 'How a regional manufacturer
                                    cut pilot time by 40%', 'bambu' ); ?></p>
                            </div>
                            <div class="article-action-link">
                                <div class="layout-stack">
                                    <div class="details-action-label"><?php esc_html_e( 'Read story', 'bambu' ); ?></div>
                                </div>
                                <svg width="9" height="8" viewBox="0 0 9 8" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                    <path d="M8.57422 4.19922C8.69141 4.06901 8.75 3.91927 8.75 3.75V3.75V3.75C8.75 3.58073 8.69141 3.43099 8.57422 3.30078L5.44922 0.175781V0.175781C5.31901 0.0585938 5.16927 0 5 0C4.83073 0 4.68099 0.0585938 4.55078 0.175781C4.43359 0.30599 4.375 0.455729 4.375 0.625C4.375 0.794271 4.43359 0.94401 4.55078 1.07422L6.62109 3.125V3.125H0.625V3.125C0.442708 3.125 0.292969 3.18359 0.175781 3.30078C0.0585938 3.41797 0 3.56771 0 3.75C0 3.93229 0.0585938 4.08203 0.175781 4.19922C0.292969 4.31641 0.442708 4.375 0.625 4.375H6.62109V4.375L4.55078 6.42578V6.42578C4.43359 6.55599 4.375 6.70573 4.375 6.875C4.375 7.04427 4.43359 7.19401 4.55078 7.32422C4.68099 7.44141 4.83073 7.5 5 7.5C5.16927 7.5 5.31901 7.44141 5.44922 7.32422L8.57422 4.19922V4.19922V4.19922" fill="#08162D"/>
                                </svg>
                            </div>
                        </div>
                        <div class="article-list-item-secondary">
                            <div class="content-stack">
                                <div class="article-category"><?php esc_html_e( 'IP / RESEARCH', 'bambu' ); ?></div>
                            </div>
                            <div class="content-stack">
                                <p class="article-title"><?php esc_html_e( 'Five technology signals
                                    reshaping industrial resilience', 'bambu' ); ?></p>
                            </div>
                            <div class="article-action-link">
                                <div class="layout-stack">
                                    <div class="details-action-label"><?php esc_html_e( 'Read research', 'bambu' ); ?></div>
                                </div>
                                <svg width="9" height="8" viewBox="0 0 9 8" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                    <path d="M8.57422 4.19922C8.69141 4.06901 8.75 3.91927 8.75 3.75V3.75V3.75C8.75 3.58073 8.69141 3.43099 8.57422 3.30078L5.44922 0.175781V0.175781C5.31901 0.0585938 5.16927 0 5 0C4.83073 0 4.68099 0.0585938 4.55078 0.175781C4.43359 0.30599 4.375 0.455729 4.375 0.625C4.375 0.794271 4.43359 0.94401 4.55078 1.07422L6.62109 3.125V3.125H0.625V3.125C0.442708 3.125 0.292969 3.18359 0.175781 3.30078C0.0585938 3.41797 0 3.56771 0 3.75C0 3.93229 0.0585938 4.08203 0.175781 4.19922C0.292969 4.31641 0.442708 4.375 0.625 4.375H6.62109V4.375L4.55078 6.42578V6.42578C4.43359 6.55599 4.375 6.70573 4.375 6.875C4.375 7.04427 4.43359 7.19401 4.55078 7.32422C4.68099 7.44141 4.83073 7.5 5 7.5C5.16927 7.5 5.31901 7.44141 5.44922 7.32422L8.57422 4.19922V4.19922V4.19922" fill="#08162D"/>
                                </svg>
                            </div>
                        </div>
                        <div class="article-list-item-tertiary">
                            <div class="content-stack">
                                <div class="article-category"><?php esc_html_e( 'EVENT', 'bambu' ); ?></div>
                            </div>
                            <div class="content-stack">
                                <p class="article-title"><?php esc_html_e( 'Open Innovation Forum — Ho
                                    Chi Minh City', 'bambu' ); ?></p>
                            </div>
                            <div class="article-action-link">
                                <div class="layout-stack">
                                    <div class="details-action-label"><?php esc_html_e( 'View event', 'bambu' ); ?></div>
                                </div>
                                <svg width="9" height="8" viewBox="0 0 9 8" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                    <path d="M8.57422 4.19922C8.69141 4.06901 8.75 3.91927 8.75 3.75V3.75V3.75C8.75 3.58073 8.69141 3.43099 8.57422 3.30078L5.44922 0.175781V0.175781C5.31901 0.0585938 5.16927 0 5 0C4.83073 0 4.68099 0.0585938 4.55078 0.175781C4.43359 0.30599 4.375 0.455729 4.375 0.625C4.375 0.794271 4.43359 0.94401 4.55078 1.07422L6.62109 3.125V3.125H0.625V3.125C0.442708 3.125 0.292969 3.18359 0.175781 3.30078C0.0585938 3.41797 0 3.56771 0 3.75C0 3.93229 0.0585938 4.08203 0.175781 4.19922C0.292969 4.31641 0.442708 4.375 0.625 4.375H6.62109V4.375L4.55078 6.42578V6.42578C4.43359 6.55599 4.375 6.70573 4.375 6.875C4.375 7.04427 4.43359 7.19401 4.55078 7.32422C4.68099 7.44141 4.83073 7.5 5 7.5C5.16927 7.5 5.31901 7.44141 5.44922 7.32422L8.57422 4.19922V4.19922V4.19922" fill="#08162D"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonials-section">
            <div class="testimonials-content">
                <div class="testimonials-heading">
                    <p class="testimonial-heading-copy"><?php esc_html_e( 'How innovation leaders, founders and
                        ecosystem', 'bambu' ); ?> <br> <?php esc_html_e( 'partners experience working through BambuUP', 'bambu' ); ?></p>
                </div>
                <div class="card-grid">
                    <div class="testimonial-card-primary">
                        <div class="testimonial-card-shadow"></div>
                        <div class="testimonial-quote-wrapper-primary">
                            <div class="content-stack">
                                <p class="testimonial-quote"><?php esc_html_e( 'We have unlocked entirely new ways of thinking about issues that we previously believed were unsolvable, by connecting with entities that provide strong solutions for our business', 'bambu' ); ?>
                                </p>
                            </div>
                        </div>
                        <div class="testimonial-author-primary">
                            <div class="testimonial-avatar-primary">
                                <img src="<?php echo esc_url( bambu_get_media_asset_url( 'quang-hop-dinh.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Quang Hop Dinh', 'bambu' ); ?>">
                            </div>
                            <div class="layout-stack">
                                <div class="content-stack">
                                    <div class="testimonial-name"><?php esc_html_e( 'Mr. Quang Hop Dinh', 'bambu' ); ?></div>
                                </div>
                                <div class="content-stack">
                                    <p class="metadata-label"><?php esc_html_e( 'Director of Sales at HM Foods Company (BFC Group)', 'bambu' ); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card-secondary">
                        <div class="testimonial-card-shadow-secondary"></div>
                        <div class="testimonial-quote-wrapper-secondary">
                            <div class="content-stack">
                                <p class="testimonial-quote"><?php esc_html_e( 'It was a good start. All the startups (selected by BambuUP) have interesting solutions to many pain points of large corporate', 'bambu' ); ?></p>
                            </div>
                        </div>
                        <div class="testimonial-author-secondary">
                            <div class="testimonial-avatar-secondary">
                                <img src="<?php echo esc_url( bambu_get_media_asset_url( 'douglas-kuo.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Douglas Kuo', 'bambu' ); ?>">
                            </div>
                            <div class="layout-stack">
                                <div class="content-stack">
                                    <div class="testimonial-name"><?php esc_html_e( 'Mr. Douglas Kuo', 'bambu' ); ?></div>
                                </div>
                                <div class="content-stack">
                                    <div class="metadata-label"><?php esc_html_e( 'General Manager at Abbott Nutrition International Vietnam', 'bambu' ); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card-tertiary">
                        <div class="testimonial-card-shadow"></div>
                        <div class="testimonial-quote-wrapper-tertiary">
                            <div class="content-stack">
                                <p class="testimonial-quote"><?php esc_html_e( 'BambuUP is a great partner throughout the process of implementing projects with IPSC, especially in the Innovation for Enterprise workshops, with a team of knowledgeable lecturers and experts', 'bambu' ); ?></p>
                            </div>
                        </div>
                        <div class="testimonial-author-tertiary">
                            <div class="testimonial-avatar-tertiary">
                                <img src="<?php echo esc_url( bambu_get_media_asset_url( 'thang-tran.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Thang Tran', 'bambu' ); ?>">
                            </div>
                            <div class="layout-stack">
                                <div class="content-stack">
                                    <div class="testimonial-name"><?php esc_html_e( 'Mr. Thang Tran', 'bambu' ); ?></div>
                                </div>
                                <div class="content-stack">
                                    <p class="metadata-label"><?php esc_html_e( 'Innovation Program Manager (Northern Region) at USAID Improving Private Sector Competitiveness (IPSC)', 'bambu' ); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part( 'template-parts/partners-section' ); ?>
        <?php get_template_part( 'template-parts/cta-banner' ); ?>
    </div>

</main>

<?php get_footer(); ?>
