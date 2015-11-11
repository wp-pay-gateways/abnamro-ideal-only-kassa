<?php

class Pronamic_WP_Pay_Gateways_AbnAmro_IDealOnlyKassa_Integration {
	public function __construct() {
		$this->id       = 'abnamro-ideal-only-kassa';
		$this->name     = 'ABN AMRO - iDEAL Only Kassa';
		$this->url      = 'https://internetkassa.abnamro.nl/';
		$this->provider = 'abnamro';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_Ogone_OrderStandard_ConfigFactory';
	}

	public function get_config_class() {
		return 'Pronamic_WP_Pay_Gateways_Ogone_OrderStandard_Config';
	}

	public function get_gateway_class() {
		return 'Pronamic_WP_Pay_Gateways_Ogone_OrderStandard_Gateway';
	}
}
