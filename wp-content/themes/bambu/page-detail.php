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
                <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                <span class="breadcrumb-sep">/</span>
                <a href="<?php echo esc_url(home_url('/innovation-intelligence/')); ?>">Innovation Intelligence</a>
                <span class="breadcrumb-sep">/</span>
                <span class="breadcrumb-cur">Innovation Need</span>
            </div>
            <span class="hero-badge">INNOVATION NEED</span>
            <h1 class="hero-title">Seeking solutions to restore oral microbiome balance</h1>
            <p class="hero-sub">Discover business needs, explore innovative solutions, and connect with the right
                partners.</p>

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
                        <div class="host-name">Healthcare Innovation Partner <span
                                style="color:#38bdf8;font-size:14px;">✓</span></div>
                        <div class="host-location">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path
                                    d="M7 1.17A4.083 4.083 0 0 0 2.917 5.25C2.917 8.458 7 12.833 7 12.833s4.083-4.375 4.083-7.583A4.083 4.083 0 0 0 7 1.167zM7 7a1.75 1.75 0 1 1 0-3.5A1.75 1.75 0 0 1 7 7z"
                                    stroke="#2DD4BF" stroke-width="1.17" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            Vietnam
                        </div>
                    </div>
                </div>
                <div class="meta-pills">
                    <div class="meta-pill">
                        <span class="teal">📅</span>
                        <div>
                            <div class="pill-label">Deadline:</div>
                            <div class="pill-value">30 Nov 2026</div>
                        </div>
                    </div>
                    <div class="meta-pill">
                        <span class="teal">⚗️</span>
                        <div>
                            <div class="pill-label">Development Stage:</div>
                            <div class="pill-value">TRL 5</div>
                        </div>
                    </div>
                    <div class="meta-pill">
                        <span class="teal">🌏</span>
                        <div>
                            <div class="pill-label">Target Regions:</div>
                            <div class="pill-value">Vietnam &amp; Thailand</div>
                        </div>
                    </div>
                    <div class="meta-pill">
                        <span class="teal">🤝</span>
                        <div>
                            <div class="pill-label">Collaboration:</div>
                            <div class="pill-value">Co-development / Licensing</div>
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
                    <button class="tab-btn active">Overview</button>
                    <button class="tab-btn">Requirements</button>
                    <button class="tab-btn">Collaboration</button>
                    <button class="tab-btn">About us</button>
                </div>

                <!-- Showcase Image -->
                <img class="showcase-img"
                    src="<?php echo esc_url( bambu_get_media_asset_url( 'innovation-intelligence/hero-decor.jpg' ) ); ?>"
                    alt="Modern research facility atrium" />

                <!-- Section 1: Opportunity Overview -->
                <section>
                    <div class="sec-title-lg">1. Opportunity overview</div>
                    <p class="sec-body">Lacer is seeking to identify and develop innovative solutions that address the
                        root cause of gingivitis by actively restoring oral microbiome balance (eubiosis), moving beyond
                        traditional 'kill bacteria' strategies.</p>
                    <div class="callout-box" style="margin-top: 7px;">
                        <div class="callout-heading">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M8 1L9.5 6H15L10.5 9L12 14L8 11L4 14L5.5 9L1 6H6.5L8 1Z" stroke="#0D9488"
                                    stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Desired outcome
                        </div>
                        <div class="callout-list">
                            <div class="callout-item"><span class="bullet">•</span><span>A proven ability to shift the
                                    oral microbiome composition from a dysbiotic to a eubiotic state.</span></div>
                            <div class="callout-item"><span class="bullet">•</span><span>A targeted reduction of key
                                    pathogenic species associated with gingivitis.</span></div>
                            <div class="callout-item"><span class="bullet">•</span><span>The simultaneous increase or
                                    preservation of beneficial commensal bacteria to deliver more sustainable clinical
                                    outcomes.</span></div>
                        </div>
                    </div>
                </section>

                <!-- Section 2: What we are looking for -->
                <section>
                    <div class="sec-title-lg">2. What we are looking for</div>
                    <p class="sec-body">While current gingivitis treatments primarily rely on broad bacterial reduction
                        (antiseptics) or symptom control (anti-inflammatories), emerging science indicates that
                        long-term oral health depends on precise microbiome modulation. Lacer aims to establish
                        leadership in microbiome-based oral care by integrating this science into next-generation
                        products, enabling new differentiated claims such as reversing early-stage gingivitis by
                        targeting underlying imbalances.</p>
                </section>

                <!-- Section 3: Must-have requirements -->
                <section>
                    <div class="sec-title-md" style="margin-bottom: 0; margin-top: 8px;">3. Must-have requirements</div>
                    <div class="req-list" style="margin-top: 16px;">
                        <div class="req-row">
                            <div class="req-icon">📊</div>
                            <div class="req-label">Maturity</div>
                            <div class="req-value">Technology Readiness Level (TRL) of &gt; 5.</div>
                        </div>
                        <div class="req-row">
                            <div class="req-icon">🧫</div>
                            <div class="req-label">Microbiome Modulation</div>
                            <div class="req-value">Antimicrobial activity in multispecies oral biofilm models</div>
                        </div>
                        <div class="req-row">
                            <div class="req-icon">🔬</div>
                            <div class="req-label">Validation Method</div>
                            <div class="req-value">16S rRNA gene sequencing.</div>
                        </div>
                        <div class="req-row">
                            <div class="req-icon">🧪</div>
                            <div class="req-label">Biological Relevance</div>
                            <div class="req-value">Cosmetic, medical device, or food supplement</div>
                        </div>
                        <div class="req-row">
                            <div class="req-icon">📋</div>
                            <div class="req-label">Regulatory Framework</div>
                            <div class="req-value">Spain, the European Union, &amp; Latin America</div>
                        </div>
                    </div>
                </section>

                <!-- Section 4: Nice to have -->
                <section>
                    <div class="sec-title-lg">4. Nice to have</div>
                    <div class="nice-box">
                        <div class="nice-icon-bg">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M8 1L9.5 6H15L10.5 9L12 14L8 11L4 14L5.5 9L1 6H6.5L8 1Z" fill="#35AD68" />
                            </svg>
                        </div>
                        <div class="nice-text">We are looking for technologies at least capable of demonstrating
                            efficacy in patients with Grade 2 gingivitis, ideally showing measurable improvements.</div>
                    </div>
                </section>

                <!-- Section 5: Related Keywords -->
                <section>
                    <div class="sec-title-lg">5. Related Keywords</div>
                    <div class="keywords-box">
                        PharmaceuticsCare, Hygiene, Beauty, CosmeticsBiological SciencesMedicine, Human HealthBiology /
                        BiotechnologyMicrobiology TechnologyHealth careMedical Health relatedOther Medical / Health
                        RelatedConsumer relatedHealth and beauty aids, Cosmeticsoral careeubiosis
                    </div>
                </section>

                <!-- Section 6: Organization Profile -->
                <section>
                    <div class="org-card">
                        <div class="org-left">
                            <div class="org-logo">
                                <div class="org-logo-icon" style="color:#e8505b;">L</div>
                                <div class="org-logo-name">LACER S.A.</div>
                            </div>
                            <div>
                                <div class="org-name">
                                    Lacer S.A. (Healthcare Innovation Partner)
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zm3.71 5.71a1 1 0 0 0-1.42-1.42L7 8.59 5.71 7.3A1 1 0 0 0 4.3 8.71l2 2a1 1 0 0 0 1.41 0l4-4z"
                                            fill="#0EA5E9" />
                                    </svg>
                                </div>
                                <div class="org-desc">Lacer S.A is a pharmaceutical laboratory firmly committed to
                                    public health. Our research and services focus on improving people's well-being and
                                    quality of life.</div>
                            </div>
                        </div>
                        <button class="view-profile-btn">View organization profile →</button>
                    </div>
                </section>

            </div>

            <!-- SIDEBAR -->
            <aside class="sidebar">

                <!-- Interested card -->
                <div class="interested-card">
                    <div class="interested-title">Interested in this opportunity?</div>
                    <div class="interested-sub">Tell the organization why your solution could be a good fit</div>
                    <button class="req-conn-btn">
                        Request connection
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M3 8h10M8 3l5 5-5 5" stroke="white" stroke-width="1.33" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="signin-note">Sign in to continue.</div>
                    <div class="review-notice">
                        <span class="review-icon">✓</span>
                        <div class="review-text">Your request is review before contact details are shared.</div>
                    </div>
                    <button class="save-btn">
                        Save opportunity
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
                        Help
                    </div>
                    <div class="side-card-body">Need help submitting your proposal or have questions regarding this
                        Innovation Need?</div>
                    <div class="support-link">Contact BambuUP support →</div>
                </div>

                <!-- FAQ -->
                <div class="faq-card">
                    <div class="faq-title">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <circle cx="8" cy="8" r="6.5" stroke="#475569" stroke-width="1.33" />
                            <path d="M6.5 6a1.5 1.5 0 1 1 2 1.415A1.5 1.5 0 0 0 8 9M8 11h.01" stroke="#475569"
                                stroke-width="1.33" stroke-linecap="round" />
                        </svg>
                        FAQs
                    </div>
                    <div class="faq-item">How do I write a winning proposal? <span class="faq-caret">▾</span></div>
                    <div class="faq-item">Who will evaluate my proposal? <span class="faq-caret">▾</span></div>
                    <div class="faq-item">How do I protect my intellectual property? <span class="faq-caret">▾</span>
                    </div>
                    <div class="faq-item">Do I have to reveal confidential information? <span class="faq-caret">▾</span>
                    </div>
                    <div class="faq-item">Do I need to sign an NDA before submitting? <span class="faq-caret">▾</span>
                    </div>
                    <div class="faq-item">How long will it take to get a response? <span class="faq-caret">▾</span>
                    </div>
                </div>

                <!-- Share -->
                <div class="share-card">
                    <div class="share-label">Share this opportunity</div>
                    <div class="share-icons">
                        <div class="share-icon" title="LinkedIn">in</div>
                        <div class="share-icon" title="Telegram">✈</div>
                        <div class="share-icon" title="Copy link">🔗</div>
                    </div>
                </div>

            </aside>
        </div>

        <!-- NOT READY BANNER -->
        <div class="not-ready-wrap">
            <div class="not-ready-banner">
                <div>
                    <div class="not-ready-title">Not ready to connect yet?</div>
                    <div class="not-ready-sub">Save this opportunity and return when your proposal is ready</div>
                </div>
                <button class="save-opp-btn">
                    Save opportunity
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
            <div class="related-title">Related innovation opportunities</div>
            <div class="related-grid">

                <div class="rel-card">
                    <div class="rel-card-img">
                        <img src="<?php echo esc_url( bambu_get_media_asset_url( 'innovation-intelligence/robotics.jpg' ) ); ?>"
                            alt="" />
                        <span class="rel-badge">Innovation Need</span>
                        <div class="rel-save">♡</div>
                    </div>
                    <div class="rel-body">
                        <div class="rel-title">AI-powered supply chain visibility platform</div>
                        <div class="rel-date">Posted July 14, 2026</div>
                        <div class="rel-org">Tech Solution Provider <span class="rel-org-check">✓</span></div>
                        <div class="rel-tags"><span class="rel-tag">Manufacturing</span><span
                                class="rel-tag">Sustainability</span><span class="rel-tag">Vietnam</span></div>
                        <div class="rel-looking">Looking for <strong>• Pilot Project</strong></div>
                    </div>
                    <div class="rel-footer">
                        <span class="rel-view">View details ➔</span>
                        <button class="rel-connect">Connect</button>
                    </div>
                </div>

                <div class="rel-card">
                    <div class="rel-card-img">
                        <img src="<?php echo esc_url( bambu_get_media_asset_url( 'innovation-intelligence/manufacturing.jpg' ) ); ?>"
                            alt="" />
                        <span class="rel-badge">Innovation Offer</span>
                        <div class="rel-save">♡</div>
                    </div>
                    <div class="rel-body">
                        <div class="rel-title">Low-carbon material manufacturing solutions</div>
                        <div class="rel-date">Posted July 12, 2026</div>
                        <div class="rel-org">Consumer Goods Company <span class="rel-org-check">✓</span></div>
                        <div class="rel-tags"><span class="rel-tag">Manufacturing</span><span
                                class="rel-tag">Sustainability</span></div>
                        <div class="rel-looking">Available for <strong>• POC &amp; Co-growth</strong></div>
                    </div>
                    <div class="rel-footer">
                        <span class="rel-view">View details ➔</span>
                        <button class="rel-connect">Connect</button>
                    </div>
                </div>

                <div class="rel-card">
                    <div class="rel-card-img">
                        <img src="<?php echo esc_url( bambu_get_media_asset_url( 'innovation-intelligence/smart-city.jpg' ) ); ?>"
                            alt="" />
                        <span class="rel-badge">Innovation Need</span>
                        <div class="rel-save">♡</div>
                    </div>
                    <div class="rel-body">
                        <div class="rel-title">AI-powered supply chain rider volatility platform</div>
                        <div class="rel-date">Posted July 10, 2026</div>
                        <div class="rel-org">Tech Solution Provider <span class="rel-org-check">✓</span></div>
                        <div class="rel-tags"><span class="rel-tag">Manufacturing</span><span
                                class="rel-tag">Sustainability</span><span class="rel-tag">Global</span></div>
                        <div class="rel-looking">Looking for <strong>• Pilot Project</strong></div>
                    </div>
                    <div class="rel-footer">
                        <span class="rel-view">View details ➔</span>
                        <button class="rel-connect">Connect</button>
                    </div>
                </div>

                <div class="rel-card">
                    <div class="rel-card-img">
                        <img src="<?php echo esc_url( bambu_get_media_asset_url( 'innovation-intelligence/hero-decor.jpg' ) ); ?>"
                            alt="" />
                        <span class="rel-badge">Innovation Offer</span>
                        <div class="rel-save">♡</div>
                    </div>
                    <div class="rel-body">
                        <div class="rel-title">Low-carbon tech manufacturing solutions</div>
                        <div class="rel-date">Posted July 08, 2026</div>
                        <div class="rel-org">Consumer Goods Company <span class="rel-org-check">✓</span></div>
                        <div class="rel-tags"><span class="rel-tag">Manufacturing</span><span
                                class="rel-tag">Digitization</span></div>
                        <div class="rel-looking">Available for <strong>• POC &amp; Co-growth</strong></div>
                    </div>
                    <div class="rel-footer">
                        <span class="rel-view">View details ➔</span>
                        <button class="rel-connect">Connect</button>
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
