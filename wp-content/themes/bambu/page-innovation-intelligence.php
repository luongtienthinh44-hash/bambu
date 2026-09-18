<?php

/**
 * Template Name: Bambu - Innovation Intelligence
 * Template Post Type: page
 *
 * @package Bambu
 */
if (! defined('ABSPATH')) {
    exit;
}

$opportunity_types = get_terms(
    array(
        'taxonomy'   => 'opportunities_type',
        'hide_empty' => false,
        'orderby'    => 'name',
        'order'      => 'ASC',
    )
);
$opportunity_categories = get_terms(
    array(
        'taxonomy'   => 'opportunities_category',
        'hide_empty' => false,
        'orderby'    => 'name',
        'order'      => 'ASC',
    )
);

if ( is_wp_error( $opportunity_types ) ) {
    $opportunity_types = array();
}

if ( is_wp_error( $opportunity_categories ) ) {
    $opportunity_categories = array();
}

$opportunity_parent_categories = array_filter(
    $opportunity_categories,
    static function ( $category ) {
        return 0 === (int) $category->parent;
    }
);

$opportunity_subcategories = array_filter(
    $opportunity_categories,
    static function ( $category ) {
        return 0 < (int) $category->parent;
    }
);

get_header();
?>
<main id="primary" class="site-main innovation-intelligence-page">
    <?php
    get_template_part(
        'template-parts/global-hero',
        null,
        array(
            'page_key' => 'innovation-intelligence',
            'fallback' => array(
                'breadcrumb'   => bambu_get_innovation_intelligence_option( 'bambu_ii_breadcrumb_title', 'Innovation Intelligence' ),
                'title'        => bambu_get_innovation_intelligence_option( 'bambu_ii_hero_title', 'Innovation Intelligence' ),
                'description'  => bambu_get_innovation_intelligence_option( 'bambu_ii_hero_description', 'Discover opportunities, explore innovative solutions and connect with the right partners across the innovation ecosystem.' ),
                'show_ctas'    => true,
                'cta_one_text' => bambu_get_innovation_intelligence_option( 'bambu_ii_find_solutions_text', 'Find Solutions' ),
                'cta_one_url'  => bambu_get_innovation_intelligence_option( 'bambu_ii_find_solutions_url', '/innovation/' ),
                'cta_two_text' => bambu_get_innovation_intelligence_option( 'bambu_ii_showcase_solution_text', 'Showcase Solution' ),
                'cta_two_url'  => bambu_get_innovation_intelligence_option( 'bambu_ii_showcase_solution_url', '/register/' ),
            ),
        )
    );
    ?>

    <!-- OPPORTUNITY LISTING -->
    <section class="opp-section">
        <div class="opp-inner">

            <!-- Section Header + Tabs -->
            <div class="section-header">
                <div>
                    <div class="section-title"><?php echo esc_html( bambu_get_innovation_intelligence_option( 'bambu_ii_listing_title', 'Explore innovation opportunities' ) ); ?></div>
                    <div class="section-sub"><?php echo nl2br( esc_html( bambu_get_innovation_intelligence_option( 'bambu_ii_listing_description', 'Browse vetted challenges, technologies, and active co-creation programs.' ) ) ); ?></div>
                </div>
                <div style="display:flex;align-items:center;">
                    <span class="clear-filters"><?php echo esc_html( bambu_get_innovation_intelligence_option( 'bambu_ii_clear_filters_text', 'Clear all filters' ) ); ?></span>
                    <div class="tab-controls">
                        <div class="tab active" data-type="all"><?php echo esc_html( bambu_get_innovation_intelligence_option( 'bambu_ii_all_tab_label', 'All' ) ); ?></div>
                        <?php foreach ( $opportunity_types as $opportunity_type ) : ?>
                            <div class="tab" data-type="<?php echo esc_attr( $opportunity_type->slug ); ?>"><?php echo esc_html( $opportunity_type->name ); ?></div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Search -->
            <div class="search-wrap">
                <div class="search-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M17.5 17.5l-3.33-3.33M15.83 9.17a6.67 6.67 0 1 1-13.33 0 6.67 6.67 0 0 1 13.33 0z" stroke="#66758B" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <input class="search-input" type="text" placeholder="<?php echo esc_attr( bambu_get_innovation_intelligence_option( 'bambu_ii_search_placeholder', 'Searching for point, technology, host organization...' ) ); ?>" />
            </div>

            <!-- Filter Dropdowns -->
            <div class="filter-bar">
                <button class="filter-btn"><?php echo esc_html( bambu_get_innovation_intelligence_option( 'bambu_ii_open_call_status_label', 'Open Call Status' ) ); ?> <svg class="filter-caret" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M2.91675 8.75002L7.00008 4.66669L11.0834 8.75002" stroke="#3BA295" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <button class="filter-btn"><?php echo esc_html( bambu_get_innovation_intelligence_option( 'bambu_ii_opportunity_type_label', 'Opportunity Type' ) ); ?> <svg class="filter-caret" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M2.91675 8.75002L7.00008 4.66669L11.0834 8.75002" stroke="#3BA295" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <div class="dropdown-wrap category-filter-wrap">
                    <button class="filter-btn" type="button" aria-expanded="false"><?php echo esc_html( bambu_get_innovation_intelligence_option( 'bambu_ii_categories_label', 'Categories' ) ); ?> <svg class="filter-caret" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M2.91675 8.75002L7.00008 4.66669L11.0834 8.75002" stroke="#3BA295" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                    <div class="dropdown is-collapsed">
                        <?php foreach ( $opportunity_parent_categories as $opportunity_category ) : ?>
                            <label class="checkbox-label" data-category="<?php echo esc_attr( $opportunity_category->slug ); ?>">
                                <div class="custom-checkbox"></div>
                                <?php echo esc_html( $opportunity_category->name ); ?>
                            </label>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="dropdown-wrap subcategory-filter-wrap is-disabled">
                    <button class="filter-btn" type="button" disabled aria-disabled="true" aria-expanded="false"><?php echo esc_html( bambu_get_innovation_intelligence_option( 'bambu_ii_subcategory_label', 'Sub-category' ) ); ?> <svg class="filter-caret" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M2.91675 8.75002L7.00008 4.66669L11.0834 8.75002" stroke="#3BA295" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                    <div class="dropdown is-collapsed">
                        <?php foreach ( $opportunity_subcategories as $opportunity_subcategory ) : ?>
                            <?php $parent_category = get_term( $opportunity_subcategory->parent, 'opportunities_category' ); ?>
                            <?php if ( ! is_wp_error( $parent_category ) && $parent_category ) : ?>
                                <label class="checkbox-label" data-category="<?php echo esc_attr( $opportunity_subcategory->slug ); ?>" data-parent="<?php echo esc_attr( $parent_category->slug ); ?>" hidden>
                                    <div class="custom-checkbox"></div>
                                    <?php echo esc_html( $opportunity_subcategory->name ); ?>
                                </label>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <button class="filter-btn"><?php echo esc_html( bambu_get_innovation_intelligence_option( 'bambu_ii_business_problem_label', 'Business Problem' ) ); ?> <svg class="filter-caret" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M2.91675 8.75002L7.00008 4.66669L11.0834 8.75002" stroke="#3BA295" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <button class="filter-btn"><?php echo esc_html( bambu_get_innovation_intelligence_option( 'bambu_ii_financial_value_label', 'Financial Value and Investor' ) ); ?> <svg class="filter-caret" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M2.91675 8.75002L7.00008 4.66669L11.0834 8.75002" stroke="#3BA295" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
            </div>

            <?php
            $opportunities_query = new WP_Query(
                array(
                    'post_type'      => 'opportunities',
                    'post_status'    => 'publish',
                    'posts_per_page' => -1,
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                    'no_found_rows'  => true,
                )
            );
            $opportunities = array();
            $fallback_images = array( 'robotics.jpg', 'manufacturing.jpg', 'smart-city.jpg' );

            while ( $opportunities_query->have_posts() ) :
                $opportunities_query->the_post();
                $post_id       = get_the_ID();
                $types         = get_the_terms( $post_id, 'opportunities_type' );
                $categories    = get_the_terms( $post_id, 'opportunities_category' );
                $post_tags     = get_the_terms( $post_id, 'opportunities_tag' );
                $type_term     = ! is_wp_error( $types ) && ! empty( $types ) ? $types[0] : null;
                $type_name     = $type_term ? $type_term->name : '';
                $is_offer      = false !== stripos( $type_name, 'offer' );
                $type          = $type_term ? $type_term->slug : '';
                $image         = get_the_post_thumbnail_url( $post_id, 'large' );
                $description   = has_excerpt() ? get_the_excerpt() : wp_trim_words( wp_strip_all_tags( get_the_content() ), 28 );
                $organization  = get_post_meta( $post_id, 'organization', true );
                $category_slugs = array();
                $tag_links      = array();

                if ( ! is_wp_error( $categories ) && ! empty( $categories ) ) {
                    foreach ( $categories as $category ) {
                        $category_slugs[] = $category->slug;

                        foreach ( get_ancestors( $category->term_id, 'opportunities_category' ) as $ancestor_id ) {
                            $ancestor = get_term( $ancestor_id, 'opportunities_category' );
                            if ( ! is_wp_error( $ancestor ) && $ancestor ) {
                                $category_slugs[] = $ancestor->slug;
                            }
                        }
                    }
                }

                if ( ! is_wp_error( $post_tags ) && ! empty( $post_tags ) ) {
                    foreach ( $post_tags as $tag ) {
                        $tag_url = get_term_link( $tag, 'opportunities_tag' );

                        $tag_links[] = array(
                            'name' => $tag->name,
                            'url'  => is_wp_error( $tag_url ) ? '' : $tag_url,
                        );
                    }
                }

                $opportunities[] = array(
                    'type'               => $type,
                    'type_name'          => $type_name,
                    'image'              => $image ? $image : bambu_get_media_asset_url( 'innovation-intelligence/' . $fallback_images[ count( $opportunities ) % count( $fallback_images ) ] ),
                    'image_alt'          => get_the_title(),
                    'badge'              => $type_name ? strtoupper( $type_name ) : '',
                    'badge_class'        => $is_offer ? 'badge-offer' : 'badge-need',
                    'date'               => get_the_date( 'F j, Y' ),
                    'organization'       => $organization ? $organization : get_the_author(),
                    'organization_class' => $is_offer ? 'org-cg' : 'org-tsp',
                    'organization_color' => $is_offer ? '#065F46' : '#0F766E',
                    'title'              => get_the_title(),
                    'description'        => $description,
                    'tags'               => $tag_links,
                    'category_slugs'     => array_values( array_unique( $category_slugs ) ),
                    'meta_label'         => get_post_meta( $post_id, 'meta_label', true ),
                    'meta_value'         => get_post_meta( $post_id, 'meta_value', true ),
                    'url'                => get_permalink( $post_id ),
                );
            endwhile;
            wp_reset_postdata();

            $page_size = 9;
            $total_pages = max(1, (int) ceil(count($opportunities) / $page_size));
            ?>

            <!-- Card Grid -->
            <div class="card-grid" data-page-size="<?php echo esc_attr($page_size); ?>" style="margin-bottom:24px;">
                <?php foreach ($opportunities as $opportunity) : ?>
                    <div class="card" data-type="<?php echo esc_attr($opportunity['type']); ?>" data-categories="<?php echo esc_attr( implode( ' ', $opportunity['category_slugs'] ) ); ?>">
                        <div class="card-img-wrap">
                            <img class="card-img" src="<?php echo esc_url($opportunity['image']); ?>" alt="<?php echo esc_attr($opportunity['image_alt']); ?>" />
                            <?php if ( $opportunity['badge'] ) : ?>
                                <span class="card-badge <?php echo esc_attr($opportunity['badge_class']); ?>"><?php echo esc_html($opportunity['badge']); ?></span>
                            <?php endif; ?>
						<div class="card-bookmark">
							<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M3.33334 3.33333C3.33334 2.59745 3.93079 2 4.66668 2H11.3333C12.0692 2 12.6667 2.59745 12.6667 3.33333V14L8.00001 11.6667L3.33334 14V3.33333V3.33333" stroke="#475569" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</div>
                        </div>
                        <div class="card-body">
                            <div class="card-date"><?php esc_html_e( 'Posted:', 'bambu' ); ?> <?php echo esc_html($opportunity['date']); ?></div>
                            <div class="card-org-badge <?php echo esc_attr($opportunity['organization_class']); ?>">
                                <?php echo esc_html($opportunity['organization']); ?>
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" aria-hidden="true">
                                    <circle cx="6" cy="6" r="5.5" stroke="<?php echo esc_attr($opportunity['organization_color']); ?>" />
                                    <path d="M6 8V6M6 4H6.005" stroke="<?php echo esc_attr($opportunity['organization_color']); ?>" />
                                </svg>
                            </div>
                            <div class="card-title"><?php echo esc_html($opportunity['title']); ?></div>
                            <div class="card-desc"><?php echo esc_html($opportunity['description']); ?></div>
                            <div class="card-tags">
                                <?php foreach ($opportunity['tags'] as $tag) : ?>
                                    <?php if ( $tag['url'] ) : ?>
                                        <a href="<?php echo esc_url( $tag['url'] ); ?>" class="tag"><?php echo esc_html( $tag['name'] ); ?></a>
                                    <?php else : ?>
                                        <span class="tag"><?php echo esc_html( $tag['name'] ); ?></span>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                            <div class="card-footer">
                                <div>
                                    <?php if ( $opportunity['meta_label'] || $opportunity['meta_value'] ) : ?>
                                        <div class="card-meta"><?php echo esc_html($opportunity['meta_label']); ?> <strong><?php echo esc_html($opportunity['meta_value']); ?></strong></div>
                                    <?php endif; ?>
                                    <a href="<?php echo esc_url( $opportunity['url'] ); ?>" class="view-details"><?php esc_html_e( 'View details ↗', 'bambu' ); ?></a>
                                </div>
                                <button class="connect-btn"><?php esc_html_e( 'Connect', 'bambu' ); ?></button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Pagination -->
            <div class="pagination-wrap">
                <button class="page-nav" type="button"><?php _e( '&lsaquo; Previous', 'bambu' ); ?></button>
                <div class="page-numbers" aria-label="<?php esc_attr_e( 'Pagination pages', 'bambu' ); ?>"></div>
                <button class="page-nav" type="button"><?php _e( 'Next &rsaquo;', 'bambu' ); ?></button>
                <label class="pagination-jump">
                    <span><?php esc_html_e( 'Page', 'bambu' ); ?></span>
                    <input type="number" value="1" min="1" max="<?php echo esc_attr($total_pages); ?>" aria-label="<?php esc_attr_e( 'Go to page', 'bambu' ); ?>" />
                    <span>/</span>
                    <span class="pagination-total"><?php echo esc_html($total_pages); ?></span>
                </label>
            </div>

        </div>
    </section>

    <?php get_template_part( 'template-parts/cta-banner' ); ?>

</main>
<?php
get_footer();
