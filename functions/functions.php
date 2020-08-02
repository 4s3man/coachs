<?php

/**
 * Coachs
 *
 * @package   Coachs
 * @author    Jakub Kułaga <kuba.kulaga.sv7@gmail.com>
 * @copyright 2020 Jakub Kułaga
 * @license   GPL 3.0+
 * @link      https://github.com/4s3man
 */

/**
 * Get the settings of the plugin in a filterable way
 *
 * @since 1.0.0
 *
 * @return array
 */
function c_get_settings()
{
	return apply_filters('c_get_settings', get_option(C_TEXTDOMAIN . '-settings'));
}

/**
 * Render coach
 */
add_action('studium_nvc_after_content_with_event', function ($event) {

	$coachs = Timber\Timber::get_posts([
		'post_status' => 'publish',
		'numberposts' => -1,
		'post_type' => Coachs\Internals\PostTypes::POST_TYPE,
		// 'meta_key' => Coachs\Integrations\CMB::COACHS_TRAININGS_ID,
		// 'meta_value' => $event->id, //sprintf(':"%s";', $event->id),
		// 'meta_compare' => 'LIKE'
		'meta_query' => array(
			array(
				'key'     => Coachs\Integrations\CMB::COACHS_TRAININGS_ID,
				'value'   => (string) $event->id,
				'compare' => 'LIKE',
			),
		),
	]);

	Timber\Timber::render('Coachs_Widget/coachs-loop.html.twig', ['coachs' => $coachs]);
}, 10, 1);
