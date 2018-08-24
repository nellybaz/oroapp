<?php

namespace Oro\Bundle\MarketingListBundle\Tests\Unit\Entity;

use Oro\Bundle\MarketingListBundle\Entity\MarketingList;
use Oro\Bundle\MarketingListBundle\Entity\MarketingListType;
use Oro\Bundle\SegmentBundle\Entity\Segment;
use Symfony\Component\PropertyAccess\PropertyAccess;

class MarketingListTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var MarketingList
     */
    protected $entity;

    protected function setUp()
    {
        $this->entity = new MarketingList();
    }

    protected function tearDown()
    {
        unset($this->entity);
    }

    public function testGetId()
    {
        $this->assertNull($this->entity->getId());

        $value = 42;
        $idReflection = new \ReflectionProperty(get_class($this->entity), 'id');
        $idReflection->setAccessible(true);
        $idReflection->setValue($this->entity, $value);
        $this->assertEquals($value, $this->entity->getId());
    }

    /**
     * @dataProvider propertiesDataProvider
     * @param string $property
     * @param mixed $value
     */
    public function testSettersAndGetters($property, $value)
    {
        $accessor = PropertyAccess::createPropertyAccessor();
        $accessor->setValue($this->entity, $property, $value);
        $this->assertEquals($value, $accessor->getValue($this->entity, $property));
    }

    public function propertiesDataProvider()
    {
        $type = $this
            ->getMockBuilder('Oro\Bundle\MarketingListBundle\Entity\MarketingListType')
            ->disableOriginalConstructor()
            ->getMock();

        return array(
            array('name', 'test'),
            array('description', 'test'),
            array('entity', 'Test'),
            array('type', $type),
            array('segment', $this->createMock('Oro\Bundle\SegmentBundle\Entity\Segment')),
            array('owner', $this->createMock('Oro\Bundle\UserBundle\Entity\User')),
            array('organization', $this->createMock('Oro\Bundle\OrganizationBundle\Entity\Organization')),
            array('lastRun', new \DateTime()),
            array('createdAt', new \DateTime()),
            array('updatedAt', new \DateTime()),
        );
    }

    public function testMarketingListItems()
    {
        $this->assertCollectionMethods(
            'Oro\Bundle\MarketingListBundle\Entity\MarketingListItem',
            'MarketingListItem'
        );
    }

    public function testMarketingListRemovedItems()
    {
        $this->assertCollectionMethods(
            'Oro\Bundle\MarketingListBundle\Entity\MarketingListRemovedItem',
            'MarketingListRemovedItem'
        );
    }

    public function testMarketingListUnsubscribedItems()
    {
        $this->assertCollectionMethods(
            'Oro\Bundle\MarketingListBundle\Entity\MarketingListUnsubscribedItem',
            'MarketingListUnsubscribedItem'
        );
    }

    public function testToString()
    {
        $this->entity->setName('test');
        $this->assertEquals('test', $this->entity->__toString());
    }

    public function testSetDefinition()
    {
        $definition = 'test';
        $segment = $this->createMock('Oro\Bundle\SegmentBundle\Entity\Segment');
        $segment->expects($this->once())
            ->method('setDefinition')
            ->with($definition);
        $this->entity->setSegment($segment);
        $this->entity->setDefinition($definition);
    }

    public function testGetDefinition()
    {
        $definition = 'test';
        $segment = $this->createMock('Oro\Bundle\SegmentBundle\Entity\Segment');
        $segment->expects($this->once())
            ->method('getDefinition')
            ->will($this->returnValue($definition));

        $this->assertNull($this->entity->getDefinition());
        $this->entity->setSegment($segment);
        $this->assertEquals($definition, $this->entity->getDefinition($definition));
    }

    public function testBeforeSave()
    {
        $this->assertNull($this->entity->getCreatedAt());
        $this->assertNull($this->entity->getUpdatedAt());
        $this->entity->beforeSave();
        $this->assertInstanceOf('\DateTime', $this->entity->getCreatedAt());
        $this->assertInstanceOf('\DateTime', $this->entity->getUpdatedAt());
    }

    public function testDoUpdate()
    {
        $this->assertNull($this->entity->getUpdatedAt());
        $this->entity->doUpdate();
        $this->assertInstanceOf('\DateTime', $this->entity->getUpdatedAt());
    }

    protected function assertCollectionMethods($entityClass, $entityShortName)
    {
        $addMethodName = 'add' . $entityShortName;
        $removeMethodName = 'remove' . $entityShortName;
        $resetMethodName = 'reset' . $entityShortName . 's';
        $getMethodName = 'get' . $entityShortName . 's';

        $itemOne = $this->createMock($entityClass);
        $itemTwo = $this->createMock($entityClass);

        $this->assertInstanceOf('Doctrine\Common\Collections\Collection', $this->entity->{$getMethodName}());
        $this->assertCount(0, $this->entity->{$getMethodName}());
        $this->entity->{$addMethodName}($itemOne);
        $this->entity->{$addMethodName}($itemTwo);
        $this->assertCount(2, $this->entity->{$getMethodName}());
        $this->entity->{$removeMethodName}($itemOne);
        $this->assertCount(1, $this->entity->{$getMethodName}());
        $this->assertEquals($itemTwo, $this->entity->{$getMethodName}()->first());
        $this->entity->{$resetMethodName}(array());
        $this->assertCount(0, $this->entity->{$getMethodName}());
        $this->entity->{$resetMethodName}(array($itemOne, $itemTwo));
        $this->assertCount(2, $this->entity->{$getMethodName}());
    }

    public function testIsManualWithSegment()
    {
        $ml = new MarketingList();
        $segment = new Segment();
        $ml->setSegment($segment);

        $this->assertNull($ml->getType());
        $this->assertFalse($ml->isManual());
    }

    public function testIsManualWithoutSegmentAndType()
    {
        $ml = new MarketingList();

        $this->assertNull($ml->getType());
        $this->assertFalse($ml->isManual());
    }

    public function testIsManualWithManualType()
    {
        $ml = new MarketingList();
        $type = new MarketingListType(MarketingListType::TYPE_MANUAL);
        $ml->setType($type);

        $this->assertNotNull($ml->getType());
        $this->assertTrue($ml->isManual());
    }

    public function testIsManualWithNoNManualType()
    {
        $ml = new MarketingList();
        $type = new MarketingListType(MarketingListType::TYPE_DYNAMIC);
        $ml->setType($type);

        $this->assertNotNull($ml->getType());
        $this->assertFalse($ml->isManual());
    }
}
