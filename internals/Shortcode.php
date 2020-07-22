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
namespace Coachs\Internals;

use \Coachs\Engine;

/**
 * Shortcodes of this plugin
 */
class Shortcode extends Engine\Base {

	/**
	 * Initialize the class.
	 *
	 * @return void
	 */
	public function initialize() {
		parent::initialize();
        add_shortcode( 'foobar', array( $this, 'foobar_func' ) );
	}

	/**
	 * Shortcode example
	 *
	 * @param array $atts Parameters.
	 *
	 * @since 1.0.0
	 *
	 * @return string
	 */
	public static function foobar_func( $atts ) {
		shortcode_atts(
			array(
				'foo' => 'something',
				'bar' => 'something else',
			),
            $atts
		);

		return '<span class="foo">foo = ' . $atts[ 'foo' ] . '</span>' .
			'<span class="bar">foo = ' . $atts[ 'bar' ] . '</span>';
	}

}

