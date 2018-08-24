<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Form\Type;

use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\Forms;

use Oro\Bundle\ApiBundle\Collection\IncludedEntityCollection;
use Oro\Bundle\ApiBundle\Collection\IncludedEntityData;
use Oro\Bundle\ApiBundle\Form\Type\EntityType;
use Oro\Bundle\ApiBundle\Metadata\AssociationMetadata;
use Oro\Bundle\ApiBundle\Tests\Unit\Fixtures\Entity\Group;
use Oro\Bundle\ApiBundle\Tests\Unit\OrmRelatedTestCase;
use Oro\Bundle\ApiBundle\Util\EntityLoader;

class EntityTypeTest extends OrmRelatedTestCase
{
    /** @var FormFactoryInterface */
    protected $factory;

    protected function setUp()
    {
        parent::setUp();

        $this->factory = Forms::createFormFactoryBuilder()->getFormFactory();
    }

    /**
     * @dataProvider validSingleEmptyValuesDataProvider
     */
    public function testSingleWithValidEmptyValue($value, $expected)
    {
        $associationMetadata = new AssociationMetadata();
        $associationMetadata->setIsCollection(false);
        $associationMetadata->setAcceptableTargetClassNames([Group::class]);

        $form = $this->factory->create(
            new EntityType($this->doctrine, new EntityLoader($this->doctrine)),
            null,
            ['metadata' => $associationMetadata]
        );
        $form->submit($value);
        $this->assertTrue($form->isSynchronized());
        $this->assertEquals($expected, $form->getData());
    }

    public function validSingleEmptyValuesDataProvider()
    {
        return [
            [null, null],
            ['', null],
            [[], null],
        ];
    }

    /**
     * @dataProvider validMultipleEmptyValuesDataProvider
     */
    public function testMultipleWithValidEmptyValue($value, $expected)
    {
        $associationMetadata = new AssociationMetadata();
        $associationMetadata->setIsCollection(true);
        $associationMetadata->setAcceptableTargetClassNames([Group::class]);

        $form = $this->factory->create(
            new EntityType($this->doctrine, new EntityLoader($this->doctrine)),
            null,
            ['metadata' => $associationMetadata]
        );
        $form->submit($value);
        $this->assertTrue($form->isSynchronized());
        $this->assertEquals($expected, $form->getData());
    }

    public function validMultipleEmptyValuesDataProvider()
    {
        return [
            [null, new ArrayCollection()],
            ['', new ArrayCollection()],
            [[], new ArrayCollection()],
        ];
    }

    public function testSingleWithValidValue()
    {
        $value = ['class' => Group::class, 'id' => 123];
        $entity = new Group();
        $entity->setId($value['id']);
        $entity->setName('test');

        $this->setQueryExpectation(
            $this->getDriverConnectionMock($this->em),
            'SELECT t0.id AS id_1, t0.name AS name_2 FROM group_table t0 WHERE t0.id = ?',
            [
                [
                    'id_1'   => $entity->getId(),
                    'name_2' => $entity->getName()
                ]
            ],
            [1 => $value['id']],
            [1 => \PDO::PARAM_INT]
        );

        $associationMetadata = new AssociationMetadata();
        $associationMetadata->setIsCollection(false);
        $associationMetadata->setAcceptableTargetClassNames([Group::class]);

        $form = $this->factory->create(
            new EntityType($this->doctrine, new EntityLoader($this->doctrine)),
            null,
            ['metadata' => $associationMetadata]
        );
        $form->submit($value);
        $this->assertTrue($form->isSynchronized());
    }

    public function testMultipleWithValidValue()
    {
        $value = ['class' => Group::class, 'id' => 123];
        $entity = new Group();
        $entity->setId($value['id']);
        $entity->setName('test');

        $this->setQueryExpectation(
            $this->getDriverConnectionMock($this->em),
            'SELECT t0.id AS id_1, t0.name AS name_2 FROM group_table t0 WHERE t0.id = ?',
            [
                [
                    'id_1'   => $entity->getId(),
                    'name_2' => $entity->getName()
                ]
            ],
            [1 => $value['id']],
            [1 => \PDO::PARAM_INT]
        );

        $associationMetadata = new AssociationMetadata();
        $associationMetadata->setIsCollection(true);
        $associationMetadata->setAcceptableTargetClassNames([Group::class]);

        $form = $this->factory->create(
            new EntityType($this->doctrine, new EntityLoader($this->doctrine)),
            null,
            ['metadata' => $associationMetadata]
        );
        $form->submit([$value]);
        $this->assertTrue($form->isSynchronized());
    }

    public function testSingleWithInvalidValue()
    {
        $associationMetadata = new AssociationMetadata();
        $associationMetadata->setIsCollection(false);
        $associationMetadata->setAcceptableTargetClassNames([Group::class]);

        $form = $this->factory->create(
            new EntityType($this->doctrine, new EntityLoader($this->doctrine)),
            null,
            ['metadata' => $associationMetadata]
        );
        $form->submit('test');
        $this->assertFalse($form->isSynchronized());
    }

    public function testMultipleWithInvalidValue()
    {
        $associationMetadata = new AssociationMetadata();
        $associationMetadata->setIsCollection(true);
        $associationMetadata->setAcceptableTargetClassNames([Group::class]);

        $form = $this->factory->create(
            new EntityType($this->doctrine, new EntityLoader($this->doctrine)),
            null,
            ['metadata' => $associationMetadata]
        );
        $form->submit('test');
        $this->assertFalse($form->isSynchronized());
    }

    public function testSingleWithNotAcceptableValue()
    {
        $value = ['class' => 'Test\Entity', 'id' => 123];

        $associationMetadata = new AssociationMetadata();
        $associationMetadata->setIsCollection(false);
        $associationMetadata->setAcceptableTargetClassNames([Group::class]);

        $form = $this->factory->create(
            new EntityType($this->doctrine, new EntityLoader($this->doctrine)),
            null,
            ['metadata' => $associationMetadata]
        );
        $form->submit($value);
        $this->assertFalse($form->isSynchronized());
    }

    public function testMultipleWithNotAcceptableValue()
    {
        $value = ['class' => 'Test\Entity', 'id' => 123];

        $associationMetadata = new AssociationMetadata();
        $associationMetadata->setIsCollection(true);
        $associationMetadata->setAcceptableTargetClassNames([Group::class]);

        $form = $this->factory->create(
            new EntityType($this->doctrine, new EntityLoader($this->doctrine)),
            null,
            ['metadata' => $associationMetadata]
        );
        $form->submit([$value]);
        $this->assertFalse($form->isSynchronized());
    }

    public function testSingleWithValidValueFromIncludedEntities()
    {
        $value = ['class' => Group::class, 'id' => 123];
        $entity = new Group();
        $entity->setId($value['id']);
        $entity->setName('test');

        $associationMetadata = new AssociationMetadata();
        $associationMetadata->setIsCollection(false);
        $associationMetadata->setAcceptableTargetClassNames([Group::class]);

        $includedEntities = new IncludedEntityCollection();
        $includedEntities->add($entity, $value['class'], $value['id'], new IncludedEntityData('/included/0', 0));

        $form = $this->factory->create(
            new EntityType($this->doctrine, new EntityLoader($this->doctrine)),
            null,
            ['metadata' => $associationMetadata, 'included_entities' => $includedEntities]
        );
        $form->submit($value);
        $this->assertTrue($form->isSynchronized());
    }

    public function testMultipleWithValidValueFromIncludedEntities()
    {
        $value = ['class' => Group::class, 'id' => 123];
        $entity = new Group();
        $entity->setId($value['id']);
        $entity->setName('test');

        $associationMetadata = new AssociationMetadata();
        $associationMetadata->setIsCollection(true);
        $associationMetadata->setAcceptableTargetClassNames([Group::class]);

        $includedEntities = new IncludedEntityCollection();
        $includedEntities->add($entity, $value['class'], $value['id'], new IncludedEntityData('/included/0', 0));

        $form = $this->factory->create(
            new EntityType($this->doctrine, new EntityLoader($this->doctrine)),
            null,
            ['metadata' => $associationMetadata, 'included_entities' => $includedEntities]
        );
        $form->submit([$value]);
        $this->assertTrue($form->isSynchronized());
    }

    public function testGetName()
    {
        $type = new EntityType($this->doctrine, new EntityLoader($this->doctrine));
        $this->assertEquals('oro_api_entity', $type->getName());
    }
}
