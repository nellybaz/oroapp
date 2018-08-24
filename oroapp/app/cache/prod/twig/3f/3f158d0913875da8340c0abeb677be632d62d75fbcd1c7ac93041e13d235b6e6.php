<?php

/* @OroShoppingList/layouts/blank/oro_product_frontend_product_index/product_index.yml */
class __TwigTemplate_5b98e5e93994d46180baa4abee9b9ec1db8e7623376c73d5767eac83c5da1551 extends Twig_Template
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
        - '@setOption':
            id: product_datagrid_row_product_shopping_lists
            optionName: productShoppingLists
            optionValue: 'undefined'
        - '@setOption':
            id: product_datagrid_row_product_line_item_form_buttons_shopping_list
            optionName: productShoppingLists
            optionValue: 'undefined'
";
    }

    public function getTemplateName()
    {
        return "@OroShoppingList/layouts/blank/oro_product_frontend_product_index/product_index.yml";
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
        return new Twig_Source("", "@OroShoppingList/layouts/blank/oro_product_frontend_product_index/product_index.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/oro_product_frontend_product_index/product_index.yml");
    }
}
