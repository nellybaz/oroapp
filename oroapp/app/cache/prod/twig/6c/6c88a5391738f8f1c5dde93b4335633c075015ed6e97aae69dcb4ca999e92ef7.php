<?php

/* @OroShoppingList/layouts/default/oro_shopping_list_frontend_view/shopping_lists_menu.yml */
class __TwigTemplate_66ebf95e6971eb199b2ac461deebfd3bbcf751d5cb1cadfb6aea9cc8fc91201c extends Twig_Template
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
            themes: 'shopping_lists_menu.html.twig'
        - '@addTree':
            items:
                shopping_lists_menu:
                    blockType: shopping_lists_menu
                    options:
                        shoppingLists: '=data[\"oro_shopping_list_customer_user_shopping_lists\"].getShoppingLists()'
                        selectedShoppingList: '=data[\"entity\"]'
                shopping_lists_menu_item:
                    blockType: block
            tree:
                page_sidebar:
                    shopping_lists_menu:
                        shopping_lists_menu_item: ~

    conditions: 'context[\"is_logged_in\"]'
";
    }

    public function getTemplateName()
    {
        return "@OroShoppingList/layouts/default/oro_shopping_list_frontend_view/shopping_lists_menu.yml";
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
        return new Twig_Source("", "@OroShoppingList/layouts/default/oro_shopping_list_frontend_view/shopping_lists_menu.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/default/oro_shopping_list_frontend_view/shopping_lists_menu.yml");
    }
}
