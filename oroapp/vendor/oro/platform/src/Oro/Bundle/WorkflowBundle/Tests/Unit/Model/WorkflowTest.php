<?php

namespace Oro\Bundle\WorkflowBundle\Tests\Unit\Model;

use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Component\PropertyAccess\PropertyAccess;

use Oro\Bundle\ActionBundle\Model\Attribute;
use Oro\Bundle\ActionBundle\Model\AttributeManager;
use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\WorkflowBundle\Acl\AclManager;
use Oro\Bundle\WorkflowBundle\Configuration\WorkflowConfiguration;
use Oro\Bundle\WorkflowBundle\Entity\WorkflowDefinition;
use Oro\Bundle\WorkflowBundle\Entity\WorkflowStep;
use Oro\Bundle\WorkflowBundle\Entity\Repository\WorkflowItemRepository;
use Oro\Bundle\WorkflowBundle\Model\TransitionManager;
use Oro\Bundle\WorkflowBundle\Model\Workflow;
use Oro\Bundle\WorkflowBundle\Model\Step;
use Oro\Bundle\WorkflowBundle\Model\Transition;
use Oro\Bundle\WorkflowBundle\Model\Variable;
use Oro\Bundle\WorkflowBundle\Model\VariableAssembler;
use Oro\Bundle\WorkflowBundle\Model\VariableManager;
use Oro\Bundle\WorkflowBundle\Entity\WorkflowItem;
use Oro\Bundle\WorkflowBundle\Entity\WorkflowTransitionRecord;
use Oro\Bundle\WorkflowBundle\Exception\InvalidTransitionException;
use Oro\Bundle\WorkflowBundle\Restriction\RestrictionManager;
use Oro\Bundle\WorkflowBundle\Tests\Unit\Model\Stub\EntityWithWorkflow;

/**
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * @SuppressWarnings(PHPMD.TooManyMethods)
 * @SuppressWarnings(PHPMD.ExcessiveClassLength)
 */
class WorkflowTest extends \PHPUnit_Framework_TestCase
{
    /** @var DoctrineHelper|\PHPUnit_Framework_MockObject_MockObject */
    protected $doctrineHelper;

    protected function setUp()
    {
        $this->doctrineHelper = $this->getMockBuilder('Oro\Bundle\EntityBundle\ORM\DoctrineHelper')
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * @dataProvider propertiesDataProvider
     * @param string $property
     * @param mixed $value
     */
    public function testGettersAndSetters($property, $value)
    {
        $getter = 'get' . ucfirst($property);
        $setter = 'set' . ucfirst($property);
        $workflow = $this->createWorkflow();
        $this->assertInstanceOf(
            'Oro\Bundle\WorkflowBundle\Model\Workflow',
            call_user_func_array(array($workflow, $setter), array($value))
        );
        $this->assertEquals($value, call_user_func_array(array($workflow, $getter), array()));
    }

    /**
     * @return array
     */
    public function propertiesDataProvider()
    {
        return array(
            'definition' => array(
                'definition',
                $this->createMock('Oro\Bundle\WorkflowBundle\Entity\WorkflowDefinition')
            )
        );
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Expected transition argument type is string or Transition
     */
    public function testIsTransitionAllowedArgumentException()
    {
        $workflowItem = $this->getMockBuilder('Oro\Bundle\WorkflowBundle\Entity\WorkflowItem')
            ->disableOriginalConstructor()
            ->getMock();

        $workflow = $this->createWorkflow();
        $workflow->isTransitionAllowed($workflowItem, 1);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Expected transition argument type is string or Transition
     */
    public function testTransitAllowedArgumentException()
    {
        $workflowItem = $this->getMockBuilder('Oro\Bundle\WorkflowBundle\Entity\WorkflowItem')
            ->disableOriginalConstructor()
            ->getMock();

        $workflow = $this->createWorkflow();
        $workflow->transit($workflowItem, 1);
    }

    // @codingStandardsIgnoreStart
    /**
     * @expectedException \Oro\Bundle\WorkflowBundle\Exception\InvalidTransitionException
     * @expectedExceptionMessage Step "test_step" of workflow "test_workflow" doesn't have allowed transition "test_transition".
     */
    // @codingStandardsIgnoreEnd
    public function testIsTransitionAllowedStepHasNoAllowedTransitionException()
    {
        $workflowStep = new WorkflowStep();
        $workflowStep->setName('test_step');

        $workflowItem = $this->getMockBuilder('Oro\Bundle\WorkflowBundle\Entity\WorkflowItem')
            ->disableOriginalConstructor()
            ->getMock();
        $workflowItem->expects($this->any())
            ->method('getCurrentStep')
            ->will($this->returnValue($workflowStep));
        $workflowItem->expects($this->once())
            ->method('getWorkflowName')
            ->will($this->returnValue('test_workflow'));

        $step = $this->getStepMock($workflowStep->getName());
        $step->expects($this->any())
            ->method('isAllowedTransition')
            ->with('test_transition')
            ->will($this->returnValue(false));

        $transition = $this->getTransitionMock('test_transition', false);

        $workflow = $this->createWorkflow('test_workflow');
        $workflow->getTransitionManager()->setTransitions(array($transition));
        $workflow->getStepManager()->setSteps(array($step));

        $workflow->isTransitionAllowed($workflowItem, 'test_transition', null, true);
    }

    /**
     * @dataProvider isTransitionAllowedDataProvider
     * @param mixed $expectedResult
     * @param bool $transitionExist
     * @param bool $transitionAllowed
     * @param bool $isTransitionStart
     * @param bool $hasCurrentStep
     * @param bool $stepAllowTransition
     * @param bool $fireExceptions
     */
    public function testIsTransitionAllowed(
        $expectedResult,
        $transitionExist,
        $transitionAllowed,
        $isTransitionStart,
        $hasCurrentStep,
        $stepAllowTransition,
        $fireExceptions = true
    ) {
        $workflowStep = new WorkflowStep();
        $workflowStep->setName('test_step');

        $entity = new EntityWithWorkflow();

        $workflowItem = $this->getMockBuilder('Oro\Bundle\WorkflowBundle\Entity\WorkflowItem')
            ->disableOriginalConstructor()
            ->getMock();
        $workflowItem->expects($this->any())
            ->method('getWorkflowName')
            ->will($this->returnValue('test_workflow'));
        $workflowItem->expects($this->any())
            ->method('getCurrentStep')
            ->will($this->returnValue($hasCurrentStep ? $workflowStep : null));
        $workflowItem->expects($this->any())
            ->method('getEntity')
            ->will($this->returnValue($entity));

        $step = $this->getStepMock('test_step');
        $step->expects($this->any())
            ->method('isAllowedTransition')
            ->with('test_transition')
            ->will($this->returnValue($stepAllowTransition));

        $errors = new ArrayCollection();

        $transition = $this->getTransitionMock('test_transition', $isTransitionStart);
        $transition->expects($this->any())
            ->method('isAllowed')
            ->with($workflowItem, $errors)
            ->will($this->returnValue($transitionAllowed));

        $workflow = $this->createWorkflow('test_workflow');
        if ($transitionExist) {
            $workflow->getTransitionManager()->setTransitions(array($transition));
        }
        $workflow->getStepManager()->setSteps(array($step));

        if ($expectedResult instanceof \Exception) {
            $this->expectException(get_class($expectedResult));
            $this->expectExceptionMessage($expectedResult->getMessage());
        }

        $actualResult = $workflow->isTransitionAllowed($workflowItem, 'test_transition', $errors, $fireExceptions);

        if (is_bool($expectedResult)) {
            $this->assertEquals($actualResult, $expectedResult);
        }
    }

    /**
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     *
     * @return array
     */
    public function isTransitionAllowedDataProvider()
    {
        return array(
            'not_allowed_transition' => array(
                'expectedResult' => false,
                'transitionExist' => true,
                'transitionAllowed' => false,
                'isTransitionStart' => true,
                'hasCurrentStep' => true,
                'stepAllowTransition' => true,
            ),
            'allowed_transition' => array(
                'expectedResult' => true,
                'transitionExist' => true,
                'transitionAllowed' => true,
                'isTransitionStart' => false,
                'hasCurrentStep' => true,
                'stepAllowTransition' => true,
            ),
            'not_allowed_start_transition' => array(
                'expectedResult' => false,
                'transitionExist' => true,
                'transitionAllowed' => false,
                'isTransitionStart' => false,
                'hasCurrentStep' => true,
                'stepAllowTransition' => true,
            ),
            'allowed_start_transition' => array(
                'expectedResult' => true,
                'transitionExist' => true,
                'transitionAllowed' => true,
                'isTransitionStart' => true,
                'hasCurrentStep' => true,
                'stepAllowTransition' => true,
            ),
            'unknown_transition_fire_exception' => array(
                'expectedException' => InvalidTransitionException::unknownTransition('test_transition'),
                'transitionExist' => false,
                'transitionAllowed' => true,
                'isTransitionStart' => false,
                'hasCurrentStep' => true,
                'stepAllowTransition' => true,
            ),
            'unknown_transition_no_exception' => array(
                'expectedResult' => false,
                'transitionExist' => false,
                'transitionAllowed' => true,
                'isTransitionStart' => false,
                'hasCurrentStep' => true,
                'stepAllowTransition' => true,
                'fireException' => false
            ),
            'not_start_transition_fire_exception' => array(
                'expectedException' => InvalidTransitionException::notStartTransition(
                    'test_workflow',
                    'test_transition'
                ),
                'transitionExist' => true,
                'transitionAllowed' => true,
                'isTransitionStart' => false,
                'hasCurrentStep' => false,
                'stepAllowTransition' => true,
            ),
            'not_start_transition_no_exception' => array(
                'expectedResult' => false,
                'transitionExist' => true,
                'transitionAllowed' => true,
                'isTransitionStart' => false,
                'hasCurrentStep' => false,
                'stepAllowTransition' => true,
                'fireException' => false
            ),
            'step_not_allow_transition_fire_exception' => array(
                'expectedException' => InvalidTransitionException::stepHasNoAllowedTransition(
                    'test_workflow',
                    'test_step',
                    'test_transition'
                ),
                'transitionExist' => true,
                'transitionAllowed' => true,
                'isTransitionStart' => false,
                'hasCurrentStep' => true,
                'stepAllowTransition' => false,
            ),
            'step_not_allow_transition_no_exception' => array(
                'expectedResult' => false,
                'transitionExist' => true,
                'transitionAllowed' => true,
                'isTransitionStart' => false,
                'hasCurrentStep' => true,
                'stepAllowTransition' => false,
                'fireException' => false
            ),
        );
    }

    /**
     * @expectedException \Oro\Bundle\WorkflowBundle\Exception\InvalidTransitionException
     * @expectedTransitionMessage Step "stepOne" of workflow "test" doesn't have allowed transition "transition".
     */
    public function testTransitNotAllowedTransition()
    {
        $workflowStep = new WorkflowStep();
        $workflowStep->setName('stepOne');

        $workflowItem = $this->getMockBuilder('Oro\Bundle\WorkflowBundle\Entity\WorkflowItem')
            ->disableOriginalConstructor()
            ->getMock();
        $workflowItem->expects($this->any())
            ->method('getCurrentStep')
            ->will($this->returnValue($workflowStep));

        $step = $this->getStepMock($workflowStep->getName());
        $step->expects($this->once())
            ->method('isAllowedTransition')
            ->with('transition')
            ->will($this->returnValue(false));

        $transition = $this->getTransitionMock('transition');

        $workflow = $this->createWorkflow('test');
        $workflow->getTransitionManager()->setTransitions(array($transition));
        $workflow->getStepManager()->setSteps(array($step));
        $workflow->transit($workflowItem, 'transition');
    }

    public function testTransit()
    {
        $workflowStepOne = new WorkflowStep();
        $workflowStepOne->setName('stepOne');

        $workflowStepTwo = new WorkflowStep();
        $workflowStepTwo->setName('stepTwo');

        $entity = new EntityWithWorkflow();

        $workflowDefinition = $this->getMockBuilder('Oro\Bundle\WorkflowBundle\Entity\WorkflowDefinition')
            ->disableOriginalConstructor()
            ->getMock();
        $workflowDefinition->expects($this->once())
            ->method('getStepByName')
            ->with($workflowStepTwo->getName())
            ->will($this->returnValue($workflowStepTwo));

        $workflowItem = $this->getMockBuilder('Oro\Bundle\WorkflowBundle\Entity\WorkflowItem')
            ->disableOriginalConstructor()
            ->getMock();
        $workflowItem->expects($this->any())
            ->method('getEntity')
            ->will($this->returnValue($entity));
        $workflowItem->expects($this->any())
            ->method('getCurrentStep')
            ->will($this->returnValue($workflowStepOne));
        $workflowItem->expects($this->once())
            ->method('addTransitionRecord')
            ->with($this->isInstanceOf('Oro\Bundle\WorkflowBundle\Entity\WorkflowTransitionRecord'))
            ->will(
                $this->returnCallback(
                    function (WorkflowTransitionRecord $transitionRecord) {
                        self::assertEquals('transition', $transitionRecord->getTransitionName());
                        self::assertEquals('stepOne', $transitionRecord->getStepFrom()->getName());
                        self::assertEquals('stepTwo', $transitionRecord->getStepTo()->getName());
                    }
                )
            );

        $stepOne = $this->getStepMock($workflowStepOne->getName());
        $stepOne->expects($this->once())
            ->method('isAllowedTransition')
            ->with('transition')
            ->will($this->returnValue(true));

        $stepTwo = $this->getStepMock('stepTwo');

        $transition = $this->getTransitionMock('transition', false, $stepTwo);
        $transition->expects($this->once())
            ->method('transit')
            ->with($workflowItem);

        $aclManager = $this->getMockBuilder('Oro\Bundle\WorkflowBundle\Acl\AclManager')
            ->disableOriginalConstructor()
            ->getMock();
        $aclManager->expects($this->once())
            ->method('updateAclIdentities')
            ->with($workflowItem);

        $workflow = $this->createWorkflow(null, $aclManager);
        $workflow->setDefinition($workflowDefinition);
        $workflow->getTransitionManager()->setTransitions(array($transition));
        $workflow->getStepManager()->setSteps(array($stepOne, $stepTwo));
        $workflow->transit($workflowItem, 'transition');
    }

    /**
     * @expectedException \Oro\Bundle\WorkflowBundle\Exception\WorkflowException
     * @expectedExceptionMessage Workflow "test" does not have step entity "stepTwo"
     */
    public function testTransitException()
    {
        $workflowStepOne = new WorkflowStep();
        $workflowStepOne->setName('stepOne');

        $workflowDefinition = $this->getMockBuilder('Oro\Bundle\WorkflowBundle\Entity\WorkflowDefinition')
            ->disableOriginalConstructor()
            ->getMock();

        $workflowItem = $this->getMockBuilder('Oro\Bundle\WorkflowBundle\Entity\WorkflowItem')
            ->disableOriginalConstructor()
            ->getMock();
        $workflowItem->expects($this->any())
            ->method('getCurrentStep')
            ->will($this->returnValue($workflowStepOne));

        $stepOne = $this->getStepMock($workflowStepOne->getName());
        $stepOne->expects($this->once())
            ->method('isAllowedTransition')
            ->with('transition')
            ->will($this->returnValue(true));

        $stepTwo = $this->getStepMock('stepTwo');

        $transition = $this->getTransitionMock('transition', false, $stepTwo);

        $workflow = $this->createWorkflow();
        $workflow->setDefinition($workflowDefinition);
        $workflowDefinition->expects($this->once())->method('getName')->willReturn('test');
        $workflow->getTransitionManager()->setTransitions(array($transition));
        $workflow->getStepManager()->setSteps(array($stepOne));
        $workflow->transit($workflowItem, 'transition');
    }

    /**
     * @dataProvider startDataProvider
     * @param array $data
     * @param string $transitionName
     */
    public function testStart($data, $transitionName)
    {
        if (!$transitionName) {
            $expectedTransitionName = TransitionManager::DEFAULT_START_TRANSITION_NAME;
        } else {
            $expectedTransitionName = $transitionName;
        }

        $workflowStep = new WorkflowStep();
        $workflowStep->setName('step_name');

        $transition = $this->assertTransitionCalled($workflowStep, $expectedTransitionName);

        $workflowDefinition = $this->getMockBuilder(WorkflowDefinition::class)->disableOriginalConstructor()->getMock();
        $workflowDefinition->expects($this->once())
            ->method('getStepByName')
            ->with($workflowStep->getName())
            ->willReturn($workflowStep);
        $workflowDefinition->expects($this->any())->method('getName')->willReturn('test_wf_name');

        $entity = new EntityWithWorkflow();
        $entityAttribute = new Attribute();
        $entityAttribute->setName('entity');

        $this->assertDoctrineHelperCalled($entity, 'test_wf_name');

        $workflow = $this->createWorkflow();
        $workflow->setDefinition($workflowDefinition);
        $workflow->getTransitionManager()->setTransitions([$transition]);
        $workflow->getAttributeManager()->setAttributes([$entityAttribute]);
        $workflow->getAttributeManager()->setEntityAttributeName($entityAttribute->getName());

        $item = $workflow->start($entity, $data, $transitionName);

        $this->assertInstanceOf('Oro\Bundle\WorkflowBundle\Entity\WorkflowItem', $item);
        $this->assertEquals($entity, $item->getEntity());
        $this->assertEquals(array_merge($data, ['entity' => $entity]), $item->getData()->getValues());
    }

    /**
     * @return array
     */
    public function startDataProvider()
    {
        return [
            [[], null],
            [['test' => 'test'], 'test']
        ];
    }

    public function testStartWithNotRelatedEntity()
    {
        $entityClass = 'stdClass';
        $entityId = 42;
        $entityAttributeName = 'test_entity';

        $repository = $this->getMockBuilder(WorkflowItemRepository::class)->disableOriginalConstructor()->getMock();

        $this->doctrineHelper->expects($this->any())->method('getEntityRepositoryForClass')->willReturn($repository);
        $this->doctrineHelper->expects($this->any())
            ->method('getEntityClass')
            ->willReturnCallback('Doctrine\Common\Util\ClassUtils::getClass');
        $this->doctrineHelper->expects($this->any())
            ->method('getSingleEntityIdentifier')
            ->willReturnCallback(
                function ($actual) use ($entityClass, $entityId) {
                    return $actual instanceof $entityClass ? $entityId : null;
                }
            );

        $workflowStep = (new WorkflowStep())->setName('step_name');
        $transition = $this->assertTransitionCalled($workflowStep, TransitionManager::DEFAULT_START_TRANSITION_NAME);

        $workflowDefinition = $this->getMockBuilder(WorkflowDefinition::class)->disableOriginalConstructor()->getMock();
        $workflowDefinition->expects($this->once())
            ->method('getStepByName')
            ->with($workflowStep->getName())
            ->willReturn($workflowStep);
        $workflowDefinition->expects($this->once())->method('getEntityAttributeName')->willReturn($entityAttributeName);
        $workflowDefinition->expects($this->any())->method('getName')->willReturn('test_wf_name');

        $entityAttribute = (new Attribute())->setName('entity');

        $workflow = $this->createWorkflow();
        $workflow->setDefinition($workflowDefinition);
        $workflow->getTransitionManager()->setTransitions([$transition]);
        $workflow->getAttributeManager()->setAttributes([$entityAttribute]);
        $workflow->getAttributeManager()->setEntityAttributeName($entityAttribute->getName());

        $item = $workflow->start(new EntityWithWorkflow(), [$entityAttributeName => new $entityClass]);

        $this->assertInstanceOf(WorkflowItem::class, $item);
        $this->assertEquals(new \stdClass(), $item->getEntity());
        $this->assertEquals(
            ['entity' => new EntityWithWorkflow(), $entityAttributeName => new $entityClass],
            $item->getData()->getValues()
        );
    }

    public function testGetVariables()
    {
        $variables = new ArrayCollection([$this->createMock(Variable::class)]);

        /** @var VariableAssembler|\PHPUnit_Framework_MockObject_MockObject $variableAssembler */
        $variableAssembler = $this->getMockBuilder(VariableAssembler::class)
            ->setMethods(['assemble'])
            ->disableOriginalConstructor()
            ->getMock();
        $variableAssembler->expects($this->any())
            ->method('assemble')
            ->willReturn($variables);

        /** @var VariableManager|\PHPUnit_Framework_MockObject_MockObject $variableManager */
        $variableManager = $this->getMockBuilder(VariableManager::class)
            ->disableOriginalConstructor()
            ->getMock();
        $variableManager->expects($this->any())
            ->method('getVariableAssembler')
            ->willReturn($variableAssembler);

        $workflow = $this->createWorkflow(null, null, null, null, $variableManager);

        $this->assertEquals($variables, $workflow->getVariables());
    }

    public function testGetCachedVariables()
    {
        $variables = new ArrayCollection([$this->createMock(Variable::class)]);

        /** @var VariableAssembler|\PHPUnit_Framework_MockObject_MockObject $variableAssembler */
        $variableAssembler = $this->getMockBuilder(VariableAssembler::class)
            ->setMethods(['assemble'])
            ->disableOriginalConstructor()
            ->getMock();
        $variableAssembler->expects($this->once())
            ->method('assemble')
            ->willReturn($variables);

        /** @var VariableManager|\PHPUnit_Framework_MockObject_MockObject $variableManager */
        $variableManager = $this->getMockBuilder(VariableManager::class)
            ->disableOriginalConstructor()
            ->getMock();
        $variableManager->expects($this->any())
            ->method('getVariableAssembler')
            ->willReturn($variableAssembler);

        $workflow = $this->createWorkflow(null, null, null, null, $variableManager);

        //assemble method was called once, method twice, validates cache
        $workflow->getVariables();
        $this->assertEquals($variables, $workflow->getVariables());
    }

    /**
     * @param WorkflowStep $step
     * @param string $expectedTransitionName
     * @return Transition|\PHPUnit_Framework_MockObject_MockObject
     */
    protected function assertTransitionCalled(WorkflowStep $step, $expectedTransitionName)
    {
        $transition = $this->getTransitionMock($expectedTransitionName, true, $this->getStepMock($step->getName()));
        $transition->expects($this->once())
            ->method('transit')
            ->with($this->isInstanceOf(WorkflowItem::class))
            ->willReturnCallback(
                function (WorkflowItem $workflowItem) use ($step) {
                    $workflowItem->setCurrentStep($step);
                }
            );

        return $transition;
    }

    /**
     * @param string $name
     * @return Step|\PHPUnit_Framework_MockObject_MockObject
     */
    protected function getStepMock($name)
    {
        $step = $this->getMockBuilder('Oro\Bundle\WorkflowBundle\Model\Step')
            ->disableOriginalConstructor()
            ->getMock();
        $step->expects($this->any())
            ->method('getName')
            ->will($this->returnValue($name));

        return $step;
    }

    /**
     * @param string $name
     * @param bool $isStart
     * @param null $step
     * @return Transition|\PHPUnit_Framework_MockObject_MockObject
     */
    protected function getTransitionMock($name, $isStart = false, $step = null)
    {
        $transition = $this->getMockBuilder('Oro\Bundle\WorkflowBundle\Model\Transition')
            ->disableOriginalConstructor()
            ->getMock();
        $transition->expects($this->any())
            ->method('getName')
            ->will($this->returnValue($name));
        if ($isStart) {
            $transition->expects($this->any())
                ->method('isStart')
                ->will($this->returnValue($isStart));
        }
        if ($step) {
            $transition->expects($this->any())
                ->method('getStepTo')
                ->will($this->returnValue($step));
        }

        return $transition;
    }

    public function testGetAllowedTransitions()
    {
        $firstTransition = $this->getTransitionMock('first_transition');
        $secondTransition = $this->getTransitionMock('second_transition');

        $workflowStep = new WorkflowStep();
        $workflowStep->setName('test_step');

        $step = new Step();
        $step->setName($workflowStep->getName());
        $step->setAllowedTransitions(array($secondTransition->getName()));

        $workflow = $this->createWorkflow();
        $workflow->getStepManager()->setSteps(array($step));
        $workflow->getTransitionManager()->setTransitions(array($firstTransition, $secondTransition));

        $workflowItem = new WorkflowItem();
        $workflowItem->setCurrentStep($workflowStep);

        $actualTransitions = $workflow->getTransitionsByWorkflowItem($workflowItem);
        $this->assertEquals(array($secondTransition), $actualTransitions->getValues());
    }

    /**
     * @expectedException \Oro\Bundle\WorkflowBundle\Exception\UnknownStepException
     * @expectedExceptionMessage Step "unknown_step" not found
     */
    public function testGetAllowedTransitionsUnknownStepException()
    {
        $workflowStep = new WorkflowStep();
        $workflowStep->setName('unknown_step');

        $workflowItem = new WorkflowItem();
        $workflowItem->setCurrentStep($workflowStep);

        $workflow = $this->createWorkflow();
        $workflow->getTransitionsByWorkflowItem($workflowItem);
    }

    public function testIsTransitionAvailable()
    {
        /** @var WorkflowItem|\PHPUnit_Framework_MockObject_MockObject $workflowItem */
        $workflowItem = $this->getMockBuilder('Oro\Bundle\WorkflowBundle\Entity\WorkflowItem')
            ->disableOriginalConstructor()
            ->getMock();
        $errors = new ArrayCollection();
        $transitionName = 'test_transition';
        $transition = $this->getTransitionMock($transitionName);
        $transition->expects($this->once())
            ->method('isAvailable')
            ->with($workflowItem, $errors)
            ->will($this->returnValue(true));
        $transitionManager = $this->getMockBuilder('Oro\Bundle\WorkflowBundle\Model\TransitionManager')
            ->disableOriginalConstructor()
            ->getMock();
        $transitionManager->expects($this->once())
            ->method('extractTransition')
            ->with($transition)
            ->will($this->returnValue($transition));

        $workflow = $this->createWorkflow(null, null, null, $transitionManager);

        $this->assertTrue($workflow->isTransitionAvailable($workflowItem, $transition, $errors));
    }

    public function testIsStartTransitionAvailable()
    {
        $data = array();
        $errors = new ArrayCollection();
        $transitionName = 'test_transition';

        $workflowDefinition = $this->getMockBuilder('Oro\Bundle\WorkflowBundle\Entity\WorkflowDefinition')
            ->disableOriginalConstructor()
            ->getMock();

        $transition = $this->getTransitionMock($transitionName);
        $transition->expects($this->once())
            ->method('isAvailable')
            ->with($this->isInstanceOf('Oro\Bundle\WorkflowBundle\Entity\WorkflowItem'), $errors)
            ->will($this->returnValue(true));
        $transitionManager = $this->getMockBuilder('Oro\Bundle\WorkflowBundle\Model\TransitionManager')
            ->disableOriginalConstructor()
            ->getMock();
        $transitionManager->expects($this->once())
            ->method('extractTransition')
            ->with($transition)
            ->will($this->returnValue($transition));
        $entity = new EntityWithWorkflow();
        $entityAttribute = new Attribute();
        $entityAttribute->setName('entity');

        $this->assertDoctrineHelperCalled($entity, null);

        $workflow = $this->createWorkflow(null, null, null, $transitionManager);

        $workflow->setDefinition($workflowDefinition);
        $workflow->getAttributeManager()->setAttributes(array($entityAttribute));
        $workflow->getAttributeManager()->setEntityAttributeName($entityAttribute->getName());

        $this->assertTrue($workflow->isStartTransitionAvailable($transition, $entity, $data, $errors));
    }

    /**
     * @dataProvider passedStepsDataProvider
     * @param array $records
     * @param array $expected
     */
    public function testGetPassedStepsByWorkflowItem($records, $expected)
    {
        $workflowItem = $this->getMockBuilder('Oro\Bundle\WorkflowBundle\Entity\WorkflowItem')
            ->disableOriginalConstructor()
            ->getMock();
        $workflowItem->expects($this->once())
            ->method('getTransitionRecords')
            ->will($this->returnValue($records));

        $stepsOne = $this->getStepMock('step1');
        $stepsOne->expects($this->any())
            ->method('getOrder')
            ->will($this->returnValue(1));
        $stepsTwo = $this->getStepMock('step2');
        $stepsTwo->expects($this->any())
            ->method('getOrder')
            ->will($this->returnValue(2));
        $stepsThree = $this->getStepMock('step3');
        $stepsThree->expects($this->any())
            ->method('getOrder')
            ->will($this->returnValue(2));

        $workflow = $this->createWorkflow();
        $workflow->getStepManager()->setSteps(array($stepsOne, $stepsTwo, $stepsThree));

        $passedSteps = $workflow->getPassedStepsByWorkflowItem($workflowItem);
        $this->assertInstanceOf('Doctrine\Common\Collections\ArrayCollection', $passedSteps);
        $actual = array();
        /** @var Step $step */
        foreach ($passedSteps as $step) {
            $actual[] = $step->getName();
        }
        $this->assertEquals($expected, $actual);
    }

    /**
     * @return array
     */
    public function passedStepsDataProvider()
    {
        return array(
            array(
                array(
                    $this->getTransitionRecordMock('step1')
                ),
                array('step1')
            ),
            array(
                array(
                    $this->getTransitionRecordMock('step1'),
                    $this->getTransitionRecordMock('step2'),
                ),
                array('step1', 'step2')
            ),
            array(
                array(
                    $this->getTransitionRecordMock('step1'),
                    $this->getTransitionRecordMock('step2'),
                    $this->getTransitionRecordMock('step3'),
                    $this->getTransitionRecordMock('step1'),
                    $this->getTransitionRecordMock('step2'),
                ),
                array('step1', 'step2')
            ),
            array(
                array(
                    $this->getTransitionRecordMock('step1'),
                    $this->getTransitionRecordMock('step2'),
                    $this->getTransitionRecordMock('step3'),
                    $this->getTransitionRecordMock('step1'),
                    $this->getTransitionRecordMock('step3'),
                ),
                array('step1', 'step3')
            ),
            array(
                array(
                    $this->getTransitionRecordMock('step1'),
                    $this->getTransitionRecordMock('step2'),
                    $this->getTransitionRecordMock('step3'),
                    $this->getTransitionRecordMock('step1'),
                    $this->getTransitionRecordMock('step2'),
                    $this->getTransitionRecordMock('step1'),
                    $this->getTransitionRecordMock('step2'),
                    $this->getTransitionRecordMock('step1'),
                    $this->getTransitionRecordMock('step3'),
                ),
                array('step1', 'step3')
            ),
            array(
                array(
                    $this->getTransitionRecordMock('step1'),
                    $this->getTransitionRecordMock('step2'),
                    $this->getTransitionRecordMock('step3'),
                    $this->getTransitionRecordMock('step1'),
                    $this->getTransitionRecordMock('step2'),
                    $this->getTransitionRecordMock('step1'),
                    $this->getTransitionRecordMock('step2'),
                    $this->getTransitionRecordMock('step1'),
                    $this->getTransitionRecordMock('step1'),
                    $this->getTransitionRecordMock('step3'),
                    $this->getTransitionRecordMock('step3'),
                ),
                array('step1', 'step3')
            ),
            array(
                array(
                    $this->getTransitionRecordMock('step1'),
                    $this->getTransitionRecordMock('step3'),
                    $this->getTransitionRecordMock('step2'),
                ),
                array('step1', 'step3', 'step2')
            ),
        );
    }

    /**
     * @param string $stepToName
     * @return WorkflowTransitionRecord|\PHPUnit_Framework_MockObject_MockObject
     */
    protected function getTransitionRecordMock($stepToName)
    {
        $workflowStep = new WorkflowStep();
        $workflowStep->setName($stepToName);

        $record = $this->getMockBuilder('Oro\Bundle\WorkflowBundle\Entity\WorkflowTransitionRecord')
            ->disableOriginalConstructor()
            ->getMock();
        $record->expects($this->any())
            ->method('getStepTo')
            ->will($this->returnValue($workflowStep));

        return $record;
    }

    /**
     * @param string $workflowName
     * @param AclManager|\PHPUnit_Framework_MockObject_MockObject $aclManager
     * @param AttributeManager $attributeManager
     * @param TransitionManager $transitionManager
     * @param $variableManager $variableManager
     * @return Workflow
     */
    protected function createWorkflow(
        $workflowName = null,
        $aclManager = null,
        $attributeManager = null,
        $transitionManager = null,
        $variableManager = null
    ) {
        if (!$aclManager) {
            $aclManager = $this->getMockBuilder('Oro\Bundle\WorkflowBundle\Acl\AclManager')
                ->disableOriginalConstructor()
                ->getMock();
        }

        /** @var RestrictionManager|\PHPUnit_Framework_MockObject_MockObject $restrictionManager */
        $restrictionManager = $this->getMockBuilder('Oro\Bundle\WorkflowBundle\Restriction\RestrictionManager')
            ->disableOriginalConstructor()
            ->getMock();

        if (!$variableManager) {
            /** @var VariableAssembler|\PHPUnit_Framework_MockObject_MockObject $variableAssembler */
            $variableAssembler = $this->getMockBuilder(VariableAssembler::class)
                ->setMethods(['assemble'])
                ->disableOriginalConstructor()
                ->getMock();
            $variableAssembler->expects($this->any())
                ->method('assemble')
                ->willReturn(new ArrayCollection());

            /** @var VariableManager|\PHPUnit_Framework_MockObject_MockObject $variableManager */
            $variableManager = $this->getMockBuilder(VariableManager::class)
                ->disableOriginalConstructor()
                ->getMock();
            $variableManager->expects($this->any())
                ->method('getVariableAssembler')
                ->willReturn($variableAssembler);
        }

        $workflow = new Workflow(
            $this->doctrineHelper,
            $aclManager,
            $restrictionManager,
            null,
            $attributeManager,
            $transitionManager,
            $variableManager
        );

        $definition = new WorkflowDefinition();
        $definition->setName($workflowName);
        $workflow->setDefinition($definition);

        return $workflow;
    }

    public function testGetAttributesMapping()
    {
        $attributeOne = $this->getMockBuilder('Oro\Bundle\ActionBundle\Model\Attribute')
            ->getMock();
        $attributeOne->expects($this->once())
            ->method('getPropertyPath');
        $attributeOne->expects($this->never())
            ->method('getName');
        $attributeTwo = $this->getMockBuilder('Oro\Bundle\ActionBundle\Model\Attribute')
            ->getMock();
        $attributeTwo->expects($this->atLeastOnce())
            ->method('getPropertyPath')
            ->will($this->returnValue('path'));
        $attributeTwo->expects($this->once())
            ->method('getName')
            ->will($this->returnValue('name'));

        $attributes = array($attributeOne, $attributeTwo);
        $attributeManager = $this->getMockBuilder('Oro\Bundle\ActionBundle\Model\AttributeManager')
            ->disableOriginalConstructor()
            ->getMock();
        $attributeManager->expects($this->once())
            ->method('getAttributes')
            ->will($this->returnValue($attributes));

        $workflow = $this->createWorkflow(null, null, $attributeManager);
        $expected = array('name' => 'path');
        $this->assertEquals($expected, $workflow->getAttributesMapping());
    }

    /**
     * @dataProvider configurationOptionProvider
     *
     * @param array $data
     * @param string $property
     * @param string $node
     */
    public function testGetConfigurationOption($data, $property, $node)
    {
        $accessor = PropertyAccess::createPropertyAccessor();
        $workflow = $this->createWorkflow();
        $workflow->getDefinition()->setConfiguration([
            $node => $data,
        ]);
        $this->assertEquals($data, $accessor->getValue($workflow, $property));
    }

    /**
     * @return \Generator
     */
    public function configurationOptionProvider()
    {
        yield [
            'data' => ['route1' => ['trans1']],
            'property' => 'initRoutes',
            'node' => WorkflowConfiguration::NODE_INIT_ROUTES
        ];

        yield [
            'data' => ['entity1' => ['trans1']],
            'property' => 'initEntities',
            'node' => WorkflowConfiguration::NODE_INIT_ENTITIES
        ];
    }

    public function testGetInitDatagrids()
    {
        $workflow = $this->createWorkflow();
        $data = ['datagrid1' => ['trans1']];
        $workflow->getDefinition()->setConfiguration([
            WorkflowConfiguration::NODE_INIT_DATAGRIDS => $data,
        ]);
        $this->assertEquals($data, $workflow->getInitDatagrids());
    }

    public function testGetWorkflowItemByEntityId()
    {
        $workflow = $this->createWorkflow('test_workflow');
        $definition = $workflow->getDefinition();
        $definition->setRelatedEntity('entity');
        $entity = new \stdClass();

        $repository = $this->getMockBuilder(WorkflowItemRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
        $repository->expects($this->once())
            ->method('findOneByEntityMetadata')
            ->with('entity', 10, 'test_workflow')
            ->willReturn($entity);

        $this->doctrineHelper->expects($this->once())
            ->method('getEntityRepositoryForClass')
            ->willReturn($repository);

        $this->assertSame($entity, $workflow->getWorkflowItemByEntityId(10));
    }

    /**
     * @param object $entity
     * @param string $workflowName
     */
    protected function assertDoctrineHelperCalled($entity, $workflowName)
    {
        $entityClass = 'stdClass';
        $entityId = 42;

        $repository = $this->getMockBuilder('Oro\Bundle\WorkflowBundle\Entity\Repository\WorkflowItemRepository')
            ->disableOriginalConstructor()
            ->getMock();
        $repository->expects($this->once())
            ->method('findOneByEntityMetadata')
            ->with($entityClass, $entityId, $workflowName)
            ->willReturn(null);

        $this->doctrineHelper->expects($this->once())
            ->method('getEntityRepositoryForClass')
            ->willReturn($repository);
        $this->doctrineHelper->expects($this->once())
            ->method('getEntityClass')
            ->with($entity)
            ->willReturn($entityClass);
        $this->doctrineHelper->expects($this->atLeastOnce())
            ->method('getSingleEntityIdentifier')
            ->with($entity)
            ->willReturn($entityId);
    }
}
