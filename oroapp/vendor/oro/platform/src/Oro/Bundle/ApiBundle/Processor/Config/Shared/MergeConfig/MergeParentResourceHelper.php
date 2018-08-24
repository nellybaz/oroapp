<?php

namespace Oro\Bundle\ApiBundle\Processor\Config\Shared\MergeConfig;

use Oro\Bundle\ApiBundle\Config\ConfigBagInterface;
use Oro\Bundle\ApiBundle\Config\EntityConfigInterface;
use Oro\Bundle\ApiBundle\Config\EntityDefinitionConfig;
use Oro\Bundle\ApiBundle\Processor\Config\ConfigContext;
use Oro\Bundle\ApiBundle\Provider\ConfigProvider;
use Oro\Bundle\ApiBundle\Util\ConfigUtil;

class MergeParentResourceHelper
{
    /** @var ConfigProvider */
    private $configProvider;

    /**
     * @param ConfigProvider $configProvider
     */
    public function __construct(ConfigProvider $configProvider)
    {
        $this->configProvider = $configProvider;
    }

    /**
     * @param ConfigContext $context
     * @param string        $parentResourceClass
     */
    public function mergeParentResourceConfig(ConfigContext $context, $parentResourceClass)
    {
        $parentConfig = $this->configProvider->getConfig(
            $parentResourceClass,
            $context->getVersion(),
            $context->getRequestType(),
            $context->getExtras()
        );
        if ($parentConfig->hasDefinition()) {
            $parentDefinition = $parentConfig->getDefinition();
            $parentDefinition->remove(ConfigUtil::EXCLUSION_POLICY);
            if ($context->hasResult()) {
                $this->mergeDefinition($parentDefinition, $context->getResult());
            }
            $parentDefinition->setParentResourceClass($parentResourceClass);
            $context->setResult($parentDefinition);
            $parentConfig->remove(ConfigUtil::DEFINITION);
        }
        foreach ($parentConfig as $sectionName => $parentSection) {
            if ($parentSection instanceof EntityConfigInterface) {
                $parentSection->remove(ConfigUtil::EXCLUSION_POLICY);
                if ($context->has($sectionName)) {
                    $this->mergeConfigSection($parentSection, $context->get($sectionName));
                }
                $context->set($sectionName, $parentSection);
            }
        }
    }

    /**
     * @param EntityDefinitionConfig $config
     * @param EntityDefinitionConfig $configToMerge
     */
    protected function mergeDefinition(EntityDefinitionConfig $config, EntityDefinitionConfig $configToMerge)
    {
        $config->setKey($configToMerge->getKey());
        $this->mergeConfigAttributes($config, $configToMerge);
        $fieldsToMerge = $configToMerge->getFields();
        foreach ($fieldsToMerge as $fieldName => $fieldToMerge) {
            if ($config->hasField($fieldName)) {
                $field = $config->getField($fieldName);
                $this->mergeConfigAttributes($field, $fieldToMerge);
                $targetEntity = $field->getTargetEntity();
                $targetEntityToMerge = $fieldToMerge->getTargetEntity();
                if (null !== $targetEntity) {
                    if (null !== $targetEntityToMerge) {
                        $config->setKey(null);
                        $this->mergeDefinition($targetEntity, $targetEntityToMerge);
                    }
                } elseif (null !== $targetEntityToMerge) {
                    $field->setTargetEntity($targetEntityToMerge);
                }
            } else {
                $config->addField($fieldName, $fieldToMerge);
            }
        }
    }

    /**
     * @param EntityConfigInterface $config
     * @param EntityConfigInterface $configToMerge
     */
    protected function mergeConfigSection(EntityConfigInterface $config, EntityConfigInterface $configToMerge)
    {
        $this->mergeConfigAttributes($config, $configToMerge);
        $fieldsToMerge = $configToMerge->getFields();
        foreach ($fieldsToMerge as $fieldName => $fieldToMerge) {
            if ($config->hasField($fieldName)) {
                $this->mergeConfigAttributes($config->getField($fieldName), $fieldToMerge);
            } else {
                $config->addField($fieldName, $fieldToMerge);
            }
        }
    }

    /**
     * @param ConfigBagInterface $config
     * @param ConfigBagInterface $configToMerge
     */
    protected function mergeConfigAttributes(ConfigBagInterface $config, ConfigBagInterface $configToMerge)
    {
        $keysToMerge = $configToMerge->keys();
        foreach ($keysToMerge as $key) {
            $config->set($key, $configToMerge->get($key));
        }
    }
}
