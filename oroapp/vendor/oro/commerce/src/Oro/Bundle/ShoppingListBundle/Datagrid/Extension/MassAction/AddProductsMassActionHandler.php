<?php

namespace Oro\Bundle\ShoppingListBundle\Datagrid\Extension\MassAction;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

use Oro\Bundle\DataGridBundle\Extension\MassAction\MassActionHandlerArgs;
use Oro\Bundle\DataGridBundle\Extension\MassAction\MassActionHandlerInterface;
use Oro\Bundle\DataGridBundle\Extension\MassAction\MassActionResponse;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ShoppingListBundle\DataProvider\ProductShoppingListsDataProvider;
use Oro\Bundle\ShoppingListBundle\Generator\MessageGenerator;
use Oro\Bundle\ShoppingListBundle\Entity\ShoppingList;
use Oro\Bundle\ShoppingListBundle\Handler\ShoppingListLineItemHandler;

class AddProductsMassActionHandler implements MassActionHandlerInterface
{
    /** @var MessageGenerator */
    protected $messageGenerator;

    /**  @var ShoppingListLineItemHandler */
    protected $shoppingListLineItemHandler;

    /** @var ManagerRegistry */
    protected $managerRegistry;

    /** @var ProductShoppingListsDataProvider */
    protected $productShoppingListsDataProvider;

    /**
     * @param ShoppingListLineItemHandler $shoppingListLineItemHandler
     * @param MessageGenerator $messageGenerator
     * @param ManagerRegistry $managerRegistry
     * @param ProductShoppingListsDataProvider $productShoppingListsDataProvider
     */
    public function __construct(
        ShoppingListLineItemHandler $shoppingListLineItemHandler,
        MessageGenerator $messageGenerator,
        ManagerRegistry $managerRegistry,
        ProductShoppingListsDataProvider $productShoppingListsDataProvider
    ) {
        $this->shoppingListLineItemHandler = $shoppingListLineItemHandler;
        $this->messageGenerator = $messageGenerator;
        $this->managerRegistry = $managerRegistry;
        $this->productShoppingListsDataProvider = $productShoppingListsDataProvider;
    }

    /**
     * {@inheritdoc}
     */
    public function handle(MassActionHandlerArgs $args)
    {
        $argsParser = new AddProductsMassActionArgsParser($args);
        $shoppingList = $argsParser->getShoppingList();
        $productIds = $argsParser->getProductIds();

        if (!$this->isAllowed($shoppingList, $productIds)) {
            return $this->generateResponse($args);
        }

        /** @var EntityManagerInterface $em */
        $em = $this->managerRegistry->getManagerForClass(ShoppingList::class);
        $em->beginTransaction();

        try {
            if (!$shoppingList->getId()) {
                $em->persist($shoppingList);
                $em->flush();
            }

            $addedCnt = $this->shoppingListLineItemHandler->createForShoppingList(
                $shoppingList,
                $productIds,
                $argsParser->getUnitsAndQuantities()
            );

            $em->commit();

            return $this->generateResponse(
                $args,
                $addedCnt,
                $shoppingList->getId(),
                $this->getProductsShoppingLists($productIds)
            );
        } catch (\Exception $e) {
            $em->rollback();
            throw $e;
        }
    }

    /**
     * @param MassActionHandlerArgs $args
     * @param int $entitiesCount
     * @param int|null $shoppingListId
     * @param array $productsShoppingLists
     *
     * @return MassActionResponse
     */
    protected function generateResponse(
        MassActionHandlerArgs $args,
        $entitiesCount = 0,
        $shoppingListId = null,
        array $productsShoppingLists = []
    ) {
        $transChoiceKey = $args->getMassAction()->getOptions()->offsetGetByPath(
            '[messages][success]',
            'oro.shoppinglist.actions.add_success_message'
        );

        return new MassActionResponse(
            $entitiesCount > 0 && $shoppingListId,
            $this->messageGenerator->getSuccessMessage($shoppingListId, $entitiesCount, $transChoiceKey),
            [
                'count' => $entitiesCount,
                'products' => $productsShoppingLists,
            ]
        );
    }

    /**
     * @param ShoppingList|null $shoppingList
     * @param array $productIds
     * @return bool
     */
    private function isAllowed($shoppingList, array $productIds): bool
    {
        return $shoppingList && $productIds && $this->shoppingListLineItemHandler->isAllowed();
    }

    /**
     * @param array $productIds
     * @return array
     */
    protected function getProductsShoppingLists(array $productIds)
    {
        $products = $this->managerRegistry->getRepository(Product::class)->getProductsByIds($productIds);

        $shoppingListsByProducts = $this->productShoppingListsDataProvider->getProductsUnitsQuantity($products);
        $productsShoppingLists = [];

        foreach ($shoppingListsByProducts as $productId => $shoppingLists) {
            $productsShoppingLists[$productId] = [
                'id' => $productId,
                'shopping_lists' => $shoppingLists,
            ];
        }

        return $productsShoppingLists;
    }
}
