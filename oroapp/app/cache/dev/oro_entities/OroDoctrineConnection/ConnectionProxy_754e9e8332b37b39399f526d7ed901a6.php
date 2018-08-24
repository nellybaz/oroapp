<?php
namespace OroDoctrineConnection;

class ConnectionProxy_754e9e8332b37b39399f526d7ed901a6 extends \Doctrine\DBAL\Connection implements \Oro\Component\DoctrineUtils\DBAL\TransactionWatcherAwareInterface
{
    private $transactionWatcher;

    public function setTransactionWatcher(\Oro\Component\DoctrineUtils\DBAL\TransactionWatcherInterface $transactionWatcher = null)
    {
        $this->transactionWatcher = $transactionWatcher;
    }
    public function beginTransaction()
    {
        parent::beginTransaction();
        // the nesting level equal to 1 means that the root transaction is started,
        // for nested transactions the nesting level will be greater that 1
        if (null !== $this->transactionWatcher && $this->getTransactionNestingLevel() === 1) {
            $this->transactionWatcher->onTransactionStarted();
        }
    }
    public function commit()
    {
        parent::commit();
        // the nesting level equal to 0 means that the root transaction is commited,
        // for nested transactions the nesting level will be greater that 0
        if (null !== $this->transactionWatcher && $this->getTransactionNestingLevel() === 0) {
            $this->transactionWatcher->onTransactionCommited();
        }
    }
    public function rollBack()
    {
        parent::rollBack();
        // the nesting level equal to 0 means that the root transaction is rolled back,
        // for nested transactions the nesting level will be greater that 0
        if (null !== $this->transactionWatcher && $this->getTransactionNestingLevel() === 0) {
            $this->transactionWatcher->onTransactionRolledback();
        }
    }
}