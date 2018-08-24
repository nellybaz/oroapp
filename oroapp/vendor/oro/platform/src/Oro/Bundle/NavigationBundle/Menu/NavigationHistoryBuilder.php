<?php

namespace Oro\Bundle\NavigationBundle\Menu;

use Knp\Menu\ItemInterface;
use Knp\Menu\Matcher\Matcher;
use Knp\Menu\Util\MenuManipulator;
use Oro\Bundle\ConfigBundle\Config\ConfigManager;

class NavigationHistoryBuilder extends NavigationItemBuilder
{
    /** @var Matcher */
    private $matcher;

    /** @var ConfigManager */
    private $configManager;

    /** @var MenuManipulator */
    private $manipulator;

    /**
     * @return MenuManipulator
     */
    protected function getMenuManipulator()
    {
        if (!$this->manipulator) {
            $this->manipulator = new MenuManipulator();
        }
        return $this->manipulator;
    }

    /**
     * @param ConfigManager $configManager
     */
    public function setConfigManager(ConfigManager $configManager)
    {
        $this->configManager = $configManager;
    }

    /**
     * Modify menu by adding, removing or editing items.
     *
     * @param \Knp\Menu\ItemInterface $menu
     * @param array                   $options
     * @param string|null             $alias
     */
    public function build(ItemInterface $menu, array $options = [], $alias = null)
    {
        $maxItems = $this->configManager->get('oro_navigation.max_items');

        if (!is_null($maxItems)) {
            // we'll hide current item, so always select +1 item
            $options['max_items'] = $maxItems + 1;
        }

        parent::build($menu, $options, $alias);

        $children = $menu->getChildren();
        foreach ($children as $child) {
            if ($this->matcher->isCurrent($child)) {
                $menu->removeChild($child);

                break;
            }
        }

        $this->getMenuManipulator()->slice($menu, 0, $maxItems);
    }

    /**
     * Setter for matcher service
     *
     * @param \Knp\Menu\Matcher\Matcher $matcher
     * @return $this
     */
    public function setMatcher(Matcher $matcher)
    {
        $this->matcher = $matcher;

        return $this;
    }

    /**
     * @inheritdoc
     */
    protected function getMatchedRoute($item)
    {
        return isset($item['route']) ? $item['route'] : null;
    }
}
