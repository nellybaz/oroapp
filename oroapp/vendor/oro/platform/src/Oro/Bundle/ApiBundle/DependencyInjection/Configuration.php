<?php

namespace Oro\Bundle\ApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\NodeBuilder;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode    = $treeBuilder->root('oro_api');

        $node = $rootNode->children();
        $this->appendConfigOptions($node);
        $this->appendConfigExtensionsNode($node);
        $this->appendActionsNode($node);
        $this->appendFiltersNode($node);
        $this->appendFormTypesNode($node);
        $this->appendFormTypeExtensionsNode($node);
        $this->appendFormTypeGuessersNode($node);
        $this->appendFormTypeGuessesNode($node);

        return $treeBuilder;
    }

    /**
     * @param NodeBuilder $node
     */
    protected function appendConfigOptions(NodeBuilder $node)
    {
        $node
            ->integerNode('config_max_nesting_level')
                ->info(
                    'The maximum number of nesting target entities'
                    . ' that can be specified in "Resources/config/oro/api.yml"'
                )
                ->min(0)
                ->defaultValue(3)
            ->end()
            ->arrayNode('api_doc_views')
                ->info('All supported ApiDoc views')
                ->prototype('scalar')->end()
                ->defaultValue(['default'])
            ->end()
            ->scalarNode('documentation_path')
                ->info('The URL to the API documentation')
                ->defaultNull()
            ->end();
    }

    /**
     * @param NodeBuilder $node
     */
    protected function appendConfigExtensionsNode(NodeBuilder $node)
    {
        $node
            ->arrayNode('config_extensions')
                ->info('The configuration extensions for "Resources/config/oro/api.yml".')
                ->example(['oro_api.config_extension.filters', 'oro_api.config_extension.sorters'])
                ->prototype('scalar')
                ->end()
            ->end();
    }

    /**
     * @param NodeBuilder $node
     */
    protected function appendActionsNode(NodeBuilder $node)
    {
        $node
            ->arrayNode('actions')
                ->info('A definition of Data API actions')
                ->example(
                    [
                        'get' => [
                            'processor_service_id' => 'oro_api.get.processor',
                            'processing_groups' => [
                                'load_data' => [
                                    'priority' => -10
                                ],
                                'normalize_data' => [
                                    'priority' => -20
                                ]
                            ]
                        ]
                    ]
                )
                ->useAttributeAsKey('name')
                ->prototype('array')
                    ->children()
                        ->scalarNode('processor_service_id')
                            ->info('The service id of the action processor. Set for public actions only.')
                            ->cannotBeEmpty()
                        ->end()
                        ->arrayNode('processing_groups')
                            ->info('A list of groups by which child processors can be split')
                            ->useAttributeAsKey('name')
                            ->prototype('array')
                                ->children()
                                    ->scalarNode('priority')
                                        ->isRequired()
                                        ->cannotBeEmpty()
                                    ->end()
                                ->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end();
    }

    /**
     * @param NodeBuilder $node
     */
    protected function appendFiltersNode(NodeBuilder $node)
    {
        $node
            ->arrayNode('filters')
                ->info('A definition of filters')
                ->example(
                    [
                        'integer' => [
                            'supported_operators' => ['=', '!=', '<', '<=', '>', '>=']
                        ],
                        'primaryField' => [
                            'class' => 'Oro\Bundle\ApiBundle\Filter\PrimaryFieldFilter'
                        ],
                        'association' => [
                            'factory' => ['@oro_api.filter_factory.association', 'createFilter']
                        ]
                    ]
                )
                ->useAttributeAsKey('name')
                ->prototype('array')
                    ->validate()
                        ->always(function ($value) {
                            if (empty($value['factory'])) {
                                unset($value['factory']);
                                if (empty($value['class'])) {
                                    $value['class'] = 'Oro\Bundle\ApiBundle\Filter\ComparisonFilter';
                                }
                            }

                            return $value;
                        })
                    ->end()
                        ->validate()
                            ->ifTrue(function ($value) {
                                return !empty($value['class']) && !empty($value['factory']);
                            })
                            ->thenInvalid('The "class" and "factory" should not be used together.')
                        ->end()
                    ->children()
                        ->scalarNode('class')
                            ->cannotBeEmpty()
                        ->end()
                        ->arrayNode('factory')
                            ->validate()
                                ->ifTrue(function ($value) {
                                    return count($value) !== 2 || 0 !== strpos($value[0], '@');
                                })
                                ->thenInvalid('Expected [\'@serviceId\', \'methodName\']')
                            ->end()
                            ->prototype('scalar')->cannotBeEmpty()->end()
                        ->end()
                        ->arrayNode('supported_operators')
                            ->prototype('scalar')->end()
                            ->cannotBeEmpty()
                            ->defaultValue(['=', '!='])
                        ->end()
                    ->end()
                ->end()
            ->end();
    }

    /**
     * @param NodeBuilder $node
     */
    protected function appendFormTypesNode(NodeBuilder $node)
    {
        $node
            ->arrayNode('form_types')
                ->info('The form types that can be reused in Data API')
                ->example(['form.type.form', 'form.type.integer', 'form.type.text'])
                ->prototype('scalar')
                ->end()
            ->end();
    }

    /**
     * @param NodeBuilder $node
     */
    protected function appendFormTypeExtensionsNode(NodeBuilder $node)
    {
        $node
            ->arrayNode('form_type_extensions')
                ->info('The form type extensions that can be reused in Data API')
                ->example(['form.type_extension.form.http_foundation', 'form.type_extension.form.validator'])
                ->prototype('scalar')
                ->end()
            ->end();
    }

    /**
     * @param NodeBuilder $node
     */
    protected function appendFormTypeGuessersNode(NodeBuilder $node)
    {
        $node
            ->arrayNode('form_type_guessers')
                ->info('The form type guessers that can be reused in Data API')
                ->example(['form.type_guesser.validator'])
                ->prototype('scalar')
                ->end()
            ->end();
    }

    /**
     * @param NodeBuilder $node
     */
    protected function appendFormTypeGuessesNode(NodeBuilder $node)
    {
        $node
            ->arrayNode('form_type_guesses')
                ->info('A definition of data type to form type guesses')
                ->example(
                    [
                        'integer' => [
                            'form_type' => 'integer'
                        ],
                        'datetime' => [
                            'form_type' => 'datetime',
                            'options'   => ['model_timezone' => 'UTC', 'view_timezone' => 'UTC']
                        ],
                    ]
                )
                ->useAttributeAsKey('name')
                ->prototype('array')
                    ->performNoDeepMerging()
                    ->children()
                        ->scalarNode('form_type')
                            ->cannotBeEmpty()
                        ->end()
                        ->arrayNode('options')
                            ->useAttributeAsKey('name')
                            ->prototype('variable')->end()
                        ->end()
                    ->end()
                ->end()
            ->end();
    }
}
