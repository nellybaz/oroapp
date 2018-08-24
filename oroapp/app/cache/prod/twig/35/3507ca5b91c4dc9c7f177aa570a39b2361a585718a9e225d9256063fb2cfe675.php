<?php

/* @OroShoppingList/layouts/blank/imports/matrix_grid_order/matrix_grid_order.yml */
class __TwigTemplate_67a1fd9d1f9db6b12d7823ee2aea9f8c39a24971d3277cae785eb502c7b5c3b1 extends Twig_Template
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
    imports:
        -
            id: oro_product_totals
            root: __form_summary
    actions:
        - '@setBlockTheme':
            themes: 'matrix_grid_order.html.twig'
        - '@setFormTheme':
            themes: 'matrix_grid_order_form.html.twig'
        - '@add':
            id: __matrix_form_clear_button
            blockType: button
            parentId: __totals
            prepend: true
            options:
                icon: times
                style: 'btn btn--link clear-button'
                attr:
                    title: oro.frontend.shoppinglist.matrix_grid_order.clear.tooltip
                    data-role: 'clear'
                text:
                    label: oro.frontend.shoppinglist.matrix_grid_order.clear.text
        - '@addTree':
            items:
                __wrapper:
                    blockType: matrix_grid_order
                    options:
                        visible: '=data.offsetExists(\"product\") ? data[\"product_view_form_availability_provider\"].isMatrixFormAvailable(product) : true'
                        product: '=data.offsetExists(\"product\") ? data[\"product\"]'
                        shoppingList: '=data.offsetExists(\"shoppingList\") ? data[\"shoppingList\"] : data[\"oro_shopping_list_customer_user_shopping_lists\"].getCurrent()'
                        form: '=data.offsetExists(\"product\") ? data[\"oro_shopping_list_matrix_order_form\"].getMatrixOrderFormView(product, shoppingList)'
                        prices: '=data.offsetExists(\"product\") ? data[\"frontend_product_prices\"].getVariantsPricesByProduct(product)'
                        totals:
                            quantity: '=data.offsetExists(\"product\") ? data[\"oro_shopping_list_matrix_grid_order\"].getTotalQuantity(product)'
                            price: '=data.offsetExists(\"product\") ? data[\"oro_shopping_list_matrix_grid_order\"].getTotalPriceFormatted(product)'
                __form_start:
                    blockType: form_start
                __form_fields:
                    blockType: form_fields
                __form_end:
                    blockType: form_end
                __form_summary:
                    blockType: container
            tree:
                __root:
                    __wrapper:
                        __form_start: ~
                        __form_fields: ~
                        __form_summary: ~
                        __form_end: ~
";
    }

    public function getTemplateName()
    {
        return "@OroShoppingList/layouts/blank/imports/matrix_grid_order/matrix_grid_order.yml";
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
        return new Twig_Source("", "@OroShoppingList/layouts/blank/imports/matrix_grid_order/matrix_grid_order.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/matrix_grid_order/matrix_grid_order.yml");
    }
}
