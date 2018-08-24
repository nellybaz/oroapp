<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/WebCatalogBundle/Resources/views/layouts/blank/oro_product_frontend_product_index/product_index.yml
 */

class __Oro_Layout_Update_95b43c5ade70e592eb2c218a7d9d6d4a693f8cac985187927dc84b1e02aabd91 implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\IsApplicableLayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        if (!$this->isApplicable($item->getContext())) {
            return;
        }
        $layoutManipulator->setOption( 'breadcrumbs', 'breadcrumbs', '=data["web_catalog_breadcrumbs"].getItems()' );
    }

    public function isApplicable(\Oro\Component\Layout\ContextInterface $context)
    {
        return ($context["web_catalog_id"] != null);
    }
}