<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Processor\Update;

use Oro\Bundle\ApiBundle\Processor\Update\SaveEntity;
use Oro\Bundle\ApiBundle\Tests\Unit\Processor\FormProcessorTestCase;

class SaveEntityTest extends FormProcessorTestCase
{
    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $doctrineHelper;

    /** @var SaveEntity */
    protected $processor;

    protected function setUp()
    {
        parent::setUp();

        $this->doctrineHelper = $this->getMockBuilder('Oro\Bundle\ApiBundle\Util\DoctrineHelper')
            ->disableOriginalConstructor()
            ->getMock();

        $this->processor = new SaveEntity($this->doctrineHelper);
    }

    public function testProcessWhenNoEntity()
    {
        $this->doctrineHelper->expects($this->never())
            ->method('getEntityManager');

        $this->processor->process($this->context);
    }

    public function testProcessForNotSupportedEntity()
    {
        $this->doctrineHelper->expects($this->never())
            ->method('getEntityManager');

        $this->context->setResult([]);
        $this->processor->process($this->context);
    }

    public function testProcessForNotManageableEntity()
    {
        $entity = new \stdClass();

        $this->doctrineHelper->expects($this->once())
            ->method('getEntityManager')
            ->with($this->identicalTo($entity), false)
            ->willReturn(null);

        $this->context->setResult($entity);
        $this->processor->process($this->context);
    }

    public function testProcessForManageableEntity()
    {
        $entity = new \stdClass();

        $em = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->getMock();

        $this->doctrineHelper->expects($this->once())
            ->method('getEntityManager')
            ->with($this->identicalTo($entity), false)
            ->willReturn($em);

        $em->expects($this->once())
            ->method('flush')
            ->with(null);

        $this->context->setResult($entity);
        $this->processor->process($this->context);
    }
}
