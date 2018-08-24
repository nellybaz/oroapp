<?php

namespace Oro\Bundle\WebCatalogBundle\Tests\Unit\EventListener;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Event\OnFlushEventArgs;
use Doctrine\ORM\UnitOfWork;

use Oro\Bundle\ConfigBundle\Event\ConfigUpdateEvent;
use Oro\Bundle\WebCatalogBundle\EventListener\WebCatalogUsageListener;
use Oro\Bundle\WebCatalogBundle\Provider\CacheableWebCatalogUsageProvider;
use Oro\Bundle\WebCatalogBundle\Provider\WebCatalogUsageProvider;
use Oro\Bundle\WebsiteBundle\Entity\Website;

class WebCatalogUsageListenerTest extends \PHPUnit_Framework_TestCase
{
    /** @var \PHPUnit_Framework_MockObject_MockObject|CacheableWebCatalogUsageProvider */
    private $cacheableProvider;

    /** @var WebCatalogUsageListener */
    private $listener;

    protected function setUp()
    {
        $this->cacheableProvider = $this->createMock(CacheableWebCatalogUsageProvider::class);

        $this->listener = new WebCatalogUsageListener($this->cacheableProvider);
    }

    public function testOnConfigurationUpdateWhenCacheIsEmpty()
    {
        $event = $this->createMock(ConfigUpdateEvent::class);

        $this->cacheableProvider->expects(self::once())
            ->method('hasCache')
            ->willReturn(false);
        $event->expects(self::never())
            ->method('isChanged');
        $this->cacheableProvider->expects(self::never())
            ->method('clearCache');

        $this->listener->onConfigurationUpdate($event);
    }

    public function testOnConfigurationUpdateWhenHasCacheAndWebCatalogConfigIsNotChanged()
    {
        $event = $this->createMock(ConfigUpdateEvent::class);

        $this->cacheableProvider->expects(self::once())
            ->method('hasCache')
            ->willReturn(true);
        $event->expects(self::once())
            ->method('isChanged')
            ->with(WebCatalogUsageProvider::SETTINGS_KEY)
            ->willReturn(false);
        $this->cacheableProvider->expects(self::never())
            ->method('clearCache');

        $this->listener->onConfigurationUpdate($event);
    }

    public function testOnConfigurationUpdateWhenHasCacheAndWebCatalogConfigIsChanged()
    {
        $event = $this->createMock(ConfigUpdateEvent::class);

        $this->cacheableProvider->expects(self::once())
            ->method('hasCache')
            ->willReturn(true);
        $event->expects(self::once())
            ->method('isChanged')
            ->with(WebCatalogUsageProvider::SETTINGS_KEY)
            ->willReturn(true);
        $this->cacheableProvider->expects(self::once())
            ->method('clearCache');

        $this->listener->onConfigurationUpdate($event);
    }

    public function testOnFlushWhenCacheIsEmpty()
    {
        $args = $this->createMock(OnFlushEventArgs::class);

        $this->cacheableProvider->expects(self::once())
            ->method('hasCache')
            ->willReturn(false);
        $args->expects(self::never())
            ->method('getEntityManager');
        $this->cacheableProvider->expects(self::never())
            ->method('clearCache');

        $this->listener->onFlush($args);
    }

    public function testOnFlushWhenHasCacheAndNoInsertedOrDeletedWebsite()
    {
        $args = $this->createMock(OnFlushEventArgs::class);

        $em = $this->createMock(EntityManager::class);
        $uow = $this->createMock(UnitOfWork::class);

        $this->cacheableProvider->expects(self::once())
            ->method('hasCache')
            ->willReturn(true);
        $args->expects(self::once())
            ->method('getEntityManager')
            ->willReturn($em);
        $em->expects(self::once())
            ->method('getUnitOfWork')
            ->willReturn($uow);
        $uow->expects(self::once())
            ->method('getScheduledEntityInsertions')
            ->willReturn([new \stdClass()]);
        $uow->expects(self::once())
            ->method('getScheduledEntityDeletions')
            ->willReturn([new \stdClass()]);
        $this->cacheableProvider->expects(self::never())
            ->method('clearCache');

        $this->listener->onFlush($args);
    }

    public function testOnFlushWhenHasCacheAndHasInsertedWebsite()
    {
        $args = $this->createMock(OnFlushEventArgs::class);

        $em = $this->createMock(EntityManager::class);
        $uow = $this->createMock(UnitOfWork::class);

        $this->cacheableProvider->expects(self::once())
            ->method('hasCache')
            ->willReturn(true);
        $args->expects(self::once())
            ->method('getEntityManager')
            ->willReturn($em);
        $em->expects(self::once())
            ->method('getUnitOfWork')
            ->willReturn($uow);
        $uow->expects(self::once())
            ->method('getScheduledEntityInsertions')
            ->willReturn([$this->createMock(Website::class)]);
        $uow->expects(self::never())
            ->method('getScheduledEntityDeletions');
        $this->cacheableProvider->expects(self::once())
            ->method('clearCache');

        $this->listener->onFlush($args);
    }

    public function testOnFlushWhenHasCacheAndHasDeletedWebsite()
    {
        $args = $this->createMock(OnFlushEventArgs::class);

        $em = $this->createMock(EntityManager::class);
        $uow = $this->createMock(UnitOfWork::class);

        $this->cacheableProvider->expects(self::once())
            ->method('hasCache')
            ->willReturn(true);
        $args->expects(self::once())
            ->method('getEntityManager')
            ->willReturn($em);
        $em->expects(self::once())
            ->method('getUnitOfWork')
            ->willReturn($uow);
        $uow->expects(self::once())
            ->method('getScheduledEntityInsertions')
            ->willReturn([]);
        $uow->expects(self::once())
            ->method('getScheduledEntityDeletions')
            ->willReturn([$this->createMock(Website::class)]);
        $this->cacheableProvider->expects(self::once())
            ->method('clearCache');

        $this->listener->onFlush($args);
    }
}
