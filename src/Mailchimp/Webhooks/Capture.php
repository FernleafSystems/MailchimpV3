<?php

namespace FernleafSystems\ApiWrappers\Email\Mailchimp\Webhooks;

/**
 * Class Capture
 * @package FernleafSystems\ApiWrappers\Email\Mailchimp\Webhooks
 */
class Capture extends \FernleafSystems\ApiWrappers\Email\Common\Webhooks\Capture {

	/**
	 * @return WebhookVO
	 */
	public function capture() {
		return ( new WebhookVO() )->applyFromArray( $this->fromPost()->getRawDataAsArray() );
	}
}