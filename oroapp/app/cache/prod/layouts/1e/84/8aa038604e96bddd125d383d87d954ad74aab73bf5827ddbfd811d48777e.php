<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/page/main_menu.yml
 */

class __Oro_Layout_Update_1e848aa038604e96bddd125d383d87d954ad74aab73bf5827ddbfd811d48777e implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/page/main_menu.html.twig' );
        $layoutManipulator->add( 'header_row', 'page_header', 'container', array (
        ), NULL, false );
        $layoutManipulator->add( 'header_row_main_menu', 'header_row', 'container' );
        $layoutManipulator->add( 'main_menu_extra_container', 'header_row_main_menu', 'container' );
        $layoutManipulator->add( 'main_menu_container', 'header_row_main_menu', 'container' );
        $layoutManipulator->add( 'main_menu_list', 'main_menu_container', 'container' );
        $layoutManipulator->add( 'main_menu', 'main_menu_list', 'menu', array (
          'item' => '=data["menu"].getMenu("commerce_main_menu")',
          'depth' => 1,
        ) );
    }
}