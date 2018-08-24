<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Util;

use Doctrine\ORM\Query\Parameter;

use Oro\Bundle\ApiBundle\Metadata\EntityMetadata;
use Oro\Bundle\ApiBundle\Metadata\FieldMetadata;
use Oro\Bundle\ApiBundle\Tests\Unit\OrmRelatedTestCase;
use Oro\Bundle\ApiBundle\Tests\Unit\Fixtures\Entity;
use Oro\Bundle\ApiBundle\Util\EntityIdHelper;

class EntityIdHelperTest extends OrmRelatedTestCase
{
    /** @var EntityIdHelper */
    protected $entityIdHelper;

    protected function setUp()
    {
        parent::setUp();
        $this->entityIdHelper = new EntityIdHelper();
    }

    public function testSetIdentifierForEntityWithSingleId()
    {
        $entityId = 123;
        $entity = $this->createMock(Entity\Group::class);
        $entityMetadata = new EntityMetadata();
        $entityMetadata->setClassName(get_class($entity));
        $entityMetadata->setIdentifierFieldNames(['id']);
        $entityMetadata->addField(new FieldMetadata('id'));

        $entity->expects(self::once())
            ->method('setId')
            ->with(self::identicalTo($entityId));

        $this->entityIdHelper->setEntityIdentifier($entity, $entityId, $entityMetadata);
    }

    public function testSetIdentifierForEntityWithSingleIdWithoutSetter()
    {
        $entityId = 123;
        $entity = new Entity\EntityWithoutGettersAndSetters();
        $entityMetadata = new EntityMetadata();
        $entityMetadata->setClassName(get_class($entity));
        $entityMetadata->setIdentifierFieldNames(['id']);
        $entityMetadata->addField(new FieldMetadata('id'));

        $this->entityIdHelper->setEntityIdentifier($entity, $entityId, $entityMetadata);
        $this->assertEquals($entityId, $entity->id);
    }

    public function testSetIdentifierForEntityWithCompositeId()
    {
        $entityId = ['id' => 123, 'title' => 'test'];
        $entity = $this->createMock(Entity\CompositeKeyEntity::class);
        $entityMetadata = new EntityMetadata();
        $entityMetadata->setClassName(get_class($entity));
        $entityMetadata->setIdentifierFieldNames(['id', 'title']);
        $entityMetadata->addField(new FieldMetadata('id'));
        $entityMetadata->addField(new FieldMetadata('title'));

        $entity->expects(self::once())
            ->method('setId')
            ->with(self::identicalTo($entityId['id']));
        $entity->expects(self::once())
            ->method('setTitle')
            ->with(self::identicalTo($entityId['title']));

        $this->entityIdHelper->setEntityIdentifier($entity, $entityId, $entityMetadata);
    }

    public function testSetIdentifierForEntityWithCompositeIdWithRenamedIdentifierFields()
    {
        $entityId = ['renamedId' => 123, 'renamedTitle' => 'test'];
        $entity = new Entity\CompositeKeyEntity();
        $entityMetadata = new EntityMetadata();
        $entityMetadata->setClassName(get_class($entity));
        $entityMetadata->setIdentifierFieldNames(['id', 'title']);
        $entityMetadata->addField(new FieldMetadata('renamedId'))->setPropertyPath('id');
        $entityMetadata->addField(new FieldMetadata('renamedTitle'))->setPropertyPath('title');

        $this->entityIdHelper->setEntityIdentifier($entity, $entityId, $entityMetadata);
        $this->assertEquals($entityId['renamedId'], $entity->getId());
        $this->assertEquals($entityId['renamedTitle'], $entity->getTitle());
    }

    public function testSetInvalidIdentifierForEntityWithCompositeId()
    {
        $entityId = 123;
        $entity = new Entity\CompositeKeyEntity();
        $entityMetadata = new EntityMetadata();
        $entityMetadata->setClassName(get_class($entity));
        $entityMetadata->setIdentifierFieldNames(['id', 'title']);
        $entityMetadata->addField(new FieldMetadata('id'));
        $entityMetadata->addField(new FieldMetadata('title'));

        $this->expectException('\InvalidArgumentException');
        $this->expectExceptionMessage(
            sprintf(
                'Unexpected identifier value "%s" for composite identifier of the entity "%s".',
                $entityId,
                get_class($entity)
            )
        );

        $this->entityIdHelper->setEntityIdentifier($entity, $entityId, $entityMetadata);
    }

    public function testSetIdentifierWithUndefinedFieldMetadataForEntityWithCompositeId()
    {
        $entityId = ['id' => 123, 'title1' => 'test'];
        $entity = new Entity\CompositeKeyEntity();
        $entityMetadata = new EntityMetadata();
        $entityMetadata->setClassName(get_class($entity));
        $entityMetadata->setIdentifierFieldNames(['id', 'title']);
        $entityMetadata->addField(new FieldMetadata('id'));
        $entityMetadata->addField(new FieldMetadata('title'));

        $this->expectException('\InvalidArgumentException');
        $this->expectExceptionMessage(
            sprintf(
                'The entity "%s" does not have metadata for the "title1" property.',
                get_class($entity)
            )
        );

        $this->entityIdHelper->setEntityIdentifier($entity, $entityId, $entityMetadata);
    }

    public function testSetIdentifierWithUndefinedFieldForEntityWithCompositeId()
    {
        $entityId = ['id' => 123, 'title1' => 'test'];
        $entity = new Entity\CompositeKeyEntity();
        $entityMetadata = new EntityMetadata();
        $entityMetadata->setClassName(get_class($entity));
        $entityMetadata->setIdentifierFieldNames(['id', 'title']);
        $entityMetadata->addField(new FieldMetadata('id'));
        $entityMetadata->addField(new FieldMetadata('title1'));

        $this->expectException('\InvalidArgumentException');
        $this->expectExceptionMessage(
            sprintf(
                'The entity "%s" does not have the "title1" property.',
                get_class($entity)
            )
        );

        $this->entityIdHelper->setEntityIdentifier($entity, $entityId, $entityMetadata);
    }

    public function testApplyEntityIdentifierRestrictionForSingleIdEntity()
    {
        $entityClass = Entity\User::class;
        $entityId = 123;
        $entityMetadata = new EntityMetadata();
        $entityMetadata->setClassName($entityClass);
        $entityMetadata->setIdentifierFieldNames(['id']);
        $entityMetadata->addField(new FieldMetadata('id'));

        $qb = $this->em->createQueryBuilder();
        $qb->from($entityClass, 'e')->select('e');

        $this->entityIdHelper->applyEntityIdentifierRestriction($qb, $entityId, $entityMetadata);

        self::assertEquals(
            sprintf('SELECT e FROM %s e WHERE e.id = :id', $entityClass),
            $qb->getDQL()
        );
        /** @var Parameter $parameter */
        $parameter = $qb->getParameters()->first();
        $this->assertEquals('id', $parameter->getName());
        $this->assertEquals($entityId, $parameter->getValue());
    }

    public function testApplyEntityIdentifierRestrictionForSingleIdEntityWithRenamedIdentifierField()
    {
        $entityClass = Entity\User::class;
        $entityId = 123;
        $entityMetadata = new EntityMetadata();
        $entityMetadata->setClassName($entityClass);
        $entityMetadata->setIdentifierFieldNames(['renamedId']);
        $entityMetadata->addField(new FieldMetadata('renamedId'))->setPropertyPath('id');

        $qb = $this->em->createQueryBuilder();
        $qb->from($entityClass, 'e')->select('e');

        $this->entityIdHelper->applyEntityIdentifierRestriction($qb, $entityId, $entityMetadata);

        self::assertEquals(
            sprintf('SELECT e FROM %s e WHERE e.id = :id', $entityClass),
            $qb->getDQL()
        );
        /** @var Parameter $parameter */
        $parameter = $qb->getParameters()->first();
        $this->assertEquals('id', $parameter->getName());
        $this->assertEquals($entityId, $parameter->getValue());
    }

    // @codingStandardsIgnoreStart
    /**
     * @expectedException \Oro\Bundle\ApiBundle\Exception\RuntimeException
     * @expectedExceptionMessage The entity identifier cannot be an array because the entity "Oro\Bundle\ApiBundle\Tests\Unit\Fixtures\Entity\User" has single identifier.
     */
    // @codingStandardsIgnoreEnd
    public function testApplyEntityIdentifierRestrictionForSingleIdEntityWithArrayId()
    {
        $entityClass = Entity\User::class;
        $entityId = [1, 2];
        $entityMetadata = new EntityMetadata();
        $entityMetadata->setClassName($entityClass);
        $entityMetadata->setIdentifierFieldNames(['id']);
        $entityMetadata->addField(new FieldMetadata('id'));

        $qb = $this->em->createQueryBuilder();
        $qb->from($entityClass, 'e')->select('e');

        $this->entityIdHelper->applyEntityIdentifierRestriction($qb, $entityId, $entityMetadata);
    }

    public function testApplyEntityIdentifierRestrictionForCompositeIdEntity()
    {
        $entityClass = Entity\CompositeKeyEntity::class;
        $entityId = ['id' => 123, 'title' => 'test'];
        $entityMetadata = new EntityMetadata();
        $entityMetadata->setClassName($entityClass);
        $entityMetadata->setIdentifierFieldNames(['id', 'title']);
        $entityMetadata->addField(new FieldMetadata('id'));
        $entityMetadata->addField(new FieldMetadata('title'));

        $qb = $this->em->createQueryBuilder();
        $qb->from($entityClass, 'e')->select('e');

        $this->entityIdHelper->applyEntityIdentifierRestriction($qb, $entityId, $entityMetadata);

        $this->assertEquals(
            sprintf('SELECT e FROM %s e WHERE e.id = :id1 AND e.title = :id2', $entityClass),
            $qb->getDQL()
        );
        /** @var Parameter $parameter */
        $parameters = $qb->getParameters();
        $idParameter = $parameters[0];
        $this->assertEquals('id1', $idParameter->getName());
        $this->assertEquals($entityId['id'], $idParameter->getValue());
        $titleParameter = $parameters[1];
        $this->assertEquals('id2', $titleParameter->getName());
        $this->assertEquals($entityId['title'], $titleParameter->getValue());
    }

    public function testApplyEntityIdentifierRestrictionForCompositeIdEntityWithRenamedidentifierFields()
    {
        $entityClass = Entity\CompositeKeyEntity::class;
        $entityId = ['renamedId' => 123, 'renamedTitle' => 'test'];
        $entityMetadata = new EntityMetadata();
        $entityMetadata->setClassName($entityClass);
        $entityMetadata->setIdentifierFieldNames(['renamedId', 'renamedTitle']);
        $entityMetadata->addField(new FieldMetadata('renamedId'))->setPropertyPath('id');
        $entityMetadata->addField(new FieldMetadata('renamedTitle'))->setPropertyPath('title');

        $qb = $this->em->createQueryBuilder();
        $qb->from($entityClass, 'e')->select('e');

        $this->entityIdHelper->applyEntityIdentifierRestriction($qb, $entityId, $entityMetadata);

        $this->assertEquals(
            sprintf('SELECT e FROM %s e WHERE e.id = :id1 AND e.title = :id2', $entityClass),
            $qb->getDQL()
        );
        /** @var Parameter $parameter */
        $parameters = $qb->getParameters();
        $idParameter = $parameters[0];
        $this->assertEquals('id1', $idParameter->getName());
        $this->assertEquals($entityId['renamedId'], $idParameter->getValue());
        $titleParameter = $parameters[1];
        $this->assertEquals('id2', $titleParameter->getName());
        $this->assertEquals($entityId['renamedTitle'], $titleParameter->getValue());
    }

    // @codingStandardsIgnoreStart
    /**
     * @expectedException \Oro\Bundle\ApiBundle\Exception\RuntimeException
     * @expectedExceptionMessage The entity identifier must be an array because the entity "Oro\Bundle\ApiBundle\Tests\Unit\Fixtures\Entity\CompositeKeyEntity" has composite identifier.
     */
    // @codingStandardsIgnoreEnd
    public function testApplyEntityIdentifierRestrictionForCompositeIdEntityWithScalarId()
    {
        $entityClass = Entity\CompositeKeyEntity::class;
        $entityId = 123;
        $entityMetadata = new EntityMetadata();
        $entityMetadata->setClassName($entityClass);
        $entityMetadata->setIdentifierFieldNames(['id', 'title']);
        $entityMetadata->addField(new FieldMetadata('id'));
        $entityMetadata->addField(new FieldMetadata('title'));

        $qb = $this->em->createQueryBuilder();
        $qb->from($entityClass, 'e')->select('e');

        $this->entityIdHelper->applyEntityIdentifierRestriction($qb, $entityId, $entityMetadata);
    }

    // @codingStandardsIgnoreStart
    /**
     * @expectedException \Oro\Bundle\ApiBundle\Exception\RuntimeException
     * @expectedExceptionMessage The entity identifier array must have the key "title" because the entity "Oro\Bundle\ApiBundle\Tests\Unit\Fixtures\Entity\CompositeKeyEntity" has composite identifier.
     */
    // @codingStandardsIgnoreEnd
    public function testApplyEntityIdentifierRestrictionForCompositeIdEntityWithWrongId()
    {
        $entityClass = Entity\CompositeKeyEntity::class;
        $entityId = ['id' => 123];
        $entityMetadata = new EntityMetadata();
        $entityMetadata->setClassName($entityClass);
        $entityMetadata->setIdentifierFieldNames(['id', 'title']);
        $entityMetadata->addField(new FieldMetadata('id'));
        $entityMetadata->addField(new FieldMetadata('title'));

        $qb = $this->em->createQueryBuilder();
        $qb->from($entityClass, 'e')->select('e');

        $this->entityIdHelper->applyEntityIdentifierRestriction($qb, $entityId, $entityMetadata);
    }
}
