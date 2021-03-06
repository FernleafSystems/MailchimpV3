<?php

namespace FernleafSystems\ApiWrappers\Email\ActiveCampaign\DeepData\Orders;

use FernleafSystems\ApiWrappers\Email\ActiveCampaign;

/**
 * Class Base
 * @package FernleafSystems\ApiWrappers\Email\ActiveCampaign\DeepData\Orders
 */
class Base extends ActiveCampaign\DeepData\Base\DeepDataBase {

	const ENDPOINT_KEY = 'ecomOrder';

	/**
	 * @return OrderVO
	 */
	protected function getVO() {
		return new OrderVO();
	}
}