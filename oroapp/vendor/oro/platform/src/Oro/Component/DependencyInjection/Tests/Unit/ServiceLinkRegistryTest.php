<?php

namespace Oro\Component\DependencyInjection\Tests\Unit;

use Symfony\Component\DependencyInjection\ContainerInterface;

use Oro\Component\DependencyInjection\Exception\UnknownAliasException;
use Oro\Component\DependencyInjection\ServiceLinkRegistry;

class ServiceLinkRegistryTest extends \PHPUnit_Framework_TestCase
{
    /** @var ContainerInterface|\PHPUnit_Framework_MockObject_MockObject */
    private $container;

    /** @var ServiceLinkRegistry */
    private $registry;

    protected function setUp()
    {
        $this->container = $this->createMock(ContainerInterface::class);
        $this->registry = new ServiceLinkRegistry($this->container);
    }

    public function testAddGet()
    {
        $this->registry->add('service_id', 'alias');

        $serviceStub = new \stdClass();
        $this->container->expects($this->once())->method('get')->with('service_id')->willReturn($serviceStub);

        $this->assertSame($serviceStub, $this->registry->get('alias'));
    }

    public function testGetException()
    {
        $this->expectException(UnknownAliasException::class);
        $this->expectExceptionMessage('Unknown service link alias `unregistered_alias`');
        $this->registry->get('unregistered_alias');
    }

    public function testHas()
    {
        $this->registry->add('service_id', 'alias');

        $this->assertTrue($this->registry->has('alias'));
        $this->assertFalse($this->registry->has('unknown_alias'));
    }
}
