<?php
class HelloRA_REST_Controller extends WP_REST_Controller {

	public function __construct() {
		$this->namespace = HELLORA_API_NAMESPACE;
		$this->rest_base = 'hello';
	}

	/**
	 * Register the routes for the objects of the controller.
	 */
	public function register_routes() {
		register_rest_route( HELLORA_API_NAMESPACE, '/hello', array(
			'methods'   => 'GET',
			'callback'  => array( $this, 'hello_world' ),
		) );
	}

	/**
	 * Output Hello World in JSON format
	 * @param  array $data The data passed in the request
	 * @return json	   The returned JSON
	 */
	public function hello_world( $data ) {
		return 'Hello World from version ' . HELLORA_API_VERSION;
	}
}