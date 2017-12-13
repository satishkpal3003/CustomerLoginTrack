<?php
namespace Satish\CustomerLoginTrack\Model;



use Satish\CustomerLoginTrack\Api\Data\CustomerlogInterface;

class Customerlog extends \Magento\Framework\Model\AbstractModel implements CustomerlogInterface
{
// 	const CACHE_TAG = 'customer_login_track';
	
// 	protected $_cacheTag = 'customer_login_track';
	
// 	protected $_eventPrefix = 'customer_login_track';
	
		
	/**
	 * Initialize customer model
	 *
	 * @return void
	 */
	public function _construct()
	{
		$this->_init('Satish\CustomerLoginTrack\Model\ResourceModel\Customerlog');
	}
	
	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}
	
	/**#@-*/
	
	/**
	 * Get customer id
	 *
	 * @return int|null
	 */
	public function getId(){
		return  $this->getData(self::ID);
	}
	
	/**
	 * Set customer id
	 *
	 * @param int $id
	 * @return $this
	 */
	public function setId($id){
		return  $this->setData(self::ID,$id);
	}
	
	
	/**#@-*/
	
	/**
	 * Get customer id
	 *
	 * @return int|null
	 */
	public function getIp(){
		return  $this->getData(self::IP);
	}
	
	/**
	 * Set customer id
	 *
	 * @param int $id
	 * @return $this
	 */
	public function setIp($ip){
		return  $this->setData(self::IP,$ip);
	}
	
	
	/**
	 * Get created at time
	 *
	 * @return string|null
	 */
	public function getCreatedAt(){
		return  $this->getData(self::CREATED_AT);
	}
	
	/**
	 * Set created at time
	 *
	 * @param string $createdAt
	 * @return $this
	 */
	public function setCreatedAt($createdAt){
		return  $this->setData(self::CREATED_AT,$createdAt);
	}
	
	/**
	 * Get updated at time
	 *
	 * @return string|null
	 */
	public function getUpdatedAt(){
		return  $this->getData(self::UPDATED_AT);
	}
	
	/**
	 * Set updated at time
	 *
	 * @param string $updatedAt
	 * @return $this
	 */
	public function setUpdatedAt($updatedAt){
		return  $this->setData(self::UPDATED_AT, $updatedAt);
	}
}
