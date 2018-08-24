<?php

namespace Oro\Bundle\DataGridBundle\Extension\Formatter;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

use Oro\Bundle\DataGridBundle\Extension\Formatter\Property\PropertyInterface;

class Configuration implements ConfigurationInterface
{
    const DEFAULT_TYPE          = 'field';
    const DEFAULT_FRONTEND_TYPE = PropertyInterface::TYPE_STRING;

    const TYPE_KEY       = 'type';
    const COLUMNS_KEY    = 'columns';
    const PROPERTIES_KEY = 'properties';

    /** @var array */
    protected $types;

    protected $root;

    /**
     * @param        $types
     * @param string $root
     */
    public function __construct($types, $root)
    {
        $this->types = $types;
        $this->root  = $root;
    }

    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $builder = new TreeBuilder();

        $builder->root($this->root)
            ->useAttributeAsKey('name')
            ->prototype('array')
                ->ignoreExtraKeys()
                ->children()
                    ->scalarNode(self::TYPE_KEY)
                        ->defaultValue(self::DEFAULT_TYPE)
                        ->validate()
                        ->ifNotInArray($this->types)
                            ->thenInvalid('Invalid property type "%s"')
                        ->end()
                    ->end()
                    // if "data name" is not specified a field name is used
                    ->scalarNode(PropertyInterface::DATA_NAME_KEY)->end()
                    // just validate type if node exist
                    ->scalarNode(PropertyInterface::FRONTEND_TYPE_KEY)->defaultValue(self::DEFAULT_FRONTEND_TYPE)->end()
                    ->scalarNode('label')->end()
                    ->booleanNode(PropertyInterface::TRANSLATABLE_KEY)->defaultTrue()->end()
                    ->booleanNode('editable')->defaultFalse()->end()
                    ->booleanNode('renderable')->end()
                    ->booleanNode('shortenableLabel')->defaultTrue()->end()
                    ->scalarNode('order')->end()
                    ->booleanNode('required')->end()
                ->end()
            ->end();

        return $builder;
    }
}
