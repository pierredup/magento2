<?php
/**
 *
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */
namespace Magento\Customer\Api;

/**
 * Interface for managing customer groups.
 */
interface GroupManagementInterface
{
    /**
     * Check if customer group can be deleted.
     *
     * @param int $id
     * @return bool
     * @throws \Magento\Framework\Exception\NoSuchEntityException If group is not found
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function isReadonly($id);

    /**
     * Get default customer group.
     *
     * @param int $storeId
     * @return \Magento\Customer\Api\Data\GroupInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getDefaultGroup($storeId = null);

    /**
     * Get customer group representing customers not logged in.
     *
     * @return \Magento\Customer\Api\Data\GroupInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getNotLoggedInGroup();

    /**
     * Get all customer groups except group representing customers not logged in.
     *
     * @return \Magento\Customer\Api\Data\GroupInterface[]
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getLoggedInGroups();

    /**
     * Get customer group representing all customers.
     *
     * @return \Magento\Customer\Api\Data\GroupInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getAllCustomersGroup();
}
