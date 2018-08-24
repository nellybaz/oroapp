<?php

namespace Oro\Bundle\PricingBundle\Event\CombinedPriceList;

use Symfony\Component\EventDispatcher\Event;

class CustomerCPLUpdateEvent extends Event
{
    const NAME = 'oro_pricing.customer.combined_price_list.update';

    /**
     * @var array
     */
    protected $customersData;

    /**
     * @param array $customersData
     */
    public function __construct(array $customersData)
    {
        $this->customersData = $customersData;
    }

    /**
     * @return array
     */
    public function getCustomersData()
    {
        return $this->customersData;
    }
}
