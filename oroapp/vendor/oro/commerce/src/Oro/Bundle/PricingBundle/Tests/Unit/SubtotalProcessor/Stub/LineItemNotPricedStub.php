<?php

namespace Oro\Bundle\PricingBundle\Tests\Unit\SubtotalProcessor\Stub;

use Oro\Bundle\ProductBundle\Model\QuantityAwareInterface;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;
use Oro\Bundle\ProductBundle\Model\ProductHolderInterface;
use Oro\Bundle\ProductBundle\Model\ProductUnitHolderInterface;

class LineItemNotPricedStub implements
    ProductUnitHolderInterface,
    ProductHolderInterface,
    QuantityAwareInterface
{
    /**
     * @var float
     */
    protected $quantity;

    /**
     * @var Product
     */
    protected $product;

    /**
     * @var ProductUnit
     */
    protected $unit;

    /**
     * @param float $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * {@inheritdoc}
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param Product $product
     *
     * @return $this
     */
    public function setProduct(Product $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getProductSku()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityIdentifier()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getProductHolder()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getProductUnit()
    {
        return $this->unit;
    }

    public function setProductUnit($unit)
    {
        $this->unit = $unit;
    }

    /**
     * {@inheritdoc}
     */
    public function getProductUnitCode()
    {
    }
}
