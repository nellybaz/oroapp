<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/oro_product_frontend_product_index/product_index.yml
 */

class __Oro_Layout_Update_815c1a7601d0ce7122e3233ac88e03b51ed299643daebd77abeff9c7e858a613 implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\ImportsAwareLayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setOption( 'product_datagrid', 'grid_name', 'frontend-product-search-grid' );
        $layoutManipulator->setOption( 'product_datagrid', 'current_row_view', '=data["oro_product_datagrid_row_view"].getThemeByGridName("frontend-product-search-grid")' );
        $layoutManipulator->setOption( 'product_datagrid_toolbar_display_options', 'current_row_view', '=data["oro_product_datagrid_row_view"].getThemeByGridName("frontend-product-search-grid")' );
        $layoutManipulator->setOption( 'product_datagrid_row_product_sticker_new', 'visible', '=data["oro_product_datagrid_row_view"].getThemeByGridName("frontend-product-search-grid")!="no-image-view"' );
        $layoutManipulator->setOption( 'product_datagrid_row_product_sticker_new_text', 'visible', '=data["oro_product_datagrid_row_view"].getThemeByGridName("frontend-product-search-grid")=="no-image-view"' );
    }

    public function getImports()
    {
        return array (
          0 => 'oro_product_grid',
        );
    }
}