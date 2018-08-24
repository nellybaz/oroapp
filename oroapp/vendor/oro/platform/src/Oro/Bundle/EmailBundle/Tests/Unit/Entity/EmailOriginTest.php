<?php

namespace Oro\Bundle\EmailBundle\Tests\Unit\Entity;

use Oro\Bundle\EmailBundle\Tests\Unit\Fixtures\Entity\TestEmailOrigin;
use Oro\Bundle\EmailBundle\Tests\Unit\ReflectionUtil;

class EmailOriginTest extends \PHPUnit_Framework_TestCase
{
    public function testIdGetter()
    {
        $entity = new TestEmailOrigin();
        ReflectionUtil::setId($entity, 1);
        $this->assertEquals(1, $entity->getId());
    }

    public function testFolderGetterAndSetter()
    {
        $folder = $this->createMock('Oro\Bundle\EmailBundle\Entity\EmailFolder');

        $entity = new TestEmailOrigin();
        $entity->addFolder($folder);

        $folders = $entity->getFolders();

        $this->assertInstanceOf('Doctrine\Common\Collections\ArrayCollection', $folders);
        $this->assertCount(1, $folders);
        $this->assertTrue($folder === $folders[0]);
    }

    public function testIsActive()
    {
        $entity = new TestEmailOrigin();

        // check  that true by default
        $this->assertTrue($entity->isActive());

        // check setter
        $entity->setActive(false);
        $this->assertFalse($entity->isActive());
    }
}
