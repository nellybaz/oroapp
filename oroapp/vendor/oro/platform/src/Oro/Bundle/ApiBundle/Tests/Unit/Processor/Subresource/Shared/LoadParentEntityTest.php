<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Processor\Subresource\Shared;

use Oro\Bundle\ApiBundle\Config\EntityDefinitionConfig;
use Oro\Bundle\ApiBundle\Metadata\EntityMetadata;
use Oro\Bundle\ApiBundle\Processor\Subresource\Shared\LoadParentEntity;
use Oro\Bundle\ApiBundle\Tests\Unit\Processor\Subresource\GetSubresourceProcessorTestCase;
use Oro\Bundle\ApiBundle\Util\DoctrineHelper;
use Oro\Bundle\ApiBundle\Util\EntityLoader;

class LoadParentEntityTest extends GetSubresourceProcessorTestCase
{
    const TEST_PARENT_CLASS_NAME = 'Test\Class';

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $doctrineHelper;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $entityLoader;

    /** @var LoadParentEntity */
    protected $processor;

    protected function setUp()
    {
        parent::setUp();

        $this->doctrineHelper = $this->createMock(DoctrineHelper::class);
        $this->entityLoader = $this->createMock(EntityLoader::class);

        $this->processor = new LoadParentEntity($this->doctrineHelper, $this->entityLoader);
    }

    public function testProcessWhenParentEntityIsAlreadyLoaded()
    {
        $entity = new \stdClass();

        $this->doctrineHelper->expects($this->never())
            ->method('isManageableEntityClass');

        $this->context->setParentEntity($entity);
        $this->processor->process($this->context);

        $this->assertSame($entity, $this->context->getParentEntity());
    }

    public function testProcessForNotManageableEntity()
    {
        $this->doctrineHelper->expects($this->once())
            ->method('isManageableEntityClass')
            ->with(self::TEST_PARENT_CLASS_NAME)
            ->willReturn(false);

        $this->context->setParentClassName(self::TEST_PARENT_CLASS_NAME);
        $this->context->setParentConfig(new EntityDefinitionConfig());
        $this->processor->process($this->context);

        $this->assertFalse($this->context->hasParentEntity());
    }

    public function testProcessForManageableEntity()
    {
        $parentId = 123;
        $parentMetadata = new EntityMetadata();
        $entity = new \stdClass();

        $this->doctrineHelper->expects($this->once())
            ->method('isManageableEntityClass')
            ->with(self::TEST_PARENT_CLASS_NAME)
            ->willReturn(true);
        $this->entityLoader->expects($this->once())
            ->method('findEntity')
            ->with(self::TEST_PARENT_CLASS_NAME, $parentId, self::identicalTo($parentMetadata))
            ->willReturn($entity);

        $this->context->setParentClassName(self::TEST_PARENT_CLASS_NAME);
        $this->context->setParentId($parentId);
        $this->context->setParentMetadata($parentMetadata);
        $this->processor->process($this->context);

        $this->assertSame($entity, $this->context->getParentEntity());
    }

    public function testProcessForManageableEntityWhenEntityNotFound()
    {
        $parentId = 123;
        $parentMetadata = new EntityMetadata();

        $this->doctrineHelper->expects($this->once())
            ->method('isManageableEntityClass')
            ->with(self::TEST_PARENT_CLASS_NAME)
            ->willReturn(true);
        $this->entityLoader->expects($this->once())
            ->method('findEntity')
            ->with(self::TEST_PARENT_CLASS_NAME, $parentId, self::identicalTo($parentMetadata))
            ->willReturn(null);

        $this->context->setParentClassName(self::TEST_PARENT_CLASS_NAME);
        $this->context->setParentId($parentId);
        $this->context->setParentMetadata($parentMetadata);
        $this->processor->process($this->context);

        $this->assertNull($this->context->getParentEntity());
        $this->assertTrue($this->context->hasParentEntity());
    }

    public function testProcessForResourceBasedOnManageableEntity()
    {
        $parentResourceClass = 'Test\ParentResourceClass';
        $parentId = 123;
        $parentMetadata = new EntityMetadata();
        $entity = new \stdClass();

        $parentConfig = new EntityDefinitionConfig();
        $parentConfig->setParentResourceClass($parentResourceClass);

        $this->doctrineHelper->expects($this->exactly(2))
            ->method('isManageableEntityClass')
            ->willReturnMap([
                [self::TEST_PARENT_CLASS_NAME, false],
                [$parentResourceClass, true],
            ]);
        $this->entityLoader->expects($this->once())
            ->method('findEntity')
            ->with($parentResourceClass, $parentId, self::identicalTo($parentMetadata))
            ->willReturn($entity);

        $this->context->setParentClassName(self::TEST_PARENT_CLASS_NAME);
        $this->context->setParentId($parentId);
        $this->context->setParentConfig($parentConfig);
        $this->context->setParentMetadata($parentMetadata);
        $this->processor->process($this->context);

        $this->assertSame($entity, $this->context->getParentEntity());
    }

    public function testProcessForResourceBasedOnNotManageableEntity()
    {
        $parentResourceClass = 'Test\ParentResourceClass';
        $parentId = 123;
        $parentMetadata = new EntityMetadata();

        $parentConfig = new EntityDefinitionConfig();
        $parentConfig->setParentResourceClass($parentResourceClass);

        $this->doctrineHelper->expects($this->exactly(2))
            ->method('isManageableEntityClass')
            ->willReturnMap([
                [self::TEST_PARENT_CLASS_NAME, false],
                [$parentResourceClass, false],
            ]);
        $this->entityLoader->expects($this->never())
            ->method('findEntity');

        $this->context->setParentClassName(self::TEST_PARENT_CLASS_NAME);
        $this->context->setParentId($parentId);
        $this->context->setParentConfig($parentConfig);
        $this->context->setParentMetadata($parentMetadata);
        $this->processor->process($this->context);

        $this->assertNull($this->context->getParentEntity());
    }
}
