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

$c_debug = new WPBP_Debug( __( 'Plugin Name', C_TEXTDOMAIN ) );

/**
 * Log text inside the debugging plugins.
 *
 * @param string $text The text.
 *
 * @return void
 */
function c_log( $text ) {
	global $c_debug;
	$c_debug->log( $text );
}

