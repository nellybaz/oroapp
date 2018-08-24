<?php

namespace Oro\Bundle\PricingBundle\Tests\Unit\Entity\EntityListener;

use Doctrine\Common\Cache\Cache;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Oro\Bundle\PricingBundle\Async\Topics;
use Oro\Bundle\PricingBundle\Entity\EntityListener\PriceRuleEntityListener;
use Oro\Bundle\PricingBundle\Entity\PriceList;
use Oro\Bundle\PricingBundle\Entity\PriceRule;
use Oro\Bundle\PricingBundle\Model\PriceListTriggerHandler;
use Oro\Component\Testing\Unit\EntityTrait;

class PriceRuleEntityListenerTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /**
     * @var Cache|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $cache;

    /**
     * @var PriceListTriggerHandler|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $priceRuleChangeTriggerHandler;

    /**
     * @var PriceRuleEntityListener
     */
    protected $listener;

    protected function setUp()
    {
        $this->cache = $this->createMock(Cache::class);
        $this->priceRuleChangeTriggerHandler = $this->getMockBuilder(PriceListTriggerHandler::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->listener = new PriceRuleEntityListener(
            $this->cache,
            $this->priceRuleChangeTriggerHandler
        );
    }

    public function testPreUpdate()
    {
        $priceList = new PriceList();
        /** @var PriceRule $priceRule */
        $priceRule = $this->getEntity(PriceRule::class, ['id' => 42, 'priceList' => $priceList]);
        $this->cache->expects($this->once())
            ->method('delete')
            ->with('pr_42');
        $this->priceRuleChangeTriggerHandler->expects($this->once())
            ->method('addTriggerForPriceList')
            ->with(Topics::RESOLVE_PRICE_RULES, $priceList);

        $event = $this->getMockBuilder(PreUpdateEventArgs::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->listener->preUpdate($priceRule, $event);
    }

    public function testPreRemove()
    {
        $priceList = new PriceList();
        /** @var PriceRule $priceRule */
        $priceRule = $this->getEntity(PriceRule::class, ['id' => 2, 'priceList' => $priceList]);
        $this->cache->expects($this->once())
            ->method('delete')
            ->with('pr_2');
        $this->priceRuleChangeTriggerHandler->expects($this->once())
            ->method('addTriggerForPriceList')
            ->with(Topics::RESOLVE_PRICE_RULES, $priceList);

        $this->listener->preRemove($priceRule);
    }

    public function testPostPersist()
    {
        $priceList = new PriceList();
        $priceList->setActual(true);

        /** @var PriceRule $priceRule */
        $priceRule = $this->getEntity(PriceRule::class, ['id' => 42, 'priceList' => $priceList]);

        $this->priceRuleChangeTriggerHandler->expects($this->once())
            ->method('addTriggerForPriceList')
            ->with(Topics::RESOLVE_PRICE_RULES, $priceList);

        $this->listener->postPersist($priceRule);
        $this->assertFalse($priceList->isActual());
    }
}
