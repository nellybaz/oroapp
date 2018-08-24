<?php

namespace Oro\Bundle\CheckoutBundle\Datagrid;

use Oro\Bundle\DataGridBundle\Event\BuildBefore;
use Oro\Bundle\CustomerBundle\Security\CustomerUserProvider;
use Oro\Bundle\CheckoutBundle\Entity\Checkout;

class CheckoutGridCustomerUserNameListener
{
    /**
     * @var CustomerUserProvider
     */
    private $customerUserProvider;

    /**
     * @param CustomerUserProvider $customerUserProvider
     */
    public function __construct(CustomerUserProvider $customerUserProvider)
    {
        $this->customerUserProvider = $customerUserProvider;
    }

    /**
     * @param BuildBefore $event
     */
    public function onBuildBefore(BuildBefore $event)
    {
        $config = $event->getConfig();

        $columns = $config->offsetGetByPath('[columns]');

        if (isset($columns['customerUserName']) && !$this->hasPermissionToViewAllPastCheckouts()) {
            $config->offsetUnsetByPath('[columns][customerUserName]');
            $config->offsetUnsetByPath('[sorters][columns][customerUserName]');
            $config->offsetUnsetByPath('[filters][columns][customerUserName]');
        }
    }

    /**
     * @return bool
     */
    private function hasPermissionToViewAllPastCheckouts()
    {
        return $this->customerUserProvider->isGrantedViewCustomerUser(Checkout::class);
    }
}
