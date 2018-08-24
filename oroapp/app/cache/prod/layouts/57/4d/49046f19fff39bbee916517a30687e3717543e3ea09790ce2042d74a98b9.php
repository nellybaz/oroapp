<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/default/page/shopping_list_widget.yml
 */

class __Oro_Layout_Update_574d49046f19fff39bbee916517a30687e3717543e3ea09790ce2042d74a98b9 implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/default/page/shopping_list_widget.html.twig' );
        $layoutManipulator->add( 'header_row_shopping_trigger', 'header_row_shopping', 'container', array (
          'visible' => '=data["feature"].isFeatureEnabled("guest_shopping_list") || context["is_logged_in"]',
        ) );
        $layoutManipulator->add( 'main_menu_shopping_lists_wrapper', 'header_row_shopping_trigger', 'container' );
        $layoutManipulator->add( 'main_menu_shopping_lists_dropdown', 'main_menu_shopping_lists_wrapper', 'shopping_lists_awere_container', array (
          'shoppingLists' => '=data["oro_shopping_list_customer_user_shopping_lists"].getShoppingLists()',
        ) );
        $layoutManipulator->add( 'header_row_shopping_toggle', 'header_row_shopping', 'container' );
        $layoutManipulator->add( 'main_menu_shopping_dropdown', 'header_row_shopping_toggle', 'shopping_lists_awere_container', array (
          'shoppingLists' => '=data["oro_shopping_list_customer_user_shopping_lists"].getShoppingLists()',
        ) );
        $layoutManipulator->add( 'main_menu_shopping_lists_dropdown_container', 'main_menu_shopping_dropdown', 'shopping_lists_awere_container', array (
          'shoppingLists' => '=data["oro_shopping_list_customer_user_shopping_lists"].getShoppingLists()',
          'shoppingListProducts' => '=data["oro_shopping_list_products"].getLastProductsGroupedByShoppingList(shoppingLists, 3, data["frontend_localization"].getCurrentLocalization())',
        ) );
        $layoutManipulator->add( 'main_menu_shopping_lists_dropdown_item', 'main_menu_shopping_lists_dropdown_container', 'shopping_list_dropdown_item' );
        $layoutManipulator->add( 'main_menu_shopping_lists_dropdown_create', 'header_row_shopping_toggle', 'shopping_list_dropdown_create', array (
          'visible' => '=data["feature"].isFeatureEnabled("shopping_list_create")',
        ) );
        $layoutManipulator->setOption( 'header_row_shopping', 'visible', '=data["feature"].isFeatureEnabled("guest_shopping_list") || context["is_logged_in"]' );
    }
}