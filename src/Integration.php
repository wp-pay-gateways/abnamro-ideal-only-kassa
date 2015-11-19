<?php

class Pronamic_WP_Pay_Gateways_AbnAmro_IDealOnlyKassa_Integration extends Pronamic_WP_Pay_Gateways_Ogone_OrderStandard_Integration {
	public function __construct() {
		$this->id       = 'abnamro-ideal-only-kassa';
		$this->name     = 'ABN AMRO - iDEAL Only Kassa';
		$this->url      = 'https://internetkassa.abnamro.nl/';
		$this->provider = 'abnamro';
	}
}
