<?php

/* @OroShoppingList/layouts/blank/imports/product_list_matrix_grid_order/product_list_matrix_grid_order.yml */
class __TwigTemplate_31bb54db7e441c9334280e245011d8d6ac7c84477339d90b9f0d253451d4fff8 extends Twig_Template
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
            id: matrix_grid_order
            root: __root
            namespace: matrix
        -
            id: line_item_buttons
            root: __matrix_form_summary
            namespace: matrix
    actions:
        - '@setBlockTheme':
            themes: 'product_list_matrix_grid_order.html.twig'
        - '@move':
            id: __matrix_line_item_buttons
            parentId: __matrix_totals
            prepend: false

        - '@setOption':
            id: __matrix_wrapper
            optionName: form
            optionValue: '=data[\"oro_shopping_list_matrix_order_form\"].getMatrixOrderFormView(product, shoppingList)'
        - '@setOption':
            id: __matrix_wrapper
            optionName: visible
            optionValue: '=data[\"feature\"].isFeatureEnabled(\"guest_shopping_list\") || context[\"is_logged_in\"]'
        - '@setOption':
            id: __matrix_line_item_form_buttons_shopping_list
            optionName: productShoppingLists
            optionValue: 'undefined'

";
    }

    public function getTemplateName()
    {
        return "@OroShoppingList/layouts/blank/imports/product_list_matrix_grid_order/product_list_matrix_grid_order.yml";
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
        return new Twig_Source("", "@OroShoppingList/layouts/blank/imports/product_list_matrix_grid_order/product_list_matrix_grid_order.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/product_list_matrix_grid_order/product_list_matrix_grid_order.yml");
    }
}
