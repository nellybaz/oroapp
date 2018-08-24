<?php

namespace Oro\Bundle\ShoppingListBundle\Manager;

use Oro\Bundle\CustomerBundle\Entity\CustomerUser;
use Oro\Bundle\CustomerBundle\Entity\CustomerVisitor;
use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\ShoppingListBundle\Entity\ShoppingList;

class GuestShoppingListMigrationManager
{
    const FLUSH_BATCH_SIZE = 100;

    /** @var DoctrineHelper */
    private $doctrineHelper;

    /** @var ShoppingListLimitManager */
    private $shoppingListLimitManager;

    /** @var ShoppingListManager */
    private $shoppingListManager;

    /**
     * GuestShoppingListMigrationManager constructor
     *
     * @param DoctrineHelper           $doctrineHelper
     * @param ShoppingListLimitManager $shoppingListLimitManager
     * @param ShoppingListManager      $shoppingListManager
     */
    public function __construct(
        DoctrineHelper $doctrineHelper,
        ShoppingListLimitManager $shoppingListLimitManager,
        ShoppingListManager $shoppingListManager
    ) {
        $this->doctrineHelper           = $doctrineHelper;
        $this->shoppingListLimitManager = $shoppingListLimitManager;
        $this->shoppingListManager      = $shoppingListManager;
    }

    /**
     * Migrate guest-created shopping list to customer user
     *
     * @param CustomerVisitor $visitor
     * @param CustomerUser    $customerUser
     * @param ShoppingList    $shoppingList
     */
    public function migrateGuestShoppingList(
        CustomerVisitor $visitor,
        CustomerUser $customerUser,
        ShoppingList $shoppingList
    ) {
        if ($this->shoppingListLimitManager->isCreateEnabled()) {
            $this->moveShoppingListToCustomerUser($visitor, $customerUser, $shoppingList);
        } else {
            $this->mergeShoppingListWithCurrent($shoppingList);
        }
    }

    /**
     * Move shopping list from customer visitor to customer user and make new list current
     *
     * @param CustomerVisitor $visitor
     * @param CustomerUser    $customerUser
     * @param ShoppingList    $shoppingList
     */
    public function moveShoppingListToCustomerUser(
        CustomerVisitor $visitor,
        CustomerUser $customerUser,
        ShoppingList $shoppingList
    ) {
        if ($customerUser == $shoppingList->getCustomerUser()) {
            return;
        }
        $visitor->removeShoppingList($shoppingList);
        $this->doctrineHelper->getEntityManagerForClass(CustomerVisitor::class)->flush();
        $lineItems = clone $shoppingList->getLineItems();
        foreach ($lineItems as $lineItem) {
            $lineItem->setCustomerUser($customerUser);
        }
        $shoppingList->setCustomerUser($customerUser);
        $this->shoppingListManager->setCurrent($customerUser, $shoppingList);
        $this->doctrineHelper->getEntityManagerForClass(ShoppingList::class)->flush();
    }

    /**
     * Merge visitor shopping list with default customer user shopping list
     *
     * @param ShoppingList $shoppingList
     */
    public function mergeShoppingListWithCurrent(ShoppingList $shoppingList)
    {
        $customerUserShoppingList = $this->shoppingListManager->getCurrent();
        $lineItems = clone $shoppingList->getLineItems();
        $shoppingListEntityManager = $this->doctrineHelper->getEntityManagerForClass(ShoppingList::class);
        $shoppingListEntityManager->remove($shoppingList);
        $shoppingListEntityManager->flush();
        $this->shoppingListManager
            ->bulkAddLineItems($lineItems->toArray(), $customerUserShoppingList, self::FLUSH_BATCH_SIZE);
    }
}
