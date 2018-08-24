<?php

namespace Oro\Bundle\MagentoBundle\Tests\Unit\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Oro\Bundle\MagentoBundle\EventListener\IntegrationRemoveListener;

class IntegrationRemoveListenerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    protected $wsdlManager;

    /**
     * @var IntegrationRemoveListener
     */
    protected $listener;

    protected function setUp()
    {
        $this->wsdlManager = $this->getMockBuilder('Oro\Bundle\MagentoBundle\Service\WsdlManager')
            ->disableOriginalConstructor()
            ->getMock();

        $this->listener = new IntegrationRemoveListener($this->wsdlManager);
    }

    protected function tearDown()
    {
        unset($this->listener, $this->wsdlManager);
    }

    public function testPreRemoveWithoutApiUrl()
    {
        $entity = $this->getEntity();

        $this->wsdlManager->expects($this->never())
            ->method('clearCacheForUrl');

        $this->listener->preRemove($entity, $this->createMock(LifecycleEventArgs::class));
    }

    public function testPreRemoveWithApiUrl()
    {
        $url = 'http://test.local';
        $entity = $this->getEntity($url);

        $this->wsdlManager->expects($this->once())
            ->method('clearCacheForUrl')
            ->with($url);

        $this->listener->preRemove($entity, $this->createMock(LifecycleEventArgs::class));
    }

    /**
     * @param null|string $url
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getEntity($url = null)
    {
        $entity = $this->getMockBuilder('Oro\Bundle\MagentoBundle\Entity\MagentoSoapTransport')
            ->disableOriginalConstructor()
            ->getMock();
        $entity->expects($this->atLeastOnce())
            ->method('getApiUrl')
            ->will($this->returnValue($url));

        return $entity;
    }
}
