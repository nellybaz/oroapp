<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/page/footer_menu.yml
 */

class __Oro_Layout_Update_55465fce947870d39c3c10191699f6041b316d2230eaec0fd3333ecc8388f0b5 implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/page/footer_menu.html.twig' );
        $layoutManipulator->add( 'footer_menu_container', 'page_footer_base', 'container' );
        $layoutManipulator->add( 'footer_menu_row', 'footer_menu_container', 'container' );
        $layoutManipulator->add( 'footer_menu', 'footer_menu_row', 'menu', array (
          'item' => '=data["menu"].getMenu("commerce_footer_links")',
          'depth' => 2,
        ) );
    }
}