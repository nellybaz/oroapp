<?php

namespace Oro\Bundle\ProductBundle\Menu\Frontend;

use Knp\Menu\ItemInterface;

use Oro\Bundle\NavigationBundle\Menu\BuilderInterface;
use Oro\Bundle\ProductBundle\ComponentProcessor\ComponentProcessorRegistry;

class QuickAddMenuBuilder implements BuilderInterface
{
    /**
     * @var ComponentProcessorRegistry
     */
    protected $componentRegistry;

    /**
     * @param ComponentProcessorRegistry $componentRegistry
     */
    public function __construct(ComponentProcessorRegistry $componentRegistry)
    {
        $this->componentRegistry = $componentRegistry;
    }

    /**
     * {@inheritDoc}
     */
    public function build(ItemInterface $menu, array $options = array(), $alias = null)
    {
        if (!$this->componentRegistry->hasAllowedProcessor()) {
            return;
        }
        $menu
            ->addChild(
                'oro.product.frontend.quick_add.title',
                [
                    'route' => 'oro_product_frontend_quick_add',
                    'extras' => [
                        'position' => 500,
                        'description' => 'oro.product.frontend.quick_add.description',
                    ],
                ]
            );
    }
}
