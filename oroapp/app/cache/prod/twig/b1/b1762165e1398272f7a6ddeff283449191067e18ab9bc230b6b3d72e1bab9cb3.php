<?php

/* @OroShoppingList/layouts/blank/imports/oro_product_list/products_shopping_lists.yml */
class __TwigTemplate_02c56a080e902fb048f545f99ee119b81babfcdf1a83a413f1ed01a4e4b95d70 extends Twig_Template
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
            id: __products
            optionName: items_data.productShoppingLists
            optionValue: '=data[\"oro_shopping_list_product_units_quantity\"].getByProducts(items)'

";
    }

    public function getTemplateName()
    {
        return "@OroShoppingList/layouts/blank/imports/oro_product_list/products_shopping_lists.yml";
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
        return new Twig_Source("", "@OroShoppingList/layouts/blank/imports/oro_product_list/products_shopping_lists.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/oro_product_list/products_shopping_lists.yml");
    }
}
