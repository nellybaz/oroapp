<?php

namespace Oro\Bundle\SaleBundle\Model;

use Doctrine\ORM\Mapping as ORM;

use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;
use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;
use Oro\Bundle\ProductBundle\Model\ProductHolderInterface;
use Oro\Bundle\ProductBundle\Model\ProductUnitHolderInterface;
use Oro\Bundle\SaleBundle\Entity\QuoteProduct;

/**
 * BaseQuoteProductItem
 *
 * @ORM\MappedSuperclass
 * @ORM\HasLifecycleCallbacks()
 * @Config(
 *      defaultValues={
 *          "entity"={
 *              "icon"="fa-list-alt"
 *          },
 *          "security"={
 *              "type"="ACL",
 *              "group_name"=""
 *          }
 *      }
 * )
 */
class BaseQuoteProductItem implements ProductUnitHolderInterface, ProductHolderInterface
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var QuoteProduct
     *
     * @ORM\ManyToOne(targetEntity="Oro\Bundle\SaleBundle\Entity\QuoteProduct")
     * @ORM\JoinColumn(name="quote_product_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $quoteProduct;

    /**
     * @var float
     *
     * @ORM\Column(name="quantity", type="float", nullable=true)
     */
    protected $quantity;

    /**
     * @var ProductUnit
     *
     * @ORM\ManyToOne(targetEntity="Oro\Bundle\ProductBundle\Entity\ProductUnit")
     * @ORM\JoinColumn(name="product_unit_id", referencedColumnName="code", onDelete="SET NULL")
     */
    protected $productUnit;

    /**
     * @var string
     *
     * @ORM\Column(name="product_unit_code", type="string", length=255)
     */
    protected $productUnitCode;

    /**
     * @var float
     *
     * @ORM\Column(name="value", type="money", nullable=true)
     */
    protected $value;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", nullable=true)
     */
    protected $currency;

    /**
     * @var Price
     */
    protected $price;

    /**
     * {@inheritdoc}
     */
    public function getEntityIdentifier()
    {
        return $this->getId();
    }

    /**
     * {@inheritdoc}
     */
    public function getProductHolder()
    {
        return $this->getQuoteProduct();
    }

    /**
     * @ORM\PostLoad
     */
    public function postLoad()
    {
        if (null !== $this->value && null !==  $this->currency) {
            $this->price = Price::create($this->value, $this->currency);
        }
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function updatePrice()
    {
        $this->value = $this->price ? $this->price->getValue() : null;
        $this->currency = $this->price ? $this->price->getCurrency() : null;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quantity
     *
     * @param float $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set quoteProduct
     *
     * @param QuoteProduct $quoteProduct
     * @return $this
     */
    public function setQuoteProduct(QuoteProduct $quoteProduct = null)
    {
        $this->quoteProduct = $quoteProduct;

        return $this;
    }

    /**
     * Get quoteProduct
     *
     * @return QuoteProduct
     */
    public function getQuoteProduct()
    {
        return $this->quoteProduct;
    }

    /**
     * Set productUnit
     *
     * @param ProductUnit $productUnit
     * @return $this
     */
    public function setProductUnit(ProductUnit $productUnit = null)
    {
        $this->productUnit = $productUnit;
        if ($productUnit) {
            $this->productUnitCode = $productUnit->getCode();
        }

        return $this;
    }

    /**
     * Get productUnit
     *
     * @return ProductUnit
     */
    public function getProductUnit()
    {
        return $this->productUnit;
    }

    /**
     * Set productUnitCode
     *
     * @param string $productUnitCode
     * @return $this
     */
    public function setProductUnitCode($productUnitCode)
    {
        $this->productUnitCode = $productUnitCode;

        return $this;
    }

    /**
     * Get productUnitCode
     *
     * @return string
     */
    public function getProductUnitCode()
    {
        return $this->productUnitCode;
    }

    /**
     * Set price
     *
     * @param Price $price
     * @return $this
     */
    public function setPrice($price = null)
    {
        $this->price = $price;

        $this->updatePrice();

        return $this;
    }

    /**
     * Get price
     *
     * @return Price|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    /** {@inheritdoc} */
    public function getProduct()
    {
        if ($this->quoteProduct) {
            return $this->quoteProduct->getProduct();
        }

        return null;
    }

    /** {@inheritdoc} */
    public function getProductSku()
    {
        $product = $this->getProduct();
        if ($product) {
            return $product->getSku();
        }

        return null;
    }

    /**
     * @return null|Product
     */
    public function getParentProduct()
    {
        if ($this->quoteProduct) {
            return $this->quoteProduct->getParentProduct();
        }

        return null;
    }
}
