<?php

namespace Oro\Bundle\ActivityListBundle\Tests\Unit\Model\Strategy;

use Oro\Bundle\ActivityBundle\Manager\ActivityManager;
use Oro\Bundle\ActivityListBundle\Entity\Manager\ActivityListManager;
use Oro\Bundle\ActivityListBundle\Model\MergeModes;
use Oro\Bundle\ActivityListBundle\Model\Strategy\ReplaceStrategy;
use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\EntityMergeBundle\Data\EntityData;
use Oro\Bundle\EntityMergeBundle\Data\FieldData;
use Oro\Bundle\EntityMergeBundle\Metadata\EntityMetadata;
use Oro\Bundle\EntityMergeBundle\Metadata\FieldMetadata;
use Oro\Bundle\UserBundle\Entity\User;
use Symfony\Component\Security\Core\Util\ClassUtils;

class ReplaceStrategyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ReplaceStrategy $strategy
     */
    protected $strategy;

    /** @var ActivityListManager|\PHPUnit_Framework_MockObject_MockObject */
    protected $activityListManager;

    /** @var DoctrineHelper|\PHPUnit_Framework_MockObject_MockObject */
    protected $doctrineHelper;

    /** @var ActivityManager|\PHPUnit_Framework_MockObject_MockObject */
    protected $activityManager;

    protected function setUp()
    {
        $activityListManager = 'Oro\Bundle\ActivityListBundle\Entity\Manager\ActivityListManager';
        $this->activityListManager = $this->getMockBuilder($activityListManager)
            ->disableOriginalConstructor()
            ->getMock();

        $this->doctrineHelper = $this->getMockBuilder('Oro\Bundle\EntityBundle\ORM\DoctrineHelper')
            ->disableOriginalConstructor()
            ->getMock();

        $this->activityManager = $this->getMockBuilder('Oro\Bundle\ActivityBundle\Manager\ActivityManager')
            ->disableOriginalConstructor()
            ->getMock();

        $this->strategy = new ReplaceStrategy(
            $this->activityListManager,
            $this->doctrineHelper,
            $this->activityManager
        );
    }

    public function testNotSupports()
    {
        $fieldData = new FieldData(new EntityData(new EntityMetadata(), []), new FieldMetadata());
        $fieldData->setMode(MergeModes::ACTIVITY_UNITE);

        $this->assertFalse($this->strategy->supports($fieldData));
    }

    public function testSupports()
    {
        $fieldData = new FieldData(new EntityData(new EntityMetadata(), []), new FieldMetadata());
        $fieldData->setMode(MergeModes::ACTIVITY_REPLACE);

        $this->assertTrue($this->strategy->supports($fieldData));
    }

    public function testMerge()
    {
        $account1 = new User();
        $account2 = new User();
        $this->setId($account1, 1);
        $this->setId($account2, 2);
        $entityMetadata = new EntityMetadata(['type' => ClassUtils::getRealClass($account1)]);
        $entityData = new EntityData($entityMetadata, [$account1, $account2]);
        $entityData->setMasterEntity($account1);
        $fieldData = new FieldData($entityData, new FieldMetadata());
        $fieldData->setMode(MergeModes::ACTIVITY_REPLACE);
        $fieldData->setSourceEntity($account2);

        $queryBuilder = $this->getMockBuilder('Doctrine\ORM\QueryBuilder')
            ->disableOriginalConstructor()
            ->setMethods(['getQuery', 'getResult'])
            ->getMock();
        $queryBuilder->expects($this->any())
            ->method('getQuery')
            ->will($this->returnSelf());
        $queryBuilder->expects($this->any())
            ->method('getResult')
            ->will($this->returnValue([
                ['id' => 1, 'relatedActivityId' => 11],
                ['id' => 3, 'relatedActivityId' => 2]
            ]));

        $repository = $this->getMockBuilder('Oro\Bundle\ActivityListBundle\Entity\Repository\ActivityListRepository')
            ->disableOriginalConstructor()
            ->getMock();
        $repository->expects($this->any())
            ->method('getActivityListQueryBuilderByActivityClass')
            ->willReturn($queryBuilder);
        $repository->expects($this->any())
            ->method('findBy')
            ->willReturn($this->returnValue([]));

        $this->doctrineHelper
            ->expects($this->any())
            ->method('getEntityRepository')
            ->willReturn($repository);

        $this->activityListManager
            ->expects($this->exactly(2))
            ->method('replaceActivityTargetWithPlainQuery');

        $this->strategy->merge($fieldData);
    }

    public function testGetName()
    {
        $this->assertEquals('activity_replace', $this->strategy->getName());
    }

    /**
     * @param $object
     * @param $value
     */
    protected function setId($object, $value)
    {
        $class = new \ReflectionClass($object);
        $property  = $class->getProperty('id');
        $property->setAccessible(true);

        $property->setValue($object, $value);
    }
}
