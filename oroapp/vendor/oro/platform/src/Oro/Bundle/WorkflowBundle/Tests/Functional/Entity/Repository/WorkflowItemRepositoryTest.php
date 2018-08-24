<?php

namespace Oro\Bundle\WorkflowBundle\Tests\Functional\Entity\Repository;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Join;

use Oro\Bundle\WorkflowBundle\Entity\Repository\WorkflowItemRepository;
use Oro\Bundle\WorkflowBundle\Entity\WorkflowDefinition;
use Oro\Bundle\WorkflowBundle\Entity\WorkflowItem;
use Oro\Bundle\WorkflowBundle\Tests\Functional\DataFixtures\LoadWorkflowDefinitions;
use Oro\Bundle\WorkflowBundle\Tests\Functional\DataFixtures\LoadWorkflowAwareEntities;

use Oro\Bundle\TestFrameworkBundle\Entity\WorkflowAwareEntity;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;

class WorkflowItemRepositoryTest extends WebTestCase
{
    /**
     * @var WorkflowItemRepository
     */
    protected $repository;

    protected function setUp()
    {
        $this->initClient();
        $this->loadFixtures(['Oro\Bundle\WorkflowBundle\Tests\Functional\DataFixtures\LoadWorkflowAwareEntities']);

        $this->repository = $this->getContainer()->get('doctrine')->getRepository('OroWorkflowBundle:WorkflowItem');
    }

    public function testFindByEntityMetadata()
    {
        /** @var WorkflowAwareEntity $entity */
        $entity = $this->getReference('workflow_aware_entity.15');

        /** @var WorkflowItem $item */
        $item = $this->getReference('test_flow_item.15');

        $actual = $this->repository->findByEntityMetadata(
            'Oro\Bundle\TestFrameworkBundle\Entity\WorkflowAwareEntity',
            $entity->getId()
        );

        $this->assertNotEmpty([$item], $actual);
    }

    public function testFindAllByEntityMetadata()
    {
        $entityIds = $this->getEntityIdsByWorkflow();
        $entityId = reset($entityIds[LoadWorkflowDefinitions::NO_START_STEP]);
        $this->assertInternalType(
            'array',
            $this->repository->findAllByEntityMetadata(
                'Oro\Bundle\TestFrameworkBundle\Entity\WorkflowAwareEntity',
                $entityId
            )
        );
    }

    public function testFindOneByEntityMetadata()
    {
        $entityIds = $this->getEntityIdsByWorkflow();
        $entityId = reset($entityIds[LoadWorkflowDefinitions::NO_START_STEP]);

        $item = $this->repository->findOneByEntityMetadata(
            'Oro\Bundle\TestFrameworkBundle\Entity\WorkflowAwareEntity',
            $entityId,
            'SOME_NON_EXISTING_WORKFLOW'
        );

        $this->assertNull($item);

        $this->assertInstanceOf(
            'Oro\Bundle\WorkflowBundle\Entity\WorkflowItem',
            $this->repository->findOneByEntityMetadata(
                'Oro\Bundle\TestFrameworkBundle\Entity\WorkflowAwareEntity',
                $entityId,
                LoadWorkflowDefinitions::NO_START_STEP
            )
        );
    }

    /**
     * @dataProvider getGroupedWorkflowNameAndWorkflowStepNameProvider
     *
     * @param array $entities
     * @param array $workflows
     * @param string $withWorkflowName
     * @param array|null $workflowNames
     */
    public function testGetGroupedWorkflowNameAndWorkflowStepName(
        array $entities,
        array $workflows,
        $withWorkflowName = true,
        array $workflowNames = null
    ) {
        $entities = array_map(function ($reference) {
            return $this->getReference($reference);
        }, $entities);

        $expectedData = [];

        /** @var WorkflowAwareEntity $entity */
        foreach ($entities as $entity) {
            foreach ($workflows as $workflowName) {
                /** @var WorkflowItem $workflowItem */
                $workflowItem = $this->getContainer()
                    ->get('oro_workflow.manager')
                    ->getWorkflowItem($entity, $workflowName);

                if ($workflowItem) {
                    $data = [
                        'entityId' => (string)$entity->getId(),
                        'stepName' => $workflowItem->getCurrentStep()->getLabel(),
                    ];

                    if ($withWorkflowName) {
                        $data['workflowName'] = $workflowItem->getDefinition()->getLabel();
                    }

                    $expectedData[(string)$entity->getId()][] = $data;
                }
            }
        }

        $result = $this->repository->getGroupedWorkflowNameAndWorkflowStepName(
            WorkflowAwareEntity::class,
            array_map(
                function (WorkflowAwareEntity $entity) {
                    return (string)$entity->getId();
                },
                $entities
            ),
            $withWorkflowName,
            $workflowNames
        );


        $this->assertEquals($expectedData, $result);
    }

    /**
     * @return array
     */
    public function getGroupedWorkflowNameAndWorkflowStepNameProvider()
    {
        return [
            [
                'entities' => [
                    'workflow_aware_entity.15',
                    'workflow_aware_entity.16',
                ],
                'workflows' => [
                    LoadWorkflowDefinitions::WITH_START_STEP,
                    LoadWorkflowDefinitions::NO_START_STEP,
                    LoadWorkflowDefinitions::MULTISTEP,
                ],
                'withWorkflowName' => true,
                'names' => null,
            ],
            [
                'entities' => [
                    'workflow_aware_entity.15',
                    'workflow_aware_entity.16',
                ],
                'workflows' => [
                    LoadWorkflowDefinitions::WITH_START_STEP,
                    LoadWorkflowDefinitions::NO_START_STEP,
                    LoadWorkflowDefinitions::MULTISTEP,
                ],
                'withWorkflowName' => false,
                'names' => null,
            ],
            [
                'entities' => [
                    'workflow_aware_entity.15',
                    'workflow_aware_entity.16',
                ],
                'workflows' => [
                    LoadWorkflowDefinitions::WITH_START_STEP,
                ],
                'withWorkflowName' => true,
                'names' => [LoadWorkflowDefinitions::WITH_START_STEP],
            ],
            [
                'entities' => [],
                'workflows' => [],
                'withWorkflowName' => true,
                'names' => [],
            ],
        ];
    }

    public function testGetEntityIdsByEntityClassAndWorkflowStepIds()
    {
        /** @var WorkflowItem $workflowItem */
        $workflowItem = $this->getReference('test_flow_item.1');

        $result = $this->repository->getEntityIdsByEntityClassAndWorkflowStepIds(
            'Oro\Bundle\TestFrameworkBundle\Entity\WorkflowAwareEntity',
            [$workflowItem->getCurrentStep()->getId()]
        );

        $this->assertCount(LoadWorkflowAwareEntities::COUNT, $result);

        for ($i = 1; $i <= LoadWorkflowAwareEntities::COUNT; $i++) {
            $entity = $this->getReference('workflow_aware_entity.' . $i);

            $this->assertTrue(in_array((string)$entity->getId(), $result, true));
        }
    }

    public function testGetEntityIdsByEntityClassAndWorkflowNames()
    {
        /** @var WorkflowItem $workflowItem */
        $workflowItem = $this->getReference('test_flow_item.1');

        $result = $this->repository->getEntityIdsByEntityClassAndWorkflowNames(
            'Oro\Bundle\TestFrameworkBundle\Entity\WorkflowAwareEntity',
            [$workflowItem->getWorkflowName()]
        );

        $this->assertCount(LoadWorkflowAwareEntities::COUNT, $result);

        for ($i = 1; $i <= LoadWorkflowAwareEntities::COUNT; $i++) {
            $entity = $this->getReference('workflow_aware_entity.' . $i);

            $this->assertTrue(in_array((string)$entity->getId(), $result, true));
        }
    }

    public function testFindByStepNamesAndEntityClass()
    {
        $items = $this->repository->findByStepNamesAndEntityClass(
            new ArrayCollection(['second_point']),
            'Oro\\Bundle\\TestFrameworkBundle\\Entity\\WorkflowAwareEntity',
            'id'
        );

        $this->assertCount(LoadWorkflowAwareEntities::COUNT, $items);

        // 21 because "test_multistep_flow" was second loaded workflows in fixtures
        for ($i = 21; $i < 21 + LoadWorkflowAwareEntities::COUNT; $i++) {
            $item = $this->getReference('test_multistep_flow_item.' . $i);

            $this->assertContains($item, $items);
        }
    }

    public function testResetWorkflowData()
    {
        // assert input state
        // - no entities without workflow items
        // - 20 entities with NO_START_STEP workflow item
        // - 20 entities with WITH_START_STEP workflow item
        $inputEntityIds = $this->getEntityIdsByWorkflow();
        $this->assertEntityIdsByWorkflow(
            $inputEntityIds,
            0,
            LoadWorkflowAwareEntities::COUNT,
            LoadWorkflowAwareEntities::COUNT
        );
        $noStartStepEntityIds = $inputEntityIds[LoadWorkflowDefinitions::NO_START_STEP];
        $withStartStepEntityIds = $inputEntityIds[LoadWorkflowDefinitions::WITH_START_STEP];

        // reset only WITH_START_STEP workflow data with more than one batch
        $this->repository->resetWorkflowData(
            LoadWorkflowDefinitions::WITH_START_STEP,
            LoadWorkflowAwareEntities::COUNT - 1
        );

        // assert state: NO_START_STEP workflow entities weren't changed, WITH_START_STEP workflow entities were reset
        // - 20 entities without workflow items
        // - 20 entities with NO_START_STEP workflow item
        // - no entities with WITH_START_STEP workflow item
        $updatedEntityIds = $this->getEntityIdsByWorkflow();
        $this->assertEntityIdsByWorkflow(
            $updatedEntityIds,
            LoadWorkflowAwareEntities::COUNT,
            LoadWorkflowAwareEntities::COUNT,
            0,
            array_merge($withStartStepEntityIds),
            $noStartStepEntityIds,
            []
        );

        // reset only NO_START_STEP workflow data with single execution
        $this->repository->resetWorkflowData(LoadWorkflowDefinitions::NO_START_STEP);
        $this->repository->resetWorkflowData(LoadWorkflowDefinitions::MULTISTEP);

        // assert state: both NO_START_STEP and WITH_START_STEP workflow entities were reset
        // - 60 entities without workflow items
        // - no entities with NO_START_STEP workflow item
        // - no entities with WITH_START_STEP workflow item
        $emptyEntityIds = $this->getEntityIdsByWorkflow();
        $this->assertEntityIdsByWorkflow(
            $emptyEntityIds,
            LoadWorkflowAwareEntities::COUNT * 2,
            0,
            0,
            array_merge($noStartStepEntityIds, $withStartStepEntityIds),
            [],
            []
        );
    }

    /**
     * @return array
     */
    protected function getEntityIdsByWorkflow()
    {
        $registry = $this->getContainer()->get('doctrine');
        $registry->getManagerForClass('OroTestFrameworkBundle:WorkflowAwareEntity')->clear();

        /** @var EntityRepository $repository */
        $repository = $registry->getRepository('OroTestFrameworkBundle:WorkflowAwareEntity');

        $qb = $repository->createQueryBuilder('e');
        $qb->select('e.id AS entityId', 'wi.workflowName AS workflowName, wi.id as id')
            ->leftJoin(
                'OroWorkflowBundle:WorkflowItem',
                'wi',
                Join::WITH,
                'CAST(e.id as string) = CAST(wi.entityId as string) AND wi.entityClass = ?1'
            )
            ->setParameter(1, 'Oro\Bundle\TestFrameworkBundle\Entity\WorkflowAwareEntity', \PDO::PARAM_STR)
            ->orderBy('e.id', 'ASC');

        $entities = $qb->getQuery()->getResult();

        $ids = ['none' => []];
        foreach ($entities as $entity) {
            $workflowName = $entity['workflowName'] ? : 'none';

            $ids[$workflowName][] = $entity['entityId'];
        }

        return $ids;
    }

    /**
     * @param array $allEntityIds
     * @param int $noneEntitiesCount
     * @param int $noStartStepEntitiesCount
     * @param int $withStartStepEntitiesCount
     * @param array $noneEntityIds
     * @param array $noStartStepEntityIds
     * @param array $withStartStepEntityIds
     */
    protected function assertEntityIdsByWorkflow(
        array $allEntityIds,
        $noneEntitiesCount,
        $noStartStepEntitiesCount,
        $withStartStepEntitiesCount,
        array $noneEntityIds = null,
        array $noStartStepEntityIds = null,
        array $withStartStepEntityIds = null
    ) {
        if ($noneEntitiesCount > 0) {
            $actualAllEntities = $allEntityIds['none'];
            $this->assertCount($noneEntitiesCount, $actualAllEntities);
            if ($noneEntityIds !== null) {
                $this->assertEquals($noneEntityIds, $actualAllEntities);
            }
        } else {
            $this->assertEmpty($allEntityIds['none']);
        }

        if ($noStartStepEntitiesCount > 0) {
            $this->assertArrayHasKey(LoadWorkflowDefinitions::NO_START_STEP, $allEntityIds);
            $actualNoStartStepEntityIds = $allEntityIds[LoadWorkflowDefinitions::NO_START_STEP];
            $this->assertCount($noStartStepEntitiesCount, $actualNoStartStepEntityIds);
            if ($noStartStepEntityIds !== null) {
                $this->assertEquals($noStartStepEntityIds, $actualNoStartStepEntityIds);
            }
        } else {
            $this->assertArrayNotHasKey(LoadWorkflowDefinitions::NO_START_STEP, $allEntityIds);
        }

        if ($withStartStepEntitiesCount > 0) {
            $this->assertArrayHasKey(LoadWorkflowDefinitions::WITH_START_STEP, $allEntityIds);
            $actualWithStartStepEntityIds = $allEntityIds[LoadWorkflowDefinitions::WITH_START_STEP];
            $this->assertCount($withStartStepEntitiesCount, $actualWithStartStepEntityIds);
            if ($withStartStepEntityIds !== null) {
                $this->assertEquals($withStartStepEntityIds, $actualWithStartStepEntityIds);
            }
        } else {
            $this->assertArrayNotHasKey(LoadWorkflowDefinitions::WITH_START_STEP, $allEntityIds);
        }
    }

    /**
     * @param $workflowDefinitionName
     * @return null|WorkflowDefinition
     */
    private function getWorkflowDefinitionByName($workflowDefinitionName)
    {
        $registry = $this->getContainer()->get('doctrine');
        $registry->getManager()->clear();

        /** @var EntityRepository $repository */
        $repository = $registry->getRepository('OroWorkflowBundle:WorkflowDefinition');

        return $repository->findOneBy(['name' => $workflowDefinitionName]);
    }

    public function testGetEntityWorkflowStepUpgradeQueryBuilder()
    {
        $definition = $this->getWorkflowDefinitionByName(LoadWorkflowDefinitions::WITH_START_STEP);
        $this->assertInstanceOf(
            'Doctrine\ORM\QueryBuilder',
            $this->repository->getEntityWorkflowStepUpgradeQueryBuilder($definition)
        );
    }
}
