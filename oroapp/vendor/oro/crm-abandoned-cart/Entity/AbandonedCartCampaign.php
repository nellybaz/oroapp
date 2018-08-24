<?php

namespace Oro\Bundle\AbandonedCartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;
use Oro\Bundle\MarketingListBundle\Entity\MarketingList;
use Oro\Bundle\CampaignBundle\Entity\Campaign;

/**
 * Abandoned Cart Campaign
 *
 * @ORM\Table(name="orocrm_abandonedcart_campaign")
 * @ORM\Entity()
 * @Config(
 *      defaultValues={
 *          "entity"={
 *              "icon"="fa-list-alt"
 *          },
 *          "tag"={
 *              "enabled"=true
 *          }
 *      }
 * )
 */
class AbandonedCartCampaign
{
    const CLASS_NAME = 'Oro\Bundle\AbandonedCartBundle\Entity\AbandonedCartCampaign';

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var MarketingList
     *
     * @ORM\OneToOne(targetEntity="Oro\Bundle\MarketingListBundle\Entity\MarketingList")
     * @ORM\JoinColumn(name="marketing_list_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     */
    protected $marketingList;

    /**
     * @var Campaign
     *
     * @ORM\OneToOne(targetEntity="Oro\Bundle\CampaignBundle\Entity\Campaign", cascade={"persist"})
     * @ORM\JoinColumn(name="campaign_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     */
    protected $campaign;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return MarketingList
     */
    public function getMarketingList()
    {
        return $this->marketingList;
    }

    /**
     * @param $marketingList
     * @return $this
     */
    public function setMarketingList(MarketingList $marketingList)
    {
        $this->marketingList = $marketingList;
        return $this;
    }

    /**
     * @return Campaign
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * @param Campaign $campaign
     * @return $this
     */
    public function setCampaign(Campaign $campaign)
    {
        $this->campaign = $campaign;
        return $this;
    }
}
