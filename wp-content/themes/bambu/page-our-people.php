<?php
/**
 * Template Name: Bambu - Our People
 * Template Post Type: page
 *
 * @package Bambu
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
get_header();
?>
<main id="primary" class="site-main our-people-page innovation-intelligence-page">

    <?php
    get_template_part(
        'template-parts/global-hero',
        null,
        array(
            'page_key' => 'our-people',
            'fallback' => array(
                'breadcrumb'   => 'Our People',
                'title'        => 'Our People',
                'description'  => 'A team of innovation strategists, venture builders and industry experts helping organisations access the technologies, partnerships and opportunities that drive growth',
                'show_ctas'    => true,
                'cta_one_text' => 'Explore our story',
                'cta_one_url'  => '#',
                'cta_two_text' => 'See the ecosystem',
                'cta_two_url'  => '#',
            ),
        )
    );
    ?>

    <section class="our-people-quote">
        <div class="our-people-quote-inner">
            <h2 class="our-people-quote-text">
                <span><?php _e( '&ldquo;', 'bambu' ); ?></span> <?php esc_html_e( 'The future belongs not to those with the most resources, but to those who can', 'bambu' ); ?><br /> <?php _e( 'access the right data, technologies and partnerships faster than everyone else&rdquo;', 'bambu' ); ?>
            </h2>
            <p class="our-people-quote-author"><?php esc_html_e( 'MRS. QUYNH NGUYEN', 'bambu' ); ?></p>
            <p class="our-people-quote-title"><?php esc_html_e( 'Chief Executive Officer - BambuUP', 'bambu' ); ?></p>
        </div>
    </section>

    <!-- ─── LEADERSHIP SECTION ─────────────────────────────────────────── -->
    <section class="leadership-section">
      <div class="leadership-container">
        
        <!-- Titles -->
        <div class="leadership-header">
          <p class="leadership-subtitle"><?php esc_html_e( 'OUR PEOPLE ARE OUR GREATEST ASSET', 'bambu' ); ?></p>
          <h2 class="leadership-title"><?php esc_html_e( 'Our Leadership', 'bambu' ); ?></h2>
        </div>

        <!-- Tabs -->
        <div class="leadership-tabs">
          <button class="tab-btn active"><?php esc_html_e( 'BOARD OF DIRECTORS', 'bambu' ); ?></button>
          <button class="tab-btn"><?php esc_html_e( 'EXECUTIVE OFFICERS', 'bambu' ); ?></button>
          <button class="tab-btn"><?php esc_html_e( 'MANAGEMENT COMMITTEE', 'bambu' ); ?></button>
        </div>

        <!-- Grid -->
        <div class="leadership-grid">
          
          <!-- Card 1 (Active/Dark) -->
          <div class="leader-card dark">
            <div class="leader-image"></div>
            <div class="leader-info">
              <h3><?php esc_html_e( 'Mrs. Quynh Nguyen', 'bambu' ); ?></h3>
              <p><?php esc_html_e( 'Chief Executive Officer', 'bambu' ); ?></p>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="leader-card">
            <div class="leader-image"></div>
            <div class="leader-info">
              <h3><?php esc_html_e( 'Mrs. Tuyet Nguyen', 'bambu' ); ?></h3>
              <p><?php esc_html_e( 'Chief Growth Officer', 'bambu' ); ?></p>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="leader-card">
            <div class="leader-image"></div>
            <div class="leader-info">
              <h3><?php esc_html_e( 'Mrs. Chau Quach', 'bambu' ); ?></h3>
              <p><?php esc_html_e( 'Chief Operating Officer', 'bambu' ); ?></p>
            </div>
          </div>

          <!-- Card 4 (with image) -->
          <div class="leader-card">
            <div class="leader-image">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/our-people/926fe.png' ); ?>" alt="<?php esc_attr_e( 'Quynh Nguyen', 'bambu' ); ?>">
            </div>
            <div class="leader-info">
              <h3><?php esc_html_e( 'Mrs. Quynh Nguyen', 'bambu' ); ?></h3>
              <p><?php esc_html_e( 'Chief Executive Officer', 'bambu' ); ?></p>
            </div>
          </div>
          
          <!-- Card 5 -->
          <div class="leader-card">
            <div class="leader-image"></div>
            <div class="leader-info">
              <h3><?php esc_html_e( 'Mrs. Tuyet Nguyen', 'bambu' ); ?></h3>
              <p><?php esc_html_e( 'Chief Growth Officer', 'bambu' ); ?></p>
            </div>
          </div>
          
          <!-- Card 6 -->
          <div class="leader-card">
            <div class="leader-image"></div>
            <div class="leader-info">
              <h3><?php esc_html_e( 'Mrs. Chau Quach', 'bambu' ); ?></h3>
              <p><?php esc_html_e( 'Chief Operating Officer', 'bambu' ); ?></p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ─── WORK WITH US CTA ─────────────────────────────────────────── -->
    <section class="work-with-us-section">
      <div class="work-container">
        
        <!-- Left: Text content -->
        <div class="work-text">
          <p class="work-text-label"><?php esc_html_e( 'WORK WITH US', 'bambu' ); ?></p>
          <h2 class="work-text-title"><?php esc_html_e( 'Bring your perspective', 'bambu' ); ?><br/><?php esc_html_e( 'to the ecosystem', 'bambu' ); ?></h2>
          <p class="work-text-desc"><?php esc_html_e( 'We are always interested in people and partners who believe innovation should be more open, more connected and more capable of creating real-world impact', 'bambu' ); ?></p>
          
          <div class="work-buttons">
            <!-- Button 1 (No border) -->
            <a href="#" class="work-btn-text">
              <?php esc_html_e( 'Connect with our team', 'bambu' ); ?>
              <span>↗</span>
            </a>
            <!-- Button 2 (With border) -->
            <a href="#" class="work-btn-outline">
              <?php esc_html_e( 'Explore opportunities', 'bambu' ); ?>
              <span>→</span>
            </a>
          </div>
        </div>

        <!-- Right: Image -->
        <div class="work-image">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about/2641a.png' ); ?>" alt="<?php esc_attr_e( 'Team collaboration', 'bambu' ); ?>" />
        </div>
      </div>
    </section>

    <?php get_template_part( 'template-parts/partners-section' ); ?>
    <?php get_template_part( 'template-parts/cta-banner' ); ?>
</main>
<?php get_footer(); ?>
