<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/page/shopping_list_collection.yml
 */

class __Oro_Layout_Update_8818142c9ebfff58f77b79f96c964006de52468158c56bf12dc9900ed181bfd9 implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/page/shopping_list_collection.html.twig' );
        $layoutManipulator->add( 'shoppinglist_collection', 'wrapper', 'shopping_lists_awere_container', array (
          'shoppingLists' => '=data["oro_shopping_list_customer_user_shopping_lists"].getShoppingLists()',
          'visible' => '=data["feature"].isFeatureEnabled("guest_shopping_list") || context["is_logged_in"]',
        ) );
    }
}