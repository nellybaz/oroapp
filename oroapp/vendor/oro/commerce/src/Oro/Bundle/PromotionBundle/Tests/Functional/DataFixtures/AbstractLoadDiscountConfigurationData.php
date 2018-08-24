<?php

namespace Oro\Bundle\PromotionBundle\Tests\Functional\DataFixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Oro\Bundle\PromotionBundle\Entity\DiscountConfiguration;

abstract class AbstractLoadDiscountConfigurationData extends AbstractFixture
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        foreach ($this->getDiscountConfiguration() as $reference => $configurationData) {
            $discountConfiguration = new DiscountConfiguration();

            $discountConfiguration->setType($configurationData['type']);
            $discountConfiguration->setOptions($configurationData['options']);

            $manager->persist($discountConfiguration);
            $this->setReference($reference, $discountConfiguration);
        }
        $manager->flush();
    }

    /**
     * @return array
     */
    abstract protected function getDiscountConfiguration();
}
