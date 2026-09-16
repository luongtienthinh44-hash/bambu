<?php
/**
 * Default page template.
 *
 * @package Bambu
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
get_template_part( 'template-parts/page-content' );
get_footer();
