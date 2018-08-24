<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/oro_frontend_root/featured_menu.yml
 */

class __Oro_Layout_Update_854b1cac7605a4576b70d22d56c678d9b558941b62901a4ce35b4070587a5db6 implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/oro_frontend_root/featured_menu.twig' );
        $layoutManipulator->add( 'featured_menu_container', 'page_content', 'container', array (
        ), 'featured_products_container', true );
        $layoutManipulator->add( 'featured_menu', 'featured_menu_container', 'menu', array (
          'item' => '=data["menu"].getMenu("featured_menu")',
        ) );
    }
}