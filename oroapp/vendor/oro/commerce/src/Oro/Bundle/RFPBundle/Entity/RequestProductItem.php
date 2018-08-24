<?php

namespace Oro\Bundle\RFPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;
use Oro\Bundle\ProductBundle\Model\ProductHolderInterface;
use Oro\Bundle\ProductBundle\Model\ProductUnitHolderInterface;

/**
 * @ORM\Table(name="oro_rfp_request_prod_item")
 * @ORM\Entity
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
 * @ORM\HasLifecycleCallbacks()
 */
class RequestProductItem implements ProductUnitHolderInterface, ProductHolderInterface
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
     * @var RequestProduct
     *
     * @ORM\ManyToOne(targetEntity="RequestProduct", inversedBy="requestProductItems")
     * @ORM\JoinColumn(name="request_product_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $requestProduct;

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
     * @ORM\Column(name="currency", type="string", length=3, nullable=true)
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
        return $this->getRequestProduct();
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
     * @return RequestProductItem
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
     * Set requestProduct
     *
     * @param RequestProduct $requestProduct
     * @return RequestProductItem
     */
    public function setRequestProduct(RequestProduct $requestProduct = null)
    {
        $this->requestProduct = $requestProduct;

        return $this;
    }

    /**
     * Get requestProduct
     *
     * @return RequestProduct
     */
    public function getRequestProduct()
    {
        return $this->requestProduct;
    }

    /**
     * Set productUnit
     *
     * @param ProductUnit $productUnit
     * @return RequestProductItem
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
     * @return RequestProductItem
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
     * @param Price $price
     * @return RequestProductItem
     */
    public function setPrice(Price $price = null)
    {
        $this->price = $price;

        $this->updatePrice();

        return $this;
    }

    /**
     * @return Price|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @ORM\PostLoad
     */
    public function loadPrice()
    {
        if ($this->value && $this->currency) {
            $this->price = Price::create($this->value, $this->currency);
        }
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function updatePrice()
    {
        $this->value    = $this->price ? $this->price->getValue() : null;
        $this->currency = $this->price ? $this->price->getCurrency() : null;
    }

    /** {@inheritdoc} */
    public function getProduct()
    {
        if ($this->requestProduct) {
            return $this->requestProduct->getProduct();
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
}
