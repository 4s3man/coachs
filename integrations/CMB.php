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

namespace Coachs\Integrations;

use \Coachs\Engine;

/**
 * All the CMB related code.
 */
class CMB extends Engine\Base
{
	const PREFIX = '_coachs_cmb_';
	const COACHS_COMBO_ID = self::PREFIX . 'cmb_coaches';
	const COACHS_QUOTE_ID = self::PREFIX . 'quote';
	const COACHS_TRAININGS_ID = self::PREFIX . 'trainings';


	/**
	 * Initialize class.
	 *
	 * @since 1.0.0
	 */
	public function initialize()
	{
		parent::initialize();
		require_once C_PLUGIN_ROOT . 'vendor/cmb2/init.php';
		require_once C_PLUGIN_ROOT . 'vendor/cmb2-grid/Cmb2GridPluginLoad.php';
		add_action('cmb2_init', array($this, 'cmb_coachs_metaboxes'));
	}

	/**
	 * Your metabox on Demo CPT
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function cmb_coachs_metaboxes()
	{
		$cmb = new_cmb2_box(array(
			'id'            => self::COACHS_COMBO_ID,
			'title'         => __('Coachs', 'cmb2'),
			'object_types'  => array('coachs'), // Post type
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true, // Show field names on the left
		));

		// $cmb2Grid = new \Cmb2Grid\Grid\Cmb2Grid($cmb_demo); //phpcs:ignore WordPress.NamingConventions
		// $row      = $cmb2Grid->addRow(); //phpcs:ignore WordPress.NamingConventions

		// Regular text field
		$cmb->add_field(array(
			'name'       => __('Quote', 'cmb2'),
			'desc'       => __('Coach quote', 'cmb2'),
			'id'         => self::COACHS_QUOTE_ID,
			'type'       => 'textarea',
			'show_on_cb' => 'cmb2_hide_if_no_cats',
			'on_front'        => false,
			'repeatable'      => false,
		));

		$cmb->add_field(array(
			'name'       => __('Trainings', 'cmb2'),
			'id'          =>  self::COACHS_TRAININGS_ID,
			'type'        => 'custom_attached_posts',
			'post_type'   => 'post',
			'select_type' => 'checkbox',
			'column'  => true,
			'options' => array(
				'show_thumbnails' => true,
				'filter_boxes'    => true,
				'query_args'      => array(
					'posts_per_page' => 10,
					'post_type'      => 'tribe_events',
				),
			),
		));
	}
}
