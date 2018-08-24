<?php

namespace Oro\Bundle\WebsiteSearchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Oro\Bundle\SearchBundle\Entity\AbstractIndexDatetime;

/**
 * Stores values of datatime fields
 *
 * @ORM\Table(
 *      name="oro_website_search_datetime",
 *      indexes={
 *          @ORM\Index(name="oro_website_search_datetime_field_idx", columns={"field"}),
 *          @ORM\Index(name="oro_website_search_datetime_item_field_idx", columns={"item_id", "field"})
 *      }
 * )
 * @ORM\Entity
 */
class IndexDatetime extends AbstractIndexDatetime
{
    /**
     * @ORM\ManyToOne(targetEntity="Oro\Bundle\WebsiteSearchBundle\Entity\Item", inversedBy="datetimeFields")
     * @ORM\JoinColumn(name="item_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     */
    protected $item;
}
