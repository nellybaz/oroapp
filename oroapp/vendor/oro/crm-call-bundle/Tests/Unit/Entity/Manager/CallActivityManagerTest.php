<?php

namespace Oro\Bundle\CallBundle\Tests\Unit\Entity\Manager;

use Oro\Bundle\CallBundle\Entity\Call;
use Oro\Bundle\CallBundle\Entity\Manager\CallActivityManager;
use Oro\Bundle\CallBundle\Tests\Unit\Fixtures\Entity\TestTarget;

class CallActivityManagerTest extends \PHPUnit_Framework_TestCase
{
    /** @var \PHPUnit_Framework_MockObject_MockObject */
    private $activityManager;

    /** @var CallActivityManager */
    private $manager;

    protected function setUp()
    {
        $this->activityManager = $this->getMockBuilder('Oro\Bundle\ActivityBundle\Manager\ActivityManager')
            ->disableOriginalConstructor()
            ->getMock();

        $this->manager = new CallActivityManager($this->activityManager);
    }

    public function testAddAssociation()
    {
        $call   = new Call();
        $target = new TestTarget();

        $this->activityManager->expects($this->once())
            ->method('addActivityTarget')
            ->with($this->identicalTo($call), $this->identicalTo($target))
            ->will($this->returnValue(true));

        $this->assertTrue(
            $this->manager->addAssociation($call, $target)
        );
    }
}
