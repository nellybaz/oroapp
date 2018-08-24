<?php

namespace Oro\Bundle\SearchBundle\Tests\Unit\Provider;

use Doctrine\Common\Cache\Cache;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;

use Oro\Bundle\SearchBundle\Event\SearchMappingCollectEvent;
use Oro\Bundle\SearchBundle\Provider\SearchMappingProvider;

class SearchMappingProviderTest extends AbstractSearchMappingProviderTest
{
    /**
     * @var SearchMappingProvider
     */
    protected $provider;

    /**
     * @var Cache|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $cache;

    /**
     * @var EventDispatcherInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $eventDispatcher;

    protected function setUp()
    {
        $this->eventDispatcher = $this->createMock(EventDispatcherInterface::class);
        $this->cache = $this->createMock(Cache::class);
        parent::setUp();
    }

    protected function tearDown()
    {
        parent::tearDown();
        unset($this->cache, $this->eventDispatcher);
    }

    public function testGetMappingConfigCached()
    {
        $this->cache
            ->expects($this->once())
            ->method('contains')
            ->with('oro_search.mapping_config')
            ->willReturn(true);

        $this->cache
            ->expects($this->once())
            ->method('fetch')
            ->with('oro_search.mapping_config')
            ->willReturn($this->testMapping);

        $this->eventDispatcher
            ->expects($this->never())
            ->method('dispatch');

        $this->assertEquals($this->testMapping, $this->getProvider()->getMappingConfig());
    }

    public function testGetMappingConfig()
    {
        $this->cache
            ->expects($this->once())
            ->method('contains')
            ->with(SearchMappingProvider::CACHE_KEY)
            ->willReturn(false);

        $this->cache
            ->expects($this->never())
            ->method('fetch');

        $this->eventDispatcher
            ->expects($this->once())
            ->method('dispatch')
            ->willReturnCallback(function ($eventName, SearchMappingCollectEvent $event) {
                $this->assertEquals(SearchMappingCollectEvent::EVENT_NAME, $eventName);
                $this->assertEquals($this->testMapping, $event->getMappingConfig());

                $event->setMappingConfig([]);
            });

        $this->cache
            ->expects($this->once())
            ->method('save')
            ->with(SearchMappingProvider::CACHE_KEY, []);

        $this->assertEquals([], $this->getProvider()->getMappingConfig());
        $this->assertEquals([], $this->getProvider()->getMappingConfig());
    }

    public function testClearMappingCache()
    {
        $this->cache
            ->expects($this->once())
            ->method('delete')
            ->with(SearchMappingProvider::CACHE_KEY);

        $this->getProvider()->clearCache();
    }

    /**
     * {@inheritdoc}
     */
    protected function getProvider()
    {
        if (!$this->provider) {
            $this->provider = new SearchMappingProvider($this->eventDispatcher, $this->cache);
            $this->provider->setMappingConfig($this->testMapping);
        }

        return $this->provider;
    }
}
