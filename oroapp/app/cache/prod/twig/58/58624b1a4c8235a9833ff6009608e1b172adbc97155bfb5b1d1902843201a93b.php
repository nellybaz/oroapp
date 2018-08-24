<?php

/* @OroOrder/layouts/default/oro_order_products_frontend_previously_purchased/product_index.yml */
class __TwigTemplate_92be36644d26840fb7d56b5b01aef6303ccaf790a0b9061808ddf1513d6499b8 extends Twig_Template
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
        - oro_product_grid
        - oro_customer_page

    actions:
        - '@setOption':
            id: product_datagrid
            optionName: grid_name
            optionValue: '=context[\"product_grid_name\"]'

        - '@setOption':
            id: product_datagrid
            optionName: current_row_view
            optionValue: '=data[\"oro_product_datagrid_row_view\"].getThemeByGridName(context[\"product_grid_name\"])'

        - '@setOption':
            id: product_datagrid_toolbar_display_options
            optionName: current_row_view
            optionValue: '=data[\"oro_product_datagrid_row_view\"].getThemeByGridName(context[\"product_grid_name\"])'

        - '@setOption':
            id: product_datagrid_row_product_sticker_new
            optionName: visible
            optionValue: '=data[\"oro_product_datagrid_row_view\"].getThemeByGridName(context[\"product_grid_name\"])!=\"no-image-view\"'

        - '@setOption':
            id: product_datagrid_row_product_sticker_new_text
            optionName: visible
            optionValue: '=data[\"oro_product_datagrid_row_view\"].getThemeByGridName(context[\"product_grid_name\"])==\"no-image-view\"'

        - '@remove':
            id: product_datagrid_cell_recency

        - '@setOption':
            id: page_title
            optionName: defaultValue
            optionValue:
                label: 'oro.order.menu.product.previously_purchased.label'
";
    }

    public function getTemplateName()
    {
        return "@OroOrder/layouts/default/oro_order_products_frontend_previously_purchased/product_index.yml";
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
        return new Twig_Source("", "@OroOrder/layouts/default/oro_order_products_frontend_previously_purchased/product_index.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/OrderBundle/Resources/views/layouts/default/oro_order_products_frontend_previously_purchased/product_index.yml");
    }
}
