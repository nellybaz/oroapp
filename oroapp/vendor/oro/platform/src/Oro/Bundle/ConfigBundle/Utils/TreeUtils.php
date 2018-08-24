<?php

namespace Oro\Bundle\ConfigBundle\Utils;

use Oro\Bundle\ConfigBundle\Config\Tree\GroupNodeDefinition;
use Oro\Bundle\ConfigBundle\Config\ConfigManager;

class TreeUtils
{
    /**
     * Finds node by name in tree
     * called recursively
     *
     * @param        array  GroupNodeDefinition $node
     * @param string $nodeName
     *
     * @return null|GroupNodeDefinition
     */
    public static function findNodeByName(GroupNodeDefinition $node, $nodeName)
    {
        $resultNode = null;
        /** @var $childNode GroupNodeDefinition */
        foreach ($node as $childNode) {
            if ($childNode->getName() === $nodeName) {
                return $childNode;
            } elseif ($childNode instanceof GroupNodeDefinition && !$childNode->isEmpty()) {
                $resultNode = static::findNodeByName($childNode, $nodeName);

                if ($resultNode) {
                    return $resultNode;
                }
            }
        }

        return $resultNode;
    }

    /**
     * Pick nodes for needed level
     * called recursively
     *
     * @param GroupNodeDefinition $node
     * @param int                 $neededLevel
     *
     * @return null|GroupNodeDefinition
     */
    public static function getByNestingLevel(GroupNodeDefinition $node, $neededLevel)
    {
        /** @var $childNode GroupNodeDefinition */
        foreach ($node as $childNode) {
            if ($neededLevel === $childNode->getLevel()) {
                return $childNode;
            } else {
                $node = static::getByNestingLevel($childNode, $neededLevel);
                if ($node !== null) {
                    return $node;
                }
            }
        }

        return null;
    }

    /**
     * Returns first node name if nodes is not empty
     *
     * @param GroupNodeDefinition $node
     *
     * @return null|string
     */
    public static function getFirstNodeName(GroupNodeDefinition $node)
    {
        if (!$node->isEmpty()) {
            $firstNode = $node->first();

            return $firstNode->getName();
        }

        return null;
    }

    /**
     * Returns config key which consists of root node name and config key concated with correct delimiter
     * @param string $rootNodeName
     * @param string $configKey
     * @param string $separator
     * @return string
     */
    public static function getConfigKey($rootNodeName, $configKey, $separator = ConfigManager::SECTION_MODEL_SEPARATOR)
    {
        return implode($separator, [$rootNodeName, $configKey]);
    }
}
