<?php

namespace Oro\Bundle\SecurityBundle\Tests\Unit\Owner;

use Doctrine\Common\Cache\CacheProvider;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\DBAL\Platforms\MySqlPlatform;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;

use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

use Oro\Component\TestUtils\ORM\Mocks\ConnectionMock;
use Oro\Component\TestUtils\ORM\Mocks\DriverMock;
use Oro\Component\TestUtils\ORM\Mocks\EntityManagerMock;
use Oro\Component\TestUtils\ORM\OrmTestCase;
use Oro\Bundle\EntityBundle\Tools\DatabaseChecker;
use Oro\Bundle\SecurityBundle\Owner\Metadata\OwnershipMetadataProviderInterface;
use Oro\Bundle\SecurityBundle\Owner\OwnerTree;
use Oro\Bundle\SecurityBundle\Owner\OwnerTreeProvider;
use Oro\Bundle\UserBundle\Entity\User;

class OwnerTreeProviderTest extends OrmTestCase
{
    const ENTITY_NAMESPACE = 'Oro\Bundle\SecurityBundle\Tests\Unit\Owner\Fixtures\Entity';

    const ORG_1 = 1;
    const ORG_2 = 2;

    const MAIN_BU_1 = 10;
    const MAIN_BU_2 = 20;
    const BU_1      = 30;
    const BU_1_1    = 40;
    const BU_2      = 50;
    const BU_2_1    = 60;
    const BU_2_2    = 70;

    const USER_1 = 100;
    const USER_2 = 200;
    const USER_3 = 300;
    const USER_4 = 400;

    /** @var OwnerTreeProvider */
    protected $treeProvider;

    /** @var EntityManagerMock */
    protected $em;

    /** @var \PHPUnit_Framework_MockObject_MockObject|DatabaseChecker */
    protected $databaseChecker;

    /** @var \PHPUnit_Framework_MockObject_MockObject|CacheProvider */
    protected $cache;

    /** @var \PHPUnit_Framework_MockObject_MockObject|OwnershipMetadataProviderInterface */
    protected $ownershipMetadataProvider;

    /** @var \PHPUnit_Framework_MockObject_MockObject|TokenStorageInterface */
    protected $tokenStorage;

    protected function setUp()
    {
        $reader = new AnnotationReader();
        $metadataDriver = new AnnotationDriver($reader, self::ENTITY_NAMESPACE);

        $conn = new ConnectionMock([], new DriverMock());
        $conn->setDatabasePlatform(new MySqlPlatform());
        $this->em = $this->getTestEntityManager($conn);
        $this->em->getConfiguration()->setMetadataDriverImpl($metadataDriver);
        $this->em->getConfiguration()->setEntityNamespaces(['Test' => self::ENTITY_NAMESPACE]);

        $doctrine = $this->getMockBuilder('Doctrine\Common\Persistence\ManagerRegistry')
            ->disableOriginalConstructor()
            ->getMock();
        $doctrine->expects($this->any())
            ->method('getManagerForClass')
            ->will($this->returnValue($this->em));

        $this->databaseChecker = $this->getMockBuilder('Oro\Bundle\EntityBundle\Tools\DatabaseChecker')
            ->disableOriginalConstructor()
            ->getMock();

        $this->cache = $this->createMock('Doctrine\Common\Cache\CacheProvider');
        $this->cache->expects($this->any())->method('fetch')->will($this->returnValue(false));
        $this->cache->expects($this->any())->method('save');

        $this->ownershipMetadataProvider = $this->createMock(
            'Oro\Bundle\SecurityBundle\Owner\Metadata\OwnershipMetadataProviderInterface'
        );
        $this->ownershipMetadataProvider->expects($this->any())
            ->method('getUserClass')
            ->willReturn(self::ENTITY_NAMESPACE . '\TestUser');
        $this->ownershipMetadataProvider->expects($this->any())
            ->method('getBusinessUnitClass')
            ->willReturn(self::ENTITY_NAMESPACE . '\TestBusinessUnit');

        $this->tokenStorage = $this->createMock(
            'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface'
        );

        $this->treeProvider = new OwnerTreeProvider(
            $doctrine,
            $this->databaseChecker,
            $this->cache,
            $this->ownershipMetadataProvider,
            $this->tokenStorage
        );
    }

    public function testSupportsForSupportedUser()
    {
        $token = $this->createMock('Symfony\Component\Security\Core\Authentication\Token\TokenInterface');
        $this->tokenStorage->expects(self::once())
            ->method('getToken')
            ->willReturn($token);
        $token->expects(self::once())
            ->method('getUser')
            ->willReturn(new User());

        $this->assertTrue($this->treeProvider->supports());
    }

    public function testSupportsForNotSupportedUser()
    {
        $token = $this->createMock('Symfony\Component\Security\Core\Authentication\Token\TokenInterface');
        $this->tokenStorage->expects(self::once())
            ->method('getToken')
            ->willReturn($token);
        $token->expects(self::once())
            ->method('getUser')
            ->willReturn(new \stdClass());

        $this->assertFalse($this->treeProvider->supports());
    }

    public function testSupportsWhenNoSecurityToken()
    {
        $this->tokenStorage->expects(self::once())
            ->method('getToken')
            ->willReturn(null);

        $this->assertFalse($this->treeProvider->supports());
    }

    /**
     * @param \PHPUnit_Framework_MockObject_MockObject $conn
     * @param int                                      $expectsAt
     * @param string                                   $sql
     * @param array                                    $result
     */
    protected function setFetchAllQueryExpectationAt(
        \PHPUnit_Framework_MockObject_MockObject $conn,
        $expectsAt,
        $sql,
        $result
    ) {
        $stmt = $this->createMock('Oro\Component\TestUtils\ORM\Mocks\StatementMock');
        $stmt->expects($this->once())
            ->method('fetchAll')
            ->willReturn($result);
        $conn
            ->expects($this->at($expectsAt))
            ->method('query')
            ->with($sql)
            ->will($this->returnValue($stmt));
    }

    /**
     * @param \PHPUnit_Framework_MockObject_MockObject $connection
     * @param string[]                                 $businessUnits
     */
    protected function setGetBusinessUnitsExpectation($connection, array $businessUnits)
    {
        $queryResult = [];
        foreach ($businessUnits as $item) {
            $queryResult[] = [
                'id_0'   => $item['buId'],
                'sclr_1' => $item['orgId'],
                'sclr_2' => $item['parentBuId'],
            ];
        }
        $this->setQueryExpectationAt(
            $connection,
            0,
            'SELECT t0_.id AS id_0, t0_.organization_id AS sclr_1, t0_.parent_id AS sclr_2,'
            . ' (CASE WHEN t0_.parent_id IS NULL THEN 0 ELSE 1 END) AS sclr_3'
            . ' FROM tbl_business_unit t0_'
            . ' ORDER BY sclr_3 ASC, sclr_2 ASC',
            $queryResult
        );
    }

    /**
     * @param \PHPUnit_Framework_MockObject_MockObject $connection
     * @param string[]                                 $users
     */
    protected function setGetUsersExpectation($connection, array $users)
    {
        $queryResult = [];
        foreach ($users as $item) {
            $queryResult[] = [
                'id_0'   => $item['userId'], // user id
                'sclr_2' => $item['owningBuId'], // bu id (owner for a user)
                'id_1'   => $item['orgId'], // org id (from user->organizations)
                'id_3'   => $item['buId'], // bu id (from user->businessUnits)
            ];
        }
        $this->setQueryExpectationAt(
            $connection,
            1,
            'SELECT t0_.id AS id_0, t1_.id AS id_1, t0_.owner_id AS sclr_2, t2_.id AS id_3'
            . ' FROM tbl_user t0_'
            . ' INNER JOIN tbl_user_to_organization t3_ ON t0_.id = t3_.user_id'
            . ' INNER JOIN tbl_organization t1_ ON t1_.id = t3_.organization_id'
            . ' LEFT JOIN tbl_user_to_business_unit t4_ ON t0_.id = t4_.user_id'
            . ' LEFT JOIN tbl_business_unit t2_ ON t2_.id = t4_.business_unit_id'
            . ' ORDER BY id_1 ASC',
            $queryResult
        );
    }

    /**
     * @param array     $expected
     * @param OwnerTree $actual
     */
    protected function assertOwnerTreeEquals(array $expected, OwnerTree $actual)
    {
        foreach ($expected as $property => $value) {
            $this->assertEquals(
                $value,
                $this->getObjectAttribute($actual, $property),
                'Owner Tree Property: ' . $property
            );
        }
    }

    public function testBusinessUnitsWithoutOrganization()
    {
        $this->databaseChecker->expects(self::once())
            ->method('checkDatabase')
            ->willReturn(true);

        $connection = $this->getDriverConnectionMock($this->em);
        // the business units without parent should be at the top,
        // rest business units are sorted by parent id
        $this->setGetBusinessUnitsExpectation(
            $connection,
            [
                [
                    'orgId'      => self::ORG_1,
                    'parentBuId' => null,
                    'buId'       => self::MAIN_BU_1,
                ],
                [
                    'orgId'      => null,
                    'parentBuId' => self::MAIN_BU_1,
                    'buId'       => self::BU_2,
                ],
                [
                    'orgId'      => self::ORG_1,
                    'parentBuId' => self::MAIN_BU_1,
                    'buId'       => self::BU_1,
                ],
                [
                    'orgId'      => self::ORG_1,
                    'parentBuId' => self::BU_2,
                    'buId'       => self::BU_2_1,
                ],
            ]
        );
        // should be sorted by organization id
        $this->setGetUsersExpectation(
            $connection,
            [
                [
                    'orgId'      => self::ORG_1,
                    'userId'     => self::USER_1,
                    'owningBuId' => self::MAIN_BU_1,
                    'buId'       => self::MAIN_BU_1,
                ],
                [
                    'orgId'      => self::ORG_1,
                    'userId'     => self::USER_1,
                    'owningBuId' => self::MAIN_BU_1,
                    'buId'       => self::BU_1,
                ],
            ]
        );

        /** @var OwnerTree $tree */
        $tree = $this->treeProvider->getTree();

        $this->assertOwnerTreeEquals(
            [
                'userOwningOrganizationId'         => [
                    self::USER_1 => self::ORG_1
                ],
                'userOrganizationIds'              => [
                    self::USER_1 => [self::ORG_1]
                ],
                'userOwningBusinessUnitId'         => [
                    self::USER_1 => self::MAIN_BU_1
                ],
                'userBusinessUnitIds'              => [
                    self::USER_1 => [self::MAIN_BU_1, self::BU_1]
                ],
                'userOrganizationBusinessUnitIds'  => [
                    self::USER_1 => [self::ORG_1 => [self::MAIN_BU_1, self::BU_1]]
                ],
                'businessUnitOwningOrganizationId' => [
                    self::MAIN_BU_1 => self::ORG_1,
                    self::BU_1      => self::ORG_1,
                    self::BU_2_1    => self::ORG_1,
                ],
                'assignedBusinessUnitUserIds'      => [
                    self::MAIN_BU_1 => [self::USER_1],
                    self::BU_1      => [self::USER_1],
                ],
                'subordinateBusinessUnitIds'       => [
                    self::MAIN_BU_1 => [self::BU_1],
                ],
                'organizationBusinessUnitIds'      => [
                    self::ORG_1 => [self::MAIN_BU_1, self::BU_1, self::BU_2_1]
                ],
            ],
            $tree
        );
    }

    /**
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function testBusinessUnitTree()
    {
        $this->databaseChecker->expects(self::once())
            ->method('checkDatabase')
            ->willReturn(true);

        $connection = $this->getDriverConnectionMock($this->em);
        // the business units without parent should be at the top,
        // rest business units are sorted by parent id
        $this->setGetBusinessUnitsExpectation(
            $connection,
            [
                [
                    'orgId'      => self::ORG_1,
                    'parentBuId' => null,
                    'buId'       => self::MAIN_BU_1,
                ],
                [
                    'orgId'      => self::ORG_1,
                    'parentBuId' => self::MAIN_BU_1,
                    'buId'       => self::BU_2,
                ],
                [
                    'orgId'      => self::ORG_1,
                    'parentBuId' => self::MAIN_BU_1,
                    'buId'       => self::BU_1,
                ],
                [
                    'orgId'      => self::ORG_1,
                    'parentBuId' => self::BU_2,
                    'buId'       => self::BU_2_1,
                ],
            ]
        );
        // should be sorted by organization id
        $this->setGetUsersExpectation(
            $connection,
            [
                [
                    'orgId'      => self::ORG_1,
                    'userId'     => self::USER_1,
                    'owningBuId' => self::MAIN_BU_1,
                    'buId'       => self::MAIN_BU_1,
                ],
                [
                    'orgId'      => self::ORG_1,
                    'userId'     => self::USER_1,
                    'owningBuId' => self::MAIN_BU_1,
                    'buId'       => self::BU_1,
                ],
            ]
        );

        /** @var OwnerTree $tree */
        $tree = $this->treeProvider->getTree();

        $this->assertOwnerTreeEquals(
            [
                'userOwningOrganizationId'         => [
                    self::USER_1 => self::ORG_1
                ],
                'userOrganizationIds'              => [
                    self::USER_1 => [self::ORG_1]
                ],
                'userOwningBusinessUnitId'         => [
                    self::USER_1 => self::MAIN_BU_1
                ],
                'userBusinessUnitIds'              => [
                    self::USER_1 => [self::MAIN_BU_1, self::BU_1]
                ],
                'userOrganizationBusinessUnitIds'  => [
                    self::USER_1 => [self::ORG_1 => [self::MAIN_BU_1, self::BU_1]]
                ],
                'businessUnitOwningOrganizationId' => [
                    self::MAIN_BU_1 => self::ORG_1,
                    self::BU_1      => self::ORG_1,
                    self::BU_2      => self::ORG_1,
                    self::BU_2_1    => self::ORG_1,
                ],
                'assignedBusinessUnitUserIds'      => [
                    self::MAIN_BU_1 => [self::USER_1],
                    self::BU_1      => [self::USER_1],
                ],
                'subordinateBusinessUnitIds'       => [
                    self::MAIN_BU_1 => [self::BU_2, self::BU_2_1, self::BU_1],
                    self::BU_2      => [self::BU_2_1],
                ],
                'organizationBusinessUnitIds'      => [
                    self::ORG_1 => [self::MAIN_BU_1, self::BU_2, self::BU_1, self::BU_2_1]
                ],
            ],
            $tree
        );
    }

    /**
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function testBusinessUnitTreeWhenChildBusinessUnitAreLoadedBeforeParentBusinessUnit()
    {
        $this->databaseChecker->expects(self::once())
            ->method('checkDatabase')
            ->willReturn(true);

        $connection = $this->getDriverConnectionMock($this->em);
        // the business units without parent should be at the top,
        // rest business units are sorted by parent id
        $this->setGetBusinessUnitsExpectation(
            $connection,
            [
                [
                    'orgId'      => self::ORG_1,
                    'parentBuId' => null,
                    'buId'       => self::MAIN_BU_1,
                ],
                [
                    'orgId'      => self::ORG_1,
                    'parentBuId' => self::BU_2,
                    'buId'       => self::BU_2_1,
                ],
                [
                    'orgId'      => self::ORG_1,
                    'parentBuId' => self::MAIN_BU_1,
                    'buId'       => self::BU_1,
                ],
                [
                    'orgId'      => self::ORG_1,
                    'parentBuId' => self::MAIN_BU_1,
                    'buId'       => self::BU_2,
                ],
            ]
        );
        // should be sorted by organization id
        $this->setGetUsersExpectation(
            $connection,
            [
                [
                    'orgId'      => self::ORG_1,
                    'userId'     => self::USER_1,
                    'owningBuId' => self::MAIN_BU_1,
                    'buId'       => self::MAIN_BU_1,
                ],
                [
                    'orgId'      => self::ORG_1,
                    'userId'     => self::USER_1,
                    'owningBuId' => self::MAIN_BU_1,
                    'buId'       => self::BU_1,
                ],
            ]
        );

        /** @var OwnerTree $tree */
        $tree = $this->treeProvider->getTree();

        $this->assertOwnerTreeEquals(
            [
                'userOwningOrganizationId'         => [
                    self::USER_1 => self::ORG_1
                ],
                'userOrganizationIds'              => [
                    self::USER_1 => [self::ORG_1]
                ],
                'userOwningBusinessUnitId'         => [
                    self::USER_1 => self::MAIN_BU_1
                ],
                'userBusinessUnitIds'              => [
                    self::USER_1 => [self::MAIN_BU_1, self::BU_1]
                ],
                'userOrganizationBusinessUnitIds'  => [
                    self::USER_1 => [self::ORG_1 => [self::MAIN_BU_1, self::BU_1]]
                ],
                'businessUnitOwningOrganizationId' => [
                    self::MAIN_BU_1 => self::ORG_1,
                    self::BU_1      => self::ORG_1,
                    self::BU_2      => self::ORG_1,
                    self::BU_2_1    => self::ORG_1,
                ],
                'assignedBusinessUnitUserIds'      => [
                    self::MAIN_BU_1 => [self::USER_1],
                    self::BU_1      => [self::USER_1],
                ],
                'subordinateBusinessUnitIds'       => [
                    self::MAIN_BU_1 => [self::BU_1, self::BU_2, self::BU_2_1],
                    self::BU_2      => [self::BU_2_1],
                ],
                'organizationBusinessUnitIds'      => [
                    self::ORG_1 => [self::MAIN_BU_1, self::BU_2_1, self::BU_1, self::BU_2]
                ],
            ],
            $tree
        );
    }

    /**
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function testUserDoesNotHaveAssignedBusinessUnit()
    {
        $this->databaseChecker->expects(self::once())
            ->method('checkDatabase')
            ->willReturn(true);

        $connection = $this->getDriverConnectionMock($this->em);
        // the business units without parent should be at the top,
        // rest business units are sorted by parent id
        $this->setGetBusinessUnitsExpectation(
            $connection,
            [
                [
                    'orgId'      => self::ORG_1,
                    'parentBuId' => null,
                    'buId'       => self::MAIN_BU_1,
                ],
                [
                    'orgId'      => self::ORG_1,
                    'parentBuId' => self::MAIN_BU_1,
                    'buId'       => self::BU_1,
                ],
            ]
        );
        // should be sorted by organization id
        $this->setGetUsersExpectation(
            $connection,
            [
                [
                    'orgId'      => self::ORG_1,
                    'userId'     => self::USER_1,
                    'owningBuId' => self::MAIN_BU_1,
                    'buId'       => null,
                ],
            ]
        );

        /** @var OwnerTree $tree */
        $tree = $this->treeProvider->getTree();

        $this->assertOwnerTreeEquals(
            [
                'userOwningOrganizationId'         => [
                    self::USER_1 => self::ORG_1,
                ],
                'userOrganizationIds'              => [
                    self::USER_1 => [self::ORG_1],
                ],
                'userOwningBusinessUnitId'         => [
                    self::USER_1 => self::MAIN_BU_1,
                ],
                'userBusinessUnitIds'              => [],
                'userOrganizationBusinessUnitIds'  => [],
                'businessUnitOwningOrganizationId' => [
                    self::MAIN_BU_1 => self::ORG_1,
                    self::BU_1      => self::ORG_1,
                ],
                'assignedBusinessUnitUserIds'      => [],
                'subordinateBusinessUnitIds'       => [
                    self::MAIN_BU_1 => [self::BU_1],
                ],
                'organizationBusinessUnitIds'      => [
                    self::ORG_1 => [self::MAIN_BU_1, self::BU_1],
                ],
            ],
            $tree
        );
    }

    /**
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function testSeveralOrganizations()
    {
        $this->databaseChecker->expects(self::once())
            ->method('checkDatabase')
            ->willReturn(true);

        $connection = $this->getDriverConnectionMock($this->em);
        // the business units without parent should be at the top,
        // rest business units are sorted by parent id
        $this->setGetBusinessUnitsExpectation(
            $connection,
            [
                [
                    'orgId'      => self::ORG_1,
                    'parentBuId' => null,
                    'buId'       => self::MAIN_BU_1,
                ],
                [
                    'orgId'      => self::ORG_2,
                    'parentBuId' => null,
                    'buId'       => self::BU_2,
                ],
                [
                    'orgId'      => self::ORG_1,
                    'parentBuId' => self::MAIN_BU_1,
                    'buId'       => self::BU_1,
                ],
                [
                    'orgId'      => self::ORG_2,
                    'parentBuId' => self::BU_2,
                    'buId'       => self::BU_2_1,
                ],
            ]
        );
        // should be sorted by organization id
        $this->setGetUsersExpectation(
            $connection,
            [
                [
                    'orgId'      => self::ORG_1,
                    'userId'     => self::USER_1,
                    'owningBuId' => self::MAIN_BU_1,
                    'buId'       => self::MAIN_BU_1,
                ],
                [
                    'orgId'      => self::ORG_1,
                    'userId'     => self::USER_1,
                    'owningBuId' => self::MAIN_BU_1,
                    'buId'       => self::BU_1,
                ],
                [
                    'orgId'      => self::ORG_2,
                    'userId'     => self::USER_2,
                    'owningBuId' => self::BU_2,
                    'buId'       => self::BU_2_1,
                ],
            ]
        );

        /** @var OwnerTree $tree */
        $tree = $this->treeProvider->getTree();

        $this->assertOwnerTreeEquals(
            [
                'userOwningOrganizationId'         => [
                    self::USER_1 => self::ORG_1,
                    self::USER_2 => self::ORG_2,
                ],
                'userOrganizationIds'              => [
                    self::USER_1 => [self::ORG_1],
                    self::USER_2 => [self::ORG_2],
                ],
                'userOwningBusinessUnitId'         => [
                    self::USER_1 => self::MAIN_BU_1,
                    self::USER_2 => self::BU_2,
                ],
                'userBusinessUnitIds'              => [
                    self::USER_1 => [self::MAIN_BU_1, self::BU_1],
                    self::USER_2 => [self::BU_2_1],
                ],
                'userOrganizationBusinessUnitIds'  => [
                    self::USER_1 => [self::ORG_1 => [self::MAIN_BU_1, self::BU_1]],
                    self::USER_2 => [self::ORG_2 => [self::BU_2_1]],
                ],
                'businessUnitOwningOrganizationId' => [
                    self::MAIN_BU_1 => self::ORG_1,
                    self::BU_1      => self::ORG_1,
                    self::BU_2      => self::ORG_2,
                    self::BU_2_1    => self::ORG_2,
                ],
                'assignedBusinessUnitUserIds'      => [
                    self::MAIN_BU_1 => [self::USER_1],
                    self::BU_1      => [self::USER_1],
                    self::BU_2_1    => [self::USER_2],
                ],
                'subordinateBusinessUnitIds'       => [
                    self::MAIN_BU_1 => [self::BU_1],
                    self::BU_2      => [self::BU_2_1],
                ],
                'organizationBusinessUnitIds'      => [
                    self::ORG_1 => [self::MAIN_BU_1, self::BU_1],
                    self::ORG_2 => [self::BU_2, self::BU_2_1],
                ],
            ],
            $tree
        );
    }

    /**
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function testUsersAssignedToBusinessUnitsFromSeveralOrganizations()
    {
        $this->databaseChecker->expects(self::once())
            ->method('checkDatabase')
            ->willReturn(true);

        $connection = $this->getDriverConnectionMock($this->em);
        // the business units without parent should be at the top,
        // rest business units are sorted by parent id
        $this->setGetBusinessUnitsExpectation(
            $connection,
            [
                [
                    'orgId'      => self::ORG_1,
                    'parentBuId' => null,
                    'buId'       => self::MAIN_BU_1,
                ],
                [
                    'orgId'      => self::ORG_2,
                    'parentBuId' => null,
                    'buId'       => self::MAIN_BU_2,
                ],
                [
                    'orgId'      => self::ORG_1,
                    'parentBuId' => self::MAIN_BU_1,
                    'buId'       => self::BU_1,
                ],
                [
                    'orgId'      => self::ORG_1,
                    'parentBuId' => self::BU_1,
                    'buId'       => self::BU_1_1,
                ],
                [
                    'orgId'      => self::ORG_2,
                    'parentBuId' => self::MAIN_BU_2,
                    'buId'       => self::BU_2,
                ],
                [
                    'orgId'      => self::ORG_2,
                    'parentBuId' => self::BU_2,
                    'buId'       => self::BU_2_1,
                ],
                [
                    'orgId'      => self::ORG_2,
                    'parentBuId' => self::BU_2,
                    'buId'       => self::BU_2_2,
                ],
            ]
        );
        // should be sorted by organization id
        $this->setGetUsersExpectation(
            $connection,
            [
                [
                    'orgId'      => self::ORG_1,
                    'userId'     => self::USER_1,
                    'owningBuId' => self::MAIN_BU_1,
                    'buId'       => self::MAIN_BU_1,
                ],
                [
                    'orgId'      => self::ORG_1,
                    'userId'     => self::USER_1,
                    'owningBuId' => self::MAIN_BU_1,
                    'buId'       => self::BU_1_1,
                ],
                [
                    'orgId'      => self::ORG_2,
                    'userId'     => self::USER_1,
                    'owningBuId' => self::MAIN_BU_1,
                    'buId'       => self::BU_2_1,
                ],
                [
                    'orgId'      => self::ORG_2,
                    'userId'     => self::USER_2,
                    'owningBuId' => self::BU_2,
                    'buId'       => self::BU_2,
                ],
                [
                    'orgId'      => self::ORG_2,
                    'userId'     => self::USER_2,
                    'owningBuId' => self::BU_2,
                    'buId'       => self::BU_2_1,
                ],
                [
                    'orgId'      => self::ORG_2,
                    'userId'     => self::USER_3,
                    'owningBuId' => self::BU_2_2,
                    'buId'       => null,
                ],
                [
                    'orgId'      => self::ORG_2,
                    'userId'     => self::USER_4,
                    'owningBuId' => self::BU_2_2,
                    'buId'       => self::MAIN_BU_1,
                ],
            ]
        );

        /** @var OwnerTree $tree */
        $tree = $this->treeProvider->getTree();

        $this->assertOwnerTreeEquals(
            [
                'userOwningOrganizationId'         => [
                    self::USER_1 => self::ORG_1,
                    self::USER_2 => self::ORG_2,
                    self::USER_3 => self::ORG_2,
                    self::USER_4 => self::ORG_2,
                ],
                'userOrganizationIds'              => [
                    self::USER_1 => [self::ORG_1, self::ORG_2],
                    self::USER_2 => [self::ORG_2],
                    self::USER_3 => [self::ORG_2],
                    self::USER_4 => [self::ORG_2],
                ],
                'userOwningBusinessUnitId'         => [
                    self::USER_1 => self::MAIN_BU_1,
                    self::USER_2 => self::BU_2,
                    self::USER_3 => self::BU_2_2,
                    self::USER_4 => self::BU_2_2,
                ],
                'userBusinessUnitIds'              => [
                    self::USER_1 => [self::MAIN_BU_1, self::BU_1_1, self::BU_2_1],
                    self::USER_2 => [self::BU_2, self::BU_2_1],
                    self::USER_4 => [self::MAIN_BU_1],
                ],
                'userOrganizationBusinessUnitIds'  => [
                    self::USER_1 => [
                        self::ORG_1 => [self::MAIN_BU_1, self::BU_1_1],
                        self::ORG_2 => [self::BU_2_1]
                    ],
                    self::USER_2 => [self::ORG_2 => [self::BU_2, self::BU_2_1]],
                    self::USER_4 => [self::ORG_2 => [self::MAIN_BU_1]],
                ],
                'businessUnitOwningOrganizationId' => [
                    self::MAIN_BU_1 => self::ORG_1,
                    self::BU_1      => self::ORG_1,
                    self::BU_1_1    => self::ORG_1,
                    self::MAIN_BU_2 => self::ORG_2,
                    self::BU_2      => self::ORG_2,
                    self::BU_2_1    => self::ORG_2,
                    self::BU_2_2    => self::ORG_2,
                ],
                'assignedBusinessUnitUserIds'      => [
                    self::MAIN_BU_1 => [self::USER_1, self::USER_4],
                    self::BU_1_1    => [self::USER_1],
                    self::BU_2      => [self::USER_2],
                    self::BU_2_1    => [self::USER_1, self::USER_2],
                ],
                'subordinateBusinessUnitIds'       => [
                    self::MAIN_BU_1 => [self::BU_1, self::BU_1_1],
                    self::BU_1      => [self::BU_1_1],
                    self::MAIN_BU_2 => [self::BU_2, self::BU_2_1, self::BU_2_2],
                    self::BU_2      => [self::BU_2_1, self::BU_2_2],
                ],
                'organizationBusinessUnitIds'      => [
                    self::ORG_1 => [self::MAIN_BU_1, self::BU_1, self::BU_1_1],
                    self::ORG_2 => [self::MAIN_BU_2, self::BU_2, self::BU_2_1, self::BU_2_2],
                ],
            ],
            $tree
        );
    }
}
