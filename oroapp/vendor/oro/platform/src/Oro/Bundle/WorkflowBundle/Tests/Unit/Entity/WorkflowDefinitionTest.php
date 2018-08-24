<?php

namespace Oro\Bundle\WorkflowBundle\Tests\Unit\Entity;

use Doctrine\Common\Collections\ArrayCollection;

use JMS\Serializer as JMS;

use Oro\Bundle\ScopeBundle\Entity\Scope;
use Oro\Bundle\WorkflowBundle\Configuration\WorkflowConfiguration;
use Oro\Bundle\WorkflowBundle\Entity\WorkflowDefinition;
use Oro\Bundle\WorkflowBundle\Entity\WorkflowEntityAcl;
use Oro\Bundle\WorkflowBundle\Entity\WorkflowRestriction;
use Oro\Bundle\WorkflowBundle\Entity\WorkflowStep;
use Oro\Component\Testing\Unit\EntityTestCaseTrait;

/**
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class WorkflowDefinitionTest extends \PHPUnit_Framework_TestCase
{
    use EntityTestCaseTrait;

    /**
     * @var WorkflowDefinition
     */
    protected $workflowDefinition;

    protected function setUp()
    {
        $this->workflowDefinition = new WorkflowDefinition();
    }

    protected function tearDown()
    {
        unset($this->workflowDefinition);
    }

    public function testGetVirtualAttributes()
    {
        $this->workflowDefinition->setConfiguration([
            'attributes' => [
                'normal_attribute' => [],
                'virtual_attribute' => [
                    'options' => [
                        'virtual' => true,
                    ],
                ],
            ],
        ]);

        $this->assertEquals(
            [
                'virtual_attribute' => [
                    'options' => [
                        'virtual' => true,
                    ],
                ],
            ],
            $this->workflowDefinition->getVirtualAttributes()
        );
    }

    public function testAccessors()
    {
        $this->assertPropertyCollections($this->workflowDefinition, [
            ['scopes', new Scope()],
        ]);

        $this->assertPropertyAccessors($this->workflowDefinition, [['applications', ['some_application'], true]]);
    }

    public function testSetScopesConfig()
    {
        $this->assertEquals([], $this->workflowDefinition->getScopesConfig());

        $this->workflowDefinition->setScopesConfig(['data']);

        $this->assertSame(['data'], $this->workflowDefinition->getScopesConfig());
    }

    public function testGetScopesConfig()
    {
        $this->assertEquals([], $this->workflowDefinition->getScopesConfig());

        $this->workflowDefinition->setScopesConfig(['data']);

        $this->assertEquals(['data'], $this->workflowDefinition->getScopesConfig());
    }

    public function testHasScopeConfig()
    {
        $this->assertFalse($this->workflowDefinition->hasScopesConfig());

        $this->workflowDefinition->setScopesConfig(['data']);

        $this->assertTrue($this->workflowDefinition->hasScopesConfig());
    }

    public function testGetDatagrids()
    {
        $datagridsConfig = ['grid1', 'grid2'];
        $this->workflowDefinition->setConfiguration(['datagrids' => $datagridsConfig]);

        $this->assertSame($datagridsConfig, $this->workflowDefinition->getDatagrids());
    }

    public function testGetHasDisabledOperations()
    {
        $definition = new WorkflowDefinition();

        $this->assertEquals([], $definition->getDisabledOperations());
        $this->assertFalse($definition->hasDisabledOperations());

        $disabledOperationsConfig = [
            'operation' => ['className'],
            'operationWithoutClass' => []
        ];

        $definition->setConfiguration([WorkflowConfiguration::NODE_DISABLE_OPERATIONS => $disabledOperationsConfig]);

        $this->assertEquals($disabledOperationsConfig, $definition->getDisabledOperations());
        $this->assertTrue($definition->hasDisabledOperations());
    }

    public function testName()
    {
        $this->assertNull($this->workflowDefinition->getName());
        $value = 'example_workflow';
        $this->workflowDefinition->setName($value);
        $this->assertEquals($value, $this->workflowDefinition->getName());
    }

    public function testLabel()
    {
        $this->assertNull($this->workflowDefinition->getLabel());
        $value = 'Example Workflow';
        $this->workflowDefinition->setLabel($value);
        $this->assertEquals($value, $this->workflowDefinition->getLabel());
    }

    public function testStartStep()
    {
        $this->assertNull($this->workflowDefinition->getStartStep());
        $startStep = new WorkflowStep();
        $startStep->setName('start_step');
        $this->workflowDefinition->setSteps([$startStep]);
        $this->workflowDefinition->setStartStep($startStep);
        $this->assertEquals($startStep, $this->workflowDefinition->getStartStep());
        $this->workflowDefinition->setStartStep(null);
        $this->assertNull($this->workflowDefinition->getStartStep());
    }

    public function testActive()
    {
        $this->assertFalse($this->workflowDefinition->isActive());
        $this->workflowDefinition->setActive(true);
        $this->assertTrue($this->workflowDefinition->isActive());
    }

    public function testPriority()
    {
        $this->assertEquals(0, $this->workflowDefinition->getPriority());
        $this->workflowDefinition->setPriority(42);
        $this->assertEquals(42, $this->workflowDefinition->getPriority());
    }

    public function testActiveGroups()
    {
        $this->assertEquals([], $this->workflowDefinition->getExclusiveActiveGroups());
        $this->assertFalse($this->workflowDefinition->hasExclusiveActiveGroups());

        $this->workflowDefinition->setExclusiveActiveGroups(['group1', 'group2']);

        $this->assertEquals(['group1', 'group2'], $this->workflowDefinition->getExclusiveActiveGroups());

        $this->assertTrue($this->workflowDefinition->hasExclusiveActiveGroups());
    }

    public function testRecordGroups()
    {
        $this->assertEquals([], $this->workflowDefinition->getExclusiveRecordGroups());
        $this->assertFalse($this->workflowDefinition->hasExclusiveRecordGroups());

        $this->workflowDefinition->setExclusiveRecordGroups(['group1', 'group2']);

        $this->assertEquals(['group1', 'group2'], $this->workflowDefinition->getExclusiveRecordGroups());

        $this->assertTrue($this->workflowDefinition->hasExclusiveRecordGroups());
    }

    public function testIsForceAutostart()
    {
        $this->assertFalse($this->workflowDefinition->isForceAutostart());
        $this->workflowDefinition->setConfiguration([WorkflowDefinition::CONFIG_FORCE_AUTOSTART => true]);
        $this->assertTrue($this->workflowDefinition->isForceAutostart());
    }

    /**
     * @expectedException \Oro\Bundle\WorkflowBundle\Exception\WorkflowException
     * @expectedExceptionMessage Workflow "test" does not contain step "start_step"
     */
    public function testStartStepNoStep()
    {
        $this->workflowDefinition->setName('test');
        $this->assertNull($this->workflowDefinition->getStartStep());
        $startStep = new WorkflowStep();
        $startStep->setName('start_step');
        $this->workflowDefinition->setStartStep($startStep);
        $this->assertEquals($startStep, $this->workflowDefinition->getStartStep());
    }

    public function testConfiguration()
    {
        $this->assertEmpty($this->workflowDefinition->getConfiguration());
        $value = ['some', 'configuration', 'array'];
        $this->workflowDefinition->setConfiguration($value);
        $this->assertEquals($value, $this->workflowDefinition->getConfiguration());
    }

    public function testSetSteps()
    {
        $stepOne = new WorkflowStep();
        $stepOne->setName('step1');
        $this->workflowDefinition->addStep($stepOne);

        $stepTwo = new WorkflowStep();
        $stepTwo->setName('step2');
        $this->workflowDefinition->addStep($stepTwo);

        $stepThree = new WorkflowStep();
        $stepThree->setName('step3');
        $this->workflowDefinition->addStep($stepThree);

        $this->assertCount(3, $this->workflowDefinition->getSteps());

        $this->assertTrue($this->workflowDefinition->hasStepByName('step3'));
        $this->workflowDefinition->removeStep($stepThree);
        $this->assertFalse($this->workflowDefinition->hasStepByName('step3'));

        $this->assertCount(2, $this->workflowDefinition->getSteps());
        $this->workflowDefinition->setSteps(new ArrayCollection([$stepOne]));
        $actualSteps = $this->workflowDefinition->getSteps();
        $this->assertCount(1, $actualSteps);
        $this->assertEquals($stepOne, $actualSteps[0]);
    }

    public function testSetGetAclIdentities()
    {
        $firstStep = new WorkflowStep();
        $firstStep->setName('first_step');
        $secondStep = new WorkflowStep();
        $secondStep->setName('second_step');
        $this->workflowDefinition->setSteps([$firstStep, $secondStep]);

        $firstEntityAcl = new WorkflowEntityAcl();
        $firstEntityAcl->setStep($firstStep)->setAttribute('first_attribute');
        $secondEntityAcl = new WorkflowEntityAcl();
        $secondEntityAcl->setStep($secondStep)->setAttribute('second_attribute');

        // default
        $this->assertEmpty($this->workflowDefinition->getEntityAcls()->toArray());

        // adding
        $this->workflowDefinition->setEntityAcls([$firstEntityAcl]);
        $this->assertCount(1, $this->workflowDefinition->getEntityAcls());
        $this->assertEquals($firstEntityAcl, $this->workflowDefinition->getEntityAcls()->first());

        // merging
        $this->workflowDefinition->setEntityAcls([$firstEntityAcl, $secondEntityAcl]);
        $this->assertCount(2, $this->workflowDefinition->getEntityAcls());
        $entityAcls = array_values($this->workflowDefinition->getEntityAcls()->toArray());
        $this->assertEquals($firstEntityAcl, $entityAcls[0]);
        $this->assertEquals($secondEntityAcl, $entityAcls[1]);

        // removing
        $this->workflowDefinition->setEntityAcls([$secondEntityAcl]);
        $this->assertCount(1, $this->workflowDefinition->getEntityAcls());
        $this->assertEquals($secondEntityAcl, $this->workflowDefinition->getEntityAcls()->first());

        // resetting
        $this->workflowDefinition->setEntityAcls([]);
        $this->assertEmpty($this->workflowDefinition->getEntityAcls()->toArray());
    }

    public function testSetGetEntityRestrictions()
    {
        $firstStep = new WorkflowStep();
        $firstStep->setName('first_step');
        $secondStep = new WorkflowStep();
        $secondStep->setName('second_step');
        $this->workflowDefinition->setSteps([$firstStep, $secondStep]);

        $firstRestriction = new WorkflowRestriction();
        $firstRestriction->setStep($firstStep)->setAttribute('first_attribute');
        $secondRestriction = new WorkflowRestriction();
        $secondRestriction->setStep($secondStep)->setAttribute('second_attribute');

        // default
        $this->assertEmpty($this->workflowDefinition->getRestrictions()->toArray());

        // adding
        $this->workflowDefinition->setRestrictions([$firstRestriction]);
        $this->assertCount(1, $this->workflowDefinition->getRestrictions());
        $this->assertEquals($firstRestriction, $this->workflowDefinition->getRestrictions()->first());

        // merging
        $this->workflowDefinition->setRestrictions([$firstRestriction, $secondRestriction]);
        $this->assertCount(2, $this->workflowDefinition->getRestrictions());
        $restrictions = array_values($this->workflowDefinition->getRestrictions()->toArray());
        $this->assertEquals($firstRestriction, $restrictions[0]);
        $this->assertEquals($secondRestriction, $restrictions[1]);

        // removing
        $this->workflowDefinition->setRestrictions([$secondRestriction]);
        $this->assertCount(1, $this->workflowDefinition->getRestrictions());
        $this->assertEquals($secondRestriction, $this->workflowDefinition->getRestrictions()->first());

        // resetting
        $this->workflowDefinition->setRestrictions([]);
        $this->assertEmpty($this->workflowDefinition->getRestrictions()->toArray());
    }

    public function testGetDisabledOperations()
    {
        $configuration = [
            WorkflowConfiguration::NODE_DISABLE_OPERATIONS => [
                'operation' => ['entity']
            ]
        ];
        $this->workflowDefinition->setConfiguration($configuration);
        $this->assertSame(
            $configuration[WorkflowConfiguration::NODE_DISABLE_OPERATIONS],
            $this->workflowDefinition->getDisabledOperations()
        );
    }

    public function testExcludeRestrictionsField()
    {
        $step = new WorkflowStep();
        $step->setName('step');

        $restriction          = new WorkflowRestriction();
        $restrictionAttribute = 'test attribute';
        $restriction->setStep($step)->setAttribute($restrictionAttribute);

        $definitionName = 'Definition name';
        $this->workflowDefinition->setName($definitionName);
        $this->workflowDefinition->setRestrictions([$restriction]);

        $serializer  = JMS\SerializerBuilder::create()->build();
        $jsonContent = $serializer->serialize($this->workflowDefinition, 'json');

        $this->assertJson($jsonContent);
        $this->assertNotContains('restrictions', $jsonContent);
        $this->assertNotContains($restrictionAttribute, $jsonContent);
        $this->assertContains($definitionName, $jsonContent);
    }
}
