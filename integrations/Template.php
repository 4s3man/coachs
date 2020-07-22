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
 * Load custom template files
 */
class Template extends Engine\Base {

	/**
	 * Initialize the class.
	 *
	 * @return void
	 */
	public function initialize() {
        parent::initialize();

		// Override the template hierarchy for load /templates/content-demo.php
		add_filter( 'template_include', array( __CLASS__, 'load_content_demo' ) );
	}

	/**
	 * Example for override the template system on the frontend
	 *
	 * @param string $original_template The original templace HTML.
	 *
	 * @since 1.0.0
	 *
	 * @return string
	 */
	public static function load_content_demo( $original_template ) {
		if ( is_singular( 'demo' ) && in_the_loop() ) {
			return wpbp_get_template_part( C_TEXTDOMAIN, 'content', 'demo', false );
		}

		return $original_template;
	}

}
