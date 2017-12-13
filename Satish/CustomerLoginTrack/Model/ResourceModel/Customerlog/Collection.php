<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Satish\CustomerLoginTrack\Model\ResourceModel\Customerlog;





/**
 * Search query collection
 *
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{


// 	protected $_idFieldName = 'customer_id';
// 	protected $_eventPrefix = 'customer_login_track_collection';
// 	protected $_eventObject = 'customerlogintrack_collection';
	
	
	
// 	public function __construct(
// 			\Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory,
// 			\Psr\Log\LoggerInterface $logger,
// 			\Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy,
// 			\Magento\Framework\Event\ManagerInterface $eventManager,
// 			\Magento\Framework\DB\Adapter\AdapterInterface $connection = null,
// 			\Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource = null
// 			) {
// 				$this->_eventManager = $eventManager;
// 				parent::__construct($entityFactory, $logger, $fetchStrategy, $connection);
// 				$this->_construct();
// 				$this->_resource = $resource;
// 				$this->setConnection($this->getResource()->getConnection());
// 				$this->_initSelect();
// 	}
	
    /**
     * Init model for collection
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Satish\CustomerLoginTrack\Model\Customerlog', 'Satish\CustomerLoginTrack\Model\ResourceModel\Customerlog');
    }
    
    
    protected function _initSelect()
    {
    	parent::_initSelect();
    	
    	$this->getSelect()->join(
    			['customer' => $this->getTable('customer_entity')],
    			'main_table.customer_id = customer.entity_id',
    			['customer_name' => 'concat(customer.firstname," ", customer.lastname)']
    			);
    	return $this;
    }
 

   
}
