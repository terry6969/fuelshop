<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(
	'default' => array(
		'connection'  => array(
			'dsn'        => 'mysql:host=localhost;dbname=fuelshop_db',
			'username'   => 'fuel_app',
			'password'   => 'super_secret_password',
		),
	),
);