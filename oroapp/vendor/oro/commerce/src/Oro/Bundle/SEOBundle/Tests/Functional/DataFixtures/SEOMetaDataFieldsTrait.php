<?php

namespace Oro\Bundle\SEOBundle\Tests\Functional\DataFixtures;

use Doctrine\Common\Persistence\ObjectManager;

use Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue;

trait SEOMetaDataFieldsTrait
{
    /**
     * {@inheritdoc}
     */
    public function loadLocalizedFallbackValues(ObjectManager $manager, $entity, $metadataFields = array())
    {
        foreach ($metadataFields as $fieldName => $matedataField) {
            $localizedFallbackValue = new LocalizedFallbackValue();
            $localizedFallbackValue->setString($matedataField);
            $adderMethod = sprintf('add%s', ucfirst($fieldName));
            $entity->$adderMethod($localizedFallbackValue);
            $manager->persist($localizedFallbackValue);
        }
    }
}
