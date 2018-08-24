<?php

/* @OroShoppingList/layouts/blank/oro_shopping_list_frontend_matrix_grid_order/dialog/matrix_grid_order.yml */
class __TwigTemplate_aafa72c906ac9144a27f8790448b4d28c4f1a9f8297a522a0e0e7140e5ce0294 extends Twig_Template
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
            root: widget_content
            namespace: matrix_grid_order
    actions:
        - '@setOption':
            id: matrix_grid_order_form_start
            optionName: attr.data-empty-matrix-allowed
            optionValue: '=data[\"system_config_provider\"].getValue(\"oro_product.matrix_form_allow_empty\") || data[\"hasLineItems\"]'
        - '@setOption':
            id: matrix_grid_order_wrapper
            optionName: visible
            optionValue: true
        - '@add':
            id: matrix_grid_order_form_actions_submit
            blockType: button
            parentId: matrix_grid_order_totals
            options:
                action: submit
                text:
                    label: '=data[\"hasLineItems\"] ? \"oro.shoppinglist.actions.update_shopping_list\" : \"oro.shoppinglist.actions.add_to_shopping_list\"'
                    parameters:
                        '";
        // line 25
        echo twig_escape_filter($this->env, ($context["shoppingList"] ?? null), "html", null, true);
        echo "': '=data[\"shoppingList\"] ? data[\"shoppingList\"].getLabel() : data[\"translator\"].getTrans(\"oro.shoppinglist.entity_label\")'
                style: auto
        - '@move':
            id: widget_actions
            parentId: matrix_grid_order_wrapper
            siblingId: matrix_grid_order_form_end
            prepend: true
";
    }

    public function getTemplateName()
    {
        return "@OroShoppingList/layouts/blank/oro_shopping_list_frontend_matrix_grid_order/dialog/matrix_grid_order.yml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 25,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@OroShoppingList/layouts/blank/oro_shopping_list_frontend_matrix_grid_order/dialog/matrix_grid_order.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/oro_shopping_list_frontend_matrix_grid_order/dialog/matrix_grid_order.yml");
    }
}
