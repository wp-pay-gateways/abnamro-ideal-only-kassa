<?php

/**
 * Title: ABN AMRO - iDEAL Only Kassa config factory
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_AbnAmro_IDealOnlyKassa_ConfigFactory extends Pronamic_WP_Pay_Gateways_Ogone_OrderStandard_ConfigFactory {
	public function __construct() {
		parent::__construct( 'Pronamic_WP_Pay_Gateways_AbnAmro_IDealOnlyKassa_Config', 'Pronamic_WP_Pay_Gateways_AbnAmro_IDealOnlyKassa_ConfigTest' );
	}
}