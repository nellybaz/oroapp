<?php

namespace Oro\Bundle\WorkflowBundle\Tests\Unit\Model\Tools;

use Doctrine\Common\Collections\ArrayCollection;

use Oro\Bundle\WorkflowBundle\Entity\WorkflowItem;
use Oro\Bundle\WorkflowBundle\Entity\WorkflowStep;
use Oro\Bundle\WorkflowBundle\Entity\WorkflowTransitionRecord;
use Oro\Bundle\WorkflowBundle\Model\Step;
use Oro\Bundle\WorkflowBundle\Model\StepManager;
use Oro\Bundle\WorkflowBundle\Model\Tools\WorkflowStepHelper;
use Oro\Bundle\WorkflowBundle\Model\Transition;
use Oro\Bundle\WorkflowBundle\Model\TransitionManager;
use Oro\Bundle\WorkflowBundle\Model\Workflow;

use Oro\Component\Testing\Unit\EntityTrait;

class WorkflowStepHelperTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /** @var array */
    protected static $steps;

    /**
     * @dataProvider getStepsAfterDataProvider
     *
     * @param Step $step
     * @param array $expected
     * @param bool $withTree
     */
    public function testGetStepsAfter(Step $step, array $expected, $withTree = false)
    {
        $helper = new WorkflowStepHelper($this->getWorkflowMock());

        $this->assertEquals($expected, $helper->getStepsAfter($step, $withTree));
    }

    /**
     * @return array
     */
    public function getStepsAfterDataProvider()
    {
        return [
            [
                'step' => $this->getStepByNumber(1),
                'expected' => [
                    $this->getStepByNumber(2)
                ]
            ],
            [
                'step' => $this->getStepByNumber(2),
                'expected' => [
                    $this->getStepByNumber(4),
                    $this->getStepByNumber(5)
                ]
            ],
            [
                'step' => $this->getStepByNumber(3),
                'expected' => [
                    $this->getStepByNumber(4)
                ]
            ],
            [
                'step' => $this->getStepByNumber(4),
                'expected' => []
            ],
            [
                'step' => $this->getStepByNumber(5),
                'expected' => []
            ],
            [
                'step' => $this->getStepByNumber(1),
                'expected' => [
                    $this->getStepByNumber(2),
                    $this->getStepByNumber(4),
                    $this->getStepByNumber(5)
                ],
                'withTree' => true
            ]
        ];
    }

    public function testGetStepsBefore()
    {
        $workflowItem = $this->getWorkflowItem(['step6', 'step1', 'step2', 'step3', 'step1', 'step5', 'step4']);
        $startSteps = ['step6', 'step1'];

        $helper = new WorkflowStepHelper($this->getWorkflowMock());
        $this->assertEquals(
            [
                $this->getStepByNumber(1),
                $this->getStepByNumber(5),
                $this->getStepByNumber(4)
            ],
            $helper->getStepsBefore($workflowItem, $startSteps)
        );
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|Workflow
     */
    protected function getWorkflowMock()
    {
        $transitionManager = new TransitionManager(
            [
                $this->getTransition('transition1', $this->getStepByNumber(1)),
                $this->getTransition('transition2', $this->getStepByNumber(2)),
                $this->getTransition('transition3', $this->getStepByNumber(3)),
                $this->getTransition('transition4', $this->getStepByNumber(4)),
                $this->getTransition('transition5', $this->getStepByNumber(5))
            ]
        );
        $stepManager = new StepManager(
            [
                $this->getStepByNumber(1),
                $this->getStepByNumber(2),
                $this->getStepByNumber(3),
                $this->getStepByNumber(4),
                $this->getStepByNumber(5)
            ]
        );

        $workflow = $this->getMockBuilder(Workflow::class)->disableOriginalConstructor()->getMock();
        $workflow->expects($this->any())->method('getTransitionManager')->willReturn($transitionManager);
        $workflow->expects($this->any())->method('getStepManager')->willReturn($stepManager);

        return $workflow;
    }

    /**
     * @param string $name
     * @param Step $stepTo
     * @return Transition|\PHPUnit_Framework_MockObject_MockObject
     */
    protected function getTransition($name, Step $stepTo)
    {
        $transition = $this->createMock(Transition::class);
        $transition->expects($this->any())->method('getName')->willReturn($name);
        $transition->expects($this->any())->method('getLabel')->willReturn($name . 'Label');
        $transition->expects($this->any())->method('getStepTo')->willReturn($stepTo);

        return $transition;
    }

    /**
     * @param string $name
     * @param int $order
     * @param array $allowedTransitions
     * @return Step
     */
    protected function getStep($name, $order, array $allowedTransitions)
    {
        return $this->getEntity(
            Step::class,
            [
                'name' => $name,
                'label' => $name . 'Label',
                'order' => $order,
                'allowedTransitions' => $allowedTransitions
            ]
        );
    }

    /**
     * @param int $number
     * @return Step
     */
    protected function getStepByNumber($number)
    {
        if (!self::$steps) {
            self::$steps = [
                1 => $this->getStep('step1', 10, ['transition2']),
                2 => $this->getStep('step2', 20, ['transition1', 'transition3', 'transition4', 'transition5']),
                3 => $this->getStep('step3', 20, ['transition1', 'transition4']),
                4 => $this->getStep('step4', 30, ['transition1', 'transition2', 'transition3']),
                5 => $this->getStep('step5', 40, ['transition2'])
            ];
        }

        return self::$steps[$number];
    }

    /**
     * @param array $records
     * @return WorkflowItem
     */
    protected function getWorkflowItem(array $records = [])
    {
        $recordObjects = [];
        foreach ($records as $stepTo) {
            $recordObjects[] = $this->getWorkflowTransitionRecord($stepTo);
        }

        return $this->getEntity(WorkflowItem::class, ['transitionRecords' => new ArrayCollection($recordObjects)]);
    }

    /**
     * @param string $stepTo
     * @return WorkflowTransitionRecord
     */
    protected function getWorkflowTransitionRecord($stepTo)
    {
        $step = $this->getEntity(WorkflowStep::class, ['name' => $stepTo]);

        return $this->getEntity(WorkflowTransitionRecord::class, ['stepTo' => $step]);
    }
}
