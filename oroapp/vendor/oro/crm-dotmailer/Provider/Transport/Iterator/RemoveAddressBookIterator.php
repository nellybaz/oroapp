<?php

namespace Oro\Bundle\DotmailerBundle\Provider\Transport\Iterator;

use Doctrine\Common\Persistence\ManagerRegistry;

use Oro\Bundle\IntegrationBundle\Entity\Channel;
use Oro\Bundle\DotmailerBundle\Entity\AddressBook;

class RemoveAddressBookIterator extends AbstractIterator
{
    /**
     * @var ManagerRegistry
     */
    protected $registry;

    /**
     * @var array Array of address book origin Ids
     */
    protected $keepAddressBooks;

    /**
     * @var Channel
     */
    protected $channel;

    /**
     * @param ManagerRegistry $registry
     * @param Channel         $channel
     * @param array           $keepAddressBooks
     */
    public function __construct(ManagerRegistry $registry, Channel $channel, array $keepAddressBooks)
    {
        $this->registry = $registry;
        $this->channel = $channel;
        $this->keepAddressBooks = $keepAddressBooks;
    }

    /**
     * {@inheritdoc}
     */
    protected function getItems($take, $skip)
    {
        $addressBookForRemoveQB = $this->registry
            ->getRepository('OroDotmailerBundle:AddressBook')
            ->getAddressBooksForRemoveQB($this->channel, $this->keepAddressBooks)
            ->setFirstResult($skip)
            ->setMaxResults($take);

        return $addressBookForRemoveQB
            ->getQuery()
            ->execute();
    }
}
