<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/blank/page/main_menu.yml
 */

class __Oro_Layout_Update_334964bbf484d2bac87b8aa0f42ec8eb9988327aa2b791776fba13a84678fe31 implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/blank/page/main_menu.html.twig' );
        $layoutManipulator->add( 'categories_main_menu_list', 'main_menu_container', 'container', array (
        ), NULL, true );
        $layoutManipulator->add( 'categories_main_menu', 'categories_main_menu_list', 'category_list', array (
          'categories' => '=data["category"].getCategoryTreeArray(data["current_user"].getCurrentUser())',
          'max_size' => 4,
        ), NULL, true );
        $layoutManipulator->add( 'categories_main_menu_first_level_item', 'categories_main_menu', 'container' );
        $layoutManipulator->add( 'categories_main_menu_second_level', 'categories_main_menu_first_level_item', 'container' );
        $layoutManipulator->add( 'categories_main_menu_third_level', 'categories_main_menu_second_level', 'container' );
    }
}