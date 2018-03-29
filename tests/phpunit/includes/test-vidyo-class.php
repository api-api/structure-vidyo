<?php

class Vidyo_TestCase extends Structure_TestCase {
	/**
	 * @var \APIAPI\Core\APIAPI
	 */
	protected $apiapi;

	/**
	 * @var \APIAPI\Structure_Vidyo\Structure_Vidyo
	 */
	protected $api;

	protected function setUp() {

		$username = getenv( 'VIDYO_USER' );
		$password = getenv( 'VIDYO_PASS' );

		$config = array(
			'transporter'            => 'curl',
			'vidyo'                => array(
				'authentication_data' => array(
					'username'    => $username,
					'password' => $password,
				),
			),
		);

		$this->apiapi = apiapi( 'test-api', $config );
	}
}