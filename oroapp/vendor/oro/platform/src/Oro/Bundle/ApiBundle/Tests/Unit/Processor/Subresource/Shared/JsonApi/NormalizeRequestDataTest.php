<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Processor\Subresource\Shared\JsonApi;

use Oro\Bundle\ApiBundle\Metadata\AssociationMetadata;
use Oro\Bundle\ApiBundle\Metadata\EntityMetadata;
use Oro\Bundle\ApiBundle\Model\Error;
use Oro\Bundle\ApiBundle\Model\ErrorSource;
use Oro\Bundle\ApiBundle\Processor\Subresource\Shared\JsonApi\NormalizeRequestData;
use Oro\Bundle\ApiBundle\Request\DataType;
use Oro\Bundle\ApiBundle\Request\EntityIdTransformerInterface;
use Oro\Bundle\ApiBundle\Request\ValueNormalizer;
use Oro\Bundle\ApiBundle\Tests\Unit\Processor\Subresource\ChangeRelationshipProcessorTestCase;

class NormalizeRequestDataTest extends ChangeRelationshipProcessorTestCase
{
    const ASSOCIATION_NAME = 'testAssociation';

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $valueNormalizer;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $entityIdTransformer;

    /** @var NormalizeRequestData */
    protected $processor;

    public function setUp()
    {
        parent::setUp();

        $this->valueNormalizer = $this->createMock(ValueNormalizer::class);
        $this->entityIdTransformer = $this->createMock(EntityIdTransformerInterface::class);

        $this->processor = new NormalizeRequestData($this->valueNormalizer, $this->entityIdTransformer);
    }

    public function testNormalizeDataForToOneAssociation()
    {
        $parentMetadata = new EntityMetadata();
        $associationTargetMetadata = new EntityMetadata();
        $parentMetadata->addAssociation(new AssociationMetadata(self::ASSOCIATION_NAME))
            ->setTargetMetadata($associationTargetMetadata);

        $this->valueNormalizer->expects($this->once())
            ->method('normalizeValue')
            ->with('entity', DataType::ENTITY_CLASS, $this->context->getRequestType(), false, false)
            ->willReturn('Test\Class');
        $this->entityIdTransformer->expects($this->once())
            ->method('reverseTransform')
            ->with('val', self::identicalTo($associationTargetMetadata))
            ->willReturn('normalizedVal');

        $this->context->setRequestData(['data' => ['type' => 'entity', 'id' => 'val']]);
        $this->context->setParentMetadata($parentMetadata);
        $this->context->setAssociationName(self::ASSOCIATION_NAME);
        $this->context->setIsCollection(false);
        $this->processor->process($this->context);

        $expectedData = [
            self::ASSOCIATION_NAME => [
                'id'    => 'normalizedVal',
                'class' => 'Test\Class'
            ]
        ];

        $this->assertEquals($expectedData, $this->context->getRequestData());
    }

    public function testNormalizeEmptyDataForToOneAssociation()
    {
        $parentMetadata = new EntityMetadata();
        $associationTargetMetadata = new EntityMetadata();
        $parentMetadata->addAssociation(new AssociationMetadata(self::ASSOCIATION_NAME))
            ->setTargetMetadata($associationTargetMetadata);

        $this->valueNormalizer->expects($this->never())
            ->method('normalizeValue');
        $this->entityIdTransformer->expects($this->never())
            ->method('reverseTransform');

        $this->context->setRequestData(['data' => null]);
        $this->context->setParentMetadata($parentMetadata);
        $this->context->setAssociationName(self::ASSOCIATION_NAME);
        $this->context->setIsCollection(false);
        $this->processor->process($this->context);

        $expectedData = [
            self::ASSOCIATION_NAME => null
        ];

        $this->assertEquals($expectedData, $this->context->getRequestData());
    }

    public function testNormalizeDataForToManyAssociation()
    {
        $parentMetadata = new EntityMetadata();
        $associationTargetMetadata = new EntityMetadata();
        $parentMetadata->addAssociation(new AssociationMetadata(self::ASSOCIATION_NAME))
            ->setTargetMetadata($associationTargetMetadata);

        $this->valueNormalizer->expects($this->exactly(2))
            ->method('normalizeValue')
            ->willReturnMap(
                [
                    ['entity1', DataType::ENTITY_CLASS, $this->context->getRequestType(), false, false, 'Test\Class1'],
                    ['entity2', DataType::ENTITY_CLASS, $this->context->getRequestType(), false, false, 'Test\Class2'],
                ]
            );
        $this->entityIdTransformer->expects($this->exactly(2))
            ->method('reverseTransform')
            ->willReturnMap(
                [
                    ['val1', $associationTargetMetadata, 'normalizedVal1'],
                    ['val2', $associationTargetMetadata, 'normalizedVal2'],
                ]
            );

        $this->context->setRequestData(
            [
                'data' => [
                    ['type' => 'entity1', 'id' => 'val1'],
                    ['type' => 'entity2', 'id' => 'val2']
                ]
            ]
        );
        $this->context->setParentMetadata($parentMetadata);
        $this->context->setAssociationName(self::ASSOCIATION_NAME);
        $this->context->setIsCollection(true);
        $this->processor->process($this->context);

        $expectedData = [
            self::ASSOCIATION_NAME => [
                [
                    'id'    => 'normalizedVal1',
                    'class' => 'Test\Class1'
                ],
                [
                    'id'    => 'normalizedVal2',
                    'class' => 'Test\Class2'
                ]
            ]
        ];

        $this->assertEquals($expectedData, $this->context->getRequestData());
    }

    public function testNormalizeEmptyDataForToManyAssociation()
    {
        $parentMetadata = new EntityMetadata();
        $associationTargetMetadata = new EntityMetadata();
        $parentMetadata->addAssociation(new AssociationMetadata(self::ASSOCIATION_NAME))
            ->setTargetMetadata($associationTargetMetadata);

        $this->valueNormalizer->expects($this->never())
            ->method('normalizeValue');
        $this->entityIdTransformer->expects($this->never())
            ->method('reverseTransform');

        $this->context->setRequestData(['data' => []]);
        $this->context->setParentMetadata($parentMetadata);
        $this->context->setAssociationName(self::ASSOCIATION_NAME);
        $this->context->setIsCollection(true);
        $this->processor->process($this->context);

        $expectedData = [
            self::ASSOCIATION_NAME => []
        ];

        $this->assertEquals($expectedData, $this->context->getRequestData());
    }

    public function testProcessWithInvalidEntityTypeForToOneAssociation()
    {
        $parentMetadata = new EntityMetadata();
        $associationTargetMetadata = new EntityMetadata();
        $parentMetadata->addAssociation(new AssociationMetadata(self::ASSOCIATION_NAME))
            ->setTargetMetadata($associationTargetMetadata);

        $this->valueNormalizer->expects($this->once())
            ->method('normalizeValue')
            ->willThrowException(new \Exception('cannot normalize entity type'));
        $this->entityIdTransformer->expects($this->never())
            ->method('reverseTransform');

        $this->context->setRequestData(['data' => ['type' => 'entity', 'id' => 'val']]);
        $this->context->setParentMetadata($parentMetadata);
        $this->context->setAssociationName(self::ASSOCIATION_NAME);
        $this->context->setIsCollection(false);
        $this->processor->process($this->context);

        $expectedData = [
            self::ASSOCIATION_NAME => [
                'id'    => 'val',
                'class' => 'entity'
            ]
        ];

        $this->assertEquals($expectedData, $this->context->getRequestData());
        $this->assertEquals(
            [
                Error::createValidationError('entity type constraint')
                    ->setInnerException(new \Exception('cannot normalize entity type'))
                    ->setSource(ErrorSource::createByPointer('/data/type'))
            ],
            $this->context->getErrors()
        );
    }

    public function testProcessWithInvalidIdentifierForToOneAssociation()
    {
        $parentMetadata = new EntityMetadata();
        $associationTargetMetadata = new EntityMetadata();
        $parentMetadata->addAssociation(new AssociationMetadata(self::ASSOCIATION_NAME))
            ->setTargetMetadata($associationTargetMetadata);

        $this->valueNormalizer->expects($this->once())
            ->method('normalizeValue')
            ->with('entity', DataType::ENTITY_CLASS, $this->context->getRequestType(), false, false)
            ->willReturn('Test\Class');
        $this->entityIdTransformer->expects($this->once())
            ->method('reverseTransform')
            ->willThrowException(new \Exception('cannot normalize id'));

        $this->context->setRequestData(['data' => ['type' => 'entity', 'id' => 'val']]);
        $this->context->setParentMetadata($parentMetadata);
        $this->context->setAssociationName(self::ASSOCIATION_NAME);
        $this->context->setIsCollection(false);
        $this->processor->process($this->context);

        $expectedData = [
            self::ASSOCIATION_NAME => [
                'id'    => 'val',
                'class' => 'Test\Class'
            ]
        ];

        $this->assertEquals($expectedData, $this->context->getRequestData());
        $this->assertEquals(
            [
                Error::createValidationError('entity identifier constraint')
                    ->setInnerException(new \Exception('cannot normalize id'))
                    ->setSource(ErrorSource::createByPointer('/data/id'))
            ],
            $this->context->getErrors()
        );
    }

    public function testProcessWithInvalidEntityTypesForToManyAssociation()
    {
        $parentMetadata = new EntityMetadata();
        $associationTargetMetadata = new EntityMetadata();
        $parentMetadata->addAssociation(new AssociationMetadata(self::ASSOCIATION_NAME))
            ->setTargetMetadata($associationTargetMetadata);

        $this->valueNormalizer->expects($this->exactly(2))
            ->method('normalizeValue')
            ->willThrowException(new \Exception('cannot normalize entity type'));
        $this->entityIdTransformer->expects($this->never())
            ->method('reverseTransform');

        $this->context->setRequestData(
            [
                'data' => [
                    ['type' => 'entity1', 'id' => 'val1'],
                    ['type' => 'entity2', 'id' => 'val2']
                ]
            ]
        );
        $this->context->setParentMetadata($parentMetadata);
        $this->context->setAssociationName(self::ASSOCIATION_NAME);
        $this->context->setIsCollection(true);
        $this->processor->process($this->context);

        $expectedData = [
            self::ASSOCIATION_NAME => [
                [
                    'id'    => 'val1',
                    'class' => 'entity1'
                ],
                [
                    'id'    => 'val2',
                    'class' => 'entity2'
                ]
            ]
        ];

        $this->assertEquals($expectedData, $this->context->getRequestData());
        $this->assertEquals(
            [
                Error::createValidationError('entity type constraint')
                    ->setInnerException(new \Exception('cannot normalize entity type'))
                    ->setSource(ErrorSource::createByPointer('/data/0/type')),
                Error::createValidationError('entity type constraint')
                    ->setInnerException(new \Exception('cannot normalize entity type'))
                    ->setSource(ErrorSource::createByPointer('/data/1/type')),
            ],
            $this->context->getErrors()
        );
    }

    public function testProcessWithInvalidIdentifiersForToManyAssociation()
    {
        $parentMetadata = new EntityMetadata();
        $associationTargetMetadata = new EntityMetadata();
        $parentMetadata->addAssociation(new AssociationMetadata(self::ASSOCIATION_NAME))
            ->setTargetMetadata($associationTargetMetadata);

        $this->valueNormalizer->expects($this->exactly(2))
            ->method('normalizeValue')
            ->willReturnMap(
                [
                    ['entity1', DataType::ENTITY_CLASS, $this->context->getRequestType(), false, false, 'Test\Class1'],
                    ['entity2', DataType::ENTITY_CLASS, $this->context->getRequestType(), false, false, 'Test\Class2'],
                ]
            );
        $this->entityIdTransformer->expects($this->exactly(2))
            ->method('reverseTransform')
            ->willThrowException(new \Exception('cannot normalize id'));

        $this->context->setRequestData(
            [
                'data' => [
                    ['type' => 'entity1', 'id' => 'val1'],
                    ['type' => 'entity2', 'id' => 'val2']
                ]
            ]
        );
        $this->context->setParentMetadata($parentMetadata);
        $this->context->setAssociationName(self::ASSOCIATION_NAME);
        $this->context->setIsCollection(true);
        $this->processor->process($this->context);

        $expectedData = [
            self::ASSOCIATION_NAME => [
                [
                    'id'    => 'val1',
                    'class' => 'Test\Class1'
                ],
                [
                    'id'    => 'val2',
                    'class' => 'Test\Class2'
                ]
            ]
        ];

        $this->assertEquals($expectedData, $this->context->getRequestData());
        $this->assertEquals(
            [
                Error::createValidationError('entity identifier constraint')
                    ->setInnerException(new \Exception('cannot normalize id'))
                    ->setSource(ErrorSource::createByPointer('/data/0/id')),
                Error::createValidationError('entity identifier constraint')
                    ->setInnerException(new \Exception('cannot normalize id'))
                    ->setSource(ErrorSource::createByPointer('/data/1/id')),
            ],
            $this->context->getErrors()
        );
    }
}
