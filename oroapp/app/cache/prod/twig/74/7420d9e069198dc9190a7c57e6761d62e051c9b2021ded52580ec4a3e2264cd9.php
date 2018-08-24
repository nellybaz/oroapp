<?php

/* @OroShoppingList/layouts/default/oro_catalog_frontend_product_allproducts/product_index.yml */
class __TwigTemplate_7091d61ee89b40e2ca022f444ce32960bb9b80bded0ea72d42e24cba92a9bd26 extends Twig_Template
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
        return "@OroShoppingList/layouts/default/oro_catalog_frontend_product_allproducts/product_index.yml";
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
        return new Twig_Source("", "@OroShoppingList/layouts/default/oro_catalog_frontend_product_allproducts/product_index.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/default/oro_catalog_frontend_product_allproducts/product_index.yml");
    }
}
