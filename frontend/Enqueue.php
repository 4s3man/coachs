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
namespace Coachs\Frontend;

use Coachs\Engine;

/**
 * Enqueue stuff on the frontend
 */
class Enqueue extends Engine\Base {

	/**
	 * Initialize the class.
	 *
	 * @return void
	 */
	public function initialize() {
		parent::initialize();

		// Load public-facing style sheet and JavaScript.
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'enqueue_styles' ) );
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'enqueue_scripts' ) );
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'enqueue_js_vars' ) );
	}


	/**
	 * Register and enqueue public-facing style sheet.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public static function enqueue_styles() {
		wp_enqueue_style( C_TEXTDOMAIN . '-plugin-styles', plugins_url( 'assets/css/public.css', C_PLUGIN_ABSOLUTE ), array(), C_VERSION );
	}


	/**
	 * Register and enqueues public-facing JavaScript files.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public static function enqueue_scripts() {
		wp_enqueue_script( C_TEXTDOMAIN . '-plugin-script', plugins_url( 'assets/js/public.js', C_PLUGIN_ABSOLUTE ), array( 'jquery' ), C_VERSION );
	}


	/**
	 * Print the PHP var in the HTML of the frontend for access by JavaScript.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public static function enqueue_js_vars() {
		wp_localize_script(
             C_TEXTDOMAIN . '-plugin-script',
            'c_js_vars',
            array(
				'alert' => __( 'Hey! You have clicked the button!', C_TEXTDOMAIN ),
			)
		);
	}

}
