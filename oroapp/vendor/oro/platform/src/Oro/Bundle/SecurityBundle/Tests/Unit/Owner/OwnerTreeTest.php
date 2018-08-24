<?php

namespace Oro\Bundle\SecurityBundle\Tests\Unit\Owner;

use Oro\Bundle\SecurityBundle\Owner\OwnerTree;

class OwnerTreeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider addBusinessUnitRelationProvider
     */
    public function testAddBusinessUnitRelation($src, $expected)
    {
        $tree = new OwnerTree();
        foreach ($src as $item) {
            $tree->addBusinessUnitRelation($item[0], $item[1]);
        }
        $tree->buildTree();

        foreach ($expected as $buId => $sBuIds) {
            $this->assertEquals(
                $sBuIds,
                $tree->getSubordinateBusinessUnitIds($buId),
                sprintf('Failed for %s', $buId)
            );
        }
    }

    public function testAddBusinessUnitShouldSetOwningOrganizationIdEvenIfItIsNull()
    {
        $tree = new OwnerTree();

        $tree->addBusinessUnit('bu1', null);
        $this->assertNull($tree->getBusinessUnitOrganizationId('bu1'));

        $tree->addBusinessUnit('bu2', 'org');
        $this->assertEquals('org', $tree->getBusinessUnitOrganizationId('bu2'));
    }

    public function testAddBusinessUnitShouldSetOrganizationBusinessUnitIdsOnlyIfOrganizationIsNotNull()
    {
        $tree = new OwnerTree();

        $tree->addBusinessUnit('bu1', null);
        $this->assertEquals(array(), $tree->getOrganizationBusinessUnitIds('bu1'));

        $tree->addBusinessUnit('bu2', 'org');
        $this->assertEquals(array('bu2'), $tree->getOrganizationBusinessUnitIds('org'));

        $tree->addBusinessUnit('bu3', 'org');
        $this->assertEquals(array('bu2', 'bu3'), $tree->getOrganizationBusinessUnitIds('org'));
    }

    public function testAddBusinessUnitShouldSetUserOwningOrganizationId()
    {
        $tree = new OwnerTree();

        $tree->addUser('user', 'bu');

        $tree->addBusinessUnit('bu', 'org');
        $this->assertEquals('org', $tree->getUserOrganizationId('user'));
    }

    public function testAddBusinessUnitShouldNotSetUserOrganizationIds()
    {
        $tree = new OwnerTree();

        $tree->addUser('user', 'bu');

        $tree->addBusinessUnit('bu', 'org');
        $this->assertEquals(array(), $tree->getUserOrganizationIds('user'));
    }

    public function testAddBusinessUnitShouldNotSetUserOrganizationIdsIfOrganizationIdIsNull()
    {
        $tree = new OwnerTree();

        $tree->addUser('user', 'bu');

        $tree->addBusinessUnit('bu', null);
        $this->assertEquals(array(), $tree->getUserOrganizationIds('user'));
    }

    public function testAddUserShouldSetUserOwningBusinessUnitId()
    {
        $tree = new OwnerTree();

        $tree->addUser('user', 'bu');
        $this->assertEquals('bu', $tree->getUserBusinessUnitId('user'));
    }

    public function testAddUserShouldSetUserOwningBusinessUnitIdEvenIfItIsNull()
    {
        $tree = new OwnerTree();

        $tree->addUser('user', null);
        $this->assertNull($tree->getUserBusinessUnitId('user'));
    }

    public function testAddUserShouldSetUserBusinessUnitIds()
    {
        $tree = new OwnerTree();

        $tree->addUser('user', null);
        $this->assertEquals(array(), $tree->getUserBusinessUnitIds('user'));
    }

    public function testAddUserShouldNotSetUserOrganizationIds()
    {
        $tree = new OwnerTree();

        $tree->addBusinessUnit('bu', 'org');

        $tree->addUser('user', 'bu');
        $this->assertEquals(array(), $tree->getUserOrganizationIds('user'));
    }

    public function testAddUserShouldNotSetUserOrganizationIdsIfOrganizationIdIsNull()
    {
        $tree = new OwnerTree();

        $tree->addBusinessUnit('bu', null);

        $tree->addUser('user', 'bu');
        $this->assertEquals(array(), $tree->getUserOrganizationIds('user'));
    }

    public function testAddUserShouldSetUserOwningOrganizationId()
    {
        $tree = new OwnerTree();

        $tree->addBusinessUnit('bu', 'org');

        $tree->addUser('user', 'bu');
        $this->assertEquals('org', $tree->getUserOrganizationId('user'));
    }

    public function testAddUserShouldSetUserOwningOrganizationIdEvenIfOrganizationIdIsNull()
    {
        $tree = new OwnerTree();

        $tree->addBusinessUnit('bu', null);

        $tree->addUser('user', 'bu');
        $this->assertNull($tree->getUserOrganizationId('user'));
    }

    public function testAddUserBusinessUnitShouldNotSetUserBusinessUnitIdsIfBusinessUnitIdIsNull()
    {
        $tree = new OwnerTree();

        $tree->addUser('user', null);

        $tree->addUserBusinessUnit('user', 'org1', null);
        $this->assertEquals(array(), $tree->getUserBusinessUnitIds('user'));
    }

    public function testAddUserBusinessUnitShouldSetUserBusinessUnitIds()
    {
        $tree = new OwnerTree();

        $tree->addUser('user', null);

        $tree->addUserBusinessUnit('user', 'org1', 'bu');
        $this->assertEquals(array('bu'), $tree->getUserBusinessUnitIds('user'));

        $tree->addUserBusinessUnit('user', 'org1', 'bu1');
        $this->assertEquals(array('bu', 'bu1'), $tree->getUserBusinessUnitIds('user'));
        $this->assertEquals(array('bu', 'bu1'), $tree->getUserBusinessUnitIds('user', 'org1'));
    }

    public function testAddUserBusinessUnitShouldNotSetUserOrganizationIdsIfOrganizationIdIsNull()
    {
        $tree = new OwnerTree();

        $tree->addBusinessUnit('bu', null);
        $tree->addUser('user', null);

        $tree->addUserBusinessUnit('user', 'org1', 'bu');
        $this->assertEquals(array(), $tree->getUserOrganizationIds('user'));
    }

    public function testAddUserBusinessUnitShouldSetUserOrganizationIds()
    {
        $tree = new OwnerTree();

        $tree->addBusinessUnit('bu', 'org');
        $tree->addUser('user', null);

        $tree->addUserOrganization('user', 'org');
        $this->assertEquals(array('org'), $tree->getUserOrganizationIds('user'));
    }

    public function testAddUserBusinessUnitBelongToDifferentOrganizations()
    {
        $tree = new OwnerTree();

        $tree->addUser('user', null);

        $tree->addBusinessUnit('bu1', null);
        $this->assertNull($tree->getBusinessUnitOrganizationId('bu1'));
        $tree->addBusinessUnit('bu2', 'org2');
        $this->assertEquals('org2', $tree->getBusinessUnitOrganizationId('bu2'));
        $tree->addBusinessUnit('bu3', 'org3');
        $this->assertEquals('org3', $tree->getBusinessUnitOrganizationId('bu3'));

        $tree->addUserBusinessUnit('user', null, null);
        $this->assertEquals(array(), $tree->getUserBusinessUnitIds('user'));
        $this->assertNull($tree->getUserOrganizationId('user'));
        $this->assertEquals(array(), $tree->getUserOrganizationIds('user'));
        $this->assertEquals(array(), $tree->getUserSubordinateBusinessUnitIds('user', 'org1'));
        $this->assertEquals(array(), $tree->getBusinessUnitsIdByUserOrganizations('user'));

        $tree->addUserBusinessUnit('user', 'org1', 'bu1');
        $this->assertEquals(array('bu1'), $tree->getUserBusinessUnitIds('user'));
        $this->assertNull($tree->getUserOrganizationId('user'));
        $this->assertEquals(array(), $tree->getUserOrganizationIds('user'));
        $this->assertEquals(array('bu1'), $tree->getUserSubordinateBusinessUnitIds('user', 'org1'));
        $this->assertEquals(array(), $tree->getBusinessUnitsIdByUserOrganizations('user'));

        $tree->addUserBusinessUnit('user', 'org2', 'bu2');
        $tree->addUserOrganization('user', 'org2');
        $this->assertEquals(array('bu1', 'bu2'), $tree->getUserBusinessUnitIds('user'));
        $this->assertEquals(array('bu2'), $tree->getUserBusinessUnitIds('user', 'org2'));
        $this->assertNull($tree->getUserOrganizationId('user'));
        $this->assertEquals(array('org2'), $tree->getUserOrganizationIds('user'));
        $this->assertEquals(array('bu2'), $tree->getUserSubordinateBusinessUnitIds('user', 'org2'));
        $this->assertEquals(array('bu1', 'bu2'), $tree->getUserSubordinateBusinessUnitIds('user'));
        $this->assertEquals(array('bu2'), $tree->getBusinessUnitsIdByUserOrganizations('user', 'org2'));

        $tree->addUserBusinessUnit('user', 'org3', 'bu3');
        $tree->addUserOrganization('user', 'org3');
        $this->assertEquals(array('bu1', 'bu2', 'bu3'), $tree->getUserBusinessUnitIds('user'));
        $this->assertNull($tree->getUserOrganizationId('user'));
        $this->assertEquals(array('org2', 'org3'), $tree->getUserOrganizationIds('user'));
        $this->assertEquals(array('bu1', 'bu2', 'bu3'), $tree->getUserSubordinateBusinessUnitIds('user'));
        $this->assertEquals(array('bu3'), $tree->getUserSubordinateBusinessUnitIds('user', 'org3'));
        $this->assertEquals(array('bu2', 'bu3'), $tree->getBusinessUnitsIdByUserOrganizations('user'));
    }

    public function testAddBusinessUsersAndGetAllBusinessUnitIds()
    {
        $tree = new OwnerTree();

        $tree->addBusinessUnit('bu1', 1);
        $tree->addBusinessUnit('bu2', 2);
        $tree->addBusinessUnit('bu3', 2);
        $tree->addBusinessUnit('bu4', 3);

        $this->assertEquals(['bu1', 'bu2', 'bu3', 'bu4'], $tree->getAllBusinessUnitIds());
    }

    public static function addBusinessUnitRelationProvider()
    {
        return array(
            '1: [null]' => array(
                array(
                    array('1', null),
                ),
                array(
                    '1' => array(),
                )
            ),
            '1: [11, 12]' => array(
                array(
                    array('1', null),
                    array('11', '1'),
                    array('12', '1'),
                ),
                array(
                    '1' => array('11', '12'),
                    '11' => array(),
                    '12' => array(),
                )
            ),
            '1: [11, 12] reverse' => array(
                array(
                    array('1', null),
                    array('12', '1'),
                    array('11', '1'),
                ),
                array(
                    '1' => array('12', '11'),
                    '11' => array(),
                    '12' => array(),
                )
            ),
            '1: [11: [111], 12]' => array(
                array(
                    array('1', null),
                    array('11', '1'),
                    array('12', '1'),
                    array('111', '11'),
                ),
                array(
                    '1' => array('11', '111', '12'),
                    '11' => array('111'),
                    '111' => array(),
                    '12' => array(),
                )
            ),
            '1: [11: [111: [1111, 1112]], 12: [121, 122: [1221]]]' => array(
                array(
                    array('1', null),
                    array('11', '1'),
                    array('12', '1'),
                    array('111', '11'),
                    array('121', '12'),
                    array('122', '12'),
                    array('1111', '111'),
                    array('1112', '111'),
                    array('1221', '122'),
                ),
                array(
                    '1' => array('11', '111', '1111', '1112', '12', '121', '122',  '1221'),
                    '11' => array('111', '1111', '1112'),
                    '111' => array('1111', '1112'),
                    '1111' => array(),
                    '1112' => array(),
                    '12' => array('121', '122', '1221'),
                    '121' => array(),
                    '122' => array('1221'),
                )
            ),
            'unknown parent' => array(
                array(
                    array('1', null),
                    array('11', '1'),
                    array('12', '2'),
                ),
                array(
                    '1' => array('11'),
                    '11' => array(),
                )
            ),
            'child loaded before parent' => array(
                array(
                    array('111', '11'),
                    array('11', '1'),
                    array('12', '1'),
                    array('1', null),
                ),
                array(
                    '1' => array('11', '111', '12'),
                    '11' => array('111'),
                    '111' => array(),
                    '12' => array(),
                )
            ),
        );
    }

    /**
     * @dataProvider getUsersAssignedToBusinessUnitsProvider
     */
    public function testGetUsersAssignedToBusinessUnits(array $businessUnitIds, array $expectedOwnerIds)
    {
        $tree = new OwnerTree();

        $tree->addUserBusinessUnit(1, 1, 1);
        $tree->addUserBusinessUnit(1, 1, 2);
        $tree->addUserBusinessUnit(2, 1, 3);
        $tree->addUserBusinessUnit(3, 1, 3);
        $tree->addUserBusinessUnit(4, 1, 3);

        $this->assertEquals($expectedOwnerIds, $tree->getUsersAssignedToBusinessUnits($businessUnitIds));
    }

    public function getUsersAssignedToBusinessUnitsProvider()
    {
        return [
            'non existing bu' => [
                [4],
                [],
            ],
            [
                [1],
                [1],
            ],
            [
                [1, 2],
                [1],
            ],
            [
                [3],
                [2, 3, 4],
            ],
            [
                [1, 3],
                [1, 2, 3, 4],
            ],
            'ids without duplicities' => [
                [1, 2, 3],
                [1, 2, 3, 4],
            ],
        ];
    }
}
