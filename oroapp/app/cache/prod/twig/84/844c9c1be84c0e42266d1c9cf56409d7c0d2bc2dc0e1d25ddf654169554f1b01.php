<?php

/* @OroShoppingList/layouts/blank/page/shopping_list_collection.yml */
class __TwigTemplate_579bc513de16acc8df8b33dcdcd415eda3756b52e2656e7bfe54b9eb4af52636 extends Twig_Template
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
            themes: 'shopping_list_collection.html.twig'
        - '@addTree':
            items:
                shoppinglist_collection:
                    blockType: shopping_lists_awere_container
                    options:
                        shoppingLists: '=data[\"oro_shopping_list_customer_user_shopping_lists\"].getShoppingLists()'
                        visible: '=data[\"feature\"].isFeatureEnabled(\"guest_shopping_list\") || context[\"is_logged_in\"]'
            tree:
                wrapper:
                    shoppinglist_collection: ~
";
    }

    public function getTemplateName()
    {
        return "@OroShoppingList/layouts/blank/page/shopping_list_collection.yml";
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
        return new Twig_Source("", "@OroShoppingList/layouts/blank/page/shopping_list_collection.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/page/shopping_list_collection.yml");
    }
}
