<?php

namespace Oro\Bundle\InventoryBundle\EventListener;

use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\UIBundle\Event\BeforeListRenderEvent;
use Oro\Bundle\UIBundle\Fallback\AbstractFallbackFieldsFormView;

class ProductLowInventoryThresholdFormViewListener extends AbstractFallbackFieldsFormView
{
    /**
     * @param BeforeListRenderEvent $event
     */
    public function onProductView(BeforeListRenderEvent $event)
    {
        $product = $this->getEntityFromRequest(Product::class);
        if (!$product) {
            return;
        }

        $this->addBlockToEntityView(
            $event,
            'OroInventoryBundle:Product:lowInventoryThreshold.html.twig',
            $product,
            'oro.product.sections.inventory'
        );
    }

    /**
     * @param BeforeListRenderEvent $event
     */
    public function onProductEdit(BeforeListRenderEvent $event)
    {
        $this->addBlockToEntityEdit(
            $event,
            'OroInventoryBundle:Product:lowInventoryThresholdFormWidget.html.twig',
            'oro.product.sections.inventory'
        );
    }
}
