<?php

namespace Oro\Bundle\TaxBundle\Resolver\SellerResolver\USSalesTaxResolver;

use Oro\Bundle\TaxBundle\Matcher\UnitedStatesHelper;
use Oro\Bundle\TaxBundle\Model\Taxable;
use Oro\Bundle\TaxBundle\Resolver\ResolverInterface;

class DigitalResolver implements ResolverInterface
{
    /**
     * @var ResolverInterface
     */
    protected $itemResolver;

    /**
     * @param ResolverInterface $itemResolver
     */
    public function __construct(ResolverInterface $itemResolver)
    {
        $this->itemResolver = $itemResolver;
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(Taxable $taxable)
    {
        if (!$taxable->getItems()->count()) {
            return;
        }

        $address = $taxable->getDestination();
        if (!$address) {
            return;
        }

        $isStateWithoutDigitalTax = UnitedStatesHelper::isStateWithoutDigitalTax(
            $address->getCountryIso2(),
            $address->getRegionCode()
        );

        if ($isStateWithoutDigitalTax) {
            foreach ($taxable->getItems() as $taxableItem) {
                $this->itemResolver->resolve($taxableItem);
            }

            $taxable->makeDestinationAddressTaxable();
        }
    }
}
