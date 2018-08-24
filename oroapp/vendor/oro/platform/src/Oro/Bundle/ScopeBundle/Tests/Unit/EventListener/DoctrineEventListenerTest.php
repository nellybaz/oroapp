<?php

namespace Oro\Bundle\ScopeBundle\Tests\Unit\EventListener;

use Doctrine\Common\Cache\CacheProvider;
use Oro\Bundle\RedirectBundle\Entity\Repository\SlugRepository;
use Oro\Bundle\ScopeBundle\Entity\Repository\ScopeRepository;
use Oro\Bundle\ScopeBundle\EventListener\DoctrineEventListener;
use Oro\Bundle\ScopeBundle\Manager\ScopeEntityStorage;

class DoctrineEventListenerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ScopeEntityStorage|\PHPUnit_Framework_MockObject_MockObject
     */
    private $entityStorage;

    /**
     * @var CacheProvider|\PHPUnit_Framework_MockObject_MockObject
     */
    private $scopeManagerCache;

    /**
     * @var DoctrineEventListener
     */
    private $listener;

    protected function setUp()
    {
        $this->entityStorage = $this->createMock(ScopeEntityStorage::class);
        $this->scopeManagerCache = $this->createMock(CacheProvider::class);

        $this->listener = new DoctrineEventListener($this->entityStorage);
    }

    public function testPreFlush()
    {
        $this->entityStorage->expects($this->once())
            ->method('persistScheduledForInsert');
        $this->entityStorage->expects($this->once())
            ->method('clear');

        $this->listener->preFlush();
    }

    public function testPostFlushWhenNoCache()
    {
        $this->scopeManagerCache->expects($this->never())
            ->method('delete');

        $this->listener->postFlush();
    }

    public function testPostFlush()
    {
        $this->listener->setScopeRepositoryCache($this->scopeManagerCache);
        $this->scopeManagerCache->expects($this->once())
            ->method('delete')
            ->with(ScopeRepository::SCOPE_RESULT_CACHE_KEY_ID);

        $this->listener->postFlush();
    }

    public function testOnClear()
    {
        $this->entityStorage->expects($this->once())
            ->method('clear');

        $this->listener->onClear();
    }
}
