<?php
/**
 * Structure_Vidyo class
 *
 * @package APIAPI\Structure_Billomat
 * @since   1.0.0
 */

namespace APIAPI\Structure_Vidyo;

use APIAPI\Core\Structures\Structure;
use APIAPI\Core\Request\Method;

if ( ! class_exists( 'APIAPI\Structure_Vidyo\Structure_Vidyo' ) ) {

	/**
	 * Structure implementation for Vidyo.
	 *
	 * @since 1.0.0
	 */
	class Structure_Vidyo extends Structure {
		/**
		 * Sets up the API structure.
		 * This method should populate the routes array, and can also be used to
		 * handle further initialization functionality, like setting the authenticator
		 * class and default authentication data.
		 *
		 * @since 1.0.0
		 */
		protected function setup() {
			$this->title         = 'Vidyo API';
			$this->description   = 'Allows to access and manage the data in your Vidyo account.';
			$this->base_uri      = 'https://actvisual.vidyocloud.com/admin/service/v1/';

			$this->authenticator = 'basic';

			$this->routes['/usergroups'] = array(
				'methods' => array(
					Method::GET  => array(
						'description'          => 'Lists usergroups',
						'needs_authentication' => true,
						'params'               => array(
							'offset'          => array(
								'description' => 'Offset.',
								'type'        => 'integer',
							),
							'name' => array(
								'description' => 'Group name',
								'type'        => 'string',
							),
								'desc'         => array(
								'description' => 'Group description',
								'type'        => 'string',
							),
							'limit'    => array(
								'description' => 'Limits the number of results',
								'type'        => 'integer',
							),
							'sort'     => array(
								'description' => 'Order of results (desc/asc)',
								'type'        => 'string',
							),
							'properties'  => array(
								'description' => 'Country code in ISO 3166 Alpha-2 format.',
								'type'        => 'array',
							)
						)
					)
				)
			);
		}
	}
}
