<?php

namespace FernleafSystems\ApiWrappers\Email\Mailchimp\Lists\Members;

use FernleafSystems\ApiWrappers\Base\BaseVO;

/**
 * Class MemberVO
 * @package FernleafSystems\ApiWrappers\Email\Mailchimp\Lists\Members
 */
class MemberVO extends BaseVO {

	/**
	 * @return string
	 */
	public function getEmail() {
		return $this->getStringParam( 'email_address' );
	}

	/**
	 * @return string
	 */
	public function getId() {
		return $this->getStringParam( 'id' );
	}

	/**
	 * @return string
	 */
	public function getListId() {
		return $this->getStringParam( 'list_id' );
	}

	/**
	 * @return array
	 */
	public function getMergeFields() {
		return $this->getArrayParam( 'merge_fields' );
	}

	/**
	 * @param string $sMergeFieldId
	 * @return mixed
	 */
	public function getMergeField( $sMergeFieldId ) {
		return $this->getMergeFields()[ strtoupper( $sMergeFieldId ) ];
	}

	/**
	 * @return string
	 */
	public function getStatus() {
		return $this->getStringParam( 'status' );
	}
}