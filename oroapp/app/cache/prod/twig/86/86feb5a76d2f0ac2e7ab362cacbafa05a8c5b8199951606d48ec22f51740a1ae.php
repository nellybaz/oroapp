<?php

/* @OroProduct/layouts/blank/oro_product_frontend_product_view/matrix_grid_order.yml */
class __TwigTemplate_76da855fd1d792a4fc60812f670cdcf27cab25d96b1c225890a1483c2d1c0ad5 extends Twig_Template
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
            root: matrix_grid_order_inline
            namespace: matrix_grid_order
        -
            id: line_item_buttons
            root: matrix_grid_order_wrapper
            namespace: matrix_grid_order
    actions:
        - '@add':
            id: matrix_grid_order_inline
            parentId: product_view_content_container
            blockType: container
            options:
                visible: '=data[\"product_view_form_availability_provider\"].isInlineMatrixFormAvailable(data[\"product\"]) and data[\"feature\"].isFeatureEnabled(\"guest_shopping_list\")'
        - '@move':
            id: matrix_grid_order_line_item_buttons
            parentId: matrix_grid_order_totals
            prepend: false
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/blank/oro_product_frontend_product_view/matrix_grid_order.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/blank/oro_product_frontend_product_view/matrix_grid_order.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/oro_product_frontend_product_view/matrix_grid_order.yml");
    }
}
