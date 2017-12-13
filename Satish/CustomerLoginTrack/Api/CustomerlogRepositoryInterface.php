<?php

namespace Satish\CustomerLoginTrack\Api;
use Satish\CustomerLoginTrack\Api\Data\CustomerlogInterface;

interface CustomerlogRepositoryInterface
{
	/**
	 * Lists orders that match specified search criteria.
	 *
	 * This call returns an array of objects, but detailed information about each object’s attributes might not be
	 * included. See http://devdocs.magento.com/codelinks/attributes.html#OrderRepositoryInterface to
	 * determine which call to use to get detailed information about all attributes for an object.
	 *
	 * @param \Magento\Framework\Api\SearchCriteria $searchCriteria The search criteria.
	 * @return  \Satish\CustomerLoginTrack\Api\Data\CustomerlogSearchResultInterface Order search result interface.
	 */
	public function getList(\Magento\Framework\Api\SearchCriteria $searchCriteria);
	
	/**
	 * Loads a specified order.
	 *
	 * @param int $id The order ID.
	 * @return \Satish\CustomerLoginTrack\Api\Data\CustomerlogInterface  interface.
	 */
	public function get($id);
	
	/**
	 * Deletes a specified order.
	 *
	 * @param \Satish\CustomerLoginTrack\Api\Data\CustomerlogInterface $entity 
	 * @return bool
	 */
	public function delete(CustomerlogInterface $entity);
	
	/**
	 * Performs persist operations for a specified order.
	 *
	 * @param \Satish\CustomerLoginTrack\Api\Data\CustomerlogInterface $entity 
	 * @return \Satish\CustomerLoginTrack\Api\Data\CustomerlogInterface Entity interface.
	 */
	public function save(CustomerlogInterface $entity);
}