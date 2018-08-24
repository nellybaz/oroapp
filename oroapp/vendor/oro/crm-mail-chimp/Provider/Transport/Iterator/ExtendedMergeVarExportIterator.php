<?php

namespace Oro\Bundle\MailChimpBundle\Provider\Transport\Iterator;

use Oro\Bundle\BatchBundle\ORM\Query\BufferedIdentityQueryResultIterator;
use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\MailChimpBundle\Entity\ExtendedMergeVar;
use Oro\Bundle\MailChimpBundle\ImportExport\Reader\SubordinateReaderInterface;

class ExtendedMergeVarExportIterator extends AbstractSubordinateIterator implements SubordinateReaderInterface
{
    /**
     * @var string
     */
    protected $extendedMergeVarClassName;

    /**
     * @var DoctrineHelper
     */
    protected $doctrineHelper;

    /**
     * @param \Iterator $mainIterator
     * @param DoctrineHelper $doctrineHelper
     * @param string $extendedMergeVarClassName
     */
    public function __construct(
        \Iterator $mainIterator,
        DoctrineHelper $doctrineHelper,
        $extendedMergeVarClassName
    ) {
        parent::__construct($mainIterator);

        if (!is_string($extendedMergeVarClassName) || empty($extendedMergeVarClassName)) {
            throw new \InvalidArgumentException('ExtendedMergeVar class must be provided.');
        }

        $this->doctrineHelper = $doctrineHelper;
        $this->extendedMergeVarClassName = $extendedMergeVarClassName;
    }

    /**
     * {@inheritdoc}
     */
    public function writeRequired()
    {
        if (!$this->subordinateIterator) {
            return false;
        }

        return !$this->subordinateIterator->valid();
    }

    /**
     * {@inheritdoc}
     */
    protected function createSubordinateIterator($staticSegment)
    {
        $qb = $this->doctrineHelper
            ->getEntityManager($this->extendedMergeVarClassName)
            ->getRepository($this->extendedMergeVarClassName)
            ->createQueryBuilder('extendedMergeVar');

        $qb
            ->select('extendedMergeVar')
            ->where(
                $qb->expr()->andX(
                    $qb->expr()->eq('extendedMergeVar.staticSegment', ':staticSegment'),
                    $qb->expr()->notIn('extendedMergeVar.state', ':states')
                )
            )
            ->setParameter('staticSegment', $staticSegment)
            ->setParameter('states', [ExtendedMergeVar::STATE_SYNCED, ExtendedMergeVar::STATE_DROPPED]);

        return new BufferedIdentityQueryResultIterator($qb);
    }
}
