<?php

/**
 * Title: ABN AMRO - iDEAL Only Kassa integration
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_AbnAmro_IDealOnlyKassa_Integration extends Pronamic_WP_Pay_Gateways_Ogone_OrderStandard_Integration {
	public function __construct() {
		$this->id       = 'abnamro-ideal-only-kassa';
		$this->name     = 'ABN AMRO - iDEAL Only Kassa';
		$this->url      = 'https://internetkassa.abnamro.nl/';
		$this->provider = 'abnamro';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_AbnAmro_IDealOnlyKassa_ConfigFactory';
	}
}
