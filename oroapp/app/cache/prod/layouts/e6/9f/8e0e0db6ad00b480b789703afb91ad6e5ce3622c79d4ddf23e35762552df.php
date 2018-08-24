<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/oro_frontend_root/new_arrivals_mobile.yml
 */

class __Oro_Layout_Update_e69f8e0e0db6ad00b480b789703afb91ad6e5ce3622c79d4ddf23e35762552df implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\IsApplicableLayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        if (!$this->isApplicable($item->getContext())) {
            return;
        }
        $layoutManipulator->setOption( 'new_arrival_products', 'use_slider', '=data["system_config_provider"].getValue("oro_product.new_arrivals_use_slider_on_mobile")' );
    }

    public function isApplicable(\Oro\Component\Layout\ContextInterface $context)
    {
        return $context["is_mobile"];
    }
}