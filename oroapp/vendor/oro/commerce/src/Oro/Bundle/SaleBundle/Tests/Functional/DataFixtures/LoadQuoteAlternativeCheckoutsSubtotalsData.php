<?php

namespace Oro\Bundle\SaleBundle\Tests\Functional\DataFixtures;

use Doctrine\Common\Persistence\ObjectManager;
use Oro\Bundle\CheckoutBundle\Tests\Functional\DataFixtures\LoadCheckoutSubtotals;

class LoadQuoteAlternativeCheckoutsSubtotalsData extends LoadCheckoutSubtotals
{
    const ALTERNATIVE_CHECKOUT_SUBTOTAL_1 = 'alternative.checkout.subtotal.1';
    const ALTERNATIVE_CHECKOUT_SUBTOTAL_2 = 'alternative.checkout.subtotal.2';

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        static::$data = array_merge(
            static::$data,
            [
                self::ALTERNATIVE_CHECKOUT_SUBTOTAL_1 => [
                    'checkout' => LoadQuoteAlternativeCheckoutsData::CHECKOUT_1,
                    'currency' => 'USD',
                    'amount' => 600,
                    'valid' => true,
                ],
                self::ALTERNATIVE_CHECKOUT_SUBTOTAL_2 => [
                    'checkout' => LoadQuoteAlternativeCheckoutsData::CHECKOUT_2,
                    'currency' => 'USD',
                    'amount' => 700,
                    'valid' => true,
                ],
            ]
        );

        parent::load($manager);
    }

    /**
     * {@inheritDoc}
     */
    public function getDependencies()
    {
        return array_merge(
            parent::getDependencies(),
            [
                LoadQuoteAlternativeCheckoutsData::class,
            ]
        );
    }
}
