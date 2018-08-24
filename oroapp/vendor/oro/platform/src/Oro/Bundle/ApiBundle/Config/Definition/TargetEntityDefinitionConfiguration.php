<?php

namespace Oro\Bundle\ApiBundle\Config\Definition;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\NodeBuilder;

use Oro\Bundle\ApiBundle\Config\EntityDefinitionConfig;
use Oro\Bundle\ApiBundle\Config\EntityDefinitionFieldConfig;

class TargetEntityDefinitionConfiguration extends AbstractConfigurationSection
{
    /** @var string */
    protected $parentSectionName;

    /** @var string */
    protected $sectionName;

    /**
     * @param string $sectionName
     */
    public function __construct($sectionName = 'entity')
    {
        $this->sectionName = $sectionName;
    }

    /**
     * Gets the name of the section.
     *
     * @return string
     */
    public function getSectionName()
    {
        return $this->sectionName;
    }

    /**
     * Gets the name of the parent section.
     *
     * @return string|null
     */
    public function getParentSectionName()
    {
        return $this->parentSectionName;
    }

    /**
     * Sets the name of the parent section.
     *
     * @param string $sectionName
     */
    public function setParentSectionName($sectionName)
    {
        $this->parentSectionName = $sectionName;
    }

    /**
     * {@inheritdoc}
     */
    public function configure(NodeBuilder $node)
    {
        $sectionName = $this->sectionName;
        if (!empty($this->parentSectionName)) {
            $sectionName = $this->parentSectionName . '.' . $sectionName;
        }

        /** @var ArrayNodeDefinition $parentNode */
        $parentNode = $node->end();
        $this->callConfigureCallbacks($node, $sectionName);
        $this->addPreProcessCallbacks($parentNode, $sectionName);
        $this->addPostProcessCallbacks(
            $parentNode,
            $sectionName,
            function ($value) {
                return $this->postProcessConfig($value);
            }
        );

        $this->configureEntityNode($node);
        $fieldNode = $node
            ->arrayNode(EntityDefinitionConfig::FIELDS)
                ->useAttributeAsKey('name')
                ->normalizeKeys(false)
                ->prototype('array')
                    ->children();
        $this->configureFieldNode($fieldNode);
    }

    /**
     * @param array $config
     *
     * @return array
     */
    protected function postProcessConfig(array $config)
    {
        if (empty($config[EntityDefinitionConfig::ORDER_BY])) {
            unset($config[EntityDefinitionConfig::ORDER_BY]);
        }
        if (empty($config[EntityDefinitionConfig::HINTS])) {
            unset($config[EntityDefinitionConfig::HINTS]);
        }
        if (empty($config[EntityDefinitionConfig::POST_SERIALIZE])) {
            unset($config[EntityDefinitionConfig::POST_SERIALIZE]);
        }
        if (empty($config[EntityDefinitionConfig::FORM_TYPE])) {
            unset($config[EntityDefinitionConfig::FORM_TYPE]);
        }
        if (empty($config[EntityDefinitionConfig::FORM_OPTIONS])) {
            unset($config[EntityDefinitionConfig::FORM_OPTIONS]);
        }
        if (empty($config[EntityDefinitionConfig::FORM_EVENT_SUBSCRIBER])) {
            unset($config[EntityDefinitionConfig::FORM_EVENT_SUBSCRIBER]);
        }
        if (empty($config[EntityDefinitionConfig::FIELDS])) {
            unset($config[EntityDefinitionConfig::FIELDS]);
        }

        return $config;
    }

    /**
     * @param NodeBuilder $node
     */
    public function configureEntityNode(NodeBuilder $node)
    {
        $node
            ->enumNode(EntityDefinitionConfig::EXCLUSION_POLICY)
                ->values(
                    [EntityDefinitionConfig::EXCLUSION_POLICY_ALL, EntityDefinitionConfig::EXCLUSION_POLICY_NONE]
                )
            ->end()
            ->integerNode(EntityDefinitionConfig::MAX_RESULTS)->min(-1)->end()
            ->arrayNode(EntityDefinitionConfig::ORDER_BY)
                ->performNoDeepMerging()
                ->useAttributeAsKey('name')
                ->prototype('enum')->values(['ASC', 'DESC'])->end()
            ->end()
            ->arrayNode(EntityDefinitionConfig::HINTS)
                ->prototype('array')
                    ->beforeNormalization()
                        ->ifString()
                        ->then(function ($v) {
                            return ['name' => $v];
                        })
                    ->end()
                    ->children()
                        ->scalarNode('name')->cannotBeEmpty()->end()
                        ->variableNode('value')->end()
                    ->end()
                ->end()
            ->end()
            ->variableNode(EntityDefinitionConfig::POST_SERIALIZE)->end()
            ->scalarNode(EntityDefinitionConfig::FORM_TYPE)->end()
            ->arrayNode(EntityDefinitionConfig::FORM_OPTIONS)
                ->useAttributeAsKey('name')
                ->performNoDeepMerging()
                ->prototype('variable')->end()
            ->end()
            ->variableNode(EntityDefinitionConfig::FORM_EVENT_SUBSCRIBER)
                ->validate()
                    ->always(function ($v) {
                        if (is_string($v)) {
                            return [$v];
                        }
                        if (is_array($v)) {
                            return $v;
                        }
                        throw new \InvalidArgumentException(
                            'The value must be a string or an array.'
                        );
                    })
                ->end()
            ->end();
    }

    /**
     * @param NodeBuilder $node
     */
    protected function configureFieldNode(NodeBuilder $node)
    {
        $sectionName = $this->sectionName . '.field';
        if (!empty($this->parentSectionName)) {
            $sectionName = $this->parentSectionName . '.' . $sectionName;
        }

        /** @var ArrayNodeDefinition $parentNode */
        $parentNode = $node->end();
        $this->callConfigureCallbacks($node, $sectionName);
        $this->addPreProcessCallbacks($parentNode, $sectionName);
        $this->addPostProcessCallbacks(
            $parentNode,
            $sectionName,
            function ($value) {
                return $this->postProcessFieldConfig($value);
            }
        );

        $node
            ->booleanNode(EntityDefinitionFieldConfig::EXCLUDE)->end()
            ->scalarNode(EntityDefinitionFieldConfig::DESCRIPTION)->cannotBeEmpty()->end()
            ->scalarNode(EntityDefinitionFieldConfig::PROPERTY_PATH)->cannotBeEmpty()->end()
            ->scalarNode(EntityDefinitionFieldConfig::DATA_TYPE)->cannotBeEmpty()->end()
            ->scalarNode(EntityDefinitionFieldConfig::TARGET_CLASS)->end()
            ->enumNode(EntityDefinitionFieldConfig::TARGET_TYPE)
                ->values(['to-many', 'to-one', 'collection'])
            ->end()
            ->booleanNode(EntityDefinitionFieldConfig::COLLAPSE)->end()
            ->scalarNode(EntityDefinitionFieldConfig::FORM_TYPE)->end()
            ->arrayNode(EntityDefinitionFieldConfig::FORM_OPTIONS)
                ->useAttributeAsKey('name')
                ->performNoDeepMerging()
                ->prototype('variable')->end()
            ->end()
            ->arrayNode(EntityDefinitionFieldConfig::DEPENDS_ON)
                ->prototype('scalar')->end()
            ->end();
    }

    /**
     * @param array $config
     *
     * @return array
     */
    protected function postProcessFieldConfig(array $config)
    {
        if (empty($config[EntityDefinitionFieldConfig::FORM_TYPE])) {
            unset($config[EntityDefinitionFieldConfig::FORM_TYPE]);
        }
        if (empty($config[EntityDefinitionFieldConfig::FORM_OPTIONS])) {
            unset($config[EntityDefinitionFieldConfig::FORM_OPTIONS]);
        }
        if (!empty($config[EntityDefinitionFieldConfig::TARGET_TYPE])) {
            if ('collection' === $config[EntityDefinitionFieldConfig::TARGET_TYPE]) {
                $config[EntityDefinitionFieldConfig::TARGET_TYPE] = 'to-many';
            }
        } elseif (!empty($config[EntityDefinitionFieldConfig::TARGET_CLASS])) {
            $config[EntityDefinitionFieldConfig::TARGET_TYPE] = 'to-one';
        }
        if (empty($config[EntityDefinitionFieldConfig::DEPENDS_ON])) {
            unset($config[EntityDefinitionFieldConfig::DEPENDS_ON]);
        }

        return $config;
    }
}
