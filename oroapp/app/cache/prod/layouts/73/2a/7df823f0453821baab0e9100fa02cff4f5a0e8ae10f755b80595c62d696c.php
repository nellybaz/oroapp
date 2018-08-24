<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/oro_frontend_root/featured_products.yml
 */

class __Oro_Layout_Update_732a7df823f0453821baab0e9100fa02cff4f5a0e8ae10f755b80595c62d696c implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\ImportsAwareLayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setOption( 'featured_products', 'items', '=data["featured_products"].getProducts()' );
        $layoutManipulator->setOption( 'featured_products', 'items_data.stickers', '=data["oro_product_stickers"].getStickersForProducts(data["featured_products"].getProducts())' );
        $layoutManipulator->appendOption( 'featured_product', 'attr.class', 'featured-product' );
        $layoutManipulator->setOption( 'featured_products', 'label', 'oro.product.featured_products.label' );
        $layoutManipulator->setOption( 'featured_product_line_item_form_fields', 'instance_name', 'featured_products' );
        $layoutManipulator->setOption( 'featured_product_line_item_form_start', 'instance_name', 'featured_products' );
        $layoutManipulator->setOption( 'featured_product_line_item_form_end', 'instance_name', 'featured_products' );
        $layoutManipulator->add( 'featured_products_container', 'page_content', 'container' );
    }

    public function getImports()
    {
        return array (
          0 => 
          array (
            'id' => 'oro_product_list',
            'root' => 'featured_products_container',
            'namespace' => 'featured',
          ),
        );
    }
}