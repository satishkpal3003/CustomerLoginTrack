<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Satish\CustomerLoginTrack\Observer;

use Magento\Customer\Model\Logger;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Satish\CustomerLoginTrack\Api\CustomerlogRepositoryInterface;

/**
 * Customer log observer.
 */
class LogCustomerLoginObserver implements ObserverInterface
{
	/**
	 * customer's data.
	 *
	 * @var RemoteAddressFactory
	 */
	protected $_remoteAddressFactory;
    /**
     * customer's data.
     *
     * @var CustomerlogFactory
     */
	protected $_customerLogFactory;
	
	/**
	 * customer's data.
	 *
	 * @var CustomerlogFactory
	 */
	protected $_customerLogRespository;

	
	/**
	 * customer's data.
	 *
	 * @var CustomerlogFactory
	 */
	protected $_dataObjectHelper;
	
    /**
     * @param CustomerLoginTrackFactory $customerLogintrackFactory
     */
	public function __construct(
			\Magento\Framework\HTTP\PhpEnvironment\RemoteAddressFactory $remoteAddressFactory,
			\Satish\CustomerLoginTrack\Model\CustomerlogFactory $customerLogFactory,
			CustomerlogRepositoryInterface $customerLogRespositroy,
			DataObjectHelper $dataObjectHelper
	 )
    {
    	$this->_remoteAddressFactory = $remoteAddressFactory;
    	$this->_customerLogFactory = $customerLogFactory;
    	$this->_customerLogRespository = $customerLogRespository;
    	$this->_dataObjectHelper = $dataObjectHelper;
    }

    /**
     * Handler for 'customer_login' event.
     *
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
        $customer = $observer->getEvent()->getCustomer();
        $remoteAddressModel = $this->_remoteAddressFactory->create();
        $model = $this->_customerLogFactory->create();
        
        $this->_dataObjectHelper->populateWithArray(
        		$model,
        		$model->getData(),
        		'\Satish\CustomerLoginTrack\Api\Data\CustomerlogInterface'
         );
        $this->_customerLogRespository->save($model);
    }
}
