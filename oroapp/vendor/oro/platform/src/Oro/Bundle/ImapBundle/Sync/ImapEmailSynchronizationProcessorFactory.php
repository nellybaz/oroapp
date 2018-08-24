<?php

namespace Oro\Bundle\ImapBundle\Sync;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManager;

use Psr\Log\LoggerAwareTrait;

use Oro\Bundle\EmailBundle\Builder\EmailEntityBuilder;
use Oro\Bundle\EmailBundle\Sync\KnownEmailAddressCheckerInterface;
use Oro\Bundle\ImapBundle\Manager\ImapEmailManager;

class ImapEmailSynchronizationProcessorFactory
{
    use LoggerAwareTrait;

    /** @var ManagerRegistry */
    protected $doctrine;

    /** @var EmailEntityBuilder */
    protected $emailEntityBuilder;

    /** @var ImapEmailRemoveManager */
    protected $removeManager;

    /**
     * @param ManagerRegistry $doctrine
     * @param EmailEntityBuilder $emailEntityBuilder
     * @param ImapEmailRemoveManager $removeManager
     */
    public function __construct(
        ManagerRegistry $doctrine,
        EmailEntityBuilder $emailEntityBuilder,
        ImapEmailRemoveManager $removeManager
    ) {
        $this->doctrine = $doctrine;
        $this->emailEntityBuilder = $emailEntityBuilder;
        $this->removeManager = $removeManager;
    }

    /**
     * Creates new instance of IMAP email synchronization processor
     *
     * @param ImapEmailManager $emailManager
     * @param KnownEmailAddressCheckerInterface $knownEmailAddressChecker
     *
     * @return ImapEmailSynchronizationProcessor
     */
    public function create(
        $emailManager,
        KnownEmailAddressCheckerInterface $knownEmailAddressChecker
    ) {
        $processor = new ImapEmailSynchronizationProcessor(
            $this->getEntityManager(),
            $this->emailEntityBuilder,
            $knownEmailAddressChecker,
            $emailManager,
            $this->removeManager
        );
        $processor->setEmailErrorsLogger($this->logger);

        return $processor;
    }

    /**
     * Returns default entity manager
     *
     * @return EntityManager
     */
    protected function getEntityManager()
    {
        /** @var EntityManager $em */
        $em = $this->doctrine->getManager();
        if (!$em->isOpen()) {
            $this->doctrine->resetManager();
            $em = $this->doctrine->getManager();
        }

        return $em;
    }
}
