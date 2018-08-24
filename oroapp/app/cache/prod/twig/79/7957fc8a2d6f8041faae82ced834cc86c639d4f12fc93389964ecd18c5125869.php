<?php

/* @OroShoppingList/layouts/blank/oro_shopping_list_frontend_matrix_grid_order/dialog/mobile_matrix_grid_order.yml */
class __TwigTemplate_147e0204954b6ab3760f7aa3e3c8a5bd11287b0c04c49528d61f4e419c773af4 extends Twig_Template
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
        - '@setFormTheme':
            themes: 'mobile_matrix_grid_order_form.html.twig'
        - '@move':
            id: matrix_grid_order_form_actions_submit
            parentId: widget_actions
        - '@move':
            id: widget_actions
            parentId: matrix_grid_order_wrapper
            siblingId: matrix_grid_order_form_end
            prepend: true
        - '@remove':
            id: matrix_grid_order_form_summary
        - '@add':
            id: matrix_grid_order_form_actions_close
            blockType: button
            parentId: widget_actions
            options:
                action: reset
                text:
                    label: 'oro.frontend.shoppinglist.matrix_grid_order.close'
                style: 'btn btn--action btn--size-s'
            prepend: true
        - '@setOption':
            id: matrix_grid_order_form_actions_submit
            optionName: style
            optionValue: 'btn btn--info btn--size-s'
    conditions: 'context[\"is_mobile\"]'
";
    }

    public function getTemplateName()
    {
        return "@OroShoppingList/layouts/blank/oro_shopping_list_frontend_matrix_grid_order/dialog/mobile_matrix_grid_order.yml";
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
        return new Twig_Source("", "@OroShoppingList/layouts/blank/oro_shopping_list_frontend_matrix_grid_order/dialog/mobile_matrix_grid_order.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/oro_shopping_list_frontend_matrix_grid_order/dialog/mobile_matrix_grid_order.yml");
    }
}
