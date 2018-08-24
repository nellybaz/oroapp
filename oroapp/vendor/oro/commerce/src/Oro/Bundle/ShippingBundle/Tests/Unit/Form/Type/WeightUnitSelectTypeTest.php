<?php

namespace Oro\Bundle\ShippingBundle\Tests\Unit\Form\Type;

use Oro\Bundle\ShippingBundle\Form\Type\WeightUnitSelectType;

class WeightUnitSelectTypeTest extends AbstractShippingOptionSelectTypeTest
{
    protected function setUp()
    {
        parent::setUp();

        $this->formType = new WeightUnitSelectType($this->provider, $this->formatter);
    }

    public function testGetBlockPrefix()
    {
        $this->assertEquals(WeightUnitSelectType::NAME, $this->formType->getBlockPrefix());
    }
}
