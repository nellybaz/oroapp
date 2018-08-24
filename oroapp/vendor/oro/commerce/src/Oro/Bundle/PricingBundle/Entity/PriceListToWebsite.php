<?php

namespace Oro\Bundle\PricingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="oro_price_list_to_website", uniqueConstraints={
 *     @ORM\UniqueConstraint(
 *          name="oro_price_list_to_website_unique_key",
 *          columns={"price_list_id", "website_id"}
 *     )
 * })
 * @ORM\Entity(repositoryClass="Oro\Bundle\PricingBundle\Entity\Repository\PriceListToWebsiteRepository")
 */
class PriceListToWebsite extends BasePriceListRelation
{
}
