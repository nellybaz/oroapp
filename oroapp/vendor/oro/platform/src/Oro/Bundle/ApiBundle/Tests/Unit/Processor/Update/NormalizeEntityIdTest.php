<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Processor\Update;

use Oro\Bundle\ApiBundle\Metadata\EntityMetadata;
use Oro\Bundle\ApiBundle\Model\Error;
use Oro\Bundle\ApiBundle\Processor\Update\NormalizeEntityId;
use Oro\Bundle\ApiBundle\Processor\Update\UpdateContext;
use Oro\Bundle\ApiBundle\Request\EntityIdTransformerInterface;
use Oro\Bundle\ApiBundle\Tests\Unit\Processor\FormProcessorTestCase;

class NormalizeEntityIdTest extends FormProcessorTestCase
{
    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $entityIdTransformer;

    /** @var NormalizeEntityId */
    protected $processor;

    protected function setUp()
    {
        parent::setUp();

        $this->entityIdTransformer = $this->createMock(EntityIdTransformerInterface::class);

        $this->processor = new NormalizeEntityId($this->entityIdTransformer);
    }

    /**
     * {@inheritdoc}
     */
    protected function createContext()
    {
        return new UpdateContext($this->configProvider, $this->metadataProvider);
    }

    public function testProcessWhenIdAlreadyNormalized()
    {
        $this->context->setClassName('Test\Class');
        $this->context->setId(123);

        $this->entityIdTransformer->expects($this->never())
            ->method('reverseTransform');

        $this->processor->process($this->context);
    }

    public function testProcess()
    {
        $this->context->setClassName('Test\Class');
        $this->context->setId('123');
        $this->context->setMetadata(new EntityMetadata());

        $this->entityIdTransformer->expects($this->once())
            ->method('reverseTransform')
            ->with($this->context->getId(), self::identicalTo($this->context->getMetadata()))
            ->willReturn(123);

        $this->processor->process($this->context);

        $this->assertSame(123, $this->context->getId());
    }

    public function testProcessForInvalidId()
    {
        $this->context->setClassName('Test\Class');
        $this->context->setId('123');
        $this->context->setMetadata(new EntityMetadata());

        $this->entityIdTransformer->expects($this->once())
            ->method('reverseTransform')
            ->with($this->context->getId(), self::identicalTo($this->context->getMetadata()))
            ->willThrowException(new \Exception('some error'));

        $this->processor->process($this->context);

        $this->assertSame('123', $this->context->getId());
        $this->assertEquals(
            [
                Error::createValidationError('entity identifier constraint')
                    ->setInnerException(new \Exception('some error'))
            ],
            $this->context->getErrors()
        );
    }
}
