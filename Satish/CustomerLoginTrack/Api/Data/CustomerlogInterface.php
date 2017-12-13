<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Satish\CustomerLoginTrack\Api\Data;

/**
 * Customer interface.
 * @api
 */
interface CustomerlogInterface extends \Magento\Framework\Api\CustomAttributesDataInterface
{
    /**#@+
     * Constants defined for keys of the data array. Identical to the name of the getter in snake case
     */
    const ID = 'id';
    const IP = 'ip';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    
    /**#@-*/

    /**
     * Get customer id
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set customer id
     *
     * @param int $id
     * @return $this
     */
    public function setId($id);
    
    
    /**#@-*/
    
    /**
     * Get customer id
     *
     * @return int|null
     */
    public function getIp();
    
    /**
     * Set customer id
     *
     * @param int $id
     * @return $this
     */
    public function setIp($ip);

 
    /**
     * Get created at time
     *
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set created at time
     *
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt);

    /**
     * Get updated at time
     *
     * @return string|null
     */
    public function getUpdatedAt();

    /**
     * Set updated at time
     *
     * @param string $updatedAt
     * @return $this
     */
    public function setUpdatedAt($updatedAt);

}
