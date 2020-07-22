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

namespace Coachs\Internals;

use \Coachs\Engine;
use \Coachs\Integrations\CMB;

/**
 * Post Types and Taxonomies
 */
class PostTypes extends Engine\Base
{
	/**
	 * Initialize the class.
	 *
	 * @return void
	 */
	public function initialize()
	{
		parent::initialize();
		add_action('init', array($this, 'load_cpts'));
		/*
		* Custom Bulk Actions
		*/
		$bulk_actions = new \Seravo_Custom_Bulk_Action(array('post_type' => 'coachs'));
		$bulk_actions->register_bulk_action(
			array(
				'menu_text'    => 'Mark meta',
				'admin_notice' => 'Written something on custom bulk meta',
				'callback'     => function ($post_ids) {
					foreach ($post_ids as $post_id) {
						update_post_meta($post_id, '_coachs_' . C_TEXTDOMAIN . '_text', 'Random stuff');
					}

					return true;
				},
			)
		);
		$bulk_actions->init();
		// Add bubble notification for cpt pending
		add_action('admin_menu', array($this, 'pending_cpt_bubble'), 999);
		add_filter('pre_get_posts', array($this, 'filter_search'));
	}

	/**
	 * Add support for custom CPT on the search box
	 *
	 * @param object $query Wp_Query.
	 *
	 * @since 1.0.0
	 *
	 * @return object
	 */
	public function filter_search($query)
	{
		if ($query->is_search && !is_admin()) {
			$post_types = $query->get('post_type');
			if ($post_types === 'post') {
				$post_types = array($post_types);
				$query->set('post_type', array_push($post_types, array('coachs')));
			}
		}

		return $query;
	}

	/**
	 * Load CPT and Taxonomies on WordPress
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function load_cpts()
	{
		// Create Custom Post Type https://github.com/johnbillion/extended-cpts/wiki
		$tax = register_extended_post_type(
			'coachs',
			array(
				'label'                 => __('Coach', C_TEXTDOMAIN),
				'description'           => __('Coachs', C_TEXTDOMAIN),
				'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
				'hierarchical'          => false,
				'public'                => true,
				'show_ui'               => true,
				'show_in_menu'          => true,
				'menu_position'         => 5,
				'show_in_admin_bar'     => true,
				'show_in_nav_menus'     => true,
				'can_export'            => true,
				'has_archive'           => true,
				'exclude_from_search'   => false,
				'publicly_queryable'    => true,
				'capability_type'       => 'page',
				// Add some custom columns to the admin screen
				'admin_cols' => array(
					'featured_image' => array(
						'title' => 'Featured Image',
						'featured_image' => 'thumbnail',
					),
					'title',
					'custom_field' => array(
						'title' => 'Quote',
						'meta_key' => CMB::COACHS_QUOTE_ID,
						'cap' => 'manage_options',
					),
					'date' => array(
						'title'   => 'Date',
						'default' => 'ASC',
					),
				),
				// Add a dropdown filter to the admin screen:
				'admin_filters' => array(
					'genre' => array(
						'taxonomy' => '',
					),
				),
			),
			array(
				// Override the base names used for labels:
				'singular' => __('Coachs', C_TEXTDOMAIN),
				'plural'   => __('Coachs', C_TEXTDOMAIN),
			)
		);
	}

	/**
	 * Bubble Notification for pending cpt<br>
	 * NOTE: add in $post_types your cpts<br>
	 *
	 *        Reference:  http://wordpress.stackexchange.com/questions/89028/put-update-like-notification-bubble-on-multiple-cpts-menus-for-pending-items/95058
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function pending_cpt_bubble()
	{
		global $menu;

		$post_types = array('coachs');
		foreach ($post_types as $type) {
			if (!post_type_exists($type)) {
				continue;
			}

			// Count posts
			$cpt_count = wp_count_posts($type);

			if ($cpt_count->pending) {
				// Locate the key of
				$key = self::recursive_array_search_php('edit.php?post_type=' . $type, $menu);

				// Not found, just in case
				if (!$key) {
					return;
				}

				// Modify menu item
				$menu[$key][0] .= sprintf( //phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
					'<span class="update-plugins count-%1$s"><span class="plugin-count">%1$s</span></span>',
					$cpt_count->pending
				);
			}
		}
	}

	/**
	 * Required for the bubble notification<br>
	 *
	 *  Reference:  http://wordpress.stackexchange.com/questions/89028/put-update-like-notification-bubble-on-multiple-cpts-menus-for-pending-items/95058
	 *
	 * @param string $needle First parameter.
	 * @param array  $haystack Second parameter.
	 *
	 * @since 1.0.0
	 *
	 * @return mixed
	 */
	private function recursive_array_search_php($needle, $haystack)
	{
		foreach ($haystack as $key => $value) {
			$current_key = $key;
			if ($needle === $value || (is_array($value) && self::recursive_array_search_php($needle, $value) !== false)) {
				return $current_key;
			}
		}

		return false;
	}
}
