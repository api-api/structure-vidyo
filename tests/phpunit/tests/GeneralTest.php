<?php

require_once dirname( dirname( __FILE__ ) ) . '/includes/bootstrap.php';

class GeneralTests extends Vidyo_TestCase {
	public function testThat() {
		$request = $this->apiapi->get_request_object( 'vidyo', '/usergroups' );

		$request->set_param( 'name', 'testgroup1' );
		$response = $this->apiapi->send_request( $request );
		$params = $response->get_params();
		print_r( $params );
	}
}