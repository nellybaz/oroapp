<?php

namespace Oro\Bundle\PricingBundle\Migrations\Data\Demo\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;

use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\PricingBundle\Entity\PriceAttributePriceList;
use Oro\Bundle\PricingBundle\Entity\PriceAttributeProductPrice;

class LoadPriceAttributeProductPriceDemoData extends AbstractLoadProductPriceDemoData
{
    /**
     * @inheritDoc
     */
    public function getDependencies()
    {
        return array_merge(
            parent::getDependencies(),
            [
                LoadPriceAttributePriceListDemoData::class,
            ]
        );
    }

    /**
     * {@inheritdoc}
     * @param EntityManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $locator = $this->container->get('file_locator');
        $filePath = $locator->locate('@OroProductBundle/Migrations/Data/Demo/ORM/data/products.csv');

        if (is_array($filePath)) {
            $filePath = current($filePath);
        }

        $handler = fopen($filePath, 'r');
        $headers = fgetcsv($handler, 1000, ',');

        $priceAttributes = [
            'MSRP',
            'MAP',
        ];

        while (($data = fgetcsv($handler, 1000, ',')) !== false) {
            $row = array_combine($headers, array_values($data));

            $product = $this->getProductBySku($manager, $row['sku']);
            $productUnit = $this->getProductUnit($manager, $row['unit']);
            foreach ($priceAttributes as $attributeName) {
                $priceAttributePriceList = $this->getPriceAttribute($manager, $attributeName);
                foreach ($priceAttributePriceList->getCurrencies() as $currency) {
                    $amount = round($row[$attributeName], 2);
                    $price = Price::create($amount, $currency);

                    $priceAttributeProductPrice = new PriceAttributeProductPrice();
                    $priceAttributeProductPrice
                        ->setProduct($product)
                        ->setUnit($productUnit)
                        ->setPriceList($priceAttributePriceList)
                        ->setQuantity(1)
                        ->setPrice($price);

                    $manager->persist($priceAttributeProductPrice);
                }
            }
        }

        fclose($handler);

        $manager->flush();
    }

    /**
     * @param EntityManager $manager
     * @param string $name
     * @return PriceAttributePriceList|null
     */
    protected function getPriceAttribute(EntityManager $manager, $name)
    {
        if (!array_key_exists($name, $this->priceLists)) {
            $this->priceLists[$name] = $manager->getRepository('OroPricingBundle:PriceAttributePriceList')
                ->findOneBy(['name' => $name]);
        }

        return $this->priceLists[$name];
    }
}
