<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/OrderBundle/Resources/views/layouts/blank/oro_frontend_root/top_selling_items.yml
 */

class __Oro_Layout_Update_0e15ba6bd403ff6afc3a9d68e599dca6bdb73652fcee16a91fac7cf540486a08 implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\ImportsAwareLayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setOption( 'top_selling_products', 'items', '=data["top_selling_items"].getProducts()' );
        $layoutManipulator->setOption( 'top_selling_products', 'items_data.stickers', '=data["oro_product_stickers"].getStickersForProducts(data["top_selling_items"].getProducts())' );
        $layoutManipulator->setOption( 'top_selling_products', 'label', 'oro.order.top_selling_items.label' );
        $layoutManipulator->setOption( 'top_selling_product_line_item_form_fields', 'instance_name', 'top_selling_products' );
        $layoutManipulator->setOption( 'top_selling_product_line_item_form_start', 'instance_name', 'top_selling_products' );
        $layoutManipulator->setOption( 'top_selling_product_line_item_form_end', 'instance_name', 'top_selling_products' );
        $layoutManipulator->add( 'top_selling_items_container', 'page_content', 'container' );
    }

    public function getImports()
    {
        return array (
          0 => 
          array (
            'id' => 'oro_product_list',
            'root' => 'top_selling_items_container',
            'namespace' => 'top_selling',
          ),
        );
    }
}