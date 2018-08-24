<?php

namespace Oro\Bundle\ShoppingListBundle\Tests\Unit\Manager;

use Doctrine\ORM\EntityManager;

use Oro\Bundle\CustomerBundle\Entity\CustomerUser;
use Oro\Bundle\CustomerBundle\Entity\CustomerVisitor;
use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\ShoppingListBundle\Entity\LineItem;
use Oro\Bundle\ShoppingListBundle\Entity\ShoppingList;
use Oro\Bundle\ShoppingListBundle\Manager\GuestShoppingListMigrationManager;
use Oro\Bundle\ShoppingListBundle\Manager\ShoppingListLimitManager;
use Oro\Bundle\ShoppingListBundle\Manager\ShoppingListManager;
use Oro\Bundle\ShoppingListBundle\Tests\Unit\Entity\Stub\CustomerVisitorStub;

class GuestShoppingListMigrationManagerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var DoctrineHelper|\PHPUnit_Framework_MockObject_MockObject
     */
    private $doctrineHelper;

    /**
     * @var ShoppingListLimitManager|\PHPUnit_Framework_MockObject_MockObject
     */
    private $shoppingListLimitManager;

    /**
     * @var ShoppingListManager|\PHPUnit_Framework_MockObject_MockObject
     */
    private $shoppingListManager;

    /**
     * @var GuestShoppingListMigrationManager
     */
    private $migrationManager;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->shoppingListLimitManager = $this->createMock(ShoppingListLimitManager::class);
        $this->shoppingListManager      = $this->createMock(ShoppingListManager::class);
        $this->doctrineHelper           = $this->createMock(DoctrineHelper::class);
        $this->migrationManager = new GuestShoppingListMigrationManager(
            $this->doctrineHelper,
            $this->shoppingListLimitManager,
            $this->shoppingListManager
        );
    }

    public function testMigrateGuestShoppingListWithCreateEnabled()
    {
        $this->shoppingListLimitManager
            ->expects($this->once())
            ->method('isCreateEnabled')
            ->willReturn(true);

        $customerUser = new CustomerUser();
        $shoppingList = new ShoppingList();
        $shoppingList->addLineItem(new LineItem());
        $shoppingList->addLineItem(new LineItem());
        $visitor = new CustomerVisitorStub();
        $visitor->addShoppingList($shoppingList);

        $customerVisitorEntityManager = $this->createMock(EntityManager::class);
        $customerVisitorEntityManager->expects($this->once())
            ->method('flush');
        $shoppingListEntityManager = $this->createMock(EntityManager::class);
        $shoppingListEntityManager->expects($this->once())
            ->method('flush');
        $this->doctrineHelper->expects($this->exactly(2))
            ->method('getEntityManagerForClass')
            ->will($this->returnValueMap([
                 [CustomerVisitor::class, true, $customerVisitorEntityManager],
                 [ShoppingList::class, true, $shoppingListEntityManager]
             ]));

        $this->shoppingListManager
            ->expects($this->once())
            ->method('setCurrent')
            ->with($customerUser, $shoppingList)
            ->willReturn(true);

        $this->migrationManager->migrateGuestShoppingList($visitor, $customerUser, $shoppingList);
    }

    public function testMigrateGuestShoppingListWithCreateDisabled()
    {
        $this->shoppingListLimitManager
            ->expects($this->once())
            ->method('isCreateEnabled')
            ->willReturn(false);
        $shoppingList = new ShoppingList();
        $shoppingListEntityManager = $this->createMock(EntityManager::class);
        $shoppingListEntityManager->expects($this->once())
            ->method('remove')
            ->with($shoppingList);
        $shoppingListEntityManager->expects($this->once())
            ->method('flush');
        $this->doctrineHelper->expects($this->once())
            ->method('getEntityManagerForClass')
            ->with(ShoppingList::class)
            ->willReturn($shoppingListEntityManager);
        $customerUserShoppingList = new ShoppingList();
        $this->shoppingListManager->expects($this->once())
            ->method('getCurrent')
            ->willReturn($customerUserShoppingList);
        $this->shoppingListManager->expects($this->once())
            ->method('bulkAddLineItems')
            ->with([], $customerUserShoppingList, GuestShoppingListMigrationManager::FLUSH_BATCH_SIZE);

        $this->migrationManager->migrateGuestShoppingList(new CustomerVisitor(), new CustomerUser(), $shoppingList);
    }

    public function testMoveShoppingListToCustomerUser()
    {
        $customerUser = new CustomerUser();
        $shoppingList = new ShoppingList();
        $shoppingList->setCustomerUser($customerUser);

        $this->shoppingListManager->expects($this->never())
            ->method('bulkAddLineItems');

        $this->migrationManager->moveShoppingListToCustomerUser(new CustomerVisitor(), $customerUser, $shoppingList);
    }
}
