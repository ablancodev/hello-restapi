<?php
/**
 * @author Antonio Blanco
 * @package hello-restapi
 * @since hello-restapi 1.0.0
 *
 * Plugin Name: Hello Rest API
 * Plugin URI: http://www.ablancodev.com
 * Description: Playing with the Rest API
 * Version: 1.0.0
 * Author: ablancodev
 * Author URI: http://www.ablancodev.com
 * Donate-Link: http://www.ablancodev.com
 * Text Domain: hellorestapi
 * Domain Path: /languages
 * License: GPLv3
 */
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

require_once( '/core/constants.php' );

class HelloRestAPI {

	public static function init() {
		require_once( '/core/class-hellora-rest-controller.php' );

		add_action( 'rest_api_init', array( __CLASS__, 'rest_api_init' ) );
	}

	public static function rest_api_init() {
		$helloraC = new HelloRA_REST_Controller();
		$helloraC->register_routes();
	}
}
HelloRestAPI::init();