<?php

namespace Oro\Bundle\MailChimpBundle\ImportExport\Reader;

use Doctrine\ORM\Query\Expr\Join;

use Oro\Bundle\BatchBundle\Item\Support\ClosableInterface;
use Oro\Bundle\BatchBundle\ORM\Query\BufferedIdentityQueryResultIterator;
use Oro\Bundle\ImportExportBundle\Context\ContextInterface;
use Oro\Bundle\IntegrationBundle\Entity\Channel;
use Oro\Bundle\IntegrationBundle\Exception\InvalidConfigurationException;
use Oro\Bundle\MailChimpBundle\Provider\Transport\Iterator\MemberSyncIterator;

class StaticSegmentReader extends AbstractIteratorBasedReader implements ClosableInterface
{
    /**
     * @var string
     */
    protected $marketingListClassName;

    /**
     * @var string
     */
    protected $staticSegmentClassName;

    /**
     * @var bool
     */
    private $isSelfCreatedIterator = false;

    /**
     * @param string $marketingListClassName
     */
    public function setMarketingListClassName($marketingListClassName)
    {
        $this->marketingListClassName = $marketingListClassName;
    }

    /**
     * @param string $staticSegmentClassName
     */
    public function setStaticSegmentClassName($staticSegmentClassName)
    {
        $this->staticSegmentClassName = $staticSegmentClassName;
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        // if the iterator is self crated - clear it to avoid usage the iterator with wrong context data
        if ($this->isSelfCreatedIterator && $this->getSourceIterator()) {
            $this->setSourceIterator();
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function initializeFromContext(ContextInterface $context)
    {
        parent::initializeFromContext($context);

        if (!$this->marketingListClassName) {
            throw new InvalidConfigurationException('MarketingList class name must be provided');
        }

        if (!$this->staticSegmentClassName) {
            throw new InvalidConfigurationException('StaticSegment class name must be provided');
        }

        /** @var Channel $channel */
        $channel = $this->doctrineHelper->getEntityReference(
            $this->channelClassName,
            $context->getOption('channel')
        );

        $iterator = $this->getSourceIterator();
        if ($iterator) {
            /** @var MemberSyncIterator $iterator */
            $iterator->setMainIterator(
                $this->getStaticSegmentIterator($channel, $context->getOption('segments'))
            );

            $this->setSourceIterator($iterator);
        } else {
            $this->setSourceIterator($this->getStaticSegmentIterator($channel, $context->getOption('segments')));
            // set isSelfCreatedIterator to true cause this iterator was created in reader instance
            // and it depends on context data
            $this->isSelfCreatedIterator = true;
        }
    }

    /**
     * @param Channel    $channel
     * @param array|null $segments
     *
     * @return \Iterator
     */
    protected function getStaticSegmentIterator(Channel $channel, array $segments = null)
    {
        $qb = $this->doctrineHelper
            ->getEntityManager($this->staticSegmentClassName)
            ->getRepository($this->staticSegmentClassName)
            ->createQueryBuilder('staticSegment');

        $qb
            ->join($this->marketingListClassName, 'ml', Join::WITH, 'staticSegment.marketingList = ml.id')
            ->join('staticSegment.subscribersList', 'subscribersList');

        $qb
            ->andWhere($qb->expr()->eq('staticSegment.channel', ':channel'))
            ->setParameter('channel', $channel);

        if ($segments) {
            $qb
                ->andWhere($qb->expr()->in('staticSegment.id', ':segments'))
                ->setParameter('segments', $segments);
        }

        return new BufferedIdentityQueryResultIterator($qb);
    }
}
