<?php
/**
 * Template Name: Bambu - Detail
 * Template Post Type: page
 *
 * @package Bambu
 */
if (! defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main id="primary" class="site-main bambu-detail-page">
    <!-- HERO -->
    <section class="hero">
        <img class="hero-bg-img"
            src="<?php echo esc_url( bambu_get_media_asset_url( 'innovation-intelligence/hero-decor.jpg' ) ); ?>"
            alt="" />
        <div class="hero-inner">
            <div class="breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e( 'Home', 'bambu' ); ?></a>
                <span class="breadcrumb-sep">/</span>
                <a href="<?php echo esc_url(home_url('/innovation-intelligence/')); ?>"><?php esc_html_e( 'Innovation Intelligence', 'bambu' ); ?></a>
                <span class="breadcrumb-sep">/</span>
                <span class="breadcrumb-cur"><?php esc_html_e( 'Innovation Need', 'bambu' ); ?></span>
            </div>
            <span class="hero-badge"><?php esc_html_e( 'INNOVATION NEED', 'bambu' ); ?></span>
            <h1 class="hero-title"><?php esc_html_e( 'Seeking solutions to restore oral microbiome balance', 'bambu' ); ?></h1>
            <p class="hero-sub"><?php esc_html_e( 'Discover business needs, explore innovative solutions, and connect with the right
                partners.', 'bambu' ); ?></p>

            <!-- Meta bar -->
            <div class="meta-bar">
                <div class="meta-host">
                    <div class="host-avatar">
                        <svg width="24" height="24" viewBox="0 0 20 20" fill="none">
                            <path d="M2 19c0-4 3.58-7 8-7s8 3 8 7M10 10a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" stroke="white"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div>
                        <div class="host-name"><?php esc_html_e( 'Healthcare Innovation Partner', 'bambu' ); ?> <span
                                style="color:#38bdf8;font-size:14px;">✓</span></div>
                        <div class="host-location">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path
                                    d="M7 1.17A4.083 4.083 0 0 0 2.917 5.25C2.917 8.458 7 12.833 7 12.833s4.083-4.375 4.083-7.583A4.083 4.083 0 0 0 7 1.167zM7 7a1.75 1.75 0 1 1 0-3.5A1.75 1.75 0 0 1 7 7z"
                                    stroke="#2DD4BF" stroke-width="1.17" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <?php esc_html_e( 'Vietnam', 'bambu' ); ?>
                        </div>
                    </div>
                </div>
                <div class="meta-pills">
                    <div class="meta-pill">
                        <span class="teal">📅</span>
                        <div>
                            <div class="pill-label"><?php esc_html_e( 'Deadline:', 'bambu' ); ?></div>
                            <div class="pill-value"><?php esc_html_e( '30 Nov 2026', 'bambu' ); ?></div>
                        </div>
                    </div>
                    <div class="meta-pill">
                        <span class="teal">⚗️</span>
                        <div>
                            <div class="pill-label"><?php esc_html_e( 'Development Stage:', 'bambu' ); ?></div>
                            <div class="pill-value"><?php esc_html_e( 'TRL 5', 'bambu' ); ?></div>
                        </div>
                    </div>
                    <div class="meta-pill">
                        <span class="teal">🌏</span>
                        <div>
                            <div class="pill-label"><?php esc_html_e( 'Target Regions:', 'bambu' ); ?></div>
                            <div class="pill-value"><?php _e( 'Vietnam &amp; Thailand', 'bambu' ); ?></div>
                        </div>
                    </div>
                    <div class="meta-pill">
                        <span class="teal">🤝</span>
                        <div>
                            <div class="pill-label"><?php esc_html_e( 'Collaboration:', 'bambu' ); ?></div>
                            <div class="pill-value"><?php esc_html_e( 'Co-development / Licensing', 'bambu' ); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <div class="page-body">
        <div class="content-layout">

            <!-- LEFT ARTICLE -->
            <div class="article-card">

                <!-- Tab Bar -->
                <div class="tab-bar">
                    <button class="tab-btn active"><?php esc_html_e( 'Overview', 'bambu' ); ?></button>
                    <button class="tab-btn"><?php esc_html_e( 'Requirements', 'bambu' ); ?></button>
                    <button class="tab-btn"><?php esc_html_e( 'Collaboration', 'bambu' ); ?></button>
                    <button class="tab-btn"><?php esc_html_e( 'About us', 'bambu' ); ?></button>
                </div>

                <!-- Showcase Image -->
                <img class="showcase-img"
                    src="<?php echo esc_url( bambu_get_media_asset_url( 'innovation-intelligence/hero-decor.jpg' ) ); ?>"
                    alt="<?php esc_attr_e( 'Modern research facility atrium', 'bambu' ); ?>" />

                <!-- Section 1: Opportunity Overview -->
                <section>
                    <div class="sec-title-lg"><?php esc_html_e( '1. Opportunity overview', 'bambu' ); ?></div>
                    <p class="sec-body"><?php esc_html_e( 'Lacer is seeking to identify and develop innovative solutions that address the
                        root cause of gingivitis by actively restoring oral microbiome balance (eubiosis), moving beyond
                        traditional \'kill bacteria\' strategies.', 'bambu' ); ?></p>
                    <div class="callout-box" style="margin-top: 7px;">
                        <div class="callout-heading">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M8 1L9.5 6H15L10.5 9L12 14L8 11L4 14L5.5 9L1 6H6.5L8 1Z" stroke="#0D9488"
                                    stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <?php esc_html_e( 'Desired outcome', 'bambu' ); ?>
                        </div>
                        <div class="callout-list">
                            <div class="callout-item"><span class="bullet">•</span><span><?php esc_html_e( 'A proven ability to shift the
                                    oral microbiome composition from a dysbiotic to a eubiotic state.', 'bambu' ); ?></span></div>
                            <div class="callout-item"><span class="bullet">•</span><span><?php esc_html_e( 'A targeted reduction of key
                                    pathogenic species associated with gingivitis.', 'bambu' ); ?></span></div>
                            <div class="callout-item"><span class="bullet">•</span><span><?php esc_html_e( 'The simultaneous increase or
                                    preservation of beneficial commensal bacteria to deliver more sustainable clinical
                                    outcomes.', 'bambu' ); ?></span></div>
                        </div>
                    </div>
                </section>

                <!-- Section 2: What we are looking for -->
                <section>
                    <div class="sec-title-lg"><?php esc_html_e( '2. What we are looking for', 'bambu' ); ?></div>
                    <p class="sec-body"><?php esc_html_e( 'While current gingivitis treatments primarily rely on broad bacterial reduction
                        (antiseptics) or symptom control (anti-inflammatories), emerging science indicates that
                        long-term oral health depends on precise microbiome modulation. Lacer aims to establish
                        leadership in microbiome-based oral care by integrating this science into next-generation
                        products, enabling new differentiated claims such as reversing early-stage gingivitis by
                        targeting underlying imbalances.', 'bambu' ); ?></p>
                </section>

                <!-- Section 3: Must-have requirements -->
                <section>
                    <div class="sec-title-md" style="margin-bottom: 0; margin-top: 8px;"><?php esc_html_e( '3. Must-have requirements', 'bambu' ); ?></div>
                    <div class="req-list" style="margin-top: 16px;">
                        <div class="req-row">
                            <div class="req-icon">📊</div>
                            <div class="req-label"><?php esc_html_e( 'Maturity', 'bambu' ); ?></div>
                            <div class="req-value"><?php _e( 'Technology Readiness Level (TRL) of &gt; 5.', 'bambu' ); ?></div>
                        </div>
                        <div class="req-row">
                            <div class="req-icon">🧫</div>
                            <div class="req-label"><?php esc_html_e( 'Microbiome Modulation', 'bambu' ); ?></div>
                            <div class="req-value"><?php esc_html_e( 'Antimicrobial activity in multispecies oral biofilm models', 'bambu' ); ?></div>
                        </div>
                        <div class="req-row">
                            <div class="req-icon">🔬</div>
                            <div class="req-label"><?php esc_html_e( 'Validation Method', 'bambu' ); ?></div>
                            <div class="req-value"><?php esc_html_e( '16S rRNA gene sequencing.', 'bambu' ); ?></div>
                        </div>
                        <div class="req-row">
                            <div class="req-icon">🧪</div>
                            <div class="req-label"><?php esc_html_e( 'Biological Relevance', 'bambu' ); ?></div>
                            <div class="req-value"><?php esc_html_e( 'Cosmetic, medical device, or food supplement', 'bambu' ); ?></div>
                        </div>
                        <div class="req-row">
                            <div class="req-icon">📋</div>
                            <div class="req-label"><?php esc_html_e( 'Regulatory Framework', 'bambu' ); ?></div>
                            <div class="req-value"><?php _e( 'Spain, the European Union, &amp; Latin America', 'bambu' ); ?></div>
                        </div>
                    </div>
                </section>

                <!-- Section 4: Nice to have -->
                <section>
                    <div class="sec-title-lg"><?php esc_html_e( '4. Nice to have', 'bambu' ); ?></div>
                    <div class="nice-box">
                        <div class="nice-icon-bg">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M8 1L9.5 6H15L10.5 9L12 14L8 11L4 14L5.5 9L1 6H6.5L8 1Z" fill="#35AD68" />
                            </svg>
                        </div>
                        <div class="nice-text"><?php esc_html_e( 'We are looking for technologies at least capable of demonstrating
                            efficacy in patients with Grade 2 gingivitis, ideally showing measurable improvements.', 'bambu' ); ?></div>
                    </div>
                </section>

                <!-- Section 5: Related Keywords -->
                <section>
                    <div class="sec-title-lg"><?php esc_html_e( '5. Related Keywords', 'bambu' ); ?></div>
                    <div class="keywords-box">
                        <?php esc_html_e( 'PharmaceuticsCare, Hygiene, Beauty, CosmeticsBiological SciencesMedicine, Human HealthBiology /
                        BiotechnologyMicrobiology TechnologyHealth careMedical Health relatedOther Medical / Health
                        RelatedConsumer relatedHealth and beauty aids, Cosmeticsoral careeubiosis', 'bambu' ); ?>
                    </div>
                </section>

                <!-- Section 6: Organization Profile -->
                <section>
                    <div class="org-card">
                        <div class="org-left">
                            <div class="org-logo">
                                <div class="org-logo-icon" style="color:#e8505b;">L</div>
                                <div class="org-logo-name"><?php esc_html_e( 'LACER S.A.', 'bambu' ); ?></div>
                            </div>
                            <div>
                                <div class="org-name">
                                    <?php esc_html_e( 'Lacer S.A. (Healthcare Innovation Partner)', 'bambu' ); ?>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zm3.71 5.71a1 1 0 0 0-1.42-1.42L7 8.59 5.71 7.3A1 1 0 0 0 4.3 8.71l2 2a1 1 0 0 0 1.41 0l4-4z"
                                            fill="#0EA5E9" />
                                    </svg>
                                </div>
                                <div class="org-desc"><?php esc_html_e( 'Lacer S.A is a pharmaceutical laboratory firmly committed to
                                    public health. Our research and services focus on improving people\'s well-being and
                                    quality of life.', 'bambu' ); ?></div>
                            </div>
                        </div>
                        <button class="view-profile-btn"><?php esc_html_e( 'View organization profile →', 'bambu' ); ?></button>
                    </div>
                </section>

            </div>

            <!-- SIDEBAR -->
            <aside class="sidebar">

                <!-- Interested card -->
                <div class="interested-card">
                    <div class="interested-title"><?php esc_html_e( 'Interested in this opportunity?', 'bambu' ); ?></div>
                    <div class="interested-sub"><?php esc_html_e( 'Tell the organization why your solution could be a good fit', 'bambu' ); ?></div>
                    <button class="req-conn-btn">
                        <?php esc_html_e( 'Request connection', 'bambu' ); ?>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M3 8h10M8 3l5 5-5 5" stroke="white" stroke-width="1.33" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="signin-note"><?php esc_html_e( 'Sign in to continue.', 'bambu' ); ?></div>
                    <div class="review-notice">
                        <span class="review-icon">✓</span>
                        <div class="review-text"><?php esc_html_e( 'Your request is review before contact details are shared.', 'bambu' ); ?></div>
                    </div>
                    <button class="save-btn">
                        <?php esc_html_e( 'Save opportunity', 'bambu' ); ?>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path
                                d="M3 2h10a1 1 0 0 1 1 1v10.586a.5.5 0 0 1-.854.353L8 8.707l-5.146 5.232A.5.5 0 0 1 2 13.586V3a1 1 0 0 1 1-1z"
                                stroke="#64748B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

                <!-- Help Support -->
                <div class="side-card">
                    <div class="side-card-title">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <circle cx="8" cy="8" r="6.5" stroke="#0D9488" stroke-width="1.33" />
                            <path d="M8 11V8M8 5h.01" stroke="#0D9488" stroke-width="1.33" stroke-linecap="round" />
                        </svg>
                        <?php esc_html_e( 'Help', 'bambu' ); ?>
                    </div>
                    <div class="side-card-body"><?php esc_html_e( 'Need help submitting your proposal or have questions regarding this
                        Innovation Need?', 'bambu' ); ?></div>
                    <div class="support-link"><?php esc_html_e( 'Contact BambuUP support →', 'bambu' ); ?></div>
                </div>

                <!-- FAQ -->
                <div class="faq-card">
                    <div class="faq-title">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <circle cx="8" cy="8" r="6.5" stroke="#475569" stroke-width="1.33" />
                            <path d="M6.5 6a1.5 1.5 0 1 1 2 1.415A1.5 1.5 0 0 0 8 9M8 11h.01" stroke="#475569"
                                stroke-width="1.33" stroke-linecap="round" />
                        </svg>
                        <?php esc_html_e( 'FAQs', 'bambu' ); ?>
                    </div>
                    <div class="faq-item"><?php esc_html_e( 'How do I write a winning proposal?', 'bambu' ); ?> <span class="faq-caret">▾</span></div>
                    <div class="faq-item"><?php esc_html_e( 'Who will evaluate my proposal?', 'bambu' ); ?> <span class="faq-caret">▾</span></div>
                    <div class="faq-item"><?php esc_html_e( 'How do I protect my intellectual property?', 'bambu' ); ?> <span class="faq-caret">▾</span>
                    </div>
                    <div class="faq-item"><?php esc_html_e( 'Do I have to reveal confidential information?', 'bambu' ); ?> <span class="faq-caret">▾</span>
                    </div>
                    <div class="faq-item"><?php esc_html_e( 'Do I need to sign an NDA before submitting?', 'bambu' ); ?> <span class="faq-caret">▾</span>
                    </div>
                    <div class="faq-item"><?php esc_html_e( 'How long will it take to get a response?', 'bambu' ); ?> <span class="faq-caret">▾</span>
                    </div>
                </div>

                <!-- Share -->
                <div class="share-card">
                    <div class="share-label"><?php esc_html_e( 'Share this opportunity', 'bambu' ); ?></div>
                    <div class="share-icons">
                        <div class="share-icon" title="<?php esc_attr_e( 'LinkedIn', 'bambu' ); ?>">in</div>
                        <div class="share-icon" title="<?php esc_attr_e( 'Telegram', 'bambu' ); ?>">✈</div>
                        <div class="share-icon" title="<?php esc_attr_e( 'Copy link', 'bambu' ); ?>">🔗</div>
                    </div>
                </div>

            </aside>
        </div>

        <!-- NOT READY BANNER -->
        <div class="not-ready-wrap">
            <div class="not-ready-banner">
                <div>
                    <div class="not-ready-title"><?php esc_html_e( 'Not ready to connect yet?', 'bambu' ); ?></div>
                    <div class="not-ready-sub"><?php esc_html_e( 'Save this opportunity and return when your proposal is ready', 'bambu' ); ?></div>
                </div>
                <button class="save-opp-btn">
                    <?php esc_html_e( 'Save opportunity', 'bambu' ); ?>
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <path
                            d="M2.5 2h9a.5.5 0 0 1 .5.5V12.5a.5.5 0 0 1-.854.353L7 8.707l-4.146 4.146A.5.5 0 0 1 2 12.5V2.5a.5.5 0 0 1 .5-.5z"
                            stroke="#0F766E" stroke-width="1.17" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- RELATED OPPORTUNITIES -->
        <div class="related-section">
            <div class="related-title"><?php esc_html_e( 'Related innovation opportunities', 'bambu' ); ?></div>
            <div class="related-grid">

                <div class="rel-card">
                    <div class="rel-card-img">
                        <img src="<?php echo esc_url( bambu_get_media_asset_url( 'innovation-intelligence/robotics.jpg' ) ); ?>"
                            alt="" />
                        <span class="rel-badge"><?php esc_html_e( 'Innovation Need', 'bambu' ); ?></span>
                        <div class="rel-save">♡</div>
                    </div>
                    <div class="rel-body">
                        <div class="rel-title"><?php esc_html_e( 'AI-powered supply chain visibility platform', 'bambu' ); ?></div>
                        <div class="rel-date"><?php esc_html_e( 'Posted July 14, 2026', 'bambu' ); ?></div>
                        <div class="rel-org"><?php esc_html_e( 'Tech Solution Provider', 'bambu' ); ?> <span class="rel-org-check">✓</span></div>
                        <div class="rel-tags"><span class="rel-tag"><?php esc_html_e( 'Manufacturing', 'bambu' ); ?></span><span
                                class="rel-tag"><?php esc_html_e( 'Sustainability', 'bambu' ); ?></span><span class="rel-tag"><?php esc_html_e( 'Vietnam', 'bambu' ); ?></span></div>
                        <div class="rel-looking"><?php esc_html_e( 'Looking for', 'bambu' ); ?> <strong><?php esc_html_e( '• Pilot Project', 'bambu' ); ?></strong></div>
                    </div>
                    <div class="rel-footer">
                        <span class="rel-view"><?php esc_html_e( 'View details ➔', 'bambu' ); ?></span>
                        <button class="rel-connect"><?php esc_html_e( 'Connect', 'bambu' ); ?></button>
                    </div>
                </div>

                <div class="rel-card">
                    <div class="rel-card-img">
                        <img src="<?php echo esc_url( bambu_get_media_asset_url( 'innovation-intelligence/manufacturing.jpg' ) ); ?>"
                            alt="" />
                        <span class="rel-badge"><?php esc_html_e( 'Innovation Offer', 'bambu' ); ?></span>
                        <div class="rel-save">♡</div>
                    </div>
                    <div class="rel-body">
                        <div class="rel-title"><?php esc_html_e( 'Low-carbon material manufacturing solutions', 'bambu' ); ?></div>
                        <div class="rel-date"><?php esc_html_e( 'Posted July 12, 2026', 'bambu' ); ?></div>
                        <div class="rel-org"><?php esc_html_e( 'Consumer Goods Company', 'bambu' ); ?> <span class="rel-org-check">✓</span></div>
                        <div class="rel-tags"><span class="rel-tag"><?php esc_html_e( 'Manufacturing', 'bambu' ); ?></span><span
                                class="rel-tag"><?php esc_html_e( 'Sustainability', 'bambu' ); ?></span></div>
                        <div class="rel-looking"><?php esc_html_e( 'Available for', 'bambu' ); ?> <strong><?php _e( '• POC &amp; Co-growth', 'bambu' ); ?></strong></div>
                    </div>
                    <div class="rel-footer">
                        <span class="rel-view"><?php esc_html_e( 'View details ➔', 'bambu' ); ?></span>
                        <button class="rel-connect"><?php esc_html_e( 'Connect', 'bambu' ); ?></button>
                    </div>
                </div>

                <div class="rel-card">
                    <div class="rel-card-img">
                        <img src="<?php echo esc_url( bambu_get_media_asset_url( 'innovation-intelligence/smart-city.jpg' ) ); ?>"
                            alt="" />
                        <span class="rel-badge"><?php esc_html_e( 'Innovation Need', 'bambu' ); ?></span>
                        <div class="rel-save">♡</div>
                    </div>
                    <div class="rel-body">
                        <div class="rel-title"><?php esc_html_e( 'AI-powered supply chain rider volatility platform', 'bambu' ); ?></div>
                        <div class="rel-date"><?php esc_html_e( 'Posted July 10, 2026', 'bambu' ); ?></div>
                        <div class="rel-org"><?php esc_html_e( 'Tech Solution Provider', 'bambu' ); ?> <span class="rel-org-check">✓</span></div>
                        <div class="rel-tags"><span class="rel-tag"><?php esc_html_e( 'Manufacturing', 'bambu' ); ?></span><span
                                class="rel-tag"><?php esc_html_e( 'Sustainability', 'bambu' ); ?></span><span class="rel-tag"><?php esc_html_e( 'Global', 'bambu' ); ?></span></div>
                        <div class="rel-looking"><?php esc_html_e( 'Looking for', 'bambu' ); ?> <strong><?php esc_html_e( '• Pilot Project', 'bambu' ); ?></strong></div>
                    </div>
                    <div class="rel-footer">
                        <span class="rel-view"><?php esc_html_e( 'View details ➔', 'bambu' ); ?></span>
                        <button class="rel-connect"><?php esc_html_e( 'Connect', 'bambu' ); ?></button>
                    </div>
                </div>

                <div class="rel-card">
                    <div class="rel-card-img">
                        <img src="<?php echo esc_url( bambu_get_media_asset_url( 'innovation-intelligence/hero-decor.jpg' ) ); ?>"
                            alt="" />
                        <span class="rel-badge"><?php esc_html_e( 'Innovation Offer', 'bambu' ); ?></span>
                        <div class="rel-save">♡</div>
                    </div>
                    <div class="rel-body">
                        <div class="rel-title"><?php esc_html_e( 'Low-carbon tech manufacturing solutions', 'bambu' ); ?></div>
                        <div class="rel-date"><?php esc_html_e( 'Posted July 08, 2026', 'bambu' ); ?></div>
                        <div class="rel-org"><?php esc_html_e( 'Consumer Goods Company', 'bambu' ); ?> <span class="rel-org-check">✓</span></div>
                        <div class="rel-tags"><span class="rel-tag"><?php esc_html_e( 'Manufacturing', 'bambu' ); ?></span><span
                                class="rel-tag"><?php esc_html_e( 'Digitization', 'bambu' ); ?></span></div>
                        <div class="rel-looking"><?php esc_html_e( 'Available for', 'bambu' ); ?> <strong><?php _e( '• POC &amp; Co-growth', 'bambu' ); ?></strong></div>
                    </div>
                    <div class="rel-footer">
                        <span class="rel-view"><?php esc_html_e( 'View details ➔', 'bambu' ); ?></span>
                        <button class="rel-connect"><?php esc_html_e( 'Connect', 'bambu' ); ?></button>
                    </div>
                </div>

            </div>
        </div>

        <?php get_template_part( 'template-parts/partners-section' ); ?>

    </div>

    <?php get_template_part( 'template-parts/cta-banner' ); ?>


</main>
<?php
get_footer();
?>
