<?php

namespace Oro\Bundle\SalesBundle\Tests\Unit\Provider;

use Oro\Bundle\EntityConfigBundle\Config\Config;
use Oro\Bundle\EntityConfigBundle\Config\Id\EntityConfigId;
use Oro\Bundle\EntityConfigBundle\Provider\ConfigProvider;
use Oro\Bundle\EntityExtendBundle\Entity\Manager\AssociationManager;
use Oro\Bundle\SalesBundle\Provider\CustomerVirtualRelationProvider;
use Oro\Bundle\SalesBundle\Tests\Unit\Fixture\CustomerStub;
use Oro\Bundle\SalesBundle\Tests\Unit\Fixture\LeadStub;

class CustomerVirtualRelationProviderTest extends \PHPUnit_Framework_TestCase
{
    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $associationManager;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $configProvider;

    /** @var CustomerVirtualRelationProvider */
    protected $provider;

    protected function setUp()
    {
        $this->associationManager = $this->createMock(AssociationManager::class);
        $this->configProvider = $this->createMock(ConfigProvider::class);

        $this->provider = new CustomerVirtualRelationProvider($this->associationManager, $this->configProvider);
        $this->provider->setSourceClass(LeadStub::class);

        $this->associationManager->expects($this->any())
            ->method('getAssociationTargets')
            ->willReturn([CustomerStub::class => 'target_field']);
    }

    public function testIsVirtualRelationWithNotSupportedClass()
    {
        self::assertFalse($this->provider->isVirtualRelation('Some\Test\Class', 'testField'));
    }

    public function testIsVirtualRelationWithNotSupportedField()
    {
        self::assertFalse($this->provider->isVirtualRelation(LeadStub::class, 'testField'));
    }

    public function testIsVirtualRelation()
    {
        self::assertTrue($this->provider->isVirtualRelation(LeadStub::class, 'target_field'));
    }

    public function testGetVirtualRelationQuery()
    {
        self::assertEquals(
            [
                'join' => [
                    'left' => [
                        [
                            'join' => 'entity.customerAssociation',
                            'alias' => 'target_field_ca',
                            'conditionType' => 'WITH'
                        ],
                        [
                            'join' => 'target_field_ca.target_field',
                            'alias' => 'target_field',
                            'conditionType' => 'WITH'
                        ]
                    ]
                ]
            ],
            $this->provider->getVirtualRelationQuery(LeadStub::class, 'target_field')
        );
    }

    public function testGetVirtualRelationsOnNonSupportedClass()
    {
        self::assertEquals([], $this->provider->getVirtualRelations('Some\Test\Class'));
    }

    public function testGetVirtualRelations()
    {
        $customerConfig = new Config(
            new EntityConfigId('entity', CustomerStub::class),
            [
                'label' => 'customer label'
            ]
        );

        $this->configProvider->expects($this->once())
            ->method('getConfig')
            ->with(CustomerStub::class)
            ->willReturn($customerConfig);

        self::assertEquals(
            [
                'target_field' => [
                    'label' => 'customer label',
                    'relation_type' => 'manyToOne',
                    'related_entity_name' => CustomerStub::class,
                    'target_join_alias' => 'target_field',
                    'query' =>[
                        'join' => [
                            'left' => [
                                [
                                    'join' => 'entity.customerAssociation',
                                    'alias' => 'target_field_ca',
                                    'conditionType' => 'WITH'
                                ],
                                [
                                    'join' => 'target_field_ca.target_field',
                                    'alias' => 'target_field',
                                    'conditionType' => 'WITH'
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            $this->provider->getVirtualRelations(LeadStub::class)
        );
    }

    public function testGetTargetJoinAlias()
    {
        self::assertEquals('test', $this->provider->getTargetJoinAlias('someClass', 'test'));
    }
}
