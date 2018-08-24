<?php

namespace Oro\Bundle\ProductBundle\EventListener;

use Oro\Bundle\EntityConfigBundle\Config\ConfigInterface;
use Oro\Bundle\EntityConfigBundle\Config\ConfigManager;
use Oro\Bundle\EntityConfigBundle\Entity\FieldConfigModel;
use Oro\Bundle\EntityConfigBundle\Event\PostFlushConfigEvent;
use Oro\Bundle\EntityExtendBundle\EntityConfig\ExtendScope;
use Oro\Bundle\ProductBundle\Async\Topics;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Component\MessageQueue\Client\MessageProducerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Watch changes of product attributes made by the user from UI
 * and trigger update of search index only for active attributes (they should be in status ACTIVE or UPDATE)
 */
class AttributeChangesListener
{
    /** @var RequestStack */
    protected $requestStack;

    /** @var array */
    protected static $activeStates = [ExtendScope::STATE_ACTIVE, ExtendScope::STATE_UPDATE];

    /** @var MessageProducerInterface */
    protected $producer;

    /**
     * @param RequestStack $requestStack
     * @param MessageProducerInterface $producer
     */
    public function __construct(
        RequestStack $requestStack,
        MessageProducerInterface $producer
    ) {
        $this->requestStack = $requestStack;
        $this->producer = $producer;
    }

    /**
     * @param PostFlushConfigEvent $event
     */
    public function postFlush(PostFlushConfigEvent $event)
    {
        if (!$this->requestStack->getMasterRequest()) {
            return;
        }

        $configManager = $event->getConfigManager();

        foreach ($event->getModels() as $model) {
            if (!$model instanceof FieldConfigModel) {
                continue;
            }

            $className = $model->getEntity()->getClassName();
            if (!is_a($className, Product::class, true)) {
                continue;
            }

            $fieldName = $model->getFieldName();

            if ($this->isReindexRequired($configManager, $className, $fieldName)) {
                $this->triggerReindex($model);
                break;
            }
        }
    }

    /**
     * @param ConfigManager $configManager
     * @param string $className
     * @param string $fieldName
     *
     * @return bool
     */
    protected function isReindexRequired(ConfigManager $configManager, $className, $fieldName)
    {
        $extendConfig = $configManager->getProvider('extend')->getConfig($className, $fieldName);
        $extendChangeSet = $configManager->getConfigChangeSet($extendConfig);

        $isStateActive = $extendConfig->in('state', self::$activeStates);
        $isStateChanged = $this->isStateChanged($extendChangeSet);

        /* Ignore changes of attribute state when state changed from not active to not active
         * or from active to active state
         *
         * For example:
         *  - NEW => DELETE
         *  - ACTIVE => UPDATE
         */
        if (!$isStateChanged && !$isStateActive) {
            return false;
        }

        $attributeConfig = $configManager->getProvider('attribute')->getConfig($className, $fieldName);
        $attributeChangeSet = $configManager->getConfigChangeSet($attributeConfig);

        if ($isStateActive) {
            return $this->isReindexRequiredInActiveState($attributeConfig, $attributeChangeSet, $isStateChanged);
        }

        $isSearchable = $attributeConfig->is('searchable');
        $isSearchableChanged = isset($attributeChangeSet['searchable']);

        return $isStateChanged && ($isSearchable ^ $isSearchableChanged);
    }

    /**
     * Change set should have changes of state and active state should be only in one field of state change set
     *
     * @param array $extendChangeSet
     *
     * @return bool
     */
    private function isStateChanged(array $extendChangeSet)
    {
        $changeSet = $extendChangeSet['state'] ?? [];

        return $changeSet &&
            in_array($changeSet[0], self::$activeStates, true) ^ in_array($changeSet[1], self::$activeStates, true);
    }

    /**
     * We should trigger update search index in case if state of attribute not changed,
     * but it is in active state and next conditions are met:
     *  - searchable: no => yes
     *  - searchable: yes => no
     *  - filterable: no => yes
     *  - sortable:   no => yes
     *  - visible:    no => yes
     * or when state of attribute changed and some of required parameters already enabled
     *
     * @param ConfigInterface $config
     * @param array $changeSet
     * @param bool $isStateChanged
     *
     * @return bool
     */
    private function isReindexRequiredInActiveState(ConfigInterface $config, array $changeSet, $isStateChanged)
    {
        $isSearchable = $config->is('searchable');
        $isFilterable = $config->is('filterable');
        $isSortable = $config->is('sortable');
        $isVisible = $config->is('visible');

        $isAnyOptionEnabled = array_filter([$isSearchable, $isFilterable, $isSortable, $isVisible]);
        $isAnyOptionChangedToEnabled = array_filter(
            [
                isset($changeSet['searchable']),
                $isFilterable && isset($changeSet['filterable']),
                $isSortable && isset($changeSet['sortable']),
                $isVisible && isset($changeSet['visible'])
            ]
        );

        if (($isStateChanged && $isAnyOptionEnabled) || (!$isStateChanged && $isAnyOptionChangedToEnabled)) {
            return true;
        }

        return false;
    }

    /**
     * Trigger update search index only for product with attribute
     *
     * @param FieldConfigModel $attribute
     */
    protected function triggerReindex(FieldConfigModel $attribute)
    {
        $this->producer->send(Topics::REINDEX_PRODUCTS_BY_ATTRIBUTE, ['attributeId' => $attribute->getId()]);
    }
}
