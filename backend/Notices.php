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
namespace Coachs\Backend;

use \Coachs\Engine;
use Yoast_I18n_WordPressOrg_v3;

/**
 * Everything that involves notification on the WordPress dashboard
 */
class Notices extends Engine\Base {

	/**
	 * Initialize the class
	 *
	 * @return void
	 */
	public function initialize() {
		if ( !parent::initialize() ) {
			return;
		}

		wpdesk_wp_notice( __( 'Updated Messages', C_TEXTDOMAIN ), 'updated' );
		wpdesk_wp_notice( __( 'This is my dismissible notice', C_TEXTDOMAIN ), 'error', true );

		/*
		 * Review plugin notice.
		 */
		new \WP_Review_Me(
			array(
				'days_after' => 15,
				'type'       => 'plugin',
				'slug'       => C_TEXTDOMAIN,
				'rating'     => 5,
				'message'    => __( 'Review me!', C_TEXTDOMAIN ),
				'link_label' => __( 'Click here to review', C_TEXTDOMAIN ),
			)
		);
		/*
		 * Alert after few days to suggest to contribute to the localization if it is incomplete
		 * on translate.wordpress.org, the filter enables to remove globally.
		 */
		if ( apply_filters( 'coachs_alert_localization', true ) ) {
			new Yoast_I18n_WordPressOrg_V3(
			array(
				'textdomain'  => C_TEXTDOMAIN,
				'coachs' => C_NAME,
				'hook'        => 'admin_notices',
			),
			true
			);
		}

	}

}

