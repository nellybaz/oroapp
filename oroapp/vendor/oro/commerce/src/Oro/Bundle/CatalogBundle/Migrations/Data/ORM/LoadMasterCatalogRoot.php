<?php

namespace Oro\Bundle\CatalogBundle\Migrations\Data\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;

use Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue;
use Oro\Bundle\CatalogBundle\Entity\Category;

class LoadMasterCatalogRoot extends AbstractFixture
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $title = new LocalizedFallbackValue();
        $title->setString('All Products');

        $category = new Category();
        $category->addTitle($title);

        $manager->persist($category);
        $manager->flush($category);
    }
}
