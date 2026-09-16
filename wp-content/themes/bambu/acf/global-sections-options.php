<?php
/**
 * Shared theme sections managed through ACF options.
 *
 * @package Bambu
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function bambu_register_global_sections_options() {
	if ( ! function_exists( 'acf_add_options_page' ) || ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_options_page(
		array(
			'page_title' => esc_html__( 'Global Sections', 'bambu' ),
			'menu_title' => esc_html__( 'Global Sections', 'bambu' ),
			'menu_slug'  => 'bambu-global-sections',
			'capability' => 'edit_theme_options',
			'redirect'   => false,
		)
	);

	acf_add_local_field_group(
		array(
			'key'      => 'group_bambu_global_sections',
			'title'    => esc_html__( 'Global Sections', 'bambu' ),
			'fields'   => array(
				array(
					'key'   => 'field_bambu_global_hero_tab',
					'label' => esc_html__( 'Hero sections', 'bambu' ),
					'name'  => 'hero_sections_tab',
					'type'  => 'tab',
				),
				array(
					'key'          => 'field_bambu_global_heroes',
					'label'        => esc_html__( 'Heroes', 'bambu' ),
					'name'         => 'bambu_global_heroes',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => esc_html__( 'Add hero', 'bambu' ),
					'sub_fields'   => array(
						array(
							'key'     => 'field_bambu_global_hero_page_key',
							'label'   => esc_html__( 'Page', 'bambu' ),
							'name'    => 'page_key',
							'type'    => 'select',
							'required' => 1,
							'choices' => array(
								'innovation-intelligence' => esc_html__( 'Innovation Intelligence', 'bambu' ),
								'pricing'                  => esc_html__( 'Pricing', 'bambu' ),
								'services'                 => esc_html__( 'Services', 'bambu' ),
								'about-us'                 => esc_html__( 'About Us', 'bambu' ),
							),
						),
						array(
							'key'   => 'field_bambu_global_hero_breadcrumb',
							'label' => esc_html__( 'Breadcrumb title', 'bambu' ),
							'name'  => 'breadcrumb',
							'type'  => 'text',
						),
						array(
							'key'   => 'field_bambu_global_hero_title',
							'label' => esc_html__( 'Hero title', 'bambu' ),
							'name'  => 'title',
							'type'  => 'text',
						),
						array(
							'key'   => 'field_bambu_global_hero_description',
							'label' => esc_html__( 'Hero description', 'bambu' ),
							'name'  => 'description',
							'type'  => 'textarea',
						),
						array(
							'key'           => 'field_bambu_global_hero_show_ctas',
							'label'         => esc_html__( 'Show CTA buttons', 'bambu' ),
							'name'          => 'show_ctas',
							'type'          => 'true_false',
							'ui'            => 1,
							'default_value' => 0,
						),
						array(
							'key'   => 'field_bambu_global_hero_cta_one_text',
							'label' => esc_html__( 'First CTA text', 'bambu' ),
							'name'  => 'cta_one_text',
							'type'  => 'text',
						),
						array(
							'key'   => 'field_bambu_global_hero_cta_one_url',
							'label' => esc_html__( 'First CTA URL', 'bambu' ),
							'name'  => 'cta_one_url',
							'type'  => 'url',
						),
						array(
							'key'   => 'field_bambu_global_hero_cta_two_text',
							'label' => esc_html__( 'Second CTA text', 'bambu' ),
							'name'  => 'cta_two_text',
							'type'  => 'text',
						),
						array(
							'key'   => 'field_bambu_global_hero_cta_two_url',
							'label' => esc_html__( 'Second CTA URL', 'bambu' ),
							'name'  => 'cta_two_url',
							'type'  => 'url',
						),
					),
				),
				array(
					'key'   => 'field_bambu_global_cta_tab',
					'label' => esc_html__( 'CTA banner', 'bambu' ),
					'name'  => 'cta_banner_tab',
					'type'  => 'tab',
				),
				array(
					'key'           => 'field_bambu_global_cta_title',
					'label'         => esc_html__( 'CTA title', 'bambu' ),
					'name'          => 'bambu_global_cta_title',
					'type'          => 'text',
					'default_value' => 'Start with the right connection.',
				),
				array(
					'key'           => 'field_bambu_global_cta_description',
					'label'         => esc_html__( 'CTA description', 'bambu' ),
					'name'          => 'bambu_global_cta_description',
					'type'          => 'textarea',
					'default_value' => 'We make innovation easy to access for every business everywhere. The next deal is you.',
				),
				array(
					'key'           => 'field_bambu_global_cta_button_text',
					'label'         => esc_html__( 'CTA button text', 'bambu' ),
					'name'          => 'bambu_global_cta_button_text',
					'type'          => 'text',
					'default_value' => 'Contact us',
				),
				array(
					'key'           => 'field_bambu_global_cta_button_url',
					'label'         => esc_html__( 'CTA button URL', 'bambu' ),
					'name'          => 'bambu_global_cta_button_url',
					'type'          => 'url',
					'default_value' => home_url( '/contact-us/' ),
				),
				array(
					'key'   => 'field_bambu_global_partners_tab',
					'label' => esc_html__( 'Partners section', 'bambu' ),
					'name'  => 'partners_section_tab',
					'type'  => 'tab',
				),
				array(
					'key'           => 'field_bambu_global_partners_title',
					'label'         => esc_html__( 'Partners section title', 'bambu' ),
					'name'          => 'bambu_global_partners_title',
					'type'          => 'text',
					'default_value' => 'Trusted by Our Partners',
				),
				array(
					'key'          => 'field_bambu_global_partners',
					'label'        => esc_html__( 'Partners', 'bambu' ),
					'name'         => 'bambu_global_partners',
					'type'         => 'repeater',
					'layout'       => 'table',
					'button_label' => esc_html__( 'Add partner', 'bambu' ),
					'sub_fields'  => array(
						array(
							'key'      => 'field_bambu_global_partner_name',
							'label'    => esc_html__( 'Name', 'bambu' ),
							'name'     => 'name',
							'type'     => 'text',
							'required' => 1,
						),
						array(
							'key'           => 'field_bambu_global_partner_logo',
							'label'         => esc_html__( 'Logo', 'bambu' ),
							'name'          => 'logo',
							'type'          => 'image',
							'return_format' => 'array',
							'preview_size'  => 'thumbnail',
						),
						array(
							'key'   => 'field_bambu_global_partner_url',
							'label' => esc_html__( 'URL', 'bambu' ),
							'name'  => 'url',
							'type'  => 'url',
						),
					),
				),
			),
			'location' => array(
				array(
					array(
						'param'    => 'options_page',
						'operator' => '==',
						'value'    => 'bambu-global-sections',
					),
				),
			),
		)
	);
}
add_action( 'acf/init', 'bambu_register_global_sections_options' );

function bambu_get_global_hero( $page_key, $fallback = array() ) {
	$default = array(
		'breadcrumb'   => '',
		'title'        => '',
		'description'  => '',
		'show_ctas'    => false,
		'cta_one_text' => '',
		'cta_one_url'  => '',
		'cta_two_text' => '',
		'cta_two_url'  => '',
	);

	$hero = wp_parse_args( $fallback, $default );

	if ( ! function_exists( 'get_field' ) ) {
		return $hero;
	}

	$global_heroes = get_field( 'bambu_global_heroes', 'option' );
	if ( ! is_array( $global_heroes ) ) {
		return $hero;
	}

	foreach ( $global_heroes as $global_hero ) {
		if ( isset( $global_hero['page_key'] ) && $page_key === $global_hero['page_key'] ) {
			foreach ( $default as $key => $value ) {
				if ( isset( $global_hero[ $key ] ) && '' !== $global_hero[ $key ] && null !== $global_hero[ $key ] ) {
					$hero[ $key ] = $global_hero[ $key ];
				}
			}

			break;
		}
	}

	return $hero;
}

function bambu_get_global_section_option( $key, $default = '' ) {
	if ( ! function_exists( 'get_field' ) ) {
		return $default;
	}

	$value = get_field( $key, 'option' );

	return '' !== $value && null !== $value ? $value : $default;
}

function bambu_get_global_partners() {
	$default_partners = array(
		array( 'name' => 'McKinsey&Company' ),
		array( 'name' => 'BCG' ),
		array( 'name' => 'Microsoft' ),
		array( 'name' => 'AWS' ),
		array( 'name' => 'STRIPE' ),
		array( 'name' => 'CBRE' ),
		array( 'name' => 'LA FRENCH TECH' ),
	);

	$partner_logo_files = array(
		'mckinsey&company'         => 'mckinsey-company.jpg',
		'bcg'                      => 'bcg.jpg',
		'microsoft'                => 'microsoft.jpg',
		'aws'                      => 'aws.jpg',
		'stripe'                   => 'stripe.jpg',
		'cbre'                     => 'cbre.jpg',
		'la french tech'           => 'french-tech-rooster-icon.jpg',
		'tech mark'                => 'tech-mark.jpg',
		'french tech rooster icon' => 'french-tech-rooster-icon.jpg',
	);

	$partners = $default_partners;
	if ( function_exists( 'get_field' ) ) {
		$configured_partners = get_field( 'bambu_global_partners', 'option' );
		if ( is_array( $configured_partners ) && $configured_partners ) {
			$partners = $configured_partners;
		}
	}

	foreach ( $partners as &$partner ) {
		if ( ! is_array( $partner ) || ! empty( $partner['logo'] ) || empty( $partner['name'] ) ) {
			continue;
		}

		$partner_name = strtolower( trim( $partner['name'] ) );
		$partner_name = preg_replace( '/\s*&\s*/', '&', $partner_name );
		$partner_name = preg_replace( '/\s+/', ' ', $partner_name );

		if ( isset( $partner_logo_files[ $partner_name ] ) ) {
			$partner['logo'] = array(
				'url' => bambu_get_media_asset_url( 'partners/' . $partner_logo_files[ $partner_name ] ),
			);
		}
	}
	unset( $partner );

	return $partners;
}
