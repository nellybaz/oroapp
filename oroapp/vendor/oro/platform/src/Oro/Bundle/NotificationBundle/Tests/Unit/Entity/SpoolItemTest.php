<?php

namespace Oro\Bundle\NotificationBundle\Tests\Unit\Entity;

use Oro\Bundle\NotificationBundle\Entity\SpoolItem;

class SpoolItemTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SpoolItem
     */
    protected $entity;

    protected function setUp()
    {
        $this->entity = new SpoolItem();

        // get id should return null cause this entity was not loaded from DB
        $this->assertNull($this->entity->getId());
    }

    protected function tearDown()
    {
        unset($this->entity);
    }

    public function testSetterGetterStatus()
    {
        // empty from construct
        $this->assertNull($this->entity->getStatus());
        $this->entity->setStatus('test.new.status');
        $this->assertEquals('test.new.status', $this->entity->getStatus());
    }

    public function testSetterGetterForMessage()
    {
        // empty from construct
        $this->assertNull($this->entity->getMessage());

        $message = $this->createMock('Swift_Mime_Message');

        $this->entity->setMessage($message);
        $this->assertEquals($message, $this->entity->getMessage());
    }

    public function testSetterGetterLogType()
    {
        // empty from construct
        $this->assertNull($this->entity->getLogType());
        $this->entity->setLogType('log type');
        $this->assertEquals('log type', $this->entity->getLogType());
    }
}
