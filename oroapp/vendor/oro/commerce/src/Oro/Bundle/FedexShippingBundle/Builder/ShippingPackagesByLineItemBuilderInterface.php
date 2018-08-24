<?php

namespace Oro\Bundle\FedexShippingBundle\Builder;

use Oro\Bundle\FedexShippingBundle\Model\FedexPackageSettingsInterface;
use Oro\Bundle\ShippingBundle\Context\ShippingLineItemInterface;
use Oro\Bundle\ShippingBundle\Model\ShippingPackageOptionsInterface;

interface ShippingPackagesByLineItemBuilderInterface
{
    /**
     * @param FedexPackageSettingsInterface $settings
     */
    public function init(FedexPackageSettingsInterface $settings);

    /**
     * @param ShippingLineItemInterface $lineItem
     *
     * @return bool
     */
    public function addLineItem(ShippingLineItemInterface $lineItem): bool;

    /**
     * @return ShippingPackageOptionsInterface[]
     */
    public function getResult(): array;
}
