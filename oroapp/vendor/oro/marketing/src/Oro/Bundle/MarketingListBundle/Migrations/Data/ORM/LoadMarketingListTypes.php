<?php

namespace Oro\Bundle\MarketingListBundle\Migrations\Data\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;

use Oro\Bundle\MarketingListBundle\Entity\MarketingListType;

class LoadMarketingListTypes extends AbstractFixture
{
    /**
     * Load available segment types
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $types = [
            MarketingListType::TYPE_DYNAMIC,
            MarketingListType::TYPE_STATIC,
            MarketingListType::TYPE_MANUAL
        ];

        foreach ($types as $typeCode) {
            $type = new MarketingListType($typeCode);
            $type->setLabel('oro.marketinglist.type.' . $typeCode);

            $manager->persist($type);
        }

        $manager->flush();
    }
}
