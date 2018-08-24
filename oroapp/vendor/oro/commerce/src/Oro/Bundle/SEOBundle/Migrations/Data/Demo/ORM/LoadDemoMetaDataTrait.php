<?php

namespace Oro\Bundle\SEOBundle\Migrations\Data\Demo\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue;

trait LoadDemoMetaDataTrait
{
    /**
     * @param ObjectManager $manager
     * @param array $entities
     */
    public function addMetaFieldsData(ObjectManager $manager, array $entities)
    {
        foreach ($entities as $entity) {
            $entity->addMetaDescriptions($this->getSeoMetaFieldData($manager, 'defaultMetaDescription'));
            $entity->addMetaKeywords($this->getSeoMetaFieldData($manager, 'defaultMetaKeywords'));

            $manager->persist($entity);
        }
    }

    /**
     * Create a new LocalizedFallbackValue, persist it and return it
     *
     * @param ObjectManager $manager
     * @param $seoFieldValue
     * @return LocalizedFallbackValue
     */
    protected function getSeoMetaFieldData(ObjectManager $manager, $seoFieldValue, $isString = false)
    {
        $seoField = new LocalizedFallbackValue();
        if ($isString) {
            $seoField->setString($seoFieldValue);
        } else {
            $seoField->setText($seoFieldValue);
        }

        $manager->persist($seoField);

        return $seoField;
    }
}
