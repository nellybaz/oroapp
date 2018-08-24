<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Processor\Shared;

use Oro\Bundle\ApiBundle\Processor\Shared\ActionAvailabilityCheck;
use Oro\Bundle\ApiBundle\Provider\ResourcesProvider;
use Oro\Bundle\ApiBundle\Tests\Unit\Processor\GetList\GetListProcessorTestCase;

class ActionAvailabilityCheckTest extends GetListProcessorTestCase
{
    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $resourcesProvider;

    /** @var ActionAvailabilityCheck */
    protected $processor;

    protected function setUp()
    {
        parent::setUp();

        $this->resourcesProvider = $this->getMockBuilder(ResourcesProvider::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->processor = new ActionAvailabilityCheck($this->resourcesProvider);
    }

    /**
     * @expectedException \Oro\Bundle\ApiBundle\Exception\ActionNotAllowedException
     */
    public function testProcessWhenActionIsExcluded()
    {
        $entityClass = 'Test\Class';

        $this->resourcesProvider->expects($this->once())
            ->method('getResourceExcludeActions')
            ->with($entityClass, $this->context->getVersion(), $this->context->getRequestType())
            ->willReturn(['action1', 'action2']);

        $this->context->setClassName($entityClass);
        $this->context->setAction('action1');
        $this->processor->process($this->context);
    }

    public function testProcessWhenActionIsNotExcluded()
    {
        $entityClass = 'Test\Class';

        $this->resourcesProvider->expects($this->once())
            ->method('getResourceExcludeActions')
            ->with($entityClass, $this->context->getVersion(), $this->context->getRequestType())
            ->willReturn([]);

        $this->context->setClassName($entityClass);
        $this->context->setAction('action1');
        $this->processor->process($this->context);
    }
}
