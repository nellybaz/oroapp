<?php

namespace Oro\Bundle\ShoppingListBundle\Tests\Unit\Datagrid\Extension\MassAction;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ManagerRegistry;

use Oro\Bundle\ShoppingListBundle\Tests\Unit\Entity\Stub\ShoppingListStub;
use Oro\Component\Testing\Unit\EntityTrait;
use Oro\Bundle\DataGridBundle\Extension\MassAction\MassActionHandlerArgs;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Entity\Repository\ProductRepository;
use Oro\Bundle\ShoppingListBundle\Datagrid\Extension\MassAction\AddProductsMassAction;
use Oro\Bundle\ShoppingListBundle\Datagrid\Extension\MassAction\AddProductsMassActionHandler;
use Oro\Bundle\ShoppingListBundle\DataProvider\ProductShoppingListsDataProvider;
use Oro\Bundle\ShoppingListBundle\Entity\ShoppingList;
use Oro\Bundle\ShoppingListBundle\Generator\MessageGenerator;
use Oro\Bundle\ShoppingListBundle\Handler\ShoppingListLineItemHandler;

class AddProductsMassActionHandlerTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    const MESSAGE = 'test message';

    /** @var AddProductsMassActionHandler */
    protected $handler;

    /** @var  MassActionHandlerArgs */
    protected $args;

    /** @var \PHPUnit_Framework_MockObject_MockObject|ShoppingListLineItemHandler */
    protected $shoppingListItemHandler;

    /** @var \PHPUnit_Framework_MockObject_MockObject|ManagerRegistry */
    protected $managerRegistry;

    /** @var \PHPUnit_Framework_MockObject_MockObject|ProductShoppingListsDataProvider */
    protected $productShoppingListsDataProvider;

    protected function setUp()
    {
        $this->shoppingListItemHandler = $this->createMock(ShoppingListLineItemHandler::class);
        $this->managerRegistry = $this->createMock(ManagerRegistry::class);
        $this->productShoppingListsDataProvider = $this->createMock(ProductShoppingListsDataProvider::class);

        $this->handler = new AddProductsMassActionHandler(
            $this->shoppingListItemHandler,
            $this->getMessageGenerator(),
            $this->managerRegistry,
            $this->productShoppingListsDataProvider
        );
    }

    public function testHandleMissingShoppingList()
    {
        $args = $this->getMassActionArgs();
        $args->expects($this->any())
            ->method('getData')
            ->willReturn(['shoppingList' => null]);

        $response = $this->handler->handle($args);

        $this->assertFalse($response->isSuccessful());
        $this->assertEquals(0, $response->getOptions()['count']);
        $this->assertEquals([], $response->getOptions()['products']);
    }

    public function testHandleNotAllowed()
    {
        $shoppingList = $this->getEntity(ShoppingList::class, ['id' => 1]);

        $args = $this->getMassActionArgs();
        $args->expects($this->any())
            ->method('getData')
            ->willReturn(['shoppingList' => $shoppingList, 'values' => 3]);

        $response = $this->handler->handle($args);
        $this->assertFalse($response->isSuccessful());
        $this->assertEquals(0, $response->getOptions()['count']);
        $this->assertEquals([], $response->getOptions()['products']);
    }

    public function testHandleException()
    {
        $shoppingList = $this->getEntity(ShoppingList::class, ['id' => 1]);

        $args = $this->getMassActionArgs();
        $args->expects($this->any())
            ->method('getData')
            ->willReturn([
                'shoppingList' => $shoppingList,
                'values' => 3
            ]);

        $this->shoppingListItemHandler->expects($this->once())
            ->method('isAllowed')
            ->willReturn(true);

        $em = $this->createMock(EntityManagerInterface::class);

        $em->expects($this->once())
            ->method('beginTransaction');

        $em->expects($this->never())
            ->method('persist');

        $em->expects($this->once())
            ->method('rollback');

        $this->managerRegistry->expects($this->once())
            ->method('getManagerForClass')
            ->with(ShoppingList::class)
            ->willReturn($em);

        $this->shoppingListItemHandler->expects($this->once())
            ->method('createForShoppingList')
            ->willThrowException(new \Exception());

        $this->expectException(\Exception::class);

        $this->handler->handle($args);
    }

    public function testHandleExistingShoppingList()
    {
        $shoppingList = $this->getEntity(ShoppingList::class, ['id' => 1]);

        $args = $this->getMassActionArgs();
        $args->expects($this->any())
            ->method('getData')
            ->willReturn([
                'shoppingList' => $shoppingList,
                'values' => '23,42,56'
            ]);

        $this->shoppingListItemHandler->expects($this->once())
            ->method('isAllowed')
            ->willReturn(true);

        $this->shoppingListItemHandler->expects($this->once())
            ->method('createForShoppingList')
            ->willReturn(2);

        $em = $this->createMock(EntityManagerInterface::class);

        $em->expects($this->once())
            ->method('beginTransaction');

        $em->expects($this->never())
            ->method('persist');

        $em->expects($this->once())
            ->method('commit');

        $this->managerRegistry->expects($this->once())
            ->method('getManagerForClass')
            ->with(ShoppingList::class)
            ->willReturn($em);

        $productsShoppingLists = $this->expectProductsShoppingLists();

        $response = $this->handler->handle($args);
        $this->assertTrue($response->isSuccessful());
        $this->assertEquals(2, $response->getOptions()['count']);
        $this->assertEquals(self::MESSAGE, $response->getMessage());
        $this->assertEquals($productsShoppingLists, $response->getOptions()['products']);
    }

    public function testHandle()
    {
        $shoppingList = new ShoppingListStub();

        $args = $this->getMassActionArgs();
        $args->expects($this->any())
            ->method('getData')
            ->willReturn([
                'shoppingList' => $shoppingList,
                'values' => '23,42,56'
            ]);

        $this->shoppingListItemHandler->expects($this->once())->method('createForShoppingList')->willReturn(2);

        $this->shoppingListItemHandler->expects($this->once())
            ->method('isAllowed')
            ->willReturn(true);

        $em = $this->createMock(EntityManagerInterface::class);

        $em->expects($this->once())
            ->method('beginTransaction');

        $em->expects($this->once())
            ->method('persist')
            ->with($shoppingList);
        $em->expects($this->once())
            ->method('flush')
            ->willReturnCallback(function () use ($shoppingList) {
                $shoppingList->setId(5);
            });

        $em->expects($this->once())
            ->method('commit');

        $this->managerRegistry->expects($this->once())
            ->method('getManagerForClass')
            ->with(ShoppingList::class)
            ->willReturn($em);

        $productsShoppingLists = $this->expectProductsShoppingLists();

        $response = $this->handler->handle($args);
        $this->assertTrue($response->isSuccessful());
        $this->assertEquals(2, $response->getOptions()['count']);
        $this->assertEquals(self::MESSAGE, $response->getMessage());
        $this->assertEquals($productsShoppingLists, $response->getOptions()['products']);
    }

    public function testHandleWhenAllProductsSelected()
    {
        $shoppingList = $this->getEntity(ShoppingList::class, ['id' => 1]);

        $args = $this->getMassActionArgs();
        $args->expects($this->any())
            ->method('getData')
            ->willReturn(['shoppingList' => $shoppingList]);

        $this->shoppingListItemHandler
            ->expects($this->never())
            ->method('createForShoppingList');

        $response = $this->handler->handle($args);
        $this->assertFalse($response->isSuccessful());
        $this->assertEquals(0, $response->getOptions()['count']);
        $this->assertEquals(self::MESSAGE, $response->getMessage());
        $this->assertEquals([], $response->getOptions()['products']);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|MassActionHandlerArgs
     */
    protected function getMassActionArgs()
    {
        $args = $this->createMock(MassActionHandlerArgs::class);
        $args->expects($this->any())
            ->method('getMassAction')
            ->willReturn(new AddProductsMassAction());

        return $args;
    }

    /**
     * @return MessageGenerator|\PHPUnit_Framework_MockObject_MockObject
     */
    protected function getMessageGenerator()
    {
        $translator = $this->createMock(MessageGenerator::class);
        $translator->expects($this->any())
            ->method('getSuccessMessage')
            ->willReturn(self::MESSAGE);

        return $translator;
    }

    protected function expectProductsShoppingLists()
    {
        $productRepository = $this->createMock(ProductRepository::class);

        $this->managerRegistry->expects($this->once())
            ->method('getRepository')
            ->with(Product::class)
            ->willReturn($productRepository);

        $products = [
            $this->getEntity(Product::class, ['id' => 23]),
            $this->getEntity(Product::class, ['id' => 42]),
            $this->getEntity(Product::class, ['id' => 56]),
        ];
        $productRepository->expects($this->once())
            ->method('getProductsByIds')
            ->with([23, 42, 56])
            ->willReturn($products);

        $shoppingListsByProducts = [
            23 => [
                $this->getEntity(ShoppingList::class, ['id' => 1]),
            ],
            42 => [
                $this->getEntity(ShoppingList::class, ['id' => 1]),
                $this->getEntity(ShoppingList::class, ['id' => 2]),
            ],
            56 => [
                $this->getEntity(ShoppingList::class, ['id' => 2]),
            ],
        ];

        $this->productShoppingListsDataProvider->expects($this->once())
            ->method('getProductsUnitsQuantity')
            ->with($products)
            ->willReturn($shoppingListsByProducts);

        return [
            23 => [
                'id' => 23,
                'shopping_lists' => [
                    $this->getEntity(ShoppingList::class, ['id' => 1]),
                ],
            ],
            42 => [
                'id' => 42,
                'shopping_lists' => [
                    $this->getEntity(ShoppingList::class, ['id' => 1]),
                    $this->getEntity(ShoppingList::class, ['id' => 2]),
                ],
            ],
            56 => [
                'id' => 56,
                'shopping_lists' => [
                    $this->getEntity(ShoppingList::class, ['id' => 2]),
                ],
            ],
        ];
    }
}
