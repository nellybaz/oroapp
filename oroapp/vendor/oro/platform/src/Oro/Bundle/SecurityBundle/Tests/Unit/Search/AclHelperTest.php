<?php

namespace Oro\Bundle\SecurityBundle\Tests\Unit\Search;

use Oro\Bundle\SearchBundle\Provider\SearchMappingProvider;
use Oro\Bundle\SearchBundle\Query\Query;
use Oro\Bundle\SecurityBundle\Authentication\TokenAccessorInterface;
use Oro\Bundle\SecurityBundle\ORM\Walker\OwnershipConditionDataBuilder;
use Oro\Bundle\SecurityBundle\Owner\Metadata\OwnershipMetadataInterface;
use Oro\Bundle\SecurityBundle\Owner\Metadata\OwnershipMetadataProviderInterface;
use Oro\Bundle\SecurityBundle\Search\AclHelper;

class AclHelperTest extends \PHPUnit_Framework_TestCase
{
    /** @var AclHelper */
    protected $aclHelper;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $mappingProvider;

    /** @var TokenAccessorInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $tokenAccessor;

    /** @var OwnershipConditionDataBuilder|\PHPUnit_Framework_MockObject_MockObject */
    protected $ownershipDataBuilder;

    /** @var OwnershipMetadataProviderInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $ownershipMetadataProvider;

    /** @var OwnershipMetadataInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $ownershipMetadata;

    /** @var array */
    protected $mappings = [
        'Oro\Test\Entity\User'      => [
            'alias'        => 'testUser',
            'aclCondition' => [null, null, null, null] // no access
        ],
        'Oro\Test\Entity\Product'   => [
            'alias'        => 'testProduct',
            'aclCondition' => [] // full access
        ],
        'Oro\Test\Entity\Price'     => [
            'alias'        => 'testPrice',
            'aclCondition' => [
                'owner',
                null // full access
            ]
        ],
        'Oro\Test\Entity\OrderItem' => [
            'alias'        => 'testOrderItem',
            'aclCondition' => [
                'owner',
                [] // no access
            ]
        ],
        'Oro\Test\Entity\Category'  => [
            'alias'        => 'testCategory',
            'aclCondition' => [
                'owner',
                [3]
            ]
        ],
        'Oro\Test\Entity\Order'     => [
            'alias'        => 'testOrder',
            'aclCondition' => [
                'owner',
                [3, 5, 4, 6]
            ]
        ],
    ];

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        $this->mappingProvider = $this->createMock(SearchMappingProvider::class);
        $this->tokenAccessor = $this->createMock(TokenAccessorInterface::class);
        $this->ownershipDataBuilder = $this->createMock(OwnershipConditionDataBuilder::class);
        $this->ownershipMetadataProvider = $this->createMock(OwnershipMetadataProviderInterface::class);
        $this->ownershipMetadata = $this->createMock(OwnershipMetadataInterface::class);

        $this->ownershipMetadataProvider
            ->expects($this->any())
            ->method('getMetadata')
            ->willReturn($this->ownershipMetadata);

        $this->aclHelper = new AclHelper(
            $this->mappingProvider,
            $this->tokenAccessor,
            $this->ownershipDataBuilder,
            $this->ownershipMetadataProvider
        );
    }

    /**
     * @dataProvider applyTestCases
     *
     * @param mixed  $from
     * @param string $ownerColumnName
     * @param string $expectedQuery
     */
    public function testApply($from, $ownerColumnName, $expectedQuery)
    {
        $mappings = $this->mappings;

        $this->mappingProvider->expects($this->any())
            ->method('getEntitiesListAliases')
            ->willReturnCallback(
                function () use ($mappings) {
                    $result = [];
                    foreach ($mappings as $className => $mapping) {
                        $result[$className] = $mapping['alias'];
                    }

                    return $result;
                }
            );
        $this->mappingProvider->expects($this->any())
            ->method('getEntityClass')
            ->willReturnCallback(
                function ($alias) use ($mappings) {
                    foreach ($mappings as $className => $mapping) {
                        if ($mapping['alias'] == $alias) {
                            return $className;
                        }
                    }

                    return null;
                }
            );

        $this->tokenAccessor->expects($this->any())
            ->method('getOrganizationId')
            ->willReturn(1);

        $this->ownershipDataBuilder->expects($this->any())
            ->method('getAclConditionData')
            ->willReturnCallback(
                function ($class) use ($mappings) {
                    foreach ($mappings as $className => $mapping) {
                        if ($class === $className) {
                            return $mapping['aclCondition'];
                        }
                    }

                    return null;
                }
            );

        $this->ownershipMetadata->expects($this->any())->method('getOwnerFieldName')->willReturn($ownerColumnName);

        $query = new Query();
        $query->from($from);
        $this->aclHelper->apply($query);
        $this->assertEquals($expectedQuery, $query->getStringQuery());
    }

    /**
     * @return array
     */
    public function applyTestCases()
    {
        return [
            'select from *'             => [
                '*',
                'owner',
                'from testProduct, testPrice, testOrderItem, testCategory, testOrder where '
                . '((integer testProduct_owner >= 0 or integer testPrice_owner >= 0 or integer '
                . 'testOrderItem_owner = 0 or integer testCategory_owner = 3 or integer testOrder_owner '
                . 'in (3, 5, 4, 6)) and integer organization in (1, 0))'
            ],
            'select with unknown alias' => [
                ['testProduct', 'badAlias'],
                'owner2',
                'from testProduct where ((integer testProduct_owner2 >= 0) and integer organization in (1, 0))'
            ]
        ];
    }
}
