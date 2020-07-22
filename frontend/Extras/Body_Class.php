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
namespace Coachs\Frontend\Extras;

use \Coachs\Engine;

/**
 * Add custom css class to <body>
 */
class Body_Class extends Engine\Base {

	/**
	 * Initialize the class.
	 *
	 * @return void
	 */
	public function initialize() {
		parent::initialize();
		add_filter( 'body_class', array( __CLASS__, 'add_c_class' ), 10, 3 );
	}

	/**
	 * Add class in the body on the frontend
	 *
	 * @param array $classes The array with all the classes of the page.
	 *
	 * @since 1.0.0
	 *
	 * @return array
	 */
	public static function add_c_class( $classes ) {
		$classes[] = C_TEXTDOMAIN;
		return $classes;
	}

}
