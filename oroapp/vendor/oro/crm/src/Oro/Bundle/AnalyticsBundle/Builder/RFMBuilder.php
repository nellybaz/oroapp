<?php

namespace Oro\Bundle\AnalyticsBundle\Builder;

use Doctrine\Common\Collections\Criteria;

use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\BatchBundle\ORM\Query\BufferedIdentityQueryResultIterator;
use Oro\Bundle\AnalyticsBundle\Model\RFMAwareInterface;
use Oro\Bundle\ChannelBundle\Entity\Channel;
use Oro\Bundle\AnalyticsBundle\Entity\RFMMetricCategory;

class RFMBuilder implements AnalyticsBuilderInterface
{
    const BATCH_SIZE = 200;

    /**
     * @var DoctrineHelper
     */
    protected $doctrineHelper;

    /**
     * @var RFMProviderInterface[]
     */
    protected $providers = [];

    /**
     * @var array categories by channel
     */
    protected $categories = [];

    /**
     * @param DoctrineHelper $doctrineHelper
     */
    public function __construct(DoctrineHelper $doctrineHelper)
    {
        $this->doctrineHelper = $doctrineHelper;
    }

    /**
     * @param RFMProviderInterface $provider
     */
    public function addProvider(RFMProviderInterface $provider)
    {
        $type = $provider->getType();

        if (!in_array($type, RFMMetricCategory::$types, true)) {
            throw new \InvalidArgumentException(
                sprintf('Expected one of "%s" type, "%s" given', implode(',', RFMMetricCategory::$types), $type)
            );
        }

        $this->providers[] = $provider;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(Channel $channel)
    {
        return is_a($channel->getCustomerIdentity(), 'Oro\Bundle\AnalyticsBundle\Model\RFMAwareInterface', true);
    }

    /**
     * {@inheritdoc}
     */
    public function build(Channel $channel, array $ids = [])
    {
        $data = $channel->getData();
        if (empty($data[RFMAwareInterface::RFM_STATE_KEY])
            || !filter_var($data[RFMAwareInterface::RFM_STATE_KEY], FILTER_VALIDATE_BOOLEAN)
        ) {
            return;
        }

        $iterator = $this->getEntityIdsByChannel($channel, $ids);

        $values = [];
        $count = 0;
        foreach ($iterator as $value) {
            $values[] = $value;
            $count++;
            if ($count % self::BATCH_SIZE === 0) {
                $this->processBatch($channel, $values);
                $values = [];
            }
        }
        $this->processBatch($channel, $values);
    }

    /**
     * @param Channel $channel
     * @param array $values
     */
    protected function processBatch(Channel $channel, array $values)
    {
        $toUpdate = [];
        foreach ($this->providers as $provider) {
            if (!$provider->supports($channel)) {
                continue;
            }
            $providerValues = $provider->getValues($channel, array_map(function ($value) {
                return $value['id'];
            }, $values));

            $type = $provider->getType();

            foreach ($values as $value) {
                $metric = isset($providerValues[$value['id']]) ? $providerValues[$value['id']] : null;
                $index = $this->getIndex($channel, $type, $metric);
                if ($index !== $value[$type]) {
                    $toUpdate[$value['id']][$type] = $index;
                }
            }
        }
        $this->updateValues($channel, $toUpdate);
    }

    /**
     * @param Channel $channel
     * @param array $values
     * @throws \Doctrine\DBAL\ConnectionException
     * @throws \Exception
     */
    protected function updateValues(Channel $channel, array $values)
    {
        if (count($values) === 0) {
            return;
        }
        $entityFQCN = $channel->getCustomerIdentity();

        $em = $this->doctrineHelper->getEntityManager($entityFQCN);
        $idField = $this->doctrineHelper->getSingleEntityIdentifierFieldName($entityFQCN);
        $connection = $em->getConnection();
        $connection->beginTransaction();
        try {
            foreach ($values as $id => $value) {
                $qb = $em->createQueryBuilder();
                $qb->update($entityFQCN, 'e');
                foreach ($value as $metricName => $metricValue) {
                    $qb->set('e.' . $metricName, ':' . $metricName);
                    $qb->setParameter($metricName, $metricValue);
                }
                $qb->where($qb->expr()->eq('e.' . $idField, ':id'));
                $qb->setParameter('id', $id);
                $qb->getQuery()->execute();
            }
            $connection->commit();
        } catch (\Exception $e) {
            $connection->rollBack();
            throw $e;
        }
    }

    /**
     * @param Channel $channel
     * @param array $ids
     * @return \Iterator
     */
    protected function getEntityIdsByChannel(Channel $channel, array $ids = [])
    {
        $entityFQCN = $channel->getCustomerIdentity();

        $qb = $this->doctrineHelper->getEntityRepository($entityFQCN)->createQueryBuilder('e');

        $metadata = $this->doctrineHelper->getEntityMetadataForClass($entityFQCN);
        $metrics = [];
        foreach ($this->providers as $provider) {
            if ($provider->supports($channel) && $metadata->hasField($provider->getType())) {
                $metrics[] = $provider->getType();
            }
        }

        if (count($metrics) === 0) {
            return new \ArrayIterator();
        }

        $idField = sprintf('e.%s', $this->doctrineHelper->getSingleEntityIdentifierFieldName($entityFQCN));
        $qb->select(preg_filter('/^/', 'e.', $metrics))
            ->addSelect($idField . ' as id')
            ->where('e.dataChannel = :dataChannel')
            ->orderBy($qb->expr()->asc($idField))
            ->setParameter('dataChannel', $channel);

        if (count($ids) !== 0) {
            $qb->andWhere($qb->expr()->in($idField, ':ids'))
                ->setParameter('ids', $ids);
        }

        return (new BufferedIdentityQueryResultIterator($qb))->setBufferSize(self::BATCH_SIZE);
    }

    /**
     * @param Channel $channel
     * @param string $type
     * @param int $value
     *
     * @return int|null
     */
    protected function getIndex(Channel $channel, $type, $value)
    {
        $channelId = $this->doctrineHelper->getSingleEntityIdentifier($channel);
        if (!$channelId) {
            return null;
        }

        $categories = $this->getCategories($channelId, $type);
        if (!$categories) {
            return null;
        }

        // null value must be ranked with worse index
        if ($value === null) {
            return array_pop($categories)->getCategoryIndex();
        }

        // Search for RFM category that match current value
        foreach ($categories as $category) {
            $maxValue = $category->getMaxValue();
            if ($maxValue && $value > $maxValue) {
                continue;
            }

            $minValue = $category->getMinValue();
            if ($minValue !== null && $value <= $minValue) {
                continue;
            }

            return $category->getCategoryIndex();
        }

        return null;
    }

    /**
     * @param int $channelId
     * @param string $type
     *
     * @return RFMMetricCategory[]
     */
    protected function getCategories($channelId, $type)
    {
        if (array_key_exists($channelId, $this->categories)
            && array_key_exists($type, $this->categories[$channelId])
        ) {
            return $this->categories[$channelId][$type];
        }

        $categories = $this->doctrineHelper
            ->getEntityRepository('OroAnalyticsBundle:RFMMetricCategory')
            ->findBy(['channel' => $channelId, 'categoryType' => $type], ['categoryIndex' => Criteria::ASC]);

        $this->categories[$channelId][$type] = $categories;

        return $categories;
    }
}
