<?php

namespace Oro\Bundle\PricingBundle\Tests\Functional\Entity\Repository;

use Oro\Bundle\PricingBundle\Entity\CombinedPriceList;
use Oro\Bundle\PricingBundle\Entity\CombinedPriceListToCustomer;
use Oro\Bundle\PricingBundle\Entity\PriceList;
use Oro\Bundle\PricingBundle\Entity\PriceListCustomerFallback;
use Oro\Bundle\PricingBundle\Entity\PriceListToCustomer;

class CombinedPriceListToCustomerRepositoryTest extends AbstractCombinedPriceListRelationRepositoryTest
{
    public function testDeleteInvalidRelations()
    {
        /** @var  CombinedPriceList $combinedPriceList */
        $combinedPriceList = $this->getReference('2t_3f_1t');
        /** @var PriceList $priceList */
        $priceList = $this->getReference('price_list_1');
        $registry = $this->getContainer()
            ->get('doctrine');
        $em = $registry->getManager();
        $repo = $registry->getRepository('OroPricingBundle:CombinedPriceListToCustomer');
        $combinedPriceListsToCustomer = $repo->findAll();
        $this->assertCount(2, $combinedPriceListsToCustomer);
        //Add Base Relation
        $priceListToCustomer = new PriceListToCustomer();
        /** @var CombinedPriceListToCustomer $combinedPriceListToCustomer */
        $combinedPriceListToCustomer = $this->getRelationByPriceList($combinedPriceListsToCustomer, $combinedPriceList);
        $priceListToCustomer->setCustomer($combinedPriceListToCustomer->getCustomer());
        $priceListToCustomer->setMergeAllowed(false);
        $priceListToCustomer->setPriceList($priceList);
        $priceListToCustomer->setSortOrder(4);
        $priceListToCustomer->setWebsite($combinedPriceListToCustomer->getWebsite());
        $em->persist($priceListToCustomer);
        $em->flush();
        $repo->deleteInvalidRelations();
        $this->assertCount(1, $repo->findAll());
        //Remove Base Relation
        $em->remove($priceListToCustomer);
        $em->flush();

        $fallback = new PriceListCustomerFallback();
        $fallback->setCustomer($combinedPriceListToCustomer->getCustomer());
        $fallback->setWebsite($combinedPriceListToCustomer->getWebsite());
        $fallback->setFallback(PriceListCustomerFallback::CURRENT_ACCOUNT_ONLY);
        $em->persist($fallback);
        $em->flush();

        $repo->deleteInvalidRelations();

        $this->assertCount(1, $repo->findAll());

        $fallback->setFallback(PriceListCustomerFallback::ACCOUNT_GROUP);
        $em->flush();
        $repo->deleteInvalidRelations();

        $this->assertCount(0, $repo->findAll());
    }
}
