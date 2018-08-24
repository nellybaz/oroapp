<?php

namespace Oro\Bundle\PricingBundle\Entity\EntityListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Oro\Bundle\PlatformBundle\EventListener\OptionalListenerInterface;
use Oro\Bundle\PlatformBundle\EventListener\OptionalListenerTrait;
use Oro\Bundle\PricingBundle\Async\Topics;
use Oro\Bundle\PricingBundle\Entity\PriceList;
use Oro\Bundle\PricingBundle\Entity\PriceListToProduct;
use Oro\Bundle\PricingBundle\Entity\ProductPrice;
use Oro\Bundle\PricingBundle\Event\AssignmentBuilderBuildEvent;
use Oro\Bundle\PricingBundle\Event\PriceListToProductSaveAfterEvent;
use Oro\Bundle\PricingBundle\Model\PriceListTriggerHandler;
use Oro\Bundle\PricingBundle\Model\PriceRuleLexemeTriggerHandler;
use Oro\Bundle\PricingBundle\Sharding\ShardManager;
use Oro\Bundle\ProductBundle\Entity\Product;

class PriceListToProductEntityListener implements OptionalListenerInterface
{
    use OptionalListenerTrait;

    const FIELD_PRICE_LIST = 'priceList';
    const FIELD_PRODUCT = 'product';

    /**
     * @var ShardManager
     */
    protected $shardManager;

    /**
     * @var PriceListTriggerHandler
     */
    protected $priceListTriggerHandler;

    /**
     * @var PriceRuleLexemeTriggerHandler
     */
    protected $priceRuleLexemeTriggerHandler;

    /**
     * @param PriceListTriggerHandler $priceListTriggerHandler
     * @param PriceRuleLexemeTriggerHandler $priceRuleLexemeTriggerHandler
     * @param ShardManager $shardManager
     */
    public function __construct(
        PriceListTriggerHandler $priceListTriggerHandler,
        PriceRuleLexemeTriggerHandler $priceRuleLexemeTriggerHandler,
        ShardManager $shardManager
    ) {
        $this->priceListTriggerHandler = $priceListTriggerHandler;
        $this->priceRuleLexemeTriggerHandler = $priceRuleLexemeTriggerHandler;
        $this->shardManager = $shardManager;
    }

    /**
     * @param PriceListToProduct $priceListToProduct
     */
    public function postPersist(PriceListToProduct $priceListToProduct)
    {
        $this->schedulePriceListRecalculations(
            $priceListToProduct->getPriceList(),
            [$priceListToProduct->getProduct()]
        );
    }

    /**
     * @param PriceListToProduct $priceListToProduct
     * @param PreUpdateEventArgs $event
     */
    public function preUpdate(PriceListToProduct $priceListToProduct, PreUpdateEventArgs $event)
    {
        $this->recalculateForOldValues($priceListToProduct, $event);
        $this->schedulePriceListRecalculations(
            $priceListToProduct->getPriceList(),
            [$priceListToProduct->getProduct()]
        );
    }

    /**
     * @param PriceListToProduct $priceListToProduct
     * @param LifecycleEventArgs $event
     */
    public function postRemove(PriceListToProduct $priceListToProduct, LifecycleEventArgs $event)
    {
        $this->schedulePriceListRecalculations(
            $priceListToProduct->getPriceList(),
            [$priceListToProduct->getProduct()]
        );

        $event->getEntityManager()
            ->getRepository(ProductPrice::class)
            ->deleteByPriceList(
                $this->shardManager,
                $priceListToProduct->getPriceList(),
                [$priceListToProduct->getProduct()]
            );
    }

    /**
     * @param AssignmentBuilderBuildEvent $event
     */
    public function onAssignmentRuleBuilderBuild(AssignmentBuilderBuildEvent $event)
    {
        $this->schedulePriceListRecalculations($event->getPriceList(), $event->getProducts());
        $this->priceListTriggerHandler->sendScheduledTriggers();
    }

    /**
     * @param PriceList $priceList
     * @param array|Product[] $products
     */
    protected function scheduleDependentPriceListsUpdate(PriceList $priceList, array $products = [])
    {
        if (!$this->enabled) {
            return;
        }

        $lexemes = $this->priceRuleLexemeTriggerHandler
            ->findEntityLexemes(PriceList::class, ['assignedProducts'], $priceList->getId());
        $this->priceRuleLexemeTriggerHandler->addTriggersByLexemes($lexemes, $products);
    }

    /**
     * @param PriceList $priceList
     * @param array|Product[] $products
     */
    protected function schedulePriceListRecalculations(PriceList $priceList, array $products = [])
    {
        if (!$this->enabled) {
            return;
        }

        $this->priceListTriggerHandler->addTriggerForPriceList(Topics::RESOLVE_PRICE_RULES, $priceList, $products);
        $this->scheduleDependentPriceListsUpdate($priceList, $products);
    }

    /**
     * @param PriceListToProductSaveAfterEvent $event
     */
    public function onPriceListToProductSave(PriceListToProductSaveAfterEvent $event)
    {
        $this->postPersist($event->getPriceListToProduct());
    }

    /**
     * @param PriceListToProduct $priceListToProduct
     * @param PreUpdateEventArgs $event
     */
    protected function recalculateForOldValues(PriceListToProduct $priceListToProduct, PreUpdateEventArgs $event)
    {
        $oldProduct = $priceListToProduct->getProduct();
        $oldPriceList = $priceListToProduct->getPriceList();
        if ($event->hasChangedField(self::FIELD_PRICE_LIST)) {
            /** @var PriceList $oldPriceList */
            $oldPriceList = $event->getOldValue(self::FIELD_PRICE_LIST);
        }
        if ($event->hasChangedField(self::FIELD_PRODUCT)) {
            /** @var Product $oldProduct */
            $oldProduct = $event->getOldValue(self::FIELD_PRODUCT);
        }

        if ($event->hasChangedField(self::FIELD_PRICE_LIST) || $event->hasChangedField(self::FIELD_PRODUCT)) {
            $this->schedulePriceListRecalculations($oldPriceList, [$oldProduct]);
        }
    }
}
