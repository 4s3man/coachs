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
