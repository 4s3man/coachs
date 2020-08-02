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
		'post_type' => Coachs\Internals\PostTypes::POST_TYPE,
		'post_status' => 'publish',
		'numberposts' => -1,
		'order'    => 'ASC',
		'meta_query' => [
			'key' => Coachs\Integrations\CMB::COACHS_TRAININGS_ID,
			'value' => $event->id,
			'compare' => 'LIKE'
		]
	]);

	Timber\Timber::render('Coachs_Widget/coachs-loop.html.twig', ['coachs' => $coachs]);
}, 10, 1);
