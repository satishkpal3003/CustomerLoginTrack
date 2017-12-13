<?php
namespace Satish\CustomerLoginTrack\Api\Data;

/**
 * Order search result interface.
 *
 * An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product
 * items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as
 * a purchase order, is emailed to the customer.
 * @api
 */
interface CustomerlogSearchResultInterface extends \Magento\Framework\Api\SearchResultsInterface
{
	/**
	 * Get items.
	 *
	 * @return \Satish\CustomerLoginTrack\Api\Data\CustomerlogInterface[] Array of collection items.
	 */
	public function getItems();
	
	/**
	 * Set items.
	 *
	 * @param \Satish\CustomerLoginTrack\Api\Data\CustomerlogInterface[] $items
	 * @return $this
	 */
	public function setItems(array $items = null);
}
