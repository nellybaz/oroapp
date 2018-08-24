<?php

namespace Oro\Bundle\MagentoBundle\Command;

use Doctrine\ORM\EntityManager;

use Oro\Bundle\ChannelBundle\Command\RecalculateLifetimeCommand as AbstractRecalculateLifetimeCommand;
use Oro\Bundle\MagentoBundle\Entity\Customer;
use Oro\Bundle\MagentoBundle\Entity\Repository\CustomerRepository;
use Oro\Bundle\MagentoBundle\Provider\MagentoChannelType;

class RecalculateLifetimeCommand extends AbstractRecalculateLifetimeCommand
{
    /**
     * {@inheritdoc}
     */
    public function configure()
    {
        parent::configure();

        $this
            ->setName('oro:magento:lifetime:recalculate')
            ->setDescription('Perform re-calculation of lifetime values for Magento channel.');
    }

    /**
     * {@inheritdoc}
     */
    protected function getChannelType()
    {
        /**
         * @todo Remove dependency on exact magento channel type in CRM-8154
         */
        return MagentoChannelType::TYPE;
    }

    /**
     * @param EntityManager $em
     * @param Customer      $customer
     *
     * @return float
     */
    protected function calculateCustomerLifetime(EntityManager $em, $customer)
    {
        /** @var CustomerRepository $customerRepo */
        $customerRepo  = $em->getRepository('OroMagentoBundle:Customer');
        $lifetimeValue = $customerRepo->calculateLifetimeValue($customer);

        return $lifetimeValue;
    }
}
