<?php

namespace Oro\Bridge\CustomerAccount\Manager\Strategy;

use Oro\Bridge\CustomerAccount\Manager\AccountBuilder;
use Oro\Bridge\CustomerAccount\Manager\LifetimeProcessor;
use Oro\Bundle\SalesBundle\Entity\Manager\AccountCustomerManager;
use Oro\Bundle\CustomerBundle\Entity\Customer as Customer;

abstract class AssignStrategyAbstract implements AssignStrategyInterface
{
    /**
     * @var AccountBuilder
     */
    protected $builder;

    /**
     * @var AccountCustomerManager
     */
    protected $accountCustomerManager;

    /**
     * @var LifetimeProcessor
     */
    protected $lifetimeProcessor;

    /**
     * @param AccountBuilder         $builder
     * @param AccountCustomerManager $accountCustomerManager
     * @param LifetimeProcessor $lifetimeProcessor
     */
    public function __construct(
        AccountBuilder $builder,
        AccountCustomerManager $accountCustomerManager,
        LifetimeProcessor $lifetimeProcessor
    ) {
        $this->builder = $builder;
        $this->accountCustomerManager = $accountCustomerManager;
        $this->lifetimeProcessor = $lifetimeProcessor;
    }

    /**
     * Get root customer
     *
     * @param Customer $customer
     *
     * @return Customer
     */
    protected function getRootCustomer(Customer $customer)
    {
        if ($customer->getParent()) {
            $customer = $this->getRootCustomer($customer->getParent());
        }

        return $customer;
    }

    /**
     * @param Customer $customer
     */
    protected function recalculateLifeTimeValue(Customer $customer)
    {
        $newLifetimeValue = $this->lifetimeProcessor->calculateLifetimeValue($customer);
        $customer->setLifetime($newLifetimeValue);
    }
}
