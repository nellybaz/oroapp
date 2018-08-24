<?php

namespace Oro\Bundle\MarketingActivityBundle\Provider;

use Doctrine\ORM\Query\Expr\Join;
use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\EntityBundle\Provider\EntityProvider;
use Oro\Bundle\EntityBundle\Provider\VirtualRelationProviderInterface;
use Oro\Bundle\MarketingActivityBundle\Entity\MarketingActivity;

class MarketingActivityVirtualRelationProvider implements VirtualRelationProviderInterface
{
    const RELATION_NAME = 'marketingActivity';

    /**
     * @var DoctrineHelper
     */
    protected $doctrineHelper;

    /**
     * @var EntityProvider
     */
    protected $entityProvider;

    /**
     * @var array|null
     */
    protected $marketingActivityByEntity;

    /**
     * @param DoctrineHelper $doctrineHelper
     * @param EntityProvider $entityProvider
     */
    public function __construct(DoctrineHelper $doctrineHelper, EntityProvider $entityProvider)
    {
        $this->doctrineHelper = $doctrineHelper;
        $this->entityProvider = $entityProvider;
    }

    /**
     * {@inheritdoc}
     */
    public function isVirtualRelation($className, $fieldName)
    {
        return $this->hasMarketingActivity($className) && $fieldName === self::RELATION_NAME;
    }

    /**
     * {@inheritdoc}
     */
    public function getVirtualRelationQuery($className, $fieldName)
    {
        $relations = $this->getVirtualRelations($className);
        if (array_key_exists($fieldName, $relations)) {
            return $relations[$fieldName]['query'];
        }

        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getVirtualRelations($className)
    {
        if ($this->hasMarketingActivity($className)) {
            return [self::RELATION_NAME => $this->getRelationDefinition($className)];
        }

        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getTargetJoinAlias($className, $fieldName, $selectFieldName = null)
    {
        return self::RELATION_NAME;
    }

    /**
     * Check whether marketing activities are enabled for the given class name
     *
     * @param string $className
     * @return bool
     */
    public function hasMarketingActivity($className)
    {
        if (null === $this->marketingActivityByEntity) {
            $this->marketingActivityByEntity = [];

            $entities = $this->entityProvider->getEntities();
            foreach ($entities as $entity) {
                $this->marketingActivityByEntity[$entity['name']] = true;
            }
        }

        return !empty($this->marketingActivityByEntity[$className]);
    }

    /**
     * Returns virtual relation definition
     *
     * @param string $className
     * @return array
     */
    public function getRelationDefinition($className)
    {
        return [
            'label' => 'oro.marketingactivity.entity_label',
            'relation_type' => 'oneToMany',
            'related_entity_name' => MarketingActivity::class,
            'query' => [
                'join' => [
                    'left' => [
                        [
                            'join' => MarketingActivity::class,
                            'alias' => self::RELATION_NAME,
                            'conditionType' => Join::WITH,
                            'condition' => self::RELATION_NAME . ".entityClass = '{$className}'"
                                . ' AND ' .  self::RELATION_NAME . '.entityId = entity.id'
                        ]
                    ]
                ]
            ]
        ];
    }
}
