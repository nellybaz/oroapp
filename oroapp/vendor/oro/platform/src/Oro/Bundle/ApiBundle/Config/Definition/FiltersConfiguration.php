<?php

namespace Oro\Bundle\ApiBundle\Config\Definition;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\NodeBuilder;

use Oro\Bundle\ApiBundle\Config\FilterFieldConfig;
use Oro\Bundle\ApiBundle\Config\FiltersConfig;

class FiltersConfiguration extends AbstractConfigurationSection
{
    /**
     * {@inheritdoc}
     */
    public function configure(NodeBuilder $node)
    {
        $sectionName = 'filters';

        /** @var ArrayNodeDefinition $parentNode */
        $parentNode = $node->end();
        $this->callConfigureCallbacks($node, $sectionName);
        $this->addPreProcessCallbacks($parentNode, $sectionName);
        $this->addPostProcessCallbacks(
            $parentNode,
            $sectionName,
            function ($value) {
                if (empty($value[FiltersConfig::FIELDS])) {
                    unset($value[FiltersConfig::FIELDS]);
                }

                return $value;
            }
        );

        $fieldNode = $node
            ->enumNode(FiltersConfig::EXCLUSION_POLICY)
                ->values([FiltersConfig::EXCLUSION_POLICY_ALL, FiltersConfig::EXCLUSION_POLICY_NONE])
            ->end()
            ->arrayNode(FiltersConfig::FIELDS)
                ->useAttributeAsKey('name')
                ->normalizeKeys(false)
                ->prototype('array')
                    ->children();
        $this->configureFieldNode($fieldNode);
    }

    /**
     * @param NodeBuilder $node
     */
    protected function configureFieldNode(NodeBuilder $node)
    {
        $sectionName = 'filters.field';

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
            ->booleanNode(FilterFieldConfig::EXCLUDE)->end()
            ->scalarNode(FilterFieldConfig::DESCRIPTION)->cannotBeEmpty()->end()
            ->scalarNode(FilterFieldConfig::PROPERTY_PATH)->cannotBeEmpty()->end()
            ->scalarNode(FilterFieldConfig::TYPE)->cannotBeEmpty()->end()
            ->arrayNode(FilterFieldConfig::OPTIONS)
                ->useAttributeAsKey('name')
                ->performNoDeepMerging()
                ->prototype('variable')->end()
            ->end()
            ->arrayNode(FilterFieldConfig::OPERATORS)
                ->prototype('scalar')->end()
            ->end()
            ->scalarNode(FilterFieldConfig::DATA_TYPE)->cannotBeEmpty()->end()
            ->booleanNode(FilterFieldConfig::ALLOW_ARRAY)->end()
            ->booleanNode(FilterFieldConfig::ALLOW_RANGE)->end();
    }

    /**
     * @param array $config
     *
     * @return array
     */
    protected function postProcessFieldConfig(array $config)
    {
        if (empty($config[FilterFieldConfig::OPTIONS])) {
            unset($config[FilterFieldConfig::OPTIONS]);
        }
        if (empty($config[FilterFieldConfig::OPERATORS])) {
            unset($config[FilterFieldConfig::OPERATORS]);
        }

        return $config;
    }
}
