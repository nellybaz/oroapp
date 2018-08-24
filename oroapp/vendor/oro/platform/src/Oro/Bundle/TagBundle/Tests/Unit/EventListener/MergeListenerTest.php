<?php

namespace Oro\Bundle\TagBundle\Tests\Unit\EventListener;

use Doctrine\Common\Collections\ArrayCollection;

use Oro\Bundle\EntityMergeBundle\Data\EntityData;
use Oro\Bundle\EntityMergeBundle\Event\EntityDataEvent;
use Oro\Bundle\EntityMergeBundle\Event\EntityMetadataEvent;
use Oro\Bundle\EntityMergeBundle\Metadata\EntityMetadata;

use Oro\Bundle\TagBundle\Entity\TagManager;
use Oro\Bundle\TagBundle\EventListener\MergeListener;
use Oro\Bundle\TagBundle\Helper\TaggableHelper;
use Oro\Bundle\TagBundle\Tests\Unit\Stub\NotTaggableEntityStub;
use Oro\Bundle\TagBundle\Tests\Unit\Stub\TaggableEntityStub;

class MergeListenerTest extends \PHPUnit_Framework_TestCase
{
    /** @var MergeListener */
    protected $listener;

    /** @var \PHPUnit_Framework_MockObject_MockObject|EntityMetadata */
    protected $entityMetadata;

    /** @var \PHPUnit_Framework_MockObject_MockObject|TagManager */
    protected $manager;

    /** @var \PHPUnit_Framework_MockObject_MockObject|EntityData */
    protected $entityData;

    /** @var \PHPUnit_Framework_MockObject_MockObject|TaggableHelper */
    protected $helper;

    protected function setUp()
    {
        $this->manager = $this->getMockBuilder('Oro\Bundle\TagBundle\Entity\TagManager')
            ->disableOriginalConstructor()
            ->getMock();

        $this->helper = $this->getMockBuilder('Oro\Bundle\TagBundle\Helper\TaggableHelper')
            ->disableOriginalConstructor()
            ->getMock();

        $this->listener = new MergeListener($this->manager, $this->helper);

        $this->entityMetadata = $this
            ->getMockBuilder('Oro\Bundle\EntityMergeBundle\Metadata\EntityMetadata')
            ->setMethods(['getClassName', 'addFieldMetadata'])
            ->disableOriginalConstructor()
            ->getMock();

        $this->entityMetadata
            ->expects($this->any())
            ->method('getClassName')
            ->will($this->returnValue(get_class($this->createTaggableEntity())));

        $this->entityData = $this
            ->getMockBuilder('Oro\Bundle\EntityMergeBundle\Data\EntityData')
            ->disableOriginalConstructor()
            ->getMock();

        $this->entityData
            ->expects($this->any())
            ->method('getMetadata')
            ->will($this->returnValue($this->entityMetadata));
    }

    public function testOnBuildMetadata()
    {
        $this->helper
            ->expects($this->once())
            ->method('isTaggable')
            ->willReturn(true);

        $this->entityMetadata
            ->expects($this->once())
            ->method('addFieldMetadata');

        $event = new EntityMetadataEvent($this->entityMetadata);

        $this->listener->onBuildMetadata($event);
    }

    public function testOnCreateEntityData()
    {
        $this->helper
            ->expects($this->once())
            ->method('isTaggable')
            ->willReturn(true);

        $this->entityData
            ->expects($this->any())
            ->method('getEntities')
            ->will(
                $this->returnValue(
                    new ArrayCollection(
                        [
                            $this->createTaggableEntity('foo'),
                            $this->createTaggableEntity('bar')
                        ]
                    )
                )
            );

        $this->manager
            ->expects($this->exactly(2))
            ->method('loadTagging');

        $event = new EntityDataEvent($this->entityData);

        $this->listener->onCreateEntityData($event);
    }

    public function testAfterMergeEntity()
    {
        $this->entityData
            ->expects($this->any())
            ->method('getMasterEntity')
            ->will($this->returnValue($this->createTaggableEntity('foo')));

        $event = new EntityDataEvent($this->entityData);

        $this->manager
            ->expects($this->once())
            ->method('saveTagging');

        $this->helper
            ->expects($this->once())
            ->method('isTaggable')
            ->willReturn(true);

        $this->listener->afterMergeEntity($event);
    }

    public function testNotTaggable()
    {
        $this->helper
            ->expects($this->once())
            ->method('isTaggable')
            ->willReturn(false);

        $this->entityMetadata = $this
            ->getMockBuilder('Oro\Bundle\EntityMergeBundle\Metadata\EntityMetadata')
            ->setMethods(['getClassName', 'addFieldMetadata'])
            ->disableOriginalConstructor()
            ->getMock();

        $this->entityMetadata
            ->expects($this->any())
            ->method('getClassName')
            ->will($this->returnValue(get_class($this->createNotTaggableEntity())));

        $this->entityMetadata
            ->expects($this->never())
            ->method('addFieldMetadata');

        $event = new EntityMetadataEvent($this->entityMetadata);

        $this->listener->onBuildMetadata($event);
    }

    /**
     * @param mixed $id
     * @return TaggableEntityStub
     */
    protected function createTaggableEntity($id = null)
    {
        return new TaggableEntityStub($id);
    }

    /**
     * @param mixed $id
     * @return NotTaggableEntityStub
     */
    protected function createNotTaggableEntity($id = null)
    {
        return new NotTaggableEntityStub($id);
    }
}
