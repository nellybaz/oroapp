<?php

namespace Oro\Bundle\WorkflowBundle\Tests\Unit\Model;

use Oro\Bundle\WorkflowBundle\Model\Step;

class StepTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Step
     */
    protected $step;

    protected function setUp()
    {
        $this->step = new Step();
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
        $this->assertInstanceOf(
            'Oro\Bundle\WorkflowBundle\Model\Step',
            call_user_func_array(array($this->step, $setter), array($value))
        );
        $this->assertEquals($value, call_user_func_array(array($this->step, $getter), array()));
    }

    public function propertiesDataProvider()
    {
        $entity = $this->getMockBuilder('Oro\Bundle\WorkflowBundle\Entity\WorkflowStep')
            ->disableOriginalConstructor()
            ->getMock();
        return array(
            'name' => array('name', 'test'),
            'order' => array('order', 1),
            'allowedTransitions' => array('allowedTransitions', array('one', 'two')),
            'label' => array('label', 'Value'),
        );
    }

    public function testIsFinal()
    {
        $this->assertFalse($this->step->isFinal());
        $this->step->setFinal(true);
        $this->assertTrue($this->step->isFinal());
        $this->step->setFinal(false);
        $this->assertFalse($this->step->isFinal());
    }

    public function testAllowTransition()
    {
        $this->assertFalse($this->step->hasAllowedTransitions());
        $this->step->allowTransition('test');
        $this->assertTrue($this->step->hasAllowedTransitions());
        $this->assertEquals(array('test'), $this->step->getAllowedTransitions(), 'Transition was not allowed');

        // Check duplicate
        $this->step->allowTransition('test');
        $this->assertEquals(
            array('test'),
            $this->step->getAllowedTransitions(),
            'Transition was allowed more than once'
        );

        // Check allowing more than one transition
        $this->step->allowTransition('test2');
        $this->assertEquals(
            array('test', 'test2'),
            $this->step->getAllowedTransitions(),
            'Second transition was not allowed'
        );

        // Check disallow
        $this->step->disallowTransition('test2');
        $this->assertEquals(array('test'), $this->step->getAllowedTransitions(), 'Transition was not disallowed');

        // Check isAllowed
        $this->assertTrue($this->step->isAllowedTransition('test'), 'Expected transition not allowed');
        $this->assertFalse($this->step->isAllowedTransition('test2'), 'Unexpected transition allowed');
    }

    public function testEntityAclAllowed()
    {
        $this->assertTrue($this->step->isEntityUpdateAllowed('not_existing_attribute'));
        $this->assertTrue($this->step->isEntityDeleteAllowed('not_existing_attribute'));

        $this->step->setEntityAcls(array('existing_attribute' => array('update' => false, 'delete' => false)));
        $this->assertFalse($this->step->isEntityUpdateAllowed('existing_attribute'));
        $this->assertFalse($this->step->isEntityDeleteAllowed('existing_attribute'));

        $this->step->setEntityAcls(array('existing_attribute' => array('update' => true, 'delete' => true)));
        $this->assertTrue($this->step->isEntityUpdateAllowed('existing_attribute'));
        $this->assertTrue($this->step->isEntityDeleteAllowed('existing_attribute'));
    }
}
