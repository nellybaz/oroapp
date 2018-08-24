<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/oro_product_frontend_product_index/product_index.yml
 */

class __Oro_Layout_Update_a19880af1dea86e66a5ee205bbf15b56c147b2842744ed7a935bdb4fa33a9eda implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setOption( 'product_datagrid_row_product_shopping_lists', 'productShoppingLists', 'undefined' );
        $layoutManipulator->setOption( 'product_datagrid_row_product_line_item_form_buttons_shopping_list', 'productShoppingLists', 'undefined' );
    }
}