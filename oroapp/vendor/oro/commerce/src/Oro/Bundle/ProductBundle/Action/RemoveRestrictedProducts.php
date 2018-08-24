<?php

namespace Oro\Bundle\ProductBundle\Action;

use Symfony\Component\PropertyAccess\PropertyPathInterface;

use Oro\Component\Action\Exception\InvalidParameterException;
use Oro\Bundle\ProductBundle\Helper\ProductHolderTrait;
use Oro\Bundle\ProductBundle\Entity\Manager\ProductManager;
use Oro\Bundle\ProductBundle\Entity\Repository\ProductRepository;
use Oro\Component\Action\Action\AbstractAction;
use Oro\Component\ConfigExpression\ContextAccessor;

class RemoveRestrictedProducts extends AbstractAction
{
    use ProductHolderTrait;

    const OPTION_KEY_ATTRIBUTE = 'attribute';
    const OPTION_KEY_PRODUCT_HOLDER = 'productHolderPath';

    /** @var array */
    private $options;

    /** @var ProductManager */
    private $productManager;

    /** @var ProductRepository */
    private $productRepository;

    /**
     * @param ProductRepository $productRepository
     * @param ProductManager    $productManager
     * @param ContextAccessor   $contextAccessor
     */
    public function __construct(
        ProductRepository $productRepository,
        ProductManager $productManager,
        ContextAccessor $contextAccessor
    ) {
        $this->productManager = $productManager;
        $this->productRepository = $productRepository;
        parent::__construct($contextAccessor);
    }

    /**
     * {@inheritdoc}
     */
    protected function executeAction($context)
    {
        /** @var array|\Traversable $productHolderIterator */
        $productHolderIterator = $this->contextAccessor->getValue(
            $context,
            $this->options[self::OPTION_KEY_PRODUCT_HOLDER]
        );
        $products = $this->getProductIdsFromProductHolders($productHolderIterator);

        if (count($products) <= 0) {
            return;
        }

        $allowedProductIds = $this->getAllowedProductsIds($products);

        $allowedProductHolders = [];
        $removedProducts = [];
        foreach ($productHolderIterator as $productHolder) {
            if (in_array($productHolder->getProduct()->getId(), $allowedProductIds, true)) {
                $allowedProductHolders[] = $productHolder;
            } else {
                $removedProducts[] = $productHolder->getProduct();
            }
        }

        $this->contextAccessor->setValue(
            $context,
            $this->options[self::OPTION_KEY_PRODUCT_HOLDER],
            $allowedProductHolders
        );

        if (isset($this->options[self::OPTION_KEY_ATTRIBUTE])) {
            $this->contextAccessor->setValue(
                $context,
                $this->options[self::OPTION_KEY_ATTRIBUTE],
                $removedProducts
            );
        }
    }

    /**
     * {@inheritdoc}
     */
    public function initialize(array $options)
    {
        if (!empty($options[self::OPTION_KEY_PRODUCT_HOLDER])) {
            $target = $options[self::OPTION_KEY_PRODUCT_HOLDER];
            if (!is_string($target) && !($target instanceof PropertyPathInterface)) {
                throw new InvalidParameterException('Option \'productHolderPath\' should be string or PropertyPath');
            }

            $this->options[self::OPTION_KEY_PRODUCT_HOLDER] = $options[self::OPTION_KEY_PRODUCT_HOLDER];
        }
        if (!empty($options[self::OPTION_KEY_ATTRIBUTE])) {
            $this->options[self::OPTION_KEY_ATTRIBUTE] = $options[self::OPTION_KEY_ATTRIBUTE];
        }

        return $this;
    }

    /**
     * @param array $products
     * @return array
     */
    private function getAllowedProductsIds(array $products): array
    {
        $queryBuilder = $this->productRepository->getProductsQueryBuilder($products);
        $queryBuilder->select('p.id');
        $this->productManager->restrictQueryBuilder($queryBuilder, []);
        $allowedProductIds = $queryBuilder->getQuery()->getArrayResult();
        $allowedProductIds = array_column($allowedProductIds, 'id');

        return $allowedProductIds;
    }
}
