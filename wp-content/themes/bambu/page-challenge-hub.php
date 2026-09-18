<?php
/**
 * Template Name: Bambu - Challenge Hub
 * Template Post Type: page
 *
 * @package Bambu
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$challenge_query = new WP_Query(
	array(
		'post_type'      => 'opportunities',
		'post_status'    => 'publish',
		'posts_per_page' => -1,
		'orderby'        => 'date',
		'order'          => 'DESC',
		'no_found_rows'  => true,
	)
);

$challenge_categories = get_terms(
	array(
		'taxonomy'   => 'opportunities_category',
		'hide_empty' => true,
		'parent'     => 0,
		'orderby'    => 'name',
		'order'      => 'ASC',
	)
);

if ( is_wp_error( $challenge_categories ) ) {
	$challenge_categories = array();
}

$fallback_images = array( '372d4.png', 'a980a.png', 'a8de2.png' );
$published_count = wp_count_posts( 'opportunities' );
$active_challenges = $published_count && isset( $published_count->publish ) ? (int) $published_count->publish : 0;

get_header();
?>
<main id="primary" class="site-main innovation-intelligence-page challenge-hub-page">
    <?php
    get_template_part(
        'template-parts/global-hero',
        null,
        array(
            'page_key' => 'challenge-hub',
            'fallback' => array(
                'breadcrumb'   => 'Challenge Hub',
                'title'        => 'Challenge Hub',
                'description'  => 'Source breakthrough solutions, engage ecosystem partners and accelerate innovation outcomes',
                'show_ctas'    => true,
                'cta_one_text' => 'Explore Challenges',
                'cta_one_url'  => '#challenge-directory',
                'cta_two_text' => 'Launch a Challenge',
                'cta_two_url'  => home_url( '/contact-us/' ),
            ),
        )
    );
    ?>

    <section class="challenge-network">
        <div class="challenge-hub-container">
            <div class="challenge-network-top">
                <div>
                    <p class="challenge-eyebrow"><?php esc_html_e( 'Global Challenge Network', 'bambu' ); ?></p>
                    <h2><?php esc_html_e( 'Where challenges become opportunities', 'bambu' ); ?></h2>
                </div>
                <p class="challenge-network-description"><?php esc_html_e( 'Access a global network of innovation demand, solution capabilities and strategic partnerships', 'bambu' ); ?></p>
            </div>
            <div class="challenge-network-grid">
                <div class="challenge-map-card"><img src="<?php echo esc_url( bambu_get_media_asset_url( 'challenge-hub/1bb0d.png' ) ); ?>" alt="<?php esc_attr_e( 'Global innovation map', 'bambu' ); ?>"></div>
                <div class="challenge-territory">
                    <div class="challenge-territory-header">
                        <p class="challenge-eyebrow"><?php esc_html_e( 'Selected Innovation Territory', 'bambu' ); ?></p>
                        <h3><?php esc_html_e( 'Vietnam', 'bambu' ); ?></h3>
                        <p><?php esc_html_e( 'Access innovation demand, solution capabilities and collaboration opportunities across Vietnam\'s innovation ecosystem', 'bambu' ); ?></p>
                    </div>
                    <div class="challenge-stats">
                        <div class="challenge-stat-card"><strong><?php echo esc_html( $active_challenges ); ?></strong><span><?php esc_html_e( 'Active Challenges', 'bambu' ); ?></span></div>
                        <div class="challenge-stat-card"><strong>42</strong><span><?php esc_html_e( 'Open Programmes', 'bambu' ); ?></span></div>
                    </div>
                    <div class="challenge-focus">
                        <p class="challenge-eyebrow"><?php esc_html_e( 'Leading Focus Areas', 'bambu' ); ?></p>
                        <p><?php esc_html_e( 'Smart city', 'bambu' ); ?> <span aria-hidden="true">•</span> <?php esc_html_e( 'Enterprise AI', 'bambu' ); ?> <span aria-hidden="true">•</span> <?php esc_html_e( 'Climate tech', 'bambu' ); ?></p>
                    </div>
                    <a class="challenge-view-button" href="#challenge-directory"><?php esc_html_e( 'View challenges in this location', 'bambu' ); ?> <span aria-hidden="true">↘</span></a>
                </div>
            </div>
        </div>
    </section>

    <section id="challenge-directory" class="challenge-directory">
        <div class="challenge-hub-container">
            <div class="challenge-search-block">
                <label class="screen-reader-text" for="challenge-search"><?php esc_html_e( 'Search challenges', 'bambu' ); ?></label>
                <div class="challenge-search-wrap">
                    <img src="<?php echo esc_url( bambu_get_media_asset_url( 'challenge-hub/8b2ef.svg' ) ); ?>" alt="" aria-hidden="true">
                    <input id="challenge-search" class="challenge-search-input" type="search" placeholder="<?php esc_attr_e( 'Search by keyword, technology, industry or organization', 'bambu' ); ?>">
                </div>
                <div class="challenge-filter-pills" role="group" aria-label="<?php esc_attr_e( 'Challenge categories', 'bambu' ); ?>">
                    <button class="challenge-filter-pill is-active" type="button" data-filter="all"><?php esc_html_e( 'All Challenges', 'bambu' ); ?></button>
                    <?php foreach ( $challenge_categories as $category ) : ?>
                        <button class="challenge-filter-pill" type="button" data-filter="<?php echo esc_attr( $category->slug ); ?>"><?php echo esc_html( $category->name ); ?></button>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="challenge-cards-grid">
                <?php
                $card_index = 0;
                while ( $challenge_query->have_posts() ) :
	                	$challenge_query->the_post();
	                	$post_id       = get_the_ID();
	                	$categories    = get_the_terms( $post_id, 'opportunities_category' );
	                	$tags          = get_the_terms( $post_id, 'opportunities_tag' );
	                	$type_terms    = get_the_terms( $post_id, 'opportunities_type' );
	                	$image         = get_the_post_thumbnail_url( $post_id, 'large' );
	                	$organization  = get_post_meta( $post_id, 'organization', true );
	                	$deadline      = get_post_meta( $post_id, 'deadline', true );
	                	$programme     = get_post_meta( $post_id, 'programme', true );
	                	$category_slugs = array();
	                	$search_terms  = array( get_the_title(), get_the_excerpt(), $organization );

	                	if ( ! is_wp_error( $categories ) && ! empty( $categories ) ) {
	                		foreach ( $categories as $category ) {
	                			$category_slugs[] = $category->slug;
	                			$search_terms[]   = $category->name;
	                		}
	                	}

	                	if ( ! is_wp_error( $tags ) && ! empty( $tags ) ) {
	                		foreach ( $tags as $tag ) {
	                			$search_terms[] = $tag->name;
	                		}
	                	}

	                	$type_name = ! is_wp_error( $type_terms ) && ! empty( $type_terms ) ? $type_terms[0]->name : 'OPEN';
	                	$card_image = $image ? $image : bambu_get_media_asset_url( 'challenge-hub/' . $fallback_images[ $card_index % count( $fallback_images ) ] );
	                	$card_search = strtolower( implode( ' ', array_filter( $search_terms ) ) );
	                	?>
                    <article class="challenge-card" data-category="<?php echo esc_attr( implode( ' ', array_unique( $category_slugs ) ) ); ?>" data-search="<?php echo esc_attr( $card_search ); ?>">
                        <div class="challenge-card-main">
                            <div class="challenge-card-thumb">
                                <img src="<?php echo esc_url( $card_image ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
                                <span class="challenge-card-badge"><i></i><?php echo esc_html( strtoupper( $type_name ) ); ?></span>
                            </div>
                            <div class="challenge-card-body">
                                <div class="challenge-card-title-row">
                                    <h3><?php echo esc_html( get_the_title() ); ?></h3>
                                    <button class="challenge-bookmark" type="button" aria-label="Bookmark <?php echo esc_attr( get_the_title() ); ?>"><img src="<?php echo esc_url( bambu_get_media_asset_url( 'challenge-hub/92bd8.svg' ) ); ?>" alt=""></button>
                                </div>
                                <p class="challenge-card-date"><?php esc_html_e( 'Posted', 'bambu' ); ?> <?php echo esc_html( get_the_date( 'F j, Y' ) ); ?></p>
                                <?php if ( $organization ) : ?><p class="challenge-card-provider"><?php echo esc_html( $organization ); ?></p><?php endif; ?>
                                <?php if ( ! is_wp_error( $tags ) && ! empty( $tags ) ) : ?>
                                    <div class="challenge-card-tags">
                                        <?php foreach ( array_slice( $tags, 0, 3 ) as $tag ) : ?><span><?php echo esc_html( $tag->name ); ?></span><?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="challenge-card-footer">
                            <div class="challenge-card-meta">
                                <div><span><?php esc_html_e( 'Deadline', 'bambu' ); ?></span><strong><?php echo esc_html( $deadline ? $deadline : '—' ); ?></strong></div>
                                <div><span><?php esc_html_e( 'Programme', 'bambu' ); ?></span><strong><?php echo esc_html( $programme ? $programme : '—' ); ?></strong></div>
                            </div>
                            <a href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e( 'View details', 'bambu' ); ?> <svg width="12" height="5" viewBox="0 0 12 5" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M0 2.772H9.268C8.932 3.178 8.4 4.228 8.4 4.48C8.4 4.606 8.512 4.704 8.652 4.704C8.764 4.704 8.806 4.662 9.016 4.424C9.576 3.766 10.192 3.29 11.214 2.716C11.494 2.562 11.592 2.478 11.592 2.38C11.592 2.268 11.536 2.198 11.424 2.128C10.01 1.302 9.632 0.994 8.918 0.154C8.806 0.028 8.75 0 8.652 0C8.512 0 8.4 0.098 8.4 0.224C8.4 0.308 8.568 0.77 8.68 0.994C8.834 1.316 9.002 1.568 9.268 1.932H0V2.772Z" fill="#1F7A46"/></svg></a>
                        </div>
                    </article>
                    <?php
                    $card_index++;
                endwhile;
                wp_reset_postdata();
                ?>
            </div>

            <p class="challenge-empty" hidden><?php esc_html_e( 'No challenges found.', 'bambu' ); ?></p>
            <div class="challenge-load-more"><button type="button"><?php esc_html_e( 'Load more challenges', 'bambu' ); ?> <svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M-1.1717e-05 3.32L8.28799 11.566L5.43199 10.362L5.13799 10.978L9.30999 12.742L10.094 12L8.28799 7.87L7.64399 8.164L8.87599 10.978L0.573988 2.746L-1.1717e-05 3.32Z" fill="#374151"/></svg></button></div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/partners-section' ); ?>
    <?php get_template_part( 'template-parts/cta-banner' ); ?>
</main>
<?php get_footer(); ?>
