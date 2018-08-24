<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/oro_frontend_root/new_arrivals.yml
 */

class __Oro_Layout_Update_0e2d50b357adfb2e80ad5412375a4318cec2ec0102b340eb6773dfc7e378d8c5 implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\ImportsAwareLayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->add( 'new_arrival_products_container', 'page_content', 'container' );
        $layoutManipulator->setOption( 'new_arrival_products', 'items', '=data["new_arrivals"].getProducts()' );
        $layoutManipulator->appendOption( 'new_arrival_product', 'attr.class', 'new-arrival-product' );
        $layoutManipulator->setOption( 'new_arrival_products', 'label', 'oro.product.new_arrivals.label' );
    }

    public function getImports()
    {
        return array (
          0 => 
          array (
            'id' => 'oro_product_list',
            'root' => 'new_arrival_products_container',
            'namespace' => 'new_arrival',
          ),
        );
    }
}