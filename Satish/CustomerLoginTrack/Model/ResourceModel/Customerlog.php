<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Satish\CustomerLoginTrack\Model\ResourceModel;



/**
 * Customer entity resource model
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Customerlog extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	/**
	 * Date
	 *
	 * @var \Magento\Framework\Stdlib\DateTime\DateTime
	 */
	protected $_date;
	
	/**
	 * @var \Magento\Framework\Stdlib\DateTime
	 */
	protected $dateTime;
	
	/**
	 * @param \Magento\Framework\Model\ResourceModel\Db\Context $context
	 * @param \Magento\Framework\Stdlib\DateTime\DateTime $date
	 * @param \Magento\Framework\Stdlib\DateTime $dateTime
	 * @param string $connectionName
	 */
	public function __construct(
			\Magento\Framework\Model\ResourceModel\Db\Context $context,
			\Magento\Framework\Stdlib\DateTime\DateTime $date,
			\Magento\Framework\Stdlib\DateTime $dateTime,
			$connectionName = null
			) {
				$this->_date = $date;
				$this->dateTime = $dateTime;
				parent::__construct($context, $connectionName);
	}

   

    /**
     * Init resource data
     *
     * @return void
     */
    protected function _construct()
    {
    	$this->_init('customer_login_track', 'entity_id');
    }
}
