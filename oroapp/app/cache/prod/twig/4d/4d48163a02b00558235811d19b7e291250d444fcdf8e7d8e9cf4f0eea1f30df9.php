<?php

/* @OroShoppingList/layouts/blank/imports/product_shopping_lists/product_shopping_lists.yml */
class __TwigTemplate_a19223a54939e5e9a3f7cfed7fcb7111d3b9a03b6d25e804bebfa16d04df1122 extends Twig_Template
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
            themes: 'product_shopping_lists.html.twig'
        - '@addTree':
            items:
                __shopping_lists:
                    blockType: product_shopping_lists
                    options:
                        productShoppingLists: '=data.offsetExists(\"product\") ? data[\"oro_shopping_list_product_units_quantity\"].getByProduct(data[\"oro_product_variant\"].getProductVariantOrProduct(data)) : []'
                        vars:
                            product: '=data.offsetExists(\"product\") ? data[\"oro_product_variant\"].getProductVariantOrProduct(data)'
                __shopping_lists_template:
                    blockType: container
                __shopping_lists_template_preview:
                    blockType: block
                __shopping_lists_popup:
                    blockType: container
                    options:
                        vars:
                            shoppingLists: '=data[\"oro_shopping_list_customer_user_shopping_lists\"].getShoppingLists()'
                            defaultUnitCode: '=data[\"oro_product_single_unit_mode\"].getDefaultUnitCode()'
                            singleUnitMode: '=data[\"oro_product_single_unit_mode\"].isSingleUnitMode()'
                            singleUnitModeCodeVisible: '=data[\"oro_product_single_unit_mode\"].isSingleUnitModeCodeVisible()'
                __shopping_lists_popup_template:
                    blockType: block
            tree:
                __root:
                    __shopping_lists:
                        __shopping_lists_template:
                            __shopping_lists_template_preview: ~
                            __shopping_lists_popup:
                                __shopping_lists_popup_template: ~
";
    }

    public function getTemplateName()
    {
        return "@OroShoppingList/layouts/blank/imports/product_shopping_lists/product_shopping_lists.yml";
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
        return new Twig_Source("", "@OroShoppingList/layouts/blank/imports/product_shopping_lists/product_shopping_lists.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/product_shopping_lists/product_shopping_lists.yml");
    }
}
