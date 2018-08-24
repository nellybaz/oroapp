<?php

/* @OroShoppingList/layouts/blank/imports/shopping_list_matrix_grid_order/shopping_list_matrix_grid_order.yml */
class __TwigTemplate_fcec3698e9cab5be7b5a7db9d47e7a8b9a204deb446c10f6bdbaaeb336cfdf34 extends Twig_Template
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
    actions:
        - '@setBlockTheme':
            themes: 'shopping_list_matrix_grid_order.html.twig'
        - '@setOption':
            id:  __matrix_total_text
            optionName: text
            optionValue: 'oro.frontend.shoppinglist.matrix_grid_order.subtotal'
        - '@add':
            id: __matrix_form_actions_submit
            blockType: button
            parentId: __matrix_totals
            options:
                action: submit
                text:
                    label: Update
                style: 'btn btn--info btn--size-s shopping-list-line-items__action-button'
";
    }

    public function getTemplateName()
    {
        return "@OroShoppingList/layouts/blank/imports/shopping_list_matrix_grid_order/shopping_list_matrix_grid_order.yml";
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
        return new Twig_Source("", "@OroShoppingList/layouts/blank/imports/shopping_list_matrix_grid_order/shopping_list_matrix_grid_order.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/shopping_list_matrix_grid_order/shopping_list_matrix_grid_order.yml");
    }
}
