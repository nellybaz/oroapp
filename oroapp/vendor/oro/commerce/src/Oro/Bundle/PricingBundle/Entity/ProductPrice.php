<?php

namespace Oro\Bundle\PricingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;
use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\ConfigField;

/**
 * @ORM\Table(
 *      name="oro_price_product",
 *      uniqueConstraints={
 *          @ORM\UniqueConstraint(
 *              name="oro_pricing_price_list_uidx",
 *              columns={"product_id", "price_list_id", "quantity", "unit_code", "currency"}
 *          )
 *      }
 * )
 * @ORM\Entity(repositoryClass="Oro\Bundle\PricingBundle\Entity\Repository\ProductPriceRepository")
 * @Config(
 *      defaultValues={
 *          "entity"={
 *              "icon"="fa-usd"
 *          },
 *          "sharding"={
 *              "discrimination_field"="priceList"
 *          }
 *      }
 * )
 * @method PriceList getPriceList()
 */
class ProductPrice extends BaseProductPrice
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
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
     * @var PriceList
     *
     * @ORM\ManyToOne(targetEntity="Oro\Bundle\PricingBundle\Entity\PriceList", inversedBy="prices")
     * @ORM\JoinColumn(name="price_list_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     * @ConfigField(
     *      defaultValues={
     *          "importexport"={
     *              "identity"=true
     *          }
     *      }
     * )
     **/
    protected $priceList;

    /**
     * @var PriceRule
     *
     * @ORM\ManyToOne(targetEntity="Oro\Bundle\PricingBundle\Entity\PriceRule")
     * @ORM\JoinColumn(name="price_rule_id", referencedColumnName="id", nullable=true, onDelete="CASCADE")
     **/
    protected $priceRule;

    /**
     * @return PriceRule
     */
    public function getPriceRule()
    {
        return $this->priceRule;
    }

    /**
     * @param PriceRule $priceRule
     * @return $this
     */
    public function setPriceRule($priceRule)
    {
        $this->priceRule = $priceRule;

        return $this;
    }
}
