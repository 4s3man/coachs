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

use Coachs\Engine;

/**
 * AJAX in the public
 */
class Ajax extends Engine\Base {

	/**
	 * Initialize the class.
	 *
	 * @return void
	 */
	public function initialize() {
		if ( !apply_filters( 'coachs_c_ajax_initialize', true ) ) {
			return;
		}

		// For not logged user
		add_action( 'wp_ajax_nopriv_your_method', array( $this, 'your_method' ) );
	}

	/**
	 * The method to run on ajax
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function your_method() {
		$return = array(
			'message' => 'Saved',
			'ID'      => 1,
		);

		wp_send_json_success( $return );
		// wp_send_json_error( $return );
	}

}

