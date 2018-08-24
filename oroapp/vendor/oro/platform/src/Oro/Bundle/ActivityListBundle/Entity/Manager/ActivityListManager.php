<?php

namespace Oro\Bundle\ActivityListBundle\Entity\Manager;

use Doctrine\ORM\QueryBuilder;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Util\ClassUtils;

use Oro\Bundle\ActivityBundle\EntityConfig\ActivityScope;
use Oro\Bundle\ActivityListBundle\Entity\ActivityList;
use Oro\Bundle\ActivityListBundle\Entity\Repository\ActivityListRepository;
use Oro\Bundle\ActivityListBundle\Event\ActivityListPreQueryBuildEvent;
use Oro\Bundle\ActivityListBundle\Filter\ActivityListFilterHelper;
use Oro\Bundle\ActivityListBundle\Helper\ActivityInheritanceTargetsHelper;
use Oro\Bundle\ActivityListBundle\Helper\ActivityListAclCriteriaHelper;
use Oro\Bundle\ActivityListBundle\Model\ActivityListGroupProviderInterface;
use Oro\Bundle\ActivityListBundle\Provider\ActivityListChainProvider;
use Oro\Bundle\ActivityListBundle\Tools\ActivityListEntityConfigDumperExtension;
use Oro\Bundle\CommentBundle\Entity\Manager\CommentApiManager;
use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\EmailBundle\Provider\EmailActivityListProvider;
use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\EntityBundle\Provider\EntityNameResolver;
use Oro\Bundle\EntityExtendBundle\Tools\ExtendHelper;
use Oro\Bundle\FeatureToggleBundle\Checker\FeatureToggleableInterface;
use Oro\Bundle\WorkflowBundle\Helper\WorkflowDataHelper;
use Oro\Bundle\UIBundle\Tools\HtmlTagHelper;

/**
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 */
class ActivityListManager
{
    /**
     * During 'getListDataIds' will retrieve more ids due to duplication possibility.
     */
    const ACTIVITY_LIST_PAGE_SIZE_MULTIPLIER = 3;

    /** @var AuthorizationCheckerInterface */
    protected $authorizationChecker;

    /** @var EntityNameResolver */
    protected $entityNameResolver;

    /** @var ConfigManager */
    protected $config;

    /** @var ActivityListChainProvider */
    protected $chainProvider;

    /** @var ActivityListFilterHelper */
    protected $activityListFilterHelper;

    /** @var DoctrineHelper */
    protected $doctrineHelper;

    /** @var ActivityListAclCriteriaHelper */
    protected $activityListAclHelper;

    /** @var ActivityInheritanceTargetsHelper */
    protected $activityInheritanceTargetsHelper;

    /** @var EventDispatcherInterface */
    protected $eventDispatcher;

    /** @var WorkflowDataHelper */
    protected $workflowHelper;

    /** @var HtmlTagHelper */
    protected $htmlTagHelper;

    /**
     * @param AuthorizationCheckerInterface    $authorizationChecker
     * @param EntityNameResolver               $entityNameResolver
     * @param ConfigManager                    $config
     * @param ActivityListChainProvider        $provider
     * @param ActivityListFilterHelper         $activityListFilterHelper
     * @param CommentApiManager                $commentManager
     * @param DoctrineHelper                   $doctrineHelper
     * @param ActivityListAclCriteriaHelper    $aclHelper
     * @param ActivityInheritanceTargetsHelper $activityInheritanceTargetsHelper
     * @param EventDispatcherInterface         $eventDispatcher
     * @param WorkflowDataHelper               $workflowHelper
     * @param HtmlTagHelper                    $htmlTagHelper
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function __construct(
        AuthorizationCheckerInterface $authorizationChecker,
        EntityNameResolver $entityNameResolver,
        ConfigManager $config,
        ActivityListChainProvider $provider,
        ActivityListFilterHelper $activityListFilterHelper,
        CommentApiManager $commentManager,
        DoctrineHelper $doctrineHelper,
        ActivityListAclCriteriaHelper $aclHelper,
        ActivityInheritanceTargetsHelper $activityInheritanceTargetsHelper,
        EventDispatcherInterface $eventDispatcher,
        WorkflowDataHelper $workflowHelper,
        HtmlTagHelper $htmlTagHelper
    ) {
        $this->authorizationChecker = $authorizationChecker;
        $this->entityNameResolver = $entityNameResolver;
        $this->config = $config;
        $this->chainProvider = $provider;
        $this->activityListFilterHelper = $activityListFilterHelper;
        $this->commentManager = $commentManager;
        $this->doctrineHelper = $doctrineHelper;
        $this->activityListAclHelper = $aclHelper;
        $this->activityInheritanceTargetsHelper = $activityInheritanceTargetsHelper;
        $this->eventDispatcher = $eventDispatcher;
        $this->workflowHelper = $workflowHelper;
        $this->htmlTagHelper = $htmlTagHelper;
    }

    /**
     * @return ActivityListRepository
     */
    public function getRepository()
    {
        return $this->doctrineHelper->getEntityRepository(ActivityList::ENTITY_NAME);
    }

    /**
     * @param string  $entityClass
     * @param integer $entityId
     * @param array   $filter
     * @param array   $pageFilter
     *
     * @return array ['data' => [], 'count' => int]
     */
    public function getListData($entityClass, $entityId, $filter, $pageFilter = [])
    {
        $result = [];

        $event = new ActivityListPreQueryBuildEvent($entityClass, $entityId);
        $this->eventDispatcher->dispatch(ActivityListPreQueryBuildEvent::EVENT_NAME, $event);
        $qb = $this->getRepository()->getBaseActivityListQueryBuilder(
            $entityClass,
            $event->getTargetIds()
        );

        $ids = $this->getListDataIds($qb, $entityClass, $entityId, $filter, $pageFilter);
        if (!empty($ids)) {
            $qb = $this->getRepository()->createQueryBuilder('activity')
                ->where($qb->expr()->in('activity.id', ':activitiesIds'))
                ->setParameter('activitiesIds', $ids)
                ->orderBy(
                    'activity.' . $this->config->get('oro_activity_list.sorting_field'),
                    $this->config->get('oro_activity_list.sorting_direction')
                )
                ->setMaxResults($this->config->get('oro_activity_list.per_page'));

            $result = $qb->getQuery()->getResult();
        }

        $viewModels = $this->getEntityViewModels(
            $result,
            [
                'class' => $entityClass,
                'id'    => $entityId,
            ]
        );

        return [
            'count' => count($viewModels),
            'data' => $viewModels
        ];
    }

    /**
     * @param QueryBuilder $qb
     * @param string       $entityClass
     * @param integer      $entityId
     * @param array        $filter
     * @param array        $pageFilter
     *
     * @return array
     */
    protected function getListDataIds(QueryBuilder $qb, $entityClass, $entityId, $filter, $pageFilter)
    {
        $pageSize = $this->config->get('oro_activity_list.per_page');
        $ids = $this->loadListDataIds($qb, $entityClass, $entityId, $filter, $pageFilter, $pageSize);
        $ids = array_unique(array_column($ids, 'id'));
        $ids = array_slice($ids, 0, $pageSize);

        return $ids;
    }

    /**
     * @param QueryBuilder $qb
     * @param string       $entityClass
     * @param integer      $entityId
     * @param array        $filter
     * @param array        $pageFilter
     * @param int          $pageSize
     *
     * @return array
     */
    private function loadListDataIds(QueryBuilder $qb, $entityClass, $entityId, $filter, $pageFilter, $pageSize)
    {
        $orderBy = $this->config->get('oro_activity_list.sorting_field');
        $grouping = $this->config->get('oro_activity_list.grouping');

        $getIdsQb = clone $qb;
        $getIdsQb->setMaxResults($pageSize * self::ACTIVITY_LIST_PAGE_SIZE_MULTIPLIER);
        $getIdsQb->resetDQLParts(['select']);
        $getIdsQb->addSelect('activity.id, activity.' . $orderBy);
        if ($grouping) {
            $getIdsQb->addSelect('activity.relatedActivityClass, activity.relatedActivityId');
        }

        $this->applyPageFilter($getIdsQb, $pageFilter);

        $this->activityListFilterHelper->addFiltersToQuery($getIdsQb, $filter);
        $this->activityListAclHelper->applyAclCriteria($getIdsQb, $this->chainProvider->getProviders());

        $ids = array_merge(
            $getIdsQb->getQuery()->getArrayResult(),
            $this->getListDataIdsForInheritances($getIdsQb, $entityClass, $entityId, $filter, $pageFilter)
        );

        $this->sortListDataIds($ids, $pageFilter, $orderBy);

        $numberOfUnfilteredIds = count($ids);
        if ($grouping) {
            $ids = $this->filterGroupedIds($ids);
        }

        // check if the requested number of items is loaded, and if not, load more items
        $numberOfIds = count($ids);
        if ($numberOfIds > 0 && $numberOfIds < $pageSize && $numberOfUnfilteredIds > $pageSize) {
            $lastRow = $ids[$numberOfIds - 1];
            $offsetDate = $lastRow[$orderBy];
            if (null === $qb->getParameter('offsetDate')) {
                $whereComparison = 'gt';
                if (!$this->isAscendingOrderForListData($pageFilter)) {
                    $whereComparison = 'lt';
                }
                $qb->andWhere($qb->expr()->{$whereComparison}('activity.' . $orderBy, ':offsetDate'));
            }
            $qb->setParameter('offsetDate', $offsetDate);
            $rows = $this->loadListDataIds(
                $qb,
                $entityClass,
                $entityId,
                $filter,
                $pageFilter,
                $pageSize - $numberOfIds
            );
            if (!empty($rows)) {
                $existingIds = array_unique(array_column($ids, 'id'));
                foreach ($rows as $row) {
                    if (!in_array($row['id'], $existingIds)) {
                        $ids[] = $row;
                    }
                }
            }
        }

        return $ids;
    }

    /**
     * @param array $pageFilter
     *
     * @return bool
     */
    private function isAscendingOrderForListData($pageFilter)
    {
        $orderDirection = $this->config->get('oro_activity_list.sorting_direction');

        if (!array_key_exists('action', $pageFilter)) {
            return $orderDirection === 'ASC';
        }

        return
            ($orderDirection === 'ASC' && $pageFilter['action'] === 'next')
            || ($orderDirection === 'DESC' && $pageFilter['action'] === 'prev');
    }

    /**
     * @param array  $ids
     * @param array  $pageFilter
     * @param string $orderBy
     *
     * @return array
     */
    private function sortListDataIds(array $ids, $pageFilter, $orderBy)
    {
        if ($this->isAscendingOrderForListData($pageFilter)) {
            // ASC sorting
            usort($ids, function ($a, $b) use ($orderBy) {
                return $a[$orderBy]->getTimestamp() - $b[$orderBy]->getTimestamp();
            });
        } else {
            // DESC sorting
            usort($ids, function ($a, $b) use ($orderBy) {
                return $b[$orderBy]->getTimestamp() - $a[$orderBy]->getTimestamp();
            });
        }

        return $ids;
    }

    /**
     * @param array $ids
     *
     * @return array
     */
    private function filterGroupedIds(array $ids)
    {
        $emailIds = [];
        foreach ($ids as $item) {
            if ($item['relatedActivityClass'] === 'Oro\Bundle\EmailBundle\Entity\Email') {
                $emailIds[] = $item['relatedActivityId'];
            }
        }
        $emailIds = array_unique($emailIds);
        if (count($emailIds) > 1) {
            $qb = $this->doctrineHelper->getEntityRepository('Oro\Bundle\EmailBundle\Entity\Email')
                ->createQueryBuilder('e')
                ->select('e.id, IDENTITY(e.thread) AS threadId')
                ->where('e.id IN (:ids) AND IDENTITY(e.thread) IS NOT NULL')
                ->setParameter('ids', $emailIds);
            $rows = $qb->getQuery()->getArrayResult();
            $emailThreadMap = [];
            foreach ($rows as $row) {
                $emailThreadMap[$row['id']] = $row['threadId'];
            }
            $filteredIds = [];
            $processedThreads = [];
            foreach ($ids as $item) {
                if ($item['relatedActivityClass'] === 'Oro\Bundle\EmailBundle\Entity\Email') {
                    $emailId = $item['relatedActivityId'];
                    if (isset($emailThreadMap[$emailId])) {
                        $threadId = $emailThreadMap[$emailId];
                        if (in_array($threadId, $processedThreads)) {
                            continue;
                        }
                        $processedThreads[] = $threadId;
                    }
                }
                $filteredIds[] = $item;
            }
            $ids = $filteredIds;
        }

        return $ids;
    }

    /**
     * @param QueryBuilder $qb
     * @param              $pageFilter
     */
    protected function applyPageFilter(QueryBuilder $qb, $pageFilter)
    {
        $orderBy = $this->config->get('oro_activity_list.sorting_field');

        $orderDirection = 'ASC';
        if (!$this->isAscendingOrderForListData($pageFilter)) {
            $orderDirection = 'DESC';
        }

        if (!empty($pageFilter['date']) && !empty($pageFilter['ids'])) {
            $dateFilter = new \DateTime($pageFilter['date'], new \DateTimeZone('UTC'));
            $whereComparison = 'gte';
            if (!$this->isAscendingOrderForListData($pageFilter)) {
                $whereComparison = 'lte';
            }

            $qb->andWhere($qb->expr()->notIn('activity.id', implode(',', $pageFilter['ids'])));
            $qb->andWhere($qb->expr()->{$whereComparison}('activity.' . $orderBy, ':dateFilter'));
            $qb->setParameter(':dateFilter', $dateFilter->format('Y-m-d H:i:s'));
        }

        $qb->orderBy('activity.' . $orderBy, $orderDirection);
    }

    /**
     * @param QueryBuilder $qb
     * @param string       $entityClass
     * @param integer      $entityId
     * @param array        $filter
     * @param array        $pageFilter
     *
     * @return array
     */
    protected function getListDataIdsForInheritances(QueryBuilder $qb, $entityClass, $entityId, $filter, $pageFilter)
    {
        $ids = [];

        // due to performance issue - perform separate data request per each inherited entity
        $inheritanceTargets = $this->activityInheritanceTargetsHelper->getInheritanceTargetsRelations($entityClass);
        foreach ($inheritanceTargets as $key => $inheritanceTarget) {
            $inheritanceQb = clone $qb;
            $inheritanceQb->resetDQLParts(['where', 'orderBy']);
            $inheritanceQb->setParameters([]);
            $inheritanceQb->setParameter(':entityId', $entityId);

            $this->applyPageFilter($inheritanceQb, $pageFilter);

            $this->activityInheritanceTargetsHelper->applyInheritanceActivity(
                $inheritanceQb,
                $inheritanceTarget,
                $key,
                ':entityId',
                false
            );

            $this->activityListFilterHelper->addFiltersToQuery($inheritanceQb, $filter);
            $this->activityListAclHelper->applyAclCriteria($inheritanceQb, $this->chainProvider->getProviders());

            $ids = array_merge($ids, $inheritanceQb->getQuery()->getArrayResult());
        }

        return $ids;
    }

    /**
     * @param QueryBuilder $qb
     * @param string       $entityClass
     * @param int          $entityId
     *
     * @return array
     */
    private function getGroupedActivityListIdsForInheritances(QueryBuilder $qb, $entityClass, $entityId)
    {
        $ids = [];

        // due to performance issue - perform separate data request per each inherited entity
        $inheritanceTargets = $this->activityInheritanceTargetsHelper->getInheritanceTargetsRelations($entityClass);
        foreach ($inheritanceTargets as $key => $inheritanceTarget) {
            $inheritanceQb = clone $qb;
            $inheritanceQb->setParameter(':associatedEntityId', $entityId);
            $this->activityInheritanceTargetsHelper->applyInheritanceActivity(
                $inheritanceQb,
                $inheritanceTarget,
                $key,
                ':associatedEntityId',
                false
            );

            $this->activityListAclHelper->applyAclCriteria($inheritanceQb, $this->chainProvider->getProviders());

            $ids = array_merge($ids, $inheritanceQb->getQuery()->getArrayResult());
        }

        return $ids;
    }

    /**
     * @param integer $activityListItemId
     *
     * @return array|null
     */
    public function getItem($activityListItemId)
    {
        /** @var ActivityList $activityListItem */
        $activityListItem = $this->getRepository()->find($activityListItemId);

        return $activityListItem
            ? $this->getEntityViewModel($activityListItem)
            : null;
    }

    /**
     * @param ActivityList[] $entities
     * @param array          $targetEntityData
     *
     * @return array
     */
    public function getEntityViewModels($entities, $targetEntityData = [])
    {
        $result = [];
        foreach ($entities as $entity) {
            if ($viewModel = $this->getEntityViewModel($entity, $targetEntityData)) {
                $result[] = $viewModel;
            }
        }

        return $result;
    }

    /**
     * @param ActivityList $entity
     * @param []           $targetEntityData
     *
     * @return array|null
     */
    public function getEntityViewModel(ActivityList $entity, $targetEntityData = [])
    {
        $entityProvider = $this->chainProvider->getProviderForEntity($entity->getRelatedActivityClass());

        if ($entityProvider instanceof FeatureToggleableInterface && !$entityProvider->isFeaturesEnabled()) {
            return null;
        }

        $activity       = $this->doctrineHelper->getEntity(
            $entity->getRelatedActivityClass(),
            $entity->getRelatedActivityId()
        );

        $ownerName = '';
        $ownerId   = '';
        $owner     = $entity->getOwner();
        if ($owner) {
            $ownerName = $this->entityNameResolver->getName($owner);
            if ($this->authorizationChecker->isGranted('VIEW', $owner)) {
                $ownerId = $owner->getId();
            }
        }

        $editorName = '';
        $editorId   = '';
        $editor     = $entity->getEditor();
        if ($editor) {
            $editorName = $this->entityNameResolver->getName($editor);
            if ($this->authorizationChecker->isGranted('VIEW', $editor)) {
                $editorId = $editor->getId();
            }
        }

        $relatedActivityEntities = $this->getRelatedActivityEntities($entity, $entityProvider);
        $numberOfComments        = $this->commentManager->getCommentCount(
            $entity->getRelatedActivityClass(),
            $relatedActivityEntities
        );

        $data = $entityProvider->getData($entity);

        $isHead = false;
        if (isset($data['isHead'])) {
            $isHead = $data['isHead'];
        }

        $workflowsData = $this->workflowHelper->getEntityWorkflowsData($activity);

        $result = [
            'id'                   => $entity->getId(),
            'owner'                => $ownerName,
            'owner_id'             => $ownerId,
            'editor'               => $editorName,
            'editor_id'            => $editorId,
            'verb'                 => $entity->getVerb(),
            'subject'              => $this->htmlTagHelper->purify($entity->getSubject()),
            'description'          => $this->htmlTagHelper->purify($entity->getDescription()),
            'data'                 => $data,
            'relatedActivityClass' => $entity->getRelatedActivityClass(),
            'relatedActivityId'    => $entity->getRelatedActivityId(),
            'createdAt'            => $entity->getCreatedAt()->format('c'),
            'updatedAt'            => $entity->getUpdatedAt()->format('c'),
            'editable'             => $this->authorizationChecker->isGranted('EDIT', $activity),
            'removable'            => $this->authorizationChecker->isGranted('DELETE', $activity),
            'commentCount'         => $numberOfComments,
            'commentable'          => $this->commentManager->isCommentable(),
            'workflowsData'        => $workflowsData,
            'targetEntityData'     => $targetEntityData,
            'is_head'              => $isHead,
        ];

        return $result;
    }

    /**
     * Get Grouped Entities by Activity Entity
     *
     * @param object $entity
     * @param string $targetActivityClass
     * @param int    $targetActivityId
     * @param string $widgetId
     * @param array  $filterMetadata
     *
     * @return array
     */
    public function getGroupedEntities($entity, $targetActivityClass, $targetActivityId, $widgetId, $filterMetadata)
    {
        $activityLists = [];
        $ids = $this->getGroupedActivityListIds($entity, $targetActivityClass, $targetActivityId);
        if (!empty($ids)) {
            $qb = $this->getRepository()->createQueryBuilder('activity');
            $qb = $qb
                ->where($qb->expr()->in('activity.id', ':activitiesIds'))
                ->setParameter('activitiesIds', $ids)
                ->orderBy(
                    'activity.' . $this->config->get('oro_activity_list.sorting_field'),
                    $this->config->get('oro_activity_list.sorting_direction')
                );
            $activityLists = $qb->getQuery()->getResult();
        }

        $results = [];
        if (!empty($activityLists)) {
            $activityResults = $this->getEntityViewModels($activityLists, [
                'class' => $targetActivityClass,
                'id'    => $targetActivityId,
            ]);

            $results = [
                'entityId'            => $entity->getId(),
                'ignoreHead'          => true,
                'widgetId'            => $widgetId,
                'activityListData'    => json_encode(['count' => count($activityResults), 'data' => $activityResults]),
                'commentOptions'      => [
                    'listTemplate' => '#template-activity-item-comment',
                    'canCreate'    => true,
                ],
                'activityListOptions' => [
                    'configuration'            => $this->chainProvider->getActivityListOption($this->config),
                    'template'                 => '#template-activity-list',
                    'itemTemplate'             => '#template-activity-item',
                    'urls'                     => [],
                    'loadingContainerSelector' => '.activity-list.sub-list',
                    'dateRangeFilterMetadata'  => $filterMetadata,
                    'routes'                   => [],
                    'pager'                    => false,
                ],
            ];
        }

        return $results;
    }

    /**
     * @param object $entity
     * @param string $targetActivityClass
     * @param int    $targetActivityId
     *
     * @return ActivityList[]
     */
    public function getGroupedActivityLists($entity, $targetActivityClass, $targetActivityId)
    {
        $results = [];
        /** @var ActivityListGroupProviderInterface $entityProvider */
        $entityProvider = $this->chainProvider->getProviderForEntity(ClassUtils::getRealClass($entity));
        if ($this->isGroupingApplicable($entityProvider)) {
            if ($entityProvider instanceof EmailActivityListProvider) {
                $results = $entityProvider->getGroupedEntitiesNewTmp(
                    $entity,
                    $targetActivityClass,
                    $targetActivityId
                );
            } else {
                $results = $entityProvider->getGroupedEntities($entity);
            }
        }

        return $results;
    }

    /**
     * @param string $entityClass
     * @param int    $entityId
     *
     * @return QueryBuilder
     * @deprecated since 2.0. See getListData
     */
    protected function getBaseQB($entityClass, $entityId)
    {
        $event = new ActivityListPreQueryBuildEvent($entityClass, $entityId);
        $this->eventDispatcher->dispatch(ActivityListPreQueryBuildEvent::EVENT_NAME, $event);
        $entityIds = $event->getTargetIds();

        return $this->getRepository()->getBaseActivityListQueryBuilder(
            $entityClass,
            $entityIds,
            $this->config->get('oro_activity_list.grouping')
        );
    }

    /**
     * @param object $entityProvider
     *
     * @return bool
     */
    protected function isGroupingApplicable($entityProvider)
    {
        return $entityProvider instanceof ActivityListGroupProviderInterface;
    }

    /**
     * @param ActivityList $entity
     * @param object       $entityProvider
     *
     * @return bool
     * @deprecated since 2.0. See getEntityViewModel
     */
    protected function getHeadStatus(ActivityList $entity, $entityProvider)
    {
        return $this->isGroupingApplicable($entityProvider) && $entity->isHead();
    }

    /**
     * @param object[] $entities
     * @param object   $rootEntity
     * @param string   $targetActivityClass
     * @param int      $targetActivityId
     *
     * @return ActivityList[]
     */
    public function filterGroupedEntitiesByActivityLists(
        array $entities,
        $rootEntity,
        $targetActivityClass,
        $targetActivityId
    ) {
        $entityClass = ClassUtils::getRealClass($rootEntity);

        $activityLists = [];
        $ids = $this->getGroupedActivityListIds($rootEntity, $targetActivityClass, $targetActivityId);
        if (!empty($ids)) {
            $qb = $this->getRepository()->createQueryBuilder('activity');
            $qb = $qb
                ->where($qb->expr()->in('activity.id', ':activitiesIds'))
                ->setParameter('activitiesIds', $ids);

            $activityLists = $qb->getQuery()->getResult();
        }

        $entityIdsFromActivityLists = [];
        foreach ($activityLists as $activityList) {
            if ($activityList->getRelatedActivityClass() === $entityClass) {
                $entityIdsFromActivityLists[] = $activityList->getRelatedActivityId();
            }
        }
        $filteredEntities = [];
        foreach ($entities as $entity) {
            if (in_array($this->doctrineHelper->getSingleEntityIdentifier($entity), $entityIdsFromActivityLists)) {
                $filteredEntities[] = $entity;
            }
        }

        return $filteredEntities;
    }

    /**
     * @param object $entity
     * @param string $targetActivityClass
     * @param int    $targetActivityId
     *
     * @return array
     */
    private function getGroupedActivityListIds($entity, $targetActivityClass, $targetActivityId)
    {
        $entityClass = ClassUtils::getRealClass($entity);
        $event = new ActivityListPreQueryBuildEvent(
            $entityClass,
            $this->doctrineHelper->getSingleEntityIdentifier($entity)
        );
        $this->eventDispatcher->dispatch(ActivityListPreQueryBuildEvent::EVENT_NAME, $event);
        $entityIds = $event->getTargetIds();
        $qb = $this->getRepository()->createQueryBuilder('activity')
            ->select('activity.id')
            ->leftJoin('activity.activityOwners', 'ao')
            ->where('activity.relatedActivityClass = :entityClass')
            ->setParameter('entityClass', $entityClass);
        if (count($entityIds) > 1) {
            $qb
                ->andWhere('activity.relatedActivityId IN (:entityIds)')
                ->setParameter('entityIds', $entityIds);
        } else {
            $qb
                ->andWhere('activity.relatedActivityId = :entityId')
                ->setParameter('entityId', reset($entityIds));
        }

        $getIdsQb = clone $qb;
        $getIdsQb
            ->leftJoin(
                'activity.' . $this->getActivityListAssociationName($targetActivityClass),
                'associatedEntity'
            )
            ->andWhere('associatedEntity = :associatedEntityId')
            ->setParameter(':associatedEntityId', $targetActivityId);

        $this->activityListAclHelper->applyAclCriteria($getIdsQb, $this->chainProvider->getProviders());

        $ids = array_merge(
            $getIdsQb->getQuery()->getArrayResult(),
            $this->getGroupedActivityListIdsForInheritances($qb, $targetActivityClass, $targetActivityId)
        );

        $ids = array_unique(array_column($ids, 'id'));

        return $ids;
    }

    /**
     * @param ActivityList $entity
     * @param object       $entityProvider
     *
     * @return array
     */
    protected function getRelatedActivityEntities(ActivityList $entity, $entityProvider)
    {
        $relatedActivityEntities = [$entity];
        if ($this->isGroupingApplicable($entityProvider)) {
            $relationEntity = $this->doctrineHelper->getEntity(
                $entity->getRelatedActivityClass(),
                $entity->getRelatedActivityId()
            );
            $relatedActivityEntities = $entityProvider->getGroupedEntities($relationEntity);
            if (count($relatedActivityEntities) === 0) {
                $relatedActivityEntities = [$entity];
            }
        }

        return $relatedActivityEntities;
    }

    /**
     * This method should be used for fast changing data in 'relation' tables, because
     * it uses Plain SQL for updating data in tables.
     * Currently there is no another way for updating big amount of data: with Doctrine way
     * it takes a lot of time(because of big amount of operations with objects, event listeners etc.);
     * with DQL currently it impossible to build query, because DQL works only with entities, but
     * 'relation' tables are not entities. For example: there is 'relation'
     * table 'oro_rel_c3990ba6b28b6f38c460bc' and it has activitylist_id and account_id columns,
     * in fact to solve initial issue with big amount of data we need update only account_id column
     * with new values.
     *
     * @param array       $activityIds
     * @param string      $targetClass
     * @param integer     $oldTargetId
     * @param integer     $newTargetId
     * @param null|string $activityClass
     *
     * @return $this
     *
     * @throws \Doctrine\DBAL\DBALException
     * @throws \Doctrine\ORM\Mapping\MappingException
     */
    public function replaceActivityTargetWithPlainQuery(
        array $activityIds,
        $targetClass,
        $oldTargetId,
        $newTargetId,
        $activityClass = null
    ) {
        if (empty($activityIds)) {
            return $this;
        }

        if (is_null($activityClass)) {
            $associationName = $this->getActivityListAssociationName($targetClass);
            $entityClass = ActivityList::ENTITY_NAME;
        } else {
            $associationName = $this->getActivityAssociationName($targetClass);
            $entityClass = $activityClass;
        }

        $entityMetadata = $this->doctrineHelper->getEntityMetadata($entityClass);
        if ($entityMetadata->hasAssociation($associationName)) {
            $association = $entityMetadata->getAssociationMapping($associationName);
            $tableName = $association['joinTable']['name'];
            $activityField = current(array_keys($association['relationToSourceKeyColumns']));
            $targetField = current(array_keys($association['relationToTargetKeyColumns']));

            $dbConnection = $this->doctrineHelper
                ->getEntityManager(ActivityList::ENTITY_NAME)
                ->getConnection();

            // to avoid of duplication activity lists and activities items we need to clear these relations
            // from the master record before update
            $where = "WHERE $targetField = :masterEntityId AND $activityField IN(" . implode(',', $activityIds) . ")";
            $stmt = $dbConnection->prepare("DELETE FROM $tableName $where");
            $stmt->bindValue('masterEntityId', $newTargetId);
            $stmt->execute();

            $where = "WHERE $targetField = :sourceEntityId AND $activityField IN(" . implode(',', $activityIds) . ")";
            $stmt = $dbConnection->prepare("UPDATE $tableName SET $targetField = :masterEntityId $where");
            $stmt->bindValue('masterEntityId', $newTargetId);
            $stmt->bindValue('sourceEntityId', $oldTargetId);
            $stmt->execute();
        }

        return $this;
    }

    /**
     * Get Activity List Association name
     *
     * @param string $className
     *
     * @return string
     */
    protected function getActivityListAssociationName($className)
    {
        return ExtendHelper::buildAssociationName(
            $className,
            ActivityListEntityConfigDumperExtension::ASSOCIATION_KIND
        );
    }

    /**
     * Get Activity Association name
     *
     * @param string $className
     *
     * @return string
     */
    protected function getActivityAssociationName($className)
    {
        return ExtendHelper::buildAssociationName(
            $className,
            ActivityScope::ASSOCIATION_KIND
        );
    }
}
