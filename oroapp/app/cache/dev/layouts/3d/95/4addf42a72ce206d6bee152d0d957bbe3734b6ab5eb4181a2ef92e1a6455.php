<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/WebCatalogBundle/Resources/views/layouts/blank/oro_cms_frontend_page_view/layout.yml
 */

class __Oro_Layout_Update_3d954addf42a72ce206d6bee152d0d957bbe3734b6ab5eb4181a2ef92e1a6455 implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setOption( 'title', 'value', '=data["web_catalog_title"].getTitle(defaultValue)' );
        $layoutManipulator->setOption( 'page_title', 'value', '=data["web_catalog_title"].getNodeTitle(defaultValue)' );
    }
}