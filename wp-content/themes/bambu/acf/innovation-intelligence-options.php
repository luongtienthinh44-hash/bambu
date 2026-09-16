<?php
/**
 * Innovation Intelligence page fields.
 *
 * @package Bambu
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function bambu_register_innovation_intelligence_fields() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'      => 'group_bambu_innovation_intelligence_options',
			'title'    => esc_html__( 'Innovation Intelligence Content', 'bambu' ),
			'fields'   => array(
				array(
					'key'   => 'field_bambu_ii_hero_tab',
					'label' => esc_html__( 'Hero', 'bambu' ),
					'name'  => 'hero_tab',
					'type'  => 'tab',
				),
				array(
					'key'           => 'field_bambu_ii_breadcrumb_title',
					'label'         => esc_html__( 'Breadcrumb title', 'bambu' ),
					'name'          => 'bambu_ii_breadcrumb_title',
					'type'          => 'text',
					'default_value' => 'Innovation Intelligence',
				),
				array(
					'key'           => 'field_bambu_ii_hero_title',
					'label'         => esc_html__( 'Hero title', 'bambu' ),
					'name'          => 'bambu_ii_hero_title',
					'type'          => 'text',
					'default_value' => 'Innovation Intelligence',
				),
				array(
					'key'           => 'field_bambu_ii_hero_description',
					'label'         => esc_html__( 'Hero description', 'bambu' ),
					'name'          => 'bambu_ii_hero_description',
					'type'          => 'textarea',
					'default_value' => 'Discover opportunities, explore innovative solutions and connect with the right partners across the innovation ecosystem.',
				),
				array(
					'key'           => 'field_bambu_ii_find_solutions_text',
					'label'         => esc_html__( 'Find Solutions button text', 'bambu' ),
					'name'          => 'bambu_ii_find_solutions_text',
					'type'          => 'text',
					'default_value' => 'Find Solutions',
				),
				array(
					'key'           => 'field_bambu_ii_find_solutions_url',
					'label'         => esc_html__( 'Find Solutions button URL', 'bambu' ),
					'name'          => 'bambu_ii_find_solutions_url',
					'type'          => 'url',
					'default_value' => home_url( '/innovation/' ),
				),
				array(
					'key'           => 'field_bambu_ii_showcase_solution_text',
					'label'         => esc_html__( 'Showcase Solution button text', 'bambu' ),
					'name'          => 'bambu_ii_showcase_solution_text',
					'type'          => 'text',
					'default_value' => 'Showcase Solution',
				),
				array(
					'key'           => 'field_bambu_ii_showcase_solution_url',
					'label'         => esc_html__( 'Showcase Solution button URL', 'bambu' ),
					'name'          => 'bambu_ii_showcase_solution_url',
					'type'          => 'url',
					'default_value' => home_url( '/register/' ),
				),
				array(
					'key'   => 'field_bambu_ii_listing_tab',
					'label' => esc_html__( 'Listing', 'bambu' ),
					'name'  => 'listing_tab',
					'type'  => 'tab',
				),
				array(
					'key'           => 'field_bambu_ii_listing_title',
					'label'         => esc_html__( 'Listing title', 'bambu' ),
					'name'          => 'bambu_ii_listing_title',
					'type'          => 'text',
					'default_value' => 'Explore innovation opportunities',
				),
				array(
					'key'           => 'field_bambu_ii_listing_description',
					'label'         => esc_html__( 'Listing description', 'bambu' ),
					'name'          => 'bambu_ii_listing_description',
					'type'          => 'textarea',
					'default_value' => 'Browse vetted challenges, technologies, and active co-creation programs.',
				),
				array(
					'key'           => 'field_bambu_ii_all_tab_label',
					'label'         => esc_html__( 'All tab label', 'bambu' ),
					'name'          => 'bambu_ii_all_tab_label',
					'type'          => 'text',
					'default_value' => 'All',
				),
				array(
					'key'           => 'field_bambu_ii_clear_filters_text',
					'label'         => esc_html__( 'Clear filters text', 'bambu' ),
					'name'          => 'bambu_ii_clear_filters_text',
					'type'          => 'text',
					'default_value' => 'Clear all filters',
				),
				array(
					'key'           => 'field_bambu_ii_search_placeholder',
					'label'         => esc_html__( 'Search placeholder', 'bambu' ),
					'name'          => 'bambu_ii_search_placeholder',
					'type'          => 'text',
					'default_value' => 'Searching for point, technology, host organization...',
				),
				array(
					'key'           => 'field_bambu_ii_open_call_status_label',
					'label'         => esc_html__( 'Open Call Status filter label', 'bambu' ),
					'name'          => 'bambu_ii_open_call_status_label',
					'type'          => 'text',
					'default_value' => 'Open Call Status',
				),
				array(
					'key'           => 'field_bambu_ii_opportunity_type_label',
					'label'         => esc_html__( 'Opportunity Type filter label', 'bambu' ),
					'name'          => 'bambu_ii_opportunity_type_label',
					'type'          => 'text',
					'default_value' => 'Opportunity Type',
				),
				array(
					'key'           => 'field_bambu_ii_categories_label',
					'label'         => esc_html__( 'Categories filter label', 'bambu' ),
					'name'          => 'bambu_ii_categories_label',
					'type'          => 'text',
					'default_value' => 'Categories',
				),
				array(
					'key'           => 'field_bambu_ii_subcategory_label',
					'label'         => esc_html__( 'Sub-category filter label', 'bambu' ),
					'name'          => 'bambu_ii_subcategory_label',
					'type'          => 'text',
					'default_value' => 'Sub-category',
				),
				array(
					'key'           => 'field_bambu_ii_business_problem_label',
					'label'         => esc_html__( 'Business Problem filter label', 'bambu' ),
					'name'          => 'bambu_ii_business_problem_label',
					'type'          => 'text',
					'default_value' => 'Business Problem',
				),
				array(
					'key'           => 'field_bambu_ii_financial_value_label',
					'label'         => esc_html__( 'Financial Value filter label', 'bambu' ),
					'name'          => 'bambu_ii_financial_value_label',
					'type'          => 'text',
					'default_value' => 'Financial Value and Investor',
				),
			),
			'location' => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-innovation-intelligence.php',
					),
				),
			),
		)
	);
}
add_action( 'acf/init', 'bambu_register_innovation_intelligence_fields' );

function bambu_get_innovation_intelligence_option( $key, $default = '' ) {
	if ( ! function_exists( 'get_field' ) ) {
		return $default;
	}

	$page_id = get_queried_object_id();
	if ( ! $page_id ) {
		return $default;
	}

	$value = get_field( $key, $page_id );
	return '' !== $value && null !== $value ? $value : $default;
}
