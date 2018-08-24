<?php

namespace Oro\Bundle\OrderBundle\Tests\Unit\EventListener;

use Oro\Bundle\ConfigBundle\Config\ConfigChangeSet;
use Oro\Bundle\ConfigBundle\Event\ConfigUpdateEvent;
use Oro\Bundle\ProductBundle\Search\Reindex\ProductReindexManager;
use Oro\Bundle\OrderBundle\EventListener\PreviouslyPurchasedFeatureToggleListener;

class PreviouslyPurchasedFeatureToggleListenerTest extends \PHPUnit_Framework_TestCase
{
    const CONFIG_KEY = 'oro_order.enable_purchase_history';

    /** @var PreviouslyPurchasedFeatureToggleListener */
    protected $listener;

    /** @var ProductReindexManager|\PHPUnit_Framework_MockObject_MockObject */
    protected $reindexManager;

    /**
     * @inheritDoc
     */
    protected function setUp()
    {
        $this->reindexManager = $this->createMock(ProductReindexManager::class);
        $this->listener = new PreviouslyPurchasedFeatureToggleListener($this->reindexManager);
    }

    /**
     * @inheritDoc
     */
    protected function tearDown()
    {
        unset($this->listener);
        unset($this->reindexManager);
    }

    public function testConfigOptionNotChanged()
    {
        $this->reindexManager
            ->expects($this->never())
            ->method('reindexAllProducts');

        $event = $this->getConfigUpdateEvent();
        $this->listener->reindexProducts($event);
    }

    public function testConfigOptionChangedInSystemScope()
    {
        $event = $this->getConfigUpdateEvent(
            [
                self::CONFIG_KEY => [
                    'new' => true,
                    'old' => false
                ]
            ],
            'system'
        );

        $this->reindexManager
            ->expects($this->once())
            ->method('reindexAllProducts')
            ->with(null);

        $this->listener->reindexProducts($event);
    }

    /**
     * @param array       $changeSet
     * @param string|null $scope
     * @param int|null    $scopeId
     *
     * @return ConfigUpdateEvent
     */
    protected function getConfigUpdateEvent(array $changeSet = [], $scope = null, $scopeId = null)
    {
        return new ConfigUpdateEvent(
            new ConfigChangeSet(
                $changeSet
            ),
            $scope,
            $scopeId
        );
    }
}
