<?php

namespace Oro\Bundle\PricingBundle\Model;

use Doctrine\Common\Persistence\ManagerRegistry;
use Oro\Bundle\PricingBundle\Entity\PriceList;
use Oro\Bundle\PricingBundle\Model\DTO\PriceListProductsTrigger;
use Oro\Bundle\PricingBundle\Model\DTO\PriceListTrigger;
use Oro\Bundle\PricingBundle\Model\Exception\InvalidArgumentException;
use Oro\Bundle\ProductBundle\Entity\Product;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PriceListTriggerFactory
{
    const PRICE_LIST = 'priceList';
    const PRODUCT = 'product';

    /**
     * @var ManagerRegistry
     */
    protected $registry;

    /**
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        $this->registry = $registry;
    }

    /**
     * @param PriceList $priceList
     * @param array|int[] $productIds
     * @return PriceListTrigger
     */
    public function create(PriceList $priceList, array $productIds = [])
    {
        return new PriceListTrigger($priceList, $productIds);
    }

    /**
     * @param array|int[] $productIds
     * @return PriceListTrigger
     */
    public function createWithoutPriceList(array $productIds = [])
    {
        return new PriceListProductsTrigger($productIds);
    }

    /**
     * @param int $priceListId
     * @param array|int[] $productIds
     * @return array
     */
    public function createFromIds($priceListId, array $productIds)
    {
        if (!$priceListId) {
            return [self::PRODUCT => array_map([$this, 'getProductIds'], $productIds)];
        }

        return [
            self::PRICE_LIST => $priceListId,
            self::PRODUCT => $this->getProductIds($productIds)
        ];
    }

    /**
     * @param PriceListTrigger $trigger
     * @return array
     */
    public function triggerToArray(PriceListTrigger $trigger)
    {
        $priceList = $trigger->getPriceList();
        $products = $trigger->getProducts();

        return $this->createFromIds(
            $priceList ? $priceList->getId() : null,
            $priceList ? $products[$priceList->getId()] : $products
        );
    }

    /**
     * @param array|null $data
     * @return PriceListTrigger
     */
    public function createFromArray($data)
    {
        if (!is_array($data)) {
            throw new InvalidArgumentException('Message should not be empty.');
        }

        $resolver = $this->getOptionResolver();
        $data = $resolver->resolve($data);

        $priceList = $this->getPriceList($data);

        return $priceList
            ? $this->create($priceList, $this->getProducts($data))
            : $this->createWithoutPriceList(array_map([$this, 'getProductIds'], $data[self::PRODUCT]));
    }

    /**
     * @return OptionsResolver
     */
    private function getOptionResolver()
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired(
            [
                self::PRODUCT
            ]
        );
        $resolver->setDefined(self::PRICE_LIST);
        $resolver->setAllowedTypes(self::PRODUCT, ['integer', 'array']);
        $resolver->setAllowedTypes(self::PRICE_LIST, ['null', 'integer', 'array']);

        return $resolver;
    }

    /**
     * @param array $data
     * @return null|PriceList
     */
    protected function getPriceList(array $data)
    {
        if (empty($data[self::PRICE_LIST])) {
            return null;
        }

        return $this->registry
            ->getManagerForClass(PriceList::class)
            ->find(PriceList::class, $data[self::PRICE_LIST]);
    }

    /**
     * @param array $data
     * @return array|int[]
     */
    protected function getProducts(array $data)
    {
        return $this->getProductIds($data[self::PRODUCT] ?? []);
    }

    /**
     * @param array $products
     * @return array|int[]
     */
    private function getProductIds(array $products)
    {
        return array_map(
            function ($product) {
                return $product instanceof Product ? $product->getId() : $product;
            },
            $products
        );
    }
}
