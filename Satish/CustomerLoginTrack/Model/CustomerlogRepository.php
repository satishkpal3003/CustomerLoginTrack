<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Catalog\Model;

use Magento\Framework\Exception\InputException;
use Magento\Framework\Exception\CouldNotSaveException;
use Satish\CustomerLoginTrack\Api\Data\CustomerlogInterface;
use Satish\CustomerLoginTrack\Api\Data\CustomerlogSearchResultInterface;
use Satish\CustomerLoginTrack\Model\Customerlog;
use Satish\CustomerLoginTrack\Api\CustomerlogRepositoryInterface;

class CustomerlogRepository implements CustomerlogRepositoryInterface
{

	/*
	 * @var  \Satish\CustomerLoginTrack\Model\ResourceModel\Customerlog
	 */
	private $_resourceModel;
	
	/*
	 * @var   DataObjectFactory
	 */
	
	private $_dataObjectFactory;
	
	
	/*
	 * @var CustomerlogSearchResultInterfaceFactory
	 */
	
	private $_customerSearchResult;
	
	/*
	 * @var EntityManager
	 */
	
	private $_entityManager;
	
	/*
	 * @var MetadataPool
	 */
	
	private $_metadataPool;
	
    /**
     * @param \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository
     * @param \Magento\Catalog\Api\ProductRepositoryInterface $productRepository
     */
    public function __construct(
        \Satish\CustomerLoginTrack\Model\ResourceModel\Customerlog $resourceModel,
        DataObjectFactory $dataObjectFactory,
    	CustomerlogSearchResultInterfaceFactory $logSearchFactory,
        EntityManager $entityManager,
   		MetadataPool $metadataPool,
   		$connectionName = null

    ) {
    	$this->_resourceModel = $metadataPool;
    	$this->_dataObjectFactory = $dataObjectFactory;
    	$this->_entityManager = $entityManager;
    	$this->_metadataPool =  $metadataPool;
    	$this->_customerSearchResult = $logSearchFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function save(CustomerlogInterface $customerLog)
    {
    	try {
    		$this->_resourceModel->save($page);
    	} catch (\Exception $exception) {
    		throw new CouldNotSaveException(__(
    				'Could not save the page: %1',
    				$exception->getMessage()
    				));
    	}
    	return $customerLog;
    }

    /**
     * @todo
     * {@inheritdoc}
     */
    public function delete(CustomerlogInterface $customerLog)
    {
       return false;
    }
    
    /**
     * @todo 
     * Loads a specified order.
     *
     * @param int $id The order ID.
     * @return \Satish\CustomerLoginTrack\Api\Data\CustomerlogInterface  interface.
     */
    public function getList(\Magento\Framework\Api\SearchCriteria $searchCriteria){
    	
    }
    
    /**
     * @todo
     * Loads a specified order.
     *
     * @param int $id The order ID.
     * @return \Satish\CustomerLoginTrack\Api\Data\CustomerlogInterface  interface.
     */
    public function get($id){
    	
    }
    

   
}
