<?php

class Pronamic_WP_Pay_Gateways_AbnAmro_IDealOnlyKassa_GatewayIntegration {
	public function __construct() {
		$this->id = 'abnamro-ideal-only-kassa';
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
