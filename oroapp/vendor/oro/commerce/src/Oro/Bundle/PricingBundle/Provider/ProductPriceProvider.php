<?php

namespace Oro\Bundle\PricingBundle\Provider;

use Doctrine\Common\Persistence\ManagerRegistry;
use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\PricingBundle\Entity\BasePriceList;
use Oro\Bundle\PricingBundle\Entity\Repository\ProductPriceRepository;
use Oro\Bundle\PricingBundle\Model\ProductPriceCriteria;
use Oro\Bundle\PricingBundle\Sharding\ShardManager;

class ProductPriceProvider
{
    /**
     * @var ShardManager
     */
    protected $shardManager;

    /**
     * @var ManagerRegistry
     */
    protected $registry;

    /**
     * @var string
     */
    protected $className;

    /**
     * @param ManagerRegistry $registry
     * @param ShardManager $shardManager
     */
    public function __construct(ManagerRegistry $registry, ShardManager $shardManager)
    {
        $this->registry = $registry;
        $this->shardManager = $shardManager;
    }

    /**
     * @param int $priceListId
     * @param array $productIds
     * @param string|null $currency
     * @return array
     */
    public function getPriceByPriceListIdAndProductIds($priceListId, array $productIds, $currency = null)
    {
        $result = [];
        $prices = $this->getRepository()->findByPriceListIdAndProductIds(
            $this->shardManager,
            $priceListId,
            $productIds,
            true,
            $currency
        );

        if ($prices) {
            foreach ($prices as $price) {
                $result[$price->getProduct()->getId()][] = [
                    'price' => $price->getPrice()->getValue(),
                    'currency' => $price->getPrice()->getCurrency(),
                    'quantity' => $price->getQuantity(),
                    'unit' => $price->getUnit()->getCode(),
                ];
            }
        }

        return $result;
    }

    /**
     * @param ProductPriceCriteria[] $productsPriceCriteria
     * @param BasePriceList $priceList
     * @return array|Price[]
     */
    public function getMatchedPrices(array $productsPriceCriteria, BasePriceList $priceList)
    {
        $productIds = [];
        $productUnitCodes = [];

        foreach ($productsPriceCriteria as $productPriceCriteria) {
            $productIds[] = $productPriceCriteria->getProduct()->getId();
            $productUnitCodes[] = $productPriceCriteria->getProductUnit()->getCode();
        }

        $prices = $this->getRepository()->getPricesBatch(
            $this->shardManager,
            $priceList->getId(),
            $productIds,
            $productUnitCodes,
            []
        );

        $result = [];

        foreach ($productsPriceCriteria as $productPriceCriteria) {
            $id = $productPriceCriteria->getProduct()->getId();
            $code = $productPriceCriteria->getProductUnit()->getCode();
            $quantity = $productPriceCriteria->getQuantity();
            $currency = $productPriceCriteria->getCurrency();
            $precision = $productPriceCriteria->getProductUnit()->getDefaultPrecision();

            $productPrices = array_filter(
                $prices,
                function (array $price) use ($id, $code, $currency) {
                    return (int)$price['id'] === $id && $price['code'] === $code && $price['currency'] === $currency;
                }
            );

            list($price, $matchedQuantity) = $this->matchPriceByQuantity($productPrices, $quantity);
            if ($price !== null) {
                $result[$productPriceCriteria->getIdentifier()] = Price::create(
                    $this->recalculatePricePerUnit($price, $matchedQuantity, $precision),
                    $currency
                );
            } else {
                $result[$productPriceCriteria->getIdentifier()] = null;
            }
        }

        return $result;
    }

    /**
     * @param float $price
     * @param float $quantityPerAmount
     * @param int $precision
     * @return float
     */
    protected function recalculatePricePerUnit($price, $quantityPerAmount, $precision)
    {
        return $precision > 0 ?
            $price / $quantityPerAmount :
            $price;
    }

    /**
     * @param array $prices
     * @param float $expectedQuantity
     * @return array
     */
    protected function matchPriceByQuantity(array $prices, $expectedQuantity)
    {
        $price = null;
        $matchedQuantity = null;
        foreach ($prices as $productPrice) {
            $quantity = (float)$productPrice['quantity'];

            if ($expectedQuantity >= $quantity) {
                $price = (float)$productPrice['value'];
                $matchedQuantity = $quantity;
            }
        }

        return [$price, $matchedQuantity];
    }

    /**
     * @return ProductPriceRepository
     */
    protected function getRepository()
    {
        return $this->registry->getManagerForClass($this->className)->getRepository($this->className);
    }

    /**
     * @param string $className
     */
    public function setClassName($className)
    {
        $this->className = $className;
    }
}
