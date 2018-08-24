<?php

namespace Oro\Bundle\PricingBundle\Migrations\Data\Demo\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;

use Oro\Bundle\PricingBundle\Entity\PriceListToWebsite;
use Oro\Bundle\WebsiteBundle\Migrations\Data\ORM\LoadWebsiteData;

class LoadPriceListToWebsiteDemoData extends LoadBasePriceListRelationDemoData
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $locator = $this->container->get('file_locator');
        $filePath = $locator->locate('@OroPricingBundle/Migrations/Data/Demo/ORM/data/price_lists_to_website.csv');

        if (is_array($filePath)) {
            $filePath = current($filePath);
        }

        $handler = fopen($filePath, 'r');
        $headers = fgetcsv($handler, 1000, ',');
        /** @var EntityManager $manager */
        $website = $this->getWebsiteByName($manager, LoadWebsiteData::DEFAULT_WEBSITE_NAME);
        while (($data = fgetcsv($handler, 1000, ',')) !== false) {
            $row = array_combine($headers, array_values($data));
            $priceList = $this->getPriceListByName($manager, $row['priceList']);

            $priceListToCustomer = new PriceListToWebsite();
            $priceListToCustomer->setWebsite($website)
                ->setPriceList($priceList)
                ->setSortOrder($row['sort_order'])
                ->setMergeAllowed((boolean)$row['mergeAllowed']);
            $manager->persist($priceListToCustomer);
        }

        fclose($handler);

        $manager->flush();
    }

    /**
     * {@inheritdoc}
     */
    public function getDependencies()
    {
        return [LoadWebsiteData::class, LoadPriceListDemoData::class];
    }
}
