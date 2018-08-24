<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/WebCatalogBundle/Resources/views/layouts/blank/page/main_menu.yml
 */

class __Oro_Layout_Update_0078468a10600f0706e952b1a22e342c7f6859566e2b9b06eb0b25726ce0deda implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\IsApplicableLayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        if (!$this->isApplicable($item->getContext())) {
            return;
        }
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/WebCatalogBundle/Resources/views/layouts/blank/page/main_menu.html.twig' );
        $layoutManipulator->add( 'web_catalog_menu_list', 'main_menu_container', 'container', array (
        ), NULL, true );
        $layoutManipulator->add( 'web_catalog_menu', 'web_catalog_menu_list', 'category_list', array (
          'categories' => '=data["web_catalog_menu"].getItems()',
          'max_size' => 6,
        ), NULL, true );
        $layoutManipulator->add( 'web_catalog_menu_first_level_item_simple', 'web_catalog_menu', 'menu_item', array (
          'not_use_for' => 
          array (
            'root__products' => NULL,
            'root__new-arrivals' => NULL,
          ),
        ) );
        $layoutManipulator->add( 'web_catalog_menu_second_level_item_simple', 'web_catalog_menu_first_level_item_simple', 'menu_item' );
        $layoutManipulator->add( 'web_catalog_menu_first_level_item_head', 'web_catalog_menu', 'menu_item', array (
          'use_for' => 
          array (
            'root__new-arrivals' => NULL,
          ),
        ) );
        $layoutManipulator->add( 'web_catalog_menu_second_level_item_head', 'web_catalog_menu_first_level_item_head', 'menu_item' );
        $layoutManipulator->add( 'web_catalog_menu_second_level_sale_head', 'web_catalog_menu_first_level_item_head', 'block' );
        $layoutManipulator->add( 'web_catalog_menu_first_level_item_mega', 'web_catalog_menu', 'menu_item', array (
          'use_for' => 
          array (
            'root__products' => NULL,
          ),
        ) );
        $layoutManipulator->add( 'web_catalog_menu_second_level_item_mega', 'web_catalog_menu_first_level_item_mega', 'menu_item' );
        $layoutManipulator->add( 'web_catalog_menu_third_level_item_mega', 'web_catalog_menu_second_level_item_mega', 'menu_item' );
        $layoutManipulator->add( 'web_catalog_menu_four_level_item_mega', 'web_catalog_menu_third_level_item_mega', 'menu_item' );
        $layoutManipulator->add( 'web_catalog_menu_second_level_sale_mega', 'web_catalog_menu_first_level_item_mega', 'block' );
        $layoutManipulator->remove( 'categories_main_menu_list' );
        $layoutManipulator->remove( 'categories_main_menu' );
    }

    public function isApplicable(\Oro\Component\Layout\ContextInterface $context)
    {
        return ($context["web_catalog_id"] !== null);
    }
}