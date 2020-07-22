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
 * Fake Pages inside WordPress
 */
class FakePage extends Engine\Base {

	/**
	 * Initialize the class.
	 *
	 * @return void
	 */
	public function initialize() {
        parent::initialize();
        new \Fake_Page(
            array(
            'slug'         => 'fake_slug',
            'post_title'   => 'Fake Page Title',
            'post_content' => 'This is the fake page content',
            )
        );
    }

}

