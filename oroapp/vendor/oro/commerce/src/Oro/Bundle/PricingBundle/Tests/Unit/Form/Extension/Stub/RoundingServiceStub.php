<?php

namespace Oro\Bundle\PricingBundle\Tests\Unit\Form\Extension\Stub;

use Oro\Bundle\CurrencyBundle\Rounding\RoundingServiceInterface;

class RoundingServiceStub implements RoundingServiceInterface
{

    /**
     * {@inheritdoc}
     */
    public function round($value, $precision = null, $roundType = null)
    {
        return $value;
    }

    /**
     * {@inheritdoc}
     */
    public function getPrecision()
    {
        return 4;
    }

    /**
     * {@inheritdoc}
     */
    public function getRoundType()
    {
        return RoundingServiceInterface::ROUND_HALF_UP;
    }
}
