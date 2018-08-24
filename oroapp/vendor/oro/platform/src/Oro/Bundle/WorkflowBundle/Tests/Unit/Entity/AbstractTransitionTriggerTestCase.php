<?php

namespace Oro\Bundle\WorkflowBundle\Tests\Unit\Entity;

use Oro\Bundle\WorkflowBundle\Entity\BaseTransitionTrigger;
use Oro\Bundle\WorkflowBundle\Entity\WorkflowDefinition;

use Oro\Component\Testing\Unit\EntityTestCaseTrait;

abstract class AbstractTransitionTriggerTestCase extends \PHPUnit_Framework_TestCase
{
    use EntityTestCaseTrait;

    /**
     * @var BaseTransitionTrigger
     */
    protected $entity;

    protected function setUp()
    {
        $this->entity = $this->getEntity();
    }

    public function testAccessors()
    {
        $this->assertPropertyAccessors($this->entity, [
            ['id', 1],
            ['queued', false, true],
            ['workflowDefinition', new WorkflowDefinition()],
        ]);
    }

    public function testGetWorkflowName()
    {
        $this->assertNull($this->entity->getWorkflowName());

        $definition = new WorkflowDefinition();
        $definition->setName('test name');

        $this->entity->setWorkflowDefinition($definition);

        $this->assertEquals($definition->getName(), $this->entity->getWorkflowName());
    }

    /**
     * @param BaseTransitionTrigger $trigger
     * @return BaseTransitionTrigger
     */
    protected function setDataToTrigger(BaseTransitionTrigger $trigger)
    {
        return $trigger->setTransitionName('test_transition')
            ->setQueued(false)
            ->setWorkflowDefinition(new WorkflowDefinition());
    }

    protected function assertImportData()
    {
        $trigger = $this->getEntity();
        $this->setDataToTrigger($trigger);
        $this->assertEquals($trigger->getTransitionName(), $this->entity->getTransitionName());
        $this->assertEquals($trigger->getWorkflowDefinition(), $this->entity->getWorkflowDefinition());
        $this->assertEquals($trigger->isQueued(), $this->entity->isQueued());
    }

    /**
     * @return BaseTransitionTrigger
     */
    abstract protected function getEntity();
}
