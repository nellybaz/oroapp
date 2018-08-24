<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/blank/oro_product_frontend_product_index/product_index.yml
 */

class __Oro_Layout_Update_da36ebe9124022dd62c353631c7cd41f40ecbc1c3824ff65c9d6dbc651716408 implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/blank/oro_product_frontend_product_index/product_index.html.twig' );
        $layoutManipulator->add( 'category_picture', 'page_main_header', 'category', array (
          'category' => '=data["category"].getCurrentCategory()',
        ) );
        $layoutManipulator->add( 'breadcrumbs', 'page_main_header', 'breadcrumbs', array (
          'breadcrumbs' => '=data["category_breadcrumbs"].getItems()',
        ) );
        $layoutManipulator->add( 'breadcrumbs_filters', 'breadcrumbs', 'block' );
        $layoutManipulator->add( 'category_title', 'page_main_header', 'text', array (
          'text' => '=data["locale"].getLocalizedValue(data["category"].getCurrentCategory().getTitles())',
        ) );
    }
}