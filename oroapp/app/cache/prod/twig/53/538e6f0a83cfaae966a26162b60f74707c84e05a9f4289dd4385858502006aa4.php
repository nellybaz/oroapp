<?php

/* @OroShoppingList/layouts/default/page/shopping_list_widget.yml */
class __TwigTemplate_2b0833fa9923aa68402319f67c25ddb1f7375734c2ee9291d116cd84e6b99954 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "layout:
    actions:
        - '@setBlockTheme':
            themes: 'shopping_list_widget.html.twig'
        - '@addTree':
            items:
                header_row_shopping_trigger:
                    blockType: container
                    options:
                        visible: '=data[\"feature\"].isFeatureEnabled(\"guest_shopping_list\") || context[\"is_logged_in\"]'
                header_row_shopping_toggle:
                     blockType: container
                main_menu_shopping_lists_wrapper:
                    blockType: container
                main_menu_shopping_lists_dropdown:
                    blockType: shopping_lists_awere_container
                    options:
                        shoppingLists: '=data[\"oro_shopping_list_customer_user_shopping_lists\"].getShoppingLists()'
                main_menu_shopping_dropdown:
                    blockType: shopping_lists_awere_container
                    options:
                        shoppingLists: '=data[\"oro_shopping_list_customer_user_shopping_lists\"].getShoppingLists()'
                main_menu_shopping_lists_dropdown_container:
                    blockType: shopping_lists_awere_container
                    options:
                        shoppingLists: '=data[\"oro_shopping_list_customer_user_shopping_lists\"].getShoppingLists()'
                        shoppingListProducts: '=data[\"oro_shopping_list_products\"].getLastProductsGroupedByShoppingList(shoppingLists, 3, data[\"frontend_localization\"].getCurrentLocalization())'
                main_menu_shopping_lists_dropdown_item:
                    blockType: shopping_list_dropdown_item
                main_menu_shopping_lists_dropdown_create:
                    blockType: shopping_list_dropdown_create
                    options:
                        visible: '=data[\"feature\"].isFeatureEnabled(\"shopping_list_create\")'

            tree:
                header_row_shopping:
                    header_row_shopping_trigger:
                        main_menu_shopping_lists_wrapper:
                            main_menu_shopping_lists_dropdown: ~
                    header_row_shopping_toggle:
                        main_menu_shopping_dropdown:
                            main_menu_shopping_lists_dropdown_container:
                                main_menu_shopping_lists_dropdown_item: ~
                        main_menu_shopping_lists_dropdown_create: ~

        - '@setOption':
            id: header_row_shopping
            optionName: visible
            optionValue: '=data[\"feature\"].isFeatureEnabled(\"guest_shopping_list\") || context[\"is_logged_in\"]'
";
    }

    public function getTemplateName()
    {
        return "@OroShoppingList/layouts/default/page/shopping_list_widget.yml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@OroShoppingList/layouts/default/page/shopping_list_widget.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/default/page/shopping_list_widget.yml");
    }
}
