<?php

namespace Oro\Bundle\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\ConfigField;

/**
 * @ORM\Table(name="oro_product_unit")
 * @ORM\Entity(repositoryClass="Oro\Bundle\ProductBundle\Entity\Repository\ProductUnitRepository")
 * @Config(
 *      defaultValues={
 *          "entity"={
 *              "icon"="fa-briefcase"
 *          }
 *      }
 * )
 */
class ProductUnit implements MeasureUnitInterface
{
    /**
     * @var string
     *
     * @ORM\Id
     * @ORM\Column(type="string", length=255)
     * @ORM\GeneratedValue(strategy="NONE")
     * @ConfigField(
     *      defaultValues={
     *          "importexport"={
     *              "identity"=true
     *          }
     *      }
     * )
     */
    protected $code;

    /**
     * @var integer
     *
     * @ORM\Column(name="default_precision", type="integer")
     */
    protected $defaultPrecision;

    /**
     * Set code
     *
     * @param string $code
     * @return ProductUnit
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set defaultPrecision
     *
     * @param integer $defaultPrecision
     * @return ProductUnit
     */
    public function setDefaultPrecision($defaultPrecision)
    {
        $this->defaultPrecision = $defaultPrecision;

        return $this;
    }

    /**
     * Get defaultPrecision
     *
     * @return integer
     */
    public function getDefaultPrecision()
    {
        return $this->defaultPrecision;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->code;
    }
}
