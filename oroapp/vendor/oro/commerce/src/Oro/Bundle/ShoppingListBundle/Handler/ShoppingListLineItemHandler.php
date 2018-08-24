<?php

namespace Oro\Bundle\ShoppingListBundle\Handler;

use Doctrine\Common\Persistence\ManagerRegistry;

use Symfony\Component\Form\Form;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Oro\Bundle\CustomerBundle\Entity\CustomerUser;
use Oro\Bundle\CustomerBundle\Security\Token\AnonymousCustomerUserToken;
use Oro\Bundle\FeatureToggleBundle\Checker\FeatureChecker;
use Oro\Bundle\ProductBundle\Entity\Manager\ProductManager;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Entity\Repository\ProductRepository;
use Oro\Bundle\SecurityBundle\Authentication\TokenAccessorInterface;
use Oro\Bundle\ShoppingListBundle\Entity\LineItem;
use Oro\Bundle\ShoppingListBundle\Entity\ShoppingList;
use Oro\Bundle\ShoppingListBundle\Manager\ShoppingListManager;

class ShoppingListLineItemHandler
{
    const FLUSH_BATCH_SIZE = 100;

    /** @var ManagerRegistry */
    protected $managerRegistry;

    /** @var ShoppingListManager */
    protected $shoppingListManager;

    /** @var AuthorizationCheckerInterface */
    protected $authorizationChecker;

    /** @var TokenAccessorInterface */
    protected $tokenAccessor;

    /** @var string */
    protected $productClass;

    /** @var string */
    protected $shoppingListClass;

    /** @var string */
    protected $productUnitClass;

    /** @var ProductManager */
    protected $productManager;

    /**
     * @param ManagerRegistry $managerRegistry
     * @param ShoppingListManager $shoppingListManager
     * @param AuthorizationCheckerInterface $authorizationChecker
     * @param TokenAccessorInterface $tokenAccessor
     * @param FeatureChecker $featureChecker
     * @param ProductManager $productManager
     */
    public function __construct(
        ManagerRegistry $managerRegistry,
        ShoppingListManager $shoppingListManager,
        AuthorizationCheckerInterface $authorizationChecker,
        TokenAccessorInterface $tokenAccessor,
        FeatureChecker $featureChecker,
        ProductManager $productManager
    ) {
        $this->managerRegistry = $managerRegistry;
        $this->shoppingListManager = $shoppingListManager;
        $this->authorizationChecker = $authorizationChecker;
        $this->tokenAccessor = $tokenAccessor;
        $this->featureChecker = $featureChecker;
        $this->productManager = $productManager;
    }

    /**
     * @param ShoppingList $shoppingList
     * @param array $productIds
     * @param array $productUnitsWithQuantities
     * @return int Added entities count
     */
    public function createForShoppingList(
        ShoppingList $shoppingList,
        array $productIds = [],
        array $productUnitsWithQuantities = []
    ) {
        if (!$this->isAllowed($shoppingList)) {
            throw new AccessDeniedException();
        }

        /** @var ProductRepository $productsRepo */
        $productsRepo = $this->managerRegistry->getManagerForClass($this->productClass)
            ->getRepository($this->productClass);

        $queryBuilder = $productsRepo->getProductsQueryBuilder($productIds);
        $queryBuilder = $this->productManager->restrictQueryBuilder($queryBuilder, []);
        $iterableResult = $queryBuilder->getQuery()->iterate();
        $lineItems = [];

        $skus = array_map('strtoupper', array_keys($productUnitsWithQuantities));
        $values = array_values($productUnitsWithQuantities);
        $productUnitsWithQuantities = array_combine($skus, $values);

        foreach ($iterableResult as $entityArray) {
            /** @var Product $product */
            $product = reset($entityArray);
            $upperSku = strtoupper($product->getSku());
            if (isset($productUnitsWithQuantities[$upperSku])) {
                $productLineItems = $this->createLineItemsWithQuantityAndUnit(
                    $product,
                    $shoppingList,
                    $productUnitsWithQuantities[$upperSku]
                );

                if ($productLineItems) {
                    $lineItems = array_merge($lineItems, $productLineItems);
                }

                continue;
            }

            $lineItem = (new LineItem())
                ->setCustomerUser($shoppingList->getCustomerUser())
                ->setOrganization($shoppingList->getOrganization())
                ->setProduct($product)
                ->setUnit($product->getPrimaryUnitPrecision()->getUnit());

            $lineItems[] = $lineItem;
        }

        return $this->shoppingListManager->bulkAddLineItems($lineItems, $shoppingList, self::FLUSH_BATCH_SIZE);
    }

    /**
     * @param Product $product
     * @param ShoppingList $shoppingList
     * @param array $unitsWithQuantities
     * @return LineItem[]|null
     */
    protected function createLineItemsWithQuantityAndUnit(
        Product $product,
        ShoppingList $shoppingList,
        array $unitsWithQuantities
    ) {
        $lineItems = [];

        $productUnitRepo = $this->managerRegistry->getManagerForClass($this->productUnitClass)
            ->getRepository($this->productUnitClass);

        foreach ($unitsWithQuantities as $unit => $quantity) {
            $unitEntity = $productUnitRepo->findOneBy(['code' => $unit]);

            if ($unitEntity !== null) {
                $lineItem = (new LineItem())
                    ->setCustomerUser($shoppingList->getCustomerUser())
                    ->setOrganization($shoppingList->getOrganization())
                    ->setQuantity($quantity)
                    ->setProduct($product);

                $lineItem->setUnit($unitEntity);
                $lineItems[] = $lineItem;
            }
        }

        return $lineItems;
    }

    /**
     * @param CustomerUser $customerUser
     * @param Product $product
     * @return LineItem
     */
    public function prepareLineItemWithProduct(CustomerUser $customerUser, Product $product)
    {
        $shoppingList = $this->shoppingListManager->getCurrent();

        $lineItem = new LineItem();
        $lineItem
            ->setProduct($product)
            ->setCustomerUser($customerUser);

        if (null !== $shoppingList) {
            $lineItem->setShoppingList($shoppingList);
        }

        return $lineItem;
    }

    /**
     * @param LineItem $lineItem
     * @param Form $form
     */
    public function processLineItem(LineItem $lineItem, Form $form)
    {
        $shoppingList = $form->get('lineItem')->get('shoppingList')->getData();

        if (!$shoppingList) {
            /* @var $form Form */
            $name = $form->get('lineItem')->get('shoppingListLabel')->getData();

            $shoppingList = $this->shoppingListManager->createCurrent($name);
        }

        $lineItem->setShoppingList($shoppingList);

        $this->shoppingListManager->addLineItem($lineItem, $shoppingList);
    }

    /**
     * @param ShoppingList|null $shoppingList
     * @return bool
     */
    public function isAllowed(ShoppingList $shoppingList = null)
    {
        if (!$this->tokenAccessor->hasUser() && !$this->isAllowedForGuest()) {
            return false;
        }

        $isAllowed = $this->authorizationChecker->isGranted('oro_shopping_list_frontend_update');

        if (!$shoppingList) {
            return $isAllowed;
        }

        return $isAllowed && $this->authorizationChecker->isGranted('EDIT', $shoppingList);
    }

    /**
     * @param mixed $shoppingListId
     * @return ShoppingList
     */
    public function getShoppingList($shoppingListId = null)
    {
        return $this->shoppingListManager->getForCurrentUser($shoppingListId);
    }

    /**
     * @param string $productClass
     */
    public function setProductClass($productClass)
    {
        $this->productClass = $productClass;
    }

    /**
     * @param string $shoppingListClass
     */
    public function setShoppingListClass($shoppingListClass)
    {
        $this->shoppingListClass = $shoppingListClass;
    }

    /**
     * @param string $productUnitClass
     */
    public function setProductUnitClass($productUnitClass)
    {
        $this->productUnitClass = $productUnitClass;
    }

    /**
     * @return bool
     */
    public function isAllowedForGuest()
    {
        $isAllowed = false;

        if ($this->tokenAccessor->getToken() instanceof AnonymousCustomerUserToken) {
            $isAllowed = $this->featureChecker->isFeatureEnabled('guest_shopping_list');
        }

        return $isAllowed;
    }
}
