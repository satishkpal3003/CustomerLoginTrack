<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Satish\CustomerLoginTrack\Controller\Adminhtml\Grid;


/**
 * Class Index
 *
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.NumberOfChildren)
 */
class Index extends \Magento\Backend\App\Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Satish_CustomerLoginTrack::Report_Login';

    public function __construct(
    		\Magento\Framework\App\Action\Context $context,
    		\Magento\Framework\View\Result\PageFactory $resultPageFactory
    		)
    {
    	$this->resultPageFactory = $resultPageFactory;
    	parent::__construct($context);
    }
    
    /**
     * Execute view action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
    	$resultPage = $this->resultPageFactory->create();
    	$resultPage->setActiveMenu('Satish_CustomerLoginTrack::Report_Login');
    	$resultPage->getConfig()->getTitle()->prepend(__('Grid List'));
    	
    	return $resultPage;
    }
    
    /**
     * Check Grid List Permission.
     *
     * @return bool
     */
    protected function _isAllowed()
    {
    	return true;
    }
}
