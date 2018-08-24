<?php

namespace Oro\Bundle\ShoppingListBundle\Manager;

use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\ProductBundle\DependencyInjection\Configuration;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ShoppingListBundle\Entity\LineItem;
use Oro\Bundle\ShoppingListBundle\Entity\ShoppingList;
use Oro\Bundle\ShoppingListBundle\LineItem\Factory\LineItemByShoppingListAndProductFactoryInterface;

class EmptyMatrixGridManager implements EmptyMatrixGridInterface
{
    /**
     * @var DoctrineHelper
     */
    private $doctrineHelper;

    /**
     * @var LineItemByShoppingListAndProductFactoryInterface
     */
    private $lineItemFactory;

    /** @var ConfigManager */
    private $configManager;

    /**
     * @param DoctrineHelper $doctrineHelper
     * @param LineItemByShoppingListAndProductFactoryInterface $lineItemFactory
     * @param ConfigManager $configManager
     */
    public function __construct(
        DoctrineHelper $doctrineHelper,
        LineItemByShoppingListAndProductFactoryInterface $lineItemFactory,
        ConfigManager $configManager
    ) {
        $this->doctrineHelper = $doctrineHelper;
        $this->lineItemFactory = $lineItemFactory;
        $this->configManager = $configManager;
    }

    /**
     * {@inheritdoc}
     */
    public function addEmptyMatrix(ShoppingList $shoppingList, Product $product)
    {
        if ($this->isShoppingListHasProductVariants($shoppingList, $product)) {
            return;
        }

        if ($this->isShoppingListHasConfigurableProduct($shoppingList, $product)) {
            return;
        }

        $this->addConfigurableProductToShoppingList($shoppingList, $product);
    }

    /**
     * @param ShoppingList $shoppingList
     * @param Product $product
     * @return bool
     */
    private function isShoppingListHasProductVariants(ShoppingList $shoppingList, Product $product): bool
    {
        return $this->doctrineHelper->getEntityRepository(LineItem::class)->findOneBy([
            'shoppingList' => $shoppingList,
            'unit' => $product->getPrimaryUnitPrecision()->getUnit(),
            'parentProduct' => $product,
        ]) !== null;
    }

    /**
     * @param ShoppingList $shoppingList
     * @param Product $product
     * @return bool
     */
    private function isShoppingListHasConfigurableProduct(ShoppingList $shoppingList, Product $product): bool
    {
        return $this->doctrineHelper->getEntityRepository(LineItem::class)->findOneBy([
            'shoppingList' => $shoppingList,
            'unit' => $product->getPrimaryUnitPrecision()->getUnit(),
            'product' => $product,
        ]) !== null;
    }

    /**
     * @param ShoppingList $shoppingList
     * @param Product $product
     */
    private function addConfigurableProductToShoppingList(ShoppingList $shoppingList, Product $product)
    {
        $entityManager = $this->doctrineHelper->getEntityManagerForClass(LineItem::class);

        $entityManager->persist($this->lineItemFactory->create($shoppingList, $product));
        $entityManager->flush();
    }

    /**
     * {@inheritdoc}
     */
    public function isAddEmptyMatrixAllowed(array $lineItems): bool
    {
        if ($this->lineItemQuantitiesAreEmpty($lineItems) && $this->isEmptyMatrixConfig()) {
            return true;
        }

        return false;
    }

    /**
     * @param LineItem[] $lineItems
     * @return bool
     */
    private function lineItemQuantitiesAreEmpty(array $lineItems): bool
    {
        foreach ($lineItems as $item) {
            if ($item->getQuantity() > 0) {
                return false;
            }
        }

        return true;
    }

    /**
     * @return bool
     */
    private function isEmptyMatrixConfig(): bool
    {
        return $this->configManager
            ->get(sprintf('%s.%s', Configuration::ROOT_NODE, Configuration::MATRIX_FORM_ALLOW_TO_ADD_EMPTY));
    }

    /**
     * {@inheritdoc}
     */
    public function hasEmptyMatrix(ShoppingList $shoppingList): bool
    {
        foreach ($shoppingList->getLineItems() as $lineItem) {
            if ($lineItem->getProduct()->isConfigurable()) {
                return true;
            }
        }

        return false;
    }
}
