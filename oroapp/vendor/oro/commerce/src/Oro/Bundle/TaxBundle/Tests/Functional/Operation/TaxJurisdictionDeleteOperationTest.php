<?php

namespace Oro\Bundle\TaxBundle\Tests\Functional\Operation;

use Oro\Bundle\ActionBundle\Tests\Functional\ActionTestCase;
use Oro\Bundle\TaxBundle\Tests\Functional\DataFixtures\LoadTaxes;
use Oro\Bundle\TaxBundle\Tests\Functional\DataFixtures\LoadTaxJurisdictions;

class TaxJurisdictionDeleteOperationTest extends ActionTestCase
{
    protected function setUp()
    {
        $this->initClient([], $this->generateBasicAuthHeader());
        $this->client->useHashNavigation(true);

        $this->loadFixtures(
            [
                'Oro\Bundle\TaxBundle\Tests\Functional\DataFixtures\LoadTaxJurisdictions'
            ]
        );
    }

    public function testDelete()
    {
        $taxJurisdiction = $this->getReference(
            LoadTaxJurisdictions::REFERENCE_PREFIX . '.' . LoadTaxes::TAX_1
        );

        $this->assertDeleteOperation(
            $taxJurisdiction->getId(),
            'oro_tax.entity.tax_jurisdiction.class',
            'oro_tax_jurisdiction_index'
        );
    }
}
