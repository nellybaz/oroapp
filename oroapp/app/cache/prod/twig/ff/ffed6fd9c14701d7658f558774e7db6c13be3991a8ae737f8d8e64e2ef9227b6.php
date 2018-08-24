<?php

/* @OroShoppingList/layouts/blank/imports/shopping_list_buttons/shopping_list_buttons.yml */
class __TwigTemplate_8eeef8028372a9a6800756f2905a93d26b9cc6aef04fd84645c6f105a2d76afa extends Twig_Template
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
            themes: 'shopping_list_buttons.html.twig'
        - '@add':
            id: __line_item_form_buttons_shopping_list
            blockType: add_to_shopping_list_form_button
            parentId: __root
            siblingId: ~
            prepend: true
            options:
                visible: '=data[\"acl\"].isGranted(\"oro_shopping_list_frontend_update\") || data[\"feature\"].isFeatureEnabled(\"guest_shopping_list\")'
                shoppingLists:  '=data[\"oro_shopping_list_customer_user_shopping_lists\"].getShoppingLists()'
                productShoppingLists: '=data.offsetExists(\"product\") ? data[\"oro_shopping_list_product_units_quantity\"].getByProduct(data[\"oro_product_variant\"].getProductVariantOrProduct(data)) : []'
                vars:
                    matrixFormType: '=data.offsetExists(\"product\") ? data[\"product_view_form_availability_provider\"].getAvailableMatrixFormType(data[\"product\"]) : \"none\"'
                    product: '=data.offsetExists(\"product\") ? data[\"oro_product_variant\"].getProductVariantOrProduct(data)'
";
    }

    public function getTemplateName()
    {
        return "@OroShoppingList/layouts/blank/imports/shopping_list_buttons/shopping_list_buttons.yml";
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
        return new Twig_Source("", "@OroShoppingList/layouts/blank/imports/shopping_list_buttons/shopping_list_buttons.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/shopping_list_buttons/shopping_list_buttons.yml");
    }
}
