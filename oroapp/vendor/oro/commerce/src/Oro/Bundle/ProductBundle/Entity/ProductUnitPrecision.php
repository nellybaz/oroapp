<?php

namespace Oro\Bundle\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\ConfigField;
use Oro\Bundle\ProductBundle\Model\ProductUnitHolderInterface;

/**
 * @ORM\Table(
 *      name="oro_product_unit_precision",
 *      uniqueConstraints={
 *          @ORM\UniqueConstraint(
 *              name="uidx_oro_product_unit_precision",
 *              columns={"product_id","unit_code"}
 *          )
 *      }
 * )
 * @ORM\Entity(repositoryClass="Oro\Bundle\ProductBundle\Entity\Repository\ProductUnitPrecisionRepository")
 * @Config
 */
class ProductUnitPrecision implements ProductUnitHolderInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ConfigField(
     *      defaultValues={
     *          "importexport"={
     *              "excluded"=true
     *          }
     *      }
     * )
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="unitPrecisions")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id", onDelete="CASCADE")
     * @ConfigField(
     *      defaultValues={
     *          "importexport"={
     *              "excluded"=true
     *          }
     *      }
     * )
     */
    protected $product;

    /**
     * @ORM\ManyToOne(targetEntity="ProductUnit")
     * @ORM\JoinColumn(name="unit_code", referencedColumnName="code", onDelete="CASCADE")
     * @ConfigField(
     *      defaultValues={
     *          "importexport"={
     *              "order"=10,
     *              "identity"=true
     *          }
     *      }
     * )
     */
    protected $unit;

    /**
     * @var integer
     *
     * @ORM\Column(name="unit_precision",type="integer")
     * @ConfigField(
     *      defaultValues={
     *          "importexport"={
     *              "order"=20
     *          }
     *      }
     * )
     */
    protected $precision;

    /**
     * @var float
     *
     * @ORM\Column(name="conversion_rate",type="float",nullable=true)
     * @ConfigField(
     *      defaultValues={
     *          "importexport"={
     *              "order"=30
     *          }
     *      }
     * )
     */
    protected $conversionRate;

    /**
     * @var bool
     *
     * @ORM\Column(name="sell",type="boolean",nullable=false)
     * @ConfigField(
     *      defaultValues={
     *          "importexport"={
     *              "order"=40
     *          }
     *      }
     * )
     */
    protected $sell = true;

    public function __clone()
    {
        $this->id = null;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set product
     *
     * @param Product $product
     * @return ProductUnitPrecision
     */
    public function setProduct(Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set product unit
     *
     * @param ProductUnit $unit
     * @return ProductUnitPrecision
     */
    public function setUnit(ProductUnit $unit = null)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Get product unit
     *
     * @return ProductUnit
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Set precision
     *
     * @param integer $precision
     * @return ProductUnitPrecision
     */
    public function setPrecision($precision)
    {
        $this->precision = $precision;

        return $this;
    }

    /**
     * Get precision
     *
     * @return integer
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * @param float $conversionRate
     * @return ProductUnitPrecision
     */
    public function setConversionRate($conversionRate)
    {
        $this->conversionRate = $conversionRate;
        
        return $this;
    }
    
    /**
     * @return float
     */
    public function getConversionRate()
    {
        return $this->conversionRate;
    }

    /**
     * @return boolean
     */
    public function isSell()
    {
        return $this->sell;
    }

    /**
     * @param boolean $sell
     * @return ProductUnitPrecision
     */
    public function setSell($sell)
    {
        $this->sell = $sell;
        
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityIdentifier()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getProductHolder()
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getProductUnit()
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getProductUnitCode()
    {
        if ($unit = $this->getUnit()) {
            return $unit->getCode();
        } else {
            return null;
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        if ($this->getUnit()) {
            return $this->getUnit()->getCode() . ' ' . $this->getPrecision();
        }

        return '';
    }
}
