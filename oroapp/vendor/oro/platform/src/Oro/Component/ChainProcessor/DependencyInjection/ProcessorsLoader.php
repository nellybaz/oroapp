<?php

namespace Oro\Component\ChainProcessor\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;

use Oro\Component\ChainProcessor\ExpressionParser;

class ProcessorsLoader
{
    /**
     * @param ContainerBuilder $container
     * @param string           $processorTagName
     *
     * @return array
     */
    public static function loadProcessors(ContainerBuilder $container, $processorTagName)
    {
        $processors = [];
        $isDebug = $container->getParameter('kernel.debug');
        $taggedServices = $container->findTaggedServiceIds($processorTagName);
        foreach ($taggedServices as $id => $taggedAttributes) {
            foreach ($taggedAttributes as $attributes) {
                $action = '';
                if (!empty($attributes['action'])) {
                    $action = $attributes['action'];
                }
                unset($attributes['action']);

                $group = null;
                if (!empty($attributes['group'])) {
                    $group = $attributes['group'];
                } else {
                    unset($attributes['group']);
                }

                if (!$action && $group) {
                    throw new \InvalidArgumentException(
                        sprintf(
                            'Tag attribute "group" can be used only if '
                            . 'the attribute "action" is specified. Service: "%s".',
                            $id
                        )
                    );
                }

                $priority = 0;
                if (isset($attributes['priority'])) {
                    $priority = $attributes['priority'];
                }
                if (!$isDebug) {
                    unset($attributes['priority']);
                }

                $attributes = array_map(
                    function ($val) {
                        return ExpressionParser::parse($val);
                    },
                    $attributes
                );

                $processors[$action][$priority][] = [$id, $attributes];
            }
        }

        return $processors;
    }
}
