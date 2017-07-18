<?php

namespace FernleafSystems\Apis\Email\SendInBlue\Users;

use FernleafSystems\Apis\Email\SendInBlue\Api;

class Create extends Api {

	const REQUEST_METHOD = 'post';

	/**
	 * @param array $aAttrs
	 * @return $this
	 */
	public function setAttributes( $aAttrs ) {
		return $this->setRequestDataItem( 'attributes', $aAttrs );
	}

	/**
	 * @param string $sEmail
	 * @return $this
	 */
	public function setEmail( $sEmail ) {
		return $this->setRequestDataItem( 'email', $sEmail );
	}

	/**
	 * @return string
	 */
	protected function getUrlEndpoint() {
		return 'user/createdituser';
	}
}