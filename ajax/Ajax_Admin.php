<?php

/**
 * Plugin_name
 *
 * @package   Plugin_name
 * @author    Jakub Kułaga <kuba.kulaga.sv7@gmail.com>
 * @copyright 2020 Jakub Kułaga
 * @license   GPL 3.0+
 * @link      https://github.com/4s3man
 */
namespace Coachs\Ajax;

use \Coachs\Engine;

/**
 * AJAX as logged user
 */
class Ajax_Admin extends Engine\Base {

	/**
	 * Initialize the class.
	 *
	 * @return void
	 */
	public function initialize() {
		if ( !apply_filters( 'coachs_c_ajax_admin_initialize', true ) ) {
			return;
		}

		// For logged user
		add_action( 'wp_ajax_your_admin_method', array( $this, 'your_admin_method' ) );
	}

	/**
	 * The method to run on ajax
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function your_admin_method() {
		$return = array(
			'message' => 'Saved',
			'ID'      => 2,
		);

		wp_send_json_success( $return );
		// wp_send_json_error( $return );
	}

}

