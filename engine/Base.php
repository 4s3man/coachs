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
namespace Coachs\Engine;

/**
 * Base skeleton of the plugin
 */
class Base {

	/**
	 * @var array The settings of the plugin
	 */
	public $settings = array();

	/**
	 * Initialize the class
	 */
	public function initialize() {
		$this->settings = c_get_settings();
		return true;
	}

}
