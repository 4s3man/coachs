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

namespace Coachs\Integrations\Widgets;

use Coachs\Internals\PostTypes;
use Timber\Timber;

/**
 * Create custom widget class extending WPH_Widget
 */
class Coachs_Widget extends \WPH_Widget
{
	/**
	 * Initialize the widget
	 *
	 * @return void
	 */
	public function __construct()
	{
		$args = array(
			'label'       => __('List coachs', C_TEXTDOMAIN),
			'description' => __('Render coachs index', C_TEXTDOMAIN),
			'slug'        => 'coachs',
			// 'options' => array( 'cache' => true )
		);

		$args['fields'] = [];

		$this->create_widget($args);
	}

	/**
	 * Custom validation for this widget
	 *
	 * @since 1.0.0
	 *
	 * @param string $value The text.
	 *
	 * @return boolean
	 */
	public function my_custom_validation($value)
	{
		if (strlen($value) > 1) {
			return false;
		}

		return true;
	}

	/**
	 * Output function
	 *
	 * @since 1.0.0
	 *
	 * @param array $args     The argument shared to the output from WordPress.
	 * @param array $instance The settings saved.
	 *
	 * @return void
	 */
	public function widget($args, $instance)
	{
		echo $args['before_widget'];

		// And here do whatever you want
		echo $args['before_title'];
		echo $args['after_title'];

		$coachs = Timber::get_posts([
			'post_type' => PostTypes::POST_TYPE,
			'post_status' => 'publish',
			'numberposts' => -1,
			'order'    => 'ASC'
		]);

		Timber::$locations = C_PLUGIN_ROOT . '/timber';
		Timber::render('Coachs_Widget/index.html.twig', ['coachs' => $coachs]);

		echo $args['after_widget'];
	}

	/**
	 * Initialize the class.
	 *
	 * @return void
	 */
	public function initialize()
	{
		add_action(
			'widgets_init',
			function () {
				register_widget('Coachs\Integrations\Widgets\Coachs_Widget');
			}
		);
	}
}
