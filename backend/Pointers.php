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
namespace Coachs\Backend;

use \Coachs\Engine;

/**
 * All the WP pointers.
 */
class Pointers extends Engine\Base {

	/**
	 * Initialize the Pointers.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function initialize() {
        parent::initialize();
		new \PointerPlus( array( 'prefix' => C_TEXTDOMAIN ) );
		add_filter( 'coachs-pointerplus_list', array( $this, 'custom_initial_pointers' ), 10, 2 );
	}

	/**
	 * Add pointers.
	 * Check on https://github.com/Mte90/pointerplus/blob/master/pointerplus.php for examples
	 *
	 * @param array  $pointers The list of pointers.
	 * @param string $prefix   For your pointers.
	 *
	 * @since 1.0.0
	 *
	 * @return mixed
	 */
	public function custom_initial_pointers( $pointers, $prefix ) {
		return array_merge(
			$pointers,
			array(
				$prefix . '_contextual_help' => array(
					'selector'   => '#show-settings-link',
					'title'      => __( 'Boilerplate Help', C_TEXTDOMAIN ),
					'text'       => __( 'A pointer for help tab.<br>Go to Posts, Pages or Users for other pointers.', C_TEXTDOMAIN ),
					'edge'       => 'top',
					'align'      => 'left',
					'icon_class' => 'dashicons-welcome-learn-more',
				),
			)
		);
	}

}
