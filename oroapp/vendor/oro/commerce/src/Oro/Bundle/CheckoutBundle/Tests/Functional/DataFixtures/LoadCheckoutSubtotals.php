<?php

namespace Oro\Bundle\CheckoutBundle\Tests\Functional\DataFixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Oro\Bundle\CheckoutBundle\Entity\Checkout;
use Oro\Bundle\CheckoutBundle\Entity\CheckoutSubtotal;
use Oro\Bundle\PricingBundle\Entity\CombinedPriceList;
use Oro\Bundle\PricingBundle\SubtotalProcessor\Model\Subtotal;

class LoadCheckoutSubtotals extends AbstractFixture implements DependentFixtureInterface
{
    const CHECKOUT_SUBTOTAL_1 = 'checkout.subtotal.1';
    const CHECKOUT_SUBTOTAL_2 = 'checkout.subtotal.2';
    const CHECKOUT_SUBTOTAL_3 = 'checkout.subtotal.3';
    const CHECKOUT_SUBTOTAL_4 = 'checkout.subtotal.4';
    const CHECKOUT_SUBTOTAL_5 = 'checkout.subtotal.5';
    const CHECKOUT_SUBTOTAL_6 = 'checkout.subtotal.6';
    const CHECKOUT_SUBTOTAL_7 = 'checkout.subtotal.7';

    /** @var array */
    protected static $data = [
        self::CHECKOUT_SUBTOTAL_1 => [
            'checkout' => LoadShoppingListsCheckoutsData::CHECKOUT_1,
            'currency' => 'USD',
            'amount' => 500,
            'valid' => true,
        ],
        self::CHECKOUT_SUBTOTAL_2 => [
            'checkout' => LoadShoppingListsCheckoutsData::CHECKOUT_2,
            'currency' => 'USD',
            'amount' => 300,
            'valid' => true,
        ],
        self::CHECKOUT_SUBTOTAL_3 => [
            'checkout' => LoadShoppingListsCheckoutsData::CHECKOUT_3,
            'currency' => 'USD',
            'combinedPriceList' => '1f',
            'amount' => 100,
            'valid' => true,
        ],
        self::CHECKOUT_SUBTOTAL_7 => [
            'checkout' => LoadShoppingListsCheckoutsData::CHECKOUT_7,
            'currency' => 'USD',
            'amount' => 200,
            'valid' => true,
        ],
    ];

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        foreach (static::$data as $key => $item) {
            /** @var Checkout $checkout */
            $checkout = $this->getReference($item['checkout']);
            $checkoutSubtotal = new CheckoutSubtotal($checkout, $item['currency']);
            $subtotal = new Subtotal();
            $subtotal
                ->setCurrency($item['currency'])
                ->setAmount($item['amount']);

            if (isset($item['combinedPriceList'])) {
                /** @var CombinedPriceList $combinedPriceList */
                $combinedPriceList = $this->getReference($item['combinedPriceList']);
                $subtotal->setCombinedPriceList($combinedPriceList);
            }

            $checkoutSubtotal
                ->setSubtotal($subtotal)
                ->setValid($item['valid']);

            $manager->persist($checkoutSubtotal);
            $this->addReference($key, $checkoutSubtotal);
        }
        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getDependencies()
    {
        return [
            LoadShoppingListsCheckoutsData::class,
        ];
    }
}
