<?php

namespace Oro\Bundle\DataGridBundle\Extension\Board\Processor;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\Query\Parameter;
use Doctrine\ORM\QueryBuilder;

use Oro\Component\DoctrineUtils\ORM\QueryBuilderUtil;
use Oro\Component\DoctrineUtils\ORM\UnionQueryBuilder;
use Oro\Bundle\DataGridBundle\Datasource\DatasourceInterface;
use Oro\Bundle\DataGridBundle\Datagrid\Common\DatagridConfiguration;
use Oro\Bundle\DataGridBundle\Datasource\Orm\OrmDatasource;
use Oro\Bundle\DataGridBundle\Extension\Board\Configuration;
use Oro\Bundle\DataGridBundle\Tools\ChoiceFieldHelper;
use Oro\Bundle\EntityBundle\ORM\EntityClassResolver;

class DefaultProcessor implements BoardProcessorInterface
{
    const NAME = 'default';

    /** @var EntityManager */
    protected $em;

    /** @var EntityClassResolver */
    protected $entityClassResolver;

    /** @var ChoiceFieldHelper */
    protected $choiceHelper;

    /**
     * @param EntityManager $em
     * @param EntityClassResolver $entityClassResolver
     * @param ChoiceFieldHelper $choiceHelper
     */
    public function __construct(
        EntityManager $em,
        EntityClassResolver $entityClassResolver,
        ChoiceFieldHelper $choiceHelper
    ) {
        $this->em = $em;
        $this->entityClassResolver = $entityClassResolver;
        $this->choiceHelper = $choiceHelper;
    }

    /**
     * @inheritdoc
     */
    public function getBoardOptions($boardConfig, DatagridConfiguration $datagridConfig)
    {
        $entityName = $datagridConfig->getOrmQuery()->getRootEntity($this->entityClassResolver, true);
        $property = $boardConfig[Configuration::GROUP_KEY][Configuration::GROUP_PROPERTY_KEY];
        $metadata = $this->em->getClassMetadata($entityName);
        $result = [];

        if ($metadata->hasAssociation($property)) {
            $mapping = $metadata->getAssociationMapping($property);
            if ($mapping['type'] === ClassMetadata::MANY_TO_ONE) {
                $targetEntity = $metadata->getAssociationTargetClass($property);
                $targetEntityMetadata = $this->em->getClassMetadata($targetEntity);
                $labelField = $this->getLabelField($property, $boardConfig, $targetEntityMetadata);
                $keyField = $targetEntityMetadata->getSingleIdentifierFieldName();
                $orderBy = isset($boardConfig[Configuration::GROUP_KEY][Configuration::GROUP_PROPERTY_ORDER_BY]) ?
                    $boardConfig[Configuration::GROUP_KEY][Configuration::GROUP_PROPERTY_ORDER_BY] : null;
                $result = $this->choiceHelper->getChoices(
                    $targetEntity,
                    $keyField,
                    $labelField,
                    $orderBy
                );
                $defaultOption = $this->getDefaultColumn($boardConfig, $result);
                $result = $this->prepareOptions($result, $defaultOption);
            }
        }

        return $result;
    }

    /**
     * @inheritdoc
     */
    public function processDatasource(
        DatasourceInterface $datasource,
        $boardData,
        DatagridConfiguration $datagridConfig
    ) {
        if ($datasource instanceof OrmDatasource) {
            /**
             * For each column option we use a separate query to select entity ids to show in the column
             * These queries are joined into one query with UNION ALL
             * Result entity ids are then passed to the main datagrid query,
             * all other where statements and offset/limit are removed for the main query.
             */
            $qb = $datasource->getQueryBuilder();
            $rootAlias = $datagridConfig->getOrmQuery()->getRootAlias();
            $rootEntity = $datagridConfig->getOrmQuery()->getRootEntity($this->entityClassResolver, true);
            $metaData = $this->em->getClassMetadata($rootEntity);
            $idKeyField = $metaData->getSingleIdentifierFieldName();
            $idExpr = sprintf('%s.%s', $rootAlias, $idKeyField);

            $unionQb = new UnionQueryBuilder($this->em, true, 'ids');
            $unionQb->addSelect('id', 'id', Type::INTEGER);
            foreach ($boardData['board_options'] as $optionIds) {
                /** @var QueryBuilder $queryClone */
                $qbClone = clone $qb;
                $this->prepareWhereExpression($qbClone, $boardData['property'], $optionIds);
                $unionQb->addSubQuery($qbClone->getQuery());
            }
            $ids = $unionQb->getQuery()->getArrayResult();
            $ids = array_column($ids, 'id');

            $qb->resetDQLPart('where');
            $qb->setMaxResults(null);
            $qb->setFirstResult(null);
            $qb->where(sprintf('%s IN (:ids)', $idExpr));
            $qb->setParameters(
                new ArrayCollection(
                    [
                        new Parameter('ids', $ids)
                    ]
                )
            );
        }
    }

    /**
     * @inheritdoc
     */
    public function processPaginationDatasource(
        DatasourceInterface $datasource,
        $boardData,
        DatagridConfiguration $datagridConfig
    ) {
        if ($datasource instanceof OrmDatasource) {
            $qb = $datasource->getQueryBuilder();
            $optionIds = $boardData['column_options'];
            $property = $boardData['property'];
            $this->prepareWhereExpression($qb, $property, $optionIds);
        }
    }

    /**
     * @param QueryBuilder $qb
     * @param string $property
     * @param array $optionIds
     */
    protected function prepareWhereExpression($qb, $property, $optionIds)
    {
        $propertyExpr = QueryBuilderUtil::getSelectExprByAlias($qb, $property);
        $expressions = [];
        foreach ($optionIds as $optionId) {
            if ($optionId === null) {
                $expressions[] = $qb->expr()->isNull($propertyExpr);
            } else {
                $expressions[] = $qb->expr()->eq($propertyExpr, ':propertyId');
                $qb->setParameter('propertyId', $optionId);
            }
            $orX = $qb->expr()->orX();
            $orX->addMultiple($expressions);
        }
        if ($expressions) {
            $qb->andWhere($orX);
        }
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return static::NAME;
    }

    /**
     * @param array $options
     * @param string $default
     * @return array
     */
    protected function prepareOptions($options, $default)
    {
        $result = [];
        foreach ($options as $id => $label) {
            $ids = [$id];
            if ($id === $default) {
                $ids[] = null; //entities with empty values go to the default column
            }
            $result[] = [
                'ids' => $ids,
                'label' => $label
            ];
        }

        return $result;
    }


    /**
     * Get default column to use for entities without any property value
     * If no default column specified in config, use the first column
     *
     * @param array $boardConfig
     * @param array $options
     * @return string
     */
    protected function getDefaultColumn($boardConfig, $options)
    {
        $default = null;
        if (isset($boardConfig[Configuration::DEFAULT_COLUMN_KEY])) {
            $default = $boardConfig[Configuration::DEFAULT_COLUMN_KEY];
        }
        $ids = array_keys($options);
        if (!in_array($default, $ids, true)) {
            $default = reset($ids);
        }

        return $default;
    }

    /**
     * @param $columnName
     * @param array $config
     * @param $targetEntityMetadata
     *
     * @return string
     *
     * @throws \Exception
     */
    protected function getLabelField($columnName, $config, $targetEntityMetadata)
    {
        if (isset($config[Configuration::GROUP_KEY][Configuration::GROUP_PROPERTY_VALUE_KEY])) {
            $labelField = $config[Configuration::GROUP_KEY][Configuration::GROUP_PROPERTY_VALUE_KEY];
        } else {
            $labelField = $this->choiceHelper->guessLabelField($targetEntityMetadata, $columnName);
        }

        return $labelField;
    }
}
