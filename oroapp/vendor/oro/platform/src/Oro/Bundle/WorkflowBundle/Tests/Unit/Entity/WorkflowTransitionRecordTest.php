<?php

namespace Oro\Bundle\WorkflowBundle\Tests\Unit\Entity;

use Oro\Bundle\WorkflowBundle\Entity\WorkflowItem;
use Oro\Bundle\WorkflowBundle\Entity\WorkflowTransitionRecord;

class WorkflowTransitionRecordTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var WorkflowTransitionRecord
     */
    protected $transitionRecord;

    protected function setUp()
    {
        $this->transitionRecord = new WorkflowTransitionRecord();
    }

    protected function tearDown()
    {
        unset($this->transitionRecord);
    }

    public function testGetId()
    {
        $this->assertNull($this->transitionRecord->getId());

        $value = 42;
        $idReflection = new \ReflectionProperty('Oro\Bundle\WorkflowBundle\Entity\WorkflowTransitionRecord', 'id');
        $idReflection->setAccessible(true);
        $idReflection->setValue($this->transitionRecord, $value);
        $this->assertEquals($value, $this->transitionRecord->getId());
    }

    public function testGetSetWorkflowItem()
    {
        $this->assertNull($this->transitionRecord->getWorkflowItem());

        $value = new WorkflowItem();
        $this->assertEquals($this->transitionRecord, $this->transitionRecord->setWorkflowItem($value));
        $this->assertEquals($value, $this->transitionRecord->getWorkflowItem());
    }

    public function testGetSetTransitionName()
    {
        $this->assertNull($this->transitionRecord->getTransitionName());

        $value = 'transition_name';
        $this->assertEquals($this->transitionRecord, $this->transitionRecord->setTransitionName($value));
        $this->assertEquals($value, $this->transitionRecord->getTransitionName());
    }

    public function testGetSetStepFromName()
    {
        $this->assertNull($this->transitionRecord->getStepFrom());

        $value = $this->getMockBuilder('Oro\Bundle\WorkflowBundle\Entity\WorkflowStep')
            ->disableOriginalConstructor()
            ->getMock();
        $this->assertEquals($this->transitionRecord, $this->transitionRecord->setStepFrom($value));
        $this->assertEquals($value, $this->transitionRecord->getStepFrom());
    }

    public function testGetSetStepToName()
    {
        $this->assertNull($this->transitionRecord->getStepTo());

        $value = $this->getMockBuilder('Oro\Bundle\WorkflowBundle\Entity\WorkflowStep')
            ->disableOriginalConstructor()
            ->getMock();
        $this->assertEquals($this->transitionRecord, $this->transitionRecord->setStepTo($value));
        $this->assertEquals($value, $this->transitionRecord->getStepTo());
    }

    public function testGetTransitionDateAndPrePersist()
    {
        $this->assertNull($this->transitionRecord->getTransitionDate());
        $this->transitionRecord->prePersist();
        $this->assertInstanceOf('\DateTime', $this->transitionRecord->getTransitionDate());
        $this->assertEquals(time(), $this->transitionRecord->getTransitionDate()->getTimestamp(), '', 5);
    }
}
