<?php

namespace Oro\Bundle\PricingBundle\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\ConfigField;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;

/**
 * This entity represents price list with price attributes
 *
 * @ORM\Table(name="oro_price_attribute_pl")
 * @ORM\Entity(repositoryClass="Oro\Bundle\PricingBundle\Entity\Repository\PriceAttributePriceListRepository")
 * @Config(
 *      routeName="oro_pricing_price_attribute_price_list_index",
 *      routeView="oro_pricing_price_attribute_price_list_view",
 *      routeUpdate="oro_pricing_price_attribute_price_list_update",
 *      defaultValues={
 *          "security"={
 *              "type"="ACL",
 *              "group_name"=""
 *          },
 *      }
 * )
 */
class PriceAttributePriceList extends BasePriceList
{
    /**
     * @var Collection|PriceAttributeProductPrice[]
     *
     * @ORM\OneToMany(
     *      targetEntity="Oro\Bundle\PricingBundle\Entity\PriceAttributeProductPrice",
     *      mappedBy="priceList",
     *      fetch="EXTRA_LAZY"
     * )
     */
    protected $prices;

    /**
     * @var PriceAttributeCurrency[]|Collection
     *
     * @ORM\OneToMany(
     *      targetEntity="Oro\Bundle\PricingBundle\Entity\PriceAttributeCurrency",
     *      mappedBy="priceList",
     *      cascade={"all"},
     *      orphanRemoval=true
     * )
     */
    protected $currencies;

    /**
     * @var string
     *
     * @ORM\Column(name="field_name", type="string", length=255)
     * @ConfigField(
     *      defaultValues={
     *          "dataaudit"={
     *              "auditable"=true
     *          }
     *      }
     * )
     */
    protected $fieldName;

    /**
     * @return string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * @param string $fieldName
     * @return $this
     */
    public function setFieldName($fieldName)
    {
        $this->fieldName = $fieldName;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    protected function createPriceListCurrency()
    {
        return new PriceAttributeCurrency();
    }
}
