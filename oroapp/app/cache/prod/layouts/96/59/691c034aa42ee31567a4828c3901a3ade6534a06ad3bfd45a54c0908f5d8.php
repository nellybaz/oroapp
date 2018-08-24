<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/WebCatalogBundle/Resources/views/layouts/default/oro_product_frontend_product_index/product_index.yml
 */

class __Oro_Layout_Update_9659691c034aa42ee31567a4828c3901a3ade6534a06ad3bfd45a54c0908f5d8 implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setOption( 'title', 'value', '=data["web_catalog_title"].getTitle(defaultValue)' );
        $layoutManipulator->setOption( 'category_title', 'text', '=data["web_catalog_title"].getNodeTitle(data["locale"].getLocalizedValue(data["category"].getCurrentCategory().getTitles()))' );
    }
}