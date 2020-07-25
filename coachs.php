<?php

/**
 *
 * @package   Coachs
 * @author    Jakub Kułaga <kuba.kulaga.sv7@gmail.com>
 * @copyright 2020 Jakub Kułaga
 * @license   GPL 3.0+
 * @link      https://github.com/4s3man
 *
 * Plugin Name:     Coachs
 * Plugin URI:      @TODO
 * Description:     @TODO
 * Version:         1.0.0
 * Author:          Jakub Kułaga
 * Author URI:      https://github.com/4s3man
 * Text Domain:     coachs
 * License:         GPL 3.0+
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:     /languages
 * Requires PHP:    7.0
 * WordPress-Plugin-Boilerplate-Powered: v3.2.0
 */
// If this file is called directly, abort.
if (!defined('ABSPATH')) {
	die('We\'re sorry, but you can not directly access this file.');
}

define('C_VERSION', '1.0.0');
define('C_TEXTDOMAIN', 'coachs');
define('C_NAME', 'Coachs');
define('C_PLUGIN_ROOT', plugin_dir_path(__FILE__));
define('C_PLUGIN_ABSOLUTE', __FILE__);

add_action(
	'init',
	function () {
		load_plugin_textdomain(C_TEXTDOMAIN, false, dirname(plugin_basename(__FILE__)) . '/languages');
	}
);
if (version_compare(PHP_VERSION, '7.0.0', '<=')) {
	add_action(
		'admin_init',
		function () {
			deactivate_plugins(plugin_basename(__FILE__));
		}
	);
	add_action(
		'admin_notices',
		function () {
			echo wp_kses_post(
				sprintf(
					'<div class="notice notice-error"><p>%s</p></div>',
					__('"Coachs" requires PHP 5.6 or newer.', C_TEXTDOMAIN)
				)
			);
		}
	);

	// Return early to prevent loading the plugin.
	return;
}

$coachs_libraries = require_once C_PLUGIN_ROOT . 'vendor/autoload.php';

require_once C_PLUGIN_ROOT . 'functions/functions.php';
require_once C_PLUGIN_ROOT . 'functions/debug.php';

// Add your new plugin on the wiki: https://github.com/WPBP/WordPress-Plugin-Boilerplate-Powered/wiki/Plugin-made-with-this-Boilerplate

$requirements = new \Micropackage\Requirements\Requirements(
	'Plugin Name',
	array(
		'php'            => '7.0',
		'php_extensions' => array('mbstring'),
		'wp'             => '5.3',
		'plugins'            => array(
			array('file' => 'cmb2-attached-posts/cmb2-attached-posts-field.php', 'name' => 'CMB2 Field Type: Attached Posts', 'version' => '1.2.7'),
			array('file' => 'the-events-calendar/the-events-calendar.php', 'name' => 'The Events Calendar', 'version' => '5.1.4'),
			array('file' => 'timber-library/timber.php', 'name' => 'Timber', 'version' => '1.17.0'),
		),
	)
);
if (!$requirements->satisfied()) {
	$requirements->print_notice();
	return;
}


/**
 * Create a helper function for easy SDK access.
 *
 * @global type $c_fs
 * @return object
 */
function c_fs()
{
	global $c_fs;

	if (!isset($c_fs)) {
		require_once C_PLUGIN_ROOT . 'vendor/freemius/wordpress-sdk/start.php';
		$c_fs = fs_dynamic_init(
			array(
				'id'             => '',
				'slug'           => 'coachs',
				'public_key'     => '',
				'is_live'        => false,
				'is_premium'     => true,
				'has_addons'     => false,
				'has_paid_plans' => true,
				'menu'           => array(
					'slug' => 'coachs',
				),
			)
		);


		if ($c_fs->is_premium()) {
			$c_fs->add_filter(
				'support_forum_url',
				function ($wp_org_support_forum_url) {
					return 'http://your url';
				}
			);
		}
	}

	return $c_fs;
}

// c_fs();

// Documentation to integrate GitHub, GitLab or BitBucket https://github.com/YahnisElsts/plugin-update-checker/blob/master/README.md
$my_update_checker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/user-name/repo-name/',
	__FILE__,
	'unique-plugin-or-theme-slug'
);

if (!wp_installing()) {
	add_action(
		'plugins_loaded',
		function () use ($coachs_libraries) {
			new \Coachs\Engine\Initialize($coachs_libraries);
		}
	);
}
