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
 * The various Cron of this plugin
 */
class Cron extends Engine\Base {

	/**
	 * Initialize the class.
	 *
	 * @return void
	 */
	public function initialize() {
		/*
		 * Load CronPlus
		 */
		$args = array(
			'recurrence'       => 'hourly',
			'schedule'         => 'schedule',
			'name'             => 'hourly_cron',
			'cb'               => array( $this, 'hourly_cron' ),
			'plugin_root_file' => 'coachs.php',
		);

		$cronplus = new \CronPlus( $args );
        // Schedule the event
		$cronplus->schedule_event();
        // Remove the event by the schedule
        // $cronplus->clear_schedule_by_hook();
        // Jump the scheduled event
        // $cronplus->unschedule_specific_event();
	}

	/**
	 * Cron Hourly example
	 *
	 * @since 1.0.0
	 *
	 * @param integer $id The ID.
	 *
	 * @return void
	 */
	public function hourly_cron( $id ) {
		echo esc_html( $id );
	}

}

